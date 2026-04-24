<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // News listing page (all-news.blade.php)
    public function index(Request $request)
    {
        $query = News::published()->latest();

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $newsList   = $query->paginate(9);
        $categories = News::categories();

        return view('pages.news.index', compact('newsList', 'categories'));
    }

    // Single news detail page
    public function show(string $slug)
    {
        $news    = News::published()->where('slug', $slug)->firstOrFail();
        $related = News::published()->latest()
            ->where('id', '!=', $news->id)
            ->where('category', $news->category)
            ->limit(3)
            ->get();

        return view('pages.news.show', compact('news', 'related'));
    }
}
