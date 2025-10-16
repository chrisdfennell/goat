<?php
$PAGE_TITLE = 'Getting Started • Goat Care Guide';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com'];
$PAGE_INLINE_JS = <<<HTML
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Dropdown and mobile menu logic
    const dropdownButton = document.getElementById('nav-dropdown-button');
    const dropdownPanel = document.getElementById('nav-dropdown-panel');
    if (dropdownButton && dropdownPanel) {
        dropdownButton.addEventListener('click', (event) => {
            event.stopPropagation();
            dropdownPanel.classList.toggle('hidden');
        });
        document.addEventListener('click', (event) => {
            if (!dropdownPanel.classList.contains('hidden') && !dropdownButton.contains(event.target)) {
                dropdownPanel.classList.add('hidden');
            }
        });
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !dropdownPanel.classList.contains('hidden')) {
                dropdownPanel.classList.add('hidden');
            }
        });
    }
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenuPanel = document.getElementById('mobile-menu-panel');
    const mobileMenuCloseButton = document.getElementById('mobile-menu-close-button');
    if (mobileMenuButton && mobileMenuPanel) {
        const toggleMenu = () => {
            mobileMenuPanel.classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
        };
        mobileMenuButton.addEventListener('click', toggleMenu);
        mobileMenuCloseButton.addEventListener('click', toggleMenu);
    }
});
</script>
HTML;
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
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Choosing Your Starter Herd</h2>
                <div class="grid md:grid-cols-2 gap-6 items-center">
                    <div>
                        <p class="text-slate-600 mb-4">The golden rule is to <strong>never get a single goat</strong>. They are intensely social herd animals and will be stressed and destructive if kept alone.</p>
                        <ul class="space-y-2 list-disc list-inside text-slate-700">
                            <li><strong>Ideal Start:</strong> Two or three does (females) or two wethers (castrated males) make an excellent starter herd.</li>
                            <li><strong>Avoid Bucks:</strong> Do not get an intact buck (male) at first. They have a strong odor, require very robust fencing, and can be aggressive. Use a "stud service" from a local breeder for your does.</li>
                        </ul>
                    </div>
                    <div>
                        <img alt="Two healthy goats together in a pasture" class="rounded-lg shadow-sm" src="<?= e($REL) ?>assets/site/assets/two-goats.jpg" />
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Questions to Ask the Breeder</h2>
                <p class="text-slate-600 mb-4">A reputable breeder will be happy to answer your questions. Don't be shy!</p>
                <ul class="space-y-2 list-disc list-inside text-slate-600">
                    <li><strong>Disease Testing:</strong> Do you test your herd for CAE, CL, and Johne's disease? Can I see the most recent results? (Buying from a tested herd is the single best thing you can do for your herd's long-term health).</li>
                    <li><strong>Vaccination &amp; Deworming History:</strong> What vaccines have they had and when? What is your parasite management program?</li>
                    <li><strong>Feed:</strong> What brand of feed and type of hay are they currently eating? (Get a small bag to help transition them slowly).</li>
                    <li><strong>Temperament:</strong> Ask to see the parents (dam and sire) if possible. A calm dam often raises calm kids.</li>
                </ul>
            </section>
        </div>
        <div class="flex justify-between items-center pt-12">
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors" href="<?= e($REL) ?>index.php">
                <svg fill="currentColor" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"></path>
                </svg>
                Home
            </a>
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 border border-transparent text-sm font-medium text-white rounded-md shadow-sm hover:bg-emerald-700 transition-colors" href="<?= e($REL) ?>pages/02-housing-fencing.php">
                Next
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>