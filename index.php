<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = 'Premium CA Services | ' . SITE_NAME;
$metaDescription = 'Professional Tax, Audit & Business Advisory Services. Helping businesses and individuals navigate taxation, compliance, and financial requirements.';
$bootstrapCssHref = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css';
$bootstrapIconsHref = 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css';
$googleFontsHref = 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600&family=Cinzel:wght@400;600;700&display=swap';

$extraHead = <<<'EXTRAHEAD'

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<style>
/* =============================================
   ROOT TOKENS — GREEN + GOLD PREMIUM THEME
   ============================================= */
:root {
    --g-900: #0B2A1F;
    --g-800: #0F3D2C;
    --g-700: #145239;
    --g-600: #1A6847;
    --g-500: #217A53;
    --g-400: #2E9E6E;
    --g-100: #D6EFE5;
    --g-50:  #EEF8F3;

    --gold-dark:  #8A6200;
    --gold:       #B8860B;
    --gold-mid:   #D4A017;
    --gold-light: #F0C040;
    --gold-pale:  #FBF0D0;

    --ink:   #0E1C16;
    --white: #FFFFFF;
    --off:   #F5F7F5;
    --muted: #5A6B63;
    --border: rgba(26, 104, 71, 0.14);

    --font-display: "Cormorant Garamond", Georgia, serif;
    --font-label:   "Cinzel", serif;
    --font-body:    "DM Sans", sans-serif;

    --radius-sm: 4px;
    --radius-md: 8px;
    --radius-lg: 16px;

    --shadow-card:  0 2px 24px rgba(11,42,31,0.07);
    --shadow-lift:  0 8px 40px rgba(11,42,31,0.13);
    --shadow-deep:  0 20px 60px rgba(11,42,31,0.18);

    --transition: 0.35s cubic-bezier(0.4, 0, 0.2, 1);
}

/* =============================================
   BASE
   ============================================= */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }
body {
    font-family: var(--font-body);
    color: var(--ink);
    background: var(--white);
    line-height: 1.75;
    overflow-x: hidden;
    -webkit-font-smoothing: antialiased;
}
h1, h2, h3, h4, h5, h6 {
    font-family: var(--font-display);
    font-weight: 600;
    line-height: 1.2;
    color: var(--ink);
}
p { color: var(--muted); }
a { text-decoration: none; color: inherit; }
img { display: block; width: 100%; }

.section-pad { padding: 110px 0; }
.section-pad-sm { padding: 80px 0; }

/* Label above headings */
.eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-family: var(--font-label);
    font-size: 0.72rem;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 18px;
}
.eyebrow::before, .eyebrow::after {
    content: "";
    display: inline-block;
    width: 28px;
    height: 1px;
    background: var(--gold-mid);
}

.display-heading {
    font-size: clamp(2.4rem, 4.5vw, 3.8rem);
    font-weight: 600;
    letter-spacing: -0.5px;
}
.display-heading em {
    font-style: italic;
    color: var(--g-600);
}

/* =============================================
   BUTTONS
   ============================================= */
.btn-gold {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: var(--gold-mid);
    color: #0B2A1F;
    font-family: var(--font-label);
    font-size: 0.72rem;
    font-weight: 600;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    padding: 15px 34px;
    border-radius: var(--radius-sm);
    border: none;
    cursor: pointer;
    transition: var(--transition);
    position: relative;
    overflow: hidden;
}
.btn-gold::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(255,255,255,0);
    transition: var(--transition);
}
.btn-gold:hover {
    background: var(--gold-light);
    color: var(--ink);
    transform: translateY(-3px);
    box-shadow: 0 12px 30px rgba(184,134,11,0.3);
}
.btn-ghost-white {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: transparent;
    color: var(--white);
    font-family: var(--font-label);
    font-size: 0.72rem;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 14px 28px;
    border-radius: var(--radius-sm);
    border: 1.5px solid rgba(255,255,255,0.9);
    cursor: pointer;
    transition: var(--transition);
    white-space: nowrap;
    min-width: 160px;
    justify-content: center;
}
.btn-ghost-white:hover {
    background: rgba(255,255,255,0.12);
    border-color: rgba(255,255,255,0.9);
    color: var(--white);
    transform: translateY(-3px);
}
.btn-ghost-green {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: transparent;
    color: var(--g-600);
    font-family: var(--font-label);
    font-size: 0.72rem;
    font-weight: 600;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    padding: 14px 34px;
    border-radius: var(--radius-sm);
    border: 1.5px solid var(--g-600);
    cursor: pointer;
    transition: var(--transition);
}
.btn-ghost-green:hover {
    background: var(--g-600);
    color: var(--white);
    transform: translateY(-3px);
}

/* =============================================
   HERO SECTION
   ============================================= */
#hero {
    position: relative;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    overflow: hidden;
}
.hero-video-wrap {
    position: absolute;
    inset: 0;
    z-index: 0;
}
.hero-video-wrap video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        160deg,
        rgba(11,42,31,0.88) 0%,
        rgba(11,42,31,0.65) 55%,
        rgba(11,42,31,0.85) 100%
    );
    z-index: 1;
}
/* Decorative gold line */
.hero-overlay::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, transparent, var(--gold-mid), transparent);
}
.hero-inner {
    position: relative;
    z-index: 2;
    padding: 0 0 80px;
}
.hero-kicker {
    font-family: var(--font-label);
    font-size: 0.72rem;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: var(--gold-light);
    margin-bottom: 24px;
    display: flex;
    align-items: center;
    gap: 14px;
}
.hero-kicker::before {
    content: "";
    display: inline-block;
    width: 40px;
    height: 1px;
    background: var(--gold-mid);
}
.hero-title {
    font-family: var(--font-display);
    font-size: clamp(2.8rem, 5vw, 4.8rem);
    font-weight: 700;
    color: #FFFFFF;
    line-height: 1.12;
    margin-bottom: 28px;
    letter-spacing: -0.5px;
}
.hero-title em {
    font-style: italic;
    color: var(--gold-light);
}
.hero-sub {
    font-size: 1.05rem;
    color: rgba(255,255,255,0.95);
    max-width: 560px;
    line-height: 1.8;
    margin-bottom: 44px;
    font-weight: 400;
}
.hero-cta-row {
    display: flex;
    align-items: center;
    gap: 16px;
    flex-wrap: wrap;
}


/* =============================================
   STATS STRIP
   ============================================= */
.stats-strip {
    background: var(--g-900);
    border-top: 1px solid rgba(212,160,23,0.25);
    border-bottom: 1px solid rgba(212,160,23,0.25);
    padding: 0;
}

