<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DepartmentFeaturedLink;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminFeaturedLinkController extends Controller
{
    public function index(Request $request)
    {
        $query = DepartmentFeaturedLink::with('department')->latest();
        if ($request->filled('department_id')) {
            $query->where('department_id', $request->department_id);
        }
        $links = $query->paginate(20);
        $departments = Department::where('is_active', true)->orderBy('department_name')->get();

        return view('admin.featured-links.index', compact('links', 'departments'));
    }

    public function create(Request $request)
    {
        $departments = Department::where('is_active', true)->orderBy('department_name')->get();
        $departmentId = $request->department_id;
        return view('admin.featured-links.create', compact('departments', 'departmentId'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'department_id' => 'required|exists:departments,id',
            'title'         => 'required|string|max:255',
            'url'           => 'nullable|string|max:500',
            'icon'          => 'nullable|string|max:100',
            'image'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:1024',
            'sort_order'    => 'nullable|integer',
            'is_active'     => 'nullable|boolean',
        ]);

        $validated['is_active'] = $request->boolean('is_active', false);
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('featured-links', 'public');
        }

        DepartmentFeaturedLink::create($validated);

        return redirect()->route('admin.featured-links.index', ['department_id' => $validated['department_id']])
            ->with('success', 'Featured link created!');
    }

    public function edit(DepartmentFeaturedLink $featuredLink)
    {
        $departments = Department::where('is_active', true)->orderBy('department_name')->get();
        return view('admin.featured-links.edit', compact('featuredLink', 'departments'));
    }

    public function update(Request $request, DepartmentFeaturedLink $featuredLink)
    {
        $validated = $request->validate([
            'department_id' => 'required|exists:departments,id',
            'title'         => 'required|string|max:255',
            'url'           => 'nullable|string|max:500',
            'icon'          => 'nullable|string|max:100',
            'image'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:1024',
            'sort_order'    => 'nullable|integer',
            'is_active'     => 'nullable|boolean',
        ]);

        $validated['is_active'] = $request->boolean('is_active', false);

        if ($request->hasFile('image')) {
            if ($featuredLink->image) {
                Storage::disk('public')->delete($featuredLink->image);
            }
            $validated['image'] = $request->file('image')->store('featured-links', 'public');
        }

        $featuredLink->update($validated);

        return redirect()->route('admin.featured-links.index', ['department_id' => $validated['department_id']])
            ->with('success', 'Featured link updated!');
    }

    public function destroy(DepartmentFeaturedLink $featuredLink)
    {
        $deptId = $featuredLink->department_id;
        if ($featuredLink->image) {
            Storage::disk('public')->delete($featuredLink->image);
        }
        $featuredLink->delete();

        return redirect()->route('admin.featured-links.index', ['department_id' => $deptId])
            ->with('success', 'Featured link deleted.');
    }

    // ── Bulk Upload ──────────────────────────────
    public function downloadTemplate()
    {
        $headers = ['department_name', 'title', 'url', 'icon', 'sort_order', 'is_active'];
        $callback = function () use ($headers): void {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, $headers);
            fputcsv($handle, [
                'Department of Biology',
                'Staff List',
                '',
                'bx bx-user',
                '1',
                'true',
            ]);
            fputcsv($handle, [
                'Department of Biology',
                'Admission Requirement',
                '',
                'bx bx-file',
                '2',
                'true',
            ]);
            fclose($handle);
        };
        return response()->stream($callback, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="featured-links-template.csv"',
        ]);
    }

    public function import(Request $request)
    {
        $request->validate([
            'import_file' => ['required', 'file', 'mimes:csv,json,txt', 'max:2048'],
        ]);

        $file = $request->file('import_file');
        $contents = $file->get();
        $ext = strtolower($file->getClientOriginalExtension());

        if ($ext === 'json') {
            $rows = json_decode($contents, true);
            $rows = array_is_list($rows) ? $rows : [$rows];
        } else {
            $rows = [];
            $handle = fopen('php://temp', 'r+');
            fwrite($handle, $contents);
            rewind($handle);
            $header = fgetcsv($handle);
            while (($row = fgetcsv($handle)) !== false) {
                if (!empty(array_filter($row))) {
                    $rows[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }

        $imported = 0;
        foreach ($rows as $row) {
            $deptName = trim($row['department_name'] ?? $row['department'] ?? '');
            $title = trim($row['title'] ?? '');
            if (!$deptName || !$title) continue;

            $dept = Department::where('department_name', 'LIKE', "%{$deptName}%")->first();
            if (!$dept) continue;

            DepartmentFeaturedLink::updateOrCreate(
                ['department_id' => $dept->id, 'title' => $title],
                [
                    'url' => $row['url'] ?? "/departments/{$dept->slug}/page/" . Str::slug($title),
                    'icon' => $row['icon'] ?? null,
                    'sort_order' => (int) ($row['sort_order'] ?? 0),
                    'is_active' => filter_var($row['is_active'] ?? true, FILTER_VALIDATE_BOOLEAN),
                ]
            );
            $imported++;
        }

        return redirect()->route('admin.featured-links.index')
            ->with('success', "Imported {$imported} featured links successfully.");
    }

    public function bulkDelete(Request $request)
    {
        $request->validate(['ids' => 'required|array', 'ids.*' => 'integer']);
        DepartmentFeaturedLink::whereIn('id', $request->ids)->delete();
        return back()->with('success', 'Selected links deleted.');
    }

    // ── Content Bulk Upload (Admission, Duration, etc.) ──────────
    public function downloadContentTemplate()
    {
        $headers = ['department_name', 'link_title', 'content', 'body'];
        $callback = function () use ($headers): void {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, $headers);
            fputcsv($handle, [
                'Department of Biology',
                'Admission Requirement',
                'Admission into the Department of Biology requires 5 O-Level credits...',
                '<h4>Admission Requirements</h4><p> applicants must have...</p>',
            ]);
            fputcsv($handle, [
                'Department of Biology',
                'Duration of Programme',
                'The B.Sc. Biology programme runs for 4 years (8 semesters).',
                '<h4>Programme Duration</h4><p>The programme is structured into...</p>',
            ]);
            fclose($handle);
        };
        return response()->stream($callback, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="featured-link-content-template.csv"',
        ]);
    }

    public function importContent(Request $request)
    {
        $request->validate([
            'import_file' => ['required', 'file', 'mimes:csv,json,txt', 'max:4096'],
        ]);

        $file = $request->file('import_file');
        $contents = $file->get();
        $ext = strtolower($file->getClientOriginalExtension());

        if ($ext === 'json') {
            $rows = json_decode($contents, true);
            $rows = array_is_list($rows) ? $rows : [$rows];
        } else {
            $rows = [];
            $handle = fopen('php://temp', 'r+');
            fwrite($handle, $contents);
            rewind($handle);
            $header = fgetcsv($handle);
            while (($row = fgetcsv($handle)) !== false) {
                if (!empty(array_filter($row))) {
                    $rows[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }

        $imported = 0;
        $skipped = 0;
        foreach ($rows as $row) {
            $deptName = trim($row['department_name'] ?? $row['department'] ?? '');
            $linkTitle = trim($row['link_title'] ?? $row['title'] ?? '');
            $content = $row['content'] ?? null;
            $body = $row['body'] ?? null;

            if (!$deptName || !$linkTitle) {
                $skipped++;
                continue;
            }

            $dept = Department::where('department_name', 'LIKE', "%{$deptName}%")->first();
            if (!$dept) {
                $skipped++;
                continue;
            }

            $link = DepartmentFeaturedLink::where('department_id', $dept->id)
                ->where('title', 'LIKE', "%{$linkTitle}%")
                ->first();

            if (!$link) {
                $skipped++;
                continue;
            }

            $link->update([
                'content' => $content,
                'body' => $body,
            ]);
            $imported++;
        }

        $msg = "Updated {$imported} featured link content(s).";
        if ($skipped > 0) {
            $msg .= " Skipped {$skipped} row(s) (department or link not found).";
        }

        return redirect()->route('admin.featured-links.index')
            ->with('success', $msg);
    }
}
