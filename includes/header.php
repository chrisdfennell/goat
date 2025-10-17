<?php
// Header assumes bootstrap.php already required by entry script (index.php/pages.php)

// Prevent duplicate header rendering if included more than once
if (defined('LAYOUT_HEADER_DONE')) { return; }
define('LAYOUT_HEADER_DONE', true);

// ---- Page variables with safe defaults ----
$title           = $title           ?? ($PAGE_TITLE       ?? ($pageTitle       ?? 'Goat Care'));
$pageDescription = $pageDescription ?? ($META_DESCRIPTION ?? 'Practical, comprehensive guides for raising healthy goats.');
$canonical       = $canonical       ?? ($CANONICAL        ?? (function_exists('current_url') ? current_url() : ''));
$siteUrl         = $siteUrl         ?? ($SITE_URL         ?? (function_exists('site_url') ? rtrim(site_url('/'), '/') : ''));
$ogImage         = $ogImage         ?? ($OG_IMAGE         ?? (function_exists('asset') ? asset('assets/site/assets/og-default.png') : 'assets/site/assets/og-default.png'));
$extraHead       = $extraHead       ?? ($EXTRA_HEAD       ?? '');

// ---- Nav items (static first 5) ----
$navItems = [
    '/'                  => 'Home',
    'getting-started'    => 'Getting Started',
    'housing-fencing'    => 'Housing & Fencing',
    'breeds'             => 'Breeds & Choosing',
    'nutrition-minerals' => 'Nutrition',
];

// Ensure $PAGES is an array
$pagesArray = (isset($PAGES) && is_array($PAGES)) ? $PAGES : [];

// Slice the remainder for the “More” menu, preserving keys (slugs)
$moreNavItems = array_slice($pagesArray, 5, null, true);

// Current slug
$currentSlug = function_exists('get_current_slug') ? get_current_slug() : 'index';

// ---- JSON-LD breadcrumbs ----
$schemaBreadcrumbs = [
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => [
        [
            '@type'    => 'ListItem',
            'position' => 1,
            'name'     => 'Home',
            'item'     => $siteUrl . '/'
        ]
    ]
];

if ($currentSlug !== 'index' && isset($pagesArray[$currentSlug])) {
    $schemaBreadcrumbs['itemListElement'][] = [
        '@type'    => 'ListItem',
        'position' => 2,
        'name'     => $pagesArray[$currentSlug]['title'] ?? ucfirst(str_replace('-', ' ', $currentSlug)),
        'item'     => $canonical
    ];
}

$schemaJson = json_encode($schemaBreadcrumbs, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= e($title) ?></title>
    <meta name="description" content="<?= e($pageDescription) ?>">
    <link rel="canonical" href="<?= e($canonical) ?>">

    <link rel="icon" href="<?= e(asset('assets/site/assets/logo-goat.svg')) ?>" type="image/svg+xml">
    <link rel="apple-touch-icon" href="<?= e(asset('assets/site/assets/logo-goat.svg')) ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= e($canonical) ?>">
    <meta property="og:title" content="<?= e($title) ?>">
    <meta property="og:description" content="<?= e($pageDescription) ?>">
    <meta property="og:image" content="<?= e($ogImage) ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?= e($canonical) ?>">
    <meta name="twitter:title" content="<?= e($title) ?>">
    <meta name="twitter:description" content="<?= e($pageDescription) ?>">
    <meta name="twitter:image" content="<?= e($ogImage) ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- IMPORTANT: no leading slash for assets -->
    <link rel="stylesheet" href="<?= e(asset('assets/css/theme.css')) ?>">

    <?= $extraHead ?>
    <script type="application/ld+json"><?= $schemaJson ?></script>

    <!-- IMPORTANT: no leading slash for assets -->
    <script src="<?= e(asset('assets/js/theme-toggle.js')) ?>" defer></script>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        // Dropdown navigation logic
        const dropdownButton = document.getElementById('nav-dropdown-button');
        const dropdownPanel = document.getElementById('nav-dropdown-panel');

        if (dropdownButton && dropdownPanel) {
            dropdownButton.addEventListener('click', (event) => {
                event.stopPropagation();
                dropdownPanel.classList.toggle('hidden');
            });
            document.addEventListener('click', (event) => {
                if (!dropdownPanel.classList.contains('hidden') && !dropdownButton.contains(event.target)) {
                    dropdownPanel.classList.add('hidden');
                }
            });
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && !dropdownPanel.classList.contains('hidden')) {
                    dropdownPanel.classList.add('hidden');
                }
            });
        }

        // Mobile menu logic
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenuPanel = document.getElementById('mobile-menu-panel');
        const mobileMenuCloseButton = document.getElementById('mobile-menu-close-button');

        if (mobileMenuButton && mobileMenuPanel) {
            const toggleMenu = () => {
                mobileMenuPanel.classList.toggle('hidden');
                document.body.classList.toggle('overflow-hidden');
            };
            mobileMenuButton.addEventListener('click', toggleMenu);
            if (mobileMenuCloseButton) {
                mobileMenuCloseButton.addEventListener('click', toggleMenu);
            }
        }
    });
    </script>
