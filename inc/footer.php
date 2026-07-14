<?php
/**
 * Expects (optional):
 *   $statusFile — the path shown in the status bar (defaults to ~/index.php)
 *   $contact    — used for the footer email link
 */
$statusFile    = $statusFile    ?? '~/index.php';
$statusSection = $statusSection ?? 'home';
$email         = $contact['email'] ?? 'marcuslooek@gmail.com';
?>
<footer class="footer">
    <div class="wrap footer-inner">
        <span>&copy; <?= date('Y') ?> Marcus Loo — designed &amp; built by hand</span>
        <span>PHP · Tailwind-free CSS · no framework</span>
    </div>
</footer>

<div class="statusbar" role="status" aria-live="off">
    <span class="sb-mode">NORMAL</span>
    <span class="sb-item"><?= e($statusFile) ?></span>
    <span class="sb-item accent" id="sb-section"><?= e($statusSection) ?></span>
    <span class="sb-item sb-hide">utf-8</span>
    <span class="sb-item sb-hide">php</span>
    <span class="sb-spacer"></span>
    <span class="sb-right">
        <span class="sb-hide">Kuala Lumpur</span>
        <span id="sb-pct">0%</span>
    </span>
</div>

<div class="toast" id="toast" role="status" aria-live="polite">
    <svg fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
    </svg>
    <span>Copied <?= e($email) ?></span>
</div>
