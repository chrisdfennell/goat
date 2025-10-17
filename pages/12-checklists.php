<?php
$PAGE_TITLE = 'Printable Checklists • Goat Care Guide';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com', 'https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.23/jspdf.plugin.autotable.min.js'];
$PAGE_INLINE_JS = <<<HTML
<script>
document.addEventListener('DOMContentLoaded', () => {
    const KEY = 'goat-checklists-state';

    function saveState() {
        const state = {};
        document.querySelectorAll('#checklist-container input[type="checkbox"]').forEach((checkbox, index) => {
            state[index] = checkbox.checked;
        });
        localStorage.setItem(KEY, JSON.stringify(state));
    }

    function loadState() {
        try {
            const state = JSON.parse(localStorage.getItem(KEY) || '{}');
            document.querySelectorAll('#checklist-container input[type="checkbox"]').forEach((checkbox, index) => {
                if (state[index] !== undefined) {
                    checkbox.checked = state[index];
                }
            });
        } catch (e) {
            console.error("Could not load checklist state", e);
        }
    }

    document.getElementById('checklist-container').addEventListener('change', (e) => {
        if (e.target.matches('input[type="checkbox"]')) {
            saveState();
        }
    });

    loadState();

    function generatePDF() {
        const {
            jsPDF
        } = window.jspdf;
        const doc = new jsPDF();
        let finalY = 15;

        doc.setFontSize(18);
        doc.text("Goat Care Checklists", 14, finalY);
        finalY += 10;

        const tableStyles = {
            theme: 'grid',
            headStyles: {
                fillColor: [226, 232, 240],
                textColor: [30, 41, 59],
                lineColor: [100, 116, 139],
                lineWidth: 0.2
            },
            styles: {
                lineColor: [148, 163, 184],
                lineWidth: 0.1
            },
            alternateRowStyles: {
                fillColor: [248, 250, 252]
            },
            columnStyles: {
                0: {
                    cellWidth: 15,
                    halign: 'center'
                }
            }
        };

        const checklists = document.querySelectorAll('.checklist-section');

        checklists.forEach(section => {
            const title = section.querySelector('h2').innerText;
            const items = section.querySelectorAll('li');
            const bodyData = [];

            items.forEach(item => {
                const checkbox = item.querySelector('input[type="checkbox"]');
                // Use the textContent of the parent label to get the full text
                const label = item.querySelector('label') ? item.querySelector('label').textContent.trim() : item.textContent.trim();
                const status = checkbox && checkbox.checked ? '[ x ]' : '[   ]';
                bodyData.push([status, label]);
            });

            if (finalY > 250) { // Check if we need a new page
                doc.addPage();
                finalY = 20;
            }

            doc.setFontSize(14);
            doc.text(title, 14, finalY);
            finalY += 6;

            doc.autoTable({
                ...tableStyles,
                head: [
                    ['Status', 'Task']
                ],
                body: bodyData,
                startY: finalY,
            });

            finalY = doc.lastAutoTable.finalY + 15;
        });

        doc.save('goat-checklists.pdf');
    }

    document.getElementById('generate-pdf')?.addEventListener('click', generatePDF);
});
</script>
HTML;
include __DIR__ . '/../includes/header.php';
?>

