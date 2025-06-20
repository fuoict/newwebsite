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

        <!-- Start Navbar Area Start -->
        <div class="navbar-area style-2" id="navbar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.html">
                        <img class="logo-light" src="{{ asset('img/logo/fuo-logo.png') }}" alt="logo">
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
                            {{-- <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link active">
                                    Home
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="index.html" class="nav-link">Home One</a></li>
                                    <li class="nav-item"><a href="index2.html" class="nav-link active">Home Two</a></li>
                                    <li class="nav-item"><a href="index3.html" class="nav-link">Home Three</a></li>
                                </ul>
                            </li> --}}
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                    The University
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="about-us.html" class="nav-link">About Board of Trustees</a></li>
                                    <li class="nav-item">
                                        <a href="news-and-blog.html" class="nav-link sub-menu">University Board of Trustees</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="blog.html" class="nav-link">About Board of Trustees</a></li>
                                            <li class="nav-item"><a href="blog-details.html" class="nav-link">Profile of Members of FUO BOT</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">Governing Council</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="blog.html" class="nav-link">About Board of Trustees</a></li>
                                            <li class="nav-item"><a href="blog-details.html" class="nav-link">Directory of Council</a></li>
                                            <li class="nav-item"><a href="blog-details.html" class="nav-link">Profile of Members of Council</a></li>
                                            <li class="nav-item"><a href="blog-details.html" class="nav-link">Decision Extracts</a></li>
                                            <li class="nav-item"><a href="blog-details.html" class="nav-link">Committees of Council</a></li>
                                            <li class="nav-item"><a href="blog-details.html" class="nav-link">Schedule of Meetings</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a href="alumni.html" class="nav-link">The Senate</a></li>
                                    <li class="nav-item"><a href="alumni.html" class="nav-link">Congragation</a></li>
                                    <li class="nav-item">
                                        <a href="alumni.html" class="nav-link">Administration</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="blog.html" class="nav-link">The Vice-Chancellor </a></li>
                                            <li class="nav-item"><a href="blog-details.html" class="nav-link">The Registrar</a></li>
                                            <li class="nav-item"><a href="blog-details.html" class="nav-link">The Bursar</a></li>
                                            <li class="nav-item"><a href="blog-details.html" class="nav-link">The Librarian</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a href="alumni.html" class="nav-link">Our Campus</a></li>
                                    <li class="nav-item"><a href="alumni.html" class="nav-link">Our Gallery</a></li>
                                    <li class="nav-item"><a href="alumni.html" class="nav-link">Staff Downloads</a></li>
                                    <li class="nav-item">
                                        <a href="alumni.html" class="nav-link">Resources</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="blog.html" class="nav-link">General Downloads </a></li>
                                            <li class="nav-item"><a href="blog-details.html" class="nav-link">Students' Downloads</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                    Academics
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="academics.html" class="nav-link">Academics</a></li>
                                    <li class="nav-item"><a href="undergraduate.html" class="nav-link">Undergraduate</a></li>
                                    <li class="nav-item"><a href="graduate.html" class="nav-link">Graduate</a></li>
                                    <li class="nav-item"><a href="online-education.html" class="nav-link">Online Education</a></li>
                                    <li class="nav-item"><a href="faculty.html" class="nav-link">Faculty</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                    Admissions
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="admission.html" class="nav-link">Admissions</a></li>
                                    <li class="nav-item"><a href="how-to-apply.html" class="nav-link">How to Apply</a></li>
                                    <li class="nav-item"><a href="tuition-fees.html" class="nav-link">Tuition & Fees</a></li>
                                    <li class="nav-item"><a href="financial-aid.html" class="nav-link">Financial Aid</a></li>
                                    <li class="nav-item"><a href="date-deadlines.html" class="nav-link">Date & Deadlines</a></li>
                                    <li class="nav-item"><a href="schedule-tour.html" class="nav-link">Schedule a Tour</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                    Colleges & Centres
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="courses.html" class="nav-link">Courses Sidebar</a></li>
                                    <li class="nav-item"><a href="courses-details.html" class="nav-link">Course Details</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                    University Life
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="university-life.html" class="nav-link">University Life</a></li>
                                    <li class="nav-item"><a href="the-campus-experience.html" class="nav-link">The Campus Experience</a></li>
                                    <li class="nav-item"><a href="fitness-athletics.html" class="nav-link">Fitness & Athletics</a></li>
                                    <li class="nav-item"><a href="support-guidance.html" class="nav-link">Support & Guidance</a></li>
                                    <li class="nav-item"><a href="student-activities.html" class="nav-link">Student Activities</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="contact-us.html" class="nav-link">
                                    Contact
                                </a>
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

        @yield('content')
        <!-- Links of JS files -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>

