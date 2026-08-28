@extends('admin.layout')
@section('page_title', 'Departments')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
        <span><i class='bx bx-sitemap me-2'></i>Departments</span>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.departments.template') }}" class="btn btn-sm btn-outline-secondary"><i class='bx bx-download me-1'></i> Template</a>
            <button class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#importModal"><i class='bx bx-upload me-1'></i> Import</button>
            <a href="{{ route('admin.departments.create') }}" class="btn btn-sm btn-fuo"><i class='bx bx-plus me-1'></i> Add</a>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="px-4 py-3 border-bottom">
            <form method="GET" class="d-flex gap-2 align-items-center flex-wrap">
                <select name="college_id" class="form-select form-select-sm" style="max-width:280px" onchange="this.form.submit()">
                    <option value="">All Colleges</option>
                    @foreach($colleges as $college)<option value="{{ $college->id }}" {{ request('college_id') == $college->id ? 'selected' : '' }}>{{ $college->college_name }}</option>@endforeach
                </select>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr><th class="ps-4">Name</th><th>Code</th><th>College</th><th>HOD</th><th>Slug</th><th>Status</th><th class="text-end pe-4">Actions</th></tr>
                </thead>
                <tbody>
                    @forelse($departments as $dept)
                    <tr>
                        <td class="ps-4"><div style="font-weight:600;font-size:13px">{{ $dept->department_name }}</div></td>
                        <td><span class="badge bg-dark">{{ $dept->department_code ?? '—' }}</span></td>
                        <td style="font-size:12px">{{ $dept->college->college_name ?? '—' }}</td>
                        <td style="font-size:13px">{{ $dept->hod_name ?? '—' }}</td>
                        <td style="font-size:12px;color:#666">{{ $dept->slug }}</td>
                        <td><span class="badge {{ $dept->is_active ? 'bg-success' : 'bg-secondary' }}">{{ $dept->is_active ? 'Active' : 'Hidden' }}</span></td>
                        <td class="text-end pe-4">
                            <a href="{{ route('admin.departments.edit', $dept) }}" class="btn btn-sm btn-outline-primary me-1"><i class='bx bx-edit'></i></a>
                            <form action="{{ route('admin.departments.destroy', $dept) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger"><i class='bx bx-trash'></i></button></form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="7" class="text-center text-muted py-5">No departments found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @if($departments->hasPages())<div class="card-footer d-flex justify-content-center">{{ $departments->appends(request()->query())->links('pagination::bootstrap-5') }}</div>@endif
</div>
<div class="modal fade" id="importModal" tabindex="-1"><div class="modal-dialog"><form action="{{ route('admin.departments.import') }}" method="POST" enctype="multipart/form-data" class="modal-content">@csrf
    <div class="modal-header"><h5 class="modal-title"><i class='bx bx-upload me-2'></i>Import Departments</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
    <div class="modal-body"><p class="text-muted" style="font-size:13px">Upload CSV/JSON. <a href="{{ route('admin.departments.template') }}" class="fw-bold">Download template</a></p><input type="file" name="import_file" class="form-control" accept=".csv,.json,.txt" required></div>
    <div class="modal-footer"><button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button><button type="submit" class="btn btn-fuo btn-sm"><i class='bx bx-upload me-1'></i> Import</button></div>
</form></div></div>
@endsection
