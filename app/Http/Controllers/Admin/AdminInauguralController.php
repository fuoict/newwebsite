<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InauguralLecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminInauguralController extends Controller
{
    public function index()
    {
        $lectures = InauguralLecture::orderBy('lecture_date', 'desc')->get();

        return view('admin.inaugural.index', compact('lectures'));
    }

    public function create()
    {
        return view('admin.inaugural.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'        => ['required', 'string', 'max:255'],
            'speaker_name' => ['required', 'string', 'max:255'],
            'lecture_date' => ['required', 'date'],
            'image'        => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'slides'       => ['nullable', 'file', 'mimes:ppt,pptx,pdf,doc,docx', 'max:12288'],
            'event_url'    => ['nullable', 'url', 'max:500'],
        ]);

        $lecture = new InauguralLecture();
        $lecture->title        = $data['title'];
        $lecture->speaker_name = $data['speaker_name'];
        $lecture->lecture_date = $data['lecture_date'];
        $lecture->event_url    = $request->filled('event_url') ? $data['event_url'] : null;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $lecture->image_path = $this->storeImage($request);
        }
        if ($request->hasFile('slides') && $request->file('slides')->isValid()) {
            $lecture->slides_path = $this->storeSlides($request);
        }

        $lecture->save();

        return redirect()->route('admin.inaugural.index')->with('success', 'Lecture added successfully.');
    }

    public function edit(InauguralLecture $inauguralLecture)
    {
        return view('admin.inaugural.edit', compact('inauguralLecture'));
    }

    public function update(Request $request, InauguralLecture $inauguralLecture)
    {
        $data = $request->validate([
            'title'        => ['required', 'string', 'max:255'],
            'speaker_name' => ['required', 'string', 'max:255'],
            'lecture_date' => ['required', 'date'],
            'image'        => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
            'slides'       => ['nullable', 'file', 'mimes:ppt,pptx,pdf,doc,docx', 'max:12288'],
            'event_url'    => ['nullable', 'url', 'max:500'],
        ]);

        $inauguralLecture->title        = $data['title'];
        $inauguralLecture->speaker_name = $data['speaker_name'];
        $inauguralLecture->lecture_date = $data['lecture_date'];
        $inauguralLecture->event_url    = $request->filled('event_url') ? $data['event_url'] : null;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $this->deleteImage($inauguralLecture->image_path);
            $inauguralLecture->image_path = $this->storeImage($request);
        }
        if ($request->hasFile('slides') && $request->file('slides')->isValid()) {
            $this->deleteSlides($inauguralLecture->slides_path);
            $inauguralLecture->slides_path = $this->storeSlides($request);
        }

        $inauguralLecture->save();

        return redirect()->route('admin.inaugural.index')->with('success', 'Lecture updated.');
    }

    public function destroy(InauguralLecture $inauguralLecture)
    {
        $this->deleteImage($inauguralLecture->image_path);
        $this->deleteSlides($inauguralLecture->slides_path);
        $inauguralLecture->delete();

        return redirect()->route('admin.inaugural.index')->with('success', 'Lecture deleted.');
    }

    /** Lecture images -> public/img/inaugural */
    private function storeImage(Request $request): string
    {
        $file = $request->file('image');
        $slug = Str::slug($request->input('title')) ?: 'lecture';
        $ext  = strtolower($file->getClientOriginalExtension() ?: 'jpg');
        $dest = public_path('img/inaugural');

        if (!File::isDirectory($dest)) {
            File::makeDirectory($dest, 0755, true);
        }

        $filename = $slug . '.' . $ext;
        if (File::exists($dest . DIRECTORY_SEPARATOR . $filename)) {
            $filename = $slug . '-' . uniqid() . '.' . $ext;
        }

        $file->move($dest, $filename);

        return 'img/inaugural/' . $filename;
    }

    /** Lecture slides (ppt/pptx/pdf/doc/docx, max 12MB) -> public/resources/inaugural */
    private function storeSlides(Request $request): string
    {
        $file = $request->file('slides');
        $slug = Str::slug($request->input('title')) ?: 'lecture';
        $ext  = strtolower($file->getClientOriginalExtension() ?: 'pdf');
        $dest = public_path('resources/inaugural');

        if (!File::isDirectory($dest)) {
            File::makeDirectory($dest, 0755, true);
        }

        $filename = $slug . '-slides.' . $ext;
        if (File::exists($dest . DIRECTORY_SEPARATOR . $filename)) {
            $filename = $slug . '-slides-' . uniqid() . '.' . $ext;
        }

        $file->move($dest, $filename);

        return $filename;
    }

    /** Only delete images that live in the folder managed by this controller. */
    private function deleteImage(?string $path): void
    {
        if (!$path || !str_starts_with($path, 'img/inaugural/')) {
            return;
        }

        $full = public_path('img/inaugural/' . basename($path));
        if (File::exists($full)) {
            File::delete($full);
        }
    }

    private function deleteSlides(?string $filename): void
    {
        if (!$filename) {
            return;
        }

        $full = public_path('resources/inaugural/' . basename($filename));
        if (File::exists($full)) {
            File::delete($full);
        }
    }
}
