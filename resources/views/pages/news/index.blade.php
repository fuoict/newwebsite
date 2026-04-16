@extends('layouts.app')

@section('content')

<!-- Start Section Banner Area -->
<div class="section-banner bg-12">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100">News & Updates</h2>
                <p data-aos="fade-up" data-aos-delay="200">Stay informed with the latest news, events and announcements from Fountain University Osogbo.</p>
            </div>
        </div>
    </div>
</div>
<!-- End Section Banner Area -->

<!-- Start News Listing Area -->
<div class="blog-area ptb-100">
    <div class="container">

        {{-- Category Filter --}}
        <div class="d-flex flex-wrap gap-2 mb-4" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ route('news.index') }}"
               class="btn btn-sm {{ !request('category') ? 'btn-dark' : 'btn-outline-secondary' }}">
                All
            </a>
            @foreach($categories as $cat)
            <a href="{{ route('news.index', ['category' => $cat]) }}"
               class="btn btn-sm {{ request('category') == $cat ? 'btn-dark' : 'btn-outline-secondary' }}">
                {{ $cat }}
            </a>
            @endforeach
        </div>

        <div class="row">
            @forelse($newsList as $item)
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="blog-card" style="border-radius:10px; overflow:hidden; box-shadow:0 3px 15px rgba(0,0,0,.08); height:100%; display:flex; flex-direction:column;">
                    {{-- Image --}}
                    <div style="height:200px; overflow:hidden">
                        <img src="{{ $item->image_url }}"
                             alt="{{ $item->title }}"
                             style="width:100%; height:100%; object-fit:cover; transition:.3s"
                             onmouseover="this.style.transform='scale(1.05)'"
                             onmouseout="this.style.transform='scale(1)'">
                    </div>
                    {{-- Content --}}
                    <div style="padding:20px; flex:1; display:flex; flex-direction:column;">
                        <div class="sub-title mb-2">
                            <i class="{{ $item->icon }}"></i>
                            <span style="margin-left:6px; font-size:12px; color:#888; font-weight:600; text-transform:uppercase">
                                {{ $item->category }}
                            </span>
                        </div>
                        <h4 style="font-size:16px; font-weight:700; line-height:1.4; flex:1">
                            <a href="{{ route('news.show', $item->slug) }}" style="color:#222; text-decoration:none">
                                {{ $item->title }}
                            </a>
                        </h4>
                        @if($item->excerpt)
                        <p style="font-size:13px; color:#666; margin:10px 0">{{ Str::limit($item->excerpt, 100) }}</p>
                        @endif
                        @if($item->event_date_label)
                        <p style="font-size:12px; color:#999; margin-bottom:12px">
                            <i class='bx bxs-calendar'></i> {{ $item->event_date_label }}
                        </p>
                        @endif
                        <a href="{{ route('news.show', $item->slug) }}" class="btn btn-sm btn-dark mt-auto" style="align-self:flex-start">
                            Continue Reading <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <p class="text-muted">No news posts found.</p>
            </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        @if($newsList->hasPages())
        <div class="d-flex justify-content-center mt-4">
            {{ $newsList->appends(request()->query())->links() }}
        </div>
        @endif

    </div>
</div>
<!-- End News Listing Area -->

@endsection
