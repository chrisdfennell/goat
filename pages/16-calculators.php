<?php
$PAGE_TITLE = 'Calculators • Goat Care Guide';
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
            a: $('#adults').value,
            m: $('#milkers').value,
            k: $('#kids').value,
            bd: $('#breeding_date').value,
            gd: $('#gestation_days').value,
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
        } catch (e) {
            console.error("Could not load saved data.", e);
        }
    };

    // --- CALCULATORS ---
    function calculateHWM() {
        const A = +$('#adults').value || 0,
            M = +$('#milkers').value || 0,
            K = +$('#kids').value || 0;
        const totalGoats = A + M + K;
        if (totalGoats === 0) {
            $('#hayNum').textContent = '—';
            $('#waterNum').textContent = '—';
            $('#minNum').textContent = '—';
            $('#out1Notes').textContent = 'Enter your herd numbers to calculate.';
            return;
        }
        const hay = A * 2.5 + M * 4.0 + K * 1.5;
        const water = A * 1.5 + M * 3.5 + K * 1.0;
        const minerals = totalGoats * 0.75; // Approx 0.5-1 oz per head

        $('#hayNum').textContent = hay.toFixed(1);
        $('#waterNum').textContent = water.toFixed(1);
        $('#minNum').textContent = minerals.toFixed(1);
        $('#out1Notes').innerHTML = `Totals for \${A} adults, \${M} milkers, and \${K} kids. Adjust hay based on forage quality and BCS. Water needs double in high heat.`;
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
        $('#due_date_output').textContent = d.toLocaleDateString(undefined, {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        });
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
        $('#weight_output').textContent = `\${Math.max(0, weight).toFixed(0)} lbs`;
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
});
</script>
HTML;
include __DIR__ . '/../includes/header.php';
?>

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
                                <input class="calculator-input mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm" id="adults" min="0" step="1" type="number" value="2" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700" for="milkers">Milking Does</label>
                                <input class="calculator-input mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm" id="milkers" min="0" step="1" type="number" value="1" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700" for="kids">Kids (&lt; 6 months)</label>
                                <input class="calculator-input mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm" id="kids" min="0" step="1" type="number" value="0" />
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
                 <div class="mt-6 text-sm text-slate-600 space-y-2">
                    <p><strong>Note on Hay:</strong> This estimate assumes goats get 3-4% of their body weight in hay daily. Milkers need more energy and thus more hay. Always adjust based on your hay's quality and your goats' <a href="15-glossary-resources.php#bcs" class="text-emerald-600 hover:underline font-semibold">Body Condition Score (BCS)</a>. If they are getting too thin, increase their feed; if they are getting fat, reduce it.</p>
                    <p><strong>Note on Water:</strong> Water is the most critical nutrient. A milking doe's needs can easily double in hot weather. Always provide fresh, clean, cool water.</p>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200" id="kidding-calculator">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Kidding Date Calculator</h2>
                <div class="grid md:grid-cols-2 gap-8 items-start">
                    <div>
                        <form class="space-y-4" id="form-kidding" onsubmit="return false">
                            <div>
                                <label class="block text-sm font-medium text-slate-700" for="breeding_date">Breeding Date</label>
                                <input class="calculator-input mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm" id="breeding_date" type="date" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700" for="gestation_days">Gestation Length (days)</label>
                                <input class="calculator-input mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm" id="gestation_days" max="160" min="140" type="number" value="150" />
                            </div>
                        </form>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-lg" id="out2">
                        <h4 class="font-bold text-slate-800 text-lg mb-3">Estimated Due Date:</h4>
                        <p class="text-xl font-bold text-emerald-700" id="due_date_output">—</p>
                        <p class="text-xs text-slate-500 mt-2">Standard gestation is 145-155 days. Miniatures are often closer to 145.</p>
                    </div>
                </div>
                <div class="mt-6 text-sm text-slate-600 space-y-2">
                    <p><strong>Why the range?</strong> Gestation length can vary. Miniature breeds like Nigerian Dwarfs often have slightly shorter gestations (around 145 days), while larger standard breeds may go closer to 155 days. First-time mothers may also kid a few days earlier or later than seasoned does.</p>
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
                                <input class="calculator-input mt-1 block w-full rounded-md border-slate-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm" id="heart_girth" min="10" step="0.5" type="number" />
                            </div>
                        </form>
                    </div>
                    <div class="bg-slate-50 p-4 rounded-lg" id="out3">
                        <h4 class="font-bold text-slate-800 text-lg mb-3">Estimated Weight:</h4>
                        <p class="text-xl font-bold text-emerald-700" id="weight_output">— lbs</p>
                        <p class="text-xs text-slate-500 mt-2">This formula is an approximation and can vary by breed and condition.</p>
                    </div>
                </div>
                 <div class="mt-6 bg-amber-50 border-l-4 border-amber-500 text-amber-900 p-4 rounded-r-lg text-sm">
                    <strong class="font-semibold">Disclaimer:</strong> Weight tapes and girth formulas are notoriously inaccurate for goats. They can easily be off by 20% or more depending on the goat's build, pregnancy status, or if they have a full <a href="15-glossary-resources.php#rumen" class="text-emerald-600 hover:underline font-semibold">rumen</a>. Use this only as a last resort. For accurate medication dosing, a livestock or bathroom scale is the best and safest tool.
                </div>
            </section>
        </div>
        <div class="flex justify-between items-center pt-12">
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors" href="15-glossary-resources.php">
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Previous
            </a>
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 border border-transparent text-sm font-medium text-white rounded-md shadow-sm hover:bg-emerald-700 transition-colors" href="17-barn-pack.php">
                Next
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>