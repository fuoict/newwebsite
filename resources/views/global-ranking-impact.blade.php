@extends('layouts.app')

@section('content')

<section class="page-hero small-hero" style="background-image: url('{{ asset('img/gallery/vc2.jpeg') }}'); background-size: cover; background-position: center; padding: 80px 0;">
    <div class="container">
        <div class="section-title text-white">
            <h1>Global Ranking & Impact</h1>
            <p class="lead">Recognition, rankings and measurable societal impact — tracking our global standing and contributions to the Sustainable Development Goals (SDGs).</p>
        </div>
    </div>
</section>

<section class="ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-up">
                <h2>Rankings & Recognition</h2>
                <p>Fountain University is building international visibility through research excellence, graduate outcomes and institutional partnerships. Major recognition streams include:</p>
                <ul class="list-style">
                    <li><strong>Times Higher Education (THE):</strong> Institutional evaluations, subject-level performance and citations-based indicators.</li>
                    <li><strong>Faculty Individual Rankings:</strong> Recognition for high-impact researchers and outstanding faculty achievements across disciplines.</li>
                    <li><strong>Nigerian Rankings:</strong> National assessments for teaching quality, research output and graduate employability.</li>
                    <li><strong>Other Recognitions:</strong> Regional awards, subject league tables and specialist rankings (research clusters, sustainability, innovation).</li>
                </ul>
                <a href="{{ route('news.index') }}" class="default-btn">Read latest recognition</a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="{{ asset('img/gallery/basketball_court.jpg') }}" alt="University recognition" class="img-fluid rounded">
            </div>
        </div>

        <hr class="my-5">

        <div class="row">
            <div class="col-md-6" data-aos="fade-up">
                <h3>Times Higher Education</h3>
                <p>We monitor THE indicators — research influence, teaching environment, international outlook and industry income — and target steady year-on-year improvement.</p>
                <ul class="list-style">
                    <li>Research citations and collaborations driving subject visibility.</li>
                    <li>Improvements in teaching reputation and student-staff ratios.</li>
                    <li>International partnerships supporting exchange and joint publications.</li>
                </ul>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <h3>Faculty & Individual Rankings</h3>
                <p>Our faculty are increasingly visible in individual researcher rankings and subject-specific lists, reflecting high-impact publications, grants and policy influence.</p>
                <ul class="list-style">
                    <li>Support for high-performing researchers through seed funding and lab infrastructure.</li>
                    <li>Mentoring programmes to increase research productivity and citation impact.</li>
                </ul>
            </div>
        </div>

        <hr class="my-5">

        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <h3>National & Regional Rankings</h3>
                <p>Local accreditation, graduate outcomes and community relevance inform our standing in national rankings, with continuous improvement plans aligned to benchmarks.</p>
                <a href="{{ route('partnerships') }}" class="default-btn btn-style-2">Our partnerships</a>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <img src="{{ asset('img/gallery/vc2.jpeg') }}" alt="National ranking" class="img-fluid rounded">
            </div>
        </div>

        <hr class="my-5">

        <div class="row">
            <div class="col-lg-7" data-aos="fade-up">
                <h3>Impact — Sustainable Development Goals (SDGs)</h3>
                <p>Our research and community programmes are mapped to the SDGs. Key impact areas include:</p>
                <ul class="list-style">
                    <li><strong>SDG 3 (Good Health & Wellbeing):</strong> Health outreach, public health research and clinical partnerships.</li>
                    <li><strong>SDG 4 (Quality Education):</strong> Inclusive teaching, scholarships and capacity building for local communities.</li>
                    <li><strong>SDG 6 (Clean Water & Sanitation) & SDG 7 (Affordable Energy):</strong> Applied research projects and student-led engineering initiatives.</li>
                    <li><strong>SDG 13 (Climate Action):</strong> Campus sustainability, green campus projects and climate research outputs.</li>
                </ul>

                <h4 class="mt-4">Measuring impact</h4>
                <p>We track outputs (publications, policy briefs), outcomes (adoption by partners, community reach) and long-term outcomes (improved livelihoods, health indicators) to measure contribution to SDGs.</p>
            </div>
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Key metrics</h5>
                        <p class="mb-1"><strong>Publications:</strong> Increase in SDG-linked publications over 3 years</p>
                        <p class="mb-1"><strong>Community Projects:</strong> Number of outreach programmes and beneficiaries</p>
                        <a href="{{ route('news.index') }}" class="default-btn mt-3">See research highlights</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Get involved</h5>
                        <p class="small">Partner with us on research, sponsor projects or support student innovation challenges that address SDG problems.</p>
                        <a href="{{ route('partnerships') }}" class="read-more">Partner with us</a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-5">

        <div class="row">
            <div class="col-12 text-center" data-aos="fade-up">
                <h3>Recognition roadmap</h3>
                <p>We publish an annual report summarising ranking progress, SDG impact and strategic priorities — download the latest report from our resources page.</p>
                <a href="{{ route('annual-report') }}" class="default-btn">Download report</a>
            </div>
        </div>
    </div>
</section>

@endsection
