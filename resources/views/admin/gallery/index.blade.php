@extends('admin.layout')
@section('page_title', 'Gallery')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
        <span><i class='bx bx-images me-2'></i>Gallery Albums</span>
        <a href="{{ route('admin.gallery.create') }}" class="btn btn-sm btn-fuo"><i class='bx bx-plus me-1'></i> Add Album</a>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr><th class="ps-4">Order</th><th>Heading</th><th>Subheading</th><th>Images</th><th>Status</th><th class="text-end pe-4">Actions</th></tr>
            </thead>
            <tbody>
                @forelse($albums as $album)
                <tr>
                    <td class="ps-4">{{ $album->sort_order }}</td>
                    <td><div style="font-weight:600;font-size:13px">{{ $album->title }}</div></td>
                    <td style="font-size:12px;color:#667;max-width:340px">{{ \Illuminate\Support\Str::limit($album->description, 90) ?: '—' }}</td>
                    <td>
                        <a href="{{ route('admin.gallery.images', $album) }}" class="badge bg-info text-dark text-decoration-none" title="Upload / manage images">
                            <i class='bx bx-image me-1'></i>{{ $album->images_count }} image{{ $album->images_count === 1 ? '' : 's' }}
                        </a>
                    </td>
                    <td><span class="badge {{ $album->is_active ? 'bg-success' : 'bg-secondary' }}">{{ $album->is_active ? 'Active' : 'Hidden' }}</span></td>
                    <td class="text-end pe-4">
                        <a href="{{ route('admin.gallery.images', $album) }}" class="btn btn-sm btn-outline-success me-1" title="Manage images"><i class='bx bx-upload'></i></a>
                        <a href="{{ route('admin.gallery.edit', $album) }}" class="btn btn-sm btn-outline-primary me-1"><i class='bx bx-edit'></i></a>
                        <form action="{{ route('admin.gallery.destroy', $album) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this album? Its images will be unlisted from the gallery (files are kept on the server).')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger"><i class='bx bx-trash'></i></button></form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" class="text-center text-muted py-5">No albums yet. <a href="{{ route('admin.gallery.create') }}">Create one.</a></td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
