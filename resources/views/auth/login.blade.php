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
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box}
html,body{min-height:100vh;margin:0;font-family:'Inter',system-ui,sans-serif;background:linear-gradient(150deg,#001a3a 0%,#00336b 100%);display:flex;align-items:center;justify-content:center;padding:32px 16px}
.af-wrap{width:100%;max-width:460px}
/* Logo */
.af-logo{text-align:center;margin-bottom:26px}
.af-logo img{height:58px;filter:drop-shadow(0 2px 8px rgba(0,0,0,.4))}
/* Alerts */
.af-alert{padding:11px 16px;border-radius:7px;font-size:.84rem;margin-bottom:14px;display:flex;align-items:center;gap:8px}
.af-alert--ok{background:#d4edda;color:#155724;border:1px solid #c3e6cb}
.af-alert--err{background:#f8d7da;color:#721c24;border:1px solid #f5c6cb}
/* Card */
.af-card{background:#fff;border-radius:14px;overflow:hidden;box-shadow:0 24px 64px rgba(0,0,0,.4)}
.af-card-head{background:#001a3a;padding:26px 32px 22px;text-align:center;border-bottom:3px solid #f0c040}
.af-card-head h2{margin:0 0 4px;color:#fff;font-size:1.15rem;font-weight:700;font-family:'Manrope',sans-serif;letter-spacing:.01em}
.af-card-head p{margin:0;color:rgba(255,255,255,.55);font-size:.79rem}
.af-card-body{padding:26px 32px 30px}
/* Form group */
.af-group{margin-bottom:15px}
.af-group label{display:block;font-size:.72rem;font-weight:700;color:#374151;margin-bottom:5px;text-transform:uppercase;letter-spacing:.07em}
.af-input{width:100%;padding:10px 14px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.9rem;color:#111827;font-family:'Inter',sans-serif;background:#f9fafb;outline:none;transition:border-color .2s,box-shadow .2s,background .2s;-webkit-appearance:none;appearance:none}
.af-input:focus{border-color:#001a3a;box-shadow:0 0 0 3px rgba(0,26,58,.09);background:#fff}
.af-input::placeholder{color:#a0aec0}
/* Password toggle */
.af-pw-wrap{position:relative}
.af-pw-wrap .af-input{padding-right:44px}
.af-pw-btn{position:absolute;right:12px;top:50%;transform:translateY(-50%);background:none;border:none;cursor:pointer;color:#94a3b8;padding:0;font-size:1rem;line-height:1;display:flex;align-items:center}
.af-pw-btn:hover{color:#001a3a}
/* Two-column grid */
.af-row{display:grid;grid-template-columns:1fr 1fr;gap:14px}
@media(max-width:480px){.af-row{grid-template-columns:1fr;gap:0}}
/* Forgot */
.af-forgot{text-align:right;margin-bottom:16px;margin-top:-6px}
.af-link-sm{font-size:.78rem;color:#001a3a;text-decoration:none;font-weight:600}
.af-link-sm:hover{text-decoration:underline}
/* Submit */
.af-btn{display:block;width:100%;padding:12px;background:#001a3a;color:#fff;border:none;border-radius:8px;font-size:.92rem;font-weight:700;font-family:'Inter',sans-serif;cursor:pointer;letter-spacing:.04em;transition:background .2s,transform .12s;margin-top:4px}
.af-btn:hover{background:#002d6b}
.af-btn:active{transform:scale(.98)}
/* Divider */
.af-divider{display:flex;align-items:center;gap:10px;margin:20px 0 16px;color:#cbd5e1;font-size:.78rem}
.af-divider::before,.af-divider::after{content:'';flex:1;height:1px;background:#e2e8f0}
/* Footer links */
.af-foot{text-align:center;font-size:.85rem;color:#6b7280}
.af-foot a{color:#001a3a;font-weight:600;text-decoration:none}
.af-foot a:hover{text-decoration:underline}
.af-terms{text-align:center;margin-top:14px;font-size:.72rem;color:#b0b8c5}
.af-terms a{color:#b0b8c5;text-decoration:underline}
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
<div class="af-wrap">

    <div class="af-logo">
        <a href="/"><img src="uploads/1752447668_c6f6ed1c6009090adbdf.png" alt="Ultraprosavers"></a>
    </div>

    @if (session('status'))
    <div class="af-alert af-alert--ok"><i class="ri-checkbox-circle-line"></i> {{ session('status') }}</div>
    @endif
    @if (session('error'))
    <div class="af-alert af-alert--err"><i class="ri-error-warning-line"></i> {{ session('error') }}</div>
    @endif

    <div class="af-card">
        <div class="af-card-head">
            <h2>Welcome Back</h2>
            <p>Sign in to your Ultraprosavers account</p>
        </div>
        <div class="af-card-body">
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <div class="af-group">
                    <label for="login_email">Email Address</label>
                    <input id="login_email" name="email" type="email" class="af-input" placeholder="name@example.com" required value="{{ old('email') }}">
                </div>
                <div class="af-group">
                    <label for="login_pw">Password</label>
                    <div class="af-pw-wrap">
                        <input id="login_pw" name="password" type="password" class="af-input" placeholder="Your password" required>
                        <button type="button" class="af-pw-btn" onclick="togglePw('login_pw','pwIcon')">
                            <i class="ri-eye-line" id="pwIcon"></i>
                        </button>
                    </div>
                </div>
                <div class="af-forgot">
                    <a href="{{ route('password.request') }}" class="af-link-sm">Forgot Password?</a>
                </div>
                <button type="submit" class="af-btn">Sign In</button>
            </form>
            <div class="af-divider">or</div>
            <div class="af-foot">
                Don't have an account? <a href="{{ route('register') }}">Open an Account</a>
            </div>
            <div class="af-terms">
                By signing in you agree to our <a href="/terms">Terms</a> &amp; <a href="/privacy">Privacy Policy</a>
            </div>
        </div>
    </div>

</div>
<script>
function togglePw(id,iconId){
    var i=document.getElementById(id),ic=document.getElementById(iconId);
    if(i.type==='password'){i.type='text';ic.className='ri-eye-off-line';}
    else{i.type='password';ic.className='ri-eye-line';}
}
</script>
</body>
</html>
