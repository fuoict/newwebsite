@extends('layouts.app')

@section('content')



        <!-- Start Section Banner Area -->
        <div class="section-banner bg-12">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Department of Arabic and Educations</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Banner Area -->

        <!-- Start Academics Section Area -->
        <div class="academics-section pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="academics-left">
                            <div class="ac-category">
                                <ul>
                                    <li><a href="{{ route('department', $Department->id) }}">Overview</a></li>
                                    <li><a href="{{ route('undergraduate-applications') }}">Undergraduate</a></li>
                                    <li><a href="{{ route('spgs-applications') }}">Graduate</a></li>
                                    <li><a href="{{ route('sandwich-applications') }}">Sandwich</a></li>
                                    <li><a class="active" href="{{ route('colleges') }}">College</a></li>
                                </ul>
                            </div>
                            <div class="ac-contact">
                                <span>Quick Links</span>
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="blog-details-desc">
                            <div class="article-content">
                                <h3>Welcome to the {{ $Department->department_name }}</h3>
                                <h4>{{ $Department->department_title }}</h4>
                                 
                                <p>
                                    {{ $Department->department_description }}
                                </p>

                                

                                <h3>About the Department</h3>
                                <p>{{ $Department->about_department }}</p>



                                <ul class="wp-block-gallery columns-2">
                                    <li class="blocks-gallery-item">
                                        <figure>
                                            <h4>Mission</h4>
                                            <p>{{ $Department->mission }}</p>
                                        </figure>
                                    </li>

                                    <li class="blocks-gallery-item">
                                        <figure>
                                            <h4>Vision</h4>
                                            <p>{{ $Department->vision }}</p>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div class="ac-overview">
                            <div class="faculty-model">
                                <div class="problem-sector">
                                    <div class="problem-list">
                                        <div class="title">
                                            <h3>Our Staffs</h3>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-md-6">
                                                <div class="faculty-card">
                                                    <div class="image">
                                                        <img src="{{ asset('img/all-img/faculty-1.png') }}" alt="image">
                                                        <div class="info">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut labore et dolore magna aliqua. Ut enim ad minim ven iam quis nostrud xerci tation ulla mco laboris nisi ut Lorem ipsum dolor sit amet consectetu</p>
                                                            <div class="contact-text">
                                                                <span>Contacts:</span>
                                                                <a href="#">+1-2534-4456-345</a>
                                                                <a href="#">admin@clgun.edu</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <h4>Emma Thompson</h4>
                                                        <p>Assistant Professor of Philosophy</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 col-md-6">
                                                <div class="faculty-card">
                                                    <div class="image">
                                                        <img src="{{ asset('img/all-img/faculty-2.png') }}" alt="image">
                                                        <div class="info">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut labore et dolore magna aliqua. Ut enim ad minim ven iam quis nostrud xerci tation ulla mco laboris nisi ut Lorem ipsum dolor sit amet consectetu</p>
                                                            <div class="contact-text">
                                                                <span>Contacts:</span>
                                                                <a href="#">+1-2534-4456-345</a>
                                                                <a href="#">admin@clgun.edu</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <h4>Benjamin Mitchell</h4>
                                                        <p>Assistant Professor of History</p>
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
        </div>
        <!-- End Academics Section Area -->

@endsection