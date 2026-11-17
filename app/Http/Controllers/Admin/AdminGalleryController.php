<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryAlbum;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminGalleryController extends Controller
{
    // ── Albums (heading + subheading sections) ──────────────────
    public function index()
    {
        $albums = GalleryAlbum::withCount('images')->ordered()->get();

        return view('admin.gallery.index', compact('albums'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
            'sort_order'  => ['nullable', 'integer', 'min:0'],
        ]);

        $album = new GalleryAlbum();
        $album->title       = $data['title'];
        $album->description = $data['description'] ?? null;
        $album->sort_order  = (int) ($data['sort_order'] ?? 0);
        $album->is_active   = $request->boolean('is_active');
        $album->save();

        return redirect()->route('admin.gallery.images', $album)
            ->with('success', 'Album created. Now upload its images.');
    }

    public function edit(GalleryAlbum $galleryAlbum)
    {
        return view('admin.gallery.edit', compact('galleryAlbum'));
    }

    public function update(Request $request, GalleryAlbum $galleryAlbum)
    {
        $data = $request->validate([
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
            'sort_order'  => ['nullable', 'integer', 'min:0'],
        ]);

        $galleryAlbum->title       = $data['title'];
        $galleryAlbum->description = $data['description'] ?? null;
        $galleryAlbum->sort_order  = (int) ($data['sort_order'] ?? 0);
        $galleryAlbum->is_active   = $request->boolean('is_active');
        $galleryAlbum->save();

        return redirect()->route('admin.gallery.index')->with('success', 'Album updated.');
    }

    public function destroy(GalleryAlbum $galleryAlbum)
    {
        // Only the database rows are removed — image files stay on disk
        // so an accidental delete never destroys the original photos.
        $galleryAlbum->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Album deleted (image files were kept on the server).');
    }

    // ── Images inside an album ──────────────────────────────────
    public function images(GalleryAlbum $galleryAlbum)
    {
        $images = $galleryAlbum->images()->ordered()->get();

        return view('admin.gallery.images', compact('galleryAlbum', 'images'));
    }

    public function storeImages(Request $request, GalleryAlbum $galleryAlbum)
    {
        $request->validate([
            'images'    => ['required', 'array', 'max:20'],
            'images.*'  => ['file', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
        ]);

        $nextOrder = (int) $galleryAlbum->images()->max('sort_order') + 1;

        foreach ($request->file('images') as $file) {
            if (!$file->isValid()) {
                continue;
            }
            $galleryAlbum->images()->create([
                'image_path' => $this->storeImage($file),
                'sort_order' => $nextOrder++,
            ]);
        }

        return redirect()->route('admin.gallery.images', $galleryAlbum)
            ->with('success', 'Images uploaded successfully.');
    }

    public function destroyImage(GalleryImage $galleryImage)
    {
        $albumId = $galleryImage->gallery_album_id;
        $path = $galleryImage->image_path;

        $galleryImage->delete();

        // Only delete the file itself when it lives in the managed gallery folder.
        if ($path && str_starts_with($path, 'img/gallery/') && File::exists(public_path($path))) {
            File::delete(public_path($path));
        }

        return redirect()->route('admin.gallery.images', $albumId)
            ->with('success', 'Image removed.');
    }

    /** Photos are stored in public/img/gallery alongside the existing ones. */
    private function storeImage($file): string
    {
        $name = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) ?: 'gallery';
        $ext  = strtolower($file->getClientOriginalExtension() ?: 'jpg');
        $dest = public_path('img/gallery');

        if (!File::isDirectory($dest)) {
            File::makeDirectory($dest, 0755, true);
        }

        $filename = $name . '-' . uniqid() . '.' . $ext;
        $file->move($dest, $filename);

        return 'img/gallery/' . $filename;
    }
}
