@extends('layouts.app')

@section('content')

<!-- Banner -->
<div class="section-banner bg-12">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100">{{ $news->title }}</h2>
                <p data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('department', $department->slug) }}" style="color:#fff;text-decoration:underline">
                        {{ $department->department_name }}
                    </a>
                    &rsaquo;
                    <a href="{{ route('department.news', $department->slug) }}" style="color:#fff;text-decoration:underline">
                        News
                    </a>
                    &rsaquo; Detail
                </p>
            </div>
        </div>
    </div>
</div>

<!-- News Detail -->
<div class="ptb-100">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <article style="background:#fff;border-radius:16px;padding:28px;box-shadow:0 4px 24px rgba(0,0,0,.08)">
                    @if($news->image)
                    <div style="border-radius:12px;overflow:hidden;margin-bottom:24px">
                        <img src="{{ $news->image_url }}" alt="{{ $news->title }}"
                             style="width:100%;max-height:400px;object-fit:cover">
                    </div>
                    @endif

                    <p style="font-size:13px;color:#035F39;font-weight:600;margin-bottom:12px;text-transform:uppercase">
                        <i class='bx bxs-calendar'></i>
                        {{ $news->published_at ? $news->published_at->format('d M Y') : $news->created_at->format('d M Y') }}
                    </p>

                    <div style="line-height:1.9;color:#444;font-size:15px">
                        {!! nl2br(e($news->body)) !!}
                    </div>
                </article>
            </div>

            {{-- Sidebar --}}
            <div class="col-lg-4">
                <div style="background:#fff;border-radius:16px;padding:20px;box-shadow:0 4px 24px rgba(0,0,0,.08)">
                    <h6 style="font-weight:700;margin-bottom:14px;padding-bottom:10px;
                               border-bottom:2px solid #035F39;font-size:14px">
                        Other News
                    </h6>
                    @foreach($related as $rel)
                    <a href="{{ route('department.news.show', ['slug' => $department->slug, 'news' => $rel->slug]) }}"
                       style="display:block;text-decoration:none;margin-bottom:12px;padding-bottom:12px;border-bottom:1px solid #f5f5f5">
                        <p style="font-size:11px;color:#035F39;font-weight:600;margin-bottom:4px">
                            {{ $rel->published_at ? $rel->published_at->format('d M Y') : '' }}
                        </p>
                        <p style="font-size:13px;font-weight:600;color:#222;margin:0;line-height:1.4">
                            {{ Str::limit($rel->title, 60) }}
                        </p>
                    </a>
                    @endforeach

                    <a href="{{ route('department.news', $department->slug) }}"
                       style="font-size:12px;color:#035F39;text-decoration:none;font-weight:600">
                        View All News <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
