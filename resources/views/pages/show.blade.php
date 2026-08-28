@extends('layouts.app')
@section('title', $page->meta_title ?? $page->title)

@section('content')
    <div class="page-title-area item-bg2 jarallax" style="background-image: url('{{ asset('img/banner/fuo-campus.jpg') }}');">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $page->title }}</h2>
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
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
