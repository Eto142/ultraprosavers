@include('home.header')
<div class="l-content-wrap u-cf"><div class="l-1-col-master u-cf"><main class="l-content-primary"><div class="body-content js-body-content">

{{-- ── HERO ── --}}
<section class="ip-hero">
  <div class="l-contain">
    <span class="ip-hero__pill"><i class="ri-information-line"></i> About Us</span>
    <h1>Banking With a <em>Human Touch</em></h1>
    <p class="ip-hero__lead">Since 2010, Ultraprosavers has been on a mission to make banking smarter, fairer, and more personal. We serve over 250,000 members across 80+ countries — and we&rsquo;re just getting started.</p>
    <div class="ip-hero__btns">
      <a href="{{ route('register') }}" class="ip-btn ip-btn--gold">Join Us Today</a>
      <a href="{{ url('contact') }}" class="ip-btn ip-btn--outline-white">Get in Touch</a>
    </div>
    <div class="ip-hero__breadcrumb"><a href="{{ url('/') }}">Home</a><span>/</span>About</div>
  </div>
  <div class="ip-hero__wave">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,40 C360,80 1080,0 1440,40 L1440,60 L0,60 Z" fill="#fff"/>
    </svg>
  </div>
</section>

{{-- ── STATS BAR ── --}}
<section class="ip-stats">
  <div class="l-contain">
    <div class="ip-stats__inner">
      <div class="ip-stats__item"><span class="ip-stats__num"><em>2010</em></span><span class="ip-stats__label">Year Founded</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num"><em>$</em>5B+</span><span class="ip-stats__label">Assets Under Management</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num">250K<em>+</em></span><span class="ip-stats__label">Members Worldwide</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num">80<em>+</em></span><span class="ip-stats__label">Countries Served</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num">4.8<em>&#9733;</em></span><span class="ip-stats__label">Member Satisfaction</span></div>
    </div>
  </div>
</section>

{{-- ── OUR STORY ── --}}
<section class="ip-section">
  <div class="l-contain">
    <div class="ip-two-col ip-two-col--wide">
      <div>
        <span class="ip-label">Our Story</span>
        <h2 class="ip-heading">Built by Bankers Who Believed Banking Could Be Better</h2>
        <p style="font-size:.9rem;color:#6b7a8d;line-height:1.76;margin-bottom:16px">Ultraprosavers was founded in 2010 by a group of financial industry veterans who were frustrated by the complexity, opacity, and indifference that defined traditional banking. Their belief was simple: people deserve a bank that works for them, not against them.</p>
        <p style="font-size:.9rem;color:#6b7a8d;line-height:1.76;margin-bottom:28px">We started with a focus on digital-first savings accounts and have since expanded to offer a comprehensive suite of personal, business, and lending products serving clients in 80+ countries.</p>
        <div class="ip-feat-item">
          <div class="ip-feat-item__icon ic-blue"><i class="ri-lightbulb-line"></i></div>
          <div><h4>Innovation First</h4><p>We continuously invest in technology to deliver the best possible banking experience.</p></div>
        </div>
        <div class="ip-feat-item">
          <div class="ip-feat-item__icon ic-green"><i class="ri-shield-check-line"></i></div>
          <div><h4>Trust &amp; Transparency</h4><p>No hidden fees, no small print surprises — honest banking you can rely on every day.</p></div>
        </div>
        <div class="ip-feat-item">
          <div class="ip-feat-item__icon ic-gold"><i class="ri-heart-3-line"></i></div>
          <div><h4>Member-Centric</h4><p>Every product decision starts and ends with one question: is this right for our members?</p></div>
        </div>
      </div>
      <div class="ip-visual-box">
        <div class="ip-visual-box__stat">
          <span class="ip-visual-box__num">15+</span>
          <span class="ip-visual-box__label">Years of Excellence</span>
        </div>
        <hr>
        <div class="ip-visual-box__stat">
          <span class="ip-visual-box__num">$5B+</span>
          <span class="ip-visual-box__label">Assets Under Management</span>
        </div>
        <hr>
        <div class="ip-visual-box__stat">
          <span class="ip-visual-box__num">80+</span>
          <span class="ip-visual-box__label">Countries &amp; Territories</span>
        </div>
        <hr>
        <div class="ip-visual-box__stat">
          <span class="ip-visual-box__num">250K+</span>
          <span class="ip-visual-box__label">Happy Members</span>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ── OUR VALUES ── --}}
