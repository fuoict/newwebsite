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
                                            @forelse($downloads as $index => $download)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $download->title }}</td>
                                                <td class="text-center">
                                                    <a href="{{ $download->publicUrl() }}" target="_blank" rel="noopener noreferrer" aria-label="Download {{ $download->title }}">
                                                        <img src="{{ asset('img/icon/pdf.jpg') }}" class="img-fluid" style="width: 28px;" alt="PDF icon">
                                                    </a>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr><td colspan="3" class="text-center text-muted py-4">No documents available yet.</td></tr>
                                            @endforelse
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
