
@extends('layouts.app')

@section('content')

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-1">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Student Affairs Unit</h2>
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
                                <i class='bx bxs-graduation'></i> <p>Welcome to</p>
                            </div>
                             <h2 class="title-anim">Student Affairs UNIT</h2>
                            <p class="title-anim">Welcome to the Fountain University Student Affairs Unit</p>
                            <h4>Introduction</h4>
                            <p>Welcome to the Student Affairs Unit of Fountain University! Our main objective is to support and enhance the educational journey of our students by providing resources, services, and programmes that contribute to their holistic development. We strive to foster a positive and enriching environment for every member of our diverse student body.</p>
                            <p>The Fountain University Student Affairs Unit is your ultimate support system throughout your academic journey. We are dedicated to empowering you to reach your full potential, explore your passions, and achieve success in all aspects of your student life.</p>
                            <p>Visit our office, participate in our programmes, and let us help you make the most of your time here at Fountain University. Welcome to our vibrant and engaging community!</p>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="content" data-aos="fade-right" data-aos-delay="100">
                                <img src="{{ asset('img/all-img/units/student-affairs.jpg') }}" alt="image" class="img-fluid" style="max-height: 370px; height:400px; border:solid 1px #ddd; border-radius: 10px;">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="notice-content" data-aos="fade-right" data-aos-delay="200">
                                    <i class='bx bxs-quote-left'></i>
                                    <h4 class="title-anim">Fountain University, Osogbo</h4>
                                    <p class="title-anim">Student Affairs Unit</p>
                                    <div class="author-info">
                                        <span>Dr R.K.</span>
                                        <h5>ALATISE</h5>
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


        <!-- Start Objectives Area -->
        <div class="academics-area ptb-100" style="background-color: #002147">
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                    
                    <h2 class="text-white">Our Services</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div  class=" academics-item" data-aos="fade-up" data-aos-delay="100">
                            <p class="text-white">Academic Advising and Support: The Student Affairs Unit offers academic advising and support services aimed at helping students make the most of their time at Fountain University. Our advisors work closely with students to help them choose the right courses, plan their course schedules, and ensure they stay on track towards graduation.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div  class=" academics-item" data-aos="fade-up" data-aos-delay="200">
                            <p class="text-white">Career Services: The Student Affairs Unit also provides career-related resources to aid students in their preparations for future employment or postgraduate studies. Our team organizes career fairs, workshops, and interview preparation sessions to help students confidently enter the job market or pursue further education.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div  class=" academics-item" data-aos="fade-up" data-aos-delay="300">
                            <p class="text-white">Clubs and Organizations: Fountain University boasts a vibrant and diverse array of student clubs and organizations that cater to various interests and passions. Through these clubs, students can immerse themselves in the campus community, develop leadership skills, and form lifelong friendships.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div  class=" academics-item" data-aos="fade-up" data-aos-delay="300">
                            <p class="text-white">International Student Services: Fountain University is an inclusive and international institution, and we are dedicated to making our international students feel at home. The Student Affairs Unit provides support services tailored to the unique needs of our international student community.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Objectives Area -->

       
        <!-- Start Campus Tour Area -->
        <div class="campus-tour">
            <div class="container-fluid p-0">
                
                <div class="row g-0 align-items-center">
                    
                    <div class="col-lg-6">
                        <div class="image cp-bg-2" data-aos="fade-zoom-in" data-aos-delay="100">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content" data-aos="fade-up" data-aos-delay="100">
                            <div class="sub-title">
                                <i class='bx bxs-graduation'></i> <p>Contact For Enquiries</p>
                            </div>
                            <h2>Student Affairs Unit</h2>
                            <ul>
                                <li style="list-style-type: none"><i class='bx bxs-phone'></i>  +234 (0) 803 720 3458</li>
                                <li style="list-style-type: none"><i class='bx bxs-envelope'></i>  Email: studentaffairs@fuo.edu.ng</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Campus Tour Area -->

@endsection