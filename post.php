<?php
require_once __DIR__ . '/includes/config.php';

$siteName = 'Aashish & Company, Chartered Accountants';

$categories = [
  'income-tax' => ['label' => 'Income Tax', 'icon' => 'bi-calculator-fill icon-taxation'],
  'gst' => ['label' => 'GST', 'icon' => 'bi-receipt-cutoff icon-taxation'],
  'compliance' => ['label' => 'Compliance', 'icon' => 'bi-clipboard-check icon-compliance'],
  'roc' => ['label' => 'ROC & Company Law', 'icon' => 'bi-building icon-compliance'],
];

$posts = [
  [
    'slug' => 'itr-forms-ay-2025-26',
    'title' => 'New ITR Forms for AY 2025-26: What Changes for You?',
    'category' => 'income-tax',
    'date' => '2025-05-10',
    'readTime' => '7 min read',
    'excerpt' => 'A practical walkthrough of new schedules/disclosure points and how to prepare documents before final submission.',
    'highlights' => ['Checklist before filing', 'Common data mismatches', 'How to reduce notices'],
    'content' => 'AY 2025-26 introduces updated reporting expectations. Review your salary details, bank account mapping, deduction proofs, and schedule-wise disclosures before filing. This guide provides a step-by-step prep workflow, highlights common mistakes, and suggests a document checklist so you can file confidently with minimal risk of notices.'
  ],
  [
    'slug' => 'e-invoicing-threshold-reduced',
    'title' => 'E-Invoicing Threshold Reduced: Impact & Readiness Plan',
    'category' => 'gst',
    'date' => '2025-04-22',
    'readTime' => '6 min read',
    'excerpt' => 'What the change means for small businesses, ERP workflows, invoice master updates, and compliance timelines.',
    'highlights' => ['ERP workflow checks', 'Master data readiness', 'Timeline planning'],
    'content' => 'E-invoicing readiness goes beyond software enablement. Ensure correct invoice master data, validation rules, and reconciliation discipline. This article covers a simple readiness approach: confirm invoice generation settings, ensure proper data accuracy, and maintain a pre-mandate checklist to reduce compliance risk.'
  ],
  [
    'slug' => 'roc-filing-deadlines-fy-2024-25',
    'title' => 'ROC Filing Deadlines for FY 2024-25: Company & LLP Calendar',
    'category' => 'compliance',
    'date' => '2025-03-18',
    'readTime' => '8 min read',
    'excerpt' => 'An easy-to-follow timeline of MCA annual return and form deadlines with preparation checkpoints.',
    'highlights' => ['MGT-7 & AOC-4 focus', 'Event-based forms', 'Approval timeline'],
    'content' => 'ROC compliance is about both timely filing and correct internal approvals. This guide provides a preparation timeline approach for FY 2024-25: gather documents early, complete board/shareholder approvals in time, and set a filing readiness checklist so you avoid rush and last-minute errors.'
  ],
  [
    'slug' => 'gst-itc-reconciliation-best-practices',
    'title' => 'GST ITC Reconciliation: Best Practices to Avoid Notices',
    'category' => 'gst',
    'date' => '2025-02-05',
    'readTime' => '9 min read',
    'excerpt' => 'Build a monthly ITC reconciliation control to detect mismatches early and strengthen compliance.',
    'highlights' => ['GSTR-2B discipline', 'Mismatch handling steps', 'Monthly routine'],
    'content' => 'ITC reconciliation should be treated like a monthly control, not a last-minute exercise. Compare purchase register data with GSTR-2B, identify mismatch patterns, and resolve them early. This guide gives a practical reconciliation workflow and shows how to structure your monthly routine to reduce notice exposure and support audit readiness.'
  ],
  [
    'slug' => 'dir-3-kyc-quick-checklist',
    'title' => 'DIR-3 KYC: Quick Checklist for Directors (Common Rejection Points)',
    'category' => 'roc',
    'date' => '2025-01-12',
    'readTime' => '5 min read',
    'excerpt' => 'A director KYC readiness checklist: documents, address proof alignment, and how to avoid delays.',
    'highlights' => ['Document readiness', 'Address verification', 'Avoid rejections'],
    'content' => 'Director KYC can be completed smoothly with correct documentation and consistency. This article covers what to prepare, how to ensure address proof matches declared details, and which errors commonly lead to rejections—so your DIR-3 KYC is accepted faster.'
  ],

  [
    'slug' => 'tds-24q-26q-27q-filing-basics',
    'title' => 'TDS Return Quick Guide: 24Q, 26Q & 27Q Filing Basics',
    'category' => 'compliance',
    'date' => '2024-12-20',
    'readTime' => '6 min read',
    'excerpt' => 'Quarterly TDS return preparation, credit reconciliation, and filing readiness for deductors.',
    'highlights' => ['TDS certificate discipline', 'Quarterly workflow', 'Credit reconciliation'],
    'content' => 'TDS return filing requires data consistency across challans, deductee details, and TDS certificates. This guide explains the basics of quarterly returns, the importance of reconciliation, and how to build a simple filing workflow so you reduce corrections later.'
  ],
  [
    'slug' => 'gst-composition-scheme-who-should-opt',
    'title' => 'GST Composition Scheme: Who Should Opt & What to Watch',
    'category' => 'gst',
    'date' => '2024-11-29',
    'readTime' => '7 min read',
    'excerpt' => 'A professional overview of eligibility, benefits, compliance limits, and switching guidance.',
    'highlights' => ['Eligibility basics', 'Compliance boundaries', 'Switching checklist'],
    'content' => 'The composition scheme can simplify GST compliance for eligible businesses, but it comes with boundaries. This article covers eligibility fundamentals, compliance limits, and a practical approach to deciding whether composition is suitable for your business model.'
  ],
  [
    'slug' => 'income-tax-deductions-80c-80d-checklist',
    'title' => 'Income Tax Deductions Checklist: 80C, 80D & More',
    'category' => 'income-tax',
    'date' => '2024-10-18',
    'readTime' => '6 min read',
    'excerpt' => 'A ready-to-use checklist for collecting deduction proofs and filing accurately.',
    'highlights' => ['Proof readiness', 'Common filing mistakes', 'Planning tips'],
    'content' => 'Deductions like 80C and 80D require proper proof collection and correct schedule mapping. This guide provides a practical checklist of documents, how to verify figures before filing, and planning tips to ensure deductions are claimed accurately.'
  ],
  [
    'slug' => 'roc-readiness-board-approvals',
    'title' => 'ROC Compliance Readiness: Board Approvals & Document Planning',
    'category' => 'roc',
    'date' => '2024-09-12',
    'readTime' => '7 min read',
    'excerpt' => 'Align internal approvals, financial statements, and ROC filing documents on time with a checklist.',
    'highlights' => ['Board meeting readiness', 'Document checklist', 'Filing discipline'],
    'content' => 'A smooth ROC filing needs correct internal approvals and document readiness. This article explains a preparation checklist to align timelines, ensure financial statement readiness, and collect ROC filing documents early—so filings are accurate and on-time.'
  ],
  [
    'slug' => 'audit-ready-financial-statements',
    'title' => 'Audit-Ready Financial Statements: What to Prepare First',
    'category' => 'compliance',
    'date' => '2024-08-05',
    'readTime' => '8 min read',
    'excerpt' => 'A CA-led approach to making your financials audit-ready with stronger documentation.',
    'highlights' => ['Monthly documentation', 'Reconciliation discipline', 'Audit support'],
    'content' => 'Audit readiness starts long before the audit date. Keep monthly reconciliations, document supporting evidence, and ensure key accounting schedules are complete. This reduces audit queries and supports a smoother audit timeline.'
  ],
  [
    'slug' => 'company-registration-pvt-ltd-vs-llp',
    'title' => 'Company Registration Overview: Pvt Ltd vs LLP (ROC Responsibilities)',
    'category' => 'roc',
    'date' => '2024-07-02',
    'readTime' => '6 min read',
    'excerpt' => 'A professional comparison of entities and clear ROC responsibilities after incorporation.',
    'highlights' => ['Entity choice basics', 'Post-incorporation compliance', 'Ongoing support'],
    'content' => 'Choosing the right entity affects compliance and long-term operations. This article provides a practical overview of Pvt Ltd and LLP, key considerations during incorporation, and the ROC responsibilities that follow.'
  ],
  [
    'slug' => 'nri-taxation-overview-india-sourced-income',
    'title' => 'NRI Taxation Basics: India-Sourced Income & DTAA Considerations',
    'category' => 'income-tax',
    'date' => '2024-06-10',
    'readTime' => '7 min read',
    'excerpt' => 'A structured overview of NRI income types, DTAA basics, and practical filing preparedness.',
    'highlights' => ['Income types', 'DTAA basics', 'Filing readiness'],
    'content' => 'NRI taxation has unique considerations including treaty relief and reporting discipline. This article covers an approachable overview of India-sourced income, DTAA benefit considerations, and document preparedness to support structured filing.'
  ],
  [
    'slug' => 'gst-ewaybill-process-essentials',
    'title' => 'GST E-Way Bill Process: Essentials for Smooth Dispatch Compliance',
    'category' => 'gst',
    'date' => '2024-05-18',
    'readTime' => '6 min read',
    'excerpt' => 'A practical guide to building an e-way bill workflow to reduce mistakes and delays.',
    'highlights' => ['Document readiness', 'Invoice mapping', 'Risk reduction'],
    'content' => 'E-way bills require accurate invoice mapping and timely generation. This guide explains how to build a reliable internal workflow: confirm document readiness, validate invoice details before generation, and keep basic reconciliation so compliance becomes predictable.'
  ],
  [
    'slug' => 'itrcorrect-itr-filing-vs-revised-return',
    'title' => 'Correcting ITR: Revised Return vs Rectification Checklist',
    'category' => 'income-tax',
    'date' => '2024-04-21',
    'readTime' => '7 min read',
    'excerpt' => 'Know when to file revised returns and how to choose the right correction approach to reduce future queries.',
    'highlights' => ['Timelines & choices', 'Documentation proof', 'Risk awareness'],
    'content' => 'Corrections require planning and correct selection of approach. This article helps you understand how revised returns differ from rectification, what evidence to keep, and how to reduce the risk of compliance issues when correcting filings.'
  ],
  [
    'slug' => 'roc-annual-return-mgt-7-aoc-4-overview',
    'title' => 'ROC Annual Return Overview: MGT-7 & AOC-4 Explained',
    'category' => 'compliance',
    'date' => '2024-03-09',
    'readTime' => '7 min read',
    'excerpt' => 'A clean professional overview of key ROC annual return forms and what to prepare before filing.',
    'highlights' => ['What gets reported', 'Preparation steps', 'Common gaps'],
    'content' => 'MGT-7 and AOC-4 are critical for annual ROC compliance. This article explains what is typically reported, what documents you should be prepared with, and common gaps that can lead to delays or follow-up queries.'
  ],
  [
    'slug' => 'ca-led-tax-planning-framework',
    'title' => 'CA-Led Tax Planning Framework: 4-Stage Approach',
    'category' => 'income-tax',
    'date' => '2024-02-14',
    'readTime' => '8 min read',
    'excerpt' => 'A professional 4-stage framework to plan taxes confidently and reduce last-minute filing stress.',
    'highlights' => ['Stage 1: Data collection', 'Stage 2: Review & mapping', 'Stage 3: Optimisation', 'Stage 4: Filing readiness'],
    'content' => 'Tax planning becomes easier when you follow a structured approach. This article provides a four-stage CA-led framework: gather correct data, review schedules, optimize within legal provisions, and prepare for accurate filing and verification.'
  ],
  [
    'slug' => 'gst-notice-reply-safe-checklist',
    'title' => 'GST Notice Reply: Safe & Professional Checklist',
    'category' => 'gst',
    'date' => '2024-01-20',
    'readTime' => '6 min read',
    'excerpt' => 'How to prepare documentation, response structure, and evidence alignment for GST notices.',
    'highlights' => ['Evidence alignment', 'Draft response structure', 'Review before submission'],
    'content' => 'GST notice replies must be supported with correct evidence and a clear response structure. Use this checklist to collect the right documents, align evidence to query points, and review your draft response with a disciplined process.'
  ],
];

