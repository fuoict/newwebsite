@extends('layouts.app')

@section('content')
 <!-- Start Section Banner Area -->
        <div class="section-banner bg-12">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Admission Requirements</h2>
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
                                <h3>What You Need To Join Us</h3>
                                <a class="btn btn-success" href="{{ 'https://eportal.fuo.edu.ng/applicant' }}">Apply Now</a>
                               <div class="program-info mt-4">
                                <h3>Things To Know First</h3>
                                <br>

                                <h4>All candidates applying to any of our programmes requre the following. </h4>
                                            <ul>
                                                <li>UTME Result printout</li>
                                                <li>O' level results</li>
                                                <li>Evidence of online registration with Fountain University</li>
                                                <li>1 passport size photograph</li>
                                            </ul>
                               </div>
                               <div class="apply-program">
                                    <div class="row align-items-center">
                                        <div class="col-lg-5 col-sm-5 col-md-6">
                                            <div class="content">
                                                <h3>Where to submit necessary documents?</h3>
                                                <p>Documents not submitted through the online method can be mailed to:</p>
                                                <p><i class='bx bxs-map'></i> Oke-Osun, P.M.B. 4491, Osogbo, Osun State,Nigeria</p>
                                                <p><i class='bx bxs-phone-call'></i> +(234) 8031145929</p>
                                                <p><i class='bx bxs-phone-call'></i> +(234) 8037063960</p>
                                                <p><i class='bx bxs-envelope'></i> admissions@fuo.edu.ng</p>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                               <div class="apply-program">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <div class="image">
                                                <a class="btn btn-success" href="{{ 'https://eportal.fuo.edu.ng/applicant' }}"> Apply Now</a>
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
        <!-- End Academics Section Area -->

@endsection