/* Ensure strong contrast on stats strip */
.stats-strip .stat-num { color: #F8FAF7 !important; }
.stats-strip .stat-label { color: rgba(248,250,247,0.85) !important; font-weight: 600; }
.stats-strip .stat-item { background: rgba(255,255,255,0.01); }
.stats-strip .container { max-width: 900px; }
.stat-item {
    padding: 22px 16px;
    text-align: center;
    position: relative;
}
.stat-item + .stat-item::before {
    content: "";
    position: absolute;
    left: 0;
    top: 25%;
    height: 50%;
    width: 1px;
    background: rgba(212,160,23,0.2);
}
.stat-num {
    font-family: var(--font-display);
    font-size: 2rem;
    font-weight: 700;
    color: #FFFFFF;
    line-height: 1;
    margin-bottom: 4px;
}
.stat-label {
    font-family: var(--font-label);
    font-size: 0.6rem;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: rgba(255,255,255,0.75);
}

/* =============================================
   ABOUT SECTION
   ============================================= */
#about { background: var(--white); }
.about-img-frame {
    position: relative;
}
.about-img-frame .img-main {
    border-radius: var(--radius-md);
    overflow: hidden;
    box-shadow: var(--shadow-deep);
    aspect-ratio: 4/5;
    object-fit: cover;
    width: 100%;
}
/* Gold corner accent */
.about-img-frame::before {
    content: "";
    position: absolute;
    top: -16px;
    left: -16px;
    width: 90px;
    height: 90px;
    border-top: 3px solid var(--gold-mid);
    border-left: 3px solid var(--gold-mid);
    border-radius: 2px;
    z-index: -1;
}
.about-img-frame::after {
    content: "";
    position: absolute;
    bottom: -16px;
    right: -16px;
    width: 90px;
    height: 90px;
    border-bottom: 3px solid var(--gold-mid);
    border-right: 3px solid var(--gold-mid);
    border-radius: 2px;
    z-index: -1;
}
.icai-badge {
    position: absolute;
    bottom: 30px;
    right: -20px;
    background: var(--g-900);
    border: 1px solid rgba(212,160,23,0.4);
    border-radius: var(--radius-md);
    padding: 16px 22px;
    text-align: center;
    z-index: 2;
    box-shadow: var(--shadow-lift);
}
.icai-badge-num {
    font-family: var(--font-display);
    font-size: 2rem;
    color: var(--gold-light);
    font-weight: 700;
    line-height: 1;
    margin-bottom: 4px;
}
.icai-badge-text {
    font-family: var(--font-label);
    font-size: 0.58rem;
    letter-spacing: 2px;
    color: rgba(255,255,255,0.9);
    text-transform: uppercase;
}
.about-check-list {
    list-style: none;
    padding: 0;
    margin: 32px 0 40px;
}
.about-check-list li {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    margin-bottom: 18px;
    font-size: 0.97rem;
    color: var(--muted);
}
.about-check-list li::before {
    content: "";
    width: 20px;
    height: 20px;
    min-width: 20px;
    border-radius: 50%;
    background: var(--g-50);
    border: 1.5px solid var(--g-400);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 2px;
    background-image: url("data:image/svg+xml,%3Csvg xmlns=%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27 viewBox=%270 0 16 16%27 fill=%27%231A6847%27%3E%3Cpath d=%27M13.3 3.3L6 10.6 2.7 7.3l-1 1L6 12.6l8.3-8.3z%27%2F%3E%3C%2Fsvg%3E");
    background-size: 11px;
    background-repeat: no-repeat;
    background-position: center;
}

/* =============================================
   SERVICES SECTION
   ============================================= */
#services { background: var(--off); }
.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
    gap: 24px;
}
.svc-card {
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: var(--radius-md);
    padding: 40px 32px;
    position: relative;
    overflow: hidden;
    transition: var(--transition);
    cursor: default;
}
.svc-card::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--gold), var(--gold-light));
    transition: width 0.4s ease;
}
.svc-card:hover {
    box-shadow: var(--shadow-lift);
    transform: translateY(-6px);
    border-color: transparent;
}
.svc-card:hover::after { width: 100%; }
.svc-icon-wrap {
    width: 58px;
    height: 58px;
    background: var(--g-50);
    border: 1px solid var(--border);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 28px;
    transition: var(--transition);
}
.svc-card:hover .svc-icon-wrap {
    background: var(--g-800);
    border-color: transparent;
}
.svc-icon-wrap i {
    font-size: 1.6rem;
    color: var(--g-600);
    transition: var(--transition);
}
.svc-card:hover .svc-icon-wrap i { color: var(--gold-light); }
.svc-title {
    font-size: 1.2rem;
    margin-bottom: 12px;
    color: var(--ink);
}
.svc-desc { font-size: 0.9rem; line-height: 1.7; }
.svc-arrow {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-family: var(--font-label);
    font-size: 0.65rem;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: var(--g-600);
    margin-top: 20px;
    opacity: 0;
    transform: translateX(-8px);
    transition: var(--transition);
}
.svc-card:hover .svc-arrow { opacity: 1; transform: translateX(0); }

/* =============================================
   WHY CHOOSE US
   ============================================= */
#why { background: var(--g-900); color: var(--white); position: relative; overflow: hidden; }
#why::before {
    content: "";
    position: absolute;
    top: -200px;
    right: -200px;
    width: 600px;
    height: 600px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(26,104,71,0.4) 0%, transparent 70%);
    pointer-events: none;
}
#why .eyebrow { color: var(--gold-light); }
#why .eyebrow::before, #why .eyebrow::after { background: var(--gold); }
#why h2 { color: var(--white); }
#why h2 em { color: var(--gold-light); }
.why-feature {
    display: flex;
    gap: 22px;
    align-items: flex-start;
    padding: 28px;
    border: 1px solid rgba(212,160,23,0.15);
    border-radius: var(--radius-md);
    margin-bottom: 20px;
    background: rgba(255,255,255,0.03);
    transition: var(--transition);
}
.why-feature:hover {
    border-color: rgba(212,160,23,0.4);
    background: rgba(255,255,255,0.06);
    transform: translateX(8px);
}
.why-icon {
    width: 52px;
    height: 52px;
    min-width: 52px;
    border-radius: var(--radius-sm);
    background: rgba(212,160,23,0.12);
    border: 1px solid rgba(212,160,23,0.25);
    display: flex;
    align-items: center;
    justify-content: center;
}
.why-icon i { font-size: 1.4rem; color: var(--gold-light); }
.why-feature h5 {
    font-size: 1.05rem;
    color: var(--white);
    margin-bottom: 6px;
}
.why-feature p { font-size: 0.88rem; color: rgba(255,255,255,0.55); margin: 0; }

