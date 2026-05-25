<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = 'ROC & Compliance | ' . SITE_NAME;
$metaDescription = 'Complete ROC & Compliance services in Dehradun – Company Registration, Annual Filings, Event-Based Forms, Secretarial Services. Certified CS & CA team.';
$bootstrapCssHref = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css';
$bootstrapIconsHref = 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.min.css';
$googleFontsHref = 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800;900&family=Inter:wght@300;400;500;600;700;800&display=swap';
$extraHead = <<<'HTML'
<style>
    /* ===== Core Variables & Resets (identical to other pages) ===== */
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
    .btn-outline-w i{color:#111827 !important;opacity:1 !important;}
    .btn-outline-w:hover{background:#F3F4F6 !important;color:#111827 !important;border-color:#111827 !important;}

    /* ===== Hero Wave Slider (same as previous) ===== */
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

    /* ===== Marquee, Stats, Section Layout (reused) ===== */
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

    /* ===== Detailed Compliance Sections (similar to audit/taxation) ===== */
    .comp-section{width:100vw;position:relative;left:50%;margin-left:-50vw;padding:90px 0; background:#fff;}
    .comp-section.alt{background:var(--offwhite);}
    .comp-inner{max-width:1320px;margin:0 auto;padding:0 40px;}
    .comp-grid{display:grid;grid-template-columns:1.2fr 0.8fr;gap:40px;align-items:start;}
    .comp-left h2{font-size:clamp(2rem,3.5vw,2.6rem); margin-bottom:16px;}
    .comp-left h2 em{color:var(--gold);}
    .comp-underline{width:48px;height:3px;background:var(--gold);margin-bottom:20px;}
    .comp-desc{font-size:.93rem;color:var(--midgray);line-height:1.8;margin-bottom:24px;}
    .comp-highlights{display:flex;flex-wrap:wrap;gap:10px;margin-bottom:28px;}
    .comp-highlight-box{background:var(--offwhite);border:1px solid var(--borderlite);border-radius:10px;padding:14px 20px;flex:1;min-width:140px;text-align:center;}
    .comp-highlight-box strong{font-family:"Playfair Display",serif;font-size:1.2rem;color:var(--black);display:block;}
    .comp-highlight-box span{font-size:.74rem;color:var(--midgray);margin-top:4px;}
    .comp-features{margin-bottom:28px;}
    .comp-features h5{font-size:.9rem;font-weight:700;color:var(--black);margin-bottom:14px;display:flex;align-items:center;gap:8px;}
    .comp-features h5 i{color:var(--gold);}
    .comp-feat-grid{display:grid;grid-template-columns:1fr 1fr;gap:8px 20px;}
    .comp-feat-item{display:flex;align-items:center;gap:8px;font-size:.85rem;color:var(--black);}
    .comp-feat-item i{color:var(--gold);font-size:.8rem;}
    .comp-docs h5{font-size:.9rem;font-weight:700;color:var(--black);margin-bottom:12px;display:flex;align-items:center;gap:8px;}
    .comp-doc-tags{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:24px;}
    .comp-doc-tag{display:inline-flex;align-items:center;gap:6px;background:var(--offwhite);border:1px solid var(--borderlite);border-radius:6px;padding:6px 12px;font-size:.8rem;font-weight:600;color:var(--black);}
    .comp-doc-tag i{color:var(--gold);font-size:.78rem;}
    .comp-right .side-card{background:var(--black);border-radius:14px;padding:26px 22px;margin-bottom:20px;}
    .side-card h5{color:#fff;font-size:.95rem;margin-bottom:16px;display:flex;align-items:center;gap:8px;}
    .side-card h5 i{color:var(--gold);}
    .side-item{background:rgba(255,255,255,.08);border-radius:10px;padding:14px 16px;margin-bottom:12px;display:flex;align-items:flex-start;gap:14px;border:1px solid rgba(255,255,255,0.05);}
    .side-check{width:34px;height:34px;background:#EEF3ED !important;border:1px solid #DDE5DD !important;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:#5D7C63 !important;font-size:1rem;}
    .side-check i{color:#5D7C63 !important;}
    .side-item-title{font-size:.92rem;font-weight:700;color:#FFFFFF;margin-bottom:4px;line-height:1.3;}
    .side-item-sub{font-size:.82rem;color:rgba(255,255,255,0.90);margin:0;opacity:1;line-height:1.5;}
    .side-cta{display:flex;align-items:center;justify-content:center;gap:8px;background:var(--gold);color:#fff;padding:11px 20px;border-radius:8px;font-weight:700;font-size:.88rem;text-decoration:none;width:100%;transition:all .3s;margin-top:12px;}
    .side-cta:hover{background:var(--gold-dark);}

    /* ===== Footer ===== */
    .footer{background:var(--black);color:#BDC3C7;padding:60px 0 0;border-top:1px solid var(--border);}
    .footer h5{color:var(--white);font-family:"Inter",sans-serif;font-weight:600;margin-bottom:20px;}
    .footer a{color:#BDC3C7;text-decoration:none;}
    .footer a:hover{color:var(--gold);}
    .footer-bottom{border-top:1px solid rgba(255,255,255,0.08);padding:18px 0;margin-top:40px;font-size:0.9rem;text-align:center;}

    @media(max-width:991px){
      .comp-grid{grid-template-columns:1fr;}
      .hero-slide-inner{flex-wrap:wrap;padding:0 24px;}
      .hero-slide-left,.hero-slide-right{flex:0 0 100%;max-width:100%;}
      .hero-slide-right{display:none;}
      .stats-inner{grid-template-columns:repeat(3,1fr);}
    }
    @media(max-width:576px){
      .stats-inner{grid-template-columns:1fr 1fr;}
      .comp-feat-grid{grid-template-columns:1fr;}
      .comp-highlights{flex-direction:column;}
    }
  </style>
HTML;

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>
<!-- Hero Slider (ROC & Compliance Focus) -->
  <div class="hero-slider-wrap" style="margin-top:76px!important;">
    <!-- Slide 1 – Company Registration -->
    <div class="hero-slide active" style="background:#134E3A;">
      <div class="hero-slide-inner">
        <div class="hero-slide-left">
          <div class="hero-badge"><i class="bi bi-building-fill-check"></i> COMPANY INCORPORATION</div>
          <h1>Private Limited, <em>LLP</em>, OPC<br>&amp; Section 8 Company</h1>
          <p class="hero-slide-desc">End‑to‑end company registration – DIN, DSC, name approval, MoA, AoA, PAN, TAN, GST. We make incorporation seamless and fully digital.</p>
          <div class="hero-stats-row">
            <div class="hstat"><div class="hstat-num">200<sup>+</sup></div><div class="hstat-label">Companies Incorporated</div></div>
            <div class="hstat"><div class="hstat-num">10-15</div><div class="hstat-label">Days Turnaround</div></div>
            <div class="hstat"><div class="hstat-num">100%</div><div class="hstat-label">Digital Process</div></div>
          </div>
          <div class="hero-btns">
            <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> Register Your Company</a>
            <a href="tel:+919876543210" class="btn-outline-w"><i class="bi bi-telephone-fill"></i> +91 98765 43210</a>
          </div>
        </div>
        <div class="hero-slide-right">
          <div class="hero-loan-card">
            <h6><i class="bi bi-check-circle-fill"></i> Incorporation Services</h6>
            <div class="hero-loan-grid">
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Private Limited</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> LLP</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> One Person Company</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Section 8 (NGO)</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> DIN &amp; DSC</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> PAN / TAN</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> GST Registration</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Bank A/c Assistance</div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-wave"><svg viewBox="0 0 1440 70" preserveAspectRatio="none"><path d="M0,40 C360,80 1080,0 1440,40 L1440,70 L0,70 Z" fill="#ffffff"/></svg></div>
    </div>

    <!-- Slide 2 – Annual & Event Compliance -->
    <div class="hero-slide" style="background:#134E3A;">
      <div class="hero-slide-inner">
        <div class="hero-slide-left">
          <div class="hero-badge"><i class="bi bi-file-earmark-text-fill"></i> ANNUAL &amp; EVENT‑BASED FILING</div>
          <h1>ROC <em>Compliance</em><br>&amp; Secretarial Services</h1>
          <p class="hero-slide-desc">Stay compliant with MGT‑7, AOC‑4, DIR‑3 KYC, and all event‑based filings. Our Company Secretary team ensures zero defaults.</p>
          <div class="hero-stats-row">
            <div class="hstat"><div class="hstat-num">300<sup>+</sup></div><div class="hstat-label">Annual Returns Filed</div></div>
            <div class="hstat"><div class="hstat-num">On Time</div><div class="hstat-label">Always</div></div>
            <div class="hstat"><div class="hstat-num">CS</div><div class="hstat-label">Managed</div></div>
          </div>
          <div class="hero-btns">
            <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> Ensure Your Compliance</a>
            <a href="tel:+919876543210" class="btn-outline-w"><i class="bi bi-telephone-fill"></i> +91 98765 43210</a>
          </div>
        </div>
        <div class="hero-slide-right">
          <div class="hero-loan-card">
            <h6><i class="bi bi-check-circle-fill"></i> Compliance Checklist</h6>
            <div class="hero-loan-grid">
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> MGT‑7 (Annual Return)</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> AOC‑4 (Financials)</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> DIR‑3 KYC</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> DIR‑12 (Changes)</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> SH‑7 (Capital)</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Strike Off / Closure</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Charge Creation</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Board Resolutions</div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-wave"><svg viewBox="0 0 1440 70" preserveAspectRatio="none"><path d="M0,20 C480,70 960,10 1440,50 L1440,70 L0,70 Z" fill="#ffffff"/></svg></div>
    </div>

    <button class="hero-arrow hero-arrow-prev" onclick="changeSlide(-1)"><i class="bi bi-chevron-left"></i></button>
    <button class="hero-arrow hero-arrow-next" onclick="changeSlide(1)"><i class="bi bi-chevron-right"></i></button>
    <div class="hero-slider-dots">
      <button class="hero-dot active" onclick="goSlide(0)"></button>
      <button class="hero-dot" onclick="goSlide(1)"></button>
    </div>
  </div>

  <!-- Marquee -->
  <div class="strip-wrap">
    <div class="strip-track">
      <div class="strip-item"><i class="bi bi-building-fill-check"></i><span>Company Registration</span></div>
      <div class="strip-item"><i class="bi bi-file-earmark-text-fill"></i><span>MGT‑7 / AOC‑4</span></div>
      <div class="strip-item"><i class="bi bi-person-badge-fill"></i><span>DIR‑3 KYC</span></div>
      <div class="strip-item"><i class="bi bi-arrow-repeat"></i><span>Event Based Forms</span></div>
      <div class="strip-item"><i class="bi bi-journal-check"></i><span>Secretarial Audit</span></div>
      <div class="strip-item"><i class="bi bi-x-octagon-fill"></i><span>Strike Off</span></div>
      <div class="strip-item"><i class="bi bi-building-fill-check"></i><span>Company Registration</span></div>
      <div class="strip-item"><i class="bi bi-file-earmark-text-fill"></i><span>MGT‑7 / AOC‑4</span></div>
      <div class="strip-item"><i class="bi bi-person-badge-fill"></i><span>DIR‑3 KYC</span></div>
      <div class="strip-item"><i class="bi bi-arrow-repeat"></i><span>Event Based Forms</span></div>
      <div class="strip-item"><i class="bi bi-journal-check"></i><span>Secretarial Audit</span></div>
      <div class="strip-item"><i class="bi bi-x-octagon-fill"></i><span>Strike Off</span></div>
    </div>
  </div>

  <!-- Stats -->
  <div class="stats-sec">
    <div class="stats-inner">
      <div class="stat-card"><div class="stat-num">200<em>+</em></div><div class="stat-label">Companies Registered</div></div>
      <div class="stat-card"><div class="stat-num">300<em>+</em></div><div class="stat-label">Annual Returns Filed</div></div>
      <div class="stat-card"><div class="stat-num">10<em>+</em></div><div class="stat-label">Years of ROC Practice</div></div>
      <div class="stat-card"><div class="stat-num">100%</div><div class="stat-label">Compliance Rate</div></div>
      <div class="stat-card"><div class="stat-num">CS</div><div class="stat-label">In‑house Team</div></div>
    </div>
  </div>

  <!-- ===== Company Registration Section ===== -->
  <div class="comp-section" id="incorporation">
    <div class="comp-inner">
      <div class="comp-grid">
        <div class="comp-left">
          <span class="s-label">Business Setup</span>
          <h2>Company <em>Registration</em></h2>
          <div class="comp-underline"></div>
          <p class="comp-desc">From Private Limited to LLP, OPC, or Section 8 Company – we provide complete incorporation services including DIN, DSC, name approval, MoA, AoA, PAN, TAN, and GST registration.</p>
          <div class="comp-highlights">
            <div class="comp-highlight-box"><strong>Pvt Ltd</strong><span>Startup favourite</span></div>
            <div class="comp-highlight-box"><strong>LLP</strong><span>Flexible &amp; tax‑efficient</span></div>
            <div class="comp-highlight-box"><strong>OPC</strong><span>Single owner</span></div>
            <div class="comp-highlight-box"><strong>Section 8</strong><span>Non‑profit</span></div>
          </div>
          <div class="comp-features">
            <h5><i class="bi bi-star-fill"></i> What’s Included</h5>
            <div class="comp-feat-grid">
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> DIN &amp; DSC for directors</div>
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> Name reservation (RUN)</div>
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> MoA &amp; AoA drafting</div>
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> Certificate of Incorporation</div>
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> PAN &amp; TAN</div>
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> GST registration</div>
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> Bank account assistance</div>
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> Post‑incorporation compliance</div>
            </div>
          </div>
          <div class="comp-docs">
            <h5><i class="bi bi-folder2-open"></i> Documents Required</h5>
            <div class="comp-doc-tags">
              <span class="comp-doc-tag"><i class="bi bi-credit-card-fill"></i> PAN of Directors</span>
              <span class="comp-doc-tag"><i class="bi bi-credit-card-2-front"></i> Aadhaar</span>
              <span class="comp-doc-tag"><i class="bi bi-geo-alt-fill"></i> Address Proof</span>
              <span class="comp-doc-tag"><i class="bi bi-bank2"></i> Bank Statement</span>
              <span class="comp-doc-tag"><i class="bi bi-person-badge-fill"></i> Photograph</span>
              <span class="comp-doc-tag"><i class="bi bi-file-earmark-check-fill"></i> NOC from Owner</span>
            </div>
          </div>
          <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> Start Your Company</a>
        </div>
        <div class="comp-right">
          <div class="side-card">
            <h5><i class="bi bi-shield-fill-check"></i> Why Register With Us?</h5>
            <div class="side-item"><div class="side-check"><i class="bi bi-person-badge-fill"></i></div><div><p class="side-item-title">CA/CS Managed</p><p class="side-item-sub">Process handled by professionals</p></div></div>
            <div class="side-item"><div class="side-check"><i class="bi bi-boxes"></i></div><div><p class="side-item-title">All Inclusive</p><p class="side-item-sub">PAN, TAN, GST, bank account</p></div></div>
            <div class="side-item"><div class="side-check"><i class="bi bi-headset"></i></div><div><p class="side-item-title">Lifetime Support</p><p class="side-item-sub">Annual filing reminders</p></div></div>
            <a href="contact.php" class="side-cta"><i class="bi bi-telephone-fill"></i> Talk to Company Law Expert</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== Annual Compliance Section ===== -->
  <div class="comp-section alt" id="annual">
    <div class="comp-inner">
      <div class="comp-grid">
        <div class="comp-left">
          <span class="s-label">Mandatory Filing</span>
          <h2>Annual <em>ROC Compliance</em></h2>
          <div class="comp-underline"></div>
          <p class="comp-desc">Every company must file annual returns and financial statements. We take care of MGT‑7, AOC‑4, ADT‑1, and DIR‑3 KYC before the due dates.</p>
          <div class="comp-highlights">
            <div class="comp-highlight-box"><strong>MGT‑7</strong><span>Annual Return</span></div>
            <div class="comp-highlight-box"><strong>AOC‑4</strong><span>Financial Statements</span></div>
            <div class="comp-highlight-box"><strong>ADT‑1</strong><span>Auditor Appointment</span></div>
            <div class="comp-highlight-box"><strong>DIR‑3 KYC</strong><span>Director KYC</span></div>
          </div>
          <div class="comp-features">
            <h5><i class="bi bi-star-fill"></i> Annual Compliance Package</h5>
            <div class="comp-feat-grid">
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> Preparation of board report</div>
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> MGT‑7 e‑filing</div>
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> AOC‑4 / AOC‑4 XBRL filing</div>
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> ADT‑1 filing</div>
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> DIR‑3 KYC for all directors</div>
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> Annual calendar &amp; reminders</div>
            </div>
          </div>
          <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> File Your Annual Return</a>
        </div>
        <div class="comp-right">
          <div class="side-card">
            <h5><i class="bi bi-shield-fill-check"></i> Why Annual Filing Matters</h5>
            <div class="side-item"><div class="side-check"><i class="bi bi-shield-lock-fill"></i></div><div><p class="side-item-title">Avoid Penalty</p><p class="side-item-sub">Up to ₹100/day for late filing</p></div></div>
            <div class="side-item"><div class="side-check"><i class="bi bi-check-circle-fill"></i></div><div><p class="side-item-title">Active Status</p><p class="side-item-sub">Keep your company compliant</p></div></div>
            <a href="contact.php" class="side-cta"><i class="bi bi-telephone-fill"></i> Contact CS Team</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== Event‑Based Compliance Section ===== -->
  <div class="comp-section" id="event-based">
    <div class="comp-inner">
      <div class="comp-grid">
        <div class="comp-left">
          <span class="s-label">On‑Demand Filing</span>
          <h2>Event‑Based <em>ROC Forms</em></h2>
          <div class="comp-underline"></div>
          <p class="comp-desc">Whenever there is a change in directors, address, share capital, or any other statutory change, we file the required e‑forms promptly.</p>
          <div class="comp-highlights">
            <div class="comp-highlight-box"><strong>DIR‑12</strong><span>Director changes</span></div>
            <div class="comp-highlight-box"><strong>SH‑7</strong><span>Share capital change</span></div>
            <div class="comp-highlight-box"><strong>INC‑22</strong><span>Address change</span></div>
            <div class="comp-highlight-box"><strong>CHG‑1</strong><span>Charge creation</span></div>
          </div>
          <div class="comp-features">
            <h5><i class="bi bi-star-fill"></i> Event‑Based Services</h5>
            <div class="comp-feat-grid">
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> Appointment / Resignation of Directors</div>
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> Change in Registered Office</div>
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> Increase in Authorised Capital</div>
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> Allotment of Shares</div>
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> Transfer of Shares</div>
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> Charge Creation / Satisfaction</div>
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> Strike Off &amp; Closure</div>
              <div class="comp-feat-item"><i class="bi bi-check-circle-fill"></i> Change in Objects / Name</div>
            </div>
          </div>
          <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> File an Event Form</a>
        </div>
        <div class="comp-right">
          <div class="side-card">
            <h5><i class="bi bi-shield-fill-check"></i> Why Choose Us?</h5>
            <div class="side-item"><div class="side-check"><i class="bi bi-person-check-fill"></i></div><div><p class="side-item-title">CS Managed</p><p class="side-item-sub">All filings by qualified CS</p></div></div>
            <div class="side-item"><div class="side-check"><i class="bi bi-lightning-charge-fill"></i></div><div><p class="side-item-title">Zero Errors</p><p class="side-item-sub">Accurate form preparation</p></div></div>
            <div class="side-item"><div class="side-check"><i class="bi bi-clock-history"></i></div><div><p class="side-item-title">Fast Turnaround</p><p class="side-item-sub">Usually within 24‑48 hours</p></div></div>
            <a href="contact.php" class="side-cta"><i class="bi bi-telephone-fill"></i> Talk to CS Expert</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CTA -->
  <div style="width:100vw;position:relative;left:50%;margin-left:-50vw;background:var(--black);padding:86px 0;overflow:hidden;text-align:center;">
    <h2 style="color:#FFFFFF;font-family:'Playfair Display',serif;font-size:clamp(1.8rem,3.5vw,2.8rem);">Keep Your Company <em style="color:var(--gold);">Compliant</em></h2>
    <p style="color:rgba(255,255,255,0.90);max-width:500px;margin:16px auto 32px;font-size:0.95rem;opacity:1;">Contact us for a free consultation on your ROC compliance needs. Our dedicated CS team ensures you never miss a deadline.</p>
    <a href="contact.php" class="btn-gold" style="font-size:1rem;padding:14px 32px;color:#FFFFFF !important;"><i class="bi bi-send-fill" style="color:#FFFFFF !important;"></i> Schedule Free Consultation</a>
  </div>

  <!-- Dark Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Hero slider
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
