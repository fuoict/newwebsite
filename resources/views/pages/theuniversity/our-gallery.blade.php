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
     <!-- Start Gallery Area -->
    <div class="gallery-area ptb-100">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                {{-- <div class="sub-title">
                            <i class='bx bxs-graduation'></i> <p>2025 Edition</p>
                        </div> --}}
                <h2 class="title-anim">Annual Staff Games</h2>
                <p> It's all fun and competition as staff across departments take part in the staff games, building camaraderie and team spirit outside the office.</p>
            </div>

            @php
                // Add more images in the array below as needed:
                // 'img/gallery/your-file.jpg'
                $gallerySlides = [
                    'img/gallery/sport1.jpeg',
                    'img/gallery/sport2.jpeg',
                    'img/gallery/sport3.jpeg',
                    'img/gallery/sport4.jpeg',
                    'img/gallery/sport5.jpeg',
                    'img/gallery/sport6.jpeg',
                    'img/gallery/sport7.jpeg',
                    'img/gallery/sport8.jpeg',
                    'img/gallery/sport9.jpeg',
                    'img/gallery/sport10.jpeg',
                    'img/gallery/sport11.jpeg',
                    'img/gallery/sport12.jpeg',
                    'img/gallery/sport13.jpeg',
                    'img/gallery/sport14.jpeg',
                    'img/gallery/sport15.jpeg',
                    'img/gallery/sport16.jpeg',
                    'img/gallery/sport17.jpeg',
                    'img/gallery/sport18.jpeg',
                    'img/gallery/sport19.jpeg',
                    'img/gallery/sport20.jpeg',
                    'img/gallery/sport21.jpeg',
                ];
            @endphp

            <div class="gallery-showcase" data-aos="fade-up" data-aos-delay="200">
                <div class="gallery-carousel-wrap">
                    <button type="button" class="gallery-nav gallery-prev" aria-label="Previous slide">
                        <i class='bx bx-chevron-left'></i>
                    </button>

                    <div class="gallery-carousel custom-gallery-carousel owl-carousel owl-theme">
                        @foreach ($gallerySlides as $index => $slide)
                            <div class="gallery-slide" data-aos="zoom-in" data-aos-delay="{{ 100 + $index * 50 }}">
                                <div class="gallery-slide-inner">
                                    <a href="{{ asset($slide) }}" class="gallery-lightbox"
                                        title="Gallery image {{ $index + 1 }}">
                                        <img src="{{ asset($slide) }}" alt="Gallery image">
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
    <!-- Start Gallery Area -->
    <div class="gallery-area ptb-100">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                {{-- <div class="sub-title">
                            <i class='bx bxs-graduation'></i> <p>2025 Edition</p>
                        </div> --}}
                <h2 class="title-anim">Courtesy Visit by CIPM</h2>
                <p> Representatives of the Chartered Institute of Personnel Management of Nigeria (CIPM) pay a courtesy
                    visit to Fountain University, fostering partnership and professional engagement.</p>
            </div>

            @php
                // Add more images in the array below as needed:
                // 'img/gallery/your-file.jpg'
                $gallerySlides = [
                    'img/gallery/cipm2.jpeg',
                    'img/gallery/cipm3.jpeg',
                    'img/gallery/cipm4.jpeg',
                    'img/gallery/cipm5.jpeg',
                    'img/gallery/cipm6.jpeg',
                    'img/gallery/cipm7.jpeg',
                    'img/gallery/cipm8.jpeg',
                    'img/gallery/cipm9.jpeg',
                    'img/gallery/cipm10.jpeg',
                    'img/gallery/cipm11.jpeg',
                ];
            @endphp

            <div class="gallery-showcase" data-aos="fade-up" data-aos-delay="200">
                <div class="gallery-carousel-wrap">
                    <button type="button" class="gallery-nav gallery-prev" aria-label="Previous slide">
                        <i class='bx bx-chevron-left'></i>
                    </button>

                    <div class="gallery-carousel custom-gallery-carousel owl-carousel owl-theme">
                        @foreach ($gallerySlides as $index => $slide)
                            <div class="gallery-slide" data-aos="zoom-in" data-aos-delay="{{ 100 + $index * 50 }}">
                                <div class="gallery-slide-inner">
                                    <a href="{{ asset($slide) }}" class="gallery-lightbox"
                                        title="Gallery image {{ $index + 1 }}">
                                        <img src="{{ asset($slide) }}" alt="Gallery image">
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
    <!-- Start Gallery Area -->
    <div class="gallery-area ptb-100">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                {{-- <div class="sub-title">
                            <i class='bx bxs-graduation'></i> <p>2025 Edition</p>
                        </div> --}}
                <h2 class="title-anim">Conferment of Fellowship in Public Administration</h2>
                <p> Distinguished contributions to Public Administration are honoured as Fountain University confers a
                    fellowship award, celebrating excellence and dedication to the discipline</p>
            </div>

            @php
                // Add more images in the array below as needed:
                // 'img/gallery/your-file.jpg'
                $gallerySlides = [
                    'img/gallery/pub1.jpeg',
                    'img/gallery/pub2.jpeg',
                    'img/gallery/pub3.jpeg',
                    'img/gallery/pub4.jpeg',
                    'img/gallery/pub5.jpeg',
                    'img/gallery/pub6.jpeg',
                    'img/gallery/pub7.jpeg',
                    'img/gallery/pub8.jpeg',
                    'img/gallery/pub9.jpeg',
                    'img/gallery/pub10.jpeg',
                    'img/gallery/pub11.jpeg',
                    'img/gallery/pub12.jpeg',
                    'img/gallery/pub13.jpeg',
                    'img/gallery/pub14.jpeg',
                    'img/gallery/pub15.jpeg',
                    'img/gallery/pub17.jpeg',
                    'img/gallery/pub18.jpeg',
                ];
            @endphp

            <div class="gallery-showcase" data-aos="fade-up" data-aos-delay="200">
                <div class="gallery-carousel-wrap">
                    <button type="button" class="gallery-nav gallery-prev" aria-label="Previous slide">
                        <i class='bx bx-chevron-left'></i>
                    </button>

                    <div class="gallery-carousel custom-gallery-carousel owl-carousel owl-theme">
                        @foreach ($gallerySlides as $index => $slide)
                            <div class="gallery-slide" data-aos="zoom-in" data-aos-delay="{{ 100 + $index * 50 }}">
                                <div class="gallery-slide-inner">
                                    <a href="{{ asset($slide) }}" class="gallery-lightbox"
                                        title="Gallery image {{ $index + 1 }}">
                                        <img src="{{ asset($slide) }}" alt="Gallery image">
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
    <!-- Start Gallery Area -->
    <div class="gallery-area ptb-100">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                {{-- <div class="sub-title">
                            <i class='bx bxs-graduation'></i> <p>2025 Edition</p>
                        </div> --}}
                <h2 class="title-anim">Celebrating Three Years of Visionary Leadership</h2>
                <p> Three years of purposeful leadership call for celebration, as Fountain University honours her
                    Vice-Chancellor's third anniversary in office with a ceremony marking her continued impact and vision
                    for the institution</p>
            </div>

            @php
                // Add more images in the array below as needed:
                // 'img/gallery/your-file.jpg'
                $gallerySlides = [
                    'img/gallery/vc1.jpeg',
                    'img/gallery/vc2.jpeg',
                    'img/gallery/vc3.jpeg',
                    'img/gallery/vc4.jpeg',
                    'img/gallery/vc5.jpeg',
                    'img/gallery/vc6.jpeg',
                    'img/gallery/vc7.jpeg',
                    'img/gallery/vc8.jpeg',
                    'img/gallery/vc9.jpeg',
                    'img/gallery/vc10.jpeg',
                    'img/gallery/vc11.jpeg',
                    'img/gallery/vc12.jpeg',
                    'img/gallery/vc13.jpeg',
                    'img/gallery/vc14.jpeg',
                    'img/gallery/vc15.jpeg',
                    'img/gallery/vc16.jpeg',
                    'img/gallery/vc17.jpeg',
                    'img/gallery/vc18.jpeg',
                    'img/gallery/vc19.jpeg',
                ];
            @endphp

            <div class="gallery-showcase" data-aos="fade-up" data-aos-delay="200">
                <div class="gallery-carousel-wrap">
                    <button type="button" class="gallery-nav gallery-prev" aria-label="Previous slide">
                        <i class='bx bx-chevron-left'></i>
                    </button>

                    <div class="gallery-carousel custom-gallery-carousel owl-carousel owl-theme">
                        @foreach ($gallerySlides as $index => $slide)
                            <div class="gallery-slide" data-aos="zoom-in" data-aos-delay="{{ 100 + $index * 50 }}">
                                <div class="gallery-slide-inner">
                                    <a href="{{ asset($slide) }}" class="gallery-lightbox"
                                        title="Gallery image {{ $index + 1 }}">
                                        <img src="{{ asset($slide) }}" alt="Gallery image">
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
    <!-- Start Gallery Area -->
    <div class="gallery-area ptb-100">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                {{-- <div class="sub-title">
                            <i class='bx bxs-graduation'></i> <p>2025 Edition</p>
                        </div> --}}
                <h2 class="title-anim">Military Delegation Visits Fountain University</h2>
                <p> Fountain University receives a delegation of military officers on a courtesy visit, fostering relations
                    and dialogue between the institution and the armed forces. This gallery captures the warm reception and
                    engaging discussions held during the visit.</p>
            </div>

            @php
                // Add more images in the array below as needed:
                // 'img/gallery/your-file.jpg'
                $gallerySlides = [
                    'img/gallery/force1.jpeg',
                    'img/gallery/force2.jpeg',
                    'img/gallery/force3.jpeg',
                    'img/gallery/force4.jpeg',
                    'img/gallery/force5.jpeg',
                    'img/gallery/force6.jpeg',
                    'img/gallery/force7.jpeg',
                ];
            @endphp

            <div class="gallery-showcase" data-aos="fade-up" data-aos-delay="200">
                <div class="gallery-carousel-wrap">
                    <button type="button" class="gallery-nav gallery-prev" aria-label="Previous slide">
                        <i class='bx bx-chevron-left'></i>
                    </button>

                    <div class="gallery-carousel custom-gallery-carousel owl-carousel owl-theme">
                        @foreach ($gallerySlides as $index => $slide)
                            <div class="gallery-slide" data-aos="zoom-in" data-aos-delay="{{ 100 + $index * 50 }}">
                                <div class="gallery-slide-inner">
                                    <a href="{{ asset($slide) }}" class="gallery-lightbox"
                                        title="Gallery image {{ $index + 1 }}">
                                        <img src="{{ asset($slide) }}" alt="Gallery image">
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
    <!-- Start Gallery Area -->
    <div class="gallery-area ptb-100">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                {{-- <div class="sub-title">
                            <i class='bx bxs-graduation'></i> <p>2025 Edition</p>
                        </div> --}}
                <h2 class="title-anim">Welcoming Our New Students: Matriculation 2026</h2>
                <p> A new academic journey begins as Fountain University holds its 2026 Matriculation Ceremony, welcoming
                    and officially admitting its newest students into the university family</p>
            </div>

            @php
                // Add more images in the array below as needed:
                // 'img/gallery/your-file.jpg'
                $gallerySlides = [
                    'img/gallery/mat1.jpeg',
                    'img/gallery/mat2.jpeg',
                    'img/gallery/mat3.jpeg',
                    'img/gallery/mat4.jpeg',
                    'img/gallery/mat5.jpeg',
                    'img/gallery/mat6.jpeg',
                    'img/gallery/mat7.jpeg',
                    'img/gallery/mat8.jpeg',
                    'img/gallery/mat9.jpeg',
                    'img/gallery/mat10.jpeg',
                    'img/gallery/mat11.jpeg',
                    'img/gallery/mat12.jpeg',
                    'img/gallery/mat13.jpeg',
                    'img/gallery/mat14.jpeg',
                    'img/gallery/mat15.jpeg',
                    'img/gallery/mat16.jpeg',
                    'img/gallery/mat17.jpeg',
                    'img/gallery/mat18.jpeg',
                    'img/gallery/mat19.jpeg',
                    'img/gallery/mat20.jpeg',
                ];
            @endphp

            <div class="gallery-showcase" data-aos="fade-up" data-aos-delay="200">
                <div class="gallery-carousel-wrap">
                    <button type="button" class="gallery-nav gallery-prev" aria-label="Previous slide">
                        <i class='bx bx-chevron-left'></i>
                    </button>

                    <div class="gallery-carousel custom-gallery-carousel owl-carousel owl-theme">
                        @foreach ($gallerySlides as $index => $slide)
                            <div class="gallery-slide" data-aos="zoom-in" data-aos-delay="{{ 100 + $index * 50 }}">
                                <div class="gallery-slide-inner">
                                    <a href="{{ asset($slide) }}" class="gallery-lightbox"
                                        title="Gallery image {{ $index + 1 }}">
                                        <img src="{{ asset($slide) }}" alt="Gallery image">
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
    <!-- Start Gallery Area -->
    <div class="gallery-area ptb-100">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                {{-- <div class="sub-title">
                            <i class='bx bxs-graduation'></i> <p>2025 Edition</p>
                        </div> --}}
                <h2 class="title-anim">2026 Convocation Ceremony</h2>
                <p> Witness the joy and pride of our graduands as Fountain University holds its 2026 Convocation Ceremony,
                    honouring years of hard work, dedication, and academic excellence.</p>
            </div>

            @php
                // Add more images in the array below as needed:
                // 'img/gallery/your-file.jpg'
                $gallerySlides = [
                    'img/gallery/convo1.jpeg',
                    'img/gallery/convo2.jpeg',
                    'img/gallery/convo3.jpeg',
                    'img/gallery/convo4.jpeg',
                    'img/gallery/convo5.jpeg',
                    'img/gallery/convo6.jpeg',
                    'img/gallery/convo7.jpeg',
                    'img/gallery/convo8.jpeg',
                    'img/gallery/convo9.jpeg',
                    'img/gallery/convo10.jpeg',
                    'img/gallery/convo11.jpeg',
                    'img/gallery/convo12.jpeg',
                    'img/gallery/convo13.jpeg',
                    'img/gallery/convo14.jpeg',
                    'img/gallery/convo15.jpeg',
                    'img/gallery/convo16.jpeg',
                    'img/gallery/convo17.jpeg',
                    'img/gallery/convo18.jpeg',
                    'img/gallery/convo19.jpeg',
                    'img/gallery/convo20.jpeg',
                    'img/gallery/convo21.jpeg',
                ];
            @endphp

            <div class="gallery-showcase" data-aos="fade-up" data-aos-delay="200">
                <div class="gallery-carousel-wrap">
                    <button type="button" class="gallery-nav gallery-prev" aria-label="Previous slide">
                        <i class='bx bx-chevron-left'></i>
                    </button>

                    <div class="gallery-carousel custom-gallery-carousel owl-carousel owl-theme">
                        @foreach ($gallerySlides as $index => $slide)
                            <div class="gallery-slide" data-aos="zoom-in" data-aos-delay="{{ 100 + $index * 50 }}">
                                <div class="gallery-slide-inner">
                                    <a href="{{ asset($slide) }}" class="gallery-lightbox"
                                        title="Gallery image {{ $index + 1 }}">
                                        <img src="{{ asset($slide) }}" alt="Gallery image">
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
    <!-- Start Gallery Area -->
    <div class="gallery-area ptb-100">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                {{-- <div class="sub-title">
                            <i class='bx bxs-graduation'></i> <p>2025 Edition</p>
                        </div> --}}
                <h2 class="title-anim">VC Presents Award to Cisco and RUDN Representatives</h2>
                <p> Our Vice-Chancellor honours representatives of Cisco and RUDN University with awards, celebrating a
                    partnership built on innovation and academic excellence. This gallery captures the memorable highlights
                    of the presentation ceremony.</p>
            </div>

            @php
                // Add more images in the array below as needed:
                // 'img/gallery/your-file.jpg'
                $gallerySlides = [
                    'img/gallery/cisco1.jpeg',
                    'img/gallery/cisco2.jpeg',
                    'img/gallery/cisco3.jpeg',
                    'img/gallery/cisco4.jpeg',
                    'img/gallery/cisco5.jpeg',
                    'img/gallery/cisco6.jpeg',
                    'img/gallery/cisco7.jpeg',
                    'img/gallery/cisco8.jpeg',
                    'img/gallery/cisco9.jpeg',
                    'img/gallery/cisco10.jpeg',
                    'img/gallery/cisco11.jpeg',
                ];
            @endphp

            <div class="gallery-showcase" data-aos="fade-up" data-aos-delay="200">
                <div class="gallery-carousel-wrap">
                    <button type="button" class="gallery-nav gallery-prev" aria-label="Previous slide">
                        <i class='bx bx-chevron-left'></i>
                    </button>

                    <div class="gallery-carousel custom-gallery-carousel owl-carousel owl-theme">
                        @foreach ($gallerySlides as $index => $slide)
                            <div class="gallery-slide" data-aos="zoom-in" data-aos-delay="{{ 100 + $index * 50 }}">
                                <div class="gallery-slide-inner">
                                    <a href="{{ asset($slide) }}" class="gallery-lightbox"
                                        title="Gallery image {{ $index + 1 }}">
                                        <img src="{{ asset($slide) }}" alt="Gallery image">
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
    <!-- Start Gallery Area -->
    <div class="gallery-area ptb-100">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                {{-- <div class="sub-title">
                            <i class='bx bxs-graduation'></i> <p>2025 Edition</p>
                        </div> --}}
                <h2 class="title-anim">Second Induction Ceremony of Nursing Students</h2>
                <p>Relive the proud and emotional moments from the second induction ceremony of our nursing students, as
                    they officially take the oath of the nursing profession before family, faculty, and friends.</p>
            </div>

            @php
                // Add more images in the array below as needed:
                // 'img/gallery/your-file.jpg'
                $gallerySlides = [
                    'img/gallery/induct1.jpeg',
                    'img/gallery/induct2.jpeg',
                    'img/gallery/induct3.jpeg',
                    'img/gallery/induct4.jpeg',
                    'img/gallery/induct5.jpeg',
                    'img/gallery/induct6.jpeg',
                    'img/gallery/induct7.jpeg',
                    'img/gallery/induct8.jpeg',
                    'img/gallery/induct9.jpeg',
                    'img/gallery/induct10.jpeg',
                    'img/gallery/induct12.jpeg',
                    'img/gallery/induct13.jpeg',
                    'img/gallery/induct14.jpeg',
                    'img/gallery/induct15.jpeg',
                ];
            @endphp

            <div class="gallery-showcase" data-aos="fade-up" data-aos-delay="200">
                <div class="gallery-carousel-wrap">
                    <button type="button" class="gallery-nav gallery-prev" aria-label="Previous slide">
                        <i class='bx bx-chevron-left'></i>
                    </button>

                    <div class="gallery-carousel custom-gallery-carousel owl-carousel owl-theme">
                        @foreach ($gallerySlides as $index => $slide)
                            <div class="gallery-slide" data-aos="zoom-in" data-aos-delay="{{ 100 + $index * 50 }}">
                                <div class="gallery-slide-inner">
                                    <a href="{{ asset($slide) }}" class="gallery-lightbox"
                                        title="Gallery image {{ $index + 1 }}">
                                        <img src="{{ asset($slide) }}" alt="Gallery image">
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
    <!-- Start Gallery Area -->
    <div class="gallery-area ptb-100">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                {{-- <div class="sub-title"> 
                            <i class='bx bxs-graduation'></i> <p>2025 Edition</p>
                        </div> --}}
                <h2 class="title-anim">Celebrating Two Years of Purposeful Leadership</h2>
                <p>We invite you to relive the highlights from the colourful ceremony marking two years of impactful
                    leadership by our Vice-Chancellor, as staff, students, and well-wishers gathered to celebrate her
                    achievements and vision for the University.</p>
            </div>

            @php
                // Add more images in the array below as needed:
                // 'img/gallery/your-file.jpg'
                $gallerySlides = [
                    'img/gallery/2_aniv.jpeg',
                    'img/gallery/24_aniv.jpeg',
                    'img/gallery/25_aniv.jpeg',
                    'img/gallery/26_aniv.jpeg',
                    'img/gallery/27_aniv.jpeg',
                    'img/gallery/28_aniv.jpg',
                    'img/gallery/21_aniv.jpeg',
                    'img/gallery/22_aniv.jpeg',
                    'img/gallery/23_aniv.jpeg',
                ];
            @endphp

            <div class="gallery-showcase" data-aos="fade-up" data-aos-delay="200">
                <div class="gallery-carousel-wrap">
                    <button type="button" class="gallery-nav gallery-prev" aria-label="Previous slide">
                        <i class='bx bx-chevron-left'></i>
                    </button>

                    <div class="gallery-carousel custom-gallery-carousel owl-carousel owl-theme">
                        @foreach ($gallerySlides as $index => $slide)
                            <div class="gallery-slide" data-aos="zoom-in" data-aos-delay="{{ 100 + $index * 50 }}">
                                <div class="gallery-slide-inner">
                                    <a href="{{ asset($slide) }}" class="gallery-lightbox"
                                        title="Gallery image {{ $index + 1 }}">
                                        <img src="{{ asset($slide) }}" alt="Gallery image">
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

    <!-- Start Gallery Area -->
    <div class="gallery-area ptb-100">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                {{-- <div class="sub-title">
                    <i class='bx bxs-graduation'></i>
                    <p>2025 Edition</p>
                </div> --}}
                <h2 class="title-anim">Explore Our Gallery</h2>
                <p>We invite you to explore the gallery as our Vice Chancellor interacts with the diverse stakeholders who
                    create the fabric of our campus community. You’ll find heartwarming moments from her familiarization
                    visits to the gracious Ayanlowo Family and the spirited Isale Osun Community.</p>
            </div>

            @php
                // Add more images in the array below as needed:
                // 'img/gallery/your-file.jpg'
                $gallerySlides = [
                    'img/gallery/1.jpg',
                    'img/gallery/2.jpg',
                    'img/gallery/3.jpg',
                    'img/gallery/4.jpg',
                    'img/gallery/5.jpg',
                ];
            @endphp

            <div class="gallery-showcase" data-aos="fade-up" data-aos-delay="200">
                <div class="gallery-carousel-wrap">
                    <button type="button" class="gallery-nav gallery-prev" aria-label="Previous slide">
                        <i class='bx bx-chevron-left'></i>
                    </button>

                    <div class="gallery-carousel custom-gallery-carousel owl-carousel owl-theme">
                        @foreach ($gallerySlides as $index => $slide)
                            <div class="gallery-slide" data-aos="zoom-in" data-aos-delay="{{ 100 + $index * 50 }}">
                                <div class="gallery-slide-inner">
                                    <a href="{{ asset($slide) }}" class="gallery-lightbox"
                                        title="Gallery image {{ $index + 1 }}">
                                        <img src="{{ asset($slide) }}" alt="Gallery image">
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


    <!-- Start Activities Area -->
    <div class="activities-area ptb-100">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                {{-- <div class="sub-title">
                    <i class='bx bxs-graduation'></i>
                    <p>Events</p>
                </div> --}}
                <h2 class="title-anim">Our Memorable Events</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="activities-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="image">
                            <img src="{{ asset('img/gallery/m1.jpg') }} " alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="activities-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="image">
                            <img src="{{ asset('img/gallery/m2.jpg') }} " alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="activities-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="image">
                            <img src="{{ asset('img/gallery/m3.jpg') }} " alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="activities-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="image">
                            <img src="{{ asset('img/gallery/m4.jpg') }}" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="activities-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="image">
                            <img src="{{ asset('img/gallery/m5.jpg') }} " alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="activities-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="image">
                            <img src="{{ asset('img/gallery/m6.jpg') }} " alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="activities-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="image">
                            <img src="{{ asset('img/gallery/m10.jpg') }} " alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="activities-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="image">
                            <img src="{{ asset('img/gallery/m8.jpg') }} " alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="activities-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="image">
                            <img src="{{ asset('img/gallery/m9.jpg') }} " alt="image">
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <!-- End Activities Area -->


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

    <!-- Start Success Area -->
    {{-- <div class="success-area ptb-100">
        <div class="container">
            <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                <div class="sub-title">
                    <i class='bx bxs-graduation'></i>
                    <p>Student, College and Alumni Success</p>
                </div>
                <h2 class="title-anim">Celebrating our Annual Convocations</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="success-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="image">
                            <img src="{{ asset('img/gallery/cn1.jpg') }}" alt="image">
                        </div>
                        <div class="content">
                            <ul>
                                <li class="play"><a class="popup-youtube"
                                        href="https://www.youtube.com/watch?v=uk8bcR021BU"><i class='bx bx-play'></i></a>
                                </li>
                                <li><a href="#">
                                        <h3>Read More </h3>
                                    </a></li>
                                <li class="link"><a href="#"><i class='bx bx-link-external'></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="success-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="image">
                            <img src="{{ asset('img/gallery/cn5.jpg') }}" alt="image">
                        </div>
                        <div class="content">
                            <ul>
                                <li class="play"><a class="popup-youtube"
                                        href="https://www.youtube.com/watch?v=ixYPj06Eijc"><i class='bx bx-play'></i></a>
                                </li>
                                <li><a href="#">
                                        <h3>Watch Full Video</h3>
                                    </a></li>
                                <li class="link"><a href="#"><i class='bx bx-link-external'></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="success-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="image">
                            <img src="{{ asset('img/gallery/cn3.jpg') }}" alt="image">
                        </div>
                        <div class="content">
                            <ul>
                                <li class="play"><a class="popup-youtube"
                                        href="http://youtube.com/watch?v=XvHnNhzSCcQ"><i class='bx bx-play'></i></a></li>
                                <li><a href="#">
                                        <h3>Follow us on YouTube</h3>
                                    </a></li>
                                <li class="link"><a href="#"><i class='bx bx-link-external'></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-btn text-center" data-aos="fade-zoom-in" data-aos-delay="100">
                <p>Inspiring Minds, Shaping Futures. <a href="{{ route('undergradute-programme') }}">Learn about our
                        Program <i class='bx bx-right-arrow-alt'></i></a></p>
            </div>
        </div>
    </div> --}}
    <!-- End Success Area -->
@endsection
