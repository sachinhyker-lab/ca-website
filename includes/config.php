<?php
/**
 * Professional site configuration (XAMPP localhost compatible).
 *
 * Requirements implemented:
 * - SITE_NAME constant
 * - SITE_URL constant
 * - CURRENT_YEAR constant
 * - Error reporting configuration
 * - Timezone configuration
 * - Common reusable constants
 * - Clean & production-ready structure
 */

declare(strict_types=1);

// -------------------------------
// Environment / Error Handling
// -------------------------------
$env = getenv('APP_ENV') ?: 'production'; // set APP_ENV=local on your PC for verbose errors

date_default_timezone_set('Asia/Kolkata');

ini_set('display_errors', '0');
ini_set('log_errors', '1');

if ($env === 'local') {
  error_reporting(E_ALL);
} else {
  // Keep logs, suppress output in production.
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
}

// -------------------------------
// Base paths
// -------------------------------
define('BASE_PATH', dirname(__DIR__)); // project root: ca-website

define('SITE_NAME', 'Aashish & Company, Chartered Accountants');

// Works on XAMPP when website folder name is ca-website.
define('SITE_URL', 'http://localhost/ca-website');

define('CURRENT_YEAR', (int)date('Y'));

// -------------------------------
// Common reusable constants
// -------------------------------
define('ASSETS_URL', SITE_URL . '/assets');
define('FAVICON_URL', ASSETS_URL . '/images/logo/logo.svg');

// Basic encoding constant.
define('APP_DEFAULT_CHARSET', 'UTF-8');

// Small helper (optional, reusable)
function e(string $value): string
{
  return htmlspecialchars($value, ENT_QUOTES, APP_DEFAULT_CHARSET);
}

// Mimic common WordPress-style helper used across templates.
// Uses SITE_URL + provided relative path/filename.
function site_url(string $path = ''): string
{
  $path = ltrim($path, '/');
  return rtrim(SITE_URL, '/') . '/' . $path;
}


