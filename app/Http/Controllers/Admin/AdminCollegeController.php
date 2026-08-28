<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\College;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCollegeController extends Controller
{
    public function index()
    {
        $colleges = College::withCount('departments')->orderBy('college_name')->paginate(20);
        return view('admin.colleges.index', compact('colleges'));
    }

    public function create()
    {
        return view('admin.colleges.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'college_name'     => 'required|string|max:255',
            'college_abbr'     => 'nullable|string|max:20',
            'slug'             => 'nullable|string|max:100|unique:colleges,slug',
            'dean_name'        => 'nullable|string|max:255',
            'dean_image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'dean_speach_title' => 'nullable|string|max:255',
            'dean_speach_desc' => 'nullable|string',
            'about_college'    => 'nullable|string',
            'mission'          => 'nullable|string',
            'vision'           => 'nullable|string',
            'is_active'        => 'nullable|boolean',
        ]);

        $data = collect($validated)->except(['dean_image'])->toArray();
        $data['is_active'] = $request->boolean('is_active', false);
        $data['slug'] = $validated['slug'] ?? \Illuminate\Support\Str::slug($validated['college_name']);

        if ($request->hasFile('dean_image') && $request->file('dean_image')->isValid()) {
            $data['dean_image'] = $request->file('dean_image')->store('colleges', 'public');
        }

        College::create($data);
        return redirect()->route('admin.colleges.index')->with('success', 'College created!');
    }

    public function edit(College $college)
    {
        return view('admin.colleges.edit', compact('college'));
    }

    public function update(Request $request, College $college)
    {
        $validated = $request->validate([
            'college_name'     => 'required|string|max:255',
            'college_abbr'     => 'nullable|string|max:20',
            'slug'             => 'nullable|string|max:100|unique:colleges,slug,' . $college->id,
            'dean_name'        => 'nullable|string|max:255',
            'dean_image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'dean_speach_title' => 'nullable|string|max:255',
            'dean_speach_desc' => 'nullable|string',
            'about_college'    => 'nullable|string',
            'mission'          => 'nullable|string',
            'vision'           => 'nullable|string',
            'is_active'        => 'nullable|boolean',
        ]);

        $data = collect($validated)->except(['dean_image'])->toArray();
        $data['is_active'] = $request->boolean('is_active', false);

        if ($request->hasFile('dean_image') && $request->file('dean_image')->isValid()) {
            if ($college->dean_image) Storage::disk('public')->delete($college->dean_image);
            $data['dean_image'] = $request->file('dean_image')->store('colleges', 'public');
        }

        $college->update($data);
        return redirect()->route('admin.colleges.index')->with('success', 'College updated!');
    }

    public function destroy(College $college)
    {
        if ($college->dean_image) Storage::disk('public')->delete($college->dean_image);
        $college->delete();
        return redirect()->route('admin.colleges.index')->with('success', 'College deleted.');
    }
}
