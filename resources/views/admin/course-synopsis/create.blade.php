@extends('admin.layout')
@section('page_title', 'Add Course')

@section('content')
<div class="card">
    <div class="card-header py-3 px-4">
        <i class='bx bx-plus-circle me-2'></i>Add Course
    </div>
    <div class="card-body p-4">
        <form action="{{ route('admin.course-synopsis.store') }}" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Department <span class="text-danger">*</span></label>
                    <select name="department_id" class="form-select @error('department_id') is-invalid @enderror" required>
                        <option value="">Select Department</option>
                        @foreach($departments as $dept)
                            <option value="{{ $dept->id }}" {{ ($departmentId ?? old('department_id')) == $dept->id ? 'selected' : '' }}>
                                {{ $dept->department_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('department_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Level <span class="text-danger">*</span></label>
                    <select name="level" class="form-select @error('level') is-invalid @enderror" required>
                        <option value="">Select</option>
                        @foreach([100,200,300,400,500,600] as $lv)
                            <option value="{{ $lv }}" {{ old('level') == $lv ? 'selected' : '' }}>{{ $lv }}L</option>
                        @endforeach
                    </select>
                    @error('level') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Type <span class="text-danger">*</span></label>
                    <select name="type" class="form-select @error('type') is-invalid @enderror" required>
                        @foreach($types as $type)
                            <option value="{{ $type }}" {{ old('type') == $type ? 'selected' : '' }}>{{ ucfirst($type) }}</option>
                        @endforeach
                    </select>
                    @error('type') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Course Code <span class="text-danger">*</span></label>
                    <input type="text" name="course_code" class="form-control @error('course_code') is-invalid @enderror"
                           value="{{ old('course_code') }}" required placeholder="e.g. GST 101">
                    @error('course_code') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-5">
                    <label class="form-label fw-semibold">Course Title <span class="text-danger">*</span></label>
                    <input type="text" name="course_title" class="form-control @error('course_title') is-invalid @enderror"
                           value="{{ old('course_title') }}" required>
                    @error('course_title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Credit Units <span class="text-danger">*</span></label>
                    <input type="number" name="unit" class="form-control @error('unit') is-invalid @enderror"
                           value="{{ old('unit', 3) }}" min="0" max="10" required>
                    @error('unit') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Course Description</label>
                    <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_published" value="1"
                               {{ old('is_published', 1) ? 'checked' : '' }}>
                        <label class="form-check-label fw-semibold">Published</label>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-fuo"><i class='bx bx-save me-1'></i> Save</button>
                    <a href="{{ route('admin.course-synopsis.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
