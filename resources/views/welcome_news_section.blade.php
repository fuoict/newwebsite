{{--
    ============================================================
    REPLACE the entire block between:
      <!-- Start News and Updates Area 2 -->
      ...
      <!-- End News and Updates Area 2 -->

    in welcome.blade.php with this code.

    Also add this to your HomeController (or whichever controller
    returns the welcome view) to pass the news data:

        use App\Models\News;

        // Inside the method:
        $featuredNews    = News::published()->featured()->latest()->limit(2)->get();
        $sidebarFeatured = News::published()->featured()->latest()->skip(2)->first();
        $sidebarSmall    = News::published()->latest()->whereNotIn('id',
                               $featuredNews->pluck('id')
                               ->push(optional($sidebarFeatured)->id)
                               ->filter()
                               ->toArray()
                           )->limit(2)->get();

        return view('welcome', compact('Colleges', 'featuredNews', 'sidebarFeatured', 'sidebarSmall'));
    ============================================================
--}}

<!-- Start News and Updates Area 2 -->
<div class="news-area ptb-100">
    <div class="container">
        <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
            <div class="sub-title">
                <p>News & Updates</p>
            </div>
            <h2>Recent News and Events</h2>
        </div>

        <div class="row">
            {{-- LEFT: Two main featured news items --}}
            <div class="col-lg-8">
                <div class="news-content">
                    <ul>
                        @forelse($featuredNews as $item)
                        <li class="news-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="image">
                                <img src="{{ $item->image_url }}" alt="{{ $item->title }}">
                            </div>
                            <div class="content">
                                <div class="sub-title">
                                    <i class="{{ $item->icon }}"></i>
                                    {{ $item->category }} <p></p>
                                </div>
                                <h2>
                                    <a href="{{ route('news.show', $item->slug) }}">
                                        {{ $item->title }}
                                    </a>
                                </h2>
                                @if($item->excerpt)
                                <p class="mb-1">{{ Str::limit($item->excerpt, 120) }}</p>
                                @endif
                                @if($item->event_date_label)
                                <p class="m-0">
                                    <i class='bx bxs-calendar'></i> {{ $item->event_date_label }}
                                </p>
                                @endif
                                <a class="btn" href="{{ route('news.show', $item->slug) }}">Continue Reading...</a>
                            </div>
                        </li>
                        @empty
                        {{-- Fallback if no news in DB yet --}}
                        <li class="news-item">
                            <div class="content">
                                <p class="text-muted">No news published yet. <a href="{{ route('admin.news.create') }}">Add your first post.</a></p>
                            </div>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>

            {{-- RIGHT: Sidebar --}}
            <div class="col-lg-4">

                {{-- Top featured sidebar item (large card) --}}
                @if(isset($sidebarFeatured) && $sidebarFeatured)
                <div class="news-content-right" data-aos="fade-up" data-aos-delay="100">
                    <div class="content-box">
                        <img src="{{ $sidebarFeatured->image_url }}" alt="{{ $sidebarFeatured->title }}">
                        <div class="content">
                            <h3>
                                <a href="{{ route('news.show', $sidebarFeatured->slug) }}">
                                    {{ Str::limit($sidebarFeatured->title, 80) }}
                                </a>
                            </h3>
                            <a class="btn" href="{{ route('news.show', $sidebarFeatured->slug) }}">Continue Reading...</a>
                        </div>
                    </div>
                </div>
                @endif

                {{-- Bottom small news items --}}
                @if(isset($sidebarSmall) && $sidebarSmall->count())
                <div class="news-content-item" data-aos="fade-up" data-aos-delay="100">
                    @foreach($sidebarSmall as $small)
                    <div class="content-box">
                        <div class="image">
                            <img src="{{ $small->image_url }}" alt="{{ $small->title }}">
                        </div>
                        <div class="content">
                            <div class="sub-title">
                                <i class="{{ $small->icon }}"></i>
                                <p>{{ $small->category }}</p>
                            </div>
                            <h3>
                                <a href="{{ route('news.show', $small->slug) }}">
                                    {{ Str::limit($small->title, 90) }}
                                </a>
                            </h3>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

            </div>
        </div>

        <div class="section-btn text-center" data-aos="fade-zoom-in" data-aos-delay="100">
            <p>Fountain University Leads, Others Follow.
                <a href="{{ route('news.index') }}">More Campus News <i class='bx bx-right-arrow-alt'></i></a>
            </p>
        </div>
    </div>
</div>
<!-- End News and Updates Area 2 -->
