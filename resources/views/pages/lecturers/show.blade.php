@extends('layouts.app')

@section('content')

<!-- Banner -->
<div class="section-banner bg-12">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100">{{ $lecturer->full_name }}</h2>
                <p data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('department', $lecturer->department->slug ?? '') }}"
                       style="color:#fff;text-decoration:underline">
                        {{ $lecturer->department->department_name ?? 'Department' }}
                    </a>
                    &rsaquo; Staff Profile
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Profile Area -->
<div class="ptb-100">
    <div class="container">
        <div class="row g-5">

            {{-- LEFT: Photo + Quick Info --}}
            <div class="col-lg-4">

                {{-- Profile Card --}}
                <div style="background:#fff;border-radius:16px;overflow:hidden;
                            box-shadow:0 4px 24px rgba(0,0,0,.1);margin-bottom:24px">
                    <div style="background:linear-gradient(135deg,#035F39,#024A2D);
                                padding:32px 24px;text-align:center">
                        @if($lecturer->is_hod)
                        <div style="background:#f4c430;color:#333;font-size:11px;font-weight:700;
                                    padding:4px 12px;border-radius:20px;display:inline-block;
                                    margin-bottom:12px;text-transform:uppercase;letter-spacing:.5px">
                            <i class='bx bxs-crown'></i> Head of Department
                        </div>
                        @endif
                        <img src="{{ $lecturer->photo_url }}"
                             alt="{{ $lecturer->full_name }}"
                             style="width:130px;height:130px;border-radius:50%;
                                    object-fit:cover;border:4px solid rgba(255,255,255,.25);
                                    display:block;margin:0 auto 16px">
                        <h4 style="color:#fff;font-weight:700;margin:0;font-size:20px">
                            {{ $lecturer->full_name }}
                        </h4>
                        @if($lecturer->position)
                        <p style="color:rgba(255,255,255,.75);font-size:14px;margin:6px 0 0">
                            {{ $lecturer->position }}
                        </p>
                        @endif
                        @if($lecturer->department)
                        <p style="color:rgba(255,255,255,.5);font-size:12px;margin:4px 0 0">
                            {{ $lecturer->department->department_name }}
                        </p>
                        @endif
                    </div>

                    <div style="padding:20px 24px">
                        {{-- Specialization --}}
                        @if($lecturer->specialization)
                        <div style="margin-bottom:14px;padding-bottom:14px;border-bottom:1px solid #f0f0f0">
                            <div style="font-size:11px;font-weight:700;color:#0f3460;
                                        text-transform:uppercase;letter-spacing:.5px;margin-bottom:4px">
                                Specialization
                            </div>
                            <div style="font-size:14px;color:#444">{{ $lecturer->specialization }}</div>
                        </div>
                        @endif

                        {{-- Contact --}}
                        @if($lecturer->email || $lecturer->phone)
                        <div style="margin-bottom:14px;padding-bottom:14px;border-bottom:1px solid #f0f0f0">
                            <div style="font-size:11px;font-weight:700;color:#0f3460;
                                        text-transform:uppercase;letter-spacing:.5px;margin-bottom:8px">
                                Contact
                            </div>
                            @if($lecturer->email)
                            <div style="font-size:13px;color:#444;margin-bottom:6px">
                                <i class='bx bx-envelope' style="color:#0f3460"></i>
                                <a href="mailto:{{ $lecturer->email }}"
                                   style="color:#0f3460;text-decoration:none;margin-left:4px">
                                    {{ $lecturer->email }}
                                </a>
                            </div>
                            @endif
                            @if($lecturer->phone)
                            <div style="font-size:13px;color:#444">
                                <i class='bx bx-phone' style="color:#0f3460"></i>
                                <a href="tel:{{ $lecturer->phone }}"
                                   style="color:#444;text-decoration:none;margin-left:4px">
                                    {{ $lecturer->phone }}
                                </a>
                            </div>
                            @endif
                        </div>
                        @endif

                        {{-- Academic & Social Links --}}
                        @if($lecturer->hasAnyLink())
                        <div>
                            <div style="font-size:11px;font-weight:700;color:#0f3460;
                                        text-transform:uppercase;letter-spacing:.5px;margin-bottom:10px">
                                Academic & Social Links
                            </div>
                            <div style="display:flex;flex-direction:column;gap:8px">
                                @if($lecturer->google_scholar)
                                <a href="{{ $lecturer->google_scholar }}" target="_blank"
                                   style="display:flex;align-items:center;gap:8px;padding:8px 12px;
                                          background:#f0f4ff;border-radius:8px;text-decoration:none;
                                          color:#333;font-size:13px;font-weight:600">
                                    <i class='bx bxl-google' style="color:#4285F4;font-size:18px"></i>
                                    Google Scholar
                                </a>
                                @endif
                                @if($lecturer->researchgate)
                                <a href="{{ $lecturer->researchgate }}" target="_blank"
                                   style="display:flex;align-items:center;gap:8px;padding:8px 12px;
                                          background:#f0fffe;border-radius:8px;text-decoration:none;
                                          color:#333;font-size:13px;font-weight:600">
                                    <i class='bx bx-book-reader' style="color:#00CCBB;font-size:18px"></i>
                                    ResearchGate
                                </a>
                                @endif
                                @if($lecturer->linkedin)
                                <a href="{{ $lecturer->linkedin }}" target="_blank"
                                   style="display:flex;align-items:center;gap:8px;padding:8px 12px;
                                          background:#f0f7ff;border-radius:8px;text-decoration:none;
                                          color:#333;font-size:13px;font-weight:600">
                                    <i class='bx bxl-linkedin' style="color:#0077B5;font-size:18px"></i>
                                    LinkedIn
                                </a>
                                @endif
                                @if($lecturer->twitter)
                                <a href="{{ str_starts_with($lecturer->twitter,'http') ? $lecturer->twitter : 'https://twitter.com/'.ltrim($lecturer->twitter,'@') }}"
                                   target="_blank"
                                   style="display:flex;align-items:center;gap:8px;padding:8px 12px;
                                          background:#f0f9ff;border-radius:8px;text-decoration:none;
                                          color:#333;font-size:13px;font-weight:600">
                                    <i class='bx bxl-twitter' style="color:#1DA1F2;font-size:18px"></i>
                                    Twitter / X
                                </a>
                                @endif
                                @if($lecturer->orcid)
                                <a href="https://orcid.org/{{ $lecturer->orcid }}" target="_blank"
                                   style="display:flex;align-items:center;gap:8px;padding:8px 12px;
                                          background:#f9ffee;border-radius:8px;text-decoration:none;
                                          color:#333;font-size:13px;font-weight:600">
                                    <i class='bx bx-link' style="color:#A8B400;font-size:18px"></i>
                                    ORCID
                                </a>
                                @endif
                                @if($lecturer->academia_edu)
                                <a href="{{ $lecturer->academia_edu }}" target="_blank"
                                   style="display:flex;align-items:center;gap:8px;padding:8px 12px;
                                          background:#fff4f4;border-radius:8px;text-decoration:none;
                                          color:#333;font-size:13px;font-weight:600">
                                    <i class='bx bxs-graduation' style="color:#A6312D;font-size:18px"></i>
                                    Academia.edu
                                </a>
                                @endif
                                @if($lecturer->scopus)
                                <a href="{{ $lecturer->scopus }}" target="_blank"
                                   style="display:flex;align-items:center;gap:8px;padding:8px 12px;
                                          background:#eef4ff;border-radius:8px;text-decoration:none;
                                          color:#333;font-size:13px;font-weight:600">
                                    <i class='bx bx-book-open' style="color:#0A2D75;font-size:18px"></i>
                                    Scopus
                                </a>
                                @endif
                                @if($lecturer->wos)
                                <a href="{{ $lecturer->wos }}" target="_blank"
                                   style="display:flex;align-items:center;gap:8px;padding:8px 12px;
                                          background:#f8fbff;border-radius:8px;text-decoration:none;
                                          color:#333;font-size:13px;font-weight:600">
                                    <i class='bx bx-layer' style="color:#0A2D75;font-size:18px"></i>
                                    Web of Science
                                </a>
                                @endif
                                @if($lecturer->publons)
                                <a href="{{ $lecturer->publons }}" target="_blank"
                                   style="display:flex;align-items:center;gap:8px;padding:8px 12px;
                                          background:#eff6ff;border-radius:8px;text-decoration:none;
                                          color:#333;font-size:13px;font-weight:600">
                                    <i class='bx bx-award' style="color:#1A73E8;font-size:18px"></i>
                                    Publons
                                </a>
                                @endif
                                @if($lecturer->ad_scientific)
                                <a href="{{ $lecturer->ad_scientific }}" target="_blank"
                                   style="display:flex;align-items:center;gap:8px;padding:8px 12px;
                                          background:#eefafa;border-radius:8px;text-decoration:none;
                                          color:#333;font-size:13px;font-weight:600">
                                    <i class='bx bx-shield' style="color:#006778;font-size:18px"></i>
                                    AD Scientific
                                </a>
                                @endif
                                @if($lecturer->linktree)
                                <a href="{{ $lecturer->linktree }}" target="_blank"
                                   style="display:flex;align-items:center;gap:8px;padding:8px 12px;
                                          background:#f8f0ff;border-radius:8px;text-decoration:none;
                                          color:#333;font-size:13px;font-weight:600">
                                    <i class='bx bx-link-external' style="color:#A259FF;font-size:18px"></i>
                                    Linktree
                                </a>
                                @endif
                                @if($lecturer->personal_website)
                                <a href="{{ $lecturer->personal_website }}" target="_blank"
                                   style="display:flex;align-items:center;gap:8px;padding:8px 12px;
                                          background:#f5f5f5;border-radius:8px;text-decoration:none;
                                          color:#333;font-size:13px;font-weight:600">
                                    <i class='bx bx-globe' style="color:#333;font-size:18px"></i>
                                    Personal Website
                                </a>
                                @endif
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                {{-- Colleagues sidebar --}}
                @if($colleagues->count())
                <div style="background:#fff;border-radius:16px;padding:20px;
                            box-shadow:0 4px 24px rgba(0,0,0,.08)">
                    <h6 style="font-weight:700;margin-bottom:14px;padding-bottom:10px;
                               border-bottom:2px solid #0f3460;font-size:14px">
                        Other Staff in This Department
                    </h6>
                    @foreach($colleagues as $colleague)
                    <a href="{{ route('lecturer.show', $colleague->slug) }}"
                       style="display:flex;align-items:center;gap:10px;text-decoration:none;
                              margin-bottom:12px;padding-bottom:12px;border-bottom:1px solid #f5f5f5">
                        <img src="{{ $colleague->photo_url }}"
                             style="width:40px;height:40px;border-radius:50%;object-fit:cover;flex-shrink:0"
                             alt="{{ $colleague->name }}">
                        <div>
                            <div style="font-size:13px;font-weight:600;color:#222">
                                {{ $colleague->full_name }}
                            </div>
                            <div style="font-size:11px;color:#888">{{ $colleague->position }}</div>
                        </div>
                    </a>
                    @endforeach
                    <a href="{{ route('department', $lecturer->department->slug ?? '') }}"
                       style="font-size:12px;color:#0f3460;text-decoration:none;font-weight:600">
                        View All Department Staff <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
                @endif

            </div>

            {{-- RIGHT: Full Profile --}}
            <div class="col-lg-8">

                {{-- Biography --}}
                @if($lecturer->biography)
                <div style="background:#fff;border-radius:16px;padding:28px;
                            box-shadow:0 4px 24px rgba(0,0,0,.08);margin-bottom:24px">
                    <h5 style="font-weight:700;color:#1a1a2e;margin-bottom:16px;
                               padding-bottom:10px;border-bottom:2px solid #0f3460">
                        <i class='bx bxs-user-circle' style="color:#0f3460"></i> Biography
                    </h5>
                    <p style="line-height:1.9;color:#444;font-size:15px;margin:0">
                        {{ $lecturer->biography }}
                    </p>
                </div>
                @endif

                {{-- Qualifications --}}
                @if($lecturer->qualifications)
                <div style="background:#fff;border-radius:16px;padding:28px;
                            box-shadow:0 4px 24px rgba(0,0,0,.08);margin-bottom:24px">
                    <h5 style="font-weight:700;color:#1a1a2e;margin-bottom:16px;
                               padding-bottom:10px;border-bottom:2px solid #0f3460">
                        <i class='bx bxs-graduation' style="color:#0f3460"></i> Academic Qualifications
                    </h5>
                    <p style="line-height:1.9;color:#444;font-size:15px;margin:0;font-style:italic">
                        {{ $lecturer->qualifications }}
                    </p>
                </div>
                @endif

                {{-- Research Interest --}}
                @if($lecturer->research_interest)
                <div style="background:#fff;border-radius:16px;padding:28px;
                            box-shadow:0 4px 24px rgba(0,0,0,.08);margin-bottom:24px">
                    <h5 style="font-weight:700;color:#1a1a2e;margin-bottom:16px;
                               padding-bottom:10px;border-bottom:2px solid #0f3460">
                        <i class='bx bx-search-alt' style="color:#0f3460"></i> Research Interest
                    </h5>
                    <p style="line-height:1.9;color:#444;font-size:15px;margin:0">
                        {{ $lecturer->research_interest }}
                    </p>
                </div>
                @endif

                {{-- Back to department --}}
                <div class="mt-2">
                    <a href="{{ route('department', $lecturer->department->slug ?? '') }}"
                       class="btn" style="background:#035F39;color:#fff;border:none;padding:10px 20px;border-radius:6px;font-weight:600">
                        <i class='bx bx-arrow-back me-1'></i>
                        Back to {{ $lecturer->department->department_name ?? 'Department' }}
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection


