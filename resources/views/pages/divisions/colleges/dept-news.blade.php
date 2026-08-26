@extends('layouts.app')

@section('content')

<!-- Banner -->
<div class="section-banner bg-12">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100">News & Events</h2>
                <p data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('department', $department->slug) }}" style="color:#fff;text-decoration:underline">
                        {{ $department->department_name }}
                    </a>
                    &rsaquo; News
                </p>
            </div>
        </div>
    </div>
</div>

<!-- News Listing -->
<div class="blog-area ptb-100">
    <div class="container">
        <div class="row">
            @forelse($newsList as $item)
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('department.news.show', ['slug' => $department->slug, 'news' => $item->slug]) }}"
                   style="text-decoration:none;display:block;background:#fff;border-radius:10px;overflow:hidden;
                          box-shadow:0 3px 15px rgba(0,0,0,.08);height:100%;display:flex;flex-direction:column">
                    @if($item->image)
                    <div style="height:200px;overflow:hidden">
                        <img src="{{ $item->image_url }}" alt="{{ $item->title }}"
                             style="width:100%;height:100%;object-fit:cover">
                    </div>
                    @endif
                    <div style="padding:20px;flex:1;display:flex;flex-direction:column">
                        <p style="font-size:12px;color:#035F39;font-weight:600;text-transform:uppercase;margin-bottom:8px">
                            <i class='bx bxs-calendar'></i>
                            {{ $item->published_at ? $item->published_at->format('d M Y') : $item->created_at->format('d M Y') }}
                        </p>
                        <h4 style="font-size:16px;font-weight:700;line-height:1.4;flex:1;color:#222">
                            {{ $item->title }}
                        </h4>
                        @if($item->excerpt)
                        <p style="font-size:13px;color:#666;margin:10px 0">{{ Str::limit($item->excerpt, 100) }}</p>
                        @endif
                        <span style="font-size:13px;color:#035F39;font-weight:600;margin-top:auto">
                            Read More <i class='bx bx-right-arrow-alt'></i>
                        </span>
                    </div>
                </a>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <p class="text-muted">No news posted yet for this department.</p>
            </div>
            @endforelse
        </div>

        @if($newsList->hasPages())
        <div class="d-flex justify-content-center mt-4">
            {{ $newsList->links('pagination::bootstrap-5') }}
        </div>
        @endif
    </div>
</div>

@endsection
