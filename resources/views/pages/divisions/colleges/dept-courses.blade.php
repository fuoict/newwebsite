@extends('layouts.app')

@section('content')

<!-- Banner -->
<div class="section-banner bg-12">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100">Course Synopsis</h2>
                <p data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('department', $department->slug) }}" style="color:#fff;text-decoration:underline">
                        {{ $department->department_name }}
                    </a>
                    &rsaquo; Courses
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Course Synopsis -->
<div class="ptb-100">
    <div class="container">
        <div class="row g-5">

            {{-- Sidebar --}}
            <div class="col-lg-4">
                <div style="background:#fff;border-radius:16px;padding:20px;box-shadow:0 4px 24px rgba(0,0,0,.08)">
                    <h6 style="font-weight:700;margin-bottom:14px;padding-bottom:10px;
                               border-bottom:2px solid #035F39;font-size:14px">
                        <i class='bx bx-book' style="color:#035F39"></i> Filter by Level
                    </h6>
                    <ul style="list-style:none;padding:0;margin:0">
                        <li>
                            <a href="{{ route('department.courses', $department->slug) }}"
                               style="display:block;padding:8px 10px;border-radius:6px;font-size:13px;
                                      text-decoration:none;font-weight:600;
                                      {{ !request('level') ? 'background:#f0f7f0;color:#035F39' : 'color:#333' }}">
                                All Levels
                            </a>
                        </li>
                        @foreach($levels as $level)
                        <li>
                            <a href="{{ route('department.courses', ['slug' => $department->slug, 'level' => $level]) }}"
                               style="display:block;padding:8px 10px;border-radius:6px;font-size:13px;
                                      text-decoration:none;
                                      {{ request('level') == $level ? 'background:#f0f7f0;color:#035F39;font-weight:600' : 'color:#333' }}">
                                {{ $level }} Level
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- Courses Table --}}
            <div class="col-lg-8">
                <div style="background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.08)">
                    <div style="padding:20px 24px;border-bottom:1px solid #eee">
                        <h4 style="font-weight:700;margin:0;font-size:18px">
                            {{ request('level') ? request('level') . ' Level Courses' : 'All Courses' }}
                        </h4>
                        <p style="color:#888;font-size:13px;margin:4px 0 0">
                            {{ $department->department_name }} — {{ $courses->count() }} course(s)
                        </p>
                    </div>

                    @if($courses->count())
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th style="padding:12px 16px;font-size:12px">Code</th>
                                    <th style="padding:12px 16px;font-size:12px">Course Title</th>
                                    <th style="padding:12px 16px;font-size:12px">Unit</th>
                                    <th style="padding:12px 16px;font-size:12px">Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courses as $course)
                                <tr>
                                    <td style="padding:12px 16px">
                                        <span class="badge bg-dark" style="font-size:11px">{{ $course->course_code }}</span>
                                    </td>
                                    <td style="padding:12px 16px">
                                        <div style="font-weight:600;font-size:13px">{{ $course->course_title }}</div>
                                        @if($course->description)
                                        <small class="text-muted">{{ Str::limit($course->description, 80) }}</small>
                                        @endif
                                    </td>
                                    <td style="padding:12px 16px">{{ $course->unit }}</td>
                                    <td style="padding:12px 16px">
                                        @php
                                            $typeColors = ['core' => 'bg-primary', 'elective' => 'bg-warning text-dark', 'required' => 'bg-info'];
                                        @endphp
                                        <span class="badge {{ $typeColors[$course->type] ?? 'bg-secondary' }}">
                                            {{ ucfirst($course->type) }}
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="text-center py-5">
                        <p class="text-muted">No courses available{{ request('level') ? ' for this level' : '' }} yet.</p>
                    </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
