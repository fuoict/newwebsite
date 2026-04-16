<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\College;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    // Our Staff page - filtered by college
    public function index(Request $request)
    {
        $query = Staff::published()->ordered()->with('college');

        if ($request->filled('college_id')) {
            $query->where('college_id', $request->college_id);
        }

        $staffList = $query->get();
        $colleges  = College::orderBy('college_name')->get();

        return view('pages.staff.index', compact('staffList', 'colleges'));
    }
}
