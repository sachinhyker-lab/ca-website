<?php
declare(strict_types=1);

$currentPage = basename((string)parse_url($_SERVER['SCRIPT_NAME'] ?? 'index.php', PHP_URL_PATH));
$servicePages = ['services.php', 'taxation.php', 'audit.php', 'compliance.php'];
$isServicesActive = in_array($currentPage, $servicePages, true);
?>

  <!-- ========== NAVBAR ========== -->
  <nav class="navbar navbar-expand-lg fixed-top premium-navbar">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(site_url('index.php')); ?>">
        <img src="<?php echo e(ASSETS_URL . '/images/logo/logo.svg'); ?>" alt="Aashish & Company" class="nav-logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link<?php echo $currentPage === 'index.php' ? ' active' : ''; ?>" href="<?php echo e(site_url('index.php')); ?>">Home</a></li>
          <li class="nav-item"><a class="nav-link<?php echo $currentPage === 'about.php' ? ' active' : ''; ?>" href="<?php echo e(site_url('about.php')); ?>">About</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle<?php echo $isServicesActive ? ' active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown">Services</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo e(site_url('services.php')); ?>">All Services</a></li>
              <li><a class="dropdown-item" href="<?php echo e(site_url('taxation.php')); ?>">Taxation</a></li>
              <li><a class="dropdown-item" href="<?php echo e(site_url('audit.php')); ?>">Audit &amp; Assurance</a></li>
              <li><a class="dropdown-item" href="<?php echo e(site_url('compliance.php')); ?>">ROC &amp; Compliance</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link<?php echo $currentPage === 'blog.php' || $currentPage === 'post.php' ? ' active' : ''; ?>" href="<?php echo e(site_url('blog.php')); ?>">Blog</a></li>
          <li class="nav-item"><a class="nav-link<?php echo $currentPage === 'team.php' ? ' active' : ''; ?>" href="<?php echo e(site_url('team.php')); ?>">Team</a></li>
          <li class="nav-item"><a class="nav-link<?php echo $currentPage === 'contact.php' ? ' active' : ''; ?>" href="<?php echo e(site_url('contact.php')); ?>">Contact</a></li>
        </ul>
        <a href="<?php echo e(site_url('contact.php')); ?>" class="btn-primary-gold ms-lg-3 mt-2 mt-lg-0">Schedule Consultation</a>
      </div>
    </div>
  </nav>
