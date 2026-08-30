<?php

namespace App\Http\Controllers;

use App\Models\Unit;

class UnitPageController extends Controller
{
    public function index()
    {
        $units = Unit::active()->orderBy('sort_order')->orderBy('name')->get();
        return view('pages.divisions.units.index', compact('units'));
    }

    public function show(string $slug)
    {
        $unit = Unit::active()->where('slug', $slug)->firstOrFail();
        return view('pages.divisions.units.show', compact('unit'));
    }
}
