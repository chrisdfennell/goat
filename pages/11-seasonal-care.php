<?php
$PAGE_TITLE = 'Seasonal Care • Goat Care Guide';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com'];
$PAGE_INLINE_JS = <<<HTML
<script>

</script>
HTML;
include __DIR__ . '/../includes/header.php';
?>

<!-- Main Content -->
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
    <div class="max-w-4xl mx-auto">
        <section class="mb-12 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Seasonal Herd Management</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">A good goat keeper adapts their management to the changing seasons, anticipating needs for feed, shelter, and health care throughout the year.</p>
        </section>
        <div class="space-y-12">
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Winter Checklist</h2>
                <div class="grid md:grid-cols-2 gap-6 items-center">
                    <div>
                        <p class="text-slate-600 mb-4">The primary goals for winter are to keep goats warm, dry, and well-fed, as they burn extra calories to maintain body temperature.</p>
                        <ul class="space-y-3 list-disc list-inside text-slate-700">
                            <li><strong>Shelter:</strong> Ensure the barn is draft-free at goat level but well-ventilated up high. Goats do <strong>not</strong> need a heated or insulated barn; their cashmere undercoats and huddling behavior keep them warm. A tightly sealed barn can trap ammonia, leading to dangerous respiratory damage before you can even smell it.</li>
                            <li><strong>Bedding:</strong> Use a deep litter method with straw, which is much warmer and offers better insulation from the cold ground than wood shavings.</li>
                            <li><strong>Water:</strong> Use heated buckets or a tank de-icer. Goats will not drink enough if their water is icy, which can lead to dehydration and other health issues.</li>
                            <li><strong>Feed:</strong> Increase hay rations, especially for pregnant does. Monitor Body Condition Score (BCS) to ensure they aren't losing weight.</li>
                            <li><strong>Health:</strong> Watch for signs of respiratory illness (coughing, runny nose). Check for external parasites like lice, which thrive in winter coats.</li>
                        </ul>
                    </div>
                    <div>
                        <img alt="Goats resting comfortably in a barn with deep, clean straw bedding during winter." class="rounded-lg shadow-sm" src="<?= e($REL) ?>assets/site/assets/goat-in-winter-bedding.jpg" />
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Spring Checklist</h2>
                <p class="text-slate-600 mb-4">Spring brings new life, lush pasture, and the peak season for parasites.</p>
                <ul class="space-y-3 list-disc list-inside text-slate-700">
                    <li><strong>Kidding Season:</strong> Be prepared with a clean kidding stall and your emergency kit. This is the busiest time of year!</li>
                    <li><strong>Pasture Management:</strong> Introduce goats to lush spring grass gradually over a week to prevent bloat. Start with just an hour of grazing per day.</li>
                    <li><strong>Parasite Patrol:</strong> Worm larvae thrive in the cool, moist conditions of spring. Begin regular FAMACHA checks and plan to run fecal tests to stay ahead of parasite loads.</li>
                    <li><strong>Hoof Trimming:</strong> Soft, wet ground means hooves won't wear down naturally. Schedule a herd-wide trim.</li>
                </ul>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Summer Checklist</h2>
                <div class="grid md:grid-cols-2 gap-6 items-center">
                    <div>
                        <img alt="Goats resting under the shade of a large tree during a sunny day." class="rounded-lg shadow-sm" src="<?= e($REL) ?>assets/site/assets/goats-in-shade.png" />
                    </div>
                    <div>
                        <p class="text-slate-600 mb-4">Heat stress and fly control are the main challenges of summer.</p>
                        <ul class="space-y-3 list-disc list-inside text-slate-700">
                            <li><strong>Shade and Water:</strong> Goats must have access to shade at all times. Provide multiple water sources and scrub buckets often to prevent algae growth.</li>
                            <li><strong>Heat Stress:</strong> Signs include rapid panting, lethargy, and decreased appetite. Offer electrolytes in a separate bucket of water during extreme heat waves.</li>
                            <li><strong>Fly Control:</strong> Use fly traps, fly predators, or vet-approved repellents to keep flies from bothering your herd and spreading disease like pinkeye.</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Fall Checklist</h2>
                <p class="text-slate-600 mb-4">As the days shorten, the focus shifts to breeding season and preparing for the coming winter.</p>
                <ul class="space-y-3 list-disc list-inside text-slate-700">
                    <li><strong>Breeding Season (The Rut):</strong> Does will come into heat and bucks will be in full rut. Plan your breedings and keep meticulous records of dates.</li>
                    <li><strong>Health Checks:</strong> Perform a final herd health check before winter sets in. Check body condition, perform FAMACHA scores, and deworm if necessary.</li>
                    <li><strong>Barn Prep:</strong> Inspect the barn and fencing for any needed repairs. Stock up on hay and bedding for the winter months.</li>
                </ul>
            </section>
        </div>
        <div class="flex justify-between items-center pt-12">
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors" href="10-behavior-training-enrichment.php">
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Previous
            </a>
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 border border-transparent text-sm font-medium text-white rounded-md shadow-sm hover:bg-emerald-700 transition-colors" href="12-checklists.php">
                Next
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>