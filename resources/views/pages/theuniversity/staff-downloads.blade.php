@extends('layouts.app')

@section('content')
 

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-14">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Staff Downloads</h2>
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
                                    <li><a class="active" href="#">Staff Downloads</a></li>
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
                        {{-- <div class="ac-overview">
                            <div class="pera-dec">
                                <h4>Standing Orders of SENATE (Approved)</h4>
                                <p>This standing orders set out the procedures for the conduct of the Senate in discharging its obligation, powers and functions.</p>
                                <div class="number-list">
                                    <a href="{{ URL::to('public/resources/FUO-Senate-Standing-Order-July-2022.pdf') }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                </div>
                            </div>
                        </div> --}}
                    <div class="program-points mt-4">
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
                                        <td>Staff Personal Profile Data Form</td>
                                        <td class="text-center">
                                            <a href="https://shorturl.at/MiX8h" target="_blank" rel="noopener noreferrer" aria-label="Download Staff Personal Profile Data Form">
                                                <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;" alt="PDF icon">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2026 Promotion Circular</td>
                                        <td class="text-center">
                                            <a href="https://tinyurl.com/4rah3anw" target="_blank" rel="noopener noreferrer" aria-label="Download 2026 Promotion Circular">
                                                <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;" alt="PDF icon">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>2026 FUO Approved CV Format</td>
                                        <td class="text-center">
                                            <a href="https://tinyurl.com/y4asz6vs" target="_blank" rel="noopener noreferrer" aria-label="Download 2026 FUO Approved CV Format">
                                                <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;" alt="PDF icon">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>APER Form for Academic Staff</td>
                                        <td class="text-center">
                                            <a href="https://tinyurl.com/35tmu4z9" target="_blank" rel="noopener noreferrer" aria-label="Download APER Form for Academic Staff">
                                                <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;" alt="PDF icon">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>2026 FUO Approved CV Document Format</td>
                                        <td class="text-center">
                                            <a href="https://tinyurl.com/2s393cse" target="_blank" rel="noopener noreferrer" aria-label="Download 2026 FUO Approved CV Document Format">
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
        <!-- End Academics Section Area -->

@endsection