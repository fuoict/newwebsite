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
                                    <p data-aos="fade-up" data-aos-delay="100">Igniting Minds, Inspiring Change</p>
                                </div>
                                <div class="col-lg-5">
                                    <div class="short-info">
                                        <h3 data-aos="fade-up" data-aos-delay="200"> Transforming Communities Through Excellence</h3>
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
                                <p>Our Best Features</p>
                            </div>
                            <div class="content">
                                <h2>Our students create a vibrant and inclusive community</h2>
                                <div class="item">
                                    <div class="item-content">
                                        <div class="icon">
                                            <img src="{{ asset('img/icon/features-icon-2.png') }}" alt="image">
                                        </div>
                                        <h3>Education Services</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tem incid idunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-content">
                                        <div class="icon">
                                            <img src="{{ asset('img/icon/features-icon-1.png') }}" alt="image">
                                        </div>
                                        <h3>Efficient & Flexible</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tem incid idunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <a class="default-btn" href="admission.html">More on Admission</a>

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
                                                <img src="{{ asset('img/all-img/academic-image-1.png') }}" alt="image">
                                                <div class="number">
                                                    <h3>01</h3>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h4>International Hubs</h4>
                                                <a class="btn" href="fitness-athletics.html">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="academic-item" data-aos="fade-up" data-aos-delay="200">
                                            <div class="image">
                                                <img src="{{ asset('img/all-img/academic-image-2.png') }}" alt="image">
                                                <div class="number">
                                                    <h3>02</h3>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h4>Bachelor’s & Master’s</h4>
                                                <a class="btn" href="support-guidance.html">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6 pt-25">
                                        <div class="academic-item" data-aos="fade-up" data-aos-delay="300">
                                            <div class="image">
                                                <img src="{{ asset('img/all-img/academic-image-3.png') }}" alt="image">
                                                <div class="number">
                                                    <h3>03</h3>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h4>University Life</h4>
                                                <a class="btn" href="university-life.html">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="academic-item" data-aos="fade-up" data-aos-delay="400">
                                            <div class="image">
                                                <img src="{{ asset('img/all-img/academic-image-4.png') }}" alt="image">
                                                <div class="number">
                                                    <h3>04</h3>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h4>Education Services</h4>
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
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=B03IqRlOhG0">Play</a>
                </div>
            </div>
        </div>
        <!-- End Video Area  -->

        <!-- Start News Area 2 -->
        <div class="news-area ptb-100">
            <div class="container">
                <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <p>Campus News</p>
                    </div>
                    <h2>Stories About People, Research, and Innovation Across The Farm</h2>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="news-content">
                            <ul>
                                <li class="news-item" data-aos="fade-up" data-aos-delay="100">
                                    <div class="image">
                                        <img src="{{ asset('img/all-img/news-image-1.png') }}" alt="image">
                                    </div>
                                    <div class="content">
                                        <div class="sub-title">
                                            <i class='bx bxs-graduation'></i> <p>Science and technology</p>
                                        </div>
                                        <h2><a href="blog-details.html">Robot Provides Personalized Room Cleanup</a></h2>
                                        <p>Lorem ipsum dolor sit amet conse ctetur adipiscingl sed do eiusm tem incid idunt ut labore.</p>
                                        <a class="btn" href="blog-details.html">Continue Reading...</a>
                                    </div>
                                </li>
                                <li class="news-item" data-aos="fade-up" data-aos-delay="200">
                                    <div class="image">
                                        <img src="{{ asset('img/all-img/news-image-2.png') }}" alt="image">
                                    </div>
                                    <div class="content">
                                        <div class="sub-title">
                                            <i class='bx bxs-graduation'></i> <p>Law and Policy</p>
                                        </div>
                                        <h2><a href="blog-details.html">Learning Network Webinars for Music Teachers</a></h2>
                                        <p>Lorem ipsum dolor sit amet conse ctetur adipiscingl sed do eiusm tem incid idunt ut labore.</p>
                                        <a class="btn" href="blog-details.html">Continue Reading...</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="news-content-right" data-aos="fade-up" data-aos-delay="100">
                            <div class="content-box">
                                <img src="{{ asset('img/all-img/news-image-3.png') }}" alt="iamge">
                                <div class="content">
                                    <h3><a href="blog-details.html">Gender inequality in higher education persists</a></h3>
                                    <p>Lorem ipsum dolor sit amet conse sed do eiusm tem incid idunt ut labore.</p>
                                    <a class="btn" href="blog-details.html">Continue Reading...</a>
                                </div>
                            </div>
                        </div>
                        <div class="news-content-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="content-box">
                                <div class="image">
                                    <img src="{{ asset('img/all-img/news-image-4.png') }}" alt="image">
                                </div>
                                <div class="content">
                                    <div class="sub-title">
                                        <i class='bx bxs-graduation'></i> <p>Medicine</p>
                                    </div>
                                    <h3><a href="blog-details.html">Empowering Health, One Patient at a Time.</a></h3>
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="image">
                                    <img src="{{ asset('img/all-img/news-image-5.png') }}" alt="image">
                                </div>
                                <div class="content">
                                    <div class="sub-title">
                                        <i class='bx bxs-graduation'></i> <p>Student Life</p>
                                    </div>
                                    <h3><a href="blog-details.html">Every Student, Every Dream, Every Success.</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-btn text-center" data-aos="fade-zoom-in" data-aos-delay="100">
                    <p>Where Dreams Take Flight. <a href="news-and-blog.html">More Campus News <i class='bx bx-right-arrow-alt'></i></a></p>
                </div>
            </div>
        </div>
        <!-- End News Area 2 -->

        <!-- Start Faculty Area 2 -->
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
                            <p>It is a long established fact that a reader will be distracted by the readablecont of a page when looking at its layout. The point of using Lorem Ipsum is that it has more-or-less normal distribution of letters, as opposed to using.</p>
                        </div>
                    </div>
                    <div class="col-lg-2" data-aos="fade-up" data-aos-delay="300">
                        <div class="button">
                            <a class="default-btn" href="financial-aid.html">Financial Aid</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Faculty Area 2 -->

        <!-- Start Quick Search Area -->
        <div class="quick-search style-2 ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="course-search-box" data-aos="fade-right">
                            <h4>Search For Courses</h4>
                            <div class="search-key">
                                <input class="form-control" placeholder="Keywords" type="search" value="" id="searchKey1">
                                <input class="form-control" placeholder="Course ID" type="search" value="" id="searchKey">

                                <select class="form-select" aria-label="Default select example" id="searchKey2">
                                    <option selected>Department</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <select class="form-select" aria-label="Default select example" id="searchKey3">
                                    <option selected>Campus</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <select class="form-select" aria-label="Default select example" id="searchKey4">
                                    <option selected>Level</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <select class="form-select" aria-label="Default select example" id="searchKey5">
                                    <option selected>Instructor</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <select class="form-select" aria-label="Default select example" id="searchKey6">
                                    <option selected>Semester</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <select class="form-select" aria-label="Default select example" id="searchKey7">
                                    <option selected>Credit</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <a class="default-btn" href="#">Search Courses</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="quick-content" data-aos="fade-up" data-aos-delay="200">
                            <div class="sub-title">
                                <p>Campus News</p>
                            </div>
                            <h2>Start Your Career & Pursue Your Passion</h2>
                            <p>It is a long established fact that a reader will be distracted by the readablecont of a page when looking at its layout. The point of using Lorem Ipsum is that it ha more-or-less normal distribution of letters, as opposed to using.</p>

                            <div class="list">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="list-items">
                                            <ul>
                                                <li><i class='bx bx-right-arrow-circle'></i> Alumni & Donors</li>
                                                <li><i class='bx bx-right-arrow-circle'></i> Athletic Calendar</li>
                                                <li><i class='bx bx-right-arrow-circle'></i> All Canyon Events</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="list-items">
                                            <ul>
                                                <li><i class='bx bx-right-arrow-circle'></i> Partnership & Out Reach</li>
                                                <li><i class='bx bx-right-arrow-circle'></i> Academic Programs</li>
                                                <li><i class='bx bx-right-arrow-circle'></i> Tution And Fees</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="apply-banner">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <p>Apply for Admission</p>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6 text-end">
                                        <a class="default-btn" href="application-form.html">Apply Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="user-exprience">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="user-info">
                                            <div class="image">
                                                <img src="{{ asset('img/all-img/admin-image.png') }}" alt="image">
                                            </div>
                                            <div class="text">
                                                <h4>John Michael</h4>
                                                <p>Founder</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="exprience">
                                            <div class="icon">
                                                <img src="{{ asset('img/icon/trophy-star.png') }}" alt="image">
                                            </div>
                                            <div class="text">
                                                <h4>20</h4>
                                                <p>Years of <br> Experience</p>
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
        <!-- End Quick Search Area -->

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
                        <img src="{{ asset('img/all-img/campus-image-1.png') }}" alt="image">
                        <div class="content">
                            <h2>West Campus</h2>
                            <a class="default-btn" href="the-campus-experience.html">Virtual Tour</a>
                        </div>
                    </div>
                    <div class="campus-card" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('img/all-img/campus-image-2.png') }}" alt="image">
                        <div class="content">
                            <h2>Washington D.C</h2>
                            <a class="default-btn" href="the-campus-experience.html">Virtual Tour</a>
                        </div>
                    </div>
                    <div class="campus-card" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{ asset('img/all-img/campus-image-3.png') }}" alt="image">
                        <div class="content">
                            <h2>West Campus</h2>
                            <a class="default-btn" href="the-campus-experience.html">Virtual Tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Campus Area -->

        <!-- Start Activities Area -->
        <div class="activities-area ptb-100">
            <div class="container">
                <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <p>Sports and Athletics</p>
                    </div>
                    <h2>Beyond the Bleachers: Diverse Sports & Activities</h2>
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
        </div>
        <!-- End Activities Area -->

        <!-- Start Events Area 2 -->
        <div class="events-area-2 pt-100">
            <div class="container">
                <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <p>News and Events</p>
                    </div>
                    <h2>Recent Important Stories Updated</h2>
                </div>

                <!-- Top Event -->
                <div class="event lg" data-aos="fade-up" data-aos-delay="100">
                    <div class="content">
                        <div class="image">
                            <img src="{{ asset('img/all-img/events-image-1.png') }}" alt="image">
                        </div>
                        <div class="text">
                            <div class="tag">Featured News</div>
                            <h2><a href="blog-details.html">Celebrating Hispanic Heritage Month: Sioma Waisburd</a></h2>
                            <span>October 06, 2024</span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority havesu fered alteration in some form, by injected humour.</p>
                            <div class="link"><a href="blog-details.html"><i class='bx bx-link-external'></i></a></div>
                        </div>
                    </div>
                </div>

                <!-- Recent Post & Event -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="recent-post">
                            <h4 data-aos="fade-zoom-in" data-aos-delay="100">Recent News</h4>
                            <div class="event" data-aos="fade-up" data-aos-delay="100">
                                <div class="content">
                                    <div class="image">
                                        <img src="{{ asset('img/all-img/events-image-2.png') }}" alt="image">
                                    </div>
                                    <div class="text">
                                        <div class="tag">News</div>
                                        <h2><a href="blog-details.html">Navigating Academia: Tips and Stories from Canyon University</a></h2>
                                        <span>October 06, 2024</span>
                                        <p>There are many variations of passages of Lorem Ipsum avala fered alteration in some form.</p>
                                        <div class="link"><a href="v"><i class='bx bx-link-external'></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="event" data-aos="fade-up" data-aos-delay="200">
                                <div class="content">
                                    <div class="image">
                                        <img src="{{ asset('img/all-img/events-image-3.png') }}" alt="image">
                                    </div>
                                    <div class="text">
                                        <div class="tag">News</div>
                                        <h2><a href="blog-details.html">Beyond Graduation: Canyon University's Blog for Alumni</a></h2>
                                        <span>October 06, 2024</span>
                                        <p>There are many variations of passages of Lorem Ipsum avala fered alteration in some form.</p>
                                        <div class="link"><a href="blog-details.html"><i class='bx bx-link-external'></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="upcoming-event">
                            <h4 data-aos="fade-zoom-in" data-aos-delay="100">Upcoming Events</h4>

                            <div class="event-dates" data-aos="fade-up" data-aos-delay="100">
                                <div class="date">
                                    <ul>
                                        <li class="mnt">Oct</li>
                                        <li class="det">07</li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3><a href="blog-details.html">Fintech & Key Investment Conference</a></h3>
                                    <p>Seamlessly visualize quality ellectua capital without super.</p>
                                    <div class="location"><i class='bx bx-map'></i> Canyon Grand Hall</div>
                                    <div class="link"><a href="blog-details.html"><i class='bx bx-link-external'></i></a></div>
                                </div>
                            </div>
                            <div class="event-dates" data-aos="fade-up" data-aos-delay="200">
                                <div class="date">
                                    <ul>
                                        <li class="mnt">Oct</li>
                                        <li class="det">09</li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3><a href="#">How to Organise Your Studies for Success</a></h3>
                                    <p>Seamlessly visualize quality ellectua capital without super.</p>
                                    <div class="location"><i class='bx bx-map'></i> Canyon Grand Hall</div>
                                    <div class="link"><a href="#"><i class='bx bx-link-external'></i></a></div>
                                </div>
                            </div>
                            <div class="event-dates" data-aos="fade-up" data-aos-delay="300">
                                <div class="date">
                                    <ul>
                                        <li class="mnt">Oct</li>
                                        <li class="det">19</li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3><a href="blog-details.html">Planning And Facilitating Effective Meetings</a></h3>
                                    <p>Seamlessly visualize quality ellectua capital without super.</p>
                                    <div class="location"><i class='bx bx-map'></i> Canyon Grand Hall</div>
                                    <div class="link"><a href="blog-details.html"><i class='bx bx-link-external'></i></a></div>
                                </div>
                            </div>
                            <div class="event-dates" data-aos="fade-zoom-in" data-aos-delay="100">
                                <a class="btn" href="news-and-blog.html">View More Events <i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Events Area 2 -->

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
                                <img src="{{ asset('img/all-img/success-image-1.png') }}" alt="image">
                            </div>
                            <div class="content">
                                <div class="play">
                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=LlCwHnp3kL4"><i class='bx bx-play'></i></a>
                                </div>
                                <ul>
                                    <li><a href="university-life.html"><h3>Amelia Harper ’23 (BA) </h3></a></li>
                                    <li class="link"><a href="university-life.html"><i class='bx bx-link-external'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="success-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="image">
                                <img src="{{ asset('img/all-img/success-image-2.png') }}" alt="image">
                            </div>
                            <div class="content">
                                <div class="play">
                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=LlCwHnp3kL4"><i class='bx bx-play'></i></a>
                                </div>
                                <ul>
                                    <li><a href="university-life.html"><h3>Oliver Elijah ’23 (BS/BA)</h3></a></li>
                                    <li class="link"><a href="university-life.html"><i class='bx bx-link-external'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="success-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="image">
                                <img src="{{ asset('img/all-img/success-image-3.png') }}" alt="image">
                            </div>
                            <div class="content">
                                <div class="play">
                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=LlCwHnp3kL4"><i class='bx bx-play'></i></a>
                                </div>
                                <ul>
                                    <li><a href="university-life.html"><h3>Sofia Grace ’15 (BA)</h3></a></li>
                                    <li class="link"><a href="university-life.html"><i class='bx bx-link-external'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-btn text-center" data-aos="fade-zoom-in" data-aos-delay="100">
                    <p>Inspiring Minds, Shaping Futures. <a href="undergraduate.html">Learn about the USD Honors Program <i class='bx bx-right-arrow-alt'></i></a></p>
                </div>
            </div>
        </div>
        <!-- End Success Area 2 -->

        <!-- Start Subscribe Area 2 -->
        <div class="subscribe-area subscribe-area-2">
            <div class="container">
                <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <p>Subscribe to Our Newsletter</p>
                    </div>
                    <h2>Get the Latest Canyon News Delivered to You Inbox</h2>
                </div>

                <div class="subscribe-btn text-center" data-aos="fade-up" data-aos-delay="200">
                    <a class="default-btn" href="#">Subscribe Now</a>
                </div>
            </div>
        </div>
        <!-- End Subscribe Area 2 -->

        <!-- Start Footer Area -->
        <div class="footer-area">
            <div class="footer-widget-info ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h4>Campus Life</h4>
                                <ul>
                                    <li><a href="alumni.html"><i class='bx bx-chevron-right'></i> Accessibility</a></li>
                                    <li><a href="financial-aid.html"><i class='bx bx-chevron-right'></i> Financial Aid</a></li>
                                    <li><a href="online-education.html"><i class='bx bx-chevron-right'></i> Food Services</a></li>
                                    <li><a href="financial-aid.html"><i class='bx bx-chevron-right'></i> Housing</a></li>
                                    <li><a href="fitness-athletics.html"><i class='bx bx-chevron-right'></i> Information Technologies</a></li>
                                    <li><a href="student-activities.html"><i class='bx bx-chevron-right'></i> Student Life</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h4>Our Campus</h4>
                                <ul>
                                    <li><a href="academics.html"><i class='bx bx-chevron-right'></i> Academic</a></li>
                                    <li><a href="admission.html"><i class='bx bx-chevron-right'></i> Planning & Administration</a></li>
                                    <li><a href="the-campus-experience.html"><i class='bx bx-chevron-right'></i> Campus Safety</a></li>
                                    <li><a href="alumni.html"><i class='bx bx-chevron-right'></i> Office of the Chancellor</a></li>
                                    <li><a href="the-campus-experience.html"><i class='bx bx-chevron-right'></i> Facility Services</a></li>
                                    <li><a href="graduate.html"><i class='bx bx-chevron-right'></i> Human Resources</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h4>Academics</h4>
                                <ul>
                                    <li><a href="university-life.html"><i class='bx bx-chevron-right'></i> Canvas</a></li>
                                    <li><a href="undergraduate.html"><i class='bx bx-chevron-right'></i> Catalyst</a></li>
                                    <li><a href="academics.html"><i class='bx bx-chevron-right'></i> Library</a></li>
                                    <li><a href="date-deadlines.html"><i class='bx bx-chevron-right'></i> Time Schedule</a></li>
                                    <li><a href="how-to-apply.html"><i class='bx bx-chevron-right'></i> Apply For Admissions</a></li>
                                    <li><a href="tuition-fees.html"><i class='bx bx-chevron-right'></i> Pay My Tuition</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h4>Information For</h4>
                                <ul>
                                    <li><a href="application-form.html"><i class='bx bx-chevron-right'></i> How To Apply</a></li>
                                    <li><a href="date-deadlines.html"><i class='bx bx-chevron-right'></i> Dates & Deadlines</a></li>
                                    <li><a href="student-activities.html"><i class='bx bx-chevron-right'></i> Student Activities</a></li>
                                    <li><a href="support-guidance.html"><i class='bx bx-chevron-right'></i> Support & Guidance</a></li>
                                    <li><a href="schedule-tour.html"><i class='bx bx-chevron-right'></i> Schedule A Tour</a></li>
                                    <li><a href="faculty.html"><i class='bx bx-chevron-right'></i> Faculty & Staffs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right-area style-2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="cpr-left">
                                <p>Copyright© <a href="#">Canyon</a>, All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="cpr-right">
                                <ul>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Cookie Policy</a></li>
                                </ul>
                                <ul class="social-list">
                                    <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-instagram-alt'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-linkedin-square'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="copy-logo">
                        <img src="{{ asset('img/logo/footer-Logo.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Area -->

        <div class="go-top active">
            <i class="bx bx-up-arrow-alt"></i>
        </div>

@endsection