<!-- Main Content -->
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
    <div class="max-w-4xl mx-auto">
        <section class="mb-12 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Interactive Checklists</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">Use these checklists to stay on top of daily, weekly, and seasonal chores. Your progress is saved in your browser. Generate a PDF for a clean, printable version.</p>
            <div class="mt-6 flex flex-wrap gap-4 justify-center no-print">
                <button class="bg-blue-600 text-white font-medium py-2 px-5 rounded-md hover:bg-blue-700 transition-colors" id="generate-pdf">Generate &amp; Download PDF</button>
            </div>
        </section>
        <div class="space-y-12" id="checklist-container">
            <section class="checklist-section bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Initial Barn & Supply Setup</h2>
                <ul class="space-y-3 dark-mode-readable">
                    <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Secure, predator-proof fencing & gates</label></li>
                    <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Draft-free, dry shelter (15-20 sq ft per goat)</label></li>
                    <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Sturdy hay feeder (off the ground)</label></li>
                    <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Water buckets or trough</label></li>
                    <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Covered loose mineral feeder</label></li>
                    <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Grass Hay (at least 2-3 bales to start)</label></li>
                    <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Goat-specific loose minerals</label></li>
                    <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Loose baking soda</label></li>
                    <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Straw or pine shavings for bedding</label></li>
                    <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Small bag of same grain from breeder (for transition)</label></li>
                </ul>
            </section>
            <section class="checklist-section bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Daily &amp; Weekly Chores</h2>
                <div class="grid md:grid-cols-2 gap-8 dark-mode-readable">
                    <div>
                        <h3 class="font-semibold text-lg text-slate-800 mb-3">Daily Tasks</h3>
                        <ul class="space-y-3">
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Water buckets scrubbed and refilled</label></li>
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Hay feeders filled, old hay removed</label></li>
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Grain fed to milking/pregnant does</label></li>
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Mineral and salt feeders checked/filled</label></li>
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Quick health check on all animals</label></li>
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Gates and latches checked and secured</label></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg text-slate-800 mb-3">Weekly Tasks</h3>
                        <ul class="space-y-3">
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Spot clean bedding, remove wet spots</label></li>
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Check hooves for overgrowth or issues</label></li>
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Perform FAMACHA checks (in parasite season)</label></li>
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Weigh kids to monitor growth rate</label></li>
                            <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Walk the full fence line for damage</label></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="checklist-section bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Goat First-Aid Kit Checklist</h2>
                <p class="text-slate-600 mb-4">Assemble this kit in a waterproof, clearly labeled tote and keep it in a clean, accessible location.</p>
                <div class="grid md:grid-cols-2 gap-x-8 gap-y-4 dark-mode-readable">
                    <ul class="space-y-3">
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Digital Thermometer</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Stethoscope</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Vet Wrap &amp; Gauze Pads</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Saline Solution (for flushing wounds)</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Antiseptic Scrub (Betadine/Chlorhexidine)</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Blood Stop Powder (Styptic)</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Tweezers &amp; Scissors</label></li>
                    </ul>
                    <ul class="space-y-3">
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Electrolyte Powder</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Probiotic Paste</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Activated Charcoal or Toxin Binder</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Syringes (various sizes) &amp; Needles</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Drenching Gun (for oral meds)</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Vet's Phone Number (posted clearly)</label></li>
                    </ul>
                </div>
            </section>
             <section class="checklist-section bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">First 24 Hours of a New Kid's Life</h2>
                <p class="text-slate-600 mb-4">A checklist for the critical first day after birth.</p>
                <div class="grid md:grid-cols-2 gap-x-8 gap-y-4 dark-mode-readable">
                    <ul class="space-y-3">
                        <h3 class="font-semibold text-lg text-slate-800">Immediate Post-Birth</h3>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Clear airway (nose/mouth) of fluid.</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Dry kid vigorously with a clean towel.</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Dip umbilical cord/navel in 7% iodine.</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Ensure kid stands and nurses within the first hour.</label></li>
                         <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Get a birth weight.</label></li>
                    </ul>
                    <ul class="space-y-3">
                        <h3 class="font-semibold text-lg text-slate-800">Within 24 Hours</h3>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Confirm doe has passed the afterbirth (placenta).</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Check that kids are passing meconium (first black, tarry poop).</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Give Selenium/Vit E supplement (if in a deficient area).</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Ensure kids are bonding with dam and nursing regularly.</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Record all births, weights, and sexes in your records.</label></li>
                    </ul>
                </div>
            </section>
            <section class="checklist-section bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Kidding Kit Checklist</h2>
                <p class="text-slate-600 mb-4">Have this kit ready at least two weeks before your first doe is due.</p>
                <div class="grid md:grid-cols-2 gap-x-8 gap-y-4 dark-mode-readable">
                    <ul class="space-y-3">
                        <h3 class="font-semibold text-lg text-slate-800">For the Birth</h3>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Old Towels (lots of them!)</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Puppy Pads or Plastic Sheeting</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> OB Lube &amp; Disposable Gloves</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Headlamp or Flashlight</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Vet &amp; Mentor Phone Numbers</label></li>
                    </ul>
                    <ul class="space-y-3">
                        <h3 class="font-semibold text-lg text-slate-800">For the Kids</h3>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Bulb Syringe (to clear nose/mouth)</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> 7% Iodine Solution (for navels)</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Frozen Colostrum / Replacer</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Bottles &amp; Pritchard Nipples</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Heat Lamp (use with extreme caution)</label></li>
                        <li class="checklist-item"><label class="flex items-center"><input type="checkbox" /> Small Scale (for birth weights)</label></li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="flex justify-between items-center pt-12 no-print">
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors" href="/seasonal-care">
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Previous
            </a>
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 border border-transparent text-sm font-medium text-white rounded-md shadow-sm hover:bg-emerald-700 transition-colors" href="/recordkeeping-forms">
                Next
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>