/* =============================================
   INDUSTRIES
   ============================================= */
#industries { background: var(--white); }
.industry-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}
.ind-card {
    border: 1px solid var(--border);
    border-radius: var(--radius-md);
    padding: 30px 20px;
    text-align: center;
    transition: var(--transition);
    cursor: default;
    background: var(--white);
}
.ind-card:hover {
    background: var(--g-900);
    border-color: var(--g-900);
    transform: translateY(-4px);
    box-shadow: var(--shadow-lift);
}
.ind-card i {
    font-size: 2rem;
    color: var(--g-600);
    display: block;
    margin-bottom: 14px;
    transition: var(--transition);
}
.ind-card:hover i { color: var(--gold-light); }
.ind-card h6 {
    font-size: 0.9rem;
    font-family: var(--font-body);
    font-weight: 600;
    color: var(--ink);
    margin: 0;
    transition: var(--transition);
}
.ind-card:hover h6 { color: var(--white); }

/* =============================================
   PROCESS SECTION
   ============================================= */
#process { background: var(--g-50); }
.process-row {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 0;
    position: relative;
}
.process-row::before {
    content: "";
    position: absolute;
    top: 42px;
    left: 12.5%;
    right: 12.5%;
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--gold-mid), transparent);
}
.proc-step { text-align: center; padding: 0 20px; position: relative; z-index: 1; }
.proc-num {
    width: 84px;
    height: 84px;
    border-radius: 50%;
    border: 1.5px solid var(--gold-mid);
    background: var(--white);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 28px;
    font-family: var(--font-display);
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--g-700);
    box-shadow: 0 0 0 10px var(--g-50);
    transition: var(--transition);
}
.proc-step:hover .proc-num {
    background: var(--g-900);
    color: var(--gold-light);
    border-color: var(--gold);
}
.proc-step h5 { font-size: 1.1rem; margin-bottom: 10px; }
.proc-step p { font-size: 0.88rem; }
@media (max-width: 768px) {
    .process-row { grid-template-columns: 1fr 1fr; }
    .process-row::before { display: none; }
    .proc-step { margin-bottom: 40px; }
}

/* =============================================
   COUNTER SECTION
   ============================================= */
#counters {
    background: linear-gradient(135deg, var(--g-800) 0%, var(--g-900) 100%);
    padding: 70px 0;
    position: relative;
    overflow: hidden;
    color: #FFFFFF;
}
#counters::before {
    content: "";
    position: absolute;
    bottom: -100px;
    left: -100px;
    width: 400px;
    height: 400px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(212,160,23,0.08) 0%, transparent 70%);
}
.cnt-item { text-align: center; }
.cnt-num {
    font-family: var(--font-display);
    font-size: 4rem;
    font-weight: 700;
    color: #FFFFFF;
    line-height: 1;
    margin-bottom: 10px;
    text-shadow: 0 2px 16px rgba(255,255,255,0.15);
}
.cnt-divider {
    width: 30px;
    height: 2px;
    background: var(--gold-mid);
    margin: 12px auto;
    border-radius: 2px;
}
.cnt-label {
    font-family: var(--font-label);
    font-size: 0.68rem;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: rgba(255,255,255,0.95);
}

/* =============================================
   TEAM SECTION
   ============================================= */
#team { background: var(--off); }
.team-content p { color: var(--muted); line-height: 1.8; margin-bottom: 16px; }
.principal-card {
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-card);
}
.principal-photo {
    width: 100%;
    aspect-ratio: 3/4;
    object-fit: cover;
}
.principal-info {
    padding: 28px 30px;
    border-top: 3px solid var(--gold-mid);
}
.principal-name {
    font-size: 1.5rem;
    margin-bottom: 4px;
}
.principal-designation {
    font-family: var(--font-label);
    font-size: 0.65rem;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 14px;
}
.principal-qual {
    font-size: 0.85rem;
    color: var(--muted);
}

/* =============================================
   GALLERY
   ============================================= */
#gallery { background: var(--white); }
.gallery-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-template-rows: 300px 300px;
    gap: 16px;
}
.g-item {
    border-radius: var(--radius-md);
    overflow: hidden;
    position: relative;
}
.g-item.tall { grid-row: 1 / 3; }
.g-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}
.g-item:hover img { transform: scale(1.06); }
.g-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(11,42,31,0.7) 0%, transparent 50%);
    opacity: 0;
    transition: opacity 0.4s ease;
}
.g-item:hover .g-overlay { opacity: 1; }
@media (max-width: 768px) {
    .gallery-grid { grid-template-columns: 1fr; grid-template-rows: auto; }
    .g-item.tall { grid-row: auto; }
    .g-item { height: 220px; }
}

/* =============================================
   TESTIMONIALS
   ============================================= */
#testimonials { background: var(--g-50); }
.testi-card {
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: var(--radius-md);
    padding: 40px;
    margin: 12px;
    position: relative;
    box-shadow: var(--shadow-card);
}
.testi-card::before {
    content: "\201C";
    font-family: var(--font-display);
    font-size: 6rem;
    color: var(--g-100);
    line-height: 0;
    position: absolute;
    top: 54px;
    left: 32px;
    pointer-events: none;
}
.testi-stars {
    display: flex;
    gap: 4px;
    margin-bottom: 20px;
}
.testi-stars i { color: var(--gold-mid); font-size: 0.9rem; }
.testi-text { font-size: 1rem; line-height: 1.8; margin-bottom: 28px; position: relative; z-index: 1; }
.testi-author { display: flex; align-items: center; gap: 14px; }
.testi-avatar {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: var(--g-800);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: var(--font-display);
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--gold-light);
    flex-shrink: 0;
}
.testi-name { font-weight: 600; font-size: 0.95rem; color: var(--ink); margin-bottom: 2px; }
.testi-role { font-size: 0.8rem; color: var(--muted); }
.swiper-pagination-bullet-active { background: var(--g-600) !important; }

/* =============================================
   FAQ
   ============================================= */
