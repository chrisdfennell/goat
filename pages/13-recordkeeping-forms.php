<?php
$PAGE_TITLE = 'Record-Keeping Forms • Goat Care Guide';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com', 'https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.23/jspdf.plugin.autotable.min.js'];
$PAGE_INLINE_JS = <<<HTML
<script>
document.addEventListener('DOMContentLoaded', () => {

    function generatePDF() {
        const {
            jsPDF
        } = window.jspdf;
        const doc = new jsPDF({
            orientation: 'landscape'
        });
        let finalY = 15;

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
        };

        doc.setFontSize(18);
        doc.text("Goat Herd Records", 14, finalY);
        finalY += 10;

        // --- Individual Goat Records ---
        doc.setFontSize(12);
        doc.text("Individual Goat Records", 14, finalY);
        finalY += 5;
        doc.autoTable({
            ...tableStyles,
            html: '#individual-goat-table',
            startY: finalY,
            columnStyles: {
                0: {
                    fontStyle: 'bold',
                    fillColor: [241, 245, 249]
                }
            },
            didParseCell: function(data) {
                // Check if the raw element and its classList exist before using them
                if (data.row && data.row.raw && data.row.raw.classList && data.row.raw.classList.contains('h-4')) {
                    data.cell.styles.fillColor = [100, 116, 139]; // A dark slate color
                    data.cell.text = ''; // Ensure no text is rendered in the separator
                }
            }
        });
        finalY = doc.lastAutoTable.finalY + 10;
        if (finalY > 180) {
            doc.addPage();
            finalY = 20;
        }


        // --- Health & Medical Log ---
        doc.setFontSize(12);
        doc.text("Health & Medical Log", 14, finalY);
        finalY += 5;
        doc.autoTable({
            ...tableStyles,
            html: '#medical-log-table',
            startY: finalY,
        });
        finalY = doc.lastAutoTable.finalY + 10;
        if (finalY > 180) {
            doc.addPage();
            finalY = 20;
        }
        
        // --- Hoof Trimming & Health Checks ---
        doc.setFontSize(12);
        doc.text("Hoof Trimming & Health Checks", 14, finalY);
        finalY += 5;
        doc.autoTable({
            ...tableStyles,
            html: '#hoof-health-log-table',
            startY: finalY,
        });
        finalY = doc.lastAutoTable.finalY + 10;
        if (finalY > 180) {
            doc.addPage();
            finalY = 20;
        }


        // --- Breeding & Kidding Log ---
        doc.setFontSize(12);
        doc.text("Breeding & Kidding Log", 14, finalY);
        finalY += 5;
        doc.autoTable({
            ...tableStyles,
            html: '#breed-kid-log-table',
            startY: finalY,
        });
        finalY = doc.lastAutoTable.finalY + 10;
        if (finalY > 180) {
            doc.addPage();
            finalY = 20;
        }

        // --- Milk Production Log ---
        doc.setFontSize(12);
        doc.text("Milk Production Log", 14, finalY);
        finalY += 5;
        doc.autoTable({
            ...tableStyles,
            html: '#milk-log-table',
            startY: finalY,
        });

        doc.save('goat-record-forms.pdf');
    }

    function save() {
        document.querySelectorAll('[data-key]').forEach(el => {
            const key = el.dataset.key;
            if (key) localStorage.setItem('rec.' + key, el.innerHTML);
        });
        alert('Data saved to your browser!');
    }

    function load() {
        document.querySelectorAll('[data-key]').forEach(el => {
            const key = el.dataset.key;
            const savedData = localStorage.getItem('rec.' + key);
            if (savedData) el.innerHTML = savedData;
        });
    }

    function addRow(e) {
        const tableBodyId = e.target.dataset.tableBodyId;
        const tableBody = document.getElementById(tableBodyId);
        if (tableBody) {
            if (tableBodyId === 'individual-goat-log-body') {
                const template = `
                    <tr class="h-4 bg-slate-200"><td colspan="2"></td></tr>
                    <tr contenteditable="true"><td class="p-2 font-semibold w-1/4 bg-slate-50">Goat Name / ID:</td><td class="p-2"></td></tr>
                    <tr contenteditable="true"><td class="p-2 font-semibold w-1/4 bg-slate-50">Breed:</td><td class="p-2"></td></tr>
                    <tr contenteditable="true"><td class="p-2 font-semibold w-1/4 bg-slate-50">Date of Birth:</td><td class="p-2"></td></tr>
                    <tr contenteditable="true"><td class="p-2 font-semibold w-1/4 bg-slate-50">Dam (Mother):</td><td class="p-2"></td></tr>
                    <tr contenteditable="true"><td class="p-2 font-semibold w-1/4 bg-slate-50">Sire (Father):</td><td class="p-2"></td></tr>
                    <tr contenteditable="true"><td class="p-2 font-semibold w-1/4 bg-slate-50">Notes (markings, etc):</td><td class="p-2"></td></tr>
                `;
                tableBody.insertAdjacentHTML('beforeend', template);
            } else {
                const firstRow = tableBody.querySelector('tr');
                if (firstRow) {
                    const newRow = firstRow.cloneNode(true);
                    newRow.querySelectorAll('td').forEach(td => td.innerHTML = '');
                    tableBody.appendChild(newRow);
                }
            }
        }
    }

    document.getElementById('generate-pdf')?.addEventListener('click', generatePDF);
    document.getElementById('rec-save')?.addEventListener('click', save);
    document.getElementById('rec-load')?.addEventListener('click', load);
    document.querySelectorAll('.add-row-btn').forEach(btn => btn.addEventListener('click', addRow));

    load();
});
</script>
HTML;
include __DIR__ . '/../includes/header.php';
?>

