
@extends('layouts.app')

@section('content')

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-1">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Public Relation Unit</h2>
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
                             <h2 class="title-anim">Public Relation UNIT</h2>
                            <p class="title-anim">Welcome to the Public Relations Unit of Fountain University, where we pride ourselves on being the voice of our esteemed institution. As the gateway between the university and the public, our team is committed to fostering transparency, building positive relationships, and showcasing the excellence that defines Fountain University.</p>
                            <p>Here at the Public Relations Unit, we understand the importance of clear communication in shaping perceptions and fostering trust. Through strategic messaging and engaging content, we strive to keep our stakeholders informed about the latest developments, achievements, and events at Fountain University.</p>
                            <p>Whether you’re a prospective student, alumni, member of the community, or industry partner, we invite you to explore our page and learn more about Fountain University’s commitment to academic excellence, innovation, and societal impact. Thank you for visiting, and we look forward to sharing our story with you.</p>

                            <div class="single-point-list">
                                <div class="number-list">
                                    <h4>Team Member</h4>
                                </div>
                                <h4>Ajibade Abdulbasit</h4>
                                <p>Public Relations Assistant /Graphic Designer</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="content" data-aos="fade-right" data-aos-delay="100">
                                <img src="{{ asset('img/all-img/units/pro-unit.jpg') }}" alt="image" class="img-fluid" style="max-height: 370px; border:solid 1px #ddd; border-radius: 10px;">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="notice-content" data-aos="fade-right" data-aos-delay="200">
                                    <i class='bx bxs-quote-left'></i>
                                    <h4 class="title-anim">Fountain University, Osogbo</h4>
                                    <p class="title-anim">Public Relation Unit</p>
                                    <div class="author-info">
                                        <span>Taoheed O.</span>
                                        <h5>ALIMI</h5>
                                        <p>Head</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Us Area -->

        <!-- Start Mission Area -->
        <div class="academics-area bg-color-1 ptb-100" >
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <i class='bx bxs-graduation'></i> <p>Academics</p>
                    </div>
                    <h2>Mission, Vision, and Philosophy</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="academics-item" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                            <h4>Mission</h4>
                            <p>The mission of our Public Relations Unit is to strategically and effectively present Fountain University and its values to the world.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="academics-item active" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('img/icon/education-2.png') }}" alt="icon">
                            <h4>Vision</h4>
                            <p>To be a leading force in effectively communicating the achievements and vision of Fountain University and promoting the institution's commitment to innovation and societal impact.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                            <img src="{{ asset('img/icon/education-3.png') }}" alt="icon">
                            <h4>Philosophy</h4>
                            <p>Our approach is guided by principles of transparency, integrity, excellence, and responsiveness to ensure effective communication and foster positive relationships with all stakeholders.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mission Area -->

       
       
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
                            <h2>Public Relation Unit</h2>
                            <ul>
                                <li style="list-style-type: none"><i class='bx bxs-phone'></i>  +234 (0) 8160350557</li>
                                <li style="list-style-type: none"><i class='bx bxs-envelope'></i>  pr.unit@fuo.edu.ng</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Campus Tour Area -->

@endsection