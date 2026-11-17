@extends('admin.layout')
@section('page_title', 'Manage Album Images')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
        <span><i class='bx bx-image me-2'></i>{{ $galleryAlbum->title }} <span class="text-muted fw-normal">— {{ $images->count() }} image{{ $images->count() === 1 ? '' : 's' }}</span></span>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.gallery.edit', $galleryAlbum) }}" class="btn btn-sm btn-outline-primary"><i class='bx bx-edit me-1'></i> Edit Heading</a>
            <a href="{{ route('admin.gallery.index') }}" class="btn btn-sm btn-outline-secondary"><i class='bx bx-arrow-back me-1'></i> Albums</a>
        </div>
    </div>
    <div class="card-body p-4 border-bottom">
        @if($galleryAlbum->description)
            <p class="text-muted mb-3" style="font-size:13px">{{ $galleryAlbum->description }}</p>
        @endif
        @if($errors->any())
            <div class="alert alert-danger"><ul class="mb-0 ps-3">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
        @endif
        <form action="{{ route('admin.gallery.images.store', $galleryAlbum) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3 align-items-end">
                <div class="col-md-7">
                    <label class="form-label fw-semibold">Upload Images</label>
                    <input type="file" name="images[]" class="form-control @error('images') is-invalid @enderror" accept="image/*" multiple required>
                    @error('images') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-fuo w-100"><i class='bx bx-upload me-1'></i> Upload</button>
                </div>
                <div class="col-md-2">
                    <div class="form-text mt-0">Select several files at once (Ctrl/Cmd+click). JPG/PNG/WebP, max 5 MB each, up to 20 per batch. New photos are stored in <code>img/gallery</code>.</div>
                </div>
            </div>
        </form>
    </div>
    <div class="card-body p-4">
        @forelse($images as $image)
            <div class="d-inline-block position-relative me-3 mb-3" style="width:150px">
                <img src="{{ asset($image->image_path) }}" alt="" style="width:150px;height:110px;object-fit:cover;border-radius:8px;border:1px solid #e3e3e3;">
                <form action="{{ route('admin.gallery.images.destroy', $image) }}" method="POST" class="position-absolute top-0 end-0 m-1" onsubmit="return confirm('Remove this image from the gallery?')">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger rounded-circle p-0 d-grid place-items-center" style="width:24px;height:24px" title="Remove image"><i class='bx bx-x' style="font-size:14px"></i></button>
                </form>
                <div class="text-muted text-center" style="font-size:11px;margin-top:4px">#{{ $image->sort_order }}</div>
            </div>
        @empty
            <p class="text-muted mb-0">No images in this album yet — upload some above.</p>
        @endforelse
    </div>
</div>
@endsection
