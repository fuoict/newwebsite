@extends('admin.layout')
@section('page_title', 'Featured Links')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
        <span><i class='bx bx-link me-2'></i>Department Featured Links</span>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.featured-links.template') }}" class="btn btn-sm btn-outline-secondary">
                <i class='bx bx-download me-1'></i> Template
            </a>
            <button class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#importModal">
                <i class='bx bx-upload me-1'></i> Import CSV
            </button>
            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#importContentModal">
                <i class='bx bx-cloud-upload me-1'></i> Import Content
            </button>
            <a href="{{ route('admin.featured-links.create', request()->query()) }}" class="btn btn-sm btn-fuo">
                <i class='bx bx-plus me-1'></i> Add Link
            </a>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="px-4 py-3 border-bottom">
            <form method="GET" class="d-flex gap-2 align-items-center">
                <label class="form-label mb-0 fw-semibold" style="white-space:nowrap">Filter by Dept:</label>
                <select name="department_id" class="form-select form-select-sm" style="max-width:300px" onchange="this.form.submit()">
                    <option value="">All Departments</option>
                    @foreach($departments as $dept)
                        <option value="{{ $dept->id }}" {{ request('department_id') == $dept->id ? 'selected' : '' }}>
                            {{ $dept->department_name }}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>

        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th class="ps-4">Order</th>
                    <th>Title</th>
                    <th>URL</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th class="text-end pe-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($links as $link)
                <tr>
                    <td class="ps-4">{{ $link->sort_order }}</td>
                    <td>
                        <div style="font-weight:600;font-size:13px">
                            @if($link->icon)<i class='{{ $link->icon }} me-1'></i>@endif
                            {{ $link->title }}
                        </div>
                    </td>
                    <td style="font-size:12px;color:#777;max-width:200px;overflow:hidden;text-overflow:ellipsis">
                        {{ $link->url ?? '—' }}
                    </td>
                    <td><span class="badge bg-info">{{ $link->department->department_name ?? 'N/A' }}</span></td>
                    <td>
                        <span class="badge {{ $link->is_active ? 'bg-success' : 'bg-secondary' }}">
                            {{ $link->is_active ? 'Active' : 'Hidden' }}
                        </span>
                    </td>
                    <td class="text-end pe-4">
                        <a href="{{ route('admin.featured-links.edit', $link) }}" class="btn btn-sm btn-outline-primary me-1">
                            <i class='bx bx-edit'></i>
                        </a>
                        <form action="{{ route('admin.featured-links.destroy', $link) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Delete this link?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger"><i class='bx bx-trash'></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center text-muted py-5">
                        No featured links found. <a href="{{ route('admin.featured-links.create') }}">Create one.</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($links->hasPages())
    <div class="card-footer d-flex justify-content-center">
        {{ $links->appends(request()->query())->links('pagination::bootstrap-5') }}
    </div>
    @endif
</div>

{{-- Import Modal --}}
<div class="modal fade" id="importModal" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.featured-links.import') }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title"><i class='bx bx-upload me-2'></i>Import Featured Links</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted" style="font-size:13px">Upload a CSV or JSON file. <a href="{{ route('admin.featured-links.template') }}" class="fw-bold">Download template</a> to see the expected format.</p>
                <div class="mb-3">
                    <input type="file" name="import_file" class="form-control" accept=".csv,.json,.txt" required>
                </div>
                <div class="alert alert-info py-2" style="font-size:12px">
                    <strong>CSV columns:</strong> department_name, title, url, icon, sort_order, is_active
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-fuo btn-sm"><i class='bx bx-upload me-1'></i> Import</button>
            </div>
        </form>
    </div>
</div>

{{-- Import Content Modal --}}
<div class="modal fade" id="importContentModal" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.featured-links.import-content') }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title"><i class='bx bx-cloud-upload me-2'></i>Import Featured Link Content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted" style="font-size:13px">
                    Upload content for existing featured links (Admission Requirement, Duration of Programme, etc.).
                    <a href="{{ route('admin.featured-links.content-template') }}" class="fw-bold">Download content template</a>
                </p>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Upload CSV/JSON file</label>
                    <input type="file" name="import_file" class="form-control" accept=".csv,.json,.txt" required>
                </div>
                <div class="alert alert-info py-2 mb-0" style="font-size:12px">
                    <strong>CSV columns:</strong> department_name, link_title, content, body<br>
                    <strong>Note:</strong> <code>link_title</code> must match an existing featured link (e.g. "Admission Requirement").<br>
                    The <code>content</code> field is short text; <code>body</code> supports HTML.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-fuo btn-sm"><i class='bx bx-cloud-upload me-1'></i> Import Content</button>
            </div>
        </form>
    </div>
</div>
@endsection
