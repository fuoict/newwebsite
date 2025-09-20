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
            <div class="container">
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
                                <li><a href="{{ route('the-university-library') }}">Library</a></li>
                                <li><a href="{{ 'https://gmail.com' }}">Webmail</a></li>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                                {{-- <li><a href="{{ route('alumni') }}">Alumni</a></li> --}}
                                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                <li><a href="{{ 'https://shorturl.at/7zmXb' }}">Approved School Fee</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Navbar Area -->


        <!-- Start Navbar Area Start -->
        <div class="navbar-area" id="navbar">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="/">
                        <img class="logo-dark w-75" src="{{ asset('img/logo/fuo-logo.png') }}" alt="logo">
                    </a>
                    <div class="other-option d-lg-none">
                        <div class="option-item">
                            <button type="button" class="search-btn" data-bs-toggle="offcanvas"
                                data-bs-target="#staticBackdrop">
                                <i class='bx bx-search'></i>
                            </button>
                        </div>
                    </div>
                    <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                        aria-controls="navbarOffcanvas">
                        <i class='bx bx-menu'></i>
                    </a>
                    <div class="collapse navbar-collapse justify-content-between">
                        <ul class="navbar-nav ms-auto">

                            {{-- THE-UNIVERSITY MENU ------------------------------------------------------ --}}
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                    The University
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About Fountain
                                            University</a></li>
                                    <li class="nav-item">
                                        <a href="{{ route('about-bot') }}" class="nav-link sub-menu">Board of
                                            Trustees</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('about-governing-council') }}" class="nav-link">Governing
                                            Council</a>
                                    </li>
                                    <li class="nav-item"><a href="{{ route('the-senate') }}" class="nav-link">The
                                            Senate</a></li>
                                    <li class="nav-item"><a href="{{ route('congregation') }}"
                                            class="nav-link">Congregation</a></li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link">Principal Officers</a>
                                        <ul class="dropdown-menu" style="max-height: 100px; overflow-y: auto;">
                                            <li class="nav-item"><a href="{{ route('the-vice-chancellor') }}"
                                                    class="nav-link">The Vice-Chancellor </a></li>
                                            <li class="nav-item"><a href="{{ route('the-registrar') }}"
                                                    class="nav-link">The Registrar</a></li>
                                            <li class="nav-item"><a href="{{ route('the-bursar') }}"
                                                    class="nav-link">The Bursar</a></li>
                                            <li class="nav-item"><a href="{{ route('the-librarian') }}"
                                                    class="nav-link">The Librarian</a></li>
                                        </ul>
                                    </li>
                                    {{-- <li class="nav-item"><a href="{{ route('our-campus') }}" class="nav-link">Our Campus</a></li> --}}
                                    <li class="nav-item"><a href="{{ route('our-gallery') }}" class="nav-link">Our
                                            Gallery</a></li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Resources</a>
                                        <ul class="dropdown-menu" style="max-height: 100px; overflow-y: auto;">
                                            <li class="nav-item"><a href="{{ route('general-download') }}"
                                                    class="nav-link">General Downloads</a></li>
                                            <li class="nav-item"><a href="{{ route('students-download') }}"
                                                    class="nav-link">Students' Downloads</a></li>
                                            <li class="nav-item"><a href="{{ route('staff-downloads') }}"
                                                    class="nav-link">Staff Downloads</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>


                            {{-- ACADEMICS MENU -------------------------------------------------------------- --}}
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                    Academics
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{ route('subdegree-programme') }}"
                                            class="nav-link">Sub-Degree</a></li>
                                    <li class="nav-item"><a href="{{ route('undergradute-programme') }}"
                                            class="nav-link">Undergraduate</a></li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link">Postgraduate</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="{{ route('the-dean-of-spgs') }}"
                                                    class="nav-link">Office of the Dean</a>
                                            </li>
                                            <li class="nav-item"><a href="{{ route('postgraduate-programme') }}"
                                                    class="nav-link"> Postgraduate Programmes</a>
                                            </li>
                                            <li class="nav-item"><a href="{{ route('our-staff') }}"
                                                    class="nav-link">Our Staff</a>
                                            </li>
                                            <li class="nav-item"><a href="{{ route('pg-download') }}"
                                                    class="nav-link">Postgraduate Students' Downloads</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">Resources</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a href="{{ route('general-download') }}"
                                                            class="nav-link">General Downloads</a></li>
                                                    <li class="nav-item"><a href="{{ route('students-download') }}"
                                                            class="nav-link">Students' Downloads</a></li>
                                                    <li class="nav-item"><a href="{{ route('staff-downloads') }}"
                                                            class="nav-link">Staff Downloads</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            {{-- ADMISSION MENU ----------------------------------------------------------- --}}
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link"> Admissions </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{ route('admission-requirement') }}"
                                            class="nav-link">Admission Requirements</a></li>
                                    <li class="nav-item"><a href="{{ 'https://eportal.fuo.edu.ng/applicant/SPGS' }}"
                                            class="nav-link">Postgraduate Application</a></li>
                                    <li class="nav-item"><a href="{{ 'https://eportal.fuo.edu.ng/applicant' }}"
                                            class="nav-link">Undergraduate Application </a></li>
                                    <li class="nav-item"><a href="{{ 'https://eportal.fuo.edu.ng/applicant/SPGS' }}"
                                            class="nav-link">Sandwich Application</a></li>
                                </ul>
                            </li>

                            {{-- DIVISIONS MENU ............................................. --}}
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                    Colleges
                                </a>

                                {{-- Colleges Divisions --}}
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        @foreach ($Colleges as $College)
                                            <a href="{{ route('colleges.show', $College->id) }}"
                                                class="nav-link  sub-menu">{{ $College->college_name }}</a>
                                        @endforeach

                                    </li>


                                </ul>
                            </li>
                            {{-- CENTER AND UNITS MENU ............................................. --}}
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                    Centres & Units
                                </a>

                                {{-- Colleges Divisions --}}
                                <ul class="dropdown-menu">


                                    {{-- Centres and Directorates Divisions --}}
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Centres</a>
                                        <ul class="dropdown-menu" style="max-height: 300px; overflow-y: auto;">
                                            <li class="nav-item"><a href="{{ route('consultancy') }}"
                                                    class="nav-link">Centre for Consultancy Services</a></li>
                                            <li class="nav-item"><a href="{{ route('fucrit') }}"
                                                    class="nav-link">Centre
                                                    for Research and Innovation and Technology</a></li>
                                            <li class="nav-item"><a href="{{ route('spiritual-growth') }}"
                                                    class="nav-link">Centre for Spiritual Growth and Moral
                                                    Excellence</a>
                                            </li>
                                            <li class="nav-item"><a href="{{ route('linkages') }}"
                                                    class="nav-link">Centre for Linkages and Advancement</a></li>
                                            <li class="nav-item"><a href="{{ route('arabic-islamic-research') }}"
                                                    class="nav-link">Centre for Arabic and Islamic Research,
                                                    Translation
                                                    and Immersion Programme</a></li>
                                            <li class="nav-item"><a href="{{ route('sandwich') }}"
                                                    class="nav-link">Centre for Sandwich Programmes</a></li>
                                            <li class="nav-item"><a href="{{ route('subdegree') }}"
                                                    class="nav-link">Centre for Sub-degree and Professional
                                                    Programmes</a>
                                            </li>
                                            <li class="nav-item"><a href="{{ route('entrepreneurship') }}"
                                                    class="nav-link">Centre for Entrepreneurship and Skill
                                                    Acquisition</a>
                                            </li>

                                        </ul>
                                    </li>

                                    {{-- Unit Division Menu --}}
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Units</a>
                                        <ul class="dropdown-menu" style="max-height: 300px; overflow-y: auto;">
                                            <li class="nav-item"><a href="{{ route('academicplanning') }}"
                                                    class="nav-link">Academic Planning Unit</a></li>
                                            <li class="nav-item"><a href="{{ route('bursary') }}"
                                                    class="nav-link">Bursary Unit</a></li>
                                            <li class="nav-item"><a href="{{ route('counselling') }}"
                                                    class="nav-link">Counselling Unit</a></li>
                                            <li class="nav-item"><a href="{{ route('ictunit') }}"
                                                    class="nav-link">ICT
                                                    Unit</a></li>
                                            <li class="nav-item"><a href="{{ route('auditunit') }}"
                                                    class="nav-link">Internal Audit Unit</a></li>
                                            <li class="nav-item"><a href="{{ route('prounit') }}"
                                                    class="nav-link">Public Relations Unit</a></li>
                                            <li class="nav-item"><a href="{{ route('qassurance') }}"
                                                    class="nav-link">Quality Assurance Unit</a></li>
                                            <li class="nav-item"><a href="{{ route('registry') }}"
                                                    class="nav-link">Registry Unit</a></li>
                                            <li class="nav-item"><a href="{{ route('siwes') }}"
                                                    class="nav-link">SIWES
                                                    Unit</a></li>
                                            <li class="nav-item"><a href="{{ route('sports') }}"
                                                    class="nav-link">Sports
                                                    Unit</a></li>
                                            <li class="nav-item"><a href="{{ route('student-affairs') }}"
                                                    class="nav-link">Student Affairs Unit</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                    Publications
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{ 'https://fountainjournals.com/' }}"
                                            class="nav-link">Fountains Journals</a></li>
                                    <li class="nav-item"><a href="{{ route('inaugural-lectures') }}"
                                            class="nav-link">Inaugural Lectures</a></li>
                                    <li class="nav-item"><a href="{{ route('annual-report') }}"
                                            class="nav-link">Annual
                                            Reports</a></li>
                                    <li class="nav-item"><a href="{{ route('fuo-chronicles') }}"
                                            class="nav-link">Fountain Chronicles</a></li>
                                </ul>
                            </li>
                        </ul>

                        {{-- PORTAL MENU ------------------------------------------------------------------------------ --}}
                        <div class="others-option d-flex align-items-center">
                            <div class="option-item">
                                <div class="nav-btn">
                                    <a href="{{ 'https://eportal.fuo.edu.ng' }}" class="default-btn"
                                        target="_blank">PORTALS</a>
                                </div>
                            </div>
                            <div class="option-item">
                                <div class="nav-search">
                                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
                                        aria-controls="staticBackdrop" class="search-button"><i
                                            class='bx bx-search'></i></a>
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
                <a href="/" class="logo">
                    {{-- {{ asset('img/logo/fuo-logo.png') }} --}}
                    <img src="{{ asset('img/logo/fuo-logo.png') }}" alt="image" class="img-fluid w-50">
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="search-box">
                    <div class="searchwrapper">
                        {{-- <div class="searchbox">
                            <div class="row align-items-center">
                                <div class="col-md-9"><input type="text" class="form-control"
                                        placeholder="Fiend Your Course Here!" disabled></div>
                                <div class="col-lg-3">
                                    <a class="btn" href="#">Search</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <div class="offcanvas-contact-info">
                    <h4>Contact Information</h4>
                    <ul class="contact-info list-style">
                        <li>
                            <i class="bx bxs-time"></i>
                            <p>Mon - Fri: 9:00 - 18:00</p>
                        </li>
                        <li><i class="bx bxs-phone-call"></i> General Enquiries<a href="tel:+2348037063960">+(234)
                                8037063960</a></li>
                        <li>
                            <i class="bx bxs-envelope"></i>
                            <a href="mailto:enquiries@fuo.edu.ng">enquiries@fuo.edu.ng</a>
                        </li>
                        <li>
                            <i class="bx bxs-map"></i>
                            <p>Oke-Osun, P.M.B. 4491, Osogbo, Osun State, Nigeria</p>
                        </li>
                    </ul>
                    <ul class="social-profile list-style">
                        <li><a href="https://www.facebook.com/fuoweb" target="_blank"><i
                                    class='bx bxl-facebook'></i></a></li>
                        <li><a href="https://www.instagram.com/fountain.university/" target="_blank"><i
                                    class='bx bxl-instagram'></i></a></li>
                        <li><a href="https://x.com/fuoweb" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="https://ng.linkedin.com/school/fountain-university-osogbo/" target="_blank"><i
                                    class='bx bxl-linkedin'></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- End Clgun Searchbar Area -->


        <!-- Start Responsive Navbar Area -->
        <div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1"
            id="navbarOffcanvas">
            <div class="offcanvas-header">
                <a href="/" class="logo d-inline-block">
                    <img class="logo-light w-50" src="{{ 'img/logo/fuo-logo.png' }}" alt="logo">
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="accordion" id="navbarAccordion">
                    <div class="accordion-item">
                        <a href="/" class="accordion-button active">
                            Home
                        </a>
                    </div>

                    {{-- THE UNIVERSITY MENU MANAGEMENT -------------------------------------------- --}}
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            The University
                        </button>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                            <div class="accordion-body">
                                <div class="accordion" id="navbarAccordion8">
                                    <div class="accordion-item">
                                        <a href="{{ route('about') }}" class="accordion-link">
                                            About the University
                                        </a>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="{{ route('about-bot') }}" class="accordion-link">
                                            University Board of Trustees
                                        </a>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="{{ route('about-governing-council') }}" class="accordion-link">
                                            Governing Council
                                        </a>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="{{ route('the-senate') }}" class="accordion-link">
                                            The Senate
                                        </a>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="{{ route('congregation') }}" class="accordion-link">
                                            Congregation
                                        </a>
                                    </div>

                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseAdmin"
                                            aria-expanded="false" aria-controls="collapseAdmin">
                                            Principal Officers
                                        </button>
                                        <div id="collapseAdmin" class="accordion-collapse collapse"
                                            data-bs-parent="#navbarAccordionAdmin">
                                            <div class="accordion-body">
                                                <div class="accordion" id="navbarAccordionAdmin">
                                                    <div class="accordion-item">
                                                        <a href="{{ route('the-vice-chancellor') }}"
                                                            class="accordion-link">
                                                            The Vice-Chancellor
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('the-registrar') }}"
                                                            class="accordion-link">
                                                            The Registrar
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('the-bursar') }}" class="accordion-link">
                                                            The Bursar
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('the-librarian') }}"
                                                            class="accordion-link">
                                                            The Librarian
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-item">
                                        <a href="{{ route('our-gallery') }}" class="accordion-link">
                                            Our Gallery
                                        </a>
                                    </div>

                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseResources"
                                            aria-expanded="false" aria-controls="collapseResources">
                                            Resources
                                        </button>
                                        <div id="collapseResources" class="accordion-collapse collapse"
                                            data-bs-parent="#navbarAccordionResources">
                                            <div class="accordion-body">
                                                <div class="accordion" id="navbarAccordionResources">
                                                    <div class="accordion-item">
                                                        <a href="{{ route('general-download') }}"
                                                            class="accordion-link">
                                                            General Downloads
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('students-download') }}"
                                                            class="accordion-link">
                                                            Students' Downloads
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('staff-downloads') }}"
                                                            class="accordion-link">
                                                            Staff Downloads
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ACADEMIC MENU MANAGEMENT --------------------------------------------------- --}}
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Academics
                        </button>
                        <div id="collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#navbarAccordion">
                            <div class="accordion-body">
                                <div class="accordion" id="navbarAccordion30">
                                    <div class="accordion-item">
                                        <a href="{{ route('subdegree-programme') }}" class="accordion-link">
                                            Sub-Degree Programmes
                                        </a>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="{{ route('undergradute-programme') }}" class="accordion-link">
                                            Undergraduate Programmes
                                        </a>
                                    </div>

                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseAdmin"
                                            aria-expanded="false" aria-controls="collapseAdmin">
                                            Post-Graduate Programmes
                                        </button>
                                        <div id="collapseAdmin" class="accordion-collapse collapse"
                                            data-bs-parent="#navbarAccordionAdmin">
                                            <div class="accordion-body">
                                                <div class="accordion" id="navbarAccordionAdmin">
                                                    <div class="accordion-item">
                                                        <a href="{{ route('postgraduate-programme') }}"
                                                            class="accordion-link">
                                                            Postgraduate Programmes
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('the-dean-of-spgs') }}"
                                                            class="accordion-link">
                                                            Office of the Dean
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ADMISSION MENU MANAGEMENT -------------------------------------------------- --}}
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Admissions
                        </button>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                            <div class="accordion-body">
                                <div class="accordion" id="navbarAccordion31">
                                    <div class="accordion-item">
                                        <a href="{{ route('admission-requirement') }}" class="accordion-link">
                                            Admission Requirements
                                        </a>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="{{ 'https://eportal.fuo.edu/applicant/SPGS' }}"
                                            class="accordion-link">
                                            Postgraduate Applications
                                        </a>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="{{ 'https://eportal.fuo.edu/applicant' }}" class="accordion-link">
                                            Undergraduate Applications
                                        </a>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="{{ 'https://eportal.fuo.edu/applicant/sandwich' }}"
                                            class="accordion-link">
                                            Sandwich Applications
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- DIVISION MENU MANAGEMENT -------------------------------------------------- --}}
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Divisions
                        </button>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                            <div class="accordion-body">
                                <div class="accordion" id="navbarAccordion32">
                                    <div class="accordion-item">
                                        <a href="courses.html" class="accordion-link">
                                            Colleges
                                        </a>
                                    </div>
                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseCentres"
                                            aria-expanded="false" aria-controls="collapseCentres">
                                            Centres & Directorate
                                        </button>
                                        <div id="collapseCentres" class="accordion-collapse collapse"
                                            data-bs-parent="#navbarAccordionCentres">
                                            <div class="accordion-body">
                                                <div class="accordion" id="navbarAccordionCentres">
                                                    @foreach ($Colleges as $College)
                                                        <div class="accordion-item">
                                                            <a href="{{ route('colleges.show', $College->id) }}"
                                                                class="accordion-link">
                                                                {{ $College->college_name }}
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseUnits"
                                            aria-expanded="false" aria-controls="collapseUnits">
                                            Units
                                        </button>
                                        <div id="collapseUnits" class="accordion-collapse collapse"
                                            data-bs-parent="#navbarAccordionUnits">
                                            <div class="accordion-body">
                                                <div class="accordion" id="navbarAccordionUnits">
                                                    <div class="accordion-item">
                                                        <a href="{{ route('academicplanning') }}"
                                                            class="accordion-link">
                                                            Academic Planning Unit
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('bursary') }}" class="accordion-link">
                                                            Bursary Unit
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('counselling') }}" class="accordion-link">
                                                            Counselling Unit
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('ictunit') }}" class="accordion-link">
                                                            ICT Unit
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('auditunit') }}" class="accordion-link">
                                                            Internal Audit Unit
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('prounit') }}" class="accordion-link">
                                                            Public Relation Unit
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('qassurance') }}" class="accordion-link">
                                                            Quality Assurance Unit
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('registry') }}" class="accordion-link">
                                                            Registry Unit
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('siwes') }}" class="accordion-link">
                                                            SIWES Unit
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('sports') }}" class="accordion-link">
                                                            Sports Unit
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('student-affairs') }}"
                                                            class="accordion-link">
                                                            Student Affairs Unit
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- PUBLICATIONS MENU MANAGEMENT ---------------------------------------------- --}}
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Publications
                        </button>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                            <div class="accordion-body">
                                <div class="accordion" id="navbarAccordion40">
                                    <div class="accordion-item">
                                        <a href="{{ 'https://fountainjournals.com' }}" class="accordion-link">
                                            Fountain Journals
                                        </a>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="{{ route('inaugural-lectures') }}" class="accordion-link">
                                            Inaugural Lectures
                                        </a>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="{{ route('annual-report') }}" class="accordion-link">
                                            Annual Reports
                                        </a>
                                    </div>
                                    <div class="accordion-item">
                                        <a href="{{ route('fuo-chronicles') }}" class="accordion-link">
                                            Fountain Chronicles
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="offcanvas-contact-info">
                    <h4>Contact Info</h4>
                    <ul class="contact-info list-style">
                        <li>
                            <i class="bx bxs-envelope"></i>
                            <a href="mailto:officeoftheregistrar@fuo.edu.ng">officeoftheregistrar@fuo.edu.ng</a>
                        </li>
                        <li>
                            <i class="bx bxs-time"></i>
                            <p>Mon - Fri: 9:00 - 18:00</p>
                        </li>
                    </ul>
                    <ul class="social-profile list-style">
                        <li><a href="{{ 'https://www.facebook.com/fuoweb' }}" target="_blank"><i
                                    class='bx bxl-facebook'></i></a></li>
                        <li><a href="{{ 'https://www.instagram.com/fountain.university/' }}" target="_blank"><i
                                    class='bx bxl-instagram'></i></a></li>
                        <li><a href="{{ 'https://ng.linkedin.com/school/fountain-university-osogbo/' }}"
                                target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                    </ul>
                </div>

                {{-- PORTAL LINK --------------------------------------------------------------- --}}
                <div class="offcanvas-other-options">
                    <div class="option-item">
                        <a href="{{ 'https://eportal.fuo.edu.ng' }}" class="default-btn">Portal</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Responsive Navbar Area -->






        @yield('content')


        <!-- Start Footer Area -->
        <div class="footer-area">
            <div class="footer-widget-info ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h4><img class="img-fluid w-50" src="{{ asset('img/logo/fuo-logo.png') }}"
                                        alt=""></h4>
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
                                    <li><a href="{{ route('about') }}"><i class='bx bx-chevron-right'></i> About Us
                                        </a></li>
                                    <li><a href="{{ 'https://eportal.fuo.edu.ng' }}"><i
                                                class='bx bx-chevron-right'></i> E-Portal </a></li>
                                    <li><a href="{{ route('the-senate') }}"><i class='bx bx-chevron-right'></i> The
                                            Senate</a></li>
                                    <li><a href="{{ route('gallery') }}"><i class='bx bx-chevron-right'></i> Gallery
                                        </a></li>
                                    <li><a href="{{ route('general-download') }}"><i
                                                class='bx bx-chevron-right'></i> Resources</a></li>
                                    <li><a href="{{ route('congregation') }}"><i class='bx bx-chevron-right'></i>
                                            Congregations </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h4>Academics</h4>
                                <ul>
                                    <li><a href="{{ 'https://eportal.fuo.edu.ng/applicant' }}"><i
                                                class='bx bx-chevron-right'></i> Undergraduate</a></li>
                                    <li><a href="{{ 'https://eportal.fuo.edu.ng/applicant/SPGS' }}"><i
                                                class='bx bx-chevron-right'></i> Postgraduate</a></li>
                                    <li><a href="{{ 'https://eportal.fuo.edu.ng/applicant/CENSAP' }}"><i
                                                class='bx bx-chevron-right'></i> Sandwich</a></li>
                                    <li><a href="{{ 'https://eportal.fuo.edu.ng/applicant/CENSPS' }}"><i
                                                class='bx bx-chevron-right'></i> Sub-Degree</a></li>
                                    <li><a href="{{ 'https://eportal.fuo.edu.ng/ug/inter-university-transfer' }}"><i
                                                class='bx bx-chevron-right'></i> Inter-University</a></li>
                                    <li><a href="{{ 'https://eportal.fuo.edu.ng/applicant' }}"><i
                                                class='bx bx-chevron-right'></i> Apply For Admissions</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h4>Get in Touch</h4>
                                <ul>
                                    <li><a href="#"><i class='bx bx-home'></i> Oke-Osun, P.M.B. 4491, Osogbo,
                                            Osun State, Nigeria</a></li>
                                    <li><a href="tel:+2348160350557"><i class='bx bx-phone'></i> +(234) 8160350557</a>
                                    </li>
                                    <li><a href="tel:+2348037063960"><i class='bx bx-phone'></i> +(234) 8037063960</a>
                                    </li>
                                    <li><a href="mailto:enquiries@fuo.edu.ng"><i class='bx bx-envelope'></i>
                                            enquiries@fuo.edu.ng</a></li>
                                    <li><a href="mailto:officeoftheregistrar@fuo.edu.ng"><i
                                                class='bx bx-envelope'></i> officeoftheregistrar@fuo.edu.ng</a></li>
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
                                <p>Copyright © <a href="{{ 'https://fuo.edu.ng' }}">Fountain University, Osogbo</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="cpr-right">
                                {{-- <ul>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Cookie Policy</a></li>
                                    </ul> --}}
                                <ul class="social-list">
                                    <li><a href="{{ 'https://facebook.com/fuoweb' }}" target="_blank"><i
                                                class='bx bxl-facebook'></i></a></li>
                                    <li><a href="{{ 'https://www.instagram.com/fountain.university/' }}"
                                            target="_blank"><i class='bx bxl-instagram-alt'></i></a></li>
                                    <li><a href="{{ 'http://twitter.com/fuoweb' }}" target="_blank"><i
                                                class='bx bxl-twitter'></i></a></li>
                                    <li><a href="{{ 'https://www.linkedin.com/company/fountain-university-osogbo/' }}"
                                            target="_blank"><i class='bx bxl-linkedin-square'></i></a></li>
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
