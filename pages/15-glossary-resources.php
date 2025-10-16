<?php
$PAGE_TITLE = 'Glossary & Resources • Goat Care Guide';
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
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Glossary &amp; Resources</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">Understanding the language of goat keeping and knowing where to find reliable information are key to becoming a confident herd manager.</p>
        </section>
        <div class="space-y-12">
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Common Goat Terminology</h2>
                <div class="grid md:grid-cols-2 gap-x-8 gap-y-6">
                    <div>
                        <p><strong class="text-slate-800">Buck:</strong> An intact (uncastrated) male goat.</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">Doe:</strong> A female goat.</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">Wether:</strong> A castrated male goat.</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">Kid:</strong> A baby goat, male or female.</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">Kidding:</strong> The act of a doe giving birth.</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">Dam:</strong> The mother of a goat.</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">Sire:</strong> The father of a goat.</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">Freshen:</strong> To begin producing milk after giving birth.</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">Dry Doe:</strong> A doe that is not currently lactating (producing milk).</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">Polled:</strong> A goat that is naturally hornless due to genetics.</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">Disbudding:</strong> The process of removing horn buds on a young kid to prevent horn growth.</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">Scurs:</strong> Small, misshapen horn growths that can occur after an incomplete disbudding.</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">Rumen:</strong> The largest of the four stomach compartments in a goat, responsible for fermentation.</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">Browse:</strong> Woody plants, shrubs, and leaves that goats prefer to eat.</p>
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Health &amp; Acronyms</h2>
                <div class="grid md:grid-cols-2 gap-x-8 gap-y-6">
                    <div>
                        <p><strong class="text-slate-800">BCS (Body Condition Score):</strong> A 1-5 scale used to assess a goat's body fat reserves.</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">CDT:</strong> The core vaccine for goats, protecting against Clostridium perfringens types C &amp; D (enterotoxemia) and Tetanus.</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">FAMACHA:</strong> A system for assessing anemia (and thus, barber pole worm load) by checking the color of a goat's lower eyelids.</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">Coccidiosis:</strong> A common and potentially deadly parasitic disease in kids, causing severe diarrhea (scours).</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">CAE (Caprine Arthritis Encephalitis):</strong> A viral disease, primarily in dairy goats, that can cause arthritis, mastitis, and encephalitis.</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">CL (Caseous Lymphadenitis):</strong> A chronic, contagious bacterial infection that causes abscesses in the lymph nodes.</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">LGD:</strong> Livestock Guardian Dog, such as a Great Pyrenees or Anatolian Shepherd.</p>
                    </div>
                    <div>
                        <p><strong class="text-slate-800">Ruminant:</strong> An animal with a four-chamber stomach that chews cud, like goats, sheep, and cattle.</p>
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Recommended Online Resources</h2>
                <p class="text-slate-600 mb-4">While this guide is a great start, always seek out information from reputable, science-based sources.</p>
                <ul class="space-y-3 list-disc list-inside">
                    <li><a class="text-emerald-600 hover:underline" href="#"><strong>Your Local University Extension Service:</strong></a> Search for "[Your State] University Extension Small Ruminant" to find articles, webinars, and local experts tailored to your region's specific challenges.</li>
                    <li><a class="text-emerald-600 hover:underline" href="https://www.adga.org/" rel="noopener" target="_blank"><strong>American Dairy Goat Association (ADGA):</strong></a> The largest goat registry in the U.S., with breed information and performance programs.</li>
                    <li><a class="text-emerald-600 hover:underline" href="https://www.americangoatsociety.com/" rel="noopener" target="_blank"><strong>American Goat Society (AGS):</strong></a> Another major registry, especially for miniature dairy goat breeds.</li>
                    <li><a class="text-emerald-600 hover:underline" href="https://www.wormx.info/" rel="noopener" target="_blank"><strong>American Consortium for Small Ruminant Parasite Control (ACSRPC):</strong></a> The definitive source for up-to-date information on parasite management and dewormer resistance.</li>
                </ul>
            </section>
        </div>
        <div class="flex justify-between items-center pt-12">
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors" href="14-common-problems-triage.php">
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Previous
            </a>
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 border border-transparent text-sm font-medium text-white rounded-md shadow-sm hover:bg-emerald-700 transition-colors" href="16-calculators.php">
                Next
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>