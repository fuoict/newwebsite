@extends('admin.layout')
@section('page_title', 'Pages')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
        <span><i class='bx bxs-book-content me-2'></i>Page Manager</span>
        <a href="{{ route('admin.pages.create') }}" class="btn btn-fuo">
            <i class='bx bx-plus me-1'></i> New Page
        </a>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th class="ps-4">Title</th>
                    <th>Status</th>
                    <th>Slug</th>
                    <th>Date</th>
                    <th class="text-end pe-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pages as $page)
                <tr>
                    <td class="ps-4">
                        <div style="font-weight:600;font-size:13px">{{ $page->title }}</div>
                        <small class="text-muted">{{ $page->meta_title ?? 'No meta title set' }}</small>
                    </td>
                    <td>
                        <span class="badge {{ $page->status === 'published' ? 'badge-published' : 'badge-draft' }}">
                            {{ ucfirst($page->status) }}
                        </span>
                    </td>
                    <td>{{ $page->slug }}</td>
                    <td style="font-size:12px;color:#777">{{ $page->updated_at->format('d M Y') }}</td>
                    <td class="text-end pe-4">
                        <a href="{{ route('admin.pages.edit', $page) }}" class="btn btn-sm btn-outline-primary me-1">
                            <i class='bx bx-edit'></i> Edit
                        </a>
                        <form action="{{ route('admin.pages.destroy', $page) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this page?');">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger"><i class='bx bx-trash'></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted py-5">
                        <i class='bx bxs-book-content' style="font-size:40px;display:block;margin-bottom:10px"></i>
                        No pages created yet. <a href="{{ route('admin.pages.create') }}">Create your first page.</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($pages->hasPages())
    <div class="card-footer">
        {{ $pages->links() }}
    </div>
    @endif
</div>
@endsection
