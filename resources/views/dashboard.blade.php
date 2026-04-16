@extends('admin.layout')
@section('page_title', 'Dashboard')

@section('content')
<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="stat-card d-flex align-items-center gap-3">
            <div class="icon" style="background:#e3f2fd; color:#1565c0">
                <i class='bx bxs-news'></i>
            </div>
            <div>
                <div style="font-size:28px; font-weight:700">{{ \App\Models\News::count() }}</div>
                <div class="text-muted" style="font-size:13px">Total News Posts</div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="stat-card d-flex align-items-center gap-3">
            <div class="icon" style="background:#e8f5e9; color:#2e7d32">
                <i class='bx bxs-check-circle'></i>
            </div>
            <div>
                <div style="font-size:28px; font-weight:700">{{ \App\Models\News::published()->count() }}</div>
                <div class="text-muted" style="font-size:13px">Published Posts</div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="stat-card d-flex align-items-center gap-3">
            <div class="icon" style="background:#fff3e0; color:#e65100">
                <i class='bx bxs-user-detail'></i>
            </div>
            <div>
                <div style="font-size:28px; font-weight:700">{{ \App\Models\Staff::count() }}</div>
                <div class="text-muted" style="font-size:13px">Staff Profiles</div>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    {{-- Recent News --}}
    <div class="col-lg-7">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
                <span><i class='bx bxs-news me-2'></i>Recent News</span>
                <a href="{{ route('admin.news.create') }}" class="btn btn-sm btn-fuo">
                    <i class='bx bx-plus'></i> Add News
                </a>
            </div>
            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">Title</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse(\App\Models\News::latest()->limit(6)->get() as $item)
                        <tr>
                            <td class="ps-4" style="max-width:200px">
                                <div style="font-size:13px; font-weight:500; white-space:nowrap; overflow:hidden; text-overflow:ellipsis">
                                    {{ $item->title }}
                                </div>
                                <small class="text-muted">{{ $item->created_at->diffForHumans() }}</small>
                            </td>
                            <td><span class="badge bg-secondary">{{ $item->category }}</span></td>
                            <td>
                                @if($item->is_published)
                                    <span class="badge badge-published">Published</span>
                                @else
                                    <span class="badge badge-draft">Draft</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.news.edit', $item) }}" class="btn btn-sm btn-outline-secondary">
                                    <i class='bx bx-edit'></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="4" class="text-center text-muted py-4">No news posts yet.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-end">
                <a href="{{ route('admin.news.index') }}" class="btn btn-sm btn-fuo">View All News</a>
            </div>
        </div>
    </div>

    {{-- Recent Staff --}}
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
                <span><i class='bx bxs-user-detail me-2'></i>Recent Staff</span>
                <a href="{{ route('admin.staff.create') }}" class="btn btn-sm btn-fuo">
                    <i class='bx bx-plus'></i> Add Staff
                </a>
            </div>
            <div class="card-body p-0">
                <ul class="list-group list-group-flush">
                    @forelse(\App\Models\Staff::ordered()->with('college')->limit(6)->get() as $member)
                    <li class="list-group-item d-flex align-items-center gap-3 px-4">
                        <img src="{{ $member->photo_url }}"
                             style="width:36px;height:36px;border-radius:50%;object-fit:cover"
                             alt="{{ $member->name }}"
                             onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($member->name) }}&background=0f3460&color=fff&size=36'">
                        <div style="flex:1; min-width:0">
                            <div style="font-size:13px; font-weight:600">{{ $member->full_name }}</div>
                            <small class="text-muted">{{ $member->position }} — {{ $member->college->college_name ?? '—' }}</small>
                        </div>
                        <a href="{{ route('admin.staff.edit', $member) }}" class="btn btn-sm btn-outline-secondary">
                            <i class='bx bx-edit'></i>
                        </a>
                    </li>
                    @empty
                    <li class="list-group-item text-center text-muted py-4">No staff added yet.</li>
                    @endforelse
                </ul>
            </div>
            <div class="card-footer text-end">
                <a href="{{ route('admin.staff.index') }}" class="btn btn-sm btn-fuo">View All Staff</a>
            </div>
        </div>
    </div>
</div>
@endsection
