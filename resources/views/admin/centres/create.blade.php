@extends('admin.layout')
@section('page_title', isset($centre) ? 'Edit Centre' : 'Create Centre')

@section('content')
<div class="card">
    <div class="card-header py-3 px-4">
        <i class='bx {{ isset($centre) ? 'bx-edit' : 'bx-plus-circle' }} me-2'></i>
        {{ isset($centre) ? 'Edit' : 'New' }} Centre
    </div>
    <div class="card-body p-4">
        <form action="{{ isset($centre) ? route('admin.centres.update', $centre) : route('admin.centres.store') }}"
              method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($centre)) @method('PUT') @endif

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Full Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name', $centre->name ?? '') }}" required
                           placeholder="e.g. Centre for Research, Innovation and Technology">
                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Short Name / Acronym</label>
                    <input type="text" name="short_name" class="form-control"
                           value="{{ old('short_name', $centre->short_name ?? '') }}" placeholder="e.g. FUCRIT">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Sort Order</label>
                    <input type="number" name="sort_order" class="form-control"
                           value="{{ old('sort_order', $centre->sort_order ?? 0) }}">
                </div>

                {{-- Director --}}
                <div class="col-12"><hr><h6 class="fw-bold text-muted">Director Information</h6></div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Director Name</label>
                    <input type="text" name="director_name" class="form-control" id="directorNameField"
                           value="{{ old('director_name') }}" placeholder="e.g. Dr. T. O. Ayinde">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Title</label>
                    <input type="text" name="director_title" class="form-control" id="directorTitleField"
                           value="{{ old('director_title') }}" placeholder="e.g. Director">
                </div>
                <div class="col-md-5">
                    <label class="form-label fw-semibold">Link to Lecturer Profile (optional)</label>
                    <select name="lecturer_id" class="form-select" id="lecturerSelect">
                        <option value="">— None —</option>
                        @foreach($lecturers as $lec)
                            <option value="{{ $lec->id }}"
                                    data-name="{{ $lec->full_name }}"
                                    data-title="{{ $lec->position }}"
                                    data-email="{{ $lec->email }}"
                                    {{ old('lecturer_id') == $lec->id ? 'selected' : '' }}>
                                {{ $lec->full_name }}
                            </option>
                        @endforeach
                    </select>
                    <small class="text-muted">Link the director name to their lecturer profile page.</small>
                </div>
                <div class="col-md-2">
                    <label class="form-label fw-semibold">Director Photo</label>
                    <input type="file" name="director_image" class="form-control" accept="image/*">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email" name="email" class="form-control"
                           value="{{ old('email') }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Phone</label>
                    <input type="text" name="phone" class="form-control"
                           value="{{ old('phone') }}">
                </div>

                {{-- Content --}}
                <div class="col-12"><hr><h6 class="fw-bold text-muted">Content</h6></div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Intro / Welcome Message</label>
                    <textarea name="intro" class="form-control" rows="3">{{ old('intro', $centre->intro ?? '') }}</textarea>
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Full Description (HTML allowed)</label>
                    <textarea name="description" class="form-control" rows="8">{{ old('description', $centre->description ?? '') }}</textarea>
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Mission</label>
                    <textarea name="mission" class="form-control" rows="4">{{ old('mission', $centre->mission ?? '') }}</textarea>
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Vision</label>
                    <textarea name="vision" class="form-control" rows="4">{{ old('vision', $centre->vision ?? '') }}</textarea>
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Objectives / Key Services</label>
                    <textarea name="objectives" class="form-control" rows="4">{{ old('objectives', $centre->objectives ?? '') }}</textarea>
                </div>

                {{-- Images --}}
                <div class="col-12"><hr><h6 class="fw-bold text-muted">Images</h6></div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Banner / Hero Image</label>
                    @if(($centre->image ?? null))
                        <div class="mb-2"><img src="{{ asset('storage/'.$centre->image) }}" style="max-height:80px;border-radius:6px"></div>
                    @endif
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_active" value="1"
                               {{ old('is_active', $centre->is_active ?? 1) ? 'checked' : '' }}>
                        <label class="form-check-label fw-semibold">Active</label>
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-fuo"><i class='bx bx-save me-1'></i> {{ isset($centre) ? 'Update' : 'Save' }}</button>
                    <a href="{{ route('admin.centres.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
