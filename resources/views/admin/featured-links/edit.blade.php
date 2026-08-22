@extends('admin.layout')
@section('page_title', 'Edit Featured Link')

@section('content')
<div class="card">
    <div class="card-header py-3 px-4">
        <i class='bx bx-edit me-2'></i>Edit Featured Link
    </div>
    <div class="card-body p-4">
        <form action="{{ route('admin.featured-links.update', $featuredLink) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Department <span class="text-danger">*</span></label>
                    <select name="department_id" class="form-select @error('department_id') is-invalid @enderror" required>
                        <option value="">Select Department</option>
                        @foreach($departments as $dept)
                            <option value="{{ $dept->id }}" {{ old('department_id', $featuredLink->department_id) == $dept->id ? 'selected' : '' }}>
                                {{ $dept->department_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('department_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title', $featuredLink->title) }}" required>
                    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">URL</label>
                    <input type="text" name="url" class="form-control" value="{{ old('url', $featuredLink->url) }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Icon</label>
                    <input type="text" name="icon" class="form-control" value="{{ old('icon', $featuredLink->icon) }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Sort Order</label>
                    <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $featuredLink->sort_order) }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Image</label>
                    @if($featuredLink->image)
                        <div class="mb-2">
                            <img src="{{ asset('storage/'.$featuredLink->image) }}" style="max-height:60px;border-radius:6px">
                        </div>
                    @endif
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Short Content / Summary</label>
                    <textarea name="content" class="form-control" rows="3">{{ old('content', $featuredLink->content) }}</textarea>
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Full Page Body (HTML allowed)</label>
                    <textarea name="body" class="form-control" rows="8">{{ old('body', $featuredLink->body) }}</textarea>
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_active" value="1"
                               {{ old('is_active', $featuredLink->is_active) ? 'checked' : '' }}>
                        <label class="form-check-label fw-semibold">Active</label>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-fuo"><i class='bx bx-save me-1'></i> Update</button>
                    <a href="{{ route('admin.featured-links.index', ['department_id' => $featuredLink->department_id]) }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
