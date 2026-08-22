@extends('layouts.app')

@section('content')

<!-- Start Section Banner Area -->
<div class="section-banner bg-12">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100">{{ $Department->department_name }}</h2>
            </div>
        </div>
    </div>
</div>

<!-- Start Department Content -->
<div class="academics-section pt-100 pb-70">
    <div class="container">
        <div class="row">

            {{-- LEFT SIDEBAR --}}
            <div class="col-lg-4">
                <div class="academics-left">

                    {{-- HOD Card --}}
                    <div class="ac-contact text-center mb-4">
                        <div class="hod-card">
                            <img src="{{ $Department->hod_image ? asset('storage/'.$Department->hod_image) : asset('img/logo/fuo-logo.png') }}"
                                 alt="{{ $Department->hod_name ?? 'Head of Department' }}"
                                 class="img-fluid rounded"
                                 style="max-width:220px;height:auto;object-fit:cover;margin:0 auto">
                            <h4 class="mt-3" style="color:#000;font-weight:600">
                                {{ $Department->hod_name ?? 'Head of Department' }}
                            </h4>
                            @if($Department->hod_email)
                                <p class="mb-1">{{ $Department->hod_email }}</p>
                            @endif
                            @if($Department->hod_phone)
                                <p>{{ $Department->hod_phone }}</p>
                            @endif
                        </div>
                    </div>

                    {{-- Featured Links (Admin-managed) --}}
                    @if($featuredLinks && $featuredLinks->count())
                    <div style="background:#fff;border-radius:10px;padding:16px;margin-bottom:16px;box-shadow:0 2px 8px rgba(0,0,0,.07)">
                        <h6 style="font-weight:700;color:#035F39;margin-bottom:12px;padding-bottom:8px;border-bottom:2px solid #035F39;font-size:13px;text-transform:uppercase;letter-spacing:.5px">
                            <i class='bx bx-link'></i> Featured Links
                        </h6>
                        <ul style="list-style:none;padding:0;margin:0">
                            @foreach($featuredLinks as $link)
                            <li style="margin-bottom:6px">
                                <a href="{{ $link->url ?? '#'}}"
                                   style="display:flex;align-items:center;gap:8px;padding:8px 10px;border-radius:6px;font-size:13px;color:#333;text-decoration:none;transition:background .2s"
                                   onmouseover="this.style.background='#f0f7f0'"
                                   onmouseout="this.style.background='transparent'">
                                    @if($link->icon)
                                        <i class='{{ $link->icon }}' style="color:#035F39;font-size:16px;width:20px;text-align:center"></i>
                                    @else
                                        <i class='bx bx-chevron-right' style="color:#035F39;font-size:16px;width:20px;text-align:center"></i>
                                    @endif
                                    {{ $link->title }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    {{-- Course Synopsis Links --}}
                    @php
                        $courseLevels = \App\Models\CourseSynopsis::published()
                            ->where('department_id', $Department->id)
                            ->distinct()
                            ->pluck('level')
                            ->sort()
                            ->values();
                    @endphp
                    @if($courseLevels->count())
                    <div style="background:#fff;border-radius:10px;padding:16px;margin-bottom:16px;box-shadow:0 2px 8px rgba(0,0,0,.07)">
                        <h6 style="font-weight:700;color:#035F39;margin-bottom:12px;padding-bottom:8px;border-bottom:2px solid #035F39;font-size:13px;text-transform:uppercase;letter-spacing:.5px">
                            <i class='bx bx-book'></i> Course Synopsis
                        </h6>
                        <ul style="list-style:none;padding:0;margin:0">
                            @foreach($courseLevels as $level)
                            <li>
                                <a href="{{ route('department.courses', ['slug' => $Department->slug, 'level' => $level]) }}"
                                   style="display:block;padding:8px 10px;border-radius:6px;font-size:13px;color:#333;text-decoration:none;transition:background .2s"
                                   onmouseover="this.style.background='#f0f7f0'"
                                   onmouseout="this.style.background='transparent'">
                                    <i class='bx bx-right-arrow-alt' style="color:#035F39"></i> {{ $level }} Level
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    {{-- Quick Links --}}
                    <div class="ac-contact">
                        <span>Quick Links</span>
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
            </div>
            {{-- MAIN CONTENT --}}
            <div class="col-lg-8">
                <div class="blog-details-desc">
                    <div class="article-content">
                        <h3>Welcome to the {{ $Department->department_name }}</h3>
                        <h4>{{ $Department->department_title }}</h4>
                        <p>{{ $Department->department_description }}</p>

                        <h3>About the Department</h3>
                        <p>{{ $Department->about_department }}</p>

                        <ul class="wp-block-gallery columns-2">
                            <li class="blocks-gallery-item">
                                <figure>
                                    <h4>Mission</h4>
                                    <p>{{ $Department->mission }}</p>
                                </figure>
                            </li>
                            <li class="blocks-gallery-item">
                                <figure>
                                    <h4>Vision</h4>
                                    <p>{{ $Department->vision }}</p>
                                </figure>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- RECENT DEPARTMENT NEWS --}}
