@extends('layouts.app')

@section('content')
    <style>
        /* ── "Our Departments" image cards ── */
        .dept-card {
            display: flex;
            flex-direction: column;
            height: 100%;
            background: #fff;
            border: 1px solid #e7ece9;
            border-radius: 16px;
            overflow: hidden;
            text-decoration: none;
            box-shadow: 0 10px 26px rgba(8, 43, 26, 0.06);
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        }

        .dept-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 42px rgba(8, 43, 26, 0.14);
            border-color: rgba(3, 95, 57, 0.35);
            text-decoration: none;
        }

        .dept-card__img {
            position: relative;
            aspect-ratio: 16 / 10;
            background: linear-gradient(135deg, #0a7a4b 0%, #035f39 55%, #06301e 100%);
            overflow: hidden;
        }

        .dept-card__img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.45s ease;
        }

        .dept-card:hover .dept-card__img img { transform: scale(1.07); }

        .dept-card__fallback {
            position: absolute;
            inset: 0;
            display: grid;
            place-items: center;
            color: rgba(255, 255, 255, 0.85);
            font-size: 2.6rem;
        }

        .dept-card__body {
            padding: 16px 18px 18px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            flex: 1;
        }

        .dept-card__body h4 {
            margin: 0;
            font-size: 1rem;
            font-weight: 800;
            color: #082b1a;
            line-height: 1.45;
        }

        .dept-card__code {
            align-self: flex-start;
            background: #eef4f0;
            border: 1px solid #d8e6de;
            color: #0f3a26;
            font-size: 0.76rem;
            font-weight: 700;
            padding: 3px 10px;
            border-radius: 999px;
            letter-spacing: 0.5px;
        }

        .dept-card__link {
            margin-top: auto;
            font-size: 0.84rem;
            font-weight: 800;
            color: #035f39;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .dept-card:hover .dept-card__link { color: #0a7a4b; }

        @media print {
            .dept-card { box-shadow: none; break-inside: avoid; }
        }
    </style>

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
                            <div class="widget widget-banner text-center">
                                <div class="blog-banner-content mb-3">
                                    
                                    <div class="title" style="color: #000;">Dean, {{ $Colleges->college_name }}</div>
                                </div>
                                @if($Colleges->dean_image)
                                    <div class="mb-3">
                                        <img src="{{ asset('storage/'.$Colleges->dean_image) }}" alt="{{ $Colleges->dean_name }}" class="img-fluid rounded" style="max-width: 220px; height: auto; object-fit: cover; display: block; margin: 0 auto;">
                                    </div>
                                @endif
                                <div class="blog-banner-content">
                                    <div class="title" style="color: #000; font-size: 1rem; font-weight: 600; margin-top: 8px;">
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

                    <div class="col-lg-12">
                        <div class="problem-sector">

                                <div class="problem-list">
                                    <div class="title">
                                        <h3>Our Departments</h3>
                                    </div>
                                    <div class="row g-3">
                                        @forelse ($Departments as $Department)
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <a href="{{ route('department', $Department->slug) }}" class="dept-card" data-aos="fade-up">
                                                <div class="dept-card__img">
                                                    @if($Department->department_image)
                                                        <img src="{{ asset('storage/'.$Department->department_image) }}" alt="{{ $Department->department_name }}" loading="lazy">
                                                    @else
                                                        <span class="dept-card__fallback"><i class='bx bx-sitemap'></i></span>
                                                    @endif
                                                </div>
                                                <div class="dept-card__body">
                                                    <h4>{{ $Department->department_name }}</h4>
                                                    @if($Department->department_code)
                                                        <span class="dept-card__code">{{ $Department->department_code }}</span>
                                                    @endif
                                                    <span class="dept-card__link">View Department <i class='bx bx-right-arrow-alt'></i></span>
                                                </div>
                                            </a>
                                        </div>
                                        @empty
                                        <div class="col-12"><p class="text-muted mb-0">No departments have been listed for this college yet.</p></div>
                                        @endforelse
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