<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/bootstrap.php';

// Read and normalize slug from /slug or /a/b
$slug = isset($_GET['slug']) ? trim((string)$_GET['slug'], "/ \t\n\r\0\x0B") : '';
if ($slug === '' || $slug === 'index.php') { $slug = 'index'; }

// Only allow safe chars
if (!preg_match('/^[A-Za-z0-9\-\/]+$/', $slug)) {
    http_response_code(404);
    $pageTitle = 'Not Found';
    include __DIR__ . '/includes/header.php';
    echo '<main class="container mx-auto px-4 py-12"><h1 class="text-3xl font-bold">404</h1><p>Page not found.</p></main>';
    include __DIR__ . '/includes/footer.php';
    exit;
}

$pagesDir = __DIR__ . '/pages';

// Direct match
$path = $pagesDir . '/' . $slug . '.php';

// Support numbered files like "02-housing-fencing.php"
if (!is_file($path)) {
    $flatSlug = str_replace('/', '-', $slug);
    foreach (glob($pagesDir . '/*-' . $flatSlug . '.php') as $candidate) {
        if (preg_match('#/([0-9]+)-' . preg_quote($flatSlug, '#') . '\.php$#', $candidate)) {
            $path = $candidate; break;
        }
    }
}

// 404 if not found
if (!is_file($path)) {
    http_response_code(404);
    $pageTitle = 'Not Found';
    $canonical  = current_url();
    include __DIR__ . '/includes/header.php';
    echo '<main class="container mx-auto px-4 py-12"><h1 class="text-3xl font-bold">404</h1><p>Page not found.</p></main>';
    include __DIR__ . '/includes/footer.php';
    exit;
}

// Build $PAGES for menus (optional)
if (!isset($PAGES) || !is_array($PAGES)) {
    $PAGES = [];
    foreach (glob($pagesDir . '/*.php') as $file) {
        $base = basename($file, '.php'); // e.g. "02-housing-fencing"
        $slugKey = preg_replace('/^[0-9]+-/', '', $base);
        $PAGES[$slugKey] = ['title' => ucwords(str_replace('-', ' ', $slugKey))];
    }
    ksort($PAGES);
}

// ---- IMPORTANT: include the page FIRST to set per-page variables ----
ob_start();
include $path;                    // this sets $PAGE_TITLE, $META_DESCRIPTION, etc., then outputs content
$pageHtml = ob_get_clean();

// Provide sane defaults if the page didn't set them
$pageTitle       = $pageTitle ?? ($PAGE_TITLE ?? ucwords(str_replace(['-', '/'], [' ', ' / '], $slug)));
$pageDescription = $pageDescription ?? ($META_DESCRIPTION ?? 'Practical, comprehensive guides for raising healthy goats.');
$canonical       = $canonical ?? current_url();

// Render layout
include __DIR__ . '/includes/header.php';
echo $pageHtml;
include __DIR__ . '/includes/footer.php';