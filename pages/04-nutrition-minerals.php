<?php
$PAGE_TITLE = 'Nutrition & Minerals • Goat Care Guide';
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
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Goat Nutrition &amp; Minerals</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">Goats are ruminants with unique dietary needs. The foundation of any goat's diet is high-quality forage, supplemented by the right minerals and clean water.</p>
        </section>
        <div class="space-y-8">
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Forage: The Most Important Feed</h2>
                <p class="text-slate-600 mb-4">Goats are browsers, not grazers. This means they naturally prefer to eat woody plants, leaves, and weeds ("browse") rather than just grass. The bulk of their diet should be long-stem fiber.</p>
                <div class="grid md:grid-cols-2 gap-6 items-center">
                    <div>
                        <h3 class="font-semibold text-slate-800">Types of Hay:</h3>
                        <ul class="space-y-2 mt-2 list-disc list-inside text-slate-700">
                            <li><strong>Grass Hay:</strong> (Orchard, Timothy, Brome) Good all-purpose hay for wethers, bucks, and dry does.</li>
                            <li><strong>Legume Hay:</strong> (Alfalfa, Clover) Rich in protein and calcium. Excellent for milking does and growing kids, but can be too rich for others.</li>
                            <li><strong>Mixed Hay:</strong> A mix of grass and legume is often a perfect balance.</li>
                        </ul>
                        <p class="mt-4 text-sm text-slate-600">Always inspect hay for mold, dust, and moisture before feeding. Bad hay can make a goat very sick.</p>
                    </div>
                    <div>
                        <img alt="Side-by-side comparison of green alfalfa hay and lighter grass hay" class="rounded-lg shadow-sm" src="<?= e($REL) ?>assets/site/assets/types-of-hay.jpg" />
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">The Role of Minerals</h2>
                <p class="text-slate-600 mb-4">Minerals are non-negotiable for goat health. Deficiencies can lead to a host of problems including poor coat condition, reproductive issues, and weak kids.</p>
                <ul class="space-y-3 list-disc list-inside text-slate-600">
                    <li><strong>Loose Minerals Only:</strong> Goats have soft tongues and cannot get enough minerals from hard blocks. Always provide a high-quality loose mineral formulated specifically for goats.</li>
                    <li><strong>Key Minerals:</strong> Copper and Selenium are two of the most critical. Signs of copper deficiency include a rough, faded coat and a "fishtail" (balding at the tail tip). Selenium deficiency can cause weak kids and birthing complications.</li>
                    <li><strong>Free Choice:</strong> Provide loose minerals in a covered feeder protected from rain, and allow goats to consume them as needed. Also offer a separate feeder for plain, loose salt.</li>
                </ul>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Advanced Mineral Considerations</h2>
                <p class="text-slate-600 mb-4">Beyond the basics, several factors can affect mineral absorption and require special attention.</p>
                <ul class="space-y-3 list-disc list-inside text-slate-700">
                    <li><strong>Well Water Issues:</strong> If your well water is high in sulfur (stinky smell) or iron (orange stains), it can bind with copper in the goat's system, making it unavailable and leading to deficiency even with a good mineral program. Consider additional copper supplementation in these cases.</li>
                    <li><strong>Do Not Mix Minerals:</strong> Never mix anything directly into your loose minerals, such as baking soda, kelp, or diatomaceous earth. Minerals are carefully balanced with salt to regulate intake. Adding other substances will alter that balance and can cause your goats to eat too little of the essential minerals they need. Provide any other supplements in a separate, free-choice container.</li>
                    <li><strong>"Sheep & Goat" Minerals are Dangerous:</strong> Never use minerals labeled for "Sheep and Goats." Sheep are highly sensitive to copper and can be poisoned by levels that goats require to be healthy. These mixes contain dangerously low levels of copper for a goat's needs and will lead to severe deficiency.</li>
                </ul>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Grain &amp; Concentrates</h2>
                <p class="text-slate-600 mb-4">Grain is a supplement, not a staple. It should be used strategically for goats with higher energy needs.</p>
                <ul class="space-y-2 list-disc list-inside text-slate-600">
                    <li><strong>Who needs grain?</strong> Milking does, pregnant does in their last 6 weeks, and growing kids.</li>
                    <li><strong>Who doesn't?</strong> Wethers, bucks (outside of rut), and dry does generally do not need grain and can become overweight and unhealthy with it.</li>
                    <li><strong>Go Slow:</strong> Introduce or increase grain rations slowly over a week to allow the goat's rumen to adjust. Too much, too fast, can cause life-threatening acidosis.</li>
                    <li><strong>Baking Soda:</strong> Always provide free-choice baking soda. Goats will eat it to self-regulate their rumen pH and buffer against acidosis.</li>
                </ul>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Special Considerations for Wethers</h2>
                <p class="text-slate-600 mb-4">Wethers (castrated males) have unique dietary needs and are much more sensitive to mineral imbalances than does.</p>
                <ul class="space-y-3 list-disc list-inside text-slate-700">
                    <li><strong>Avoid Grain:</strong> Wethers do not need grain. Their diet should consist of pasture/browse and grass hay. Grain is high in phosphorus, which can lead to the formation of urinary calculi (stones) that cause a life-threatening blockage.</li>
                    <li><strong>Limit Alfalfa:</strong> While alfalfa is great for milking does, it's very high in calcium. An improper calcium-to-phosphorus ratio is a primary cause of urinary stones. Too much calcium can also interfere with the absorption of zinc. Grass hay is a much safer primary forage for wethers.</li>
                </ul>
            </section>
            <section class="bg-red-50 border-l-4 border-red-500 text-red-800 p-6 rounded-r-lg">
                <strong class="font-semibold">Common Poisonous Plants:</strong>
                <p class="mt-1 text-sm">Ensure your goats cannot access ornamental shrubs. Common toxins include: Azalea, Rhododendron, Yew, Oleander, and wilted Cherry or Plum leaves.</p>
            </section>
        </div>
        <div class="flex justify-between items-center pt-12">
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors" href="03-breeds.php">
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Previous
            </a>
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 border border-transparent text-sm font-medium text-white rounded-md shadow-sm hover:bg-emerald-700 transition-colors" href="05-health-vaccines-parasites.php">
                Next
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>