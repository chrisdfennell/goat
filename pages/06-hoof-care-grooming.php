<?php
$PAGE_TITLE = 'Hoof Care & Grooming • Goat Care Guide';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com'];
$PAGE_INLINE_JS = ''; // No page-specific JS needed now
include __DIR__ . '/../includes/header.php';
?>

<!-- Main Content -->
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
    <div class="max-w-4xl mx-auto">
        <section class="mb-12 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Hoof Care &amp; Grooming</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">Routine hoof trimming is a non-negotiable part of goat ownership. Overgrown hooves can lead to lameness, infection, and long-term joint problems.</p>
        </section>
        <div class="space-y-8">
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">How Often to Trim</h2>
                <p class="text-slate-600">Most goats need their hooves trimmed every <strong>4-8 weeks</strong>. The exact frequency depends on:</p>
                <ul class="mt-4 space-y-2 list-disc list-inside text-slate-700">
                    <li><strong>Terrain:</strong> Goats on rocky, abrasive ground will naturally wear down their hooves more than goats on soft pasture.</li>
                    <li><strong>Genetics:</strong> Some goats just grow hooves faster than others.</li>
                    <li><strong>Diet:</strong> A rich diet can sometimes lead to faster hoof growth.</li>
                </ul>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">The Trimming Process: A Step-by-Step Guide</h2>
                <div class="grid md:grid-cols-2 gap-6 items-start">
                    <div>
                        <img alt="Diagram showing the parts of a goat's hoof" class="rounded-lg shadow-sm mb-4" src="<?= e($REL) ?>assets/site/assets/goat-hoof-anatomy.png" />
                        <h3 class="font-semibold text-slate-800">Your Toolkit:</h3>
                        <ul class="space-y-1 list-disc list-inside text-sm text-slate-600">
                            <li><strong>Hoof Trimmers/Shears:</strong> Sharp, clean, and designed for goats or sheep.</li>
                            <li><strong>Hoof Pick or Brush:</strong> To clean out mud and debris.</li>
                            <li><strong>Gloves:</strong> For better grip and hygiene.</li>
                            <li><strong>Blood Stop Powder:</strong> In case you accidentally trim too close to the quick.</li>
                        </ul>
                    </div>
                    <div>
                        <ol class="space-y-4 text-slate-700">
                            <li><strong>1. Secure the Goat:</strong> The easiest way is on a milk stand or grooming stand. You can also have a helper hold the goat securely against a wall.</li>
                            <li><strong>2. Clean the Hoof:</strong> Use a hoof pick or stiff brush to remove all dirt, mud, and manure. You need to see what you are doing.</li>
                            <li><strong>3. Trim the Hoof Wall:</strong> The outer wall of the hoof grows fastest. Carefully trim the overgrown wall down until it is level with the soft sole of the hoof. Make small, conservative cuts.</li>
                            <li><strong>4. Shape the Hoof:</strong> The goal is a flat, level bottom surface for the goat to walk on. Pare away any flaps or pockets on the sole, but be careful not to remove too much.</li>
                            <li><strong>5. Check for Problems:</strong> As you trim, look for signs of hoof rot (a foul smell, black tissue), scald (redness between the toes), or abscesses.</li>
                        </ol>
                        <div class="mt-4 bg-amber-50 border-l-4 border-amber-500 text-amber-800 p-4 rounded-r-lg text-sm">
                            <strong>Tip:</strong> If you see pink when trimming the sole, STOP. That is live tissue (the "quick") and cutting it will cause pain and bleeding.
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Common Hoof Problems</h2>
                <p class="text-slate-600 mb-4">Wet, muddy conditions are the biggest enemy of healthy hooves. Knowing what to look for can help you treat issues before they cause lameness.</p>
                <ul class="space-y-3 list-disc list-inside text-slate-700">
                    <li><strong>Hoof Scald:</strong> This is an infection of the skin between the two toes of the hoof. It will look red, raw, and inflamed, and may have a white, pasty discharge. It is often the first stage of hoof rot.</li>
                    <li><strong>Hoof Rot:</strong> A more advanced infection that involves the hoof itself, not just the skin. It has a distinctly foul, rotten odor and you may see black, necrotic (dead) tissue. Hoof rot can eat away at the sole of the hoof and requires aggressive treatment.</li>
                    <li><strong>Treatment:</strong> For both conditions, treatment involves trimming away any affected tissue to expose it to air, followed by treatment with a zinc sulfate foot bath or a topical spray like Koppertox. Keeping the goat in a clean, dry area is essential for healing.</li>
                </ul>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Grooming &amp; Coat Care</h2>
                <p class="text-slate-600 mb-4">Regular grooming is a great way to bond with your goats and check for any skin issues.</p>
                <ul class="space-y-2 list-disc list-inside text-slate-600">
                    <li>Use a stiff brush or curry comb to remove loose hair, dirt, and flaky skin.</li>
                    <li>Grooming is the perfect time to check for external parasites like lice or mites, especially along the topline and around the base of the tail in winter.</li>
                    <li>For dairy goats, it's hygienic to clip the hair on the udder, belly, and back legs before kidding season.</li>
                </ul>
            </section>
        </div>
        <div class="flex justify-between items-center pt-12">
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors" href="05-health-vaccines-parasites.php">
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Previous
            </a>
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 border border-transparent text-sm font-medium text-white rounded-md shadow-sm hover:bg-emerald-700 transition-colors" href="07-breeding-kidding.php">
                Next
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>