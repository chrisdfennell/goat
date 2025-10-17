<?php
$PAGE_TITLE = 'Barn Pack • Goat Care Guide';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com'];
$PAGE_INLINE_JS = <<<HTML
<script>
document.addEventListener('DOMContentLoaded', () => {
    const KEY = 'barnpack.v1';

    function save() {
        const data = {};
        document.querySelectorAll('[contenteditable][data-key]').forEach(el => {
            data[el.dataset.key] = el.innerHTML;
        });
        localStorage.setItem(KEY, JSON.stringify(data));
    }

    function load() {
        try {
            const data = JSON.parse(localStorage.getItem(KEY) || '{}');
            document.querySelectorAll('[contenteditable][data-key]').forEach(el => {
                if (data[el.dataset.key] !== undefined) el.innerHTML = data[el.dataset.key];
            });
        } catch (e) {
            console.error("Could not load barn pack data", e);
        }
    }

    function clearAll() {
        if (confirm('Are you sure you want to clear all saved data on this page? This cannot be undone.')) {
            localStorage.removeItem(KEY);
            location.reload();
        }
    }

    function addRow(e) {
        const tableBodyId = e.target.dataset.tableBodyId;
        const tableBody = document.getElementById(tableBodyId);
        if (tableBody) {
            const firstRow = tableBody.querySelector('tr');
            if (firstRow) {
                const newRow = firstRow.cloneNode(true);
                newRow.querySelectorAll('td').forEach(td => td.innerHTML = '');
                tableBody.appendChild(newRow);
            }
        }
    }

    document.querySelector('main').addEventListener('input', e => {
        if (e.target.matches('[contenteditable]')) {
            save(); // Auto-save on any edit
        }
    });

    document.getElementById('bp-print')?.addEventListener('click', () => window.print());
    document.getElementById('bp-clear')?.addEventListener('click', clearAll);
    document.querySelectorAll('.add-row-btn').forEach(btn => btn.addEventListener('click', addRow));

    load();
});
</script>
HTML;
include __DIR__ . '/../includes/header.php';
?>

