<?php
$PAGE_TITLE = 'Breeds & Choosing • Goat Care Guide';
$EXTRA_HEAD = '';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com'];
$PAGE_INLINE_JS = <<<HTML
<script>
document.addEventListener('DOMContentLoaded', () => {
    const breedTable = document.getElementById('breed-comparison');
    const lightbox = document.getElementById('lightbox');
    if (breedTable && lightbox) {
        const lightboxImg = lightbox.querySelector('img');
        const lightboxClose = document.getElementById('lightbox-close');
        
        const openLightbox = (imgElement) => {
            const highResSrc = imgElement.getAttribute('data-src');
            if (highResSrc) {
                lightboxImg.src = highResSrc;
                lightboxImg.alt = imgElement.alt;
                lightbox.classList.add('open');
            }
        };

        const closeLightbox = () => {
            lightbox.classList.remove('open');
            setTimeout(() => { lightboxImg.src = ''; }, 200);
        };

        breedTable.addEventListener('click', (e) => {
            if (e.target.tagName === 'IMG') {
                e.preventDefault();
                openLightbox(e.target);
            }
        });
        
        const images = breedTable.querySelectorAll('img[data-src]');
        images.forEach(img => { img.src = img.getAttribute('data-src'); });

        lightbox.addEventListener('click', (e) => { if (e.target === lightbox) closeLightbox(); });
        lightboxClose.addEventListener('click', closeLightbox);
        document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && lightbox.classList.contains('open')) closeLightbox(); });
    }

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
                class="px-3 py-2 text-sm font-medium bg-emerald-100 text-emerald-700 rounded-md"
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
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/index.html">Home</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/01-getting-started.html">Getting Started</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/02-housing-fencing.html">Housing &amp; Fencing</a>
    <a
    class="block px-4 py-2 text-base font-medium bg-emerald-100 text-emerald-700 rounded-md"
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
<!-- Main Content -->
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
    <div class="max-w-7xl mx-auto">
        <section class="mb-12 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Compare Goat Breeds</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">Choosing the right breed is the first step to a successful herd. Match the breed's purpose, size, and temperament to your goals and property.</p>
        </section>
        <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200 mb-12">
            <h2 class="text-2xl font-bold text-slate-900 mb-4 text-center">Choosing for Your Goals</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-slate-100">
                        <tr>
                            <th class="p-3 text-sm font-semibold text-slate-600">If your goal is...</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Prioritize...</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Top Breeds</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200 text-sm">
                        <tr>
                            <td class="p-3 font-medium">Family Milk &amp; Cheese</td>
                            <td class="p-3 text-slate-600">High Butterfat, Good Temperament</td>
                            <td class="p-3 text-slate-600">Nigerian Dwarf, Nubian</td>
                        </tr>
                        <tr>
                            <td class="p-3 font-medium">High Milk Volume</td>
                            <td class="p-3 text-slate-600">Lactation Persistency, Udder Structure</td>
                            <td class="p-3 text-slate-600">Alpine, Saanen, LaMancha</td>
                        </tr>
                        <tr>
                            <td class="p-3 font-medium">Meat Production</td>
                            <td class="p-3 text-slate-600">Growth Rate, Muscling</td>
                            <td class="p-3 text-slate-600">Boer, Kiko, Spanish</td>
                        </tr>
                        <tr>
                            <td class="p-3 font-medium">Pets &amp; Brush Clearing</td>
                            <td class="p-3 text-slate-600">Small Size, Docile Nature, Hardiness</td>
                            <td class="p-3 text-slate-600">Pygmy, Nigerian Dwarf, Miniatures</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="bg-white rounded-lg shadow-md border border-slate-200" id="breed-comparison">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-100">
                        <tr>
                            <th class="p-3 text-sm font-semibold text-slate-600 sticky left-0 bg-slate-100 z-10">Breed</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Purpose</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Size (Does)</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Temperament</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Best For</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Watch Out For</th>
                        </tr>
                    </thead>
                    <tbody class="align-top divide-y divide-slate-200">
                        <!-- Nigerian Dwarf -->
                        <tr><td class="p-3 font-medium text-slate-900 sticky left-0 bg-white"><div class="flex items-center gap-3"><img
                                    alt="Nigerian Dwarf goat"
                                    class="w-16 h-16 rounded-md object-cover cursor-pointer hover:opacity-80 transition-opacity"
                                    data-src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Nigerian_Dwarf_goat_%28brown%29.jpg"
                                    onerror="this.onerror=null;this.src='https://placehold.co/80x80/e2e8f0/475569?text=Goat';"
                                    src="https://placehold.co/80x80/e2e8f0/475569?text=Goat" /><span class="font-bold">Nigerian Dwarf</span></div></td><td class="p-3 text-slate-600 text-sm">Dairy / Pet</td><td class="p-3 text-slate-600 text-sm">~60–80 lbs</td><td class="p-3 text-slate-600 text-sm">Friendly, energetic, curious</td><td class="p-3 text-slate-600 text-sm">Small homesteads, rich milk for cheese, great pets.</td><td class="p-3 text-slate-600 text-sm">Lower total volume, agile escape artists.</td></tr>
                                    <!-- Nubian -->
                                    <tr><td class="p-3 font-medium text-slate-900 sticky left-0 bg-white"><div class="flex items-center gap-3"><img
                                                alt="Nubian goat"
                                                class="w-16 h-16 rounded-md object-cover cursor-pointer hover:opacity-80 transition-opacity"
                                                data-src="https://upload.wikimedia.org/wikipedia/commons/e/e0/Anglo-Nubian_goat_at_a_zoo.jpg"
                                                onerror="this.onerror=null;this.src='https://placehold.co/80x80/e2e8f0/475569?text=Goat';"
                                                src="https://placehold.co/80x80/e2e8f0/475569?text=Goat" /><span class="font-bold">Nubian</span></div></td><td class="p-3 text-slate-600 text-sm">Dairy / Dual</td><td class="p-3 text-slate-600 text-sm">120–170 lbs</td><td class="p-3 text-slate-600 text-sm">Affectionate, very vocal, dramatic</td><td class="p-3 text-slate-600 text-sm">High-butterfat milk ("Jersey cow of goats"), handles heat well.</td><td class="p-3 text-slate-600 text-sm">Can be very loud, larger feed needs.</td></tr>
                                                <!-- Alpine -->
                                                <tr><td class="p-3 font-medium text-slate-900 sticky left-0 bg-white"><div class="flex items-center gap-3"><img
                                                            alt="Alpine goat"
                                                            class="w-16 h-16 rounded-md object-cover cursor-pointer hover:opacity-80 transition-opacity"
                                                            data-src="https://commons.wikimedia.org/wiki/Special:FilePath/American_Alpine_doe.jpg"
                                                            onerror="this.onerror=null;this.src='https://placehold.co/80x80/e2e8f0/475569?text=Goat';"
                                                            src="https://placehold.co/80x80/e2e8f0/475569?text=Goat" /><span class="font-bold">Alpine</span></div></td><td class="p-3 text-slate-600 text-sm">Dairy</td><td class="p-3 text-slate-600 text-sm">130–160 lbs</td><td class="p-3 text-slate-600 text-sm">Hardy, curious, adaptable</td><td class="p-3 text-slate-600 text-sm">Reliable high-volume production, cold-tolerant, athletic.</td><td class="p-3 text-slate-600 text-sm">Can be more independent or aloof than other breeds.</td></tr>
                                                            <!-- LaMancha -->
                                                            <tr><td class="p-3 font-medium text-slate-900 sticky left-0 bg-white"><div class="flex items-center gap-3"><img
                                                                        alt="LaMancha goat"
                                                                        class="w-16 h-16 rounded-md object-cover cursor-pointer hover:opacity-80 transition-opacity"
                                                                        data-src="https://upload.wikimedia.org/wikipedia/commons/1/16/La_Mancha_closeup.jpg"
                                                                        onerror="this.onerror=null;this.src='https://placehold.co/80x80/e2e8f0/475569?text=Goat';"
                                                                        src="https://placehold.co/80x80/e2e8f0/475569?text=Goat" /><span class="font-bold">LaMancha</span></div></td><td class="p-3 text-slate-600 text-sm">Dairy</td><td class="p-3 text-slate-600 text-sm">120–160 lbs</td><td class="p-3 text-slate-600 text-sm">Calm, gentle, dependable</td><td class="p-3 text-slate-600 text-sm">Steady milkers with a docile temperament, easy to handle on the stand.</td><td class="p-3 text-slate-600 text-sm">Distinct "gopher" or "elf" ears are not for everyone.</td></tr>
                                                                        <!-- Boer -->
                                                                        <tr><td class="p-3 font-medium text-slate-900 sticky left-0 bg-white"><div class="flex items-center gap-3"><img
                                                                                    alt="Boer goat"
                                                                                    class="w-16 h-16 rounded-md object-cover cursor-pointer hover:opacity-80 transition-opacity"
                                                                                    data-src="https://upload.wikimedia.org/wikipedia/commons/9/92/Boer_goat_Doe.jpg"
                                                                                    onerror="this.onerror=null;this.src='https://placehold.co/80x80/e2e8f0/475569?text=Goat';"
                                                                                    src="https://placehold.co/80x80/e2e8f0/475569?text=Goat" /><span class="font-bold">Boer</span></div></td><td class="p-3 text-slate-600 text-sm">Meat</td><td class="p-3 text-slate-600 text-sm">200+ lbs</td><td class="p-3 text-slate-600 text-sm">Generally docile, but large</td><td class="p-3 text-slate-600 text-sm">Excellent growth rate and carcass yield, heat tolerant.</td><td class="p-3 text-slate-600 text-sm">Prone to parasites; not as hardy as other meat breeds.</td></tr>
                                                                                    <!-- Kiko -->
                                                                                    <tr><td class="p-3 font-medium text-slate-900 sticky left-0 bg-white"><div class="flex items-center gap-3"><img
                                                                                                alt="Kiko goat"
                                                                                                class="w-16 h-16 rounded-md object-cover cursor-pointer hover:opacity-80 transition-opacity"
                                                                                                data-src="https://upload.wikimedia.org/wikipedia/commons/1/13/Kiko_goat_with_kid_USA_2011.jpg"
                                                                                                onerror="this.onerror=null;this.src='https://placehold.co/80x80/e2e8f0/475569?text=Goat';"
                                                                                                src="https://placehold.co/80x80/e2e8f0/475569?text=Goat" /><span class="font-bold">Kiko</span></div></td><td class="p-3 text-slate-600 text-sm">Meat / Hardy</td><td class="p-3 text-slate-600 text-sm">120–180 lbs</td><td class="p-3 text-slate-600 text-sm">Independent, hardy, active foragers</td><td class="p-3 text-slate-600 text-sm">Low-maintenance, parasite resistant, excellent mothers.</td><td class="p-3 text-slate-600 text-sm">Less common in some areas, less muscled than Boers.</td></tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </section>
                                                                                <div class="flex justify-between items-center pt-12">
                                                                                    <a
                                                                                    class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors"
                                                                                    href="&lt;?= e($REL) ?&gt;assets/site/02-housing-fencing.html">
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
                                                                                    href="&lt;?= e($REL) ?&gt;assets/site/04-nutrition-minerals.html">
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
                                                                    <!-- Lightbox -->
                                                                    <div
                                                                    class="lightbox-backdrop fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center p-4 z-50 opacity-0 pointer-events-none"
                                                                    id="lightbox">
                                                                    <div
                                                                    class="lightbox-frame max-w-4xl max-h-full bg-white rounded-lg shadow-2xl p-4 relative">
                                                                    <img alt="" class="max-w-full max-h-[80vh] block" src=""/>
                                                                    <button
                                                                    class="absolute -top-3 -right-3 bg-white rounded-full p-1 shadow-lg text-slate-700 hover:text-red-500 transition-colors"
                                                                    id="lightbox-close">
                                                                    <svg
                                                                    fill="none"
                                                                    height="28"
                                                                    stroke="currentColor"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    stroke-width="2.5"
                                                                    viewbox="0 0 24 24"
                                                                    width="28"
                                                                    xmlns="http://www.w3.org/2000/svg"><line x1="18" x2="6" y1="6" y2="18"></line><line x1="6" x2="18" y1="6" y2="18"></line></svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <script>
                                                        document.addEventListener('DOMContentLoaded', () => {
                                                        const breedTable = document.getElementById('breed-comparison');
                                                        const lightbox = document.getElementById('lightbox');
                                                        if (breedTable && lightbox) {
                                                        const lightboxImg = lightbox.querySelector('img');
                                                        const lightboxClose = document.getElementById('lightbox-close');

                                                        const openLightbox = (imgElement) => {
                                                        const highResSrc = imgElement.getAttribute('data-src');
                                                        if (highResSrc) {
                                                        lightboxImg.src = highResSrc;
                                                        lightboxImg.alt = imgElement.alt;
                                                        lightbox.classList.add('open');
                                                        }
                                                        };

                                                        const closeLightbox = () => {
                                                        lightbox.classList.remove('open');
                                                        setTimeout(() => { lightboxImg.src = ''; }, 200);
                                                        };

                                                        breedTable.addEventListener('click', (e) => {
                                                        if (e.target.tagName === 'IMG') {
                                                        e.preventDefault();
                                                        openLightbox(e.target);
                                                        }
                                                        });

                                                        const images = breedTable.querySelectorAll('img[data-src]');
                                                        images.forEach(img => { img.src = img.getAttribute('data-src'); });

                                                        lightbox.addEventListener('click', (e) => { if (e.target === lightbox) closeLightbox(); });
                                                        lightboxClose.addEventListener('click', closeLightbox);
                                                        document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && lightbox.classList.contains('open')) closeLightbox(); });
                                                        }

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
