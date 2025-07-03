@extends('layouts.app')

@section('content')
 <!-- Start Section Banner Area -->
        <div class="section-banner bg-12">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">The Congregation</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Banner Area -->

        <!-- Start Academics Section Area -->
        <div class="academics-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="academics-left">
                            <div class="ac-category">
                                <ul>
                                    <li><a class="active" href="#">Overview</a></li>
                                    <li><a href="{{ 'https://eportal.fuo.edu.ng/applicant/SPGS' }}">Postgraduate Application</a></li>
                                    <li><a href="{{ 'https://eportal.fuo.edu.ng/applicant' }}">Undergraduate Application</a></li>
                                    <li><a href="{{ 'https://eportal.fuo.edu.ng/applicant/SPGS' }}">Sandwich Application</a></li>
                                </ul>
                            </div>
                            <div class="ac-contact">
                                <span>Quick Links</span>
                                <a href="{{ route('contact') }}">Contact Us</a>
                                <a class="darkbtn" href="{{ route('about') }}">About</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ac-overview">
                            <div class="pera-dec">
                                <h3>Fountain University Congregation</h3>
                                <p>The Congregation Ceremony at Clgun University marks a proud and memorable milestone celebrating the academic achievements of our students as they transition from scholars to alumni.</p>
                                <p>Held annually, this prestigious event brings together graduates, families, faculty, and dignitaries to honor the hard work, dedication, and excellence that define the Clgun experience. It’s more than a graduation—it's a celebration of potential, purpose, and the journey ahead.</p>
                               <div class="program-info mt-4">
                                <h4>Highlights of the Ceremony:</h4>
                                <p>
                                    <ul>
                                        <li>Award of Degrees, Diplomas, and Certificates</li>
                                        <li>Cultural Performances and Moments of Reflection</li>
                                        <li>Inspirational Speeches by Special Guests and Alumni</li>
                                        <li>Recognition of Outstanding Academic and Leadership Achievements</li>
                                    </ul>
                                </p>
                               </div>
                               <div class="apply-program">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <!-- Congregation Galley Area -->
                                            <div class="activities-area ptb-20">
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
                                            <!-- Congregation Galley Area -->
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Academics Section Area -->

@endsection