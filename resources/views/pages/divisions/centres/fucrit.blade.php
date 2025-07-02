@extends('layouts.app')

@section('content')
<!-- Start Section Banner Area -->
        <div class="section-banner bg-1">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Centre for Research, Innovation and Technology</h2>
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
                                    <li><img src="" alt=""></li>
                                    <li><a href="{{ route('consultancy') }}">Overview</a></li>
                                    <li><a href="{{ route('our-campus') }}">The Campus Experience</a></li>
                                    <li><a href="{{ route('sports') }}">Sport</a></li>
                                    <li><a href="{{ route('counselling') }}">Counseling and Guidance</a></li>
                                    <li><a class="active" href="{{ route('fucrit') }}">FUCRIT</a></li>
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
                                <h4>Welcome to the Centre for Research, Innovation and Technology</h4>
                                <p>The Academic Board of the Fountain University Osogbo has established the University Research Committee (“the Committee”) in accordance with section 48 of the Academic Board Charter. This Charter sets out the Committee’s objective, authority, composition and tenure, roles and responsibilities, reporting and administrative arrangements.</p>
                                

                                <div class="std-activities">
                                    <div class="graduate-events">
                                        <div class="content-items">
                                            <div class="content">
                                                <h2>ADEBIYI, </h2>
                                                <p>Rasheed Ademola, PhD, ARPA</p>
                                                <p>Director, Centre for Research, Innovation and Technology, Fountain University, Osogbo, Osun State, Nigeria.</p>
                                                <p></p>
                                               
                                            </div>
                                            <div class="image">
                                                <img src="{{ asset('img/all-img/units/adebiyi.png') }}" alt="image">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="featured-clubs">
                                        <ul>
                                            <li><h3>About the Centres</h3></li>
                                        </ul>

                                        <div class="clubs-item">
                                            <span>The Center for Consultancy Service is a vital unit within Fountain University Osogbo, established to offer Research, Innovation and Technology to both internal and external stakeholders. With a focus on excellence and innovation, we strive to address the diverse needs of our clients through tailored solutions and strategic insights.</span>
                                            <h4>Mission</h4>
                                            <p>Engaging in innovative, multidisciplinary, and transformative research to solve local, national, and global challenges.</p>
                                        </div>
                                        <div class="clubs-item">
                                            <h4>Vision</h4>
                                            <p>Uniting Science, Technology, and Innovation to bring FUO into the limelight for national and global reputation.</p>
                                        </div>
                                        <div class="clubs-item">
                                            {{-- <span>4th Workshop “Advanced Materials”</span> --}}                                            
                                            <h4>Objective</h4>
                                            <p>The objective of the Committee is to monitor, advise and provide assurance to the Academic Board on the quality of the research programs and activities of the University.</p>

                                            <h4>Members</h4>
                                            <p>
                                                <ul>
                                                    <li>act in the interests of the University as a whole;</li>
                                                    <li> contribute the time needed to study and understand the papers provided; and</li>
                                                    <li> apply good analytical skills, objectivity and good judgment.</li>
                                                </ul>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <h4>Committee</h4>
                                                <p>monitor the development of the University’s policies and plans in relation to research</p>
                                                <p>oversee research performance and advise on the coordination of the University’s research effort</p>
                                                <p>monitor the quality and integrity of the University’s research activities;</p>
                                                <p>make recommendations to the Academic Board on accrediting, reaccrediting or disestablishing postgraduate programs. Responsibilities of Members</p>
                                            </div>

                                            <div class="col-lg-4">
                                                <h4>AUTHORITY</h4>
                                                <p>monitor the development of the University’s policies and plans in relation to research; and</p>
                                                <p>oversee research performance and advise on the coordination of the University’s research effort;</p>
                                                <p>monitor the quality and integrity of the University’s research activities; and</p>
                                                <p>make recommendations to the Academic Board on accrediting, or reaccrediting</p>
                                                 
                                            </div>

                                            <div class="col-lg-4">
                                                <h4>Collaborating Institutions</h4>
                                                <p>The University currently have collaboration with the following Institutions/organizations:</p>
                                                <p>International Islamic University Malaysia</p>
                                                <p>Nigerian Airforce Institute</p>
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