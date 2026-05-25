<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = 'Audit & Assurance | ' . SITE_NAME;
$metaDescription = 'Professional Audit & Assurance services in Dehradun – Statutory Audit, Tax Audit, Internal Audit, Stock Audit, Due Diligence by experienced CAs.';
$bootstrapCssHref = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css';
$bootstrapIconsHref = 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.min.css';
$googleFontsHref = 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800;900&family=Inter:wght@300;400;500;600;700;800&display=swap';
$extraHead = <<<'HTML'
<style>
    /* ===== Same core variables and resets ===== */
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

    /* ===== HERO Phone CTA: force tel link text to pure black ===== */
    a.btn-outline-w[href^="tel:"]{
      color:#000000 !important;
      font-weight:700 !important;
    }
    a.btn-outline-w[href^="tel:"] i{
      color:#000000 !important;
      opacity:1 !important;
    }
    a.btn-outline-w[href^="tel:"] *{
      color:#000000 !important;
      font-weight:700 !important;
    }

    /* ===== Hero Wave Slider (identical to previous pages) ===== */
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

    /* ===== Detailed Audit Sections (same as taxation but tailored) ===== */
    .audit-section{width:100vw;position:relative;left:50%;margin-left:-50vw;padding:90px 0; background:#fff;}
    .audit-section.alt{background:var(--offwhite);}
    .audit-inner{max-width:1320px;margin:0 auto;padding:0 40px;}
    .audit-grid{display:grid;grid-template-columns:1.2fr 0.8fr;gap:40px;align-items:start;}
    .audit-left h2{font-size:clamp(2rem,3.5vw,2.6rem); margin-bottom:16px;}
    .audit-left h2 em{color:var(--gold);}
    .audit-underline{width:48px;height:3px;background:var(--gold);margin-bottom:20px;}
    .audit-desc{font-size:.93rem;color:var(--midgray);line-height:1.8;margin-bottom:24px;}
    .audit-highlights{display:flex;flex-wrap:wrap;gap:10px;margin-bottom:28px;}
    .audit-highlight-box{background:var(--offwhite);border:1px solid var(--borderlite);border-radius:10px;padding:14px 20px;flex:1;min-width:140px;text-align:center;}
    .audit-highlight-box strong{font-family:"Playfair Display",serif;font-size:1.2rem;color:var(--black);display:block;}
    .audit-highlight-box span{font-size:.74rem;color:var(--midgray);margin-top:4px;}
    .audit-features{margin-bottom:28px;}
    .audit-features h5{font-size:.9rem;font-weight:700;color:var(--black);margin-bottom:14px;display:flex;align-items:center;gap:8px;}
    .audit-features h5 i{color:var(--gold);}
    .audit-feat-grid{display:grid;grid-template-columns:1fr 1fr;gap:8px 20px;}
    .audit-feat-item{display:flex;align-items:center;gap:8px;font-size:.85rem;color:var(--black);}
    .audit-feat-item i{color:var(--gold);font-size:.8rem;}
    .audit-docs h5{font-size:.9rem;font-weight:700;color:var(--black);margin-bottom:12px;display:flex;align-items:center;gap:8px;}
    .audit-doc-tags{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:24px;}
    .audit-doc-tag{display:inline-flex;align-items:center;gap:6px;background:var(--offwhite);border:1px solid var(--borderlite);border-radius:6px;padding:6px 12px;font-size:.8rem;font-weight:600;color:var(--black);}
    .audit-doc-tag i{color:var(--gold);font-size:.78rem;}
    .audit-right .side-card{background:var(--black);border-radius:14px;padding:26px 22px;margin-bottom:20px;}
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
      .audit-grid{grid-template-columns:1fr;}
      .hero-slide-inner{flex-wrap:wrap;padding:0 24px;}
      .hero-slide-left,.hero-slide-right{flex:0 0 100%;max-width:100%;}
      .hero-slide-right{display:none;}
      .stats-inner{grid-template-columns:repeat(3,1fr);}
    }
    @media(max-width:576px){
      .stats-inner{grid-template-columns:1fr 1fr;}
      .audit-feat-grid{grid-template-columns:1fr;}
      .audit-highlights{flex-direction:column;}
    }
  </style>
