@include('home.header')
<div class="l-content-wrap u-cf"><div class="l-1-col-master u-cf"><main class="l-content-primary"><div class="body-content js-body-content">

{{-- ── HERO ── --}}
<section class="ip-hero">
  <div class="l-contain">
    <span class="ip-hero__pill"><i class="ri-building-2-line"></i> Business Banking</span>
    <h1>Grow Your Business with <em>Confidence</em></h1>
    <p class="ip-hero__lead">Ultraprosavers gives growing businesses the financial infrastructure they need — powerful accounts, flexible lending, and dedicated support at every stage.</p>
    <div class="ip-hero__btns">
      <a href="{{ route('register') }}" class="ip-btn ip-btn--gold">Open a Business Account</a>
      <a href="{{ url('contact') }}" class="ip-btn ip-btn--outline-white">Speak to an Advisor</a>
    </div>
    <div class="ip-hero__breadcrumb"><a href="{{ url('/') }}">Home</a><span>/</span>Business</div>
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
      <div class="ip-stats__item"><span class="ip-stats__num">50K<em>+</em></span><span class="ip-stats__label">Businesses Served</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num"><em>$</em>2.4B</span><span class="ip-stats__label">Business Deposits</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num">Same<em>-</em>Day</span><span class="ip-stats__label">ACH Transfers</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num">99.9<em>%</em></span><span class="ip-stats__label">Platform Uptime</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num">24<em>/</em>7</span><span class="ip-stats__label">Dedicated Support</span></div>
    </div>
  </div>
</section>

