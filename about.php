<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = 'About Us | ' . SITE_NAME;
$metaDescription = 'Learn about Aashish & Company – our history, values, and commitment to professional excellence in Dehradun.';
$bootstrapCssHref = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css';
$bootstrapIconsHref = 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css';
$googleFontsHref = 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600;700&family=Montserrat:wght@700;800;900&display=swap';
$bodyClass = 'about-page';
$extraHead = <<<'HTML'
<style>
    /* About‑specific overrides – elegant green/cream theme maintained */
    :root {
      --cream: #F1F5F9;
      --vanilla: #F8FAF7;
      --offwhite: #FFFFFF;
      --lightgreen: #1F6B52;
      --green: #D4A017;
      --deepolive: #134E3A;
      --text: #1E293B;
      --muted: #64748B;
      --border: #E2E8F0;
    }
    .about-page { background: var(--vanilla); color: var(--text); }
    .about-page .navbar { background: var(--vanilla) !important; border-bottom: 1px solid var(--border); }
    .about-page .navbar .nav-link { color: var(--deepolive) !important; }
    .about-page .navbar .nav-link:hover,
    .about-page .navbar .nav-link.active { color: var(--green) !important; }
    .about-page .navbar-toggler-icon { filter: invert(1) brightness(0); }
    .about-page .btn-outline-white {
      border: 1px solid rgba(255,255,255,0.35); color: #fff;
      transition: all 0.28s;
    }
    .about-page .btn-outline-white:hover { border-color: var(--green); color: var(--green); }

    /* Hero Section */
    .hero-single {
      min-height: 45vh; position: relative; display: flex; align-items: center;
      background: #134E3A;
      overflow: hidden;
    }
    .hero-wrap { position: relative; z-index: 2; width: 100%; padding: 110px 5vw 50px 10vw; }
    .hero-mini { display: inline-flex; align-items: center; gap: 10px; background: rgba(255,255,255,0.2); border: 1px solid rgba(255,255,255,0.2); backdrop-filter: blur(6px); padding: 8px 16px; border-radius: 999px; margin-bottom: 20px; color: #fff; font-size: .76rem; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; }
    .hero-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(2.2rem, 6.6vw, 5.2rem); font-weight: 700; line-height: 1.05;
      letter-spacing: -1px; color: #fff; margin-bottom: 22px;
    }
    .hero-title .accent { display: block; color: var(--lightgreen); font-weight: 700; }
    .hero-text { font-size: clamp(0.88rem, 1.4vw, 1rem); line-height: 1.9; color: #F8FAFC; max-width: 540px; margin-bottom: 32px; font-weight: 400; opacity: 1; }
    .hero-actions { display: flex; gap: 14px; flex-wrap: wrap; }
    .btn-soft { display: inline-flex; align-items: center; gap: 9px; background: var(--green); color: #fff; text-decoration: none; padding: 13px 28px; border-radius: 999px; font-size: .9rem; font-weight: 700; transition: .25s ease; }
    .btn-soft:hover { background: #48624E; color: #fff; transform: translateY(-2px); }
    .btn-outline-soft { display: inline-flex; align-items: center; gap: 9px; background: rgba(255,255,255,.1); backdrop-filter: blur(6px); color: #fff; text-decoration: none; padding: 12px 24px; border-radius: 999px; font-size: .9rem; font-weight: 700; border: 1px solid rgba(255,255,255,0.3); transition: .25s ease; }
    .btn-outline-soft:hover { background: rgba(255,255,255,.2); color: #fff; }

    /* Common */
    .section-pad { padding: 72px 5vw; }
    .bg-off { background: var(--vanilla); }
    .bg-white { background: #fff; }
    .sec-tag { display: inline-block; color: var(--deepolive); font-size: 0.7rem; font-weight: 700; letter-spacing: 2.5px; text-transform: uppercase; padding: 4px 14px; background: rgba(78,95,66,0.09); border-radius: 4px; margin-bottom: 10px; }
    .sec-title { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.8rem, 3vw, 2.6rem); font-weight: 700; line-height: 1.2; color: var(--text); }
    .t-olive { color: var(--deepolive); }
    .divider-line { width: 48px; height: 3px; background: var(--deepolive); border-radius: 3px; margin: 14px 0 26px; }
    .divider-line.center { margin-left: auto; margin-right: auto; }
    .sec-sub { font-size: 0.93rem; color: var(--muted); line-height: 1.78; font-weight: 500; }
    .sec-cta { display: inline-flex; align-items: center; gap: 8px; background: var(--green); color: #fff; font-weight: 700; font-size: 0.87rem; padding: 12px 26px; border-radius: 999px; text-decoration: none; margin-top: 20px; transition: .2s; }
    .sec-cta:hover { background: #48624E; color: #fff; transform: translateY(-2px); }
    .sec-cta.ghost { background: transparent; border: 1.5px solid var(--green); color: var(--green); }
    .sec-cta.ghost:hover { background: var(--deepolive); color: #fff; }

    /* Stats */
    .stats-strip { background: #fff; padding: 20px 5vw; border-bottom: 1px solid var(--border); }
    .stat-item { text-align: center; padding: 8px 0; }
    .stat-num { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.4rem, 2.5vw, 2rem); font-weight: 700; color: var(--deepolive); }
    .stat-label { font-size: 0.76rem; color: var(--muted); font-weight: 500; margin-top: 2px; }
    .stat-sep { width: 1px; background: var(--border); height: 36px; margin: auto; }

    /* About image */
    .about-img-transparent { position: relative; display: flex; align-items: center; justify-content: center; }
    .about-img-transparent img { width: 100%; max-width: 100%; height: auto; object-fit: contain; display: block; }
    .about-exp-badge { position: absolute; bottom: 10px; left: 10px; background: var(--deepolive); color: #fff; padding: 12px 18px; border-radius: 10px; font-weight: 800; line-height: 1.2; box-shadow: 0 6px 18px rgba(78,95,66,0.35); }
    .about-exp-badge span { font-size: 1.8rem; display: block; }
    .about-exp-badge small { font-size: 0.72rem; font-weight: 500; opacity: 0.85; }

    /* MV cards */
    .mv-item { display: flex; gap: 16px; align-items: flex-start; background: #fff; border: 1px solid var(--border); border-radius: 12px; padding: 22px 20px; margin-bottom: 14px; transition: box-shadow .2s; }
    .mv-item:hover { box-shadow: 0 8px 24px rgba(0,0,0,0.05); }
    .mv-icon-box { width: 48px; height: 48px; flex-shrink: 0; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; }
    .mv-icon-box.mission { background: var(--green); color: #fff; }
    .mv-icon-box.vision { background: #48624E; color: #fff; }
    .mv-icon-box.value { background: var(--cream); color: var(--green); }
    .mv-item h6 { font-weight: 800; font-size: 0.92rem; color: var(--text); margin-bottom: 5px; }
    .mv-item p { font-size: 0.82rem; color: var(--muted); line-height: 1.65; margin: 0; }

    /* Why cards */
    .why-card { display: flex; gap: 14px; align-items: flex-start; background: #fff; border: 1px solid var(--border); border-radius: 10px; padding: 20px 18px; margin-bottom: 14px; transition: box-shadow .2s; }
    .why-card:hover { box-shadow: 0 8px 24px rgba(0,0,0,0.05); }
    .why-icon { width: 44px; height: 44px; flex-shrink: 0; background: var(--green); color: #fff; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; }
    .why-card h6 { font-weight: 700; font-size: 0.88rem; color: var(--text); margin-bottom: 3px; }
    .why-card p { font-size: 0.81rem; color: var(--muted); margin: 0; line-height: 1.55; }

    /* Service mini cards */
    .svc-mini { background: var(--vanilla); border: 1px solid var(--border); border-radius: 12px; padding: 20px 16px; text-align: center; transition: box-shadow .2s, border-color .2s; }
    .svc-mini:hover { box-shadow: 0 6px 20px rgba(0,0,0,.05); border-color: var(--green); }
    .svc-mini-icon { width: 48px; height: 48px; background: var(--green); color: #fff; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin: 0 auto 10px; }
    .svc-mini h6 { font-weight: 700; font-size: .83rem; color: var(--text); margin-bottom: 4px; }
    .svc-mini p { font-size: .74rem; color: var(--muted); margin: 0; }

    /* Timeline */
    .tl-item { display: flex; gap: 18px; margin-bottom: 28px; }
    .tl-dot { width: 42px; height: 42px; flex-shrink: 0; background: var(--green); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: .85rem; font-weight: 800; box-shadow: 0 4px 14px rgba(0,0,0,0.1); }
    .tl-content { background: #fff; border: 1px solid var(--border); border-radius: 12px; padding: 18px 20px; flex: 1; }
    .tl-content h6 { font-weight: 800; font-size: .9rem; color: var(--text); margin-bottom: 4px; }
    .tl-content p { font-size: .8rem; color: var(--muted); margin: 0; line-height: 1.6; }
    .tl-year { display: inline-block; background: var(--cream); color: var(--green); font-size: .68rem; font-weight: 700; padding: 2px 10px; border-radius: 4px; margin-bottom: 6px; }

    /* Testimonials */
    .testi-card { background: #fff; border: 1px solid var(--border); border-radius: 12px; padding: 26px 22px; height: 100%; }
    .testi-stars { color: #B8960C; font-size: 0.85rem; margin-bottom: 10px; }
    .testi-text { font-size: 0.87rem; color: var(--text); line-height: 1.7; font-style: italic; margin-bottom: 18px; }
    .testi-author { display: flex; align-items: center; gap: 12px; }
    .testi-avatar { width: 42px; height: 42px; border-radius: 50%; background: var(--deepolive); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1rem; }
    .testi-name { font-weight: 700; font-size: 0.85rem; color: var(--text); }
    .testi-loc { font-size: 0.75rem; color: var(--muted); }

    /* Trust bar */
    .trust-bar { background: var(--deepolive); padding: 26px 5vw; }
    .trust-item { display: flex; align-items: center; gap: 12px; justify-content: center; }
    .trust-ico { font-size: 1.7rem; color: rgba(255,255,255,0.65); }
    .trust-item h6 { color: #fff; font-weight: 700; font-size: 0.87rem; margin: 0; }
    .trust-item p { color: #E2E8F0; font-size: 0.77rem; margin: 0; opacity: 1; }

    /* CTA */
    .cta-section { background: linear-gradient(120deg, var(--deepolive) 0%, #1F6B52 100%); padding: 68px 5vw; text-align: center; }
    .cta-section h2 { font-family: 'Cormorant Garamond', serif; font-size: clamp(1.5rem, 3.5vw, 2.4rem); font-weight: 700; color: #fff; margin-bottom: 12px; }
    .cta-section p { color: #F8FAFC; font-size: 0.95rem; max-width: 500px; margin: 0 auto 30px; font-weight: 400; opacity: 1; }
    .btn-cta-white { display: inline-flex; align-items: center; gap: 8px; background: #fff; color: var(--deepolive); font-weight: 700; font-size: 0.95rem; padding: 13px 32px; border-radius: 999px; text-decoration: none; margin: 5px; transition: .2s; }
    .btn-cta-white:hover { background: var(--cream); transform: translateY(-2px); }
    .btn-cta-ghost { display: inline-flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.12); color: #fff; font-weight: 600; font-size: 0.93rem; padding: 12px 26px; border-radius: 999px; text-decoration: none; border: 1px solid rgba(255,255,255,0.32); margin: 5px; transition: .2s; }
    .btn-cta-ghost:hover { background: rgba(255,255,255,0.2); color: #fff; }

    /* Contact */
    .contact-row { padding: 36px 5vw; background: #134E3A; }
    .ci-item { display: flex; align-items: flex-start; gap: 12px; }
    .ci-ico { width: 42px; height: 42px; flex-shrink: 0; background: rgba(255,255,255,0.08); color: rgba(255,255,255,0.65); border-radius: 8px; display: flex; align-items: center; justify-content: center; font-size: 1rem; }
    .ci-txt strong { color: #fff; font-size: 0.82rem; font-weight: 600; display: block; }
    .ci-txt span { color: #E2E8F0; font-size: 0.78rem; opacity: 1; }

    /* Responsive */
    @media(max-width: 991px) { .section-pad { padding: 56px 5vw; } }
    @media(max-width: 767px) {
      .hero-wrap { padding: 56px 6vw 70px; }
      .hero-title { font-size: clamp(1.9rem, 9vw, 3rem); line-height: 1.1; letter-spacing: -0.5px; }
      .hero-actions { flex-direction: column; gap: 10px; }
      .hero-actions a { justify-content: center; }
      .trust-item { flex-direction: column; text-align: center; gap: 6px; }
      .section-pad { padding: 48px 5vw; }
      .cta-section { padding: 48px 5vw; }
      .contact-row { padding: 28px 5vw; }
    }
  </style>
HTML;

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>
<!-- ===== HERO ===== -->
  <div class="breakout">
    <section class="hero-single">
      <div class="hero-wrap">
        <div class="hero-mini"><i class="bi bi-info-circle-fill"></i>&nbsp; About Aashish &amp; Company</div>
        <h1 class="hero-title">Your Trusted<br/><span class="accent">Chartered Accountants</span></h1>
        <p class="hero-text">Serving businesses and individuals in Dehradun and across India with ethical taxation, audit, and compliance services for over 20 years — with complete transparency.</p>
        <div class="hero-actions">
          <a href="contact.php" class="btn-soft"><i class="bi bi-send-fill"></i> Schedule Consultation</a>
          <a href="#our-story" class="btn-outline-soft"><i class="bi bi-arrow-down-circle"></i> Our Story</a>
        </div>
      </div>
    </section>
  </div>

  <!-- STATS -->
  <div class="breakout">
    <div class="stats-strip">
      <div class="row g-2 align-items-center justify-content-center">
        <div class="col-6 col-sm-3 col-md-2"><div class="stat-item"><div class="stat-num">500+</div><div class="stat-label">Clients Served</div></div></div>
        <div class="col-1 d-none d-md-block"><div class="stat-sep">&nbsp;</div></div>
        <div class="col-6 col-sm-3 col-md-2"><div class="stat-item"><div class="stat-num">20+</div><div class="stat-label">Years Experience</div></div></div>
        <div class="col-1 d-none d-md-block"><div class="stat-sep">&nbsp;</div></div>
        <div class="col-6 col-sm-3 col-md-2"><div class="stat-item"><div class="stat-num">10+</div><div class="stat-label">Services Offered</div></div></div>
        <div class="col-1 d-none d-md-block"><div class="stat-sep">&nbsp;</div></div>
        <div class="col-6 col-sm-3 col-md-2"><div class="stat-item"><div class="stat-num">100%</div><div class="stat-label">Client Satisfaction</div></div></div>
      </div>
    </div>
  </div>

  <!-- WHO WE ARE -->
  <div class="breakout" id="our-story">
    <section class="section-pad bg-white">
      <div class="row g-4 g-lg-5 align-items-center">
        <div class="col-12 col-lg-5">
          <div class="about-img-transparent">
            <img src="https://i.ibb.co/4Zvybndm/6.png" alt="Aashish & Company Office" style="width:100%;max-width:420px;"/>
            <div class="about-exp-badge"><span>20+</span><small>20+ Years of Trust</small></div>
          </div>
        </div>
        <div class="col-12 col-lg-7">
          <span class="sec-tag">Who We Are</span>
          <h2 class="sec-title mt-1"><span class="t-olive">Aashish &amp; Company</span> — Our Story</h2>
          <div class="divider-line">&nbsp;</div>
          <p style="color:var(--muted);font-size:.91rem;line-height:1.9;margin-bottom:14px;">Founded in 2003, Aashish &amp; Company is a professionally managed Chartered Accountant firm based in Dehradun, Uttarakhand. We are registered with the Institute of Chartered Accountants of India (ICAI) and have built a reputation for ethical practice, technical expertise, and personalized client service.</p>
          <p style="color:var(--muted);font-size:.91rem;line-height:1.9;margin-bottom:22px;">From income tax filing and GST compliance to statutory audits and company incorporation, we provide end-to-end financial solutions under one roof. Our team of experienced CAs, ACCAs, and company secretaries is committed to delivering accurate, timely, and fully compliant services.</p>
          <div class="row g-3">
            <div class="col-6 col-sm-3"><div style="background:rgba(78,95,66,0.07);border:1px solid var(--border);border-radius:10px;padding:14px 12px;text-align:center;"><strong style="font-family:'Cormorant Garamond',serif;font-size:1.3rem;color:var(--deepolive);display:block;">2003</strong><span style="font-size:.74rem;color:var(--muted);">Established</span></div></div>
            <div class="col-6 col-sm-3"><div style="background:rgba(78,95,66,0.07);border:1px solid var(--border);border-radius:10px;padding:14px 12px;text-align:center;"><strong style="font-family:'Cormorant Garamond',serif;font-size:1.3rem;color:var(--deepolive);display:block;">500+</strong><span style="font-size:.74rem;color:var(--muted);">Happy Clients</span></div></div>
            <div class="col-6 col-sm-3"><div style="background:rgba(78,95,66,0.07);border:1px solid var(--border);border-radius:10px;padding:14px 12px;text-align:center;"><strong style="font-family:'Cormorant Garamond',serif;font-size:1.3rem;color:var(--deepolive);display:block;">10+</strong><span style="font-size:.74rem;color:var(--muted);">Services</span></div></div>
            <div class="col-6 col-sm-3"><div style="background:rgba(78,95,66,0.07);border:1px solid var(--border);border-radius:10px;padding:14px 12px;text-align:center;"><strong style="font-family:'Cormorant Garamond',serif;font-size:1.3rem;color:var(--deepolive);display:block;">Dehradun</strong><span style="font-size:.74rem;color:var(--muted);">Head Office</span></div></div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- MISSION VISION VALUES -->
  <div class="breakout">
    <section class="section-pad bg-off">
      <div class="row g-5 align-items-center">
        <div class="col-12 col-lg-6">
          <span class="sec-tag">Our Foundation</span>
          <h2 class="sec-title mt-2">Mission, Vision <span class="t-olive">&amp; Values</span></h2>
          <div class="divider-line">&nbsp;</div>
          <div class="mv-item">
            <div class="mv-icon-box mission"><i class="bi bi-bullseye"></i></div>
            <div><h6>Our Mission</h6><p>To provide individuals and businesses with reliable, transparent, and professional chartered accountancy services that empower financial growth and compliance.</p></div>
          </div>
          <div class="mv-item">
            <div class="mv-icon-box vision"><i class="bi bi-eye-fill"></i></div>
            <div><h6>Our Vision</h6><p>To build long-term professional relationships through ethical and reliable services. in Dehradun and Uttarakhand, recognized for integrity, expertise, and unwavering commitment to client success.</p></div>
          </div>
          <div class="mv-item">
            <div class="mv-icon-box value"><i class="bi bi-heart-fill"></i></div>
            <div><h6>Our Core Values</h6><p>Integrity, accuracy, confidentiality, and a client‑first philosophy — these principles define every engagement and every relationship we build.</p></div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div style="background:rgba(78,95,66,0.05);border:1px solid var(--border);border-radius:16px;padding:32px 28px;">
            <div class="text-center mb-4">
              <div style="width:70px;height:70px;background:var(--deepolive);border-radius:16px;display:flex;align-items:center;justify-content:center;font-size:2rem;color:#fff;margin:0 auto 14px;"><i class="bi bi-award-fill"></i></div>
              <h4 style="font-family:'Cormorant Garamond',serif;font-weight:700;color:var(--text);font-size:1.1rem;">Why 500+ Clients Trust Us</h4>
              <p style="font-size:.83rem;color:var(--muted);margin:6px 0 0;">Real numbers, real results</p>
            </div>
            <div style="display:flex;flex-direction:column;gap:12px;">
              <div style="background:#fff;border:1px solid var(--border);border-radius:10px;padding:14px 18px;display:flex;justify-content:space-between;align-items:center;">
                <span style="font-size:.85rem;color:var(--text);font-weight:600;"><i class="bi bi-check-circle-fill" style="color:var(--green);margin-right:8px;"></i>ITRs Filed</span>
                <strong style="font-family:'Cormorant Garamond',serif;color:var(--deepolive);font-size:1rem;">3000+</strong>
              </div>
              <div style="background:#fff;border:1px solid var(--border);border-radius:10px;padding:14px 18px;display:flex;justify-content:space-between;align-items:center;">
                <span style="font-size:.85rem;color:var(--text);font-weight:600;"><i class="bi bi-check-circle-fill" style="color:var(--green);margin-right:8px;"></i>GST Returns Filed</span>
                <strong style="font-family:'Cormorant Garamond',serif;color:var(--deepolive);font-size:1rem;">2500+</strong>
              </div>
              <div style="background:#fff;border:1px solid var(--border);border-radius:10px;padding:14px 18px;display:flex;justify-content:space-between;align-items:center;">
                <span style="font-size:.85rem;color:var(--text);font-weight:600;"><i class="bi bi-check-circle-fill" style="color:var(--green);margin-right:8px;"></i>Audits Completed</span>
                <strong style="font-family:'Cormorant Garamond',serif;color:var(--deepolive);font-size:1rem;">400+</strong>
              </div>
              <div style="background:#fff;border:1px solid var(--border);border-radius:10px;padding:14px 18px;display:flex;justify-content:space-between;align-items:center;">
                <span style="font-size:.85rem;color:var(--text);font-weight:600;"><i class="bi bi-check-circle-fill" style="color:var(--green);margin-right:8px;"></i>Company Registrations</span>
                <strong style="font-family:'Cormorant Garamond',serif;color:var(--deepolive);font-size:1rem;">200+</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- OUR SERVICES MINI GRID -->
  <div class="breakout">
    <section class="section-pad bg-white">
      <div class="text-center mb-2"><span class="sec-tag">What We Offer</span></div>
      <div class="text-center">
        <h2 class="sec-title">Our <span class="t-olive">Core Services</span></h2>
        <div class="divider-line center">&nbsp;</div>
        <p class="sec-sub mx-auto mb-5" style="max-width:560px;">From taxation to audits, ROC to advisory — everything under one roof.</p>
      </div>
      <div class="row g-3">
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-mini"><div class="svc-mini-icon" style="background:#F8F7F2; border:1px solid #DDE5DD; color:var(--icon-taxation, #D97706);"><i class="bi bi-receipt"></i></div><h6>Income Tax Filing</h6><p>ITR 1-7, Tax Audit, TDS</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-mini"><div class="svc-mini-icon" style="background:#F8F7F2; border:1px solid #DDE5DD; color:var(--icon-taxation, #D97706);"><i class="bi bi-file-earmark-text"></i></div><h6>GST Services</h6><p>Registration, Returns, Audit</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-mini"><div class="svc-mini-icon" style="background:#F8F7F2; border:1px solid #DDE5DD; color:var(--icon-compliance, #5D7C63);"><i class="bi bi-building"></i></div><h6>Company Registration</h6><p>Pvt Ltd, LLP, OPC</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-mini"><div class="svc-mini-icon" style="background:#F8F7F2; border:1px solid #DDE5DD; color:var(--icon-audit, #3B82F6);"><i class="bi bi-clipboard-check"></i></div><h6>Audit & Assurance</h6><p>Statutory, Internal, Tax Audit</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-mini"><div class="svc-mini-icon" style="background:#F8F7F2; border:1px solid #DDE5DD; color:var(--icon-compliance, #5D7C63);"><i class="bi bi-journal-check"></i></div><h6>ROC Compliance</h6><p>Annual Filing, Forms, Secretarial</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-mini"><div class="svc-mini-icon" style="background:#F8F7F2; border:1px solid #DDE5DD; color:var(--icon-taxation, #D97706);"><i class="bi bi-bar-chart-line"></i></div><h6>Tax Planning</h6><p>Strategic Tax Advisory</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-mini"><div class="svc-mini-icon" style="background:#F8F7F2; border:1px solid #DDE5DD; color:var(--icon-financial, #C8A977);"><i class="bi bi-book-half"></i></div><h6>Accounting</h6><p>Bookkeeping & Financial Statements</p></div></div>
      <div class="col-6 col-md-4 col-lg-3"><div class="svc-mini"><div class="svc-mini-icon" style="background:#F8F7F2; border:1px solid #DDE5DD; color:var(--icon-advisory, #14B8A6);"><i class="bi bi-graph-up"></i></div><h6>Business Advisory</h6><p>Startup & Financial Consulting</p></div></div>
      </div>
    </section>
  </div>

  <!-- JOURNEY TIMELINE -->
  <div class="breakout">
    <section class="section-pad bg-off">
      <div class="row g-5 align-items-start">
        <div class="col-12 col-lg-5">
          <span class="sec-tag">Our Journey</span>
          <h2 class="sec-title mt-2">How We <span class="t-olive">Grew Over</span> the Years</h2>
          <div class="divider-line">&nbsp;</div>
          <p style="color:var(--muted);font-size:.91rem;line-height:1.9;margin-bottom:24px;">From a small practice in Dehradun to a recognized CA firm serving clients across India — here is our story.</p>
          <a class="btn-soft" href="contact.php"><i class="bi bi-send-fill"></i> Join Our Journey</a>
        </div>
        <div class="col-12 col-lg-7">
          <div class="tl-item">
        <div><div class="tl-dot" style="background:#F8F7F2; border:2px solid #5D7C63; color:#5D7C63 !important;"><i class="bi bi-flag-fill"></i></div></div>
            <div class="tl-content"><div class="tl-year">2003</div><h6>Foundation in Dehradun</h6><p>Aashish &amp; Company was established as a small practice focusing on income tax and accounting for local businesses.</p></div>
          </div>
          <div class="tl-item">
        <div><div class="tl-dot" style="background:#F8F7F2; border:2px solid #5D7C63; color:#5D7C63 !important;"><i class="bi bi-award-fill"></i></div></div>
            <div class="tl-content"><div class="tl-year">2008</div><h6>Expansion to Audits</h6><p>Added statutory audit and tax audit services. Became empanelled with leading banks for concurrent audits.</p></div>
          </div>
          <div class="tl-item">
        <div><div class="tl-dot" style="background:#F8F7F2; border:2px solid #5D7C63; color:#5D7C63 !important;"><i class="bi bi-building-fill-up"></i></div></div>
            <div class="tl-content"><div class="tl-year">2014</div><h6>GST &amp; Compliance Wing</h6><p>Launched dedicated GST and ROC compliance verticals. Assisted dozens of companies with smooth transition into GST regime.</p></div>
          </div>
          <div class="tl-item">
        <div><div class="tl-dot" style="background:#F8F7F2; border:2px solid #5D7C63; color:#5D7C63 !important;"><i class="bi bi-globe-central-south-asia"></i></div></div>
            <div class="tl-content"><div class="tl-year">2020 – Present</div><h6>500+ Clients &amp; Pan‑India Reach</h6><p>Today, we serve over 500 clients across multiple states, offering a full spectrum of CA services with a team of seasoned professionals.</p></div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- WHY CHOOSE US -->
  <div class="breakout" id="why">
    <section class="section-pad bg-white">
      <div class="row g-5 align-items-center">
        <div class="col-lg-5 order-lg-2">
          <div style="background:rgba(78,95,66,0.05);border:1px solid var(--border);border-radius:16px;padding:32px 20px;text-align:center;">
            <img src="<?php echo e(ASSETS_URL . '/images/about-illustration.svg'); ?>" alt="Why Choose Us" onerror="this.style.display='none'" style="width:100%;max-width:260px;"/>
            <div style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;font-weight:700;color:var(--text);margin-top:16px;">Why <span class="t-olive">Choose</span> Us?</div>
            <div style="font-size:0.8rem;color:var(--muted);margin-top:6px;">500+ Clients Trust Us — Here's Why</div>
            <a class="sec-cta mt-3" href="contact.php"><i class="bi bi-chat-dots-fill"></i> Talk to Expert</a>
          </div>
        </div>
        <div class="col-lg-7 order-lg-1">
          <span class="sec-tag">Why Choose Us</span>
          <h2 class="sec-title mt-2"><span class="t-dark">Reasons to Choose</span><br/><span class="t-olive">Aashish &amp; Company</span></h2>
          <div class="divider-line">&nbsp;</div>
      <div class="why-card"><div class="why-icon" style="background:#EEF3ED; border:1px solid #DDE5DD; color:#5D7C63;"><i class="bi bi-rocket-takeoff"></i></div><div><h6>Fast &amp; Hassle-Free Process</h6><p>From document collection to filing — quick turnaround with zero errors. We handle all compliance so you can focus on your business.</p></div></div>
      <div class="why-card"><div class="why-icon" style="background:#EEF3ED; border:1px solid #DDE5DD; color:#5D7C63;"><i class="bi bi-award"></i></div><div><h6>500+ Satisfied Clients</h6><p>Two decades of experience serving individuals, MSMEs, and corporates with reliable and ethical CA services.</p></div></div>
      <div class="why-card"><div class="why-icon" style="background:#EEF3ED; border:1px solid #DDE5DD; color:#5D7C63;"><i class="bi bi-shield-check"></i></div><div><h6>Ethical &amp; ICAI Compliant</h6><p>Strict adherence to ICAI Code of Ethics — no false promises, no hidden charges. Complete transparency in every engagement.</p></div></div>
      <div class="why-card"><div class="why-icon" style="background:#EEF3ED; border:1px solid #DDE5DD; color:#5D7C63;"><i class="bi bi-globe2"></i></div><div><h6>Local Presence, Pan‑India Service</h6><p>Our head office is in Dehradun, but we serve clients across India with the same dedication and promptness.</p></div></div>
        </div>
      </div>
    </section>
  </div>

  <!-- TESTIMONIALS -->
  <div class="breakout">
    <section class="section-pad bg-off">
      <div class="text-center mb-2"><span class="sec-tag">Client Reviews</span></div>
      <div class="text-center">
        <h2 class="sec-title"><span class="t-dark">What Our</span> <span class="t-olive">Clients Say</span></h2>
        <div class="divider-line center">&nbsp;</div>
        <p class="sec-sub mx-auto mb-5" style="max-width:500px;">Real experiences from real clients — our greatest reward.</p>
      </div>
      <div class="row g-4">
        <div class="col-12 col-md-4">
          <div class="testi-card">
            <div class="testi-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
            <p class="testi-text">"Aashish & Company handled our ITR filing and GST returns for the last 4 years. Their team is professional, accurate, and always available. Professional CA in Dehradun!"</p>
            <div class="testi-author"><div class="testi-avatar">V</div><div><div class="testi-name">Vikram Joshi</div><div class="testi-loc">Dehradun, UK</div></div></div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="testi-card">
            <div class="testi-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
            <p class="testi-text">"We incorporated our Pvt Ltd company through Aashish & Company. The process was seamless, and they took care of every compliance detail. Truly a one‑stop solution."</p>
            <div class="testi-author"><div class="testi-avatar">S</div><div><div class="testi-name">Suresh Rawat</div><div class="testi-loc">Haridwar, UK</div></div></div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="testi-card">
            <div class="testi-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i></div>
            <p class="testi-text">"Their tax audit and internal audit services are top‑notch. The reports are thorough, and they provided excellent insights for our business. Trustworthy CA firm."</p>
            <div class="testi-author"><div class="testi-avatar">M</div><div><div class="testi-name">Meena Kapoor</div><div class="testi-loc">Rishikesh, UK</div></div></div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- TRUST BAR -->
  <div class="breakout">
    <div class="trust-bar">
      <div class="row g-3 g-md-4 justify-content-center">
        <div class="col-6 col-md-3"><div class="trust-item"><div class="trust-ico"><i class="bi bi-shield-fill-check"></i></div><div><h6>Ethical Practice</h6><p>ICAI Code of Ethics</p></div></div></div>
        <div class="col-6 col-md-3"><div class="trust-item"><div class="trust-ico"><i class="bi bi-headset"></i></div><div><h6>Dedicated Support</h6><p>Expert team always available</p></div></div></div>
        <div class="col-6 col-md-3"><div class="trust-item"><div class="trust-ico"><i class="bi bi-patch-check-fill"></i></div><div><h6>Registered Firm</h6><p>ICAI Reg. No. 789012</p></div></div></div>
        <div class="col-6 col-md-3"><div class="trust-item"><div class="trust-ico"><i class="bi bi-people-fill"></i></div><div><h6>500+ Clients</h6><p>Trusted across India</p></div></div></div>
      </div>
    </div>
  </div>

  <!-- CTA -->
  <div class="breakout">
    <section class="cta-section">
      <h2>Ready to Work With Us?</h2>
      <p>Income Tax, GST, Audit, Company Registration or any CA service — get in touch with us today. Free consultation, ethical practice guaranteed.</p>
      <a href="contact.php" class="btn-cta-white" style="color:#111827 !important;"><i class="bi bi-send-fill" style="color:#111827 !important;"></i> Get Free Consultation</a>
      <a href="tel:+911234567890" class="btn-cta-ghost"><i class="bi bi-telephone-fill"></i> Call Now</a>
    </section>
  </div>

  <!-- CONTACT ROW -->
  <div class="breakout">
    <div class="contact-row" style="background: #1F2937;">
      <div class="row g-3 g-md-4 justify-content-center">
        <div class="col-12 col-sm-6 col-lg-3"><div class="ci-item"><div class="ci-ico" style="background:rgba(255,255,255,0.08); color:#A8C5A2 !important;"><i class="bi bi-geo-alt-fill"></i></div><div class="ci-txt"><strong style="color:#FFFFFF !important;">Address</strong><span style="color:#F8FAFC !important; opacity:1 !important;">123, Rajpur Road, Dehradun – 248001, Uttarakhand</span></div></div></div>
        <div class="col-12 col-sm-6 col-lg-3"><div class="ci-item"><div class="ci-ico" style="background:rgba(255,255,255,0.08); color:#A8C5A2 !important;"><i class="bi bi-telephone-fill"></i></div><div class="ci-txt"><strong style="color:#FFFFFF !important;">Mobile</strong><span style="color:#F8FAFC !important; opacity:1 !important;">+91 98765 43210</span></div></div></div>
        <div class="col-12 col-sm-6 col-lg-3"><div class="ci-item"><div class="ci-ico" style="background:rgba(255,255,255,0.08); color:#A8C5A2 !important;"><i class="bi bi-envelope-fill"></i></div><div class="ci-txt"><strong style="color:#FFFFFF !important;">Email</strong><a href="mailto:contact@aashishandco.in" style="color:#F8FAFC !important; opacity:1 !important; text-decoration:none;">contact@aashishandco.in</a></div></div></div>
        <div class="col-12 col-sm-6 col-lg-3"><div class="ci-item"><div class="ci-ico" style="background:rgba(255,255,255,0.08); color:#A8C5A2 !important;"><i class="bi bi-globe2"></i></div><div class="ci-txt"><strong style="color:#FFFFFF !important;">Website</strong><a href="http://www.aashishandco.in" target="_blank" style="color:#F8FAFC !important; opacity:1 !important; text-decoration:none;">www.aashishandco.in</a></div></div></div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo e(ASSETS_URL . '/js/main.js'); ?>"></script>
<?php include __DIR__ . '/includes/footer.php'; ?>
