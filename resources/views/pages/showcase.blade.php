@extends('layouts.app')

@section('content')
    <div class="section-banner bg-1">
        <div class="container">
            <div class="banner-spacing">
                <div class="section-info">
                    <h2 data-aos="fade-up" data-aos-delay="100">{{ $pageTitle }}</h2>
                    <p data-aos="fade-up" data-aos-delay="200">{{ $pageIntro }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-100">
        <div class="row mb-5">
            <div class="col-lg-10">
                <form id="showcaseFilterForm" class="row g-3 align-items-center">
                    <div class="col-md-6">
                        <input id="showcaseFilterText" type="search" class="form-control" placeholder="Search by name or keyword" oninput="filterShowcaseItems()">
                    </div>
                    @if(!empty($filterCategories))
                        <div class="col-md-4">
                            <select id="showcaseFilterCategory" class="form-control" onchange="filterShowcaseItems()">
                                <option value="">All categories</option>
                                @foreach($filterCategories as $category)
                                    <option value="{{ strtolower($category) }}">{{ $category }}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                </form>
            </div>
        </div>

        <div class="row showcase-grid">
            @forelse($items as $item)
                @include('components.showcase-card', ['item' => $item])
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted">No entries are available yet. Please check back soon.</p>
                </div>
            @endforelse
        </div>
    </div>

    @include('components.showcase-modal')
    @include('components.showcase-scripts')
@endsection
