
@extends('layouts.app')

@section('content')

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-1">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Academic Planning Unit</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Banner Area -->

        <!-- Start About Us Area -->
        <div class="about-us-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="text-content" data-aos="fade-up" data-aos-delay="100">
                            <div class="sub-title">
                                {{-- <i class='bx bxs-graduation'></i> <p>PHILOSOPHY</p> --}}
                            </div>
                             <h2 class="title-anim">Academic Planning Unit</h2>
                            <p class="title-anim">Our philosophy is providing timely and accurate information, rendering services in tandem with university’s plans as well as coordinating compliance to guide management in decision-making.</p>
                            <p>In carrying out its responsibilities, the Academic Planning Unit:</p>
                            <ul>
                                <li>Produces a range of institutional statistics and undertakes data manipulation, analysis and interpretation to convert raw data into useful management information.</li>
                                <li>Compiles and analyze statistical data for use in general planning, strategic and analysis planning, budgeting, sundry management requirement and repository.</li>
                                <li>Prepares academic brief for internal and external purposes</li>
                                <li>Monitors resources allocation and utilization in line with the plans of the university</li>
                                <li>Develops resource allocation parameter</li>
                                <li>Determines manpower needs, control and staff development</li>
                                <li>Prepares annual plans of the university for submission to government</li>
                                <li>Provision of data-based information on various aspect of the university operations</li>
                                <li>Coordinates defrosting of positions and recruitment exercise</li>
                                <li>Coordinates teaching and research equipment grants</li>
                                <li>Computes excess workload for academics and technologists in the university</li>
                                <li>Coordinates accreditation programmes of the university</li>
                                <li>Determines allocation parameter of Direct Teaching Laboratory Cost (DTLC) to academic departments and units</li>
                                <li>Undertakes planning-related investigations and studies.</li>
                                <li>Provides close monitoring of the university programmes so as to maintain the quality of our programmes and effective service delivery.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="content" data-aos="fade-right" data-aos-delay="100">
                                <img src="{{ asset('img/all-img/about-image.png') }}" alt="image">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="notice-content" data-aos="fade-right" data-aos-delay="200">
                                    <i class='bx bxs-quote-left'></i>
                                    <h4 class="title-anim">Fountain University, Osogbo</h4>
                                    <p class="title-anim">Academic Planning Unit</p>
                                    <div class="author-info">
                                        <span>Prof. Goke Abidemi </span>
                                        <h5>Lalude</h5>
                                        <p>Director</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Us Area -->

        <!-- Start Academics Area -->
        <div class="academics-area bg-color-1 ptb-100" >
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <i class='bx bxs-graduation'></i> <p>Academics</p>
                    </div>
                    <h2>Where Excellence Meets Opportunity</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="academics-item" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                            <h4>Education Services</h4>
                            <p>There are many variations of passages Lorem Ipsum avaiable but the majority hav suffered alteration in some form</p>
                            <a href="the-campus-experience.html">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="academics-item active" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('img/icon/education-2.png') }}" alt="icon">
                            <h4>International Hubs</h4>
                            <p>There are many variations of passages Lorem Ipsum avaiable but the majority hav suffered alteration in some form</p>
                            <a href="the-campus-experience.html">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                            <img src="{{ asset('img/icon/education-3.png') }}" alt="icon">
                            <h4>Bachelor’s and Master’s</h4>
                            <p>There are many variations of passages Lorem Ipsum avaiable but the majority hav suffered alteration in some form</p>
                            <a href="the-campus-experience.html">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Academics Area -->
       
        <!-- Start Campus Tour Area -->
        {{-- <div class="campus-tour">
            <div class="container-fluid p-0">
                <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6">
                        <div class="content" data-aos="fade-up" data-aos-delay="100">
                            <div class="sub-title">
                                <i class='bx bxs-graduation'></i> <p>Core Values</p>
                            </div>
                            <h2>Special Campus Tour</h2>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tem incid idunt ut labore et magna aliqua.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tem incid idunt ut labore et dolore magna aliqua. Ut enim ad minim iam quis nostrud xerci tation ulla mco laboris nisi ut</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image cp-bg-1" data-aos="fade-zoom-in" data-aos-delay="100">
                        </div>
                    </div>
                </div>
                <div class="row g-0 align-items-center">
                    
                    <div class="col-lg-6">
                        <div class="image cp-bg-2" data-aos="fade-zoom-in" data-aos-delay="100">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content" data-aos="fade-up" data-aos-delay="100">
                            <div class="sub-title">
                                <i class='bx bxs-graduation'></i> <p>Core Values</p>
                            </div>
                            <h2>Graduation</h2>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tem incid idunt ut labore et magna aliqua.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tem incid idunt ut labore et dolore magna aliqua. Ut enim ad minim iam quis nostrud xerci tation ulla mco laboris nisi ut</p>
                        </div>
                    </div>
                </div>
                <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6">
                        <div class="content" data-aos="fade-up" data-aos-delay="100">
                            <div class="sub-title">
                                <i class='bx bxs-graduation'></i> <p>Core Values</p>
                            </div>
                            <h2>Special Campus Tour</h2>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tem incid idunt ut labore et magna aliqua.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tem incid idunt ut labore et dolore magna aliqua. Ut enim ad minim iam quis nostrud xerci tation ulla mco laboris nisi ut</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image cp-bg-3" data-aos="fade-zoom-in" data-aos-delay="100">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End Campus Tour Area -->

@endsection