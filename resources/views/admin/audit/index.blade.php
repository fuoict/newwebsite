@extends('admin.layout')
@section('page_title', 'Activity Log')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
        <span><i class='bx bx-history me-2'></i>Activity Log</span>
    </div>
    <div class="card-body p-0">
        <div class="px-4 py-3 border-bottom">
            <form method="GET" class="d-flex gap-2 align-items-center flex-wrap">
                <select name="event" class="form-select form-select-sm" style="max-width:140px" onchange="this.form.submit()">
                    <option value="">All Events</option>
                    <option value="created" {{ request('event') == 'created' ? 'selected' : '' }}>Created</option>
                    <option value="updated" {{ request('event') == 'updated' ? 'selected' : '' }}>Updated</option>
                    <option value="deleted" {{ request('event') == 'deleted' ? 'selected' : '' }}>Deleted</option>
                </select>
                <select name="model" class="form-select form-select-sm" style="max-width:160px" onchange="this.form.submit()">
                    <option value="">All Models</option>
                    @foreach($models as $m)<option value="{{ $m }}" {{ request('model') == $m ? 'selected' : '' }}>{{ $m }}</option>@endforeach
                </select>
                <select name="user_id" class="form-select form-select-sm" style="max-width:160px" onchange="this.form.submit()">
                    <option value="">All Users</option>
                    @foreach($users as $u)<option value="{{ $u->id }}" {{ request('user_id') == $u->id ? 'selected' : '' }}>{{ $u->name }}</option>@endforeach
                </select>
                <a href="{{ route('admin.audit.index') }}" class="btn btn-sm btn-outline-secondary"><i class='bx bx-reset'></i></a>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr><th class="ps-4" style="width:160px">When</th><th>User</th><th>Event</th><th>Model</th><th>Description</th><th>IP</th></tr>
                </thead>
                <tbody>
                    @forelse($logs as $log)
                    <tr>
                        <td class="ps-4" style="font-size:12px;color:#666">{{ $log->created_at->diffForHumans() }}<br><small>{{ $log->created_at->format('d M Y H:i:s') }}</small></td>
                        <td style="font-size:13px">{{ $log->user->name ?? '<em class="text-muted">System</em>' }}</td>
                        <td>
                            @php
                                $eventColors = ['created' => 'bg-success', 'updated' => 'bg-warning text-dark', 'deleted' => 'bg-danger'];
                            @endphp
                            <span class="badge {{ $eventColors[$log->event] ?? 'bg-secondary' }}">{{ ucfirst($log->event) }}</span>
                        </td>
                        <td><span class="badge bg-info">{{ class_basename($log->auditable_type) }}</span></td>
                        <td style="font-size:13px;max-width:300px">{{ $log->description }}</td>
                        <td style="font-size:11px;color:#999">{{ $log->ip_address ?? '—' }}</td>
                    </tr>
                    @empty
                    <tr><td colspan="6" class="text-center text-muted py-5"><i class='bx bx-history' style="font-size:40px;display:block;margin-bottom:10px"></i>No activity recorded yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @if($logs->hasPages())<div class="card-footer d-flex justify-content-center">{{ $logs->appends(request()->query())->links('pagination::bootstrap-5') }}</div>@endif
</div>
@endsection
