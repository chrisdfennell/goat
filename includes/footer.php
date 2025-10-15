<?php
?>
</main>
<footer class="bg-slate-100 border-t border-slate-200">
    <div
    class="container mx-auto px-4 sm:px-6 lg:px-8 py-6 text-center text-sm text-slate-500">
    <p>Last updated 2025-10-14</p>
    <p class="mt-1">For education only; always consult a veterinarian for medical concerns.</p>
</div>
</footer>

<?php foreach ($PAGE_SCRIPTS as $src): ?>
<script src="<?= e($REL) ?><?= e(ltrim($src, '/')) ?>"></script>
<?php endforeach; ?>
<?php if (!empty($PAGE_INLINE_JS)) echo $PAGE_INLINE_JS; ?>

</body>
</html>
