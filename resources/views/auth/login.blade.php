<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Login | Ultraprosavers</title>
<meta name="description" content="Login to your Ultraprosavers account.">
<link rel="shortcut icon" href="uploads/1752447676_184f2e9f52ac314abfda.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="templates/bank-pro/css/main0338.css">
<link rel="stylesheet" href="{{ asset('css/modern-homepage.css') }}">
<link rel="stylesheet" href="{{ asset('css/inner-pages.css') }}">
<style>
html, body { min-height: 100vh; background: #f5f6f8; display: flex; align-items: center; justify-content: center; margin: 0; }
.auth-wrap { width: 100%; max-width: 460px; padding: 30px 16px; }
.auth-logo { text-align: center; margin-bottom: 24px; }
.auth-logo img { height: 56px; }
.login-form { border-radius: 8px; box-shadow: 0 4px 28px rgba(0,0,0,.12); }
.auth-alt-link { text-align: center; margin-top: 18px; font-size: .9rem; color: #555; }
.auth-alt-link a { color: #003087; font-weight: 600; text-decoration: none; }
</style>
</head>
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '797aa71b248de7b626a4a41e25c80af3ab8ca80f';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript>Powered by <a href="https://www.smartsupp.com" target="_blank">Smartsupp</a></noscript>

<body>
<div class="auth-wrap">

    <div class="auth-logo">
        <a href="/"><img src="uploads/1752447668_c6f6ed1c6009090adbdf.png" alt="Ultraprosavers"></a>
    </div>

    @if (session('status'))
    <div style="background:#d4edda;color:#155724;padding:12px 16px;border-radius:6px;margin-bottom:14px;font-size:.9rem;">{{ session('status') }}</div>
    @endif
    @if (session('error'))
    <div style="background:#f8d7da;color:#721c24;padding:12px 16px;border-radius:6px;margin-bottom:14px;font-size:.9rem;">{{ session('error') }}</div>
    @endif

    <div class="login-form">
        <h3>
            <img src="templates/bank-pro/images/assets/ico-lock.svg" width="24" height="24" alt="">
            Log In
        </h3>
        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <div class="login-form__field js-form-field">
                <label for="login_email">Email Address</label>
                <input id="login_email" name="email" type="email" class="input-text" placeholder="name@example.com" required value="{{ old('email') }}">
            </div>
            <div class="login-form__field js-form-field">
                <label for="login_pw">Password</label>
                <input id="login_pw" name="password" type="password" class="input-text" placeholder="Your password" required>
            </div>
            <div class="login-form__submit">
                <button class="button--primary" type="submit">Login</button>
            </div>
        </form>
        <div class="login-form__help">
            <a href="{{ route('password.request') }}" class="login-form__help-link login-form__help-link--large">Forgot Password?</a>
        </div>
    </div>

    <div class="auth-alt-link">
        Don't have an account? <a href="{{ route('register') }}">Open an Account</a>
    </div>

</div>
</body>
</html>