{{-- ── SERVICES GRID ── --}}
<section class="ip-section">
  <div class="l-contain">
    <div class="ip-center">
      <span class="ip-label">Our Services</span>
      <h2 class="ip-heading">Complete Banking for Every Business</h2>
      <p class="ip-sub">Whether you&rsquo;re a sole trader or scaling enterprise, we have the right financial tools for you.</p>
    </div>
    <div class="ip-prod-grid">
      <div class="ip-prod-card">
        <div class="ip-prod-card__bar ip-prod-card__bar--navy"></div>
        <div class="ip-prod-card__head">
          <div class="ip-prod-card__icon ip-prod-card__icon--navy"><i class="ri-bank-line"></i></div>
          <p class="ip-prod-card__name">Business Checking</p>
          <p class="ip-prod-card__tagline">High-volume transactional account</p>
        </div>
        <div class="ip-prod-card__body">
          <ul>
            <li><i class="ri-check-line"></i>Unlimited monthly transactions</li>
            <li><i class="ri-check-line"></i>Same-day ACH processing</li>
            <li><i class="ri-check-line"></i>Multi-user access controls</li>
            <li><i class="ri-check-line"></i>API &amp; accounting integrations</li>
          </ul>
        </div>
        <div class="ip-prod-card__foot"><a href="{{ route('register') }}" class="ip-prod-card__btn ip-prod-card__btn--navy">Open Business Checking &rarr;</a></div>
      </div>
      <div class="ip-prod-card">
        <div class="ip-prod-card__bar ip-prod-card__bar--gold"></div>
        <div class="ip-prod-card__head">
          <div class="ip-prod-card__icon ip-prod-card__icon--gold"><i class="ri-safe-line"></i></div>
          <p class="ip-prod-card__name">Business Savings</p>
          <p class="ip-prod-card__tagline">Earn <strong>3.80% APY</strong> on reserves</p>
        </div>
        <div class="ip-prod-card__body">
          <ul>
            <li><i class="ri-check-line"></i>3.80% APY — no lock-in period</li>
            <li><i class="ri-check-line"></i>Tiered interest for higher balances</li>
            <li><i class="ri-check-line"></i>Automatic sweeping from checking</li>
            <li><i class="ri-check-line"></i>FDIC insured up to $250,000</li>
          </ul>
        </div>
        <div class="ip-prod-card__foot"><a href="{{ route('register') }}" class="ip-prod-card__btn ip-prod-card__btn--gold">Open Business Savings &rarr;</a></div>
      </div>
      <div class="ip-prod-card">
        <div class="ip-prod-card__bar ip-prod-card__bar--teal"></div>
        <div class="ip-prod-card__head">
          <div class="ip-prod-card__icon ip-prod-card__icon--teal"><i class="ri-funds-box-line"></i></div>
          <p class="ip-prod-card__name">Business Loans</p>
          <p class="ip-prod-card__tagline">From <strong>5.49% APR</strong></p>
        </div>
        <div class="ip-prod-card__body">
          <ul>
            <li><i class="ri-check-line"></i>Up to $5M facility</li>
            <li><i class="ri-check-line"></i>Decisions within 48 hours</li>
            <li><i class="ri-check-line"></i>Revolving &amp; term options</li>
            <li><i class="ri-check-line"></i>No early repayment charges</li>
          </ul>
        </div>
        <div class="ip-prod-card__foot"><a href="{{ route('register') }}" class="ip-prod-card__btn ip-prod-card__btn--teal">Apply for Funding &rarr;</a></div>
      </div>
      <div class="ip-prod-card">
        <div class="ip-prod-card__bar ip-prod-card__bar--purple"></div>
        <div class="ip-prod-card__head">
          <div class="ip-prod-card__icon ip-prod-card__icon--purple"><i class="ri-store-2-line"></i></div>
          <p class="ip-prod-card__name">Merchant Services</p>
          <p class="ip-prod-card__tagline">Accept payments everywhere</p>
        </div>
        <div class="ip-prod-card__body">
          <ul>
            <li><i class="ri-check-line"></i>Online, in-store &amp; mobile POS</li>
            <li><i class="ri-check-line"></i>Next-day settlement</li>
            <li><i class="ri-check-line"></i>150+ payment methods accepted</li>
            <li><i class="ri-check-line"></i>Chargeback management tools</li>
          </ul>
        </div>
        <div class="ip-prod-card__foot"><a href="{{ route('register') }}" class="ip-prod-card__btn ip-prod-card__btn--purple">Get Started &rarr;</a></div>
      </div>
      <div class="ip-prod-card">
        <div class="ip-prod-card__bar ip-prod-card__bar--green"></div>
        <div class="ip-prod-card__head">
          <div class="ip-prod-card__icon ip-prod-card__icon--green"><i class="ri-team-line"></i></div>
          <p class="ip-prod-card__name">Payroll Solutions</p>
          <p class="ip-prod-card__tagline">Pay your team on time, every time</p>
        </div>
        <div class="ip-prod-card__body">
          <ul>
            <li><i class="ri-check-line"></i>Automated payroll runs</li>
            <li><i class="ri-check-line"></i>Supports multi-currency staff</li>
            <li><i class="ri-check-line"></i>Tax &amp; compliance reporting</li>
            <li><i class="ri-check-line"></i>Employee self-service portal</li>
          </ul>
        </div>
        <div class="ip-prod-card__foot"><a href="{{ route('register') }}" class="ip-prod-card__btn ip-prod-card__btn--navy">Set Up Payroll &rarr;</a></div>
      </div>
      <div class="ip-prod-card">
        <div class="ip-prod-card__bar ip-prod-card__bar--red"></div>
        <div class="ip-prod-card__head">
          <div class="ip-prod-card__icon ip-prod-card__icon--red"><i class="ri-exchange-cny-line"></i></div>
          <p class="ip-prod-card__name">Cash Management</p>
          <p class="ip-prod-card__tagline">Optimise your working capital</p>
        </div>
        <div class="ip-prod-card__body">
          <ul>
            <li><i class="ri-check-line"></i>Sweep accounts &amp; liquidity tools</li>
            <li><i class="ri-check-line"></i>Real-time cash position dashboard</li>
            <li><i class="ri-check-line"></i>Treasury management support</li>
            <li><i class="ri-check-line"></i>Dedicated relationship banker</li>
          </ul>
        </div>
        <div class="ip-prod-card__foot"><a href="{{ route('register') }}" class="ip-prod-card__btn ip-prod-card__btn--navy">Enquire Now &rarr;</a></div>
      </div>
    </div>
  </div>
</section>

{{-- ── DARK STATS ROW ── --}}
<section class="ip-dark-stats">
  <div class="l-contain">
    <div class="ip-dark-stats__inner">
      <div><span class="ip-dark-stats__num">$2.4B</span><span class="ip-dark-stats__label">Business Deposits Held</span></div>
      <div><span class="ip-dark-stats__num">50K+</span><span class="ip-dark-stats__label">Businesses Onboarded</span></div>
      <div><span class="ip-dark-stats__num">48hr</span><span class="ip-dark-stats__label">Average Loan Decision</span></div>
      <div><span class="ip-dark-stats__num">99.9%</span><span class="ip-dark-stats__label">Platform Uptime SLA</span></div>
    </div>
  </div>
</section>

