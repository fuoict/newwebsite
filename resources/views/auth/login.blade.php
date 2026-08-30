<x-guest-layout>
    @if(session('status'))
        <div style="background:rgba(74,222,128,.15);border:1px solid rgba(74,222,128,.3);color:#4ade80;padding:10px 14px;border-radius:10px;font-size:13px;margin-bottom:16px;text-align:center">
            {{ session('status') }}
        </div>
    @endif

    @if($errors->any())
        <div class="error-msg">
            <i class='bx bx-error-circle'></i> {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="you@fuo.edu.ng" required autofocus autocomplete="username">
            <i class='bx bx-envelope input-icon'></i>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" required autocomplete="current-password">
            <i class='bx bx-lock-alt input-icon'></i>
        </div>

        <div class="check-row">
            <label><input type="checkbox" name="remember"> Remember me</label>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Forgot password?</a>
            @endif
        </div>

        <button type="submit" class="login-btn">
            <i class='bx bx-log-in' style="margin-right:6px"></i> Sign In
        </button>
    </form>
</x-guest-layout>
