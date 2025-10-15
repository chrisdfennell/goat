<?php
$PAGE_TITLE = 'Nutrition & Minerals • Goat Care Guide';
$EXTRA_HEAD = '';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com'];
$PAGE_INLINE_JS = <<<HTML
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Dropdown and mobile menu logic
    const dropdownButton = document.getElementById('nav-dropdown-button');
    const dropdownPanel = document.getElementById('nav-dropdown-panel');
    if (dropdownButton && dropdownPanel) {
        dropdownButton.addEventListener('click', (event) => { event.stopPropagation(); dropdownPanel.classList.toggle('hidden'); });
        document.addEventListener('click', (event) => { if (!dropdownPanel.classList.contains('hidden') && !dropdownButton.contains(event.target)) dropdownPanel.classList.add('hidden'); });
        document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && !dropdownPanel.classList.contains('hidden')) dropdownPanel.classList.add('hidden'); });
    }
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenuPanel = document.getElementById('mobile-menu-panel');
    const mobileMenuCloseButton = document.getElementById('mobile-menu-close-button');
    if (mobileMenuButton && mobileMenuPanel) {
        const toggleMenu = () => { mobileMenuPanel.classList.toggle('hidden'); document.body.classList.toggle('overflow-hidden'); };
        mobileMenuButton.addEventListener('click', toggleMenu);
        mobileMenuCloseButton.addEventListener('click', toggleMenu);
    }
});
</script>
HTML;
$PAGE_FOOTER_HTML = '';
include __DIR__ . '/../includes/header.php';
?>


<!-- Header Section -->
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
                class="px-3 py-2 text-sm font-medium text-slate-600 hover:text-emerald-600 rounded-md"
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
                class="px-3 py-2 text-sm font-medium bg-emerald-100 text-emerald-700 rounded-md"
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
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
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
    class="block px-4 py-2 text-base font-medium bg-emerald-100 text-emerald-700 rounded-md"
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
<!-- Main Content -->
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
    <div class="max-w-4xl mx-auto">
        <section class="mb-12 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Goat Nutrition &amp; Minerals</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">Goats are ruminants with unique dietary needs. The foundation of any goat's diet is high-quality forage, supplemented by the right minerals and clean water.</p>
        </section>
        <div class="space-y-8">
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Forage: The Most Important Feed</h2>
                <p class="text-slate-600 mb-4">Goats are browsers, not grazers. This means they naturally prefer to eat woody plants, leaves, and weeds ("browse") rather than just grass. The bulk of their diet should be long-stem fiber.</p>
                <div class="grid md:grid-cols-2 gap-6 items-center">
                    <div>
                        <h3 class="font-semibold text-slate-800">Types of Hay:</h3>
                        <ul class="space-y-2 mt-2 list-disc list-inside text-slate-700">
                            <li><strong>Grass Hay:</strong> (Orchard, Timothy, Brome) Good all-purpose hay for wethers, bucks, and dry does.</li>
                            <li><strong>Legume Hay:</strong> (Alfalfa, Clover) Rich in protein and calcium. Excellent for milking does and growing kids, but can be too rich for others.</li>
                            <li><strong>Mixed Hay:</strong> A mix of grass and legume is often a perfect balance.</li>nigerian dwarfgoats
                        </ul>
                        <p class="mt-4 text-sm text-slate-600">Always inspect hay for mold, dust, and moisture before feeding. Bad hay can make a goat very sick.</p>
                    </div>
                    <div>
                        <img
                        alt="Side-by-side comparison of green alfalfa hay and lighter grass hay"
                        class="rounded-lg shadow-sm"
                        src="&lt;?= e($REL) ?&gt;assets/site/assets/types-of-hay.jpg" />
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">The Role of Minerals</h2>
                <p class="text-slate-600 mb-4">Minerals are non-negotiable for goat health. Deficiencies can lead to a host of problems including poor coat condition, reproductive issues, and weak kids.</p>
                <ul class="space-y-3 list-disc list-inside text-slate-600">
                    <li><strong>Loose Minerals Only:</strong> Goats have soft tongues and cannot get enough minerals from hard blocks. Always provide a high-quality loose mineral formulated specifically for goats.</li>
                    <li><strong>Key Minerals:</strong> Copper and Selenium are two of the most critical. Signs of copper deficiency include a rough, faded coat and a "fishtail" (balding at the tail tip). Selenium deficiency can cause weak kids and birthing complications.</li>
                    <li><strong>Free Choice:</strong> Provide loose minerals in a covered feeder protected from rain, and allow goats to consume them as needed. Also offer a separate feeder for plain, loose salt.</li>
                </ul>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Grain &amp; Concentrates</h2>
                <p class="text-slate-600 mb-4">Grain is a supplement, not a staple. It should be used strategically for goats with higher energy needs.</p>
                <ul class="space-y-2 list-disc list-inside text-slate-600">
                    <li><strong>Who needs grain?</strong> Milking does, pregnant does in their last 6 weeks, and growing kids.</li>
                    <li><strong>Who doesn't?</strong> Wethers, bucks (outside of rut), and dry does generally do not need grain and can become overweight and unhealthy with it.</li>
                    <li><strong>Go Slow:</strong> Introduce or increase grain rations slowly over a week to allow the goat's rumen to adjust. Too much, too fast, can cause life-threatening acidosis.</li>
                    <li><strong>Baking Soda:</strong> Always provide free-choice baking soda. Goats will eat it to self-regulate their rumen pH and buffer against acidosis.</li>
                </ul>
            </section>
            <section class="bg-red-50 border-l-4 border-red-500 text-red-800 p-6 rounded-r-lg">
                <strong class="font-semibold">Common Poisonous Plants:</strong>
                <p class="mt-1 text-sm">Ensure your goats cannot access ornamental shrubs. Common toxins include: Azalea, Rhododendron, Yew, Oleander, and wilted Cherry or Plum leaves.</p>
            </section>
        </div>
        <div class="flex justify-between items-center pt-12">
            <a
            class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors"
            href="&lt;?= e($REL) ?&gt;assets/site/03-breeds.html">
            <svg
            fill="none"
            height="16"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewbox="0 0 24 24"
            width="16"
            xmlns="http://www.w3.org/2000/svg"><path d="m15 18-6-6 6-6"></path></svg>
            Previous
            </a>
            <a
            class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 border border-transparent text-sm font-medium text-white rounded-md shadow-sm hover:bg-emerald-700 transition-colors"
            href="&lt;?= e($REL) ?&gt;assets/site/05-health-vaccines-parasites.html">
            Next
            <svg
            fill="none"
            height="16"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewbox="0 0 24 24"
            width="16"
            xmlns="http://www.w3.org/2000/svg"><path d="m9 18 6-6-6-6"></path></svg>
            </a>
        </div>
    </div>
