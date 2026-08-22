@extends('admin.layout')
@section('page_title', 'Department News')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
        <span><i class='bx bxs-news me-2'></i>Department News</span>
        <a href="{{ route('admin.department-news.create') }}" class="btn btn-fuo">
            <i class='bx bx-plus me-1'></i> Add News
        </a>
    </div>
    <div class="card-body p-0">
        {{-- Department Filter --}}
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
                    <th class="ps-4" style="width:60px">Image</th>
                    <th>Title</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th class="text-end pe-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($newsList as $item)
                <tr>
                    <td class="ps-4">
                        @if($item->image)
                        <img src="{{ asset('storage/'.$item->image) }}"
                             style="width:48px;height:40px;object-fit:cover;border-radius:6px"
                             onerror="this.style.display='none'">
                        @endif
                    </td>
                    <td>
                        <div style="font-weight:600;font-size:13px;max-width:280px">{{ $item->title }}</div>
                        <small class="text-muted">{{ Str::limit($item->excerpt, 60) }}</small>
                    </td>
                    <td><span class="badge bg-info">{{ $item->department->department_name ?? 'N/A' }}</span></td>
                    <td>
                        <span class="badge {{ $item->is_published ? 'bg-success' : 'bg-secondary' }}">
                            {{ $item->is_published ? 'Published' : 'Draft' }}
                        </span>
                    </td>
                    <td style="font-size:12px;color:#777">
                        {{ $item->published_at ? $item->published_at->format('d M Y') : $item->created_at->format('d M Y') }}
                    </td>
                    <td class="text-end pe-4">
                        <a href="{{ route('admin.department-news.edit', $item) }}" class="btn btn-sm btn-outline-primary me-1">
                            <i class='bx bx-edit'></i>
                        </a>
                        <form action="{{ route('admin.department-news.destroy', $item) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Delete this news?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger"><i class='bx bx-trash'></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center text-muted py-5">
                        No department news found. <a href="{{ route('admin.department-news.create') }}">Create one.</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($newsList->hasPages())
    <div class="card-footer d-flex justify-content-center">
        {{ $newsList->appends(request()->query())->links('pagination::bootstrap-5') }}
    </div>
    @endif
</div>
@endsection
