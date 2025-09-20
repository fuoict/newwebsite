@extends('layouts.app')

@section('content')
 

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-14">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100"> Postgraduate Student Downloads</h2>
                        <p data-aos="fade-up" data-aos-delay="200">All students are required to visit the Student Downloads portal regularly for access to updated handbooks, academic forms, guidelines, and other official documents.</p>
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
                                    <li><a class="active" href="#">Student Downloads</a></li>
                                    <li><a href="{{ route('staff-downloads') }}">Staff Downloads</a></li>
                                    <li><a href="{{ route('general-download') }}">General Downloads</a></li>
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
                                {{-- <h4>INTER-UNIVERSITY TRANSFER FORM</h4>
                                <p>To be completed in Quadruplicate</p> --}}
                                 <div class="program-points mt-4">
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="{{ ('https://shorturl.at/N7VEa') }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>SPGS Intention to Graduate Form</h4>
                                        <a class="btn btn-success" href="{{ ('https://shorturl.at/N7VEa') }}"> Click here to Download </a>
                                    </div>
                               </div>
                              
                                {{-- <div class="number-list">
                                    <a href="{{ URL::to('public/resources/INTER-UNIVERSITY-TRANSFER-FORM.pdf') }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                </div> --}}
                                <div class="program-points mt-4">
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="{{ ('https://shorturl.at/jrtP5') }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>SPGS Registration of Title Form</h4>
                                        <a class="btn btn-success" href="{{ ('https://shorturl.at/jrtP5') }}"> Click here to Download </a>
                                    </div>
                               </div>
                               <div class="program-points mt-4">
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="{{ ('https://shorturl.at/soyrg') }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>SPGS Request for Approval to Conduct Oral Exams</h4>
                                        <a class="btn btn-success" href="{{ ('https://shorturl.at/soyrg') }}"> Click here to Download </a>
                                    </div>
                               </div>
                                <div class="program-points mt-4">
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="{{ ('https://tinyurl.com/bcnazdsp') }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>SPGS PhD Thesis Results Summary Sheet</h4>
                                        <a class="btn btn-success" href="{{ ('https://tinyurl.com/bcnazdsp') }}"> Click here to Download </a>
                                    </div>
                               </div>
                                <div class="program-points mt-4">
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="{{ ('https://shorturl.at/zVXUf') }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>SPGS Certificate of Correction Form</h4>
                                        <a class="btn btn-success" href="{{ ('https://shorturl.at/zVXUf') }}"> Click here to Download </a>
                                    </div>
                               </div>
                               <div class="program-points mt-4">
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="{{ ('https://tinyurl.com/3vcw9em6') }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>SPGS Research Proposal Form</h4>
                                        <a class="btn btn-success" href="{{ ('https://tinyurl.com/3vcw9em6') }}"> Click here to Download </a>
                                    </div>
                               </div>
                                 <div class="program-points mt-4">
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="{{ ('https://tinyurl.com/35r5njew') }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>SPGS Progress Report Form</h4>
                                        <a class="btn btn-success" href="{{ ('https://tinyurl.com/35r5njew') }}"> Click here to Download </a>
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