@include('home.header')
<div class="l-content-wrap u-cf"><div class="l-1-col-master u-cf"><main class="l-content-primary"><div class="body-content js-body-content">

{{-- ── HERO ── --}}
<section class="ip-hero">
  <div class="l-contain">
    <span class="ip-hero__pill"><i class="ri-bank-card-line"></i> Cards</span>
    <h1>Cards That Work as <em>Hard as You Do</em></h1>
    <p class="ip-hero__lead">From everyday debit to premium rewards, every Ultraprosavers card is built with zero compromises — zero hidden fees, zero foreign transaction charges, and zero worries.</p>
    <div class="ip-hero__btns">
      <a href="{{ route('register') }}" class="ip-btn ip-btn--gold">Apply for a Card</a>
      <a href="{{ url('personal') }}" class="ip-btn ip-btn--outline-white">View Accounts</a>
    </div>
    <div class="ip-hero__breadcrumb"><a href="{{ url('/') }}">Home</a><span>/</span>Cards</div>
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
      <div class="ip-stats__item"><span class="ip-stats__num">0<em>%</em></span><span class="ip-stats__label">Intro APR (12 months)</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num"><em>3</em>%</span><span class="ip-stats__label">Cashback on Groceries</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num"><em>$</em>0</span><span class="ip-stats__label">Foreign Transaction Fees</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num"><em>$</em>0</span><span class="ip-stats__label">Annual Fee Options</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num">150<em>+</em></span><span class="ip-stats__label">Countries Accepted</span></div>
    </div>
  </div>
</section>

{{-- ── CARD SHOWCASE ── --}}
<section class="ip-section">
  <div class="l-contain">
    <div class="ip-center">
      <span class="ip-label">Our Card Range</span>
      <h2 class="ip-heading">A Card for Every Kind of Spender</h2>
      <p class="ip-sub">Each card is chip-and-PIN secured, Apple Pay and Google Pay ready, and accepted worldwide.</p>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:36px;margin-top:48px;align-items:start">

      {{-- Debit Card Visual + Info --}}
      <div>
        <div class="ip-card-art ip-card-art--navy" style="margin:0 auto 22px">
          <div class="ip-card-art__type">Debit</div>
          <div class="ip-card-art__chip"></div>
          <div class="ip-card-art__num">4521 •••• •••• 7834</div>
          <div class="ip-card-art__holder">J. SMITH</div>
          <div class="ip-card-art__logo">ULTRAPROSAVERS</div>
        </div>
        <h3 style="font-size:.98rem;font-weight:800;color:#001a3a;margin-bottom:6px">Everyday Debit Card</h3>
        <p style="font-size:.82rem;color:#6b7a8d;line-height:1.65;margin-bottom:12px">Instant access to your funds at 30,000+ ATMs with zero fees and real-time transaction alerts.</p>
        <a href="{{ route('register') }}" class="ip-btn ip-btn--navy" style="font-size:.8rem;padding:9px 18px">Get Your Debit Card</a>
      </div>

      {{-- Rewards Card Visual + Info --}}
      <div>
        <div class="ip-card-art ip-card-art--gold" style="margin:0 auto 22px">
          <div class="ip-card-art__type">Rewards</div>
          <div class="ip-card-art__chip"></div>
          <div class="ip-card-art__num">5412 •••• •••• 2291</div>
          <div class="ip-card-art__holder">S. WILLIAMS</div>
          <div class="ip-card-art__logo">ULTRAPROSAVERS</div>
        </div>
        <h3 style="font-size:.98rem;font-weight:800;color:#001a3a;margin-bottom:6px">Rewards Credit Card</h3>
        <p style="font-size:.82rem;color:#6b7a8d;line-height:1.65;margin-bottom:12px">Earn up to 3% cashback on groceries, 2% on dining, and 1% on everything else. No annual fee.</p>
        <a href="{{ route('register') }}" class="ip-btn ip-btn--gold" style="font-size:.8rem;padding:9px 18px">Apply for Rewards Card</a>
      </div>

      {{-- Platinum Card Visual + Info --}}
      <div>
        <div class="ip-card-art ip-card-art--dark" style="margin:0 auto 22px">
          <div class="ip-card-art__type">Platinum</div>
          <div class="ip-card-art__chip"></div>
          <div class="ip-card-art__num">4012 •••• •••• 9967</div>
          <div class="ip-card-art__holder">M. CHEN</div>
          <div class="ip-card-art__logo">ULTRAPROSAVERS</div>
        </div>
        <h3 style="font-size:.98rem;font-weight:800;color:#001a3a;margin-bottom:6px">Platinum Credit Card</h3>
        <p style="font-size:.82rem;color:#6b7a8d;line-height:1.65;margin-bottom:12px">Low 9.99% APR, premium concierge service, travel insurance, and exclusive airport lounge access.</p>
        <a href="{{ route('register') }}" class="ip-btn ip-btn--outline-navy" style="font-size:.8rem;padding:9px 18px">Apply for Platinum</a>
      </div>

    </div>
  </div>
