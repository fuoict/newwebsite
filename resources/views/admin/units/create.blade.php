@extends('admin.layout')
@section('page_title', isset($unit) ? 'Edit Unit' : 'Create Unit')
@section('content')
<div class="card">
    <div class="card-header py-3 px-4"><i class='bx {{ isset($unit) ? 'bx-edit' : 'bx-plus-circle' }} me-2'></i>{{ isset($unit) ? 'Edit' : 'New' }} Unit</div>
    <div class="card-body p-4">
        <form action="{{ isset($unit) ? route('admin.units.update', $unit) : route('admin.units.store') }}" method="POST" enctype="multipart/form-data">
            @csrf @if(isset($unit)) @method('PUT') @endif
            <div class="row g-3">
                <div class="col-md-6"><label class="form-label fw-semibold">Name <span class="text-danger">*</span></label><input type="text" name="name" class="form-control" value="{{ old('name', $unit->name ?? '') }}" required></div>
                <div class="col-md-3"><label class="form-label fw-semibold">Short Name</label><input type="text" name="short_name" class="form-control" value="{{ old('short_name', $unit->short_name ?? '') }}"></div>
                <div class="col-md-3"><label class="form-label fw-semibold">Sort Order</label><input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $unit->sort_order ?? 0) }}"></div>
                <div class="col-12"><hr><h6 class="fw-bold text-muted">Director Information</h6></div>
                <div class="col-md-4"><label class="form-label fw-semibold">Director Name</label><input type="text" name="director_name" class="form-control" value="{{ old('director_name', $unit->director_name ?? '') }}"></div>
                <div class="col-md-3"><label class="form-label fw-semibold">Title</label><input type="text" name="director_title" class="form-control" value="{{ old('director_title', $unit->director_title ?? '') }}"></div>
                <div class="col-md-5"><label class="form-label fw-semibold">Link to Lecturer Profile</label><select name="lecturer_id" class="form-select"><option value="">— None —</option>@foreach($lecturers as $lec)<option value="{{ $lec->id }}" {{ old('lecturer_id', $unit->lecturer_id ?? '') == $lec->id ? 'selected' : '' }}>{{ $lec->full_name }}</option>@endforeach</select></div>
                <div class="col-md-2"><label class="form-label fw-semibold">Director Photo</label><input type="file" name="director_image" class="form-control" accept="image/*"></div>
                <div class="col-md-4"><label class="form-label fw-semibold">Email</label><input type="email" name="email" class="form-control" value="{{ old('email', $unit->email ?? '') }}"></div>
                <div class="col-md-3"><label class="form-label fw-semibold">Phone</label><input type="text" name="phone" class="form-control" value="{{ old('phone', $unit->phone ?? '') }}"></div>
                <div class="col-12"><hr><h6 class="fw-bold text-muted">Content</h6></div>
                <div class="col-12"><label class="form-label fw-semibold">Intro</label><textarea name="intro" class="form-control" rows="3">{{ old('intro', $unit->intro ?? '') }}</textarea></div>
                <div class="col-12"><label class="form-label fw-semibold">Full Description (HTML)</label><textarea name="description" class="form-control" rows="8">{{ old('description', $unit->description ?? '') }}</textarea></div>
                <div class="col-md-4"><label class="form-label fw-semibold">Mission</label><textarea name="mission" class="form-control" rows="4">{{ old('mission', $unit->mission ?? '') }}</textarea></div>
                <div class="col-md-4"><label class="form-label fw-semibold">Vision</label><textarea name="vision" class="form-control" rows="4">{{ old('vision', $unit->vision ?? '') }}</textarea></div>
                <div class="col-md-4"><label class="form-label fw-semibold">Objectives</label><textarea name="objectives" class="form-control" rows="4">{{ old('objectives', $unit->objectives ?? '') }}</textarea></div>
                <div class="col-md-6"><label class="form-label fw-semibold">Banner Image</label>@if(($unit->image ?? null))<div class="mb-2"><img src="{{ asset('storage/'.$unit->image) }}" style="max-height:80px;border-radius:6px"></div>@endif<input type="file" name="image" class="form-control" accept="image/*"></div>
                <div class="col-md-3 d-flex align-items-end"><div class="form-check form-switch"><input class="form-check-input" type="checkbox" name="is_active" value="1" {{ old('is_active', $unit->is_active ?? 1) ? 'checked' : '' }}><label class="form-check-label fw-semibold">Active</label></div></div>
                <div class="col-12 mt-3"><button type="submit" class="btn btn-fuo"><i class='bx bx-save me-1'></i> {{ isset($unit) ? 'Update' : 'Save' }}</button> <a href="{{ route('admin.units.index') }}" class="btn btn-secondary">Cancel</a></div>
            </div>
        </form>
    </div>
</div>
@endsection
