@extends('admin.layout')
@section('page_title', 'Create Featured Link')

@section('content')
<div class="card">
    <div class="card-header py-3 px-4">
        <i class='bx bx-plus-circle me-2'></i>New Featured Link
    </div>
    <div class="card-body p-4">
        <form action="{{ route('admin.featured-links.store') }}" method="POST" enctype="multipart/form-data">
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
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title') }}" required placeholder="e.g. Staff List">
                    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">URL</label>
                    <input type="text" name="url" class="form-control" value="{{ old('url') }}"
                           placeholder="e.g. /departments/biology/staff or https://...">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Icon (Boxicon class)</label>
                    <input type="text" name="icon" class="form-control" value="{{ old('icon') }}"
                           placeholder="e.g. bx bx-user">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Sort Order</label>
                    <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', 0) }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Image (optional)</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Short Content / Summary</label>
                    <textarea name="content" class="form-control" rows="3" placeholder="Brief text shown at the top of the page">{{ old('content') }}</textarea>
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Full Page Body (HTML allowed)</label>
                    <textarea name="body" class="form-control" rows="8" placeholder="Main content of this page...">{{ old('body') }}</textarea>
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_active" value="1"
                               {{ old('is_active', 1) ? 'checked' : '' }}>
                        <label class="form-check-label fw-semibold">Active</label>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-fuo"><i class='bx bx-save me-1'></i> Save</button>
                    <a href="{{ route('admin.featured-links.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
