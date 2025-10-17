<?php
$PAGE_TITLE = 'Housing & Fencing • Goat Care Guide';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com'];
$PAGE_INLINE_JS = ''; // No page-specific JS needed now
include __DIR__ . '/../includes/header.php';
?>

<!-- Main Content -->
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
    <div class="max-w-4xl mx-auto">
        <section class="mb-12 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Shelter &amp; Fencing</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">A secure fence and a dry, safe shelter are the two most important investments for your herd's well-being and your peace of mind.</p>
        </section>
        <div class="space-y-8">
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">The Ideal Goat Shelter</h2>
                <p class="text-slate-600 mb-4">Goats hate being wet and need a place to escape wind, rain, snow, and summer sun. A simple three-sided structure is often sufficient.</p>
                <div class="grid md:grid-cols-2 gap-6 items-center">
                    <div>
                        <ul class="space-y-3 list-disc list-inside text-slate-700">
                            <li><strong>Keep it Dry:</strong> The shelter must have a waterproof roof and good drainage to prevent mud. Position the opening away from prevailing winds.</li>
                            <li><strong>Good Ventilation:</strong> Ample airflow is crucial to prevent ammonia buildup and respiratory issues, but it must be draft-free at goat level. Vents near the roofline are ideal.</li>
                            <li><strong>Deep Bedding:</strong> In winter, use the "deep litter" method with straw or pine shavings. Add fresh bedding on top and clean out the whole shelter in the spring. This creates a natural heat-composting pack.</li>
                            <li><strong>Space:</strong> Plan for at least 15-20 square feet of indoor space per full-sized goat.</li>
                        </ul>
                    </div>
                    <div>
                        <img alt="The interior of a clean goat shelter with deep straw bedding" class="rounded-lg shadow-sm" src="/assets/site/assets/goat-shelter-interior.jpg" />
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Goat-Proof Fencing</h2>
                <p class="text-slate-600 mb-4">The saying is true: if it can't hold water, it can't hold a goat. Goats are intelligent and persistent escape artists.</p>
                <div class="grid md:grid-cols-2 gap-6 items-center">
                    <div>
                        <img alt="A close-up of strong woven wire fencing suitable for goats" class="rounded-lg shadow-sm" src="/assets/site/assets/secure-goat-fence.jpg" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-slate-800">Key Features:</h3>
                        <ul class="space-y-2 mt-2 list-disc list-inside text-slate-700">
                            <li><strong>Height:</strong> 48 inches is the absolute minimum. 60 inches (5 feet) is better, especially for more athletic breeds like Nigerians.</li>
                            <li><strong>Material:</strong> 2"x4" or 4"x4" woven wire "no-climb" fencing is the gold standard. It prevents goats from getting their heads stuck and is strong enough to deter most predators.</li>
                            <li><strong>Posts:</strong> Use solid wood or T-posts spaced no more than 8-10 feet apart. Corner and gate posts must be securely braced.</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Securing Your Gates</h2>
                <p class="text-slate-600 mb-4">Gates are the weakest point in your fencing. Goats will learn to operate simple latches.</p>
                <ul class="space-y-3 list-disc list-inside text-slate-600">
                    <li>Use latches that require lifting and sliding to open.</li>
                    <li>For extra security, add a carabiner clip or a chain with a snap hook to every gate latch.</li>
                    <li>Ensure gates swing freely and don't sag, which can create gaps for goats to squeeze through.</li>
                </ul>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Rotational Grazing & Temporary Fencing</h2>
                <p class="text-slate-600 mb-4">For those with a small herd (four or fewer goats), a permanent perimeter fence may be more than you need. A movable, temporary enclosure using livestock panels is a fantastic and flexible option.</p>
                <ul class="space-y-3 list-disc list-inside text-slate-700">
                    <li><strong>The Setup:</strong> Simply connect four 16-foot livestock panels to form a square pen. This gives your goats a generous area to browse while keeping them secure.</li>
                    <li><strong>Benefits of Rotation:</strong> Moving the panels every few days to a fresh patch of ground is a powerful strategy for parasite control. Goats are constantly moving away from their own manure, which dramatically reduces their exposure to worm larvae.</li>
                    <li><strong>Pasture Health:</strong> This method also improves pasture health by preventing overgrazing and allowing areas to recover and regrow.</li>
                </ul>
                <div class="mt-4 bg-blue-50 border-l-4 border-blue-500 text-blue-900 p-4 rounded-r-lg text-sm">
                    <strong>Tip:</strong> Even with temporary fencing, goats must always have access to their main three-sided shelter for protection from the elements.
                </div>
            </section>
        </div>
        <div class="flex justify-between items-center pt-12">
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors" href="/getting-started">
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Previous
            </a>
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 border border-transparent text-sm font-medium text-white rounded-md shadow-sm hover:bg-emerald-700 transition-colors" href="/breeds">
                Next
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>