</section>

{{-- ── FEATURES GRID ── --}}
<section class="ip-section ip-section--alt">
  <div class="l-contain">
    <div class="ip-center">
      <span class="ip-label">Card Features</span>
      <h2 class="ip-heading">Built-In Protection on Every Card</h2>
      <p class="ip-sub">Security, convenience, and control — every feature comes standard, no add-ons required.</p>
    </div>
    <div class="ip-feat-grid">
      <div class="ip-feat-card">
        <div class="ip-feat-card__icon ic-red"><i class="ri-shield-user-line"></i></div>
        <div class="ip-feat-card__title">Fraud Protection</div>
        <div class="ip-feat-card__text">AI-powered fraud detection monitors every transaction 24/7 and flags suspicious activity instantly.</div>
      </div>
      <div class="ip-feat-card">
        <div class="ip-feat-card__icon ic-blue"><i class="ri-notification-3-line"></i></div>
        <div class="ip-feat-card__title">Real-Time Alerts</div>
        <div class="ip-feat-card__text">Instant push notifications for every purchase, withdrawal, or payment authorisation.</div>
      </div>
      <div class="ip-feat-card">
        <div class="ip-feat-card__icon ic-green"><i class="ri-smartphone-line"></i></div>
        <div class="ip-feat-card__title">Mobile Wallet</div>
        <div class="ip-feat-card__text">Add your card to Apple Pay, Google Pay, or Samsung Pay in seconds — tap and pay anywhere.</div>
      </div>
      <div class="ip-feat-card">
        <div class="ip-feat-card__icon ic-purple"><i class="ri-fingerprint-line"></i></div>
        <div class="ip-feat-card__title">Virtual Card Numbers</div>
        <div class="ip-feat-card__text">Generate single-use virtual card numbers for online purchases to keep your real details safe.</div>
      </div>
      <div class="ip-feat-card">
        <div class="ip-feat-card__icon ic-gold"><i class="ri-settings-3-line"></i></div>
        <div class="ip-feat-card__title">Spending Controls</div>
        <div class="ip-feat-card__text">Set per-transaction limits, block specific categories, or freeze your card instantly from the app.</div>
      </div>
      <div class="ip-feat-card">
        <div class="ip-feat-card__icon ic-teal"><i class="ri-global-line"></i></div>
        <div class="ip-feat-card__title">Global Acceptance</div>
        <div class="ip-feat-card__text">Accepted in 150+ countries with no foreign transaction fees — ever.</div>
      </div>
    </div>
  </div>
</section>

{{-- ── HOW TO APPLY STEPS ── --}}
<section class="ip-section">
  <div class="l-contain">
    <div class="ip-center">
      <span class="ip-label">Getting Started</span>
      <h2 class="ip-heading">Apply in Under 3 Minutes</h2>
      <p class="ip-sub">No branch visit required. Your card is typically delivered within 3&ndash;5 business days.</p>
    </div>
    <div class="ip-steps">
      <div class="ip-step">
        <div class="ip-step__num">1</div>
        <div class="ip-step__title">Choose Your Card</div>
        <div class="ip-step__text">Select the card that matches your spending habits — debit, rewards, or platinum.</div>
      </div>
      <div class="ip-step">
        <div class="ip-step__num">2</div>
        <div class="ip-step__title">Complete Application</div>
        <div class="ip-step__text">Fill in your details online. For credit cards, a soft credit check is performed first.</div>
      </div>
      <div class="ip-step">
        <div class="ip-step__num">3</div>
        <div class="ip-step__title">Instant Decision</div>
        <div class="ip-step__text">Receive an instant decision. Credit cards get an initial virtual card number immediately.</div>
      </div>
      <div class="ip-step">
        <div class="ip-step__num">4</div>
        <div class="ip-step__title">Card Delivered</div>
        <div class="ip-step__text">Your physical card arrives in 3&ndash;5 working days, ready to activate in-app.</div>
      </div>
    </div>
  </div>
</section>

{{-- ── CTA ── --}}
<section class="ip-cta">
  <div class="l-contain">
    <h2>Get Your Card Today</h2>
    <p>Join 250,000+ members who trust Ultraprosavers for their everyday spending.</p>
    <div class="ip-cta__btns">
      <a href="{{ route('register') }}" class="ip-btn ip-btn--gold">Apply Now — It&rsquo;s Free</a>
      <a href="{{ url('contact') }}" class="ip-btn ip-btn--outline-white">Ask a Question</a>
    </div>
  </div>
</section>

</div></main></div></div>
@include('home.footer')