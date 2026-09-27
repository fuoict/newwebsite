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
                                            <td>Appointment of Vice-Chancellor</td>
                                            <td class="text-center">
                                                <a href="{{ URL::to('public/resources/appointment-of-vc.pdf') }}" target="_blank" rel="noopener noreferrer" aria-label="Download Appointment of Vice-Chancellor">
                                                    <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;" alt="PDF icon">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Annual Report Fountain University (2019-2021)</td>
                                            <td class="text-center">
                                                <a href="{{ URL::to('public/resources/Annual-Report-Fountain-2019-2021.pdf') }}" target="_blank" rel="noopener noreferrer" aria-label="Download Annual Report Fountain University (2019-2021)">
                                                    <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;" alt="PDF icon">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Annual Report Fountain University (2018-2019)</td>
                                            <td class="text-center">
                                                <a href="{{ URL::to('public/resources/2018-2019-Annual-Report-FU-1-1.pdf') }}" target="_blank" rel="noopener noreferrer" aria-label="Download Annual Report Fountain University (2018-2019)">
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

