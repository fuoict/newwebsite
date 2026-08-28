<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\College;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminDepartmentController extends Controller
{
    public function index(Request $request)
    {
        $query = Department::with('college');
        if ($request->filled('college_id')) {
            $query->where('college_id', $request->college_id);
        }
        $departments = $query->orderBy('department_name')->paginate(20);
        $colleges = College::orderBy('college_name')->get();
        return view('admin.departments.index', compact('departments', 'colleges'));
    }

    public function create()
    {
        $colleges = College::orderBy('college_name')->get();
        return view('admin.departments.create', compact('colleges'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'department_name'     => 'required|string|max:255',
            'department_code'     => 'nullable|string|max:20|unique:departments,department_code',
            'college_id'          => 'required|exists:colleges,id',
            'slug'                => 'nullable|string|max:100|unique:departments,slug',
            'hod_name'            => 'nullable|string|max:255',
            'hod_email'           => 'nullable|email|max:255',
            'hod_phone'           => 'nullable|string|max:30',
            'hod_image'           => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'department_image'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'department_title'    => 'nullable|string|max:255',
            'department_description' => 'nullable|string',
            'about_department'    => 'nullable|string',
            'mission'             => 'nullable|string',
            'vision'              => 'nullable|string',
            'is_active'           => 'nullable|boolean',
        ]);

        $data = collect($validated)->except(['hod_image', 'department_image'])->toArray();
        $data['slug'] = $validated['slug'] ?: Str::slug($validated['department_name']);
        $data['is_active'] = $request->boolean('is_active', false);

        if ($request->hasFile('hod_image') && $request->file('hod_image')->isValid()) {
            $data['hod_image'] = $request->file('hod_image')->store('departments', 'public');
        }
        if ($request->hasFile('department_image') && $request->file('department_image')->isValid()) {
            $data['department_image'] = $request->file('department_image')->store('departments', 'public');
        }

        Department::create($data);
        return redirect()->route('admin.departments.index')->with('success', 'Department created!');
    }

    public function edit(Department $department)
    {
        $colleges = College::orderBy('college_name')->get();
        return view('admin.departments.edit', compact('department', 'colleges'));
    }

    public function update(Request $request, Department $department)
    {
        $validated = $request->validate([
            'department_name'     => 'required|string|max:255',
            'department_code'     => 'nullable|string|max:20|unique:departments,department_code,' . $department->id,
            'college_id'          => 'required|exists:colleges,id',
            'slug'                => 'nullable|string|max:100|unique:departments,slug,' . $department->id,
            'hod_name'            => 'nullable|string|max:255',
            'hod_email'           => 'nullable|email|max:255',
            'hod_phone'           => 'nullable|string|max:30',
            'hod_image'           => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'department_image'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'department_title'    => 'nullable|string|max:255',
            'department_description' => 'nullable|string',
            'about_department'    => 'nullable|string',
            'mission'             => 'nullable|string',
            'vision'              => 'nullable|string',
            'is_active'           => 'nullable|boolean',
        ]);

        $data = collect($validated)->except(['hod_image', 'department_image'])->toArray();
        $data['is_active'] = $request->boolean('is_active', false);

        if ($request->hasFile('hod_image') && $request->file('hod_image')->isValid()) {
            if ($department->hod_image) Storage::disk('public')->delete($department->hod_image);
            $data['hod_image'] = $request->file('hod_image')->store('departments', 'public');
        }
        if ($request->hasFile('department_image') && $request->file('department_image')->isValid()) {
            if ($department->department_image) Storage::disk('public')->delete($department->department_image);
            $data['department_image'] = $request->file('department_image')->store('departments', 'public');
        }

        $department->update($data);
        return redirect()->route('admin.departments.index')->with('success', 'Department updated!');
    }

    public function destroy(Department $department)
    {
        if ($department->hod_image) Storage::disk('public')->delete($department->hod_image);
        if ($department->department_image) Storage::disk('public')->delete($department->department_image);
        $department->delete();
        return redirect()->route('admin.departments.index')->with('success', 'Department deleted.');
    }

    public function downloadTemplate()
    {
        $headers = ['department_name','department_code','college_name','slug','hod_name','hod_email','hod_phone','department_title','department_description','about_department','mission','vision','is_active'];
        $callback = function () use ($headers): void {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, $headers);
            fputcsv($handle, ['Department of Computer Science','CSS','College of Computing','dept-of-cs','Dr. A. B. Smith','cs@fuo.edu.ng','+234-XXX','Welcome to CS','Description...','About...','Mission...','Vision...','true']);
            fclose($handle);
        };
        return response()->stream($callback, 200, ['Content-Type' => 'text/csv', 'Content-Disposition' => 'attachment; filename="departments-template.csv"']);
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
            $name = trim($row['department_name'] ?? ''); if (!$name) continue;
            $collegeName = trim($row['college_name'] ?? '');
            $college = College::where('college_name', 'LIKE', "%{$collegeName}%")->first();
            if (!$college) continue;
            Department::updateOrCreate(['slug' => Str::slug($name)], [
                'department_code' => $row['department_code'] ?? null, 'college_id' => $college->id,
                'hod_name' => $row['hod_name'] ?? null, 'hod_email' => $row['hod_email'] ?? null,
                'hod_phone' => $row['hod_phone'] ?? null, 'department_title' => $row['department_title'] ?? null,
                'department_description' => $row['department_description'] ?? null,
                'about_department' => $row['about_department'] ?? null,
                'mission' => $row['mission'] ?? null, 'vision' => $row['vision'] ?? null,
                'is_active' => filter_var($row['is_active'] ?? true, FILTER_VALIDATE_BOOLEAN),
            ]);
            $imported++;
        }
        return redirect()->route('admin.departments.index')->with('success', "Imported {$imported} departments.");
    }
}
