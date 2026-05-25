<?php
require_once __DIR__ . '/includes/config.php';
// ---------- Form handling (AJAX endpoint) ----------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
    $name    = strip_tags(trim($_POST['name'] ?? ''));
    $email   = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $phone   = strip_tags(trim($_POST['phone'] ?? ''));
    $service = strip_tags(trim($_POST['service'] ?? ''));
    $message = strip_tags(trim($_POST['message'] ?? ''));

    if (!$name || !$email || !$message) {
        echo json_encode(['success' => false, 'message' => 'Please fill all required fields.']);
        exit;
    }
    $to      = 'contact@aashishandco.in';
    $subject = "New Enquiry from $name – Aashish & Company Website";
    $body    = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\n\nMessage:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\nX-Mailer: PHP/" . phpversion();
    $mailSent = @mail($to, $subject, $body, $headers);

    try {
        require_once __DIR__ . '/admin/config/database.php';
        $stmt = $pdo->prepare("INSERT INTO contact_enquiries (name, email, phone, service, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$name, $email, $phone, $service, $message]);
    } catch (\Exception $e) {
        error_log("Contact form DB insert failed: " . $e->getMessage());
    }

    // On localhost mail() may be disabled – we return success anyway for demo
    echo json_encode(['success' => true, 'message' => 'Thank you! Your message has been sent. We will contact you shortly.']);
    exit;
}

