@extends('layouts.app')

@section('content')
 

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-14">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">General Downloads</h2>
                        <p data-aos="fade-up" data-aos-delay="200">Fountain University, Osogbo, Osun State, Nigeria.</p>
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
                                    <li><a href="{{ route('students-download') }}">Student Downloads</a></li>
                                    <li><a href="{{ route('staff-downloads') }}">Staff Downloads</a></li>
                                    <li><a class="active" href="#">General Downloads</a></li>
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
                                <h4>Appointment of Vice-Chancellor</h4>
                                <p>The Position of Vice-Chancellor will be Vacant from 1st March 2023 when the incumbent Vice-Chancellor would have completed his tenure. To fulfill the vacancy , the Governing Council of the University hereby invites applications from interested suitably qualified candidates who are able to match the requirements of our ideal prospect.</p>
                                <div class="number-list">
                                    <a href="{{ URL::to('public/resources/appointment-of-vc.pdf') }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                </div>
                               
                               <div class="program-points mt-4">
                                    <div class="single-point-list">
                                        <h4>Annual Report Fountain University (2019-2021)</h4>
                                        <p>The Academic Planning and Quality Assurance Unit sincerely appreciates the Proprietor, Board of Trustees, Council, the Vice-Chancellor, the Registrar, the Acting University Librarian, the University Bursar, Deans of Colleges/Schools, Heads & Coordinators of Departments, Directors/Coordinators of Departments/Units and Centres and the entire university community for their usual cooperation and support.</p>
                                        <a class="btn btn-success" href="{{ URL::to('public/resources/Annual-Report-Fountain-2019-2021.pdf') }}"> Click here to Download </a>
                                    </div>
                                    <div class="single-point-list mt-4">
                                        <h4>Annual Report Fountain University (2018-2019)</h4>
                                        <p>The Academic Planning and Quality Assurance Unit sincerely appreciates the Proprietor, Board of Trustees, Council, the Vice-Chancellor, the Registrar, the Acting University Librarian, the University Bursar, Deans of Colleges/Schools, Heads & Coordinators of Departments, Directors/Coordinators of Departments/Units and Centres and the entire university community for their usual cooperation and support.</p>
                                        <a class="btn btn-success" href="{{ URL::to('public/resources/2018-2019-Annual-Report-FU-1-1.pdf') }}"> Click here to Download </a>
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