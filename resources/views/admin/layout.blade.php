<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUO Admin — @yield('page_title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        :root {
            --bg: #f4f6f9; --bg-card: #fff; --bg-sidebar: #0B3D2E; --bg-sidebar-brand: #082A1F;
            --text: #1a1a2e; --text-muted: #6b7280; --text-sidebar: #b8d4c8; --border: #e5e7eb;
            --sidebar-w: 260px; --topbar-bg: #fff; --accent: #035F39;
        }
        [data-theme="dark"] {
            --bg: #0f1419; --bg-card: #1e2a23; --bg-sidebar: #0B3D2E; --bg-sidebar-brand: #082A1F;
            --text: #e8f0eb; --text-muted: #8fa89a; --text-sidebar: #b8d4c8; --border: #2a3d34;
            --topbar-bg: #1a2e24;
        }
        * { box-sizing: border-box; }
        body { background: var(--bg); font-family: 'Segoe UI', system-ui, sans-serif; color: var(--text); margin:0; transition: background .3s, color .3s; }

        /* ── Sidebar ── */
        .sidebar { width: var(--sidebar-w); min-height: 100vh; background: var(--bg-sidebar); position: fixed; top: 0; left: 0; z-index: 1000; transition: transform .3s ease; overflow-y: auto; }
        .sidebar .brand { padding: 20px; background: var(--bg-sidebar-brand); color: #fff; font-size: 18px; font-weight: 700; border-bottom: 1px solid rgba(255,255,255,.08); display: flex; align-items: center; gap: 10px; }
        .sidebar .brand small { display: block; font-size: 11px; color: rgba(255,255,255,.5); font-weight: 400; }
        .sidebar .nav-link { color: var(--text-sidebar); padding: 11px 20px; display: flex; align-items: center; gap: 10px; font-size: 13.5px; border-left: 3px solid transparent; text-decoration: none; transition: all .15s; }
        .sidebar .nav-link:hover, .sidebar .nav-link.active { color: #fff; background: rgba(255,255,255,.1); border-left-color: #4ade80; }
        .sidebar .nav-link i { font-size: 18px; width: 22px; text-align: center; }
        .sidebar .nav-section { padding: 14px 20px 6px; color: rgba(255,255,255,.35); font-size: 10px; text-transform: uppercase; letter-spacing: 1.2px; font-weight: 700; }

        /* ── Collapsible Dropdowns ── */
        .nav-dropdown { max-height: 0; overflow: hidden; transition: max-height .3s ease; }
        .nav-dropdown.open { max-height: 500px; }
        .nav-dropdown .nav-link { padding-left: 52px; font-size: 13px; }
        .has-dropdown .arrow { transition: transform .3s; }
        .has-dropdown.open .arrow { transform: rotate(180deg); }

        /* ── Main ── */
        .main-content { margin-left: var(--sidebar-w); padding: 0; transition: margin .3s; min-height: 100vh; }
        .topbar { background: var(--topbar-bg); padding: 12px 24px; border-bottom: 1px solid var(--border); display: flex; justify-content: space-between; align-items: center; position: sticky; top: 0; z-index: 500; transition: background .3s; }
        .topbar h1 { font-size: 18px; font-weight: 600; margin: 0; color: var(--text); }
        .content-area { padding: 24px; }

        /* ── Toggle button ── */
        .sidebar-toggle { display: none; background: none; border: none; font-size: 22px; color: var(--text); cursor: pointer; padding: 4px 8px; }
        .sidebar-overlay { display: none; position: fixed; inset: 0; background: rgba(0,0,0,.5); z-index: 999; }

        /* ── Dark mode toggle ── */
        .theme-toggle { background: none; border: 1px solid var(--border); border-radius: 20px; padding: 4px 12px; cursor: pointer; font-size: 16px; color: var(--text); transition: all .2s; display: flex; align-items: center; gap: 6px; }
        .theme-toggle:hover { background: rgba(255,255,255,.1); }

        /* ── Cards ── */
        .card { border: none; box-shadow: 0 2px 8px rgba(0,0,0,.05); border-radius: 10px; background: var(--bg-card); transition: background .3s; }
        .card-header { background: var(--bg-card); border-bottom: 1px solid var(--border); font-weight: 600; color: var(--text); }
        .stat-card { background: var(--bg-card); border-radius: 10px; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,.05); transition: background .3s; }
        .stat-card .icon { width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; }

        .btn-fuo { background: #035F39; color: #fff; }
        .btn-fuo:hover { background: #024A2D; color: #fff; }
        .table th { font-size: 12px; color: var(--text-muted); font-weight: 600; text-transform: uppercase; letter-spacing: .3px; }
        [data-theme="dark"] .table th { color: var(--text-muted); background: var(--bg-card); }
        [data-theme="dark"] .table td { color: var(--text); }
        [data-theme="dark"] .table-light { background: var(--bg-card) !important; }
        [data-theme="dark"] .alert-success { background: #0f2a1a; color: #4ade80; border-color: #166534; }
        [data-theme="dark"] .badge { opacity: .9; }
        [data-theme="dark"] .list-group-item { background: var(--bg-card); color: var(--text); border-color: var(--border); }
        .badge-published { background: #198754; }
        .badge-draft { background: #6c757d; }

        /* ── User Dropdown ── */
        #userDropdown.show { display: block !important; animation: dropIn .15s ease; }
        @keyframes dropIn { from { opacity: 0; transform: translateY(-4px); } to { opacity: 1; transform: translateY(0); } }

        /* ── Welcome banner ── */
        .welcome-banner { background: linear-gradient(135deg, #035F39, #024A2D); border-radius: 12px; padding: 24px 28px; color: #fff; margin-bottom: 24px; position: relative; overflow: hidden; }
        .welcome-banner::after { content:''; position:absolute; top:-50%; right:-20%; width:300px; height:300px; background:rgba(255,255,255,.05); border-radius:50%; }
        .welcome-banner h3 { margin:0 0 4px; font-size:20px; font-weight:700; }
        .welcome-banner p { margin:0; opacity:.85; font-size:14px; }

        /* ── Mobile ── */
        @media (max-width: 991px) {
            .sidebar { transform: translateX(-100%); }
            .sidebar.open { transform: translateX(0); }
            .sidebar-overlay.open { display: block; }
            .sidebar-toggle { display: block; }
            .main-content { margin-left: 0 !important; }
        }
        @media (max-width: 575px) {
            .content-area { padding: 16px; }
            .topbar { padding: 10px 16px; }
            .topbar h1 { font-size: 16px; }
            .stat-card { padding: 14px; }
            .stat-card > div:first-child { display: none; }
        }
    </style>
    @stack('styles')
</head>

<body>
    <!-- Mobile Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay" onclick="toggleSidebar()"></div>

    <!-- SIDEBAR -->
    <div class="sidebar" id="sidebar">
        <div class="brand">
            <i class='bx bxs-institution' style="color:#e94560;font-size:24px"></i>
            <div>FUO Admin<small>Fountain University Osogbo</small></div>
        </div>
        <nav class="mt-2" style="padding-bottom:40px">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class='bx bxs-dashboard'></i> Dashboard</a>

            <div class="nav-section">Content</div>
            <a href="javascript:void(0)" class="nav-link has-dropdown" onclick="toggleDropdown(this)">
                <i class='bx bx-folder'></i> Content <i class='bx bx-chevron-down ms-auto arrow'></i>
            </a>
            <div class="nav-dropdown {{ request()->routeIs('admin.news.*','admin.department-news.*','admin.lecturers.*') ? 'open' : '' }}">
                <a href="{{ route('admin.news.index') }}" class="nav-link {{ request()->routeIs('admin.news.*') ? 'active' : '' }}"><i class='bx bxs-news'></i> School News</a>
                <a href="{{ route('admin.department-news.index') }}" class="nav-link {{ request()->routeIs('admin.department-news.*') ? 'active' : '' }}"><i class='bx bx-news'></i> Dept News</a>
                <a href="{{ route('admin.lecturers.index') }}" class="nav-link {{ request()->routeIs('admin.lecturers.*') ? 'active' : '' }}"><i class='bx bxs-user-detail'></i> Lecturers</a>
            </div>

            <div class="nav-section">Academic</div>
            <a href="javascript:void(0)" class="nav-link has-dropdown" onclick="toggleDropdown(this)">
                <i class='bx bx-library'></i> Academic <i class='bx bx-chevron-down ms-auto arrow'></i>
            </a>
            <div class="nav-dropdown {{ request()->routeIs('admin.colleges.*','admin.departments.*','admin.featured-links.*','admin.course-synopsis.*') ? 'open' : '' }}">
                <a href="{{ route('admin.colleges.index') }}" class="nav-link {{ request()->routeIs('admin.colleges.*') ? 'active' : '' }}"><i class='bx bxs-institution'></i> Colleges</a>
                <a href="{{ route('admin.departments.index') }}" class="nav-link {{ request()->routeIs('admin.departments.*') ? 'active' : '' }}"><i class='bx bx-sitemap'></i> Departments</a>
                <a href="{{ route('admin.featured-links.index') }}" class="nav-link {{ request()->routeIs('admin.featured-links.*') ? 'active' : '' }}"><i class='bx bx-link'></i> Featured Links</a>
                <a href="{{ route('admin.course-synopsis.index') }}" class="nav-link {{ request()->routeIs('admin.course-synopsis.*') ? 'active' : '' }}"><i class='bx bx-book'></i> Course Synopsis</a>
            </div>

            <div class="nav-section">Centres & Units</div>
            <a href="javascript:void(0)" class="nav-link has-dropdown" onclick="toggleDropdown(this)">
                <i class='bx bx-buildings'></i> Centres & Units <i class='bx bx-chevron-down ms-auto arrow'></i>
            </a>
            <div class="nav-dropdown {{ request()->routeIs('admin.centres.*','admin.units.*') ? 'open' : '' }}">
                <a href="{{ route('admin.centres.index') }}" class="nav-link {{ request()->routeIs('admin.centres.*') ? 'active' : '' }}"><i class='bx bx-buildings'></i> Centres</a>
                <a href="{{ route('admin.units.index') }}" class="nav-link {{ request()->routeIs('admin.units.*') ? 'active' : '' }}"><i class='bx bx-building-house'></i> Units</a>
            </div>

            <div class="nav-section">Website</div>
            <a href="{{ route('admin.navigation.index') }}" class="nav-link {{ request()->routeIs('admin.navigation.*') ? 'active' : '' }}"><i class='bx bx-menu'></i> Navigation</a>
            <a href="{{ route('admin.pages.index') }}" class="nav-link {{ request()->routeIs('admin.pages.*') ? 'active' : '' }}"><i class='bx bx-file'></i> Pages</a>

            <div class="nav-section">University</div>
            <a href="javascript:void(0)" class="nav-link has-dropdown" onclick="toggleDropdown(this)">
                <i class='bx bx-building'></i> University <i class='bx bx-chevron-down ms-auto arrow'></i>
            </a>
            <div class="nav-dropdown {{ request()->routeIs('admin.pages.*') ? 'open' : '' }}">
                <a href="{{ route('admin.pages.index') }}" class="nav-link {{ request()->routeIs('admin.pages.index') && !request('section') ? 'active' : '' }}"><i class='bx bx-list-ul'></i> All Pages</a>
                <a href="{{ route('admin.pages.index', ['section' => 'university']) }}" class="nav-link {{ request('section') == 'university' ? 'active' : '' }}"><i class='bx bx-info-circle'></i> University Pages</a>
                <a href="{{ route('admin.pages.index', ['section' => 'officers']) }}" class="nav-link {{ request('section') == 'officers' ? 'active' : '' }}"><i class='bx bx-user'></i> Principal Officers</a>
                <a href="{{ route('admin.pages.index', ['section' => 'admissions']) }}" class="nav-link {{ request('section') == 'admissions' ? 'active' : '' }}"><i class='bx bx-file'></i> Admissions</a>
                <a href="{{ route('admin.pages.index', ['section' => 'publications']) }}" class="nav-link {{ request('section') == 'publications' ? 'active' : '' }}"><i class='bx bx-news'></i> Publications</a>
                <a href="{{ route('admin.pages.create') }}" class="nav-link"><i class='bx bx-plus-circle'></i> Add New Page</a>
            </div>
                <a href="{{ route('admin.pages.index') }}" class="nav-link"><i class='bx bx-list-ul'></i> All Pages</a>
            </div>
            <a href="{{ route('admin.audit.index') }}" class="nav-link {{ request()->routeIs('admin.audit.*') ? 'active' : '' }}"><i class='bx bx-history'></i> Activity Log</a>
            <a href="{{ url('/') }}" target="_blank" class="nav-link"><i class='bx bx-link-external'></i> View Website</a>
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class='bx bx-log-out'></i> Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
        </nav>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="topbar">
            <div class="d-flex align-items-center gap-2">
                <button class="sidebar-toggle" onclick="toggleSidebar()"><i class='bx bx-menu'></i></button>
                <h1>@yield('page_title', 'Dashboard')</h1>
            </div>
            <div class="d-flex align-items-center gap-2">
                <button class="theme-toggle" onclick="toggleTheme()" title="Toggle dark mode">
                    <i class='bx bx-moon' id="themeIcon"></i>
                </button>
                <div class="dropdown" style="position:relative">
                    <button onclick="document.getElementById('userDropdown').classList.toggle('show')" style="background:none;border:1px solid var(--border);border-radius:20px;padding:5px 14px;cursor:pointer;display:flex;align-items:center;gap:6px;color:var(--text);font-size:13px;font-family:inherit;transition:all .2s">
                        <i class='bx bxs-user-circle' style="font-size:18px"></i>
                        <span class="d-none d-sm-inline">{{ auth()->user()->name ?? 'Admin' }}</span>
                        <i class='bx bx-chevron-down' style="font-size:14px"></i>
                    </button>
                    <div id="userDropdown" style="display:none;position:absolute;right:0;top:calc(100% + 6px);background:var(--bg-card);border:1px solid var(--border);border-radius:10px;box-shadow:0 8px 24px rgba(0,0,0,.15);min-width:180px;z-index:1000;overflow:hidden">
                        <div style="padding:12px 16px;border-bottom:1px solid var(--border)">
                            <div style="font-size:13px;font-weight:600;color:var(--text)">{{ auth()->user()->name ?? 'Admin' }}</div>
                            <div style="font-size:11px;color:var(--text-muted)">{{ auth()->user()->email ?? '' }}</div>
                        </div>
                        <a href="{{ url('/') }}" target="_blank" style="display:flex;align-items:center;gap:8px;padding:10px 16px;color:var(--text);text-decoration:none;font-size:13px;transition:background .15s" onmouseover="this.style.background='var(--border)'" onmouseout="this.style.background='transparent'">
                            <i class='bx bx-globe'></i> View Website
                        </a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()" style="display:flex;align-items:center;gap:8px;padding:10px 16px;color:#ef4444;text-decoration:none;font-size:13px;transition:background .15s" onmouseover="this.style.background='rgba(239,68,68,.08)'" onmouseout="this.style.background='transparent'">
                            <i class='bx bx-log-out'></i> Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-area">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert"><i class='bx bx-check-circle me-2'></i>{{ session('success') }}<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert"><i class='bx bx-error-circle me-2'></i>{{ session('error') }}<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
            @endif
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('open');
            document.getElementById('sidebarOverlay').classList.toggle('open');
        }
        function toggleTheme() {
            const html = document.documentElement;
            const current = html.getAttribute('data-theme');
            const next = current === 'dark' ? 'light' : 'dark';
            html.setAttribute('data-theme', next);
            localStorage.setItem('admin-theme', next);
            document.getElementById('themeIcon').className = next === 'dark' ? 'bx bx-sun' : 'bx bx-moon';
        }
        // Restore theme
        (function() {
            const saved = localStorage.getItem('admin-theme');
            if (saved) {
                document.documentElement.setAttribute('data-theme', saved);
                document.getElementById('themeIcon').className = saved === 'dark' ? 'bx bx-sun' : 'bx bx-moon';
            }
        })();
        // Collapsible dropdowns
        function toggleDropdown(el) {
            const dropdown = el.nextElementSibling;
            const isOpen = dropdown.classList.contains('open');
            document.querySelectorAll('.nav-dropdown').forEach(d => d.classList.remove('open'));
            document.querySelectorAll('.has-dropdown').forEach(h => h.classList.remove('open'));
            if (!isOpen) {
                dropdown.classList.add('open');
                el.classList.add('open');
            }
        }
        // Close user dropdown on outside click
        document.addEventListener('click', function(e) {
            const dd = document.getElementById('userDropdown');
            const btn = dd?.previousElementSibling;
            if (dd && !dd.contains(e.target) && !btn?.contains(e.target)) {
                dd.classList.remove('show');
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
