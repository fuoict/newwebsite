@extends('admin.layout')
@section('page_title', 'Add Gallery Album')
@section('content')
<div class="card">
    <div class="card-header py-3 px-4"><i class='bx bx-plus-circle me-2'></i>Add Gallery Album</div>
    <div class="card-body p-4">
        @if($errors->any())
            <div class="alert alert-danger"><ul class="mb-0 ps-3">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
        @endif
        <form action="{{ route('admin.gallery.store') }}" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-md-8">
                    <label class="form-label fw-semibold">Heading <span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required placeholder="e.g. Annual Staff Games">
                    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Sort Order</label>
                    <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', 0) }}" min="0">
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Subheading / Description</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="3" maxlength="1000" placeholder="e.g. It's all fun and competition as staff across departments take part in the staff games...">{{ old('description') }}</textarea>
                    <div class="form-text">Shown under the heading on the gallery page. Optional.</div>
                    @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_active" value="1" {{ old('is_active', 1) ? 'checked' : '' }}>
                        <label class="form-check-label fw-semibold">Active</label>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-fuo"><i class='bx bx-save me-1'></i> Save &amp; Continue to Images</button>
                    <a href="{{ route('admin.gallery.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