<!-- Main Content -->
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
    <div class="max-w-4xl mx-auto">
        <section class="mb-12 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Printable Barn Pack</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">This is a collection of essential, printable posters for your barn. Fill in your details, and they will be saved automatically. When ready, use the print button to create posters for your barn.</p>
            <div class="mt-6 flex flex-wrap gap-4 justify-center no-print">
                <button class="bg-emerald-600 text-white font-medium py-2 px-5 rounded-md hover:bg-emerald-700 transition-colors" id="bp-print">Print Pack</button>
                <button class="bg-red-600 text-white font-medium py-2 px-5 rounded-md hover:bg-red-700 transition-colors" id="bp-clear">Reset All Data</button>
            </div>
            <p class="text-xs text-slate-500 mt-4 no-print">Data is saved automatically to this device's browser. Use 'Reset' to clear it.</p>
        </section>
        <div class="space-y-8">
             <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200 printable-card">
                <h2 class="text-2xl font-bold text-center text-slate-900 mb-4 uppercase">Meet the Goats</h2>
                <p class="text-center text-sm text-slate-500 mb-4">Add photos and details for farm sitters or visitors.</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
                    <!-- Goat 1 -->
                    <div class="bg-slate-50 p-3 rounded-lg flex flex-col items-center">
                        <div class="w-32 h-32 bg-slate-200 rounded-full mb-3 flex items-center justify-center text-slate-400 no-print">
                            <p class="text-xs text-center">Your Photo Here</p>
                        </div>
                        <strong class="block text-slate-800 text-lg" contenteditable="true" data-key="goat1-name">Goat Name</strong>
                        <div class="text-center mt-1" contenteditable="true" data-key="goat1-details">Breed, DOB, and identifying marks.</div>
                    </div>
                    <!-- Goat 2 -->
                    <div class="bg-slate-50 p-3 rounded-lg flex flex-col items-center">
                        <div class="w-32 h-32 bg-slate-200 rounded-full mb-3 flex items-center justify-center text-slate-400 no-print">
                             <p class="text-xs text-center">Your Photo Here</p>
                        </div>
                        <strong class="block text-slate-800 text-lg" contenteditable="true" data-key="goat2-name">Goat Name</strong>
                        <div class="text-center mt-1" contenteditable="true" data-key="goat2-details">Breed, DOB, and identifying marks.</div>
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200 printable-card">
                <h2 class="text-2xl font-bold text-center text-slate-900 mb-4 uppercase">Emergency Contacts</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm" data-key="emergency-contacts">
                    <div class="bg-slate-50 p-3 rounded-lg"><strong class="block text-slate-800">Primary Vet:</strong>
                        <div class="mt-1 min-h-[4em]" contenteditable="true" data-key="vet-primary"></div>
                    </div>
                    <div class="bg-slate-50 p-3 rounded-lg"><strong class="block text-slate-800">Emergency Vet Clinic:</strong>
                        <div class="mt-1 min-h-[4em]" contenteditable="true" data-key="vet-emergency"></div>
                    </div>
                    <div class="bg-slate-50 p-3 rounded-lg"><strong class="block text-slate-800">Backup Help / Neighbor:</strong>
                        <div class="mt-1 min-h-[3em]" contenteditable="true" data-key="backup-help"></div>
                    </div>
                    <div class="bg-slate-50 p-3 rounded-lg"><strong class="block text-slate-800">Poison Control:</strong>
                        <div class="mt-1 min-h-[3em]" contenteditable="true" data-key="poison-control">ASPCA: (888) 426-4435</div>
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200 printable-card">
                <h2 class="text-2xl font-bold text-center text-slate-900 mb-4 uppercase">Normal Goat Vitals</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-slate-100">
                            <tr>
                                <th class="p-3 text-sm font-semibold text-slate-600">Vital Sign</th>
                                <th class="p-3 text-sm font-semibold text-slate-600">Adult Range</th>
                                <th class="p-3 text-sm font-semibold text-slate-600">Kid Range</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200">
                            <tr>
                                <td class="p-3 font-medium">Temperature</td>
                                <td class="p-3">101.5 - 103.5 °F (38.6 - 39.7 °C)</td>
                                <td class="p-3">102.0 - 104.0 °F (38.9 - 40 °C)</td>
                            </tr>
                            <tr>
                                <td class="p-3 font-medium">Heart Rate</td>
                                <td class="p-3">70 - 90 bpm</td>
                                <td class="p-3">100 - 140 bpm</td>
                            </tr>
                            <tr>
                                <td class="p-3 font-medium">Respiration</td>
                                <td class="p-3">12 - 30 breaths/min</td>
                                <td class="p-3">20 - 40 breaths/min</td>
                            </tr>
                            <tr>
                                <td class="p-3 font-medium"><a href="/glossary-resources#rumen" class="text-emerald-600 hover:underline font-semibold">Rumen</a> Contractions</td>
                                <td class="p-3">1 - 3 per minute</td>
                                <td class="p-3">N/A</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
             <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200 printable-card">
                <h2 class="text-2xl font-bold text-center text-slate-900 mb-4 uppercase">Common Plants Poisonous to Goats</h2>
                <p class="text-center text-sm text-slate-500 mb-4">This is not a complete list. When in doubt, assume a plant is toxic. Goats are especially vulnerable to ornamental shrubs.</p>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 text-center font-medium text-red-700">
                   <p>Azalea</p>
                   <p>Rhododendron</p>
                   <p>Yew</p>
                   <p>Oleander</p>
                   <p>Lantana</p>
                   <p>Milkweed</p>
                   <p>Bracken Fern</p>
                   <p>Lily of the Valley</p>
                   <p>Wilted Cherry/Plum Leaves</p>
                </div>
                 <p class="text-center text-xs text-slate-500 mt-4">Symptoms of poisoning can include foaming at the mouth, staggering, crying, vomiting, and bloat. Call a vet immediately if you suspect poisoning.</p>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200 printable-card">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-center text-slate-900 uppercase">Feed Chart</h2>
                    <button class="add-row-btn no-print text-sm bg-slate-100 hover:bg-slate-200 text-slate-600 font-semibold py-1 px-3 rounded-md" data-table-body-id="feed-chart-body">Add Row</button>
                </div>
                <p class="text-center text-sm text-slate-500 mb-4">Post this in the feed room for clear instructions for farm sitters.</p>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-slate-100">
                            <tr>
                                <th class="p-3 text-sm font-semibold text-slate-600">Goat / Group Name</th>
                                <th class="p-3 text-sm font-semibold text-slate-600">AM Feed</th>
                                <th class="p-3 text-sm font-semibold text-slate-600">PM Feed</th>
                                <th class="p-3 text-sm font-semibold text-slate-600">Notes</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200" contenteditable="true" data-key="feed-chart" id="feed-chart-body">
                            <tr>
                                <td class="p-3 h-10"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td>
                            </tr>
                            <tr>
                                <td class="p-3 h-10"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200 printable-card">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-center text-slate-900 uppercase">Medication &amp; Withdrawal</h2>
                    <button class="add-row-btn no-print text-sm bg-slate-100 hover:bg-slate-200 text-slate-600 font-semibold py-1 px-3 rounded-md" data-table-body-id="withdrawal-chart-body">Add Row</button>
                </div>
                <p class="text-center text-sm text-slate-500 mb-4">Record any medications given and their withdrawal times for meat and milk.</p>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-slate-100">
                            <tr>
                                <th class="p-3 text-sm font-semibold text-slate-600">Date Given</th>
                                <th class="p-3 text-sm font-semibold text-slate-600">Goat ID</th>
                                <th class="p-3 text-sm font-semibold text-slate-600">Medication</th>
                                <th class="p-3 text-sm font-semibold text-slate-600">Milk Safe Date</th>
                                <th class="p-3 text-sm font-semibold text-slate-600">Meat Safe Date</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200" contenteditable="true" data-key="withdrawal-chart" id="withdrawal-chart-body">
                            <tr>
                                <td class="p-3 h-10"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td>
                            </tr>
                             <tr>
                                <td class="p-3 h-10"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td><td class="p-3"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
        <div class="flex justify-between items-center pt-12 no-print">
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors" href="/calculators">
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Previous
            </a>
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 border border-transparent text-sm font-medium text-white rounded-md shadow-sm hover:bg-emerald-700 transition-colors" href="/">
                Back to Home
                <svg class="rotate-180" fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
            </a>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>