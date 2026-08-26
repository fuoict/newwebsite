@extends('admin.layout')
@section('page_title', 'Create Page')

@section('content')
<div class="d-flex align-items-center gap-2 mb-3">
    <a href="{{ route('admin.pages.index') }}" class="btn btn-sm btn-outline-secondary">
        <i class='bx bx-arrow-back'></i> Back
    </a>
    <span class="text-muted" style="font-size:13px">Pages / Create</span>
</div>

<form action="{{ route('admin.pages.store') }}" method="POST">
    @csrf
    <div class="row g-4 page-editor-grid">
        <div class="col-lg-8 col-xl-8">
            <div class="card p-4">
                <div class="mb-3">
                    <label class="form-label">Page Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" value="{{ old('title') }}"
                           class="form-control @error('title') is-invalid @enderror" required>
                    @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Page Slug <span class="text-danger">*</span></label>
                    <input type="text" name="slug" value="{{ old('slug') }}"
                           class="form-control @error('slug') is-invalid @enderror"
                           placeholder="my-page-slug" required>
                    @error('slug')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    <small class="text-muted">Used in the page URL and must be unique.</small>
                </div>

                <div class="mb-3">
                    <label class="form-label">Hero Title</label>
                    <input type="text" name="hero_title" value="{{ old('hero_title') }}"
                           class="form-control @error('hero_title') is-invalid @enderror" placeholder="Optional hero heading">
                    @error('hero_title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Hero Subtitle</label>
                    <input type="text" name="hero_subtitle" value="{{ old('hero_subtitle') }}"
                           class="form-control @error('hero_subtitle') is-invalid @enderror" placeholder="Optional hero description">
                    @error('hero_subtitle')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Hero Image</label>
                    <input type="text" name="hero_image" value="{{ old('hero_image') }}"
                           class="form-control @error('hero_image') is-invalid @enderror" placeholder="/img/example.jpg">
                    @error('hero_image')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Intro Paragraph</label>
                    <textarea name="intro_content" rows="4" class="form-control @error('intro_content') is-invalid @enderror" placeholder="Welcome text or intro paragraph">{{ old('intro_content') }}</textarea>
                    @error('intro_content')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    <small class="text-muted">This is the opening paragraph that appears near the top of the page.</small>
                </div>

                <div class="mb-3">
                    <label class="form-label">Content Sections</label>
                    <div id="content-blocks"></div>
                    <button type="button" class="btn btn-outline-secondary btn-sm mt-2" onclick="addContentBlock()">
                        <i class='bx bx-plus'></i> Add Section
                    </button>
                </div>

                <div class="mb-3">
                    <label class="form-label">Additional Images</label>
                    <textarea name="images" rows="4" class="form-control @error('images') is-invalid @enderror" placeholder="One image path or URL per line">{{ old('images') }}</textarea>
                    @error('images')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    <small class="text-muted">Add or remove image paths/URLs here. Each line becomes a selectable image entry.</small>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-xl-4">
            <div class="card p-4 mb-4">
                <h6 class="mb-3" style="font-weight:700">Publish Settings</h6>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select @error('status') is-invalid @enderror">
                        <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Published</option>
                    </select>
                    @error('status')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Published At</label>
                    <input type="datetime-local" name="published_at" value="{{ old('published_at') }}"
                           class="form-control @error('published_at') is-invalid @enderror">
                    @error('published_at')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <button type="submit" class="btn btn-fuo w-100">
                    <i class='bx bx-save me-1'></i> Save Page
                </button>
            </div>

            <div class="card p-4">
                <h6 class="mb-3" style="font-weight:700">SEO Settings</h6>
                <div class="mb-3">
                    <label class="form-label">Meta Title</label>
                    <input type="text" name="meta_title" value="{{ old('meta_title') }}"
                           class="form-control @error('meta_title') is-invalid @enderror">
                    @error('meta_title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control @error('meta_description') is-invalid @enderror">{{ old('meta_description') }}</textarea>
                    @error('meta_description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Template</label>
                    <input type="text" name="template" value="{{ old('template') }}"
                           class="form-control @error('template') is-invalid @enderror" placeholder="optional template name">
                    @error('template')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
            </div>
        </div>
    </div>
</form>

@push('scripts')
<script>
function escapeHtml(value) {
    return String(value || '')
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#39;');
}

function createContentBlock(heading = '', body = '') {
    const container = document.getElementById('content-blocks');
    const index = container.children.length;
    const row = document.createElement('div');
    row.className = 'border rounded p-3 mb-2';
    row.innerHTML = `
        <div class="mb-2">
            <label class="form-label">Section Heading</label>
            <input type="text" name="content_blocks[${index}][heading]" class="form-control" placeholder="e.g. Mission" value="${escapeHtml(heading)}">
        </div>
        <div class="mb-2">
            <label class="form-label">Section Body</label>
            <textarea name="content_blocks[${index}][body]" rows="4" class="form-control" placeholder="Add the section text here">${escapeHtml(body)}</textarea>
        </div>
        <button type="button" class="btn btn-sm btn-outline-danger" onclick="this.parentElement.remove()">Remove</button>
    `;
    container.appendChild(row);
}

function addContentBlock() {
    createContentBlock();
}

function initializeContentBlocks() {
    const initialBlocks = @json(old('content_blocks', []));
    if (Array.isArray(initialBlocks) && initialBlocks.length > 0) {
        initialBlocks.forEach(block => {
            createContentBlock(block.heading || '', block.body || '');
        });
    }
}

document.addEventListener('DOMContentLoaded', initializeContentBlocks);
</script>
@endpush
