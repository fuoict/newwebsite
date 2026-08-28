@extends('admin.layout')
@section('page_title', 'Colleges')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
        <span><i class='bx bxs-institution me-2'></i>Colleges</span>
        <a href="{{ route('admin.colleges.create') }}" class="btn btn-sm btn-fuo"><i class='bx bx-plus me-1'></i> Add College</a>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr><th class="ps-4">Name</th><th>Abbr</th><th>Dean</th><th>Depts</th><th>Status</th><th class="text-end pe-4">Actions</th></tr>
            </thead>
            <tbody>
                @forelse($colleges as $college)
                <tr>
                    <td class="ps-4"><div style="font-weight:600;font-size:13px">{{ $college->college_name }}</div><small class="text-muted">{{ $college->slug }}</small></td>
                    <td><span class="badge bg-dark">{{ $college->college_abbr }}</span></td>
                    <td style="font-size:13px">{{ $college->dean_name ?? '—' }}</td>
                    <td><span class="badge bg-info">{{ $college->departments_count }}</span></td>
                    <td><span class="badge {{ $college->is_active ? 'bg-success' : 'bg-secondary' }}">{{ $college->is_active ? 'Active' : 'Hidden' }}</span></td>
                    <td class="text-end pe-4">
                        <a href="{{ route('admin.colleges.edit', $college) }}" class="btn btn-sm btn-outline-primary me-1"><i class='bx bx-edit'></i></a>
                        <form action="{{ route('admin.colleges.destroy', $college) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger"><i class='bx bx-trash'></i></button></form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" class="text-center text-muted py-5">No colleges found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($colleges->hasPages())<div class="card-footer d-flex justify-content-center">{{ $colleges->links('pagination::bootstrap-5') }}</div>@endif
</div>
@endsection
