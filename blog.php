<?php
// Blog Listing Page (Insights)
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
    'content' => 'AY 2025-26 introduces updated reporting expectations. Review your salary details, bank account mapping, deduction proofs, and schedule-wise disclosures before filing. This guide provides a step-by-step prep workflow, highlights common mistakes, and suggests a document checklist so you can file confidently with minimal risk of notices.',
    'heroIcon' => 'bi-file-earmark-text-fill'
  ],
  [
    'slug' => 'e-invoicing-threshold-reduced',
    'title' => 'E-Invoicing Threshold Reduced: Impact & Readiness Plan',
    'category' => 'gst',
    'date' => '2025-04-22',
    'readTime' => '6 min read',
    'excerpt' => 'What the change means for small businesses, ERP workflows, invoice master updates, and compliance timelines.',
    'highlights' => ['ERP workflow checks', 'Master data readiness', 'Timeline planning'],
    'content' => 'E-invoicing readiness goes beyond software enablement. Ensure correct invoice master data, validation rules, and reconciliation discipline. This article covers a simple readiness approach: confirm invoice generation settings, ensure proper data accuracy, and maintain a pre-mandate checklist to reduce compliance risk.',
    'heroIcon' => 'bi-receipt-cutoff'
  ],
  [
    'slug' => 'roc-filing-deadlines-fy-2024-25',
    'title' => 'ROC Filing Deadlines for FY 2024-25: Company & LLP Calendar',
    'category' => 'compliance',
    'date' => '2025-03-18',
    'readTime' => '8 min read',
    'excerpt' => 'An easy-to-follow timeline of MCA annual return and form deadlines with preparation checkpoints.',
    'highlights' => ['MGT-7 & AOC-4 focus', 'Event-based forms', 'Approval timeline'],
    'content' => 'ROC compliance is about both timely filing and correct internal approvals. This guide provides a preparation timeline approach for FY 2024-25: gather documents early, complete board/shareholder approvals in time, and set a filing readiness checklist so you avoid rush and last-minute errors.',
    'heroIcon' => 'bi-clipboard-check'
  ],
  [
    'slug' => 'gst-itc-reconciliation-best-practices',
    'title' => 'GST ITC Reconciliation: Best Practices to Avoid Notices',
    'category' => 'gst',
    'date' => '2025-02-05',
    'readTime' => '9 min read',
    'excerpt' => 'Build a monthly ITC reconciliation control to detect mismatches early and strengthen compliance.',
    'highlights' => ['GSTR-2B discipline', 'Mismatch handling steps', 'Monthly routine'],
    'content' => 'ITC reconciliation should be treated like a monthly control, not a last-minute exercise. Compare purchase register data with GSTR-2B, identify mismatch patterns, and resolve them early. This guide gives a practical reconciliation workflow and shows how to structure your monthly routine to reduce notice exposure and support audit readiness.',
    'heroIcon' => 'bi-graph-up-arrow'
  ],
  [
    'slug' => 'dir-3-kyc-quick-checklist',
    'title' => 'DIR-3 KYC: Quick Checklist for Directors (Common Rejection Points)',
    'category' => 'roc',
    'date' => '2025-01-12',
    'readTime' => '5 min read',
    'excerpt' => 'A director KYC readiness checklist: documents, address proof alignment, and how to avoid delays.',
    'highlights' => ['Document readiness', 'Address verification', 'Avoid rejections'],
    'content' => 'Director KYC can be completed smoothly with correct documentation and consistency. This article covers what to prepare, how to ensure address proof matches declared details, and which errors commonly lead to rejections—so your DIR-3 KYC is accepted faster.',
    'heroIcon' => 'bi-person-badge-fill'
  ],

  // Extra content to make the page BIG (20+ posts)
  [
    'slug' => 'tds-24q-26q-27q-filing-basics',
    'title' => 'TDS Return Quick Guide: 24Q, 26Q & 27Q Filing Basics',
    'category' => 'compliance',
    'date' => '2024-12-20',
    'readTime' => '6 min read',
    'excerpt' => 'Quarterly TDS return preparation, credit reconciliation, and filing readiness for deductors.',
    'highlights' => ['TDS certificate discipline', 'Quarterly workflow', 'Credit reconciliation'],
    'content' => 'TDS return filing requires data consistency across challans, deductee details, and TDS certificates. This guide explains the basics of quarterly returns, the importance of reconciliation, and how to build a simple filing workflow so you reduce corrections later.',
    'heroIcon' => 'bi-file-earmark-ruled-fill'
  ],
  [
    'slug' => 'gst-composition-scheme-who-should-opt',
    'title' => 'GST Composition Scheme: Who Should Opt & What to Watch',
    'category' => 'gst',
    'date' => '2024-11-29',
    'readTime' => '7 min read',
    'excerpt' => 'A professional overview of eligibility, benefits, compliance limits, and switching guidance.',
    'highlights' => ['Eligibility basics', 'Compliance boundaries', 'Switching checklist'],
    'content' => 'The composition scheme can simplify GST compliance for eligible businesses, but it comes with boundaries. This article covers eligibility fundamentals, compliance limits, and a practical approach to deciding whether composition is suitable for your business model.',
    'heroIcon' => 'bi-receipt-cutoff'
  ],
  [
    'slug' => 'income-tax-deductions-80c-80d-checklist',
    'title' => 'Income Tax Deductions Checklist: 80C, 80D & More',
    'category' => 'income-tax',
    'date' => '2024-10-18',
    'readTime' => '6 min read',
    'excerpt' => 'A ready-to-use checklist for collecting deduction proofs and filing accurately.',
    'highlights' => ['Proof readiness', 'Common filing mistakes', 'Planning tips'],
    'content' => 'Deductions like 80C and 80D require proper proof collection and correct schedule mapping. This guide provides a practical checklist of documents, how to verify figures before filing, and planning tips to ensure deductions are claimed accurately.',
    'heroIcon' => 'bi-calculator-fill'
  ],
  [
    'slug' => 'roc-readiness-board-approvals',
    'title' => 'ROC Compliance Readiness: Board Approvals & Document Planning',
    'category' => 'roc',
    'date' => '2024-09-12',
    'readTime' => '7 min read',
    'excerpt' => 'Align internal approvals, financial statements, and ROC filing documents on time with a checklist.',
    'highlights' => ['Board meeting readiness', 'Document checklist', 'Filing discipline'],
    'content' => 'A smooth ROC filing needs correct internal approvals and document readiness. This article explains a preparation checklist to align timelines, ensure financial statement readiness, and collect ROC filing documents early—so filings are accurate and on-time.',
    'heroIcon' => 'bi-building-fill-check'
  ],
  [
    'slug' => 'audit-ready-financial-statements',
    'title' => 'Audit-Ready Financial Statements: What to Prepare First',
    'category' => 'compliance',
    'date' => '2024-08-05',
    'readTime' => '8 min read',
    'excerpt' => 'A CA-led approach to making your financials audit-ready with stronger documentation.',
    'highlights' => ['Monthly documentation', 'Reconciliation discipline', 'Audit support'],
    'content' => 'Audit readiness starts long before the audit date. Keep monthly reconciliations, document supporting evidence, and ensure key accounting schedules are complete. The goal is fewer audit queries and a smoother audit timeline.',
    'heroIcon' => 'bi-journal-bookmark-fill'
  ],
  [
    'slug' => 'company-registration-pvt-ltd-vs-llp',
    'title' => 'Company Registration Overview: Pvt Ltd vs LLP (ROC Responsibilities)',
    'category' => 'roc',
    'date' => '2024-07-02',
    'readTime' => '6 min read',
    'excerpt' => 'A practical comparison of entities and a clear understanding of ROC responsibilities after incorporation.',
    'highlights' => ['Entity choice basics', 'Post-incorporation compliance', 'Ongoing support'],
    'content' => 'Choosing the right entity affects compliance and long-term operations. This article provides a practical overview of Pvt Ltd and LLP, key considerations during incorporation time, and the ROC responsibilities that follow.',
    'heroIcon' => 'bi-building-fill-check'
  ],
  [
    'slug' => 'nri-taxation-overview-india-sourced-income',
    'title' => 'NRI Taxation Basics: India-Sourced Income & DTAA Considerations',
    'category' => 'income-tax',
    'date' => '2024-06-10',
    'readTime' => '7 min read',
    'excerpt' => 'A structured overview of NRI income types, DTAA basics, and practical filing preparedness.',
    'highlights' => ['Income types', 'DTAA basics', 'Filing readiness'],
    'content' => 'NRI taxation has unique considerations including treaty relief and reporting discipline. This article covers an approachable overview of India-sourced income, DTAA benefit considerations, and document preparedness to support structured filing.',
    'heroIcon' => 'bi-globe2'
  ],
  [
    'slug' => 'gst-ewaybill-process-essentials',
    'title' => 'GST E-Way Bill Process: Essentials for Smooth Dispatch Compliance',
    'category' => 'gst',
    'date' => '2024-05-18',
    'readTime' => '6 min read',
    'excerpt' => 'A practical guide to building an e-way bill workflow to reduce mistakes and delays.',
    'highlights' => ['Document readiness', 'Invoice mapping', 'Risk reduction'],
    'content' => 'E-way bills require accurate invoice mapping and timely generation. This guide explains how to build a reliable internal workflow: confirm document readiness, validate invoice details before generation, and maintain basic reconciliation so compliance becomes predictable.',
    'heroIcon' => 'bi-truck'
  ],
  [
    'slug' => 'itrcorrect-itr-filing-vs-revised-return',
    'title' => 'Correcting ITR: Revised Return vs Rectification Checklist',
    'category' => 'income-tax',
    'date' => '2024-04-21',
    'readTime' => '7 min read',
    'excerpt' => 'Know when to file revised returns and how to choose the right correction approach to reduce future queries.',
    'highlights' => ['Timelines & choices', 'Documentation proof', 'Risk awareness'],
    'content' => 'Corrections require planning and correct selection of approach. This article helps you understand how revised returns differ from rectification, what evidence to keep, and how to reduce the risk of compliance issues when correcting filings.',
    'heroIcon' => 'bi-file-earmark-check-fill'
  ],
  [
    'slug' => 'roc-annual-return-mgt-7-aoc-4-overview',
    'title' => 'ROC Annual Return Overview: MGT-7 & AOC-4 Explained',
    'category' => 'compliance',
    'date' => '2024-03-09',
    'readTime' => '7 min read',
    'excerpt' => 'A clean professional overview of key ROC annual return forms and what to prepare before filing.',
    'highlights' => ['What gets reported', 'Preparation steps', 'Common gaps'],
    'content' => 'MGT-7 and AOC-4 are critical for annual ROC compliance. This article explains what is typically reported, what documents you should be prepared with, and common gaps that can lead to delays or follow-up queries.',
    'heroIcon' => 'bi-clipboard-check'
  ],
  [
    'slug' => 'ca-led-tax-planning-framework',
    'title' => 'CA-Led Tax Planning Framework: 4-Stage Approach',
    'category' => 'income-tax',
    'date' => '2024-02-14',
    'readTime' => '8 min read',
    'excerpt' => 'A professional 4-stage framework to plan taxes confidently and reduce last-minute filing stress.',
    'highlights' => ['Stage 1: Data collection', 'Stage 2: Review & mapping', 'Stage 3: Optimisation', 'Stage 4: Filing readiness'],
    'content' => 'Tax planning becomes easier when you follow a structured approach. This article provides a four-stage CA-led framework: gather correct data, review schedules, optimize within legal provisions, and prepare for accurate filing and verification.',
    'heroIcon' => 'bi-diagram-3'
  ],
  [
    'slug' => 'gst-notice-reply-safe-checklist',
    'title' => 'GST Notice Reply: Safe & Professional Checklist',
    'category' => 'gst',
    'date' => '2024-01-20',
    'readTime' => '6 min read',
    'excerpt' => 'How to prepare documentation, response structure, and evidence alignment for GST notices.',
    'highlights' => ['Evidence alignment', 'Draft response structure', 'Review before submission'],
    'content' => 'GST notice replies must be supported with correct evidence and a clear response structure. This checklist helps you collect the right documents, align evidence to the query points, and review the draft response with a disciplined process.',
    'heroIcon' => 'bi-shield-check'
  ],
];