<!-- Main Content -->
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
    <div class="max-w-6xl mx-auto">
        <section class="mb-12 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Herd Record-Keeping</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">Good records are the backbone of a well-managed herd. Enter your data, add rows as needed, and then generate a printable PDF of your records.</p>
        </section>
        <div class="bg-white p-6 rounded-lg shadow-md border border-slate-200 mb-8 no-print">
            <div class="flex flex-wrap items-center justify-center gap-4">
                <button class="bg-blue-600 text-white font-medium py-3 px-6 rounded-md hover:bg-blue-700 transition-colors" id="generate-pdf">Generate &amp; Download PDF</button>
                <button class="bg-emerald-600 text-white font-medium py-2 px-4 rounded-md hover:bg-emerald-700 transition-colors" id="rec-save">Save Data</button>
                <button class="bg-slate-200 text-slate-800 font-medium py-2 px-4 rounded-md hover:bg-slate-300 transition-colors" id="rec-load">Load Data</button>
                <p class="text-sm text-slate-500 basis-full text-center mt-2">Data is stored in your browser. Use 'Save' often and 'Generate PDF' for a permanent backup.</p>
            </div>
        </div>
        <div class="space-y-12">
            <section>
                <div class="flex justify-between items-center mb-4 border-b pb-2">
                    <h2 class="text-2xl font-bold text-slate-900">Individual Goat Records</h2>
                    <button class="add-row-btn no-print text-sm bg-slate-100 hover:bg-slate-200 text-slate-600 font-semibold py-1 px-3 rounded-md" data-table-body-id="individual-goat-log-body">Add Goat</button>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md border border-slate-200 overflow-x-auto">
                    <table class="w-full min-w-[600px] text-sm text-left" id="individual-goat-table">
                        <thead class="bg-slate-100">
                            <tr>
                                <th class="p-2 font-semibold">Field</th>
                                <th class="p-2 font-semibold">Information</th>
                            </tr>
                        </thead>
                        <tbody data-key="individual-goat-log" id="individual-goat-log-body">
                            <!-- Initial rows are templates -->
                            <tr class="goat-record-entry divide-y divide-slate-200" contenteditable="true">
                                <td class="p-2 font-semibold w-1/4 bg-slate-50">Goat Name / ID:</td>
                                <td class="p-2"></td>
                            </tr>
                            <tr contenteditable="true">
                                <td class="p-2 font-semibold w-1/4 bg-slate-50">Breed:</td>
                                <td class="p-2"></td>
                            </tr>
                            <tr contenteditable="true">
                                <td class="p-2 font-semibold w-1/4 bg-slate-50">Date of Birth:</td>
                                <td class="p-2"></td>
                            </tr>
                            <tr contenteditable="true">
                                <td class="p-2 font-semibold w-1/4 bg-slate-50">Dam (Mother):</td>
                                <td class="p-2"></td>
                            </tr>
                            <tr contenteditable="true">
                                <td class="p-2 font-semibold w-1/4 bg-slate-50">Sire (Father):</td>
                                <td class="p-2"></td>
                            </tr>
                            <tr contenteditable="true">
                                <td class="p-2 font-semibold w-1/4 bg-slate-50">Notes (markings, etc):</td>
                                <td class="p-2"></td>
                            </tr>
                            <tr class="h-4 bg-slate-200">
                                <td colspan="2"></td>
                            </tr>
                            <tr class="goat-record-entry divide-y divide-slate-200" contenteditable="true">
                                <td class="p-2 font-semibold w-1/4 bg-slate-50">Goat Name / ID:</td>
                                <td class="p-2"></td>
                            </tr>
                            <tr contenteditable="true">
                                <td class="p-2 font-semibold w-1/4 bg-slate-50">Breed:</td>
                                <td class="p-2"></td>
                            </tr>
                            <tr contenteditable="true">
                                <td class="p-2 font-semibold w-1/4 bg-slate-50">Date of Birth:</td>
                                <td class="p-2"></td>
                            </tr>
                            <tr contenteditable="true">
                                <td class="p-2 font-semibold w-1/4 bg-slate-50">Dam (Mother):</td>
                                <td class="p-2"></td>
                            </tr>
                            <tr contenteditable="true">
                                <td class="p-2 font-semibold w-1/4 bg-slate-50">Sire (Father):</td>
                                <td class="p-2"></td>
                            </tr>
                            <tr contenteditable="true">
                                <td class="p-2 font-semibold w-1/4 bg-slate-50">Notes (markings, etc):</td>
                                <td class="p-2"></td>
                            </tr>
                            <tr class="h-4 bg-slate-200">
                                <td colspan="2"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section>
                <div class="flex justify-between items-center mb-4 border-b pb-2">
                    <h2 class="text-2xl font-bold text-slate-900">Health &amp; Medical Log</h2>
                    <button class="add-row-btn no-print text-sm bg-slate-100 hover:bg-slate-200 text-slate-600 font-semibold py-1 px-3 rounded-md" data-table-body-id="medical-log-body">Add Row</button>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md border border-slate-200 overflow-x-auto">
                    <table class="w-full min-w-[800px] text-sm text-left" id="medical-log-table">
                        <thead class="bg-slate-100">
                            <tr>
                                <th class="p-2 font-semibold">Date</th>
                                <th class="p-2 font-semibold">Goat ID</th>
                                <th class="p-2 font-semibold">Weight</th>
                                <th class="p-2 font-semibold">Treatment/Vaccine</th>
                                <th class="p-2 font-semibold">Dose</th>
                                <th class="p-2 font-semibold">Notes (FAMACHA, Temp, etc)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200" contenteditable="true" data-key="medical-log" id="medical-log-body">
                            <tr>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                            </tr>
                            <tr>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                            </tr>
                            <tr>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
             <section>
                <div class="flex justify-between items-center mb-4 border-b pb-2">
                    <h2 class="text-2xl font-bold text-slate-900">Hoof Trimming &amp; Health Checks</h2>
                    <button class="add-row-btn no-print text-sm bg-slate-100 hover:bg-slate-200 text-slate-600 font-semibold py-1 px-3 rounded-md" data-table-body-id="hoof-health-log-body">Add Row</button>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md border border-slate-200 overflow-x-auto">
                    <table class="w-full min-w-[800px] text-sm text-left" id="hoof-health-log-table">
                        <thead class="bg-slate-100">
                            <tr>
                                <th class="p-2 font-semibold">Date</th>
                                <th class="p-2 font-semibold">Goat ID</th>
                                <th class="p-2 font-semibold">Hoof Condition (Good/Fair/Poor)</th>
                                <th class="p-2 font-semibold">FAMACHA Score</th>
                                <th class="p-2 font-semibold">Body Condition Score (1-5)</th>
                                <th class="p-2 font-semibold">Notes</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200" contenteditable="true" data-key="hoof-health-log" id="hoof-health-log-body">
                            <tr>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                            </tr>
                            <tr>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                            </tr>
                             <tr>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section>
                <div class="flex justify-between items-center mb-4 border-b pb-2">
                    <h2 class="text-2xl font-bold text-slate-900">Breeding &amp; Kidding Log</h2>
                    <button class="add-row-btn no-print text-sm bg-slate-100 hover:bg-slate-200 text-slate-600 font-semibold py-1 px-3 rounded-md" data-table-body-id="breed-kid-log-body">Add Row</button>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md border border-slate-200 overflow-x-auto">
                    <table class="w-full min-w-[900px] text-sm text-left" id="breed-kid-log-table">
                        <thead class="bg-slate-100">
                            <tr>
                                <th class="p-2 font-semibold">Doe</th>
                                <th class="p-2 font-semibold">Buck</th>
                                <th class="p-2 font-semibold">Breeding Date</th>
                                <th class="p-2 font-semibold">Est. Due Date</th>
                                <th class="p-2 font-semibold">Actual Kidding Date</th>
                                <th class="p-2 font-semibold">Kids (M/F, Names, Weight)</th>
                                <th class="p-2 font-semibold">Notes (Easy/Difficult Birth, etc)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200" contenteditable="true" data-key="breed-kid-log" id="breed-kid-log-body">
                            <tr>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                            </tr>
                            <tr>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section>
                <div class="flex justify-between items-center mb-4 border-b pb-2">
                    <h2 class="text-2xl font-bold text-slate-900">Milk Production Log</h2>
                    <button class="add-row-btn no-print text-sm bg-slate-100 hover:bg-slate-200 text-slate-600 font-semibold py-1 px-3 rounded-md" data-table-body-id="milk-log-body">Add Row</button>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md border border-slate-200 overflow-x-auto">
                    <table class="w-full min-w-[600px] text-sm text-left" id="milk-log-table">
                        <thead class="bg-slate-100">
                            <tr>
                                <th class="p-2 font-semibold">Date</th>
                                <th class="p-2 font-semibold">Doe Name</th>
                                <th class="p-2 font-semibold">AM Milk (lbs/oz)</th>
                                <th class="p-2 font-semibold">PM Milk (lbs/oz)</th>
                                <th class="p-2 font-semibold">Daily Total</th>
                                <th class="p-2 font-semibold">Notes (Feed changes, taste, etc)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200" contenteditable="true" data-key="milk-log" id="milk-log-body">
                            <tr>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                            </tr>
                            <tr>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                                <td class="p-2"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
        <div class="flex justify-between items-center pt-12 no-print">
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors" href="12-checklists.php">
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Previous
            </a>
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 border border-transparent text-sm font-medium text-white rounded-md shadow-sm hover:bg-emerald-700 transition-colors" href="14-common-problems-triage.php">
                Next
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>