@extends('layouts.app')
@section('content')
<div style="background:linear-gradient(135deg,#024A2D 0%,#035F39 40%,#047A48 100%);padding:60px 0 50px;position:relative;overflow:hidden">
    <div style="position:absolute;top:0;left:0;right:0;bottom:0;opacity:.04;background-image:url('data:image/svg+xml,<svg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><g fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;><g fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot;><path d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/></g></g></svg>')"></div>
    <div class="container" style="position:relative;z-index:1">
        <a href="{{ route('units') }}" style="color:rgba(255,255,255,.7);text-decoration:none;font-size:14px;display:inline-flex;align-items:center;gap:6px;margin-bottom:24px;background:rgba(255,255,255,.08);padding:8px 16px;border-radius:8px" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,.7)'"><i class='bx bx-left-arrow-alt' style="font-size:18px"></i> Back to All Units</a>
        <div style="display:flex;align-items:flex-start;gap:32px;flex-wrap:wrap">
            <div style="flex:1;min-width:300px">
                @if($unit->short_name)<span style="background:rgba(184,147,31,.3);color:#f4e7be;font-size:12px;font-weight:700;padding:5px 16px;border-radius:24px;letter-spacing:1.5px;text-transform:uppercase;display:inline-block;margin-bottom:16px;border:1px solid rgba(184,147,31,.4)">{{ $unit->short_name }}</span>@endif
                <h1 style="color:#fff;font-size:34px;font-weight:800;margin:0 0 16px;line-height:1.2">{{ $unit->name }}</h1>
                @if($unit->intro)<p style="color:rgba(255,255,255,.85);font-size:16px;line-height:1.7;max-width:620px;margin:0">{{ $unit->intro }}</p>@endif
            </div>
            @if($unit->director_name)
            <div style="background:rgba(255,255,255,.08);backdrop-filter:blur(12px);border-radius:16px;padding:24px;border:1px solid rgba(255,255,255,.12);min-width:260px;max-width:300px">
                <p style="color:rgba(255,255,255,.5);font-size:10px;text-transform:uppercase;letter-spacing:1.5px;margin:0 0 12px;font-weight:700">Director</p>
                <div style="display:flex;align-items:center;gap:14px">
                    <img src="{{ $unit->director_photo_url }}" style="width:56px;height:56px;border-radius:50%;object-fit:cover;border:2px solid rgba(255,255,255,.25);flex-shrink:0" alt="{{ $unit->director_name }}">
                    <div>
                        @if($unit->lecturer_id && $unit->lecturer)<a href="{{ route('lecturer.show', $unit->lecturer->slug) }}" style="color:#fff;font-size:15px;font-weight:700;margin:0;line-height:1.3;text-decoration:none;border-bottom:1px solid rgba(255,255,255,.3);padding-bottom:2px">{{ $unit->director_name }} <i class='bx bx-link-external' style="font-size:11px;opacity:.6"></i></a>@else<p style="color:#fff;font-size:15px;font-weight:700;margin:0;line-height:1.3">{{ $unit->director_name }}</p>@endif
                        <p style="color:rgba(255,255,255,.6);font-size:12px;margin:4px 0 0">{{ $unit->director_title }}</p>
                    </div>
                </div>
                @if($unit->email)<a href="mailto:{{ $unit->email }}" style="display:flex;align-items:center;gap:8px;margin-top:14px;padding-top:14px;border-top:1px solid rgba(255,255,255,.1);color:rgba(255,255,255,.8);text-decoration:none;font-size:12px"><i class='bx bx-envelope' style="font-size:14px"></i> {{ $unit->email }}</a>@endif
            </div>
            @endif
        </div>
    </div>
</div>
@if($unit->mission || $unit->vision)
<div style="background:#fff;border-bottom:1px solid #eee"><div class="container"><div style="display:flex;gap:0;flex-wrap:wrap">
    @if($unit->mission)<div style="flex:1;min-width:280px;padding:28px 32px;border-right:1px solid #f0f0f0"><div style="display:flex;align-items:center;gap:10px;margin-bottom:10px"><div style="width:36px;height:36px;border-radius:10px;background:#f0f7f0;display:flex;align-items:center;justify-content:center"><i class='bx bx-target-lock' style="color:#035F39;font-size:18px"></i></div><h6 style="font-weight:700;color:#1a1a2e;margin:0;font-size:14px">Our Mission</h6></div><p style="font-size:14px;color:#555;line-height:1.7;margin:0">{{ $unit->mission }}</p></div>@endif
    @if($unit->vision)<div style="flex:1;min-width:280px;padding:28px 32px"><div style="display:flex;align-items:center;gap:10px;margin-bottom:10px"><div style="width:36px;height:36px;border-radius:10px;background:#f0f7f0;display:flex;align-items:center;justify-content:center"><i class='bx bx-show' style="color:#035F39;font-size:18px"></i></div><h6 style="font-weight:700;color:#1a1a2e;margin:0;font-size:14px">Our Vision</h6></div><p style="font-size:14px;color:#555;line-height:1.7;margin:0">{{ $unit->vision }}</p></div>@endif
