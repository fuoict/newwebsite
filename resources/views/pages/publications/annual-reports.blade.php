@extends('layouts.app')

@section('content')
         <!-- Start Section Banner Area -->
        <div class="section-banner bg-14">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Annual Reports</h2>
                        <p data-aos="fade-up" data-aos-delay="200">Get Started with Access to our Annual Reports</p>
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
                                    <li><a href="{{ route('fuo-chronicles') }}">Overview</a></li>
                                    <li><a href="{{ route('inaugural-lectures') }}">Inaugural Lectures</a></li>
                                    <li><a href="{{ 'https://fountainjournals.com' }}">Fountain Journals</a></li>
                                    <li><a class="active" href="#">Annual Report</a></li>
                                    <li><a href="{{ route('fuo-chronicles') }}">Fountain Chronicles</a></li>
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
                                <p>Fountain Annual Reports is a yearly bulletin that captures the latest informations and events from Fountain University. Dive in and enjoy the latest informations!</p>
                               
                               <div class="program-points">
                                    @forelse($downloads as $download)
                                    <div class="single-point-list">
                                        <div class="number-list">
                                            @if($download->publicUrl())
                                            <a href="{{ $download->publicUrl() }}" target="_blank" rel="noopener noreferrer" aria-label="Download {{ $download->title }}"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width: 7%" alt=""></a>
                                            @else
                                            <span style="display:inline-block;width:7%;min-width:32px;opacity:.35"><img src="{{ asset('img/icon/pdf.jpg') }}" class="img-res" style="width:100%" alt=""></span>
                                            @endif
                                        </div>
                                        <h4>{{ $download->title }}</h4>
                                        @unless($download->publicUrl())
                                        <span class="badge bg-secondary" style="font-size:11px">Coming soon</span>
                                        @endunless
                                    </div>
                                    @empty
                                    <p class="text-muted">No annual reports published yet.</p>
                                    @endforelse
                                    
                               </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Academics Section Area -->
@endsection