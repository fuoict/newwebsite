@extends('admin.layout')
@section('page_title', 'News & Updates')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
        <span><i class='bx bxs-news me-2'></i>All News Posts</span>
        <a href="{{ route('admin.news.create') }}" class="btn btn-fuo">
            <i class='bx bx-plus me-1'></i> Add New Post
        </a>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th class="ps-4" style="width:60px">Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Featured</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th class="text-end pe-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($newsList as $item)
                <tr>
                    <td class="ps-4">
                        <img src="{{ $item->image_url }}"
                             style="width:48px;height:40px;object-fit:cover;border-radius:6px"
                             onerror="this.style.display='none'">
                    </td>
                    <td>
                        <div style="font-weight:600;font-size:13px;max-width:280px">{{ $item->title }}</div>
                        <small class="text-muted">{{ Str::limit($item->excerpt, 60) }}</small>
                    </td>
                    <td><span class="badge bg-secondary">{{ $item->category }}</span></td>
                    <td>
                        @if($item->is_featured)
                            <span class="badge bg-warning text-dark"><i class='bx bxs-star'></i> Featured</span>
                        @else
                            <span class="text-muted">—</span>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('admin.news.toggle', $item) }}" method="POST" class="d-inline">
                            @csrf @method('PATCH')
                            <button type="submit" class="badge border-0 {{ $item->is_published ? 'bg-success' : 'bg-secondary' }}"
                                    style="cursor:pointer" title="Click to toggle">
                                {{ $item->is_published ? 'Published' : 'Draft' }}
                            </button>
                        </form>
                    </td>
                    <td style="font-size:12px;color:#777">
                        {{ $item->published_at ? $item->published_at->format('d M Y') : $item->created_at->format('d M Y') }}
                    </td>
                    <td class="text-end pe-4">
                        <a href="{{ route('admin.news.edit', $item) }}" class="btn btn-sm btn-outline-primary me-1">
                            <i class='bx bx-edit'></i> Edit
                        </a>
                        <form action="{{ route('admin.news.destroy', $item) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Delete this post?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger"><i class='bx bx-trash'></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center text-muted py-5">
                        <i class='bx bx-news' style="font-size:40px;display:block;margin-bottom:10px"></i>
                        No news posts yet. <a href="{{ route('admin.news.create') }}">Create your first one.</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($newsList->hasPages())
    <div class="card-footer">
        {{ $newsList->links() }}
    </div>
    @endif
</div>
@endsection
