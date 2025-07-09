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
                                <h5>A Celebration of Service, Commitment & Institutional Growth</h5>
                                <p>Welcome to the Fountain University Staff Congregation Ceremony a special occasion dedicated to honouring the dedication, service, and professional contributions of our esteemed academic and non-academic staff.</p>
                                <p>At Fountain University, our strength lies not only in academic excellence but in the people who tirelessly uphold the institution's mission and vision. This congregation provides an opportunity to celebrate achievements, recognize milestones, and renew our collective commitment to the university’s ideals.</p>
                               <div class="program-info mt-4">
                                <h4>Purpose of the Staff Congregation</h4>
                                <p>
                                    <ul>
                                        <p>A platform for reviewing institutional progress</p>
                                        <p>An opportunity for professional dialogue and development</p>
                                        <p>A time to recognize outstanding service and promotions</p>
                                        <p>A forum to reaffirm the shared goals and values of Fountain University</p>
                                    </ul>
                                </p><br>
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