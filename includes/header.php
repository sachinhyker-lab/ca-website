<?php
declare(strict_types=1);

$pageTitle = $pageTitle ?? SITE_NAME;
$metaDescription = $metaDescription ?? 'Professional Chartered Accountancy services and compliance guidance.';
$bootstrapCssHref = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css';
$bootstrapIconsHref = 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css';
$googleFontsHref = 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700;800&display=swap';
$extraHead = $extraHead ?? '';
$bodyClass = $bodyClass ?? '';
$bodyAttributes = $bodyAttributes ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php echo e(APP_DEFAULT_CHARSET); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo e((string)$pageTitle); ?></title>
  <meta name="description" content="<?php echo e((string)$metaDescription); ?>">

  <link rel="icon" type="image/svg+xml" href="<?php echo e(FAVICON_URL); ?>">

  <!-- Bootstrap CSS -->
  <link href="<?php echo e((string)$bootstrapCssHref); ?>" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="<?php echo e((string)$bootstrapIconsHref); ?>" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="<?php echo e((string)$googleFontsHref); ?>" rel="stylesheet">

  <!-- Existing site CSS -->
  <link rel="stylesheet" href="<?php echo e(ASSETS_URL . '/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo e(ASSETS_URL . '/css/responsive.css'); ?>">
<?php echo $extraHead; ?>
</head>
<body<?php echo $bodyClass !== '' ? ' class="' . e((string)$bodyClass) . '"' : ''; ?><?php echo $bodyAttributes !== '' ? ' ' . (string)$bodyAttributes : ''; ?>>
