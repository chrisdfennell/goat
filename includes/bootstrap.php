<?php
declare(strict_types=1);

$SITE_NAME = $SITE_NAME ?? 'Goat Guide';
$PAGE_TITLE = $PAGE_TITLE ?? null;
$CANONICAL = $CANONICAL ?? null;

$EXTRA_HEAD = $EXTRA_HEAD ?? '';
$PAGE_SCRIPTS = $PAGE_SCRIPTS ?? [];
$PAGE_INLINE_JS = $PAGE_INLINE_JS ?? '';
$PAGE_FOOTER_HTML = $PAGE_FOOTER_HTML ?? '';

// REL for relative linking from root vs /pages/
$scriptDir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
$REL = ($scriptDir === '' || $scriptDir === '/') ? '' : '../';

function e(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
