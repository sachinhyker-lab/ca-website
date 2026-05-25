<?php
require_once __DIR__ . '/includes/config.php';

$pageTitle = 'Our Team | ' . SITE_NAME;
$metaDescription = 'Meet the experienced Chartered Accountants and professionals at Shah & Associates.';

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>

<style>
  /* Team page upgrades: keep palette + bootstrap, improve hierarchy */
  :root {
    --white: #FFFFFF;
    --borderlite: #E2E8F0;
    --mid: #64748B;
    --cream: #F1F5F9;
    --off: #F8FAF7;
    --gold: #D4A017;
    --black: #1E293B;
  }
  body{font-family:"Inter",sans-serif;color:var(--mid);}
  h1,h2,h3,h4,h5,h6{font-family:"Playfair Display",serif;color:#1F2937;}
  .page-section-pad { padding: 92px 0 64px; } /* space below fixed navbar */
  .team-hero{
    background: #134E3A;
    border-bottom: 1px solid rgba(35,35,35,.08);
    margin-top: 0; color: #fff;
  }
  .team-hero-inner { padding: 110px 0 40px; }
  .team-kicker{
    display:inline-flex; align-items:center; gap:10px;
    padding:10px 14px; border-radius:999px;
    background: rgba(255,255,255,.10);
    border: 1px solid rgba(255,255,255,.2);
    color: var(--accent-gold); font-weight: 800; font-size: .78rem;
    letter-spacing: 1.2px; text-transform: uppercase;
  }
  .team-title{ margin-top: 12px; margin-bottom: 10px; font-weight: 800; color: #fff; }
  .team-sub{ max-width: 720px; margin: 0; color: #F8FAFC; line-height: 1.9; opacity: 1; }

  .team-grid{ gap: 18px; }
  .team-card{
    height: 100%;
    background: var(--white);
    border: 1px solid var(--borderlite);
    border-radius: 14px;
    padding: 22px 18px 18px;
    box-shadow: 0 10px 26px rgba(0,0,0,.03);
    transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
    display:flex; flex-direction:column; align-items:center;
    text-align:center;
  }
  .team-card:hover{
    transform: translateY(-6px);
    border-color: rgba(201,169,110,.35);
    box-shadow: 0 18px 46px rgba(0,0,0,.09);
  }

  .team-avatar{
    width: 112px; height: 112px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid rgba(201,169,110,.35);
    background: rgba(201,169,110,.10);
  }
  .team-role{ color: var(--mid); margin: 8px 0 12px; font-weight: 700; }
  .team-desc{ color: var(--mid); margin: 0; line-height: 1.8; font-size: .9rem; }

  .team-pill-row{
    display:flex; flex-wrap:wrap; gap:10px; justify-content:center;
    margin-top: 14px;
  }
  .team-pill{
    padding: 8px 12px;
    border-radius: 999px;
    background: var(--cream);
    border: 1px solid var(--borderlite);
    font-weight: 800;
    font-size: .78rem;
    color: #1F2937;
  }

  .team-why{
    padding: 54px 0 78px;
    background: var(--off);
    border-top: 1px solid rgba(35,35,35,.06);
  }
  .team-why-card{
    background: var(--white);
    border: 1px solid var(--borderlite);
    border-radius: 14px;
    padding: 22px;
    box-shadow: 0 10px 26px rgba(0,0,0,.03);
    height: 100%;
  }
  .team-why-card h3{ font-size: 1.1rem; font-weight: 900; }

  .team-why-list{ margin-top: 14px; }
  .team-why-item{ display:flex; gap: 12px; align-items:flex-start; margin-bottom: 12px; }
  .team-why-ico{
    width: 36px; height: 36px; border-radius: 10px;
    background: var(--black); color: var(--gold);
    display:flex; align-items:center; justify-content:center;
    flex-shrink:0;
  }
  .team-why-item span{ color: var(--mid); line-height: 1.7; font-weight: 600; }

  @media(max-width: 991px){
    .team-hero{ margin-top: 0; }
    .page-section-pad{ padding-top: 86px; }
  }
</style>

<section class="team-hero">
  <div class="container team-hero-inner">
    <div class="d-flex align-items-center gap-3 flex-wrap">
      <div class="team-kicker"><i class="bi bi-people-fill"></i> Professional Team</div>
    </div>

    <h1 class="section-title team-title">Our Team</h1>
    <p class="team-sub">
      Our team brings together experienced Chartered Accountants and Company Secretaries to deliver accurate,
      timely, and compliance-focused support—built on professional ethics and structured review.
    </p>
  </div>
</section>

<section class="page-section-pad">
  <div class="container">
    <div class="row team-grid align-items-stretch">
      <div class="col-md-4 mb-4">
        <div class="team-card">
          <img
            src="<?php echo e(ASSETS_URL . '/images/team/ca-vikram-shah.jpg'); ?>"
            alt="CA Vikram Shah"
            class="team-avatar"
            onerror="this.onerror=null;this.src='https://placehold.co/300x300/C9A96E/ffffff?text=CA+Vikram+Shah'">
          <h4 class="mt-3 mb-0">CA Vikram Shah</h4>
          <div class="team-role">FCA, DISA · Senior Partner</div>
          <p class="team-desc">
            Over 25 years of experience in direct taxation, advisory, and structured compliance planning.
          </p>
          <div class="team-pill-row">
            <span class="team-pill"><i class="bi bi-shield-check"></i> Tax Advisory</span>
            <span class="team-pill"><i class="bi bi-file-earmark-text"></i> Compliance Review</span>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="team-card">
          <img
            src="<?php echo e(ASSETS_URL . '/images/team/ca-priya-mehta.jpg'); ?>"
            alt="CA Priya Mehta"
            class="team-avatar"
            onerror="this.onerror=null;this.src='https://placehold.co/300x300/C9A96E/ffffff?text=CA+Priya+Mehta'">
          <h4 class="mt-3 mb-0">CA Priya Mehta</h4>
          <div class="team-role">ACA · Partner — Audit &amp; Assurance</div>
          <p class="team-desc">
            Expertise in statutory and internal audit practices with risk-aware documentation and reporting.
          </p>
          <div class="team-pill-row">
            <span class="team-pill"><i class="bi bi-clipboard-check"></i> Audit</span>
            <span class="team-pill"><i class="bi bi-check2-circle"></i> Controls &amp; Risk</span>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="team-card">
          <img
            src="<?php echo e(ASSETS_URL . '/images/team/cs-rajesh-kumar.jpg'); ?>"
            alt="CS Rajesh Kumar"
            class="team-avatar"
            onerror="this.onerror=null;this.src='https://placehold.co/300x300/C9A96E/ffffff?text=CS+Rajesh+Kumar'">
          <h4 class="mt-3 mb-0">CS Rajesh Kumar</h4>
          <div class="team-role">Company Secretary</div>
          <p class="team-desc">
            Manages ROC compliance and secretarial requirements with timely filings and structured review.
          </p>
          <div class="team-pill-row">
            <span class="team-pill"><i class="bi bi-building"></i> ROC Compliance</span>
            <span class="team-pill"><i class="bi bi-journal-bookmark-fill"></i> Secretarial</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="team-why">
  <div class="container">
    <div class="row align-items-start g-4">
      <div class="col-lg-5">
        <div class="team-why-card">
          <h3><i class="bi bi-shield-fill-check me-2" style="color:var(--gold)"></i> How We Work</h3>
          <p class="team-desc" style="margin-top:10px">
            We follow a review-first approach: understanding the requirement, verifying documents, applying relevant
            provisions, and ensuring clear output—so you can make decisions confidently.
          </p>

          <div class="team-why-list">
            <div class="team-why-item">
              <div class="team-why-ico"><i class="bi bi-search"></i></div>
              <span>Requirement analysis and scope clarity</span>
            </div>
            <div class="team-why-item">
              <div class="team-why-ico"><i class="bi bi-check2"></i></div>
              <span>Structured verification and document checks</span>
            </div>
            <div class="team-why-item">
              <div class="team-why-ico"><i class="bi bi-clock-history"></i></div>
              <span>Timely delivery with compliance timelines</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="team-why-card">
          <h3><i class="bi bi-briefcase-fill me-2" style="color:var(--gold)"></i> Why Work With Us</h3>

          <div class="row g-3 mt-2">
            <div class="col-md-6">
              <div class="team-why-item">
                <div class="team-why-ico"><i class="bi bi-file-earmark-text"></i></div>
                <span>Professional documentation and review</span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="team-why-item">
                <div class="team-why-ico"><i class="bi bi-wallet2"></i></div>
                <span>Clear process and transparent guidance</span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="team-why-item">
                <div class="team-why-ico"><i class="bi bi-lightning-fill"></i></div>
                <span>Efficient turnaround with accuracy</span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="team-why-item">
                <div class="team-why-ico"><i class="bi bi-telephone-fill"></i></div>
                <span>Responsive support for queries</span>
              </div>
            </div>
          </div>

          <div class="d-flex flex-wrap gap-3 mt-4">
            <a href="contact.php" class="btn-primary-gold"><i class="bi bi-send-fill"></i> Schedule Consultation</a>
            <a href="blog.php" class="cta-link gold" style="margin-top:0"><i class="bi bi-journal-text"></i> Read Insights</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(ASSETS_URL . '/js/main.js'); ?>"></script>
<?php include __DIR__ . '/includes/footer.php'; ?>
