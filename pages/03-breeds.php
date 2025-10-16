<?php
$PAGE_TITLE = 'Breeds & Choosing • Goat Care Guide';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com'];
$PAGE_INLINE_JS = <<<HTML
<script>
document.addEventListener('DOMContentLoaded', () => {
    const breedTable = document.getElementById('breed-comparison');
    const lightbox = document.getElementById('lightbox');
    if (breedTable && lightbox) {
        const lightboxImg = lightbox.querySelector('img');
        const lightboxClose = document.getElementById('lightbox-close');

        const openLightbox = (imgElement) => {
            const highResSrc = imgElement.getAttribute('data-src');
            if (highResSrc) {
                lightboxImg.src = highResSrc;
                lightboxImg.alt = imgElement.alt;
                lightbox.classList.add('open');
            }
        };

        const closeLightbox = () => {
            lightbox.classList.remove('open');
            setTimeout(() => {
                lightboxImg.src = '';
            }, 200);
        };

        breedTable.addEventListener('click', (e) => {
            if (e.target.tagName === 'IMG') {
                e.preventDefault();
                openLightbox(e.target);
            }
        });

        const images = breedTable.querySelectorAll('img[data-src]');
        images.forEach(img => {
            img.src = img.getAttribute('data-src');
        });

        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) closeLightbox();
        });
        lightboxClose.addEventListener('click', closeLightbox);
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && lightbox.classList.contains('open')) closeLightbox();
        });
    }
});
</script>
HTML;
include __DIR__ . '/../includes/header.php';
?>

