@extends('layouts.app')

@section('content')
 
        <!-- Start Section Banner Area -->
        <div class="section-banner bg-3">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">The Bursar</h2>
                        <p data-aos="fade-up" data-aos-delay="200">Fountain University, Osogbo, Osun State, Nigeria.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Banner Area -->

         <!-- Start About Area -->
        <div class="about-alumni ptb-100">
            <div class="container-fluid p-0">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-7">
                        <div class="content" data-aos="fade-up" data-aos-delay="100">
                            
                            <h2>ALI-BALOGUN, Silifat Ayinke</h2>
                           
                            <h4>Biography</h4>
                            <p>Alhaja Silifat Ali-Balogun was born in Keffi, Nassarawa state to the family of Alhaji and Alhaja Abdulraheem Owodunni of Ogbomosho, Oyo state. She attended Nurudeen Primary School, Jos, and National College, Bariga, Lagos state. She then proceeded to University of Lagos from where she completed a bachelor’s degree in Accounting. She holds an MBA degree from Obafemi Awolowo University, Ile-Ife, Osun state. She is a fellow of the Institute of Chartered Accountants of Nigeria and as associate member of the Chartered Institute of Taxation in Nigeria.</p>
                            <p>She has worked extensively in accounting, audit, and taxation for over thirty-five years. She is the Managing Partner at S.A. Ali-Balogun & Co. (Chartered Accountants). She was the pioneer Vice President of the Society of Women Accountants of Nigeria, Osun State chapter. She is a member, Board of Trustees of Fathew Rahmon Islamic Ministry, Lagos, as well as the University of Lagos Muslim Alumni. She is a long-term member of The Criterion (Al-Furqan), An Association of Muslim Women in Business and Profession, and a member of the Dawah Committee of the Osun State chapter of the association. She is the pioneer and current Bursar of Fountain University, Oke-Osun, Osogbo.</p>
                            <p>She is married with children and grandchildren. She likes reading, travelling, and participating in Islamic activities.</p>
                            
                  
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="{{ asset('img/all-img/adenekan-sheriff1.jpeg') }}" alt="The-Bursar" data-aos="fade-zoom-in" data-aos-delay="100">
                        <div  >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area -->


        <!-- Start Global Alumni Events Area -->
        <div class="global-alumni-events ptb-100" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="global-content-items">
                    <div class="content">
                        <h2>QUALIFICATIONS</h2>
                        <p>
                            <ul>
                                <li>Master in Business Administration (MBA)</li>
                                <li>B.Sc. (Accounting)</li>
                                <li>Fellow Chartered Accountant (Institute of Chartered Accountants of Nigeria)</li>
                                <li>Associate, Chartered Institute of Taxation of Nigeria Chartered (Institute of Taxation of Nigeria)</li>
                                <li>Associate Chartered Accountant (Institute of Chartered Accountants of Nigeria)</li>
                            </ul>
                        </p>
                        <a class="default-btn" href="#">Download CV</a>
                    </div>
                    <div class="image">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Global Alumni Events Area -->

        <!-- Start Event Area -->
        <div class="event-area-3 ptb-100">
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <i class="bx bxs-graduation"></i> <p>Fountain University, Osogbo</p>
                    </div>
                    <h2>Office of the Bursar</h2>
                </div>

                <div class="slider-event owl-carousel owl-theme">
                    <div class="blog-single-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="image">
                            <img src="{{ asset('img/all-img/blog-1.png') }}" alt="image">
                        </div>
                        
                        <div class="content">
                            <div class="meta">
                                <ul>
                                    <li><a href="#">Owen Christ</a></li>
                                    <li>Mar, 2025</li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">A Global MBA for The Next Generation of Business Leaders</a></h3>
                            
                        </div>
                    </div>
                    <div class="blog-single-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="image">
                            <img src="{{ asset('img/all-img/blog-3.png') }}" alt="image">
                        </div>
                        
                        <div class="content">
                            <div class="meta">
                                <ul>
                                    <li><a href="#">Owen Christ</a></li>
                                    <li>Mar, 2025</li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">A Global MBA for The Next Generation of Business Leaders</a></h3>
                            
                        </div>
                    </div>
                    <div class="blog-single-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="image">
                            <img src="{{ asset('img/all-img/blog-4.png') }}" alt="image">
                        </div>
                        
                        <div class="content">
                            <div class="meta">
                                <ul>
                                    <li><a href="#">Owen Christ</a></li>
                                    <li>Mar, 2025</li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">A Global MBA for The Next Generation of Business Leaders</a></h3>
                            
                        </div>
                    </div>
                    <div class="blog-single-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="image">
                            <img src="{{ asset('img/all-img/blog-5.png') }}" alt="image">
                        </div>
                        
                        <div class="content">
                            <div class="meta">
                                <ul>
                                    <li><a href="#">Owen Christ</a></li>
                                    <li>Mar, 2025</li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">A Global MBA for The Next Generation of Business Leaders</a></h3>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Event Area -->


@endsection