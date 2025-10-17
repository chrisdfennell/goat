<?php
$PAGE_TITLE = 'Security & Predator-Proofing • Goat Care Guide';
$PAGE_SCRIPTS = ['https://cdn.tailwindcss.com'];
$PAGE_INLINE_JS = '';
include __DIR__ . '/../includes/header.php';
?>

<!-- Main Content -->
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
    <div class="max-w-4xl mx-auto">
        <section class="mb-12 text-center">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight mb-4">Security &amp; Predator Proofing</h1>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">Protecting your herd from predators is a 24/7 job. A layered security strategy is the most effective approach, combining physical barriers with deterrents and guardians.</p>
        </section>
        <div class="space-y-12">
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Know Your Enemy: Common Predators</h2>
                <p class="text-slate-600 mb-4">The most common threats to goats vary by region, but often include:</p>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                    <div>
                        <p class="mt-2 font-semibold">Coyotes</p>
                    </div>
                    <div>
                        <p class="mt-2 font-semibold">Stray/Loose Dogs</p>
                    </div>
                    <div>
                        <p class="mt-2 font-semibold">Cougars/Bobcats</p>
                    </div>
                    <div>
                        <p class="mt-2 font-semibold">Birds of Prey (for kids)</p>
                    </div>
                </div>
                <p class="mt-4 text-slate-600">Remember, a neighbor's friendly pet dog can become a deadly predator when its instincts take over. Stray dogs are one of the biggest threats to goat herds.</p>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Layer 1: The Perimeter Fence</h2>
                <p class="text-slate-600 mb-4">Your main fence is your first and most important line of defense.</p>
                <ul class="space-y-3 list-disc list-inside text-slate-700">
                    <li><strong>Woven Wire is Best:</strong> 4-foot tall (or higher) 2"x4" no-climb horse fence or 4"x4" goat and sheep fence is ideal. It's strong and the small openings prevent predators from getting through and goats from getting their heads stuck.</li>
                    <li><strong>Electric Strands:</strong> Adding one or two "hot" strands of electric wire can be a powerful deterrent. Place one strand near the top of the fence to stop climbers (like cougars) and one near the bottom (6 inches off the ground) to stop diggers (like coyotes and dogs).</li>
                    <li><strong>Maintenance:</strong> Walk your fence line weekly. Check for downed limbs, gaps under the fence, and ensure your electric charger is working.</li>
                </ul>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Layer 2: The Night Pen &amp; Barn</h2>
                <p class="text-slate-600 mb-4">Most predator attacks happen at night. A secure night-time enclosure is critical.</p>
                <div class="grid md:grid-cols-2 gap-6 items-center">
                    <div>
                        <ul class="space-y-3 list-disc list-inside text-slate-700">
                            <li><strong>Solid Doors &amp; Latches:</strong> Your barn or shelter must have a solid door that can be securely latched.</li>
                            <li><strong>Secure Openings:</strong> Cover all windows and vents with sturdy hardware cloth to prevent smaller predators like raccoons or weasels from entering.</li>
                            <li><strong>Deterrents:</strong> Motion-activated lights or radios can startle and deter nocturnal predators.</li>
                        </ul>
                    </div>
                    <div>
                        <img alt="A sturdy barn door with a two-step secure latch." class="rounded-lg shadow-sm" src="/assets/site/assets/secure-barn-door.jpg" />
                    </div>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Layer 3: Guardian Animals</h2>
                <p class="text-slate-600 mb-4">For those with high predator pressure, a guardian animal can be a lifesaver. They live with the herd full-time.</p>
                <div class="overflow-x-auto">
                    <table class="w-full text-left mt-4">
                        <thead class="bg-slate-100">
                            <tr>
                                <th class="p-3 text-sm font-semibold text-slate-600">Animal</th>
                                <th class="p-3 text-sm font-semibold text-slate-600">Pros</th>
                                <th class="p-3 text-sm font-semibold text-slate-600">Cons</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 text-sm">
                            <tr>
                                <td class="p-3 font-medium">Livestock Guardian Dog (LGD)</td>
                                <td class="p-3">Extremely effective against a wide range of predators. Bonds deeply with the herd and is actively protective. Their barking alone is a major deterrent.</td>
                                <td class="p-3">Requires significant training and socialization from a young age to be reliable. Can be prone to barking or roaming if not properly contained. Represents a significant long-term commitment.</td>
                            </tr>
                            <tr>
                                <td class="p-3 font-medium">Donkey (Standard or larger)</td>
                                <td class="p-3">Natural and aggressive hatred of canines (dogs, coyotes). Their loud bray is an excellent alarm call for the whole farm.</td>
                                <td class="p-3">Can be overly aggressive towards newborn <a href="/glossary-resources#kid" class="text-emerald-600 hover:underline font-semibold">kids</a> or even the herd's own dogs. Generally only effective against canine threats, not cougars or bears.</td>
                            </tr>
                            <tr>
                                <td class="p-3 font-medium">Llama</td>
                                <td class="p-3">Very alert and territorial. Will emit a startling alarm call and charge, stomp, or spit at threats. Can be effective against single predators.</td>
                                <td class="p-3">May not be as effective against a determined pack of predators. Requires specialized care different from goats. Some llamas are more interested in grazing than guarding.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section class="bg-white p-6 rounded-lg shadow-md border border-slate-200">
                <h2 class="text-2xl font-bold text-slate-900 mb-4">Human Security &amp; Theft Prevention</h2>
                <p class="text-slate-600 mb-4">Unfortunately, animal theft is a real concern, especially for friendly, well-bred goats. It's wise to take some precautions against human threats as well.</p>
                 <ul class="space-y-3 list-disc list-inside text-slate-700">
                    <li><strong>Visibility:</strong> Keep your night pen and kidding areas out of easy sight from the main road if possible.</li>
                    <li><strong>Signage:</strong> Prominently display "Private Property" and "Biosecurity in Effect" signs. This can deter casual visitors and signals that you take your herd's health and security seriously.</li>
                    <li><strong>Cameras:</strong> Simple, affordable farm or game cameras placed at key access points can be a powerful deterrent and are invaluable for identification if a theft does occur.</li>
                    <li><strong>Know Your Neighbors:</strong> A strong relationship with your neighbors is one of the best security tools. They can be an extra set of eyes and ears when you are not home.</li>
                </ul>
            </section>
        </div>
        <div class="flex justify-between items-center pt-12">
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors" href="/bottle-feeding-kid-care">
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                Previous
            </a>
            <a class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 border border-transparent text-sm font-medium text-white rounded-md shadow-sm hover:bg-emerald-700 transition-colors" href="/behavior-training-enrichment">
                Next
                <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </a>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>