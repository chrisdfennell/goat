<?php
declare(strict_types=1);

// ---------- Escaper ----------
if (!function_exists('e')) {
    // Accepts null and anything stringify-able to avoid TypeErrors
    function e($s = ''): string {
        return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
    }
}

// ---------- URL helpers ----------
if (!function_exists('url_scheme')) {
    function url_scheme(): string {
        return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https' : 'http';
    }
}
if (!function_exists('host_name')) {
    function host_name(): string {
        return $_SERVER['HTTP_HOST'] ?? 'localhost';
    }
}
if (!function_exists('current_url')) {
    function current_url(): string {
        $path  = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
        $query = $_SERVER['QUERY_STRING'] ?? '';
        return url_scheme() . '://' . host_name() . $path . ($query !== '' ? ('?' . $query) : '');
    }
}
if (!function_exists('site_url')) {
    // Absolute URL builder for links (OK to be absolute).
    function site_url(string $path = ''): string {
        $path = ltrim($path, '/');
        return url_scheme() . '://' . host_name() . '/' . ($path === '' ? '' : $path);
    }
}
if (!function_exists('asset')) {
    // Relative asset path (NO leading slash to satisfy your hosting quirk)
    function asset(string $rel): string {
        return ltrim($rel, '/');
    }
}

// ---------- Slug helper ----------
if (!function_exists('get_current_slug')) {
    function get_current_slug(): string {
        if (!empty($_GET['slug'])) {
            return trim((string)$_GET['slug'], '/');
        }
        $uri  = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
        $path = trim($uri, '/');
        if ($path === '' || $path === 'index.php') {
            return 'index';
        }
        $first = explode('/', $path, 2)[0];
        return $first !== '' ? $first : 'index';
    }
}

// ---------- Page variables with safe defaults ----------
$pageTitle        = $pageTitle        ?? 'Goat Care';
$pageDescription  = $pageDescription  ?? 'Practical, comprehensive guides for raising healthy goats.';
$canonical        = $canonical        ?? current_url();
$siteUrl          = $siteUrl          ?? rtrim(site_url('/'), '/');
$ogImage          = $ogImage          ?? asset('assets/site/assets/og-default.png');
$extraHead        = $extraHead        ?? '';

// ---------- Uppercase aliases (so header can use either style) ----------
$PAGE_TITLE       = $PAGE_TITLE       ?? $pageTitle;
$META_DESCRIPTION = $META_DESCRIPTION ?? $pageDescription;
$CANONICAL        = $CANONICAL        ?? $canonical;
$SITE_URL         = $SITE_URL         ?? $siteUrl;
$OG_IMAGE         = $OG_IMAGE         ?? $ogImage;
$EXTRA_HEAD       = $EXTRA_HEAD       ?? $extraHead;

// ---------- Pages map (optional; keep if you use it elsewhere) ----------
$PAGES = $PAGES ?? [];
