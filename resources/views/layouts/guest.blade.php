<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('img/logo/fuo-logo.png') }}">
    <title>FUO Admin — Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
        body{font-family:'Inter',system-ui,sans-serif;min-height:100vh;display:flex;align-items:center;justify-content:center;background:#0B3D2E;overflow:hidden;position:relative}
        .bg-layer{position:fixed;inset:0;z-index:0;background:linear-gradient(135deg,#0B3D2E 0%,#082A1F 30%,#064E3B 60%,#0B3D2E 100%)}
        .bg-orb{position:absolute;border-radius:50%;filter:blur(80px);opacity:.3;animation:float 20s ease-in-out infinite}
        .bg-orb:nth-child(1){width:400px;height:400px;background:#035F39;top:-10%;left:-5%}
        .bg-orb:nth-child(2){width:300px;height:300px;background:#4ade80;bottom:-10%;right:-5%;animation-delay:-7s}
        .bg-orb:nth-child(3){width:250px;height:250px;background:#B8931F;top:50%;left:50%;animation-delay:-14s}
        @keyframes float{0%,100%{transform:translate(0,0) scale(1)}25%{transform:translate(30px,-40px) scale(1.05)}50%{transform:translate(-20px,20px) scale(.95)}75%{transform:translate(15px,30px) scale(1.02)}}
        .bg-grid{position:fixed;inset:0;z-index:1;background-image:linear-gradient(rgba(255,255,255,.03) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.03) 1px,transparent 1px);background-size:60px 60px}
        .login-wrapper{position:relative;z-index:10;width:100%;max-width:440px;padding:20px}
        .login-card{background:rgba(255,255,255,.06);backdrop-filter:blur(24px);-webkit-backdrop-filter:blur(24px);border:1px solid rgba(255,255,255,.1);border-radius:20px;padding:40px 36px;box-shadow:0 24px 64px rgba(0,0,0,.4);animation:slideUp .6s ease-out}
        @keyframes slideUp{from{opacity:0;transform:translateY(30px) scale(.97)}to{opacity:1;transform:translateY(0) scale(1)}}
        .login-logo{text-align:center;margin-bottom:28px}
        .login-logo img{height:60px;margin-bottom:12px;filter:drop-shadow(0 4px 12px rgba(0,0,0,.3))}
        .login-logo h1{color:#fff;font-size:20px;font-weight:800;letter-spacing:-.5px;margin:0}
        .login-logo p{color:rgba(255,255,255,.5);font-size:13px;margin:4px 0 0}
        .form-group{margin-bottom:20px;position:relative}
        .form-group label{display:block;color:rgba(255,255,255,.6);font-size:12px;font-weight:600;text-transform:uppercase;letter-spacing:.8px;margin-bottom:8px}
        .form-group input[type="email"],.form-group input[type="password"],.form-group input[type="text"]{width:100%;padding:14px 16px 14px 44px;background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.12);border-radius:12px;color:#fff;font-size:15px;outline:none;transition:all .25s;font-family:inherit}
        .form-group input::placeholder{color:rgba(255,255,255,.3)}
        .form-group input:focus{border-color:#4ade80;background:rgba(255,255,255,.1);box-shadow:0 0 0 3px rgba(74,222,128,.15)}
        .form-group .input-icon{position:absolute;left:14px;top:40px;color:rgba(255,255,255,.35);font-size:18px;transition:color .25s;pointer-events:none}
        .form-group input:focus~.input-icon{color:#4ade80}
        .check-row{display:flex;align-items:center;justify-content:space-between;margin:20px 0 24px}
        .check-row label{color:rgba(255,255,255,.5);font-size:13px;display:flex;align-items:center;gap:8px;cursor:pointer}
        .check-row input[type="checkbox"]{width:16px;height:16px;accent-color:#035F39;border-radius:4px}
        .check-row a{color:#4ade80;font-size:13px;text-decoration:none;font-weight:500}
        .check-row a:hover{text-decoration:underline}
        .login-btn{width:100%;padding:14px;border:none;border-radius:12px;background:linear-gradient(135deg,#035F39,#047A48);color:#fff;font-size:15px;font-weight:700;cursor:pointer;transition:all .3s;position:relative;overflow:hidden;font-family:inherit}
        .login-btn:hover{transform:translateY(-2px);box-shadow:0 8px 24px rgba(3,95,57,.4)}
        .login-btn:active{transform:translateY(0)}
        .login-btn::after{content:'';position:absolute;inset:0;background:linear-gradient(90deg,transparent,rgba(255,255,255,.15),transparent);transform:translateX(-100%)}
        .login-btn:hover::after{animation:shimmer .6s ease}
        @keyframes shimmer{to{transform:translateX(100%)}}
        .error-msg{background:rgba(239,68,68,.15);border:1px solid rgba(239,68,68,.3);color:#fca5a5;padding:10px 14px;border-radius:10px;font-size:13px;margin-bottom:16px;display:flex;align-items:center;gap:8px}
        .loader-overlay{position:fixed;inset:0;z-index:9999;background:#0B3D2E;display:flex;align-items:center;justify-content:center;flex-direction:column;transition:opacity .5s,visibility .5s}
        .loader-overlay.hidden{opacity:0;visibility:hidden;pointer-events:none}
        .loader-spinner{width:48px;height:48px;border:4px solid rgba(255,255,255,.15);border-top-color:#4ade80;border-radius:50%;animation:spin .8s linear infinite}
        .loader-text{color:rgba(255,255,255,.6);font-size:13px;margin-top:16px;font-weight:500}
        @keyframes spin{to{transform:rotate(360deg)}}
        .particle{position:absolute;width:4px;height:4px;background:rgba(74,222,128,.4);border-radius:50%;animation:rise 8s linear infinite}
        @keyframes rise{0%{opacity:0;transform:translateY(100vh) scale(0)}10%{opacity:1}90%{opacity:1}100%{opacity:0;transform:translateY(-20vh) scale(1)}}
        @media(max-width:480px){.login-card{padding:28px 20px}.login-logo img{height:48px}}
    </style>
</head>
<body>
    <div class="loader-overlay" id="loader"><div class="loader-spinner"></div><div class="loader-text">Loading Fountain University...</div></div>
    <div class="bg-layer"><div class="bg-orb"></div><div class="bg-orb"></div><div class="bg-orb"></div></div>
    <div class="bg-grid"></div>
    <div id="particles"></div>
    <div class="login-wrapper">
        <div class="login-card">
            <div class="login-logo">
                <img src="{{ asset('img/logo/fuo-logo.png') }}" alt="FUO Logo">
                <h1>Fountain University</h1>
                <p>Admin Dashboard</p>
            </div>
            {{ $slot }}
        </div>
        <p style="text-align:center;color:rgba(255,255,255,.25);font-size:11px;margin-top:16px">© {{ date('Y') }} Fountain University Osogbo</p>
    </div>
    <script>
        window.addEventListener('load',()=>setTimeout(()=>document.getElementById('loader').classList.add('hidden'),800));
        const c=document.getElementById('particles');
        for(let i=0;i<20;i++){const p=document.createElement('div');p.className='particle';p.style.left=Math.random()*100+'%';p.style.animationDelay=Math.random()*8+'s';p.style.animationDuration=(6+Math.random()*6)+'s';p.style.width=p.style.height=(2+Math.random()*4)+'px';c.appendChild(p)}
    </script>
</body>
</html>
