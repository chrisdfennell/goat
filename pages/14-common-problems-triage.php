<?php
$PAGE_TITLE = 'Common Problems & Triage • Goat Care Guide';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com'];
$PAGE_INLINE_JS = '';
include __DIR__ . '/../includes/header.php';
?>

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
                <li>Active, hard straining during <a href="15-glossary-resources.php#kidding" class="text-emerald-600 hover:underline font-semibold">kidding</a> for more than 30 minutes with no progress.</li>
                <li>Severe bloat where the goat is in obvious distress.</li>
                <li>Suspected poisoning or major trauma.</li>
                <li>Any straining to urinate in a male goat.</li>
            </ul>
        </div>
        <div class="space-y-8">
            <div class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-2">Scours (Diarrhea)</h2>
                <p class="text-slate-600 mb-4">One of the most common ailments, especially in kids. The cause must be identified quickly.</p>
                <ul class="space-y-2 list-disc list-inside">
                    <li><strong>Possible Causes:</strong> <a href="15-glossary-resources.php#coccidiosis" class="text-emerald-600 hover:underline font-semibold">Coccidiosis</a> (in kids 3 weeks to 5 months old), bacterial infection (E. coli, Salmonella), worms, sudden feed changes.</li>
                    <li><strong>Immediate Action:</strong> Isolate the sick goat if possible. Provide electrolytes to prevent dehydration. Get a fecal sample to your vet to test for coccidia and worms. Withhold grain and feed only grass hay.</li>
                    <li><strong>Red Flags:</strong> Bloody stool, high fever, severe lethargy, or dehydration (skin "tents" when pinched).</li>
                </ul>
            </div>
             <div class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-2">Constipation</h2>
                <p class="text-slate-600 mb-4">While less common than scours, constipation can be a sign of a serious issue, especially in young kids.</p>
                 <ul class="space-y-2 list-disc list-inside">
                    <li><strong>Symptoms:</strong> The goat will be hunched, cry out, and strain with nothing coming out. Their tail may be held out stiffly.</li>
                    <li><strong>Possible Causes:</strong> Dehydration, impacted feed, or not passing the first poop (meconium) in a newborn kid.</li>
                    <li><strong>Immediate Action:</strong> For a newborn, a warm, soapy water enema is often needed. For an older goat, ensure access to fresh water and electrolytes, and consider giving an oral drench of mineral oil to help lubricate the digestive tract.</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-2">Bloat</h2>
                <p class="text-slate-600 mb-4">A life-threatening condition where gas is trapped in the <a href="15-glossary-resources.php#rumen" class="text-emerald-600 hover:underline font-semibold">rumen</a>. The goat's left side will look severely swollen and tight like a drum.</p>
                <ul class="space-y-2 list-disc list-inside">
                    <li><strong>Possible Causes:</strong> Overeating lush pasture (frothy bloat) or too much grain (free gas bloat).</li>
                    <li><strong>Immediate Action:</strong> Remove all food immediately. Gently massage the goat's bloated side. Encourage the goat to walk slowly. Administer a bloat remedy or vegetable oil orally to help break up foam.</li>
                    <li><strong>Red Flags:</strong> Goat is down, grunting, or struggling to breathe. This is a dire emergency requiring immediate veterinary intervention to relieve the pressure.</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-2">Urinary Calculi (UC)</h2>
                <p class="text-slate-600 mb-4">A blockage of the urinary tract by mineral stones. It is almost exclusively a problem in male goats (<a href="15-glossary-resources.php#buck" class="text-emerald-600 hover:underline font-semibold">bucks</a> and especially <a href="15-glossary-resources.php#wether" class="text-emerald-600 hover:underline font-semibold">wethers</a>) and is a life-or-death emergency.</p>
                 <ul class="space-y-2 list-disc list-inside">
                    <li><strong>Cause:</strong> Primarily caused by an improper diet with too much phosphorus and not enough calcium, often from feeding too much grain. The calcium/phosphorus ratio in the total diet should be 2:1.</li>
                    <li><strong>Symptoms:</strong> Straining to urinate with only drips coming out, tail twitching constantly, crying out in pain, a hunched-up stance.</li>
                    <li><strong>Immediate Action:</strong> **THIS IS A VETERINARY EMERGENCY.** Do not wait. A blocked goat can die from a ruptured bladder within 24-48 hours.</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-2">Anemia (Pale Eyelids)</h2>
                <p class="text-slate-600 mb-4">Pale mucous membranes, checked via the lower eyelid (<a href="15-glossary-resources.php#famacha" class="text-emerald-600 hover:underline font-semibold">FAMACHA</a> scoring), are a classic sign of a heavy internal parasite load.</p>
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
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors" href="13-recordkeeping-forms.php">
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Previous
            </a>
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 border border-transparent text-sm font-medium text-white rounded-md shadow-sm hover:bg-emerald-700 transition-colors" href="15-glossary-resources.php">
                Next
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>