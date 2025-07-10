@extends('layouts.app')

@section('content')
    <!-- pick from this place -->

    <!-- Start Section Banner Area -->
    <div class="section-banner bg-9">
        <div class="container">
            <div class="banner-spacing">
                <div class="section-info">
                    <h2 data-aos="fade-up" data-aos-delay="100">Postgraduate Programmes</h2>
                    <p data-aos="fade-up" data-aos-delay="200">Fountain University is more than just a place of learning; it's
                        a place where dreams take flight, where ideas flourish, and where you'll find the support and
                        resources to shape your future.</p>
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
                            <p>From innovative programs in business, and computer science to dynamic studies in the arts,
                                humanities, and social sciences, every course is designed to equip students with practical
                                skills, critical thinking abilities, and global awareness. Whether you are starting your
                                undergraduate journey or advancing through graduate studies, Fountain University is where
                                your future begins.</p>
                            {{-- another aspect to use --}}

                            <div class="academics-area bg-color-1 ptb-100">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="100">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Postgraduate Diploma</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="academics-item active" data-aos="fade-up" data-aos-delay="200">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Masters Academics</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>Masters Professional</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>MPhil</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>MPhil/PhD</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6 col-md-6">
                                            <div class="academics-item" data-aos="fade-up" data-aos-delay="300">
                                                <img src="{{ asset('img/icon/education-1.png') }}" alt="icon">
                                                <h4>PhD</h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{-- another aspect to use --}}
                        </div>
                    </div>

                </div>
                <div class="py-5">
                    {{-- start of PGD--}}
                    <div class="problem-sector">
                        <div class="problem-list">
                            <div class="title">
                                <h3>Postgraduate Diploma</h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">PGD Biochemistry</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">PGD Computer Science</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">PGD Business Administration</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">PGD Accounting</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">PGD Physics with Electronics</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">PGD Business Administration</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">PGD Accounting</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">PGD Physical Chemistry </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end of PGD --}}

                    {{-- start of Master Academics --}}
                    <div class="problem-sector py-4">
                        <div class="problem-list">
                            <div class="title">
                                <h3>Masters Academics</h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">MSc. Computer Science</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">MSc Public Administration (M.Sc Pub Admin)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">MSc Political Science</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">MSc Accounting</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">MSc Business Administration</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">MSc Sociology</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Master of Applied Ecnomics (M.A.E)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Master Economics</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">MSc. Mass Communication</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">MSc. Organic Chemistry</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">MSc. Industrial Chemistry</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">MSc. Analytical Chemistry</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">MSc. Biochmistry</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">MSc. Physical Chemistry</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end of Master Academics --}}
                    {{-- start of Master Professional --}}
                    <div class="problem-sector py-4">
                        <div class="problem-list">
                            <div class="title">
                                <h3>Masters Professional</h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Masters of Public Administration (MPA) Professional</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">B.Sc Islmaic Studies</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end of Master Professional --}}

                    {{-- start of MPhil --}}
                    <div class="problem-sector py-4">
                        <div class="problem-list">
                            <div class="title">
                                <h3>MPhil</h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">M.Phil </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">B.Sc Islmaic Studies</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end of MPhil --}}
                    {{-- start of MPhil/PhD --}}
                    <div class="problem-sector py-4">
                        <div class="problem-list">
                            <div class="title">
                                <h3>MPhil/PhD</h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">M.Phil./Ph.D. Political Science</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">M.Phil./Ph.D. Accounting</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">M.Phil./Ph.D. Microbiology</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">M.Phil./Ph.D. Business Administration</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">M.Phil./Ph.D. Sociology</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">M.Phil./Ph.D. Economics</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">M.Phil./Ph.D. Mass Communication</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">M.Phil./Ph.D. Organic Chemistry</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">M.Phil./Ph.D. Industrial Chemistry</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">M.Phil./Ph.D. Analytical Chemistry</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">M.Phil./Ph.D. Biochemistry</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">M.Phil./Ph.D. Computer Science</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">M.Phil./Ph.D. Physical Chemistry</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    {{-- end of MPhil/PhD --}}
                    {{-- start of PhD --}}
                    <div class="problem-sector py-4">
                        <div class="problem-list">
                            <div class="title">
                                <h3>PhD</h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Ph.D. Public Admin</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Ph.D. Political Science</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Ph.D. Accounting</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Ph.D. Microbiology</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Ph.D. Business Administration</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Ph.D. Sociology</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Ph.D. Economics</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Ph.D. Mass Communication</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Ph.D. Organic Chemistry</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Ph.D. Analytical Chemistry</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Ph.D. Biochemistry</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6">
                                    <div class="problem-items">
                                        <ul>
                                            <li><a href="#">Ph.D. Computer Science</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end of PhD --}}
                </div>

            </div>
        </div>
    </div>
    <!-- End Academics Section Area -->
@endsection
