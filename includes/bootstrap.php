<?php
declare(strict_types=1);

$SITE_NAME = $SITE_NAME ?? 'Goat Guide';
$PAGE_TITLE = $PAGE_TITLE ?? null;
$CANONICAL = $CANONICAL ?? null;

$EXTRA_HEAD = $EXTRA_HEAD ?? '';
$PAGE_SCRIPTS = $PAGE_SCRIPTS ?? [];
$PAGE_INLINE_JS = $PAGE_INLINE_JS ?? '';
$PAGE_FOOTER_HTML = $PAGE_FOOTER_HTML ?? '';

// With URL rewriting and root-relative paths, the $REL variable is no longer needed.
// All asset paths and links will now start with "/" to be relative to the site root.

/**
 * A helper function to safely escape strings for HTML output.
 * @param string $s The string to escape.
 * @return string The escaped string.
 */
function e(string $s): string
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}