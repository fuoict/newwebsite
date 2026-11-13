@extends('admin.layout')
@section('page_title', 'Add Document')
@section('content')
<div class="card">
    <div class="card-header py-3 px-4"><i class='bx bx-plus-circle me-2'></i>Add Document</div>
    <div class="card-body p-4">
        @if($errors->any())
            <div class="alert alert-danger"><ul class="mb-0 ps-3">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
        @endif
        <form action="{{ route('admin.downloads.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Section <span class="text-danger">*</span></label>
                    <select name="category" class="form-select" required>
                        @foreach(\App\Models\Download::CATEGORIES as $key => $label)
                            <option value="{{ $key }}" {{ old('category', request('category')) === $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-5">
                    <label class="form-label fw-semibold">Document Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="e.g. FUO Grant Management Policy" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Sort Order</label>
                    <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', 0) }}" min="0">
                </div>
                <div class="col-12"><hr><h6 class="fw-bold text-muted">Document <span class="text-danger">*</span> — upload a file <em>or</em> paste a link</h6></div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Upload Document (PDF/Word/Excel, max 20 MB)</label>
                    <input type="file" name="file" class="form-control" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.rtf,.zip">
                    <div class="form-text">Saved to the <code>public/resources</code> folder with your other documents.</div>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Or External Link (e.g. Google Drive)</label>
                    <input type="url" name="external_url" class="form-control" value="{{ old('external_url') }}" placeholder="https://drive.google.com/...">
                    <div class="form-text">Used when no file is uploaded.</div>
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_active" value="1" {{ old('is_active', 1) ? 'checked' : '' }}>
                        <label class="form-check-label fw-semibold">Active</label>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-fuo"><i class='bx bx-save me-1'></i> Save</button>
                    <a href="{{ route('admin.downloads.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
