<?php
$PAGE_TITLE = 'Common Problems & Triage • Goat Care Guide';
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
                    class="block whitespace-normal px-4 py-2 text-sm bg-emerald-100 text-emerald-700 font-medium"
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
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/12-checklists.html">Checklists</a>
    <a
    class="block px-4 py-2 text-base font-medium text-slate-600 hover:bg-slate-100 rounded-md"
    href="&lt;?= e($REL) ?&gt;assets/site/13-recordkeeping-forms.html">Records</a>
    <a
    class="block px-4 py-2 text-base font-medium bg-emerald-100 text-emerald-700 rounded-md"
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
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Common Problems &amp; Triage</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">Knowing how to spot trouble early and when to call a vet is one of the most critical skills for a goat owner. Always err on the side of caution.</p>
        </section>
        <div class="bg-red-100 border-l-4 border-red-500 text-red-800 p-4 rounded-r-lg mb-8">
            <h3 class="font-bold">CALL YOUR VET IMMEDIATELY FOR:</h3>
            <ul class="list-disc list-inside mt-2 text-sm">
                <li>Goat is down and cannot get up.</li>
                <li>Signs of shock (pale gums, cool extremities, rapid/weak pulse).</li>
                <li>Labored, noisy breathing or gasping.</li>
                <li>Active, hard straining during kidding for more than 30 minutes with no progress.</li>
                <li>Severe bloat where the goat is in obvious distress.</li>
                <li>Suspected poisoning or major trauma.</li>
            </ul>
        </div>
        <div class="space-y-8">
            <div class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-2">Scours (Diarrhea)</h2>
                <p class="text-slate-600 mb-4">One of the most common ailments, especially in kids. The cause must be identified quickly.</p>
                <ul class="space-y-2 list-disc list-inside">
                    <li><strong>Possible Causes:</strong> Coccidiosis (in kids 3 weeks to 5 months old), bacterial infection (E. coli, Salmonella), worms, sudden feed changes.</li>
                    <li><strong>Immediate Action:</strong> Isolate the sick goat if possible. Provide electrolytes to prevent dehydration. Get a fecal sample to your vet to test for coccidia and worms. Withhold grain and feed only grass hay.</li>
                    <li><strong>Red Flags:</strong> Bloody stool, high fever, severe lethargy, or dehydration (skin "tents" when pinched).</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-2">Bloat</h2>
                <p class="text-slate-600 mb-4">A life-threatening condition where gas is trapped in the rumen. The goat's left side will look severely swollen and tight like a drum.</p>
                <ul class="space-y-2 list-disc list-inside">
                    <li><strong>Possible Causes:</strong> Overeating lush pasture (frothy bloat) or too much grain (free gas bloat).</li>
                    <li><strong>Immediate Action:</strong> Remove all food immediately. Gently massage the goat's bloated side. Encourage the goat to walk slowly. Administer a bloat remedy or vegetable oil orally to help break up foam.</li>
                    <li><strong>Red Flags:</strong> Goat is down, grunting, or struggling to breathe. This is a dire emergency requiring immediate veterinary intervention to relieve the pressure.</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-2">Anemia (Pale Eyelids)</h2>
                <p class="text-slate-600 mb-4">Pale mucous membranes, checked via the lower eyelid (FAMACHA scoring), are a classic sign of a heavy internal parasite load.</p>
                <ul class="space-y-2 list-disc list-inside">
                    <li><strong>Possible Cause:</strong> Almost always caused by Haemonchus contortus (the barber pole worm), which sucks blood from the stomach lining.</li>
                    <li><strong>Immediate Action:</strong> Perform a FAMACHA score. If the eyelid is pale pink to white, the goat needs immediate deworming with a product effective in your area. Provide nutritional support like iron supplements and high-protein feed.</li>
                    <li><strong>Red Flags:</strong> Bottle jaw (swelling under the chin), weakness, lagging behind the herd.</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-2">Goat Polio (Polioencephalomalacia)</h2>
                <p class="text-slate-600 mb-4">A neurological disease caused by a thiamine (Vitamin B1) deficiency. It can be fatal if not treated quickly.</p>
                <ul class="space-y-2 list-disc list-inside">
                    <li><strong>Symptoms:</strong> Appears blind, "star-gazing," head-pressing into corners, staggering, circling, eventual seizures.</li>
                    <li><strong>Immediate Action:</strong> This is a true emergency. Immediate administration of high-dose thiamine injections from a vet is the only treatment.</li>
                </ul>
            </div>
        </div>
        <div class="flex justify-between items-center pt-12">
            <a
            class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors"
            href="&lt;?= e($REL) ?&gt;assets/site/13-recordkeeping-forms.html">
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
            href="&lt;?= e($REL) ?&gt;assets/site/15-glossary-resources.html">
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
