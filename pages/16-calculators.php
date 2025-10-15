<?php
$PAGE_TITLE = 'Calculators • Goat Care Guide';
$EXTRA_HEAD = '';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com'];
$PAGE_INLINE_JS = <<<HTML
<script>
document.addEventListener('DOMContentLoaded', () => {
    // --- UTILITY FUNCTIONS ---
    const $ = (s) => document.querySelector(s);
    const $$ = (s) => document.querySelectorAll(s);
    const storeKey = 'goat.calc';

    // --- DATA PERSISTENCE ---
    const save = () => {
        const data = {
            a: $('#adults').value, m: $('#milkers').value, k: $('#kids').value,
            bd: $('#breeding_date').value, gd: $('#gestation_days').value,
            hg: $('#heart_girth').value
        };
        localStorage.setItem(storeKey, JSON.stringify(data));
    };

    const load = () => {
        try {
            const v = JSON.parse(localStorage.getItem(storeKey) || '{}');
            if (v.a) $('#adults').value = v.a;
            if (v.m) $('#milkers').value = v.m;
            if (v.k) $('#kids').value = v.k;
            if (v.bd) $('#breeding_date').value = v.bd;
            if (v.gd) $('#gestation_days').value = v.gd;
            if (v.hg) $('#heart_girth').value = v.hg;
        } catch (e) { console.error("Could not load saved data.", e); }
    };

    // --- CALCULATORS ---
    function calculateHWM() {
        const A = +$('#adults').value || 0, M = +$('#milkers').value || 0, K = +$('#kids').value || 0;
        const totalGoats = A + M + K;
        if (totalGoats === 0) {
            $('#hayNum').textContent = '—'; $('#waterNum').textContent = '—'; $('#minNum').textContent = '—';
            $('#out1Notes').textContent = 'Enter your herd numbers to calculate.';
            return;
        }
        const hay = A * 2.5 + M * 4.0 + K * 1.5;
        const water = A * 1.5 + M * 3.5 + K * 1.0;
        const minerals = totalGoats * 0.75; // Approx 0.5-1 oz per head
        
        $('#hayNum').textContent = hay.toFixed(1);
        $('#waterNum').textContent = water.toFixed(1);
        $('#minNum').textContent = minerals.toFixed(1);
        $('#out1Notes').innerHTML = `Totals for ${A} adults, ${M} milkers, and ${K} kids. Adjust hay based on forage quality and BCS. Water needs double in high heat.`;
        save();
    }

    function calculateKiddingDate() {
        const breedDate = $('#breeding_date').value;
        const gestation = +$('#gestation_days').value || 150;
        if (!breedDate) {
            $('#due_date_output').textContent = '—';
            return;
        }
        const d = new Date(breedDate);
        d.setDate(d.getDate() + gestation + 1); // JS date quirk
        $('#due_date_output').textContent = d.toLocaleDateString(undefined, { year: 'numeric', month: 'long', day: 'numeric' });
        save();
    }

    function calculateWeight() {
        // Uses a common formula: (Girth x Girth x Length) / 300. We'll simplify and use a girth-only table approximation.
        // This is a very rough estimate.
        const girth = +$('#heart_girth').value;
        if (!girth) {
            $('#weight_output').textContent = '— lbs';
            return;
        }
        // Very simplified linear approximation, not scientifically accurate but a basic guide.
        // Based on various online charts for standard dairy breeds.
        let weight = 0;
        if (girth > 15) {
            weight = (girth - 15) * 4.5;
        }
        $('#weight_output').textContent = `${Math.max(0, weight).toFixed(0)} lbs`;
        save();
    }

    // --- EVENT LISTENERS ---
    $('#form-hwm').addEventListener('input', calculateHWM);
    $('#form-kidding').addEventListener('input', calculateKiddingDate);
    $('#form-weight').addEventListener('input', calculateWeight);
    
    // --- INITIALIZATION ---
    load();
    calculateHWM();
    calculateKiddingDate();
    calculateWeight();

    // --- MOBILE MENU LOGIC ---
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
<header class="bg-white shadow-sm sticky top-0 z-20 no-print">
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
                    class="block whitespace-normal px-4 py-2 text-sm bg-emerald-100 text-emerald-700 font-medium"
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
    class="block px-4 py-2 text-base font-medium bg-emerald-100 text-emerald-700 rounded-md"
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
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Herd Management Calculators</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">Use these simple tools to estimate herd needs and plan important dates. Remember, these are estimates—always adjust based on observation of your animals.</p>
        </section>
        <div class="space-y-8">
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200" id="hay-water-minerals">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Daily Feed &amp; Water Estimator</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <form class="space-y-4" id="form-hwm" onsubmit="return false">
                            <div>
                                <label class="block text-sm font-medium text-slate-700" for="adults">Adults (maintenance)</label>
                                <input
                                class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm"
                                id="adults"
                                min="0"
                                step="1"
                                type="number"
                                value="2" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700" for="milkers">Milking Does</label>
                                <input
                                class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm"
                                id="milkers"
                                min="0"
                                step="1"
                                type="number"
                                value="1" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700" for="kids">Kids (&lt; 6 months)</label>
                                <input
                                class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm"
                                id="kids"
                                min="0"
                                step="1"
                                type="number"
                                value="0" />
                            </div>
                        </form>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-lg" id="out1">
                        <h4 class="font-bold text-slate-800 text-lg mb-3">Daily Estimates:</h4>
                        <div class="space-y-3">
                            <p class="text-sm"><strong class="text-base font-semibold text-emerald-700" id="hayNum">—</strong> lbs of Hay</p>
                            <p class="text-sm"><strong class="text-base font-semibold text-emerald-700" id="waterNum">—</strong> gallons of Water</p>
                            <p class="text-sm"><strong class="text-base font-semibold text-emerald-700" id="minNum">—</strong> oz of Loose Minerals</p>
                        </div>
                        <p class="text-xs text-slate-500 mt-4" id="out1Notes">Enter your herd numbers to calculate.</p>
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200" id="kidding-calculator">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Kidding Date Calculator</h2>
                <div class="grid md:grid-cols-2 gap-8 items-start">
                    <div>
                        <form class="space-y-4" id="form-kidding" onsubmit="return false">
                            <div>
                                <label class="block text-sm font-medium text-slate-700" for="breeding_date">Breeding Date</label>
                                <input
                                class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm"
                                id="breeding_date"
                                type="date" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700" for="gestation_days">Gestation Length (days)</label>
                                <input
                                class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm"
                                id="gestation_days"
                                max="160"
                                min="140"
                                type="number"
                                value="150" />
                            </div>
                        </form>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-lg" id="out2">
                        <h4 class="font-bold text-slate-800 text-lg mb-3">Estimated Due Date:</h4>
                        <p class="text-xl font-bold text-emerald-700" id="due_date_output">—</p>
                        <p class="text-xs text-slate-500 mt-2">Standard gestation is 145-155 days. Miniatures are often closer to 145.</p>
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200" id="weight-estimator">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Weight Estimator (from Girth)</h2>
                <p class="text-slate-600 mb-4 text-sm">This provides a rough estimate for dosing medications. A scale is always more accurate. Measure the heart girth (in inches) just behind the front legs.</p>
                <div class="grid md:grid-cols-2 gap-8 items-start">
                    <div>
                        <form id="form-weight" onsubmit="return false">
                            <div>
                                <label class="block text-sm font-medium text-slate-700" for="heart_girth">Heart Girth (inches)</label>
                                <input
                                class="mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm"
                                id="heart_girth"
                                min="10"
                                step="0.5"
                                type="number" />
                            </div>
                        </form>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-lg" id="out3">
                        <h4 class="font-bold text-slate-800 text-lg mb-3">Estimated Weight:</h4>
                        <p class="text-xl font-bold text-emerald-700" id="weight_output">— lbs</p>
                        <p class="text-xs text-slate-500 mt-2">This formula is an approximation and can vary by breed and condition.</p>
                    </div>
                </div>
            </section>
        </div>
        <div class="flex justify-between items-center pt-12">
            <a
            class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors"
            href="&lt;?= e($REL) ?&gt;assets/site/15-glossary-resources.html">
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
            href="&lt;?= e($REL) ?&gt;assets/site/17-barn-pack.html">
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
<footer class="bg-slate-100 border-t border-slate-200 mt-16 no-print">
    <div
    class="container mx-auto px-4 sm:px-6 lg:px-8 py-6 text-center text-sm text-slate-500">
    <p>Last updated 2025-10-14</p>
    <p class="mt-1">For education only; always consult a veterinarian for medical concerns.</p>
</div>
</footer>
<script>
document.addEventListener('DOMContentLoaded', () => {
// --- UTILITY FUNCTIONS ---
const $ = (s) => document.querySelector(s);
const $$ = (s) => document.querySelectorAll(s);
const storeKey = 'goat.calc';

// --- DATA PERSISTENCE ---
const save = () => {
const data = {
a: $('#adults').value, m: $('#milkers').value, k: $('#kids').value,
bd: $('#breeding_date').value, gd: $('#gestation_days').value,
hg: $('#heart_girth').value
};
localStorage.setItem(storeKey, JSON.stringify(data));
};

const load = () => {
try {
const v = JSON.parse(localStorage.getItem(storeKey) || '{}');
if (v.a) $('#adults').value = v.a;
if (v.m) $('#milkers').value = v.m;
if (v.k) $('#kids').value = v.k;
if (v.bd) $('#breeding_date').value = v.bd;
if (v.gd) $('#gestation_days').value = v.gd;
if (v.hg) $('#heart_girth').value = v.hg;
} catch (e) { console.error("Could not load saved data.", e); }
};

// --- CALCULATORS ---
function calculateHWM() {
const A = +$('#adults').value || 0, M = +$('#milkers').value || 0, K = +$('#kids').value || 0;
const totalGoats = A + M + K;
if (totalGoats === 0) {
$('#hayNum').textContent = '—'; $('#waterNum').textContent = '—'; $('#minNum').textContent = '—';
$('#out1Notes').textContent = 'Enter your herd numbers to calculate.';
return;
}
const hay = A * 2.5 + M * 4.0 + K * 1.5;
const water = A * 1.5 + M * 3.5 + K * 1.0;
const minerals = totalGoats * 0.75; // Approx 0.5-1 oz per head

$('#hayNum').textContent = hay.toFixed(1);
$('#waterNum').textContent = water.toFixed(1);
$('#minNum').textContent = minerals.toFixed(1);
$('#out1Notes').innerHTML = `Totals for ${A} adults, ${M} milkers, and ${K} kids. Adjust hay based on forage quality and BCS. Water needs double in high heat.`;
save();
}

function calculateKiddingDate() {
const breedDate = $('#breeding_date').value;
const gestation = +$('#gestation_days').value || 150;
if (!breedDate) {
$('#due_date_output').textContent = '—';
return;
}
const d = new Date(breedDate);
d.setDate(d.getDate() + gestation + 1); // JS date quirk
$('#due_date_output').textContent = d.toLocaleDateString(undefined, { year: 'numeric', month: 'long', day: 'numeric' });
save();
}

function calculateWeight() {
// Uses a common formula: (Girth x Girth x Length) / 300. We'll simplify and use a girth-only table approximation.
// This is a very rough estimate.
const girth = +$('#heart_girth').value;
if (!girth) {
$('#weight_output').textContent = '— lbs';
return;
}
// Very simplified linear approximation, not scientifically accurate but a basic guide.
// Based on various online charts for standard dairy breeds.
let weight = 0;
if (girth > 15) {
weight = (girth - 15) * 4.5;
}
$('#weight_output').textContent = `${Math.max(0, weight).toFixed(0)} lbs`;
save();
}

// --- EVENT LISTENERS ---
$('#form-hwm').addEventListener('input', calculateHWM);
$('#form-kidding').addEventListener('input', calculateKiddingDate);
$('#form-weight').addEventListener('input', calculateWeight);

// --- INITIALIZATION ---
load();
calculateHWM();
calculateKiddingDate();
calculateWeight();

// --- MOBILE MENU LOGIC ---
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