$activeCategory = isset($_GET['cat']) ? (string)$_GET['cat'] : '';
$filteredPosts = $posts;
if ($activeCategory && isset($categories[$activeCategory])) {
  $filteredPosts = array_values(array_filter($posts, fn($p) => $p['category'] === $activeCategory));
}

function formatDate($ymd) {
  $t = strtotime($ymd);
  return $t ? date('d M Y', $t) : $ymd;
}

$pageTitle = 'Blog | Insights & Updates | ' . SITE_NAME;
$metaDescription = 'Professional insights on Income Tax, GST updates, ROC compliance, and business finance - by ' . SITE_NAME . '.';
$bootstrapCssHref = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css';
$bootstrapIconsHref = 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css';
$googleFontsHref = 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700&display=swap';
$extraHead = <<<'HTML'
<style>
    .blog-hero{background:#134E3A;color:#fff; padding:110px 0 40px; margin-top:0; border-bottom:1px solid rgba(255,255,255,.08)}
    .blog-hero h1{font-family:var(--font-display);font-weight:700;letter-spacing:-.4px}
    .blog-hero .lead-text{color:#F8FAFC;max-width:720px;margin-top:10px;font-weight:400;opacity:1;}

    .blog-chip{display:inline-flex;align-items:center;gap:10px;border:1px solid #DDE5DD;background:#FFFFFF;padding:10px 14px;border-radius:999px;color:#1F2937;font-weight:600;font-size:.86rem;cursor:pointer;transition:all .25s}
    .blog-chip:hover{border-color:var(--accent);transform:translateY(-2px)}
    .blog-chip.active{background:var(--accent);border-color:var(--accent);color:#fff}

    .blog-search-wrap{background:var(--white);border:1px solid var(--borderlite);border-radius:12px;padding:14px;box-shadow:0 10px 26px rgba(0,0,0,.05)}
    .blog-post-card{background:#fff;border:1px solid var(--borderlite);border-radius:12px;overflow:hidden;box-shadow:0 10px 26px rgba(0,0,0,.04);transition:transform .25s, box-shadow .25s, border-color .25s}
    .blog-post-card:hover{transform:translateY(-6px);box-shadow:0 18px 46px rgba(0,0,0,.09);border-color:var(--accent)}
    .blog-post-top{padding:18px 18px 8px;display:flex;align-items:center;justify-content:space-between;gap:12px}
    .blog-cat-badge{display:inline-flex;align-items:center;gap:8px;background:var(--section-bg);border:1px solid var(--borderlite);color:var(--accent);padding:8px 12px;border-radius:999px;font-weight:700;font-size:.78rem}
    .blog-meta{color:#6B7280;font-size:.78rem;font-weight:600;display:flex;align-items:center;gap:12px;flex-wrap:wrap}
    .blog-post-body{padding:0 18px 18px}
    .blog-post-title{font-family:var(--font-display);font-weight:700;letter-spacing:-.2px;color:#1F2937}
    .blog-post-excerpt{color:#4B5563;font-size:.9rem;line-height:1.8}
    .blog-readmore{display:inline-flex;align-items:center;gap:10px;text-decoration:none;color:#fff;background:var(--gold);padding:12px 16px;border-radius:10px;font-weight:800;font-size:.9rem;transition:all .25s}
    .blog-readmore:hover{background:var(--gold2);transform:translateY(-2px)}

    .blog-posts{padding:54px 0 72px}
    .blog-sidebar{position:sticky;top:90px}
    .sidebar-card{background:#fff;border:1px solid var(--borderlite);border-radius:12px;padding:16px 16px 10px;box-shadow:0 10px 26px rgba(0,0,0,.04)}
    .sidebar-card h5{font-family:var(--font-display);font-weight:800;color:#1F2937}
    .sidebar-link{display:flex;align-items:center;justify-content:space-between;gap:12px;padding:10px 10px;border-radius:10px;color:var(--black);text-decoration:none;border:1px solid transparent;transition:all .2s;font-weight:700;font-size:.86rem}
    .sidebar-link:hover{border-color:var(--accent);background:var(--primary-bg);transform:translateY(-1px)}
    .sidebar-link .count{color:#374151;font-weight:800}

    .faq-bullets{margin-top:8px}
    .faq-bullets .b{display:flex;gap:10px;align-items:flex-start;margin-bottom:10px;color:#374151}
    .faq-bullets i{color:var(--gold);margin-top:2px}

    @media (max-width:991px){.blog-sidebar{position:relative;top:auto;margin-bottom:22px}}
    @media (max-width:767px){.blog-hero{padding-top:62px}}
  </style>
HTML;

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>
<header class="blog-hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8 mb-4 mb-lg-0">
          <h1 class="mb-2">Insights &amp; Updates</h1>
          <p class="lead-text mb-0">Taxation, GST, ROC compliance, and practical business finance guidance — written for clarity and professional decision-making.</p>
        </div>
        <div class="col-lg-4">
          <div class="d-flex flex-wrap gap-2">
            <a class="blog-chip <?php echo $activeCategory===''?'active':''; ?>" href="blog.php"><i class="bi bi-grid"></i> All</a>
            <?php foreach ($categories as $key => $c): ?>
              <a class="blog-chip <?php echo $activeCategory===$key?'active':''; ?>" href="blog.php?cat=<?php echo urlencode($key); ?>">
                <i class="bi <?php echo htmlspecialchars($c['icon']); ?>"></i> <?php echo htmlspecialchars($c['label']); ?>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="blog-posts">
    <div class="container">
      <div class="row g-4">
        <aside class="col-lg-3 blog-sidebar">
          <div class="sidebar-card">
            <h5 class="mb-3">Quick Categories</h5>
            <?php
              $countsByCat = [];
              foreach ($posts as $p) $countsByCat[$p['category']] = ($countsByCat[$p['category']] ?? 0) + 1;
            ?>
            <a class="sidebar-link" href="blog.php">
              <span>All Insights</span>
              <span class="count"><?php echo count($posts); ?></span>
            </a>
            <hr class="my-2">
            <?php foreach ($categories as $key => $c): ?>
              <a class="sidebar-link" href="blog.php?cat=<?php echo urlencode($key); ?>">
                <span><i class="bi <?php echo htmlspecialchars($c['icon']); ?> me-2" style="color:var(--gold)"></i><?php echo htmlspecialchars($c['label']); ?></span>
                <span class="count"><?php echo $countsByCat[$key] ?? 0; ?></span>
              </a>
            <?php endforeach; ?>

            <div class="faq-bullets mt-3">
              <div class="b"><i class="bi bi-shield-check"></i><span>Practical summaries and checklists for compliance.</span></div>
              <div class="b"><i class="bi bi-lightbulb"></i><span>Simple language — CA reviewed approach.</span></div>
              <div class="b"><i class="bi bi-telephone-fill"></i><span>Need help? Contact our team for professional guidance.</span></div>
            </div>

            <a href="contact.php" class="blog-readmore w-100 justify-content-center mt-3"><i class="bi bi-send-fill"></i> Schedule Consultation</a>
          </div>
        </aside>

        <section class="col-lg-9">
          <div class="blog-search-wrap mb-4">
            <div class="row align-items-center g-3">
              <div class="col-md-6">
                <label class="form-label mb-1 fw-bold">Search posts</label>
                <input id="blogSearch" type="search" class="form-control" placeholder="Search by title or keyword...">
              </div>
              <div class="col-md-6">
                <label class="form-label mb-1 fw-bold">Sort</label>
                <select id="blogSort" class="form-select">
                  <option value="newest" selected>Newest first</option>
                  <option value="oldest">Oldest first</option>
                </select>
              </div>
            </div>
          </div>

          <div id="blogGrid" class="row g-4">
            <?php foreach ($filteredPosts as $post): ?>
              <?php
                $cat = $post['category'];
                $catLabel = $categories[$cat]['label'] ?? ucfirst($cat);
                $catIcon = $categories[$cat]['icon'] ?? 'bi-journal-bookmark-fill';
              ?>
              <article class="col-md-6 col-xl-4 blog-post-card fade-up" data-title="<?php echo htmlspecialchars(strtolower($post['title'])); ?>" data-excerpt="<?php echo htmlspecialchars(strtolower($post['excerpt'])); ?>" data-date="<?php echo htmlspecialchars($post['date']); ?>">
                <div class="blog-post-top">
                  <span class="blog-cat-badge"><i class="bi <?php echo htmlspecialchars($catIcon); ?>"></i> <?php echo htmlspecialchars($catLabel); ?></span>
                  <div class="blog-meta">
                    <span><i class="bi bi-calendar3" style="color:var(--gold)"></i> <?php echo htmlspecialchars(formatDate($post['date'])); ?></span>
                    <span><i class="bi bi-clock" style="color:var(--gold)"></i> <?php echo htmlspecialchars($post['readTime']); ?></span>
                  </div>
                </div>
                <div class="blog-post-body">
                  <h3 class="blog-post-title h5 mb-2"><?php echo htmlspecialchars($post['title']); ?></h3>
                  <p class="blog-post-excerpt mb-3"><?php echo htmlspecialchars($post['excerpt']); ?></p>

                  <div class="d-flex flex-wrap gap-2 mb-3">
                    <?php foreach (array_slice($post['highlights'],0,3) as $h): ?>
                      <span class="badge text-dark" style="background:var(--section-bg);border:1px solid var(--borderlite);font-weight:800"><?php echo htmlspecialchars($h); ?></span>
                    <?php endforeach; ?>
                  </div>

                  <a class="blog-readmore" href="post.php?slug=<?php echo urlencode($post['slug']); ?>">
                    Read More <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </article>
            <?php endforeach; ?>
          </div>

          <?php if (count($filteredPosts) === 0): ?>
            <div class="text-center py-5">
              <h3 class="h4">No posts found</h3>
              <p class="text-muted">Try selecting a different category.</p>
              <a href="blog.php" class="blog-readmore"><i class="bi bi-grid"></i> View All</a>
            </div>
          <?php endif; ?>
        </section>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo e(ASSETS_URL . '/js/main.js'); ?>"></script>

  <script>
    (function(){
      const searchEl = document.getElementById('blogSearch');
      const sortEl = document.getElementById('blogSort');
      const grid = document.getElementById('blogGrid');
      if(!grid) return;

      let cards = Array.from(grid.querySelectorAll('.blog-post-card'));

      function apply(){
        const q = (searchEl?.value || '').trim().toLowerCase();
        const mode = sortEl?.value || 'newest';

        cards.forEach(card => {
          const title = card.getAttribute('data-title') || '';
          const excerpt = card.getAttribute('data-excerpt') || '';
          const match = !q || title.includes(q) || excerpt.includes(q);
          card.style.display = match ? '' : 'none';
        });

        const visible = cards.filter(c => c.style.display !== 'none');
        visible.sort((a,b)=>{
          const da = a.getAttribute('data-date') || '';
          const db = b.getAttribute('data-date') || '';
          if(mode === 'oldest') return da.localeCompare(db);
          return db.localeCompare(da);
        });

        visible.forEach(c => grid.appendChild(c));
      }

      if(searchEl) searchEl.addEventListener('input', apply);
      if(sortEl) sortEl.addEventListener('change', apply);
      apply();
    })();
  </script>
<?php include __DIR__ . '/includes/footer.php'; ?>
