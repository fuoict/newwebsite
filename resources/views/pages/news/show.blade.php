@extends('layouts.app')

@section('content')

<!-- Start Section Banner Area -->
<div class="section-banner bg-12">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100">{{ $news->title }}</h2>
                <p data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('news.index') }}" style="color:#fff; text-decoration:underline">News & Updates</a>
                    &rsaquo; {{ $news->category }}
                </p>
            </div>
        </div>
    </div>
</div>
<!-- End Section Banner Area -->

<!-- Start Blog Detail Area -->
<div class="blog-area ptb-100">
    <div class="container">
        <div class="row">

            {{-- Main Article --}}
            <div class="col-lg-8">
                <div class="blog-details-desc">

                    {{-- Featured Image --}}
                    @if($news->image)
                    <div class="article-image mb-4">
                        <img src="{{ $news->image_url }}" alt="{{ $news->title }}"
                             style="width:100%; border-radius:10px; max-height:400px; object-fit:cover">
                    </div>
                    @endif

                    <div class="article-content">
                        {{-- Meta --}}
                        <div class="d-flex flex-wrap align-items-center gap-3 mb-3" style="font-size:13px; color:#888">
                            <span><i class="{{ $news->icon }}"></i> {{ $news->category }}</span>
                            @if($news->event_date_label)
                            <span><i class='bx bxs-calendar'></i> {{ $news->event_date_label }}</span>
                            @endif
                            @if($news->published_at)
                            <span><i class='bx bx-time'></i> {{ $news->published_at->format('d F Y') }}</span>
                            @endif
                        </div>

                        <h2>{{ $news->title }}</h2>

                        @if($news->excerpt)
                        <p class="lead" style="color:#555; font-style:italic; border-left:4px solid #0f3460; padding-left:16px; margin:20px 0">
                            {{ $news->excerpt }}
                        </p>
                        @endif

                        {{-- Body content —  preserves line breaks --}}
                        @if($news->body)
                        <div style="line-height:1.9; color:#444">
                            {!! nl2br(e($news->body)) !!}
                        </div>
                        @endif
                    </div>

                    {{-- Back button --}}
                    <div class="mt-5 pt-3" style="border-top:1px solid #eee">
                        <a href="{{ route('news.index') }}" class="btn" style="background:#0f3460; color:#fff">
                            <i class='bx bx-arrow-back me-1'></i> Back to All News
                        </a>
                    </div>
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="col-lg-4">

                {{-- Related News --}}
                @if($related->count())
                <div class="widget-area mb-4">
                    <div class="widget" style="background:#fff; border-radius:10px; padding:24px; box-shadow:0 2px 10px rgba(0,0,0,.07)">
                        <h5 style="font-weight:700; margin-bottom:16px; padding-bottom:10px; border-bottom:2px solid #0f3460">
                            Related News
                        </h5>
                        @foreach($related as $item)
                        <div class="d-flex gap-3 mb-3" style="padding-bottom:12px; border-bottom:1px solid #f0f0f0">
                            @if($item->image)
                            <img src="{{ $item->image_url }}" alt="{{ $item->title }}"
                                 style="width:60px; height:50px; object-fit:cover; border-radius:6px; flex-shrink:0">
                            @endif
                            <div>
                                <a href="{{ route('news.show', $item->slug) }}"
                                   style="font-size:13px; font-weight:600; color:#222; text-decoration:none; line-height:1.3; display:block">
                                    {{ Str::limit($item->title, 70) }}
                                </a>
                                @if($item->event_date_label)
                                <small style="color:#999"><i class='bx bxs-calendar'></i> {{ $item->event_date_label }}</small>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- All News Link --}}
                <div class="widget" style="background:#0f3460; border-radius:10px; padding:24px; color:#fff; text-align:center">
                    <i class='bx bxs-news' style="font-size:36px; margin-bottom:10px; display:block"></i>
                    <h6 style="font-weight:700; margin-bottom:8px">More Campus News</h6>
                    <p style="font-size:13px; opacity:.8; margin-bottom:16px">Fountain University Leads, Others Follow.</p>
                    <a href="{{ route('news.index') }}" class="btn btn-sm btn-light">
                        View All News <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Blog Detail Area -->

@endsection
