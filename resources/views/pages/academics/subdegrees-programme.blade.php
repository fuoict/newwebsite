@extends('layouts.app')

@section('content')
 
 <!-- pick from this place -->
         
        <!-- Start Section Banner Area -->
        <div class="section-banner bg-9">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Sub-Degree Programmes</h2>
                        <p data-aos="fade-up" data-aos-delay="200">Fountain University is more than just a place of learning; it's a place where dreams take flight, where ideas flourish, and where you'll find the support and resources to shape your future.</p>
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
                                    <li><a href="{{ route('subdegree-programme') }}">Overview</a></li>
                                    <li><a class="active" href="#">Sub-Degree Programmes</a></li>
                                    <li><a href="{{ route('undergradute-programme') }}">Undergraduate</a></li>
                                </ul>
                            </div>
                            <div class="ac-contact">
                                <span>Quick Links</span>
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ac-overview">
                            {{-- <div class="pera-title">
                                <h2><span>40</span>Majors, Minors & <br> Graduate Programs</h2>
                            </div> --}}
                            <div class="pera-dec">
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut labore et dolore magna aliqua. Ut enim ad minim ven iam quis nostrud xerci tation ulla mco laboris nisi ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut labore</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut labore et dolorem gna aliqua. Ut enim ad minim ven iam quis nostrud xerci.</p>
                                --}}

                                {{-- start SUB-DEGREE/FOUNDATION--}}
                               <div class="problem-sector">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Sub-Degree/Foundation</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">Diploma in Arabic, Islamic & International Studies (DAIIS)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">Joint Universities preliminary Examination board(JUPEB)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               {{-- end Sub-Degree/Foundation--}}

                               {{-- start Professional Certificate Promgrammes --}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Professional Certificate Promgrammes</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">Fire Psycology & Human Safety</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">Crisis Management</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               {{-- end Professional Certificate Promgrammes --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Academics Section Area -->

@endsection