<?php
$PAGE_TITLE = 'Goat Care: Complete Beginner’s Guide';
include __DIR__ . '/includes/header.php';
?>

<!-- Main Content -->
<main>
    <!-- Hero Section -->
    <section class="hero-bg text-white">
        <div class="bg-black bg-opacity-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-32 text-center">
                <h1 class="text-4xl sm:text-6xl font-bold tracking-tight">A Practical Guide to Raising Healthy Goats</h1>
                <p class="mt-6 text-lg sm:text-xl max-w-3xl mx-auto">From setup and breed selection to nutrition, health, and kidding—find clear, actionable advice for your herd.</p>
                <a class="mt-8 inline-block bg-emerald-600 text-white font-medium py-3 px-8 rounded-md hover:bg-emerald-700 transition-colors" href="/getting-started">Start Your Journey →</a>
            </div>
        </div>
    </section>
    <!-- Topics Section -->
    <section class="py-16 sm:py-24 bg-slate-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900">Explore the Guide</h2>
                <p class="mt-4 text-lg text-slate-600">All the essentials, organized by topic.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card: Getting Started -->
                <a class="block bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow border border-slate-200" href="/getting-started">
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full mb-3">Start Here</span>
                    <h3 class="text-xl font-bold text-slate-900">Getting Started</h3>
                    <p class="mt-2 text-slate-600">Plan your space, budget, and first-week checklist for a successful start.</p>
                </a>
                <!-- Card: Housing & Fencing -->
                <a class="block bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow border border-slate-200" href="/housing-fencing">
                    <span class="inline-block bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full mb-3">Housing</span>
                    <h3 class="text-xl font-bold text-slate-900">Barn &amp; Fencing</h3>
                    <p class="mt-2 text-slate-600">Design a draft-free shelter and predator-resistant fencing with secure gates.</p>
                </a>
                <!-- Card: Breeds -->
                <a class="block bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow border border-slate-200" href="/breeds">
                    <span class="inline-block bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded-full mb-3">Breeds</span>
                    <h3 class="text-xl font-bold text-slate-900">Breeds &amp; Choosing</h3>
                    <p class="mt-2 text-slate-600">Compare dairy, meat, and pet breeds to find the right fit for your goals.</p>
                </a>
                <!-- Card: Nutrition -->
                <a class="block bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow border border-slate-200" href="/nutrition-minerals">
                    <span class="inline-block bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded-full mb-3">Nutrition</span>
                    <h3 class="text-xl font-bold text-slate-900">Feeding &amp; Minerals</h3>
                    <p class="mt-2 text-slate-600">Learn about hay, browse, grain, minerals, and providing clean water.</p>
                </a>
                <!-- Card: Health -->
                <a class="block bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow border border-slate-200" href="/health-vaccines-parasites">
                    <span class="inline-block bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded-full mb-3">Health</span>
                    <h3 class="text-xl font-bold text-slate-900">Vaccines &amp; Parasites</h3>
                    <p class="mt-2 text-slate-600">Understand CDT shots, FAMACHA scoring, and body condition checks.</p>
                </a>
                <!-- Card: Tools -->
                <a class="block bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow border border-slate-200" href="/checklists">
                    <span class="inline-block bg-gray-100 text-gray-800 text-xs font-semibold px-2.5 py-0.5 rounded-full mb-3">Tools</span>
                    <h3 class="text-xl font-bold text-slate-900">Checklists &amp; Records</h3>
                    <p class="mt-2 text-slate-600">Use our printable checklists and record-keeping forms to stay organized.</p>
                </a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>