<?php

namespace App\Http\Controllers;

use App\Models\Centre;

class CentrePageController extends Controller
{
    public function index()
    {
        $centres = Centre::active()->orderBy('sort_order')->orderBy('name')->get();
        return view('pages.divisions.centres.index', compact('centres'));
    }

    public function show(string $slug)
    {
        $centre = Centre::active()->where('slug', $slug)->firstOrFail();
        return view('pages.divisions.centres.show', compact('centre'));
    }
}
