@extends('layouts.app')

@section('content')
    <style>
        /* ── Governing Council members (shared bot- card component) ── */
        .bot-members {
            margin: 10px auto 0;
            padding-bottom: 70px;
        }

        .bot-members-head {
            text-align: center;
            margin-bottom: 36px;
        }

        .bot-eyebrow {
            display: inline-block;
            background: #eef4f0;
            border: 1px solid #d8e6de;
            color: #0f3a26;
            font-size: 0.76rem;
            font-weight: 700;
            letter-spacing: 1.6px;
            text-transform: uppercase;
            padding: 6px 16px;
            border-radius: 999px;
            margin-bottom: 14px;
        }

        .bot-members-head h2 {
            font-size: clamp(1.6rem, 3.2vw, 2.3rem);
            font-weight: 800;
            color: #082b1a;
            margin: 0;
            position: relative;
            display: inline-block;
        }

        .bot-members-head h2::after {
            content: "";
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -12px;
            width: 68px;
            height: 4px;
            border-radius: 4px;
            background: linear-gradient(90deg, #c9a227, #0a7a4b);
        }

        .bot-members-head .bot-lead {
            max-width: 760px;
            margin: 24px auto 0;
            color: #5a6b62;
            line-height: 1.8;
            font-size: 1rem;
        }

        .bot-stats {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-top: 22px;
        }

        .bot-stats span {
            background: #fff;
            border: 1px solid #e0e9e4;
            border-radius: 999px;
            padding: 8px 18px;
            font-size: 0.86rem;
            font-weight: 600;
            color: #3c4a43;
            box-shadow: 0 6px 16px rgba(8, 43, 26, 0.05);
        }

        .bot-stats span strong { color: #035f39; font-weight: 800; }

        .bot-card {
            display: flex;
            flex-direction: column;
            height: 100%;
            background: #fff;
            border: 1px solid #e7ece9;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(8, 43, 26, 0.06);
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        }

        .bot-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 22px 46px rgba(8, 43, 26, 0.14);
            border-color: rgba(3, 95, 57, 0.35);
        }

        .bot-photo {
            position: relative;
            aspect-ratio: 4 / 5;
            min-height: 230px;
            background: linear-gradient(150deg, #0a7a4b 0%, #035f39 55%, #06301e 100%);
            overflow: hidden;
        }

        .bot-initials {
            position: absolute;
            inset: 0;
            display: grid;
            place-items: center;
            font-size: clamp(2.4rem, 5vw, 3.2rem);
            font-weight: 800;
            letter-spacing: 2px;
            color: rgba(255, 255, 255, 0.85);
            text-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
            z-index: 1;
            user-select: none;
        }

        .bot-photo img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            z-index: 2;
            transition: transform 0.45s ease;
        }

        .bot-card:hover .bot-photo img { transform: scale(1.07); }

        .bot-photo::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 3;
            background: linear-gradient(to top, rgba(6, 48, 30, 0.5) 0%, rgba(6, 48, 30, 0) 40%);
            pointer-events: none;
        }

        .bot-index {
            position: absolute;
            top: 12px;
            right: 12px;
            z-index: 4;
            width: 34px;
            height: 34px;
            border-radius: 10px;
            display: grid;
            place-items: center;
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.35);
            backdrop-filter: blur(4px);
            color: #fff;
            font-size: 0.78rem;
            font-weight: 800;
        }

        .bot-info {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            padding: 16px 14px 18px;
            text-align: center;
        }

        .bot-info h4 {
            margin: 0;
            font-size: 0.97rem;
            font-weight: 800;
            color: #082b1a;
            line-height: 1.5;
        }

        .bot-role {
            margin-top: auto;
            display: inline-block;
            max-width: 100%;
            padding: 5px 14px;
            border-radius: 999px;
            font-size: 0.72rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            line-height: 1.5;
            background: #eef4f0;
            color: #0f3a26;
            border: 1px solid #d8e6de;
        }

        .bot-card--chairman {
            border-color: rgba(201, 162, 39, 0.65);
            box-shadow: 0 12px 32px rgba(201, 162, 39, 0.18);
        }

        .bot-card--chairman .bot-role {
            background: linear-gradient(135deg, #d9b23c, #c9a227);
            color: #241f04;
            border-color: transparent;
        }

        .bot-card--secretary { border-color: rgba(3, 95, 57, 0.45); }

        .bot-card--secretary .bot-role {
            background: #035f39;
            color: #fff;
            border-color: transparent;
        }

        @media (max-width: 576px) {
            .bot-info h4 { font-size: 0.92rem; }
        }

        @media print {
            .section-banner, footer, nav { display: none !important; }
            .bot-card { box-shadow: none; break-inside: avoid; }
        }
    </style>
         <!-- Start Section Banner Area -->
        <div class="section-banner bg-14">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Governing Council</h2>
                        {{-- <p data-aos="fade-up" data-aos-delay="200">Get Started with Access to Issues of Fountain Chronicles</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Banner Area -->
                        <div class="container">
                    <div class="section-title" data-aos="fade-up" data-aos-delay="100" style="text-align: left"><br>
                                <p>The Governing Council of Fountain University serves as the principal governing body responsible 
                                    for overseeing the university’s policies, academic standards, and administrative affairs, 
                                    under the guidance of the Board of Trustees.
                                </p>
                                <p>Made up of accomplished professionals and academics, the Council ensures that 
                                    the university operates in line with its mission and values, 
                                    promoting excellence in education, research, and service to the community.</p>
                    </div>

                    <!-- Start Members of the Council -->
                    <div class="bot-members">
                        <div class="bot-members-head" data-aos="fade-up">
                            <span class="bot-eyebrow">University Governance</span>
                            <h2>Members of the Council</h2>
                            <p class="bot-lead">Distinguished academics, professionals and representatives who oversee the University's policies, academic standards and administrative affairs, under the guidance of the Board of Trustees.</p>
                            <div class="bot-stats">
                                <span><strong>{{ $members->count() }}</strong> Members</span>
                                <span>Guided by the <strong>Board of Trustees</strong></span>
                                <span><strong>Fountain University</strong>, Osogbo</span>
                            </div>
                        </div>

                        <div class="row bot-grid">

                            @foreach ($members as $index => $member)
                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="bot-card {{ $member->badge() ? 'bot-card--' . $member->badge() : '' }}" data-aos="fade-up" data-aos-delay="{{ ($index % 4) * 80 }}">
                                    <div class="bot-photo">
                                        <span class="bot-initials">{{ $member->initials }}</span>
                                        @if($member->photoUrl())
                                        <img src="{{ $member->photoUrl() }}" alt="{{ $member->name }}" loading="lazy" onerror="this.style.display='none'">
                                        @endif
                                        <span class="bot-index">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                    </div>
                                    <div class="bot-info">
                                        <h4>{{ $member->name }}</h4>
                                        <span class="bot-role">{{ $member->role }}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
@endsection