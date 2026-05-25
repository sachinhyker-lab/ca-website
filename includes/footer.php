<?php
declare(strict_types=1);
?>

<!-- ========== FOOTER ========== -->
<footer class="footer premium-footer pt-5 pb-0">
    <div class="container">
        <div class="row gy-4">

            <!-- Company Info -->
            <div class="col-lg-4 col-md-6">
                <img
                    src="<?php echo e(ASSETS_URL . '/images/logo/logo.svg'); ?>"
                    alt="Aashish & Company"
                    class="footer-logo"
                >

                <p class="mt-4 footer-desc">
                    Aashish & Company is a professional Chartered Accountancy firm
                    delivering expert taxation, audit, compliance and business
                    advisory services with a commitment to integrity, accuracy and
                    long-term client success.
                </p>

                <div class="d-flex gap-3 mt-3">
                    <a href="#" class="footer-icon fs-5">
                        <i class="bi bi-linkedin"></i>
                    </a>

                    <a href="mailto:contact@aashishandco.in" class="footer-icon fs-5">
                        <i class="bi bi-envelope-fill"></i>
                    </a>

                    <a href="tel:+912245678901" class="footer-icon fs-5">
                        <i class="bi bi-telephone-fill"></i>
                    </a>
                </div>

                <a
                    href="<?php echo e(site_url('contact.php')); ?>"
                    class="btn-primary-gold mt-4"
                >
                    Schedule Consultation
                </a>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h5 class="footer-title mb-4">Quick Links</h5>

                <ul class="list-unstyled footer-links">
                    <li>
                        <a href="<?php echo e(site_url('index.php')); ?>">Home</a>
                    </li>

                    <li>
                        <a href="<?php echo e(site_url('about.php')); ?>">About Us</a>
                    </li>

                    <li>
                        <a href="<?php echo e(site_url('services.php')); ?>">Services</a>
                    </li>

                    <li>
                        <a href="<?php echo e(site_url('team.php')); ?>">Our Team</a>
                    </li>

                    <li>
                        <a href="<?php echo e(site_url('blog.php')); ?>">Blog</a>
                    </li>

                    <li>
                        <a href="<?php echo e(site_url('contact.php')); ?>">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Services -->
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title mb-4">Core Services</h5>

                <ul class="list-unstyled footer-links">
                    <li>
                        <a href="<?php echo e(site_url('taxation.php')); ?>">
                            Income Tax & GST
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo e(site_url('audit.php')); ?>">
                            Audit & Assurance
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo e(site_url('compliance.php')); ?>">
                            ROC & Compliance
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo e(site_url('services.php')); ?>">
                            Business Advisory
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo e(site_url('services.php')); ?>">
                            Financial Consulting
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title mb-4">Contact Information</h5>

                <p class="mb-3">
                    <i class="bi bi-geo-alt-fill me-2 footer-ico-accent"></i>
                    Shree Jee Plaza,<br>
                    New Road,<br>
                    Dehradun,<br>
                    Uttarakhand, India
                </p>

                <p class="mb-3">
                    <i class="bi bi-envelope-fill me-2 footer-ico-accent"></i>
                    contact@aashishandco.in
                </p>

                <p class="mb-3">
                    <i class="bi bi-telephone-fill me-2 footer-ico-accent"></i>
                    +91 22 4567 8901
                </p>

                <p class="mb-0">
                    <i class="bi bi-clock-fill me-2 footer-ico-accent"></i>
                    Mon – Sat : 9:30 AM – 6:30 PM
                </p>
            </div>

        </div>

        <div class="icai-disclaimer mt-5 p-4 rounded text-center">
            <strong>ICAI Disclaimer:</strong> As per the rules of the Institute of Chartered Accountants of India (ICAI), we are not permitted to solicit work or advertise. By visiting this website, you acknowledge that you are seeking information about Aashish & Company of your own accord and there has been no advertisement, personal communication, solicitation, invitation, or inducement of any sort whatsoever from us or any of our members to solicit any work through this website.
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom border-top mt-5 pt-4 pb-3 text-center">
            <p class="mb-1">
                © <?php echo CURRENT_YEAR; ?>
                Aashish & Company | Chartered Accountants
            </p>

            <small class="text-secondary">
                Professional Taxation, Audit, Compliance &
                Business Advisory Services
            </small>
        </div>
    </div>
</footer>

<!-- JS -->
<script src="<?php echo e(ASSETS_URL . '/js/main.js'); ?>"></script>