<section class="ip-section ip-section--alt">
  <div class="l-contain">
    <div class="ip-center">
      <span class="ip-label">What Drives Us</span>
      <h2 class="ip-heading">Our Core Values</h2>
      <p class="ip-sub">These aren&rsquo;t slogans on a wall — they&rsquo;re the principles that guide every product decision, every interaction, and every hire.</p>
    </div>
    <div class="ip-feat-grid" style="margin-top:40px">
      <div class="ip-feat-card">
        <div class="ip-feat-card__icon ic-blue"><i class="ri-shield-check-line"></i></div>
        <div class="ip-feat-card__title">Security</div>
        <div class="ip-feat-card__text">256-bit encryption and multi-factor authentication protect every account and every transaction.</div>
      </div>
      <div class="ip-feat-card">
        <div class="ip-feat-card__icon ic-gold"><i class="ri-eye-line"></i></div>
        <div class="ip-feat-card__title">Transparency</div>
        <div class="ip-feat-card__text">Honest pricing, clear terms, and no surprise charges — ever. What you see is what you get.</div>
      </div>
      <div class="ip-feat-card">
        <div class="ip-feat-card__icon ic-green"><i class="ri-lightbulb-flash-line"></i></div>
        <div class="ip-feat-card__title">Innovation</div>
        <div class="ip-feat-card__text">We embrace new technology to continuously improve and stay ahead of our members&rsquo; needs.</div>
      </div>
      <div class="ip-feat-card">
        <div class="ip-feat-card__icon ic-purple"><i class="ri-global-line"></i></div>
        <div class="ip-feat-card__title">Global Reach</div>
        <div class="ip-feat-card__text">Serving members in 80+ countries with localised support and multi-currency capabilities.</div>
      </div>
      <div class="ip-feat-card">
        <div class="ip-feat-card__icon ic-teal"><i class="ri-team-line"></i></div>
        <div class="ip-feat-card__title">Community</div>
        <div class="ip-feat-card__text">We invest in financial literacy programmes and community development initiatives worldwide.</div>
      </div>
      <div class="ip-feat-card">
        <div class="ip-feat-card__icon ic-navy"><i class="ri-time-line"></i></div>
        <div class="ip-feat-card__title">Reliability</div>
        <div class="ip-feat-card__text">99.9% uptime, 24/7 support, and a dedicated team ready to resolve any issue fast.</div>
      </div>
    </div>
  </div>
</section>

{{-- ── DARK STATS ROW ── --}}
<section class="ip-dark-stats">
  <div class="l-contain">
    <div class="ip-dark-stats__inner">
      <div><span class="ip-dark-stats__num">$5B+</span><span class="ip-dark-stats__label">Assets Under Management</span></div>
      <div><span class="ip-dark-stats__num">250K+</span><span class="ip-dark-stats__label">Members Worldwide</span></div>
      <div><span class="ip-dark-stats__num">80+</span><span class="ip-dark-stats__label">Countries Served</span></div>
      <div><span class="ip-dark-stats__num">15+</span><span class="ip-dark-stats__label">Years in Business</span></div>
    </div>
  </div>
</section>

{{-- ── MISSION STATEMENT SECTION ── --}}
<section class="ip-section">
  <div class="l-contain" style="max-width:760px">
    <div class="ip-center">
      <span class="ip-label">Our Mission</span>
      <h2 class="ip-heading">To Make Banking Simple, Fair, and Human</h2>
      <p class="ip-sub" style="max-width:100%;font-size:.95rem;line-height:1.8">At Ultraprosavers, we believe that financial services should empower people — not confuse or exploit them. We&rsquo;re building the bank that we&rsquo;d want to use ourselves: transparent, fast, secure, and always on your side. Every feature we ship, every product we launch, and every hire we make is guided by this mission.</p>
      <div style="margin-top:34px;padding:28px 32px;background:#f6f8fc;border-radius:14px;border-left:4px solid #c8902e;text-align:left">
        <p style="font-size:1.05rem;font-style:italic;color:#001a3a;line-height:1.7;margin:0">&ldquo;We started Ultraprosavers because we believed banking could — and should — be better. Fifteen years later, seeing how many lives we&rsquo;ve improved confirms that every day.&rdquo;</p>
        <p style="font-size:.8rem;font-weight:700;color:#c8902e;margin-top:14px;margin-bottom:0;text-transform:uppercase;letter-spacing:.1em">— James Hartwell, Founder &amp; CEO</p>
      </div>
    </div>
  </div>
</section>

{{-- ── CTA ── --}}
<section class="ip-cta">
  <div class="l-contain">
    <h2>Join the Ultraprosavers Family</h2>
    <p>Open your account today and experience banking the way it should be — honest, simple, and on your side.</p>
    <div class="ip-cta__btns">
      <a href="{{ route('register') }}" class="ip-btn ip-btn--gold">Open an Account</a>
      <a href="{{ url('contact') }}" class="ip-btn ip-btn--outline-white">Contact Us</a>
    </div>
  </div>
</section>

</div></main></div></div>
@include('home.footer')