@extends('admin.layout')
@section('page_title', 'Centres')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
        <span><i class='bx bx-buildings me-2'></i>Centres</span>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.centres.template') }}" class="btn btn-sm btn-outline-secondary">
                <i class='bx bx-download me-1'></i> Template
            </a>
            <button class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#importModal">
                <i class='bx bx-upload me-1'></i> Import CSV
            </button>
            <a href="{{ route('admin.centres.create') }}" class="btn btn-sm btn-fuo">
                <i class='bx bx-plus me-1'></i> Add Centre
            </a>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th class="ps-4">Order</th>
                    <th>Name</th>
                    <th>Director</th>
                    <th>Status</th>
                    <th class="text-end pe-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($centres as $centre)
                <tr>
                    <td class="ps-4">{{ $centre->sort_order }}</td>
                    <td>
                        <div style="font-weight:600;font-size:13px">{{ $centre->name }}</div>
                        @if($centre->short_name)<small class="text-muted">{{ $centre->short_name }}</small>@endif
                    </td>
                    <td style="font-size:13px">{{ $centre->director_name ?? '—' }}</td>
                    <td>
                        <span class="badge {{ $centre->is_active ? 'bg-success' : 'bg-secondary' }}">
                            {{ $centre->is_active ? 'Active' : 'Hidden' }}
                        </span>
                    </td>
                    <td class="text-end pe-4">
                        <a href="{{ route('admin.centres.edit', $centre) }}" class="btn btn-sm btn-outline-primary me-1">
                            <i class='bx bx-edit'></i>
                        </a>
                        <form action="{{ route('admin.centres.destroy', $centre) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Delete this centre?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger"><i class='bx bx-trash'></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted py-5">
                        No centres found. <a href="{{ route('admin.centres.create') }}">Create one.</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($centres->hasPages())
    <div class="card-footer d-flex justify-content-center">
        {{ $centres->links('pagination::bootstrap-5') }}
    </div>
    @endif
</div>

{{-- Import Modal --}}
<div class="modal fade" id="importModal" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.centres.import') }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title"><i class='bx bx-upload me-2'></i>Import Centres</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted" style="font-size:13px">Upload a CSV or JSON file. <a href="{{ route('admin.centres.template') }}" class="fw-bold">Download template</a></p>
                <div class="mb-3">
                    <input type="file" name="import_file" class="form-control" accept=".csv,.json,.txt" required>
                </div>
                <div class="alert alert-info py-2 mb-0" style="font-size:12px">
                    <strong>CSV columns:</strong> name, short_name, director_name, director_title, email, phone, intro, description, mission, vision, objectives, sort_order, is_active
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
