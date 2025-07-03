@extends('layouts.app')

@section('content')
 
 <!-- pick from this place -->
         
        <!-- Start Section Banner Area -->
        <div class="section-banner bg-9">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Undergraduate Programmes</h2>
                        <p data-aos="fade-up" data-aos-delay="200">Fountain University is more than just a place of learning; it's a place where dreams take flight, where ideas flourish, and where you'll find the support and resources to shape your future.</p>
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
                                    <li><a href="{{ route('undergradute-programme') }}">Overview</a></li>
                                    <li><a class="active" href="#">Undergraduate</a></li>
                                    <li><a href="{{ route('subdegree-programme') }}">Sub-Degree Programmes</a></li>
                                </ul>
                            </div>
                            <div class="ac-contact">
                                <span>Quick Links</span>
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="ac-overview">
                            <div class="pera-title">
                                <h2>Undergraduate Programs</h2>
                            </div>
                            <div class="pera-dec">
                                <p>From innovative programs in business, and computer science to dynamic studies in the arts, humanities, and social sciences, every course is designed to equip students with practical skills, critical thinking abilities, and global awareness. Whether you are starting your undergraduate journey or advancing through graduate studies, Fountain University is where your future begins.</p>
                               

                                {{-- start of department of Accounting & Finance --}}
                               <div class="problem-sector">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of Accounting & Finance</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Accounting</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Banking & Finance</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               {{-- end of department of accounting and finance --}}

                               {{-- start of department of arabic and islamic studies --}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of Arabic & Islamic Studies</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Arabic</a></li>
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
                               {{-- end of department of arabic and islamic studies --}}

                               {{-- start of department of Biological Sciences --}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of Biological Sciences</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Microbiology</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               {{-- end of department of Biological Sciences --}}

                               {{-- start of department of Business Administration --}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of Business Administration</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Business Administration</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               {{-- end of department of Business Administration --}}

                                {{-- start of department of Economics --}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of Economics</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Economics</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               {{-- end of department of Economics --}}

                               {{-- start of department of Environmental Health Sciences --}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of Environmental Health Sciences</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Environmental Health Science</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               {{-- end of department of Environmental Health Sciences --}}

                               {{-- start of department of History International Studies --}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of History International Studies</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc History International Studies</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               {{-- end of department of History International Studies --}}

                               {{-- start of department of Islamic Law --}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of Islamic Law</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">LLB. Common and Islamic Law</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               {{-- end of department of Islamic Law --}}

                               {{-- start of department of Mass Communication --}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of Mass Communication</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Mass Communication</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               {{-- end of department of Mass Communication --}}

                               {{-- start of department of Language & Linguistics --}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of Language & Linguistics</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc English Language</a></li>
                                                    <li><a href="#">B.Sc French Language</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Linguistics</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               {{-- end of department of Language & Linguistics --}}

                               {{-- start of department of Mathematical & Computer Sciences --}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of Mathematical & Computer Sciences</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Computer Science</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               {{-- end of department of Mathematical & Computer Sciences --}}

                               {{-- start of department of Medical Laboratory Science --}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of Medical Laboratory Science</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Medical Laboratory Science</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               {{-- end of department of Medical Laboratory Science --}}

                               {{-- start of department of Chemical Sciences --}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of Chemical Sciences</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Biochemistry and Nutrition</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Industrial & Environmental Chemistry</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               {{-- end of department of Chemical Sciences --}}

                               {{-- start of department of Nursing Sciences--}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of Nursing Science</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Nursing Science</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               {{-- end of department of Nursing Sciences --}}

                               {{-- start of Physics, Electronic & Earth Science--}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of Physics, Electronic & Earth Science</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Physics with Electronic</a></li>
                                                    <li><a href="#">B.Sc Electronic & Computing System</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Electronic & Communication</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                               </div>
                               {{-- end of Physics, Electronic & Earth Science --}}

                               {{-- start of department of Political Science --}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of Political Science</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Political Science</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               {{-- end of department of Political Science --}}

                               {{-- start of department of Public & International Law --}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of Public & International Law</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">LLB. Common Law</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               {{-- end of department of Public & International Law --}}

                               {{-- start of department of Public Administration --}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of Public Administration</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Public Administration</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               {{-- end of department of Public Administration --}}

                               {{-- start of department of Public Health --}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of Public Health</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Public Health</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               </div>
                               {{-- end of department of Public Health --}}

                               {{-- start of Physics, Electronic & Earth Science--}}
                               <div class="problem-sector py-4">
                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Department of Sociology & Criminology</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Sociology</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    <li><a href="#">B.Sc Criminology Security Studies</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                               </div>
                               {{-- end of Physics, Electronic & Earth Science --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Academics Section Area -->

@endsection