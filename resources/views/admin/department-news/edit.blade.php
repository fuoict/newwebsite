@extends('admin.layout')
@section('page_title', 'Edit Department News')

@section('content')
<div class="card">
    <div class="card-header py-3 px-4">
        <i class='bx bx-edit me-2'></i>Edit Department News
    </div>
    <div class="card-body p-4">
        <form action="{{ route('admin.department-news.update', $departmentNews) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Department <span class="text-danger">*</span></label>
                    <select name="department_id" class="form-select @error('department_id') is-invalid @enderror" required>
                        <option value="">Select Department</option>
                        @foreach($departments as $dept)
                            <option value="{{ $dept->id }}" {{ old('department_id', $departmentNews->department_id) == $dept->id ? 'selected' : '' }}>
                                {{ $dept->department_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('department_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title', $departmentNews->title) }}" required>
                    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Excerpt</label>
                    <textarea name="excerpt" class="form-control" rows="2">{{ old('excerpt', $departmentNews->excerpt) }}</textarea>
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Body</label>
                    <textarea name="body" class="form-control" rows="8">{{ old('body', $departmentNews->body) }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Image</label>
                    @if($departmentNews->image)
                        <div class="mb-2">
                            <img src="{{ asset('storage/'.$departmentNews->image) }}" style="max-height:80px;border-radius:6px">
                        </div>
                    @endif
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_published" value="1"
                               {{ old('is_published', $departmentNews->is_published) ? 'checked' : '' }}>
                        <label class="form-check-label fw-semibold">Published</label>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-fuo"><i class='bx bx-save me-1'></i> Update</button>
                    <a href="{{ route('admin.department-news.index', ['department_id' => $departmentNews->department_id]) }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
