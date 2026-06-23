@extends('layouts.app')

@section('content')
         <!-- Start Section Banner Area -->
        <div class="section-banner bg-14">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Inaugural Lectures</h2>
                        <p data-aos="fade-up" data-aos-delay="200">Get Started with Access to our Inaugural Lectures</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Banner Area -->

        <!-- Start Academics Section Area -->
        <div class="academics-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="academics-left">
                            <div class="ac-category">
                                <ul>
                                    <li><a href="{{ route('fuo-chronicles') }}">Overview</a></li>
                                    <li><a class="active" href="#">Inaugural Lectures</a></li>
                                    <li><a href="{{ 'https://fountainjournals.com' }}">Fountain Journals</a></li>
                                    <li><a href="{{ route('annual-report') }}">Annual Report</a></li>
                                    <li><a href="{{ route('fuo-chronicles') }}">Fountain Chronicles</a></li>
                                </ul>
                            </div>
                            <div class="ac-contact">
                                <span>Quick Links</span>
                                <a href="{{ route('contact') }}">Contact Us</a>
                                <a class="darkbtn" href="{{ route('about') }}">About</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            @forelse($lectures as $lecture)
                            <div class="col-lg-6 col-sm-6 col-md-6 mb-4">
                                <div class="course-item">
                                    <div class="image">
                                        <img src="{{ asset($lecture->image_path) }}" style="height:250px" alt="image">
                                    </div>
                                    <div class="content">
                                        <span>{{ $lecture->lecture_date->format('M d, Y') }}</span>
                                        <h2><a href="#">{{ $lecture->title }}</a></h2>
                                        <ul style="border-top: 1px solid #e5e5e5; margin-top: 10px; padding-top: 10px;">
                                            <li>
                                                <div class="image-circle">
                                                    <img src="{{ asset('img/icon/icon-1.png') }}" alt="image"> 
                                                </div>
                                                <span>{{ $lecture->speaker_name }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="col-lg-12">
                                <p>No inaugural lectures available.</p>
                            </div>
                            @endforelse
                        </div>
                        <div class="blog-pagi">
                            <ul class="pagination">
                                @if ($lectures->onFirstPage())
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="bx bx-arrow-back"></i></span>
                                    </a>
                                </li>
                                @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $lectures->previousPageUrl() }}" aria-label="Previous">
                                        <span aria-hidden="true"><i class="bx bx-arrow-back"></i></span>
                                    </a>
                                </li>
                                @endif

                                @foreach ($lectures->getUrlRange(1, $lectures->lastPage()) as $page => $url)
                                    @if ($page == $lectures->currentPage())
                                    <li class="page-item"><a class="page-link active" href="#">{{ str_pad($page, 2, '0', STR_PAD_LEFT) }}</a></li>
                                    @else
                                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ str_pad($page, 2, '0', STR_PAD_LEFT) }}</a></li>
                                    @endif
                                @endforeach

                                @if ($lectures->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $lectures->nextPageUrl() }}" aria-label="Next">
                                        <span aria-hidden="true"><i class="bx bx-arrow-back bx-rotate-180"></i></span>
                                    </a>
                                </li>
                                @else
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="bx bx-arrow-back bx-rotate-180"></i></span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Academics Section Area -->

        <!-- Start Campus Area -->
            {{-- <div class="campus-area ptb-100">
                <div class="container-fluaid">
                    <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                        <div class="sub-title">
                            <i class='bx bxs-graduation'></i> <p>The Campus Experience</p>
                        </div>
                         <h2 class="title-anim">One University, Many Places</h2>
                    </div>

                    <div class="campus-slider owl-carousel owl-theme">
                        <div class="campus-card" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('img/all-img/campus-image-1.png') }}" alt="image">
                            <div class="content">
                                 <h2 class="title-anim">West Campus</h2>
                                <a class="default-btn" href="the-campus-experience.html">Virtual Tour</a>
                            </div>
                        </div>
                        <div class="campus-card" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('img/all-img/campus-image-2.png') }}" alt="image">
                            <div class="content">
                                 <h2 class="title-anim">Washington D.C</h2>
                                <a class="default-btn" href="the-campus-experience.html">Virtual Tour</a>
                            </div>
                        </div>
                        <div class="campus-card" data-aos="fade-up" data-aos-delay="300">
                            <img src="{{ asset('img/all-img/campus-image-3.png') }}" alt="image">
                            <div class="content">
                                 <h2 class="title-anim">West Campus</h2>
                                <a class="default-btn" href="the-campus-experience.html">Virtual Tour</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        <!-- End Campus Area -->

@endsection