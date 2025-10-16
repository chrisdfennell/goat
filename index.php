<?php
// This is the front controller. All "pretty URL" requests are routed through here.

require_once __DIR__ . '/includes/bootstrap.php';

// --- Basic Router ---
$requestUri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Handle requests for index.php gracefully
if ($requestUri === 'index.php' || $requestUri === 'index') {
    $requestUri = '';
}

// Define the mapping of pretty URLs to actual file paths.
$routes = [
    '' => 'home.php', // Handle the homepage
    'getting-started' => 'pages/01-getting-started.php',
    'housing-fencing' => 'pages/02-housing-fencing.php',
    'breeds' => 'pages/03-breeds.php',
    'nutrition-minerals' => 'pages/04-nutrition-minerals.php',
    'health-vaccines-parasites' => 'pages/05-health-vaccines-parasites.php',
    'hoof-care-grooming' => 'pages/06-hoof-care-grooming.php',
    'breeding-kidding' => 'pages/07-breeding-kidding.php',
    'bottle-feeding-kid-care' => 'pages/08-bottle-feeding-kid-care.php',
    'security-predator-proofing' => 'pages/09-security-predator-proofing.php',
    'behavior-training-enrichment' => 'pages/10-behavior-training-enrichment.php',
    'seasonal-care' => 'pages/11-seasonal-care.php',
    'checklists' => 'pages/12-checklists.php',
    'recordkeeping-forms' => 'pages/13-recordkeeping-forms.php',
    'common-problems-triage' => 'pages/14-common-problems-triage.php',
    'glossary-resources' => 'pages/15-glossary-resources.php',
    'calculators' => 'pages/16-calculators.php',
    'barn-pack' => 'pages/17-barn-pack.php',
];

// Check if the requested page exists in our routes.
if (array_key_exists($requestUri, $routes)) {
    $filePath = __DIR__ . '/' . $routes[$requestUri];
    
    // Final security check to ensure the file actually exists before including.
    if (file_exists($filePath)) {
        include $filePath;
        exit;
    }
}

// If no route was matched, or the file doesn't exist, show a 404 error.
http_response_code(404);
$PAGE_TITLE = '404 Not Found';
include __DIR__ . '/includes/header.php';
?>
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
    <h1 class="text-4xl font-bold text-slate-800">404 Not Found</h1>
    <p class="mt-4 text-lg text-slate-600">The page you were looking for could not be found.</p>
    <a href="/" class="mt-8 inline-block bg-emerald-600 text-white font-medium py-3 px-8 rounded-md hover:bg-emerald-700 transition-colors">Go to Homepage</a>
</main>
<?php
include __DIR__ . '/includes/footer.php';
?>