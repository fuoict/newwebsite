<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\College;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    // List all staff
    public function index(Request $request)
    {
        $query = Staff::with('college')->ordered();

        if ($request->filled('college_id')) {
            $query->where('college_id', $request->college_id);
        }
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $staffList = $query->paginate(20);
        $colleges   = College::orderBy('college_name')->get();

        return view('admin.staff.index', compact('staffList', 'colleges'));
    }

    // Show create form
    public function create()
    {
        $colleges  = College::orderBy('college_name')->get();
        $positions = Staff::positions();
        return view('admin.staff.create', compact('colleges', 'positions'));
    }

    // Store new staff
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'          => 'nullable|string|max:50',
            'name'           => 'required|string|max:255',
            'position'       => 'nullable|string|max:100',
            'email'          => 'nullable|email|max:255',
            'phone'          => 'nullable|string|max:30',
            'bio'            => 'nullable|string',
            'qualifications' => 'nullable|string',
            'specialization' => 'nullable|string|max:255',
            'college_id'     => 'nullable|exists:colleges,id',
            'department_id'  => 'nullable|integer',
            'sort_order'     => 'nullable|integer',
            'is_hod'         => 'nullable|boolean',
            'is_published'   => 'nullable|boolean',
            'photo'          => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('staff', 'public');
        }

        $validated['is_hod']       = $request->boolean('is_hod');
        $validated['is_published'] = $request->boolean('is_published');
        $validated['sort_order']   = $validated['sort_order'] ?? 0;

        Staff::create($validated);

        return redirect()->route('admin.staff.index')
            ->with('success', 'Staff member added successfully!');
    }

    // Show edit form
    public function edit(Staff $staff)
    {
        $colleges  = College::orderBy('college_name')->get();
        $positions = Staff::positions();
        return view('admin.staff.edit', compact('staff', 'colleges', 'positions'));
    }

    // Update staff
    public function update(Request $request, Staff $staff)
    {
        $validated = $request->validate([
            'title'          => 'nullable|string|max:50',
            'name'           => 'required|string|max:255',
            'position'       => 'nullable|string|max:100',
            'email'          => 'nullable|email|max:255',
            'phone'          => 'nullable|string|max:30',
            'bio'            => 'nullable|string',
            'qualifications' => 'nullable|string',
            'specialization' => 'nullable|string|max:255',
            'college_id'     => 'nullable|exists:colleges,id',
            'department_id'  => 'nullable|integer',
            'sort_order'     => 'nullable|integer',
            'is_hod'         => 'nullable|boolean',
            'is_published'   => 'nullable|boolean',
            'photo'          => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            if ($staff->photo) {
                Storage::disk('public')->delete($staff->photo);
            }
            $validated['photo'] = $request->file('photo')->store('staff', 'public');
        }

        $validated['is_hod']       = $request->boolean('is_hod');
        $validated['is_published'] = $request->boolean('is_published');

        $staff->update($validated);

        return redirect()->route('admin.staff.index')
            ->with('success', 'Staff profile updated successfully!');
    }

    // Delete staff
    public function destroy(Staff $staff)
    {
        if ($staff->photo) {
            Storage::disk('public')->delete($staff->photo);
        }
        $staff->delete();

        return redirect()->route('admin.staff.index')
            ->with('success', 'Staff member removed.');
    }
}
