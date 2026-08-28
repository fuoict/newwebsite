@extends('admin.layout')
@section('page_title', 'Edit College')
@section('content')
<div class="card">
    <div class="card-header py-3 px-4"><i class='bx bx-edit me-2'></i>Edit College</div>
    <div class="card-body p-4">
        <form action="{{ route('admin.colleges.update', $college) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="row g-3">
                <div class="col-md-6"><label class="form-label fw-semibold">College Name <span class="text-danger">*</span></label><input type="text" name="college_name" class="form-control" value="{{ old('college_name', $college->college_name) }}" required></div>
                <div class="col-md-3"><label class="form-label fw-semibold">Abbreviation</label><input type="text" name="college_abbr" class="form-control" value="{{ old('college_abbr', $college->college_abbr) }}"></div>
                <div class="col-md-3"><label class="form-label fw-semibold">Slug</label><input type="text" name="slug" class="form-control" value="{{ old('slug', $college->slug) }}"></div>
                <div class="col-12"><hr><h6 class="fw-bold text-muted">Dean Information</h6></div>
                <div class="col-md-5"><label class="form-label fw-semibold">Dean Name</label><input type="text" name="dean_name" class="form-control" value="{{ old('dean_name', $college->dean_name) }}"></div>
                <div class="col-md-4"><label class="form-label fw-semibold">Dean Speech Title</label><input type="text" name="dean_speach_title" class="form-control" value="{{ old('dean_speach_title', $college->dean_speach_title) }}"></div>
                <div class="col-md-3"><label class="form-label fw-semibold">Dean Photo</label>@if($college->dean_image)<div class="mb-2"><img src="{{ asset('storage/'.$college->dean_image) }}" style="max-height:60px;border-radius:6px"></div>@endif<input type="file" name="dean_image" class="form-control" accept="image/*"></div>
                <div class="col-12"><label class="form-label fw-semibold">Dean Speech</label><textarea name="dean_speach_desc" class="form-control" rows="4">{{ old('dean_speach_desc', $college->dean_speach_desc) }}</textarea></div>
                <div class="col-12"><label class="form-label fw-semibold">About College</label><textarea name="about_college" class="form-control" rows="5">{{ old('about_college', $college->about_college) }}</textarea></div>
                <div class="col-md-6"><label class="form-label fw-semibold">Mission</label><textarea name="mission" class="form-control" rows="4">{{ old('mission', $college->mission) }}</textarea></div>
                <div class="col-md-6"><label class="form-label fw-semibold">Vision</label><textarea name="vision" class="form-control" rows="4">{{ old('vision', $college->vision) }}</textarea></div>
                <div class="col-md-3 d-flex align-items-end"><div class="form-check form-switch"><input class="form-check-input" type="checkbox" name="is_active" value="1" {{ old('is_active', $college->is_active) ? 'checked' : '' }}><label class="form-check-label fw-semibold">Active</label></div></div>
                <div class="col-12 mt-3"><button type="submit" class="btn btn-fuo"><i class='bx bx-save me-1'></i> Update</button> <a href="{{ route('admin.colleges.index') }}" class="btn btn-secondary">Cancel</a></div>
            </div>
        </form>
    </div>
</div>
@endsection
