<?php
$PAGE_TITLE = 'Health: Vaccines & Parasites • Goat Care Guide';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com'];
$PAGE_INLINE_JS = ''; // No page-specific JS needed now
include __DIR__ . '/../includes/header.php';
?>

<!-- Main Content -->
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
    <div class="max-w-4xl mx-auto">
        <section class="mb-12 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Preventive Health &amp; Parasites</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">Proactive health management is the key to a thriving herd. Learn to spot problems early and build a strong relationship with a goat-savvy veterinarian.</p>
        </section>
        <div class="space-y-8">
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">The Daily Health Check</h2>
                <p class="text-slate-600 mb-4">Spend a few minutes observing your herd every day, especially at feeding time. This is the fastest way to spot an issue. A healthy goat is bright, alert, and has a good appetite.</p>
                <ul class="space-y-2 list-disc list-inside text-slate-700">
                    <li><strong>Eyes:</strong> Bright and clear, not cloudy or runny.</li>
                    <li><strong>Nose:</strong> Clean and dry, no thick or colored discharge.</li>
                    <li><strong>Coat:</strong> Smooth and shiny. A rough, dull coat can be a sign of parasites or mineral deficiency.</li>
                    <li><strong>Manure:</strong> Should be firm pellets. Clumpy or watery stool (scours) indicates a problem.</li>
                    <li><strong>Movement:</strong> Moves easily without limping or stiffness. Stays with the herd.</li>
                    <li><strong><a href="/glossary-resources#rumen" class="text-emerald-600 hover:underline font-semibold">Rumen</a>:</strong> The left side should feel full but soft, not tight like a drum (bloat). You should hear gurgling sounds every 20-30 seconds.</li>
                </ul>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Core Vaccinations: CDT</h2>
                <p class="text-slate-600 mb-4">The most important vaccine for nearly all goats is <a href="/glossary-resources#cdt" class="text-emerald-600 hover:underline font-semibold">CDT</a>, which protects against Clostridium perfringens types C &amp; D (enterotoxemia or "overeating disease") and Tetanus.</p>
                <ul class="space-y-3 list-disc list-inside text-slate-600">
                    <li><strong><a href="/glossary-resources#kid" class="text-emerald-600 hover:underline font-semibold">Kids</a>:</strong> Typically receive their first shot at 4-6 weeks of age, with a booster 3-4 weeks later.</li>
                    <li><strong>Adults:</strong> Receive an annual booster shot.</li>
                    <li><strong>Pregnant <a href="/glossary-resources#doe" class="text-emerald-600 hover:underline font-semibold">Does</a>:</strong> Get a booster 4-6 weeks before their due date. This passes immunity to the kids through the colostrum.</li>
                </ul>
                <div class="mt-4 bg-blue-50 border-l-4 border-blue-500 text-blue-900 p-4 rounded-r-lg text-sm">
                    <strong>Note:</strong> Always consult your veterinarian for the vaccination schedule appropriate for your area and herd. Other vaccines (like for rabies or CL) may be recommended.
                </div>
            </section>
             <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Understanding Tetanus Prevention</h2>
                <p class="text-slate-600 mb-4">Tetanus is a deadly disease caused by bacteria found in soil. It's crucial to understand the difference between the two types of protection available.</p>
                <ul class="space-y-3 list-disc list-inside text-slate-700">
                    <li><strong>Tetanus Toxoid (Preventative):</strong> This is the vaccine included in the CDT shot. It stimulates the goat's body to create its own long-lasting immunity. It is given annually for prevention but takes about two weeks to become effective after a booster.</li>
                    <li><strong>Tetanus Antitoxin (Emergency):</strong> This provides immediate, short-term protection by giving the goat pre-made antibodies. It is used in emergencies, such as after a deep wound, castration, or disbudding on a goat that is not up-to-date on its toxoid vaccine. The protection only lasts for about 7-10 days.</li>
                </ul>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Smart Parasite Management</h2>
                <p class="text-slate-600 mb-4">The old method of deworming on a fixed schedule is no longer recommended, as it leads to parasite resistance. Modern strategy focuses on treating only the animals that need it.</p>
                <div class="grid md:grid-cols-2 gap-6 items-center">
                    <div>
                        <img alt="Checking a goat's eyelid color against a FAMACHA chart to assess for anemia" class="rounded-lg shadow-sm" src="/assets/site/assets/famacha-scoring-chart.png" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-slate-800">Your Toolkit:</h3>
                        <ul class="space-y-2 mt-2 list-disc list-inside text-slate-700">
                            <li><strong><a href="/glossary-resources#famacha" class="text-emerald-600 hover:underline font-semibold">FAMACHA</a> Scoring:</strong> This chart helps you identify anemia (a key sign of the deadly barber pole worm) by checking the color of the goat's lower eyelid mucous membranes. Only deworm animals with pale scores (4s and 5s).</li>
                            <li><strong>Fecal Exams:</strong> Your vet can run a fecal test to identify what types of worms are present and in what quantity, helping you choose the right dewormer.</li>
                            <li><strong>Pasture Management:</strong> Rotating pastures, avoiding overgrazing, and keeping feed off the ground are the best ways to prevent parasite problems in the first place.</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <div class="flex justify-between items-center pt-12">
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors" href="/nutrition-minerals">
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Previous
            </a>
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 border border-transparent text-sm font-medium text-white rounded-md shadow-sm hover:bg-emerald-700 transition-colors" href="/hoof-care-grooming">
                Next
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>