@if(isset($recentNews) && $recentNews->count())
<div style="background:#f8f9fa;padding:60px 0">
    <div class="container">
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:28px">
            <div>
                <h3 style="font-weight:700;color:#1a1a2e;margin-bottom:4px">
                    <i class='bx bxs-news' style="color:#035F39"></i> News & Events
                </h3>
                <p style="color:#888;font-size:14px;margin:0">Latest from the {{ $Department->department_name }}</p>
            </div>
            <a href="{{ route('department.news', $Department->slug) }}"
               style="color:#035F39;font-weight:600;font-size:14px;text-decoration:none">
                View All <i class='bx bx-right-arrow-alt'></i>
            </a>
        </div>
        <div class="row g-4">
            @foreach($recentNews as $item)
            <div class="col-lg-3 col-md-6">
                <a href="{{ route('department.news.show', ['slug' => $Department->slug, 'news' => $item->slug]) }}"
                   style="text-decoration:none;display:block;background:#fff;border-radius:10px;overflow:hidden;box-shadow:0 2px 10px rgba(0,0,0,.06);transition:transform .2s,box-shadow .2s;height:100%"
                   onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 6px 20px rgba(0,0,0,.12)'"
                   onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 2px 10px rgba(0,0,0,.06)'">
                    @if($item->image)
                    <div style="height:140px;overflow:hidden">
                        <img src="{{ $item->image_url }}" alt="{{ $item->title }}" style="width:100%;height:100%;object-fit:cover">
                    </div>
                    @endif
                    <div style="padding:14px">
                        <p style="font-size:11px;color:#035F39;font-weight:600;margin-bottom:6px;text-transform:uppercase">
                            {{ $item->published_at ? $item->published_at->format('d M Y') : '' }}
                        </p>
                        <h5 style="font-size:14px;font-weight:600;color:#222;line-height:1.4;margin:0">
                            {{ \Illuminate\Support\Str::limit($item->title, 60) }}
                        </h5>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif

{{-- OUR STAFF SECTION --}}
@if(isset($lecturers) && $lecturers->count())
<div class="our-staff-section" id="our-staff" style="padding:0 0 60px">
    <div class="container">
        <h3 style="font-weight:700;margin-bottom:6px;color:#1a1a2e">
            <i class='bx bxs-user-detail' style="color:#035F39"></i> Our Staff
        </h3>
        <p style="color:#888;font-size:14px;margin-bottom:28px;
                   border-bottom:2px solid #035F39;padding-bottom:12px">
            Meet the dedicated faculty of the {{ $Department->department_name }}
        </p>
        <div class="row g-4">
            @foreach($lecturers as $lecturer)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('lecturer.show', $lecturer->slug) }}"
                   style="text-decoration:none;display:block">
                    <div style="background:#fff;border-radius:12px;overflow:hidden;
                                box-shadow:0 4px 20px rgba(0,0,0,.08);
                                border:1px solid #f0f0f0;height:100%;
                                transition:transform .2s,box-shadow .2s"
                         onmouseover="this.style.transform='translateY(-5px)';this.style.boxShadow='0 8px 30px rgba(0,0,0,.14)'"
                         onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 20px rgba(0,0,0,.08)'">

                        {{-- Photo + Name --}}
                        <div style="background:linear-gradient(135deg,#035F39,#024A2D);
                                    padding:24px 16px 16px;text-align:center;position:relative">
                            @if($lecturer->is_hod)
                            <div style="position:absolute;top:8px;right:8px;
                                        background:#f4c430;color:#333;font-size:9px;
                                        font-weight:700;padding:2px 7px;border-radius:20px;
                                        text-transform:uppercase;letter-spacing:.5px">
                                <i class='bx bxs-crown'></i> HOD
                            </div>
                            @endif
                            <img src="{{ $lecturer->photo_url }}"
                                 alt="{{ $lecturer->full_name }}"
                                 style="width:80px;height:80px;border-radius:50%;
                                        object-fit:cover;border:3px solid rgba(255,255,255,.25);
                                        display:block;margin:0 auto 10px">
                            <h6 style="color:#fff;font-weight:700;margin:0;font-size:14px;
                                       line-height:1.3">
                                {{ $lecturer->full_name }}
                            </h6>
                            @if($lecturer->position)
                            <p style="color:rgba(255,255,255,.7);font-size:11px;margin:4px 0 0">
                                {{ $lecturer->position }}
                            </p>
                            @endif
                        </div>

                        {{-- Body --}}
                        <div style="padding:14px 16px">
                            @if($lecturer->specialization)
                            <div style="margin-bottom:8px">
                                <span style="font-size:10px;font-weight:700;color:#035F39;
                                             text-transform:uppercase;letter-spacing:.5px">
                                    Specialization
                                </span>
                                <p style="font-size:12px;color:#555;margin:3px 0 0;line-height:1.4">
                                    {{ Str::limit($lecturer->specialization, 60) }}
                                </p>
                            </div>
                            @endif
                            @if($lecturer->qualifications)
                            <div style="margin-bottom:8px">
                                <span style="font-size:10px;font-weight:700;color:#035F39;
                                             text-transform:uppercase;letter-spacing:.5px">
                                    Qualifications
                                </span>
                                <p style="font-size:11px;color:#777;margin:3px 0 0;
                                           line-height:1.4;font-style:italic">
                                    {{ Str::limit($lecturer->qualifications, 80) }}
                                </p>
                            </div>
                            @endif
                            <div style="margin-top:10px;padding-top:10px;
                                        border-top:1px solid #f5f5f5;text-align:center">
                                <span style="font-size:12px;color:#035F39;font-weight:600">
                                    View Profile <i class='bx bx-right-arrow-alt'></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif

@endsection
