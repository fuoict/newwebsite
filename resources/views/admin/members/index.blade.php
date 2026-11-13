@extends('admin.layout')
@section('page_title', 'Council & BOT Members')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
        <span><i class='bx bx-group me-2'></i>Council &amp; BOT Members</span>
        <a href="{{ route('admin.members.create', ['type' => $type]) }}" class="btn btn-sm btn-fuo"><i class='bx bx-plus me-1'></i> Add Member</a>
    </div>
    <div class="card-body px-4 pt-3">
        <div class="d-flex flex-wrap gap-2">
            @foreach(\App\Models\GovernanceMember::TYPES as $key => $label)
                <a href="{{ route('admin.members.index', ['type' => $key]) }}" class="btn btn-sm {{ $type === $key ? 'btn-fuo' : 'btn-outline-secondary' }}">
                    <i class='bx {{ $key === 'bot' ? 'bx-briefcase' : 'bx-building' }} me-1'></i>{{ $label }}
                </a>
            @endforeach
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr><th class="ps-4">Order</th><th>Photo</th><th>Name</th><th>Role</th><th>Status</th><th class="text-end pe-4">Actions</th></tr>
            </thead>
            <tbody>
                @forelse($members as $member)
                <tr>
                    <td class="ps-4">{{ $member->sort_order }}</td>
                    <td>
                        @if($member->photoUrl())
                            <img src="{{ $member->photoUrl() }}" alt="{{ $member->name }}" style="width:40px;height:40px;object-fit:cover;border-radius:8px;">
                        @else
                            <span style="display:inline-grid;place-items:center;width:40px;height:40px;border-radius:8px;background:#0B3D2E;color:#fff;font-weight:700;font-size:12px;">{{ $member->initials }}</span>
                        @endif
                    </td>
                    <td><div style="font-weight:600;font-size:13px">{{ $member->name }}</div></td>
                    <td style="font-size:13px">{{ $member->role }}</td>
                    <td><span class="badge {{ $member->is_active ? 'bg-success' : 'bg-secondary' }}">{{ $member->is_active ? 'Active' : 'Hidden' }}</span></td>
                    <td class="text-end pe-4">
                        @if($member->bio)<span class="badge bg-info text-dark me-1" title="Has bio"><i class='bx bx-info-circle'></i></span>@endif
                        <a href="{{ route('admin.members.edit', $member) }}" class="btn btn-sm btn-outline-primary me-1"><i class='bx bx-edit'></i></a>
                        <form action="{{ route('admin.members.destroy', $member) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this member?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger"><i class='bx bx-trash'></i></button></form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" class="text-center text-muted py-5">No members in this section yet. <a href="{{ route('admin.members.create', ['type' => $type]) }}">Add one.</a></td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
