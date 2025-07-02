@extends('layouts.app')

@section('content')
 

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-14">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Fountain Chronicles</h2>
                        <p data-aos="fade-up" data-aos-delay="200">Get Started with Access to Issues of Fountain Chronicles</p>
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
                                    <li><a href="{{ route('fuo-chronicles') }}">Overview</a></li>
                                    <li><a href="{{ route('inaugural-lectures') }}">Inaugural Lectures</a></li>
                                    <li><a href="{{ 'https://fountainjournals.com' }}">Fountain Journals</a></li>
                                    <li><a href="{{ route('annual-report') }}">Annual Report</a></li>
                                    <li><a class="active" href="#">Fountain Chronicles</a></li>
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
                                <p>Fountain Chronicles is a monthly bulletin that captures the latest news and events from Fountain University. Dive in and enjoy the latest issue!</p>
                               
                               <div class="program-points">
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="#"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>Fountain Chronicles Issue I</h4>
                                        <p>COMAS Distinguished Lecture Series: Senator Donates ICT Facility to Boost FUO Digital Infrastructure</p>
                                    </div>
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="#"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>Fountain Chronicles Issue II</h4>
                                    </div>
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="#"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>Fountain Chronicles Issue III</h4>
                                    </div>
                                    <div class="single-point-list">
                                    <div class="number-list">
                                        <a href="#"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                    </div>
                                    <h4>Fountain Chronicles Issue I</h4>
                                    <p>COMAS Distinguished Lecture Series: Senator Donates ICT Facility to Boost FUO Digital Infrastructure</p>
                                </div>
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="#"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>Fountain Chronicles Issue II</h4>
                                    </div>
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="#"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>Fountain Chronicles Issue IV</h4>
                                    </div>
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="#"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>Fountain Chronicles Special Edition</h4>
                                    </div>
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="#"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>Fountain Chronicles Special Edition II</h4>
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