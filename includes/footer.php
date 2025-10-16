<?php
/**
 * Site-wide footer.
 *
 * Closes the main HTML structure and injects page-specific scripts.
 */

// Generate the automated Previous/Next navigation links.
$prevNextLinks = getPrevNext($orderedPages, $currentSlug);

?>
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center pt-12 no-print">
        <?= $prevNextLinks['prev'] ?>
        <?= $prevNextLinks['next'] ?>
    </div>
</div>


<footer class="bg-slate-100 border-t border-slate-200 mt-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6 text-center text-sm text-slate-500">
        <p>Last content update: 2025-10-16</p>
        <p class="mt-1">For education only; always consult a veterinarian for medical concerns.</p>
        <p class="mt-1">&copy; <?= date('Y') ?> Goat Care Guide. All rights reserved.</p>
    </div>
</footer>

<?php if (!empty($PAGE_FOOTER_HTML)) echo $PAGE_FOOTER_HTML; ?>

<?php // Inject all page-specific script files ?>
<?php foreach ($PAGE_SCRIPTS as $src) : ?>
    <script src="<?= e($src) ?>"></script>
<?php endforeach; ?>

<?php // Inject inline JS for the page ?>
<?php if (!empty($PAGE_INLINE_JS)) echo $PAGE_INLINE_JS; ?>

</body>
</html>