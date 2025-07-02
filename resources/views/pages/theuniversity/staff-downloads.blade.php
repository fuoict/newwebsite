@extends('layouts.app')

@section('content')
 

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-14">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Staff Downloads</h2>
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
                                    <li><a href="{{ route('students-download') }}">Student Downloads</a></li>
                                    <li><a class="active" href="#">Staff Downloads</a></li>
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
                                <h4>Standing Orders of SENATE (Approved)</h4>
                                <p>This standing orders set out the procedures for the conduct of the Senate in discharging its obligation, powers and functions.</p>
                                <div class="number-list">
                                    <a href="{{ URL::to('public/resources/FUO-Senate-Standing-Order-July-2022.pdf') }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Academics Section Area -->

@endsection