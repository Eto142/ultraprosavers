@include('home.header')
<div class="l-content-wrap u-cf"><div class="l-1-col-master u-cf"><main class="l-content-primary"><div class="body-content js-body-content">

{{-- ── HERO ── --}}
<section class="ip-hero">
  <div class="l-contain">
    <span class="ip-hero__pill"><i class="ri-money-dollar-circle-line"></i> Loans &amp; Lending</span>
    <h1>The Right Loan at <em>the Right Rate</em></h1>
    <p class="ip-hero__lead">Fast approvals, competitive rates, and flexible terms. Whether you&rsquo;re buying a home, a car, or funding a new venture — we&rsquo;ve got a loan built for you.</p>
    <div class="ip-hero__btns">
      <a href="{{ route('register') }}" class="ip-btn ip-btn--gold">Apply Now</a>
      <a href="#loan-calculator" class="ip-btn ip-btn--outline-white">Calculate Repayments</a>
    </div>
    <div class="ip-hero__breadcrumb"><a href="{{ url('/') }}">Home</a><span>/</span>Loans</div>
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
      <div class="ip-stats__item"><span class="ip-stats__num"><em>3.99</em>%</span><span class="ip-stats__label">Rates From (APR)</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num">24<em>hr</em></span><span class="ip-stats__label">Average Approval</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num"><em>$</em>500K</span><span class="ip-stats__label">Maximum Loan Amount</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num">84<em>mo</em></span><span class="ip-stats__label">Flexible Terms</span></div>
      <div class="ip-stats__item"><span class="ip-stats__num"><em>$</em>0</span><span class="ip-stats__label">Early Repayment Fee</span></div>
    </div>
  </div>
</section>