{{-- ── WHY ULTRAPROSAVERS TWO-COL ── --}}
<section class="ip-section ip-section--alt">
  <div class="l-contain">
    <div class="ip-two-col ip-two-col--wide">
      <div>
        <span class="ip-label">Why Choose Us</span>
        <h2 class="ip-heading">Your Business Deserves a Better Bank</h2>
        <p style="font-size:.9rem;color:#6b7a8d;line-height:1.72;margin-bottom:26px">We don&rsquo;t treat businesses like numbers. Every Ultraprosavers business client gets a dedicated relationship banker, real-time reporting, and the technology to scale without limits.</p>
        <div class="ip-feat-item">
          <div class="ip-feat-item__icon ic-blue"><i class="ri-customer-service-2-line"></i></div>
          <div><h4>Dedicated Relationship Banker</h4><p>A named point of contact who understands your business and is always available when you need them.</p></div>
        </div>
        <div class="ip-feat-item">
          <div class="ip-feat-item__icon ic-green"><i class="ri-shield-check-line"></i></div>
          <div><h4>Bank-Grade Security</h4><p>256-bit encryption, multi-factor authentication, and real-time fraud monitoring on every transaction.</p></div>
        </div>
        <div class="ip-feat-item">
          <div class="ip-feat-item__icon ic-gold"><i class="ri-global-line"></i></div>
          <div><h4>Global Reach</h4><p>Send and receive international payments in 80+ currencies at competitive exchange rates.</p></div>
        </div>
        <div class="ip-feat-item">
          <div class="ip-feat-item__icon ic-purple"><i class="ri-bar-chart-2-line"></i></div>
          <div><h4>Real-Time Reporting</h4><p>Live cash flow dashboards and automated reports you can share directly with your accountant.</p></div>
        </div>
      </div>
      <div class="ip-visual-box">
        <div class="ip-visual-box__stat">
          <span class="ip-visual-box__num">$5M</span>
          <span class="ip-visual-box__label">Max Business Loan Facility</span>
        </div>
        <hr>
        <div class="ip-visual-box__stat">
          <span class="ip-visual-box__num">3.80%</span>
          <span class="ip-visual-box__label">APY on Business Savings</span>
        </div>
        <hr>
        <div class="ip-visual-box__stat">
          <span class="ip-visual-box__num">80+</span>
          <span class="ip-visual-box__label">Currencies Supported</span>
        </div>
        <hr>
        <div style="margin-top:8px">
          <p style="font-size:.8rem;color:rgba(255,255,255,.6);line-height:1.6;margin:0">Ultraprosavers has supported over 50,000 businesses — from solo founders to multi-national enterprises — since 2010.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ── TESTIMONIALS ── --}}
<section class="ip-section ip-section--dark">
  <div class="l-contain">
    <div class="ip-center">
      <span class="ip-label">Client Stories</span>
      <h2 class="ip-heading">Trusted by Thousands of Businesses</h2>
      <p class="ip-sub">Hear directly from the founders and finance teams who bank with us.</p>
    </div>
    <div class="ip-testi-grid">
      <div class="ip-testi-card">
        <div class="ip-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p class="ip-testi-text">Ultraprosavers approved our working capital loan in 36 hours. The process was seamless and the rate beat every other offer we received. Our dedicated banker has been invaluable.</p>
        <div class="ip-testi-name">James Osei</div>
        <div class="ip-testi-role">CEO, Osei Trading Ltd</div>
      </div>
      <div class="ip-testi-card">
        <div class="ip-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p class="ip-testi-text">The merchant services integration took less than a day and our settlement is always next-day. Switching from our old provider saved us nearly 40% in processing fees.</p>
        <div class="ip-testi-name">Maria Santos</div>
        <div class="ip-testi-role">CFO, Solare Retail Group</div>
      </div>
      <div class="ip-testi-card">
        <div class="ip-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p class="ip-testi-text">The real-time cash flow dashboard transformed how we manage our finances. I can see exactly where we stand at any moment and act confidently on the numbers.</p>
        <div class="ip-testi-name">Tom Nguyen</div>
        <div class="ip-testi-role">Finance Director, NovaTech Solutions</div>
      </div>
    </div>
  </div>
</section>

{{-- ── CTA ── --}}
<section class="ip-cta">
  <div class="l-contain">
    <h2>Ready to Bank Smarter for Your Business?</h2>
    <p>Open your business account in minutes. No branch visit, no paperwork.</p>
    <div class="ip-cta__btns">
      <a href="{{ route('register') }}" class="ip-btn ip-btn--gold">Open Business Account</a>
      <a href="{{ url('contact') }}" class="ip-btn ip-btn--outline-white">Speak to an Advisor</a>
    </div>
  </div>
</section>

</div></main></div></div>
@include('home.footer')