HTML;

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>
<!-- Hero Slider (Audit Focus) -->
  <div class="hero-slider-wrap" style="margin-top:76px!important;">
    <!-- Slide 1 – Statutory Audit -->
    <div class="hero-slide active" style="background:#134E3A;">
      <div class="hero-slide-inner">
        <div class="hero-slide-left">
          <div class="hero-badge"><i class="bi bi-journal-bookmark-fill"></i> AUDIT &amp; ASSURANCE</div>
          <h1>Statutory <em>Audit</em><br>of Companies</h1>
          <p class="hero-slide-desc">Comprehensive statutory audits as per Companies Act 2013. Independent opinion, true and fair view, and full compliance with ICAI Standards.</p>
          <div class="hero-stats-row">
            <div class="hstat"><div class="hstat-num">200<sup>+</sup></div><div class="hstat-label">Statutory Audits</div></div>
            <div class="hstat"><div class="hstat-num">150<sup>+</sup></div><div class="hstat-label">Tax Audits</div></div>
            <div class="hstat"><div class="hstat-num">50<sup>+</sup></div><div class="hstat-label">Internal Audits</div></div>
          </div>
          <div class="hero-btns">
            <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> Request Audit</a>
            <a href="tel:+919876543210" class="btn-outline-w"><i class="bi bi-telephone-fill"></i> +91 98765 43210</a>
          </div>
        </div>
        <div class="hero-slide-right">
          <div class="hero-loan-card">
            <h6><i class="bi bi-check-circle-fill"></i> Audit Services</h6>
            <div class="hero-loan-grid">
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Statutory Audit</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Tax Audit (44AB)</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Internal Audit</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Stock Audit</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> GST Audit</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Trust / NGO Audit</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Due Diligence</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Certification</div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-wave"><svg viewBox="0 0 1440 70" preserveAspectRatio="none"><path d="M0,40 C360,80 1080,0 1440,40 L1440,70 L0,70 Z" fill="#ffffff"/></svg></div>
    </div>

    <!-- Slide 2 – Tax Audit & Internal Audit -->
    <div class="hero-slide" style="background:#134E3A;">
      <div class="hero-slide-inner">
        <div class="hero-slide-left">
          <div class="hero-badge"><i class="bi bi-calculator-fill"></i> TAX AUDIT &amp; INTERNAL CONTROLS</div>
          <h1>Tax Audit <em>44AB</em><br>&amp; Internal Audit</h1>
          <p class="hero-slide-desc">Tax audit for businesses exceeding threshold limits, plus internal audit to strengthen controls, improve efficiency and mitigate risks.</p>
          <div class="hero-stats-row">
            <div class="hstat"><div class="hstat-num">100%</div><div class="hstat-label">Compliance</div></div>
            <div class="hstat"><div class="hstat-num">On Time</div><div class="hstat-label">Report Delivery</div></div>
            <div class="hstat"><div class="hstat-num">CA</div><div class="hstat-label">Certified Team</div></div>
          </div>
          <div class="hero-btns">
            <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> Discuss Your Audit</a>
            <a href="tel:+919876543210" class="btn-outline-w"><i class="bi bi-telephone-fill"></i> +91 98765 43210</a>
          </div>
        </div>
        <div class="hero-slide-right">
          <div class="hero-loan-card">
            <h6><i class="bi bi-check-circle-fill"></i> Why Choose Our Audit?</h6>
            <div class="hero-loan-grid">
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Experienced CAs</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Transparent Reporting</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> No Surprises</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> On‑Time Submission</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Ongoing Support</div>
              <div class="hero-loan-item"><i class="bi bi-check-lg"></i> Management Letter</div>
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
      <div class="strip-item"><i class="bi bi-journal-bookmark-fill"></i><span>Statutory Audit</span></div>
      <div class="strip-item"><i class="bi bi-calculator-fill"></i><span>Tax Audit</span></div>
      <div class="strip-item"><i class="bi bi-shield-fill-check"></i><span>Internal Audit</span></div>
      <div class="strip-item"><i class="bi bi-box-seam-fill"></i><span>Stock Audit</span></div>
      <div class="strip-item"><i class="bi bi-receipt-cutoff"></i><span>GST Audit</span></div>
      <div class="strip-item"><i class="bi bi-search"></i><span>Due Diligence</span></div>
      <div class="strip-item"><i class="bi bi-journal-bookmark-fill"></i><span>Statutory Audit</span></div>
      <div class="strip-item"><i class="bi bi-calculator-fill"></i><span>Tax Audit</span></div>
      <div class="strip-item"><i class="bi bi-shield-fill-check"></i><span>Internal Audit</span></div>
      <div class="strip-item"><i class="bi bi-box-seam-fill"></i><span>Stock Audit</span></div>
      <div class="strip-item"><i class="bi bi-receipt-cutoff"></i><span>GST Audit</span></div>
      <div class="strip-item"><i class="bi bi-search"></i><span>Due Diligence</span></div>
    </div>
  </div>

  <!-- Stats -->
  <div class="stats-sec">
    <div class="stats-inner">
      <div class="stat-card"><div class="stat-num">200<em>+</em></div><div class="stat-label">Statutory Audits</div></div>
      <div class="stat-card"><div class="stat-num">150<em>+</em></div><div class="stat-label">Tax Audits</div></div>
      <div class="stat-card"><div class="stat-num">50<em>+</em></div><div class="stat-label">Internal Audits</div></div>
      <div class="stat-card"><div class="stat-num">100%</div><div class="stat-label">Compliance</div></div>
      <div class="stat-card"><div class="stat-num">20<em>+</em></div><div class="stat-label">Years Experience</div></div>
    </div>
  </div>

  <!-- ===== Statutory Audit Section ===== -->
  <div class="audit-section" id="statutory">
    <div class="audit-inner">
      <div class="audit-grid">
        <div class="audit-left">
          <span class="s-label">External Audit</span>
          <h2>Statutory <em>Audit</em></h2>
          <div class="audit-underline"></div>
          <p class="audit-desc">We conduct statutory audits as per the Companies Act, 2013, ensuring a true and fair view of financial statements. Our approach is independent, risk‑based, and fully compliant with Standards on Auditing issued by ICAI.</p>
          <div class="audit-highlights">
            <div class="audit-highlight-box"><strong>All Companies</strong><span>Pvt / Public / Listed</span></div>
            <div class="audit-highlight-box"><strong>Annual</strong><span>Mandatory</span></div>
            <div class="audit-highlight-box"><strong>ICAI Standards</strong><span>Quality Control</span></div>
            <div class="audit-highlight-box"><strong>Digital</strong><span>Paperless</span></div>
          </div>
          <div class="audit-features">
            <h5><i class="bi bi-star-fill"></i> What We Deliver</h5>
            <div class="audit-feat-grid">
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Audit report with opinion</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> CARO reporting</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Internal financial controls review</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Management representation letter</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Audit documentation</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Suggestions for improvement</div>
            </div>
          </div>
          <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> Schedule a Statutory Audit</a>
        </div>
        <div class="audit-right">
          <div class="side-card">
            <h5><i class="bi bi-shield-fill-check"></i> Why Our Statutory Audit?</h5>
            <div class="side-item"><div class="side-check"><i class="bi bi-person-badge-fill"></i></div><div><p class="side-item-title">Experienced Auditor</p><p class="side-item-sub">Qualified CAs with industry knowledge</p></div></div>
            <div class="side-item"><div class="side-check"><i class="bi bi-clock-history"></i></div><div><p class="side-item-title">Timely Completion</p><p class="side-item-sub">Before AGM deadline</p></div></div>
            <div class="side-item"><div class="side-check"><i class="bi bi-graph-up-arrow"></i></div><div><p class="side-item-title">Adds Value</p><p class="side-item-sub">We highlight inefficiencies &amp; risks</p></div></div>
            <a href="contact.php" class="side-cta"><i class="bi bi-telephone-fill"></i> Talk to Auditor</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== Tax Audit Section ===== -->
  <div class="audit-section alt" id="tax-audit">
    <div class="audit-inner">
      <div class="audit-grid">
        <div class="audit-left">
          <span class="s-label">Income Tax</span>
          <h2>Tax <em>Audit</em> (Section 44AB)</h2>
          <div class="audit-underline"></div>
          <p class="audit-desc">We perform tax audits for businesses and professionals whose turnover exceeds prescribed limits. Our reports ensure full compliance with the Income Tax Act and provide a clear picture of your financials.</p>
          <div class="audit-highlights">
            <div class="audit-highlight-box"><strong>Applicable</strong><span>Business / Profession</span></div>
            <div class="audit-highlight-box"><strong>Forms</strong><span>3CA/3CB &amp; 3CD</span></div>
            <div class="audit-highlight-box"><strong>Deadline</strong><span>30th September</span></div>
            <div class="audit-highlight-box"><strong>Penalty Avoidance</strong><span>Timely Filing</span></div>
          </div>
          <div class="audit-features">
            <h5><i class="bi bi-star-fill"></i> Scope of Tax Audit</h5>
            <div class="audit-feat-grid">
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Verification of books of accounts</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Reporting of TDS/TCS compliance</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Clause‑wise reporting in Form 3CD</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Quantitative details</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Tax computation &amp; reconciliation</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Filing with ITR</div>
            </div>
          </div>
          <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> Get Tax Audit Done</a>
        </div>
        <div class="audit-right">
          <div class="side-card">
            <h5><i class="bi bi-shield-fill-check"></i> Why Us for Tax Audit?</h5>
            <div class="side-item"><div class="side-check"><i class="bi bi-person-check-fill"></i></div><div><p class="side-item-title">Expert Tax Auditors</p><p class="side-item-sub">CAs with deep tax law knowledge</p></div></div>
            <div class="side-item"><div class="side-check"><i class="bi bi-file-earmark-check-fill"></i></div><div><p class="side-item-title">Accurate Reporting</p><p class="side-item-sub">Every clause meticulously addressed</p></div></div>
            <div class="side-item"><div class="side-check"><i class="bi bi-shield-lock-fill"></i></div><div><p class="side-item-title">Penalty Protection</p><p class="side-item-sub">Avoid 0.5% of turnover penalty</p></div></div>
            <a href="contact.php" class="side-cta"><i class="bi bi-telephone-fill"></i> Talk to Tax Auditor</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== Internal Audit Section ===== -->
  <div class="audit-section" id="internal">
    <div class="audit-inner">
      <div class="audit-grid">
        <div class="audit-left">
          <span class="s-label">Management Assurance</span>
          <h2>Internal <em>Audit</em></h2>
          <div class="audit-underline"></div>
          <p class="audit-desc">Our internal audit services help you strengthen internal controls, improve operational efficiency, and safeguard assets. We design audit programs tailored to your business processes and risks.</p>
          <div class="audit-highlights">
            <div class="audit-highlight-box"><strong>Risk Based</strong><span>Customised scope</span></div>
            <div class="audit-highlight-box"><strong>Periodic</strong><span>Quarterly / Annual</span></div>
            <div class="audit-highlight-box"><strong>Report</strong><span>Detailed findings</span></div>
            <div class="audit-highlight-box"><strong>Follow‑up</strong><span>Action taken review</span></div>
          </div>
          <div class="audit-features">
            <h5><i class="bi bi-star-fill"></i> Areas Covered</h5>
            <div class="audit-feat-grid">
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Revenue &amp; expenditure cycle</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Inventory &amp; procurement</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Payroll &amp; HR</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Fixed assets verification</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Statutory compliance check</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Fraud risk assessment</div>
            </div>
          </div>
          <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> Enhance Your Controls</a>
        </div>
        <div class="audit-right">
          <div class="side-card">
            <h5><i class="bi bi-shield-fill-check"></i> Benefits of Internal Audit</h5>
            <div class="side-item"><div class="side-check"><i class="bi bi-lightning-charge-fill"></i></div><div><p class="side-item-title">Improved Efficiency</p><p class="side-item-sub">Identify bottlenecks &amp; wastage</p></div></div>
            <div class="side-item"><div class="side-check"><i class="bi bi-shield-check"></i></div><div><p class="side-item-title">Better Compliance</p><p class="side-item-sub">Stay ahead of regulations</p></div></div>
            <div class="side-item"><div class="side-check"><i class="bi bi-lock-fill"></i></div><div><p class="side-item-title">Safeguard Assets</p><p class="side-item-sub">Prevent misappropriation</p></div></div>
            <a href="contact.php" class="side-cta"><i class="bi bi-telephone-fill"></i> Discuss Internal Audit</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== Stock Audit & Due Diligence Section ===== -->
  <div class="audit-section alt" id="stock-due">
    <div class="audit-inner">
      <div class="audit-grid">
        <div class="audit-left">
          <span class="s-label">Specialised Audits</span>
          <h2>Stock <em>Audit</em> &amp; Due Diligence</h2>
          <div class="audit-underline"></div>
          <p class="audit-desc">We perform stock audits for banks and financial institutions, as well as financial and tax due diligence for mergers, acquisitions, and investments. Thorough, independent, and insightful.</p>
          <div class="audit-highlights">
            <div class="audit-highlight-box"><strong>Stock Audit</strong><span>For banks/NBFCs</span></div>
            <div class="audit-highlight-box"><strong>Due Diligence</strong><span>Buy‑side / Sell‑side</span></div>
            <div class="audit-highlight-box"><strong>Valuation</strong><span>Support</span></div>
            <div class="audit-highlight-box"><strong>Compliance</strong><span>RBI guidelines</span></div>
          </div>
          <div class="audit-features">
            <h5><i class="bi bi-star-fill"></i> Scope</h5>
            <div class="audit-feat-grid">
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Physical verification of stock</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Valuation &amp; ageing analysis</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Book‑to‑physical reconciliation</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Drawing power calculation</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Financial due diligence report</div>
              <div class="audit-feat-item"><i class="bi bi-check-circle-fill"></i> Tax due diligence</div>
            </div>
          </div>
          <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> Request Specialised Audit</a>
        </div>
        <div class="audit-right">
          <div class="side-card">
            <h5><i class="bi bi-shield-fill-check"></i> Why Choose Us?</h5>
            <div class="side-item"><div class="side-check"><i class="bi bi-bank2"></i></div><div><p class="side-item-title">Bank Empanelled</p><p class="side-item-sub">Approved by leading banks</p></div></div>
            <div class="side-item"><div class="side-check"><i class="bi bi-search"></i></div><div><p class="side-item-title">Deep Analysis</p><p class="side-item-sub">Insightful reporting</p></div></div>
            <a href="contact.php" class="side-cta"><i class="bi bi-telephone-fill"></i> Talk to Our Team</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CTA -->
  <div style="width:100vw;position:relative;left:50%;margin-left:-50vw;background:var(--black);padding:86px 0;overflow:hidden;text-align:center;">
    <h2 style="color:#FFFFFF;font-family:'Playfair Display',serif;font-size:clamp(1.8rem,3.5vw,2.8rem);">Ready for a <em style="color:var(--gold);">Reliable Audit</em>?</h2>
    <p style="color:rgba(255,255,255,0.90);max-width:500px;margin:16px auto 32px;font-size:0.95rem;opacity:1;">Contact us for a free consultation. Our CA team will ensure your audit is thorough, timely, and adds value.</p>
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