{{-- ── LOAN TYPES ── --}}
<section class="ip-section">
  <div class="l-contain">
    <div class="ip-center">
      <span class="ip-label">Loan Products</span>
      <h2 class="ip-heading">Find the Loan That Fits Your Life</h2>
      <p class="ip-sub">All Ultraprosavers loans come with no hidden fees, no prepayment penalties, and transparent monthly statements.</p>
    </div>
    <div class="ip-prod-grid">
      <div class="ip-prod-card">
        <div class="ip-prod-card__bar ip-prod-card__bar--navy"></div>
        <div class="ip-prod-card__head">
          <div class="ip-prod-card__icon ip-prod-card__icon--navy"><i class="ri-user-heart-line"></i></div>
          <p class="ip-prod-card__name">Personal Loan</p>
          <p class="ip-prod-card__tagline">From <strong>5.99% APR</strong> &bull; Up to $50K</p>
        </div>
        <div class="ip-prod-card__body">
          <ul>
            <li><i class="ri-check-line"></i>Borrow $1,000 – $50,000</li>
            <li><i class="ri-check-line"></i>12 – 60 month terms</li>
            <li><i class="ri-check-line"></i>No origination fee</li>
            <li><i class="ri-check-line"></i>Funds deposited same day</li>
          </ul>
        </div>
        <div class="ip-prod-card__foot"><a href="{{ route('register') }}" class="ip-prod-card__btn ip-prod-card__btn--navy">Apply for Personal Loan &rarr;</a></div>
      </div>
      <div class="ip-prod-card">
        <div class="ip-prod-card__bar ip-prod-card__bar--teal"></div>
        <div class="ip-prod-card__head">
          <div class="ip-prod-card__icon ip-prod-card__icon--teal"><i class="ri-car-line"></i></div>
          <p class="ip-prod-card__name">Auto Loan</p>
          <p class="ip-prod-card__tagline">From <strong>3.99% APR</strong> &bull; Up to $100K</p>
        </div>
        <div class="ip-prod-card__body">
          <ul>
            <li><i class="ri-check-line"></i>New &amp; used vehicles</li>
            <li><i class="ri-check-line"></i>Up to 84 month terms</li>
            <li><i class="ri-check-line"></i>Pre-approval in minutes</li>
            <li><i class="ri-check-line"></i>No prepayment penalty</li>
          </ul>
        </div>
        <div class="ip-prod-card__foot"><a href="{{ route('register') }}" class="ip-prod-card__btn ip-prod-card__btn--teal">Apply for Auto Loan &rarr;</a></div>
      </div>
      <div class="ip-prod-card">
        <div class="ip-prod-card__bar ip-prod-card__bar--gold"></div>
        <div class="ip-prod-card__head">
          <div class="ip-prod-card__icon ip-prod-card__icon--gold"><i class="ri-home-4-line"></i></div>
          <p class="ip-prod-card__name">Mortgage</p>
          <p class="ip-prod-card__tagline">From <strong>4.25% APR</strong> &bull; Up to $500K</p>
        </div>
        <div class="ip-prod-card__body">
          <ul>
            <li><i class="ri-check-line"></i>Fixed &amp; variable rate options</li>
            <li><i class="ri-check-line"></i>10, 15, 20 &amp; 30 year terms</li>
            <li><i class="ri-check-line"></i>Dedicated mortgage specialist</li>
            <li><i class="ri-check-line"></i>Fast pre-approval certificate</li>
          </ul>
        </div>
        <div class="ip-prod-card__foot"><a href="{{ route('register') }}" class="ip-prod-card__btn ip-prod-card__btn--gold">Apply for Mortgage &rarr;</a></div>
      </div>
      <div class="ip-prod-card">
        <div class="ip-prod-card__bar ip-prod-card__bar--green"></div>
        <div class="ip-prod-card__head">
          <div class="ip-prod-card__icon ip-prod-card__icon--green"><i class="ri-home-gear-line"></i></div>
          <p class="ip-prod-card__name">Home Equity Loan</p>
          <p class="ip-prod-card__tagline">From <strong>4.50% APR</strong> &bull; Up to $300K</p>
        </div>
        <div class="ip-prod-card__body">
          <ul>
            <li><i class="ri-check-line"></i>Use your home&rsquo;s equity</li>
            <li><i class="ri-check-line"></i>Fixed monthly payments</li>
            <li><i class="ri-check-line"></i>Tax-deductible interest (consult advisor)</li>
            <li><i class="ri-check-line"></i>No closing cost options available</li>
          </ul>
        </div>
        <div class="ip-prod-card__foot"><a href="{{ route('register') }}" class="ip-prod-card__btn ip-prod-card__btn--navy">Apply for Home Equity &rarr;</a></div>
      </div>
      <div class="ip-prod-card">
        <div class="ip-prod-card__bar ip-prod-card__bar--purple"></div>
        <div class="ip-prod-card__head">
          <div class="ip-prod-card__icon ip-prod-card__icon--purple"><i class="ri-briefcase-4-line"></i></div>
          <p class="ip-prod-card__name">Business Loan</p>
          <p class="ip-prod-card__tagline">From <strong>5.49% APR</strong> &bull; Up to $5M</p>
        </div>
        <div class="ip-prod-card__body">
          <ul>
            <li><i class="ri-check-line"></i>Term loans &amp; revolving credit lines</li>
            <li><i class="ri-check-line"></i>Decision within 48 hours</li>
            <li><i class="ri-check-line"></i>Equipment &amp; working capital</li>
            <li><i class="ri-check-line"></i>Dedicated business advisor</li>
          </ul>
        </div>
        <div class="ip-prod-card__foot"><a href="{{ route('register') }}" class="ip-prod-card__btn ip-prod-card__btn--purple">Apply for Business Loan &rarr;</a></div>
      </div>
      <div class="ip-prod-card">
        <div class="ip-prod-card__bar ip-prod-card__bar--red"></div>
        <div class="ip-prod-card__head">
          <div class="ip-prod-card__icon ip-prod-card__icon--red"><i class="ri-graduation-cap-line"></i></div>
          <p class="ip-prod-card__name">Student Loan</p>
          <p class="ip-prod-card__tagline">From <strong>4.49% APR</strong> &bull; Deferred payments</p>
        </div>
        <div class="ip-prod-card__body">
          <ul>
            <li><i class="ri-check-line"></i>Payments deferred while studying</li>
            <li><i class="ri-check-line"></i>Covers tuition, housing &amp; more</li>
            <li><i class="ri-check-line"></i>Fixed &amp; variable rate options</li>
            <li><i class="ri-check-line"></i>0.25% rate discount for autopay</li>
          </ul>
        </div>
        <div class="ip-prod-card__foot"><a href="{{ route('register') }}" class="ip-prod-card__btn ip-prod-card__btn--navy">Apply for Student Loan &rarr;</a></div>
      </div>
    </div>
  </div>
