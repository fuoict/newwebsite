@extends('admin.layout')
@section('page_title', 'Edit Lecture')
@section('content')
<div class="card">
    <div class="card-header py-3 px-4"><i class='bx bx-edit me-2'></i>Edit Inaugural Lecture</div>
    <div class="card-body p-4">
        @if($errors->any())
            <div class="alert alert-danger"><ul class="mb-0 ps-3">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
        @endif
        <form action="{{ route('admin.inaugural.update', $inauguralLecture) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Lecture Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $inauguralLecture->title) }}" required>
                    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Speaker <span class="text-danger">*</span></label>
                    <input type="text" name="speaker_name" class="form-control @error('speaker_name') is-invalid @enderror" value="{{ old('speaker_name', $inauguralLecture->speaker_name) }}" required>
                    @error('speaker_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-2">
                    <label class="form-label fw-semibold">Lecture Date <span class="text-danger">*</span></label>
                    <input type="date" name="lecture_date" class="form-control @error('lecture_date') is-invalid @enderror" value="{{ old('lecture_date', $inauguralLecture->lecture_date->format('Y-m-d')) }}" required>
                    @error('lecture_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-12"><hr><h6 class="fw-bold text-muted">Materials</h6></div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Lecture Image</label>
                    @if($inauguralLecture->image_path)
                        <div class="mb-2"><img src="{{ asset($inauguralLecture->image_path) }}" alt="" style="max-height:80px;border-radius:8px;"></div>
                    @endif
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                    <div class="form-text">Leave empty to keep the current image. JPG/PNG/WebP, max 4 MB → <code>img/inaugural</code>.</div>
                    @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Lecture Slides / Content</label>
                    @if($inauguralLecture->slides_path)
                        <div class="mb-2"><a href="{{ $inauguralLecture->slidesUrl() }}" target="_blank" class="badge bg-success text-decoration-none"><i class='bx bx-file me-1'></i>{{ $inauguralLecture->slides_path }}</a></div>
                    @endif
                    <input type="file" name="slides" class="form-control @error('slides') is-invalid @enderror" accept=".ppt,.pptx,.pdf,.doc,.docx">
                    <div class="form-text">Leave empty to keep the current file. PPT/PPTX/PDF/DOC/DOCX — <strong>max 12 MB</strong> → <code>resources/inaugural</code>.</div>
                    @error('slides') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Event Link</label>
                    <input type="url" name="event_url" class="form-control @error('event_url') is-invalid @enderror" value="{{ old('event_url', $inauguralLecture->event_url) }}" placeholder="https://... (event page, gallery, video)">
                    <div class="form-text">Clear the field to remove the link.</div>
                    @error('event_url') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-fuo"><i class='bx bx-save me-1'></i> Update</button>
                    <a href="{{ route('admin.inaugural.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
