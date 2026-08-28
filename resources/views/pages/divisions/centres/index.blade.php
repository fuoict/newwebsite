@extends('layouts.app')

@section('content')

<!-- Banner -->
<div class="section-banner bg-12">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100">Our Centres</h2>
                <p data-aos="fade-up" data-aos-delay="200">Specialised centres driving research, innovation, and community impact at Fountain University.</p>
            </div>
        </div>
    </div>
</div>

<!-- Centres Grid -->
<div class="ptb-100">
    <div class="container">
        <div class="row g-4">
            @forelse($centres as $centre)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <a href="{{ route('centres.show', $centre->slug) }}"
                   style="text-decoration:none;display:block;background:#fff;border-radius:16px;overflow:hidden;
                          box-shadow:0 4px 20px rgba(0,0,0,.06);border:1px solid #f0f0f0;height:100%;
                          transition:transform .3s,box-shadow .3s"
                   onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 12px 36px rgba(0,0,0,.12)'"
                   onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 20px rgba(0,0,0,.06)'">

                    {{-- Card Header --}}
                    <div style="background:linear-gradient(135deg,#035F39,#024A2D);padding:28px 24px;
                                text-align:center;position:relative;min-height:140px;display:flex;
                                flex-direction:column;align-items:center;justify-content:center">
                        @if($centre->short_name)
                        <span style="background:rgba(255,255,255,.15);color:#fff;font-size:11px;font-weight:700;
                                     padding:4px 12px;border-radius:20px;letter-spacing:1px;text-transform:uppercase;
                                     margin-bottom:12px">
                            {{ $centre->short_name }}
                        </span>
                        @endif
                        <h4 style="color:#fff;font-weight:700;margin:0;font-size:17px;line-height:1.4;
                                   max-width:280px">
                            {{ $centre->name }}
                        </h4>
                        @if($centre->director_name)
                        <p style="color:rgba(255,255,255,.7);font-size:12px;margin:10px 0 0">
                            <i class='bx bx-user' style="margin-right:4px"></i> {{ $centre->director_name }}
                        </p>
                        @endif
                    </div>

                    {{-- Card Body --}}
                    <div style="padding:20px 24px">
                        @if($centre->intro)
                        <p style="font-size:13px;color:#555;line-height:1.6;margin-bottom:16px">
                            {{ Str::limit($centre->intro, 140) }}
                        </p>
                        @endif

                        {{-- Quick Info --}}
                        <div style="display:flex;flex-wrap:wrap;gap:8px;margin-bottom:16px">
                            @if($centre->email)
                            <span style="font-size:11px;color:#035F39;background:#f0f7f0;padding:4px 10px;
                                         border-radius:20px;display:inline-flex;align-items:center;gap:4px">
                                <i class='bx bx-envelope'></i> Email
                            </span>
                            @endif
                            @if($centre->mission)
                            <span style="font-size:11px;color:#035F39;background:#f0f7f0;padding:4px 10px;
                                         border-radius:20px;display:inline-flex;align-items:center;gap:4px">
                                <i class='bx bx-target-lock'></i> Mission
                            </span>
                            @endif
                            @if($centre->vision)
                            <span style="font-size:11px;color:#035F39;background:#f0f7f0;padding:4px 10px;
                                         border-radius:20px;display:inline-flex;align-items:center;gap:4px">
                                <i class='bx bx-show'></i> Vision
                            </span>
                            @endif
                        </div>

                        <span style="font-size:13px;color:#035F39;font-weight:600;display:inline-flex;
                                     align-items:center;gap:4px">
                            Learn more <i class='bx bx-right-arrow-alt' style="font-size:16px"></i>
                        </span>
                    </div>
                </a>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <i class='bx bx-buildings' style="font-size:60px;color:#ddd;display:block;margin-bottom:16px"></i>
                <p class="text-muted">No centres available at the moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>

@endsection
