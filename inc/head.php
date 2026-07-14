<?php
/**
 * Expects (all optional):
 *   $pageTitle, $pageDesc, $pageUrl, $pageRobots, $pageType
 *   $pageSchema — raw JSON-LD string, or an array of them
 */
$pageTitle  = $pageTitle  ?? 'Marcus Loo | Senior Full Stack Engineer';
$pageDesc   = $pageDesc   ?? 'Senior Full Stack Engineer & Project Lead based in Malaysia. Specialising in PHP, Laravel, and Vue.js.';
$pageUrl    = $pageUrl    ?? 'https://marcusloo.com';
$pageRobots = $pageRobots ?? 'index, follow';
$pageType   = $pageType   ?? 'website';
$pageImage  = 'https://marcusloo.com/assets/og.png';

$schemas = isset($pageSchema) ? (array) $pageSchema : [];
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <script>
        (function () {
            var d = document.documentElement;
            d.classList.add('js');
            var t;
            try { t = localStorage.getItem('theme'); } catch (e) {}
            if (!t) {
                t = window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark';
            }
            d.dataset.theme = t;
        })();
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= e($pageTitle) ?></title>
    <meta name="description" content="<?= e($pageDesc) ?>">
    <meta name="author" content="Marcus Loo">
    <meta name="robots" content="<?= e($pageRobots) ?>">
    <meta name="theme-color" content="#0b0b0c" media="(prefers-color-scheme: dark)">
    <meta name="theme-color" content="#f4f4f1" media="(prefers-color-scheme: light)">
    <link rel="canonical" href="<?= e($pageUrl) ?>">

    <meta property="og:type" content="<?= e($pageType) ?>">
    <meta property="og:url" content="<?= e($pageUrl) ?>">
    <meta property="og:site_name" content="Marcus Loo">
    <meta property="og:title" content="<?= e($pageTitle) ?>">
    <meta property="og:description" content="<?= e($pageDesc) ?>">
    <meta property="og:locale" content="en_MY">
    <meta property="og:image" content="<?= e($pageImage) ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Marcus Loo — Senior Full Stack Engineer">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($pageTitle) ?>">
    <meta name="twitter:description" content="<?= e($pageDesc) ?>">
    <meta name="twitter:image" content="<?= e($pageImage) ?>">

    <?php foreach ($schemas as $schema): ?>
    <script type="application/ld+json"><?= $schema ?></script>
    <?php endforeach; ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap">

    <link rel="stylesheet" href="<?= e(asset('/assets/site.css')) ?>">
    <script src="<?= e(asset('/assets/site.js')) ?>" defer></script>
    <link rel="icon"
        href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'><rect width='32' height='32' fill='%230b0b0c'/><rect x='9' y='7' width='6' height='18' fill='%23c6ff3d'/></svg>">
</head>
