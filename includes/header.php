<?php
require_once __DIR__ . '/bootstrap.php';
$title = $PAGE_TITLE ? ($PAGE_TITLE . ' · ' . $SITE_NAME) : $SITE_NAME;
?><!DOCTYPE html>
<html lang="en" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= e($title) ?></title>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <link rel="stylesheet" href="<?= e($REL) ?>assets/css/theme.css">
        <?= $EXTRA_HEAD ?>

        <script defer src="<?= e($REL) ?>assets/js/theme-toggle.js"></script>
    </head>
    <body>
        <header class="bg-white shadow-sm sticky top-0 z-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <a
                    class="flex items-center gap-3"
                    href="&lt;?= e($REL) ?&gt;assets/site/index.html">
                    <img
                    alt="Goat Care Guide Logo"
                    class="w-10 h-10"
                    src="&lt;?= e($REL) ?&gt;assets/site/assets/logo-goat.svg" />
                    <span class="text-2xl font-bold text-slate-900 hidden sm:block">Goat Care Guide</span>
                    </a>
                    <!-- Desktop Navigation Menu -->
                    <nav class="hidden md:flex items-center whitespace-nowrap">
                        <a
                        class="px-3 py-2 text-sm font-medium bg-emerald-100 text-emerald-700 rounded-md"
                        href="&lt;?= e($REL) ?&gt;assets/site/index.html">Home</a>
                        <a
                        class="px-3 py-2 text-sm font-medium text-slate-600 hover:text-emerald-600 rounded-md"
                        href="&lt;?= e($REL) ?&gt;assets/site/01-getting-started.html">Getting Started</a>
                        <a
                        class="px-3 py-2 text-sm font-medium text-slate-600 hover:text-emerald-600 rounded-md"
                        href="&lt;?= e($REL) ?&gt;assets/site/02-housing-fencing.html">Housing &amp; Fencing</a>
                        <a
                        class="px-3 py-2 text-sm font-medium text-slate-600 hover:text-emerald-600 rounded-md"
                        href="&lt;?= e($REL) ?&gt;assets/site/03-breeds.html">Breeds &amp; Choosing</a>
                        <a
                        class="px-3 py-2 text-sm font-medium text-slate-600 hover:text-emerald-600 rounded-md"
                        href="&lt;?= e($REL) ?&gt;assets/site/04-nutrition-minerals.html">Nutrition</a>
                        <div class="relative">
                            <button
                            class="px-3 py-2 text-sm font-medium text-slate-600 hover:text-emerald-600 rounded-md flex items-center gap-1"
                            id="nav-dropdown-button">
                            <span>More</span>
                            <svg
                            class="w-4 h-4"
                            fill="currentColor"
                            viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"><path
                            clip-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            fill-rule="evenodd"></path></svg>
                        </button>
                        <div
                        class="hidden absolute right-0 mt-2 w-56 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-30"
                        id="nav-dropdown-panel">
                        <div class="py-1">
                            <a
                            class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100"
                            href="&lt;?= e($REL) ?&gt;assets/site/05-health-vaccines-parasites.html">Health</a>
                            <a
                            class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100"
                            href="&lt;?= e($REL) ?&gt;assets/site/06-hoof-care-grooming.html">Hoof Care</a>
                            <a
                            class="block whitespace-normal px-4 py-2 text-sm text-slate-700 hover:bg-slate-100"
                            href="&lt;?= e($REL) ?&gt;assets/site/07-breeding-kidding.html">Breeding &amp; Kidding</a>
                            <a
                            class="block whitespace-normal px-4 py-2 text-sm text-slate-700 hover:bg-slate-100"
                            href="&lt;?= e($REL) ?&gt;assets/site/08-bottle-feeding-kid-care.html">Bottle Feeding &amp; Kids</a>
                            <a
                            class="block whitespace-normal px-4 py-2 text-sm text-slate-700 hover:bg-slate-100"
                            href="&lt;?= e($REL) ?&gt;assets/site/09-security-predator-proofing.html">Security</a>
                            <a
                            class="block whitespace-normal px-4 py-2 text-sm text-slate-700 hover:bg-slate-100"
                            href="&lt;?= e($REL) ?&gt;assets/site/10-behavior-training-enrichment.html">Behavior</a>
                            <a
                            class="block whitespace-normal px-4 py-2 text-sm text-slate-700 hover:bg-slate-100"
                            href="&lt;?= e($REL) ?&gt;assets/site/11-seasonal-care.html">Seasonal</a>
                            <a
                            class="block whitespace-normal px-4 py-2 text-sm text-slate-700 hover:bg-slate-100"
                            href="&lt;?= e($REL) ?&gt;assets/site/12-checklists.html">Checklists</a>
                            <a
                            class="block whitespace-normal px-4 py-2 text-sm text-slate-700 hover:bg-slate-100"
                            href="&lt;?= e($REL) ?&gt;assets/site/13-recordkeeping-forms.html">Records</a>
                            <a
                            class="block whitespace-normal px-4 py-2 text-sm text-slate-700 hover:bg-slate-100"
                            href="&lt;?= e($REL) ?&gt;assets/site/14-common-problems-triage.html">Triage</a>
                            <a
                            class="block whitespace-normal px-4 py-2 text-sm text-slate-700 hover:bg-slate-100"
                            href="&lt;?= e($REL) ?&gt;assets/site/15-glossary-resources.html">Glossary</a>
                            <a
                            class="block whitespace-normal px-4 py-2 text-sm text-slate-700 hover:bg-slate-100"
                            href="&lt;?= e($REL) ?&gt;assets/site/16-calculators.html">Calculators</a>
                            <a
                            class="block whitespace-normal px-4 py-2 text-sm text-slate-700 hover:bg-slate-100"
                            href="&lt;?= e($REL) ?&gt;assets/site/17-barn-pack.html">Barn Pack</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button
                class="p-2 rounded-md text-slate-600 hover:text-emerald-600 hover:bg-slate-100"
                id="mobile-menu-button">
                <svg
                class="w-6 h-6"
                fill="none"
                stroke="currentColor"
                stroke-width="1.5"
                viewbox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
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
            <a
            class="flex items-center gap-3"
            href="&lt;?= e($REL) ?&gt;assets/site/index.html">
            <img
            alt="Goat Care Guide Logo"
            class="w-8 h-8"
            src="&lt;?= e($REL) ?&gt;assets/site/assets/logo-goat.svg" />
            <span class="text-xl font-bold text-slate-900">Goat Care Guide</span>
            </a>
            <button
            class="p-2 rounded-md text-slate-600 hover:text-emerald-600 hover:bg-slate-100"
            id="mobile-menu-close-button">
            <svg
            class="w-6 h-6"
            fill="none"
            stroke="currentColor"
            stroke-width="1.5"
            viewbox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </button>
</div>
<nav class="flex-grow p-4 overflow-y-auto">
    <a
    class="block px-4 py-2 text-base font-medium bg-emerald-100 text-emerald-700 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/index.html">Home</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/01-getting-started.html">Getting Started</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/02-housing-fencing.html">Housing &amp; Fencing</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/03-breeds.html">Breeds &amp; Choosing</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/04-nutrition-minerals.html">Nutrition</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/05-health-vaccines-parasites.html">Health</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/06-hoof-care-grooming.html">Hoof Care</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/07-breeding-kidding.html">Breeding &amp; Kidding</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/08-bottle-feeding-kid-care.html">Bottle Feeding &amp; Kids</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/09-security-predator-proofing.html">Security</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/10-behavior-training-enrichment.html">Behavior</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/11-seasonal-care.html">Seasonal</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/12-checklists.html">Checklists</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/13-recordkeeping-forms.html">Records</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/14-common-problems-triage.html">Triage</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/15-glossary-resources.html">Glossary</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/16-calculators.html">Calculators</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/17-barn-pack.html">Barn Pack</a>
</nav>
</div>
</div>
</header>
<main>
