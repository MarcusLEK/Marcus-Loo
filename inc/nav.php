<?php
/**
 * Expects (optional):
 *   $isHome — true on the homepage, so section links stay as bare fragments.
 */
$isHome = $isHome ?? false;
$hash   = $isHome ? '' : base_url('/');

$navItems = [
    ['id' => 'about',      'label' => 'About'],
    ['id' => 'experience', 'label' => 'Experience'],
    ['id' => 'stack',      'label' => 'Stack'],
    ['id' => 'projects',   'label' => 'Projects'],
    ['id' => 'contact',    'label' => 'Contact'],
];
?>
<a class="skip-link" href="#main">Skip to content</a>

<nav class="nav" aria-label="Primary">
    <div class="wrap nav-inner">
        <a class="brand" href="<?= e(base_url('/')) ?>">
            <span class="brand-mark" aria-hidden="true"></span>
            <span>marcus<span class="brand-slash">-</span>loo</span>
        </a>

        <div class="nav-links">
            <?php foreach ($navItems as $i => $item): ?>
            <a class="nav-link" data-nav-link="<?= e($item['id']) ?>" href="<?= e($hash . '#' . $item['id']) ?>">
                <i aria-hidden="true"><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></i>
                <?= e($item['label']) ?>
            </a>
            <?php endforeach; ?>
        </div>

        <div class="nav-tools">
            <button class="icon-btn" type="button" data-theme-toggle aria-label="Toggle colour theme">
                <svg class="theme-sun" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="12" cy="12" r="4" />
                    <path stroke-linecap="round" d="M12 2v2m0 16v2M2 12h2m16 0h2M4.9 4.9l1.4 1.4m11.4 11.4l1.4 1.4M19.1 4.9l-1.4 1.4M6.3 17.7l-1.4 1.4" />
                </svg>
                <svg class="theme-moon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" hidden>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.4 15.4A9 9 0 118.6 3.6a9 9 0 0011.8 11.8z" />
                </svg>
            </button>

            <button class="icon-btn nav-burger" type="button" aria-controls="nav-drawer" aria-expanded="false">
                <span class="sr-only">Menu</span>
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16" />
                </svg>
            </button>
        </div>
    </div>

    <div class="nav-drawer" id="nav-drawer">
        <?php foreach ($navItems as $i => $item): ?>
        <a class="nav-link" href="<?= e($hash . '#' . $item['id']) ?>">
            <i aria-hidden="true"><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></i>
            <?= e($item['label']) ?>
        </a>
        <?php endforeach; ?>
    </div>
</nav>
