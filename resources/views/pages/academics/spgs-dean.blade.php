@extends('layouts.app')

@section('content')

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-12">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">School of Postgraduate</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Banner Area -->

        <!-- End Blog Area -->
        <div class="blog-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('img/all-img/professor-abdullateef-usman.jpg') }}" alt="The-Registrar" data-aos="fade-zoom-in" data-aos-delay="100">
                        <h4 class="mt-3">Prof Abdullateef USMAN</h4>
                        <div class="title"> Dean, School of Postgraduate Studies </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="blog-details-desc">
                            {{-- <div class="article-image">
                                <img src="{{ asset('img/all-img/blog-details.png') }}" alt="image">
                            </div> --}}

                            <div class="article-content">
                                <h3>Welcome to the School of Postgraduate</h3>
                                <h4>As-salam alaykum warahmatullahi wabarakatuhu.</h4>
                                <p>Welcome to the School of Postgraduate Studies at Fountain University, Osogbo. Our School of Postgraduate Studies is equipped with state-of-the-art facilities and resources to support your academic endeavors. From well-equipped laboratories to extensive research libraries, we provide you with the tools and infrastructure needed to excel in your studies and research pursuits.
                                    In addition to our world-class facilities, our School boasts a renowned faculty of scholars and experts who are dedicated to nurturing and guiding your academic journey. With their wealth of knowledge and expertise, our faculty members are committed to providing you with a transformative learning experience that will prepare you for success in your chosen field.As you embark on this journey of advanced learning and scholarly exploration, I encourage you to take full advantage of the resources and opportunities available to you.Once again, welcome to the School of Postgraduate Studies at Fountain University, Osogbo.
                                </p>

                                <hr>

                                <h3>About the College</h3>
                                <h4>Our History</h4>
                                <p>
                                    The School of Postgraduate Studies commenced operation in the 2016/2017 academic session with students driven from two Departments. Department of Biological Science and Department of Chemical Science. Department of Business Administration and Department of Sociology joined in the 2022/2023 academic session. In the 2023/2024 academic session, the Department of Mathematical and Computer Science, Department of Political Science, Department of Public Administration, and Department of Mass Communication were approved to commence Postgraduate programmes.
                                </p>

                                <ul class="wp-block-gallery columns-2">
                                    <li class="blocks-gallery-item">
                                        <figure>
                                            <h4>Mission</h4>
                                            <p>The mission of the School of Postgraduate Studies at Fountain University is to provide a rigorous and intellectually stimulating environment for advanced learning and scholarly research. We are dedicated to cultivating a community of scholars who are committed to academic excellence, ethical conduct, and social responsibility. Through our comprehensive programs, we aim to equip our students with the knowledge, skills, and values needed to excel in their chosen fields and make meaningful contributions to their communities and the world at large.</p>
                                        </figure>
                                    </li>

                                    <li class="blocks-gallery-item">
                                        <figure>
                                            <h4>Vision</h4>
                                            <p>Our vision for the School of Postgraduate Studies is to be a leading center of excellence in advanced education and research, recognized nationally and internationally for its academic quality, innovation, and societal impact. We aspire to foster a vibrant academic community that celebrates diversity, promotes inclusivity, and nurtures the intellectual and personal growth of all its members. With a commitment to continuous improvement and innovation, we seek to empower our students to become lifelong learners, critical thinkers, and ethical leaders who are prepared to address the complex challenges of our rapidly changing world.</p>
                                        </figure>
                                    </li>

                                    <li class="blocks-gallery-item">
                                        <figure>
                                            <h4>Philosophy</h4>
                                            <p>The School of Postgraduate Studies at Fountain University is guided by a commitment to excellence, innovation, and ethical scholarship. We believe in the transformative power of education and the importance of fostering a culture of lifelong learning and intellectual inquiry. Grounded in the principles of Islamic values, our philosophy emphasizes the pursuit of knowledge for the betterment of society and the advancement of human welfare.
                                            </p>
                                        </figure>
                                    </li>
                                </ul>
                                
                                
                            </div>

                        </div>
                    </div>

                    {{-- our department --}}
                    <div class="col-lg-12">
                        <div class="ac-overview">
                            <div class="pera-title">
                                <h2>Our Departments</h2>
                            </div>
                            <div class="pera-dec">
                                
                               {{-- another aspect to use --}}

                               <div class="academics-area bg-color-1 ptb-100" >
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="100">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Department of Biological Sciences</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="academics-item active" data-aos="fade-up" data-aos-delay="200">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Department of Accounting and Finance</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Department of Public Administration</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Department of Chemical Sciences</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Department of Business Administration</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Department of Sociology and Criminology</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Department of Physics, Electronics & Earth Science</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Department of Economics</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Department of Political Science</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Department of Mathematical & Computer Sciences</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Department of Mass Communication</h4>
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
        </div>
        <!-- End Blog Area -->
@endsection