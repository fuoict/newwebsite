<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminDownloadController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');
        if (!array_key_exists((string) $category, Download::CATEGORIES)) {
            $category = null;
        }

        $query = Download::orderBy('sort_order')->orderBy('id');
        if ($category) {
            $query->category($category);
        }
        $downloads = $query->paginate(50)->withQueryString();

        return view('admin.downloads.index', compact('downloads', 'category'));
    }

    public function create()
    {
        return view('admin.downloads.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category'     => ['required', 'in:general,students,staff'],
            'title'        => ['required', 'string', 'max:255'],
            'external_url' => ['nullable', 'url', 'max:500'],
            'file'         => ['nullable', 'file', 'mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,rtf,zip', 'max:20480'],
            'sort_order'   => ['nullable', 'integer', 'min:0'],
        ]);

        if (!$request->hasFile('file') && !$request->filled('external_url')) {
            return back()->withErrors(['file' => 'Please upload a document or paste a link (e.g. Google Drive).'])->withInput();
        }

        $download = new Download();
        $download->category     = $data['category'];
        $download->title        = $data['title'];
        $download->external_url = $request->filled('external_url') ? $data['external_url'] : null;
        $download->file_path    = $request->hasFile('file') ? $this->storeFile($request) : null;
        $download->sort_order   = (int) ($data['sort_order'] ?? 0);
        $download->is_active    = $request->boolean('is_active');
        $download->save();

        return redirect()->route('admin.downloads.index')->with('success', 'Document added successfully.');
    }

    public function edit(Download $download)
    {
        return view('admin.downloads.edit', compact('download'));
    }

    public function update(Request $request, Download $download)
    {
        $data = $request->validate([
            'category'     => ['required', 'in:general,students,staff'],
            'title'        => ['required', 'string', 'max:255'],
            'external_url' => ['nullable', 'url', 'max:500'],
            'file'         => ['nullable', 'file', 'mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,rtf,zip', 'max:20480'],
            'sort_order'   => ['nullable', 'integer', 'min:0'],
        ]);

        $removeFile = $request->boolean('remove_file');

        if (!$request->hasFile('file') && !$request->filled('external_url') && !$removeFile && !$download->file_path) {
            return back()->withErrors(['file' => 'Please upload a document or paste a link (e.g. Google Drive).'])->withInput();
        }

        // Replace the file if a new one was uploaded, or drop it if requested.
        if ($removeFile) {
            $this->deleteFile($download->file_path);
            $download->file_path = null;
        }
        if ($request->hasFile('file')) {
            $this->deleteFile($download->file_path);
            $download->file_path = $this->storeFile($request);
        }

        $download->category     = $data['category'];
        $download->title        = $data['title'];
        $download->external_url = $request->filled('external_url') ? $data['external_url'] : null;
        $download->sort_order   = (int) ($data['sort_order'] ?? 0);
        $download->is_active    = $request->boolean('is_active');
        $download->save();

        return redirect()->route('admin.downloads.index')->with('success', 'Document updated successfully.');
    }

    public function destroy(Download $download)
    {
        $this->deleteFile($download->file_path);
        $download->delete();

        return redirect()->route('admin.downloads.index')->with('success', 'Document deleted.');
    }

    /** Move the upload into public/resources (the folder with the other documents). */
    private function storeFile(Request $request): string
    {
        $file = $request->file('file');
        $slug = Str::slug($request->input('title')) ?: 'document';
        $ext  = strtolower($file->getClientOriginalExtension() ?: 'pdf');

        $dest = public_path('resources');
        if (!File::isDirectory($dest)) {
            File::makeDirectory($dest, 0755, true);
        }

        $filename = $slug . '.' . $ext;
        if (File::exists($dest . DIRECTORY_SEPARATOR . $filename)) {
            $filename = $slug . '-' . uniqid() . '.' . $ext;
        }

        $file->move($dest, $filename);

        return $filename;
    }

    private function deleteFile(?string $filename): void
    {
        if (!$filename) {
            return;
        }

        $path = public_path('resources' . DIRECTORY_SEPARATOR . basename($filename));
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}
