@php
    $Colleges = App\Models\College::all();
    // Fetch pages grouped by section for dynamic navbar
    $uniPages = \App\Models\Page::where('section', 'university')->where('is_active', true)->orderBy('sort_order')->get();
    $officerPages = \App\Models\Page::where('section', 'officers')->where('is_active', true)->orderBy('sort_order')->get();
@endphp

<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @php
        $styleVersion = file_exists(public_path('css/style.css')) ? filemtime(public_path('css/style.css')) : time();
        $mainJsVersion = file_exists(public_path('js/main.js')) ? filemtime(public_path('js/main.js')) : time();
    @endphp

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ $styleVersion }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/showcase.css') }}?v={{ $styleVersion }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}?v={{ $styleVersion }}">

    <title>Fountain University, Osogbo - Welcome to Fountain University | fuo.edu.ng formely fountainuniversity.edu.ng </title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/logo/fuo-logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo/fuo-logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo/fuo-logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/logo/fuo-logo.png') }}">

    <style>
    /* Preloader: force hide after 2s as fallback */
    .preloader-container { animation: preloader-fade 0.5s 2s forwards; }
    @keyframes preloader-fade { to { opacity: 0; pointer-events: none; } }

    /* Navbar — static on landing page, must sit above hero */
    .navbar-area { position: relative !important; z-index: 500 !important; }
    .navbar-area.sticky { position: relative !important; z-index: 500 !important; top: auto !important; }
    .navbar-area .dropdown-menu { z-index: 1001 !important; }

    /* Modal above everything including navbar */
    .fuo-modal-overlay { z-index: 10000 !important; }

    /* Top bar — green, white text, gold icons (sitewide, including mobile) */
    .top-area { background: #035F39 !important; display: block !important; }
    .top-area .top-left-items ul li,
    .top-area .top-right-items ul li { border: none !important; }
    .top-area .top-left-items ul li::before,
    .top-area .top-right-items ul li::before { content: none !important; display: none !important; }
    .top-area a { color: #fff !important; }
    .top-area a:hover { color: #B8931F !important; }
    .top-area i { color: #B8931F !important; }

    /* Footer responsive — applies sitewide */
    .footer-grid { display: grid; grid-template-columns: 1.3fr 1fr 1fr 1.2fr; gap: 32px; }

    /* Kill horizontal scroll on mobile */
    html, body { overflow-x: hidden; width: 100%; -webkit-overflow-scrolling: touch; }
    #scrollsmoother-container { overflow: visible !important; }
    .top-area, footer, .fuo-redesign { overflow-x: hidden; }

    @media (max-width: 991px) {
        .top-area .container { flex-direction: column; gap: 4px; }
        .top-left-items, .top-right-items { justify-content: center; }
        .top-right-items ul { gap: 8px 12px; flex-wrap: wrap; justify-content: center; }
        .top-left-items ul { border-bottom: none !important; gap: 12px; }
        .top-right-items ul li { font-size: 11px; }
        .footer-grid { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 560px) {
        .top-right-items ul li { font-size: 10px; }
        .top-right-items ul { gap: 6px 10px; }
        .top-left-items ul li { font-size: 11px; }
        .footer-grid { grid-template-columns: 1fr; }
    }
    </style>

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
                                <li><a href="{{ 'https://transcript.fuo.edu.ng' }}">e-Transcript</a></li>
                                <li><a href="{{ route('the-university-library') }}">Library</a></li>
                                <li><a href="https://repository.fuo.edu.ng" target="_blank" rel="noopener noreferrer">I-Repository</a></li>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                                {{-- <li><a href="{{ route('alumni') }}">Alumni</a></li> --}}
                                {{-- <li><a href="{{ route('gallery') }}">Gallery</a></li> --}}
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                {{-- <li><a href="{{ 'https://tinyurl.com/42zxfstk' }}">Approved School Fee</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Navbar Area -->

        <!-- Start Navbar Area Start -->
        <div class="navbar-area" id="navbar" style="position: relative !important; z-index: 500 !important;">
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

                            {{-- THE-UNIVERSITY MENU — Dynamic from database --}}
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">The University</a>
                                <ul class="dropdown-menu">
                                    @foreach($uniPages as $page)
                                        @if($page->slug === 'board-of-trustees' || $page->slug === 'governing-council')
                                            <li class="nav-item">
                                                <a href="{{ url('/university/'.$page->slug) }}" class="nav-link sub-menu">{{ $page->title }}</a>
                                            </li>
                                        @else
                                            <li class="nav-item">
                                                <a href="{{ url('/university/'.$page->slug) }}" class="nav-link">{{ $page->title }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link">Principal Officers</a>
                                        <ul class="dropdown-menu dropdown-menu-end" style="max-height:100px;overflow-y:auto">
                                            @foreach($officerPages as $op)
                                            <li class="nav-item">
                                                <a href="{{ url('/university/'.$op->slug) }}" class="nav-link">{{ $op->title }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a href="{{ url('/university/our-gallery') }}" class="nav-link">Our Gallery</a></li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Institutional Showcase</a>
                                        <ul class="dropdown-menu dropdown-menu-end" style="max-height:220px;overflow-y:auto">
                                            <li class="nav-item"><a href="{{ route('partnerships') }}" class="nav-link">Partnerships</a></li>
                                            <li class="nav-item"><a href="{{ route('donors') }}" class="nav-link">Donors</a></li>
                                            <li class="nav-item"><a href="{{ route('scholarships') }}" class="nav-link">Scholarships</a></li>
                                            <li class="nav-item"><a href="{{ route('dignitaries') }}" class="nav-link">Dignitaries</a></li>
                                            <li class="nav-item"><a href="{{ route('honorary-doctorates') }}" class="nav-link">Honorary Doctorates</a></li>
                                            <li class="nav-item"><a href="{{ route('convocation-lecturers') }}" class="nav-link">Convocation Lecturers</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Resources</a>
                                        <ul class="dropdown-menu" style="max-height:100px;overflow-y:auto">
                                            <li class="nav-item"><a href="{{ route('general-download') }}" class="nav-link">General Downloads</a></li>
                                            <li class="nav-item"><a href="{{ route('students-download') }}" class="nav-link">Students' Downloads</a></li>
                                            <li class="nav-item"><a href="{{ route('staff-downloads') }}" class="nav-link">Staff Downloads</a></li>
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
                                            <li class="nav-item"><a href="/pg-download" class="nav-link">Postgraduate
                                                    Students' Downloads</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a target="_blank" href="https://ipss.fuo.edu.ng/"
                                            class="nav-link">IPSS</a></li>
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
                                    <li class="nav-item"><a href="https://eportal.fuo.edu.ng/censap/admissions"
                                            class="nav-link">Sandwich Application</a></li>
                                </ul>
                            </li>

                            {{-- DIVISIONS MENU ............................................. --}}
                            <!--<li class="nav-item">-->
                            <!--    <a href="javascript:void(0)" class="dropdown-toggle nav-link">-->
                            <!--        Colleges & Institutes-->
                            <!--    </a>-->

                            <!--    {{-- Colleges Divisions --}}-->
                            <!--    <ul class="dropdown-menu">-->
                            <!--        <li class="nav-item">-->
                            <!--            @foreach ($Colleges as $College)
-->
                            <!--                <a href="{{ route('colleges.show', $College->slug) }}"-->
                            <!--                    class="nav-link  sub-menu">{{ $College->college_name }}</a>-->
                            <!--
@endforeach-->
                            <!--        </li>-->

                            <!--    </ul>-->
                            <!--     <ul class="dropdown-menu">-->
                            <!--        <li class="nav-item"><a href="{{ 'https://ipss.fuo.edu.ng/' }}"-->
                            <!--                class="nav-link">IPSS</a></li>-->
                            <!--    </ul>-->
                            <!--</li>-->
                            {{-- DIVISIONS MENU ............................................. --}}
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                    Colleges & Institutes
                                </a>

                                <ul class="dropdown-menu">

                                    {{-- Colleges Sub-menu --}}
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Colleges</a>
                                        <ul class="dropdown-menu" style="max-height: 300px; overflow-y: auto;">
                                            @foreach ($Colleges as $College)
                                                <li class="nav-item">
                                                    <a href="{{ route('colleges.show', $College->slug) }}"
                                                        class="nav-link">
                                                        {{ $College->college_name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    {{-- Institutes Sub-menu --}}
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Institutes</a>
                                        <ul class="dropdown-menu" style="max-height: 300px; overflow-y: auto;">
                                            <li class="nav-item">
                                                <a href="https://ipss.fuo.edu.ng/" class="nav-link">IPSS</a>
                                            </li>
                                        </ul>
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

                    {{-- THE UNIVERSITY MENU — Dynamic from database --}}
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">The University</button>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                            <div class="accordion-body">
                                <div class="accordion" id="navbarAccordion8">
                                    @foreach($uniPages as $page)
                                    <div class="accordion-item">
                                        <a href="{{ url('/university/'.$page->slug) }}" class="accordion-link">{{ $page->title }}</a>
                                    </div>
                                    @endforeach
                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAdmin" aria-expanded="false" aria-controls="collapseAdmin">Principal Officers</button>
                                        <div id="collapseAdmin" class="accordion-collapse collapse" data-bs-parent="#navbarAccordionAdmin">
                                            <div class="accordion-body">
                                                <div class="accordion" id="navbarAccordionAdmin">
                                                    @foreach($officerPages as $op)
                                                    <div class="accordion-item">
                                                        <a href="{{ url('/university/'.$op->slug) }}" class="accordion-link">{{ $op->title }}</a>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item"><a href="{{ url('/university/our-gallery') }}" class="accordion-link">Our Gallery</a></div>
                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseShowcase" aria-expanded="false">Institutional Showcase</button>
                                        <div id="collapseShowcase" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion8">
                                            <div class="accordion-body">
                                                <div class="accordion" id="navbarAccordionShowcase">
                                                    <div class="accordion-item"><a href="{{ route('partnerships') }}" class="accordion-link">Partnerships</a></div>
                                                    <div class="accordion-item"><a href="{{ route('donors') }}" class="accordion-link">Donors</a></div>
                                                    <div class="accordion-item"><a href="{{ route('scholarships') }}" class="accordion-link">Scholarships</a></div>
                                                    <div class="accordion-item"><a href="{{ route('dignitaries') }}" class="accordion-link">Dignitaries</a></div>
                                                    <div class="accordion-item"><a href="{{ route('honorary-doctorates') }}" class="accordion-link">Honorary Doctorates</a></div>
                                                    <div class="accordion-item"><a href="{{ route('convocation-lecturers') }}" class="accordion-link">Convocation Lecturers</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseResources" aria-expanded="false">Resources</button>
                                        <div id="collapseResources" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion8">
                                            <div class="accordion-body">
                                                <div class="accordion" id="navbarAccordionResources">
                                                    <div class="accordion-item"><a href="{{ route('general-download') }}" class="accordion-link">General Downloads</a></div>
                                                    <div class="accordion-item"><a href="{{ route('students-download') }}" class="accordion-link">Students' Downloads</a></div>
                                                    <div class="accordion-item"><a href="{{ route('staff-downloads') }}" class="accordion-link">Staff Downloads</a></div>
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

                                    <div class="accordion-item">
                                        <a target="_blank" href="https://ipss.fuo.edu.ng/" class="accordion-link">
                                            IPSS Programmes
                                        </a>
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
                    {{-- <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Colleges & Institutes
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
                                                            <a href="{{ route('colleges.show', $College->slug) }}"
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
                    </div> --}}
                    {{-- COLLEGES & INSTITUTES MENU (MOBILE) --}}
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Colleges & Institutes
                        </button>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                            <div class="accordion-body">
                                <div class="accordion" id="navbarAccordionCollegesInstitutes">

                                    {{-- Colleges Sub-menu --}}
                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseColleges"
                                            aria-expanded="false" aria-controls="collapseColleges">
                                            Colleges
                                        </button>
                                        <div id="collapseColleges" class="accordion-collapse collapse"
                                            data-bs-parent="#navbarAccordionCollegesInstitutes">
                                            <div class="accordion-body">
                                                <div class="accordion">
                                                    @foreach ($Colleges as $College)
                                                        <div class="accordion-item">
                                                            <a href="{{ route('colleges.show', $College->slug) }}"
                                                                class="accordion-link">
                                                                {{ $College->college_name }}
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Institutes Sub-menu --}}
                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseInstitutes"
                                            aria-expanded="false" aria-controls="collapseInstitutes">
                                            Institutes
                                        </button>
                                        <div id="collapseInstitutes" class="accordion-collapse collapse"
                                            data-bs-parent="#navbarAccordionCollegesInstitutes">
                                            <div class="accordion-body">
                                                <div class="accordion">
                                                    <div class="accordion-item">
                                                        <a href="https://ipss.fuo.edu.ng/" class="accordion-link">
                                                            IPSS
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
                    {{-- CENTRES & UNITS MENU (MOBILE) --}}
                    <div class="accordion-item">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseCentresUnits" aria-expanded="false"
                            aria-controls="collapseCentresUnits">
                            Centres & Units
                        </button>
                        <div id="collapseCentresUnits" class="accordion-collapse collapse"
                            data-bs-parent="#navbarAccordion">
                            <div class="accordion-body">
                                <div class="accordion" id="navbarAccordionCentresUnits">

                                    {{-- Centres Sub-menu --}}
                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseCentres"
                                            aria-expanded="false" aria-controls="collapseCentres">
                                            Centres
                                        </button>
                                        <div id="collapseCentres" class="accordion-collapse collapse"
                                            data-bs-parent="#navbarAccordionCentresUnits">
                                            <div class="accordion-body">
                                                <div class="accordion">
                                                    <div class="accordion-item">
                                                        <a href="{{ route('consultancy') }}" class="accordion-link">
                                                            Centre for Consultancy Services
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('fucrit') }}" class="accordion-link">
                                                            Centre for Research and Innovation and Technology
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('spiritual-growth') }}"
                                                            class="accordion-link">
                                                            Centre for Spiritual Growth and Moral Excellence
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('linkages') }}" class="accordion-link">
                                                            Centre for Linkages and Advancement
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('arabic-islamic-research') }}"
                                                            class="accordion-link">
                                                            Centre for Arabic and Islamic Research, Translation and
                                                            Immersion Programme
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('sandwich') }}" class="accordion-link">
                                                            Centre for Sandwich Programmes
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('subdegree') }}" class="accordion-link">
                                                            Centre for Sub-degree and Professional Programmes
                                                        </a>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <a href="{{ route('entrepreneurship') }}"
                                                            class="accordion-link">
                                                            Centre for Entrepreneurship and Skill Acquisition
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Units Sub-menu --}}
                                    <div class="accordion-item">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseUnits"
                                            aria-expanded="false" aria-controls="collapseUnits">
                                            Units
                                        </button>
                                        <div id="collapseUnits" class="accordion-collapse collapse"
                                            data-bs-parent="#navbarAccordionCentresUnits">
                                            <div class="accordion-body">
                                                <div class="accordion">
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
                                                            Public Relations Unit
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


        <!-- Start Footer Area — redesigned -->
        <footer class="fuo-footer-v2" style="background:#082B1A; color:rgba(255,255,255,0.68);">
            <div style="max-width:1160px; margin:0 auto; padding:0 32px;">
                <div class="footer-grid" style="gap:32px; padding:56px 0 40px;">
                    <div>
                        <img src="{{ asset('img/logo/fuo-logo.png') }}" alt="Fountain University" style="width:60px; margin-bottom:14px; object-fit:contain;">
                        <p style="font-size:13px; line-height:1.7;">Fountain University was granted an operational license as a Private University on May 17, 2007, by the Federal Government on the recommendation of the National Universities Commission.</p>
                    </div>
                    <div>
                        <h4 style="color:#fff; font-size:14.5px; margin-bottom:16px;">Quick links</h4>
                        <ul style="list-style:none; padding:0;">
                            <li style="margin-bottom:10px; font-size:13px;"><a href="{{ route('about') }}" style="color:rgba(255,255,255,0.68); text-decoration:none; display:flex; align-items:center;"><i class='bx bx-chevron-right' style="margin-right:6px; color:#C9A227;"></i>About us</a></li>
                            <li style="margin-bottom:10px; font-size:13px;"><a href="https://eportal.fuo.edu.ng" style="color:rgba(255,255,255,0.68); text-decoration:none; display:flex; align-items:center;"><i class='bx bx-chevron-right' style="margin-right:6px; color:#C9A227;"></i>E-Portal</a></li>
                            <li style="margin-bottom:10px; font-size:13px;"><a href="{{ route('the-senate') }}" style="color:rgba(255,255,255,0.68); text-decoration:none; display:flex; align-items:center;"><i class='bx bx-chevron-right' style="margin-right:6px; color:#C9A227;"></i>The Senate</a></li>
                            <li style="margin-bottom:10px; font-size:13px;"><a href="{{ route('gallery') }}" style="color:rgba(255,255,255,0.68); text-decoration:none; display:flex; align-items:center;"><i class='bx bx-chevron-right' style="margin-right:6px; color:#C9A227;"></i>Gallery</a></li>
                            <li style="margin-bottom:10px; font-size:13px;"><a href="{{ route('general-download') }}" style="color:rgba(255,255,255,0.68); text-decoration:none; display:flex; align-items:center;"><i class='bx bx-chevron-right' style="margin-right:6px; color:#C9A227;"></i>Resources</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 style="color:#fff; font-size:14.5px; margin-bottom:16px;">Academics</h4>
                        <ul style="list-style:none; padding:0;">
                            <li style="margin-bottom:10px; font-size:13px;"><a href="https://eportal.fuo.edu.ng/applicant" style="color:rgba(255,255,255,0.68); text-decoration:none; display:flex; align-items:center;"><i class='bx bx-chevron-right' style="margin-right:6px; color:#C9A227;"></i>Undergraduate</a></li>
                            <li style="margin-bottom:10px; font-size:13px;"><a href="https://eportal.fuo.edu.ng/applicant/SPGS" style="color:rgba(255,255,255,0.68); text-decoration:none; display:flex; align-items:center;"><i class='bx bx-chevron-right' style="margin-right:6px; color:#C9A227;"></i>Postgraduate</a></li>
                            <li style="margin-bottom:10px; font-size:13px;"><a href="https://eportal.fuo.edu.ng/applicant/CENSAP" style="color:rgba(255,255,255,0.68); text-decoration:none; display:flex; align-items:center;"><i class='bx bx-chevron-right' style="margin-right:6px; color:#C9A227;"></i>Sandwich</a></li>
                            <li style="margin-bottom:10px; font-size:13px;"><a href="https://eportal.fuo.edu.ng/applicant/CENSPS" style="color:rgba(255,255,255,0.68); text-decoration:none; display:flex; align-items:center;"><i class='bx bx-chevron-right' style="margin-right:6px; color:#C9A227;"></i>Sub-degree</a></li>
                            <li style="margin-bottom:10px; font-size:13px;"><a href="https://eportal.fuo.edu.ng/applicant" style="color:rgba(255,255,255,0.68); text-decoration:none; display:flex; align-items:center;"><i class='bx bx-chevron-right' style="margin-right:6px; color:#C9A227;"></i>Apply for admission</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 style="color:#fff; font-size:14.5px; margin-bottom:16px;">Get in touch</h4>
                        <ul style="list-style:none; padding:0;">
                            <li style="margin-bottom:10px; font-size:13px; display:flex; align-items:flex-start;"><i class='bx bx-map' style="margin-right:6px; color:#C9A227; flex-shrink:0; margin-top:2px;"></i><span>Oke-Osun, P.M.B. 4491, Osogbo, Osun State, Nigeria</span></li>
                            <li style="margin-bottom:10px; font-size:13px;"><a href="tel:+2348037063960" style="color:rgba(255,255,255,0.68); text-decoration:none; display:flex; align-items:center;"><i class='bx bx-phone' style="margin-right:6px; color:#C9A227;"></i>+234 803 706 3960</a></li>
                            <li style="margin-bottom:10px; font-size:13px;"><a href="mailto:enquiries@fuo.edu.ng" style="color:rgba(255,255,255,0.68); text-decoration:none; display:flex; align-items:center;"><i class='bx bx-envelope' style="margin-right:6px; color:#C9A227;"></i>enquiries@fuo.edu.ng</a></li>
                        </ul>
                    </div>
                </div>
                <div style="border-top:1px solid rgba(255,255,255,0.1); padding:18px 0; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px;">
                    <p style="font-size:13px; margin:0;">Copyright &copy; Fountain University, Osogbo</p>
                    <div style="display:flex; gap:14px;">
                        <a href="https://facebook.com/fuoweb" target="_blank" style="width:32px; height:32px; border-radius:50%; border:1px solid rgba(255,255,255,0.2); display:flex; align-items:center; justify-content:center; color:rgba(255,255,255,0.68); text-decoration:none;"><i class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com/fountain.university/" target="_blank" style="width:32px; height:32px; border-radius:50%; border:1px solid rgba(255,255,255,0.2); display:flex; align-items:center; justify-content:center; color:rgba(255,255,255,0.68); text-decoration:none;"><i class='bx bxl-instagram-alt'></i></a>
                        <a href="https://x.com/fuoweb" target="_blank" style="width:32px; height:32px; border-radius:50%; border:1px solid rgba(255,255,255,0.2); display:flex; align-items:center; justify-content:center; color:rgba(255,255,255,0.68); text-decoration:none;"><i class='bx bxl-twitter'></i></a>
                        <a href="https://ng.linkedin.com/school/fountain-university-osogbo/" target="_blank" style="width:32px; height:32px; border-radius:50%; border:1px solid rgba(255,255,255,0.2); display:flex; align-items:center; justify-content:center; color:rgba(255,255,255,0.68); text-decoration:none;"><i class='bx bxl-linkedin-square'></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->

        <div class="go-top active">
            <i class="bx bx-up-arrow-alt"></i>
        </div>


    </div>

    <!-- Links of JS files -->

    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}?v={{ $mainJsVersion }}"></script>
    <script>
    // On landing page, prevent navbar from becoming sticky
    if (document.querySelector('.fuo-redesign')) {
        // Remove sticky immediately and keep it off
        setInterval(function() {
            var navbar = document.querySelector('.navbar-area');
            if (navbar) {
                navbar.classList.remove('sticky');
                navbar.style.position = 'relative';
                navbar.style.zIndex = '500';
                navbar.style.top = 'auto';
            }
        }, 100);
    }
    </script>


</body>

</html>