#faq { background: var(--white); }
.faq-sidebar h2 { font-size: clamp(2rem, 3.5vw, 3rem); }
.faq-sidebar p { margin: 20px 0 32px; line-height: 1.8; }
.custom-acc .acc-item {
    border: 1px solid var(--border);
    border-radius: var(--radius-md);
    margin-bottom: 12px;
    overflow: hidden;
    transition: var(--transition);
}
.custom-acc .acc-item.open {
    border-color: var(--g-400);
    box-shadow: var(--shadow-card);
}
.custom-acc .accordion-button {
    font-family: var(--font-body);
    font-weight: 500;
    font-size: 0.97rem;
    color: var(--ink);
    padding: 20px 24px;
    background: transparent;
    box-shadow: none !important;
    border-radius: 0 !important;
}
.custom-acc .accordion-button:not(.collapsed) {
    color: var(--g-700);
    background: var(--g-50);
}
.custom-acc .accordion-button:not(.collapsed)::after {
    filter: hue-rotate(100deg);
}
.custom-acc .accordion-body {
    font-size: 0.93rem;
    color: var(--muted);
    padding: 0 24px 22px;
    line-height: 1.8;
}

/* =============================================
   CTA BANNER
   ============================================= */
#cta-section { background: var(--g-900); padding: 0; }
.cta-inner {
    position: relative;
    overflow: hidden;
    padding: 90px 60px;
    border-radius: var(--radius-lg);
    margin: 60px 0;
    background: linear-gradient(120deg, var(--g-800) 0%, var(--g-900) 60%);
    border: 1px solid rgba(212,160,23,0.2);
    text-align: center;
}
.cta-inner::before {
    content: "";
    position: absolute;
    top: -150px;
    right: -150px;
    width: 500px;
    height: 500px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(212,160,23,0.1) 0%, transparent 65%);
    pointer-events: none;
}
.cta-inner::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg, transparent, var(--gold-mid), transparent);
}
.cta-inner h2 {
    font-size: clamp(2rem, 4vw, 3.2rem);
    color: #FFFFFF !important;
    margin-bottom: 16px;
}
.cta-inner h2 * { color: inherit; }
.cta-inner h2 em { font-style: italic; color: var(--gold-light); }
.cta-inner p { color: rgba(255,255,255,0.88); max-width: 540px; margin: 0 auto 40px; line-height: 1.8; }
.cta-actions { display: flex; justify-content: center; gap: 16px; flex-wrap: wrap; }

/* =============================================
   RESPONSIVE
   ============================================= */
@media (max-width: 991px) {
    .services-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .industry-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 576px) {
    .services-grid { grid-template-columns: 1fr; }
    .stat-item + .stat-item::before { display: none; }
    .cta-inner { padding: 60px 30px; }
}


/* =============================================
   GLOBAL WHITE TEXT OVERRIDES
   ============================================= */

/* Stats Strip — all white */
.stat-num,
.stats-strip .stat-num,
.stats-strip .stat-num span { 
    color: #FFFFFF !important; 
    text-shadow: none;
}
.stat-label { color: rgba(255,255,255,0.9) !important; }

/* Counter Section — all white */
.cnt-num,
.cnt-num span,
#counters .cnt-num { color: #FFFFFF !important; }
.cnt-label { color: rgba(255,255,255,0.9) !important; }
.cnt-divider { background: rgba(255,255,255,0.3); }

/* CTA Banner — all white */
.cta-inner h2,
.cta-inner h2 em,
.cta-inner p,
.cta-inner .eyebrow { color: #FFFFFF !important; }

/* Hero — all white */
.hero-title,
.hero-title em,
.hero-kicker,
.hero-sub { color: #FFFFFF !important; }

/* =============================================
   HERO (REDESIGNED) — PREMIUM LAYOUT/CARDS
   ============================================= */
#hero { min-height: 100vh; }

.hero-inner {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    display: flex !important;
    align-items: center !important;
    min-height: 100vh !important;
}

.hero-inner .container {
    padding-top: 110px;
    padding-bottom: 84px;
}

.hero-overlay {
    background: linear-gradient(
        105deg,
        rgba(7,28,20,0.95) 0%,
        rgba(11,42,31,0.85) 52%,
        rgba(11,42,31,0.62) 100%
    ) !important;
}

.hero-overlay-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 170px;
    background: linear-gradient(to top, rgba(11,42,31,0.95) 0%, rgba(11,42,31,0) 100%);
    z-index: 2;
}

.hero-grid {
    display: grid;
    grid-template-columns: 1.15fr 0.85fr;
    gap: 46px;
    align-items: center;
}

.hero-copy {
    position: relative;
    z-index: 5;
}

.hero-kicker-row {
    display: inline-flex;
    align-items: center;
    gap: 14px;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(212,160,23,0.32);
    padding: 10px 18px;
    border-radius: 999px;
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    margin-bottom: 22px;
}

.hero-kicker-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: radial-gradient(circle at 30% 30%, var(--gold-light) 0%, var(--gold-mid) 55%, rgba(212,160,23,0.2) 100%);
    box-shadow: 0 0 0 4px rgba(212,160,23,0.12);
}

.hero-kicker-text {
    font-family: var(--font-label);
    font-size: 0.72rem;
    letter-spacing: 3.5px;
    text-transform: uppercase;
    color: rgba(255,255,255,0.78);
    white-space: nowrap;
}

.hero-title {
    font-family: var(--font-display) !important;
    font-size: clamp(2.6rem, 4.6vw, 4.1rem) !important;
    font-weight: 700 !important;
    color: #FFFFFF !important;
    line-height: 1.08 !important;
    margin-bottom: 18px !important;
    letter-spacing: -0.45px !important;
    max-width: 680px !important;
}


.hero-title-em {
    color: var(--gold-light) !important;
    font-style: italic !important;
    position: relative;
}

.hero-sub {
    font-size: 1.02rem !important;
    color: rgba(255,255,255,0.88) !important;
    max-width: 560px !important;
    line-height: 1.85 !important;
    margin-bottom: 26px !important;
    font-weight: 400 !important;
    font-family: var(--font-body) !important;
}

.hero-cta-row {
    display: flex !important;
    align-items: center !important;
    gap: 14px !important;
    flex-wrap: wrap !important;
    margin-bottom: 22px !important;
}

/* Trust indicators grid */
.hero-trust-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 14px;
    margin-top: 22px;
}

.hero-trust-card {
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 12px;
    padding: 18px 16px;
    display: flex;
    gap: 12px;
    align-items: flex-start;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    transition: var(--transition);
}

.hero-trust-card:hover {
    transform: translateY(-4px);
    border-color: rgba(212,160,23,0.35);
    background: rgba(255,255,255,0.08);
}

