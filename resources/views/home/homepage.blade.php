@include('home.header')
        
        <div class="l-content-wrap u-cf">
    <div class="l-1-col-master u-cf">
        <main class="l-content-primary">
            <div class='body-content js-body-content'>

                <style>
/* â”€â”€ Hero Carousel â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
.ups-hero{position:relative;overflow:hidden;height:560px;background:#001a3a}
@media(max-width:640px){.ups-hero{height:400px}}
.ups-hero__slide{position:absolute;inset:0;opacity:0;transition:opacity 1s ease;background-size:cover;background-position:center center}
.ups-hero__slide::after{content:'';position:absolute;inset:0;background:linear-gradient(110deg,rgba(0,15,45,.75) 35%,rgba(0,15,45,.25) 100%)}
.ups-hero__slide.is-active{opacity:1;z-index:1}
.ups-hero__body{position:absolute;inset:0;z-index:2;display:flex;align-items:center}
.ups-hero__content{max-width:600px;padding:0 48px;color:#fff}
@media(max-width:640px){.ups-hero__content{padding:0 22px}}
.ups-hero__eyebrow{font-size:.72rem;letter-spacing:.18em;text-transform:uppercase;color:rgba(255,255,255,.7);margin-bottom:12px;display:block}
.ups-hero__title{font-size:clamp(1.9rem,4vw,3.1rem);font-weight:700;line-height:1.2;margin:0 0 18px;color:#fff}
.ups-hero__title em{font-style:normal;color:#f0c040}
.ups-hero__subtitle{font-size:1rem;line-height:1.7;color:rgba(255,255,255,.88);margin-bottom:30px;max-width:490px}
.ups-hero__btns{display:flex;gap:14px;flex-wrap:wrap}
.ups-hero__btn{display:inline-block;padding:13px 30px;border-radius:4px;font-size:.9rem;font-weight:600;letter-spacing:.04em;text-decoration:none;transition:all .2s}
.ups-hero__btn--primary{background:#f0c040;color:#001a3a}
.ups-hero__btn--primary:hover{background:#e6b820;color:#001a3a}
.ups-hero__btn--outline{border:2px solid rgba(255,255,255,.72);color:#fff;background:transparent}
.ups-hero__btn--outline:hover{background:rgba(255,255,255,.12);border-color:#fff}
.ups-hero__arrow{position:absolute;top:50%;transform:translateY(-50%);z-index:3;background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.28);color:#fff;width:46px;height:46px;border-radius:50%;font-size:1.5rem;cursor:pointer;transition:background .2s;display:flex;align-items:center;justify-content:center;line-height:1}
.ups-hero__arrow:hover{background:rgba(255,255,255,.28)}
.ups-hero__arrow--prev{left:20px}
.ups-hero__arrow--next{right:20px}
.ups-hero__dots{position:absolute;bottom:20px;left:50%;transform:translateX(-50%);z-index:3;display:flex;gap:9px}
.ups-hero__dot{width:9px;height:9px;border-radius:50%;background:rgba(255,255,255,.38);border:none;cursor:pointer;padding:0;transition:background .25s,transform .25s}
.ups-hero__dot.is-active{background:#f0c040;transform:scale(1.3)}
/* â”€â”€ Trust Bar â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
.ups-trust-bar{background:#001a3a;color:#fff;padding:26px 0;border-top:1px solid rgba(255,255,255,.08)}
.ups-trust-bar__items{display:flex;justify-content:space-around;align-items:center;flex-wrap:wrap;gap:20px;text-align:center}
.ups-trust-bar__item{padding:0 12px}
.ups-trust-bar__num{font-size:1.65rem;font-weight:700;color:#f0c040;display:block;line-height:1.1}
.ups-trust-bar__label{font-size:.7rem;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.6);margin-top:4px;display:block}
/* â”€â”€ Why Ultraprosavers â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
.ups-why{background:#f7f8fa;padding:68px 0}
.ups-why__heading{text-align:center;font-size:1.65rem;font-weight:700;color:#001a3a;margin-bottom:10px}
.ups-why__sub{text-align:center;color:#5a6a7e;max-width:540px;margin:0 auto 46px;font-size:.93rem;line-height:1.65}
.ups-why__grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:28px}
.ups-why__card{background:#fff;border-radius:8px;padding:34px 26px;box-shadow:0 2px 14px rgba(0,0,0,.07);text-align:center;transition:transform .2s,box-shadow .2s}
.ups-why__card:hover{transform:translateY(-5px);box-shadow:0 8px 24px rgba(0,0,0,.11)}
.ups-why__icon{width:60px;height:60px;background:#e8f0fe;border-radius:50%;margin:0 auto 20px;display:flex;align-items:center;justify-content:center}
.ups-why__icon svg{width:28px;height:28px;fill:#1a3c7a}
.ups-why__card-title{font-size:.98rem;font-weight:700;color:#001a3a;margin-bottom:8px}
.ups-why__card-text{font-size:.86rem;color:#5a6a7e;line-height:1.65}
/* â”€â”€ Testimonials â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
.ups-testimonials{background:linear-gradient(135deg,#001a3a 0%,#00336b 100%);padding:68px 0}
.ups-testimonials__heading{text-align:center;color:#fff;font-size:1.6rem;font-weight:700;margin-bottom:10px}
.ups-testimonials__sub{text-align:center;color:rgba(255,255,255,.6);font-size:.9rem;margin-bottom:44px}
.ups-testimonials__grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:26px}
.ups-testimonials__card{background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.12);border-radius:10px;padding:30px 28px 24px;position:relative}
.ups-testimonials__card::before{content:'\201C';font-size:4.5rem;color:#f0c040;position:absolute;top:6px;left:18px;font-family:Georgia,serif;line-height:.9}
.ups-testimonials__text{color:rgba(255,255,255,.9);font-size:.94rem;line-height:1.78;padding-top:30px;margin-bottom:18px}
.ups-testimonials__stars{color:#f0c040;font-size:.95rem;margin-bottom:14px;letter-spacing:3px}
.ups-testimonials__author{font-size:.8rem;font-weight:700;color:#f0c040;letter-spacing:.07em;text-transform:uppercase}
.ups-testimonials__role{font-size:.77rem;color:rgba(255,255,255,.48);margin-top:3px}
/* â”€â”€ Section links polish â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
.section-links__title{font-size:1.5rem!important;color:#001a3a!important}
.section-links__item a{transition:transform .15s!important;display:block}
.section-links__item a:hover{transform:translateY(-4px)!important}
/* â”€â”€ Campaign feature polish â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
.campaign-feature__meta-title{font-size:1.7rem!important;line-height:1.3!important}
</style>
                <!-- Hero Carousel -->
                <section class="ups-hero" aria-label="Hero Area">
                    <!-- Slide 1 -->
                    <div class="ups-hero__slide is-active"
                        style="background-image:url('templates/bank-pro/homepage-images/metro.jpg')"></div>
                    <!-- Slide 2 â€“ solid gradient -->
                    <div class="ups-hero__slide"
                        style="background-image:linear-gradient(135deg,#003366 0%,#005599 55%,#0077cc 100%)"></div>
                    <!-- Slide 3 -->
                    <div class="ups-hero__slide"
                        style="background-image:url('templates/bank-pro/homepage-images/feature.jpg')"></div>
                    <!-- Slide body -->
                    <div class="ups-hero__body">
                        <div class="l-contain" style="width:100%;max-width:1200px;margin:0 auto">
                            <div class="ups-hero__content">
                                <span class="ups-hero__eyebrow" id="heroEyebrow">Welcome to Ultraprosavers</span>
                                <h1 class="ups-hero__title" id="heroTitle">Banking Built for <em>Your Future</em></h1>
                                <p class="ups-hero__subtitle" id="heroSubtitle">We believe people come first. Experience genuinely different banking â€” face to face, over the phone, online, or on our app.</p>
                                <div class="ups-hero__btns">
                                    <a href="#" class="ups-hero__btn ups-hero__btn--primary js-header-login-toggle" data-open="header-register">Open an Account</a>
                                    <a href="certificates" class="ups-hero__btn ups-hero__btn--outline">Explore Rates</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <button class="ups-hero__arrow ups-hero__arrow--prev" id="heroPrev" aria-label="Previous slide">&#8249;</button>
                    <button class="ups-hero__arrow ups-hero__arrow--next" id="heroNext" aria-label="Next slide">&#8250;</button>
                    <div class="ups-hero__dots" id="heroDots"></div>
                </section>
                <script>
                (function(){
                    var slides = document.querySelectorAll('.ups-hero__slide');
                    var dotsEl = document.getElementById('heroDots');
                    var eyebrow = document.getElementById('heroEyebrow');
                    var titleEl = document.getElementById('heroTitle');
                    var subEl   = document.getElementById('heroSubtitle');
                    var current = 0, timer;
                    var data = [
                        {ey:'Welcome to Ultraprosavers',ti:'Banking Built for <em>Your Future</em>',su:'We believe people come first. Experience genuinely different banking \u2014 face to face, over the phone, online, or on our app.'},
                        {ey:'High-Yield Savings',ti:'Grow Your Wealth <em>with Confidence</em>',su:'Earn up to 4.20% APY on certificates and 3.75% APY on high-yield savings. Your money works harder here.'},
                        {ey:'Smart Lending Solutions',ti:'The Right Loan <em>at the Right Rate</em>',su:'From auto loans to mortgages and personal credit, we offer competitive rates and fast approvals tailored to you.'}
                    ];
                    slides.forEach(function(_,i){
                        var d=document.createElement('button');
                        d.className='ups-hero__dot'+(i===0?' is-active':'');
                        d.setAttribute('aria-label','Slide '+(i+1));
                        d.addEventListener('click',function(){go(i)});
                        dotsEl.appendChild(d);
                    });
                    function updateContent(i){eyebrow.textContent=data[i].ey;titleEl.innerHTML=data[i].ti;subEl.textContent=data[i].su;}
                    function go(n){
                        slides[current].classList.remove('is-active');
                        dotsEl.children[current].classList.remove('is-active');
                        current=(n+slides.length)%slides.length;
                        slides[current].classList.add('is-active');
                        dotsEl.children[current].classList.add('is-active');
                        updateContent(current);
                        resetTimer();
                    }
                    function resetTimer(){clearInterval(timer);timer=setInterval(function(){go(current+1)},6000);}
                    document.getElementById('heroPrev').addEventListener('click',function(){go(current-1)});
                    document.getElementById('heroNext').addEventListener('click',function(){go(current+1)});
                    resetTimer();
                })();
                </script>
                <section class="static-strip" aria-label="Branch Information">
                    <div class="static-strip__inner">
                        <ul>
                            <li class="static-strip__routing-num">
                                Routing # <br> 263488976</li>
                            <li>
                                <a href="javascript:;" data-toggle="branch-hours__dropup">
                                    <span class="icon">
                                        <img src="templates/bank-pro/static-strip-icons/ico-clock-new.svg" width="38"
                                            height="38" alt="">
                                    </span>
                                    Branch Hours
                                </a>
                                <div id="branch-hours__dropup" class="static-strip__dropup" data-toggler=".is-active">
                                    <dl class="static-strip__hours">
                                        <dt>Mon-Thurs</dt>
                                        <dd>8:30 a.m.-5:00 p.m.</dd>
                                        <dt>Friday:</dt>
                                        <dd>8:30 a.m.-6:00 p.m.</dd>
                                        <dt>Saturday:</dt>
                                        <dd>9:00 a.m.-1:00 p.m.</dd>
                                    </dl>
                                    <a class="button--navy-outline"
                                        href="mailto:support@Ultraprosavers.online">Schedule an Appointment</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <!-- Trust / Statistics Bar -->
                <section class="ups-trust-bar" aria-label="Ultraprosavers At a Glance">
                    <div class="l-contain">
                        <div class="ups-trust-bar__items">
                            <div class="ups-trust-bar__item">
                                <span class="ups-trust-bar__num">Since 2010</span>
                                <span class="ups-trust-bar__label">Established</span>
                            </div>
                            <div class="ups-trust-bar__item">
                                <span class="ups-trust-bar__num">$5B+</span>
                                <span class="ups-trust-bar__label">Assets Under Management</span>
                            </div>
                            <div class="ups-trust-bar__item">
                                <span class="ups-trust-bar__num">250,000+</span>
                                <span class="ups-trust-bar__label">Members Served</span>
                            </div>
                            <div class="ups-trust-bar__item">
                                <span class="ups-trust-bar__num">FDIC</span>
                                <span class="ups-trust-bar__label">Insured &amp; Regulated</span>
                            </div>
                            <div class="ups-trust-bar__item">
                                <span class="ups-trust-bar__num">4.8 &#9733;</span>
                                <span class="ups-trust-bar__label">Member Satisfaction</span>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="tabbed-feature" class="tabbed-feature js-tabbed-feature" aria-label="Find Your Branch">
                    <div class="l-contain">
                        <div class="tabbed-feature__inner">
                            <ul id="tabbed-feature-nav" class="tabbed-feature__tabs tabs">
                                <li class="tabs-title">
                                    <a href="#">Ultraprosavers Rates</a>
                                </li>
                                <li class="tabs-title">
                                    <a href="#">Ultraprosavers Member Care</a>
                                </li>
                            </ul>
                            <div class="tabbed-feature__content tabs-content">
                                <div class="tabbed-feature__content-item">
                                    <a class="tabbed-feature__content-item-title" href="#">
                                        <span class="accordion-title-inner"><span
                                                class="accordion-title__text">Rates</span></span>
                                        <span class="icon icon--accordion rotate-180">
                                            <span class="icon__bg"></span>
                                        </span>
                                    </a>
                                    <div class="tabs-panel-inner">
                                        <div class="tabs-panel-inner-wrap">
                                            <section class="rates-hero js-rates-hero is-hidden"
                                                data-initial-tab-index="0" aria-label="Ultraprosavers Rates">
                                                <div class="l-contain rates-hero__content">
                                                    <div class="rates-hero__content-item js-rates-hero-content-item">
                                                        <div class="rates-hero__grid">
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-amt">
                                                                        3.75%<span>APY</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        High Yield Savings Account
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        High Yield Savings Rate
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-amt">
                                                                        3.65%<span>APY</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        18 Month Certificate
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Ultraprosavers Standard Certificate Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-amt">
                                                                        4.00%<span>APY</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        36 Month Certificate
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Ultraprosavers Standard Certificate Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        15.49%<span>APR</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        Cash Rewards Mastercard
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Mastercard
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">
                                                                        variable APR
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="rates-hero__content-item js-rates-hero-content-item">
                                                        <div class="rates-hero__grid">
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-amt">
                                                                        3.75%<span>APY</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        High Yield Savings Account
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        High Yield Savings Rate
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-amt">
                                                                        3.75%<span>APY</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        24 Month Certificate
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Ultraprosavers Standard Certificate Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-amt">
                                                                        4.00%<span>APY</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        36 Month Certificate
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Ultraprosavers Standard Certificate Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-amt">
                                                                        4.20%<span>APY</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        60 Month Certificate
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Ultraprosavers Standard Certificate Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="rates-hero__content-item js-rates-hero-content-item">
                                                        <div class="rates-hero__grid">
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        15.49%<span>APR</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        Cash Rewards Mastercard
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Mastercard
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">
                                                                        variable APR
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        9.99%<span>APR</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        Rewards Mastercard
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Mastercard
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">
                                                                        fixed APR
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        11.49%<span>APR</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        Choice Mastercard
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Mastercard
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">
                                                                        variable APR
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        14.49%<span>APR</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        World Mastercard
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Mastercard
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">
                                                                        variable APR
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="rates-hero__content-item js-rates-hero-content-item">
                                                        <div class="rates-hero__grid">
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        5.89%<span>APR</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        New Auto - Up to 66 Months
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Auto Loan Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        6.19%<span>APR</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        Used - Up to 66 Months
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Auto Loan Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        11.99%<span>APR</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        Personal Loan
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Personal Loan Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        2.49%<span>INTRO</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        Interest-Only HELOC
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Home Equity Loan Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">
                                                                        variable
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="rates-hero__content-item js-rates-hero-content-item">
                                                        <div class="rates-hero__grid">
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        6.375%<span>REG</span></div>
                                                                    <span class="rates-hero__rate-desc">
                                                                        10 Year Refinance Rate
                                                                    </span>
                                                                    <div class="rates-hero__rate-card">
                                                                        Conventional Mortgage and Refinance Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">
                                                                        fixed rate
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        6.875%<span>REG</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        30 Year Purchase Rate
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Conventional Mortgage and Refinance Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">
                                                                        fixed rate
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="rates-hero__grid-item">
                                                                <div class="rates-hero__rate">
                                                                    <div class="rates-hero__rate-pre">AS LOW AS</div>
                                                                    <div class="rates-hero__rate-amt">
                                                                        6.625%<span>REG</span></div>
                                                                    <a href="#"
                                                                        class="rates-hero__rate-desc">
                                                                        10/1 Year ARM
                                                                    </a>
                                                                    <div class="rates-hero__rate-card">
                                                                        Conventional Mortgage and Refinance Rates
                                                                    </div>
                                                                    <div class="rates-hero__rate-note">
                                                                        variable rate
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="rates-hero__nav">
                                                        <a href="#"
                                                            class="rates-hero__nav-item rates-hero__nav-item--featured js-rates-hero-nav-item"
                                                            data-tab="0" tabindex="0">
                                                            <img src="templates/bank-pro/new-brand/click-credit-union-interest-rates2d242d24.svg?la=en&amp;hash=F645C6A70380501060089A848126191F"
                                                                class="rates-hero__nav-item-image"
                                                                alt="click to select, featured, credit union interest rates" /><img
                                                                src="templates/bank-pro/new-brand/click-credit-union-interest-rates2d242d24.svg?la=en&amp;hash=F645C6A70380501060089A848126191F"
                                                                class="rates-hero__nav-item-image rates-hero__nav-item-image--selected"
                                                                alt="click to select, featured, credit union interest rates" />
                                                            <span class="rates-hero__nav-item-text js-nav-item-text"
                                                                data-productlink='#'
                                                                data-productlinktype='Featured'>Featured</span>
                                                        </a>
                                                        <a href="#"
                                                            class="rates-hero__nav-item rates-hero__nav-item--savings js-rates-hero-nav-item"
                                                            data-tab="1" tabindex="0">
                                                            <img src="templates/bank-pro/new-brand/click-current-bank-certificate-savings-rates925a925a.svg?la=en&amp;hash=1259E47B753C2F5FD76918926080E30A"
                                                                class="rates-hero__nav-item-image"
                                                                alt="click to select, current certificate rates, current savings rates" /><img
                                                                src="templates/bank-pro/icons/rate-icons/new/ico-savings695e695e.svg?la=en&amp;hash=0E55614F75FB061850865FD235D7ABDA"
                                                                class="rates-hero__nav-item-image rates-hero__nav-item-image--selected"
                                                                alt="Savings" /> <span
                                                                class="rates-hero__nav-item-text js-nav-item-text"
                                                                data-productlink='#'
                                                                data-productlinktype='Savings'>Savings</span>
                                                        </a>
                                                        <a href="#"
                                                            class="rates-hero__nav-item rates-hero__nav-item--cards js-rates-hero-nav-item"
                                                            data-tab="2" tabindex="0">
                                                            <img src="templates/bank-pro/new-brand/click-current-credit-card-ratesd139d139.svg?la=en&amp;hash=223E4B99FFA90F053726A65798AAA796"
                                                                class="rates-hero__nav-item-image"
                                                                alt="click to select, current credit card rates " /><img
                                                                src="templates/bank-pro/icons/rate-icons/new/ico-credit-cardse892e892.svg?la=en&amp;hash=322BE42CDBB783680C29587753C3817A"
                                                                class="rates-hero__nav-item-image rates-hero__nav-item-image--selected"
                                                                alt="credit card" /> <span
                                                                class="rates-hero__nav-item-text js-nav-item-text"
                                                                data-productlink='#'
                                                                data-productlinktype='Credit Cards'>Credit Cards</span>
                                                        </a>
                                                        <a href="#"
                                                            class="rates-hero__nav-item rates-hero__nav-item--mortgages js-rates-hero-nav-item"
                                                            data-tab="3" tabindex="0">
                                                            <img src="templates/bank-pro/new-brand/click-current-loan-rates-business-loan-ratesd4a0d4a0.svg?la=en&amp;hash=1E16BF0885B28F4394AEF4D91B3D1795"
                                                                class="rates-hero__nav-item-image"
                                                                alt="click to select, current loan rates, current auto loan rates, current personal loan rates, current business loan rates" /><img
                                                                src="templates/bank-pro/new-brand/selected-current-loan-rates-business-loan-ratese6b5e6b5.svg?la=en&amp;hash=54709063507BFE1E2B00883188CF5F2C"
                                                                class="rates-hero__nav-item-image rates-hero__nav-item-image--selected"
                                                                alt="selected, current loan rates, current auto loan rates, current personal loan rates, current business loan rates" />
                                                            <span class="rates-hero__nav-item-text js-nav-item-text"
                                                                data-productlinktype='Loans'>Loans</span>
                                                        </a>
                                                        <a href="#"
                                                            class="rates-hero__nav-item rates-hero__nav-item--loans js-rates-hero-nav-item"
                                                            data-tab="4" tabindex="0">
                                                            <img src="templates/bank-pro/new-brand/selected-current-mortgage-loan-rates09810981.svg?la=en&amp;hash=57C8882AD80B2212AF34531169CD7E52"
                                                                class="rates-hero__nav-item-image"
                                                                alt="selected, current mortgage loan rates" /><img
                                                                src="templates/bank-pro/new-brand/selected-current-mortgage-loan-rates09810981.svg?la=en&amp;hash=57C8882AD80B2212AF34531169CD7E52"
                                                                class="rates-hero__nav-item-image rates-hero__nav-item-image--selected"
                                                                alt="selected, current mortgage loan rates" /> <span
                                                                class="rates-hero__nav-item-text js-nav-item-text"
                                                                data-productlink='#'
                                                                data-productlinktype='Mortgages'>Mortgages</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabbed-feature__content-item">
                                    <a class="tabbed-feature__content-item-title" href="#">
                                        <span class="accordion-title-inner"><span class="accordion-title__text">Member
                                                Care</span></span>
                                        <span class="icon icon--accordion rotate-180">
                                            <span class="icon__bg"></span>
                                        </span>
                                    </a>
                                    <div class="tabs-panel-inner">
                                        <div class="tabs-panel-inner-wrap">
                                            <div class="grid-x grid-padding-x grid-padding-y">
                                                <div class="cell small-6 large-3">
                                                    <div class="tabbed-feature__link">
                                                        <a class="gtm__tabbed-feature__customer-support"
                                                            href="mailto:support@Ultraprosavers.online">
                                                            <span class="icon icon--solid" aria-hidden="true">
                                                                <img src="templates/bank-pro/tabbed-icons/icon-send-message.svg"
                                                                    width="85" height="85" alt="">
                                                            </span>
                                                            <span class="link-chevron">Send Us a Message</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cell small-6 large-3">
                                                    <div class="tabbed-feature__link">
                                                        <a class="gtm__tabbed-feature__customer-support"
                                                            href="tel:+1">
                                                            <span class="icon icon--solid" aria-hidden="true">
                                                                <img src="templates/bank-pro/tabbed-icons/icon-call.svg"
                                                                    width="85" height="85" alt="">
                                                            </span>
                                                            <span class="link-chevron">Call Us</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cell small-6 large-3">
                                                    <div class="tabbed-feature__link">
                                                        <a class="gtm__tabbed-feature__customer-support"
                                                            href="mailto:support@Ultraprosavers.online">
                                                            <span class="icon icon--solid" aria-hidden="true">
                                                                <img src="templates/bank-pro/tabbed-icons/icon-calendar.svg"
                                                                    width="85" height="85" alt="">
                                                            </span>
                                                            <span class="link-chevron">Schedule an appointment</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cell small-6 large-3">
                                                    <div class="tabbed-feature__link">
                                                        <a class="gtm__tabbed-feature__customer-support"
                                                            href="customer-support.html">
                                                            <span class="icon icon--solid" aria-hidden="true">
                                                                <img src="templates/bank-pro/tabbed-icons/icon-FAQs.svg"
                                                                    width="85" height="85" alt="">
                                                            </span>
                                                            <span class="link-chevron">FAQs and Support</span>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section-links" aria-labelledby="section-links--default__title">
                    <div class="l-contain">
                        <h2 id="section-links--default__title" class="section-links__title">How Can We Help You Today?
                        </h2>
                        <div class="grid-x grid-padding-x grid-padding-y">
                            <div class="cell small-6 large-4">
                                <div class="section-links__item">
                                    <a class="gtm__section-links" href="bank.html">
                                        <span class="icon icon--solid">
                                            <img src="templates/bank-pro/section-links/ico-check-account.svg" width="85"
                                                height="85" alt="open an account">
                                        </span>
                                        <span class="link-chevron">Instant Accounts</span>
                                    </a>
                                </div>
                            </div>
                            <div class="cell small-6 large-4">
                                <div class="section-links__item">
                                    <a class="gtm__section-links" href="credit-cards.html">
                                        <span class="icon icon--solid">
                                            <img src="templates/bank-pro/section-links/ico-credit-cards.svg" width="85"
                                                height="85" alt="Credit Cards">
                                        </span>
                                        <span class="link-chevron">Credit Cards</span>
                                    </a>
                                </div>
                            </div>
                            <div class="cell small-6 large-4">
                                <div class="section-links__item">
                                    <a class="gtm__section-links" href="borrow.html">
                                        <span class="icon icon--solid">
                                            <img src="templates/bank-pro/section-links/ico-loans.svg" width="85" height="85"
                                                alt="Loans">
                                        </span>
                                        <span class="link-chevron">Loans</span>
                                    </a>
                                </div>
                            </div>
                            <div class="cell small-6 large-4">
                                <div class="section-links__item">
                                    <a class="gtm__section-links" href="business-banking.html">
                                        <span class="icon icon--solid">
                                            <img src="templates/bank-pro/section-links/ico-businessbanking.svg" width="85"
                                                height="85" alt="business banking ">
                                        </span>
                                        <span class="link-chevron">Business Banking</span>
                                    </a>
                                </div>
                            </div>
                            <div class="cell small-6 large-4">
                                <div class="section-links__item">
                                    <a class="gtm__section-links" href="invest.html">
                                        <span class="icon icon--solid">
                                            <img src="templates/bank-pro/section-links/ico-invest.svg" width="85"
                                                height="85" alt="Invest">
                                        </span>
                                        <span class="link-chevron">Wealth &amp; Retire</span>
                                    </a>
                                </div>
                            </div>
                            <div class="cell small-6 large-4">
                                <div class="section-links__item">
                                    <a class="gtm__section-links" href="about-us.html">
                                        <span class="icon icon--solid">
                                            <img src="templates/bank-pro/section-links/ico-about.svg" width="85" height="85"
                                                alt="About Ultraprosavers ">
                                        </span>
                                        <span class="link-chevron">About Ultraprosavers</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="campaign-feature--default" class="campaign-feature "
                    aria-labelledby="campaign-feature--default__title">
                    <div class="campaign-feature__inner">
                        <div class="campaign-feature__image">
                            <figure>
                                <span>
                                    <img src="templates/bank-pro/homepage-images/feature.jpg"
                                        alt="300 Cash Back Checking Bonus">
                                </span>
                            </figure>
                        </div>

                        <div class="campaign-feature__meta-wrap">
                            <div class="campaign-feature__meta" data-toggle="rellax" data-rellax-center
                                data-rellax-speed="0" data-rellax-tablet-speed="-1.5" data-rellax-desktop-speed="-1.5">
                                <h2 id="campaign-feature--default__title" class="campaign-feature__meta-title">Get €300*
                                    With a Checking Account Built for You</h2>
                                <p class="campaign-feature__meta-text">For a limited time, get a €300 when you open any
                                    new checking account! <sup>*</sup>Select "Learn More" to
                                    see important offer details. </p>
                              
                            </div>
                        </div>
                    </div>
                </section>
                <section class="related-content" aria-labelledby="related-content-list__title">
                    <h2 id="related-content-list__title" class="related-content__title">Start Building Your Financial
                        Strength</h2>
                    <div class="related-content__items">

                        <div class="related-content__item">
                            <div class="related-content__item-meta">
                                <h3 class="related-content__item-title"><a class="link-chevron"
                                        href="tax-checklist-5-things-to-remember.html"><span>Tax
                                            Checklist: 5 Things to Remember</span></a></h3>
                                <a class="related-content__item-label"
                                    href="#">Starting Out</a>
                                <div class="related-content__item-excerpt">Tax season is quickly approaching&mdash;do
                                    you know what you need to claim, and what forms you need to submit? This tax
                                    checklist makes filing simple. Learn more today!</div>
                            </div>
                            <div class="related-content__item-image">
                                <div class="related-content__item-image-wrap">
                                    <img src="templates/bank-pro/learn-and-plan-images/personal-finance-101/unsplash.jpg"
                                        alt="Img">
                                </div>
                            </div>
                        </div>
                        <div class="related-content__item">
                            <div class="related-content__item-meta">
                                <h3 class="related-content__item-title"><a class="link-chevron"
                                        href="simple-ways-to-manage-a-checking-account.html"><span>How to
                                            Manage Your Checking</span></a></h3>
                                <a class="related-content__item-label"
                                    href="#">Starting Out</a>
                            </div>
                            <div class="related-content__item-image">
                                <div class="related-content__item-image-wrap">
                                    <img src="templates/bank-pro/learn-and-plan-images/personal-finance-101/8554477.jpg"
                                        alt="open a checking account online">
                                </div>
                            </div>
                        </div>
                        <div class="related-content__item">
                            <div class="related-content__item-meta">
                                <h3 class="related-content__item-title"><a class="link-chevron"
                                        href="how-to-save-for-summer-vacation.html"><span>How to Save for
                                            Summer Vacation</span></a></h3>
                                <a class="related-content__item-label"
                                    href="#">Starting Out</a>
                            </div>
                            <div class="related-content__item-image">
                                <div class="related-content__item-image-wrap">
                                    <img src="templates/bank-pro/learn-and-plan-images/personal-finance-101/1116302.jpg"
                                        alt="saving for a summer vacation">
                                </div>
                            </div>
                        </div>
                        <div class="related-content__item">
                            <div class="related-content__item-meta">
                                <h3 class="related-content__item-title"><a class="link-chevron"
                                        href="the-impact-of-rising-rates-and-inflation-on-your-business.html"><span>How
                                            Rising Rates and Inflation Impact Businesses</span></a></h3>
                                <a class="related-content__item-label"
                                    href="learn-and-plane305e305.html?category=running-a-business">Running a Business</a>
                            </div>
                            <div class="related-content__item-image">
                                <div class="related-content__item-image-wrap">
                                    <img src="templates/bank-pro/learn-and-plan-images/running-a-business/13418669.jpg"
                                        alt="Rising interest rates">
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                
                <!-- Why Ultraprosavers -->
                <section class="ups-why" aria-labelledby="ups-why-title">
                    <div class="l-contain">
                        <h2 id="ups-why-title" class="ups-why__heading">Why Choose Ultraprosavers?</h2>
                        <p class="ups-why__sub">We combine the personal touch of a community institution with the technology and financial strength of a world-class bank.</p>
                        <div class="ups-why__grid">
                            <div class="ups-why__card">
                                <div class="ups-why__icon">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5L12 1zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/></svg>
                                </div>
                                <div class="ups-why__card-title">Bank-Grade Security</div>
                                <p class="ups-why__card-text">Multi-factor authentication, end-to-end encryption, and real-time fraud monitoring keep your money safe around the clock.</p>
                            </div>
                            <div class="ups-why__card">
                                <div class="ups-why__icon">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/></svg>
                                </div>
                                <div class="ups-why__card-title">Competitive Rates</div>
                                <p class="ups-why__card-text">Industry-leading APYs on savings accounts and certificates, plus low-rate lending for every stage of life.</p>
                            </div>
                            <div class="ups-why__card">
                                <div class="ups-why__icon">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/></svg>
                                </div>
                                <div class="ups-why__card-title">Instant Accounts</div>
                                <p class="ups-why__card-text">Open a checking or savings account in minutes â€” no paperwork, no branch visit required. Banking when and where you need it.</p>
                            </div>
                            <div class="ups-why__card">
                                <div class="ups-why__icon">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                </div>
                                <div class="ups-why__card-title">People-First Service</div>
                                <p class="ups-why__card-text">Dedicated member advisors available in-branch, by phone, and online â€” real people providing real support every day.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Testimonials -->
                <section class="ups-testimonials" aria-labelledby="ups-testi-title">
                    <div class="l-contain">
                        <h2 id="ups-testi-title" class="ups-testimonials__heading">Hear From Our Members</h2>
                        <p class="ups-testimonials__sub">Real experiences from people who bank with Ultraprosavers every day.</p>
                        <div class="ups-testimonials__grid">
                            <div class="ups-testimonials__card">
                                <div class="ups-testimonials__stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                                <p class="ups-testimonials__text">I am impressed with the customer service and speed of payout. From application to approval, everything was seamless and professional. I wouldn&rsquo;t bank anywhere else.</p>
                                <div class="ups-testimonials__author">Ralph Morris</div>
                                <div class="ups-testimonials__role">Member since 2018</div>
                            </div>
                            <div class="ups-testimonials__card">
                                <div class="ups-testimonials__stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                                <p class="ups-testimonials__text">All one has to do is look at your investment to see how well it is being looked after. The rates are exceptional and the team genuinely cares about outcomes.</p>
                                <div class="ups-testimonials__author">Ted Moralee</div>
                                <div class="ups-testimonials__role">Certificate holder since 2020</div>
                            </div>
                            <div class="ups-testimonials__card">
                                <div class="ups-testimonials__stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                                <p class="ups-testimonials__text">Moving my business accounts here was one of the best financial decisions I&rsquo;ve made. The dedicated business banking team understands our needs and responds fast.</p>
                                <div class="ups-testimonials__author">Sandra K.</div>
                                <div class="ups-testimonials__role">Business banking member</div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </main>
    </div>
</div>


@include('home.footer')