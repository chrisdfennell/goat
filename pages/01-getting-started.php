<?php
$PAGE_TITLE = 'Getting Started • Goat Care Guide';
include __DIR__ . '/../includes/header.php';
?>

<!-- Main Content -->
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
    <div class="max-w-4xl mx-auto">
        <section class="mb-12 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Getting Started with Goats</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">Good planning is 90% of the work. Before you bring home your first goats, make sure you have the space, budget, and basic knowledge to give them a healthy, happy life.</p>
        </section>
        <div class="space-y-8">
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">First Things First: Legal &amp; Neighborly</h2>
                <ul class="space-y-3 list-disc list-inside text-slate-600">
                    <li><strong>Zoning &amp; Ordinances:</strong> Check your local town or county laws. Are livestock permitted on your property size? Are there restrictions on animal numbers, structures, or setbacks from property lines?</li>
                    <li><strong>Talk to Your Neighbors:</strong> Let your direct neighbors know your plans. Explain your fencing and security measures. A friendly heads-up can prevent future conflicts.</li>
                    <li><strong>Find a Vet:</strong> Locate a large-animal or livestock veterinarian who treats goats *before* you need one. Ask if they do farm calls. This is a critical step many beginners forget.</li>
                </ul>
            </section>
             <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Goat-Proofing Your Property</h2>
                <p class="text-slate-600 mb-4">Goats are naturally curious browsers, which means they taste and chew on almost everything. Securing potential hazards is as important as building a good fence.</p>
                <ul class="space-y-3 list-disc list-inside text-slate-600">
                    <li><strong>Toxic Plants:</strong> Identify and remove poisonous plants from all areas the goats can access. Common hazards include ornamental shrubs like azaleas, rhododendrons, and yew. Even wilted leaves from cherry trees can be deadly.</li>
                    <li><strong>Electrical Cords:</strong> Goats will chew on electrical cords. Ensure all wiring for lights, heated water buckets, or tools is completely out of reach or run through chew-proof conduit.</li>
                    <li><strong>Foreign Objects:</strong> Remove any plastic bags, string, or small objects from pastures. If ingested, these can cause a fatal blockage in their digestive system.</li>
                </ul>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Choosing Your Starter Herd</h2>
                <div class="grid md:grid-cols-2 gap-6 items-center">
                    <div>
                        <p class="text-slate-600 mb-4">The golden rule is to <strong>never get a single goat</strong>. They are intensely social herd animals and will be stressed and destructive if kept alone.</p>
                        <ul class="space-y-2 list-disc list-inside text-slate-700">
                            <li><strong>Ideal Start:</strong> Two or three <a href="/glossary-resources#doe" class="text-emerald-600 hover:underline font-semibold">does</a> (females) or two <a href="/glossary-resources#wether" class="text-emerald-600 hover:underline font-semibold">wethers</a> (castrated males) make an excellent starter herd.</li>
                            <li><strong>Avoid Bucks:</strong> Do not get an intact <a href="/glossary-resources#buck" class="text-emerald-600 hover:underline font-semibold">buck</a> (male) at first. They have a strong odor, require very robust fencing, and can be aggressive. Use a "stud service" from a local breeder for your does.</li>
                        </ul>
                    </div>
                    <div>
                        <img alt="Two healthy goats together in a pasture" class="rounded-lg shadow-sm" src="/assets/site/assets/two-goats.jpg" />
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Questions to Ask the Breeder</h2>
                <p class="text-slate-600 mb-4">A reputable breeder will be happy to answer your questions. Don't be shy!</p>
                <ul class="space-y-2 list-disc list-inside text-slate-600">
                    <li><strong>Disease Testing:</strong> Do you test your herd for <a href="/glossary-resources#cae" class="text-emerald-600 hover:underline font-semibold">CAE</a>, <a href="/glossary-resources#cl" class="text-emerald-600 hover:underline font-semibold">CL</a>, and <a href="/glossary-resources#johnes" class="text-emerald-600 hover:underline font-semibold">Johne's disease</a>? Can I see the most recent results? (Buying from a tested herd is the single best thing you can do for your herd's long-term health).</li>
                    <li><strong>Vaccination &amp; Deworming History:</strong> What vaccines have they had and when? What is your parasite management program?</li>
                    <li><strong>Feed:</strong> What brand of feed and type of hay are they currently eating? (Get a small bag to help transition them slowly).</li>
                    <li><strong>Temperament:</strong> Ask to see the parents (<a href="/glossary-resources#dam" class="text-emerald-600 hover:underline font-semibold">dam</a> and <a href="/glossary-resources#sire" class="text-emerald-600 hover:underline font-semibold">sire</a>) if possible. A calm dam often raises calm kids.</li>
                     <li><strong>Bottle-Babies:</strong> If you're buying a bottle-fed kid, ask the seller to give it a bottle in front of you. A healthy kid should latch onto the nipple and suck vigorously without help.</li>
                </ul>
            </section>
        </div>
        <div class="flex justify-between items-center pt-12">
            <?php
            // Automated Previous/Next buttons
            $navLinks = getPrevNext($orderedPages, $currentSlug);
            echo $navLinks['prev'];
            echo $navLinks['next'];
            ?>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>