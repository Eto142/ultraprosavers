@include('home.header')
<div class="l-content-wrap u-cf"><div class="l-1-col-master u-cf"><main class="l-content-primary"><div class="body-content js-body-content">

{{-- ── HERO ── --}}
<section class="ip-hero ip-hero--contact">
  <div class="l-contain">
    <span class="ip-hero__pill"><i class="ri-customer-service-2-line"></i> Contact Us</span>
    <h1>We&rsquo;re Always <em>Here for You</em></h1>
    <p class="ip-hero__lead">A question about your account, a new product enquiry, or just some advice — our team is ready to help. Real people, real answers.</p>
    <div class="ip-hero__breadcrumb"><a href="{{ url('/') }}">Home</a><span>/</span>Contact</div>
  </div>
  <div class="ip-hero__wave">
    <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,40 C360,80 1080,0 1440,40 L1440,60 L0,60 Z" fill="#fff"/>
    </svg>
  </div>
</section>

{{-- ── INFO CARDS ── --}}
<section class="ip-section">
  <div class="l-contain">
    <div class="ip-info-cards">
      <div class="ip-info-card">
        <i class="ri-map-pin-2-fill"></i>
        <div class="ip-info-card__title">Our Office</div>
        <div class="ip-info-card__text">The Harbour Center<br>42 North Church Street<br>George Town, Cayman Islands</div>
      </div>
      <div class="ip-info-card">
        <i class="ri-mail-send-fill"></i>
        <div class="ip-info-card__title">Email Us</div>
        <div class="ip-info-card__text">
          General: <a href="mailto:support@ultraprosavers.online">support@ultraprosavers.online</a><br>
          <br>We respond within one business day.
        </div>
      </div>
      <div class="ip-info-card">
        <i class="ri-time-fill"></i>
        <div class="ip-info-card__title">Working Hours</div>
        <div class="ip-info-card__text">Mon – Fri: 8:00 AM – 6:00 PM GMT<br>Saturday: 9:00 AM – 1:00 PM GMT<br>24/7 Online Chat Available</div>
      </div>
    </div>
  </div>
</section>

{{-- ── FORM + MAP ── --}}
<section class="ip-section ip-section--alt" style="padding-top:0">
  <div class="l-contain">
    <div class="ip-two-col" style="align-items:start;gap:44px">

      {{-- Left: info + map --}}
      <div>
        <span class="ip-label">Get in Touch</span>
        <h2 class="ip-heading">We&rsquo;d Love to Hear From You</h2>
        <p style="font-size:.88rem;color:#6b7a8d;line-height:1.72;margin-bottom:26px">Whether you have a question about our products, need help with your account, or want to explore a business partnership — our team is ready to help.</p>

        <div class="ip-feat-item">
          <div class="ip-feat-item__icon ic-blue"><i class="ri-question-answer-line"></i></div>
          <div><h4>General Enquiries</h4><p>Questions about our products, rates, or account opening process.</p></div>
        </div>
        <div class="ip-feat-item">
          <div class="ip-feat-item__icon ic-gold"><i class="ri-tools-line"></i></div>
          <div><h4>Technical Support</h4><p>Help with your online banking, app issues, or account access problems.</p></div>
        </div>
        <div class="ip-feat-item">
          <div class="ip-feat-item__icon ic-green"><i class="ri-building-2-line"></i></div>
          <div><h4>Business Partnerships</h4><p>Interested in a commercial banking relationship or institutional services?</p></div>
        </div>

        <div class="ip-map">
          <iframe src="https://www.google.com/maps?q=42+North+Church+Street,+George+Town,+Cayman+Islands&output=embed" allowfullscreen loading="lazy"></iframe>
        </div>
      </div>

      {{-- Right: form --}}
      <div class="ip-form-box">
        <h3 style="font-size:1.02rem;font-weight:800;color:#001a3a;margin-bottom:5px">Send Us a Message</h3>
        <p style="font-size:.78rem;color:#9aa5b4;margin-bottom:22px">We&rsquo;ll get back to you within one business day.</p>

        @if(session('status'))
          <div style="background:#d1fae5;border:1px solid #6ee7b7;color:#065f46;padding:10px 14px;border-radius:8px;font-size:.82rem;margin-bottom:16px">{{ session('status') }}</div>
        @endif
        @if(session('error'))
          <div style="background:#fee2e2;border:1px solid #fca5a5;color:#991b1b;padding:10px 14px;border-radius:8px;font-size:.82rem;margin-bottom:16px">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ url('contact') }}">
          @csrf
          <div class="ip-form-row">
            <div class="ip-form-group">
              <label>First Name</label>
              <input type="text" name="first_name" placeholder="John" required>
            </div>
            <div class="ip-form-group">
              <label>Last Name</label>
              <input type="text" name="last_name" placeholder="Smith" required>
            </div>
          </div>
          <div class="ip-form-group">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="you@example.com" required>
          </div>
          <div class="ip-form-group">
            <label>Enquiry Type</label>
            <select name="type">
              <option value="">Select a topic...</option>
              <option value="general">General Enquiry</option>
              <option value="account">Account Support</option>
              <option value="technical">Technical Support</option>
              <option value="business">Business &amp; Partnerships</option>
              <option value="complaint">Complaint</option>
            </select>
          </div>
          <div class="ip-form-group">
            <label>Subject</label>
            <input type="text" name="subject" placeholder="How can we help?" required>
          </div>
          <div class="ip-form-group">
            <label>Message</label>
            <textarea name="message" rows="5" placeholder="Tell us more about your enquiry..." required></textarea>
          </div>
          <button type="submit" class="ip-submit-btn">Send Message &nbsp;&rarr;</button>
        </form>
      </div>

    </div>
  </div>
</section>

{{-- ── CTA ── --}}
<section class="ip-cta">
  <div class="l-contain">
    <h2>Not Sure Where to Start?</h2>
    <p>Open an account in minutes or browse our products to find what fits your needs.</p>
    <div class="ip-cta__btns">
      <a href="{{ route('register') }}" class="ip-btn ip-btn--gold">Open an Account</a>
      <a href="{{ url('personal') }}" class="ip-btn ip-btn--outline-white">Explore Products</a>
    </div>
  </div>
</section>

</div></main></div></div>
@include('home.footer')