</section>

{{-- ── LOAN CALCULATOR ── --}}
<section class="ip-section ip-section--alt" id="loan-calculator">
  <div class="l-contain">
    <div class="ip-two-col">
      <div>
        <span class="ip-label">Loan Calculator</span>
        <h2 class="ip-heading">Estimate Your Monthly Repayments</h2>
        <p style="font-size:.88rem;color:#6b7a8d;line-height:1.72;margin-bottom:22px">Adjust the sliders below to see an instant estimate based on indicative rates. Contact us for a personalised quote.</p>
        <div class="ip-calc">
          <div>
            <label>Loan Amount <span class="ip-calc__val" id="calcAmtLabel">$25,000</span></label>
            <input type="range" id="calcAmt" min="1000" max="500000" step="1000" value="25000">
          </div>
          <div>
            <label>Term (Months) <span class="ip-calc__val" id="calcTermLabel">36 months</span></label>
            <input type="range" id="calcTerm" min="6" max="84" step="6" value="36">
          </div>
          <div>
            <label>Interest Rate (APR) <span class="ip-calc__val" id="calcRateLabel">5.99%</span></label>
            <input type="range" id="calcRate" min="399" max="1800" step="1" value="599">
          </div>
          <div class="ip-calc-result">
            <span class="ip-calc-result__num" id="calcResult">$759.97</span>
            <span class="ip-calc-result__lbl">Estimated Monthly Payment</span>
            <p class="ip-calc-result__detail" id="calcDetail">Total repayment: $27,358.92 &nbsp;&bull;&nbsp; Total interest: $2,358.92</p>
          </div>
        </div>
        <p style="font-size:.72rem;color:#9aa5b4;margin-top:12px;line-height:1.5">* Estimate only. Actual rates depend on credit profile. Representative APR applies.</p>
      </div>
      <div>
        <span class="ip-label">How It Works</span>
        <h2 class="ip-heading">Approval in 3 Simple Steps</h2>
        <p style="font-size:.88rem;color:#6b7a8d;line-height:1.72;margin-bottom:28px">Our streamlined application process gets you funded faster than any traditional bank.</p>
        <div class="ip-steps" style="grid-template-columns:1fr;position:static">
          <div class="ip-step" style="text-align:left;display:flex;align-items:flex-start;gap:16px;padding:0 0 22px">
            <div class="ip-step__num" style="flex-shrink:0;margin:0">1</div>
            <div><div class="ip-step__title">Apply Online</div><div class="ip-step__text">Complete our 3-minute application. No paperwork, no branch visit required.</div></div>
          </div>
          <div class="ip-step" style="text-align:left;display:flex;align-items:flex-start;gap:16px;padding:0 0 22px">
            <div class="ip-step__num" style="flex-shrink:0;margin:0">2</div>
            <div><div class="ip-step__title">Instant Decision</div><div class="ip-step__text">Receive a decision within 24 hours with your personalised rate and terms.</div></div>
          </div>
          <div class="ip-step" style="text-align:left;display:flex;align-items:flex-start;gap:16px;padding:0 0 0">
            <div class="ip-step__num" style="flex-shrink:0;margin:0">3</div>
            <div><div class="ip-step__title">Funds Released</div><div class="ip-step__text">Sign your agreement and funds are deposited directly to your account.</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ── FAQ ── --}}
