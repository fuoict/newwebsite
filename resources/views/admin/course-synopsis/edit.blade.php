@extends('admin.layout')
@section('page_title', 'Edit Course')

@section('content')
<div class="card">
    <div class="card-header py-3 px-4">
        <i class='bx bx-edit me-2'></i>Edit Course
    </div>
    <div class="card-body p-4">
        <form action="{{ route('admin.course-synopsis.update', $courseSynopsis) }}" method="POST">
            @csrf @method('PUT')
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Department <span class="text-danger">*</span></label>
                    <select name="department_id" class="form-select @error('department_id') is-invalid @enderror" required>
                        <option value="">Select Department</option>
                        @foreach($departments as $dept)
                            <option value="{{ $dept->id }}" {{ old('department_id', $courseSynopsis->department_id) == $dept->id ? 'selected' : '' }}>
                                {{ $dept->department_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('department_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Level <span class="text-danger">*</span></label>
                    <select name="level" class="form-select @error('level') is-invalid @enderror" required>
                        @foreach([100,200,300,400,500,600] as $lv)
                            <option value="{{ $lv }}" {{ old('level', $courseSynopsis->level) == $lv ? 'selected' : '' }}>{{ $lv }}L</option>
                        @endforeach
                    </select>
                    @error('level') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Type <span class="text-danger">*</span></label>
                    <select name="type" class="form-select @error('type') is-invalid @enderror" required>
                        @foreach($types as $type)
                            <option value="{{ $type }}" {{ old('type', $courseSynopsis->type) == $type ? 'selected' : '' }}>{{ ucfirst($type) }}</option>
                        @endforeach
                    </select>
                    @error('type') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Course Code <span class="text-danger">*</span></label>
                    <input type="text" name="course_code" class="form-control @error('course_code') is-invalid @enderror"
                           value="{{ old('course_code', $courseSynopsis->course_code) }}" required>
                    @error('course_code') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-5">
                    <label class="form-label fw-semibold">Course Title <span class="text-danger">*</span></label>
                    <input type="text" name="course_title" class="form-control @error('course_title') is-invalid @enderror"
                           value="{{ old('course_title', $courseSynopsis->course_title) }}" required>
                    @error('course_title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Credit Units <span class="text-danger">*</span></label>
                    <input type="number" name="unit" class="form-control @error('unit') is-invalid @enderror"
                           value="{{ old('unit', $courseSynopsis->unit) }}" min="0" max="10" required>
                    @error('unit') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Course Description</label>
                    <textarea name="description" class="form-control" rows="4">{{ old('description', $courseSynopsis->description) }}</textarea>
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_published" value="1"
                               {{ old('is_published', $courseSynopsis->is_published) ? 'checked' : '' }}>
                        <label class="form-check-label fw-semibold">Published</label>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-fuo"><i class='bx bx-save me-1'></i> Update</button>
                    <a href="{{ route('admin.course-synopsis.index', ['department_id' => $courseSynopsis->department_id]) }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
