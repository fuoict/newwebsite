@extends('admin.layout')
@section('page_title', 'Add News Post')

@push('styles')
<style>
    .form-label { font-weight: 600; font-size: 13px; color: #444; }
    .image-preview { width: 100%; height: 180px; object-fit: cover; border-radius: 8px; display: none; }
    .icon-hint { font-size: 11px; color: #888; }
    .preview-box { border: 2px dashed #ddd; border-radius: 8px; padding: 20px; text-align: center; cursor: pointer; transition:.2s; }
    .preview-box:hover { border-color: #0f3460; }
</style>
@endpush

@section('content')
<div class="d-flex align-items-center gap-2 mb-3">
    <a href="{{ route('admin.news.index') }}" class="btn btn-sm btn-outline-secondary">
        <i class='bx bx-arrow-back'></i> Back
    </a>
    <span class="text-muted" style="font-size:13px">News & Updates / Add New Post</span>
</div>

<form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row g-4">

    {{-- LEFT: Main content --}}
    <div class="col-lg-8">
        <div class="card p-4">
            {{-- Title --}}
            <div class="mb-3">
                <label class="form-label">News Title <span class="text-danger">*</span></label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                       value="{{ old('title') }}" placeholder="e.g. FUO Holds 6th Inaugural Lecture" required>
                @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            {{-- Excerpt --}}
            <div class="mb-3">
                <label class="form-label">Excerpt / Short Summary
                    <span class="text-muted fw-normal">(shown on homepage — max 200 chars)</span>
                </label>
                <textarea name="excerpt" class="form-control" rows="2"
                          maxlength="200" placeholder="Brief description of the news...">{{ old('excerpt') }}</textarea>
            </div>

            {{-- Full Body --}}
            <div class="mb-3">
                <label class="form-label">Full Article Body
                    <span class="text-muted fw-normal">(shown on the news detail page)</span>
                </label>
                <textarea name="body" id="body" class="form-control" rows="10"
                          placeholder="Write the full news article here...">{{ old('body') }}</textarea>
            </div>

            {{-- Event Date Label --}}
            <div class="mb-3">
                <label class="form-label">Event Date / Time Label
                    <span class="text-muted fw-normal">(optional — e.g. "Thursday, June 19, 2025 by 2PM")</span>
                </label>
                <input type="text" name="event_date_label" class="form-control"
                       value="{{ old('event_date_label') }}"
                       placeholder="e.g. Thursday, June 19, 2025 by 2PM">
            </div>
        </div>
    </div>

    {{-- RIGHT: Meta / settings --}}
    <div class="col-lg-4">

        {{-- Publish Settings --}}
        <div class="card p-4 mb-4">
            <h6 class="mb-3" style="font-weight:700">Publish Settings</h6>

            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" name="is_published" id="is_published"
                       value="1" {{ old('is_published') ? 'checked' : '' }}>
                <label class="form-check-label" for="is_published">Publish immediately</label>
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" name="is_featured" id="is_featured"
                       value="1" {{ old('is_featured') ? 'checked' : '' }}>
                <label class="form-check-label" for="is_featured">
                    <i class='bx bxs-star text-warning'></i> Mark as Featured
                    <small class="d-block text-muted" style="font-size:11px">Featured posts appear in the right sidebar on the homepage</small>
                </label>
            </div>

            <button type="submit" class="btn btn-fuo w-100">
                <i class='bx bx-save me-1'></i> Save Post
            </button>
        </div>

        {{-- Category + Icon --}}
        <div class="card p-4 mb-4">
            <h6 class="mb-3" style="font-weight:700">Category & Icon</h6>

            <div class="mb-3">
                <label class="form-label">Category <span class="text-danger">*</span></label>
                <select name="category" class="form-select">
                    @foreach($categories as $cat)
                        <option value="{{ $cat }}" {{ old('category') == $cat ? 'selected' : '' }}>
                            {{ $cat }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-2">
                <label class="form-label">Boxicon Class
                    <span class="text-muted fw-normal">(optional)</span>
                </label>
                <input type="text" name="icon" class="form-control"
                       value="{{ old('icon', 'bx bxs-graduation') }}"
                       placeholder="bx bxs-graduation">
                <div class="icon-hint mt-1">
                    Browse icons at <a href="https://boxicons.com" target="_blank">boxicons.com</a>.
                    Current: <i id="icon-preview" class="{{ old('icon', 'bx bxs-graduation') }}"></i>
                </div>
            </div>
        </div>

        {{-- Image Upload --}}
        <div class="card p-4">
            <h6 class="mb-3" style="font-weight:700">News Image</h6>
            <label class="preview-box" for="image-input">
                <img id="image-preview" class="image-preview" alt="preview">
                <div id="upload-placeholder">
                    <i class='bx bx-image-add' style="font-size:36px;color:#ccc"></i>
                    <div style="font-size:13px;color:#999;margin-top:8px">Click to upload image</div>
                    <div style="font-size:11px;color:#bbb">JPG, PNG, WEBP — max 2MB</div>
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
// Image preview
document.getElementById('image-input').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = (ev) => {
        const preview = document.getElementById('image-preview');
        preview.src = ev.target.result;
        preview.style.display = 'block';
        document.getElementById('upload-placeholder').style.display = 'none';
    };
    reader.readAsDataURL(file);
});

// Icon preview
document.querySelector('[name="icon"]').addEventListener('input', function() {
    document.getElementById('icon-preview').className = this.value;
});
</script>
@endpush
