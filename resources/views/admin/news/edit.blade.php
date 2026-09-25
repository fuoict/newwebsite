@extends('admin.layout')
@section('page_title', 'Edit News Post')

@push('styles')
<style>
    .form-label { font-weight: 600; font-size: 13px; color: #444; }
    .image-preview { width: 100%; height: 180px; object-fit: cover; border-radius: 8px; }
    .preview-box { border: 2px dashed #ddd; border-radius: 8px; padding: 10px; text-align: center; cursor: pointer; }
    .preview-box:hover { border-color: #0f3460; }
    .icon-hint { font-size: 11px; color: #888; }
    .tox-tinymce { border-radius: 8px !important; }
</style>
@endpush

@section('content')
<div class="d-flex align-items-center gap-2 mb-3">
    <a href="{{ route('admin.news.index') }}" class="btn btn-sm btn-outline-secondary">
        <i class='bx bx-arrow-back'></i> Back
    </a>
    <span class="text-muted" style="font-size:13px">News & Updates / Edit Post</span>
</div>

{{-- UPDATE FORM OPENS HERE --}}
<form id="update-form" action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
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
                    <span class="text-muted fw-normal">(shown on homepage — max 200 chars)</span>
                </label>
                <textarea name="excerpt" class="form-control" rows="2"
                          maxlength="200">{{ old('excerpt', $news->excerpt) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Full Article Body
                    <span class="text-muted fw-normal">(supports text formatting & inline images)</span>
                </label>
                <textarea name="body" id="body-content" class="d-none">{{ old('body', $news->body) }}</textarea>
                <div id="editor-container" style="min-height:300px"></div>
            </div>

            <div class="mb-3">
                <label class="form-label">Event Date / Time Label
                    <span class="text-muted fw-normal">(e.g. "Thursday, June 19, 2025 by 2PM")</span>
                </label>
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
                    <small class="d-block text-muted" style="font-size:11px">Show in homepage left column</small>
                </label>
            </div>

            <div class="mb-3">
                <label class="form-label">Publish Date & Time
                    <span class="text-muted fw-normal" style="font-weight:normal">(leave empty for auto)</span>
                </label>
                <input type="datetime-local" name="published_at" class="form-control"
                       value="{{ old('published_at', $news->published_at ? $news->published_at->format('Y-m-d\\TH:i') : '') }}">
            </div>

            <button type="submit" form="update-form" class="btn btn-fuo w-100 mb-2">
                <i class='bx bx-save me-1'></i> Update Post
            </button>
            <button type="button" class="btn btn-outline-primary w-100" onclick="previewNews()">
                <i class='bx bx-show me-1'></i> Preview
            </button>
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

        {{-- Department Tagging --}}
        @if(isset($departments) && $departments->count())
        <div class="card p-4 mb-4">
            <h6 class="mb-3" style="font-weight:700">
                <i class='bx bx-buildings'></i> Department Tagging
            </h6>
            <p class="text-muted" style="font-size:11px; margin-bottom:10px">
                Tag this news to specific departments. It will also appear on those department pages.
            </p>
            @php $currentDepts = old('departments', $news->departments ?? []); @endphp
            <div style="max-height:200px; overflow-y:auto; border:1px solid #eee; border-radius:6px; padding:10px;">
                @foreach($departments as $id => $name)
                <div class="form-check" style="margin-bottom:4px">
                    <input class="form-check-input" type="checkbox" name="departments[]"
                           value="{{ $name }}" id="dept-{{ $id }}"
                           {{ in_array($name, $currentDepts) ? 'checked' : '' }}>
                    <label class="form-check-label" for="dept-{{ $id }}" style="font-size:12px">
                        {{ $name }}
                    </label>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        <div class="card p-4 mb-4">
            <h6 class="mb-3" style="font-weight:700">Featured Image</h6>
            @if($news->image)
            <div class="mb-2">
                <img src="{{ $news->image_url }}" class="image-preview" alt="current image">
                <small class="text-muted d-block mt-1">Current image — upload a new one to replace</small>
            </div>
            @endif
            <label class="preview-box mt-2" for="image-input">
                <img id="image-new-preview" style="width:100%;height:140px;object-fit:cover;border-radius:6px;display:none" alt="">
                <div id="upload-placeholder">
                    <i class='bx bx-image-add' style="font-size:32px;color:#ccc"></i>
                    <div style="font-size:12px;color:#999;margin-top:6px">Click to upload new image</div>
                    <div style="font-size:11px;color:#bbb">JPG, PNG, WEBP — max 2MB</div>
                </div>
            </label>
            <input type="file" id="image-input" name="image" accept="image/*" class="d-none">
            @error('image')<div class="text-danger mt-1" style="font-size:12px">{{ $message }}</div>@enderror
        </div>

    </div>{{-- end col-lg-4 --}}

</div>{{-- end row --}}

</form>
{{-- ✅ UPDATE FORM IS NOW FULLY CLOSED ABOVE THIS LINE --}}

{{-- Preview Modal --}}
<div id="previewModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,.7); z-index:9999; overflow-y:auto; padding:20px">
    <div style="max-width:800px; margin:0 auto; background:#fff; border-radius:12px; overflow:hidden; box-shadow:0 8px 40px rgba(0,0,0,.3)">
        <div style="display:flex; justify-content:space-between; align-items:center; padding:16px 20px; border-bottom:1px solid #eee">
            <h5 style="margin:0; font-weight:700"><i class='bx bx-show me-1'></i> News Preview</h5>
            <button onclick="closePreview()" style="background:none; border:none; font-size:24px; cursor:pointer; color:#666">&times;</button>
        </div>
        <div id="previewContent" style="padding:30px"></div>
    </div>
</div>

{{-- DELETE FORM — completely separate, nothing to do with the update form --}}
<div class="row mt-2">
    <div class="col-lg-4 offset-lg-8">
        <div class="card p-4 border border-danger" style="border-style:dashed !important">
            <h6 class="mb-2 text-danger" style="font-weight:700">
                <i class='bx bx-error-circle'></i> Danger Zone
            </h6>
            <p style="font-size:12px; color:#999; margin-bottom:12px">
                This will permanently delete the post and its image.
            </p>
            <form action="{{ route('admin.news.destroy', $news) }}" method="POST"
                  onsubmit="return confirm('Permanently delete this post? This cannot be undone.')">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-outline-danger w-100">
                    <i class='bx bx-trash me-1'></i> Delete This Post
                </button>
            </form>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
<link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
<script>
var quill = new Quill('#editor-container', {
    theme: 'snow',
    placeholder: 'Write the full news article here...',
    modules: {
        toolbar: [
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
            ['bold', 'italic', 'underline', 'strike'],
            [{ 'color': [] }, { 'background': [] }],
            [{ 'align': [] }],
            ['blockquote', 'code-block'],
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            [{ 'indent': '-1'}, { 'indent': '+1' }],
            ['link', 'image'],
            ['clean']
        ]
    }
});

// Load existing content
var existingBody = @json($news->body);
if (existingBody) {
    quill.root.innerHTML = existingBody;
}

// Sync Quill content to hidden textarea on every text change
quill.on('text-change', function() {
    document.getElementById('body-content').value = quill.root.innerHTML;
});

// Also sync right before form submit (safety net)
document.getElementById('update-form').addEventListener('submit', function() {
    document.getElementById('body-content').value = quill.root.innerHTML;
});

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

// Preview function
function previewNews() {
    var title = document.querySelector('[name="title"]').value || 'Untitled';
    var excerpt = document.querySelector('[name="excerpt"]').value || '';
    var body = quill.root.innerHTML || '';
    var eventDate = document.querySelector('[name="event_date_label"]').value || '';
    var category = document.querySelector('[name="category"]').value || 'General';

    // Clean up empty paragraphs from Quill
    body = body.replace(/<p><br><\/p>/g, '').replace(/<p><\/p>/g, '');

    var html = '<div style="font-family:Segoe UI,Arial,sans-serif; line-height:1.6">';
    html += '<p style="font-size:12px;color:#035F39;font-weight:600;text-transform:uppercase;margin-bottom:8px"><i class="bx bxs-news"></i> ' + category + '</p>';
    html += '<h1 style="font-size:24px;font-weight:800;margin-bottom:16px;color:#1a1a2e">' + title + '</h1>';
    if (eventDate) {
        html += '<p style="font-size:13px;color:#888;margin-bottom:16px"><i class="bx bxs-calendar"></i> ' + eventDate + '</p>';
    }
    if (excerpt) {
        html += '<p style="color:#555;font-style:italic;border-left:4px solid #0f3460;padding-left:16px;margin:16px 0">' + excerpt + '</p>';
    }
    html += '<div class="news-body" style="line-height:1.6;color:#444">' + body + '</div>';
    html += '</div>';

    document.getElementById('previewContent').innerHTML = html;
    document.getElementById('previewModal').style.display = 'block';
}

function closePreview() {
    document.getElementById('previewModal').style.display = 'none';
}
</script>
@endpush
