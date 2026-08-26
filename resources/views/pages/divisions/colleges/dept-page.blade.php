@extends('layouts.app')

@section('content')

<!-- Banner -->
<div class="section-banner bg-12">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100">{{ $link->title }}</h2>
                <p data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('department', $department->slug) }}" style="color:#fff;text-decoration:underline">
                        {{ $department->department_name }}
                    </a>
                    &rsaquo; {{ $link->title }}
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Page Content -->
<div class="ptb-100">
    <div class="container">
        <div class="row g-5">

            {{-- Sidebar --}}
            <div class="col-lg-4">
                <div style="background:#fff;border-radius:16px;padding:20px;box-shadow:0 4px 24px rgba(0,0,0,.08)">
                    <h6 style="font-weight:700;margin-bottom:14px;padding-bottom:10px;
                               border-bottom:2px solid #035F39;font-size:14px">
                        <i class='bx bx-link' style="color:#035F39"></i> Quick Links
                    </h6>
                    <ul style="list-style:none;padding:0;margin:0">
                        @foreach($featuredLinks as $fl)
                        <li style="margin-bottom:4px">
                            <a href="{{ $fl->url }}"
                               style="display:flex;align-items:center;gap:8px;padding:8px 10px;
                                      border-radius:6px;font-size:13px;text-decoration:none;
                                      {{ $fl->id === $link->id ? 'background:#f0f7f0;color:#035F39;font-weight:600' : 'color:#333' }}">
                                @if($fl->icon)
                                    <i class='{{ $fl->icon }}' style="color:#035F39;font-size:16px;width:20px;text-align:center"></i>
                                @else
                                    <i class='bx bx-chevron-right' style="color:#035F39;font-size:16px;width:20px;text-align:center"></i>
                                @endif
                                {{ $fl->title }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- Main Content --}}
            <div class="col-lg-8">
                <article style="background:#fff;border-radius:16px;padding:28px;box-shadow:0 4px 24px rgba(0,0,0,.08)">
                    <h3 style="font-weight:700;color:#1a1a2e;margin-bottom:16px;
                               padding-bottom:10px;border-bottom:2px solid #035F39">
                        <i class='{{ $link->icon ?? "bx bx-file" }}' style="color:#035F39"></i>
                        {{ $link->title }}
                    </h3>

                    {{-- Staff List: pull from lecturers table --}}
                    @if($link->title === 'Staff List' && isset($lecturers) && $lecturers->count())
                        <p style="color:#888;font-size:14px;margin-bottom:20px">
                            {{ $lecturers->count() }} staff member(s) in the {{ $department->department_name }}
                        </p>
                        <div class="row g-3">
                            @foreach($lecturers as $lecturer)
                            <div class="col-md-6">
                                <a href="{{ route('lecturer.show', $lecturer->slug) }}"
                                   style="display:flex;align-items:center;gap:12px;padding:12px;
                                          border:1px solid #f0f0f0;border-radius:10px;text-decoration:none;
                                          transition:box-shadow .2s"
                                   onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,.08)'"
                                   onmouseout="this.style.boxShadow='none'">
                                    <img src="{{ $lecturer->photo_url }}"
                                         alt="{{ $lecturer->full_name }}"
                                         style="width:50px;height:50px;border-radius:50%;object-fit:cover;
                                                border:2px solid #035F39;flex-shrink:0">
                                    <div>
                                        <div style="font-size:13px;font-weight:600;color:#222;line-height:1.3">
                                            {{ $lecturer->full_name }}
                                        </div>
                                        <div style="font-size:11px;color:#888">{{ $lecturer->position }}</div>
                                        @if($lecturer->specialization)
                                        <div style="font-size:11px;color:#035F39;margin-top:2px">
                                            {{ Str::limit($lecturer->specialization, 40) }}
                                        </div>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>

                    {{-- Other pages: show content/body from admin --}}
                    @elseif($link->content || $link->body)
                        @if($link->content)
                        <div style="line-height:1.9;color:#444;font-size:15px;margin-bottom:16px">
                            {!! nl2br(e($link->content)) !!}
                        </div>
                        @endif
                        @if($link->body)
                        <div style="line-height:1.9;color:#444;font-size:15px">
                            {!! $link->body !!}
                        </div>
                        @endif

                    @else
                        <div style="text-align:center;padding:60px 20px;color:#888">
                            <i class='bx bx-file' style="font-size:48px;display:block;margin-bottom:16px;color:#ccc"></i>
                            <p style="font-size:16px;margin-bottom:8px">Content coming soon</p>
                            <p style="font-size:13px">This page is being prepared. Check back later.</p>
                        </div>
                    @endif
                </article>
            </div>

        </div>
    </div>
</div>

@endsection
