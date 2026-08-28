@extends('admin.layout')
@section('page_title', isset($department) ? 'Edit Department' : 'Create Department')
@section('content')
<div class="card">
    <div class="card-header py-3 px-4"><i class='bx {{ isset($department) ? 'bx-edit' : 'bx-plus-circle' }} me-2'></i>{{ isset($department) ? 'Edit' : 'New' }} Department</div>
    <div class="card-body p-4">
        <form action="{{ isset($department) ? route('admin.departments.update', $department) : route('admin.departments.store') }}" method="POST" enctype="multipart/form-data">
            @csrf @if(isset($department)) @method('PUT') @endif
            <div class="row g-3">
                <div class="col-md-5"><label class="form-label fw-semibold">Department Name <span class="text-danger">*</span></label><input type="text" name="department_name" class="form-control" value="{{ old('department_name', $department->department_name ?? '') }}" required></div>
                <div class="col-md-3"><label class="form-label fw-semibold">Code</label><input type="text" name="department_code" class="form-control" value="{{ old('department_code', $department->department_code ?? '') }}" placeholder="e.g. CSS"></div>
                <div class="col-md-4"><label class="form-label fw-semibold">College <span class="text-danger">*</span></label><select name="college_id" class="form-select" required><option value="">Select College</option>@foreach($colleges as $c)<option value="{{ $c->id }}" {{ old('college_id', $department->college_id ?? '') == $c->id ? 'selected' : '' }}>{{ $c->college_name }}</option>@endforeach</select></div>
                <div class="col-md-4"><label class="form-label fw-semibold">Slug</label><input type="text" name="slug" class="form-control" value="{{ old('slug', $department->slug ?? '') }}" placeholder="auto-generated"></div>
                <div class="col-12"><hr><h6 class="fw-bold text-muted">HOD Information</h6></div>
                <div class="col-md-4"><label class="form-label fw-semibold">HOD Name</label><input type="text" name="hod_name" class="form-control" value="{{ old('hod_name', $department->hod_name ?? '') }}"></div>
                <div class="col-md-4"><label class="form-label fw-semibold">HOD Email</label><input type="email" name="hod_email" class="form-control" value="{{ old('hod_email', $department->hod_email ?? '') }}"></div>
                <div class="col-md-4"><label class="form-label fw-semibold">HOD Phone</label><input type="text" name="hod_phone" class="form-control" value="{{ old('hod_phone', $department->hod_phone ?? '') }}"></div>
                <div class="col-md-6"><label class="form-label fw-semibold">HOD Image</label>@if(($department->hod_image ?? null))<div class="mb-2"><img src="{{ asset('storage/'.$department->hod_image) }}" style="max-height:60px;border-radius:6px"></div>@endif<input type="file" name="hod_image" class="form-control" accept="image/*"></div>
                <div class="col-md-6"><label class="form-label fw-semibold">Department Image</label>@if(($department->department_image ?? null))<div class="mb-2"><img src="{{ asset('storage/'.$department->department_image) }}" style="max-height:60px;border-radius:6px"></div>@endif<input type="file" name="department_image" class="form-control" accept="image/*"></div>
                <div class="col-12"><hr><h6 class="fw-bold text-muted">Content</h6></div>
                <div class="col-12"><label class="form-label fw-semibold">Department Title</label><input type="text" name="department_title" class="form-control" value="{{ old('department_title', $department->department_title ?? '') }}"></div>
                <div class="col-12"><label class="form-label fw-semibold">Description</label><textarea name="department_description" class="form-control" rows="4">{{ old('department_description', $department->department_description ?? '') }}</textarea></div>
                <div class="col-12"><label class="form-label fw-semibold">About Department</label><textarea name="about_department" class="form-control" rows="4">{{ old('about_department', $department->about_department ?? '') }}</textarea></div>
                <div class="col-md-6"><label class="form-label fw-semibold">Mission</label><textarea name="mission" class="form-control" rows="3">{{ old('mission', $department->mission ?? '') }}</textarea></div>
                <div class="col-md-6"><label class="form-label fw-semibold">Vision</label><textarea name="vision" class="form-control" rows="3">{{ old('vision', $department->vision ?? '') }}</textarea></div>
                <div class="col-md-3 d-flex align-items-end"><div class="form-check form-switch"><input class="form-check-input" type="checkbox" name="is_active" value="1" {{ old('is_active', $department->is_active ?? 1) ? 'checked' : '' }}><label class="form-check-label fw-semibold">Active</label></div></div>
                <div class="col-12 mt-3"><button type="submit" class="btn btn-fuo"><i class='bx bx-save me-1'></i> {{ isset($department) ? 'Update' : 'Save' }}</button> <a href="{{ route('admin.departments.index') }}" class="btn btn-secondary">Cancel</a></div>
            </div>
        </form>
    </div>
</div>
@endsection
