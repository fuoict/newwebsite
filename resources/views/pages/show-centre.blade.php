@extends('layouts.app')
@section('title', $page->meta_title ?? $page->title)

@section('content')
    <div class="section-banner bg-1">
        <div class="container">
            <div class="banner-spacing">
                <div class="section-info">
                    <h2 data-aos="fade-up" data-aos-delay="100">{{ $page->hero_title ?? $page->title }}</h2>
                    @if($page->hero_subtitle)
                        <p class="text-white-50 mb-0">{{ $page->hero_subtitle }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="academics-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="academics-left">
                        <div class="ac-category">
                            <ul>
                                <li><img src="" alt=""></li>
                                <li><a class="{{ request()->routeIs('consultancy') ? 'active' : '' }}" href="{{ route('consultancy') }}">Overview</a></li>
                                <li><a class="{{ request()->routeIs('our-campus') ? 'active' : '' }}" href="{{ route('our-campus') }}">The Campus Experience</a></li>
                                <li><a class="{{ request()->routeIs('sports') ? 'active' : '' }}" href="{{ route('sports') }}">Sport</a></li>
                                <li><a class="{{ request()->routeIs('counselling') ? 'active' : '' }}" href="{{ route('counselling') }}">Counseling and Guidance</a></li>
                                <li><a class="{{ request()->routeIs('entrepreneurship') ? 'active' : '' }}" href="{{ route('entrepreneurship') }}">Entrepreneurship</a></li>
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
                            @if(trim($page->content) !== '')
                                {!! $page->content !!}
                            @else
                                <p class="text-muted">This page is managed from the CMS. Add content via the admin editor to replace the default page text.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
