@extends('admin.layout')
@section('page_title', 'Navigation Menu')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
        <span><i class='bx bx-menu me-2'></i>Navigation Menu Items</span>
        <a href="{{ route('admin.navigation.create') }}" class="btn btn-sm btn-fuo"><i class='bx bx-plus me-1'></i> Add Menu Item</a>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr><th class="ps-4">Order</th><th>Label</th><th>Link / Route</th><th>Parent</th><th>Children</th><th>Status</th><th class="text-end pe-4">Actions</th></tr>
            </thead>
            <tbody>
                @forelse($items as $item)
                <tr style="background:#f8f9fa">
                    <td class="ps-4 fw-bold">{{ $item->sort_order }}</td>
                    <td><span style="font-weight:700;font-size:14px">{{ $item->label }}</span></td>
                    <td style="font-size:12px;color:#666">{{ $item->route_name ?? $item->url ?? '—' }}</td>
                    <td>—</td>
                    <td><span class="badge bg-info">{{ $item->children->count() }}</span></td>
                    <td><span class="badge {{ $item->is_active ? 'bg-success' : 'bg-secondary' }}">{{ $item->is_active ? 'Active' : 'Hidden' }}</span></td>
                    <td class="text-end pe-4">
                        <a href="{{ route('admin.navigation.edit', $item) }}" class="btn btn-sm btn-outline-primary me-1"><i class='bx bx-edit'></i></a>
                        <form action="{{ route('admin.navigation.destroy', $item) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this item and all children?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger"><i class='bx bx-trash'></i></button></form>
                    </td>
                </tr>
                @foreach($item->children as $child)
                <tr>
                    <td class="ps-4" style="padding-left:32px">{{ $child->sort_order }}</td>
                    <td style="padding-left:32px"><span style="font-size:13px">↳ {{ $child->label }}</span></td>
                    <td style="font-size:12px;color:#666">{{ $child->route_name ?? $child->url ?? '—' }}</td>
                    <td style="font-size:12px;color:#888">{{ $item->label }}</td>
                    <td>—</td>
                    <td><span class="badge {{ $child->is_active ? 'bg-success' : 'bg-secondary' }}">{{ $child->is_active ? 'Active' : 'Hidden' }}</span></td>
                    <td class="text-end pe-4">
                        <a href="{{ route('admin.navigation.edit', $child) }}" class="btn btn-sm btn-outline-primary me-1"><i class='bx bx-edit'></i></a>
                        <form action="{{ route('admin.navigation.destroy', $child) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger"><i class='bx bx-trash'></i></button></form>
                    </td>
                </tr>
                @endforeach
                @empty
                <tr><td colspan="7" class="text-center text-muted py-5">No menu items. <a href="{{ route('admin.navigation.create') }}">Create one.</a></td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
