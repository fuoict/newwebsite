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
                                                <h2 class="py-3">Dr. T. O. Ayinde</h2>
                                                <p>Director, Centre for Consultancy Services, Fountain University, Osogbo, Osun State, Nigeria.</p>
                                                <p></p>
                                               
                                            </div>
                                            {{-- <div class="image">
                                                <img src="{{ asset('img/all-img/units/prof-bolarinwa.jpg') }}" alt="image">
                                            </div> --}}
                                        </div>
                                    </div>

                                    <div class="featured-clubs">
                                        <ul>
                                            <li><h3>About the Centres</h3></li>
                                        </ul>

                                        <div class="clubs-item">
                                            <span>The Center for Consultancy Service is a vital unit within Fountain University Osogbo, established to offer consultancy services to both internal and external stakeholders. With a focus on excellence and innovation, we strive to address the diverse needs of our clients through tailored solutions and strategic insights.</span>
                                            {{-- <h4>Mission</h4>
                                            <p>Our mission is to be a trusted partner for our clients, delivering innovative and practical solutions that drive positive outcomes and sustainable impact. We are committed to excellence, integrity, and professionalism in all aspects of our work.</p> --}}
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-md-6 clubs-item">
                                                <h4>Mission</h4>
                                                <p>Our mission is to be a trusted partner for our clients, delivering innovative and practical solutions that drive positive outcomes and sustainable impact. We are committed to excellence, integrity, and professionalism in all aspects of our work.</p>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6 clubs-item">
                                                <h4>Vision</h4>
                                                <p>Our vision is to become a leading center of excellence in consultancy services, known for our expertise, reliability, and commitment to client satisfaction. We aspire to make a meaningful difference in the organizations and communities we serve.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- prefer to put something here --}}
                    <div class="py-5">
                    {{-- start of PGD--}}
                    <div class="problem-sector">
                        <div class="problem-list">
                            <div class="title">
                                <h3>Certificate Types and Duration</h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Modular Certificate (Beginners, Intermediate and Advanced Stages)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Less than one (1) Month</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Programme Certificate – One-off terminal certificate programme</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">1 – 4 months</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Products Training (Training on soap making, bakery and confectionery, etc).</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">3 – 9 months</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end of PGD --}}

                    {{-- start of Master Academics --}}
                    <div class="problem-sector py-4">
                        <div class="problem-list">
                            <div class="title">
                                <h3>Diploma Training and Duration</h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Diploma in Research and Investigative Writing</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">[6 – 12 months]</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Diploma in Econometrics and Data Analytics</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">[6 – 12 months]</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Diploma in Computer Appreciation</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">[6 – 12 months]</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Diploma in Desktop Publishing</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">[6 – 12 months]</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Diploma in Spreadsheet and Financial Analyses</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">[6 – 12 months]</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Diploma in Feasibility Report Writing and Entrepreneurial Training</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">[6 – 12 months]</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Diploma in Data Programming</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">[6 – 12 months]</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Diploma in Web-design</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">[6 – 12 months]</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end of Master Academics --}}
                    {{-- start of Master Professional --}}
                    <div class="problem-sector py-4">
                        <div class="problem-list">
                            <div class="title">
                                <h3>Consultancies and Institutional Trainings</h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Consultancies for MDAs, NGOs, CLOs, International Bodies and Agencies</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 py-3">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">As stipulated in the Contract Letter</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Institutional Trainings (Customized and Solicited Training Modules with 
                                                Banks, Government Parastatals and Foreign Institutions)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">As stipulated in the Contract Letter</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end of Master Professional --}}
                </div>
                </div>
            </div>
        </div>
        <!-- End Academics Section Area -->

@endsection