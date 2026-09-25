<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminNewsController extends Controller
{
    // List all news
    public function index()
    {
        $newsList = News::latest()->paginate(15);
        return view('admin.news.index', compact('newsList'));
    }

    // Show create form
    public function create()
    {
        $categories = News::categories();
        $departments = Department::orderBy('department_name')->pluck('department_name', 'id');
        return view('admin.news.create', compact('categories', 'departments'));
    }

    // Store new news
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'            => 'required|string|max:255',
            'category'         => 'required|string',
            'icon'             => 'nullable|string|max:100',
            'excerpt'          => 'nullable|string|max:500',
            'body'             => 'nullable|string',
            'event_date_label' => 'nullable|string|max:100',
            'image'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'is_featured'      => 'nullable|boolean',
            'is_published'     => 'nullable|boolean',
            'published_at'     => 'nullable|date',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('news', 'public');
        }

        $validated['slug']         = Str::slug($validated['title']) . '-' . time();
        $validated['is_featured']  = $request->boolean('is_featured');
        $validated['is_published'] = $request->boolean('is_published');
        $validated['departments']  = $request->input('departments');

        // Use custom date if provided, otherwise auto-set when publishing
        if ($validated['is_published']) {
            $validated['published_at'] = $request->filled('published_at')
                ? $request->input('published_at')
                : now();
        }

        News::create($validated);

        return redirect()->route('admin.news.index')
            ->with('success', 'News post created successfully!');
    }

    // Show edit form
    public function edit(News $news)
    {
        $categories = News::categories();
        $departments = Department::orderBy('department_name')->pluck('department_name', 'id');
        return view('admin.news.edit', compact('news', 'categories', 'departments'));
    }

    // Update news
    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title'            => 'required|string|max:255',
            'category'         => 'required|string',
            'icon'             => 'nullable|string|max:100',
            'excerpt'          => 'nullable|string|max:500',
            'body'             => 'nullable|string',
            'event_date_label' => 'nullable|string|max:100',
            'image'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'is_featured'      => 'nullable|boolean',
            'is_published'     => 'nullable|boolean',
            'published_at'     => 'nullable|date',
        ]);

        // Handle new image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $validated['image'] = $request->file('image')->store('news', 'public');
        }

        $validated['is_featured']  = $request->boolean('is_featured');
        $validated['is_published'] = $request->boolean('is_published');
        $validated['departments']  = $request->input('departments');

        // Handle published_at — use custom date if provided, else auto-set when first publishing
        if ($request->filled('published_at')) {
            $validated['published_at'] = $request->input('published_at');
        } elseif ($validated['is_published'] && !$news->published_at) {
            $validated['published_at'] = now();
        }

        $news->update($validated);

        return redirect()->route('admin.news.index')
            ->with('success', 'News post updated successfully!');
    }

    // Delete news
    public function destroy(News $news)
    {
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        $news->delete();

        return redirect()->route('admin.news.index')
            ->with('success', 'News post deleted.');
    }

    // Quick toggle publish
    public function togglePublish(News $news)
    {
        $news->update([
            'is_published' => !$news->is_published,
            'published_at' => !$news->is_published ? now() : $news->published_at,
        ]);
        return back()->with('success', 'Status updated.');
    }
}