function formatDate($ymd) {
  $t = strtotime($ymd);
  return $t ? date('d M Y', $t) : $ymd;
}

$slug = isset($_GET['slug']) ? trim((string)$_GET['slug']) : '';
$current = null;
foreach ($posts as $p) {
  if ($p['slug'] === $slug) { $current = $p; break; }
}

if (!$current) {
  http_response_code(404);
}

$pageTitle = ($current ? $current['title'] . ' | ' : '') . SITE_NAME;
$metaDescription = $current ? $current['excerpt'] : 'Blog post';
$bootstrapCssHref = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css';
$bootstrapIconsHref = 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css';
$googleFontsHref = 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700&display=swap';
$extraHead = <<<'HTML'
<style>
    .post-hero{background:#134E3A;color:#fff;padding:110px 0 40px;margin-top:0;border-bottom:1px solid rgba(255,255,255,.08)}
    .post-hero .lead-text{color:#F8FAFC;max-width:720px;margin-top:10px;font-weight:400;opacity:1;}
    .post-badge{display:inline-flex;align-items:center;gap:8px;background:rgba(255,255,255,0.1);border:1px solid rgba(255,255,255,0.2);color:var(--accent-gold);padding:8px 12px;border-radius:999px;font-weight:800;font-size:.78rem;opacity:1;}
    .post-meta{color:#E2E8F0;font-weight:700;font-size:.84rem;display:flex;gap:14px;flex-wrap:wrap;margin-top:12px;opacity:1;}
    .post-wrap{padding:46px 0 70px}
    .post-card{background:#fff;border:1px solid var(--borderlite);border-radius:14px;box-shadow:0 10px 26px rgba(0,0,0,.04);padding:26px}
    .post-card p{color:#374151;line-height:1.9}
    .hl-list{display:flex;flex-wrap:wrap;gap:10px;margin:18px 0 22px;padding:0;list-style:none}
    .hl-list li{background:var(--section-bg);border:1px solid var(--borderlite);color:var(--accent);font-weight:800;padding:8px 12px;border-radius:999px;font-size:.86rem}
    .sidebar-box{position:sticky;top:90px}
    @media(max-width:991px){.sidebar-box{position:relative;top:auto}}
  </style>
HTML;

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>
<header class="post-hero">
    <div class="container">
      <?php if ($current): ?>
        <div class="row align-items-center">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="post-badge"><i class="bi <?php echo htmlspecialchars($categories[$current['category']]['icon'] ?? 'bi-journal-bookmark-fill'); ?>"></i> <?php echo htmlspecialchars($categories[$current['category']]['label'] ?? $current['category']); ?></div>
            <h1 class="section-title mt-3 mb-2" style="color:#fff"><?php echo htmlspecialchars($current['title']); ?></h1>
            <p class="lead-text mb-0">Taxation clarity & compliance guidance — by our CA team.</p>
            <div class="post-meta">
              <span><i class="bi bi-calendar3" style="color:var(--gold)"></i> <?php echo htmlspecialchars(formatDate($current['date'])); ?></span>
              <span><i class="bi bi-clock" style="color:var(--gold)"></i> <?php echo htmlspecialchars($current['readTime']); ?></span>
            </div>
          </div>
          <div class="col-lg-4">
            <a class="btn btn-outline-gold w-100" href="blog.php" style="border:1px solid rgba(255,255,255,.35);color:#fff;background:transparent;padding:13px 18px;border-radius:10px;font-weight:800">
              <i class="bi bi-arrow-left"></i> Back to Blog
            </a>
          </div>
        </div>
      <?php else: ?>
        <h1 class="section-title" style="color:#fff">Post not found</h1>
        <p class="lead-text">The requested blog post does not exist.</p>
        <a class="blog-readmore mt-3" href="blog.php">Back to Blog</a>
      <?php endif; ?>
    </div>
  </header>

  <main class="post-wrap">
    <div class="container">
      <div class="row g-4">
        <section class="col-lg-8">
          <?php if ($current): ?>
            <div class="post-card">
              <ul class="hl-list">
                <?php foreach ($current['highlights'] as $h): ?>
                  <li><?php echo htmlspecialchars($h); ?></li>
                <?php endforeach; ?>
              </ul>

              <p class="mb-3" style="font-weight:800;color:#1F2937"><?php echo htmlspecialchars($current['excerpt']); ?></p>
              <p><?php echo htmlspecialchars($current['content']); ?></p>

              <div class="mt-4 pt-3" style="border-top:1px solid var(--borderlite)">
                <h4 style="font-family:var(--font-display);font-weight:800;color:#1F2937">Need help with this?</h4>
                <p class="mb-3">Send us your details and we’ll guide you with a professional checklist and next steps.</p>
                <a href="contact.php" class="blog-readmore" style="display:inline-flex;align-items:center;gap:10px"> <i class="bi bi-send-fill"></i> Schedule Consultation</a>
              </div>
            </div>
          <?php endif; ?>
        </section>

        <aside class="col-lg-4">
          <div class="sidebar-box">
            <div class="sidebar-card" style="background:#fff;border:1px solid var(--borderlite);border-radius:14px;padding:16px;box-shadow:0 10px 26px rgba(0,0,0,.04)">
              <h5 style="font-family:var(--font-display);font-weight:800;margin-bottom:12px;color:#1F2937">Popular Categories</h5>
              <?php
                $countsByCat = [];
                foreach ($posts as $p) $countsByCat[$p['category']] = ($countsByCat[$p['category']] ?? 0) + 1;
              ?>
              <?php foreach ($categories as $key => $c): ?>
                <a href="blog.php?cat=<?php echo urlencode($key); ?>" style="display:flex;align-items:center;justify-content:space-between;gap:10px;padding:10px 10px;border-radius:12px;text-decoration:none;color:#1F2937;font-weight:800;border:1px solid rgba(0,0,0,0);background:transparent;margin-bottom:8px" onmouseover="this.style.borderColor='var(--borderlite)';this.style.background='var(--primary-bg)'" onmouseout="this.style.borderColor='rgba(0,0,0,0)';this.style.background='transparent'">
                  <span><i class="bi <?php echo htmlspecialchars($c['icon']); ?> me-2" style="color:var(--gold)"></i><?php echo htmlspecialchars($c['label']); ?></span>
                  <span style="color:#374151"><?php echo $countsByCat[$key] ?? 0; ?></span>
                </a>
              <?php endforeach; ?>
            </div>
          </div>
        </aside>

      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo e(ASSETS_URL . '/js/main.js'); ?>"></script>
<?php include __DIR__ . '/includes/footer.php'; ?>
