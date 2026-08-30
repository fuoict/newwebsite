@props(['block'])
@php $d = $block['data'] ?? []; @endphp

@if($block['type'] === 'heading')
    @php $tag = 'h' . ($d['level'] ?? 2); @endphp
    <{!! $tag !!} style="margin:20px 0 12px;font-weight:700">{{ $d['text'] ?? '' }}</{!! !!}>
@elseif($block['type'] === 'text')
    <div style="line-height:1.9;color:#444;font-size:15px;margin-bottom:16px">{!! $d['html'] ?? '' !!}</div>
@elseif($block['type'] === 'officer')
    @if($d['name'] ?? null)
    <div class="row g-4 align-items-start" style="margin-bottom:30px">
        <div class="col-lg-5">
            @if($d['photo'] ?? null)
            <img src="{{ asset($d['photo']) }}" alt="{{ $d['name'] }}" class="img-fluid" style="border-radius:8px"
                 onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($d['name']) }}&background=035F39&color=fff&size=600'">
            @else
            <div style="background:linear-gradient(135deg,#035F39,#082B1A);min-height:350px;border-radius:8px;display:flex;align-items:center;justify-content:center">
                <div style="text-align:center;color:#fff">
                    <div style="width:100px;height:100px;border-radius:50%;background:rgba(255,255,255,.15);display:flex;align-items:center;justify-content:center;margin:0 auto 12px;font-size:40px;font-weight:700">{{ strtoupper(substr($d['name'], 0, 2)) }}</div>
                    <h4 style="font-size:18px">{{ $d['name'] }}</h4>
                    <p style="opacity:.7">{{ $d['title'] ?? '' }}</p>
                </div>
            </div>
            @endif
        </div>
        <div class="col-lg-7">
            <h2 style="font-weight:700;text-transform:uppercase">{{ $d['name'] }}</h2>
            @if($d['qualifications'] ?? null)
            <div class="sub-title"><i class='bx bxs-graduation'></i><p>({{ $d['qualifications'] }})</p></div>
            @endif
            @if($d['title'] ?? null)
            <h4>{{ $d['title'] }}</h4>
            @endif
            <div style="text-align:justify;line-height:1.9">{!! $d['bio'] ?? '' !!}</div>
        </div>
    </div>
    @endif
@elseif($block['type'] === 'member')
    @if($d['name'] ?? null)
    <div style="display:inline-flex;align-items:center;gap:12px;padding:12px 16px;background:#fff;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,.06);margin-bottom:10px;min-width:280px">
        @if($d['photo'] ?? null)
        <img src="{{ asset($d['photo']) }}" style="width:50px;height:50px;border-radius:50%;object-fit:cover" alt="{{ $d['name'] }}">
        @else
        <div style="width:50px;height:50px;border-radius:50%;background:#035F39;color:#fff;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:16px;flex-shrink:0">{{ strtoupper(substr($d['name'], 0, 2)) }}</div>
        @endif
        <div>
            <div style="font-weight:700;font-size:14px">{{ $d['name'] }}</div>
            <div style="color:var(--fu-forest,#035F39);font-size:12px;font-weight:600">{{ $d['role'] ?? '' }}</div>
            @if($d['description'] ?? null)
            <div style="font-size:12px;color:#666;margin-top:2px">{{ $d['description'] }}</div>
            @endif
        </div>
    </div>
    @endif
@elseif($block['type'] === 'memberGrid')
    @php $members = $d['members'] ?? []; @endphp
    @if(count($members))
    @if($d['title'] ?? null)
    <h2 style="text-align:center;font-weight:700;margin:24px 0 16px">{{ $d['title'] }}</h2>
    @endif
    <div class="row g-3">
        @foreach($members as $member)
        <div class="col-lg-4 col-sm-6">
            <div style="background:#fff;border-radius:10px;padding:16px;box-shadow:0 2px 8px rgba(0,0,0,.06);text-align:center">
                @if($member['photo'] ?? null)
                <img src="{{ asset($member['photo']) }}" style="width:60px;height:60px;border-radius:50%;object-fit:cover;margin:0 auto 10px;display:block" alt="{{ $member['name'] }}">
                @else
                <div style="width:60px;height:60px;border-radius:50%;background:#035F39;color:#fff;display:flex;align-items:center;justify-content:center;margin:0 auto 10px;font-weight:700;font-size:20px">{{ strtoupper(substr($member['name'], 0, 2)) }}</div>
                @endif
                <p style="font-weight:700;font-size:14px;margin:0">{{ $member['name'] }}</p>
                <p style="color:var(--fu-forest,#035F39);font-size:12px;font-weight:600;margin:2px 0 0">{{ $member['role'] ?? '' }}</p>
                @if($member['description'] ?? null)
                <p style="font-size:11px;color:#888;margin:6px 0 0">{{ $member['description'] }}</p>
                @endif
            </div>
        </div>
        @endforeach
    </div>
    @endif
@elseif($block['type'] === 'gallery')
    @php $images = $d['images'] ?? []; @endphp
    @if(count($images))
    @if($d['title'] ?? null)
    <h2 style="text-align:center;font-weight:700;margin:24px 0 16px">{{ $d['title'] }}</h2>
    @endif
    <div class="row g-3">
        @foreach($images as $img)
        <div class="col-lg-4 col-md-6">
            <div style="border-radius:10px;overflow:hidden;box-shadow:0 2px 8px rgba(0,0,0,.08)">
                <img src="{{ asset($img['url'] ?? '') }}" alt="{{ $img['caption'] ?? '' }}" style="width:100%;height:220px;object-fit:cover">
                @if($img['caption'] ?? null)
                <div style="padding:8px 12px;font-size:12px;color:#444">{{ $img['caption'] }}</div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
    @endif
