@php
    $Colleges = App\Models\College::all();
@endphp

<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/boxicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

        <title>Fountain University, Osogbo - Welcome to Fountain University</title>
        <link rel="icon" type="image/png" href="{{ asset('img/logo/fuo-logo.png') }}">

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </head>
    <body>

        <!-- preloader -->
        <div class="preloader-container" id="preloader">
            <div class="preloader-dot"></div>
            <div class="preloader-dot"></div>
            <div class="preloader-dot"></div>
            <div class="preloader-dot"></div>
            <div class="preloader-dot"></div>
        </div>
        <!-- preloader -->

        <div id="scrollsmoother-container">

            <!-- Start Top Navbar Area -->
            <div class="top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-5 col-12 col-xm-12">
                            <div class="top-left-items">
                                <ul>
                                    {{-- <li><i class='bx bxs-phone'></i> Mon - Fri: 9:00 - 18:00</li> --}}
                                    <li><i class='bx bxs-phone'></i> <a href="tel:+2348037063960">+234 803 706 3960</a></li>
                                    <li><i class='bx bxs-envelope'></i> <a href="#">enquiries@fuo.edu.ng</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12 col-xm-12">
                            <div class="top-right-items">
                                <ul>
                                    {{-- <i class='bx bxs-map'></i>  --}}
                                    <li><a href="{{ route('the-librarian') }}">Library</a></li>
                                    <li><a href="{{ 'https://gmail.com' }}">Webmail</a></li>
                                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                                    <li><a href="{{ route('alumni') }}">Alumni</a></li>
                                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Navbar Area -->

            
            <!-- Start Navbar Area Start -->
            <div class="navbar-area" id="navbar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="/">
                        <img class="logo-dark" src="{{ asset('img/logo/fuo-logo.png') }}" alt="logo">
                    </a>
                    <div class="other-option d-lg-none">
                        <div class="option-item">
                            <button type="button" class="search-btn" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">
                                <i class='bx bx-search'></i>
                            </button>
                        </div>
                    </div>
                    <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
                        <i class='bx bx-menu'></i>
                    </a>
                    <div class="collapse navbar-collapse justify-content-between">
                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                    The University
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About Fountain University</a></li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link sub-menu">University Board of Trustees</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="{{ route('about-bot') }}" class="nav-link">About Board of Trustees</a></li>
                                            <li class="nav-item"><a href="{{ route('fuo-bot-profile') }}" class="nav-link">Profile of Members of FUO BOT</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link">Governing Council</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="{{ route('about-governing-council') }}" class="nav-link">About Governing Council</a></li>
                                            <li class="nav-item"><a href="{{ route('director-of-council') }}" class="nav-link">Director of Council</a></li>
                                            <li class="nav-item"><a href="{{ route('fuo-bot-profile') }}" class="nav-link">Profile of Members of Council</a></li>
                                            <li class="nav-item"><a href="{{ route('decision-extract') }}" class="nav-link">Decision Extracts</a></li>
                                            <li class="nav-item"><a href="{{ route('commmittee-of-council') }}" class="nav-link">Committees of Council</a></li>
                                            <li class="nav-item"><a href="{{ route('schedule-of-meetings') }}" class="nav-link">Schedule of Meetings</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a href="{{ route('the-senate') }}" class="nav-link">The Senate</a></li>
                                    <li class="nav-item"><a href="{{ route('congregation') }}" class="nav-link">Congregation</a></li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link">Administration</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="{{ route('the-vice-chancellor') }}" class="nav-link">The Vice-Chancellor </a></li>
                                            <li class="nav-item"><a href="{{ route('the-registrar') }}" class="nav-link">The Registrar</a></li>
                                            <li class="nav-item"><a href="{{ route('the-bursar') }}" class="nav-link">The Bursar</a></li>
                                            <li class="nav-item"><a href="{{ route('the-librarian') }}" class="nav-link">The Librarian</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a href="{{ route('our-campus') }}" class="nav-link">Our Campus</a></li>
                                    <li class="nav-item"><a href="{{ route('our-gallery') }}" class="nav-link">Our Gallery</a></li>
                                    <li class="nav-item"><a href="{{ route('staff-downloads') }}" class="nav-link">Staff Downloads</a></li>
                                    <li class="nav-item">
                                        <a href="{{ route('resources') }}" class="nav-link">Resources</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                    Academics
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{ route('subdegree-programme') }}" class="nav-link">Sub-Degree Programmes</a></li>
                                    <li class="nav-item"><a href="{{ route('undergradute-programme') }}" class="nav-link">Undergraduate Programmes</a></li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link">Postgraduate School</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="{{ route('postgraduate-programme') }}" class="nav-link"> Postgraduate Programmes</a></li>
                                            <li class="nav-item"><a href="{{ route('the-dean-of-spgs') }}" class="nav-link">Office of the Dean</a></li>
                                            <li class="nav-item"><a href="{{ route('our-staff') }}" class="nav-link">Our Staff</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link"> Admissions </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{ 'https://eportal.fuo.edu.ng/applicant' }}" class="nav-link">Admission Requirements</a></li>
                                    <li class="nav-item"><a href="{{ 'https://eportal.fuo.edu.ng/applicant/SPGS' }}" class="nav-link">Postgraduate Applications</a></li>
                                    <li class="nav-item"><a href="{{ 'https://eportal.fuo.edu.ng/applicant' }}" class="nav-link">Undergraduate Applications </a></li>
                                    <li class="nav-item"><a href="{{ 'https://eportal.fuo.edu.ng/applicant/SPGS' }}" class="nav-link">Sandwich Applications</a></li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                    Divisions
                                </a>
                                
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="courses.html" class="nav-link">Colleges</a>
                                        <ul class="dropdown-menu">
                                            @foreach ($Colleges as $College)
                                            {{-- {{ route('colleges.show', $College->id) }} --}}
                                                <li class="nav-item">
                                                    <a href="{{ route('colleges.show', $College->id) }}" class="nav-link  sub-menu">{{ $College->college_name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link sub-menu">University Board of Trustees</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="{{ route('about-bot') }}" class="nav-link">About Board of Trustees</a></li>
                                            <li class="nav-item"><a href="{{ route('fuo-bot-profile') }}" class="nav-link">Profile of Members of FUO BOT</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="courses-details.html" class="nav-link">Centres & Directorate</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="admission.html" class="nav-link">Centre for Community Development</a></li>
                                            <li class="nav-item"><a href="tuition-fees.html" class="nav-link">Centre for Consultancy Services</a></li>
                                            <li class="nav-item"><a href="how-to-apply.html" class="nav-link">Centre for Research and Innovation</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="courses-details.html" class="nav-link">Units</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="admission.html" class="nav-link">Academic Planning Unit</a></li>
                                            <li class="nav-item"><a href="tuition-fees.html" class="nav-link">Bursary Unit</a></li>
                                            <li class="nav-item"><a href="how-to-apply.html" class="nav-link">Counselling Unit</a></li>
                                            <li class="nav-item"><a href="how-to-apply.html" class="nav-link">ICT Unit</a></li>
                                            <li class="nav-item"><a href="how-to-apply.html" class="nav-link">Internal Audit Unit</a></li>
                                            <li class="nav-item"><a href="how-to-apply.html" class="nav-link">Public Relations Unit</a></li>
                                            <li class="nav-item"><a href="how-to-apply.html" class="nav-link">Quality Assurance Unit</a></li>
                                            <li class="nav-item"><a href="how-to-apply.html" class="nav-link">Registry Unit</a></li>
                                            <li class="nav-item"><a href="how-to-apply.html" class="nav-link">SIWES Unit</a></li>
                                            <li class="nav-item"><a href="how-to-apply.html" class="nav-link">Sports Unit</a></li>
                                            <li class="nav-item"><a href="how-to-apply.html" class="nav-link">Student Affairs Unit</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                    Publications
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{ 'https://fountainjournals.com/' }}" class="nav-link">Fountains Journals</a></li>
                                    <li class="nav-item"><a href="{{ route('inaugural-lectures') }}" class="nav-link">Inaugural Lectures</a></li>
                                    <li class="nav-item"><a href="{{ route('annual-report') }}" class="nav-link">Annual Reports</a></li>
                                    <li class="nav-item"><a href="{{ route('fuo-chronicles') }}" class="nav-link">Fountain Chronicles</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="others-option d-flex align-items-center">
                            <div class="option-item">
                                <div class="nav-btn">
                                    <a href="{{ 'https://eportal.fuo.edu.ng' }}" class="default-btn" target="_blank">PORTALS</a>
                                </div>
                            </div>
                            <div class="option-item">
                                <div class="nav-search">
                                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop" class="search-button"><i class='bx bx-search'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                </div>
            </div>
            <!-- End Navbar Area Start -->


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




            

            @yield('content')

            <!-- Start Footer Area -->
        <div class="footer-area">
            <div class="footer-widget-info ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-md-6 bg-white">
                            <div class="footer-widget">
                                <h4><img src="{{ asset('img/logo/fuo-logo.png') }}" alt=""></h4>
                                <p class="p-2">
                                   Fountain University was granted an operational license as a
                                   Private University on May 17, 2007, by the Federal Government
                                   on the recommendations of the National Universities Commission.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="{{ route('about') }}"><i class='bx bx-chevron-right'></i> About Us </a></li>
                                    <li><a href="admission.html"><i class='bx bx-chevron-right'></i> E-Portal </a></li>
                                    <li><a href="the-campus-experience.html"><i class='bx bx-chevron-right'></i> The Senate</a></li>
                                    <li><a href="alumni.html"><i class='bx bx-chevron-right'></i> Administration </a></li>
                                    <li><a href="the-campus-experience.html"><i class='bx bx-chevron-right'></i> Resources</a></li>
                                    <li><a href="graduate.html"><i class='bx bx-chevron-right'></i> Congregations </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h4>Academics</h4>
                                <ul>
                                    <li><a href="university-life.html"><i class='bx bx-chevron-right'></i> Undergraduate</a></li>
                                    <li><a href="undergraduate.html"><i class='bx bx-chevron-right'></i> Postgraduate</a></li>
                                    <li><a href="academics.html"><i class='bx bx-chevron-right'></i> Sandwich</a></li>
                                    <li><a href="date-deadlines.html"><i class='bx bx-chevron-right'></i> Sub-Degree</a></li>
                                    <li><a href="how-to-apply.html"><i class='bx bx-chevron-right'></i> Apply For Admissions</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h4>Get in Touch</h4>
                                <ul>
                                    <li><a href="application-form.html"><i class='bx bx-home'></i> Oke-Osun, P.M.B. 4491, Osogbo, Osun State, Nigeria</a></li>
                                    <li><a href="date-deadlines.html"><i class='bx bx-phone'></i> +(234) 8160350557</a></li>
                                    <li><a href="student-activities.html"><i class='bx bx-phone'></i> +(234) 8037063960</a></li>
                                    <li><a href="support-guidance.html"><i class='bx bx-envelope'></i> enquiries@fuo.edu.ng</a></li>
                                    <li><a href="schedule-tour.html"><i class='bx bx-envelope'></i> officeoftheregistrar@fuo.edu.ng</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right-area style-2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="cpr-left">
                                <p>Copyright© <a href="#">Fountain University, Osogbo</a></p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="cpr-right">
                                <ul>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Cookie Policy</a></li>
                                </ul>
                                <ul class="social-list">
                                    <li><a href="{{ 'https://facebook.com/fuoweb' }}" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href="{{ 'https://twitter.com/fuoweb' }}" target="_blank"><i class='bx bxl-instagram-alt'></i></a></li>
                                    <li><a href="{{ 'http://twitter.com/fuoweb' }}" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href="{{ 'https://www.linkedin.com/company/fountain-university-osogbo/' }}" target="_blank"><i class='bx bxl-linkedin-square'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="copy-logo">
                        <img src="{{ asset('img/logo/footer-Logo.png') }}" alt="image">
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- End Footer Area -->

        <div class="go-top active">
            <i class="bx bx-up-arrow-alt"></i>
        </div>


        </div>

        <!-- Links of JS files -->
        
        <script src="{{ asset('js/aos.js') }}"></script>
        <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>


    </body>
</html>