</div></div></div>
@endif
<div style="background:#f8f9fa;padding:60px 0"><div class="container"><div class="row g-5">
    <div class="col-lg-8">
        @if($unit->description)<div style="background:#fff;border-radius:16px;padding:36px;box-shadow:0 2px 16px rgba(0,0,0,.04);margin-bottom:28px"><h3 style="font-weight:700;color:#1a1a2e;font-size:22px;margin-bottom:24px;padding-bottom:14px;border-bottom:2px solid #035F39;display:flex;align-items:center;gap:12px"><div style="width:42px;height:42px;border-radius:12px;background:#035F39;display:flex;align-items:center;justify-content:center;flex-shrink:0"><i class='bx bx-building-house' style="color:#fff;font-size:20px"></i></div>About {{ $unit->short_name ?? $unit->name }}</h3><div style="line-height:2;color:#444;font-size:15px">{!! $unit->description !!}</div></div>@endif
        @if($unit->objectives)<div style="background:#fff;border-radius:16px;padding:36px;box-shadow:0 2px 16px rgba(0,0,0,.04)"><h3 style="font-weight:700;color:#1a1a2e;font-size:22px;margin-bottom:24px;padding-bottom:14px;border-bottom:2px solid #035F39;display:flex;align-items:center;gap:12px"><div style="width:42px;height:42px;border-radius:12px;background:#035F39;display:flex;align-items:center;justify-content:center;flex-shrink:0"><i class='bx bx-list-check' style="color:#fff;font-size:20px"></i></div>Key Services & Objectives</h3>@php $items = array_filter(explode("\n", $unit->objectives)); @endphp<div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:12px">@foreach($items as $item)<div style="display:flex;align-items:flex-start;gap:12px;padding:14px 18px;background:linear-gradient(135deg,#f8faf8,#f0f7f0);border-radius:12px;border:1px solid #e8f0e8"><div style="width:28px;height:28px;border-radius:50%;background:#035F39;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:1px"><i class='bx bx-check' style="color:#fff;font-size:14px"></i></div><span style="font-size:14px;color:#333;line-height:1.5">{{ ltrim($item, '- ') }}</span></div>@endforeach</div></div>@endif
    </div>
    <div class="col-lg-4">
        <div style="background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 2px 16px rgba(0,0,0,.04);margin-bottom:24px"><div style="background:linear-gradient(135deg,#035F39,#024A2D);padding:20px 24px"><h5 style="color:#fff;font-weight:700;margin:0;font-size:16px"><i class='bx bx-phone' style="font-size:20px;margin-right:8px"></i>Get in Touch</h5></div><div style="padding:20px 24px">
            @if($unit->email)<a href="mailto:{{ $unit->email }}" style="display:flex;align-items:center;gap:12px;padding:12px 0;color:#333;text-decoration:none;font-size:14px;border-bottom:1px solid #f5f5f5"><div style="width:40px;height:40px;border-radius:10px;background:#f0f7f0;display:flex;align-items:center;justify-content:center;flex-shrink:0"><i class='bx bx-envelope' style="color:#035F39;font-size:18px"></i></div><div><p style="font-size:11px;color:#888;margin:0;text-transform:uppercase;letter-spacing:.5px">Email</p><p style="font-size:14px;font-weight:600;margin:2px 0 0">{{ $unit->email }}</p></div></a>@endif
            @if($unit->phone)<a href="tel:{{ $unit->phone }}" style="display:flex;align-items:center;gap:12px;padding:12px 0;color:#333;text-decoration:none;font-size:14px"><div style="width:40px;height:40px;border-radius:10px;background:#f0f7f0;display:flex;align-items:center;justify-content:center;flex-shrink:0"><i class='bx bx-phone' style="color:#035F39;font-size:18px"></i></div><div><p style="font-size:11px;color:#888;margin:0;text-transform:uppercase;letter-spacing:.5px">Phone</p><p style="font-size:14px;font-weight:600;margin:2px 0 0">{{ $unit->phone }}</p></div></a>@endif
            @if($unit->lecturer_id && $unit->lecturer)<a href="{{ route('lecturer.show', $unit->lecturer->slug) }}" style="display:flex;align-items:center;gap:12px;padding:12px 0;color:#333;text-decoration:none;font-size:14px"><div style="width:40px;height:40px;border-radius:10px;background:#f0f7f0;display:flex;align-items:center;justify-content:center;flex-shrink:0"><i class='bx bx-user' style="color:#035F39;font-size:18px"></i></div><div><p style="font-size:11px;color:#888;margin:0;text-transform:uppercase;letter-spacing:.5px">Profile</p><p style="font-size:14px;font-weight:600;margin:2px 0 0">View Director Profile →</p></div></a>@endif
        </div></div>
        <div style="background:#fff;border-radius:16px;padding:24px;box-shadow:0 2px 16px rgba(0,0,0,.04)"><h5 style="font-weight:700;color:#1a1a2e;margin:0 0 16px;font-size:16px;padding-bottom:12px;border-bottom:2px solid #035F39">Quick Links</h5>
            <a href="{{ route('units') }}" style="display:flex;align-items:center;gap:10px;padding:10px 12px;border-radius:8px;text-decoration:none;color:#333;font-size:14px"><i class='bx bx-building-house' style="color:#035F39;font-size:18px;width:24px;text-align:center"></i>All Units</a>
            <a href="{{ route('about') }}" style="display:flex;align-items:center;gap:10px;padding:10px 12px;border-radius:8px;text-decoration:none;color:#333;font-size:14px"><i class='bx bx-info-circle' style="color:#035F39;font-size:18px;width:24px;text-align:center"></i>About FUO</a>
        </div>
    </div>
</div></div></div>
@endsection
