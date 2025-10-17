<?php
declare(strict_types=1);

$SITE_NAME = $SITE_NAME ?? 'Goat Guide';
$PAGE_TITLE = $PAGE_TITLE ?? null;
$CANONICAL = $CANONICAL ?? null;

$EXTRA_HEAD = $EXTRA_HEAD ?? '';
$PAGE_SCRIPTS = $PAGE_SCRIPTS ?? [];
$PAGE_INLINE_JS = $PAGE_INLINE_JS ?? '';
$PAGE_FOOTER_HTML = $PAGE_FOOTER_HTML ?? '';

// Determine relative path for assets. This is more robust.
$isSubPage = strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false;
$REL = $isSubPage ? '../' : '';

function e(string $s): string
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}