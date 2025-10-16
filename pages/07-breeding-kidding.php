<?php
$PAGE_TITLE = 'Breeding & Kidding • Goat Care Guide';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com'];
$PAGE_INLINE_JS = '';
include __DIR__ . '/../includes/header.php';
?>

<!-- Main Content -->
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
    <div class="max-w-4xl mx-auto">
        <section class="mb-12 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Breeding &amp; <a href="15-glossary-resources.php#kidding" class="text-emerald-600 hover:underline font-semibold">Kidding</a></h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">Kidding season is one of the most exciting and nerve-wracking times on a goat farm. Good preparation is key to a successful outcome for both doe and kids.</p>
        </section>
        <div class="space-y-12">
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">The Breeding Cycle</h2>
                <p class="text-slate-600 mb-4">Most dairy goat breeds are seasonal breeders, typically coming into <a href="15-glossary-resources.php#heat" class="text-emerald-600 hover:underline font-semibold">heat</a> in the fall as the days get shorter. Nigerian Dwarfs and some meat breeds can cycle year-round.</p>
                <ul class="space-y-3 list-disc list-inside text-slate-700">
                    <li><strong>Heat (Estrus):</strong> A <a href="15-glossary-resources.php#doe" class="text-emerald-600 hover:underline font-semibold">doe's</a> heat cycle is about 18-24 days long. The period when she is receptive to a <a href="15-glossary-resources.php#buck" class="text-emerald-600 hover:underline font-semibold">buck</a>, called "standing heat," lasts for 12-48 hours. This is the only time she can get pregnant.</li>
                    <li><strong>Signs of Heat:</strong> Look for vigorous tail flagging (wagging), a swollen and pink vulva, mucous discharge, increased vocalization, fighting with other does, and standing to be mounted by a buck or another doe.</li>
                    <li><strong>Gestation:</strong> The average gestation for a goat is 150 days (about 5 months). Keep careful records of breeding dates to calculate an accurate due date. Use an online goat gestation calculator for a precise estimate.</li>
                </ul>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Preparing for Kidding</h2>
                <div class="grid md:grid-cols-2 gap-6 items-start">
                    <div>
                        <p class="text-slate-600 mb-4">As the due date approaches (about 2 weeks out), prepare a clean, dry, and draft-free "kidding stall."</p>
                        <ul class="space-y-3 text-slate-700 list-disc list-inside">
                            <li><strong>Clean Space:</strong> The stall should be at least 5x5 feet, stripped of old bedding, and re-bedded with a deep layer of fresh, clean straw.</li>
                            <li><strong>Doe Care:</strong> Administer a CDT booster and a Selenium/Vitamin E shot (like Bo-Se, if recommended by your vet for your area) about 4-6 weeks before the due date. Trim the doe's hooves and clip her tail, udder, and belly area for hygiene.</li>
                            <li><strong>Assemble Your Kit:</strong> Gather all your kidding supplies in a clean, portable box so you're ready to go at a moment's notice.</li>
                        </ul>
                    </div>
                    <div>
                        <img alt="A clean and prepared kidding stall with deep straw bedding." class="rounded-lg shadow-sm" src="<?= e($REL) ?>assets/site/assets/goat-kidding-stall-clean.jpg" />
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">The Miracle of Birth</h2>
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="prose prose-slate max-w-none">
                        <h4>Stages of Labor</h4>
                        <ol class="space-y-2">
                           <li><strong>Early Labor:</strong> Can last 2-12 hours. The doe will separate from the herd, seem distant or "internal," and may get up and down frequently. She may talk to her belly. The most reliable sign is that her tail ligaments (on either side of her tail) will become very soft and eventually feel like they have disappeared completely.</li>
                            <li><strong>Active Labor:</strong> Forceful pushing begins. You'll see the amniotic sac "bubble." A normal "diving" presentation is two front feet and a nose.</li>
                            <li><strong>Afterbirth:</strong> The doe will pass the placenta within a few hours. Make sure it's all there; a retained placenta can cause infection.</li>
                        </ol>
                        <h4>Post-Birth Care</h4>
                        <ul class="space-y-2 list-disc list-inside">
                            <li>Clear the kid's nose and mouth of fluid immediately.</li>
                            <li>Dip the umbilical cord in 7% iodine to prevent infection.</li>
                            <li>Ensure the kid is warm, dry, and nurses colostrum within the first hour.</li>
                        </ul>
                    </div>
                    <div class="flex justify-center items-center">
                        <img alt="A mother goat with her newborn kids." class="w-full max-w-sm h-auto" src="<?= e($REL) ?>assets/site/assets/goat-kids.svg" />
                    </div>
                </div>
                <div class="mt-6 bg-red-50 border-l-4 border-red-500 text-red-800 p-4 rounded-r-lg text-sm">
                    <strong>When to Call the Vet:</strong> Call your vet or an experienced mentor if the doe has been pushing hard for 30 minutes with no progress, you see a tail or head back, there's bright red bleeding, or the doe is clearly in distress.
                </div>
            </section>
        </div>
        <div class="flex justify-between items-center pt-12">
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors" href="06-hoof-care-grooming.php">
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Previous
            </a>
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 border border-transparent text-sm font-medium text-white rounded-md shadow-sm hover:bg-emerald-700 transition-colors" href="08-bottle-feeding-kid-care.php">
                Next
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>