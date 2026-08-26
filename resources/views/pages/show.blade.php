@extends('layouts.app')
@section('title', $page->meta_title ?? $page->title)

@section('content')
    @php
        $heroImage = $page->hero_image ?: 'img/banner/fuo-campus.jpg';
    @endphp

    <div class="page-title-area item-bg2 jarallax" style="background-image: url('{{ asset($heroImage) }}');">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $page->hero_title ?? $page->title }}</h2>
                @if($page->hero_subtitle)
                    <p class="text-white-50 mb-0">{{ $page->hero_subtitle }}</p>
                @endif
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>{{ $page->title }}</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="services-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <article class="single-services-item">
                        <div class="content">
                            @if($page->meta_description)
                                <p class="text-muted mb-4">{{ $page->meta_description }}</p>
                            @endif

                            {!! $page->content !!}

                            @if(!empty($page->images))
                                <div class="mt-4 row g-3">
                                    @foreach($page->images as $image)
                                        @if(!empty($image['path']))
                                            <div class="col-md-4">
                                                <img src="{{ asset($image['path']) }}" alt="" class="img-fluid rounded shadow-sm">
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
