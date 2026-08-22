<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseSynopsis;
use App\Models\Department;
use Illuminate\Http\Request;

class AdminCourseSynopsisController extends Controller
{
    public function index(Request $request)
    {
        $query = CourseSynopsis::with('department')->orderBy('level')->orderBy('course_code');
        if ($request->filled('department_id')) {
            $query->where('department_id', $request->department_id);
        }
        if ($request->filled('level')) {
            $query->where('level', $request->level);
        }
        $courses = $query->paginate(20);
        $departments = Department::where('is_active', true)->orderBy('department_name')->get();

        return view('admin.course-synopsis.index', compact('courses', 'departments'));
    }

    public function create(Request $request)
    {
        $departments = Department::where('is_active', true)->orderBy('department_name')->get();
        $departmentId = $request->department_id;
        $types = CourseSynopsis::types();
        return view('admin.course-synopsis.create', compact('departments', 'departmentId', 'types'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'department_id' => 'required|exists:departments,id',
            'course_code'   => 'required|string|max:20',
            'course_title'  => 'required|string|max:255',
            'description'   => 'nullable|string',
            'unit'          => 'required|integer|min:0|max:10',
            'level'         => 'required|integer|in:100,200,300,400,500,600',
            'type'          => 'required|in:core,elective,required',
            'is_published'  => 'nullable|boolean',
        ]);

        $validated['is_published'] = $request->boolean('is_published', true);

        CourseSynopsis::create($validated);

        return redirect()->route('admin.course-synopsis.index', ['department_id' => $validated['department_id']])
            ->with('success', 'Course added successfully!');
    }

    public function edit(CourseSynopsis $courseSynopsis)
    {
        $departments = Department::where('is_active', true)->orderBy('department_name')->get();
        $types = CourseSynopsis::types();
        return view('admin.course-synopsis.edit', compact('courseSynopsis', 'departments', 'types'));
    }

    public function update(Request $request, CourseSynopsis $courseSynopsis)
    {
        $validated = $request->validate([
            'department_id' => 'required|exists:departments,id',
            'course_code'   => 'required|string|max:20',
            'course_title'  => 'required|string|max:255',
            'description'   => 'nullable|string',
            'unit'          => 'required|integer|min:0|max:10',
            'level'         => 'required|integer|in:100,200,300,400,500,600',
            'type'          => 'required|in:core,elective,required',
            'is_published'  => 'nullable|boolean',
        ]);

        $validated['is_published'] = $request->boolean('is_published', true);

        $courseSynopsis->update($validated);

        return redirect()->route('admin.course-synopsis.index', ['department_id' => $validated['department_id']])
            ->with('success', 'Course updated!');
    }

    public function destroy(CourseSynopsis $courseSynopsis)
    {
        $deptId = $courseSynopsis->department_id;
        $courseSynopsis->delete();

        return redirect()->route('admin.course-synopsis.index', ['department_id' => $deptId])
            ->with('success', 'Course deleted.');
    }

    // ── Bulk Upload ──────────────────────────────
    public function downloadTemplate()
    {
        $headers = ['department_name', 'course_code', 'course_title', 'description', 'unit', 'level', 'type', 'is_published'];
        $callback = function () use ($headers): void {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, $headers);
            fputcsv($handle, [
                'Department of Biology',
                'BIO 101',
                'Introduction to Biology',
                'An introductory course covering the basics of biology.',
                '3',
                '100',
                'core',
                'true',
            ]);
            fputcsv($handle, [
                'Department of Biology',
                'BIO 201',
                'Cell Biology',
                'Study of cell structure and function.',
                '3',
                '200',
                'core',
                'true',
            ]);
            fclose($handle);
        };
        return response()->stream($callback, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="course-synopsis-template.csv"',
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
            $deptName = trim($row['department_name'] ?? $row['department'] ?? '');
            $courseCode = trim($row['course_code'] ?? '');
            $courseTitle = trim($row['course_title'] ?? $row['title'] ?? '');
            if (!$deptName || !$courseCode || !$courseTitle) continue;

            $dept = Department::where('department_name', 'LIKE', "%{$deptName}%")->first();
            if (!$dept) continue;

            $level = (int) ($row['level'] ?? 100);
            $type = strtolower(trim($row['type'] ?? 'core'));
            if (!in_array($type, ['core', 'elective', 'required'])) $type = 'core';

            CourseSynopsis::updateOrCreate(
                ['department_id' => $dept->id, 'course_code' => $courseCode],
                [
                    'course_title' => $courseTitle,
                    'description' => $row['description'] ?? null,
                    'unit' => (int) ($row['unit'] ?? 3),
                    'level' => $level,
                    'type' => $type,
                    'is_published' => filter_var($row['is_published'] ?? true, FILTER_VALIDATE_BOOLEAN),
                ]
            );
            $imported++;
        }

        return redirect()->route('admin.course-synopsis.index')
            ->with('success', "Imported {$imported} courses successfully.");
    }

    public function bulkDelete(Request $request)
    {
        $request->validate(['ids' => 'required|array', 'ids.*' => 'integer']);
        CourseSynopsis::whereIn('id', $request->ids)->delete();
        return back()->with('success', 'Selected courses deleted.');
    }
}
