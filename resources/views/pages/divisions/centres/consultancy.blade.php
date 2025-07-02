@extends('layouts.app')

@section('content')
<!-- Start Section Banner Area -->
        <div class="section-banner bg-1">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Centre for Consultancy Services</h2>
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
                                    <li><a class="active" href="{{ route('consultancy') }}">Consultancy</a></li>
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
                                <h4>Welcome to the Centre for Consultancy Services</h4>
                                <p>As-salam alaykum warahmatullahi wabarakatuhu.</p>
                                <p>We are dedicated to providing high-quality consultancy services to our university, government, and external clients. Our team of experienced consultants is dedicated to providing top-notch advisory services to both internal university departments and external clients. As the Director of Consulting Services, I am proud to lead a team of talented professionals who are committed to delivering high-quality solutions tailored to meet our client’s specific needs.</p>
                                <p>What sets our consulting services apart is our unique combination of academic expertise, industry experience, and innovative thinking. Whether you are looking to optimize processes, develop strategic plans, or tackle complex challenges, our consultants are here to help.</p>
                                <p>Thank you.</p>

                                <div class="std-activities">
                                    <div class="graduate-events">
                                        <div class="content-items">
                                            <div class="content">
                                                <h2>Prof BOLARINWA, </h2>
                                                <p>Hakeem Sanya</p>
                                                <p>Director, Centre for Consultancy Services, Fountain University, Osogbo, Osun State, Nigeria.</p>
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
                                            <span>The Center for Consultancy Service is a vital unit within Fountain University Osogbo, established to offer consultancy services to both internal and external stakeholders. With a focus on excellence and innovation, we strive to address the diverse needs of our clients through tailored solutions and strategic insights.</span>
                                            <h4>Mission</h4>
                                            <p>Our mission is to be a trusted partner for our clients, delivering innovative and practical solutions that drive positive outcomes and sustainable impact. We are committed to excellence, integrity, and professionalism in all aspects of our work.</p>
                                        </div>
                                        <div class="clubs-item">
                                            <h4>Vision</h4>
                                            <p>Our vision is to become a leading center of excellence in consultancy services, known for our expertise, reliability, and commitment to client satisfaction. We aspire to make a meaningful difference in the organizations and communities we serve.</p>
                                        </div>
                                        <div class="clubs-item">
                                            {{-- <span>4th Workshop “Advanced Materials”</span> --}}
                                            <h4>Composition</h4>
                                            <p>The Center for Consultancy Service is comprised of a multidisciplinary team of experienced consultants, researchers, and industry experts. Our diverse backgrounds and expertise enable us to offer a wide range of consultancy services across various sectors and industries.</p>
                                            
                                            <h4>Objective</h4>
                                            <p>Our primary objective is to leverage our expertise and resources to provide valuable consultancy services that meet the needs of our clients and contribute to their success. We aim to foster collaboration, innovation, and growth through our consultancy engagements.</p>
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