</main>
<!-- Footer -->
<footer class="bg-slate-100 border-t border-slate-200 mt-16">
    <div
    class="container mx-auto px-4 sm:px-6 lg:px-8 py-6 text-center text-sm text-slate-500">
    <p>Last updated 2025-10-14</p>
    <p class="mt-1">For education only; always consult a veterinarian for medical concerns.</p>
</div>
</footer>
<script>
document.addEventListener('DOMContentLoaded', () => {
// Dropdown and mobile menu logic
const dropdownButton = document.getElementById('nav-dropdown-button');
const dropdownPanel = document.getElementById('nav-dropdown-panel');
if (dropdownButton && dropdownPanel) {
dropdownButton.addEventListener('click', (event) => { event.stopPropagation(); dropdownPanel.classList.toggle('hidden'); });
document.addEventListener('click', (event) => { if (!dropdownPanel.classList.contains('hidden') && !dropdownButton.contains(event.target)) dropdownPanel.classList.add('hidden'); });
document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && !dropdownPanel.classList.contains('hidden')) dropdownPanel.classList.add('hidden'); });
}
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenuPanel = document.getElementById('mobile-menu-panel');
const mobileMenuCloseButton = document.getElementById('mobile-menu-close-button');
if (mobileMenuButton && mobileMenuPanel) {
const toggleMenu = () => { mobileMenuPanel.classList.toggle('hidden'); document.body.classList.toggle('overflow-hidden'); };
mobileMenuButton.addEventListener('click', toggleMenu);
mobileMenuCloseButton.addEventListener('click', toggleMenu);
}
});
</script>


<?php include __DIR__ . '/../includes/footer.php'; ?>
