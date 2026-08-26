@extends('admin.layout')
@section('page_title', 'Create Department News')

@section('content')
<div class="card">
    <div class="card-header py-3 px-4">
        <i class='bx bx-plus-circle me-2'></i>New Department News
    </div>
    <div class="card-body p-4">
        <form action="{{ route('admin.department-news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Department <span class="text-danger">*</span></label>
                    <select name="department_id" class="form-select @error('department_id') is-invalid @enderror" required>
                        <option value="">Select Department</option>
                        @foreach($departments as $dept)
                            <option value="{{ $dept->id }}" {{ old('department_id') == $dept->id ? 'selected' : '' }}>
                                {{ $dept->department_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('department_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title') }}" required>
                    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Excerpt</label>
                    <textarea name="excerpt" class="form-control" rows="2">{{ old('excerpt') }}</textarea>
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Body</label>
                    <textarea name="body" class="form-control" rows="8">{{ old('body') }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Image</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Published At</label>
                    <input type="datetime-local" name="published_at" class="form-control"
                           value="{{ old('published_at') }}">
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
                    <a href="{{ route('admin.department-news.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
