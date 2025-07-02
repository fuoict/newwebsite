@extends('layouts.app')

@section('content')
 
 <!-- pick from this place -->
         
        <!-- Start Section Banner Area -->
        <div class="section-banner bg-9">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Postgraduate Programmes</h2>
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
                                    <li><a href="academics.html">Overview</a></li>
                                    <li><a class="active" href="Undergraduate.html">Undergraduate</a></li>
                                    <li><a href="faculty.html">Faculty</a></li>
                                </ul>
                            </div>
                            <div class="ac-contact">
                                <span>Quick Links</span>
                                <a href="contact-us.html">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ac-overview">
                            <div class="pera-title">
                                <h2>Postgraduate Programmes</h2>
                            </div>
                            <div class="pera-dec">
                                <p>From innovative programs in business, and computer science to dynamic studies in the arts, humanities, and social sciences, every course is designed to equip students with practical skills, critical thinking abilities, and global awareness. Whether you are starting your undergraduate journey or advancing through graduate studies, Fountain University is where your future begins.</p>
                               {{-- another aspect to use --}}

                               <div class="academics-area bg-color-1 ptb-100" >
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="100">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Postgraduate Diploma in Microbiology</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="academics-item active" data-aos="fade-up" data-aos-delay="200">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Postgraduate Diploma in Biochemistry and Nutrition</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Postgraduate Diploma in Chemistry</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Postgraduate Diploma in Management</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Master of Science in Biochemistry and Nutrition</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Master of Science in Chemistry (M.Sc)</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Master of Science in Microbiology (M.Sc)</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Master of Business Administration (MBA)</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Master of Science in Sociology</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                               {{-- another aspect to use --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Academics Section Area -->
@endsection