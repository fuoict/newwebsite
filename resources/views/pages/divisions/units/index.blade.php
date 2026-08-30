@extends('layouts.app')
@section('content')
<div style="background:linear-gradient(135deg,#024A2D 0%,#035F39 40%,#047A48 100%);padding:60px 0 50px;position:relative;overflow:hidden">
    <div class="container" style="position:relative;z-index:1">
        <h1 style="color:#fff;font-size:34px;font-weight:800;margin:0 0 12px">Our Units</h1>
        <p style="color:rgba(255,255,255,.85);font-size:16px;max-width:600px;margin:0">Administrative and support units driving operational excellence at Fountain University.</p>
    </div>
</div>
<div class="ptb-100">
    <div class="container">
        <div class="row g-4">
            @forelse($units as $unit)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <a href="{{ route('units.show', $unit->slug) }}" style="text-decoration:none;display:block;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 4px 20px rgba(0,0,0,.06);border:1px solid #f0f0f0;height:100%;transition:transform .3s,box-shadow .3s" onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 12px 36px rgba(0,0,0,.12)'" onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 20px rgba(0,0,0,.06)'">
                    <div style="background:linear-gradient(135deg,#035F39,#024A2D);padding:28px 24px;text-align:center;min-height:120px;display:flex;flex-direction:column;align-items:center;justify-content:center">
                        @if($unit->short_name)<span style="background:rgba(255,255,255,.15);color:#fff;font-size:11px;font-weight:700;padding:4px 12px;border-radius:20px;letter-spacing:1px;text-transform:uppercase;margin-bottom:12px">{{ $unit->short_name }}</span>@endif
                        <h4 style="color:#fff;font-weight:700;margin:0;font-size:17px;line-height:1.4;max-width:280px">{{ $unit->name }}</h4>
                        @if($unit->director_name)<p style="color:rgba(255,255,255,.7);font-size:12px;margin:10px 0 0"><i class='bx bx-user' style="margin-right:4px"></i> {{ $unit->director_name }}</p>@endif
                    </div>
                    <div style="padding:20px 24px">
                        @if($unit->intro)<p style="font-size:13px;color:#555;line-height:1.6;margin-bottom:16px">{{ Str::limit($unit->intro, 140) }}</p>@endif
                        <span style="font-size:13px;color:#035F39;font-weight:600">Learn more <i class='bx bx-right-arrow-alt' style="font-size:16px"></i></span>
                    </div>
                </a>
            </div>
            @empty
            <div class="col-12 text-center py-5"><p class="text-muted">No units available.</p></div>
            @endforelse
        </div>
    </div>
</div>
@endsection
