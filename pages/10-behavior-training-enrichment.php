<?php
$PAGE_TITLE = 'Behavior, Training & Enrichment • Goat Care Guide';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com'];
$PAGE_INLINE_JS = <<<HTML
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Page-specific JS can go here. Navigation is handled in the header.
});
</script>
HTML;
include __DIR__ . '/../includes/header.php';
?>

<!-- Main Content -->
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
    <div class="max-w-4xl mx-auto">
        <section class="mb-12 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Behavior, Training &amp; Enrichment</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">A bored goat is a destructive goat. Understanding their natural behaviors and providing a stimulating environment is key to a happy, manageable herd.</p>
        </section>
        <div class="space-y-12">
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Understanding Goat Psychology</h2>
                <ul class="space-y-3 list-disc list-inside text-slate-700">
                    <li><strong>Herd Animals:</strong> Goats have a strong herd instinct and a clear pecking order. The "herd queen" usually eats first. Never keep a single goat alone.</li>
                    <li><strong>Curious &amp; Intelligent:</strong> Goats are incredibly smart and inquisitive. This is why they test fences and get into trouble. They need mental stimulation.</li>
                    <li><strong>Creatures of Habit:</strong> They thrive on routine. Feeding at the same time every day reduces stress.</li>
                    <li><strong>Playful Nature:</strong> Goats, especially kids, love to run, jump, and play "king of the mountain." This is normal and healthy behavior.</li>
                </ul>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Enrichment: A Happy Goat is a Good Goat</h2>
                <p class="text-slate-600 mb-4">Enrichment prevents boredom, which in turn prevents bad habits like fence-chewing or bullying.</p>
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h3 class="font-semibold text-lg text-slate-800 mb-2">Simple &amp; Effective Ideas:</h3>
                        <ul class="space-y-3 list-disc list-inside text-slate-700">
                            <li><strong>Things to Climb:</strong> This is the most important enrichment. Large rocks, wooden spools, sturdy platforms, and even old picnic tables make fantastic goat toys.</li>
                            <li><strong>Browse &amp; Treats:</strong> Securely hang branches from non-poisonous trees (like pine or maple) for them to nibble on. Use puzzle balls designed for horses to make them work for their treats.</li>
                            <li><strong>New Scents &amp; Objects:</strong> Occasionally add a new (goat-safe) object to their pen for them to investigate, like a traffic cone or a new brush bolted to a post for scratching.</li>
                        </ul>
                    </div>
                    <div>
                        <img alt="Goats climbing and playing on a multi-level wooden structure." class="rounded-lg shadow-sm" src="<?= e($REL) ?>assets/site/assets/goat-playground.jpg" />
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Basic Training</h2>
                <p class="text-slate-600 mb-4">A little training makes handling your goats for health checks and hoof trimming much easier and less stressful for everyone.</p>
                <ul class="space-y-3 list-disc list-inside text-slate-600">
                    <li><strong>Lead Training:</strong> Get your goats used to wearing a collar from a young age. Start by leading them short distances with a leash, using small treats like sunflower seeds as a reward. Keep sessions short and positive.</li>
                    <li><strong>Training for the Milk Stand:</strong> Even if you don't have dairy goats, training them to hop onto a stand and eat a small treat is invaluable for hoof trimming and vet checks.</li>
                    <li><strong>Dealing with Head-Butting:</strong> A goat that head-butts people can be dangerous. Never play head-butting games with them, especially when they are young and cute. A firm "No!" and a quick, surprising squirt from a water bottle can deter this behavior.</li>
                </ul>
            </section>
        </div>
        <div class="flex justify-between items-center pt-12">
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors" href="09-security-predator-proofing.php">
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Previous
            </a>
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 border border-transparent text-sm font-medium text-white rounded-md shadow-sm hover:bg-emerald-700 transition-colors" href="11-seasonal-care.php">
                Next
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>