<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $newsList = News::latest()->paginate(15);
        return view('admin.news.index', compact('newsList'));
    }

    public function create()
    {
        $categories = News::categories();
        return view('admin.news.create', compact('categories'));
    }

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
            'is_featured'      => 'nullable',
            'is_published'     => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('news', 'public');
        }

        $validated['slug']         = Str::slug($validated['title']) . '-' . time();
        $validated['is_featured']  = $request->boolean('is_featured');
        $validated['is_published'] = $request->boolean('is_published');
        $validated['published_at'] = $validated['is_published'] ? now() : null;

        News::create($validated);

        return redirect()->route('admin.news.index')
            ->with('success', 'News post created successfully!');
    }

    public function edit(News $news)
    {
        $categories = News::categories();
        return view('admin.news.edit', compact('news', 'categories'));
    }

    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title'            => 'required|string|max:255',
            'category'         => 'required|string',
            'icon'             => 'nullable|string|max:100',
            'excerpt'          => 'nullable|string|max:500',
            'body'             => 'nullable|string',  // ✅ allows HTML from TinyMCE
            'event_date_label' => 'nullable|string|max:100',
            'image'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'is_featured'      => 'nullable',
            'is_published'     => 'nullable',
        ]);

        // Only replace image if a new one is uploaded
        if ($request->hasFile('image')) {
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $validated['image'] = $request->file('image')->store('news', 'public');
        }
        else {
            unset($validated['image']);
        }

        $validated['is_featured']  = $request->boolean('is_featured');
        $validated['is_published'] = $request->boolean('is_published');

        if ($validated['is_published'] && !$news->published_at) {
            $validated['published_at'] = now();
        }

        $news->update($validated);

        return redirect()->route('admin.news.index')
            ->with('success', 'News post updated successfully!');
    }

    public function destroy(News $news)
    {
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        $news->delete();

        return redirect()->route('admin.news.index')
            ->with('success', 'News post deleted.');
    }

    public function togglePublish(News $news)
    {
        $news->update([
            'is_published' => !$news->is_published,
            'published_at' => !$news->is_published ? now() : $news->published_at,
        ]);
        return back()->with('success', 'Status updated.');
    }

    /**
     * ✅ TinyMCE inline image upload endpoint
     */
    public function uploadImage(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpg,jpeg,png,webp,gif|max:4096',
        ]);

        $path = $request->file('file')->store('news/inline', 'public');

        return response()->json([
            'location' => asset('storage/' . $path),
        ]);
    }
}
