@include('home.header')
<div class="l-content-wrap u-cf"><div class="l-1-col-master u-cf"><main class="l-content-primary"><div class="body-content js-body-content">

{{-- ── HERO ── --}}
<section class="ip-hero">
  <div class="l-contain">
    <span class="ip-hero__pill"><i class="ri-user-3-line"></i> Personal Banking</span>
    <h1>Banking Built Around <em>Your Life</em></h1>
    <p class="ip-hero__lead">From your first checking account to a high-yield savings strategy, Ultraprosavers gives you the tools to take control of your financial future.</p>
    <div class="ip-hero__btns">
      <a href="{{ route('register') }}" class="ip-btn ip-btn--gold">Open an Account</a>
      <a href="{{ url('contact') }}" class="ip-btn ip-btn--outline-white">Talk to Us</a>
    </div>
    <div class="ip-hero__breadcrumb"><a href="{{ url('/') }}">Home</a><span>/</span>Personal</div>
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
      <div class="ip-stats__item"><span class="ip-stats__num"><em>4.25</em>%</span><span class="ip-stats__label">APY on Savings</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num">30K<em>+</em></span><span class="ip-stats__label">Fee-Free ATMs</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num"><em>$</em>0</span><span class="ip-stats__label">Monthly Fees</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num">250K</span><span class="ip-stats__label">FDIC Insured</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num">24<em>/</em>7</span><span class="ip-stats__label">Customer Support</span></div>
    </div>
  </div>
</section>

{{-- ── HOW IT WORKS ── --}}
<section class="ip-section ip-section--alt">
  <div class="l-contain">
    <div class="ip-center">
      <span class="ip-label">Get Started</span>
      <h2 class="ip-heading">Open Your Account in Minutes</h2>
      <p class="ip-sub">No paperwork, no branch visit required. Everything happens online.</p>
    </div>
    <div class="ip-steps">
      <div class="ip-step">
        <div class="ip-step__num">1</div>
        <div class="ip-step__title">Choose Your Account</div>
        <div class="ip-step__text">Pick the account type that fits your goals — checking, savings, or premium.</div>
      </div>
      <div class="ip-step">
        <div class="ip-step__num">2</div>
        <div class="ip-step__title">Verify Your Identity</div>
        <div class="ip-step__text">Provide a valid ID and confirm your details. Takes under two minutes.</div>
      </div>
      <div class="ip-step">
        <div class="ip-step__num">3</div>
        <div class="ip-step__title">Fund &amp; Start Banking</div>
        <div class="ip-step__text">Make an initial deposit and your account is active immediately.</div>
      </div>
    </div>
  </div>
</section>

{{-- ── PRODUCT CARDS ── --}}
<section class="ip-section">
  <div class="l-contain">
    <div class="ip-center">
      <span class="ip-label">Our Accounts</span>
      <h2 class="ip-heading">Find the Account That's Right for You</h2>
      <p class="ip-sub">All accounts include free mobile banking, e-statements, and FDIC protection up to $250,000.</p>
    </div>
    <div class="ip-prod-grid">
      <div class="ip-prod-card">
        <div class="ip-prod-card__bar ip-prod-card__bar--navy"></div>
        <div class="ip-prod-card__head">
          <div class="ip-prod-card__icon ip-prod-card__icon--navy"><i class="ri-bank-card-2-line"></i></div>
          <p class="ip-prod-card__name">Everyday Checking</p>
          <p class="ip-prod-card__tagline">For daily spending &amp; transactions</p>
        </div>
        <div class="ip-prod-card__body">
          <ul>
            <li><i class="ri-check-line"></i>No monthly fee with direct deposit</li>
            <li><i class="ri-check-line"></i>Free online &amp; mobile banking</li>
            <li><i class="ri-check-line"></i>Free Visa debit card</li>
            <li><i class="ri-check-line"></i>30,000+ fee-free ATMs</li>
            <li><i class="ri-check-line"></i>Overdraft protection available</li>
          </ul>
        </div>
        <div class="ip-prod-card__foot"><a href="{{ route('register') }}" class="ip-prod-card__btn ip-prod-card__btn--navy">Open Checking Account &rarr;</a></div>
      </div>
      <div class="ip-prod-card">
        <div class="ip-prod-card__bar ip-prod-card__bar--gold"></div>
        <div class="ip-prod-card__head">
          <div class="ip-prod-card__icon ip-prod-card__icon--gold"><i class="ri-funds-line"></i></div>
          <p class="ip-prod-card__name">High-Yield Savings</p>
          <p class="ip-prod-card__tagline">Earn up to <strong>4.25% APY</strong></p>
        </div>
        <div class="ip-prod-card__body">
          <ul>
            <li><i class="ri-check-line"></i>4.25% APY — no minimum balance</li>
            <li><i class="ri-check-line"></i>FDIC insured up to $250,000</li>
            <li><i class="ri-check-line"></i>Automatic savings round-ups</li>
            <li><i class="ri-check-line"></i>Instant transfers to checking</li>
            <li><i class="ri-check-line"></i>No withdrawal penalties</li>
          </ul>
        </div>
        <div class="ip-prod-card__foot"><a href="{{ route('register') }}" class="ip-prod-card__btn ip-prod-card__btn--gold">Start Saving Today &rarr;</a></div>
      </div>
      <div class="ip-prod-card">
        <div class="ip-prod-card__bar ip-prod-card__bar--purple"></div>
        <div class="ip-prod-card__head">
          <div class="ip-prod-card__icon ip-prod-card__icon--purple"><i class="ri-vip-crown-2-line"></i></div>
          <p class="ip-prod-card__name">Premium Benefits</p>
          <p class="ip-prod-card__tagline">The ultimate banking experience</p>
        </div>
        <div class="ip-prod-card__body">
          <ul>
            <li><i class="ri-check-line"></i>Dedicated relationship manager</li>
            <li><i class="ri-check-line"></i>Higher transfer &amp; payment limits</li>
            <li><i class="ri-check-line"></i>Exclusive rewards programme</li>
            <li><i class="ri-check-line"></i>Free international wire transfers</li>
            <li><i class="ri-check-line"></i>Complimentary financial planning</li>
          </ul>
        </div>
        <div class="ip-prod-card__foot"><a href="{{ route('register') }}" class="ip-prod-card__btn ip-prod-card__btn--purple">Go Premium &rarr;</a></div>
      </div>
    </div>
  </div>
