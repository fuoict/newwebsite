
@extends('layouts.app')

@section('content')

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-1">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Sport Unit</h2>
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
                             <h2 class="title-anim">Sport UNIT</h2>
                            <p class="title-anim">Welcome to the Fountain University Sport Unit</p>
                            <p>Sports Units were established to prevent crime among the students and the participants at all levels and to provide mentors and heroes for youth to follow and aspire to. Sports provide avenues for socialization, sharing ideas, beliefs, values, and competition. It gives an opportunity to experience the good, the bad, and the ugly, build relationships, learn to accommodate, dialogue, teamwork, unity, use power, respect and be respected, accountable, escalate, de-escalate, and keep peace among the students, and the community at large.</p>
                            <p>However, it was observed that students’ participation in sports is a matter of convenience and the extent it can be accommodated by academic programs at the University. Within the last five years of its existence, Fountain University has been part of its effort to achieve its mission of providing total University Education. In which Sports is an integral part has successfully organized and participated in various sporting events and competitions.</p>
                           
                            <h4>Mission</h4>
                            <p>The mission is to produce competent and resourceful graduates with high moral standards. Our philosophy is the total development of men and women in an enabling environment through appropriate teaching, research, sports, and service to humanity irrespective of nationality, race, or religion influenced by Islamic ethics and culture.</p>
                        
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="content" data-aos="fade-right" data-aos-delay="100">
                                <img src="{{ asset('img/all-img/units/caoch.jpg') }}" alt="image" class="img-fluid" style="max-height: 370px; height:405px; border:solid 1px #ddd; border-radius: 10px;">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="notice-content" data-aos="fade-right" data-aos-delay="200">
                                    <i class='bx bxs-quote-left'></i>
                                    <h4 class="title-anim">Fountain University, Osogbo</h4>
                                    <p class="title-anim">Sport Unit</p>
                                    <div class="author-info">
                                        <span>Adedokun Ganiyu</span>
                                        <h5>ADEKUNLE</h5>
                                        <p>Registrar</p>
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
                    <h2>Staff and Faculty Resources</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        {{-- <div class="academics-item" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                            <h4>Mission</h4>
                            <p>The mission is to produce competent and resourceful graduates with high moral standards. Our philosophy is the total development of men and women in an enabling environment through appropriate teaching, research, sports, and service to humanity irrespective of nationality, race, or religion influenced by Islamic ethics and culture.</p>
                        </div> --}}
                        <div class="academics-item" data-aos="fade-up" data-aos-delay="100">
                            <p>
                                <ul>
                                    <li>Fountain Premier League: This is a football competition among the students.</li>
                                    <li>Friendly matches: A series of friendly matches is proposed to be played in and outside the campus among the neighboring Universities. The matches will involve both the Staff and the student teams in different games.</li>
                                    <li>Nigeria Private University Games (NPUGA): NPUGA games could not be able to hold in the last 2 years due to the pandemic, Hopefully to held this year.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="academics-item active" data-aos="fade-up" data-aos-delay="200">
                            <h4>Achievement</h4>
                            <p>
                                The sports unit has recorded numerous successes in sports participation within and outside the university campus between 2012 and date by not letting the factors above weigh the unit down. Some of these include;
                                <ul>
                                    <li>Successful hosted and organized various completions such as Prof., Oloyede’s inter-departmental soccer competition, Vice-Chancellors inter-collegiate sports competition, Olawoore staff competition, Accenture Intercollegiate sports competition, staff management sports competition, Fountain Premier League to  mention but few.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                            <p>
                                <ul>
                                    <li>The University football team had participated in various friendly football matches with neighboring Universities both public and private in which we had recorded a series of victories, this also extended to the table tennis, volleyball, and basketball teams.</li>
                                    <li>NASGA: This is a sporting competition usually organized by the Youth wing of the NASFAT in collaboration with Fountain University. The games will come up by September, at Fountain University.</li>
                                    <li>Osun State Tertiary Institution Games (OSTIGA): The university is ready for the forthcoming Speaker’s Cup. A football competition among the tertiary institutions in the State of Osun.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mission Area -->

        <!-- Start Event Area -->
        <div class="event-area-3 pb-100">
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <i class="bx bxs-graduation"></i> <p>University Alumni</p>
                    </div>
                    <h2>Alumni Events Stories</h2>
                </div>

                <div class="slider-event owl-carousel owl-theme">
                    <div class="blog-single-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="image">
                            <img src="{{ asset('img/all-img/units/sport-3.jpg') }}" alt="image">
                        </div>
                        
                        <div class="content">
                            <div class="meta">
                                <ul>
                                    <li><a href="#">Owen Christ</a></li>
                                    <li>Mar 17, 2024</li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">A Global MBA for The Next Generation of Business Leaders</a></h3>
                            <a class="butn" href="blog-details.html">Read More <i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                    <div class="blog-single-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="image">
                            <img src="{{ asset('img/all-img/units/sport-2.jpg') }}" alt="image">
                        </div>
                        
                        <div class="content">
                            <div class="meta">
                                <ul>
                                    <li><a href="#">Owen Christ</a></li>
                                    <li>Mar 17, 2024</li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">A Global MBA for The Next Generation of Business Leaders</a></h3>
                            <a class="butn" href="blog-details.html">Read More <i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                    <div class="blog-single-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="image">
                            <img src="{{ asset('img/all-img/units/sport-1.jpg') }}" alt="image">
                        </div>
                        
                        <div class="content">
                            <div class="meta">
                                <ul>
                                    <li><a href="#">Owen Christ</a></li>
                                    <li>Mar 17, 2024</li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">A Global MBA for The Next Generation of Business Leaders</a></h3>
                            <a class="butn" href="blog-details.html">Read More <i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                    <div class="blog-single-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="image">
                            <img src="{{ asset('img/all-img/units/global-sport-award.jpg') }}" alt="image">
                        </div>
                        
                        <div class="content">
                            <div class="meta">
                                <ul>
                                    <li><a href="#">Owen Christ</a></li>
                                    <li>Mar 17, 2024</li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">A Global MBA for The Next Generation of Business Leaders</a></h3>
                            <a class="butn" href="blog-details.html">Read More <i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Event Area -->

       
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
                            <h2>Sport Unit</h2>
                            <ul>
                                <li style="list-style-type: none"><i class='bx bxs-phone'></i>  +234 (0) 803 356 7317 </li>
                                <li style="list-style-type: none"><i class='bx bxs-envelope'></i>  Email: sport.unit@fuo.edu.ng</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Campus Tour Area -->

@endsection