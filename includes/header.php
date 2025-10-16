<?php
require_once __DIR__ . '/bootstrap.php';
$title = !empty($PAGE_TITLE) ? ($PAGE_TITLE) : $SITE_NAME;

// Define navigation items for easy management, using '' for the homepage key.
$navItems = [
    '' => 'Home',
    'getting-started' => 'Getting Started',
    'housing-fencing' => 'Housing & Fencing',
    'breeds' => 'Breeds & Choosing',
    'nutrition-minerals' => 'Nutrition',
];

$moreNavItems = [
    'health-vaccines-parasites' => 'Health',
    'hoof-care-grooming' => 'Hoof Care',
    'breeding-kidding' => 'Breeding & Kidding',
    'bottle-feeding-kid-care' => 'Bottle Feeding & Kids',
    'security-predator-proofing' => 'Security',
    'behavior-training-enrichment' => 'Behavior',
    'seasonal-care' => 'Seasonal',
    'checklists' => 'Checklists',
    'recordkeeping-forms' => 'Records',
    'common-problems-triage' => 'Triage',
    'glossary-resources' => 'Glossary',
    'calculators' => 'Calculators',
    'barn-pack' => 'Barn Pack',
];

// Use the $currentSlug variable from bootstrap.php, which is already calculated.
$currentUri = $currentSlug; 

?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($title) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/theme.css">
    <?= !empty($EXTRA_HEAD) ? $EXTRA_HEAD : '' ?>
    <script src="/assets/js/theme-toggle.js" defer></script>
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
    <!-- Header Section -->
    <header class="bg-white shadow-sm sticky top-0 z-20 no-print">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <a class="flex items-center gap-3" href="/">
                    <img alt="Goat Care Guide Logo" class="w-10 h-10" src="/assets/site/assets/logo-goat.svg" />
                    <span class="text-2xl font-bold text-slate-900 hidden sm:block">Goat Care Guide</span>
                </a>
                <!-- Desktop Navigation Menu -->
                <nav class="hidden md:flex items-center whitespace-nowrap">
                    <?php foreach ($navItems as $url => $text) :
                        $isActive = ($currentUri === $url);
                        $href = ($url === '') ? '/' : '/' . e($url);
                        $class = $isActive
                            ? 'px-3 py-2 text-sm font-medium bg-emerald-100 text-emerald-700 rounded-md'
                            : 'px-3 py-2 text-sm font-medium text-slate-600 hover:text-emerald-600 rounded-md';
                    ?>
                        <a class="<?= $class ?>" href="<?= $href ?>"><?= e($text) ?></a>
                    <?php endforeach; ?>

                    <div class="relative">
                        <button class="px-3 py-2 text-sm font-medium text-slate-600 hover:text-emerald-600 rounded-md flex items-center gap-1" id="nav-dropdown-button">
                            <span>More</span>
                            <svg class="w-4 h-4" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" fill-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div class="hidden absolute right-0 mt-2 w-56 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-30" id="nav-dropdown-panel">
                            <div class="py-1">
                                <?php foreach ($moreNavItems as $url => $text) :
                                    $isActive = ($currentUri === $url);
                                    $href = '/' . e($url);
                                    $class = $isActive
                                        ? 'block whitespace-normal px-4 py-2 text-sm bg-emerald-100 text-emerald-700 font-medium'
                                        : 'block whitespace-normal px-4 py-2 text-sm text-slate-700 hover:bg-slate-100';
                                ?>
                                    <a class="<?= $class ?>" href="<?= $href ?>"><?= e($text) ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button class="p-2 rounded-md text-slate-600 hover:text-emerald-600 hover:bg-slate-100" id="mobile-menu-button">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Navigation Panel -->
        <div class="hidden md:hidden fixed inset-0 bg-white z-30" id="mobile-menu-panel">
            <div class="h-full flex flex-col">
                <div class="p-4 flex justify-between items-center border-b">
                    <a class="flex items-center gap-3" href="/">
                        <img alt="Goat Care Guide Logo" class="w-8 h-8" src="/assets/site/assets/logo-goat.svg" />
                        <span class="text-xl font-bold text-slate-900">Goat Care Guide</span>
                    </a>
                    <button class="p-2 rounded-md text-slate-600 hover:text-emerald-600 hover:bg-slate-100" id="mobile-menu-close-button">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
                <nav class="flex-grow p-4 overflow-y-auto">
                    <?php
                    $allItems = array_merge($navItems, $moreNavItems);
                    foreach ($allItems as $url => $text) :
                        $isActive = ($currentUri === $url);
                        $href = ($url === '') ? '/' : '/' . e($url);
                        $class = $isActive
                            ? 'block px-4 py-2 text-base font-medium bg-emerald-100 text-emerald-700 rounded-md'
                            : 'block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md';
                    ?>
                        <a class="<?= $class ?>" href="<?= $href ?>"><?= e($text) ?></a>
                    <?php endforeach; ?>
                </nav>
            </div>
        </div>
    </header>