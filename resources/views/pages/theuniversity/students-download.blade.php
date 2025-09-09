@extends('layouts.app')

@section('content')
 

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-14">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Student Downloads</h2>
                        <p data-aos="fade-up" data-aos-delay="200">All students are required to visit the Student Downloads portal regularly for access to updated handbooks, academic forms, guidelines, and other official documents.</p>
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
                                    <li><a class="active" href="#">Student Downloads</a></li>
                                    <li><a href="{{ route('staff-downloads') }}">Staff Downloads</a></li>
                                    <li><a href="{{ route('general-download') }}">General Downloads</a></li>
                                </ul>
                            </div>
                            <div class="ac-contact">
                                <span>Quick Links</span>
                                <a href="{{ route('contact') }}">Contact Us</a>
                                <a class="darkbtn" href="{{ route('about') }}">About</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ac-overview">
                            <div class="pera-dec">
                                {{-- <h4>INTER-UNIVERSITY TRANSFER FORM</h4>
                                <p>To be completed in Quadruplicate</p> --}}
                                 <div class="program-points mt-4">
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="{{ ('https://shorturl.at/r1EBb') }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>INTER-UNIVERSITY TRANSFER FORM</h4>
                                        <p>NOTE: (A student seeking transfer should ensure that he /she meets the entry requirements for the Department by obtaining clearance from the receiving HOD, Completed forms should be submitted to the Directorate of Academic Affairs).</p>
                                        <a class="btn btn-success" href="{{ ('https://shorturl.at/r1EBb') }}"> Click here to Download </a>
                                    </div>
                               </div>
                              
                                {{-- <div class="number-list">
                                    <a href="{{ URL::to('public/resources/INTER-UNIVERSITY-TRANSFER-FORM.pdf') }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                </div> --}}

                               <div class="program-points mt-4">
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="{{ URL::to('public/resources/Change-of-Course-form.pdf') }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>CHANGE OF DEGERE PROGRAMME FORM</h4>
                                        <p>NOTE: (A student seeking transfer should ensure that he /she meets the entry requirements for the Department by obtaining clearance from the receiving HOD, Completed forms should be submitted to the Directorate of Academic Affairs).</p>
                                        <a class="btn btn-success" href="{{ URL::to('public/resources/Change-of-Course-form.pdf') }}"> Click here to Download </a>
                                    </div>
                               </div> 
                               <div class="program-points mt-4">
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="{{ ('https://shorturl.at/f8HIW') }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>OFFENCE AND PUNISHMENT ON STUDENT MISCONDUCT AS AMMENDED BY SENATE</h4>
                                        <p>The Senate's amendments have clarified definitions of offences, 
                                            introduced stricter penalties, and streamlined the disciplinary process to 
                                            ensure fairness and deterrence. Punishments may range from warnings and suspension to expulsion, 
                                            depending on the gravity of the offence. 
                                            These amendments reflect the institution's commitment to upholding ethical 
                                            standards and fostering a safe and respectful learning environment for all students.</p>
                                        <a class="btn btn-success" href="{{ ('https://shorturl.at/f8HIW') }}"> Click here to Download </a>
                                    </div>
                               </div>
                                <div class="program-points mt-4">
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="{{ ('https://shorturl.at/UKItm') }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>SANCTIONS FOR PROVEN CASES OF EXAMINATION MALPRACTICE</h4>
                                        <p>The Senate has revised the rules on examination malpractice, 
                                            introducing clearer definitions and stricter penalties.
                                             Sanctions now range from warning and suspension to expulsion, depending on the seriousness of the offence. 
                                            These changes aim to promote fairness, discipline, and academic integrity.</p>
                                        <a class="btn btn-success" href="{{ ('https://shorturl.at/UKItm') }}"> Click here to Download </a>
                                    </div>
                               </div>
                                <div class="program-points mt-4">
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            <a href="{{ ('https://shorturl.at/PfbTH') }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                        </div>
                                        <h4>STUDENT HANDBOOK</h4>
                                        <p>Students are advised to familiarize themselves with the updated Student Handbook, which outlines approved rules, rights, responsibilities, and sanctions for misconduct as revised by the Senate.</p>
                                        <a class="btn btn-success" href="{{ ('https://shorturl.at/PfbTH') }}"> Click here to Download </a>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Academics Section Area -->

@endsection