.hero-trust-ico {
    width: 44px;
    height: 44px;
    border-radius: 10px;
    background: rgba(212,160,23,0.12);
    border: 1px solid rgba(212,160,23,0.22);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.hero-trust-ico i {
    color: var(--gold-light);
    font-size: 1.15rem;
}

.hero-trust-txt { min-width: 0; }
.hero-trust-title {
    font-family: var(--font-label);
    color: #FFFFFF;
    font-size: 0.78rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin-bottom: 4px;
}
.hero-trust-desc {
    font-size: 0.86rem;
    color: rgba(255,255,255,0.92);
    line-height: 1.5;
}

/* Right premium panel */
.hero-side {
    position: relative;
    z-index: 4;
}

.hero-panel {
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(212,160,23,0.22);
    border-radius: var(--radius-lg);
    padding: 26px 22px;
    box-shadow: var(--shadow-deep);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    position: relative;
    overflow: hidden;
}

.hero-panel::before {
    content: "";
    position: absolute;
    inset: -2px;
    background: radial-gradient(circle at 20% 10%, rgba(240,192,64,0.35) 0%, rgba(240,192,64,0.05) 38%, rgba(0,0,0,0) 70%);
    pointer-events: none;
}

.hero-panel-eyebrow {
    position: relative;
    z-index: 1;
    font-family: var(--font-label);
    font-size: 0.7rem;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: rgba(255,255,255,0.78);
    margin-bottom: 14px;
}

.hero-panel-title {
    position: relative;
    z-index: 1;
    font-family: var(--font-display) !important;
    color: #FFFFFF !important;
    font-size: 2.1rem !important;
    line-height: 1.15 !important;
    margin-bottom: 16px !important;
}

.hero-panel-list {
    position: relative;
    z-index: 1;
    list-style: none;
    padding: 0;
    margin: 0 0 18px;
}

.hero-panel-list li {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    padding: 10px 0;
    border-top: 1px solid rgba(255,255,255,0.12);
    color: rgba(255,255,255,0.95);
    font-family: var(--font-body);
    font-size: 0.98rem;
    line-height: 1.55;
}

.hero-panel-list li:first-child { border-top: none; padding-top: 0; }

.hero-panel-list li i { color: var(--gold-light); margin-top: 2px; }

.hero-panel-cta { position: relative; z-index: 1; }

.hero-panel-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    width: 100%;
    justify-content: center;
    text-decoration: none;
}

/* Buttons (tighter premium sizes) */
.btn-gold {
    background: var(--gold-mid) !important;
    color: #0B2A1F !important;
    font-weight: 700 !important;
    padding: 16px 34px !important;
    font-size: 0.74rem !important;
    letter-spacing: 2px !important;
    border-radius: 10px !important;
}
.btn-gold:hover {
    background: var(--gold-light) !important;
    color: #0B2A1F !important;
}

.btn-ghost-white {
    color: #FFFFFF !important;
    border: 1.5px solid rgba(255,255,255,0.72) !important;
    padding: 15px 30px !important;
    font-size: 0.74rem !important;
    letter-spacing: 2px !important;
    background: rgba(255,255,255,0.02) !important;
    border-radius: 10px !important;
}
.btn-ghost-white:hover {
    background: rgba(255,255,255,0.12) !important;
    color: #FFFFFF !important;
    border-color: rgba(255,255,255,0.95) !important;
}

@media (max-width: 991px) {
    .hero-inner .container { padding-top: 94px; padding-bottom: 70px; }
    .hero-grid { grid-template-columns: 1fr; gap: 24px; }
    .hero-side { max-width: 720px; }
    .hero-trust-grid { grid-template-columns: 1fr; }
}


</style>
EXTRAHEAD;

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>

<!-- ================================================
     HERO SECTION (REDESIGNED)
================================================= -->
<section id="hero">
    <div class="hero-video-wrap" aria-hidden="true">
        <video autoplay loop muted playsinline>
            <source src="https://cdn.pixabay.com/video/2025/04/23/273922_large.mp4" type="video/mp4">
        </video>
    </div>

    <div class="hero-overlay" aria-hidden="true"></div>
    <div class="hero-overlay-bottom" aria-hidden="true"></div>

    <div class="hero-inner">
        <div class="container">
            <div class="hero-grid">
                <!-- Left: copy & CTAs -->
                <div class="hero-copy">
                    <div class="hero-kicker-row" data-aos="fade-up" data-aos-delay="100">
                        <span class="hero-kicker-dot" aria-hidden="true"></span>
                        <span class="hero-kicker-text">Chartered Accountancy for Tax • Compliance • Assurance</span>
                    </div>

                    <h1 class="hero-title" data-aos="fade-up" data-aos-delay="200">
                        Premium guidance for <span class="hero-title-em">business</span> &amp; <span class="hero-title-em">individuals</span>.
                    </h1>

                    <div class="hero-cta-row" data-aos="fade-up" data-aos-delay="400">
                        <a href="contact.php" class="btn-gold btn-hero">
                            <i class="bi bi-calendar-check-fill"></i>
                            Schedule a Consultation
                        </a>
                        <a href="services.php" class="btn-ghost-white btn-hero">
                            <i class="bi bi-grid-fill"></i>
                            Explore Services
                        </a>
                    </div>

                    <!-- Trust indicators (cards-style) -->
                    <div class="hero-trust-grid" data-aos="fade-up" data-aos-delay="500">
                        <div class="hero-trust-card">
                            <div class="hero-trust-ico">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div class="hero-trust-txt">
                                <div class="hero-trust-title">ICAI standards</div>
                                <div class="hero-trust-desc">Professional ethics &amp; compliance mindset.</div>
                            </div>
                        </div>

                        <div class="hero-trust-card">
                            <div class="hero-trust-ico">
                                <i class="bi bi-file-earmark-check"></i>
                            </div>
                            <div class="hero-trust-txt">
                                <div class="hero-trust-title">Statutory support</div>
                                <div class="hero-trust-desc">ROC filings, audit assistance &amp; reporting.</div>
                            </div>
                        </div>

                        <div class="hero-trust-card">
                            <div class="hero-trust-ico">
                                <i class="bi bi-clipboard-data"></i>
                            </div>
                            <div class="hero-trust-txt">
                                <div class="hero-trust-title">Documentation-ready</div>
                                <div class="hero-trust-desc">Accurate records, clean deliverables.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: premium info panel -->
                <div class="hero-side" data-aos="fade-left" data-aos-delay="350">
                    <div class="hero-panel">
                        <div class="hero-panel-eyebrow">What you get</div>
                        <h2 class="hero-panel-title">Clarity you can act on</h2>
                        <ul class="hero-panel-list">
                            <li><i class="bi bi-check2-circle"></i> Compliance timelines &amp; readiness checks</li>
                            <li><i class="bi bi-check2-circle"></i> Practical advisory for decision-making</li>
                            <li><i class="bi bi-check2-circle"></i> Audit-ready documentation support</li>
                        </ul>

                        <div class="hero-panel-cta">
                            <a href="contact.php" class="btn-ghost-green hero-panel-btn">
                                <i class="bi bi-envelope"></i>
                                Get a Proposal / Quote
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ================================================
     ABOUT SECTION
