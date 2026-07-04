@extends('admin.layout')
@section('page_title', 'Add Lecturer')

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
    <span class="text-muted" style="font-size:13px">Lecturers / Add New</span>
</div>

<form action="{{ route('admin.lecturers.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row g-4">

    {{-- LEFT --}}
    <div class="col-lg-8">

        {{-- Basic Info --}}
        <div class="card p-4 mb-4">
            <div class="section-title-sm">Basic Information</div>
            <div class="row g-3">
                <div class="col-md-3">
                    <label class="form-label">Title</label>
                    <select name="title" class="form-select">
                        <option value="">—</option>
                        @foreach(['Dr.','Prof.','Mr.','Mrs.','Ms.','Engr.','Pharm.','Barr.'] as $t)
                        <option value="{{ $t }}" {{ old('title') == $t ? 'selected' : '' }}>{{ $t }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-9">
                    <label class="form-label">Full Name <span class="text-danger">*</span></label>
                    <input type="text" name="name"
                           class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}" placeholder="e.g. Ibrahim Olanrewaju" required>
                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label">Position / Level</label>
                    <select name="position" class="form-select">
                        <option value="">— Select —</option>
                        @foreach($positions as $p)
                        <option value="{{ $p }}" {{ old('position') == $p ? 'selected' : '' }}>{{ $p }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Area of Specialization</label>
                    <input type="text" name="specialization" class="form-control"
                           value="{{ old('specialization') }}" placeholder="e.g. Organic Chemistry">
                </div>
            </div>
        </div>

        {{-- Department --}}
        <div class="card p-4 mb-4">
            <div class="section-title-sm">Department Assignment
                <span class="text-danger fw-normal" style="font-size:11px;text-transform:none">
                    — determines which department page they appear on
                </span>
            </div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">College</label>
                    <select name="college_id" class="form-select" id="college-select">
                        <option value="">— Select College —</option>
                        @foreach($colleges as $college)
                        <option value="{{ $college->id }}"
                                {{ old('college_id') == $college->id ? 'selected' : '' }}>
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
                                {{ old('department_id') == $dept->id ? 'selected' : '' }}>
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

        {{-- Academic Profile --}}
        <div class="card p-4 mb-4">
            <div class="section-title-sm">Academic Profile</div>
            <div class="mb-3">
                <label class="form-label">Brief Biography</label>
                <textarea name="biography" class="form-control" rows="4"
                          placeholder="Brief academic and professional biography...">{{ old('biography') }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Academic Qualifications</label>
                <textarea name="qualifications" class="form-control" rows="3"
                          placeholder="e.g. B.Sc. (OAU), M.Sc. (UI), Ph.D. (ABU Zaria)">{{ old('qualifications') }}</textarea>
            </div>
            <div class="mb-1">
                <label class="form-label">Research Interest</label>
                <textarea name="research_interest" class="form-control" rows="3"
                          placeholder="e.g. Machine Learning, NLP, Data Mining...">{{ old('research_interest') }}</textarea>
            </div>
        </div>

        {{-- Contact --}}
        <div class="card p-4 mb-4">
            <div class="section-title-sm">Contact Information</div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Institutional Email</label>
                    <input type="email" name="email" class="form-control"
                           value="{{ old('email') }}" placeholder="e.g. i.olanrewaju@fuo.edu.ng">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control"
                           value="{{ old('phone') }}" placeholder="+234-XXX-XXXXXXX">
                </div>
            </div>
        </div>

        {{-- Social & Academic Links --}}
        <div class="card p-4">
            <div class="section-title-sm">Academic & Social Links</div>
            <div class="social-row">
                <div class="icon" style="color:#4285F4"><i class='bx bxl-google'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">Google Scholar</label>
                    <input type="text" name="google_scholar" class="form-control"
                           value="{{ old('google_scholar') }}" placeholder="https://scholar.google.com/...">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#00CCBB"><i class='bx bx-book-reader'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">ResearchGate</label>
                    <input type="text" name="researchgate" class="form-control"
                           value="{{ old('researchgate') }}" placeholder="https://www.researchgate.net/...">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#0077B5"><i class='bx bxl-linkedin'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">LinkedIn</label>
                    <input type="text" name="linkedin" class="form-control"
                           value="{{ old('linkedin') }}" placeholder="https://linkedin.com/in/...">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#1DA1F2"><i class='bx bxl-twitter'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">Twitter / X</label>
                    <input type="text" name="twitter" class="form-control"
                           value="{{ old('twitter') }}" placeholder="@username or full URL">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#A8B400"><i class='bx bx-link'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">ORCID</label>
                    <input type="text" name="orcid" class="form-control"
                           value="{{ old('orcid') }}" placeholder="0000-0002-1825-0097">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#0A2D75"><i class='bx bx-book-open'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">Scopus</label>
                    <input type="text" name="scopus" class="form-control"
                           value="{{ old('scopus') }}" placeholder="https://www.scopus.com/authid/detail.uri?authorId=...">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#0A2D75"><i class='bx bx-layer'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">Web of Science</label>
                    <input type="text" name="wos" class="form-control"
                           value="{{ old('wos') }}" placeholder="https://www.webofscience.com/wos/author/...">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#1A73E8"><i class='bx bx-award'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">Publons</label>
                    <input type="text" name="publons" class="form-control"
                           value="{{ old('publons') }}" placeholder="https://publons.com/researcher/...">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#006778"><i class='bx bx-shield'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">AD Scientific</label>
                    <input type="text" name="ad_scientific" class="form-control"
                           value="{{ old('ad_scientific') }}" placeholder="https://www.adscientific.com/...">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#A6312D"><i class='bx bxs-graduation'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">Academia.edu</label>
                    <input type="text" name="academia_edu" class="form-control"
                           value="{{ old('academia_edu') }}" placeholder="https://independent.academia.edu/...">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#A259FF"><i class='bx bx-link-external'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">Linktree</label>
                    <input type="text" name="linktree" class="form-control"
                           value="{{ old('linktree') }}" placeholder="https://linktr.ee/...">
                </div>
            </div>
            <div class="social-row">
                <div class="icon" style="color:#333"><i class='bx bx-globe'></i></div>
                <div style="flex:1">
                    <label class="form-label mb-1">Personal Website / Blog</label>
                    <input type="text" name="personal_website" class="form-control"
                           value="{{ old('personal_website') }}" placeholder="https://...">
                </div>
            </div>
        </div>

    </div>

    {{-- RIGHT --}}
    <div class="col-lg-4">

        {{-- Photo --}}
        <div class="card p-4 mb-4">
            <div class="section-title-sm">Profile Photo</div>
            <div class="photo-wrap" onclick="document.getElementById('photo-input').click()">
                <img id="photo-preview"
                     src="https://ui-avatars.com/api/?name=Photo&background=0f3460&color=fff&size=200"
                     class="photo-preview" alt="preview">
                <div style="font-size:12px;color:#999;margin-top:8px">
                    <i class='bx bx-camera'></i> Click to upload photo
                </div>
                <div style="font-size:11px;color:#bbb">JPG, PNG — max 3MB</div>
            </div>
            <input type="file" id="photo-input" name="photo" accept="image/*" class="d-none">
            @error('photo')
            <div class="text-danger mt-1" style="font-size:12px">{{ $message }}</div>
            @enderror
        </div>

        {{-- Settings --}}
        <div class="card p-4">
            <div class="section-title-sm">Display Settings</div>
            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" name="is_published"
                       id="is_published" value="1"
                       {{ old('is_published', true) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_published">Visible on website</label>
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" name="is_hod"
                       id="is_hod" value="1" {{ old('is_hod') ? 'checked' : '' }}>
                <label class="form-check-label" for="is_hod">
                    <i class='bx bxs-crown text-warning'></i> Head of Department
                    <small class="d-block text-muted" style="font-size:11px">
                        Appears first on department page
                    </small>
                </label>
            </div>
            <div class="mb-4">
                <label class="form-label">Display Order</label>
                <input type="number" name="sort_order" class="form-control"
                       value="{{ old('sort_order', 0) }}" min="0">
                <small class="text-muted" style="font-size:11px">
                    Lower = appears first. HOD always goes first regardless.
                </small>
            </div>
            <button type="submit" class="btn btn-fuo w-100">
                <i class='bx bx-save me-1'></i> Save Lecturer Profile
            </button>
        </div>

    </div>
</div>
</form>
@endsection

@push('scripts')
<script>
// Photo preview
document.getElementById('photo-input').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = ev => { document.getElementById('photo-preview').src = ev.target.result; };
    reader.readAsDataURL(file);
});

// Filter departments when college changes
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
