@extends('admin.layout')
@section('page_title', 'Documents')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
        <span><i class='bx bxs-download me-2'></i>Documents</span>
        <a href="{{ route('admin.downloads.create') }}" class="btn btn-sm btn-fuo"><i class='bx bx-plus me-1'></i> Add Document</a>
    </div>
    <div class="card-body px-4 pt-3">
        <div class="d-flex flex-wrap gap-2">
            <a href="{{ route('admin.downloads.index') }}" class="btn btn-sm {{ !$category ? 'btn-fuo' : 'btn-outline-secondary' }}">All</a>
            @foreach(\App\Models\Download::CATEGORIES as $key => $label)
                <a href="{{ route('admin.downloads.index', ['category' => $key]) }}" class="btn btn-sm {{ $category === $key ? 'btn-fuo' : 'btn-outline-secondary' }}">{{ $label }}</a>
            @endforeach
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr><th class="ps-4">Order</th><th>Title</th><th>Section</th><th>Source</th><th>Status</th><th class="text-end pe-4">Actions</th></tr>
            </thead>
            <tbody>
                @forelse($downloads as $download)
                <tr>
                    <td class="ps-4">{{ $download->sort_order }}</td>
                    <td><div style="font-weight:600;font-size:13px">{{ $download->title }}</div></td>
                    <td style="font-size:13px">{{ \App\Models\Download::CATEGORIES[$download->category] ?? $download->category }}</td>
                    <td>
                        @if($download->file_path)
                            <span class="badge bg-success"><i class='bx bx-file me-1'></i>Uploaded file</span>
                        @else
                            <span class="badge bg-info text-dark"><i class='bx bx-link-external me-1'></i>External link</span>
                        @endif
                    </td>
                    <td><span class="badge {{ $download->is_active ? 'bg-success' : 'bg-secondary' }}">{{ $download->is_active ? 'Active' : 'Hidden' }}</span></td>
                    <td class="text-end pe-4">
                        @if($download->file_path)
                            <a href="{{ $download->publicUrl() }}" target="_blank" class="btn btn-sm btn-outline-secondary me-1" title="Preview"><i class='bx bx-show'></i></a>
                        @elseif($download->external_url)
                            <a href="{{ $download->external_url }}" target="_blank" class="btn btn-sm btn-outline-secondary me-1" title="Open link"><i class='bx bx-show'></i></a>
                        @endif
                        <a href="{{ route('admin.downloads.edit', $download) }}" class="btn btn-sm btn-outline-primary me-1"><i class='bx bx-edit'></i></a>
                        <form action="{{ route('admin.downloads.destroy', $download) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this document?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger"><i class='bx bx-trash'></i></button></form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" class="text-center text-muted py-5">No documents yet. <a href="{{ route('admin.downloads.create') }}">Add one.</a></td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($downloads->hasPages())<div class="card-footer d-flex justify-content-center">{{ $downloads->links('pagination::bootstrap-5') }}</div>@endif
</div>
@endsection
