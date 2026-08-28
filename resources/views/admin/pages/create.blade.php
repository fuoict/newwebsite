@extends('admin.layout')
@section('page_title', isset($page) ? 'Edit Page' : 'Create Page')
@section('content')
<div class="card">
    <div class="card-header py-3 px-4"><i class='bx {{ isset($page) ? 'bx-edit' : 'bx-plus-circle' }} me-2'></i>{{ isset($page) ? 'Edit' : 'New' }} Page</div>
    <div class="card-body p-4">
        <form action="{{ isset($page) ? route('admin.pages.update', $page) : route('admin.pages.store') }}" method="POST" enctype="multipart/form-data">
            @csrf @if(isset($page)) @method('PUT') @endif

            <div class="row g-3">
                {{-- Basic Info --}}
                <div class="col-12"><h6 class="fw-bold text-muted"><i class='bx bx-info-circle me-1'></i>Basic Information</h6><hr></div>
                <div class="col-md-5"><label class="form-label fw-semibold">Title <span class="text-danger">*</span></label><input type="text" name="title" class="form-control" value="{{ old('title', $page->title ?? '') }}" required></div>
                <div class="col-md-3"><label class="form-label fw-semibold">Section <span class="text-danger">*</span></label><select name="section" class="form-select" required>
                    <option value="university" {{ old('section', $page->section ?? '') == 'university' ? 'selected' : '' }}>The University</option>
                    <option value="officers" {{ old('section', $page->section ?? '') == 'officers' ? 'selected' : '' }}>Principal Officers</option>
                    <option value="admissions" {{ old('section', $page->section ?? '') == 'admissions' ? 'selected' : '' }}>Admissions</option>
                    <option value="academics" {{ old('section', $page->section ?? '') == 'academics' ? 'selected' : '' }}>Academics</option>
                    <option value="publications" {{ old('section', $page->section ?? '') == 'publications' ? 'selected' : '' }}>Publications</option>
                    <option value="downloads" {{ old('section', $page->section ?? '') == 'downloads' ? 'selected' : '' }}>Downloads</option>
                    <option value="showcase" {{ old('section', $page->section ?? '') == 'showcase' ? 'selected' : '' }}>Showcase</option>
                    <option value="other" {{ old('section', $page->section ?? '') == 'other' ? 'selected' : '' }}>Other</option>
                </select></div>
                <div class="col-md-2"><label class="form-label fw-semibold">Slug</label><input type="text" name="slug" class="form-control" value="{{ old('slug', $page->slug ?? '') }}" placeholder="auto"></div>
                <div class="col-md-2"><label class="form-label fw-semibold">Icon</label><input type="text" name="icon" class="form-control" value="{{ old('icon', $page->icon ?? '') }}" placeholder="bx bx-building"></div>
                <div class="col-md-3"><label class="form-label fw-semibold">Parent Page</label><input type="text" name="parent_slug" class="form-control" value="{{ old('parent_slug', $page->parent_slug ?? '') }}" placeholder="e.g. governing-council"></div>
                <div class="col-md-2"><label class="form-label fw-semibold">Route Name</label><input type="text" name="route_name" class="form-control" value="{{ old('route_name', $page->route_name ?? '') }}" placeholder="e.g. the-senate"></div>
                <div class="col-md-2"><label class="form-label fw-semibold">Sort Order</label><input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $page->sort_order ?? 0) }}"></div>
                <div class="col-md-2"><label class="form-label fw-semibold">Layout</label><select name="layout_type" class="form-select">
                    <option value="text" {{ old('layout_type', $page->layout_type ?? 'text') == 'text' ? 'selected' : '' }}>Text</option>
                    <option value="officer" {{ old('layout_type', $page->layout_type ?? '') == 'officer' ? 'selected' : '' }}>Officer Profile</option>
                    <option value="member-grid" {{ old('layout_type', $page->layout_type ?? '') == 'member-grid' ? 'selected' : '' }}>Member Grid</option>
                    <option value="gallery" {{ old('layout_type', $page->layout_type ?? '') == 'gallery' ? 'selected' : '' }}>Gallery</option>
                    <option value="downloads" {{ old('layout_type', $page->layout_type ?? '') == 'downloads' ? 'selected' : '' }}>Downloads</option>
                </select></div>
                <div class="col-md-2 d-flex align-items-end"><div class="form-check form-switch"><input class="form-check-input" type="checkbox" name="is_active" value="1" {{ old('is_active', $page->is_active ?? 1) ? 'checked' : '' }}><label class="form-check-label fw-semibold">Active</label></div></div>

                {{-- Banner --}}
                <div class="col-12"><hr><h6 class="fw-bold text-muted"><i class='bx bx-image me-1'></i>Banner</h6></div>
                <div class="col-md-6"><label class="form-label fw-semibold">Banner Text</label><input type="text" name="banner_text" class="form-control" value="{{ old('banner_text', $page->banner_text ?? '') }}" placeholder="Short tagline for the banner"></div>
                <div class="col-md-6"><label class="form-label fw-semibold">Banner Image</label>@if(($page->banner_image ?? null))<div class="mb-2"><img src="{{ asset('storage/'.$page->banner_image) }}" style="max-height:60px;border-radius:6px"></div>@endif<input type="file" name="banner_image" class="form-control" accept="image/*"></div>

                {{-- Content --}}
                <div class="col-12"><hr><h6 class="fw-bold text-muted"><i class='bx bx-text me-1'></i>Content</h6></div>
                <div class="col-12"><label class="form-label fw-semibold">Intro</label><textarea name="intro" class="form-control" rows="3">{{ old('intro', $page->intro ?? '') }}</textarea></div>
                <div class="col-12"><label class="form-label fw-semibold">Body (HTML)</label><textarea name="body" class="form-control" rows="10">{{ old('body', $page->body ?? '') }}</textarea></div>
                <div class="col-md-6"><label class="form-label fw-semibold">Mission</label><textarea name="mission" class="form-control" rows="3">{{ old('mission', $page->mission ?? '') }}</textarea></div>
                <div class="col-md-6"><label class="form-label fw-semibold">Vision</label><textarea name="vision" class="form-control" rows="3">{{ old('vision', $page->vision ?? '') }}</textarea></div>

                {{-- Members (JSON) --}}
                <div class="col-12"><hr><h6 class="fw-bold text-muted"><i class='bx bx-group me-1'></i>Members (JSON) — For BOT, Council, Senate etc.</h6></div>
                <div class="col-12"><label class="form-label fw-semibold">Members JSON</label><textarea name="members" class="form-control font-monospace" rows="6" placeholder='[{"name":"Prof. A. B. Smith","role":"Chairman","photo":""}]'>{{ old('members', isset($page) && $page->members ? json_encode($page->members, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) : '') }}</textarea>
                <small class="text-muted">Format: [{"name":"...","role":"...","photo":"...","description":"..."}]</small></div>

                {{-- Officers (JSON) --}}
                <div class="col-12"><hr><h6 class="fw-bold text-muted"><i class='bx bx-user me-1'></i>Officers (JSON) — For VC, DVC, Registrar etc.</h6></div>
                <div class="col-12"><label class="form-label fw-semibold">Officers JSON</label><textarea name="officers" class="form-control font-monospace" rows="6" placeholder='[{"name":"Prof. A. B. Smith","title":"Vice-Chancellor","photo":"","bio":""}]'>{{ old('officers', isset($page) && $page->officers ? json_encode($page->officers, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) : '') }}</textarea>
                <small class="text-muted">Format: [{"name":"...","title":"...","photo":"...","bio":"..."}]</small></div>

                {{-- Downloads (JSON) --}}
                <div class="col-12"><hr><h6 class="fw-bold text-muted"><i class='bx bx-download me-1'></i>Downloads (JSON)</h6></div>
                <div class="col-12"><label class="form-label fw-semibold">Downloads JSON</label><textarea name="downloads" class="form-control font-monospace" rows="6" placeholder='[{"title":"Staff Handbook","url":"","icon":"bx bx-file-pdf"}]'>{{ old('downloads', isset($page) && $page->downloads ? json_encode($page->downloads, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) : '') }}</textarea>
                <small class="text-muted">Format: [{"title":"...","url":"...","icon":"...","description":"..."}]</small></div>

                {{-- Gallery (JSON) --}}
                <div class="col-12"><hr><h6 class="fw-bold text-muted"><i class='bx bx-images me-1'></i>Gallery (JSON)</h6></div>
                <div class="col-12"><label class="form-label fw-semibold">Gallery JSON</label><textarea name="gallery" class="form-control font-monospace" rows="6" placeholder='[{"url":"img/gallery/photo1.jpg","caption":"Campus view"}]'>{{ old('gallery', isset($page) && $page->gallery ? json_encode($page->gallery, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) : '') }}</textarea>
                <small class="text-muted">Format: [{"url":"...","caption":"..."}]</small></div>

                {{-- Sidebar Links (JSON) --}}
                <div class="col-12"><hr><h6 class="fw-bold text-muted"><i class='bx bx-menu me-1'></i>Sidebar Links (JSON)</h6></div>
                <div class="col-12"><label class="form-label fw-semibold">Sidebar Links JSON</label><textarea name="sidebar_links" class="form-control font-monospace" rows="4" placeholder='[{"label":"Overview","url":"#","active":true}]'>{{ old('sidebar_links', isset($page) && $page->sidebar_links ? json_encode($page->sidebar_links, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) : '') }}</textarea>
                <small class="text-muted">Format: [{"label":"...","url":"...","active":false}]</small></div>

                <div class="col-12 mt-3"><button type="submit" class="btn btn-fuo"><i class='bx bx-save me-1'></i> {{ isset($page) ? 'Update' : 'Save' }}</button> <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Cancel</a></div>
            </div>
        </form>
    </div>
</div>
@endsection
