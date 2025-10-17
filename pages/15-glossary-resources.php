<?php
$PAGE_TITLE = 'Glossary & Resources • Goat Care Guide';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com'];
$PAGE_INLINE_JS = '';
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
                        <p id="buck"><strong class="text-slate-800">Buck:</strong> An intact (uncastrated) male goat.</p>
                    </div>
                    <div>
                        <p id="buckling"><strong class="text-slate-800">Buckling:</strong> A male baby goat (under one year of age).</p>
                    </div>
                    <div>
                        <p id="doe"><strong class="text-slate-800">Doe:</strong> A female goat.</p>
                    </div>
                    <div>
                        <p id="doeling"><strong class="text-slate-800">Doeling:</strong> A female baby goat (under one year of age).</p>
                    </div>
                    <div>
                        <p id="wether"><strong class="text-slate-800">Wether:</strong> A castrated male goat.</p>
                    </div>
                    <div>
                        <p id="kid"><strong class="text-slate-800">Kid:</strong> A baby goat, male or female.</p>
                    </div>
                    <div>
                        <p id="kidding"><strong class="text-slate-800">Kidding:</strong> The act of a doe giving birth.</p>
                    </div>
                    <div>
                        <p id="dam"><strong class="text-slate-800">Dam:</strong> The mother of a goat.</p>
                    </div>
                    <div>
                        <p id="sire"><strong class="text-slate-800">Sire:</strong> The father of a goat.</p>
                    </div>
                    <div>
                        <p id="freshen"><strong class="text-slate-800">Freshen:</strong> To begin producing milk after giving birth.</p>
                    </div>
                    <div>
                        <p id="dry-doe"><strong class="text-slate-800">Dry Doe:</strong> A doe that is not currently lactating (producing milk).</p>
                    </div>
                     <div>
                        <p id="heat"><strong class="text-slate-800">Heat (Estrus):</strong> The period in a doe's reproductive cycle (usually 12-48 hours) when she is fertile and receptive to a buck.</p>
                    </div>
                    <div>
                        <p id="polled"><strong class="text-slate-800">Polled:</strong> A goat that is naturally hornless due to genetics.</p>
                    </div>
                    <div>
                        <p id="disbudding"><strong class="text-slate-800">Disbudding:</strong> The process of removing horn buds on a young kid to prevent horn growth.</p>
                    </div>
                    <div>
                        <p id="scurs"><strong class="text-slate-800">Scurs:</strong> Small, misshapen horn growths that can occur after an incomplete disbudding.</p>
                    </div>
                    <div>
                        <p id="rumen"><strong class="text-slate-800">Rumen:</strong> The largest of the four stomach compartments in a goat, responsible for fermentation.</p>
                    </div>
                    <div>
                        <p id="browse"><strong class="text-slate-800">Browse:</strong> Woody plants, shrubs, and leaves that goats prefer to eat.</p>
                    </div>
                    <div>
                        <p id="colostrum"><strong class="text-slate-800">Colostrum:</strong> A doe's first milk after kidding, rich in antibodies essential for a kid's immunity.</p>
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Key Health Concepts in Detail</h2>
                <div class="space-y-6">
                    <div>
                        <h3 id="bcs" class="text-lg font-semibold text-slate-800">BCS (Body Condition Score)</h3>
                        <p class="mt-1 text-slate-600">This is a hands-on 1-5 scale used to assess a goat's body fat reserves, which is a key indicator of health. You can't judge condition by sight alone, especially on a goat with a thick winter coat. You must feel along their spine, ribs, and hips to determine their score.</p>
                    </div>
                    <div>
                        <h3 id="cdt" class="text-lg font-semibold text-slate-800">CDT Vaccine</h3>
                        <p class="mt-1 text-slate-600">The core vaccine for goats. "CD" protects against Clostridium perfringens types C & D (enterotoxemia or "overeating disease"), and "T" protects against Tetanus. This vaccine is critical for preventing sudden death from digestive issues or infected wounds.</p>
                    </div>
                     <div>
                        <h3 id="tetanus" class="text-lg font-semibold text-slate-800">Tetanus: Toxoid vs. Antitoxin</h3>
                        <p class="mt-1 text-slate-600">It is vital to understand the difference. The **CDT Toxoid** is the vaccine you give annually for long-term prevention. It prompts the goat's body to create its own antibodies. The **Tetanus Antitoxin** provides immediate, temporary antibodies and is only used in an emergency, such as after an injury if the goat is not up-to-date on its vaccine, or for kids at banding/castration time.</p>
                    </div>
                    <div>
                        <h3 id="famacha" class="text-lg font-semibold text-slate-800">FAMACHA© Scoring</h3>
                        <p class="mt-1 text-slate-600">This is a system for assessing anemia by checking the color of a goat's lower eyelids against a chart. It is the primary tool for managing the deadly barber pole worm (<span class="italic">Haemonchus contortus</span>), allowing you to deworm only the animals that need it and thus slowing parasite resistance.</p>
                    </div>
                    <div>
                        <h3 id="coccidiosis" class="text-lg font-semibold text-slate-800">Coccidiosis</h3>
                        <p class="mt-1 text-slate-600">A common and potentially deadly parasitic disease in kids, usually between 3 weeks and 5 months of age. It is caused by a protozoa that damages the intestinal lining, causing severe diarrhea (scours). Prevention focuses on keeping pens clean and dry and often involves using medicated feed or water.</p>
                    </div>
                     <div>
                        <h3 id="zinc-deficiency" class="text-lg font-semibold text-slate-800">Zinc Deficiency</h3>
                        <p class="mt-1 text-slate-600">A mineral deficiency that often occurs when a goat's diet is too high in calcium (e.g., too much alfalfa for non-milking goats), as calcium can inhibit zinc absorption. Symptoms include patchy hair loss (especially on the face and tail), a thick or flaky coat, and sometimes excessive salivating or foaming at the mouth.</p>
                    </div>
                    <div>
                        <h3 id="cae" class="text-lg font-semibold text-slate-800">CAE (Caprine Arthritis Encephalitis)</h3>
                        <p class="mt-1 text-slate-600">A contagious and incurable viral disease, primarily affecting dairy goats. It most commonly appears as arthritis ("big knees") in adult goats but can also cause encephalitis (brain inflammation) in kids. It is primarily spread from doe to kid through colostrum and milk, so prevention relies on heat-treating colostrum and feeding pasteurized milk or replacer.</p>
                    </div>
                    <div>
                        <h3 id="cl" class="text-lg font-semibold text-slate-800">CL (Caseous Lymphadenitis)</h3>
                        <p class="mt-1 text-slate-600">A chronic, contagious bacterial infection that causes abscesses in the lymph nodes, most commonly around the jaw and neck. The pus from these abscesses is highly infectious to other goats and can live in the soil for years. There is no cure, and prevention involves strict biosecurity and testing.</p>
                    </div>
                    <div>
                        <h3 id="johnes" class="text-lg font-semibold text-slate-800">Johne's Disease</h3>
                        <p class="mt-1 text-slate-600">A fatal, contagious gastrointestinal disease that causes a slow, progressive wasting away in adult goats. The bacteria is shed by infected animals long before they show symptoms, making it very difficult to control. There is no cure, so prevention relies on buying animals only from herds tested negative for the disease.</p>
                    </div>
                    <div>
                        <p id="lgd"><strong class="text-slate-800">LGD:</strong> Livestock Guardian Dog, such as a Great Pyrenees or Anatolian Shepherd.</p>
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
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors" href="/common-problems-triage">
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Previous
            </a>
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 border border-transparent text-sm font-medium text-white rounded-md shadow-sm hover:bg-emerald-700 transition-colors" href="/calculators">
                Next
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>