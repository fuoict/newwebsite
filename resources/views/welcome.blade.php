@extends('layouts.app')

@section('meta_title', 'Fountain University, Osogbo — Knowledge, Character and Service')
@section('meta_description', 'Welcome to Fountain University, Osogbo — a private university founded in 2007 by NASFAT. Explore undergraduate, postgraduate and sandwich programmes.')
@section('meta_image', asset('img/banner/convo4.jpeg'))

@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/landing-redesign.css') }}">

<div class="fuo-redesign">

    {{-- ═══════════════════════════════════════════════
         ANNOUNCEMENT MODAL
         ═══════════════════════════════════════════════ --}}
    <div class="fuo-modal-overlay" id="fuoAnnounceModal">
        <div class="fuo-announce-modal">
            <button class="fuo-close-btn" onclick="closeFuoModal()" aria-label="Close"><i class='bx bx-x'></i></button>
            <div class="fuo-banner">
                <img src="{{ asset('img/all-img/fu-gate.jpg') }}" alt="Fountain University campus gate" width="600" height="300">
                <div class="fuo-banner-tag">
                    <p class="fuo-kicker">Announcement</p>
                    <h3>2026/2027 admission is now open</h3>
                </div>
            </div>
            <div class="fuo-modal-body">
                <p>The 2026/2027 Admission Exercise is Ongoing. Beware of Admission Fraudsters!</p>
                <p>For all applications and updates, use only Fountain University's official channels: the website fuo.edu.ng and the admissions portal <a href="https://eportal.fuo.edu.ng/" target="_blank" rel="noopener noreferrer">https://eportal.fuo.edu.ng/</a>.</p>
                <p>Beware of fraudsters; the University will not be responsible for dealings with unauthorised persons.</p>
                <p>FUO Admission Office</p>

                <div class="fuo-modal-actions">
                    <a href="https://eportal.fuo.edu.ng/" class="fuo-btn fuo-btn-gold">Apply now</a>
                    <button class="fuo-btn fuo-btn-ghost" onclick="closeFuoModal()">Maybe later</button>
                </div>
            </div>
            <div class="fuo-modal-dots"><span class="active"></span><span></span></div>
        </div>
    </div>
    <script>
    function openFuoModal() { document.getElementById('fuoAnnounceModal').classList.add('open'); }
    function closeFuoModal() { document.getElementById('fuoAnnounceModal').classList.remove('open'); }
    setTimeout(openFuoModal, 2000);
    </script>

    {{-- HERO --}}
    <section class="fuo-hero-v2" id="fuoHero">
        <img class="bg-slide active" src="{{ asset('img/banner/convo4.jpeg') }}" alt="Fountain University campus" fetchpriority="high" width="1920" height="1080">
        <img class="bg-slide" src="{{ asset('img/banner/phdstudent.jpeg') }}" alt="Fountain University campus" loading="eager" width="1920" height="1080">
        <img class="bg-slide" src="{{ asset('img/banner/slid-6.png') }}" alt="Fountain University campus" loading="eager" width="1920" height="1080">
        <div class="hero-content">
            <div class="fuo-wrap">
                <div class="fuo-admission-badge"><span class="dot"></span>2026/2027 admission now open</div>
                <p class="eyebrow" id="fuoEyebrow">Fountain University, Osogbo — founded by NASFAT, 2007</p>
                <h1 id="fuoHeadline">Rooted in values.<br>Driven by excellence.</h1>
                <p class="sub" id="fuoSubline">Preparing graduates ready to solve tomorrow's challenges, built on knowledge, character and service.</p>
                <div class="hero-actions">
                    <a href="https://eportal.fuo.edu.ng/" class="fuo-btn fuo-btn-gold">Apply now — 2026/2027</a>
                    <a href="#about" class="fuo-btn fuo-btn-light">Schedule a tour</a>
                </div>
                <div class="hero-dots" id="fuoHeroDots"><span class="active"></span><span></span><span></span></div>
            </div>
        </div>
    </section>

    <script>
    (function(){
        var slides = document.querySelectorAll('.fuo-hero-v2 .bg-slide');
        var dots = document.querySelectorAll('.fuo-hero-v2 .hero-dots span');
        var headline = document.getElementById('fuoHeadline');
        var subline = document.getElementById('fuoSubline');
        var eyebrow = document.getElementById('fuoEyebrow');
        var current = 0;

        var slideData = [
            { headline: 'Rooted in values.<br>Driven by excellence.', sub: 'Preparing graduates ready to solve tomorrow\'s challenges, built on knowledge, character and service.', eyebrow: 'Fountain University, Osogbo — founded by NASFAT, 2007' },
            { headline: 'Where knowledge meets<br>character and service.', sub: 'A values-driven education, from admission to graduation.', eyebrow: '2026/2027 admission cycle' },
            { headline: 'Ranked among Nigeria\'s<br>top universities.', sub: 'Global recognition built on academic excellence and research.', eyebrow: 'Times Higher Education, 2024' }
        ];

        function nextSlide() {
            slides[current].classList.remove('active');
            dots[current].classList.remove('active');

            headline.style.opacity = '0';
            subline.style.opacity = '0';
            eyebrow.style.opacity = '0';

            setTimeout(function() {
                current = (current + 1) % slides.length;
                slides[current].classList.add('active');
                dots[current].classList.add('active');
                headline.innerHTML = slideData[current].headline;
                subline.textContent = slideData[current].sub;
                eyebrow.textContent = slideData[current].eyebrow;
                headline.style.opacity = '1';
                subline.style.opacity = '1';
                eyebrow.style.opacity = '1';
            }, 400);
        }

        setInterval(nextSlide, 5000);
    })();
    </script>

    {{-- NEWS TICKER --}}
    @php
        $announcementItems = collect([
            $featuredNews,
            $sidebarFeatured ? collect([$sidebarFeatured]) : collect(),
            $sidebarSmall,
        ])->flatten(1)->filter(fn($item) => $item && $item->title && $item->slug)->take(6);
    @endphp
    @if($announcementItems->isNotEmpty())
    <div class="fuo-ticker">
        <div class="fuo-wrap">
            <span class="fuo-tag">Latest</span>
            <div class="fuo-ticker-track-wrap">
                <div class="fuo-ticker-track">
                    @foreach($announcementItems as $item)
                        <a href="{{ route('news.show', $item->slug) }}">{{ $item->title }}</a>
                    @endforeach
                    @foreach($announcementItems as $item)
                        <a href="{{ route('news.show', $item->slug) }}">{{ $item->title }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif

    {{-- HADITH + PRAYER --}}
    @if(isset($hadith))
    <div class="fuo-faith-strip">
        <div class="fuo-wrap">
            <div class="fuo-faith-grid">
                <div class="fuo-faith-card">
                    <div class="fuo-faith-icon"><i class='bx bxs-book-bookmark'></i></div>
                    <div style="flex:1">
                        <p class="fuo-kicker">Daily hadith</p>
                        <div>
                            <p class="fuo-quote" id="hadithShort">"{{ Str::limit($hadith['text'], 220) }}"</p>
                            <p class="fuo-quote" id="hadithFull" style="display:none">"{{ $hadith['text'] }}"</p>
                            @if(strlen($hadith['text']) > 220)
                            <button onclick="toggleHadith()" id="hadithToggle" style="background:none;border:none;color:var(--fu-forest);font-size:12px;font-weight:600;cursor:pointer;padding:0;margin-bottom:8px">
                                Read more <i class='bx bx-chevron-down' id="hadithArrow"></i>
                            </button>
                            @endif
                        </div>
                        <p class="fuo-ref">{{ $hadith['narrator'] ? '— ' . $hadith['narrator'] . ' · ' : '' }}{{ $hadith['reference'] }}</p>
                    </div>
                </div>
                <div class="fuo-faith-card fuo-prayer-card" id="fuoPrayerCard">
                    {{-- Animated weather layers --}}
                    <div class="weather-anim" id="weatherAnim"></div>
                    <div style="position:relative;z-index:1;display:flex;gap:16px;flex:1">
                        <div class="fuo-faith-icon"><i class='bx bxs-mosque'></i></div>
                        <div style="flex:1;">
                            {{-- Top row: Weather | Next Prayer | Adhan Toggle --}}
                            <div style="display:grid;grid-template-columns:1fr auto 1fr;align-items:start;gap:8px;margin-bottom:12px">
                                {{-- Weather --}}
                                <div>
                                    <p class="fuo-kicker"><i class='bx bx-sun' style="margin-right:4px"></i>Weather in Osogbo</p>
                                    <div style="display:flex;align-items:center;gap:10px">
                                        <span id="fuoWeatherTemp" style="font-size:24px;font-weight:800;font-family:'Fraunces',serif;color:#fff;line-height:1">--°C</span>
                                        <span id="fuoWeatherIcon" style="font-size:30px;line-height:1">🌤️</span>
                                    </div>
                                    <p id="fuoWeatherDesc" style="font-size:13px;color:#fff;margin:6px 0 0;font-weight:600;transition:opacity .3s">Loading weather...</p>
                                    <p id="fuoWeatherUpdate" style="font-size:10px;color:rgba(255,255,255,.45);margin:3px 0 0">Auto-updates every 10 minutes</p>
                                </div>
                                {{-- Next Prayer — centered --}}
                                <div style="text-align:center">
                                    <p class="fuo-kicker"><i class='bx bxs-mosque' style="margin-right:4px"></i>Next Prayer</p>
                                    <span class="fuo-next" id="fuoPrayerTime" style="display:block;font-size:22px;margin-top:4px">—</span>
                                </div>
                                {{-- Adhan Toggle — centered --}}
                                <div style="text-align:right">
                                    <p class="fuo-kicker">Adhan</p>
                                    <div class="fuo-adhan-toggle" id="fuoAdhanToggle" onclick="fuoToggleAdhan()" style="margin-top:4px">
                                        <span class="fuo-adhan-pill" id="fuoAdhanPill"></span>
                                        <span id="fuoAdhanLabel" style="font-weight:700;font-size:13px">On</span>
                                    </div>
                                </div>
                            </div>
                            {{-- All prayer times --}}
                            <div id="fuoAllPrayers" style="display:grid;grid-template-columns:repeat(5,1fr);gap:6px;padding-top:10px;border-top:1px solid rgba(255,255,255,.2)">
                                <div style="text-align:center;padding:8px 4px;border-radius:8px;background:rgba(255,255,255,.08)">
                                    <span style="font-size:9px;color:rgba(255,255,255,.5);text-transform:uppercase;letter-spacing:.5px;display:block;margin-bottom:4px">Fajr</span>
                                    <span id="fpFajr" style="font-size:13px;font-weight:700;color:#fff">—</span>
                                </div>
                                <div style="text-align:center;padding:8px 4px;border-radius:8px;background:rgba(255,255,255,.08)">
                                    <span style="font-size:9px;color:rgba(255,255,255,.5);text-transform:uppercase;letter-spacing:.5px;display:block;margin-bottom:4px">Dhuhr</span>
                                    <span id="fpDhuhr" style="font-size:13px;font-weight:700;color:#fff">—</span>
                                </div>
                                <div style="text-align:center;padding:8px 4px;border-radius:8px;background:rgba(255,255,255,.08)">
                                    <span style="font-size:9px;color:rgba(255,255,255,.5);text-transform:uppercase;letter-spacing:.5px;display:block;margin-bottom:4px">Asr</span>
                                    <span id="fpAsr" style="font-size:13px;font-weight:700;color:#fff">—</span>
                                </div>
                                <div style="text-align:center;padding:8px 4px;border-radius:8px;background:rgba(255,255,255,.08)">
                                    <span style="font-size:9px;color:rgba(255,255,255,.5);text-transform:uppercase;letter-spacing:.5px;display:block;margin-bottom:4px">Maghrib</span>
                                    <span id="fpMaghrib" style="font-size:13px;font-weight:700;color:#fff">—</span>
                                </div>
                                <div style="text-align:center;padding:8px 4px;border-radius:8px;background:rgba(255,255,255,.08)">
                                    <span style="font-size:9px;color:rgba(255,255,255,.5);text-transform:uppercase;letter-spacing:.5px;display:block;margin-bottom:4px">Isha</span>
                                    <span id="fpIsha" style="font-size:13px;font-weight:700;color:#fff">—</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Prayer Times + Adhan Script --}}
    <script>
    (function(){
        var PRAYER_NAMES = ['Fajr','Dhuhr','Asr','Maghrib','Isha'];
        var PRAYER_KEYS  = ['Fajr','Dhuhr','Asr','Maghrib','Isha'];
        var LAT = 7.7827, LNG = 4.5418;
        var adhanEnabled = localStorage.getItem('fuo_adhan') !== 'off';

        // Create adhan audio element
        var adhanAudio = document.createElement('audio');
        adhanAudio.id = 'fuo-adhan-audio';
        adhanAudio.preload = 'none';
        adhanAudio.src = 'https://www.islamcan.com/audio/adhan/azan1.mp3';
        document.body.appendChild(adhanAudio);

        function fmt12(t) {
            var p = t.split(':'), h = parseInt(p[0]), m = p[1];
            return (h > 12 ? h - 12 : h) + ':' + m + (h >= 12 ? ' PM' : ' AM');
        }
        function toMin(t) { var p = t.split(':'); return parseInt(p[0])*60 + parseInt(p[1]); }

        function updatePrayer() {
            var now = new Date();
            var today = now.getFullYear() + '-' + (now.getMonth()+1) + '-' + now.getDate();
            var cached = localStorage.getItem('fp_' + today);
            if (!cached) return;
            var d = JSON.parse(cached);
            var nowMin = now.getHours()*60 + now.getMinutes();
            var nextPrayer = null;
            var nextIdx = -1;
            for (var i = 0; i < PRAYER_KEYS.length; i++) {
                if (toMin(d[PRAYER_KEYS[i]]) > nowMin) {
                    nextPrayer = PRAYER_NAMES[i];
                    nextIdx = i;
                    document.getElementById('fuoPrayerTime').textContent = nextPrayer + ' ' + fmt12(d[PRAYER_KEYS[i]]);
                    break;
                }
            }
            if (!nextPrayer) {
                nextPrayer = 'Fajr';
                document.getElementById('fuoPrayerTime').textContent = 'Fajr ' + fmt12(d['Fajr']);
            }

            // Auto-trigger adhan when prayer time arrives
            if (nextIdx >= 0) {
                var prayerTime = toMin(d[PRAYER_KEYS[nextIdx]]);
                var diff = prayerTime - nowMin;
                // If within 1 minute of prayer time, play adhan
                if (diff >= 0 && diff <= 1 && adhanEnabled) {
                    var playKey = today + '_' + nextPrayer;
                    var played = JSON.parse(localStorage.getItem('fuo_adhan_played') || '{}');
                    if (!played[playKey]) {
                        played[playKey] = true;
                        localStorage.setItem('fuo_adhan_played', JSON.stringify(played));
                        adhanAudio.load();
                        adhanAudio.play().catch(function() {
                            // Autoplay blocked — try on next user interaction
                            document.addEventListener('click', function playOnTap() {
                                adhanAudio.play();
                                document.removeEventListener('click', playOnTap);
                            }, { once: true });
                        });
                    }
                }
            }
        }

        function updateToggleUI() {
            var pill = document.getElementById('fuoAdhanPill');
            var label = document.getElementById('fuoAdhanLabel');
            if (adhanEnabled) {
                pill.style.background = '#8be3ad';
                pill.style.setProperty('--pos', '18px');
                label.textContent = 'On';
            } else {
                pill.style.background = '#6b8177';
                pill.style.setProperty('--pos', '2px');
                label.textContent = 'Off';
            }
        }

        window.fuoToggleAdhan = function() {
            adhanEnabled = !adhanEnabled;
            localStorage.setItem('fuo_adhan', adhanEnabled ? 'on' : 'off');
            updateToggleUI();
        };

        // Populate all prayer times
        function showAllPrayers(d) {
            ['Fajr','Dhuhr','Asr','Maghrib','Isha'].forEach(function(p) {
                var el = document.getElementById('fp' + p);
                if (el && d[p]) el.textContent = fmt12(d[p]);
            });
        }

        // Fetch prayer times
        var today = new Date();
        var dk = today.getFullYear() + '-' + (today.getMonth()+1) + '-' + today.getDate();
        if (!localStorage.getItem('fp_' + dk)) {
            var dy = today.getDate(), mo = today.getMonth()+1, yr = today.getFullYear();
            fetch('https://api.aladhan.com/v1/timings/'+dy+'-'+mo+'-'+yr+'?latitude='+LAT+'&longitude='+LNG+'&method=3&school=0')
                .then(function(r){ return r.json(); })
                .then(function(d){
                    if (d.code === 200) {
                        localStorage.setItem('fp_' + dk, JSON.stringify(d.data.timings));
                        updatePrayer();
                        showAllPrayers(d.data.timings);
                    }
                });
        } else { updatePrayer(); showAllPrayers(JSON.parse(localStorage.getItem('fp_' + dk))); }
        setInterval(updatePrayer, 60000);

        // Fetch weather
        // Fetch weather + apply dynamic animated background
        function applyWeatherAnim(code) {
            var el = document.getElementById('weatherAnim');
            var card = document.getElementById('fuoPrayerCard');
            el.innerHTML = '';
            el.className = 'weather-anim';

            // Default: forest green
            card.style.background = 'linear-gradient(135deg,#035F39,#082B1A)';

            if (code <= 1) {
                // SUNNY — gold / warm green
                card.style.background = 'linear-gradient(135deg,#C9A227,#035F39)';
                el.classList.add('weather-sunny');
                for (var i = 0; i < 6; i++) {
                    var ray = document.createElement('div');
                    ray.className = 'sun-ray';
                    ray.style.left = (15 + i * 15) + '%';
                    ray.style.animationDelay = (i * 0.7) + 's';
                    el.appendChild(ray);
                }
                var sun = document.createElement('div');
                sun.className = 'sun-orb';
                el.appendChild(sun);
            } else if (code <= 3) {
                // CLOUDY — sage / muted forest
                card.style.background = 'linear-gradient(135deg,#082B1A,#5C6B62)';
                for (var c = 0; c < 5; c++) {
                    var cloud = document.createElement('div');
                    cloud.className = 'anim-cloud';
                    cloud.style.width = (60 + Math.random() * 80) + 'px';
                    cloud.style.height = (20 + Math.random() * 15) + 'px';
                    cloud.style.top = (10 + Math.random() * 60) + '%';
                    cloud.style.animationDelay = (Math.random() * 8) + 's';
                    cloud.style.animationDuration = (12 + Math.random() * 8) + 's';
                    el.appendChild(cloud);
                }
            } else if (code >= 51 && code <= 67) {
                // RAIN — deep forest / dark sage
                card.style.background = 'linear-gradient(135deg,#035F39,#082B1A,#035F39)';
                for (var r = 0; r < 40; r++) {
                    var drop = document.createElement('div');
                    drop.className = 'rain-drop';
                    drop.style.left = Math.random() * 100 + '%';
                    drop.style.animationDelay = (Math.random() * 2) + 's';
                    drop.style.animationDuration = (0.5 + Math.random() * 0.5) + 's';
                    el.appendChild(drop);
                }
            } else if (code >= 71 && code <= 77) {
                // SNOW — sage / cream
                card.style.background = 'linear-gradient(135deg,#5C6B62,#E7EFE6,#082B1A)';
                for (var s = 0; s < 30; s++) {
                    var flake = document.createElement('div');
                    flake.className = 'snow-flake';
                    flake.style.left = Math.random() * 100 + '%';
                    flake.style.animationDelay = (Math.random() * 4) + 's';
                    flake.style.animationDuration = (2 + Math.random() * 3) + 's';
                    flake.textContent = '•';
                    el.appendChild(flake);
                }
            } else if (code >= 95) {
                // STORM — forest-darker / ink
                card.style.background = 'linear-gradient(135deg,#082B1A,#182B22,#035F39)';
                var flash = document.createElement('div');
                flash.className = 'storm-flash';
                el.appendChild(flash);
                for (var r = 0; r < 50; r++) {
                    var drop = document.createElement('div');
                    drop.className = 'rain-drop';
                    drop.style.left = Math.random() * 100 + '%';
                    drop.style.animationDelay = (Math.random() * 1.5) + 's';
                    drop.style.animationDuration = (0.3 + Math.random() * 0.4) + 's';
                    el.appendChild(drop);
                }
            } else if (code >= 45) {
                // FOG — cream / sage
                card.style.background = 'linear-gradient(135deg,#082B1A,#5C6B62,#E7EFE6)';
                for (var f = 0; f < 4; f++) {
                    var fog = document.createElement('div');
                    fog.className = 'fog-layer';
                    fog.style.top = (20 + f * 18) + '%';
                    fog.style.animationDelay = (f * 2) + 's';
                    el.appendChild(fog);
                }
            } else {
                // Default clear — forest
                card.style.background = 'linear-gradient(135deg,#035F39,#082B1A)';
            }
        }

        function fetchWeather() {
            fetch('https://api.open-meteo.com/v1/forecast?latitude=7.77&longitude=4.56&current=temperature_2m,weather_code&timezone=Africa/Lagos')
                .then(function(r){ return r.json(); })
                .then(function(d){
                    var temp = Math.round(d.current.temperature_2m);
                    var code = d.current.weather_code;
                    var icons = {0:'☀️',1:'🌤️',2:'⛅',3:'☁️',45:'🌫️',48:'🌫️',51:'🌦️',53:'🌧️',55:'🌧️',61:'🌧️',63:'🌧️',65:'🌧️',71:'❄️',80:'🌦️',95:'⛈️'};
                    var descs = {0:'Sunny & clear',1:'Mostly sunny',2:'Sunny with clouds',3:'Cloudy skies',45:'Misty outside',48:'Misty outside',51:'Light rain shower',53:'Light rain',55:'Heavy rain shower',61:'Raining now',63:'Steady rain',65:'Heavy rain',71:'Snowfall',80:'Intermittent showers',95:'Thunderstorm nearby'};
                    document.getElementById('fuoWeatherTemp').textContent = temp + '°C';
                    document.getElementById('fuoWeatherIcon').textContent = icons[code] || '🌤️';
                    var descEl = document.getElementById('fuoWeatherDesc');
                    descEl.style.opacity = '0';
                    setTimeout(function(){ descEl.textContent = descs[code] || 'Osogbo'; descEl.style.opacity = '1'; }, 200);
                    document.getElementById('fuoWeatherUpdate').textContent = 'Updated just now';
                    applyWeatherAnim(code);
                })
                .catch(function(){
                    document.getElementById('fuoWeatherTemp').textContent = '28°C';
                    applyWeatherAnim(0);
                });
        }
        fetchWeather();
        // Refresh weather every 10 minutes for real-time updates
        setInterval(fetchWeather, 600000);
        updateToggleUI();
    })();
    </script>

    {{-- Hadith Read More Toggle --}}
    <script>
    function toggleHadith() {
        var short = document.getElementById('hadithShort');
        var full = document.getElementById('hadithFull');
        var btn = document.getElementById('hadithToggle');
        var arrow = document.getElementById('hadithArrow');
        if (full.style.display === 'none') {
            short.style.display = 'none';
            full.style.display = 'block';
            btn.innerHTML = 'Read less <i class="bx bx-chevron-up" id="hadithArrow"></i>';
        } else {
            short.style.display = 'block';
            full.style.display = 'none';
            btn.innerHTML = 'Read more <i class="bx bx-chevron-down" id="hadithArrow"></i>';
        }
    }
    </script>
    @endif

    {{-- ABOUT --}}
    <section id="about" class="fuo-section">
        <div class="fuo-wrap">
            <div class="fuo-about-grid">
                <div class="fuo-about-photo-stack">
                    <div class="fuo-about-photo-main">
                        <img src="{{ asset('img/all-img/vcspeech.jpeg') }}" alt="Vice-Chancellor" loading="lazy" width="400" height="500">
                    </div>
                    <div class="fuo-about-photo-tag">
                        <p class="fuo-role">Office of the Vice-Chancellor</p>
                        <p class="fuo-name">Leading Fountain's vision forward</p>
                    </div>
                </div>
                <div class="fuo-about-text">
                    <p class="fuo-section-head fuo-kicker" style="margin-bottom:10px;">About the university</p>
                    <h2 style="font-size:30px; margin-bottom:20px;">Where knowledge meets innovation</h2>
                    <p>Fountain University was licensed in 2007, following NASFAT's vision for quality education initiated in 2000. A Strategic Committee was formed to establish the institution's foundation and infrastructure, following an academic summit of 30 distinguished academic personalities in Lagos.</p>
                    <p>Rooted in values of knowledge, character and service, the University promotes academic and moral excellence, and continues to expand through innovation, research and community engagement.</p>
                    <div class="fuo-about-actions">
                        <a href="https://fuo.edu.ng/about" class="fuo-btn fuo-btn-ghost">Read more</a>
                        <a href="#" class="fuo-btn fuo-btn-primary"><i class='bx bx-map-pin'></i>&nbsp;Schedule a campus tour</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- MISSION / VISION + ACADEMIC CARDS --}}
    <section class="fuo-section fuo-mv-area">
        <div class="fuo-wrap">
            <div class="fuo-mv-grid">
                <div>
                    <p class="fuo-section-head fuo-kicker">Mission and vision</p>
                    <div class="fuo-mv-item">
                        <div class="fuo-icon"><i class='bx bx-target-lock'></i></div>
                        <div><h3>Our vision</h3><p>To produce competent and resourceful graduates with high moral standards, irrespective of race, tribe, religion or political inclinations.</p></div>
                    </div>
                    <div class="fuo-mv-item">
                        <div class="fuo-icon"><i class='bx bx-compass'></i></div>
                        <div><h3>Our mission</h3><p>To be a pace-setting institution in terms of learning, character-building and service to humanity.</p></div>
                    </div>
                    <div class="fuo-mv-item">
                        <div class="fuo-icon"><i class='bx bx-book-open'></i></div>
                        <div><h3>Philosophy</h3><p>Committed to the total development of men and women in an enabling environment, influenced by Islamic ethics and culture.</p></div>
                    </div>
                    <a href="https://fuo.edu.ng/undergradute-programme" class="fuo-btn fuo-btn-primary" style="margin-top:6px;">More on academics</a>
                </div>
                <div class="fuo-academic-grid">
                    <div class="fuo-academic-card">
                        <div class="fuo-img"><span class="fuo-num">01</span><img src="{{ asset('img/all-img/academic-programmes.jpg') }}" alt="Academic programmes" loading="lazy" width="400" height="260"></div>
                        <div class="fuo-body"><h4>Academic programmes</h4><p>Courses tailored to students satisfaction and employability.</p><a class="fuo-link" href="https://fuo.edu.ng/undergradute-programme">Learn more <i class='bx bx-right-arrow-alt'></i></a></div>
                    </div>
                    <div class="fuo-academic-card">
                        <div class="fuo-img"><span class="fuo-num">02</span><img src="{{ asset('img/all-img/global-ranking-impacts.jpg') }}" alt="Global ranking" loading="lazy" width="400" height="260"></div>
                        <div class="fuo-body"><h4>Global Ranking & Impact</h4><p>THE ranks Fountain among top Nigerian universities, 2024.</p><a class="fuo-link" href="/global-ranking-impact">Learn more <i class='bx bx-right-arrow-alt'></i></a></div>
                    </div>
                    <div class="fuo-academic-card">
                        <div class="fuo-img"><span class="fuo-num">03</span><img src="{{ asset('img/all-img/admission-requirements.jpeg') }}" alt="Admission requirements" loading="lazy" width="400" height="260"></div>
                        <div class="fuo-body"><h4>Admission requirements</h4><p>Everything needed to aid your admission into FUO.</p><a class="fuo-link" href="https://fuo.edu.ng/admission-requirement">Learn more <i class='bx bx-right-arrow-alt'></i></a></div>
                    </div>
                    <div class="fuo-academic-card">
                        <div class="fuo-img"><span class="fuo-num">04</span><img src="{{ asset('img/all-img/student-life.jpg') }}" alt="Campus Life" loading="lazy" width="400" height="260"></div>
                        <div class="fuo-body"><h4>Campus Life</h4><p>Campus culture, extracurriculars and hostel life.</p><a class="fuo-link" href="/campus-life">Learn more <i class='bx bx-right-arrow-alt'></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- VIDEO --}}
    <div class="fuo-video-area">
        <img src="{{ asset('img/all-img/anniversary-documentation.png') }}" alt="Fountain University documentary" loading="lazy" width="800" height="450">
        <div class="fuo-video-play">
            <a class="fuo-play-btn" href="https://www.youtube.com/watch?v=rAhNrZw4BaA"><i class='bx bx-play'></i></a>
            <p class="fuo-video-caption">Watch: FUO first anniversary documentary — building minds, transforming futures</p>
        </div>
    </div>

    {{-- NEWS --}}
    <section id="news" class="fuo-section">
        <div class="fuo-wrap">
            <div class="fuo-section-head">
                <p class="fuo-kicker">News and updates</p>
                <h2>Recent news and events</h2>
            </div>
            <div class="fuo-news-layout">
                <div>
                    @forelse($featuredNews as $item)
                        <a href="{{ route('news.show', $item->slug) }}" class="fuo-news-featured" @if(!$loop->first) style="margin-top:20px;" @endif>
                            <div class="fuo-img"><img src="{{ $item->image_url }}" alt="{{ $item->title }}" loading="lazy" width="400" height="250"></div>
                            <div class="fuo-body">
                                <span class="fuo-tag">{{ $item->category }}</span>
                                <h3>{{ $item->title }}</h3>
                                @if($item->excerpt)<p>{{ Str::limit($item->excerpt, 140) }}</p>@endif
                                @if($item->event_date_label)<span class="fuo-date"><i class='bx bxs-calendar'></i> {{ $item->event_date_label }}</span>@endif
                            </div>
                        </a>
                    @empty
                        <div class="fuo-news-featured"><div class="fuo-body"><p style="color:var(--fu-muted);">No news published yet.</p></div></div>
                    @endforelse
                </div>
                <div class="fuo-news-side">
                    @if(isset($sidebarFeatured) && $sidebarFeatured)
                        <a href="{{ route('news.show', $sidebarFeatured->slug) }}" class="fuo-news-side-item">
                            <div class="fuo-img"><img src="{{ $sidebarFeatured->image_url }}" alt="{{ $sidebarFeatured->title }}" loading="lazy" width="120" height="80"></div>
                            <div><span class="fuo-tag">{{ $sidebarFeatured->category }}</span><h4>{{ Str::limit($sidebarFeatured->title, 60) }}</h4></div>
                        </a>
                    @endif
                    @if(isset($sidebarSmall) && $sidebarSmall->count())
                        @foreach($sidebarSmall as $small)
                            <a href="{{ route('news.show', $small->slug) }}" class="fuo-news-side-item">
                                <div class="fuo-img"><img src="{{ $small->image_url }}" alt="{{ $small->title }}" loading="lazy" width="120" height="80"></div>
                                <div><span class="fuo-tag">{{ $small->category }}</span><h4>{{ Str::limit($small->title, 60) }}</h4></div>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
            <p class="fuo-news-more">Fountain University leads, others follow. <a href="{{ route('news.index') }}">More campus news →</a></p>
        </div>
    </section>

    {{-- SCHOLARSHIP --}}
    <section class="fuo-section fuo-scholarship-area">
        <div class="fuo-wrap">
            <div class="fuo-scholarship-grid">
                <div>
                    <h2>Scholarship programmes</h2>
                    <p>Fountain University students of Arabic and Islamic studies can benefit from our scholarship programme, designed to support learning with ease and focus.</p>
                    <a href="#" class="fuo-btn fuo-btn-gold">Find out</a>
                </div>
                <div>
                    <h2>Approved school fee (2026–2027)</h2>
                    <p>Management hereby notifies all students, parents and guardians that the approved school fees schedule for the 2026–2027 academic session has been released.</p>
                    <a href="{{ route('school-fees') }}" class="fuo-btn fuo-btn-gold">Find out</a>
                </div>
            </div>
        </div>
    </section>

    {{-- CAMPUS --}}
    <section id="campus" class="fuo-section">
        <div class="fuo-wrap">
            <div class="fuo-section-head">
                <p class="fuo-kicker">The campus experience</p>
                <h2>One university, many places</h2>
            </div>
            <div class="fuo-campus-grid">
                <div class="fuo-campus-tile">
                    <img src="{{ asset('img/all-img/fountain-library.jpg') }}" alt="E-Library" loading="lazy" width="400" height="280">
                    <div class="fuo-campus-tile-content"><h3>E-Library</h3><a href="#">Virtual tour →</a></div>
                </div>
                <div class="fuo-campus-tile">
                    <img src="{{ asset('img/all-img/nursing-laboratory.jpg') }}" alt="Nursing laboratory" loading="lazy" width="400" height="280">
                    <div class="fuo-campus-tile-content"><h3>Nursing laboratory</h3><a href="#">Virtual tour →</a></div>
                </div>
                <div class="fuo-campus-tile">
                    <img src="{{ asset('img/all-img/biology-laboratory.jpg') }}" alt="Biology laboratory" loading="lazy" width="400" height="280">
                    <div class="fuo-campus-tile-content"><h3>Biology laboratory</h3><a href="#">Virtual tour →</a></div>
                </div>
            </div>
        </div>
    </section>

    {{-- SUCCESS --}}
    <section class="fuo-section">
        <div class="fuo-wrap">
            <div class="fuo-section-head">
                <p class="fuo-kicker">Student, faculty and alumni success</p>
                <h2>Celebrating the legacy, embracing the future</h2>
            </div>
            <div class="fuo-success-grid">
                <a href="https://www.youtube.com/watch?v=bNnfoUmIwGw" class="fuo-success-card">
                    <img src="{{ asset('img/all-img/convolecturer1.jpg') }}" alt="15th convocation lecture" loading="lazy" width="400" height="225">
                    <div class="fuo-success-play"><i class='bx bx-play'></i></div>
                    <div class="fuo-success-label">15th convocation lecture</div>
                </a>
                <a href="https://www.youtube.com/watch?v=rAhNrZw4BaA" class="fuo-success-card">
                    <img src="{{ asset('img/all-img/anniversary-documentation.png') }}" alt="First anniversary documentary" loading="lazy" width="400" height="225">
                    <div class="fuo-success-play"><i class='bx bx-play'></i></div>
                    <div class="fuo-success-label">First anniversary documentary</div>
                </a>
                <a href="https://www.youtube.com/watch?v=bNnfoUmIwGw" class="fuo-success-card">
                    <img src="{{ asset('img/all-img/bgs.jpg') }}" alt="Best graduating student" loading="lazy" width="400" height="225">
                    <div class="fuo-success-play"><i class='bx bx-play'></i></div>
                    <div class="fuo-success-label">Best graduating student</div>
                </a>
            </div>
        </div>
    </section>

    {{-- SOCIAL --}}
    <section class="fuo-section fuo-social-area">
        <div class="fuo-wrap">
            <div class="fuo-section-head">
                <p class="fuo-kicker">Connect with us</p>
                <h2>Social media and broadcast</h2>
            </div>
            <div class="fuo-social-grid">
                <div class="fuo-social-box">
                    <div class="fuo-radio-head">
                        <div class="fuo-radio-live"><span class="pulse"></span>On air</div>
                        <div class="fuo-radio-name">FUO Radio</div>
                        <div class="fuo-radio-freq">94.9 FM</div>
                    </div>
                    <div class="fuo-radio-body">
                        <p>Your premier campus radio station. Music, news, Islamic programmes and student talk shows.</p>
                        <a href="#" class="fuo-btn fuo-btn-primary" style="width:100%; justify-content:center;"><i class='bx bx-radio'></i>&nbsp;Listen live</a>
                    </div>
                </div>
                <div class="fuo-social-box">
                    <div class="fuo-fb-head">
                        <i class='bx bxl-facebook-circle' style="font-size:24px; color:#fff;"></i>
                        <div><div class="fuo-name" style="color:#fff;">Fountain University Osogbo</div><div class="fuo-handle">facebook.com/fuoweb</div></div>
                        <a href="https://www.facebook.com/fuoweb" target="_blank" rel="noopener noreferrer" aria-label="Follow Fountain University on Facebook" style="margin-left:auto; background:#fff; color:#1877F2; font-size:12px; font-weight:700; padding:5px 14px; border-radius:6px;">Follow Page</a>
                    </div>
                    <div style="display:flex; justify-content:center; overflow:hidden; min-height:320px;">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffuoweb&tabs=timeline&width=500&height=400&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="400" style="border:none; overflow:hidden; display:block;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" title="Fountain University Facebook feed"></iframe>
                    </div>
                </div>
                <div class="fuo-social-box">
                    <div class="fuo-yt-head"><i class='bx bxl-youtube' style="font-size:22px; color:#fff;"></i><span style="color:#fff; font-size:13px; font-weight:600;">FUO on YouTube</span></div>
                    <div class="fuo-yt-title">VC's documentary — Building Minds, Transforming Futures</div>
                    <div class="fuo-yt-embed">
                        <iframe src="https://www.youtube.com/embed/u_iW3X8-X78" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen title="VC's documentary — Building Minds, Transforming Futures"></iframe>
                    </div>
                </div>
            </div>
            <div class="fuo-social-links-row">
                <a class="fuo-social-pill" style="background:#1877F2;" href="https://www.facebook.com/fuoweb" target="_blank" rel="noopener noreferrer" aria-label="Follow Fountain University on Facebook"><i class='bx bxl-facebook'></i>Facebook</a>
                <a class="fuo-social-pill" style="background:linear-gradient(45deg,#f09433,#dc2743,#bc1888);" href="https://www.instagram.com/fountain.university/" target="_blank" rel="noopener noreferrer" aria-label="Follow Fountain University on Instagram"><i class='bx bxl-instagram'></i>Instagram</a>
                <a class="fuo-social-pill" style="background:#000;" href="https://x.com/fuoweb" target="_blank" rel="noopener noreferrer" aria-label="Follow Fountain University on X (Twitter)"><i class='bx bxl-twitter'></i>Twitter / X</a>
                <a class="fuo-social-pill" style="background:#0077B5;" href="https://ng.linkedin.com/school/fountain-university-osogbo/" target="_blank" rel="noopener noreferrer" aria-label="Follow Fountain University on LinkedIn"><i class='bx bxl-linkedin'></i>LinkedIn</a>
                <a class="fuo-social-pill" style="background:#FF0000;" href="https://www.youtube.com/@FountainUniversityOsogbo" target="_blank" rel="noopener noreferrer" aria-label="Watch Fountain University on YouTube"><i class='bx bxl-youtube'></i>YouTube</a>
            </div>
        </div>
    </section>

    {{-- ── Still wondering where to begin? ── --}}
    <div class="wonder-bar__wrapper" role="region" aria-label="Still wondering where to begin?" style="background:#035F39; padding:32px 0; margin-top:0;">
        <div class="fuo-wrap" style="max-width:960px; margin:0 auto; padding:0 24px;">
            <div class="wonder-bar" style="display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:20px;">
                <div class="wonder-bar__header" style="flex-shrink:0;">
                    <span class="wonder-bar__header--text" style="color:#fff; font-size:20px; font-weight:700; letter-spacing:-0.3px;">Still wondering where to begin?</span>
                </div>
                <ul class="wonder-bar__list" style="display:flex; gap:12px; list-style:none; margin:0; padding:0; flex-wrap:wrap;">
                    <li class="wonder-bar__list--item">
                        <a class="wonder-bar__list--link" href="{{ route('undergradute-programme') }}" style="display:inline-block; background:#C9A227; color:#035F39; font-weight:700; font-size:14px; padding:10px 22px; border-radius:6px; text-decoration:none; transition:background .2s;">Explore programmes</a>
                    </li>
                    <li class="wonder-bar__list--item">
                        <a class="wonder-bar__list--link" href="{{ route('admission-requirement') }}" style="display:inline-block; background:rgba(255,255,255,0.15); color:#fff; font-weight:600; font-size:14px; padding:10px 22px; border-radius:6px; text-decoration:none; border:1px solid rgba(255,255,255,0.3); transition:background .2s;">Admissions</a>
                    </li>
                    <li class="wonder-bar__list--item">
                        <a class="wonder-bar__list--link" href="{{ route('contact') }}" style="display:inline-block; background:rgba(255,255,255,0.15); color:#fff; font-weight:600; font-size:14px; padding:10px 22px; border-radius:6px; text-decoration:none; border:1px solid rgba(255,255,255,0.3); transition:background .2s;">Contact us</a>
                    </li>
                    <li class="wonder-bar__list--item">
                        <a class="wonder-bar__list--link" href="{{ route('campus-life') }}" style="display:inline-block; background:rgba(255,255,255,0.15); color:#fff; font-weight:600; font-size:14px; padding:10px 22px; border-radius:6px; text-decoration:none; border:1px solid rgba(255,255,255,0.3); transition:background .2s;">Campus life</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

@endsection
