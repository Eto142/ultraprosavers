<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Open Account | Ultraprosavers</title>
<meta name="description" content="Open a new account with Ultraprosavers. Quick, secure registration.">
<link rel="shortcut icon" href="uploads/1752447676_184f2e9f52ac314abfda.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="templates/bank-pro/css/main0338.css">
<link rel="stylesheet" href="{{ asset('css/modern-homepage.css') }}">
<link rel="stylesheet" href="{{ asset('css/inner-pages.css') }}">
<style>
html, body { min-height: 100vh; background: #f5f6f8; margin: 0; padding: 30px 16px; display: flex; align-items: flex-start; justify-content: center; }
.auth-wrap { width: 100%; max-width: 520px; }
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

    @if (session('error'))
    <div style="background:#f8d7da;color:#721c24;padding:12px 16px;border-radius:6px;margin-bottom:14px;font-size:.9rem;">{{ session('error') }}</div>
    @endif
    @if (session('status'))
    <div style="background:#d4edda;color:#155724;padding:12px 16px;border-radius:6px;margin-bottom:14px;font-size:.9rem;">{{ session('status') }}</div>
    @endif

    <div class="login-form" style="overflow-y:auto;">
        <h3>
            <img src="templates/bank-pro/images/assets/ico-lock.svg" width="24" height="24" alt="">
            Open Account
        </h3>
        <form action="{{ route('register.submit') }}" method="POST">
            @csrf
            <div class="login-form__field js-form-field">
                <label>First Name *</label>
                <input name="name" type="text" class="input-text" placeholder="First name" required value="{{ old('name') }}">
            </div>
            <div class="login-form__field js-form-field">
                <label>Last Name *</label>
                <input name="last_name" type="text" class="input-text" placeholder="Last name" required value="{{ old('last_name') }}">
            </div>
            <div class="login-form__field js-form-field">
                <label>Email Address *</label>
                <input name="email" type="email" class="input-text" placeholder="name@example.com" required value="{{ old('email') }}">
            </div>
            <div class="login-form__field js-form-field">
                <label>Phone Number *</label>
                <input name="phone" type="tel" class="input-text" placeholder="Phone number" required value="{{ old('phone') }}">
            </div>
            <div class="login-form__field js-form-field">
                <label>Address *</label>
                <input name="address" type="text" class="input-text" placeholder="Your address" required value="{{ old('address') }}">
            </div>
            <div class="login-form__field js-form-field">
                <label>Country *</label>
                <select name="country" class="input-text" required style="background:#fff;color:#333;">
                    <option value="" disabled selected>Select country</option>
                    <option value="Afganistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote DIvoire">Cote D'Ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Greece">Greece</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Korea North">Korea North</option>
                    <option value="Korea Sout">Korea South</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Laos">Laos</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libya">Libya</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macau">Macau</option>
                    <option value="Macedonia">Macedonia</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Moldova">Moldova</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palestine">Palestine</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Phillipines">Philippines</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Romania">Romania</option>
                    <option value="Russia">Russia</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syria">Syria</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Togo">Togo</option>
                    <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Erimates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States of America">United States of America</option>
                    <option value="Uraguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                </select>
            </div>
            <div class="login-form__field js-form-field">
                <label>Account Type *</label>
                <select name="account_type" class="input-text" required style="background:#fff;color:#333;">
                    <option value="" disabled selected>Select type</option>
                    <option value="Savings">Savings</option>
                    <option value="Checking">Checking</option>
                </select>
            </div>
            <div class="login-form__field js-form-field">
                <label>Currency *</label>
                <select name="currency" class="input-text" required style="background:#fff;color:#333;">
                    <option value="" disabled selected>Select currency</option>
                    <option value="؋">Afghanistan (؋)</option>
                    <option value="Lek">Albania (Lek)</option>
                    <option value="د.ج">Algeria (د.ج)</option>
                    <option value="$">American Samoa ($)</option>
                    <option value="€">Andorra (€)</option>
                    <option value="Kz">Angola (Kz)</option>
                    <option value="A$">Australia (A$)</option>
                    <option value="€">Austria (€)</option>
                    <option value="₼">Azerbaijan (₼)</option>
                    <option value="B$">Bahamas (B$)</option>
                    <option value="د.ب">Bahrain (د.ب)</option>
                    <option value="৳">Bangladesh (৳)</option>
                    <option value="Bds$">Barbados (Bds$)</option>
                    <option value="Br">Belarus (Br)</option>
                    <option value="€">Belgium (€)</option>
                    <option value="BZ$">Belize (BZ$)</option>
                    <option value="CFA">Benin (CFA)</option>
                    <option value="Nu">Bhutan (Nu)</option>
                    <option value="Bs">Bolivia (Bs)</option>
                    <option value="KM">Bosnia and Herzegovina (KM)</option>
                    <option value="P">Botswana (P)</option>
                    <option value="R$">Brazil (R$)</option>
                    <option value="лв.">Bulgaria (лв.)</option>
                    <option value="FBu">Burundi (FBu)</option>
                    <option value="៛">Cambodia (៛)</option>
                    <option value="FCFA">Cameroon (FCFA)</option>
                    <option value="C$">Canada (C$)</option>
                    <option value="CI$">Cayman Islands (CI$)</option>
                    <option value="CL$">Chile (CL$)</option>
                    <option value="¥">China (¥)</option>
                    <option value="COL$">Colombia (COL$)</option>
                    <option value="FC">Congo (FC)</option>
                    <option value="₡">Costa Rica (₡)</option>
                    <option value="kn">Croatia (kn)</option>
                    <option value="€">Cyprus (€)</option>
                    <option value="Kč">Czech Republic (Kč)</option>
                    <option value="kr">Denmark (kr)</option>
                    <option value="RD$">Dominican Republic (RD$)</option>
                    <option value="E£">Egypt (E£)</option>
                    <option value="€">Estonia (€)</option>
                    <option value="Br">Ethiopia (Br)</option>
                    <option value="FJ$">Fiji (FJ$)</option>
                    <option value="€">Finland (€)</option>
                    <option value="€">France (€)</option>
                    <option value="€">Germany (€)</option>
                    <option value="GH₵">Ghana (GH₵)</option>
                    <option value="€">Greece (€)</option>
                    <option value="Q">Guatemala (Q)</option>
                    <option value="G$">Guyana (G$)</option>
                    <option value="L">Honduras (L)</option>
                    <option value="HK$">Hong Kong (HK$)</option>
                    <option value="Ft">Hungary (Ft)</option>
                    <option value="kr">Iceland (kr)</option>
                    <option value="₹">India (₹)</option>
                    <option value="Rp">Indonesia (Rp)</option>
                    <option value="د.ع">Iraq (د.ع)</option>
                    <option value="€">Ireland (€)</option>
                    <option value="₪">Israel (₪)</option>
                    <option value="€">Italy (€)</option>
                    <option value="J$">Jamaica (J$)</option>
                    <option value="¥">Japan (¥)</option>
                    <option value="د.ا">Jordan (د.ا)</option>
                    <option value="₸">Kazakhstan (₸)</option>
                    <option value="KSh">Kenya (KSh)</option>
                    <option value="د.ك">Kuwait (د.ك)</option>
                    <option value="€">Latvia (€)</option>
                    <option value="ل.ل">Lebanon (ل.ل)</option>
                    <option value="L$">Liberia (L$)</option>
                    <option value="€">Lithuania (€)</option>
                    <option value="€">Luxembourg (€)</option>
                    <option value="RM">Malaysia (RM)</option>
                    <option value="Rf">Maldives (Rf)</option>
                    <option value="€">Malta (€)</option>
                    <option value="MX$">Mexico (MX$)</option>
                    <option value="₮">Mongolia (₮)</option>
                    <option value="MAD">Morocco (MAD)</option>
                    <option value="MT">Mozambique (MT)</option>
                    <option value="K">Myanmar (K)</option>
                    <option value="N$">Namibia (N$)</option>
                    <option value="Rs">Nepal (Rs)</option>
                    <option value="€">Netherlands (€)</option>
                    <option value="NZ$">New Zealand (NZ$)</option>
                    <option value="₦">Nigeria (₦)</option>
                    <option value="kr">Norway (kr)</option>
                    <option value="ر.ع.">Oman (ر.ع.)</option>
                    <option value="₨">Pakistan (₨)</option>
                    <option value="B/.">Panama (B/.)</option>
                    <option value="₱">Philippines (₱)</option>
                    <option value="zł">Poland (zł)</option>
                    <option value="€">Portugal (€)</option>
                    <option value="QR">Qatar (QR)</option>
                    <option value="lei">Romania (lei)</option>
                    <option value="₽">Russian Federation (₽)</option>
                    <option value="FRw">Rwanda (FRw)</option>
                    <option value="﷼">Saudi Arabia (﷼)</option>
                    <option value="S$">Singapore (S$)</option>
                    <option value="R">South Africa (R)</option>
                    <option value="€">Spain (€)</option>
                    <option value="Rs">Sri Lanka (Rs)</option>
                    <option value="kr">Sweden (kr)</option>
                    <option value="CHF">Switzerland (CHF)</option>
                    <option value="NT$">Taiwan (NT$)</option>
                    <option value="฿">Thailand (฿)</option>
                    <option value="TT$">Trinidad and Tobago (TT$)</option>
                    <option value="₺">Turkey (₺)</option>
                    <option value="USh">Uganda (USh)</option>
                    <option value="₴">Ukraine (₴)</option>
                    <option value="د.إ">United Arab Emirates (د.إ)</option>
                    <option value="£">United Kingdom (£)</option>
                    <option value="$">United States ($)</option>
                    <option value="$U">Uruguay ($U)</option>
                    <option value="Bs.">Venezuela (Bs.)</option>
                    <option value="₫">Vietnam (₫)</option>
                    <option value="Z$">Zimbabwe (Z$)</option>
                </select>
            </div>
            <div class="login-form__field js-form-field">
                <label>Transaction PIN (4 digits) *</label>
                <input name="account_pin" type="password" class="input-text" placeholder="4-digit PIN" maxlength="4" pattern="[0-9]{4}" inputmode="numeric" required>
            </div>
            <div class="login-form__field js-form-field">
                <label>Password *</label>
                <input name="password" type="password" class="input-text" placeholder="Create a strong password" required>
            </div>
            <div class="login-form__field js-form-field">
                <label>Confirm Password *</label>
                <input name="password_confirmation" type="password" class="input-text" placeholder="Repeat your password" required>
            </div>
            <div class="login-form__submit">
                <button class="button--primary js-login-submit" type="submit">Create Account</button>
            </div>
        </form>
    </div>

    <div class="auth-alt-link">
        Already have an account? <a href="{{ route('login') }}">Log In</a>
    </div>

</div>
</body>
</html>
