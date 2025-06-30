@extends('layouts.app')

@section('content')

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-12">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">{{ $Colleges->college_name }}</h2>
                        <p data-aos="fade-up" data-aos-delay="200">{{ $Colleges->description }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Banner Area -->

        <!-- End Blog Area -->
        <div class="blog-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details-desc">
                            {{-- <div class="article-image">
                                <img src="{{ asset('img/all-img/blog-details.png') }}" alt="image">
                            </div> --}}

                            <div class="article-content">
                                <h3>Welcome to the {{ $Colleges->college_name }}</h3>
                                <h4>{{ $Colleges->dean_speach_title }}</h4>
                                <p>{{ $Colleges->dean_speach_desc }}</p>

                                <hr>
                                {{-- <blockquote class="wp-block-quote">
                                    <p>About the College</p>
                                </blockquote> --}}

                                <h3>About the College</h3>
                                <p>{{ $Colleges->about_college }}</p>

                                <ul class="wp-block-gallery columns-2">
                                    <li class="blocks-gallery-item">
                                        <figure>
                                            <h4>Mission</h4>
                                            <p>{{ $Colleges->mission }}</p>
                                        </figure>
                                    </li>

                                    <li class="blocks-gallery-item">
                                        <figure>
                                            <h4>Vision</h4>
                                            <p>{{ $Colleges->vision }}</p>
                                        </figure>
                                    </li>
                                </ul>
                                
                                
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget-area">
                            {{-- <div class="widget widget-search">
                                <h3 class="widget-title">
                                    Search
                                </h3>
                                <form class="search-form">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search...">
                                    </label>
                                    <button type="submit"><i class='bx bx-search'></i></button>
                                </form>
                            </div> --}}
                            {{-- <div class="widget widget-catagories">
                                <h3 class="widget-title">
                                    Categories
                                </h3>
                                
                                <ul>
                                    <li><h3><a href="#">Admission</a></h3> <span>(6)</span></li>
                                    <li><h3><a href="#">Alumni</a></h3> <span>(11)</span></li>
                                    <li><h3><a href="#">Career</a></h3> <span>(9)</span></li>
                                    <li><h3><a href="#">Research</a></h3> <span>(12)</span></li>
                                    <li><h3><a href="#">Spotlight</a></h3> <span>(2)</span></li>
                                    <li><h3><a href="#">Student life</a></h3> <span>(5)</span></li>
                                    <li><h3><a href="#">Student story</a></h3> <span>(21)</span></li>
                                </ul>

                            </div> --}}
                            <div class="widget widget-banner">
                                <div class="blog-banner-content">
                                    <div class="title">Dean, {{ $Colleges->college_name }}</div>
                                    <div class="title">
                                        {{ $Colleges->dean_name }}
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="widget widget-tags">
                                <h3 class="widget-title">
                                    Popular Tags
                                </h3>
                                <ul>
                                    <li><a href="#">Activities</a></li>
                                    <li><a href="#">Alumni</a></li>
                                    <li><a href="#">Campus</a></li>
                                    <li><a href="#">Digital Learning</a></li>
                                    <li><a href="#">Education</a></li>
                                    <li><a href="#">Experience</a></li>
                                    <li><a href="#">International Learning</a></li>
                                    <li><a href="#">Business Life</a></li>
                                    <li><a href="#">Tuition Fee</a></li>
                                    <li><a href="#">Skill</a></li>
                                    <li><a href="#">Business Life</a></li>
                                    <li><a href="#">Undergraduate</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="problem-sector">

                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Our Departments</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                <ul>
                                                    {{-- <li><a href="{{ route('departments', $Colleges->id) }}">Business Media</a></li> --}}
                                                    @foreach ($Departments as $index => $Department)
                                                        <li><a href="{{ route('department', $Department->id) }}">{{ $Department->department_name }}</a></li>
                                                    @endforeach
                                                    {{-- <li><a href="#">Corporate Finance</a></li>
                                                    <li><a href="#">Business Administration</a></li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                            <div class="problem-items">
                                                {{-- <ul>
                                                    <li><a href="#">Business Ethics</a></li>
                                                    <li><a href="#">Marketing</a></li>
                                                    <li><a href="#">Accounting And Finance</a></li>
                                                </ul> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Area -->
@endsection