{{--
    ============================================================
    PRAYER TIMES BANNER — paste this BETWEEN:

    <!-- End Navbar Area Start -->

    AND

    @yield('content')

    in resources/views/layouts/app.blade.php (around line 375)
    ============================================================
--}}

<!-- Start Prayer Times Banner -->
<div id="prayer-banner" style="
    background: #1a5276;
    border-bottom: 2px solid rgba(244,196,48,0.3);
    border-left: 4px solid #f4c430;
    position: relative;
    box-shadow: 0 2px 8px rgba(0,0,0,0.2);
">
    <div class="container">
        <div style="display:flex; align-items:center; justify-content:space-between;
                    flex-wrap:wrap; gap:6px; padding:7px 0;">

            {{-- Left: mosque icon + next prayer countdown --}}
            <div style="display:flex; align-items:center; gap:10px; flex-shrink:0">
                <span style="font-size:20px">🕌</span>
                <div>
                    <span style="color:rgba(255,255,255,0.6); font-size:10px; text-transform:uppercase;
                                 letter-spacing:0.5px; display:block; line-height:1">Next Prayer</span>
                    <span id="next-prayer-name"
                          style="color:#f4c430; font-size:13px; font-weight:700"></span>
                    <span style="color:rgba(255,255,255,0.5); font-size:12px; margin:0 4px">in</span>
                    <span id="next-prayer-countdown"
                          style="color:#f4c430; font-size:13px; font-weight:700"></span>
                </div>
            </div>

            {{-- Middle: all 5 prayer times --}}
            <div id="prayer-times-list"
                 style="display:flex; gap:16px; flex-wrap:wrap; justify-content:center">
                {{-- Filled by JavaScript --}}
                <span style="color:rgba(255,255,255,0.4); font-size:11px">Loading prayer times...</span>
            </div>

            {{-- Right: adhan toggle --}}
            <div style="display:flex; align-items:center; gap:8px; flex-shrink:0">
                <span style="color:rgba(255,255,255,0.6); font-size:11px">Adhan</span>
                <div id="adhan-toggle"
                     onclick="toggleAdhan()"
                     style="width:42px; height:22px; border-radius:11px; background:#f4c430;
                            cursor:pointer; position:relative; transition:background 0.3s;
                            border: 1px solid rgba(255,255,255,0.2)">
                    <div id="adhan-knob"
                         style="width:18px; height:18px; background:#fff; border-radius:50%;
                                position:absolute; top:1px; left:21px; transition:left 0.3s;
                                box-shadow:0 1px 3px rgba(0,0,0,0.3)"></div>
                </div>
                <span id="adhan-status"
                      style="color:#f4c430; font-size:11px; font-weight:600; min-width:24px">ON</span>
            </div>

        </div>
    </div>

    {{-- Mobile: compact view shows just next prayer --}}
    <style>
        #prayer-banner {
            min-height: 56px;
        }
        @media (max-width: 768px) {
            #prayer-times-list { display: none !important; }
            #prayer-banner .container > div { padding: 6px 0; }
        }
        @media (max-width: 480px) {
            #adhan-toggle, #adhan-status,
            #prayer-banner .container > div > div:last-child { display: none !important; }
        }
    </style>
</div>
<!-- End Prayer Times Banner -->


<!-- Adhan Notification Popup -->
<div id="adhan-popup" style="
    display:none;
    position:fixed; top:80px; left:50%; transform:translateX(-50%);
    background:#1a5276; color:#fff; padding:16px 28px;
    border-radius:12px; border:2px solid #f4c430;
    box-shadow:0 8px 32px rgba(0,0,0,0.3);
    z-index:9999; text-align:center;
    animation: slideDown 0.4s ease;
">
    <p style="font-size:22px; margin:0 0 4px">🕌</p>
    <p id="adhan-popup-text"
       style="font-size:16px; font-weight:700; color:#f4c430; margin:0 0 4px"></p>
    <p style="font-size:12px; color:rgba(255,255,255,0.7); margin:0">Allahu Akbar</p>
</div>

<style>
@keyframes slideDown {
    from { opacity:0; transform:translateX(-50%) translateY(-20px); }
    to   { opacity:1; transform:translateX(-50%) translateY(0); }
}
</style>