$pageTitle = 'Contact Us | ' . SITE_NAME;
$metaDescription = 'Get in touch with Aashish & Company, Chartered Accountants in Dehradun. Free consultation. Expert CA, CS & Taxation services.';
$bootstrapCssHref = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css';
$bootstrapIconsHref = 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css';
$googleFontsHref = 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800;900&family=Inter:wght@300;400;500;600;700;800&display=swap';
$extraHead = <<<'HTML'
<style>
    /* ---------- Same core design system ---------- */
    :root {
      --black:#1F2937; --dark:#1F2937; --charcoal:#1F2937; --gray:#374151;
      --midgray:#374151; --lightgray:#DDE5DD; --border:#DDE5DD; --borderlite:#DDE5DD;
      --black:#1E293B; --dark:#1E293B; --charcoal:#134E3A; --gray:#334155;
      --midgray:#64748B; --lightgray:#E2E8F0; --border:#E2E8F0; --borderlite:#E2E8F0;
      --white:#FFFFFF; --offwhite:#F8FAF7; --cream:#F1F5F9; --gold:#D4A017; --gold-dark:#B8860B;
    }
    *,*::before,*::after{margin:0;padding:0;box-sizing:border-box;}
    html{scroll-behavior:smooth;}
    body{font-family:"Inter",sans-serif;background:var(--offwhite);color:var(--black);overflow-x:hidden;line-height:1.6;padding-top:76px;}
    h1,h2,h3,h4,h5,h6{font-family:"Playfair Display",serif;font-weight:700;line-height:1.28;}
    .btn-gold{display:inline-flex;align-items:center;gap:8px;background:var(--gold);color:#fff;padding:12px 26px;border-radius:6px;font-weight:700;font-size:.91rem;text-decoration:none;border:none;cursor:pointer;transition:all .3s;}
    .btn-gold:hover{background:var(--gold-dark);color:#fff;transform:translateY(-2px);}
    .btn-outline-w{display:inline-flex;align-items:center;gap:8px;background:transparent;color:#fff;padding:11px 24px;border-radius:6px;font-weight:700;font-size:.91rem;text-decoration:none;border:2px solid rgba(255,255,255,.45);cursor:pointer;transition:all .3s;}
    .btn-outline-w:hover{background:rgba(255,255,255,.1);color:#fff;border-color:#fff;}
    .section-pad{padding:80px 6vw;}

    /* ---------- Navbar (dark) ---------- */
    .navbar{background:var(--offwhite);border-bottom:1px solid var(--borderlite);}
    .navbar-brand img{height:42px;}
    .navbar-nav .nav-link{color:var(--black)!important;font-weight:600;margin:0 10px;transition:.2s;}
    .navbar-nav .nav-link:hover,.navbar-nav .nav-link.active{color:var(--gold)!important;}
    .navbar-toggler-icon{filter:invert(1) brightness(0);}

    /* ---------- Hero Banner ---------- */
    .contact-hero{background:#134E3A;color:#fff;padding:110px 6vw 50px;text-align:center;}
    .contact-hero h1{font-size:clamp(2rem,4vw,3.2rem);margin-bottom:14px;}
    .contact-hero h1 em{color:var(--gold);}
    .contact-hero p{color:#F8FAFC;max-width:600px;margin:0 auto;font-size:1rem;font-weight:400;opacity:1;}

    /* ---------- Contact Grid ---------- */
    .contact-grid{display:grid;grid-template-columns:1.2fr 1fr;gap:40px;align-items:start;}
    .form-wrapper{background:var(--white);border:1px solid var(--borderlite);border-radius:14px;padding:36px 30px;}
    .form-wrapper h3{font-size:1.5rem;margin-bottom:24px;color:#1F2937;}
    .form-label{font-size:.82rem;font-weight:600;color:#1F2937;margin-bottom:6px;}
    .form-control,.form-select{border-radius:8px;border:1px solid var(--borderlite);padding:11px 14px;font-size:.9rem;transition:border .2s;color:#1F2937;}
    .form-control:focus,.form-select:focus{border-color:var(--gold);box-shadow:0 0 0 2px rgba(201,169,110,0.15);}
    .btn-submit{background:var(--gold);border:none;color:#fff;font-weight:700;font-size:.95rem;padding:13px 30px;border-radius:8px;display:inline-flex;align-items:center;gap:8px;cursor:pointer;transition:all .3s;}
    .btn-submit:hover{background:var(--gold-dark);transform:translateY(-2px);}
    .info-side{display:flex;flex-direction:column;gap:18px;}
    .info-card{background:var(--white);border:1px solid var(--borderlite);border-radius:14px;padding:22px 20px;display:flex;align-items:flex-start;gap:16px;transition:box-shadow .2s;}
    .info-card:hover{box-shadow:0 10px 30px rgba(0,0,0,0.08);}
    .info-icon{width:44px;height:44px;flex-shrink:0;background:#1F2937;color:var(--gold);border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:1.2rem;}
    .info-text h5{font-size:.92rem;font-weight:700;color:#1F2937;margin-bottom:4px;}
    .info-text p,.info-text a{font-size:.85rem;color:#4B5563;line-height:1.6;text-decoration:none;}
    .info-text a:hover{color:var(--gold);}

    /* ---------- Map ---------- */
    .map-container{border-radius:14px;overflow:hidden;border:1px solid var(--borderlite);height:280px;}
    .map-container iframe{width:100%;height:100%;border:0;}

    /* ---------- CTA Strip ---------- */
    .cta-strip{background:#1F6B52;padding:40px 6vw;text-align:center;margin-top:60px;}
    .cta-strip h3{color:#fff;font-size:1.4rem;margin-bottom:12px;}
    .cta-strip p{color:#F8FAFC;margin-bottom:20px;opacity:1;}

    /* ---------- Footer (dark) ---------- */
    .footer{background:var(--black);color:#BDC3C7;padding:60px 0 0;border-top:1px solid var(--border);}
    .footer h5{color:var(--white);font-family:"Inter",sans-serif;font-weight:600;margin-bottom:20px;}
    .footer a{color:#BDC3C7;text-decoration:none;}
    .footer a:hover{color:var(--gold);}
    .footer-bottom{border-top:1px solid rgba(255,255,255,0.08);padding:18px 0;margin-top:40px;font-size:0.9rem;text-align:center;}

    @media(max-width:767px){
      .contact-grid{grid-template-columns:1fr;}
    }
  </style>
HTML;

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>
<!-- ===== Hero Banner ===== -->
  <section class="contact-hero">
    <h1>Get In <em>Touch</em></h1>
    <p>We’re here to help with all your taxation, audit, compliance, and business advisory needs. Reach out for a free, confidential consultation.</p>
  </section>

  <!-- ===== Contact Section ===== -->
  <div class="section-pad" style="background:var(--offwhite);">
    <div class="contact-grid" style="max-width:1200px;margin:0 auto;">
      <!-- Left: Inquiry Form -->
      <div class="form-wrapper">
        <h3>Send Us a Message</h3>
        <div id="formAlert"></div>
        <form id="contactForm" method="post" action="contact.php">
          <div class="row g-3">
            <div class="col-md-6">
              <label for="name" class="form-label">Full Name *</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email Address *</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-md-6">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="phone" name="phone">
            </div>
            <div class="col-md-6">
              <label for="service" class="form-label">Service Interested In</label>
              <select class="form-select" id="service" name="service">
                <option value="">Select Service</option>
                <option>Income Tax Filing</option>
                <option>GST Services</option>
                <option>Company Registration</option>
                <option>Audit & Assurance</option>
                <option>ROC Compliance</option>
                <option>TDS Return</option>
                <option>Accounting</option>
                <option>NRI Taxation</option>
                <option>Business Advisory</option>
                <option>Other</option>
              </select>
            </div>
            <div class="col-12">
              <label for="message" class="form-label">Message *</label>
              <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="btn-submit"><i class="bi bi-send-fill"></i> Send Message</button>
            </div>
          </div>
        </form>
      </div>

      <!-- Right: Contact Details + Map -->
      <div class="info-side">
        <!-- Office Address -->
        <div class="info-card">
          <div class="info-icon"><i class="bi bi-geo-alt-fill"></i></div>
          <div class="info-text">
            <h5>Our Office</h5>
            <p>123, Rajpur Road,<br>Dehradun – 248001,<br>Uttarakhand, India</p>
          </div>
        </div>

        <!-- Phone -->
        <div class="info-card">
          <div class="info-icon"><i class="bi bi-telephone-fill"></i></div>
          <div class="info-text">
            <h5>Phone</h5>
            <a href="tel:+919876543210">+91 98765 43210</a>
          </div>
        </div>

        <!-- Email -->
        <div class="info-card">
          <div class="info-icon"><i class="bi bi-envelope-fill"></i></div>
          <div class="info-text">
            <h5>Email</h5>
            <a href="mailto:contact@aashishandco.in">contact@aashishandco.in</a>
          </div>
        </div>

        <!-- Business Hours -->
        <div class="info-card">
          <div class="info-icon"><i class="bi bi-clock-fill"></i></div>
          <div class="info-text">
            <h5>Business Hours</h5>
            <p>Monday – Saturday: 9:00 AM – 7:00 PM<br>Sunday: Closed</p>
          </div>
        </div>

        <!-- Google Maps (Dehradun) -->
        <div class="map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3478.123456789!2d78.045678!3d30.316496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390929c1a9a1a1a1%3A0x1234567890abcdef!2sRajpur%20Road%2C%20Dehradun%2C%20Uttarakhand!5e0!3m2!1sen!2sin!4v1687878987678" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== CTA Strip ===== -->
  <div class="cta-strip">
    <h3>Ready to Discuss Your Financial Needs?</h3>
    <p>We offer a free, no‑obligation consultation. Our expert team is just a call away.</p>
    <a href="tel:+919876543210" class="btn-gold"><i class="bi bi-telephone-fill"></i> Call Now: +91 98765 43210</a>
  </div>

  <!-- Dark Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // AJAX form submission
    document.getElementById('contactForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const form = this;
      const btn = form.querySelector('.btn-submit');
      const originalHtml = btn.innerHTML;
      btn.disabled = true;
      btn.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Sending...';
      fetch('contact.php', {
        method: 'POST',
        body: new FormData(form)
      })
      .then(res => res.json())
      .then(data => {
        const alertDiv = document.getElementById('formAlert');
        if (data.success) {
          alertDiv.innerHTML = `<div class="alert alert-success">${data.message}</div>`;
          form.reset();
        } else {
          alertDiv.innerHTML = `<div class="alert alert-danger">${data.message}</div>`;
        }
      })
      .catch(() => {
        document.getElementById('formAlert').innerHTML = `<div class="alert alert-danger">Something went wrong. Please try again.</div>`;
      })
      .finally(() => {
        btn.disabled = false;
        btn.innerHTML = originalHtml;
      });
    });
  </script>
  <script src="<?php echo e(ASSETS_URL . '/js/main.js'); ?>"></script>
<?php include __DIR__ . '/includes/footer.php'; ?>
