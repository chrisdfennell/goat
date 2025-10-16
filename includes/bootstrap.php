<?php
declare(strict_types=1);

$SITE_NAME = $SITE_NAME ?? 'Goat Guide';
$PAGE_TITLE = $PAGE_TITLE ?? null;
$CANONICAL = $CANONICAL ?? null;

$EXTRA_HEAD = $EXTRA_HEAD ?? '';
$PAGE_SCRIPTS = $PAGE_SCRIPTS ?? [];
$PAGE_INLINE_JS = $PAGE_INLINE_JS ?? '';
$PAGE_FOOTER_HTML = $PAGE_FOOTER_HTML ?? '';

// --- Smart Path and Navigation System ---

// Define the complete, ordered list of all pages in the guide.
$orderedPages = [
    '' => 'Home',
    'getting-started' => 'Getting Started',
    'housing-fencing' => 'Housing & Fencing',
    'breeds' => 'Breeds & Choosing',
    'nutrition-minerals' => 'Nutrition',
    'health-vaccines-parasites' => 'Health',
    'hoof-care-grooming' => 'Hoof Care',
    'breeding-kidding' => 'Breeding & Kidding',
    'bottle-feeding-kid-care' => 'Bottle Feeding & Kids',
    'security-predator-proofing' => 'Security',
    'behavior-training-enrichment' => 'Behavior',
    'seasonal-care' => 'Seasonal',
    'checklists' => 'Checklists',
    'recordkeeping-forms' => 'Records',
    'common-problems-triage' => 'Triage',
    'glossary-resources' => 'Glossary',
    'calculators' => 'Calculators',
    'barn-pack' => 'Barn Pack',
];

// Determine the current page's slug from the request URI.
$currentSlug = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
if ($currentSlug === 'index.php' || $currentSlug === 'index') {
    $currentSlug = '';
}


/**
 * Generates the "Previous" and "Next" navigation links automatically.
 *
 * @param array $pages The ordered list of all site pages.
 * @param string $current The slug of the current page.
 * @return array An array containing the HTML for 'prev' and 'next' links.
 */
function getPrevNext(array $pages, string $current): array
{
    $keys = array_keys($pages);
    $currentIndex = array_search($current, $keys);
    $links = ['prev' => '', 'next' => ''];

    // Generate Previous Link
    if ($currentIndex > 0) {
        $prevKey = $keys[$currentIndex - 1];
        $prevText = ($prevKey === '') ? 'Home' : 'Previous';
        $prevHref = ($prevKey === '') ? '/' : '/' . e($prevKey);
        $links['prev'] = <<<HTML
<a class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-300 text-sm font-medium text-slate-700 rounded-md shadow-sm hover:bg-slate-50 transition-colors" href="{$prevHref}">
    <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
        <path d="m15 18-6-6 6-6"></path>
    </svg>
    {$prevText}
</a>
HTML;
    }

    // Generate Next Link
    if ($currentIndex !== false && $currentIndex < (count($keys) - 1)) {
        $nextKey = $keys[$currentIndex + 1];
        $nextHref = '/' . e($nextKey);
        $links['next'] = <<<HTML
<a class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-600 border border-transparent text-sm font-medium text-white rounded-md shadow-sm hover:bg-emerald-700 transition-colors" href="{$nextHref}">
    Next
    <svg fill="none" height="16" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
        <path d="m9 18 6-6-6-6"></path>
    </svg>
</a>
HTML;
    }

    return $links;
}


/**
 * Escapes a string for safe HTML output.
 * Handles null values gracefully to prevent fatal errors.
 */
function e(?string $s): string
{
    return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8');
}