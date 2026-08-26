<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;

class LecturerController extends Controller
{
    // Single lecturer profile page
    public function show(Lecturer $lecturer)
    {
        // Only show published lecturers publicly
        if (!$lecturer->is_published) {
            abort(404);
        }

        // Other lecturers in the same department (for sidebar)
        $colleagues = Lecturer::published()
            ->where('department_id', $lecturer->department_id)
            ->where('id', '!=', $lecturer->id)
            ->ordered()
            ->limit(5)
            ->get();

        return view('pages.lecturers.show', compact('lecturer', 'colleagues'));
    }
}
