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
        <!-- End Section Banner Area -->

        <!-- Start Academics Section Area -->
        <div class="academics-section pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="academics-left">
                            <div class="ac-contact text-center mb-4">
                                <div class="hod-card">
                                    <img src="{{ $Department->hod_image ? asset('storage/'.$Department->hod_image) : asset('img/logo/fuo-logo.png') }}" alt="{{ $Department->hod_name ?? 'Head of Department' }}" class="img-fluid rounded" style="max-width: 220px; height: auto; object-fit: cover; margin: 0 auto;">
                                    <h4 class="mt-3" style="color: #000; font-weight: 600;">{{ $Department->hod_name ?? 'Head of Department' }}</h4>
                                    @if($Department->hod_email)
                                        <p class="mb-1">{{ $Department->hod_email }}</p>
                                    @endif
                                    @if($Department->hod_phone)
                                        <p>{{ $Department->hod_phone }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="ac-category">
                                <ul>
                                    <li><a href="{{ route('department', $Department->slug) }}">Overview</a></li>
                                    <li><a href="{{ route('undergraduate-applications') }}">Undergraduate</a></li>
                                    <li><a href="{{ route('spgs-applications') }}">Graduate</a></li>
                                    <li><a href="{{ route('sandwich-applications') }}">Sandwich</a></li>
                                    <li><a class="active" href="{{ route('colleges') }}">College</a></li>
                                </ul>
                            </div>
                            <div class="ac-contact">
                                <span>Quick Links</span>
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="blog-details-desc">
                            <div class="article-content">
                                <h3>Welcome to the {{ $Department->department_name }}</h3>
                                <h4>{{ $Department->department_title }}</h4>
                                 
                                <p>
                                    {{ $Department->department_description }}
                                </p>
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


                        {{-- <div class="ac-overview">
                            <div class="faculty-model">
                                <div class="problem-sector">
                                    <div class="problem-list">
                                        <div class="title">
                                            <h3>Our Staffs</h3>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-md-6">
                                                <div class="faculty-card">
                                                    <div class="image">
                                                        <img src="{{ asset('img/all-img/faculty-1.png') }}" alt="image">
                                                        <div class="info">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut labore et dolore magna aliqua. Ut enim ad minim ven iam quis nostrud xerci tation ulla mco laboris nisi ut Lorem ipsum dolor sit amet consectetu</p>
                                                            <div class="contact-text">
                                                                <span>Contacts:</span>
                                                                <a href="#">+1-2534-4456-345</a>
                                                                <a href="#">admin@clgun.edu</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="content">
                                                        <h4>Emma Thompson</h4>
                                                        <p>Assistant Professor of Philosophy</p>
                                                    </div> --}}
                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-6 col-sm-6 col-md-6">
                                                <div class="faculty-card">
                                                    <div class="image">
                                                        <img src="{{ asset('img/all-img/faculty-2.png') }}" alt="image">
                                                        <div class="info">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut labore et dolore magna aliqua. Ut enim ad minim ven iam quis nostrud xerci tation ulla mco laboris nisi ut Lorem ipsum dolor sit amet consectetu</p>
                                                            <div class="contact-text">
                                                                <span>Contacts:</span>
                                                                <a href="#">+1-2534-4456-345</a>
                                                                <a href="#">admin@clgun.edu</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <h4>Benjamin Mitchell</h4>
                                                        <p>Assistant Professor of History</p>
                                                    </div>
                                                </div>
                                            </div> --}}
{{-- 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  --}}


                    </div>
                </div>
            </div>
        </div>
        <!-- End Academics Section Area -->
        {{-- Our Staff Section --}}
                        @if(isset($lecturers) && $lecturers->count())
                        <div class="our-staff-section mt-5" id="our-staff">
                            <h3 style="font-weight:700;margin-bottom:6px;color:#1a1a2e">
                                <i class='bx bxs-user-detail' style="color:#0f3460"></i> Our Staff
                            </h3>
                            <p style="color:#888;font-size:14px;margin-bottom:28px;
                                       border-bottom:2px solid #0f3460;padding-bottom:12px">
                                Meet the dedicated faculty of the {{ $Department->department_name }}
                            </p>
                            <div class="row g-4">
                                @foreach($lecturers as $lecturer)
                                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <a href="{{ route('lecturer.show', $lecturer->id) }}"
                                       style="text-decoration:none;display:block">
                                        <div style="background:#fff;border-radius:12px;overflow:hidden;
                                                    box-shadow:0 4px 20px rgba(0,0,0,.08);
                                                    border:1px solid #f0f0f0;height:100%;
                                                    transition:transform .2s,box-shadow .2s"
                                             onmouseover="this.style.transform='translateY(-5px)';this.style.boxShadow='0 8px 30px rgba(0,0,0,.14)'"
                                             onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 20px rgba(0,0,0,.08)'">

                                            {{-- Photo + Name --}}
                                            <div style="background:linear-gradient(135deg,#0f3460,#16213e);
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
                                                    <span style="font-size:10px;font-weight:700;color:#0f3460;
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
                                                    <span style="font-size:10px;font-weight:700;color:#0f3460;
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
                                                    <span style="font-size:12px;color:#0f3460;font-weight:600">
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
                        @endif
                        {{-- End Our Staff Section --}}

                    </div>
                </div>
            </div>
        </div>
        <!-- End Academics Section Area -->

@endsection
