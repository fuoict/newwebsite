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
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Document Title</th>
                                                <th scope="col" class="text-center">Download</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Student Handbook</td>
                                                <td class="text-center">
                                                    <a href="https://shorturl.at/UjjdM" target="_blank" rel="noopener noreferrer" aria-label="Download Student Handbook">
                                                        <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;" alt="PDF icon">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>University Accommodation Rules</td>
                                                <td class="text-center">
                                                    <a href="https://shorturl.at/kw3Tl" target="_blank" rel="noopener noreferrer" aria-label="Download University Accommodation Rules">
                                                        <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;" alt="PDF icon">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Approved Dress Code for Students</td>
                                                <td class="text-center">
                                                    <a href="https://shorturl.at/lkOdB" target="_blank" rel="noopener noreferrer" aria-label="Download Approved Dress Code for Students">
                                                        <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;" alt="PDF icon">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>2026/2027 Student Admittance Slip New</td>
                                                <td class="text-center">
                                                    <a href="https://shorturl.at/rLHgr" target="_blank" rel="noopener noreferrer" aria-label="Download 2026/2027 Student Admittance Slip New">
                                                        <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;" alt="PDF icon">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>2026/2027 Fresh Students Entrance Form</td>
                                                <td class="text-center">
                                                    <a href="https://shorturl.at/4eHD2" target="_blank" rel="noopener noreferrer" aria-label="Download 2026/2027 Fresh Students Entrance Form">
                                                        <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;" alt="PDF icon">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>2026/2027 Returning Students Entrance Form</td>
                                                <td class="text-center">
                                                    <a href="https://shorturl.at/XoBoe" target="_blank" rel="noopener noreferrer" aria-label="Download 2026/2027 Returning Students Entrance Form">
                                                        <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;" alt="PDF icon">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>2026/2027 Extra Curricular Activities Clubs</td>
                                                <td class="text-center">
                                                    <a href="https://shorturl.at/WIezK" target="_blank" rel="noopener noreferrer" aria-label="Download 2026/2027 Extra Curricular Activities Clubs">
                                                        <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;" alt="PDF icon">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>NERD Compliance Clearance for 2025 Batch “C” NYSC Mobilization</td>
                                                <td class="text-center">
                                                    <a href="https://shorturl.at/NQE1O" target="_blank" rel="noopener noreferrer" aria-label="Download NERD Compliance Clearance for 2025 Batch C NYSC Mobilization">
                                                        <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;" alt="PDF icon">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Inter-University Transfer Form</td>
                                                <td class="text-center">
                                                    <a href="https://shorturl.at/r1EBb" target="_blank" rel="noopener noreferrer" aria-label="Download Inter-University Transfer Form">
                                                        <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;" alt="PDF icon">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Change of Degree Programme Form</td>
                                                <td class="text-center">
                                                    <a href="{{ URL::to('public/resources/Change-of-Course-form.pdf') }}" target="_blank" rel="noopener noreferrer" aria-label="Download Change of Degree Programme Form">
                                                        <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;" alt="PDF icon">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Offence and Punishment on Student Misconduct as Amended by Senate</td>
                                                <td class="text-center">
                                                    <a href="https://shorturl.at/f8HIW" target="_blank" rel="noopener noreferrer" aria-label="Download Offence and Punishment on Student Misconduct as Amended by Senate">
                                                        <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;" alt="PDF icon">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Sanctions for Proven Cases of Examination Malpractice</td>
                                                <td class="text-center">
                                                    <a href="https://shorturl.at/UKItm" target="_blank" rel="noopener noreferrer" aria-label="Download Sanctions for Proven Cases of Examination Malpractice">
                                                        <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;" alt="PDF icon">
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Academics Section Area -->

@endsection
