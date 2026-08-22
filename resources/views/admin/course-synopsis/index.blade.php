@extends('admin.layout')
@section('page_title', 'Course Synopsis')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
        <span><i class='bx bx-book me-2'></i>Course Synopsis</span>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.course-synopsis.template') }}" class="btn btn-sm btn-outline-secondary">
                <i class='bx bx-download me-1'></i> Template
            </a>
            <button class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#importModal">
                <i class='bx bx-upload me-1'></i> Import CSV
            </button>
            <a href="{{ route('admin.course-synopsis.create', request()->query()) }}" class="btn btn-sm btn-fuo">
                <i class='bx bx-plus me-1'></i> Add Course
            </a>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="px-4 py-3 border-bottom d-flex gap-2 flex-wrap align-items-center">
            <form method="GET" class="d-flex gap-2 align-items-center flex-wrap">
                <label class="form-label mb-0 fw-semibold" style="white-space:nowrap">Department:</label>
                <select name="department_id" class="form-select form-select-sm" style="max-width:280px" onchange="this.form.submit()">
                    <option value="">All Departments</option>
                    @foreach($departments as $dept)
                        <option value="{{ $dept->id }}" {{ request('department_id') == $dept->id ? 'selected' : '' }}>
                            {{ $dept->department_name }}
                        </option>
                    @endforeach
                </select>
                <label class="form-label mb-0 fw-semibold ms-2" style="white-space:nowrap">Level:</label>
                <select name="level" class="form-select form-select-sm" style="max-width:120px" onchange="this.form.submit()">
                    <option value="">All Levels</option>
                    @foreach([100,200,300,400,500,600] as $lv)
                        <option value="{{ $lv }}" {{ request('level') == $lv ? 'selected' : '' }}>{{ $lv }}L</option>
                    @endforeach
                </select>
            </form>
        </div>

        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th class="ps-4">Code</th>
                    <th>Title</th>
                    <th>Level</th>
                    <th>Unit</th>
                    <th>Type</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th class="text-end pe-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($courses as $course)
                <tr>
                    <td class="ps-4"><span class="badge bg-dark">{{ $course->course_code }}</span></td>
                    <td style="font-weight:600;font-size:13px">{{ $course->course_title }}</td>
                    <td>{{ $course->level }}L</td>
                    <td>{{ $course->unit }}</td>
                    <td>
                        @php
                            $typeColors = ['core' => 'bg-primary', 'elective' => 'bg-warning text-dark', 'required' => 'bg-info'];
                        @endphp
                        <span class="badge {{ $typeColors[$course->type] ?? 'bg-secondary' }}">{{ ucfirst($course->type) }}</span>
                    </td>
                    <td><span class="badge bg-info">{{ $course->department->department_name ?? 'N/A' }}</span></td>
                    <td>
                        <span class="badge {{ $course->is_published ? 'bg-success' : 'bg-secondary' }}">
                            {{ $course->is_published ? 'Active' : 'Hidden' }}
                        </span>
                    </td>
                    <td class="text-end pe-4">
                        <a href="{{ route('admin.course-synopsis.edit', $course) }}" class="btn btn-sm btn-outline-primary me-1">
                            <i class='bx bx-edit'></i>
                        </a>
                        <form action="{{ route('admin.course-synopsis.destroy', $course) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Delete this course?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger"><i class='bx bx-trash'></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center text-muted py-5">
                        No courses found. <a href="{{ route('admin.course-synopsis.create') }}">Add one.</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($courses->hasPages())
    <div class="card-footer d-flex justify-content-center">
        {{ $courses->appends(request()->query())->links('pagination::bootstrap-5') }}
    </div>
    @endif
</div>

{{-- Import Modal --}}
<div class="modal fade" id="importModal" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.course-synopsis.import') }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title"><i class='bx bx-upload me-2'></i>Import Courses</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted" style="font-size:13px">Upload a CSV or JSON file. <a href="{{ route('admin.course-synopsis.template') }}" class="fw-bold">Download template</a> to see the expected format.</p>
                <div class="mb-3">
                    <input type="file" name="import_file" class="form-control" accept=".csv,.json,.txt" required>
                </div>
                <div class="alert alert-info py-2" style="font-size:12px">
                    <strong>CSV columns:</strong> department_name, course_code, course_title, description, unit, level, type (core/elective/required), is_published
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-fuo btn-sm"><i class='bx bx-upload me-1'></i> Import</button>
            </div>
        </form>
    </div>
</div>
@endsection