{{-- Hidden audio element for Adhan --}}
<audio id="adhan-audio" preload="none">
    <source src="https://www.islamcan.com/audio/adhan/azan1.mp3" type="audio/mpeg">
</audio>


<script>
// ── CONFIG ──────────────────────────────────────────────────
const OSOGBO_LAT    = 7.7827;
const OSOGBO_LNG    = 4.5418;
const METHOD        = 3;   // Muslim World League
const SCHOOL        = 0;   // Standard (Shafi'i) for Asr

const PRAYER_NAMES  = ['Fajr', 'Dhuhr', 'Asr', 'Maghrib', 'Isha'];
const PRAYER_KEYS   = ['Fajr', 'Dhuhr', 'Asr', 'Maghrib', 'Isha'];

let prayerTimesData  = {};
let adhanEnabled     = localStorage.getItem('adhanEnabled') !== 'false'; // default ON
let adhanPlayed      = JSON.parse(localStorage.getItem('adhanPlayed') || '{}');
let countdownInterval;

// ── INIT ────────────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', function() {
    updateToggleUI();
    fetchPrayerTimes();
});

// ── FETCH PRAYER TIMES FROM ALADHAN API ─────────────────────
function fetchPrayerTimes() {
    const today = new Date();
    const day   = today.getDate();
    const month = today.getMonth() + 1;
    const year  = today.getFullYear();
    const dateKey = `${year}-${month}-${day}`;

    // Check if we have cached times for today
    const cached = localStorage.getItem('prayerTimes_' + dateKey);
    if (cached) {
        prayerTimesData = JSON.parse(cached);
        renderPrayerTimes();
        return;
    }

    const url = `https://api.aladhan.com/v1/timings/${day}-${month}-${year}`
              + `?latitude=${OSOGBO_LAT}&longitude=${OSOGBO_LNG}`
              + `&method=${METHOD}&school=${SCHOOL}`;

    fetch(url)
        .then(res => res.json())
        .then(data => {
            if (data.code === 200) {
                prayerTimesData = data.data.timings;
                // Cache for the day
                localStorage.setItem('prayerTimes_' + dateKey, JSON.stringify(prayerTimesData));
                // Clear yesterday's cache
                const yesterday = new Date(today);
                yesterday.setDate(today.getDate() - 1);
                localStorage.removeItem('prayerTimes_'
                    + `${yesterday.getFullYear()}-${yesterday.getMonth()+1}-${yesterday.getDate()}`);
                renderPrayerTimes();
            }
        })
        .catch(err => {
            document.getElementById('prayer-times-list').innerHTML =
                '<span style="color:rgba(255,255,255,0.4);font-size:11px">Unable to load prayer times</span>';
        });
}

// ── RENDER TIMES IN BANNER ───────────────────────────────────
function renderPrayerTimes() {
    const list = document.getElementById('prayer-times-list');
    list.innerHTML = '';

    const now       = new Date();
    const nextIdx   = getNextPrayerIndex(now);

    PRAYER_KEYS.forEach((key, i) => {
        const time    = prayerTimesData[key];
        const isNext  = (i === nextIdx);
        const isPast  = isPrayerPast(time, now);

        const span = document.createElement('div');
        span.style.cssText = `
            text-align:center;
            opacity: ${isPast && !isNext ? '0.45' : '1'};
        `;
        span.innerHTML = `
            <div style="font-size:10px; color:${isNext ? '#f4c430' : 'rgba(255,255,255,0.6)'}; 
                        font-weight:${isNext ? '700' : '400'};
                        text-transform:uppercase; letter-spacing:0.5px; line-height:1; margin-bottom:2px">
                ${PRAYER_NAMES[i]}
            </div>
            <div style="font-size:13px; color:${isNext ? '#f4c430' : '#fff'}; 
                        font-weight:${isNext ? '700' : '400'}">
                ${formatTime(time)}
                ${isNext ? '<span style="font-size:9px; color:#f4c430; margin-left:2px">▲</span>' : ''}
            </div>
        `;
        list.appendChild(span);
    });

    startCountdown(nextIdx);
}

