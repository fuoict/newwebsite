@extends('layouts.app')

@section('meta_title', 'Campus Life — Fountain University, Osogbo')
@section('meta_description', 'Discover campus life at Fountain University — student clubs, housing, sports, recreation, events and community. A vibrant community learning, living and growing together.')
@section('meta_image', asset('img/gallery/basketball_court.jpg'))

@section('content')

<section class="page-hero small-hero" style="background-image: url('{{ asset('img/gallery/basketball_court.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0;">
    <div class="container">
        <div class="section-title text-white">
            <h1>Campus Life</h1>
            <p class="lead">A vibrant community — learning, living and growing together.</p>
        </div>
    </div>
</section>

<section class="ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-up">
                <h2>Life on Campus</h2>
                <p>Fountain University offers a welcoming campus with facilities that support academic success, faith formation, and student wellbeing. From organised student groups to sports and cultural activities, there are many ways to get involved and belong.</p>
                <ul class="list-style">
                    <li>Clubs and Societies for academic and personal interests</li>
                    <li>On-campus housing with supportive residential life staff</li>
                    <li>Sports, fitness and recreation programmes</li>
                    <li>Student support services: counselling, health and career guidance</li>
                </ul>
                <a href="{{ route('student-affairs') }}" class="default-btn">Student Affairs</a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="{{ asset('img/gallery/basketball_court.jpg') }}" alt="Students on campus" class="img-fluid rounded" loading="lazy" width="516" height="387">
            </div>
        </div>

        <hr class="my-5">

        <div class="row">
            <div class="col-md-4" data-aos="fade-up">
                <div class="feature-box">
                    <img src="{{ asset('img/icon/features-icon-1.png') }}" alt="" role="presentation" style="width:48px;" loading="lazy" width="48" height="48">
                    <h4>Student Life</h4>
                    <p>Clubs, societies and faith groups that create connection and leadership opportunities.</p>
                    <a href="{{ route('student-affairs') }}" class="read-more">Learn more</a>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-box">
                    <img src="{{ asset('img/icon/features-icon-2.png') }}" alt="" role="presentation" style="width:48px;" loading="lazy" width="48" height="48">
                    <h4>Housing & Residences</h4>
                    <p>Safe, supervised halls with programming that supports academic and personal growth.</p>
                    <a href="#" class="read-more">Housing options</a>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box">
                    <img src="{{ asset('img/icon/reading-2.png') }}" alt="" role="presentation" style="width:48px;" loading="lazy" width="48" height="48">
                    <h4>Dining & Food</h4>
                    <p>Multiple dining outlets offering affordable meals and special-diet options.</p>
                    <a href="#" class="read-more">Dining services</a>
                </div>
            </div>
        </div>

        <hr class="my-5">

        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <h3>Sports & Recreation</h3>
                <p>Our sports unit organises competitive teams and recreational activities — from football to athletics and fitness classes.</p>
                <a href="{{ route('sports') }}" class="default-btn btn-style-2">Explore sports</a>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <img src="{{ asset('img/gallery/basketball_court.jpg') }}" alt="Sports on campus" class="img-fluid rounded" loading="lazy" width="516" height="387">
            </div>
        </div>

        <hr class="my-5">

        <div class="row">
            <div class="col-lg-7" data-aos="fade-up">
                <h3>Events & Calendar</h3>
                <p>From convocation to guest lectures and cultural nights, our events calendar is full. Subscribe to campus updates to never miss an opportunity.</p>
                <ul class="list-style">
                    <li>Convocations and public lectures</li>
                    <li>Community service days and outreach</li>
                    <li>Career fairs and employer panels</li>
                </ul>

                <h4 class="mt-4">Clubs & Societies</h4>
                <p>Explore student-run groups that span faith, academics, arts, sports and community service.</p>
                <ul class="list-style">
                    <li>Student Government Association</li>
                    <li>Debate & Literary Society</li>
                    <li>Environmental & Outreach Club</li>
                    <li>Faith and Cultural Societies</li>
                    <li>Tech & Innovation Club</li>
                </ul>
            </div>
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Upcoming</h5>
                        <p class="mb-1"><strong>Convocation</strong><br><small>10 December 2026</small></p>
                        <p class="mb-1"><strong>Career Fair</strong><br><small>18 November 2026</small></p>
                        <a href="{{ route('news.index') }}" class="default-btn mt-3">See all events</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Campus Map</h5>
                        <p class="small">Quick map showing main teaching blocks, library and student services.</p>
                        <img src="{{ asset('img/gallery/vc2.jpeg') }}" alt="Campus map" class="img-fluid rounded mb-2" loading="lazy" width="400" height="300">
                        <a href="{{ route('our-campus') }}" class="read-more">View campus map</a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-5">

        <div class="row">
            <div class="col-12 text-center" data-aos="fade-up">
                <h3>Get Involved</h3>
                <p>Find a club, volunteer for an event, or join a leadership programme — campus life is what you make it.</p>
                <a href="{{ route('student-affairs') }}" class="default-btn">Join a club</a>
            </div>
        </div>
    </div>
</section>

@endsection
