<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminUnitController extends Controller
{
    private function getLecturers()
    {
        return Lecturer::published()->orderBy('name')->get();
    }

    public function index()
    {
        $units = Unit::with('lecturer')->orderBy('sort_order')->orderBy('name')->paginate(20);
        return view('admin.units.index', compact('units'));
    }

    public function create()
    {
        $lecturers = $this->getLecturers();
        return view('admin.units.create', compact('lecturers'));
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
            $data['image'] = $request->file('image')->store('units', 'public');
        }
        if ($request->hasFile('director_image') && $request->file('director_image')->isValid()) {
            $data['director_image'] = $request->file('director_image')->store('units', 'public');
        }

        Unit::create($data);
        return redirect()->route('admin.units.index')->with('success', 'Unit created!');
    }

    public function edit(Unit $unit)
    {
        $lecturers = $this->getLecturers();
        return view('admin.units.edit', compact('unit', 'lecturers'));
    }

    public function update(Request $request, Unit $unit)
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
            if ($unit->image) Storage::disk('public')->delete($unit->image);
            $data['image'] = $request->file('image')->store('units', 'public');
        }
        if ($request->hasFile('director_image') && $request->file('director_image')->isValid()) {
            if ($unit->director_image) Storage::disk('public')->delete($unit->director_image);
            $data['director_image'] = $request->file('director_image')->store('units', 'public');
        }

        $unit->update($data);
        return redirect()->route('admin.units.index')->with('success', 'Unit updated!');
    }

    public function destroy(Unit $unit)
    {
        if ($unit->image) Storage::disk('public')->delete($unit->image);
        if ($unit->director_image) Storage::disk('public')->delete($unit->director_image);
        $unit->delete();
        return redirect()->route('admin.units.index')->with('success', 'Unit deleted.');
    }

    public function downloadTemplate()
    {
        $headers = ['name', 'short_name', 'director_name', 'director_title', 'email', 'phone', 'intro', 'description', 'mission', 'vision', 'objectives', 'sort_order', 'is_active'];
        $callback = function () use ($headers): void {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, $headers);
            fputcsv($handle, ['Academic Planning Unit', 'APU', 'Dr. A. B. Smith', 'Director', 'apu@fuo.edu.ng', '+234-XXX', 'Welcome to APU...', 'Full description...', 'Mission...', 'Vision...', '1. Objective 1', '1', 'true']);
            fclose($handle);
        };
        return response()->stream($callback, 200, ['Content-Type' => 'text/csv', 'Content-Disposition' => 'attachment; filename="units-template.csv"']);
    }

    public function import(Request $request)
    {
        $request->validate(['import_file' => ['required', 'file', 'mimes:csv,json,txt', 'max:4096']]);
        $file = $request->file('import_file');
        $contents = $file->get();
        $ext = strtolower($file->getClientOriginalExtension());

        if ($ext === 'json') { $rows = json_decode($contents, true); $rows = array_is_list($rows) ? $rows : [$rows]; }
        else {
            $rows = []; $handle = fopen('php://temp', 'r+'); fwrite($handle, $contents); rewind($handle);
            $header = fgetcsv($handle);
            while (($row = fgetcsv($handle)) !== false) { if (!empty(array_filter($row))) $rows[] = array_combine($header, $row); }
            fclose($handle);
        }

        $imported = 0;
        foreach ($rows as $row) {
            $name = trim($row['name'] ?? ''); if (!$name) continue;
            Unit::updateOrCreate(['slug' => Str::slug($name)], [
                'short_name' => $row['short_name'] ?? null, 'director_name' => $row['director_name'] ?? null,
                'director_title' => $row['director_title'] ?? null, 'email' => $row['email'] ?? null,
                'phone' => $row['phone'] ?? null, 'intro' => $row['intro'] ?? null,
                'description' => $row['description'] ?? null, 'mission' => $row['mission'] ?? null,
                'vision' => $row['vision'] ?? null, 'objectives' => $row['objectives'] ?? null,
                'sort_order' => (int) ($row['sort_order'] ?? 0),
                'is_active' => filter_var($row['is_active'] ?? true, FILTER_VALIDATE_BOOLEAN),
            ]);
            $imported++;
        }
        return redirect()->route('admin.units.index')->with('success', "Imported {$imported} units.");
    }

    public function bulkDelete(Request $request)
    {
        $request->validate(['ids' => 'required|array', 'ids.*' => 'integer']);
        Unit::whereIn('id', $request->ids)->delete();
        return back()->with('success', 'Selected units deleted.');
    }
}
