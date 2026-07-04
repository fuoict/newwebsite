@extends('admin.layout')
@section('page_title', 'Edit Lecturer')

@push('styles')
<style>
    .form-label { font-weight:600; font-size:13px; color:#444; }
    .section-title-sm {
        font-size:12px; font-weight:700; color:#0f3460;
        text-transform:uppercase; letter-spacing:.5px;
        border-bottom:2px solid #0f3460; padding-bottom:6px; margin-bottom:16px;
    }
    .photo-preview {
        width:120px; height:120px; border-radius:50%; object-fit:cover;
        border:3px solid #0f3460; display:block; margin:0 auto 12px;
    }
    .photo-wrap { text-align:center; cursor:pointer; }
    .social-row { display:flex; align-items:center; gap:8px; margin-bottom:10px; }
    .social-row .icon { width:32px; text-align:center; font-size:20px; flex-shrink:0; }
</style>
@endpush

@section('content')
<div class="d-flex align-items-center gap-2 mb-3">
    <a href="{{ route('admin.lecturers.index') }}" class="btn btn-sm btn-outline-secondary">
        <i class='bx bx-arrow-back'></i> Back
    </a>
    <span class="text-muted" style="font-size:13px">
        Lecturers / Edit — {{ $lecturer->full_name }}
    </span>
</div>

{{-- UPDATE FORM --}}
<form id="update-form" action="{{ route('admin.lecturers.update', $lecturer) }}"
      method="POST" enctype="multipart/form-data">
@csrf @method('PUT')
<div class="row g-4">

    {{-- LEFT --}}
    <div class="col-lg-8">

        <div class="card p-4 mb-4">
            <div class="section-title-sm">Basic Information</div>
            <div class="row g-3">
                <div class="col-md-3">
                    <label class="form-label">Title</label>
                    <select name="title" class="form-select">
                        <option value="">—</option>
                        @foreach(['Dr.','Prof.','Mr.','Mrs.','Ms.','Engr.','Pharm.','Barr.'] as $t)
                        <option value="{{ $t }}" {{ old('title', $lecturer->title) == $t ? 'selected' : '' }}>
                            {{ $t }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-9">
                    <label class="form-label">Full Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control"
                           value="{{ old('name', $lecturer->name) }}" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Position / Level</label>
                    <select name="position" class="form-select">
                        <option value="">— Select —</option>
                        @foreach($positions as $p)
                        <option value="{{ $p }}"
                                {{ old('position', $lecturer->position) == $p ? 'selected' : '' }}>
                            {{ $p }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Area of Specialization</label>
                    <input type="text" name="specialization" class="form-control"
                           value="{{ old('specialization', $lecturer->specialization) }}">
                </div>
            </div>
        </div>

        <div class="card p-4 mb-4">
            <div class="section-title-sm">Department Assignment</div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">College</label>
                    <select name="college_id" class="form-select" id="college-select">
                        <option value="">— Select College —</option>
                        @foreach($colleges as $college)
                        <option value="{{ $college->id }}"
                                {{ old('college_id', $lecturer->college_id) == $college->id ? 'selected' : '' }}>
                            {{ $college->college_name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Department <span class="text-danger">*</span></label>
                    <select name="department_id"
                            class="form-select @error('department_id') is-invalid @enderror"
                            id="dept-select">
                        <option value="">— Select Department —</option>
                        @foreach($departments as $dept)
                        <option value="{{ $dept->id }}"
                                data-college="{{ $dept->college_id }}"
                                {{ old('department_id', $lecturer->department_id) == $dept->id ? 'selected' : '' }}>
                            {{ $dept->department_name }}
                        </option>
                        @endforeach
                    </select>
                    @error('department_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="card p-4 mb-4">
            <div class="section-title-sm">Academic Profile</div>
            <div class="mb-3">
                <label class="form-label">Brief Biography</label>
                <textarea name="biography" class="form-control" rows="4">{{ old('biography', $lecturer->biography) }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Academic Qualifications</label>
                <textarea name="qualifications" class="form-control" rows="3">{{ old('qualifications', $lecturer->qualifications) }}</textarea>
            </div>
            <div class="mb-1">
                <label class="form-label">Research Interest</label>
                <textarea name="research_interest" class="form-control" rows="3">{{ old('research_interest', $lecturer->research_interest) }}</textarea>
            </div>
        </div>

        <div class="card p-4 mb-4">
            <div class="section-title-sm">Contact Information</div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Institutional Email</label>
                    <input type="email" name="email" class="form-control"
                           value="{{ old('email', $lecturer->email) }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control"
                           value="{{ old('phone', $lecturer->phone) }}">
                </div>
            </div>
        </div>

        <div class="card p-4">
            <div class="section-title-sm">Academic & Social Links</div>
            <div class="social-row">
                <div class="icon" style="color:#4285F4"><i class='bx bxl-google'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">Google Scholar</label>
                    <input type="text" name="google_scholar" class="form-control"
                           value="{{ old('google_scholar', $lecturer->google_scholar) }}">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#00CCBB"><i class='bx bx-book-reader'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">ResearchGate</label>
                    <input type="text" name="researchgate" class="form-control"
                           value="{{ old('researchgate', $lecturer->researchgate) }}">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#0077B5"><i class='bx bxl-linkedin'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">LinkedIn</label>
                    <input type="text" name="linkedin" class="form-control"
                           value="{{ old('linkedin', $lecturer->linkedin) }}">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#1DA1F2"><i class='bx bxl-twitter'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">Twitter / X</label>
                    <input type="text" name="twitter" class="form-control"
                           value="{{ old('twitter', $lecturer->twitter) }}">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#A8B400"><i class='bx bx-link'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">ORCID</label>
                    <input type="text" name="orcid" class="form-control"
                           value="{{ old('orcid', $lecturer->orcid) }}">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#0A2D75"><i class='bx bx-book-open'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">Scopus</label>
                    <input type="text" name="scopus" class="form-control"
                           value="{{ old('scopus', $lecturer->scopus) }}">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#0A2D75"><i class='bx bx-layer'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">Web of Science</label>
                    <input type="text" name="wos" class="form-control"
                           value="{{ old('wos', $lecturer->wos) }}">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#1A73E8"><i class='bx bx-award'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">Publons</label>
                    <input type="text" name="publons" class="form-control"
                           value="{{ old('publons', $lecturer->publons) }}">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#006778"><i class='bx bx-shield'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">AD Scientific</label>
                    <input type="text" name="ad_scientific" class="form-control"
                           value="{{ old('ad_scientific', $lecturer->ad_scientific) }}">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#A6312D"><i class='bx bxs-graduation'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">Academia.edu</label>
                    <input type="text" name="academia_edu" class="form-control"
                           value="{{ old('academia_edu', $lecturer->academia_edu) }}">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#A259FF"><i class='bx bx-link-external'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">Linktree</label>
                    <input type="text" name="linktree" class="form-control"
                           value="{{ old('linktree', $lecturer->linktree) }}">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#333"><i class='bx bx-globe'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">Personal Website</label>
                    <input type="text" name="personal_website" class="form-control"
                           value="{{ old('personal_website', $lecturer->personal_website) }}">
                </div>
            </div>
        </div>

    </div>

    {{-- RIGHT --}}
    <div class="col-lg-4">

        <div class="card p-4 mb-4">
            <div class="section-title-sm">Profile Photo</div>
            <div class="photo-wrap" onclick="document.getElementById('photo-input').click()">
                <img id="photo-preview" src="{{ $lecturer->photo_url }}"
                     class="photo-preview" alt="{{ $lecturer->name }}">
                <div style="font-size:12px;color:#999;margin-top:8px">
                    <i class='bx bx-camera'></i> Click to change photo
                </div>
            </div>
            <input type="file" id="photo-input" name="photo" accept="image/*" class="d-none">
        </div>

        <div class="card p-4 mb-4">
            <div class="section-title-sm">Display Settings</div>
            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" name="is_published"
                       id="is_published" value="1"
                       {{ old('is_published', $lecturer->is_published) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_published">Visible on website</label>
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" name="is_hod"
                       id="is_hod" value="1"
                       {{ old('is_hod', $lecturer->is_hod) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_hod">
                    <i class='bx bxs-crown text-warning'></i> Head of Department
                </label>
            </div>
            <div class="mb-4">
                <label class="form-label">Display Order</label>
                <input type="number" name="sort_order" class="form-control"
                       value="{{ old('sort_order', $lecturer->sort_order) }}" min="0">
            </div>
            <button type="submit" form="update-form" class="btn btn-fuo w-100">
                <i class='bx bx-save me-1'></i> Update Profile
            </button>
        </div>

    </div>

</div>
</form>

{{-- DELETE — completely separate form outside the update form --}}
<div class="row mt-2">
    <div class="col-lg-4 offset-lg-8">
        <div class="card p-4 border border-danger" style="border-style:dashed !important">
            <h6 class="mb-2 text-danger" style="font-weight:700">
                <i class='bx bx-error-circle'></i> Danger Zone
            </h6>
            <p style="font-size:12px;color:#999;margin-bottom:12px">
                This will permanently delete this lecturer profile and photo.
            </p>
            <form action="{{ route('admin.lecturers.destroy', $lecturer) }}" method="POST"
                  onsubmit="return confirm('Delete this lecturer profile permanently?')">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-outline-danger w-100">
                    <i class='bx bx-trash me-1'></i> Delete Profile
                </button>
            </form>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
document.getElementById('photo-input').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = ev => { document.getElementById('photo-preview').src = ev.target.result; };
    reader.readAsDataURL(file);
});

document.getElementById('college-select').addEventListener('change', function() {
    const collegeId = this.value;
    const deptSelect = document.getElementById('dept-select');
    Array.from(deptSelect.options).forEach(opt => {
        if (!opt.value) return;
        opt.style.display = (!collegeId || opt.dataset.college == collegeId) ? '' : 'none';
    });
    deptSelect.value = '';
});
</script>
@endpush
