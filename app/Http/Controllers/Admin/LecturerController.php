<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use App\Models\College;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LecturerController extends Controller
{
    public function index(Request $request)
    {
        $query = Lecturer::with(['college', 'department'])->ordered();

        if ($request->filled('department_id')) {
            $query->where('department_id', $request->department_id);
        }
        if ($request->filled('college_id')) {
            $query->where('college_id', $request->college_id);
        }
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $lecturers   = $query->paginate(20);
        $colleges    = College::orderBy('college_name')->get();
        $departments = Department::orderBy('department_name')->get();

        return view('admin.lecturers.index', compact('lecturers', 'colleges', 'departments'));
    }

    public function create()
    {
        $colleges    = College::orderBy('college_name')->get();
        $departments = Department::orderBy('department_name')->get();
        $positions   = Lecturer::positions();
        return view('admin.lecturers.create', compact('colleges', 'departments', 'positions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'            => 'nullable|string|max:50',
            'name'             => 'required|string|max:255',
            'position'         => 'nullable|string|max:100',
            'specialization'   => 'nullable|string|max:255',
            'college_id'       => 'nullable|exists:colleges,id',
            'department_id'    => 'required|exists:departments,id',
            'email'            => 'nullable|email|max:255',
            'phone'            => 'nullable|string|max:30',
            'biography'        => 'nullable|string',
            'qualifications'   => 'nullable|string',
            'research_interest'=> 'nullable|string',
            'google_scholar'   => 'nullable|max:255',
            'researchgate'     => 'nullable|max:255',
            'linkedin'         => 'nullable|max:255',
            'twitter'          => 'nullable|max:255',
            'personal_website' => 'nullable|max:255',
            'orcid'            => 'nullable|string|max:100',
            'academia_edu'     => 'nullable|max:255',
            'linktree'         => 'nullable|max:255',
            'scopus'           => 'nullable|max:255',
            'wos'              => 'nullable|max:255',
            'publons'          => 'nullable|max:255',
            'ad_scientific'    => 'nullable|max:255',
            'sort_order'       => 'nullable|integer',
            'is_hod'           => 'nullable',
            'is_published'     => 'nullable',
            'photo'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3072',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('lecturers', 'public');
        }

        $validated['is_hod']       = $request->boolean('is_hod');
        $validated['is_published'] = $request->boolean('is_published');
        $validated['sort_order']   = $validated['sort_order'] ?? 0;

        Lecturer::create($validated);

        return redirect()->route('admin.lecturers.index')
            ->with('success', 'Lecturer profile created successfully!');
    }

    public function edit(Lecturer $lecturer)
    {
        $colleges    = College::orderBy('college_name')->get();
        $departments = Department::orderBy('department_name')->get();
        $positions   = Lecturer::positions();
        return view('admin.lecturers.edit', compact('lecturer', 'colleges', 'departments', 'positions'));
    }

    public function update(Request $request, Lecturer $lecturer)
    {
        $validated = $request->validate([
            'title'            => 'nullable|string|max:50',
            'name'             => 'required|string|max:255',
            'position'         => 'nullable|string|max:100',
            'specialization'   => 'nullable|string|max:255',
            'college_id'       => 'nullable|exists:colleges,id',
            'department_id'    => 'required|exists:departments,id',
            'email'            => 'nullable|email|max:255',
            'phone'            => 'nullable|string|max:30',
            'biography'        => 'nullable|string',
            'qualifications'   => 'nullable|string',
            'research_interest'=> 'nullable|string',
            'google_scholar'   => 'nullable|max:255',
            'researchgate'     => 'nullable|max:255',
            'linkedin'         => 'nullable|max:255',
            'twitter'          => 'nullable|max:255',
            'personal_website' => 'nullable|max:255',
            'orcid'            => 'nullable|string|max:100',
            'academia_edu'     => 'nullable|max:255',
            'linktree'         => 'nullable|max:255',
            'scopus'           => 'nullable|max:255',
            'wos'              => 'nullable|max:255',
            'publons'          => 'nullable|max:255',
            'ad_scientific'    => 'nullable|max:255',
            'sort_order'       => 'nullable|integer',
            'is_hod'           => 'nullable',
            'is_published'     => 'nullable',
            'photo'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3072',
        ]);

        if ($request->hasFile('photo')) {
            if ($lecturer->photo) {
                Storage::disk('public')->delete($lecturer->photo);
            }
            $validated['photo'] = $request->file('photo')->store('lecturers', 'public');
        } else {
            unset($validated['photo']);
        }

        $validated['is_hod']       = $request->boolean('is_hod');
        $validated['is_published'] = $request->boolean('is_published');

        $lecturer->update($validated);

        return redirect()->route('admin.lecturers.index')
            ->with('success', 'Lecturer profile updated!');
    }

    public function destroy(Lecturer $lecturer)
    {
        if ($lecturer->photo) {
            Storage::disk('public')->delete($lecturer->photo);
        }
        $lecturer->delete();

        return redirect()->route('admin.lecturers.index')
            ->with('success', 'Lecturer removed.');
    }
}
