<?php
header('Content-Type: application/xml; charset=utf-8');

$baseUrl = 'https://goatcare101.com';
$lastMod = '2025-10-16';

$pages = ['', 'getting-started', 'housing-fencing', 'breeds-choosing', 'nutrition-minerals',
          'health-vaccines-parasites','hoof-care-grooming','breeding-kidding','bottle-feeding-kid-care',
          'security-predator-proofing','behavior-training-enrichment','seasonal-care','checklists',
          'recordkeeping-forms','common-problems-triage','glossary-resources','calculators','barn-pack'];

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $page): ?>
  <url>
    <loc><?= $page === '' ? $baseUrl . '/' : rtrim($baseUrl, '/') . '/' . $page ?></loc>
    <lastmod><?= $lastMod ?></lastmod>
    <priority><?= $page === '' ? '1.00' : '0.80' ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
<?php exit; ?>