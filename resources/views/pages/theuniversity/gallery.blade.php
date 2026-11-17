@extends('layouts.app')

@section('content')
    <!-- Start Section Banner Area -->
    <div class="section-banner bg-3">
        <div class="container">
            <div class="banner-spacing">
                <div class="section-info">
                    <h2 data-aos="fade-up" data-aos-delay="100">Our Gallery</h2>
                    <p data-aos="fade-up" data-aos-delay="200">Fountain University, Osogbo, Osun State, Nigeria.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Banner Area -->

    {{-- ═══ CMS ALBUMS — heading + subheading + image carousel, managed in Admin → Gallery ═══ --}}
    @foreach ($albums as $album)
    <!-- Start Gallery Area -->
    <div class="gallery-area ptb-100">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                <h2 class="title-anim">{{ $album->title }}</h2>
                @if($album->description)
                <p>{{ $album->description }}</p>
                @endif
            </div>

            <div class="gallery-showcase" data-aos="fade-up" data-aos-delay="200">
                <div class="gallery-carousel-wrap">
                    <button type="button" class="gallery-nav gallery-prev" aria-label="Previous slide">
                        <i class='bx bx-chevron-left'></i>
                    </button>

                    <div class="gallery-carousel custom-gallery-carousel owl-carousel owl-theme">
                        @foreach ($album->images as $index => $image)
                            <div class="gallery-slide" data-aos="zoom-in" data-aos-delay="{{ 100 + $index * 50 }}">
                                <div class="gallery-slide-inner">
                                    <a href="{{ asset($image->image_path) }}" class="gallery-lightbox"
                                        title="{{ $album->title }} — image {{ $index + 1 }}">
                                        <img src="{{ asset($image->image_path) }}" alt="{{ $album->title }} {{ $index + 1 }}">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <button type="button" class="gallery-nav gallery-next" aria-label="Next slide">
                        <i class='bx bx-chevron-right'></i>
                    </button>
                </div>
                <div class="gallery-carousel-dots"></div>
            </div>
        </div>
    </div>
    <!-- End Gallery Area -->
    @endforeach

    <!-- Start Campus Area -->
    <div class="campus-area ptb-100">
        <div class="container-fluaid">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                <div class="sub-title">
                    <i class='bx bxs-graduation'></i>
                    <p>Campus Experience</p>
                </div>
                <h2 class="title-anim">Fountain Leads, Others Follow</h2>
            </div>

            <div class="campus-slider owl-carousel owl-theme">
                <div class="campus-card" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('img/gallery/ct1.jpg') }}" alt="image">
                    <div class="content">
                        <h2 class="title-anim">Parent Forum</h2>
                        <a class="default-btn" href="#">Virtual Tour</a>
                    </div>
                </div>
                <div class="campus-card" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('img/gallery/ct2.jpg') }}" alt="image">
                    <div class="content">
                        <h2 class="title-anim">University Entrance</h2>
                        <a class="default-btn" href="#">Virtual Tour</a>
                    </div>
                </div>
                <div class="campus-card" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('img/gallery/ct3.jpg') }}" alt="image">
                    <div class="content">
                        <h2 class="title-anim">Main Campus</h2>
                        <a class="default-btn" href="#">Virtual Tour</a>
                    </div>
                </div>
                <div class="campus-card" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('img/gallery/ct4.jpg') }}" alt="image">
                    <div class="content">
                        <h2 class="title-anim">COLAW</h2>
                        <a class="default-btn" href="#">Virtual Tour</a>
                    </div>
                </div>
                <div class="campus-card" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('img/gallery/ct5.jpg') }}" alt="image">
                    <div class="content">
                        <h2 class="title-anim">SENATE BUILDING</h2>
                        <a class="default-btn" href="#">Virtual Tour</a>
                    </div>
                </div>
                <div class="campus-card" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('img/gallery/ct6.jpg') }}" alt="image">
                    <div class="content">
                        <h2 class="title-anim">Student Affairs</h2>
                        <a class="default-btn" href="#">Virtual Tour</a>
                    </div>
                </div>
                <div class="campus-card" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('img/gallery/ct7.jpg') }}" alt="image">
                    <div class="content">
                        <h2 class="title-anim">Car Park</h2>
                        <a class="default-btn" href="#">Virtual Tour</a>
                    </div>
                </div>
                <div class="campus-card" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('img/gallery/ct8.jpg') }}" alt="image">
                    <div class="content">
                        <h2 class="title-anim">Tennis Court</h2>
                        <a class="default-btn" href="#">Virtual Tour</a>
                    </div>
                </div>
                <div class="campus-card" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('img/gallery/ct9.jpg') }}" alt="image">
                    <div class="content">
                        <h2 class="title-anim">University Mosque</h2>
                        <a class="default-btn" href="#">Virtual Tour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Campus Area -->
@endsection