================================================= -->
<section id="about" class="section-pad">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="about-img-frame">
                    <img src="https://cdn.pixabay.com/photo/2025/01/23/08/54/attorney-9354138_1280.jpg" alt="Chartered Accountant Firm" class="img-main">
                    <div class="icai-badge">
                        <div class="icai-badge-num">ICAI</div>
                        <div class="icai-badge-text">Registered<br>Member</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="eyebrow">About Our Firm</div>
                <h2 class="display-heading mb-4">
                    Building Long-Term<br><em>Financial Confidence</em>
                </h2>
                <p style="font-size:1.02rem; line-height:1.85; color: var(--muted);">
                    <!-- PLACEHOLDER: Firm description — apni firm ke baare mein likho -->
                    As a professional Chartered Accountant firm established in [YEAR], we provide end-to-end solutions for taxation, statutory audits, corporate compliance, and business advisory. Our approach is deeply rooted in professional ethics, ensuring transparent and accurate financial support for every client.
                </p>
                <ul class="about-check-list">
                    <li>Ethical Practice & Strictly ICAI Guidelines Compliant</li>
                    <li>Strategic Tax Planning & Proactive Business Advisory</li>
                    <li>Dedicated CA Support for Every Client — Small or Large</li>
                    <li>Prompt Turnaround with Accuracy and Full Transparency</li>
                </ul>
                <a href="about.php" class="btn-gold">
                    <i class="bi bi-info-circle"></i>
                    Discover Our Firm
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ================================================
     SERVICES SECTION
================================================= -->
<section id="services" class="section-pad">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="eyebrow" style="justify-content:center;">Our Expertise</div>
            <h2 class="display-heading">Professional Financial <em>Services</em></h2>
        </div>
        <div class="services-grid" data-aos="fade-up" data-aos-delay="100">
            <div class="svc-card">
                <div class="svc-icon-wrap"><i class="bi bi-receipt-cutoff"></i></div>
                <h4 class="svc-title">GST Compliance</h4>
                <p class="svc-desc">Accurate monthly/quarterly GST return filing, reconciliations, and new registrations managed end-to-end.</p>
                <span class="svc-arrow"><i class="bi bi-arrow-right"></i> Know More</span>
            </div>
            <div class="svc-card">
                <div class="svc-icon-wrap"><i class="bi bi-file-earmark-text"></i></div>
                <h4 class="svc-title">Income Tax</h4>
                <p class="svc-desc">Comprehensive ITR filing and proactive tax planning for individuals, businesses, and NRIs.</p>
                <span class="svc-arrow"><i class="bi bi-arrow-right"></i> Know More</span>
            </div>
            <div class="svc-card">
                <div class="svc-icon-wrap"><i class="bi bi-journal-check"></i></div>
                <h4 class="svc-title">Audit & Assurance</h4>
                <p class="svc-desc">Statutory, tax, and internal audits ensuring full compliance with ICAI standards and regulations.</p>
                <span class="svc-arrow"><i class="bi bi-arrow-right"></i> Know More</span>
            </div>
            <div class="svc-card">
                <div class="svc-icon-wrap"><i class="bi bi-building-check"></i></div>
                <h4 class="svc-title">ROC Compliance</h4>
                <p class="svc-desc">Annual returns, event-based forms, and complete corporate secretarial services with MCA.</p>
                <span class="svc-arrow"><i class="bi bi-arrow-right"></i> Know More</span>
            </div>
            <div class="svc-card">
                <div class="svc-icon-wrap"><i class="bi bi-calculator"></i></div>
                <h4 class="svc-title">Accounting Services</h4>
                <p class="svc-desc">Accurate bookkeeping, ledger maintenance, and financial statements preparation.</p>
                <span class="svc-arrow"><i class="bi bi-arrow-right"></i> Know More</span>
            </div>
            <div class="svc-card">
                <div class="svc-icon-wrap"><i class="bi bi-briefcase"></i></div>
                <h4 class="svc-title">Business Advisory</h4>
                <p class="svc-desc">Financial forecasting, startup mentoring, and robust corporate strategies for growth.</p>
                <span class="svc-arrow"><i class="bi bi-arrow-right"></i> Know More</span>
            </div>
            <div class="svc-card">
                <div class="svc-icon-wrap"><i class="bi bi-people"></i></div>
                <h4 class="svc-title">Payroll Services</h4>
                <p class="svc-desc">Complete payroll processing, PF, ESI, and professional tax compliance handled seamlessly.</p>
                <span class="svc-arrow"><i class="bi bi-arrow-right"></i> Know More</span>
            </div>
            <div class="svc-card">
                <div class="svc-icon-wrap"><i class="bi bi-rocket-takeoff"></i></div>
                <h4 class="svc-title">Company Registration</h4>
                <p class="svc-desc">End-to-end incorporation for Pvt Ltd, LLP, OPC, and Section 8 entities across India.</p>
                <span class="svc-arrow"><i class="bi bi-arrow-right"></i> Know More</span>
            </div>
        </div>
    </div>
</section>

<!-- ================================================
     WHY CHOOSE US (Dark Green)
================================================= -->
<section id="why" class="section-pad">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="eyebrow">Why Choose Us</div>
                <h2 class="display-heading mb-5">
                    Committed to <em>Excellence</em><br>in Every Engagement
                </h2>
                <div class="why-feature" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-icon"><i class="bi bi-award"></i></div>
                    <div>
                        <h5>Professional Expertise</h5>
                        <p>Highly qualified Chartered Accountants delivering top-tier financial guidance across all practice areas.</p>
                    </div>
                </div>
                <div class="why-feature" data-aos="fade-up" data-aos-delay="200">
                    <div class="why-icon"><i class="bi bi-shield-check"></i></div>
                    <div>
                        <h5>Ethical Practices</h5>
                        <p>Absolute transparency and strict adherence to ICAI professional guidelines in every engagement.</p>
                    </div>
                </div>
                <div class="why-feature" data-aos="fade-up" data-aos-delay="300">
                    <div class="why-icon"><i class="bi bi-clock-history"></i></div>
                    <div>
                        <h5>Timely Compliance</h5>
                        <p>Efficient processes ensuring prompt turnaround without ever compromising on accuracy or quality.</p>
                    </div>
                </div>
                <div class="why-feature" data-aos="fade-up" data-aos-delay="400">
                    <div class="why-icon"><i class="bi bi-person-hearts"></i></div>
                    <div>
                        <h5>Client-Focused Approach</h5>
                        <p>Personalized attention tailored to meet your unique business and individual financial requirements.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="about-img-frame" style="--frame-bg: var(--g-700);">
                    <img src="https://cdn.pixabay.com/photo/2026/03/19/06/06/geralt-office-10181740_1280.jpg" alt="Professional Excellence" class="img-main" style="border-radius: 8px; box-shadow: 0 20px 60px rgba(0,0,0,0.4);">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================================================
     INDUSTRIES
