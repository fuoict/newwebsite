@extends('layouts.app')

@section('content')

        <!-- Start Clgun Slider Banner Area -->
        <div class="slider-banner-area">
            <div class="slider-courser owl-carousel owl-theme">
                <div class="slider-content slider-bg-1">
                    <div class="content">
                        <div class="text">
                            <div class="container">
                                <h1 data-aos="fade-up" data-aos-delay="100">Fountain University, Osogbo.</h1>
                            </div>
                            <hr>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p data-aos="fade-up" data-aos-delay="100">Transforming Communities Through Excellence</p>
                                </div>
                                <div class="col-lg-5">
                                    <div class="short-info">
                                        <h3 data-aos="fade-up" data-aos-delay="200"> Igniting Minds, Inspiring Change </h3>
                                        {{-- <a class="default-btn" href="application-form.html" data-aos="fade-zoom-in" data-aos-delay="100">Apply to USD</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-content slider-bg-2">
                    <div class="content">
                        <div class="text">
                            <div class="container">
                                <h1 data-aos="fade-up" data-aos-delay="100">Driven by Innovation</h1>
                            </div>
                            <hr>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p data-aos="fade-up" data-aos-delay="100">Rooted in Values.</p>
                                </div>
                                <div class="col-lg-5">
                                    <div class="short-info">
                                        <h3 data-aos="fade-up" data-aos-delay="200">Preparing graduates ready to solve tomorrow’s challenges.</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Clgun Slider Banner Area -->

        <!-- Start About Us Area 2 -->
        <div id="about" class="about-us-area-2 ptb-100">
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                    <h2>About Our University</h2>
                    <p>  </p>
                </div>
                <div class="about-content-courser owl-carousel owl-theme">
                    <div class="content-items" data-dot="<button>01</button>">
                        <div class="image ct-bg-1" data-aos="fade-zoom-in" data-aos-delay="100">
                        </div>
                        <div class="content" data-aos="fade-up" data-aos-delay="200">
                            <span>Welcome to</span>
                            <h2>Fountain University, Osogbo</h2>
                            <p>
                                Fountain University was licensed in 2007, following NASFAT’s vision for quality education initiated in 2000.
                                A Strategic Committee was formed to establish the institution’s foundation and infrastructure.
                                Rooted in values of knowledge, character, and service, it promotes academic and moral excellence.
                                The University continues to expand through innovation, research, and community engagement.
                            </p>

                            <a class="default-btn" href="schedule-tour.html">Read More</a>
                        </div>
                    </div>
                    <div class="content-items" data-dot="<button>02</button>">
                        <div class="image ct-bg-2" data-aos="fade-zoom-in" data-aos-delay="100">
                        </div>
                        <div class="content" data-aos="fade-up" data-aos-delay="200">
                            <span>Campus Information</span>
                            <h2>Where Knowledge Meets Innovation</h2>
                            <p> Following this achievement, a  Strategic implementation
                                Committee was set up to serve as “in loco Council” to actualize
                                the birth of the University. This Committee worked tirelessly
                                to put in place the necessary facilities for the University
                                to take off.
                            </p>
                            <a class="default-btn" href="schedule-tour.html">Read More</a>
                        </div>
                    </div>
                    <div class="content-items" data-dot="<button>03</button>">
                        <div class="image ct-bg-3" data-aos="fade-zoom-in" data-aos-delay="100">
                        </div>
                        <div class="content" data-aos="fade-up" data-aos-delay="200">
                            <span>Campus Information</span>
                            <h2>Where Knowledge Meets Innovation</h2>
                            <p>
                                The desire of the Nasrul-Lahi-Il-Fatih Society  (NASFAT) to establish a
                                University was borne out of its educational policy and plan enunciated
                                at its strategic Retreat held at Akodo, Lagos, in the year 2000.
                            </p>
                            <a class="default-btn" href="schedule-tour.html">Read More</a>
                        </div>
                    </div>
                    <div class="content-items" data-dot="<button>04</button>">
                        <div class="image ct-bg-2" data-aos="fade-zoom-in" data-aos-delay="100">
                        </div>
                        <div class="content" data-aos="fade-up" data-aos-delay="200">
                            <span>Campus Information</span>
                            <h2>Where Knowledge Meets Innovation</h2>
                            <p>From this humble beginning, the Society started a systematic
                                process which led to the hosting of an academic summit of 30
                                Distinguished Academic Personalities from where an 18-person
                                University Planning Committee emerged in January 2004.
                            </p>
                            <a class="default-btn" href="schedule-tour.html">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End About Us Area 2 -->

        <!-- Start Features Area 2 -->
        <div class="features-area-2">
            <div class="features-content-2 ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="sub-title">
                                <p>Mission and Vission</p>
                            </div>
                            <div class="content">
                                <h2></h2>
                                {{-- <h2>Our students create a vibrant and inclusive community</h2> --}}
                                <div class="item">
                                    <div class="item-content">
                                        
                                        {{-- {{ URL::to('/img/icon/features-icon-2.png') }} --}}
                                        <div class="icon">
                                            
                                            <img src="{{ asset('img/icon/features-icon-2.png') }}" alt="image">
                                        </div>
                                        <h3>Our Vision</h3>
                                        <p>
                                            To produce competent and resourceful graduates with high moral standards irrespective
                                            of race, tribe, religion, or political inclinations
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-content">
                                        <div class="icon">
                                            <img src="{{ asset('img/icon/features-icon-1.png') }}" alt="image">
                                        </div>
                                        <h3>Our Mission</h3>
                                        <p>
                                            To be a pace-setting institution in terms of learning, character-building and
                                            service to humanity.
                                        </p>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="item-content">
                                        <div class="icon">
                                            <img src="{{ asset('img/icon/features-icon-1.png') }}" alt="image">
                                        </div>
                                        <h3>Philosophy</h3>
                                        <p>
                                            Fountain University is committed to the total development of men and women
                                            in an enabling environment, through appropriate teaching, research
                                            and service to humanity, influenced by Islamic ethics and culture.
                                        </p>
                                    </div>
                                </div>


                                <a class="default-btn" href="admission.html">More on Academics</a>

                                <div class="arrow-icon">
                                    <img src="{{ asset('img/icon/shape-1.png') }}" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="academic-content">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 col-md-6 pt-25">
                                        <div class="academic-item" data-aos="fade-up" data-aos-delay="100">
                                            <div class="image">
                                                <img src="{{ asset('img/all-img/academic-programmes.jpg') }}" alt="image">
                                                <div class="number">
                                                    <h3>01</h3>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h4>Academic Programmes</h4>
                                                <p>Fountain University offers an array of academic courses tailored towards students’ satisfaction and employability.</p>
                                                <a class="btn" href="fitness-athletics.html">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="academic-item" data-aos="fade-up" data-aos-delay="200">
                                            <div class="image">
                                                <img src="{{ asset('img/all-img/global-ranking-impacts.jpg') }}" alt="image">
                                                <div class="number">
                                                    <h3>02</h3>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h4>Global Ranking & Impacts</h4>
                                                <p>Times Higher Education Ranks Fountain University Among Top Nigerian Universities in 2024.</p>
                                                <a class="btn" href="support-guidance.html">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6 pt-25">
                                        <div class="academic-item" data-aos="fade-up" data-aos-delay="300">
                                            <div class="image">
                                                <img src="{{ asset('img/all-img/admission-requirements.jpeg') }}" alt="image">
                                                <div class="number">
                                                    <h3>03</h3>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h4>Admission Requirements</h4>
                                                <p>
                                                    For all information that will aid your admission into Fountain University
                                                </p>
                                                <a class="btn" href="university-life.html">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="academic-item" data-aos="fade-up" data-aos-delay="400">
                                            <div class="image">
                                                <img src="{{ asset('img/all-img/student-life.jpg') }}" alt="image">
                                                <div class="number">
                                                    <h3>04</h3>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h4>Student Life</h4>
                                                <p>
                                                    For a glimpse into campus culture, extracurricular activities, hostel and more.
                                                </p>
                                                <a class="btn" href="the-campus-experience.html">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Features Area 2 -->

        <!-- Start Video Area  -->
        <div class="video-area">
            <div class="container">
                <div class="video-play-btn" data-aos="fade-zoom-in" data-aos-delay="100">
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=rAhNrZw4BaA">Play</a>
                    {{-- <a class="popup-youtube" href="{{ asset('video/best-graduating-student-2025.mp4') }}">Play</a> --}}
                </div>
            </div>
        </div>
        <!-- End Video Area  -->

        <!-- Start News Area 2 -->
        <div class="news-area ptb-100">
            <div class="container">
                <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <p>News & Updates</p>
                    </div>
                    <h2>Recent News and Events</h2>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="news-content">
                            <ul>
                                <li class="news-item" data-aos="fade-up" data-aos-delay="100">
                                    <div class="image">
                                        <img src="{{ asset('img/all-img/fountain-university-6th-inaugural-lecturer.jpg') }}" alt="image">
                                    </div>
                                    <div class="content">
                                        <div class="sub-title">
                                            <i class='bx bxs-graduation'></i>6th Inaugural Lecturer <p></p>
                                        </div>
                                        <h2><a href="blog-details.html"> Titled: Physical Chemistry: Winnowing Deep Truths from Profound Beautiful Nonsence </a></h2>
                                        <p class="mb-1">Delivered by: Prof. Moriam Dasola ADEOYE </p>
                                        <p class="m-0"> <i class='bx bxs-calendar'></i> Thursday, June 19, 2025 by 2PM </p>                                        
                                        
                                        <a class="btn" href="blog-details.html">Continue Reading...</a>
                                    </div>
                                </li>
                                <li class="news-item" data-aos="fade-up" data-aos-delay="200">
                                    <div class="image">
                                        <img src="{{ asset('img/all-img/news-image-3.png') }}" alt="iamge">
                                    </div>
                                    <div class="content">
                                        <div class="sub-title">
                                            <i class='bx bxs-graduation'></i> <p>Consortium of Islamic Faith</p>
                                        </div>
                                        <h2><a href="blog-details.html"> Maiden Conference of the Consortium of Islamic Faith Based Universities in Southwest and Kwara State</a></h2>
                                        {{-- <p>Maiden Conference of the Consortium of Islamic Faith Based Universities in Southwest and Kwara State - Tuesday, 1st July to Thursday, 3rd July 2025.</p> --}}
                                        <p class="m-0"> <i class='bx bxs-calendar'></i> Tuesday, 1st July to Thursday, 3rd July 2025</p>
                                        <a class="btn" href="blog-details.html">Continue Reading...</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="news-content-right" data-aos="fade-up" data-aos-delay="100">
                            <div class="content-box">
                                <img src="{{ asset('img/all-img/college-of-art-cultural-day.jpg') }}" alt="image">
                                <div class="content">
                                    <h3><a href="blog-details.html">College of Arts and Education Cultural Day </a></h3>
                                    <a class="btn" href="blog-details.html">Continue Reading...</a>
                                </div>
                            </div>
                        </div>
                        <div class="news-content-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="content-box">
                                <div class="image">
                                    <img src="{{ asset('img/all-img/pioneer-nursing-students.jpg') }}" alt="image">
                                </div>
                                <div class="content">
                                    <div class="sub-title">
                                        <i class='bx bxs-graduation'></i> <p>Nursing</p>
                                    </div>
                                    <h3><a href="blog-details.html">Fountain University’s Pioneer Nursing Students Excel in Professional Exam.</a></h3>
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="image">
                                    <img src="{{ asset('img/all-img/fuo-lecturer-appointment.jpg') }}" alt="image">
                                </div>
                                <div class="content">
                                    <div class="sub-title">
                                        <i class='bx bxs-graduation'></i> <p>Staff Development</p>
                                    </div>
                                    <h3><a href="blog-details.html">President Tinubu Appoints FUO’s Lecturer as National Population Commissioner.</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-btn text-center" data-aos="fade-zoom-in" data-aos-delay="100">
                    <p>Fountain University Leads, Others Follow. <a href="news-and-blog.html">More Campus News <i class='bx bx-right-arrow-alt'></i></a></p>
                </div>
            </div>
        </div>
        <!-- End News Area 2 -->


        <!-- Start Scholarship Area 2 -->
        <div class="faculty-area-2 ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="heading" data-aos="fade-up" data-aos-delay="100">
                            <h2>Scholarship Programs</h2>
                        </div>
                    </div>
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <p>"It is a well-known opportunity that Fountain University students of Arabic and Islamic studies can benefit from our scholarship program, designed to support learning with ease and focus."</p>
                        </div>
                    </div>
                    <div class="col-lg-2" data-aos="fade-up" data-aos-delay="300">
                        <div class="button">
                            <a class="default-btn" href="financial-aid.html">Find Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Scholarship Area 2 -->


        <!-- Start Campus Area 2 -->
        <div class="campus-area-2 ptb-100">
            <div class="container-fluaid">
                <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <p>The Campus Experience</p>
                    </div>
                    <h2>One University, Many Places</h2>
                </div>

                <div class="campus-slider owl-carousel owl-theme">
                    <div class="campus-card" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('img/all-img/fountain-library.jpg') }}" alt="image">
                        <div class="content">
                            <h2>E-Library</h2>
                            <a class="default-btn" href="#!">Virtual Tour</a>
                        </div>
                    </div>
                    <div class="campus-card" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('img/all-img/nursing-laboratory.jpg') }}" alt="image">
                        <div class="content">
                            <h2>Nursing Laboratory</h2>
                            <a class="default-btn" href="#!">Virtual Tour</a>
                        </div>
                    </div>
                    <div class="campus-card" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('img/all-img/biology-laboratory.jpg') }}" alt="image">
                        <div class="content">
                            <h2>Biology Laboratory</h2>
                            <a class="default-btn" href="#!">Virtual Tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Campus Area -->


        <!-- Start Activities Area -->
        {{-- <div class="activities-area ptb-100">
            <div class="container">
                <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <p>Sports and Athletics</p>
                    </div>
                    <h2>More Than Academics: Play, Lead, Compete</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="activities-card style-2" data-aos="fade-up" data-aos-delay="100">
                            <div class="image">
                                <img src="{{ asset('img/all-img/activities-image-1.png') }}" alt="image">
                            </div>
                            <div class="content">
                                <h2><a href="student-activities.html">Home of Champions</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum aviable but the majority have suffered alteration in some form.</p>
                                <a class="btn" href="student-activities.html">National Championships</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6 pt-25">
                        <div class="activities-card style-2" data-aos="fade-up" data-aos-delay="200">
                            <div class="image">
                                <img src="{{ asset('img/all-img/activities-image-2.png') }}" alt="image">
                            </div>
                            <div class="content">
                                <h2><a href="support-guidance.html">Olympic Excellence</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum aviable but the majority have suffered alteration in some form.</p>
                                <a class="btn" href="support-guidance.html">Medals</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="activities-card style-2" data-aos="fade-up" data-aos-delay="300">
                            <div class="image">
                                <img src="{{ asset('img/all-img/activities-image-3.png') }}" alt="image">
                            </div>
                            <div class="content">
                                <h2><a href="fitness-athletics.html">Multidimensional Impact</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum aviable but the majority have suffered alteration in some form.</p>
                                <a class="btn" href="fitness-athletics.html">Athlete Stories</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-btn text-center" data-aos="fade-zoom-in" data-aos-delay="100">
                    <p>Inspiring Minds, Shaping Futures. <a href="fitness-athletics.html">More About Athletics <i class='bx bx-right-arrow-alt'></i></a></p>
                </div>
            </div>
        </div> --}}
        <!-- End Activities Area -->

        <!-- Start Success Area 2 -->
        <div class="success-area success-area-2 ptb-100">
            <div class="container">
                <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <p>Student, Faculty and Alumni Success</p>
                    </div>
                    <h2>Celebrating the Legacy, Embracing the Future</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="success-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="image">
                                <img src="{{ asset('img/all-img/anniversary-lecture.png') }}" alt="image">
                            </div>
                            <div class="content">
                                <div class="play">
                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=0SNFfXZ6u7U"><i class='bx bx-play'></i></a>
                                </div>
                                <ul>
                                    <li><a href="university-life.html"><h3>14TH CONVOCATION LECTURE </h3></a></li>
                                    <li class="link"><a href="university-life.html"><i class='bx bx-link-external'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="success-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="image">
                                <img src="{{ asset('img/all-img/anniversary-documentation.png') }}" alt="image">
                            </div>
                            <div class="content">
                                <div class="play">
                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=rAhNrZw4BaA&t=53s"><i class='bx bx-play'></i></a>
                                </div>
                                <ul>
                                    <li><a href="university-life.html"><h3>FIRST ANNIVERSARY DOCUMENTARY</h3></a></li>
                                    <li class="link"><a href="university-life.html"><i class='bx bx-link-external'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="success-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="image">
                                <img src="{{ asset('img/all-img/best-graduation-student.png') }}" alt="image">
                            </div>
                            <div class="content">
                                <div class="play">
                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=7IPPS1OBjJ0"><i class='bx bx-play'></i></a>
                                </div>
                                <ul>
                                    <li><a href="university-life.html"><h3>BEST GRADUATING STUDENT</h3></a></li>
                                    <li class="link"><a href="university-life.html"><i class='bx bx-link-external'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-btn text-center" data-aos="fade-zoom-in" data-aos-delay="100">
                    <p>Inspiring Minds, Shaping Futures. <a href="undergraduate.html">Learn more <i class='bx bx-right-arrow-alt'></i></a></p>
                </div>
            </div>
        </div>
        <!-- End Success Area 2 -->






        

@endsection
