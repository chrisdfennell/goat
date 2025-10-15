# Goat Guide PHP Scaffold

This scaffold converts a static site into PHP with shared header/footer, dark/light theme,
and per-page footer script support.

## Structure
- `/includes/bootstrap.php` — shared helpers and variables
- `/includes/header.php` — shared `<head>` and site header
- `/includes/footer.php` — shared footer, emits per-page scripts
- `/assets/css/theme.css` — CSS variables + theme styles
- `/assets/js/theme-toggle.js` — dark/light toggle
- `/assets/js/*.js` — per-page scripts (optional)
- `/index.php` — example homepage
- `/pages/*.php` — example subpages

## Per-page customization
In each page, set any of these before including `header.php`:
```php
$PAGE_TITLE     = 'My Page Title';
$EXTRA_HEAD     = '<link rel="stylesheet" href="/assets/css/page.css">';
$PAGE_SCRIPTS   = ['/assets/js/page.js', 'https://cdn.example.com/lib.js'];
$PAGE_INLINE_JS = '<script>/* inline just for this page */</script>';
$PAGE_FOOTER_HTML = '<div class="notice">Custom footer block</div>';
```

Then:
```php
include __DIR__ . '/../includes/header.php';
// ... page body ...
include __DIR__ . '/../includes/footer.php';
```

## Dark/Light mode
- The `<html>` tag has `data-theme="light"` by default.
- `theme-toggle.js` reads `localStorage.theme` or the user's system preference and applies it.
- Clicking the Theme button toggles and persists the choice.

## Converting your existing HTML pages
1. Copy each HTML file to `/pages/NAME.php`.
2. Remove the `<html>`, `<head>`, and `<body>` wrappers — keep only the inner page content.
3. At the top of the file, define any page-specific variables (`$PAGE_TITLE`, `$PAGE_SCRIPTS`, etc.).
4. `include` the shared header and footer as shown in the example page.

## Unique per-page footer scripts
- Put script URLs in `$PAGE_SCRIPTS` (they'll be emitted at the end of `<body>`).
- If you had inline `<script>...</script>` in the old HTML, move it to `$PAGE_INLINE_JS`.
- If a page needs custom HTML in the footer (like a `<div id="gallery-controls">`), set `$PAGE_FOOTER_HTML`.

## Deploy
Upload this folder to your server (e.g., `/public_html`) and point your domain to it.