================================================= -->
<section id="industries" class="section-pad">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="eyebrow" style="justify-content:center;">Sectors</div>
            <h2 class="display-heading">Industries We <em>Serve</em></h2>
        </div>
        <div class="industry-grid" data-aos="fade-up" data-aos-delay="100">
            <div class="ind-card"><i class="bi bi-gear"></i><h6>Manufacturing</h6></div>
            <div class="ind-card"><i class="bi bi-shop"></i><h6>Retail</h6></div>
            <div class="ind-card"><i class="bi bi-heart-pulse"></i><h6>Healthcare</h6></div>
            <div class="ind-card"><i class="bi bi-pc-display"></i><h6>IT Services</h6></div>
            <div class="ind-card"><i class="bi bi-rocket"></i><h6>Startups</h6></div>
            <div class="ind-card"><i class="bi bi-person-workspace"></i><h6>Professionals</h6></div>
            <div class="ind-card"><i class="bi bi-cart3"></i><h6>E-Commerce</h6></div>
            <div class="ind-card"><i class="bi bi-cup-hot"></i><h6>Hospitality</h6></div>
        </div>
    </div>
</section>

<!-- ================================================
     PROCESS
================================================= -->
<section id="process" class="section-pad">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="eyebrow" style="justify-content:center;">Our Methodology</div>
            <h2 class="display-heading">A Structured <em>Work Process</em></h2>
        </div>
        <div class="process-row" data-aos="fade-up" data-aos-delay="100">
            <div class="proc-step">
                <div class="proc-num">01</div>
                <h5>Consultation</h5>
                <p>Initial meeting to understand your unique requirements and goals.</p>
            </div>
            <div class="proc-step">
                <div class="proc-num">02</div>
                <h5>Analysis</h5>
                <p>Deep dive into your financial data and current compliance status.</p>
            </div>
            <div class="proc-step">
                <div class="proc-num">03</div>
                <h5>Strategy</h5>
                <p>Formulating a tailored execution and advisory plan for you.</p>
            </div>
            <div class="proc-step">
                <div class="proc-num">04</div>
                <h5>Execution</h5>
                <p>Implementing with precision and providing detailed reporting.</p>
            </div>
        </div>
    </div>
</section>

<!-- ================================================
     COUNTER SECTION
================================================= -->
<section id="counters">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-6 col-md-3 cnt-item" data-aos="zoom-in" data-aos-delay="100">
                <div class="cnt-num"><span class="counter" data-target="1500">0</span>+</div>
                <div class="cnt-divider"></div>
                <div class="cnt-label">Tax Returns Filed</div>
            </div>
            <div class="col-6 col-md-3 cnt-item" data-aos="zoom-in" data-aos-delay="200">
                <div class="cnt-num"><span class="counter" data-target="500">0</span>+</div>
                <div class="cnt-divider"></div>
                <div class="cnt-label">Business Clients</div>
            </div>
            <div class="col-6 col-md-3 cnt-item" data-aos="zoom-in" data-aos-delay="300">
                <div class="cnt-num"><span class="counter" data-target="100">0</span>+</div>
                <div class="cnt-divider"></div>
                <div class="cnt-label">Audits Conducted</div>
            </div>
            <div class="col-6 col-md-3 cnt-item" data-aos="zoom-in" data-aos-delay="400">
                <div class="cnt-num"><span class="counter" data-target="10">0</span>+</div>
                <div class="cnt-divider"></div>
                <div class="cnt-label">Years Experience</div>
            </div>
        </div>
    </div>
</section>

<!-- ================================================
     TEAM SECTION
================================================= -->
<section id="team" class="section-pad">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-4" data-aos="fade-right">
                <div class="principal-card">
                    <!-- PLACEHOLDER: Principal CA ki photo -->
                    <img src="https://cdn.pixabay.com/photo/2026/04/05/07/20/geralt-business-10209984_1280.jpg" alt="Principal CA" class="principal-photo">
                    <div class="principal-info">
                        <!-- PLACEHOLDER: CA naam, designation, qualification -->
                        <div class="principal-name">CA [Your Name]</div>
                        <div class="principal-designation">Founder & Principal Partner</div>
                        <div class="principal-qual">B.Com (H) · FCA · DISA (ICAI)<br>Membership No: XXXXXX</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 team-content" data-aos="fade-left">
                <div class="eyebrow">Our Professionals</div>
                <h2 class="display-heading mb-4">Meet Our <em>Expert Team</em></h2>
                <p>
                    <!-- PLACEHOLDER: Team description -->
                    Our firm is driven by a core group of seasoned Chartered Accountants and corporate professionals. With extensive domain expertise across taxation, audit, and corporate compliance, we guarantee financial precision and regulatory adherence for every engagement.
                </p>
                <p>
                    Operating strictly under the ethical guidelines laid down by the ICAI, our team members hold themselves to the highest standards of confidentiality, integrity, and professional objectivity — ensuring every client receives the premium service they deserve.
                </p>
                <div class="d-flex gap-3 flex-wrap mt-4">
                    <a href="about.php" class="btn-gold"><i class="bi bi-people"></i> About Our Firm</a>
                    <a href="contact.php" class="btn-ghost-green"><i class="bi bi-envelope"></i> Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================================================
     WORKSPACE GALLERY
================================================= -->
<section id="gallery" class="section-pad">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="eyebrow" style="justify-content:center;">Our Office</div>
            <h2 class="display-heading">A Modern <em>Workspace</em></h2>
        </div>
        <div class="gallery-grid" data-aos="fade-up" data-aos-delay="100">
            <div class="g-item tall">
                <img src="https://cdn.pixabay.com/photo/2021/11/22/09/55/work-station-6816271_1280.jpg" alt="Office Workspace">
                <div class="g-overlay"></div>
            </div>
            <div class="g-item">
                <img src="https://cdn.pixabay.com/photo/2019/11/29/08/34/space-4660847_1280.jpg" alt="Meeting Room">
                <div class="g-overlay"></div>
            </div>
            <div class="g-item">
                <img src="https://cdn.pixabay.com/photo/2020/04/09/11/16/e-learning-5020950_1280.jpg" alt="Work Area">
                <div class="g-overlay"></div>
            </div>
        </div>
    </div>