</head>

<body class="bg-slate-50 text-slate-800">
    <header class="bg-white shadow-sm sticky top-0 z-20 no-print">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <a class="flex items-center gap-3" href="<?= e(site_url('/')) ?>">
                    <img alt="Goat Care Guide Logo" class="w-10 h-10" src="<?= e(asset('assets/site/assets/logo-goat.svg')) ?>">
                    <span class="text-2xl font-bold text-slate-900 hidden sm:block">Goat Care Guide</span>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center whitespace-nowrap">
                    <?php foreach ($navItems as $slug => $text):
                        $isActive = ($currentSlug === rtrim($slug, '/') || ($currentSlug === 'index' && $slug === '/'));
                        $url = ($slug === '/') ? site_url('/') : site_url($slug);
                        $class = $isActive
                            ? 'px-3 py-2 text-sm font-medium bg-emerald-100 text-emerald-700 rounded-md'
                            : 'px-3 py-2 text-sm font-medium text-slate-600 hover:text-emerald-600 rounded-md';
                    ?>
                        <a class="<?= $class ?>" href="<?= e($url) ?>"><?= e($text) ?></a>
                    <?php endforeach; ?>

                    <div class="relative">
                        <button class="px-3 py-2 text-sm font-medium text-slate-600 hover:text-emerald-600 rounded-md flex items-center gap-1" id="nav-dropdown-button" type="button" aria-haspopup="true" aria-expanded="false">
                            <span>More</span>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"></path>
                            </svg>
                        </button>
                        <div class="hidden absolute right-0 mt-2 w-56 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-30" id="nav-dropdown-panel">
                            <div class="py-1">
                                <?php foreach ($moreNavItems as $slug => $pageData):
                                    $isActive = ($currentSlug === $slug);
                                    $url = site_url($slug);
                                    $class = $isActive
                                        ? 'block whitespace-normal px-4 py-2 text-sm bg-emerald-100 text-emerald-700 font-medium'
                                        : 'block whitespace-normal px-4 py-2 text-sm text-slate-700 hover:bg-slate-100';
                                ?>
                                    <a class="<?= $class ?>" href="<?= e($url) ?>"><?= e($pageData['title'] ?? ucfirst(str_replace('-', ' ', $slug))) ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Theme Toggle -->
                    <button class="theme-toggle-button ml-4 p-2 rounded-md text-slate-600 hover:text-emerald-600 hover:bg-slate-100" type="button" aria-label="Toggle theme">
                        <svg class="theme-icon-sun w-5 h-5 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        <svg class="theme-icon-moon w-5 h-5 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    </button>
                </nav>

                <!-- Mobile buttons -->
                <div class="flex items-center md:hidden">
                    <button class="theme-toggle-button p-2 rounded-md text-slate-600 hover:text-emerald-600 hover:bg-slate-100" type="button" aria-label="Toggle theme">
                        <svg class="theme-icon-sun w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        <svg class="theme-icon-moon w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    </button>
                    <button class="p-2 rounded-md text-slate-600 hover:text-emerald-600 hover:bg-slate-100" id="mobile-menu-button" type="button" aria-controls="mobile-menu-panel" aria-expanded="false">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Nav -->
        <div class="hidden md:hidden fixed inset-0 bg-white z-30" id="mobile-menu-panel" role="dialog" aria-modal="true">
            <div class="h-full flex flex-col">
                <div class="p-4 flex justify-between items-center border-b">
                    <a class="flex items-center gap-3" href="<?= e(site_url('/')) ?>">
                        <img alt="Goat Care Guide Logo" class="w-8 h-8" src="<?= e(asset('assets/site/assets/logo-goat.svg')) ?>">
                        <span class="text-xl font-bold text-slate-900">Goat Care Guide</span>
                    </a>
                    <button class="p-2 rounded-md text-slate-600 hover:text-emerald-600 hover:bg-slate-100" id="mobile-menu-close-button" type="button" aria-label="Close menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <nav class="flex-grow p-4 overflow-y-auto">
                    <?php
                    // Build all items (preserve slugs)
                    $allItems = $navItems;
                    foreach ($moreNavItems as $slug => $pageData) {
                        $allItems[$slug] = $pageData['title'] ?? ucfirst(str_replace('-', ' ', $slug));
                    }
                    foreach ($allItems as $slug => $text):
                        $isActive = ($currentSlug === rtrim($slug, '/') || ($currentSlug === 'index' && $slug === '/'));
                        $url = ($slug === '/') ? site_url('/') : site_url($slug);
                        $class = $isActive
                            ? 'block px-4 py-2 text-base font-medium bg-emerald-100 text-emerald-700 rounded-md'
                            : 'block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md';
                    ?>
                        <a class="<?= $class ?>" href="<?= e($url) ?>"><?= e($text) ?></a>
                    <?php endforeach; ?>
                </nav>
            </div>
        </div>
    </header>