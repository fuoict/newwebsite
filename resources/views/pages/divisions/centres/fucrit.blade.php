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
                                    <li><a class="active" href="{{ route('student-affairs') }}">Student Affairs</a></li>
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
                                <p>The Academic Board of the Fountain University Osogbo has established the University Research Committee (“the Committee”) in accordance with section 48 of the Academic Board Charter.This Charter sets out the Committee’s objective, authority, composition and tenure, roles and responsibilities, reporting and administrative arrangements.</p>
                                
                                <p>Thank you.</p>

                                <div class="std-activities">
                                    <div class="graduate-events">
                                        <div class="content-items">
                                            <div class="content">
                                                <h2>Prof BOLARINWA, </h2>
                                                <p>Hakeem Sanya</p>
                                                <p>Director, Centre for Research, Innovation and Technology, Fountain University, Osogbo, Osun State, Nigeria.</p>
                                                <p></p>
                                               
                                            </div>
                                            <div class="image">
                                                <img src="{{ asset('img/all-img/units/prof-bolarinwa.jpg') }}" alt="image">
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
                                            <p>Our vision is to become a leading center of excellence in Research, Innovation and Technology, known for our expertise, reliability, and commitment to client satisfaction. We aspire to make a meaningful difference in the organizations and communities we serve.</p>
                                        </div>
                                        <div class="clubs-item">
                                            {{-- <span>4th Workshop “Advanced Materials”</span> --}}
                                            <h4>Composition</h4>
                                            <p>The Center for Consultancy Service is comprised of a multidisciplinary team of experienced consultants, researchers, and industry experts. Our diverse backgrounds and expertise enable us to offer a wide range of Research, Innovation and Technology across various sectors and industries.</p>
                                            
                                            <h4>Objective</h4>
                                            <p>Our primary objective is to leverage our expertise and resources to provide valuable Research, Innovation and Technology that meet the needs of our clients and contribute to their success. We aim to foster collaboration, innovation, and growth through our consultancy engagements.</p>
                                        </div>

                                        <div class="clubs-items">
                                            <h4>Our Services</h4>
                                            <div class="row">
                                                

                                                <div class="col-lg-4">
                                                    <h4>Project Management</h4>
                                                    <p>Our consultants are skilled in project planning, execution, and monitoring to ensure successful project completion within scope, budget, and timeline.</p>
                                                </div>

                                                <div class="col-lg-4">
                                                    <h4>Strategic Planning & Policy Development</h4>
                                                    <p>Our consultants work closely with clients to develop comprehensive strategic plans that align with their mission, vision, and goals.</p>
                                                </div>

                                                <div class="col-lg-4">
                                                    <h4>Training and Development</h4>
                                                    <p>We offer workshops, seminars, and training sessions on a variety of topics to help organizations enhance the skills and knowledge of their staff.</p>
                                                </div>

                                                <div class="col-lg-4">
                                                    <h4>Knowledge Transfer & Applied Research</h4>
                                                    <p>We offer customized problem-solving and technical expertise, backed by cutting-edge research from our renowned faculty.</p>
                                                </div>

                                                <div class="col-lg-4">
                                                    <h4>Community Engagement & Outreach</h4>
                                                    <p>Social impact consulting to assist communities in areas like education, healthcare, and social development.</p>
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
        </div>
        <!-- End Academics Section Area -->

@endsection