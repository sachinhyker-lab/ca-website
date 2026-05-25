<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = 'Our Services | ' . SITE_NAME;
$metaDescription = 'Complete CA services in Dehradun — Income Tax, GST, Company Registration, Audit, TDS, Accounting, ROC Compliance, NRI Taxation, Business Advisory by Aashish & Company.';
$bootstrapCssHref = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css';
$bootstrapIconsHref = 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.min.css';
$googleFontsHref = 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800;900&family=Inter:wght@300;400;500;600;700;800&display=swap';
$extraHead = <<<'HTML'
<style>
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

    /* ===== HERO WAVE SLIDER ===== */
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

    /* ===== MARQUEE ===== */
    .strip-wrap{width:100vw;position:relative;left:50%;margin-left:-50vw;background:var(--black);overflow:hidden;}
    .strip-track{display:inline-flex;animation:marquee 40s linear infinite;white-space:nowrap;}
    @keyframes marquee{from{transform:translateX(0)}to{transform:translateX(-50%)}}
    .strip-item{display:inline-flex;align-items:center;gap:10px;padding:13px 28px;border-right:1px solid rgba(255,255,255,.07);flex-shrink:0;}
    .strip-item i{color:var(--gold);font-size:.9rem;}
    .strip-item span{color:#E2E8F0;font-size:.79rem;font-weight:600;white-space:nowrap;opacity:1;}

    /* ===== STATS ===== */
    .stats-sec{width:100vw;position:relative;left:50%;margin-left:-50vw;background:var(--offwhite);padding:56px 0;}
    .stats-inner{max-width:1320px;margin:0 auto;padding:0 40px;display:grid;grid-template-columns:repeat(5,1fr);gap:18px;}
    .stat-card{background:#fff;border-radius:14px;padding:20px 16px;text-align:center;border:1.5px solid var(--borderlite);transition:all .3s;}
    .stat-card:hover{transform:translateY(-4px);box-shadow:0 10px 26px rgba(0,0,0,.10);border-color:var(--black);}
    .stat-num{font-size:1.8rem;font-weight:800;color:var(--black);font-family:"Playfair Display",serif;line-height:1;}
    .stat-num em{font-style:normal;color:var(--gold);}
    .stat-label{font-size:.78rem;color:var(--midgray);margin-top:5px;font-weight:600;}

    /* ===== SERVICE TABS ===== */
    .svc-sec{width:100vw;position:relative;left:50%;margin-left:-50vw;background:#fff;padding:90px 0;}
    .svc-inner{max-width:1320px;margin:0 auto;padding:0 40px;}
    .svc-tabs{display:flex;flex-wrap:wrap;gap:10px;margin-bottom:40px;justify-content:center;}
    .svc-tab-btn{display:inline-flex;align-items:center;gap:8px;padding:10px 18px;border-radius:50px;border:1.5px solid var(--borderlite);background:#fff;color:var(--black);font-size:.84rem;font-weight:600;cursor:pointer;transition:all .3s;font-family:"Inter",sans-serif;}
    .svc-tab-btn i{font-size:.9rem;color:var(--gold);}
    .svc-tab-btn:hover{border-color:var(--black);color:var(--gold);background:var(--offwhite);}
    .svc-tab-btn.active{background:var(--black);color:#fff;border-color:var(--black);}
    .svc-tab-btn.active i{color:var(--gold);}
    .svc-panel{display:none;}
    .svc-panel.active{display:block;animation:fadeUp .4s ease;}
    @keyframes fadeUp{from{opacity:0;transform:translateY(16px)}to{opacity:1;transform:translateY(0)}}
    .svc-panel-wrap{display:grid;grid-template-columns:1fr 340px;gap:30px;align-items:start;}
    .svc-panel-left{}
    .svc-panel-num{width:42px;height:42px;background:var(--gold);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-size:1.1rem;font-weight:800;font-family:"Playfair Display",serif;margin-bottom:6px;}
    .svc-panel-label{font-size:.74rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--gold);margin-bottom:6px;display:flex;align-items:center;gap:6px;}
    .svc-panel-label i{font-size:.8rem;}
    .svc-panel-title{font-size:clamp(1.6rem,3vw,2.4rem);color:var(--black);margin-bottom:12px;}
    .svc-panel-title em{font-style:normal;color:var(--gold);}
    .svc-panel-underline{width:48px;height:3px;background:var(--black);border-radius:2px;margin-bottom:16px;}
    .svc-panel-desc{font-size:.93rem;color:var(--midgray);line-height:1.80;margin-bottom:20px;max-width:600px;}
    .svc-highlights{display:flex;flex-wrap:wrap;gap:0;border:1.5px solid var(--borderlite);border-radius:10px;overflow:hidden;margin-bottom:24px;}
    .svc-highlight{flex:1;padding:12px 14px;border-right:1.5px solid var(--borderlite);min-width:120px;}
    .svc-highlight:last-child{border-right:none;}
    .svc-highlight-label{font-size:.70rem;color:var(--midgray);margin-bottom:3px;font-weight:600;}
    .svc-highlight-val{font-size:.94rem;font-weight:800;color:var(--black);font-family:"Playfair Display",serif;}
    .svc-features h5{font-size:.88rem;font-weight:700;color:var(--black);margin-bottom:14px;display:flex;align-items:center;gap:7px;}
    .svc-feat-grid{display:grid;grid-template-columns:1fr 1fr;gap:8px 20px;margin-bottom:22px;}
    .svc-feat-item{display:flex;align-items:center;gap:8px;font-size:.86rem;color:var(--black);font-weight:500;}
    .svc-feat-item i{color:var(--gold);font-size:.80rem;flex-shrink:0;}
    .svc-docs h5{font-size:.88rem;font-weight:700;color:var(--black);margin-bottom:12px;display:flex;align-items:center;gap:7px;}
    .svc-doc-tags{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:24px;}
    .svc-doc-tag{display:inline-flex;align-items:center;gap:6px;background:var(--offwhite);border:1px solid var(--borderlite);border-radius:6px;padding:6px 12px;font-size:.80rem;font-weight:600;color:var(--black);}
    .svc-doc-tag i{color:var(--gold);font-size:.78rem;}
    .svc-apply-btn{margin-top:4px;}
    .svc-panel-right{}
    .svc-subtypes-card{background:#fff;border:1.5px solid var(--borderlite);border-radius:14px;overflow:hidden;margin-bottom:18px;}
    .svc-subtype-item{display:flex;align-items:flex-start;gap:14px;padding:16px 18px;border-bottom:1px solid var(--cream);cursor:pointer;transition:all .3s;}
    .svc-subtype-item:last-child{border-bottom:none;}
    .svc-subtype-item:hover{background:var(--offwhite);}
    .svc-subtype-icon{width:38px;height:38px;background:var(--offwhite);border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:.95rem;color:var(--black);flex-shrink:0;transition:all .3s;}
    .svc-subtype-item:hover .svc-subtype-icon{background:var(--black);color:var(--gold);}
    .svc-subtype-title{font-size:.88rem;font-weight:700;color:var(--black);margin:0 0 3px;}
    .svc-subtype-desc{font-size:.78rem;color:var(--midgray);margin:0;line-height:1.45;}
    .svc-why-card{background:var(--black);border-radius:14px;padding:22px 20px;}
    .svc-why-card h5{color:#fff;font-size:.92rem;font-weight:700;margin-bottom:16px;display:flex;align-items:center;gap:8px;font-family:"Inter",sans-serif;}
    .svc-why-card h5 i{color:var(--gold);}
    .svc-why-item{background:rgba(255,255,255,.08);border-radius:10px;padding:14px 16px;margin-bottom:12px;display:flex;align-items:flex-start;gap:14px;border:1px solid rgba(255,255,255,0.05);}
    .svc-why-item:last-of-type{margin-bottom:16px;}
    .svc-why-check{width:34px;height:34px;background:#EEF3ED !important;border:1px solid #DDE5DD !important;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;}
    .svc-why-check i{color:#5D7C63 !important;font-size:1.1rem;}
    .svc-why-title{font-size:.92rem;font-weight:700;color:#FFFFFF;margin:0 0 4px;line-height:1.3;}
    .svc-why-sub{font-size:.82rem;color:rgba(255,255,255,0.90);margin:0;opacity:1;line-height:1.5;}
    .svc-why-cta{display:flex;align-items:center;justify-content:center;gap:8px;background:var(--gold);color:#fff;padding:11px 20px;border-radius:8px;font-weight:700;font-size:.88rem;text-decoration:none;width:100%;transition:all .3s;}
    .svc-why-cta:hover{background:var(--gold-dark);color:#fff;}

    /* ===== EXPERTISE / CLIENTS ===== */
    .expertise-sec{width:100vw;position:relative;left:50%;margin-left:-50vw;background:var(--offwhite);padding:70px 0;}
    .expertise-inner{max-width:1320px;margin:0 auto;padding:0 40px;}
    .expertise-grid{display:flex;flex-wrap:wrap;gap:12px;justify-content:center;}
    .expertise-chip{background:#fff;border:1.5px solid var(--borderlite);border-radius:50px;padding:8px 18px;font-size:.83rem;font-weight:700;color:var(--black);transition:all .3s;}
    .expertise-chip:hover{background:var(--black);color:var(--gold);border-color:var(--black);}

    /* ===== WHY US ===== */
    .why-sec{width:100vw;position:relative;left:50%;margin-left:-50vw;background:#fff;padding:90px 0;}
    .why-inner{max-width:1320px;margin:0 auto;padding:0 40px;}
    .why-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;}
    .why-card{background:var(--offwhite);border:1.5px solid var(--borderlite);border-radius:14px;padding:26px 20px;text-align:center;transition:all .4s;position:relative;overflow:hidden;}
    .why-card::before{content:"";position:absolute;bottom:0;left:50%;transform:translateX(-50%);width:0;height:3px;background:var(--gold);transition:width .4s;}
    .why-card:hover::before{width:100%;}
    .why-card:hover{transform:translateY(-6px);box-shadow:0 14px 36px rgba(0,0,0,.10);background:#fff;}
    .why-icon{width:54px;height:54px;background:var(--offwhite);border-radius:12px;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;font-size:1.2rem;color:var(--black);transition:all .3s;}
    .why-card:hover .why-icon{background:var(--black);color:var(--gold);}
    .why-card h5{font-size:.96rem;font-weight:700;color:var(--black);margin-bottom:7px;}
    .why-card p{font-size:.84rem;color:var(--midgray);line-height:1.65;margin:0;}

    /* ===== PROCESS ===== */
    .process-sec{width:100vw;position:relative;left:50%;margin-left:-50vw;background:var(--offwhite);padding:88px 0;}
    .process-inner{max-width:1320px;margin:0 auto;padding:0 40px;}
    .process-steps{display:grid;grid-template-columns:repeat(5,1fr);gap:16px;position:relative;}
    .process-steps::before{content:"";position:absolute;top:36px;left:10%;right:10%;height:2px;background:linear-gradient(90deg,rgba(201,169,110,.2),rgba(201,169,110,.7),rgba(201,169,110,.2));z-index:0;}
    .pstep{background:#fff;border:1.5px solid var(--borderlite);border-radius:14px;padding:24px 16px;text-align:center;position:relative;z-index:1;transition:all .3s;}
    .pstep:hover{transform:translateY(-5px);border-color:var(--gold);box-shadow:0 10px 24px rgba(0,0,0,.09);}
    .pstep-num{width:58px;height:58px;background:var(--black);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 14px;font-size:1.25rem;font-weight:800;color:var(--gold);font-family:"Playfair Display",serif;}
    .pstep h6{font-size:.88rem;font-weight:700;color:var(--black);margin-bottom:6px;}
    .pstep p{font-size:.80rem;color:var(--midgray);margin:0;line-height:1.60;}

    /* ===== CTA ===== */
    .cta-sec{width:100vw;position:relative;left:50%;margin-left:-50vw;background:var(--black);padding:86px 0;overflow:hidden;}
    .cta-sec::before{content:"";position:absolute;inset:0;background-image:radial-gradient(rgba(255,255,255,.03) 1px,transparent 1px);background-size:26px 26px;pointer-events:none;}
    .cta-inner{max-width:1320px;margin:0 auto;padding:0 40px;display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;position:relative;z-index:1;}
    .cta-title{font-size:clamp(1.8rem,3.5vw,2.8rem);color:#FFFFFF;line-height:1.22;margin-bottom:14px;}
    .cta-title em{font-style:normal;color:var(--gold);}
    .cta-desc{font-size:.95rem;color:rgba(255,255,255,0.90);line-height:1.85;margin-bottom:22px;opacity:1;}
    .cta-list{list-style:none;padding:0;margin:0 0 26px;}
    .cta-list li{display:flex;align-items:center;gap:10px;font-size:.92rem;color:rgba(255,255,255,0.90);margin-bottom:11px;opacity:1;}
    .cta-list li i{color:var(--gold);}
    .cta-right{background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.12);border-radius:18px;padding:32px 28px;}
    .cta-right h5{color:#fff;font-size:1.06rem;margin-bottom:18px;font-family:"Inter",sans-serif;font-weight:700;}
    .cta-citem{display:flex;align-items:center;gap:14px;margin-bottom:15px;}
    .cta-citem-icon{width:40px;height:40px;background:rgba(201,169,110,.2);border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:.95rem;color:var(--gold);flex-shrink:0;}
    .cta-citem-text a{color:#fff;text-decoration:none;font-weight:700;font-size:.91rem;display:block;}
    .cta-citem-text span{font-size:.73rem;color:#E2E8F0;opacity:1;}

    /* ===== TESTI ===== */
    .testi-sec{width:100vw;position:relative;left:50%;margin-left:-50vw;background:var(--offwhite);padding:88px 0;}
    .testi-inner{max-width:1320px;margin:0 auto;padding:0 40px;}
    .testi-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;}
    .testi-card{background:#fff;border:1.5px solid var(--borderlite);border-radius:16px;padding:26px 20px;transition:all .3s;}
    .testi-card:hover{border-color:var(--black);box-shadow:0 10px 28px rgba(0,0,0,.09);transform:translateY(-4px);}
    .testi-stars{color:var(--gold);font-size:.82rem;margin-bottom:12px;}
    .testi-text{font-size:.91rem;color:var(--black);line-height:1.82;font-style:italic;margin-bottom:16px;}
    .testi-auth{display:flex;align-items:center;gap:12px;}
    .testi-av{width:40px;height:40px;background:var(--black);border-radius:50%;display:flex;align-items:center;justify-content:center;color:var(--gold);font-size:.92rem;font-weight:700;flex-shrink:0;}
    .testi-name{font-size:.90rem;font-weight:700;color:var(--black);margin:0;}
    .testi-role{font-size:.73rem;color:var(--midgray);margin:0;}

    /* ===== CONTACT ===== */
    .contact-sec{width:100vw;position:relative;left:50%;margin-left:-50vw;background:var(--black);padding:88px 0;}
    .contact-inner{max-width:1320px;margin:0 auto;padding:0 40px;}
    .contact-head{text-align:center;margin-bottom:48px;}
    .contact-head h2{color:#fff;font-size:clamp(1.8rem,3vw,2.5rem);margin-bottom:10px;}
    .contact-head h2 em{font-style:normal;color:var(--gold);}
    .contact-head p{color:#F8FAFC;font-size:.94rem;max-width:560px;margin:0 auto;opacity:1;}
    .contact-cards{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-bottom:38px;}
    .ccard{background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.10);border-radius:14px;padding:24px 16px;text-align:center;transition:all .3s;}
    .ccard:hover{background:rgba(255,255,255,.10);transform:translateY(-4px);border-color:rgba(201,169,110,.3);}
    .ccard-icon{width:46px;height:46px;background:rgba(201,169,110,.18);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.05rem;color:var(--gold);margin:0 auto 10px;}
    .ccard h6{font-size:.91rem;font-weight:700;color:#fff;margin-bottom:6px;}
    .ccard p{font-size:.80rem;color:#E2E8F0;margin:0;line-height:1.58;opacity:1;}
    .ccard a{color:var(--gold);font-weight:600;text-decoration:none;font-size:.86rem;display:block;margin-bottom:2px;}
    .contact-bar{background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.10);border-radius:14px;padding:26px 34px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:16px;}
    .contact-bar h4{color:#fff;font-size:1.08rem;margin:0;font-family:"Inter",sans-serif;font-weight:700;}
    .contact-bar p{color:#E2E8F0;margin:3px 0 0;font-size:.84rem;opacity:1;}
    .btn-white{display:inline-flex;align-items:center;gap:8px;background:#fff;color:var(--black);padding:12px 24px;border-radius:7px;font-weight:700;font-size:.90rem;text-decoration:none;transition:all .3s;}
    .btn-white:hover{transform:translateY(-2px);box-shadow:0 6px 18px rgba(0,0,0,.18);}

    .wa-float{position:fixed;bottom:25px;right:25px;z-index:999;}
    .wa-float a{width:54px;height:54px;background:#25d366;border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-size:1.5rem;box-shadow:0 8px 24px rgba(37,211,102,.4);transition:all .3s;text-decoration:none;}
    .wa-float a:hover{transform:scale(1.12);}

    /* ===== HERO Phone CTA: make tel text clearly readable on white/outlined button ===== */
    a.btn-outline-w[href^="tel:"]{
      color:#000000 !important;
      font-weight:700 !important;
    }
    a.btn-outline-w[href^="tel:"] i{
      color:#000000 !important;
      opacity:1 !important;
    }

    @media(max-width:1100px){.svc-panel-wrap{grid-template-columns:1fr;}.svc-panel-right{display:grid;grid-template-columns:1fr 1fr;gap:20px;}}
    @media(max-width:991px){
      .hero-slide-inner{flex-wrap:wrap;padding:0 24px;}.hero-slide-left,.hero-slide-right{flex:0 0 100%;max-width:100%;}.hero-slide-right{display:none;}
      .stats-inner{grid-template-columns:repeat(3,1fr);}
      .why-grid,.testi-grid{grid-template-columns:1fr 1fr;}
      .process-steps{grid-template-columns:repeat(3,1fr);}
      .cta-inner{grid-template-columns:1fr;}
      .contact-cards{grid-template-columns:1fr 1fr;}
      .svc-panel-right{grid-template-columns:1fr;}
    }
    @media(max-width:576px){
      .stats-inner{grid-template-columns:1fr 1fr;}
      .why-grid,.testi-grid{grid-template-columns:1fr;}
      .process-steps{grid-template-columns:1fr 1fr;}
      .contact-cards{grid-template-columns:1fr 1fr;}
      .svc-feat-grid{grid-template-columns:1fr;}
      .svc-highlights{flex-direction:column;}
      .svc-highlight{border-right:none;border-bottom:1px solid var(--borderlite);}
    }
  </style>
HTML;

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>
<!-- ===== HERO WAVE SLIDER ===== -->
    <div class="hero-slider-wrap">
    <!-- Slide 1 — Complete Services -->
    <div class="hero-slide active" style="background:#134E3A;">
      <div class="hero-slide-inner">
        <div class="hero-slide-left">
          <div class="hero-badge"><i class="bi bi-calculator-fill"></i> AASHISH &amp; COMPANY — CA/CS &amp; Tax Professionals</div>
          <h1>Expert <em>CA/CS</em><br>&amp; Taxation Services</h1>
          <p class="hero-slide-desc">Complete financial compliance, company registration, income tax, GST, audit &amp; business advisory — delivered by certified professionals with 20+ Years of Professional Experience in Dehradun.</p>
          <div class="hero-stats-row">
            <div class="hstat"><div class="hstat-num">3000<span style="font-size:.8rem;">+</span></div><div class="hstat-label">Tax Returns Filed</div></div>
            <div class="hstat"><div class="hstat-num">200<span style="font-size:.8rem;">+</span></div><div class="hstat-label">Companies Registered</div></div>
            <div class="hstat"><div class="hstat-num">20<span style="font-size:.8rem;">+</span></div><div class="hstat-label">Years Experience</div></div>
          </div>
          <div class="hero-btns">
            <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> Get Schedule Consultation</a>
            <a href="tel:+919876543210" class="btn-outline-w"><i class="bi bi-telephone-fill"></i> Call: +91 98765 43210</a>
          </div>
        </div>
        <div class="hero-slide-right">
          <div class="hero-loan-card">
            <h6><i class="bi bi-list-check"></i> All Professional Services</h6>
            <div class="hero-loan-grid">
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Income Tax Filing</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> GST Registration &amp; Return</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Company Incorporation</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> LLP Registration</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> TDS Return Filing</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Audit &amp; Assurance</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Accounting Services</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> ROC Compliance</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> NRI Taxation</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Business Advisory</div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-wave"><svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,40 C360,80 1080,0 1440,40 L1440,70 L0,70 Z" fill="#ffffff"/></svg></div>
    </div>

    <!-- Slide 2 — Company & Compliance -->
    <div class="hero-slide" style="background:#134E3A;">
      <div class="hero-slide-inner">
        <div class="hero-slide-left">
          <div class="hero-badge"><i class="bi bi-building-fill-check"></i> Company Registration &amp; Compliance</div>
          <h1>Private Limited, <em>LLP</em>, OPC<br>&amp; ROC Filing</h1>
          <p class="hero-slide-desc">Start your business with the right structure. We handle everything from DIN, DSC, Name Approval to Incorporation Certificate. PAN, TAN, GST — all in one place.</p>
          <div class="hero-stats-row">
            <div class="hstat"><div class="hstat-num">200<span style="font-size:.8rem;">+</span></div><div class="hstat-label">Companies Incorporated</div></div>
            <div class="hstat"><div class="hstat-num">15<span style="font-size:.8rem;"> days</span></div><div class="hstat-label">Average Turnaround</div></div>
            <div class="hstat"><div class="hstat-num">100<span style="font-size:.8rem;">%</span></div><div class="hstat-label">Digital Process</div></div>
          </div>
          <div class="hero-btns">
            <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> Register Your Company</a>
            <a href="tel:+919876543210" class="btn-outline-w"><i class="bi bi-telephone-fill"></i> Call Now</a>
          </div>
        </div>
        <div class="hero-slide-right">
          <div class="hero-loan-card">
            <h6><i class="bi bi-shield-fill-check"></i> Why Choose Aashish &amp; Company?</h6>
            <div class="hero-loan-grid">
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Certified CA/CS Team</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Complete Online Process</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Transparent &amp; Ethical</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Post-Incorporation Support</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Annual Compliance Package</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> PAN, TAN, GST Included</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Transparent professional fees</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Dedicated Point of Contact</div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-wave"><svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,20 C480,70 960,10 1440,50 L1440,70 L0,70 Z" fill="#ffffff"/></svg></div>
    </div>

    <!-- Slide 3 — Audit & Advisory -->
    <div class="hero-slide" style="background:#134E3A;">
      <div class="hero-slide-inner">
        <div class="hero-slide-left">
          <div class="hero-badge"><i class="bi bi-clipboard-check-fill"></i> Audit, Advisory &amp; Tax Planning</div>
          <h1><em>Audit</em> &amp;<br>Business Advisory</h1>
          <p class="hero-slide-desc">Statutory audit, internal audit, tax audit, stock audit — plus professional business advisory and tax planning assistance and ensure complete compliance.</p>
          <div class="hero-stats-row">
            <div class="hstat"><div class="hstat-num">400<span style="font-size:.8rem;">+</span></div><div class="hstat-label">Audits Completed</div></div>
            <div class="hstat"><div class="hstat-num">100<span style="font-size:.8rem;">%</span></div><div class="hstat-label">Compliance Rate</div></div>
            <div class="hstat"><div class="hstat-num">24/7</div><div class="hstat-label">Support</div></div>
          </div>
          <div class="hero-btns">
            <a href="contact.php" class="btn-gold"><i class="bi bi-send-fill"></i> Request Audit Service</a>
            <a href="tel:+919876543210" class="btn-outline-w"><i class="bi bi-telephone-fill"></i> Call Now</a>
          </div>
        </div>
        <div class="hero-slide-right">
          <div class="hero-loan-card">
            <h6><i class="bi bi-graph-up-arrow"></i> Advisory Services</h6>
            <div class="hero-loan-grid">
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Tax Audit (44AB)</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Statutory Audit</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Internal Audit</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Stock Audit</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Tax Planning</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Business Restructuring</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Financial Projections</div>
              <div class="hero-loan-item"><i class="bi bi-check-circle-fill"></i> Due Diligence</div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-wave"><svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,50 C300,10 1100,70 1440,30 L1440,70 L0,70 Z" fill="#ffffff"/></svg></div>
    </div>

    <button class="hero-arrow hero-arrow-prev" onclick="changeSlide(-1)"><i class="bi bi-chevron-left"></i></button>
    <button class="hero-arrow hero-arrow-next" onclick="changeSlide(1)"><i class="bi bi-chevron-right"></i></button>
    <div class="hero-slider-dots">
      <button class="hero-dot active" onclick="goSlide(0)"></button>
      <button class="hero-dot" onclick="goSlide(1)"></button>
      <button class="hero-dot" onclick="goSlide(2)"></button>
    </div>
  </div>

  <!-- MARQUEE -->
  <div class="strip-wrap">
    <div class="strip-track">
      <div class="strip-item"><i class="bi bi-file-earmark-text-fill"></i><span>Income Tax Filing</span></div>
      <div class="strip-item"><i class="bi bi-receipt-cutoff"></i><span>GST Services</span></div>
      <div class="strip-item"><i class="bi bi-building-fill-check"></i><span>Company Registration</span></div>
      <div class="strip-item"><i class="bi bi-journal-bookmark-fill"></i><span>Audit &amp; Assurance</span></div>
      <div class="strip-item"><i class="bi bi-calculator-fill"></i><span>Tax Planning</span></div>
      <div class="strip-item"><i class="bi bi-person-badge-fill"></i><span>ROC Compliance</span></div>
      <div class="strip-item"><i class="bi bi-book-half"></i><span>Accounting</span></div>
      <div class="strip-item"><i class="bi bi-file-earmark-ruled-fill"></i><span>TDS Return</span></div>
      <div class="strip-item"><i class="bi bi-globe2"></i><span>NRI Taxation</span></div>
      <div class="strip-item"><i class="bi bi-shop"></i><span>Business Advisory</span></div>
      <!-- Duplicate for loop -->
      <div class="strip-item"><i class="bi bi-file-earmark-text-fill"></i><span>Income Tax Filing</span></div>
      <div class="strip-item"><i class="bi bi-receipt-cutoff"></i><span>GST Services</span></div>
      <div class="strip-item"><i class="bi bi-building-fill-check"></i><span>Company Registration</span></div>
      <div class="strip-item"><i class="bi bi-journal-bookmark-fill"></i><span>Audit &amp; Assurance</span></div>
      <div class="strip-item"><i class="bi bi-calculator-fill"></i><span>Tax Planning</span></div>
      <div class="strip-item"><i class="bi bi-person-badge-fill"></i><span>ROC Compliance</span></div>
      <div class="strip-item"><i class="bi bi-book-half"></i><span>Accounting</span></div>
      <div class="strip-item"><i class="bi bi-file-earmark-ruled-fill"></i><span>TDS Return</span></div>
      <div class="strip-item"><i class="bi bi-globe2"></i><span>NRI Taxation</span></div>
      <div class="strip-item"><i class="bi bi-shop"></i><span>Business Advisory</span></div>
    </div>
  </div>

  <!-- STATS -->
  <div class="stats-sec">
    <div class="stats-inner">
      <div class="stat-card"><div class="stat-num">3000<em>+</em></div><div class="stat-label">Tax Returns Filed</div></div>
      <div class="stat-card"><div class="stat-num">200<em>+</em></div><div class="stat-label">Companies Incorporated</div></div>
      <div class="stat-card"><div class="stat-num">20<em>+</em></div><div class="stat-label">Years of Trust</div></div>
      <div class="stat-card"><div class="stat-num">10<em>+</em></div><div class="stat-label">Professional Services</div></div>
      <div class="stat-card"><div class="stat-num">99<em>%</em></div><div class="stat-label">Client Satisfaction</div></div>
    </div>
  </div>

  <!-- ===== SERVICE TABS ===== -->
  <div class="svc-sec" id="services">
    <div class="svc-inner">
      <div class="text-center mb-4">
        <span class="s-label">Our Expertise</span>
        <h2 class="s-title">CA/CS &amp; <em>Professional Services</em></h2>
        <div class="s-line"></div>
        <p class="s-sub">Select any service to know more — documents, process, and benefits explained by our qualified professionals.</p>
      </div>

      <div class="svc-tabs">
        <button class="svc-tab-btn active" onclick="showService('itr',this)"><i class="bi bi-file-earmark-text-fill"></i> ITR Filing</button>
        <button class="svc-tab-btn" onclick="showService('gst',this)"><i class="bi bi-receipt-cutoff"></i> GST Services</button>
        <button class="svc-tab-btn" onclick="showService('company',this)"><i class="bi bi-building-fill-check"></i> Company Registration</button>
        <button class="svc-tab-btn" onclick="showService('audit',this)"><i class="bi bi-journal-bookmark-fill"></i> Audit &amp; Assurance</button>
        <button class="svc-tab-btn" onclick="showService('tds',this)"><i class="bi bi-file-earmark-ruled-fill"></i> TDS Return</button>
        <button class="svc-tab-btn" onclick="showService('accounting',this)"><i class="bi bi-book-half"></i> Accounting</button>
        <button class="svc-tab-btn" onclick="showService('roc',this)"><i class="bi bi-person-badge-fill"></i> ROC Compliance</button>
        <button class="svc-tab-btn" onclick="showService('nri',this)"><i class="bi bi-globe2"></i> NRI Taxation</button>
        <button class="svc-tab-btn" onclick="showService('advisory',this)"><i class="bi bi-shop"></i> Business Advisory</button>
      </div>

      <!-- ITR Filing -->
      <div class="svc-panel active" id="panel-itr">
        <div class="svc-panel-wrap">
          <div class="svc-panel-left">
            <div class="svc-panel-num">1</div>
            <div class="svc-panel-label"><i class="bi bi-file-earmark-text-fill"></i> Income Tax</div>
            <h2 class="svc-panel-title">Income Tax <em>Return Filing</em></h2>
            <div class="svc-panel-underline"></div>
            <p class="svc-panel-desc">Salaried, business, capital gains — file your ITR accurately with file your ITR accurately with maximum tax savings. Our CA/CS team ensures compliance with all provisions of the Income Tax Act.</p>
            <div class="svc-highlights">
              <div class="svc-highlight"><div class="svc-highlight-label">Applicable For</div><div class="svc-highlight-val">Salaried &amp; Business</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Filing Mode</div><div class="svc-highlight-val">Online / Offline</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Processing Time</div><div class="svc-highlight-val">1–3 Working Days</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Year</div><div class="svc-highlight-val">FY 2024-25 &amp; Before</div></div>
            </div>
            <div class="svc-features"><h5><i class="bi bi-star-fill" style="color:var(--gold);"></i> Key Features &amp; Benefits</h5>
            <div class="svc-feat-grid">
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> ITR-1 to ITR-7 all forms</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Maximize deductions u/s 80C, 80D</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Capital gains &amp; business income</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Carry forward losses set-off</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Revised &amp; belated returns</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Professional tax planning assistance</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> E-verification completed</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Dedicated filing assistance</div>
            </div></div>
            <div class="svc-docs"><h5><i class="bi bi-folder2-open" style="color:var(--gold);"></i> Documents Required</h5>
            <div class="svc-doc-tags">
              <span class="svc-doc-tag"><i class="bi bi-credit-card-fill"></i> PAN Card</span>
              <span class="svc-doc-tag"><i class="bi bi-credit-card-2-front"></i> Aadhaar Card</span>
              <span class="svc-doc-tag"><i class="bi bi-file-earmark-text-fill"></i> Form 16 / Salary Slips</span>
              <span class="svc-doc-tag"><i class="bi bi-bank2"></i> Bank Statements</span>
              <span class="svc-doc-tag"><i class="bi bi-file-earmark-ruled-fill"></i> Investment Proofs</span>
              <span class="svc-doc-tag"><i class="bi bi-file-earmark-check-fill"></i> Previous Year ITR</span>
            </div></div>
            <a href="contact.php" class="btn-gold svc-apply-btn"><i class="bi bi-send-fill"></i> File Your ITR Now</a>
          </div>
          <div class="svc-panel-right">
            <div class="svc-subtypes-card">
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-person-fill"></i></div><div><p class="svc-subtype-title">Salaried ITR (ITR-1/2)</p><p class="svc-subtype-desc">Form 16 based quick filing</p></div></div>
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-briefcase-fill"></i></div><div><p class="svc-subtype-title">Business ITR (ITR-3/4)</p><p class="svc-subtype-desc">Presumptive &amp; regular income</p></div></div>
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-graph-up-arrow"></i></div><div><p class="svc-subtype-title">Capital Gains ITR</p><p class="svc-subtype-desc">Shares, mutual funds, property</p></div></div>
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-arrow-repeat"></i></div><div><p class="svc-subtype-title">Revised / Belated Return</p><p class="svc-subtype-desc">Correction or past year filing</p></div></div>
            </div>
            <div class="svc-why-card">
              <h5><i class="bi bi-shield-fill-check"></i> Why File With Us?</h5>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-person-check-fill"></i></div><div><p class="svc-why-title">Expert Review</p><p class="svc-why-sub">CA/CS verifies your return for accuracy &amp; savings</p></div></div>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-clock-history"></i></div><div><p class="svc-why-title">Timely Filing</p><p class="svc-why-sub">Avoid late fee &amp; penalty — 100% on time</p></div></div>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-headset"></i></div><div><p class="svc-why-title">Free Consultation</p><p class="svc-why-sub">Tax planning assistance based on applicable provisions</p></div></div>
              <a href="contact.php" class="svc-why-cta"><i class="bi bi-telephone-fill"></i> Contact Our Tax Team</a>
            </div>
          </div>
        </div>
      </div>

      <!-- GST -->
      <div class="svc-panel" id="panel-gst">
        <div class="svc-panel-wrap">
          <div class="svc-panel-left">
            <div class="svc-panel-num">2</div>
            <div class="svc-panel-label"><i class="bi bi-receipt-cutoff"></i> Goods &amp; Services Tax</div>
            <h2 class="svc-panel-title">GST <em>Services</em></h2>
            <div class="svc-panel-underline"></div>
            <p class="svc-panel-desc">Complete GST solutions — registration, monthly/quarterly return filing, annual return, reconciliation, and E-way bill support. Stay compliant effortlessly.</p>
            <div class="svc-highlights">
              <div class="svc-highlight"><div class="svc-highlight-label">Registration</div><div class="svc-highlight-val">Regular / Composition</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Return Filing</div><div class="svc-highlight-val">GSTR-1, 3B, 9, 9C</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Processing Time</div><div class="svc-highlight-val">3–7 Days (Registration)</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Support</div><div class="svc-highlight-val">Dedicated GST Expert</div></div>
            </div>
            <div class="svc-features"><h5><i class="bi bi-star-fill" style="color:var(--gold);"></i> Key Features &amp; Benefits</h5>
            <div class="svc-feat-grid">
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> New GST registration within 7 days</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Composition scheme registration</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Accurate input tax credit (ITC) reconciliation</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> GSTR-1, 3B monthly/quarterly filing</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Annual return GSTR-9 &amp; 9C</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> E-way bill generation assistance</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> GST notice reply &amp; consultation</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> LUT under export of services</div>
            </div></div>
            <div class="svc-docs"><h5><i class="bi bi-folder2-open" style="color:var(--gold);"></i> Documents Required</h5>
            <div class="svc-doc-tags">
              <span class="svc-doc-tag"><i class="bi bi-credit-card-fill"></i> PAN Card</span>
              <span class="svc-doc-tag"><i class="bi bi-credit-card-2-front"></i> Aadhaar Card</span>
              <span class="svc-doc-tag"><i class="bi bi-geo-alt-fill"></i> Address Proof</span>
              <span class="svc-doc-tag"><i class="bi bi-bank2"></i> Bank Statement / Cancel Cheque</span>
              <span class="svc-doc-tag"><i class="bi bi-file-earmark-check-fill"></i> Business Registration Proof</span>
              <span class="svc-doc-tag"><i class="bi bi-person-badge-fill"></i> Photograph</span>
            </div></div>
            <a href="contact.php" class="btn-gold svc-apply-btn"><i class="bi bi-send-fill"></i> Apply for GST Registration</a>
          </div>
          <div class="svc-panel-right">
            <div class="svc-subtypes-card">
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-person-plus-fill"></i></div><div><p class="svc-subtype-title">New GST Registration</p><p class="svc-subtype-desc">Individual, company, LLP, firm</p></div></div>
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-file-earmark-text-fill"></i></div><div><p class="svc-subtype-title">GST Return Filing</p><p class="svc-subtype-desc">Monthly / quarterly compliance</p></div></div>
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-arrow-repeat"></i></div><div><p class="svc-subtype-title">GST Reconciliation</p><p class="svc-subtype-desc">Match purchase data &amp; ITC</p></div></div>
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-exclamation-triangle-fill"></i></div><div><p class="svc-subtype-title">GST Notice Handling</p><p class="svc-subtype-desc">Expert reply &amp; representation</p></div></div>
            </div>
            <div class="svc-why-card">
              <h5><i class="bi bi-shield-fill-check"></i> Why Choose Our GST Service?</h5>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-clock-history"></i></div><div><p class="svc-why-title">Timely Return Filing</p><p class="svc-why-sub">Filing on time every time</p></div></div>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-calculator-fill"></i></div><div><p class="svc-why-title">Proper ITC Reconciliation</p><p class="svc-why-sub">Ensure all input credit is taken</p></div></div>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-person-video2"></i></div><div><p class="svc-why-title">Dedicated SPOC</p><p class="svc-why-sub">Single point of contact for all queries</p></div></div>
              <a href="contact.php" class="svc-why-cta"><i class="bi bi-telephone-fill"></i> Talk to GST Expert</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Company Registration -->
      <div class="svc-panel" id="panel-company">
        <div class="svc-panel-wrap">
          <div class="svc-panel-left">
            <div class="svc-panel-num">3</div>
            <div class="svc-panel-label"><i class="bi bi-building-fill-check"></i> Incorporation</div>
            <h2 class="svc-panel-title">Company <em>Registration</em></h2>
            <div class="svc-panel-underline"></div>
            <p class="svc-panel-desc">Private Limited, LLP, One Person Company (OPC), or Public Limited — we handle end‑to‑end incorporation with DIN, DSC, name approval, MoA, AoA, PAN, TAN &amp; GST.</p>
            <div class="svc-highlights">
              <div class="svc-highlight"><div class="svc-highlight-label">Entity Types</div><div class="svc-highlight-val">Pvt Ltd, LLP, OPC, Public</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Turnaround</div><div class="svc-highlight-val">10–15 Working Days</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Process</div><div class="svc-highlight-val">100% Digital</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Support</div><div class="svc-highlight-val">Ongoing Compliance Assistance</div></div>
            </div>
            <div class="svc-features"><h5><i class="bi bi-star-fill" style="color:var(--gold);"></i> Key Features &amp; Benefits</h5>
            <div class="svc-feat-grid">
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> DIN &amp; DSC for directors</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Name reservation (RUN)</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> MoA &amp; AoA drafting</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Certificate of Incorporation</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> PAN &amp; TAN application</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> GST registration included</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Bank account opening assistance</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Post‑incorporation compliance</div>
            </div></div>
            <div class="svc-docs"><h5><i class="bi bi-folder2-open" style="color:var(--gold);"></i> Documents Required</h5>
            <div class="svc-doc-tags">
              <span class="svc-doc-tag"><i class="bi bi-credit-card-fill"></i> PAN of Directors</span>
              <span class="svc-doc-tag"><i class="bi bi-credit-card-2-front"></i> Aadhaar of Directors</span>
              <span class="svc-doc-tag"><i class="bi bi-geo-alt-fill"></i> Registered Office Proof</span>
              <span class="svc-doc-tag"><i class="bi bi-bank2"></i> Bank Statement</span>
              <span class="svc-doc-tag"><i class="bi bi-person-badge-fill"></i> Photograph</span>
              <span class="svc-doc-tag"><i class="bi bi-file-earmark-check-fill"></i> NOC from Owner</span>
            </div></div>
            <a href="contact.php" class="btn-gold svc-apply-btn"><i class="bi bi-send-fill"></i> Register Your Company</a>
          </div>
          <div class="svc-panel-right">
            <div class="svc-subtypes-card">
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-building-fill"></i></div><div><p class="svc-subtype-title">Private Limited Company</p><p class="svc-subtype-desc">Most preferred startup entity</p></div></div>
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-people-fill"></i></div><div><p class="svc-subtype-title">LLP Registration</p><p class="svc-subtype-desc">Limited Liability Partnership</p></div></div>
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-person-fill"></i></div><div><p class="svc-subtype-title">One Person Company</p><p class="svc-subtype-desc">Single owner with limited liability</p></div></div>
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-globe"></i></div><div><p class="svc-subtype-title">Subsidiary / Branch Office</p><p class="svc-subtype-desc">For foreign entities in India</p></div></div>
            </div>
            <div class="svc-why-card">
              <h5><i class="bi bi-shield-fill-check"></i> Why Register With Us?</h5>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-patch-check-fill"></i></div><div><p class="svc-why-title">CA/CS Certified</p><p class="svc-why-sub">Process handled by qualified professionals</p></div></div>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-boxes"></i></div><div><p class="svc-why-title">Comprehensive Registration</p><p class="svc-why-sub">PAN, TAN, GST, bank account assistance</p></div></div>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-headset"></i></div><div><p class="svc-why-title">Post-registration support</p><p class="svc-why-sub">Annual filing reminders &amp; compliance help</p></div></div>
              <a href="contact.php" class="svc-why-cta"><i class="bi bi-telephone-fill"></i> Talk to Company Law Expert</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Audit -->
      <div class="svc-panel" id="panel-audit">
        <div class="svc-panel-wrap">
          <div class="svc-panel-left">
            <div class="svc-panel-num">4</div>
            <div class="svc-panel-label"><i class="bi bi-journal-bookmark-fill"></i> Assurance</div>
            <h2 class="svc-panel-title">Audit &amp; <em>Assurance</em></h2>
            <div class="svc-panel-underline"></div>
            <p class="svc-panel-desc">Statutory audit, tax audit u/s 44AB, internal audit, stock audit, and due diligence by experienced CA professionals.</p>
            <div class="svc-highlights">
              <div class="svc-highlight"><div class="svc-highlight-label">Audit Types</div><div class="svc-highlight-val">Tax, Statutory, Internal</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Compliance</div><div class="svc-highlight-val">As per applicable professional standards</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Report Delivery</div><div class="svc-highlight-val">Timely &amp; Accurate</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Support</div><div class="svc-highlight-val">Dedicated Auditor</div></div>
            </div>
            <div class="svc-features"><h5><i class="bi bi-star-fill" style="color:var(--gold);"></i> Key Features</h5>
            <div class="svc-feat-grid">
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Tax Audit (Section 44AB)</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Statutory Audit of Companies</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Internal Audit &amp; Process Review</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Stock Audit &amp; Verification</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Due Diligence Reports</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Certification &amp; Attestation</div>
            </div></div>
            <a href="contact.php" class="btn-gold svc-apply-btn"><i class="bi bi-send-fill"></i> Request Audit Service</a>
          </div>
          <div class="svc-panel-right">
            <div class="svc-subtypes-card">
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-calculator-fill"></i></div><div><p class="svc-subtype-title">Tax Audit (44AB)</p><p class="svc-subtype-desc">For businesses exceeding turnover limit</p></div></div>
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-building-fill"></i></div><div><p class="svc-subtype-title">Company Statutory Audit</p><p class="svc-subtype-desc">Mandatory for all companies</p></div></div>
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-shield-fill-check"></i></div><div><p class="svc-subtype-title">Internal Audit</p><p class="svc-subtype-desc">Improve internal controls</p></div></div>
            </div>
            <div class="svc-why-card">
              <h5><i class="bi bi-shield-fill-check"></i> Why Our Audit?</h5>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-person-check-fill"></i></div><div><p class="svc-why-title">Experienced Auditors</p><p class="svc-why-sub">Qualified CA with domain expertise</p></div></div>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-clock-history"></i></div><div><p class="svc-why-title">On‑Time Completion</p><p class="svc-why-sub">Avoid penalties &amp; last‑minute rush</p></div></div>
              <a href="contact.php" class="svc-why-cta"><i class="bi bi-telephone-fill"></i> Talk to Auditor</a>
            </div>
          </div>
        </div>
      </div>

      <!-- TDS -->
      <div class="svc-panel" id="panel-tds">
        <div class="svc-panel-wrap">
          <div class="svc-panel-left">
            <div class="svc-panel-num">5</div>
            <div class="svc-panel-label"><i class="bi bi-file-earmark-ruled-fill"></i> Deduction</div>
            <h2 class="svc-panel-title">TDS <em>Return Filing</em></h2>
            <div class="svc-panel-underline"></div>
            <p class="svc-panel-desc">Accurate TDS return preparation, filing, and TDS certificate generation for all deductors — company, firm, or individual.</p>
            <div class="svc-highlights">
              <div class="svc-highlight"><div class="svc-highlight-label">Applicable For</div><div class="svc-highlight-val">All Deductors</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Forms</div><div class="svc-highlight-val">24Q, 26Q, 27Q</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Frequency</div><div class="svc-highlight-val">Quarterly</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Support</div><div class="svc-highlight-val">Dedicated TDS Team</div></div>
            </div>
            <div class="svc-features"><h5><i class="bi bi-star-fill" style="color:var(--gold);"></i> Key Features</h5>
            <div class="svc-feat-grid">
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Form 24Q, 26Q, 27Q filing</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> TDS payment challan generation</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Form 16/16A generation</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> TDS credit reconciliation</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Correction &amp; Revised returns</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Notice reply assistance</div>
            </div></div>
            <a href="contact.php" class="btn-gold svc-apply-btn"><i class="bi bi-send-fill"></i> File TDS Return</a>
          </div>
          <div class="svc-panel-right">
            <div class="svc-subtypes-card">
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-building-fill"></i></div><div><p class="svc-subtype-title">Company / Firm TDS</p><p class="svc-subtype-desc">Regular quarterly filing</p></div></div>
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-person-fill"></i></div><div><p class="svc-subtype-title">Individual TDS Return</p><p class="svc-subtype-desc">For single deductors</p></div></div>
            </div>
            <div class="svc-why-card">
              <h5><i class="bi bi-shield-fill-check"></i> Why Us for TDS?</h5>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-shield-check"></i></div><div><p class="svc-why-title">Zero Errors</p><p class="svc-why-sub">Expert review ensures accuracy</p></div></div>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-clock-history"></i></div><div><p class="svc-why-title">On‑Time Filing</p><p class="svc-why-sub">Avoid late fee &amp; interest</p></div></div>
              <a href="contact.php" class="svc-why-cta"><i class="bi bi-telephone-fill"></i> Talk to TDS Expert</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Accounting -->
      <div class="svc-panel" id="panel-accounting">
        <div class="svc-panel-wrap">
          <div class="svc-panel-left">
            <div class="svc-panel-num">6</div>
            <div class="svc-panel-label"><i class="bi bi-book-half"></i> Financial</div>
            <h2 class="svc-panel-title">Accounting <em>Services</em></h2>
            <div class="svc-panel-underline"></div>
            <p class="svc-panel-desc">Complete bookkeeping, finalisation of accounts, financial statements, and management reporting — precise and timely.</p>
            <div class="svc-highlights">
              <div class="svc-highlight"><div class="svc-highlight-label">Scope</div><div class="svc-highlight-val">Bookkeeping to Finalisation</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Software</div><div class="svc-highlight-val">Tally, QuickBooks</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Reports</div><div class="svc-highlight-val">P&amp;L, Balance Sheet</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Delivery</div><div class="svc-highlight-val">Monthly / Quarterly</div></div>
            </div>
            <div class="svc-features"><h5><i class="bi bi-star-fill" style="color:var(--gold);"></i> Key Features</h5>
            <div class="svc-feat-grid">
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Day‑to‑day bookkeeping</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Bank reconciliation</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Accounts payable &amp; receivable</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Inventory management</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Monthly P&amp;L and Balance Sheet</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Finalisation for audit</div>
            </div></div>
            <a href="contact.php" class="btn-gold svc-apply-btn"><i class="bi bi-send-fill"></i> Request Accounting Service</a>
          </div>
          <div class="svc-panel-right">
            <div class="svc-subtypes-card">
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-journal-text"></i></div><div><p class="svc-subtype-title">Monthly Bookkeeping</p><p class="svc-subtype-desc">Regular data entry &amp; reconciliation</p></div></div>
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-file-earmark-spreadsheet-fill"></i></div><div><p class="svc-subtype-title">Finalisation of Accounts</p><p class="svc-subtype-desc">Year‑end closing &amp; statements</p></div></div>
            </div>
            <div class="svc-why-card">
              <h5><i class="bi bi-shield-fill-check"></i> Why Choose Our Accounting?</h5>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-graph-up-arrow"></i></div><div><p class="svc-why-title">Accurate &amp; Timely</p><p class="svc-why-sub">Reports delivered on schedule</p></div></div>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-folder-check"></i></div><div><p class="svc-why-title">Audit Ready</p><p class="svc-why-sub">Finals prepared to ease audit</p></div></div>
              <a href="contact.php" class="svc-why-cta"><i class="bi bi-telephone-fill"></i> Talk to Accountant</a>
            </div>
          </div>
        </div>
      </div>

      <!-- ROC Compliance -->
      <div class="svc-panel" id="panel-roc">
        <div class="svc-panel-wrap">
          <div class="svc-panel-left">
            <div class="svc-panel-num">7</div>
            <div class="svc-panel-label"><i class="bi bi-person-badge-fill"></i> Corporate Law</div>
            <h2 class="svc-panel-title">ROC <em>Compliance</em></h2>
            <div class="svc-panel-underline"></div>
            <p class="svc-panel-desc">Annual return filing, event‑based forms, director KYC, and complete secretarial compliance for companies and LLPs.</p>
            <div class="svc-highlights">
              <div class="svc-highlight"><div class="svc-highlight-label">Entity</div><div class="svc-highlight-val">Company / LLP</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Forms</div><div class="svc-highlight-val">MGT‑7, AOC‑4, DIR‑3 KYC</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Frequency</div><div class="svc-highlight-val">Annual &amp; Event Based</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Support</div><div class="svc-highlight-val">Company Secretary Team</div></div>
            </div>
            <div class="svc-features"><h5><i class="bi bi-star-fill" style="color:var(--gold);"></i> Key Features</h5>
            <div class="svc-feat-grid">
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Annual return (MGT‑7)</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Financial statements (AOC‑4)</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Director KYC (DIR‑3 KYC)</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Change in directors / address</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Share transfer &amp; allotment</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Strike off &amp; closure</div>
            </div></div>
            <a href="contact.php" class="btn-gold svc-apply-btn"><i class="bi bi-send-fill"></i> Get ROC Filing</a>
          </div>
          <div class="svc-panel-right">
            <div class="svc-subtypes-card">
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-file-earmark-text-fill"></i></div><div><p class="svc-subtype-title">Annual Filing</p><p class="svc-subtype-desc">MGT‑7, AOC‑4, ADT‑1</p></div></div>
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-arrow-repeat"></i></div><div><p class="svc-subtype-title">Event Based Forms</p><p class="svc-subtype-desc">DIR‑12, SH‑7, etc.</p></div></div>
            </div>
            <div class="svc-why-card">
              <h5><i class="bi bi-shield-fill-check"></i> Why Choose Our Compliance?</h5>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-person-badge-fill"></i></div><div><p class="svc-why-title">CS Managed</p><p class="svc-why-sub">Qualified Company Secretary handles all</p></div></div>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-clock-history"></i></div><div><p class="svc-why-title">Never Miss a Deadline</p><p class="svc-why-sub">Auto reminders &amp; timely filing</p></div></div>
              <a href="contact.php" class="svc-why-cta"><i class="bi bi-telephone-fill"></i> Talk to CS Expert</a>
            </div>
          </div>
        </div>
      </div>

      <!-- NRI Taxation -->
      <div class="svc-panel" id="panel-nri">
        <div class="svc-panel-wrap">
          <div class="svc-panel-left">
            <div class="svc-panel-num">8</div>
            <div class="svc-panel-label"><i class="bi bi-globe2"></i> International</div>
            <h2 class="svc-panel-title">NRI <em>Taxation</em></h2>
            <div class="svc-panel-underline"></div>
            <p class="svc-panel-desc">Specialized tax planning and filing for Non‑Resident Indians — income from India, DTAA, repatriation, and FEMA compliance.</p>
            <div class="svc-highlights">
              <div class="svc-highlight"><div class="svc-highlight-label">Applicable For</div><div class="svc-highlight-val">NRIs / PIOs</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Income Types</div><div class="svc-highlight-val">Salary, Rent, Capital Gains</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Filing</div><div class="svc-highlight-val">ITR‑2 / ITR‑3</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Support</div><div class="svc-highlight-val">DTAA Expert</div></div>
            </div>
            <div class="svc-features"><h5><i class="bi bi-star-fill" style="color:var(--gold);"></i> Key Features</h5>
            <div class="svc-feat-grid">
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> NRI ITR filing (ITR‑2/3)</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> DTAA benefit claim</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Tax on sale of property/shares</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Repatriation of funds</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> RBI &amp; FEMA compliance</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Advance tax planning</div>
            </div></div>
            <a href="contact.php" class="btn-gold svc-apply-btn"><i class="bi bi-send-fill"></i> File NRI Tax Return</a>
          </div>
          <div class="svc-panel-right">
            <div class="svc-subtypes-card">
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-house-door-fill"></i></div><div><p class="svc-subtype-title">Property Sale Tax</p><p class="svc-subtype-desc">TDS deduction &amp; capital gains</p></div></div>
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-briefcase-fill"></i></div><div><p class="svc-subtype-title">NRI Salary / Business</p><p class="svc-subtype-desc">Tax on India‑sourced income</p></div></div>
            </div>
            <div class="svc-why-card">
              <h5><i class="bi bi-shield-fill-check"></i> Why Our NRI Taxation?</h5>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-globe2"></i></div><div><p class="svc-why-title">DTAA Expert</p><p class="svc-why-sub">Maximize tax relief under treaty</p></div></div>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-laptop"></i></div><div><p class="svc-why-title">Seamless Filing</p><p class="svc-why-sub">Digital process from abroad</p></div></div>
              <a href="contact.php" class="svc-why-cta"><i class="bi bi-telephone-fill"></i> Talk to NRI Tax Expert</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Business Advisory -->
      <div class="svc-panel" id="panel-advisory">
        <div class="svc-panel-wrap">
          <div class="svc-panel-left">
            <div class="svc-panel-num">9</div>
            <div class="svc-panel-label"><i class="bi bi-shop"></i> Consulting</div>
            <h2 class="svc-panel-title">Business <em>Advisory</em></h2>
            <div class="svc-panel-underline"></div>
            <p class="svc-panel-desc">Strategic business advisory, financial projections, startup consulting, and business restructuring to drive growth and compliance.</p>
            <div class="svc-highlights">
              <div class="svc-highlight"><div class="svc-highlight-label">Services</div><div class="svc-highlight-val">Startup, Growth, Exit</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Deliverables</div><div class="svc-highlight-val">Report &amp; Consultation</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Expertise</div><div class="svc-highlight-val">CA/CS &amp; Industry Experts</div></div>
              <div class="svc-highlight"><div class="svc-highlight-label">Mode</div><div class="svc-highlight-val">Online / Offline</div></div>
            </div>
            <div class="svc-features"><h5><i class="bi bi-star-fill" style="color:var(--gold);"></i> Key Areas</h5>
            <div class="svc-feat-grid">
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Startup India registration</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Business plan &amp; projections</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Financial restructuring</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Valuation support</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Investor readiness</div>
              <div class="svc-feat-item"><i class="bi bi-check-circle-fill"></i> Cost optimization</div>
            </div></div>
            <a href="contact.php" class="btn-gold svc-apply-btn"><i class="bi bi-send-fill"></i> Request Advisory</a>
          </div>
          <div class="svc-panel-right">
            <div class="svc-subtypes-card">
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-rocket-takeoff-fill"></i></div><div><p class="svc-subtype-title">Startup Consulting</p><p class="svc-subtype-desc">Incorporate, fundraise, grow</p></div></div>
              <div class="svc-subtype-item"><div class="svc-subtype-icon"><i class="bi bi-bar-chart-fill"></i></div><div><p class="svc-subtype-title">Financial Modeling</p><p class="svc-subtype-desc">Projections &amp; business plans</p></div></div>
            </div>
            <div class="svc-why-card">
              <h5><i class="bi bi-shield-fill-check"></i> Why Our Advisory?</h5>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-lightbulb-fill"></i></div><div><p class="svc-why-title">Practical Insights</p><p class="svc-why-sub">Actionable advice, not just theory</p></div></div>
              <div class="svc-why-item"><div class="svc-why-check"><i class="bi bi-people-fill"></i></div><div><p class="svc-why-title">Experienced Team</p><p class="svc-why-sub">CAs with industry exposure</p></div></div>
              <a href="contact.php" class="svc-why-cta"><i class="bi bi-telephone-fill"></i> Talk to Advisor</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- EXPERTISE CHIPS -->
  <div class="expertise-sec">
    <div class="expertise-inner">
      <div class="text-center mb-4">
        <span class="s-label">Our Specialization</span>
        <h2 class="s-title">Areas of <em>Expertise</em></h2>
        <div class="s-line"></div>
        <p class="s-sub">We cover all major taxation and compliance domains for individuals &amp; businesses.</p>
      </div>
      <div class="expertise-grid">
        <div class="expertise-chip">Income Tax</div><div class="expertise-chip">GST</div><div class="expertise-chip">Company Law</div>
        <div class="expertise-chip">LLP Act</div><div class="expertise-chip">Audit &amp; Assurance</div><div class="expertise-chip">ROC Filing</div>
        <div class="expertise-chip">TDS/TCS</div><div class="expertise-chip">International Taxation</div><div class="expertise-chip">NRI Taxation</div>
        <div class="expertise-chip">Accounting Standards</div><div class="expertise-chip">Business Advisory</div><div class="expertise-chip">Startup India</div>
        <div class="expertise-chip">FEMA</div><div class="expertise-chip">RBI Compliance</div><div class="expertise-chip">Digital Signature</div>
        <div class="expertise-chip">MSME Registration</div><div class="expertise-chip">IEC Code</div><div class="expertise-chip">Trademark</div>
      </div>
    </div>
  </div>

  <!-- WHY US -->
  <div class="why-sec">
    <div class="why-inner">
      <div class="text-center mb-5">
        <span class="s-label">Why Choose Us</span>
        <h2 class="s-title">Why <em>Aashish &amp; Company</em> for CA/CS?</h2>
        <div class="s-line"></div>
        <p class="s-sub">Certified professionals, transparent process, and dedicated support — the reason 500+ clients trust us in Dehradun.</p>
      </div>
      <div class="why-grid">
        <div class="why-card"><div class="why-icon"><i class="bi bi-person-check-fill"></i></div><h5>Certified CA/CS Team</h5><p>All services handled by qualified Chartered Accountants and Company Secretaries.</p></div>
        <div class="why-card"><div class="why-icon"><i class="bi bi-shield-fill-check"></i></div><h5>100% Compliance</h5><p>Zero errors, timely filings — no penalties or notices.</p></div>
        <div class="why-card"><div class="why-icon"><i class="bi bi-file-earmark-check-fill"></i></div><h5>Paperless Process</h5><p>Digital document upload, e‑verification, and online tracking.</p></div>
        <div class="why-card"><div class="why-icon"><i class="bi bi-headset"></i></div><h5>Dedicated Manager</h5><p>Single point of contact for all your compliance needs.</p></div>
        <div class="why-card"><div class="why-icon"><i class="bi bi-clock-fill"></i></div><h5>Quick Turnaround</h5><p>Fast processing without compromising accuracy.</p></div>
        <div class="why-card"><div class="why-icon"><i class="bi bi-wallet2"></i></div><h5>Transparent &amp; Ethical</h5><p>No hidden fees — clear communication and value for money.</p></div>
      </div>
    </div>
  </div>

  <!-- PROCESS -->
  <div class="process-sec">
    <div class="process-inner">
      <div class="text-center mb-5">
        <span class="s-label">How It Works</span>
        <h2 class="s-title">Simple <em>4 Step Process</em></h2>
        <div class="s-line"></div>
      </div>
      <div class="process-steps">
        <div class="pstep"><div class="pstep-num">1</div><h6>Free Enquiry</h6><p>Share your requirement — call or fill form. We respond in 30 minutes.</p></div>
        <div class="pstep"><div class="pstep-num">2</div><h6>Document Submission</h6><p>Upload docs via WhatsApp or email. Doorstep pickup available.</p></div>
        <div class="pstep"><div class="pstep-num">3</div><h6>Processing &amp; Review</h6><p>Our CA/CS team prepares your filing/ registration meticulously.</p></div>
        <div class="pstep"><div class="pstep-num">4</div><h6>Delivery &amp; Support</h6><p>Get your ITR filed, GST registered, company incorporated — with ongoing support.</p></div>
      </div>
    </div>
  </div>

  <!-- CTA -->
  <div class="cta-sec">
    <div class="cta-inner">
      <div>
        <span class="s-label" style="color:var(--gold);">Get Expert Help</span>
        <h2 class="cta-title">Your <em>Serving Clients</em><br>CA/CS Partner</h2>
        <p class="cta-desc">File your taxes, register your company, or get audit support — Aashish &amp; Company is your one‑stop solution for all financial compliance needs in Dehradun.</p>
        <ul class="cta-list">
          <li><i class="bi bi-check-circle-fill"></i> Free consultation — no obligation</li>
          <li><i class="bi bi-check-circle-fill"></i> Certified CA/CS professionals</li>
          <li><i class="bi bi-check-circle-fill"></i> Doorstep document pickup</li>
          <li><i class="bi bi-check-circle-fill"></i> 100% digital &amp; secure process</li>
        </ul>
        <a href="contact.php" class="btn-gold" style="font-size:1rem;padding:14px 32px;color:#FFFFFF !important;"><i class="bi bi-send-fill" style="color:#FFFFFF !important;"></i> Request Free Consultation</a>
      </div>
      <div>
        <div class="cta-right">
          <h5>📞 Contact Our CA/CS Team</h5>
          <div class="cta-citem"><div class="cta-citem-icon"><i class="bi bi-telephone-fill"></i></div><div class="cta-citem-text"><a href="tel:+919876543210">+91 98765 43210</a><span>Mon–Sat: 9 AM – 7 PM</span></div></div>
          <div class="cta-citem"><div class="cta-citem-icon"><i class="bi bi-whatsapp"></i></div><div class="cta-citem-text"><a href="https://wa.me/919876543210">WhatsApp Now</a><span>Quick response guaranteed</span></div></div>
          <div class="cta-citem"><div class="cta-citem-icon"><i class="bi bi-envelope-fill"></i></div><div class="cta-citem-text"><a href="mailto:contact@aashishandco.in">contact@aashishandco.in</a><span>Reply within 2 hours</span></div></div>
          <div class="cta-citem"><div class="cta-citem-icon"><i class="bi bi-geo-alt-fill"></i></div><div class="cta-citem-text"><span>123, Rajpur Road, Dehradun – 248001</span><span>All India Services</span></div></div>
        </div>
      </div>
    </div>
  </div>

  <!-- TESTIMONIALS -->
  <div class="testi-sec">
    <div class="testi-inner">
      <div class="text-center mb-5">
        <span class="s-label">Client Reviews</span>
        <h2 class="s-title">What Our <em>Clients Say</em></h2>
        <div class="s-line"></div>
      </div>
      <div class="testi-grid">
        <div class="testi-card"><div class="testi-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div><p class="testi-text">"Aashish &amp; Company handled our ITR and GST filings perfectly. Professional team, always available. Professional CA in Dehradun!"</p><div class="testi-auth"><div class="testi-av">V</div><div><p class="testi-name">Vikram Joshi</p><p class="testi-role">Business Owner, Dehradun</p></div></div></div>
        <div class="testi-card"><div class="testi-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div><p class="testi-text">"Company registration was smooth and quick. They provided PAN, TAN, GST — everything in one package. Highly recommended."</p><div class="testi-auth"><div class="testi-av">S</div><div><p class="testi-name">Suresh Rawat</p><p class="testi-role">Startup Founder, Haridwar</p></div></div></div>
        <div class="testi-card"><div class="testi-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div><p class="testi-text">"Audit services were thorough and reports delivered on time. The team explained every finding clearly. Truly trustworthy."</p><div class="testi-auth"><div class="testi-av">M</div><div><p class="testi-name">Meena Kapoor</p><p class="testi-role">Director, Rishikesh</p></div></div></div>
      </div>
    </div>
  </div>

  <!-- CONTACT -->
  <div class="contact-sec" id="contact">
    <div class="contact-inner">
      <div class="contact-head">
        <span class="s-label" style="color:var(--gold);">Get In Touch</span>
        <h2>Contact <em>Aashish &amp; Company</em></h2>
        <p>Available Monday to Saturday, 9 AM to 7 PM. Doorstep service in Dehradun &amp; online pan‑India.</p>
      </div>
      <div class="contact-cards">
        <div class="ccard"><div class="ccard-icon"><i class="bi bi-geo-alt-fill"></i></div><h6>Our Office</h6><p>123, Rajpur Road, Dehradun – 248001</p></div>
        <div class="ccard"><div class="ccard-icon"><i class="bi bi-telephone-fill"></i></div><h6>Phone / WhatsApp</h6><a href="tel:+919876543210">+91 98765 43210</a><p>Mon–Sat: 9 AM – 7 PM</p></div>
        <div class="ccard"><div class="ccard-icon"><i class="bi bi-envelope-fill"></i></div><h6>Email Us</h6><a href="mailto:contact@aashishandco.in">contact@aashishandco.in</a><p>Reply within 2 hours</p></div>
        <div class="ccard"><div class="ccard-icon"><i class="bi bi-clock-fill"></i></div><h6>Working Hours</h6><p>Monday – Saturday<br>9:00 AM to 7:00 PM</p></div>
      </div>
      <div class="contact-bar">
        <div><h4>Ready to simplify your tax &amp; compliance?</h4><p>Free consultation — no charges, no obligation.</p></div>
        <a href="contact.php" class="btn-white"><i class="bi bi-send-fill"></i> Send Enquiry</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Hero slider
    let heroIdx = 0;
    const heroSlides = document.querySelectorAll('.hero-slide');
    const heroDots = document.querySelectorAll('.hero-dot');
    let heroTimer = setInterval(() => changeSlide(1), 5000);
    function changeSlide(d) {
      heroSlides[heroIdx].classList.remove('active');
      heroDots[heroIdx].classList.remove('active');
      heroIdx = (heroIdx + d + heroSlides.length) % heroSlides.length;
      heroSlides[heroIdx].classList.add('active');
      heroDots[heroIdx].classList.add('active');
      clearInterval(heroTimer);
      heroTimer = setInterval(() => changeSlide(1), 5000);
    }
    function goSlide(i) {
      heroSlides[heroIdx].classList.remove('active');
      heroDots[heroIdx].classList.remove('active');
      heroIdx = i;
      heroSlides[heroIdx].classList.add('active');
      heroDots[heroIdx].classList.add('active');
      clearInterval(heroTimer);
      heroTimer = setInterval(() => changeSlide(1), 5000);
    }

    // Service tabs
    function showService(id, btn) {
      document.querySelectorAll('.svc-panel').forEach(p => p.classList.remove('active'));
      document.querySelectorAll('.svc-tab-btn').forEach(b => b.classList.remove('active'));
      const panel = document.getElementById('panel-' + id);
      if (panel) panel.classList.add('active');
      btn.classList.add('active');
      document.getElementById('services').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
  </script>
  <script src="<?php echo e(ASSETS_URL . '/js/main.js'); ?>"></script>
<?php include __DIR__ . '/includes/footer.php'; ?>
