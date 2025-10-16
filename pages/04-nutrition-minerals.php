<?php
$PAGE_TITLE = 'Nutrition & Minerals • Goat Care Guide';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com'];
$PAGE_INLINE_JS = ''; // No page-specific JS needed now
include __DIR__ . '/../includes/header.php';
?>

<!-- Main Content -->
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
    <div class="max-w-4xl mx-auto">
        <section class="mb-12 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Goat Nutrition &amp; Minerals</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">Goats are <a href="15-glossary-resources.php#rumen" class="text-emerald-600 hover:underline font-semibold">ruminants</a> with unique dietary needs. The foundation of any goat's diet is high-quality forage, supplemented by the right minerals and clean water.</p>
        </section>
        <div class="space-y-8">
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Forage: The Most Important Feed</h2>
                <p class="text-slate-600 mb-4">Goats are browsers, not grazers. This means they naturally prefer to eat woody plants, leaves, and weeds ("<a href="15-glossary-resources.php#browse" class="text-emerald-600 hover:underline font-semibold">browse</a>") rather than just grass. The bulk of their diet should be long-stem fiber.</p>
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
                <ul class="space-y-3 list-disc list-inside text-slate-700">
                    <li><strong>Check Your Water:</strong> Well water that is high in sulfur (stinky), iron (stains orange), or calcium (leaves white film) can bind with copper, making it unavailable to the goat. If you have these water issues, you may need to provide extra copper supplementation.</li>
                    <li><strong>"Sheep & Goat" Mineral is Dangerous:</strong> Never use minerals labeled for both sheep and goats. Sheep are highly sensitive to copper and can die from levels that are essential for goats. A "sheep and goat" mineral will always have too little copper for a healthy goat herd.</li>
                    <li><strong>Don't Mix In The Minerals:</strong> It can be tempting to mix things like baking soda or other supplements directly into your loose minerals. Don't do it! Minerals are carefully balanced with salt to regulate intake. Adding other tasty things will dilute the minerals and cause your goats to consume less than they need. Provide all supplements in separate, free-choice containers.</li>
                </ul>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Grain &amp; Concentrates</h2>
                <p class="text-slate-600 mb-4">Grain is a supplement, not a staple. It should be used strategically for goats with higher energy needs.</p>
                <ul class="space-y-2 list-disc list-inside text-slate-600">
                    <li><strong>Who needs grain?</strong> Milking <a href="15-glossary-resources.php#doe" class="text-emerald-600 hover:underline font-semibold">does</a>, pregnant does in their last 6 weeks, and growing <a href="15-glossary-resources.php#kid" class="text-emerald-600 hover:underline font-semibold">kids</a>.</li>
                    <li><strong>Who doesn't?</strong> <a href="15-glossary-resources.php#wether" class="text-emerald-600 hover:underline font-semibold">Wethers</a>, <a href="15-glossary-resources.php#buck" class="text-emerald-600 hover:underline font-semibold">bucks</a> (outside of rut), and <a href="15-glossary-resources.php#dry-doe" class="text-emerald-600 hover:underline font-semibold">dry does</a> generally do not need grain and can become overweight and unhealthy with it.</li>
                    <li><strong>Go Slow:</strong> Introduce or increase grain rations slowly over a week to allow the goat's rumen to adjust. Too much, too fast, can cause life-threatening acidosis.</li>
                    <li><strong>Baking Soda:</strong> Always provide free-choice baking soda. Goats will eat it to self-regulate their rumen pH and buffer against acidosis.</li>
                </ul>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Special Considerations for Wethers</h2>
                <p class="text-slate-600 mb-4">Wethers (castrated males) are very easy keepers and have different dietary needs than does. Overfeeding them can cause serious health problems.</p>
                <ul class="space-y-3 list-disc list-inside text-slate-700">
                    <li><strong>No Grain:</strong> Wethers do not need grain. It is high in phosphorus and can lead to the development of urinary calculi (painful, life-threatening urinary stones). Their diet should consist of grass hay and browse.</li>
                    <li><strong>Limit Alfalfa:</strong> Alfalfa is very high in calcium. While excellent for milking does, an excess of calcium in a wether's diet can bind with other essential minerals like zinc, leading to a deficiency. Grass hay is a much better choice.</li>
                </ul>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">The Power of Sunflower Seeds</h2>
                <p class="text-slate-600 mb-4">Black oil sunflower seeds (BOSS) can be a great supplement for many goats, but they are not a complete feed.</p>
                <ul class="space-y-3 list-disc list-inside text-slate-700">
                    <li><strong>Pros:</strong> They are an excellent source of Vitamin E, zinc, and selenium. The high fat content is great for improving body condition and creating a shiny coat.</li>
                    <li><strong>Cons:</strong> They are very high in Omega-6 fatty acids and have a poor calcium-to-phosphorus ratio. They should be fed in moderation (a small handful per goat) as a treat or top-dressing, not as a primary feed source.</li>
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