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
                        <p data-aos="fade-up" data-aos-delay="200">Clgun University is more than just a place of learning; it's a place where dreams take flight, where ideas flourish, and where you'll find the support and...</p>
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
                             <h2 class="title-anim">Where Knowledge Meets Innovation</h2>
                            <p class="title-anim">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tem incid idunt ut labore et dolore magna aliqua. Ut enim ad minim iam quis nostrud xerci tation ulla mco laboris nisi ut</p>
                            <a class="default-btn" href="schedule-tour.html">Schedule A Tour</a>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="row justify-content-end">
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="content" data-aos="fade-right" data-aos-delay="100">
                                <img src="assets/img/all-img/about-image.png" alt="image">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="notice-content" data-aos="fade-right" data-aos-delay="200">
                                    <i class='bx bxs-quote-left'></i>
                                    <h4 class="title-anim">Knowledge Beyond Boundaries</h4>
                                    <p class="title-anim">Lorem ipsum dolor sit ametco nsectetur adipcing elit sed doe iusm tem incid idunt ut labore et dolore magna aliqua.</p>
                                    <div class="author-info">
                                        <span>John Michael</span>
                                        <h5>John Michael</h5>
                                        <p>Founder</p>
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
                            <img src="assets/img/icon/education-1.png" alt="icon">
                            <h4>Education Services</h4>
                            <p>There are many variations of passages Lorem Ipsum avaiable but the majority hav suffered alteration in some form</p>
                            <a href="the-campus-experience.html">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="academics-item active" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/img/icon/education-2.png" alt="icon">
                            <h4>International Hubs</h4>
                            <p>There are many variations of passages Lorem Ipsum avaiable but the majority hav suffered alteration in some form</p>
                            <a href="the-campus-experience.html">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                            <img src="assets/img/icon/education-3.png" alt="icon">
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
        <div class="campus-tour">
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
        </div>
        <!-- End Campus Tour Area -->

        <!-- Start Subscribe Area -->
        <div class="subscribe-area ptb-100">
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <i class='bx bxs-graduation'></i> <p>Subscribe to Our Newsletter</p>
                    </div>
                    <h2>Get the Latest Clgun News Delivered to You Inbox</h2>
                </div>

                <div class="subscribe-btn text-center" data-aos="fade-up" data-aos-delay="100">
                    <a class="default-btn" href="#">Subscribe Now</a>
                </div>
            </div>
        </div> 
        <!-- End Subscribe Area -->

        <!-- Start Footer Area -->
        <div class="footer-area">
            <div class="footer-top-info pb-100">
                <div class="content">
                    <div class="image">
                        <img src="assets/img/logo/footer-Logo.png" alt="image">
                    </div>
                    <p>University Life Nurtures an Inclusive Campus Life Environment Where Students Grow Intellectually and Engage in Meaningful Experiential Opportunities.</p>
                    <ul>
                        <li><a href="https://www.fb.com" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="https://www.instagram.com" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                        <li><a href="https://www.twitter.com"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="https://www.linkedin.com" target="_blank"><i class='bx bxl-linkedin-square'></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-widget-info ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h4>Campus Life</h4>
                                <ul>
                                    <li><a href="alumni.html"><i class='bx bx-chevron-right'></i> Accessibility</a></li>
                                    <li><a href="financial-aid.html"><i class='bx bx-chevron-right'></i> Financial Aid</a></li>
                                    <li><a href="online-education.html"><i class='bx bx-chevron-right'></i> Food Services</a></li>
                                    <li><a href="financial-aid.html"><i class='bx bx-chevron-right'></i> Housing</a></li>
                                    <li><a href="fitness-athletics.html"><i class='bx bx-chevron-right'></i> Information Technologies</a></li>
                                    <li><a href="student-activities.html"><i class='bx bx-chevron-right'></i> Student Life</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h4>Our Campus</h4>
                                <ul>
                                    <li><a href="academics.html"><i class='bx bx-chevron-right'></i> Academic</a></li>
                                    <li><a href="admission.html"><i class='bx bx-chevron-right'></i> Planning & Administration</a></li>
                                    <li><a href="the-campus-experience.html"><i class='bx bx-chevron-right'></i> Campus Safety</a></li>
                                    <li><a href="alumni.html"><i class='bx bx-chevron-right'></i> Office of the Chancellor</a></li>
                                    <li><a href="the-campus-experience.html"><i class='bx bx-chevron-right'></i> Facility Services</a></li>
                                    <li><a href="graduate.html"><i class='bx bx-chevron-right'></i> Human Resources</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h4>Academics</h4>
                                <ul>
                                    <li><a href="university-life.html"><i class='bx bx-chevron-right'></i> Canvas</a></li>
                                    <li><a href="undergraduate.html"><i class='bx bx-chevron-right'></i> Catalyst</a></li>
                                    <li><a href="academics.html"><i class='bx bx-chevron-right'></i> Library</a></li>
                                    <li><a href="date-deadlines.html"><i class='bx bx-chevron-right'></i> Time Schedule</a></li>
                                    <li><a href="how-to-apply.html"><i class='bx bx-chevron-right'></i> Apply For Admissions</a></li>
                                    <li><a href="tuition-fees.html"><i class='bx bx-chevron-right'></i> Pay My Tuition</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h4>Information For</h4>
                                <ul>
                                    <li><a href="application-form.html"><i class='bx bx-chevron-right'></i> How To Apply</a></li>
                                    <li><a href="date-deadlines.html"><i class='bx bx-chevron-right'></i> Dates & Deadlines</a></li>
                                    <li><a href="student-activities.html"><i class='bx bx-chevron-right'></i> Student Activities</a></li>
                                    <li><a href="support-guidance.html"><i class='bx bx-chevron-right'></i> Support & Guidance</a></li>
                                    <li><a href="schedule-tour.html"><i class='bx bx-chevron-right'></i> Schedule A Tour</a></li>
                                    <li><a href="faculty.html"><i class='bx bx-chevron-right'></i> Faculty & Staffs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-12 col-xm-6">
                            <div class="cpr-left">
                                <p>Copyright© <a href="#">Clgun</a>, All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12 col-xm-6">
                            <div class="cpr-right">
                                <ul>
                                    <li><a href="#">Term of services</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Cookie Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Area -->

        <div class="go-top active">
            <i class="bx bx-up-arrow-alt"></i>
        </div>

        <!-- Links of JS files -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/aos.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>

@endsection