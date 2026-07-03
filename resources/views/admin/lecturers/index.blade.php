@extends('admin.layout')
@section('page_title', 'Lecturer Profiles')

@section('content')

{{-- Filters --}}
<div class="card p-3 mb-4">
    <form method="GET" action="{{ route('admin.lecturers.index') }}"
          class="d-flex flex-wrap gap-2 align-items-end">
        <div>
            <label class="form-label mb-1" style="font-size:12px;font-weight:600">Search</label>
            <input type="text" name="search" class="form-control form-control-sm"
                   style="width:180px" value="{{ request('search') }}" placeholder="Search name...">
        </div>
        <div>
            <label class="form-label mb-1" style="font-size:12px;font-weight:600">College</label>
            <select name="college_id" class="form-select form-select-sm" style="width:200px" id="filter-college">
                <option value="">All Colleges</option>
                @foreach($colleges as $college)
                <option value="{{ $college->id }}" {{ request('college_id') == $college->id ? 'selected' : '' }}>
                    {{ $college->college_abbr }} — {{ Str::limit($college->college_name, 30) }}
                </option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="form-label mb-1" style="font-size:12px;font-weight:600">Department</label>
            <select name="department_id" class="form-select form-select-sm" style="width:220px">
                <option value="">All Departments</option>
                @foreach($departments as $dept)
                <option value="{{ $dept->id }}"
                        data-college="{{ $dept->college_id }}"
                        {{ request('department_id') == $dept->id ? 'selected' : '' }}>
                    {{ $dept->department_name }}
                </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-sm btn-secondary">Filter</button>
        @if(request()->hasAny(['search','department_id','college_id']))
        <a href="{{ route('admin.lecturers.index') }}" class="btn btn-sm btn-outline-secondary">Clear</a>
        @endif
        <a href="{{ route('admin.lecturers.create') }}" class="btn btn-sm btn-fuo ms-auto">
            <i class='bx bx-plus'></i> Add Lecturer
        </a>
    </form>
</div>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span><i class='bx bxs-user-detail me-2'></i>All Lecturers ({{ $lecturers->total() }})</span>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th class="ps-4" style="width:55px">Photo</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th class="text-end pe-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($lecturers as $lecturer)
                <tr>
                    <td class="ps-4">
                        <img src="{{ $lecturer->photo_url }}"
                             style="width:44px;height:44px;border-radius:50%;object-fit:cover;border:2px solid #eee"
                             alt="{{ $lecturer->name }}">
                    </td>
                    <td>
                        <div style="font-weight:600;font-size:13px">{{ $lecturer->full_name }}</div>
                        @if($lecturer->is_hod)
                        <span class="badge bg-warning text-dark" style="font-size:10px">
                            <i class='bx bxs-crown'></i> HOD
                        </span>
                        @endif
                        <small class="text-muted d-block">{{ $lecturer->specialization }}</small>
                    </td>
                    <td style="font-size:13px">{{ $lecturer->position }}</td>
                    <td style="font-size:12px;color:#666">
                        {{ $lecturer->department->department_name ?? '—' }}
                    </td>
                    <td>
                        @if($lecturer->is_published)
                            <span class="badge bg-success">Visible</span>
                        @else
                            <span class="badge bg-secondary">Hidden</span>
                        @endif
                    </td>
                    <td class="text-end pe-4">
                        <a href="{{ route('lecturer.show', $lecturer->id) }}" target="_blank"
                           class="btn btn-sm btn-outline-secondary me-1" title="View Profile">
                            <i class='bx bx-link-external'></i>
                        </a>
                        <a href="{{ route('admin.lecturers.edit', $lecturer) }}"
                           class="btn btn-sm btn-outline-primary">
                            <i class='bx bx-edit'></i> Edit
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center text-muted py-5">
                        <i class='bx bx-user-x' style="font-size:40px;display:block;margin-bottom:10px"></i>
                        No lecturers added yet.
                        <a href="{{ route('admin.lecturers.create') }}">Add the first one.</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($lecturers->hasPages())
    <div class="card-footer">{{ $lecturers->links() }}</div>
    @endif
</div>

@endsection

@push('scripts')
<script>
// Filter departments by selected college
document.getElementById('filter-college').addEventListener('change', function() {
    const collegeId = this.value;
    const deptSelect = document.querySelector('[name="department_id"]');
    Array.from(deptSelect.options).forEach(opt => {
        if (!opt.value) return;
        opt.style.display = (!collegeId || opt.dataset.college == collegeId) ? '' : 'none';
    });
    deptSelect.value = '';
});
</script>
@endpush
