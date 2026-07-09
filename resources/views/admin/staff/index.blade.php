@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h4">Staff</h1>
        <a href="{{ route('admin.staff.create') }}" class="btn btn-primary btn-sm">Add Staff</a>
    </div>

    <div class="card">
        <div class="card-body">
            <p class="mb-0">No staff records to display yet.</p>
        </div>
    </div>
</div>
@endsection
