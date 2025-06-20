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


        <!-- Start Footer Area -->
        <div class="footer-area">
            <div class="footer-widget-info ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h4><img src="{{ asset('img/logo/fuo-logo.png') }}" alt=""></h4>
                                <p>
                                   Fountain University was granted an operational license as a
                                   Private University on May 17, 2007, by the Federal Government
                                   on the recommendations of the National Universities Commission.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h4>Site Map</h4>
                                <ul>
                                    <li><a href="academics.html"><i class='bx bx-chevron-right'></i> About Us </a></li>
                                    <li><a href="admission.html"><i class='bx bx-chevron-right'></i> E-Portal </a></li>
                                    <li><a href="the-campus-experience.html"><i class='bx bx-chevron-right'></i> The Senate</a></li>
                                    <li><a href="alumni.html"><i class='bx bx-chevron-right'></i> Administration </a></li>
                                    <li><a href="the-campus-experience.html"><i class='bx bx-chevron-right'></i> Resources</a></li>
                                    <li><a href="graduate.html"><i class='bx bx-chevron-right'></i> Congregations </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h4>Academics</h4>
                                <ul>
                                    <li><a href="university-life.html"><i class='bx bx-chevron-right'></i> Undergraduate</a></li>
                                    <li><a href="undergraduate.html"><i class='bx bx-chevron-right'></i> Postgraduate</a></li>
                                    <li><a href="academics.html"><i class='bx bx-chevron-right'></i> Sandwich</a></li>
                                    <li><a href="date-deadlines.html"><i class='bx bx-chevron-right'></i> Sub-Degree</a></li>
                                    <li><a href="how-to-apply.html"><i class='bx bx-chevron-right'></i> Apply For Admissions</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h4>Get in Touch</h4>
                                <ul>
                                    <li><a href="application-form.html"><i class='bx bx-home'></i> Oke-Osun, P.M.B. 4491, Osogbo, Osun State, Nigeria</a></li>
                                    <li><a href="date-deadlines.html"><i class='bx bx-phone'></i> +(234) 8160350557</a></li>
                                    <li><a href="student-activities.html"><i class='bx bx-phone'></i> +(234) 8037063960</a></li>
                                    <li><a href="support-guidance.html"><i class='bx bx-envelope'></i> enquiries@fuo.edu.ng</a></li>
                                    <li><a href="schedule-tour.html"><i class='bx bx-envelope'></i> officeoftheregistrar@fuo.edu.ng</a></li>
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
                                <p>Copyright© <a href="#">Fountain University, Osogbo</a></p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="cpr-right">
                                <ul>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Cookie Policy</a></li>
                                </ul>
                                <ul class="social-list">
                                    <li><a href="{{ 'https://facebook.com/fuoweb' }}" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href="{{ 'https://twitter.com/fuoweb' }}" target="_blank"><i class='bx bxl-instagram-alt'></i></a></li>
                                    <li><a href="{{ 'http://twitter.com/fuoweb' }}" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href="{{ 'https://www.linkedin.com/company/fountain-university-osogbo/' }}" target="_blank"><i class='bx bxl-linkedin-square'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="copy-logo">
                        <img src="{{ asset('img/logo/footer-Logo.png') }}" alt="image">
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- End Footer Area -->

        <div class="go-top active">
            <i class="bx bx-up-arrow-alt"></i>
        </div>

@endsection