<!-- Main Content -->
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
    <div class="max-w-7xl mx-auto">
        <section class="mb-12 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Compare Goat Breeds</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">Choosing the right breed is the first step to a successful herd. Match the breed's purpose, size, and temperament to your goals and property.</p>
        </section>
        <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200 mb-12">
            <h2 class="text-2xl font-bold text-slate-900 mb-4 text-center">Choosing for Your Goals</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-slate-100">
                        <tr>
                            <th class="p-3 text-sm font-semibold text-slate-600">If your goal is...</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Prioritize...</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Top Breeds</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200 text-sm">
                        <tr>
                            <td class="p-3 font-medium">Family Milk &amp; Cheese</td>
                            <td class="p-3 text-slate-600">High Butterfat, Good Temperament</td>
                            <td class="p-3 text-slate-600">Nigerian Dwarf, Nubian</td>
                        </tr>
                        <tr>
                            <td class="p-3 font-medium">High Milk Volume</td>
                            <td class="p-3 text-slate-600">Lactation Persistency, Udder Structure</td>
                            <td class="p-3 text-slate-600">Alpine, Saanen, LaMancha</td>
                        </tr>
                        <tr>
                            <td class="p-3 font-medium">Meat Production</td>
                            <td class="p-3 text-slate-600">Growth Rate, Muscling</td>
                            <td class="p-3 text-slate-600">Boer, Kiko, Spanish</td>
                        </tr>
                        <tr>
                            <td class="p-3 font-medium">Pets &amp; Brush Clearing</td>
                            <td class="p-3 text-slate-600">Small Size, Docile Nature, Hardiness</td>
                            <td class="p-3 text-slate-600">Pygmy, Nigerian Dwarf, Miniatures</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="bg-white rounded-lg shadow-md border border-slate-200" id="breed-comparison">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-100">
                        <tr>
                            <th class="p-3 text-sm font-semibold text-slate-600 sticky left-0 bg-slate-100 z-10">Breed</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Purpose</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Size (Does)</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Temperament</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Best For</th>
                            <th class="p-3 text-sm font-semibold text-slate-600">Watch Out For</th>
                        </tr>
                    </thead>
                    <tbody class="align-top divide-y divide-slate-200">
                        <!-- Nigerian Dwarf -->
                        <tr>
                            <td class="p-3 font-medium text-slate-900 sticky left-0 bg-white">
                                <div class="flex items-center gap-3"><img alt="Nigerian Dwarf goat" class="w-16 h-16 rounded-md object-cover cursor-pointer hover:opacity-80 transition-opacity" data-src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Nigerian_Dwarf_goat_%28brown%29.jpg" onerror="this.onerror=null;this.src='https://placehold.co/80x80/e2e8f0/475569?text=Goat';" src="https://placehold.co/80x80/e2e8f0/475569?text=Goat" /><span class="font-bold">Nigerian Dwarf</span></div>
                            </td>
                            <td class="p-3 text-slate-600 text-sm">Dairy / Pet</td>
                            <td class="p-3 text-slate-600 text-sm">~60–80 lbs</td>
                            <td class="p-3 text-slate-600 text-sm">Friendly, energetic, curious</td>
                            <td class="p-3 text-slate-600 text-sm">Small homesteads, rich milk for cheese, great pets.</td>
                            <td class="p-3 text-slate-600 text-sm">Lower total volume, agile escape artists.</td>
                        </tr>
                        <!-- Nubian -->
                        <tr>
                            <td class="p-3 font-medium text-slate-900 sticky left-0 bg-white">
                                <div class="flex items-center gap-3"><img alt="Nubian goat" class="w-16 h-16 rounded-md object-cover cursor-pointer hover:opacity-80 transition-opacity" data-src="https://upload.wikimedia.org/wikipedia/commons/e/e0/Anglo-Nubian_goat_at_a_zoo.jpg" onerror="this.onerror=null;this.src='https://placehold.co/80x80/e2e8f0/475569?text=Goat';" src="https://placehold.co/80x80/e2e8f0/475569?text=Goat" /><span class="font-bold">Nubian</span></div>
                            </td>
                            <td class="p-3 text-slate-600 text-sm">Dairy / Dual</td>
                            <td class="p-3 text-slate-600 text-sm">120–170 lbs</td>
                            <td class="p-3 text-slate-600 text-sm">Affectionate, very vocal, dramatic</td>
                            <td class="p-3 text-slate-600 text-sm">High-butterfat milk ("Jersey cow of goats"), handles heat well.</td>
                            <td class="p-3 text-slate-600 text-sm">Can be very loud, larger feed needs.</td>
                        </tr>
                        <!-- Alpine -->
                        <tr>
                            <td class="p-3 font-medium text-slate-900 sticky left-0 bg-white">
                                <div class="flex items-center gap-3"><img alt="Alpine goat" class="w-16 h-16 rounded-md object-cover cursor-pointer hover:opacity-80 transition-opacity" data-src="https://commons.wikimedia.org/wiki/Special:FilePath/American_Alpine_doe.jpg" onerror="this.onerror=null;this.src='https://placehold.co/80x80/e2e8f0/475569?text=Goat';" src="https://placehold.co/80x80/e2e8f0/475569?text=Goat" /><span class="font-bold">Alpine</span></div>
                            </td>
                            <td class="p-3 text-slate-600 text-sm">Dairy</td>
                            <td class="p-3 text-slate-600 text-sm">130–160 lbs</td>
                            <td class="p-3 text-slate-600 text-sm">Hardy, curious, adaptable</td>
                            <td class="p-3 text-slate-600 text-sm">Reliable high-volume production, cold-tolerant, athletic.</td>
                            <td class="p-3 text-slate-600 text-sm">Can be more independent or aloof than other breeds.</td>
                        </tr>
                        <!-- LaMancha -->
                        <tr>
                            <td class="p-3 font-medium text-slate-900 sticky left-0 bg-white">
                                <div class="flex items-center gap-3"><img alt="LaMancha goat" class="w-16 h-16 rounded-md object-cover cursor-pointer hover:opacity-80 transition-opacity" data-src="https://upload.wikimedia.org/wikipedia/commons/1/16/La_Mancha_closeup.jpg" onerror="this.onerror=null;this.src='https://placehold.co/80x80/e2e8f0/475569?text=Goat';" src="https://placehold.co/80x80/e2e8f0/475569?text=Goat" /><span class="font-bold">LaMancha</span></div>
                            </td>
                            <td class="p-3 text-slate-600 text-sm">Dairy</td>
                            <td class="p-3 text-slate-600 text-sm">120–160 lbs</td>
                            <td class="p-3 text-slate-600 text-sm">Calm, gentle, dependable</td>
                            <td class="p-3 text-slate-600 text-sm">Steady milkers with a docile temperament, easy to handle on the stand.</td>
                            <td class="p-3 text-slate-600 text-sm">Distinct "gopher" or "elf" ears are not for everyone.</td>
                        </tr>
                        <!-- Boer -->
                        <tr>
                            <td class="p-3 font-medium text-slate-900 sticky left-0 bg-white">
                                <div class="flex items-center gap-3"><img alt="Boer goat" class="w-16 h-16 rounded-md object-cover cursor-pointer hover:opacity-80 transition-opacity" data-src="https://upload.wikimedia.org/wikipedia/commons/9/92/Boer_goat_Doe.jpg" onerror="this.onerror=null;this.src='https://placehold.co/80x80/e2e8f0/475569?text=Goat';" src="https://placehold.co/80x80/e2e8f0/475569?text=Goat" /><span class="font-bold">Boer</span></div>
                            </td>
                            <td class="p-3 text-slate-600 text-sm">Meat</td>
                            <td class="p-3 text-slate-600 text-sm">200+ lbs</td>
                            <td class="p-3 text-slate-600 text-sm">Generally docile, but large</td>
                            <td class="p-3 text-slate-600 text-sm">Excellent growth rate and carcass yield, heat tolerant.</td>
                            <td class="p-3 text-slate-600 text-sm">Prone to parasites; not as hardy as other meat breeds.</td>
                        </tr>
                        <!-- Kiko -->
                        <tr>
                            <td class="p-3 font-medium text-slate-900 sticky left-0 bg-white">
                                <div class="flex items-center gap-3"><img alt="Kiko goat" class="w-16 h-16 rounded-md object-cover cursor-pointer hover:opacity-80 transition-opacity" data-src="https://upload.wikimedia.org/wikipedia/commons/1/13/Kiko_goat_with_kid_USA_2011.jpg" onerror="this.onerror=null;this.src='https://placehold.co/80x80/e2e8f0/475569?text=Goat';" src="https://placehold.co/80x80/e2e8f0/475569?text=Goat" /><span class="font-bold">Kiko</span></div>
                            </td>
                            <td class="p-3 text-slate-600 text-sm">Meat / Hardy</td>
                            <td class="p-3 text-slate-600 text-sm">120–180 lbs</td>
                            <td class="p-3 text-slate-600 text-sm">Independent, hardy, active foragers</td>
                            <td class="p-3 text-slate-600 text-sm">Low-maintenance, parasite resistant, excellent mothers.</td>
                            <td class="p-3 text-slate-600 text-sm">Less common in some areas, less muscled than Boers.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <div class="flex justify-between items-center pt-12">
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors" href="02-housing-fencing.php">
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Previous
            </a>
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 border border-transparent text-sm font-medium text-white rounded-md shadow-sm hover:bg-emerald-700 transition-colors" href="04-nutrition-minerals.php">
                Next
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </div>
    </div>
</main>
<!-- Lightbox -->
<div class="lightbox-backdrop fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center p-4 z-50 opacity-0 pointer-events-none" id="lightbox">
    <div class="lightbox-frame max-w-4xl max-h-full bg-white rounded-lg shadow-2xl p-4 relative">
        <img alt="" class="max-w-full max-h-[80vh] block" src="" />
        <button class="absolute -top-3 -right-3 bg-white rounded-full p-1 shadow-lg text-slate-700 hover:text-red-500 transition-colors" id="lightbox-close">
            <svg fill="none" height="28" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" viewbox="0 0 24 24" width="28" xmlns="http://www.w3.org/2000/svg">
                <line x1="18" x2="6" y1="6" y2="18"></line>
                <line x1="6" x2="18" y1="6" y2="18"></line>
            </svg>
        </button>
    </div>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>