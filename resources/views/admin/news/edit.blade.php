@extends('admin.layout')
@section('page_title', 'Edit News Post')

@push('styles')
<style>
    .form-label { font-weight: 600; font-size: 13px; color: #444; }
    .image-preview { width: 100%; height: 180px; object-fit: cover; border-radius: 8px; }
    .preview-box { border: 2px dashed #ddd; border-radius: 8px; padding: 10px; text-align: center; cursor: pointer; }
    .preview-box:hover { border-color: #0f3460; }
    .icon-hint { font-size: 11px; color: #888; }
</style>
@endpush

@section('content')
<div class="d-flex align-items-center gap-2 mb-3">
    <a href="{{ route('admin.news.index') }}" class="btn btn-sm btn-outline-secondary">
        <i class='bx bx-arrow-back'></i> Back
    </a>
    <span class="text-muted" style="font-size:13px">News & Updates / Edit Post</span>
</div>

<form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
@csrf @method('PUT')
<div class="row g-4">

    {{-- LEFT: Main content --}}
    <div class="col-lg-8">
        <div class="card p-4">
            <div class="mb-3">
                <label class="form-label">News Title <span class="text-danger">*</span></label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                       value="{{ old('title', $news->title) }}" required>
                @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Excerpt / Short Summary
                    <span class="text-muted fw-normal">(shown on homepage)</span>
                </label>
                <textarea name="excerpt" class="form-control" rows="2"
                          maxlength="200">{{ old('excerpt', $news->excerpt) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Full Article Body</label>
                <textarea name="body" id="body" class="form-control" rows="10">{{ old('body', $news->body) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Event Date / Time Label</label>
                <input type="text" name="event_date_label" class="form-control"
                       value="{{ old('event_date_label', $news->event_date_label) }}"
                       placeholder="e.g. Thursday, June 19, 2025 by 2PM">
            </div>
        </div>
    </div>

    {{-- RIGHT: Meta --}}
    <div class="col-lg-4">

        <div class="card p-4 mb-4">
            <h6 class="mb-3" style="font-weight:700">Publish Settings</h6>

            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" name="is_published" id="is_published"
                       value="1" {{ old('is_published', $news->is_published) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_published">Published</label>
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" name="is_featured" id="is_featured"
                       value="1" {{ old('is_featured', $news->is_featured) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_featured">
                    <i class='bx bxs-star text-warning'></i> Featured
                    <small class="d-block text-muted" style="font-size:11px">Show in homepage right sidebar</small>
                </label>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-fuo flex-grow-1">
                    <i class='bx bx-save me-1'></i> Update Post
                </button>
                <form action="{{ route('admin.news.destroy', $news) }}" method="POST"
                      onsubmit="return confirm('Permanently delete this post?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">
                        <i class='bx bx-trash'></i>
                    </button>
                </form>
            </div>
        </div>

        <div class="card p-4 mb-4">
            <h6 class="mb-3" style="font-weight:700">Category & Icon</h6>
            <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="category" class="form-select">
                    @foreach($categories as $cat)
                        <option value="{{ $cat }}" {{ old('category', $news->category) == $cat ? 'selected' : '' }}>
                            {{ $cat }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="form-label">Boxicon Class</label>
                <input type="text" name="icon" class="form-control"
                       value="{{ old('icon', $news->icon) }}" id="icon-input">
                <div class="icon-hint mt-1">
                    Preview: <i id="icon-preview" class="{{ old('icon', $news->icon) }}"></i>
                    — <a href="https://boxicons.com" target="_blank">browse icons</a>
                </div>
            </div>
        </div>

        <div class="card p-4">
            <h6 class="mb-3" style="font-weight:700">News Image</h6>
            {{-- Current image --}}
            @if($news->image)
            <div class="mb-2">
                <img src="{{ $news->image_url }}" class="image-preview" alt="current image">
                <small class="text-muted d-block mt-1">Current image — upload a new one to replace</small>
            </div>
            @endif
            <label class="preview-box {{ $news->image ? 'mt-2' : '' }}" for="image-input">
                <img id="image-new-preview" style="width:100%;height:140px;object-fit:cover;border-radius:6px;display:none" alt="">
                <div id="upload-placeholder" {{ $news->image ? '' : '' }}>
                    <i class='bx bx-image-add' style="font-size:32px;color:#ccc"></i>
                    <div style="font-size:12px;color:#999;margin-top:6px">Click to upload new image</div>
                </div>
            </label>
            <input type="file" id="image-input" name="image" accept="image/*" class="d-none">
            @error('image')<div class="text-danger mt-1" style="font-size:12px">{{ $message }}</div>@enderror
        </div>
    </div>

</div>
</form>
@endsection

@push('scripts')
<script>
document.getElementById('image-input').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = (ev) => {
        const preview = document.getElementById('image-new-preview');
        preview.src = ev.target.result;
        preview.style.display = 'block';
        document.getElementById('upload-placeholder').style.display = 'none';
    };
    reader.readAsDataURL(file);
});

document.getElementById('icon-input').addEventListener('input', function() {
    document.getElementById('icon-preview').className = this.value;
});
</script>
@endpush
