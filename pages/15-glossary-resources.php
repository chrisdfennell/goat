<?php
$PAGE_TITLE = 'Glossary & Resources • Goat Care Guide';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com'];
$PAGE_INLINE_JS = ''; // No page-specific JS needed now
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
                        <p><strong id="buck" class="text-slate-800">Buck:</strong> An intact (uncastrated) male goat.</p>
                    </div>
                    <div>
                        <p><strong id="doe" class="text-slate-800">Doe:</strong> A female goat.</p>
                    </div>
                    <div>
                        <p><strong id="wether" class="text-slate-800">Wether:</strong> A castrated male goat.</p>
                    </div>
                    <div>
                        <p><strong id="kid" class="text-slate-800">Kid:</strong> A baby goat, male or female.</p>
                    </div>
                    <div>
                        <p><strong id="buckling" class="text-slate-800">Buckling:</strong> A male baby goat.</p>
                    </div>
                    <div>
                        <p><strong id="doeling" class="text-slate-800">Doeling:</strong> A female baby goat.</p>
                    </div>
                    <div>
                        <p><strong id="kidding" class="text-slate-800">Kidding:</strong> The act of a doe giving birth.</p>
                    </div>
                    <div>
                        <p><strong id="dam" class="text-slate-800">Dam:</strong> The mother of a goat.</p>
                    </div>
                    <div>
                        <p><strong id="sire" class="text-slate-800">Sire:</strong> The father of a goat.</p>
                    </div>
                    <div>
                        <p><strong id="freshen" class="text-slate-800">Freshen:</strong> To begin producing milk after giving birth.</p>
                    </div>
                    <div>
                        <p><strong id="dry-doe" class="text-slate-800">Dry Doe:</strong> A doe that is not currently lactating (producing milk).</p>
                    </div>
                    <div>
                        <p><strong id="polled" class="text-slate-800">Polled:</strong> A goat that is naturally hornless due to genetics.</p>
                    </div>
                    <div>
                        <p><strong id="disbudding" class="text-slate-800">Disbudding:</strong> The process of removing horn buds on a young kid to prevent horn growth.</p>
                    </div>
                    <div>
                        <p><strong id="scurs" class="text-slate-800">Scurs:</strong> Small, misshapen horn growths that can occur after an incomplete disbudding.</p>
                    </div>
                    <div>
                        <p><strong id="rumen" class="text-slate-800">Rumen:</strong> The largest of the four stomach compartments in a goat, responsible for fermentation.</p>
                    </div>
                    <div>
                        <p><strong id="browse" class="text-slate-800">Browse:</strong> Woody plants, shrubs, and leaves that goats prefer to eat.</p>
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Key Health Concepts in Detail</h2>
                <div class="space-y-6">
                    <div>
                        <p><strong id="cae" class="text-slate-800">CAE (Caprine Arthritis Encephalitis):</strong> A contagious and incurable viral disease, primarily affecting dairy goats. It is most often transmitted from an infected doe to her kids through colostrum or milk. It can cause chronic arthritis (painful, swollen joints, especially knees), "hard udder" mastitis, and in rare cases, encephalitis in young kids. There is no treatment, which is why buying from a herd that tests negative for CAE is the single most important step for a new goat owner.</p>
                    </div>
                     <div>
                        <p><strong id="cl" class="text-slate-800">CL (Caseous Lymphadenitis):</strong> A chronic, contagious bacterial infection that causes abscesses in the lymph nodes, most commonly around the jaw, neck, and shoulders. These abscesses contain a thick, pus-like material. The bacteria can survive in the soil for years. While not always fatal, it is incurable and can significantly impact a goat's health and the biosecurity of your farm. Testing and culling infected animals is the primary management strategy.</p>
                    </div>
                    <div>
                        <p><strong id="johnes" class="text-slate-800">Johne's Disease:</strong> A fatal and contagious gastrointestinal disease caused by bacteria that leads to a slow, progressive wasting of the animal. Symptoms, which often don't appear for years, include chronic diarrhea and severe weight loss despite a good appetite. It is transmitted primarily through manure. Like CAE and CL, it is incurable, and buying from tested-negative herds is essential.</p>
                    </div>
                    <div>
                        <p><strong id="cdt" class="text-slate-800">CDT Vaccine &amp; Tetanus Prevention:</strong> The core vaccine for goats is "CDT," which protects against *Clostridium perfringens* types C & D (enterotoxemia or "overeating disease") and Tetanus. For tetanus protection, it is critical to understand the two different types of injections:</p>
                        <ul class="mt-2 space-y-2 list-disc list-inside text-sm pl-4">
                           <li><strong>Tetanus Toxoid:</strong> This is the "vaccine" part of the CDT shot. It works by stimulating the goat's own immune system to create long-lasting antibodies against the tetanus toxin. It is used for routine, preventative care. It requires a booster and takes about two weeks to become fully effective.</li>
                           <li><strong>Tetanus Antitoxin:</strong> This is an injection of pre-made antibodies that provides immediate but temporary protection (about 7-10 days). It is used for emergencies, such as after an injury in an unvaccinated goat, or to give immediate protection to newborn kids whose mother was not vaccinated before birth.</li>
                        </ul>
                    </div>
                    <div>
                        <p><strong id="famacha" class="text-slate-800">FAMACHA:</strong> A system for assessing anemia by checking the color of a goat's lower eyelids against a special chart. Pale membranes indicate blood loss, which in goats is most often caused by a heavy infestation of the deadly barber pole worm (*Haemonchus contortus*). This allows for selective deworming of only the animals that need it, which helps combat parasite resistance.</p>
                    </div>
                    <div>
                        <p><strong id="coccidiosis" class="text-slate-800">Coccidiosis:</strong> A common and potentially deadly parasitic disease in kids, caused by a protozoa called *coccidia*. It thrives in wet, crowded conditions and damages the intestinal lining, causing severe, often watery or bloody diarrhea (scours). It is a major cause of death in kids between 3 weeks and 5 months of age. Prevention through clean, dry living conditions is critical.</p>
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