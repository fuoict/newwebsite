<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminPageController extends Controller
{
    public function index(Request $request)
    {
        $query = Page::query();
        if ($request->filled('section')) {
            $query->where('section', $request->section);
        }
        $pages = $query->orderBy('section')->orderBy('sort_order')->orderBy('title')->paginate(30);
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.editor');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'        => 'required|string|max:255',
            'slug'         => 'nullable|string|max:100|unique:pages,slug',
            'section'      => 'required|string|max:50',
            'parent_slug'  => 'nullable|string|max:100',
            'route_name'   => 'nullable|string|max:255',
            'icon'         => 'nullable|string|max:100',
            'intro'        => 'nullable|string|max:2000',
            'body'         => 'nullable|string',
            'banner_text'  => 'nullable|string|max:500',
            'banner_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'mission'      => 'nullable|string',
            'vision'       => 'nullable|string',
            'sort_order'   => 'nullable|integer',
            'is_active'    => 'nullable|boolean',
        ]);

        $data = collect($validated)->except(['banner_image'])->toArray();
        $data['slug'] = $validated['slug'] ? Str::slug($validated['slug']) : Str::slug($validated['title']);
        $data['is_active'] = $request->boolean('is_active', false);
        $data['sort_order'] = $data['sort_order'] ?? 0;

        // Handle JSON fields
        foreach (['members', 'officers', 'downloads', 'gallery', 'sidebar_links'] as $field) {
            if ($request->has($field)) {
                $data[$field] = json_decode($request->input($field), true) ?: null;
            }
        }
        if ($request->has('blocks')) {
            $data['blocks'] = json_decode($request->input('blocks'), true) ?: null;
        }

        if ($request->hasFile('banner_image') && $request->file('banner_image')->isValid()) {
            $data['banner_image'] = $request->file('banner_image')->store('pages', 'public');
        }

        Page::create($data);
        return redirect()->route('admin.pages.index')->with('success', 'Page created!');
    }

    public function edit(Page $page)
    {
        return view('admin.pages.editor', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $validated = $request->validate([
            'title'        => 'required|string|max:255',
            'slug'         => 'nullable|string|max:100|unique:pages,slug,' . $page->id,
            'section'      => 'required|string|max:50',
            'parent_slug'  => 'nullable|string|max:100',
            'route_name'   => 'nullable|string|max:255',
            'icon'         => 'nullable|string|max:100',
            'intro'        => 'nullable|string|max:2000',
            'body'         => 'nullable|string',
            'banner_text'  => 'nullable|string|max:500',
            'banner_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'mission'      => 'nullable|string',
            'vision'       => 'nullable|string',
            'sort_order'   => 'nullable|integer',
            'is_active'    => 'nullable|boolean',
        ]);

        $data = collect($validated)->except(['banner_image'])->toArray();
        $data['is_active'] = $request->boolean('is_active', false);

        // Handle JSON fields
        foreach (['members', 'officers', 'downloads', 'gallery', 'sidebar_links'] as $field) {
            if ($request->has($field)) {
                $data[$field] = json_decode($request->input($field), true) ?: null;
            }
        }

        if ($request->hasFile('banner_image') && $request->file('banner_image')->isValid()) {
            if ($page->banner_image) Storage::disk('public')->delete($page->banner_image);
            $data['banner_image'] = $request->file('banner_image')->store('pages', 'public');
        }

        $page->update($data);
        return redirect()->route('admin.pages.index')->with('success', 'Page updated!');
    }

    public function destroy(Page $page)
    {
        if ($page->banner_image) Storage::disk('public')->delete($page->banner_image);
        $page->delete();
        return redirect()->route('admin.pages.index')->with('success', 'Page deleted.');
    }

    /**
     * AJAX endpoint for uploading block editor images (officer/member photos, gallery, etc.)
     */
    public function uploadBlockImage(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $path = $request->file('file')->store('pages/blocks', 'public');
            return response()->json(['url' => Storage::disk('public')->url($path), 'path' => $path]);
        }

        return response()->json(['error' => 'Upload failed'], 422);
    }
}
