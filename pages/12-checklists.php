<?php
$PAGE_TITLE = 'Printable Checklists • Goat Care Guide';
$EXTRA_HEAD = '';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com', 'https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.23/jspdf.plugin.autotable.min.js'];
$PAGE_INLINE_JS = <<<HTML
<script>
document.addEventListener('DOMContentLoaded', () => {
    const KEY = 'goat-checklists-state';

    function saveState() {
        const state = {};
        document.querySelectorAll('#checklist-container input[type="checkbox"]').forEach((checkbox, index) => {
            state[index] = checkbox.checked;
        });
        localStorage.setItem(KEY, JSON.stringify(state));
    }

    function loadState() {
        try {
            const state = JSON.parse(localStorage.getItem(KEY) || '{}');
            document.querySelectorAll('#checklist-container input[type="checkbox"]').forEach((checkbox, index) => {
                if (state[index] !== undefined) {
                    checkbox.checked = state[index];
                }
            });
        } catch (e) { console.error("Could not load checklist state", e); }
    }

    document.getElementById('checklist-container').addEventListener('change', (e) => {
        if (e.target.matches('input[type="checkbox"]')) {
            saveState();
        }
    });

    loadState();
    
    function generatePDF() {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();
        let finalY = 15;

        doc.setFontSize(18);
        doc.text("Goat Care Checklists", 14, finalY);
        finalY += 10;

        const tableStyles = {
            theme: 'grid',
            headStyles: { fillColor: [226, 232, 240], textColor: [30, 41, 59], lineColor: [100, 116, 139], lineWidth: 0.2 },
            styles: { lineColor: [148, 163, 184], lineWidth: 0.1 },
            alternateRowStyles: { fillColor: [248, 250, 252] },
            columnStyles: { 0: { cellWidth: 15, halign: 'center' } }
        };

        const checklists = document.querySelectorAll('.checklist-section');

        checklists.forEach(section => {
            const title = section.querySelector('h2').innerText;
            const items = section.querySelectorAll('li');
            const bodyData = [];

            items.forEach(item => {
                const checkbox = item.querySelector('input[type="checkbox"]');
                // Use the textContent of the parent label to get the full text
                const label = item.querySelector('label') ? item.querySelector('label').textContent.trim() : item.textContent.trim();
                const status = checkbox && checkbox.checked ? '✓' : '☐'; // Using Unicode characters for checkboxes
                bodyData.push([status, label]);
            });

            if (finalY > 250) { // Check if we need a new page
                doc.addPage();
                finalY = 20;
            }

            doc.setFontSize(14);
            doc.text(title, 14, finalY);
            finalY += 6;

            doc.autoTable({
                ...tableStyles,
                head: [['Status', 'Task']],
                body: bodyData,
                startY: finalY,
            });

            finalY = doc.lastAutoTable.finalY + 15;
        });

        doc.save('goat-checklists.pdf');
    }

    document.getElementById('generate-pdf')?.addEventListener('click', generatePDF);


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
                    class="block whitespace-normal px-4 py-2 text-sm bg-emerald-100 text-emerald-700 font-medium"
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
    class="block px-4 py-2 text-base font-medium bg-emerald-100 text-emerald-700 rounded-md"
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
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Interactive Checklists</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">Use these checklists to stay on top of daily, weekly, and seasonal chores. Your progress is saved in your browser. Generate a PDF for a clean, printable version.</p>
            <div class="mt-6 flex flex-wrap gap-4 justify-center no-print">
                <button
                class="bg-blue-600 text-white font-medium py-2 px-5 rounded-md hover:bg-blue-700 transition-colors"
                id="generate-pdf">Generate &amp; Download PDF</button>
            </div>
        </section>
        <div class="space-y-12" id="checklist-container">
            <section class="checklist-section bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Daily &amp; Weekly Chores</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="font-semibold text-lg text-slate-800 mb-3">Daily Tasks</h3>
                        <ul class="space-y-3">
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Water buckets scrubbed and refilled</label></li>
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Hay feeders filled, old hay removed</label></li>
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Grain fed to milking/pregnant does</label></li>
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Mineral and salt feeders checked/filled</label></li>
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Quick health check on all animals</label></li>
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Gates and latches checked and secured</label></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg text-slate-800 mb-3">Weekly Tasks</h3>
                        <ul class="space-y-3">
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Spot clean bedding, remove wet spots</label></li>
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Check hooves for overgrowth or issues</label></li>
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Perform FAMACHA checks (in parasite season)</label></li>
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Weigh kids to monitor growth rate</label></li>
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Walk the full fence line for damage</label></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="checklist-section bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Goat First-Aid Kit Checklist</h2>
                <p class="text-slate-600 mb-4">Assemble this kit in a waterproof, clearly labeled tote and keep it in a clean, accessible location.</p>
                <div class="grid md:grid-cols-2 gap-x-8 gap-y-4">
                    <ul class="space-y-3">
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Digital Thermometer</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Stethoscope</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Vet Wrap &amp; Gauze Pads</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Saline Solution (for flushing wounds)</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Antiseptic Scrub (Betadine/Chlorhexidine)</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Blood Stop Powder (Styptic)</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Tweezers &amp; Scissors</label></li>
                    </ul>
                    <ul class="space-y-3">
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Electrolyte Powder</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Probiotic Paste</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Activated Charcoal or Toxin Binder</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Syringes (various sizes) &amp; Needles</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Drenching Gun (for oral meds)</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Vet's Phone Number (posted clearly)</label></li>
                    </ul>
                </div>
            </section>
            <section class="checklist-section bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Kidding Kit Checklist</h2>
                <p class="text-slate-600 mb-4">Have this kit ready at least two weeks before your first doe is due.</p>
                <div class="grid md:grid-cols-2 gap-x-8 gap-y-4">
                    <ul class="space-y-3">
                        <h3 class="font-semibold text-lg text-slate-800">For the Birth</h3>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Old Towels (lots of them!)</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Puppy Pads or Plastic Sheeting</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> OB Lube &amp; Disposable Gloves</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Headlamp or Flashlight</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Vet &amp; Mentor Phone Numbers</label></li>
                    </ul>
                    <ul class="space-y-3">
                        <h3 class="font-semibold text-lg text-slate-800">For the Kids</h3>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Bulb Syringe (to clear nose/mouth)</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> 7% Iodine Solution (for navels)</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Frozen Colostrum / Replacer</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Bottles &amp; Pritchard Nipples</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Heat Lamp (use with extreme caution)</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox"/> Small Scale (for birth weights)</label></li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="flex justify-between items-center pt-12 no-print">
            <a
            class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors"
            href="&lt;?= e($REL) ?&gt;assets/site/11-seasonal-care.html">
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
            href="&lt;?= e($REL) ?&gt;assets/site/13-recordkeeping-forms.html">
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
const KEY = 'goat-checklists-state';

function saveState() {
const state = {};
document.querySelectorAll('#checklist-container input[type="checkbox"]').forEach((checkbox, index) => {
state[index] = checkbox.checked;
});
localStorage.setItem(KEY, JSON.stringify(state));
}

function loadState() {
try {
const state = JSON.parse(localStorage.getItem(KEY) || '{}');
document.querySelectorAll('#checklist-container input[type="checkbox"]').forEach((checkbox, index) => {
if (state[index] !== undefined) {
checkbox.checked = state[index];
}
});
} catch (e) { console.error("Could not load checklist state", e); }
}

document.getElementById('checklist-container').addEventListener('change', (e) => {
if (e.target.matches('input[type="checkbox"]')) {
saveState();
}
});

loadState();

function generatePDF() {
const { jsPDF } = window.jspdf;
const doc = new jsPDF();
let finalY = 15;

doc.setFontSize(18);
doc.text("Goat Care Checklists", 14, finalY);
finalY += 10;

const tableStyles = {
theme: 'grid',
headStyles: { fillColor: [226, 232, 240], textColor: [30, 41, 59], lineColor: [100, 116, 139], lineWidth: 0.2 },
styles: { lineColor: [148, 163, 184], lineWidth: 0.1 },
alternateRowStyles: { fillColor: [248, 250, 252] },
columnStyles: { 0: { cellWidth: 15, halign: 'center' } }
};

const checklists = document.querySelectorAll('.checklist-section');

checklists.forEach(section => {
const title = section.querySelector('h2').innerText;
const items = section.querySelectorAll('li');
const bodyData = [];

items.forEach(item => {
const checkbox = item.querySelector('input[type="checkbox"]');
// Use the textContent of the parent label to get the full text
const label = item.querySelector('label') ? item.querySelector('label').textContent.trim() : item.textContent.trim();
const status = checkbox && checkbox.checked ? '✓' : '☐'; // Using Unicode characters for checkboxes
bodyData.push([status, label]);
});

if (finalY > 250) { // Check if we need a new page
doc.addPage();
finalY = 20;
}

doc.setFontSize(14);
doc.text(title, 14, finalY);
finalY += 6;

doc.autoTable({
...tableStyles,
head: [['Status', 'Task']],
body: bodyData,
startY: finalY,
});

finalY = doc.lastAutoTable.finalY + 15;
});

doc.save('goat-checklists.pdf');
}

document.getElementById('generate-pdf')?.addEventListener('click', generatePDF);


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