// ── COUNTDOWN TO NEXT PRAYER ─────────────────────────────────
function startCountdown(nextIdx) {
    if (countdownInterval) clearInterval(countdownInterval);

    function update() {
        const now    = new Date();
        const key    = PRAYER_KEYS[nextIdx];
        const name   = PRAYER_NAMES[nextIdx];
        const time   = prayerTimesData[key];
        const target = getPrayerDate(time);
        const diff   = target - now;

        if (diff <= 0) {
            // Prayer time reached — play adhan
            triggerAdhan(name);
            // Re-fetch to get next prayer
            setTimeout(() => renderPrayerTimes(), 2000);
            clearInterval(countdownInterval);
            return;
        }

        const hours   = Math.floor(diff / 3600000);
        const minutes = Math.floor((diff % 3600000) / 60000);
        const seconds = Math.floor((diff % 60000) / 1000);

        document.getElementById('next-prayer-name').textContent      = name;
        document.getElementById('next-prayer-countdown').textContent =
            hours > 0
                ? `${hours}h ${String(minutes).padStart(2,'0')}m`
                : `${String(minutes).padStart(2,'0')}m ${String(seconds).padStart(2,'0')}s`;
    }

    update();
    countdownInterval = setInterval(update, 1000);
}

// ── TRIGGER ADHAN ────────────────────────────────────────────
function triggerAdhan(prayerName) {
    const today   = new Date().toDateString();
    const playKey = today + '_' + prayerName;

    if (adhanPlayed[playKey]) return; // already played today

    // Mark as played
    adhanPlayed[playKey] = true;
    localStorage.setItem('adhanPlayed', JSON.stringify(adhanPlayed));

    // Show popup
    const popup = document.getElementById('adhan-popup');
    document.getElementById('adhan-popup-text').textContent = `It is time for ${prayerName}`;
    popup.style.display = 'block';
    setTimeout(() => { popup.style.display = 'none'; }, 12000);

    // Play audio if enabled
    if (adhanEnabled) {
        const audio = document.getElementById('adhan-audio');
        audio.load();
        audio.play().catch(() => {
            // Autoplay blocked — show reminder
            document.getElementById('adhan-popup-text').textContent =
                `${prayerName} — Click anywhere to hear the Adhan`;
            document.body.addEventListener('click', function playOnce() {
                audio.play();
                document.body.removeEventListener('click', playOnce);
            }, { once: true });
        });
    }
}

// ── TOGGLE ADHAN ON/OFF ──────────────────────────────────────
function toggleAdhan() {
    adhanEnabled = !adhanEnabled;
    localStorage.setItem('adhanEnabled', adhanEnabled);
    updateToggleUI();
}

function updateToggleUI() {
    const toggle = document.getElementById('adhan-toggle');
    const knob   = document.getElementById('adhan-knob');
    const status = document.getElementById('adhan-status');
    if (adhanEnabled) {
        toggle.style.background = '#f4c430';
        knob.style.left         = '21px';
        status.textContent      = 'ON';
        status.style.color      = '#f4c430';
    } else {
        toggle.style.background = 'rgba(255,255,255,0.2)';
        knob.style.left         = '2px';
        status.textContent      = 'OFF';
        status.style.color      = 'rgba(255,255,255,0.4)';
    }
}

// ── HELPERS ──────────────────────────────────────────────────
function formatTime(timeStr) {
    if (!timeStr) return '';
    const [h, m] = timeStr.split(':').map(Number);
    const ampm   = h >= 12 ? 'PM' : 'AM';
    const hour12 = h % 12 || 12;
    return `${hour12}:${String(m).padStart(2,'0')} ${ampm}`;
}

function getPrayerDate(timeStr) {
    const [h, m] = timeStr.split(':').map(Number);
    const d = new Date();
    d.setHours(h, m, 0, 0);
    return d;
}

function isPrayerPast(timeStr, now) {
    return getPrayerDate(timeStr) < now;
}

function getNextPrayerIndex(now) {
    for (let i = 0; i < PRAYER_KEYS.length; i++) {
        if (!isPrayerPast(prayerTimesData[PRAYER_KEYS[i]], now)) {
            return i;
        }
    }
    return 0; // after Isha, next is Fajr
}
</script>
