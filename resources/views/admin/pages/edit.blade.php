@extends('admin.layout')
@section('page_title', 'Edit Page')
@section('content')
<div class="card">
    <div class="card-header py-3 px-4"><i class='bx bx-edit me-2'></i>Edit: {{ $page->title }}</div>
    <div class="card-body p-4">
        <form action="{{ route('admin.pages.update', $page) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="row g-3">
                <div class="col-12"><h6 class="fw-bold text-muted"><i class='bx bx-info-circle me-1'></i>Basic Information</h6><hr></div>
                <div class="col-md-5"><label class="form-label fw-semibold">Title <span class="text-danger">*</span></label><input type="text" name="title" class="form-control" value="{{ old('title', $page->title) }}" required></div>
                <div class="col-md-3"><label class="form-label fw-semibold">Section <span class="text-danger">*</span></label><select name="section" class="form-select" required>
                    @foreach(['university'=>'The University','officers'=>'Principal Officers','admissions'=>'Admissions','academics'=>'Academics','publications'=>'Publications','downloads'=>'Downloads','showcase'=>'Showcase','other'=>'Other'] as $val => $lbl)
                        <option value="{{ $val }}" {{ old('section', $page->section) == $val ? 'selected' : '' }}>{{ $lbl }}</option>
                    @endforeach
                </select></div>
                <div class="col-md-2"><label class="form-label fw-semibold">Slug</label><input type="text" name="slug" class="form-control" value="{{ old('slug', $page->slug) }}"></div>
                <div class="col-md-2"><label class="form-label fw-semibold">Icon</label><input type="text" name="icon" class="form-control" value="{{ old('icon', $page->icon) }}"></div>
                <div class="col-md-3"><label class="form-label fw-semibold">Parent</label><input type="text" name="parent_slug" class="form-control" value="{{ old('parent_slug', $page->parent_slug) }}"></div>
                <div class="col-md-2"><label class="form-label fw-semibold">Route</label><input type="text" name="route_name" class="form-control" value="{{ old('route_name', $page->route_name) }}"></div>
                <div class="col-md-2"><label class="form-label fw-semibold">Order</label><input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $page->sort_order) }}"></div>
                <div class="col-md-2"><label class="form-label fw-semibold">Layout</label><select name="layout_type" class="form-select">
                    @foreach(['text'=>'Text','officer'=>'Officer Profile','member-grid'=>'Member Grid','gallery'=>'Gallery','downloads'=>'Downloads'] as $val => $lbl)
                        <option value="{{ $val }}" {{ old('layout_type', $page->layout_type) == $val ? 'selected' : '' }}>{{ $lbl }}</option>
                    @endforeach
                </select></div>
                <div class="col-md-2 d-flex align-items-end"><div class="form-check form-switch"><input class="form-check-input" type="checkbox" name="is_active" value="1" {{ old('is_active', $page->is_active) ? 'checked' : '' }}><label class="form-check-label fw-semibold">Active</label></div></div>

                <div class="col-12"><hr><h6 class="fw-bold text-muted"><i class='bx bx-image me-1'></i>Banner</h6></div>
                <div class="col-md-6"><label class="form-label fw-semibold">Banner Text</label><input type="text" name="banner_text" class="form-control" value="{{ old('banner_text', $page->banner_text) }}"></div>
                <div class="col-md-6"><label class="form-label fw-semibold">Banner Image</label>@if($page->banner_image)<div class="mb-2"><img src="{{ asset('storage/'.$page->banner_image) }}" style="max-height:60px;border-radius:6px"></div>@endif<input type="file" name="banner_image" class="form-control" accept="image/*"></div>

                <div class="col-12"><hr><h6 class="fw-bold text-muted"><i class='bx bx-text me-1'></i>Content</h6></div>
                <div class="col-12"><label class="form-label fw-semibold">Intro</label><textarea name="intro" class="form-control" rows="3">{{ old('intro', $page->intro) }}</textarea></div>
                <div class="col-12"><label class="form-label fw-semibold">Body (HTML)</label><textarea name="body" class="form-control" rows="10">{{ old('body', $page->body) }}</textarea></div>
                <div class="col-md-6"><label class="form-label fw-semibold">Mission</label><textarea name="mission" class="form-control" rows="3">{{ old('mission', $page->mission) }}</textarea></div>
                <div class="col-md-6"><label class="form-label fw-semibold">Vision</label><textarea name="vision" class="form-control" rows="3">{{ old('vision', $page->vision) }}</textarea></div>

                <div class="col-12"><hr><h6 class="fw-bold text-muted"><i class='bx bx-group me-1'></i>Members (JSON)</h6></div>
                <div class="col-12"><textarea name="members" class="form-control font-monospace" rows="8">{{ old('members', $page->members ? json_encode($page->members, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) : '') }}</textarea>
                <small class="text-muted">[{"name":"...","role":"...","photo":"...","description":"..."}]</small></div>

                <div class="col-12"><hr><h6 class="fw-bold text-muted"><i class='bx bx-user me-1'></i>Officers (JSON)</h6></div>
                <div class="col-12"><textarea name="officers" class="form-control font-monospace" rows="8">{{ old('officers', $page->officers ? json_encode($page->officers, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) : '') }}</textarea>
                <small class="text-muted">[{"name":"...","title":"...","photo":"...","bio":"..."}]</small></div>

                <div class="col-12"><hr><h6 class="fw-bold text-muted"><i class='bx bx-download me-1'></i>Downloads (JSON)</h6></div>
                <div class="col-12"><textarea name="downloads" class="form-control font-monospace" rows="6">{{ old('downloads', $page->downloads ? json_encode($page->downloads, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) : '') }}</textarea></div>

                <div class="col-12"><hr><h6 class="fw-bold text-muted"><i class='bx bx-images me-1'></i>Gallery (JSON)</h6></div>
                <div class="col-12"><textarea name="gallery" class="form-control font-monospace" rows="6">{{ old('gallery', $page->gallery ? json_encode($page->gallery, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) : '') }}</textarea></div>

                <div class="col-12"><hr><h6 class="fw-bold text-muted"><i class='bx bx-menu me-1'></i>Sidebar Links (JSON)</h6></div>
                <div class="col-12"><textarea name="sidebar_links" class="form-control font-monospace" rows="4">{{ old('sidebar_links', $page->sidebar_links ? json_encode($page->sidebar_links, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) : '') }}</textarea></div>

                <div class="col-12 mt-3"><button type="submit" class="btn btn-fuo"><i class='bx bx-save me-1'></i> Update</button> <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Cancel</a></div>
            </div>
        </form>
    </div>
</div>
@endsection
