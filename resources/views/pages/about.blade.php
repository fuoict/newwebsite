@extends('layouts.app')

@section('content')


        <!-- Start Clgun Searchbar Area -->
        <div class="clgun offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop">
            <div class="offcanvas-header">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo/logo.png" alt="image">
                </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="search-box">
                    <div class="searchwrapper"> 
                        <div class="searchbox"> 
                            <div class="row align-items-center"> 
                                <div class="col-md-9"><input type="text" class="form-control" placeholder="Fiend Your Course Here!"></div> 
                                <div class="col-lg-3"> 
                                    <a class="btn" href="#">Search</a> 
                                </div> 
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="offcanvas-contact-info">
                    <h4>Contact Info</h4>
                    <ul class="contact-info list-style">
                        <li>
                            <i class="bx bxs-time"></i>
                            <p>Mon - Fri: 9:00 - 18:00</p>
                        </li>
                        <li><i class="bx bxs-phone-call"></i> General Inquiries - <a href="tel:+8495160885">(849) 516-0885</a></li>
                        <li>
                            <i class="bx bxs-envelope"></i>
                            <a href="contact@Clgunme.edu">contact@Clgunme.edu</a>
                        </li>
                        <li>
                            <i class="bx bxs-map"></i>
                            <p>404 Camino Del Rio S, Suite 102San Diego, CA 92108</p>
                        </li>
                    </ul>
                    <ul class="social-profile list-style">
                        <li><a href="https://www.fb.com" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="https://www.instagram.com" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                        <li><a href="https://www.twitter.com" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="https://www.dribbble.com" target="_blank"><i class='bx bxl-dribbble'></i></a></li>
                        <li><a href="https://www.linkedin.com" target="_blank"><i class='bx bxl-linkedin' ></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- End Clgun Searchbar Area -->

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-1">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">About Us</h2>
                        <p data-aos="fade-up" data-aos-delay="200">Fountain University is more than just a place of learning; it's a place where dreams take flight, where ideas flourish, and where you'll find the support and resources you need to succeed.</p>
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
                                <i class='bx bxs-graduation'></i> <p>About Our University</p>
                            </div>
                             <h2 class="title-anim">OUR HISTORY</h2>
                            <p class="title-anim">The formation of Nasrul-Lahi-Il-Fatih Society (NASFAT) – the Proprietor of Fountain University- was originally focused on prayer meetings for the Muslim elites, with a view to creating necessary opportunity for them to interact and rub minds with Islamic scholars on the one hand; and to enhance their knowledge about the principles and practices of Islam, on the other hand.</p>
                            <p>Fountain University was granted an operational licence as a Private University on May 17, 2007 by the Federal Government on the recommendations of the National Universities Commission.Following this achievement, a Fountain Universities Strategic implementation Committee was set up to serve as “in loco Council” to actualise the birth of the University. This Committee worked tirelessly to put in place the necessary facilities for the University to take-off. The Committee was dissolved in September 2007 upon the inauguration of the Governing Council led by Professor N.O.Adedipe. The first Governing Council completed its first four Year in September 2011 after which it was reconstituted.</p>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="notice-content" data-aos="fade-right" data-aos-delay="200">
                                    <p class="title-anim">The desire of the Nasrul-Lahi-Il-Fatih Society  (NASFAT) to establish a University was borne out of its educational policy and plan enunciated at its strategic Retreat held at Akodo, Lagos, in the year 2000. From this humble beginning, the Society started a systematic process which led to the hosting of an academic summit of 30 Distinguished Academic Personalities from where an 18-person University Planning Committee emerged in January 2004.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="notice-content" data-aos="fade-right" data-aos-delay="200">
                                    <i class='bx bxs-quote-left'></i>
                                    <h4 class="title-anim">Our Philosophy</h4>
                                    <p class="title-anim">our philosophy is rooted in a commitment to excellence, intellectual curiosity, and the pursuit of knowledge. We strive to create a dynamic academic environment that fosters critical thinking, encourages creativity, and empowers individuals to make a positive impact on society.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Us Area -->

       
        <!-- Start Campus Tour Area -->
        <div class="campus-tour">
            <div class="container-fluid p-0">
                <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6">
                        <div class="content" data-aos="fade-up" data-aos-delay="100">
                            <div class="sub-title">
                                <i class='bx bxs-graduation'></i> <p>Core Values</p>
                            </div>
                            <h2>Our Principles</h2>
                            <p>we are guided by a set of principles that shape our identity, drive our actions, and define our commitment to excellence in education, research, and service. These principles form the foundation of our institution’s values and guide our interactions with students, faculty, staff, and the broader community.</p>
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
                            <h2>Special Campus Tour</h2>
                            <p>A tour around Fountain University Campus gives you a splendid experience that always want you to feature as a student. Our buildings are furnished with essential and basic facilities which enhance a conducive learning environment. Our campus is endowed with recreational facilities and natural spaces and essential medical facilities that encourage a healthy lifestyle outside the classroom. Fountain University Campus is a place our students are proud to call a home during their stay in the campus.</p>
                        </div>
                    </div>
                </div>
                <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6">
                        <div class="content" data-aos="fade-up" data-aos-delay="100">
                            <div class="sub-title">
                                <i class='bx bxs-graduation'></i> <p>Core Values</p>
                            </div>
                            <h2>Powerful Alumni</h2>
                            <p>Campus on a tour designed for prospective graduate and professional students. You will see how our university like, facilities, studenst and life in this university. Meet our graduate admissions representative to learn more about our graduate programs and decide what it the best for you.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image cp-bg-3" data-aos="fade-zoom-in" data-aos-delay="100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Campus Tour Area -->

        <!-- Start Subscribe Area -->
        <div class="subscribe-area ptb-100">
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <i class='bx bxs-graduation'></i> <p>Stay Connected with Fountain University</p>
                    </div>
                    <h2>We keep our community informed and inspired, check here for regular update.</h2>
                </div>

                <div class="subscribe-btn text-center" data-aos="fade-up" data-aos-delay="100">
                    <a class="default-btn" href="{{ route('contact') }}">Contact Us For More Information</a>
                </div>
            </div>
        </div> 
        <!-- End Subscribe Area -->


    </body>
</html>

@endsection