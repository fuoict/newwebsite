@extends('layouts.app')

@section('content')
<!-- Banner -->
<div class="section-banner bg-12">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100">{{ $page->title }}</h2>
                @if($page->banner_text)
                <p data-aos="fade-up" data-aos-delay="200">{{ $page->banner_text }}</p>
                @endif
            </div>
        </div>
    </div>
</div>

@if($page->layout_type === 'officer')
    {{-- ═══ OFFICER PROFILE LAYOUT ═══ --}}
    @if(isset($page->officers[0]))
    @php $officer = $page->officers[0]; @endphp
    <div class="about-alumni ptb-100">
        <div class="container-fluid p-0">
            <div class="row g-0 align-items-start">
                <div class="col-lg-5">
                    @if($officer['photo'] ?? null)
                    <img src="{{ asset($officer['photo']) }}" alt="{{ $officer['name'] }}"
                        class="img-fluid me-3" data-aos="fade-zoom-in" data-aos-delay="100"
                        onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($officer['name']) }}&background=035F39&color=fff&size=600'">
                    @else
                    <div style="background:linear-gradient(135deg,#035F39,#082B1A);min-height:400px;display:flex;align-items:center;justify-content:center">
                        <div style="text-align:center;color:#fff">
                            <div style="width:120px;height:120px;border-radius:50%;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;margin:0 auto 16px;font-size:48px;font-weight:700">
                                {{ strtoupper(substr($officer['name'], 0, 2)) }}
                            </div>
                            <h3 style="font-size:22px">{{ $officer['name'] }}</h3>
                            <p style="opacity:.7">{{ $officer['title'] ?? $page->title }}</p>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="col-lg-7">
                    <div class="content" data-aos="fade-up" data-aos-delay="100">
                        <h2>{{ strtoupper($officer['name']) }}</h2>
                        @if($officer['qualifications'] ?? null)
                        <div class="sub-title">
                            <i class='bx bxs-graduation'></i>
                            <p>({{ $officer['qualifications'] }})</p>
                        </div>
                        @endif
                        <h4>Profile</h4>
                        <div style="text-align:justify">{!! $officer['bio'] ?? '' !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    {{-- Spotlight Section (VC only) --}}
    @if(!empty($spotlightImages))
    <section class="vc-spotlight-area">
        <div class="container-fluid">
            <div class="section-title text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="sub-title"><i class='bx bxs-star'></i> <p>Spotlight</p></div>
                <h2>{{ $page->title }} Spotlight</h2>
                <p>Moments from the Office of the {{ $page->title }} captured in motion.</p>
            </div>
            <div class="vc-spotlight-slider" data-aos="fade-up" data-aos-delay="200">
                <div class="vc-spotlight-track">
                    @foreach (array_merge($spotlightImages, $spotlightImages) as $item)
                        <div class="vc-spotlight-card">
                            <div class="vc-spotlight-image">
                                <img src="{{ asset($item['src']) }}" alt="Spotlight image">
                                @if(!empty($item['caption']))
                                    <div class="vc-spotlight-caption">{{ $item['caption'] }}</div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif

    {{-- Speeches Table (VC only) --}}
    @if($speeches && $speeches->count())
    <div class="container-fluid px-5 align-items-center" style="padding-top:40px;padding-bottom:60px">
        <h2 class="text-center">{{ $page->title }}'s Speeches</h2>
        <hr>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-light">
                    <tr><th>#</th><th>Speech Title</th><th class="text-center">Download</th></tr>
                </thead>
                <tbody>
                    @foreach($speeches as $index => $speech)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td><a href="{{ $speech->link }}" target="_blank">{{ $speech->title }}</a></td>
                        <td class="text-center"><a href="{{ $speech->link }}" target="_blank"><img src="{{ asset('img/icon/pdf.jpg') }}" style="width:28px" alt="PDF"></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif

@elseif($page->layout_type === 'member-grid')
    {{-- ═══ MEMBER GRID LAYOUT ═══ --}}
    <div class="about-alumni ptb-100">
        <div class="container">
            @if($page->intro)
            <div data-aos="fade-up" data-aos-delay="100">
                <p style="text-align:justify;margin-bottom:24px">{!! nl2br(e($page->intro)) !!}</p>
            </div>
            @endif
            @if($page->body)
            <div data-aos="fade-up" data-aos-delay="150" style="margin-bottom:30px">
                {!! $page->body !!}
            </div>
            @endif
            @if($page->mission || $page->vision)
            <div class="row" style="margin-bottom:30px">
                @if($page->mission)
                <div class="col-lg-6"><h4>Mission</h4><p style="text-align:justify">{{ $page->mission }}</p></div>
                @endif
                @if($page->vision)
                <div class="col-lg-6"><h4>Vision</h4><p style="text-align:justify">{{ $page->vision }}</p></div>
                @endif
            </div>
            @endif
            <h2 class="text-center" style="margin-bottom:24px" data-aos="fade-up">Members</h2>
            <div class="row" data-aos="fade-up" data-aos-delay="200">
                @foreach($page->members ?? [] as $member)
                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="course-item" style="min-height:140px">
                        <div class="content">
                            @if($member['photo'] ?? null)
                            <img src="{{ asset($member['photo']) }}" style="width:60px;height:60px;border-radius:50%;object-fit:cover;margin-bottom:8px" alt="{{ $member['name'] }}">
                            @endif
                            <p style="font-weight:700;font-size:16px">{{ $member['name'] }}</p>
                            <p><strong style="color:var(--fu-forest,#035F39)">{{ $member['role'] ?? '' }}</strong></p>
                            @if($member['description'] ?? null)
                            <p style="font-size:13px;color:#666">{{ $member['description'] }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@elseif($page->layout_type === 'gallery')
    {{-- ═══ GALLERY LAYOUT ═══ --}}
    <div class="about-alumni ptb-100">
        <div class="container">
            <div class="row g-3" data-aos="fade-up">
                @foreach($page->gallery ?? [] as $img)
                <div class="col-lg-4 col-md-6">
                    <div style="border-radius:10px;overflow:hidden;box-shadow:0 4px 12px rgba(0,0,0,.08)">
                        <img src="{{ asset($img['url'] ?? '') }}" alt="{{ $img['caption'] ?? '' }}" style="width:100%;height:250px;object-fit:cover">
                        @if($img['caption'] ?? null)
                        <div style="padding:10px 14px;font-size:13px;color:#444">{{ $img['caption'] }}</div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@elseif($page->layout_type === 'downloads')
    {{-- ═══ DOWNLOADS LAYOUT ═══ --}}
    <div class="about-alumni ptb-100">
        <div class="container">
            @if($page->body)
            <div style="margin-bottom:24px">{!! $page->body !!}</div>
            @endif
            <div class="row g-3" data-aos="fade-up">
                @foreach($page->downloads ?? [] as $dl)
                <div class="col-lg-4 col-md-6">
                    <a href="{{ $dl['url'] ?? '#' }}" target="_blank" style="display:flex;align-items:center;gap:12px;padding:16px;background:#fff;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,.06);text-decoration:none;color:#333;transition:transform .2s" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                        <i class='{{ $dl['icon'] ?? "bx bx-file" }}' style="font-size:28px;color:var(--fu-forest,#035F39)"></i>
                        <div>
                            <div style="font-weight:600;font-size:14px">{{ $dl['title'] ?? '' }}</div>
                            @if($dl['description'] ?? null)
                            <div style="font-size:12px;color:#888">{{ $dl['description'] }}</div>
                            @endif
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@else
    {{-- ═══ TEXT / BLOCK-BASED LAYOUT ═══ --}}
    <div class="about-alumni ptb-100">
        <div class="container">
            {{-- Priority: Blocks > Classic Content --}}
            @if(!empty($page->blocks))
                @foreach($page->blocks as $block)
                    <x-page-block :block="$block" />
                @endforeach
            @else
                <div class="row">
                    @if(count($sidebarLinks) > 1)
                    <div class="col-lg-4">
                        <div class="academics-left"><div class="ac-category"><ul>
                            @foreach($sidebarLinks as $link)<li><a href="{{ $link['url'] }}" class="{{ ($link['active'] ?? false) ? 'active' : '' }}">{{ $link['label'] }}</a></li>@endforeach
                        </ul></div></div>
                    </div>
                    @endif
                    <div class="{{ count($sidebarLinks) > 1 ? 'col-lg-8' : 'col-lg-12' }}">
                        <div data-aos="fade-up">
                            @if($page->intro)<p style="text-align:justify;margin-bottom:20px;font-size:16px">{{ $page->intro }}</p>@endif
                            <div style="text-align:justify;line-height:1.8">{!! $page->body !!}</div>
                            @if($page->mission || $page->vision)<div class="row" style="margin-top:30px">
                                @if($page->mission)<div class="col-lg-6"><h4>Mission</h4><p style="text-align:justify">{{ $page->mission }}</p></div>@endif
                                @if($page->vision)<div class="col-lg-6"><h4>Vision</h4><p style="text-align:justify">{{ $page->vision }}</p></div>@endif
                            </div>@endif
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endif
@endsection