</section>

{{-- ── FEATURES GRID ── --}}
<section class="ip-section ip-section--alt">
  <div class="l-contain">
    <div class="ip-center">
      <span class="ip-label">Why Ultraprosavers</span>
      <h2 class="ip-heading">Everything You Need in One Place</h2>
      <p class="ip-sub">We&rsquo;ve built the features our members asked for — nothing unnecessary, nothing missing.</p>
    </div>
    <div class="ip-feat-grid">
      <div class="ip-feat-card">
        <div class="ip-feat-card__icon ic-blue"><i class="ri-smartphone-line"></i></div>
        <div class="ip-feat-card__title">Mobile Banking</div>
        <div class="ip-feat-card__text">Full account management in your pocket. Available on iOS and Android.</div>
      </div>
      <div class="ip-feat-card">
        <div class="ip-feat-card__icon ic-green"><i class="ri-shield-check-line"></i></div>
        <div class="ip-feat-card__title">Advanced Security</div>
        <div class="ip-feat-card__text">Biometric login, real-time fraud alerts, and instant card lock.</div>
      </div>
      <div class="ip-feat-card">
        <div class="ip-feat-card__icon ic-gold"><i class="ri-exchange-dollar-line"></i></div>
        <div class="ip-feat-card__title">Instant Payments</div>
        <div class="ip-feat-card__text">Send money to anyone instantly — no delays, no hidden fees.</div>
      </div>
      <div class="ip-feat-card">
        <div class="ip-feat-card__icon ic-teal"><i class="ri-pie-chart-2-line"></i></div>
        <div class="ip-feat-card__title">Budgeting Tools</div>
        <div class="ip-feat-card__text">Smart spending insights that automatically categorise your transactions.</div>
      </div>
      <div class="ip-feat-card">
        <div class="ip-feat-card__icon ic-purple"><i class="ri-bill-line"></i></div>
        <div class="ip-feat-card__title">Bill Pay</div>
        <div class="ip-feat-card__text">Schedule and automate bill payments — never miss a due date.</div>
      </div>
      <div class="ip-feat-card">
        <div class="ip-feat-card__icon ic-navy"><i class="ri-map-pin-2-line"></i></div>
        <div class="ip-feat-card__title">ATM Locator</div>
        <div class="ip-feat-card__text">Find fee-free ATMs near you from 30,000+ locations nationwide.</div>
      </div>
    </div>
  </div>
</section>

{{-- ── TESTIMONIALS ── --}}
<section class="ip-section ip-section--dark">
  <div class="l-contain">
    <div class="ip-center">
      <span class="ip-label">Member Stories</span>
      <h2 class="ip-heading">What Our Members Say</h2>
      <p class="ip-sub">Real experiences from real Ultraprosavers members around the world.</p>
    </div>
    <div class="ip-testi-grid">
      <div class="ip-testi-card">
        <div class="ip-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p class="ip-testi-text">Switching to Ultraprosavers was the best financial decision I&rsquo;ve made. The savings rate is outstanding and the app is effortlessly easy to use.</p>
        <div class="ip-testi-name">Michael Johnson</div>
        <div class="ip-testi-role">Personal Account Holder, New York</div>
      </div>
      <div class="ip-testi-card">
        <div class="ip-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p class="ip-testi-text">The customer service is outstanding. They walked me through every feature patiently. This is what banking should feel like.</p>
        <div class="ip-testi-name">Sarah Williams</div>
        <div class="ip-testi-role">Premium Account Holder, London</div>
      </div>
      <div class="ip-testi-card">
        <div class="ip-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p class="ip-testi-text">The budgeting tools genuinely helped me save over $4,000 last year. I can see exactly where my money goes and fix bad habits in real time.</p>
        <div class="ip-testi-name">David Rodriguez</div>
        <div class="ip-testi-role">Savings Account Holder, Miami</div>
      </div>
    </div>
  </div>
</section>

{{-- ── CTA ── --}}
<section class="ip-cta">
  <div class="l-contain">
    <h2>Ready to Open Your Account?</h2>
    <p>It takes less than 5 minutes. No paperwork, no hidden fees, no surprises.</p>
    <div class="ip-cta__btns">
      <a href="{{ route('register') }}" class="ip-btn ip-btn--gold">Open Account Now</a>
      <a href="{{ url('contact') }}" class="ip-btn ip-btn--outline-white">Contact Us</a>
    </div>
  </div>
</section>

</div></main></div></div>
@include('home.footer')