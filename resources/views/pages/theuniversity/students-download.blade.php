@extends('layouts.app')

@section('content')
 

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-14">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Student Downloads</h2>
                        <p data-aos="fade-up" data-aos-delay="200">Fountain University, Osogbo, Osun State, Nigeria.</p>
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
                                <h4>INTER-UNIVERSITY TRANSFER FORM</h4>
                                <p>To be completed in Quadruplicate</p>
                                <div class="number-list">
                                    <a href="{{ URL::to('public/resources/INTER-UNIVERSITY-TRANSFER-FORM.pdf') }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                </div>

                               <div class="program-points mt-4">
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="{{ URL::to('public/resources/Change-of-Course-form.pdf') }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>CHANGE OF DEGERE PROGRAMME FORM</h4>
                                        <p>NOTE: (A student seeking transfer should ensure that he /she meets the entry requirements for the Department by obtaining clearance from the receiving HOD, Completed forms should be submitted to the Directorate of Academic Affairs).</p>
                                        <a class="btn btn-success" href="{{ URL::to('public/resources/Change-of-Course-form.pdf') }}"> Click here to Download </a>
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