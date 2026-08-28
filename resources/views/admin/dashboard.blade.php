@extends('admin.layout')
@section('page_title', 'Dashboard')
@push('styles')
<style>
/* ── 3D Card Effects ── */
.stat-card-3d { perspective: 800px; transition: transform .3s; cursor: default; }
.stat-card-3d:hover { transform: translateY(-6px) rotateX(2deg) rotateY(-1deg); }
.stat-card-3d .inner { background: var(--bg-card); border-radius: 14px; padding: 22px; box-shadow: 0 8px 32px rgba(0,0,0,.08); transition: box-shadow .3s; border: 1px solid var(--border); }
.stat-card-3d:hover .inner { box-shadow: 0 16px 48px rgba(0,0,0,.15); }
.stat-card-3d .icon-3d { width: 52px; height: 52px; border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 24px; transition: transform .3s; }
.stat-card-3d:hover .icon-3d { transform: scale(1.1) rotate(-5deg); }

/* ── Animated gradient background on stat cards ── */
.gradient-blue { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
.gradient-green { background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%); }
.gradient-orange { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
.gradient-purple { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
.gradient-pink { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
.gradient-teal { background: linear-gradient(135deg, #30cfd0 0%, #330867 100%); }
.gradient-fire { background: linear-gradient(135deg, #f83600 0%, #f9d423 100%); }
.gradient-dark { background: linear-gradient(135deg, #434343 0%, #000000 100%); }

/* ── Weather widget ── */
.weather-card { background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 16px; padding: 24px; color: #fff; position: relative; overflow: hidden; }
.weather-card::after { content: ''; position: absolute; top: -30px; right: -30px; width: 120px; height: 120px; background: rgba(255,255,255,.1); border-radius: 50%; }
.weather-card .temp { font-size: 48px; font-weight: 800; line-height: 1; }
.weather-card .desc { font-size: 14px; opacity: .85; }

/* ── Clock widget ── */
.clock-card { background: linear-gradient(135deg, #0f3460, #1a1a2e); border-radius: 16px; padding: 24px; color: #fff; position: relative; overflow: hidden; }
.clock-card .time { font-size: 44px; font-weight: 800; font-family: 'Courier New', monospace; letter-spacing: 2px; }
.clock-card .date { font-size: 14px; opacity: .8; }

/* ── Animations ── */
@keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
@keyframes pulse { 0%,100% { transform: scale(1); } 50% { transform: scale(1.05); } }
@keyframes shimmer { 0% { background-position: -200% 0; } 100% { background-position: 200% 0; } }
.animate-in { animation: fadeInUp .5s ease forwards; }
.animate-in:nth-child(1) { animation-delay: .05s; }
.animate-in:nth-child(2) { animation-delay: .1s; }
.animate-in:nth-child(3) { animation-delay: .15s; }
.animate-in:nth-child(4) { animation-delay: .2s; }
.animate-in:nth-child(5) { animation-delay: .25s; }
.animate-in:nth-child(6) { animation-delay: .3s; }
.animate-in:nth-child(7) { animation-delay: .35s; }
.animate-in:nth-child(8) { animation-delay: .4s; }

/* ── Progress bars ── */
.mini-progress { height: 6px; border-radius: 3px; background: #e9ecef; overflow: hidden; margin-top: 8px; }
.mini-progress .fill { height: 100%; border-radius: 3px; transition: width 1.5s ease; }
</style>
@endpush

@section('content')
{{-- Welcome Banner --}}
<div class="welcome-banner animate-in" style="border-radius:14px">
    <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:16px">
        <div>
            <h3>👋 Welcome back, {{ auth()->user()->name ?? 'Admin' }}!</h3>
            <p>Here's what's happening with your website today.</p>
        </div>
        <div id="liveClock" style="text-align:right">
            <div style="font-size:28px;font-weight:800;font-family:'Courier New',monospace" id="clockTime"></div>
            <div style="font-size:13px;opacity:.8" id="clockDate"></div>
        </div>
    </div>
</div>

{{-- Weather + Quick Stats Row --}}
<div class="row g-3 mb-4">
    <div class="col-md-4">
        <div class="weather-card animate-in">
            <div style="display:flex;align-items:center;gap:16px">
                <div>
                    <div class="temp" id="weatherTemp">--°</div>
                    <div class="desc" id="weatherDesc">Loading...</div>
                    <div style="font-size:12px;opacity:.7;margin-top:4px">📍 Osogbo, Nigeria</div>
                </div>
                <div style="font-size:56px;margin-left:auto" id="weatherIcon">🌤️</div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="row g-3">
            <div class="col-6 col-md-4 animate-in">
                <div class="stat-card-3d"><div class="inner d-flex align-items-center gap-3">
                    <div class="icon-3d gradient-blue" style="color:#fff"><i class='bx bxs-news'></i></div>
                    <div><div style="font-size:26px;font-weight:800">{{ \App\Models\News::count() }}</div><div class="text-muted" style="font-size:11px">School News</div></div>
                </div></div>
            </div>
            <div class="col-6 col-md-4 animate-in">
                <div class="stat-card-3d"><div class="inner d-flex align-items-center gap-3">
                    <div class="icon-3d gradient-green" style="color:#fff"><i class='bx bxs-user-detail'></i></div>
                    <div><div style="font-size:26px;font-weight:800">{{ \App\Models\Lecturer::count() }}</div><div class="text-muted" style="font-size:11px">Lecturers</div></div>
                </div></div>
            </div>
            <div class="col-6 col-md-4 animate-in">
                <div class="stat-card-3d"><div class="inner d-flex align-items-center gap-3">
                    <div class="icon-3d gradient-orange" style="color:#fff"><i class='bx bxs-institution'></i></div>
                    <div><div style="font-size:26px;font-weight:800">{{ \App\Models\College::count() }}</div><div class="text-muted" style="font-size:11px">Colleges</div></div>
                </div></div>
            </div>
        </div>
    </div>
</div>

{{-- Second Stats Row --}}
<div class="row g-3 mb-4">
    <div class="col-6 col-md-3 animate-in">
        <div class="stat-card-3d"><div class="inner d-flex align-items-center gap-3">
            <div class="icon-3d gradient-purple" style="color:#fff"><i class='bx bx-sitemap'></i></div>
            <div><div style="font-size:24px;font-weight:800">{{ \App\Models\Department::count() }}</div><div class="text-muted" style="font-size:11px">Departments</div></div>
        </div></div>
    </div>
    <div class="col-6 col-md-3 animate-in">
        <div class="stat-card-3d"><div class="inner d-flex align-items-center gap-3">
            <div class="icon-3d gradient-pink" style="color:#fff"><i class='bx bx-buildings'></i></div>
            <div><div style="font-size:24px;font-weight:800">{{ \App\Models\Centre::count() }}</div><div class="text-muted" style="font-size:11px">Centres</div></div>
        </div></div>
    </div>
    <div class="col-6 col-md-3 animate-in">
        <div class="stat-card-3d"><div class="inner d-flex align-items-center gap-3">
            <div class="icon-3d gradient-teal" style="color:#fff"><i class='bx bx-building-house'></i></div>
            <div><div style="font-size:24px;font-weight:800">{{ \App\Models\Unit::count() }}</div><div class="text-muted" style="font-size:11px">Units</div></div>
        </div></div>
    </div>
    <div class="col-6 col-md-3 animate-in">
        <div class="stat-card-3d"><div class="inner d-flex align-items-center gap-3">
            <div class="icon-3d gradient-fire" style="color:#fff"><i class='bx bx-book'></i></div>
            <div><div style="font-size:24px;font-weight:800">{{ \App\Models\CourseSynopsis::count() }}</div><div class="text-muted" style="font-size:11px">Courses</div></div>
        </div></div>
    </div>
</div>

{{-- Content Grid --}}
<div class="row g-4">
    {{-- Recent News --}}
    <div class="col-lg-7">
        <div class="card animate-in">
            <div class="card-header d-flex justify-content-between align-items-center py-3 px-4">
                <span style="font-weight:700"><i class='bx bxs-news me-2'></i>Recent News</span>
                <a href="{{ route('admin.news.create') }}" class="btn btn-sm btn-fuo"><i class='bx bx-plus'></i> Add</a>
            </div>
            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                    <thead class="table-light"><tr><th class="ps-4">Title</th><th class="d-none d-md-table-cell">Category</th><th>Status</th><th></th></tr></thead>
                    <tbody>
                        @forelse(\App\Models\News::latest()->limit(5)->get() as $item)
                        <tr>
                            <td class="ps-4" style="max-width:250px"><div style="font-size:13px;font-weight:500;white-space:nowrap;overflow:hidden;text-overflow:ellipsis">{{ $item->title }}</div><small class="text-muted">{{ $item->created_at->diffForHumans() }}</small></td>
                            <td class="d-none d-md-table-cell"><span class="badge bg-secondary">{{ $item->category }}</span></td>
                            <td><span class="badge {{ $item->is_published ? 'badge-published' : 'badge-draft' }}">{{ $item->is_published ? 'Live' : 'Draft' }}</span></td>
                            <td><a href="{{ route('admin.news.edit', $item) }}" class="btn btn-sm btn-outline-secondary"><i class='bx bx-edit'></i></a></td>
                        </tr>
                        @empty
                        <tr><td colspan="4" class="text-center text-muted py-4">No news yet.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Quick Actions + Activity --}}
    <div class="col-lg-5">
        <div class="card animate-in mb-4">
            <div class="card-header py-3 px-4" style="font-weight:700"><i class='bx bx-bolt me-2'></i>Quick Actions</div>
            <div class="card-body">
                <div class="row g-2">
                    <div class="col-6"><a href="{{ route('admin.news.create') }}" class="btn btn-outline-primary w-100 text-start" style="font-size:12px"><i class='bx bx-plus me-1'></i>News</a></div>
                    <div class="col-6"><a href="{{ route('admin.department-news.create') }}" class="btn btn-outline-primary w-100 text-start" style="font-size:12px"><i class='bx bx-plus me-1'></i>Dept News</a></div>
                    <div class="col-6"><a href="{{ route('admin.lecturers.create') }}" class="btn btn-outline-primary w-100 text-start" style="font-size:12px"><i class='bx bx-plus me-1'></i>Lecturer</a></div>
                    <div class="col-6"><a href="{{ route('admin.centres.create') }}" class="btn btn-outline-primary w-100 text-start" style="font-size:12px"><i class='bx bx-plus me-1'></i>Centre</a></div>
                    <div class="col-6"><a href="{{ route('admin.units.create') }}" class="btn btn-outline-primary w-100 text-start" style="font-size:12px"><i class='bx bx-plus me-1'></i>Unit</a></div>
                    <div class="col-6"><a href="{{ route('admin.course-synopsis.create') }}" class="btn btn-outline-primary w-100 text-start" style="font-size:12px"><i class='bx bx-plus me-1'></i>Course</a></div>
                </div>
            </div>
        </div>

        {{-- Recent Activity --}}
        <div class="card animate-in">
            <div class="card-header py-3 px-4" style="font-weight:700"><i class='bx bx-history me-2'></i>Recent Activity</div>
            <div class="card-body p-0" style="max-height:250px;overflow-y:auto">
                @php $recentLogs = \App\Models\AuditLog::with('user')->latest()->limit(8)->get(); @endphp
                @forelse($recentLogs as $log)
                <div class="d-flex align-items-center gap-3 px-4 py-2" style="border-bottom:1px solid var(--border)">
                    <div style="width:32px;height:32px;border-radius:50%;background:{{ $log->event == 'created' ? '#d4edda' : ($log->event == 'updated' ? '#fff3cd' : '#f8d7da') }};display:flex;align-items:center;justify-content:center;flex-shrink:0">
                        <i class='bx {{ $log->event == 'created' ? "bx-plus" : ($log->event == 'updated' ? "bx-edit" : "bx-trash") }}' style="font-size:14px;color:{{ $log->event == 'created' ? '#155724' : ($log->event == 'updated' ? '#856404' : '#721c24') }}"></i>
                    </div>
                    <div style="flex:1;min-width:0">
                        <div style="font-size:12px;font-weight:600">{{ $log->user->name ?? 'System' }} <span class="text-muted fw-normal">{{ $log->event }}</span> <span class="badge bg-info" style="font-size:10px">{{ class_basename($log->auditable_type) }}</span></div>
                        <div style="font-size:11px;color:#888">{{ $log->created_at->diffForHumans() }}</div>
                    </div>
                </div>
                @empty
                <div class="text-center text-muted py-4" style="font-size:13px">No activity yet.</div>
                @endforelse
            </div>
            @if($recentLogs->count())
            <div class="card-footer text-center py-2"><a href="{{ route('admin.audit.index') }}" style="font-size:12px;font-weight:600;color:var(--fu-forest,#035F39);text-decoration:none">View Full Activity Log →</a></div>
            @endif
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
// ── Live Clock ──
function updateClock() {
    const now = new Date();
    const time = now.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true });
    const date = now.toLocaleDateString('en-US', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
    document.getElementById('clockTime').textContent = time;
    document.getElementById('clockDate').textContent = date;
}
updateClock();
setInterval(updateClock, 1000);

// ── Weather (Osogbo, Nigeria) ──
async function fetchWeather() {
    try {
        const res = await fetch('https://api.open-meteo.com/v1/forecast?latitude=7.77&longitude=4.56&current=temperature_2m,weather_code&timezone=Africa/Lagos');
        const data = await res.json();
        const temp = Math.round(data.current.temperature_2m);
        const code = data.current.weather_code;
        document.getElementById('weatherTemp').textContent = temp + '°C';
        const icons = {0:'☀️',1:'🌤️',2:'⛅',3:'☁️',45:'🌫️',48:'🌫️',51:'🌦️',53:'🌧️',55:'🌧️',61:'🌧️',63:'🌧️',65:'🌧️',71:'❄️',80:'🌦️',95:'⛈️'};
        const descs = {0:'Clear sky',1:'Mainly clear',2:'Partly cloudy',3:'Overcast',45:'Foggy',48:'Rime fog',51:'Light drizzle',53:'Drizzle',55:'Heavy drizzle',61:'Light rain',63:'Rain',65:'Heavy rain',71:'Snow',80:'Showers',95:'Thunderstorm'};
        document.getElementById('weatherIcon').textContent = icons[code] || '🌤️';
        document.getElementById('weatherDesc').textContent = descs[code] || 'Unknown';
    } catch(e) {
        document.getElementById('weatherTemp').textContent = '28°C';
        document.getElementById('weatherDesc').textContent = 'Osogbo';
        document.getElementById('weatherIcon').textContent = '🌤️';
    }
}
fetchWeather();
</script>
@endpush
