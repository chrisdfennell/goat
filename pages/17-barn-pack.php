<?php
$PAGE_TITLE = 'Barn Pack • Goat Care Guide';
$EXTRA_HEAD = '';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com'];
$PAGE_INLINE_JS = <<<HTML
<script>
document.addEventListener('DOMContentLoaded', () => {
    const KEY = 'barnpack.v1';

    function save() {
        const data = {};
        document.querySelectorAll('[contenteditable][data-key]').forEach(el => {
            data[el.dataset.key] = el.innerHTML;
        });
        localStorage.setItem(KEY, JSON.stringify(data));
    }

    function load() {
        try {
            const data = JSON.parse(localStorage.getItem(KEY) || '{}');
            document.querySelectorAll('[contenteditable][data-key]').forEach(el => {
                if (data[el.dataset.key] !== undefined) el.innerHTML = data[el.dataset.key];
            });
        } catch (e) { console.error("Could not load barn pack data", e); }
    }

    function clearAll() {
        if (confirm('Are you sure you want to clear all saved data on this page? This cannot be undone.')) {
            localStorage.removeItem(KEY);
            location.reload();
        }
    }

    function addRow(e) {
        const tableBodyId = e.target.dataset.tableBodyId;
        const tableBody = document.getElementById(tableBodyId);
        if (tableBody) {
            const firstRow = tableBody.querySelector('tr');
            if (firstRow) {
                const newRow = firstRow.cloneNode(true);
                newRow.querySelectorAll('td').forEach(td => td.innerHTML = '');
                tableBody.appendChild(newRow);
            }
        }
    }

    document.querySelector('main').addEventListener('input', e => {
        if (e.target.matches('[contenteditable]')) {
            save(); // Auto-save on any edit
        }
    });

    document.getElementById('bp-print')?.addEventListener('click', () => window.print());
    document.getElementById('bp-clear')?.addEventListener('click', clearAll);
    document.querySelectorAll('.add-row-btn').forEach(btn => btn.addEventListener('click', addRow));

    load();

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
                    class="block whitespace-normal px-4 py-2 text-sm text-slate-700 hover:bg-slate-100"
                    href="&lt;?= e($REL) ?&gt;assets/site/16-calculators.html">Calculators</a>
                    <a
                    class="block whitespace-normal px-4 py-2 text-sm bg-emerald-100 text-emerald-700 font-medium"
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
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/16-calculators.html">Calculators</a>
    <a
    class="block px-4 py-2 text-base font-medium bg-emerald-100 text-emerald-700 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/17-barn-pack.html">Barn Pack</a>
</nav>
</div>
</div>
</header>
<!-- Main Content -->
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
    <div class="max-w-4xl mx-auto">
        <section class="mb-12 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Printable Barn Pack</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">This is a collection of essential, printable posters for your barn. Fill in your details, and they will be saved automatically. When ready, use the print button to create posters for your barn.</p>
            <div class="mt-6 flex flex-wrap gap-4 justify-center no-print">
                <button
                class="bg-emerald-600 text-white font-medium py-2 px-5 rounded-md hover:bg-emerald-700 transition-colors"
                id="bp-print">Print Pack</button>
                <button
                class="bg-red-600 text-white font-medium py-2 px-5 rounded-md hover:bg-red-700 transition-colors"
                id="bp-clear">Reset All Data</button>
            </div>
            <p class="text-xs text-slate-500 mt-4 no-print">Data is saved automatically to this device's browser. Use 'Reset' to clear it.</p>
        </section>
        <div class="space-y-8">
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200 printable-card">
                <h2 class="text-2xl font-bold text-center text-slate-900 mb-4 uppercase">Emergency Contacts</h2>
                <div
                class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm"
                data-key="emergency-contacts">
                <div class="bg-slate-50 p-3 rounded-lg"><strong class="block text-slate-800">Primary Vet:</strong><div class="mt-1 min-h-[4em]" contenteditable="true" data-key="vet-primary"></div></div>
                <div class="bg-slate-50 p-3 rounded-lg"><strong class="block text-slate-800">Emergency Vet Clinic:</strong><div class="mt-1 min-h-[4em]" contenteditable="true" data-key="vet-emergency"></div></div>
                <div class="bg-slate-50 p-3 rounded-lg"><strong class="block text-slate-800">Backup Help / Neighbor:</strong><div class="mt-1 min-h-[3em]" contenteditable="true" data-key="backup-help"></div></div>
                <div class="bg-slate-50 p-3 rounded-lg"><strong class="block text-slate-800">Poison Control:</strong><div class="mt-1 min-h-[3em]" contenteditable="true" data-key="poison-control">ASPCA: (888) 426-4435</div></div>
            </div>
        </section>
        <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200 printable-card">
            <h2 class="text-2xl font-bold text-center text-slate-900 mb-4 uppercase">Normal Goat Vitals</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-slate-100">
                        <tr>
                            <th class="p-3 text-sm font-semibold text-slate-600">Vital Sign</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Adult Range</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Kid Range</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">
                        <tr><td class="p-3 font-medium">Temperature</td><td class="p-3">101.5 - 103.5 °F (38.6 - 39.7 °C)</td><td class="p-3">102.0 - 104.0 °F (38.9 - 40 °C)</td></tr>
                        <tr><td class="p-3 font-medium">Heart Rate</td><td class="p-3">70 - 90 bpm</td><td class="p-3">100 - 140 bpm</td></tr>
                        <tr><td class="p-3 font-medium">Respiration</td><td class="p-3">12 - 30 breaths/min</td><td class="p-3">20 - 40 breaths/min</td></tr>
                        <tr><td class="p-3 font-medium">Rumen Contractions</td><td class="p-3">1 - 3 per minute</td><td class="p-3">N/A</td></tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200 printable-card">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold text-center text-slate-900 uppercase">Feed Chart</h2>
                <button
                class="add-row-btn no-print text-sm bg-slate-100 hover:bg-slate-200 text-slate-600 font-semibold py-1 px-3 rounded-md"
                data-table-body-id="feed-chart-body">Add Row</button>
            </div>
            <p class="text-center text-sm text-slate-500 mb-4">Post this in the feed room for clear instructions for farm sitters.</p>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-slate-100">
                        <tr>
                            <th class="p-3 text-sm font-semibold text-slate-600">Goat / Group Name</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">AM Feed</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">PM Feed</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Notes</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200" contenteditable="true" data-key="feed-chart" id="feed-chart-body">
                        <tr><td class="p-3 h-10"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td></tr>
                        <tr><td class="p-3 h-10"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td></tr>
                        <tr><td class="p-3 h-10"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td></tr>
                        <tr><td class="p-3 h-10"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td></tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200 printable-card">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold text-center text-slate-900 uppercase">Medication &amp; Withdrawal</h2>
                <button
                class="add-row-btn no-print text-sm bg-slate-100 hover:bg-slate-200 text-slate-600 font-semibold py-1 px-3 rounded-md"
                data-table-body-id="withdrawal-chart-body">Add Row</button>
            </div>
            <p class="text-center text-sm text-slate-500 mb-4">Record any medications given and their withdrawal times for meat and milk.</p>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-slate-100">
                        <tr>
                            <th class="p-3 text-sm font-semibold text-slate-600">Date Given</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Goat ID</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Medication</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Milk Safe Date</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Meat Safe Date</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200" contenteditable="true" data-key="withdrawal-chart" id="withdrawal-chart-body">
                        <tr><td class="p-3 h-10"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td></tr>
                        <tr><td class="p-3 h-10"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td></tr>
                        <tr><td class="p-3 h-10"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td></tr>
                        <tr><td class="p-3 h-10"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td></tr>
                        <tr><td class="p-3 h-10"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td></tr>
                        <tr><td class="p-3 h-10"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td></tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <div class="flex justify-between items-center pt-12 no-print">
        <a
        class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors"
        href="&lt;?= e($REL) ?&gt;assets/site/16-calculators.html">
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
        href="&lt;?= e($REL) ?&gt;assets/site/index.html">
        Back to Home
        <svg
        class="rotate-180"
        fill="none"
        height="16"
        stroke="currentColor"
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        viewbox="0 0 24 24"
        width="16"
        xmlns="http://www.w3.org/2000/svg"><path d="m15 18-6-6 6-6"></path></svg>
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
const KEY = 'barnpack.v1';

function save() {
const data = {};
document.querySelectorAll('[contenteditable][data-key]').forEach(el => {
data[el.dataset.key] = el.innerHTML;
});
localStorage.setItem(KEY, JSON.stringify(data));
}

function load() {
try {
const data = JSON.parse(localStorage.getItem(KEY) || '{}');
document.querySelectorAll('[contenteditable][data-key]').forEach(el => {
if (data[el.dataset.key] !== undefined) el.innerHTML = data[el.dataset.key];
});
} catch (e) { console.error("Could not load barn pack data", e); }
}

function clearAll() {
if (confirm('Are you sure you want to clear all saved data on this page? This cannot be undone.')) {
localStorage.removeItem(KEY);
location.reload();
}
}

function addRow(e) {
const tableBodyId = e.target.dataset.tableBodyId;
const tableBody = document.getElementById(tableBodyId);
if (tableBody) {
const firstRow = tableBody.querySelector('tr');
if (firstRow) {
const newRow = firstRow.cloneNode(true);
newRow.querySelectorAll('td').forEach(td => td.innerHTML = '');
tableBody.appendChild(newRow);
}
}
}

document.querySelector('main').addEventListener('input', e => {
if (e.target.matches('[contenteditable]')) {
save(); // Auto-save on any edit
}
});

document.getElementById('bp-print')?.addEventListener('click', () => window.print());
document.getElementById('bp-clear')?.addEventListener('click', clearAll);
document.querySelectorAll('.add-row-btn').forEach(btn => btn.addEventListener('click', addRow));

load();

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
