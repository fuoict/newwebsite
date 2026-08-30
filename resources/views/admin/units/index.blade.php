@extends('admin.layout')
@section('page_title', 'Units')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
        <span><i class='bx bx-building-house me-2'></i>Units</span>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.units.template') }}" class="btn btn-sm btn-outline-secondary"><i class='bx bx-download me-1'></i> Template</a>
            <button class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#importModal"><i class='bx bx-upload me-1'></i> Import</button>
            <a href="{{ route('admin.units.create') }}" class="btn btn-sm btn-fuo"><i class='bx bx-plus me-1'></i> Add Unit</a>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr><th class="ps-4">Order</th><th>Name</th><th>Director</th><th>Status</th><th class="text-end pe-4">Actions</th></tr>
            </thead>
            <tbody>
                @forelse($units as $unit)
                <tr>
                    <td class="ps-4">{{ $unit->sort_order }}</td>
                    <td><div style="font-weight:600;font-size:13px">{{ $unit->name }}</div></td>
                    <td style="font-size:13px">{{ $unit->director_name ?? '—' }}</td>
                    <td><span class="badge {{ $unit->is_active ? 'bg-success' : 'bg-secondary' }}">{{ $unit->is_active ? 'Active' : 'Hidden' }}</span></td>
                    <td class="text-end pe-4">
                        <a href="{{ route('admin.units.edit', $unit) }}" class="btn btn-sm btn-outline-primary me-1"><i class='bx bx-edit'></i></a>
                        <form action="{{ route('admin.units.destroy', $unit) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger"><i class='bx bx-trash'></i></button></form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="text-center text-muted py-5">No units found. <a href="{{ route('admin.units.create') }}">Create one.</a></td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($units->hasPages())<div class="card-footer d-flex justify-content-center">{{ $units->links('pagination::bootstrap-5') }}</div>@endif
</div>
<div class="modal fade" id="importModal" tabindex="-1"><div class="modal-dialog"><form action="{{ route('admin.units.import') }}" method="POST" enctype="multipart/form-data" class="modal-content">@csrf
    <div class="modal-header"><h5 class="modal-title"><i class='bx bx-upload me-2'></i>Import Units</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
    <div class="modal-body"><p class="text-muted" style="font-size:13px">Upload CSV/JSON. <a href="{{ route('admin.units.template') }}" class="fw-bold">Download template</a></p><input type="file" name="import_file" class="form-control" accept=".csv,.json,.txt" required></div>
    <div class="modal-footer"><button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</button><button type="submit" class="btn btn-fuo btn-sm"><i class='bx bx-upload me-1'></i> Import</button></div>
</form></div></div>
@endsection
