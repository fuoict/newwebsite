@extends('admin.layout')
@section('page_title', 'Inaugural Lectures')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
        <span><i class='bx bx-microphone me-2'></i>Inaugural Lectures</span>
        <a href="{{ route('admin.inaugural.create') }}" class="btn btn-sm btn-fuo"><i class='bx bx-plus me-1'></i> Add Lecture</a>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr><th class="ps-4">Date</th><th>Image</th><th>Title</th><th>Speaker</th><th>Materials</th><th class="text-end pe-4">Actions</th></tr>
            </thead>
            <tbody>
                @forelse($lectures as $lecture)
                <tr>
                    <td class="ps-4" style="white-space:nowrap">{{ $lecture->lecture_date->format('M d, Y') }}</td>
                    <td>
                        @if($lecture->image_path && \Illuminate\Support\Facades\File::exists(public_path($lecture->image_path)))
                            <img src="{{ asset($lecture->image_path) }}" alt="" style="width:52px;height:38px;object-fit:cover;border-radius:6px;">
                        @else
                            <span class="text-muted" style="font-size:12px">—</span>
                        @endif
                    </td>
                    <td><div style="font-weight:600;font-size:13px">{{ $lecture->title }}</div></td>
                    <td style="font-size:13px">{{ $lecture->speaker_name }}</td>
                    <td style="white-space:nowrap">
                        @if($lecture->slides_path)
                            <a href="{{ $lecture->slidesUrl() }}" target="_blank" class="badge bg-success text-decoration-none" title="Open slides"><i class='bx bx-file me-1'></i>Slides</a>
                        @else
                            <span class="badge bg-light text-muted">No slides</span>
                        @endif
                        @if($lecture->event_url)
                            <a href="{{ $lecture->event_url }}" target="_blank" rel="noopener" class="badge bg-info text-dark text-decoration-none ms-1" title="Open event link"><i class='bx bx-link-external me-1'></i>Event</a>
                        @endif
                    </td>
                    <td class="text-end pe-4">
                        <a href="{{ route('admin.inaugural.edit', $lecture) }}" class="btn btn-sm btn-outline-primary me-1"><i class='bx bx-edit'></i></a>
                        <form action="{{ route('admin.inaugural.destroy', $lecture) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this lecture?')">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger"><i class='bx bx-trash'></i></button></form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" class="text-center text-muted py-5">No lectures yet. <a href="{{ route('admin.inaugural.create') }}">Add one.</a></td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
