@extends('admin.layout')
@section('page_title', 'Add Member')
@section('content')
<div class="card">
    <div class="card-header py-3 px-4"><i class='bx bx-plus-circle me-2'></i>Add Member</div>
    <div class="card-body p-4">
        @if($errors->any())
            <div class="alert alert-danger"><ul class="mb-0 ps-3">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
        @endif
        <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Section <span class="text-danger">*</span></label>
                    <select name="type" class="form-select" required>
                        @foreach(\App\Models\GovernanceMember::TYPES as $key => $label)
                            <option value="{{ $key }}" {{ old('type', $type) === $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    <div class="form-text">Photos go to <code>img/board</code> (BOT) or <code>img/council</code> (Council).</div>
                </div>
                <div class="col-md-5">
                    <label class="form-label fw-semibold">Full Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="e.g. Professor Yusuf Olaolu" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Role</label>
                    <input type="text" name="role" class="form-control" value="{{ old('role', 'Member') }}" placeholder="Chairman / Member">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Initials (fallback photo)</label>
                    <input type="text" name="initials" class="form-control" value="{{ old('initials') }}" maxlength="6" placeholder="auto from name">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Photo (JPEG/PNG/WebP, max 4 MB)</label>
                    <input type="file" name="photo" class="form-control" accept="image/*">
                </div>
                <div class="col-md-2">
                    <label class="form-label fw-semibold">Sort Order</label>
                    <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', 0) }}" min="0">
                </div>
                <div class="col-12"><hr><h6 class="fw-bold text-muted">Brief About (shown when the member's name/card is clicked)</h6></div>
                <div class="col-12">
                    <textarea name="bio" class="form-control" rows="4" maxlength="2000" placeholder="Two or three sentences about the member...">{{ old('bio') }}</textarea>
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_active" value="1" {{ old('is_active', 1) ? 'checked' : '' }}>
                        <label class="form-check-label fw-semibold">Active</label>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-fuo"><i class='bx bx-save me-1'></i> Save</button>
                    <a href="{{ route('admin.members.index', ['type' => $type]) }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
