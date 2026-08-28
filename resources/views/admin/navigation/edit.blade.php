@extends('admin.layout')
@section('page_title', 'Edit Menu Item')
@section('content')
<div class="card">
    <div class="card-header py-3 px-4"><i class='bx bx-edit me-2'></i>Edit Menu Item</div>
    <div class="card-body p-4">
        <form action="{{ route('admin.navigation.update', $navigationItem) }}" method="POST">
            @csrf @method('PUT')
            <div class="row g-3">
                <div class="col-md-4"><label class="form-label fw-semibold">Label <span class="text-danger">*</span></label><input type="text" name="label" class="form-control" value="{{ old('label', $navigationItem->label) }}" required></div>
                <div class="col-md-4"><label class="form-label fw-semibold">Route Name</label><input type="text" name="route_name" class="form-control" value="{{ old('route_name', $navigationItem->route_name) }}"></div>
                <div class="col-md-4"><label class="form-label fw-semibold">External URL</label><input type="text" name="url" class="form-control" value="{{ old('url', $navigationItem->url) }}"></div>
                <div class="col-md-4"><label class="form-label fw-semibold">Parent Item</label><select name="parent_id" class="form-select"><option value="">— Top Level —</option>@foreach($parents as $p)<option value="{{ $p->id }}" {{ old('parent_id', $navigationItem->parent_id) == $p->id ? 'selected' : '' }}>{{ $p->label }}</option>@endforeach</select></div>
                <div class="col-md-2"><label class="form-label fw-semibold">Sort Order</label><input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $navigationItem->sort_order) }}"></div>
                <div class="col-md-2"><label class="form-label fw-semibold">Target</label><select name="target" class="form-select"><option value="_self" {{ old('target', $navigationItem->target) == '_self' ? 'selected' : '' }}>Same Tab</option><option value="_blank" {{ old('target', $navigationItem->target) == '_blank' ? 'selected' : '' }}>New Tab</option></select></div>
                <div class="col-md-2"><label class="form-label fw-semibold">External?</label><div class="form-check form-switch mt-2"><input class="form-check-input" type="checkbox" name="is_external" value="1" {{ old('is_external', $navigationItem->is_external) ? 'checked' : '' }}><label class="form-check-label">Yes</label></div></div>
                <div class="col-md-2"><label class="form-label fw-semibold">Active?</label><div class="form-check form-switch mt-2"><input class="form-check-input" type="checkbox" name="is_active" value="1" {{ old('is_active', $navigationItem->is_active) ? 'checked' : '' }}><label class="form-check-label">Yes</label></div></div>
                <div class="col-12 mt-3"><button type="submit" class="btn btn-fuo"><i class='bx bx-save me-1'></i> Update</button> <a href="{{ route('admin.navigation.index') }}" class="btn btn-secondary">Cancel</a></div>
            </div>
        </form>
    </div>
</div>
@endsection