</section>

<!-- ================================================
     TESTIMONIALS
================================================= -->
<section id="testimonials" class="section-pad overflow-hidden">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="eyebrow" style="justify-content:center;">Client Feedback</div>
            <h2 class="display-heading">What Our Clients <em>Say</em></h2>
        </div>
        <div class="swiper testimonialSwiper" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper pb-4">
                <div class="swiper-slide">
                    <div class="testi-card">
                        <div class="testi-stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testi-text">"The level of professionalism and depth of taxation knowledge provided by the team are exceptional. They simplified our audit processes remarkably and saved us significant compliance costs."</p>
                        <div class="testi-author">
                            <div class="testi-avatar">RS</div>
                            <div>
                                <div class="testi-name">Rajesh Sharma</div>
                                <div class="testi-role">Director, Tech Solutions Pvt. Ltd.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testi-card">
                        <div class="testi-stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testi-text">"Their proactive tax planning and accurate GST compliance services have been instrumental in our company's sustainable growth over the last 5 years. Highly dependable team."</p>
                        <div class="testi-author">
                            <div class="testi-avatar">MV</div>
                            <div>
                                <div class="testi-name">Meera Verma</div>
                                <div class="testi-role">Founder, Retail Hub</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testi-card">
                        <div class="testi-stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testi-text">"Outstanding advisory support. They guided us seamlessly through complex ROC compliance and company restructuring. I strongly recommend this firm to any serious business."</p>
                        <div class="testi-author">
                            <div class="testi-avatar">AP</div>
                            <div>
                                <div class="testi-name">Amit Patel</div>
                                <div class="testi-role">CEO, Patel Manufacturing Ltd.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination position-relative mt-2"></div>
        </div>
    </div>
</section>

<!-- ================================================
     FAQ SECTION
================================================= -->
<section id="faq" class="section-pad">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 faq-sidebar" data-aos="fade-right">
                <div class="eyebrow">Common Queries</div>
                <h2>Frequently Asked <em style="color:var(--g-600);">Questions</em></h2>
                <p>Quick answers to common questions on tax, compliance, and our professional services. For specific queries, reach our team directly.</p>
                <a href="contact.php" class="btn-ghost-green"><i class="bi bi-envelope"></i> Contact Support</a>
            </div>
            <div class="col-lg-8" data-aos="fade-left">
                <div class="accordion custom-acc" id="faqAccordion">
                    <div class="accordion-item acc-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                How often should I file my GST returns?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">Return frequency depends on your turnover and scheme. Regular taxpayers usually file monthly (GSTR-1 and GSTR-3B) or quarterly under the QRMP scheme.</div>
                        </div>
                    </div>
                    <div class="accordion-item acc-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                What documents are required for Company Registration?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">PAN, Aadhaar/Passport of directors, bank statements, and utility bills for registered office proof along with an NOC from the property owner.</div>
                        </div>
                    </div>
                    <div class="accordion-item acc-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Who is liable for a Statutory Audit?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">All Private and Public Limited Companies are mandatorily required to undergo a statutory audit every financial year, regardless of turnover or profits.</div>
                        </div>
                    </div>
                    <div class="accordion-item acc-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                What is the deadline for filing Income Tax Returns?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">Generally July 31st for individuals. For businesses requiring an audit, typically October 31st of the assessment year.</div>
                        </div>
                    </div>
                    <div class="accordion-item acc-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                How can tax planning benefit my business?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">Effective tax planning minimizes tax liability legally through exemptions, deductions, and rebates — improving overall cash flow and financial health of your business.</div>
                        </div>
                    </div>
                    <div class="accordion-item acc-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                What is ROC Compliance and what does it involve?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">ROC compliance involves mandatory board/AGM meetings, and filing annual returns (MGT-7) and financial statements (AOC-4) with the Ministry of Corporate Affairs.</div>
                        </div>
                    </div>
                    <div class="accordion-item acc-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                                Are your services compliant with ICAI guidelines?
                            </button>
                        </h2>
                        <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">Absolutely. Our firm strictly adheres to the professional standards, ethics, and guidelines mandated by the Institute of Chartered Accountants of India (ICAI).</div>
                        </div>
                    </div>
                    <div class="accordion-item acc-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                                Do you provide advisory for startup funding rounds?
                            </button>
                        </h2>
                        <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">Yes, we provide financial modeling, business valuations, and compliance advisory to make startups investor-ready and assist during all funding stages.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================================================
     CTA BANNER
================================================= -->
<section id="cta-section">
    <div class="container">
        <div class="cta-inner" data-aos="fade-up">
            <div class="eyebrow" style="justify-content:center; color:var(--gold-light);">Get Started Today</div>
            <h2>Require Professional <em>Financial Guidance?</em></h2>
            <p>Partner with us to navigate regulatory complexities with clarity, confidence, and complete professional support.</p>
            <div class="cta-actions">
                <a href="contact.php" class="btn-gold">
                    <i class="bi bi-calendar-check-fill"></i>
                    Schedule Consultation
                </a>
                <a href="tel:+91XXXXXXXXXX" class="btn-ghost-white">
                    <!-- PLACEHOLDER: Phone number -->
                    <i class="bi bi-telephone-fill"></i>
                    Call Us Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {

    /* AOS */
    AOS.init({ once: true, offset: 60, duration: 850, easing: "ease-out-cubic" });

    /* Swiper */
    new Swiper(".testimonialSwiper", {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: { el: ".swiper-pagination", clickable: true },
        breakpoints: {
            768: { slidesPerView: 2, spaceBetween: 0 }
        }
    });

    /* Counter Animation */
    const counters = document.querySelectorAll(".counter");
    const speed = 2000;
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = +el.getAttribute("data-target");
                const step = Math.ceil(target / (speed / 16));
                let current = 0;
                const timer = setInterval(() => {
                    current += step;
                    if (current >= target) { current = target; clearInterval(timer); }
                    el.textContent = current.toLocaleString("en-IN");
                }, 16);
                observer.unobserve(el);
            }
        });
    }, { threshold: 0.5 });
    counters.forEach(c => observer.observe(c));

    /* FAQ open class for border */
    document.querySelectorAll(".accordion-button").forEach(btn => {
        btn.addEventListener("click", function () {
            document.querySelectorAll(".acc-item").forEach(i => i.classList.remove("open"));
            if (!this.classList.contains("collapsed")) {
                this.closest(".acc-item").classList.add("open");
            }
        });
    });

});
</script>
<script src="<?php echo e(ASSETS_URL . '/js/main.js'); ?>"></script>
<?php include __DIR__ . '/includes/footer.php'; ?>