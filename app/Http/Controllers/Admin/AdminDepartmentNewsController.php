<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DepartmentNews;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminDepartmentNewsController extends Controller
{
    public function index(Request $request)
    {
        $query = DepartmentNews::with('department')->latest();
        if ($request->filled('department_id')) {
            $query->where('department_id', $request->department_id);
        }
        $newsList = $query->paginate(15);
        $departments = Department::where('is_active', true)->orderBy('department_name')->get();

        return view('admin.department-news.index', compact('newsList', 'departments'));
    }

    public function create()
    {
        $departments = Department::where('is_active', true)->orderBy('department_name')->get();
        return view('admin.department-news.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'department_id' => 'required|exists:departments,id',
            'title'         => 'required|string|max:255',
            'excerpt'       => 'nullable|string|max:500',
            'body'          => 'nullable|string',
            'image'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'is_published'  => 'nullable|boolean',
            'published_at'  => 'nullable|date',
        ]);

        $validated['slug'] = Str::slug($validated['title']) . '-' . time();
        $validated['is_published'] = $request->boolean('is_published');
        $validated['published_at'] = $validated['is_published'] ? ($validated['published_at'] ?? now()) : null;

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('department-news', 'public');
        }

        DepartmentNews::create($validated);

        return redirect()->route('admin.department-news.index', ['department_id' => $validated['department_id']])
            ->with('success', 'Department news created successfully!');
    }

    public function edit(DepartmentNews $departmentNews)
    {
        $departments = Department::where('is_active', true)->orderBy('department_name')->get();
        return view('admin.department-news.edit', compact('departmentNews', 'departments'));
    }

    public function update(Request $request, DepartmentNews $departmentNews)
    {
        $validated = $request->validate([
            'department_id' => 'required|exists:departments,id',
            'title'         => 'required|string|max:255',
            'excerpt'       => 'nullable|string|max:500',
            'body'          => 'nullable|string',
            'image'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'is_published'  => 'nullable|boolean',
        ]);

        $validated['is_published'] = $request->boolean('is_published');
        if ($validated['is_published'] && !$departmentNews->published_at) {
            $validated['published_at'] = now();
        }

        if ($request->hasFile('image')) {
            if ($departmentNews->image) {
                Storage::disk('public')->delete($departmentNews->image);
            }
            $validated['image'] = $request->file('image')->store('department-news', 'public');
        }

        $departmentNews->update($validated);

        return redirect()->route('admin.department-news.index', ['department_id' => $validated['department_id']])
            ->with('success', 'Department news updated!');
    }

    public function destroy(DepartmentNews $departmentNews)
    {
        $deptId = $departmentNews->department_id;
        if ($departmentNews->image) {
            Storage::disk('public')->delete($departmentNews->image);
        }
        $departmentNews->delete();

        return redirect()->route('admin.department-news.index', ['department_id' => $deptId])
            ->with('success', 'Department news deleted.');
    }
}