<section class="ip-section">
  <div class="l-contain">
    <div class="ip-center">
      <span class="ip-label">Common Questions</span>
      <h2 class="ip-heading">Loan FAQs</h2>
      <p class="ip-sub">Everything you need to know before you apply.</p>
    </div>
    <div class="ip-faq">
      <div class="ip-faq-item open">
        <div class="ip-faq-q">What credit score do I need to qualify? <i class="ri-arrow-down-s-line"></i></div>
        <div class="ip-faq-a">Most personal and auto loans require a minimum credit score of 620. Mortgage applicants typically need 680 or above. We always perform a soft check first, which does not affect your credit score.</div>
      </div>
      <div class="ip-faq-item">
        <div class="ip-faq-q">How quickly will I receive my funds? <i class="ri-arrow-down-s-line"></i></div>
        <div class="ip-faq-a">Personal loans are typically funded the same business day after approval. Auto and home loans may take 2&ndash;5 business days depending on the complexity of the transaction and any required documentation.</div>
      </div>
      <div class="ip-faq-item">
        <div class="ip-faq-q">Are there any prepayment penalties? <i class="ri-arrow-down-s-line"></i></div>
        <div class="ip-faq-a">Absolutely not. You can repay your loan early — in full or in part — at any time, with zero penalties. We believe in transparency and never charge fees for doing the right thing.</div>
      </div>
      <div class="ip-faq-item">
        <div class="ip-faq-q">Can I apply with a co-borrower? <i class="ri-arrow-down-s-line"></i></div>
        <div class="ip-faq-a">Yes. Adding a co-borrower with a strong credit profile can help you qualify for larger amounts and better rates. Both applicants will be equally responsible for repayment.</div>
      </div>
    </div>
  </div>
</section>

<script>
(function(){
  var amtEl=document.getElementById('calcAmt'),termEl=document.getElementById('calcTerm'),rateEl=document.getElementById('calcRate');
  var amtLbl=document.getElementById('calcAmtLabel'),termLbl=document.getElementById('calcTermLabel'),rateLbl=document.getElementById('calcRateLabel');
  var resultEl=document.getElementById('calcResult'),detailEl=document.getElementById('calcDetail');
  function fmt(n){return n.toLocaleString('en-US',{style:'currency',currency:'USD',minimumFractionDigits:2});}
  function calc(){
    var P=parseInt(amtEl.value),n=parseInt(termEl.value),r=parseInt(rateEl.value)/10000/12;
    amtLbl.textContent='$'+parseInt(amtEl.value).toLocaleString();
    termLbl.textContent=n+' months';
    rateLbl.textContent=(parseInt(rateEl.value)/100).toFixed(2)+'%';
    var monthly=r===0?P/n:P*r*Math.pow(1+r,n)/(Math.pow(1+r,n)-1);
    var total=monthly*n;
    resultEl.textContent=fmt(monthly);
    detailEl.textContent='Total repayment: '+fmt(total)+' \u2022 Total interest: '+fmt(total-P);
  }
  [amtEl,termEl,rateEl].forEach(function(el){el.addEventListener('input',calc);});
  document.querySelectorAll('.ip-faq-q').forEach(function(q){
    q.addEventListener('click',function(){
      var item=this.closest('.ip-faq-item');
      item.classList.toggle('open');
    });
  });
  calc();
})();
</script>

{{-- ── CTA ── --}}
<section class="ip-cta">
  <div class="l-contain">
    <h2>Ready to Apply for Your Loan?</h2>
    <p>Get a personalised rate in minutes — no commitment, no impact on your credit score.</p>
    <div class="ip-cta__btns">
      <a href="{{ route('register') }}" class="ip-btn ip-btn--gold">Apply Now</a>
      <a href="{{ url('contact') }}" class="ip-btn ip-btn--outline-white">Speak to a Specialist</a>
    </div>
  </div>
</section>

</div></main></div></div>
@include('home.footer')