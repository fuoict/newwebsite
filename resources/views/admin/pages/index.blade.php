@extends('admin.layout')
@section('page_title', 'Pages')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
        <span><i class='bx bx-file me-2'></i>University Pages</span>
        <a href="{{ route('admin.pages.create') }}" class="btn btn-sm btn-fuo"><i class='bx bx-plus me-1'></i> Add Page</a>
    </div>
    <div class="card-body p-0">
        <div class="px-4 py-3 border-bottom">
            <form method="GET" class="d-flex gap-2 align-items-center flex-wrap">
                <select name="section" class="form-select form-select-sm" style="max-width:200px" onchange="this.form.submit()">
                    <option value="">All Sections</option>
                    <option value="university" {{ request('section') == 'university' ? 'selected' : '' }}>The University</option>
                    <option value="officers" {{ request('section') == 'officers' ? 'selected' : '' }}>Principal Officers</option>
                    <option value="admissions" {{ request('section') == 'admissions' ? 'selected' : '' }}>Admissions</option>
                    <option value="academics" {{ request('section') == 'academics' ? 'selected' : '' }}>Academics</option>
                    <option value="publications" {{ request('section') == 'publications' ? 'selected' : '' }}>Publications</option>
                    <option value="downloads" {{ request('section') == 'downloads' ? 'selected' : '' }}>Downloads</option>
                    <option value="showcase" {{ request('section') == 'showcase' ? 'selected' : '' }}>Showcase</option>
                    <option value="other" {{ request('section') == 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr><th class="ps-4">Title</th><th>Section</th><th>Parent</th><th>Status</th><th class="text-end pe-4">Actions</th></tr>
                </thead>
                <tbody>
                    @forelse($pages as $page)
                    <tr>
                        <td class="ps-4">
                            <div style="font-weight:600;font-size:13px">
                                @if($page->icon)<i class='{{ $page->icon }} me-1' style="color:var(--accent,#035F39)"></i>@endif
                                {{ $page->title }}
                            </div>
                            <small class="text-muted">{{ $page->slug }}</small>
                        </td>
                        <td><span class="badge bg-info">{{ $page->section }}</span></td>
                        <td style="font-size:12px">{{ $page->parent_slug ?? '—' }}</td>
                        <td><span class="badge {{ $page->is_active ? 'bg-success' : 'bg-secondary' }}">{{ $page->is_active ? 'Active' : 'Hidden' }}</span></td>
                        <td class="text-end pe-4">
                            <a href="{{ route('admin.pages.edit', $page) }}" class="btn btn-sm btn-outline-primary me-1"><i class='bx bx-edit'></i></a>
                            <form action="{{ route('admin.pages.destroy', $page) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger"><i class='bx bx-trash'></i></button></form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="text-center text-muted py-5">No pages found. <a href="{{ route('admin.pages.create') }}">Create one.</a></td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @if($pages->hasPages())<div class="card-footer d-flex justify-content-center">{{ $pages->appends(request()->query())->links('pagination::bootstrap-5') }}</div>@endif
</div>
@endsection
