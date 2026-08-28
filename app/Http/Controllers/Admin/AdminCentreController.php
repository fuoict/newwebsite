<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Centre;
use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminCentreController extends Controller
{
    private function getLecturers()
    {
        return Lecturer::published()->orderBy('name')->get();
    }

    public function index()
    {
        $centres = Centre::with('lecturer')->orderBy('sort_order')->orderBy('name')->paginate(20);
        return view('admin.centres.index', compact('centres'));
    }

    public function create()
    {
        $lecturers = $this->getLecturers();
        return view('admin.centres.create', compact('lecturers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'            => 'required|string|max:255',
            'short_name'      => 'nullable|string|max:100',
            'lecturer_id'     => 'nullable|exists:lecturers,id',
            'director_name'   => 'nullable|string|max:255',
            'director_title'  => 'nullable|string|max:255',
            'email'           => 'nullable|email|max:255',
            'phone'           => 'nullable|string|max:30',
            'intro'           => 'nullable|string|max:1000',
            'description'     => 'nullable|string',
            'mission'         => 'nullable|string',
            'vision'          => 'nullable|string',
            'objectives'      => 'nullable|string',
            'director_image'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image'           => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'sort_order'      => 'nullable|integer',
            'is_active'       => 'nullable|boolean',
        ]);

        $data = collect($validated)->except(['image', 'director_image'])->toArray();
        $data['slug'] = Str::slug($validated['name']) . '-' . time();
        $data['is_active'] = $request->boolean('is_active', false);
        $data['sort_order'] = $validated['sort_order'] ?? 0;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store('centres', 'public');
        }
        if ($request->hasFile('director_image') && $request->file('director_image')->isValid()) {
            $data['director_image'] = $request->file('director_image')->store('centres', 'public');
        }

        Centre::create($data);

        return redirect()->route('admin.centres.index')
            ->with('success', 'Centre created successfully!');
    }

    public function edit(Centre $centre)
    {
        $lecturers = $this->getLecturers();
        return view('admin.centres.edit', compact('centre', 'lecturers'));
    }

    public function update(Request $request, Centre $centre)
    {
        $validated = $request->validate([
            'name'            => 'required|string|max:255',
            'short_name'      => 'nullable|string|max:100',
            'lecturer_id'     => 'nullable|exists:lecturers,id',
            'director_name'   => 'nullable|string|max:255',
            'director_title'  => 'nullable|string|max:255',
            'email'           => 'nullable|email|max:255',
            'phone'           => 'nullable|string|max:30',
            'intro'           => 'nullable|string|max:1000',
            'description'     => 'nullable|string',
            'mission'         => 'nullable|string',
            'vision'          => 'nullable|string',
            'objectives'      => 'nullable|string',
            'director_image'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image'           => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'sort_order'      => 'nullable|integer',
            'is_active'       => 'nullable|boolean',
        ]);

        $data = collect($validated)->except(['image', 'director_image'])->toArray();
        $data['is_active'] = $request->boolean('is_active', false);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            if ($centre->image) Storage::disk('public')->delete($centre->image);
            $data['image'] = $request->file('image')->store('centres', 'public');
        }
        if ($request->hasFile('director_image') && $request->file('director_image')->isValid()) {
            if ($centre->director_image) Storage::disk('public')->delete($centre->director_image);
            $data['director_image'] = $request->file('director_image')->store('centres', 'public');
        }

        $centre->update($data);

        return redirect()->route('admin.centres.index')
            ->with('success', 'Centre updated!');
    }

    public function destroy(Centre $centre)
    {
        if ($centre->image) Storage::disk('public')->delete($centre->image);
        if ($centre->director_image) Storage::disk('public')->delete($centre->director_image);
        $centre->delete();
        return redirect()->route('admin.centres.index')->with('success', 'Centre deleted.');
    }

    // ── Bulk Upload ──────────────────────────────
    public function downloadTemplate()
    {
        $headers = ['name', 'short_name', 'director_name', 'director_title', 'email', 'phone', 'intro', 'description', 'mission', 'vision', 'objectives', 'sort_order', 'is_active'];
        $callback = function () use ($headers): void {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, $headers);
            fputcsv($handle, [
                'Centre for Research, Innovation and Technology',
                'FUCRIT',
                'Dr. A. B. Smith',
                'Director',
                'fucrit@fuo.edu.ng',
                '+234-XXX-XXX-XXXX',
                'Welcome to FUCRIT...',
                'Full description here...',
                'Our mission is...',
                'Our vision is...',
                '1. Research 2. Innovation',
                '1',
                'true',
            ]);
            fclose($handle);
        };
        return response()->stream($callback, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="centres-template.csv"',
        ]);
    }

    public function import(Request $request)
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
        foreach ($rows as $row) {
            $name = trim($row['name'] ?? '');
            if (!$name) continue;

            Centre::updateOrCreate(
                ['slug' => Str::slug($name)],
                [
                    'short_name'     => $row['short_name'] ?? null,
                    'director_name'  => $row['director_name'] ?? null,
                    'director_title' => $row['director_title'] ?? null,
                    'email'          => $row['email'] ?? null,
                    'phone'          => $row['phone'] ?? null,
                    'intro'          => $row['intro'] ?? null,
                    'description'    => $row['description'] ?? null,
                    'mission'        => $row['mission'] ?? null,
                    'vision'         => $row['vision'] ?? null,
                    'objectives'     => $row['objectives'] ?? null,
                    'sort_order'     => (int) ($row['sort_order'] ?? 0),
                    'is_active'      => filter_var($row['is_active'] ?? true, FILTER_VALIDATE_BOOLEAN),
                ]
            );
            $imported++;
        }

        return redirect()->route('admin.centres.index')
            ->with('success', "Imported {$imported} centres successfully.");
    }

    public function bulkDelete(Request $request)
    {
        $request->validate(['ids' => 'required|array', 'ids.*' => 'integer']);
        Centre::whereIn('id', $request->ids)->delete();
        return back()->with('success', 'Selected centres deleted.');
    }
}
