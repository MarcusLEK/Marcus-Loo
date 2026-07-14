<?php
require __DIR__ . '/../inc/config.php';
require __DIR__ . '/../inc/content.php';

$isHome        = false;
$statusFile    = '~/projects/index.php';
$statusSection = 'projects';
$contact       = $content['contact'];
$projects      = $content['projects'];

$pageTitle = 'Projects | Marcus Loo';
$pageDesc  = 'Systems and tools designed and built by Marcus Loo — Senior Full Stack Engineer.';
$pageUrl   = 'https://marcusloo.com/projects';

$json = fn (array $data) => json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

$pageSchema = [
    $json([
        '@context'    => 'https://schema.org',
        '@type'       => 'CollectionPage',
        'name'        => 'Projects',
        'url'         => $pageUrl,
        'description' => $pageDesc,
        'mainEntity'  => [
            '@type'           => 'ItemList',
            'numberOfItems'   => count($projects),
            'itemListElement' => array_map(fn ($i, $p) => [
                '@type'    => 'ListItem',
                'position' => $i + 1,
                'name'     => $p['title'],
                'url'      => 'https://marcusloo.com' . $p['url'],
            ], array_keys($projects), $projects),
        ],
    ]),
    $json([
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => 'https://marcusloo.com'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Projects', 'item' => $pageUrl],
        ],
    ]),
];

require __DIR__ . '/../inc/head.php';
?>

<body>
<?php require __DIR__ . '/../inc/nav.php'; ?>

<main id="main">

    <section class="wrap page-head reveal">
        <nav class="crumbs" aria-label="Breadcrumb">
            <a href="<?= e(base_url('/')) ?>">~</a>
            <span class="sep">/</span>
            <span>projects</span>
        </nav>

        <h1>All Projects</h1>
        <p class="lede">
            Systems and tools I've designed and built — focused on solving real business
            problems with clean, maintainable code.
        </p>

        <div class="sec-head" style="margin-top:2.5rem">
            <span class="sec-idx"><?= str_pad((string) count($projects), 2, '0', STR_PAD_LEFT) ?></span>
            <h2><?= count($projects) === 1 ? 'Entry' : 'Entries' ?></h2>
            <span class="sec-rule"></span>
            <span class="sec-path">sorted by: recent</span>
        </div>
    </section>

    <section class="wrap reveal" style="padding-bottom:5.5rem">
        <div class="proj-grid">
            <?php foreach ($projects as $project): ?>
            <article class="proj panel-hover">
                <div class="proj-head">
                    <span class="file"><?= e($project['slug']) ?>/</span>
                    <span><?= e($project['year']) ?></span>
                </div>

                <div class="proj-body">
                    <div>
                        <h3><?= e($project['title']) ?></h3>
                        <p class="proj-sub"><?= e($project['subtitle']) ?></p>
                    </div>

                    <p class="proj-desc"><?= e($project['description']) ?></p>

                    <ul class="proj-points">
                        <?php foreach ($project['key_points'] as $point): ?>
                        <li><?= e($point) ?></li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="proj-actions">
                        <?php if (!empty($project['url'])): ?>
                        <a class="link-btn" href="<?= e(base_url($project['url'])) ?>">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                            Case study
                        </a>
                        <?php endif; ?>
                        <?php if (!empty($project['live'])): ?>
                        <a class="link-btn" href="<?= e($project['live']) ?>" target="_blank" rel="noopener noreferrer">Live</a>
                        <?php endif; ?>
                        <?php if (!empty($project['github'])): ?>
                        <a class="link-btn" href="<?= e($project['github']) ?>" target="_blank" rel="noopener noreferrer">GitHub</a>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="proj-foot tag-row">
                    <?php foreach ($project['tech'] as $tag): ?>
                    <span class="chip"><?= e($tag) ?></span>
                    <?php endforeach; ?>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </section>

</main>

<?php require __DIR__ . '/../inc/footer.php'; ?>
</body>

</html>
