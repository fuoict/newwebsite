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


         <!-- Start Courses Area -->
            <div class="courses-area ptb-100">
                <div class="container">
                    <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                        <div class="sub-title">
                            <i class='bx bxs-graduation'></i> <p>Latest Event</p>
                        </div>
                         <h2 class="title-anim">Fountain University Gallery</h2>
                         {{-- <p>Welcome to our April Picture Gallery, showcasing the vibrant activities of Fountain University’s esteemed Vice Chancellor. This collection captures her dedicated efforts to strengthen the University’s ties with its surrounding communities and raise its visibility in the media.</p> --}}
                         <p>We invite you to explore the gallery as our Vice Chancellor interacts with the diverse stakeholders who create the fabric of our campus community. You’ll find heartwarming moments from her familiarization visits to the gracious Ayanlowo Family — our immediate host community — and the spirited Isale Osun Community, meeting the household heads and engaging in warm discussions.</p>
                         {{-- <p>The gallery further highlights her meetings with respected Osogbo Land figures, including the cherished traditional ruler, the Ataoja of Osogbo land and the esteemed Chief Imam of Osogbo, enriching our University’s relationship with these pillars of the community.</p> --}}
                         {{-- <p>Lastly, you’ll witness our Vice Chancellor championing the University vision, as she skillfully grants a media interview with Fresh FM, Osogbo, and delivers an inspiring presentation at the media parley organized by NASFAT.</p> --}}
                         {{-- <p>Join us as we celebrate these important moments that embody the essence of collaboration and unity, which are fundamental to the vibrant growth and evolution of Fountain University.</p> --}}
                    </div>
                    <div class="courses-courser owl-carousel owl-theme">
                        <div class="course-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="image">
                                <img src="{{ asset('img/gallery/1.jpg') }}" alt="image">
                            </div>
                        </div>
                        <div class="course-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="image">
                                <img src="{{ asset('img/gallery/2.jpg') }}" alt="image">
                            </div>
                        </div>
                        <div class="course-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="image">
                                <img src="{{ asset('img/gallery/3.jpg') }}" alt="image">
                            </div>
                        </div>
                        <div class="course-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="image">
                                <img src="{{ asset('img/gallery/4.jpg') }}" alt="image">
                            </div>
                        </div>
                        <div class="course-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="image">
                                <img src="{{ asset('img/gallery/5.jpg') }}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End Courses Area -->


        <!-- Start Activities Area -->
        <div class="activities-area ptb-100">
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <i class='bx bxs-graduation'></i> <p>Events</p>
                    </div>
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
                        <i class='bx bxs-graduation'></i> <p>Campus Experience</p>
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
                                <h2 class="title-anim">Cars Park</h2>
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
        <div class="success-area ptb-100">
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <i class='bx bxs-graduation'></i> <p>Student, College and Alumni Success</p>
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
                                    <li class="play"><a class="popup-youtube" href="https://www.youtube.com/watch?v=uk8bcR021BU"><i class='bx bx-play'></i></a></li>
                                    <li><a href="#"><h3>Read More </h3></a></li>
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
                                    <li class="play"><a class="popup-youtube" href="https://www.youtube.com/watch?v=ixYPj06Eijc"><i class='bx bx-play'></i></a></li>
                                    <li><a href="#"><h3>Watch Full Video</h3></a></li>
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
                                    <li class="play"><a class="popup-youtube" href="http://youtube.com/watch?v=XvHnNhzSCcQ"><i class='bx bx-play'></i></a></li>
                                    <li><a href="#"><h3>Follow us on YouTube</h3></a></li>
                                    <li class="link"><a href="#"><i class='bx bx-link-external'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-btn text-center" data-aos="fade-zoom-in" data-aos-delay="100">
                    <p>Inspiring Minds, Shaping Futures. <a href="{{ route('undergradute-programme') }}">Learn about our Program <i class='bx bx-right-arrow-alt'></i></a></p>
                </div>
            </div>
        </div>
        <!-- End Success Area -->
        
@endsection