@elseif($block['type'] === 'table')
    @if($d['title'] ?? null)
    <h3 style="font-weight:700;margin:20px 0 12px">{{ $d['title'] }}</h3>
    @endif
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-light">
                <tr>@foreach($d['headers'] ?? [] as $h)<th>{{ $h }}</th>@endforeach</tr>
            </thead>
            <tbody>
                @foreach($d['rows'] ?? [] as $row)
                <tr>@foreach($row as $cell)<td>{{ $cell }}</td>@endforeach</tr>
                @endforeach
            </tbody>
        </table>
    </div>
@elseif($block['type'] === 'list')
    @if($d['title'] ?? null)
    <h3 style="font-weight:700;margin:20px 0 12px">{{ $d['title'] }}</h3>
    @endif
    <ul style="padding-left:20px;line-height:2">
        @foreach($d['items'] ?? [] as $item)
        <li>{{ $item }}</li>
        @endforeach
    </ul>
@elseif($block['type'] === 'image')
    @if($d['url'] ?? null)
    <div style="margin:20px 0;text-align:center">
        <img src="{{ asset($d['url']) }}" alt="{{ $d['alt'] ?? '' }}" style="max-width:100%;border-radius:8px">
        @if($d['caption'] ?? null)
        <p style="font-size:12px;color:#888;margin-top:6px">{{ $d['caption'] }}</p>
        @endif
    </div>
    @endif
@elseif($block['type'] === 'divider')
    <hr style="margin:24px 0;border:none;border-top:2px solid var(--fu-line,#e1ded2)">
@elseif($block['type'] === 'quote')
    @if($d['text'] ?? null)
    <blockquote style="border-left:4px solid var(--fu-forest,#035F39);padding:16px 24px;margin:20px 0;background:var(--fu-sage,#f0f7f0);border-radius:0 8px 8px 0;font-style:italic">
        <p style="margin:0;font-size:15px;line-height:1.7">{{ $d['text'] }}</p>
        @if($d['attribution'] ?? null)
        <footer style="margin-top:8px;font-size:13px;color:var(--fu-muted,#666);font-style:normal">— {{ $d['attribution'] }}</footer>
        @endif
    </blockquote>
    @endif
@elseif($block['type'] === 'linkGrid')
    @php $links = $d['links'] ?? []; @endphp
    @if(count($links))
    <div class="row g-3">
        @foreach($links as $link)
        <div class="col-lg-4 col-md-6">
            <a href="{{ $link['url'] ?? '#' }}" style="display:flex;align-items:center;gap:10px;padding:12px 16px;background:#fff;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,.06);text-decoration:none;color:#333;transition:transform .2s" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                <i class='{{ $link['icon'] ?? "bx bx-link" }}' style="font-size:22px;color:var(--fu-forest,#035F39)"></i>
                <span style="font-weight:600;font-size:14px">{{ $link['label'] ?? '' }}</span>
            </a>
        </div>
        @endforeach
    </div>
    @endif
@elseif($block['type'] === 'spotlight')
    @php $spotImages = $d['images'] ?? []; @endphp
    @if(count($spotImages))
    <section class="vc-spotlight-area" style="margin:30px 0">
        <div class="container-fluid">
            @if($d['title'] ?? null)
            <div class="section-title text-center" data-aos="fade-up">
                <div class="sub-title"><i class='bx bxs-star'></i> <p>Spotlight</p></div>
                <h2>{{ $d['title'] }}</h2>
                @if($d['subtitle'] ?? null)<p>{{ $d['subtitle'] }}</p>@endif
            </div>
            @endif
            <div class="vc-spotlight-slider" data-aos="fade-up" data-aos-delay="200">
                <div class="vc-spotlight-track">
                    @foreach(array_merge($spotImages, $spotImages) as $img)
                    <div class="vc-spotlight-card">
                        <div class="vc-spotlight-image">
                            <img src="{{ asset($img['src'] ?? '') }}" alt="{{ $img['caption'] ?? 'Spotlight' }}">
                            @if(!empty($img['caption']))
                            <div class="vc-spotlight-caption">{{ $img['caption'] }}</div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif
@elseif($block['type'] === 'speechesTable')
    @php $rows = $d['rows'] ?? []; @endphp
    @if(count($rows))
    <div style="padding:20px 0">
        @if($d['title'] ?? null)
        <h2 class="text-center" style="font-weight:700">{{ $d['title'] }}</h2>
        <hr>
        @endif
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-light">
                    <tr><th style="width:50px">#</th><th>Speech Title</th><th class="text-center" style="width:80px">Download</th></tr>
                </thead>
                <tbody>
                    @foreach($rows as $i => $row)
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>
                            @if($row['link'] ?? null)
                            <a href="{{ $row['link'] }}" target="_blank">{{ $row['title'] ?? '' }}</a>
                            @else
                            {{ $row['title'] ?? '' }}
                            @endif
                        </td>
                        <td class="text-center">
                            @if($row['link'] ?? null)
                            <a href="{{ $row['link'] }}" target="_blank" aria-label="Download {{ $row['title'] ?? '' }}">
                                <img src="{{ asset('img/icon/pdf.jpg') }}" style="width:28px" alt="PDF icon">
                            </a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
@endif
