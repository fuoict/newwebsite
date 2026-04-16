<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUO Admin — @yield('page_title', 'Dashboard')</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body { background: #f4f6f9; font-family: 'Segoe UI', sans-serif; }
        .sidebar {
            width: 250px; min-height: 100vh; background: #1a1a2e;
            position: fixed; top: 0; left: 0; z-index: 100;
        }
        .sidebar .brand {
            padding: 20px; background: #16213e;
            color: #fff; font-size: 18px; font-weight: 700;
            border-bottom: 1px solid #0f3460;
        }
        .sidebar .brand small { display: block; font-size: 11px; color: #aaa; font-weight: 400; }
        .sidebar .nav-link {
            color: #ccc; padding: 12px 20px; display: flex;
            align-items: center; gap: 10px; font-size: 14px;
            border-left: 3px solid transparent;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: #fff; background: #0f3460;
            border-left-color: #e94560;
        }
        .sidebar .nav-link i { font-size: 18px; }
        .sidebar .nav-section {
            padding: 12px 20px 4px;
            color: #666; font-size: 11px; text-transform: uppercase; letter-spacing: 1px;
        }
        .main-content { margin-left: 250px; padding: 0; }
        .topbar {
            background: #fff; padding: 14px 28px;
            border-bottom: 1px solid #e0e0e0;
            display: flex; justify-content: space-between; align-items: center;
        }
        .topbar h1 { font-size: 20px; font-weight: 600; margin: 0; color: #333; }
        .content-area { padding: 28px; }
        .card { border: none; box-shadow: 0 2px 8px rgba(0,0,0,.07); border-radius: 10px; }
        .card-header { background: #fff; border-bottom: 1px solid #eee; font-weight: 600; }
        .btn-fuo { background: #0f3460; color: #fff; }
        .btn-fuo:hover { background: #16213e; color: #fff; }
        .badge-published { background: #198754; }
        .badge-draft { background: #6c757d; }
        .table th { font-size: 13px; color: #555; font-weight: 600; }
        .stat-card { background: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,.07); }
        .stat-card .icon { width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; }
    </style>
    @stack('styles')
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <div class="brand">
        <i class='bx bxs-institution' style="color:#e94560"></i> FUO Admin
        <small>Fountain University Osogbo</small>
    </div>
    <nav class="mt-2">
        <div class="nav-section">Main</div>
        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class='bx bxs-dashboard'></i> Dashboard
        </a>

        <div class="nav-section">Content</div>
        <a href="{{ route('admin.news.index') }}" class="nav-link {{ request()->routeIs('admin.news.*') ? 'active' : '' }}">
            <i class='bx bxs-news'></i> News & Updates
        </a>
        <a href="{{ route('admin.staff.index') }}" class="nav-link {{ request()->routeIs('admin.staff.*') ? 'active' : '' }}">
            <i class='bx bxs-user-detail'></i> Staff Profiles
        </a>

        <div class="nav-section">Website</div>
        <a href="{{ url('/') }}" target="_blank" class="nav-link">
            <i class='bx bx-link-external'></i> View Website
        </a>
        <a href="{{ route('logout') }}" class="nav-link"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class='bx bx-log-out'></i> Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
    </nav>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">
    <div class="topbar">
        <h1>@yield('page_title', 'Dashboard')</h1>
        <div class="d-flex align-items-center gap-3">
            <span class="text-muted" style="font-size:13px">
                <i class='bx bxs-user-circle'></i> {{ auth()->user()->name ?? 'Admin' }}
            </span>
        </div>
    </div>

    <div class="content-area">
        {{-- Flash messages --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class='bx bx-check-circle me-2'></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class='bx bx-error-circle me-2'></i>{{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
