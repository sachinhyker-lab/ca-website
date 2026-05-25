<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = 'Taxation Services | ' . SITE_NAME;
$metaDescription = 'Expert Taxation Services in Dehradun – Income Tax filing, GST registration & returns, TDS compliance, Tax Planning, NRI Taxation. Certified CA team.';
$bootstrapCssHref = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css';
$bootstrapIconsHref = 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.min.css';
$googleFontsHref = 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800;900&family=Inter:wght@300;400;500;600;700;800&display=swap';
$extraHead = <<<'HTML'
<style>
    /* ---------- Same core variables and resets as services.php ---------- */
    body>div,body>main,body>section,body>article,#content,#main,#main-content,#page-content,#page-wrapper,#wrapper,.page-content,.main-content,.content-area,.content-wrap,.content-wrapper,.entry-content,.post-content,.site-content,.container-main,.inner-content{padding-top:0!important;margin-top:0!important;}
    :root{
      --black:#1E293B; --dark:#1E293B; --charcoal:#134E3A; --gray:#334155;
      --midgray:#64748B; --lightgray:#E2E8F0; --border:#E2E8F0; --borderlite:#E2E8F0;
      --white:#FFFFFF; --offwhite:#F8FAF7; --cream:#F1F5F9; --gold:#D4A017; --gold-dark:#B8860B;
    }
    *,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
    html{scroll-behavior:smooth;}
    body{font-family:"Inter",sans-serif;background:var(--offwhite);color:var(--black);overflow-x:hidden;line-height:1.6;}
    h1,h2,h3,h4,h5,h6{font-family:"Playfair Display",serif;font-weight:700;line-height:1.28;}
    .s-label{font-size:.78rem;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:var(--gold);margin-bottom:8px;display:block;}
    .s-title{font-size:clamp(1.6rem,3vw,2.4rem);color:var(--black);text-align:center;margin-bottom:10px;}
    .s-title em{font-style:normal;color:var(--gold);}
    .s-line{width:54px;height:3px;background:var(--gold);border-radius:2px;margin:0 auto 16px;}
    .s-sub{text-align:center;color:var(--midgray);font-size:.96rem;max-width:680px;margin:0 auto 48px;line-height:1.80;}
    .btn-gold{display:inline-flex;align-items:center;gap:8px;background:var(--gold);color:#fff;padding:12px 26px;border-radius:6px;font-weight:700;font-size:.91rem;text-decoration:none;border:none;cursor:pointer;transition:all .3s;}
    .btn-gold:hover{background:var(--gold-dark);color:#fff;transform:translateY(-2px);}
    .btn-outline-w{display:inline-flex;align-items:center;gap:8px;background:#FFFFFF !important;color:#111827 !important;padding:11px 24px;border-radius:6px;font-weight:700;font-size:.91rem;text-decoration:none;border:2px solid #111827 !important;cursor:pointer;transition:all .3s;opacity:1 !important;}
    .btn-outline-w{color:#000000 !important;}
    .btn-outline-w i{color:#000000 !important;opacity:1 !important;}
    .btn-outline-w:hover{background:#F3F4F6 !important;color:#000000 !important;border-color:#111827 !important;}

    /* ===== Final CTA (Taxation) text visibility ===== */
    div[style*="background:var(--black)"] h2,
    div[style*="background:var(--black)"] p{
      color:#FFFFFF !important;
    }

    /* ---------- Hero Wave Slider (same) ---------- */
    .hero-slider-wrap{width:100vw;position:relative;left:50%;margin-left:-50vw;overflow:hidden;margin-top:0!important;padding-top:0!important;}
    .hero-slide{display:none;position:relative;height:auto;min-height:400px;padding:110px 0 50px;overflow:hidden;}
    .hero-slide.active{display:flex;}
    .hero-wave{position:absolute;bottom:0;left:0;width:100%;overflow:hidden;line-height:0;z-index:2;}
    .hero-wave svg{display:block;width:100%;height:70px;}
    .hero-slide-inner{max-width:1320px;margin:0 auto;padding:0 70px;display:flex;align-items:center;width:100%;height:auto;gap:40px;position:relative;z-index:1;}
    .hero-slide-left{flex:0 0 52%;max-width:52%;}
    .hero-badge{display:inline-flex;align-items:center;gap:7px;background:rgba(201,169,110,.16);border:1px solid rgba(201,169,110,.32);color:var(--gold);padding:6px 16px;border-radius:50px;font-size:.72rem;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;margin-bottom:18px;}
    .hero-slide h1{font-size:clamp(1.9rem,2.9vw,3.1rem);color:#fff;line-height:1.16;margin-bottom:14px;}
    .hero-slide h1 em{font-style:normal;color:var(--gold);}
    .hero-slide-desc{font-size:.93rem;color:rgba(255,255,255,0.95);line-height:1.78;margin-bottom:20px;max-width:480px;opacity:1;}
    .hero-stats-row{display:flex;gap:20px;margin-bottom:22px;flex-wrap:wrap;}
    .hstat{background:rgba(255,255,255,.10);border:1px solid rgba(255,255,255,.15);border-radius:10px;padding:10px 16px;min-width:100px;}
    .hstat-num{font-size:1.05rem;font-weight:800;color:var(--gold);font-family:"Playfair Display",serif;line-height:1;}
    .hstat-label{font-size:.68rem;color:#E2E8F0;margin-top:3px;opacity:1;}
    .hero-btns{display:flex;align-items:center;flex-wrap:wrap;gap:12px;}
    .hero-slide-right{flex:0 0 43%;max-width:43%;}
    .hero-loan-card{background:rgba(255,255,255,.05);backdrop-filter:blur(14px);border:1px solid rgba(255,255,255,.16);border-radius:18px;padding:22px;}
    .hero-loan-card h6{font-size:.84rem;font-weight:700;color:var(--gold);margin-bottom:14px;display:flex;align-items:center;gap:8px;font-family:"Inter",sans-serif;}
    .hero-loan-grid{display:grid;grid-template-columns:1fr 1fr;gap:8px;}
    .hero-loan-item{display:flex;align-items:center;gap:8px;font-size:.81rem;color:#F8FAFC;font-weight:500;opacity:1;}
    .hero-loan-item i{color:var(--gold);font-size:.75rem;}
    .hero-arrow{position:absolute;top:46%;transform:translateY(-50%);z-index:10;width:38px;height:38px;background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.2);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;cursor:pointer;transition:all .3s;backdrop-filter:blur(6px);}
    .hero-arrow:hover{background:var(--gold);border-color:var(--gold);color:var(--black);}
    .hero-arrow-prev{left:18px;}.hero-arrow-next{right:18px;}
    .hero-slider-dots{position:absolute;bottom:82px;left:50%;transform:translateX(-50%);display:flex;gap:8px;z-index:10;}
    .hero-dot{width:8px;height:8px;border-radius:50%;background:rgba(255,255,255,.35);border:none;cursor:pointer;transition:all .3s;padding:0;}
    .hero-dot.active{background:var(--gold);width:24px;border-radius:4px;}
    @keyframes slideIn{from{opacity:0;transform:translateX(28px)}to{opacity:1;transform:translateX(0)}}
    .hero-slide.active{animation:slideIn .45s ease;}

    /* ---------- Marquee, Stats, Service Cards (reused) ---------- */
    .strip-wrap{width:100vw;position:relative;left:50%;margin-left:-50vw;background:var(--black);overflow:hidden;}
    .strip-track{display:inline-flex;animation:marquee 40s linear infinite;white-space:nowrap;}
    @keyframes marquee{from{transform:translateX(0)}to{transform:translateX(-50%)}}
    .strip-item{display:inline-flex;align-items:center;gap:10px;padding:13px 28px;border-right:1px solid rgba(255,255,255,.07);flex-shrink:0;}
    .strip-item i{color:var(--gold);font-size:.9rem;}
    .strip-item span{color:#E2E8F0;font-size:.79rem;font-weight:600;white-space:nowrap;opacity:1;}

    .stats-sec{width:100vw;position:relative;left:50%;margin-left:-50vw;background:var(--offwhite);padding:56px 0;}
    .stats-inner{max-width:1320px;margin:0 auto;padding:0 40px;display:grid;grid-template-columns:repeat(5,1fr);gap:18px;}
    .stat-card{background:#fff;border-radius:14px;padding:20px 16px;text-align:center;border:1.5px solid var(--borderlite);transition:all .3s;}
    .stat-card:hover{transform:translateY(-4px);box-shadow:0 10px 26px rgba(0,0,0,.10);border-color:var(--black);}
    .stat-num{font-size:1.8rem;font-weight:800;color:var(--black);font-family:"Playfair Display",serif;line-height:1;}
    .stat-num em{font-style:normal;color:var(--gold);}
    .stat-label{font-size:.78rem;color:var(--midgray);margin-top:5px;font-weight:600;}

    /* ---------- Detailed Taxation Sections (like service tabs but as standalone) ---------- */
    .tax-section{width:100vw;position:relative;left:50%;margin-left:-50vw;padding:90px 0; background:#fff;}
    .tax-inner{max-width:1320px;margin:0 auto;padding:0 40px;}
    .tax-grid{display:grid;grid-template-columns:1.2fr 0.8fr;gap:40px;align-items:start;}
    .tax-left h2{font-size:clamp(2rem,3.5vw,2.6rem); margin-bottom:16px;}
    .tax-left h2 em{color:var(--gold);}
    .tax-underline{width:48px;height:3px;background:var(--gold);margin-bottom:20px;}
    .tax-desc{font-size:.93rem;color:var(--midgray);line-height:1.8;margin-bottom:24px;}
    .tax-highlights{display:flex;flex-wrap:wrap;gap:10px;margin-bottom:28px;}
    .tax-highlight-box{background:var(--offwhite);border:1px solid var(--borderlite);border-radius:10px;padding:14px 20px;flex:1;min-width:140px;text-align:center;}
    .tax-highlight-box strong{font-family:"Playfair Display",serif;font-size:1.2rem;color:var(--black);display:block;}
    .tax-highlight-box span{font-size:.74rem;color:var(--midgray);margin-top:4px;}
    .tax-features{margin-bottom:28px;}
    .tax-features h5{font-size:.9rem;font-weight:700;color:var(--black);margin-bottom:14px;display:flex;align-items:center;gap:8px;}
    .tax-features h5 i{color:var(--gold);}
    .tax-feat-grid{display:grid;grid-template-columns:1fr 1fr;gap:8px 20px;}
    .tax-feat-item{display:flex;align-items:center;gap:8px;font-size:.85rem;color:var(--black);}
    .tax-feat-item i{color:var(--gold);font-size:.8rem;}
    .tax-docs h5{font-size:.9rem;font-weight:700;color:var(--black);margin-bottom:12px;display:flex;align-items:center;gap:8px;}
    .tax-doc-tags{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:24px;}
    .tax-doc-tag{display:inline-flex;align-items:center;gap:6px;background:var(--offwhite);border:1px solid var(--borderlite);border-radius:6px;padding:6px 12px;font-size:.8rem;font-weight:600;color:var(--black);}
    .tax-doc-tag i{color:var(--gold);font-size:.78rem;}
    .tax-right .side-card{background:var(--black);border-radius:14px;padding:26px 22px;margin-bottom:20px;}
    .side-card h5{color:#fff;font-size:.95rem;margin-bottom:16px;display:flex;align-items:center;gap:8px;}
    .side-card h5 i{color:var(--gold);}
    .side-item{background:rgba(255,255,255,.08);border-radius:10px;padding:14px 16px;margin-bottom:12px;display:flex;align-items:flex-start;gap:14px;border:1px solid rgba(255,255,255,0.05);}
    .side-check{width:34px;height:34px;background:#EEF3ED !important;border:1px solid #DDE5DD !important;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:#5D7C63 !important;font-size:1rem;}
    .side-check i{color:#5D7C63 !important;}
    .side-item-title{font-size:.92rem;font-weight:700;color:#FFFFFF;margin-bottom:4px;line-height:1.3;}
    .side-item-sub{font-size:.82rem;color:rgba(255,255,255,0.90);margin:0;opacity:1;line-height:1.5;}
    .side-cta{display:flex;align-items:center;justify-content:center;gap:8px;background:var(--gold);color:#fff;padding:11px 20px;border-radius:8px;font-weight:700;font-size:.88rem;text-decoration:none;width:100%;transition:all .3s;margin-top:12px;}
    .side-cta:hover{background:var(--gold-dark);}

    /* Footer */
    .footer{background:var(--black);color:#BDC3C7;padding:60px 0 0;border-top:1px solid var(--border);}
    .footer h5{color:var(--white);font-family:"Inter",sans-serif;font-weight:600;margin-bottom:20px;}
    .footer a{color:#BDC3C7;text-decoration:none;}
    .footer a:hover{color:var(--gold);}
    .footer-bottom{border-top:1px solid rgba(255,255,255,0.08);padding:18px 0;margin-top:40px;font-size:0.9rem;text-align:center;}

    @media(max-width:991px){
      .tax-grid{grid-template-columns:1fr;}
      .hero-slide-inner{flex-wrap:wrap;padding:0 24px;}
      .hero-slide-left,.hero-slide-right{flex:0 0 100%;max-width:100%;}
      .hero-slide-right{display:none;}
      .stats-inner{grid-template-columns:repeat(3,1fr);}
    }
    @media(max-width:576px){
      .stats-inner{grid-template-columns:1fr 1fr;}
      .tax-feat-grid{grid-template-columns:1fr;}
      .tax-highlights{flex-direction:column;}
    }
  </style>
HTML;

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>
<!-- Hero Slider (Taxation Focus) -->
    <div class="hero-slider-wrap">
    <div class="hero-slide active" style="background:#134E3A;">
      <div class="hero-slide-inner">
        <div class="hero-slide-left">
          <div class="hero-badge"><i class="bi bi-file-earmark-text-fill"></i> TAXATION SERVICES</div>
          <h1>Income Tax <em>Return Filing</em><br>&amp; Compliance</h1>
          <p class="hero-slide-desc">Expert ITR filing for individuals, businesses, and NRIs. Maximize deductions and ensure complete compliance with the Income Tax Act.</p>
          <div class="hero-stats-row">
            <div class="hstat"><div class="hstat-num">3000<sup>+</sup></div><div class="hstat-label">Returns Filed</div></div>
            <div class="hstat"><div class="hstat-num">500<sup>+</sup></div><div class="hstat-label">Tax Audits</div></div>
            <div class="hstat"><div class="hstat-num">20<sup>+</sup></div><div class="hstat-label">Years Experience</div></div>
          </div>
          <div class="hero-btns">
            <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> File Your ITR</a>
            <a href="tel:+919876543210" class="btn-outline-w"><i class="bi bi-telephone-fill"></i> +91 98765 43210</a>
          </div>
        </div>
        <div class="hero-slide-right">
          <div class="hero-loan-card">
            <h6><i class="bi bi-check-circle-fill"></i> ITR Services Covered</h6>
            <div class="hero-loan-grid">
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> ITR-1 to ITR-7</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Business &amp; Profession</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Capital Gains</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> TDS Credit</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Tax Audit (44AB)</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Response to Notices</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Revised Returns</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Belated Returns</div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-wave"><svg viewBox="0 0 1440 70" preserveAspectRatio="none"><path d="M0,40 C360,80 1080,0 1440,40 L1440,70 L0,70 Z" fill="#ffffff"/></svg></div>
    </div>
    <div class="hero-slide" style="background:#134E3A;">
      <div class="hero-slide-inner">
        <div class="hero-slide-left">
          <div class="hero-badge"><i class="bi bi-receipt-cutoff"></i> GST COMPLIANCE</div>
          <h1>GST <em>Registration</em><br>&amp; Return Filing</h1>
          <p class="hero-slide-desc">GST registration, monthly/quarterly returns, annual return, and reconciliation. Avoid penalties with timely, accurate filing.</p>
          <div class="hero-stats-row">
            <div class="hstat"><div class="hstat-num">200<sup>+</sup></div><div class="hstat-label">GST Registrations</div></div>
            <div class="hstat"><div class="hstat-num">1000<sup>+</sup></div><div class="hstat-label">Returns Filed</div></div>
            <div class="hstat"><div class="hstat-num">0</div><div class="hstat-label">Late Fee (when we handle)</div></div>
          </div>
          <div class="hero-btns">
            <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> Get GST Help</a>
            <a href="tel:+919876543210" class="btn-outline-w"><i class="bi bi-telephone-fill"></i> +91 98765 43210</a>
          </div>
        </div>
        <div class="hero-slide-right">
          <div class="hero-loan-card">
            <h6><i class="bi bi-check-circle-fill"></i> Complete GST Solutions</h6>
            <div class="hero-loan-grid">
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> New Registration</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Composition Scheme</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> GSTR-1 &amp; 3B</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Annual Return (9/9C)</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> ITC Reconciliation</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> E‑way Bill</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Notice Reply</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> LUT</div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-wave"><svg viewBox="0 0 1440 70" preserveAspectRatio="none"><path d="M0,20 C480,70 960,10 1440,50 L1440,70 L0,70 Z" fill="#ffffff"/></svg></div>
    </div>
    <div class="hero-slide" style="background:#134E3A;">
      <div class="hero-slide-inner">
        <div class="hero-slide-left">
          <div class="hero-badge"><i class="bi bi-file-earmark-ruled-fill"></i> TDS &amp; TAX PLANNING</div>
          <h1><em>TDS</em> &amp; Tax<br>Planning Services</h1>
          <p class="hero-slide-desc">TDS return filing, certificate generation, and strategic tax planning to minimise liability legally.</p>
          <div class="hero-stats-row">
            <div class="hstat"><div class="hstat-num">150<sup>+</sup></div><div class="hstat-label">TDS Filers</div></div>
            <div class="hstat"><div class="hstat-num">100%</div><div class="hstat-label">Timely Filing</div></div>
            <div class="hstat"><div class="hstat-num">Expert</div><div class="hstat-label">Tax Planners</div></div>
          </div>
          <div class="hero-btns">
            <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> Plan Your Taxes</a>
            <a href="tel:+919876543210" class="btn-outline-w"><i class="bi bi-telephone-fill"></i> +91 98765 43210</a>
          </div>
        </div>
        <div class="hero-slide-right">
          <div class="hero-loan-card">
            <h6><i class="bi bi-check-circle-fill"></i> TDS &amp; Advisory</h6>
            <div class="hero-loan-grid">
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> TDS Return (24Q,26Q)</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> TDS Certificates</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Tax Saving Investments</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Capital Gains Planning</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> HUF &amp; Trust Taxation</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> International Taxation</div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-wave"><svg viewBox="0 0 1440 70" preserveAspectRatio="none"><path d="M0,50 C300,10 1100,70 1440,30 L1440,70 L0,70 Z" fill="#ffffff"/></svg></div>
    </div>
    <button class="hero-arrow hero-arrow-prev" onclick="changeSlide(-1)"><i class="bi bi-chevron-left"></i></button>
    <button class="hero-arrow hero-arrow-next" onclick="changeSlide(1)"><i class="bi bi-chevron-right"></i></button>
    <div class="hero-slider-dots">
      <button class="hero-dot active" onclick="goSlide(0)"></button>
      <button class="hero-dot" onclick="goSlide(1)"></button>
      <button class="hero-dot" onclick="goSlide(2)"></button>
    </div>
  </div>

  <!-- Marquee -->
  <div class="strip-wrap">
    <div class="strip-track">
      <div class="strip-item"><i class="bi bi-file-earmark-text-fill"></i><span>ITR Filing</span></div>
      <div class="strip-item"><i class="bi bi-receipt-cutoff"></i><span>GST Returns</span></div>
      <div class="strip-item"><i class="bi bi-file-earmark-ruled-fill"></i><span>TDS</span></div>
      <div class="strip-item"><i class="bi bi-calculator-fill"></i><span>Tax Audit</span></div>
      <div class="strip-item"><i class="bi bi-graph-up-arrow"></i><span>Tax Planning</span></div>
      <div class="strip-item"><i class="bi bi-globe2"></i><span>NRI Tax</span></div>
      <div class="strip-item"><i class="bi bi-file-earmark-text-fill"></i><span>ITR Filing</span></div>
      <div class="strip-item"><i class="bi bi-receipt-cutoff"></i><span>GST Returns</span></div>
      <div class="strip-item"><i class="bi bi-file-earmark-ruled-fill"></i><span>TDS</span></div>
      <div class="strip-item"><i class="bi bi-calculator-fill"></i><span>Tax Audit</span></div>
      <div class="strip-item"><i class="bi bi-graph-up-arrow"></i><span>Tax Planning</span></div>
      <div class="strip-item"><i class="bi bi-globe2"></i><span>NRI Tax</span></div>
    </div>
  </div>

  <!-- Stats -->
  <div class="stats-sec">
    <div class="stats-inner">
      <div class="stat-card"><div class="stat-num">3000<em>+</em></div><div class="stat-label">ITRs Filed</div></div>
      <div class="stat-card"><div class="stat-num">200<em>+</em></div><div class="stat-label">GST Registrations</div></div>
      <div class="stat-card"><div class="stat-num">100%</div><div class="stat-label">Compliance</div></div>
      <div class="stat-card"><div class="stat-num">20<em>+</em></div><div class="stat-label">Years Experience</div></div>
      <div class="stat-card"><div class="stat-num">500<em>+</em></div><div class="stat-label">Happy Clients</div></div>
    </div>
  </div>

  <!-- ===== Income Tax Section ===== -->
  <div class="tax-section" id="income-tax">
    <div class="tax-inner">
      <div class="tax-grid">
        <div class="tax-left">
          <span class="s-label">Direct Tax</span>
          <h2>Income Tax <em>Return Filing</em></h2>
          <div class="tax-underline"></div>
          <p class="tax-desc">From salaried employees to large businesses, we file ITR 1‑7 accurately. Our CAs ensure maximum deductions, carry forward losses, and complete compliance with the Income Tax Act.</p>
          <div class="tax-highlights">
            <div class="tax-highlight-box"><strong>ITR 1‑7</strong><span>All categories</span></div>
            <div class="tax-highlight-box"><strong>1‑3 Days</strong><span>Turnaround</span></div>
            <div class="tax-highlight-box"><strong>Revised Returns</strong><span>Supported</span></div>
            <div class="tax-highlight-box"><strong>Tax Audit</strong><span>44AB</span></div>
          </div>
          <div class="tax-features">
            <h5><i class="bi bi-star-fill"></i> What’s Included</h5>
            <div class="tax-feat-grid">
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> Computation of total income</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> Deduction under Chapter VI‑A</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> Capital gains (shares/property)</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> Set‑off &amp; carry forward of losses</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> Tax audit report (if applicable)</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> E‑verification &amp; acknowledgement</div>
            </div>
          </div>
          <div class="tax-docs">
            <h5><i class="bi bi-folder2-open"></i> Documents Required</h5>
            <div class="tax-doc-tags">
              <span class="tax-doc-tag"><i class="bi bi-credit-card-fill"></i> PAN</span>
              <span class="tax-doc-tag"><i class="bi bi-credit-card-2-front"></i> Aadhaar</span>
              <span class="tax-doc-tag"><i class="bi bi-file-earmark-text-fill"></i> Form 16 / Salary Slips</span>
              <span class="tax-doc-tag"><i class="bi bi-bank2"></i> Bank Statements</span>
              <span class="tax-doc-tag"><i class="bi bi-file-earmark-ruled-fill"></i> Investment Proofs</span>
              <span class="tax-doc-tag"><i class="bi bi-file-earmark-check-fill"></i> Previous ITR</span>
            </div>
          </div>
          <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> File Your ITR Now</a>
        </div>
        <div class="tax-right">
          <div class="side-card">
            <h5><i class="bi bi-shield-fill-check"></i> Why Our ITR Service?</h5>
            <div class="side-item"><div class="side-check"><i class="bi bi-person-check-fill"></i></div><div><p class="side-item-title">Expert CA Review</p><p class="side-item-sub">Every return verified by a CA</p></div></div>
            <div class="side-item"><div class="side-check"><i class="bi bi-piggy-bank-fill"></i></div><div><p class="side-item-title">Max Refund</p><p class="side-item-sub">All eligible deductions claimed</p></div></div>
            <div class="side-item"><div class="side-check"><i class="bi bi-laptop"></i></div><div><p class="side-item-title">100% Digital</p><p class="side-item-sub">Secure online filing</p></div></div>
            <a href="contact.php" class="side-cta"><i class="bi bi-telephone-fill"></i> Talk to Tax Expert</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== GST Section ===== -->
  <div class="tax-section" style="background:var(--offwhite);" id="gst">
    <div class="tax-inner">
      <div class="tax-grid">
        <div class="tax-left">
          <span class="s-label">Indirect Tax</span>
          <h2>GST <em>Services</em></h2>
          <div class="tax-underline"></div>
          <p class="tax-desc">Complete GST lifecycle management — from new registration to monthly filings, annual return, and notice handling. We keep you compliant without stress.</p>
          <div class="tax-highlights">
            <div class="tax-highlight-box"><strong>Registration</strong><span>Regular / Composition</span></div>
            <div class="tax-highlight-box"><strong>Returns</strong><span>GSTR‑1, 3B, 9, 9C</span></div>
            <div class="tax-highlight-box"><strong>Reconciliation</strong><span>GSTR‑2A vs books</span></div>
            <div class="tax-highlight-box"><strong>Notice Reply</strong><span>Expert support</span></div>
          </div>
          <div class="tax-features">
            <h5><i class="bi bi-star-fill"></i> Key Features</h5>
            <div class="tax-feat-grid">
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> New registration (7 days)</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> Composition scheme migration</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> Monthly / quarterly return filing</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> Input tax credit reconciliation</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> E‑way bill assistance</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> GST audit preparation</div>
            </div>
          </div>
          <div class="tax-docs">
            <h5><i class="bi bi-folder2-open"></i> Documents</h5>
            <div class="tax-doc-tags">
              <span class="tax-doc-tag"><i class="bi bi-credit-card-fill"></i> PAN</span>
              <span class="tax-doc-tag"><i class="bi bi-credit-card-2-front"></i> Aadhaar</span>
              <span class="tax-doc-tag"><i class="bi bi-geo-alt-fill"></i> Address Proof</span>
              <span class="tax-doc-tag"><i class="bi bi-bank2"></i> Cancel Cheque</span>
              <span class="tax-doc-tag"><i class="bi bi-file-earmark-check-fill"></i> Business Proof</span>
              <span class="tax-doc-tag"><i class="bi bi-person-badge-fill"></i> Photograph</span>
            </div>
          </div>
          <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> Apply for GST Registration</a>
        </div>
        <div class="tax-right">
          <div class="side-card">
            <h5><i class="bi bi-shield-fill-check"></i> GST Advantages</h5>
            <div class="side-item"><div class="side-check"><i class="bi bi-shield-lock-fill"></i></div><div><p class="side-item-title">Zero Late Fee</p><p class="side-item-sub">On‑time filing guarantee</p></div></div>
            <div class="side-item"><div class="side-check"><i class="bi bi-graph-up-arrow"></i></div><div><p class="side-item-title">Maximum ITC</p><p class="side-item-sub">Every eligible credit claimed</p></div></div>
            <div class="side-item"><div class="side-check"><i class="bi bi-headset"></i></div><div><p class="side-item-title">Dedicated SPOC</p><p class="side-item-sub">Single point of contact</p></div></div>
            <a href="contact.php" class="side-cta"><i class="bi bi-telephone-fill"></i> Talk to GST Expert</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== TDS Section ===== -->
  <div class="tax-section" id="tds">
    <div class="tax-inner">
      <div class="tax-grid">
        <div class="tax-left">
          <span class="s-label">Withholding Tax</span>
          <h2>TDS <em>Return Filing</em></h2>
          <div class="tax-underline"></div>
          <p class="tax-desc">Timely and accurate TDS return preparation (Form 24Q, 26Q, 27Q), TDS payment challans, and certificate generation. Avoid interest and penalty.</p>
          <div class="tax-highlights">
            <div class="tax-highlight-box"><strong>Quarterly</strong><span>Filing frequency</span></div>
            <div class="tax-highlight-box"><strong>24Q / 26Q / 27Q</strong><span>All forms</span></div>
            <div class="tax-highlight-box"><strong>Form 16/16A</strong><span>Certificates</span></div>
            <div class="tax-highlight-box"><strong>Correction</strong><span>Revised returns</span></div>
          </div>
          <div class="tax-features">
            <h5><i class="bi bi-star-fill"></i> What We Do</h5>
            <div class="tax-feat-grid">
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> TDS return preparation</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> Challan generation &amp; payment</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> Form 16 / 16A issuance</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> TDS credit reconciliation</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> Correction statements</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> Notice resolution</div>
            </div>
          </div>
          <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> File TDS Return</a>
        </div>
        <div class="tax-right">
          <div class="side-card">
            <h5><i class="bi bi-shield-fill-check"></i> Why Our TDS Service?</h5>
            <div class="side-item"><div class="side-check"><i class="bi bi-shield-lock-fill"></i></div><div><p class="side-item-title">Error‑free Filing</p><p class="side-item-sub">Expert review before submission</p></div></div>
            <div class="side-item"><div class="side-check"><i class="bi bi-clock-history"></i></div><div><p class="side-item-title">Timely Compliance</p><p class="side-item-sub">No missed deadlines</p></div></div>
            <a href="contact.php" class="side-cta"><i class="bi bi-telephone-fill"></i> Talk to TDS Expert</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== Tax Planning & NRI ===== -->
  <div class="tax-section" style="background:var(--offwhite);" id="planning">
    <div class="tax-inner">
      <div class="tax-grid">
        <div class="tax-left">
          <span class="s-label">Strategic Advisory</span>
          <h2>Tax <em>Planning</em> &amp; NRI Taxation</h2>
          <div class="tax-underline"></div>
          <p class="tax-desc">Proactive tax planning for individuals and businesses, plus specialised NRI tax services including DTAA relief, repatriation, and foreign asset compliance.</p>
          <div class="tax-highlights">
            <div class="tax-highlight-box"><strong>Tax Saving</strong><span>Legal strategies</span></div>
            <div class="tax-highlight-box"><strong>NRI Expert</strong><span>DTAA &amp; FEMA</span></div>
            <div class="tax-highlight-box"><strong>Investment Planning</strong><span>80C to 80U</span></div>
            <div class="tax-highlight-box"><strong>HUF / Trust</strong><span>Structuring</span></div>
          </div>
          <div class="tax-features">
            <h5><i class="bi bi-star-fill"></i> Services Include</h5>
            <div class="tax-feat-grid">
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> Personal tax planning</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> Capital gains deferral</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> NRI ITR filing</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> DTAA benefit claim</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> Repatriation advisory</div>
              <div class="tax-feat-item"><i class="bi bi-check-circle-fill"></i> Advance tax estimation</div>
            </div>
          </div>
          <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> Plan Your Taxes</a>
        </div>
        <div class="tax-right">
          <div class="side-card">
            <h5><i class="bi bi-shield-fill-check"></i> Why Plan With Us?</h5>
            <div class="side-item"><div class="side-check"><i class="bi bi-diagram-3-fill"></i></div><div><p class="side-item-title">Holistic Approach</p><p class="side-item-sub">Tax, investment, and estate planning</p></div></div>
            <div class="side-item"><div class="side-check"><i class="bi bi-globe2"></i></div><div><p class="side-item-title">NRI Specialist</p><p class="side-item-sub">Dedicated international tax expert</p></div></div>
            <a href="contact.php" class="side-cta"><i class="bi bi-telephone-fill"></i> Talk to Tax Planner</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CTA -->
  <div style="width:100vw;position:relative;left:50%;margin-left:-50vw;background:var(--black);padding:86px 0;overflow:hidden;text-align:center;">
    <h2 style="color:#FFFFFF;font-family:'Playfair Display',serif;font-size:clamp(1.8rem,3.5vw,2.8rem);">Ready to Simplify Your <em style="color:var(--gold);">Taxation</em>?</h2>
    <p style="color:rgba(255,255,255,0.90);max-width:500px;margin:16px auto 32px;font-size:0.95rem;opacity:1;">Get in touch with our CA team for a free consultation. We’ll ensure you stay compliant and save tax.</p>
    <a href="contact.php" class="btn-gold" style="font-size:1rem;padding:14px 32px;color:#FFFFFF !important;"><i class="bi bi-send-fill" style="color:#FFFFFF !important;"></i> Schedule Free Consultation</a>
  </div>

  <!-- Dark Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Hero slider (same as services)
    let heroIdx = 0;
    const heroSlides = document.querySelectorAll('.hero-slide');
    const heroDots = document.querySelectorAll('.hero-dot');
    let heroTimer = setInterval(() => changeSlide(1), 5000);
    function changeSlide(d){
      heroSlides[heroIdx].classList.remove('active');
      heroDots[heroIdx].classList.remove('active');
      heroIdx = (heroIdx + d + heroSlides.length) % heroSlides.length;
      heroSlides[heroIdx].classList.add('active');
      heroDots[heroIdx].classList.add('active');
      clearInterval(heroTimer);
      heroTimer = setInterval(() => changeSlide(1), 5000);
    }
    function goSlide(i){
      heroSlides[heroIdx].classList.remove('active');
      heroDots[heroIdx].classList.remove('active');
      heroIdx = i;
      heroSlides[heroIdx].classList.add('active');
      heroDots[heroIdx].classList.add('active');
      clearInterval(heroTimer);
      heroTimer = setInterval(() => changeSlide(1), 5000);
    }
  </script>
  <script src="<?php echo e(ASSETS_URL . '/js/main.js'); ?>"></script>
<?php include __DIR__ . '/includes/footer.php'; ?>
