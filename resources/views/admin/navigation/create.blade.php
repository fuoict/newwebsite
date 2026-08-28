@extends('admin.layout')
@section('page_title', isset($navigationItem) ? 'Edit Menu Item' : 'Add Menu Item')
@section('content')
<div class="card">
    <div class="card-header py-3 px-4"><i class='bx {{ isset($navigationItem) ? 'bx-edit' : 'bx-plus-circle' }} me-2'></i>{{ isset($navigationItem) ? 'Edit' : 'Add' }} Menu Item</div>
    <div class="card-body p-4">
        <form action="{{ isset($navigationItem) ? route('admin.navigation.update', $navigationItem) : route('admin.navigation.store') }}" method="POST">
            @csrf @if(isset($navigationItem)) @method('PUT') @endif
            <div class="row g-3">
                <div class="col-md-4"><label class="form-label fw-semibold">Label <span class="text-danger">*</span></label><input type="text" name="label" class="form-control" value="{{ old('label', $navigationItem->label ?? '') }}" required></div>
                <div class="col-md-4"><label class="form-label fw-semibold">Route Name</label><input type="text" name="route_name" class="form-control" value="{{ old('route_name', $navigationItem->route_name ?? '') }}" placeholder="e.g. about"><small class="text-muted">Laravel route name (e.g. about, colleges)</small></div>
                <div class="col-md-4"><label class="form-label fw-semibold">External URL</label><input type="text" name="url" class="form-control" value="{{ old('url', $navigationItem->url ?? '') }}" placeholder="https://..."><small class="text-muted">Used if no route name is set</small></div>
                <div class="col-md-4"><label class="form-label fw-semibold">Parent Item</label><select name="parent_id" class="form-select"><option value="">— Top Level —</option>@foreach($parents as $p)<option value="{{ $p->id }}" {{ old('parent_id', $navigationItem->parent_id ?? '') == $p->id ? 'selected' : '' }}>{{ $p->label }}</option>@endforeach</select></div>
                <div class="col-md-2"><label class="form-label fw-semibold">Sort Order</label><input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $navigationItem->sort_order ?? 0) }}"></div>
                <div class="col-md-2"><label class="form-label fw-semibold">Target</label><select name="target" class="form-select"><option value="_self" {{ old('target', $navigationItem->target ?? '_self') == '_self' ? 'selected' : '' }}>Same Tab</option><option value="_blank" {{ old('target', $navigationItem->target ?? '') == '_blank' ? 'selected' : '' }}>New Tab</option></select></div>
                <div class="col-md-2"><label class="form-label fw-semibold">External?</label><div class="form-check form-switch mt-2"><input class="form-check-input" type="checkbox" name="is_external" value="1" {{ old('is_external', $navigationItem->is_external ?? false) ? 'checked' : '' }}><label class="form-check-label">Yes</label></div></div>
                <div class="col-md-2"><label class="form-label fw-semibold">Active?</label><div class="form-check form-switch mt-2"><input class="form-check-input" type="checkbox" name="is_active" value="1" {{ old('is_active', $navigationItem->is_active ?? 1) ? 'checked' : '' }}><label class="form-check-label">Yes</label></div></div>
                <div class="col-12 mt-3"><button type="submit" class="btn btn-fuo"><i class='bx bx-save me-1'></i> {{ isset($navigationItem) ? 'Update' : 'Save' }}</button> <a href="{{ route('admin.navigation.index') }}" class="btn btn-secondary">Cancel</a></div>
            </div>
        </form>
    </div>
</div>
@endsection
