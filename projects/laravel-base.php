<?php
require __DIR__ . '/../inc/config.php';
require __DIR__ . '/../inc/content.php';

$project = [
    'title'    => 'Laravel Rapid Development Toolkit',
    'subtitle' => 'Internal Library',
    'tagline'  => 'Eliminate boilerplate. Ship faster. Stay consistent.',
    'tech'     => ['PHP', 'Laravel', 'MySQL'],
    'github'   => '',
    'live'     => '',

    'what' => 'A reusable internal toolkit built on top of Laravel to accelerate the development of custom business applications by eliminating repetitive CRUD implementation and enforcing a consistent architecture across all projects.',

    'problems' => [
        'CRUD interfaces rebuilt from scratch for every module',
        'Manually re-implementing validation, search, and REST APIs',
        'Repeated setup for roles, permissions, and file handling',
        'Slower delivery timelines due to boilerplate overhead',
        'Inconsistent implementations drifting across projects',
        'Reduced focus on actual business logic',
    ],

    'solution' => 'A base model-driven system where extending a single core class automatically enables a full suite of built-in features. By simply extending the base model, each entity instantly supports CRUD operations, configurable features, and a consistent structure across the entire application.',

    'capabilities' => [
        ['title' => 'Auto CRUD Generation',  'desc' => 'Prebuilt create / read / update / delete flows with override support for custom business logic.'],
        ['title' => 'File Management',       'desc' => 'Built-in file upload and storage handling, abstracted away from each module.'],
        ['title' => 'Import / Export',       'desc' => 'Standardised data import and export functionality available out of the box.'],
        ['title' => 'Search & Filtering',    'desc' => 'Configurable searchable columns defined directly on the model — no query boilerplate.'],
        ['title' => 'Dynamic Index Views',   'desc' => 'Define which fields appear in listing pages via model configuration, not view files.'],
        ['title' => 'Roles & Permissions',   'desc' => 'Access control available out of the box, integrated into every generated route.'],
    ],

    'code_note' => 'Minimal configuration enables a fully functional CRUD module with search, API endpoints, and UI support. Not all features are shown here — this is a private project.',

    'before' => [
        'Build CRUD logic for every module individually',
        'Manually implement validation, search, and APIs',
        'Repeated setup for roles, permissions, and file handling',
    ],
    'after' => [
        'Only implement business-specific logic',
        'Core features available instantly via model extension',
        'Consistent structure enforced across all modules',
    ],

    'impact' => [
        ['stat' => '70–80%',    'label' => 'Reduction in development time'],
        ['stat' => '~1 week',   'label' => 'To deliver a customised system'],
        ['stat' => '100%',      'label' => 'Consistent architecture across projects'],
        ['stat' => 'Near zero', 'label' => 'Repetitive boilerplate per module'],
    ],
];

$isHome        = false;
$statusFile    = '~/projects/laravel-base.php';
$statusSection = 'laravel-base';
$contact       = $content['contact'];

$pageTitle = $project['title'] . ' | Marcus Loo';
$pageDesc  = $project['tagline'] . ' A Laravel toolkit that cut development time by 70–80% by eliminating repetitive CRUD and boilerplate.';
$pageUrl   = 'https://marcusloo.com/projects/laravel-base';
$pageType  = 'article';

$json = fn (array $data) => json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

$pageSchema = [
    $json([
        '@context'         => 'https://schema.org',
        '@type'            => 'TechArticle',
        'headline'         => $project['title'],
        'description'      => $project['tagline'],
        'url'              => $pageUrl,
        'image'            => 'https://marcusloo.com/assets/og.png',
        'author'           => ['@type' => 'Person', 'name' => 'Marcus Loo', 'url' => 'https://marcusloo.com'],
        'publisher'        => ['@type' => 'Person', 'name' => 'Marcus Loo'],
        'about'            => $project['tech'],
        'keywords'         => implode(', ', $project['tech']),
        'proficiencyLevel' => 'Expert',
    ]),
    $json([
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',        'item' => 'https://marcusloo.com'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Projects',    'item' => 'https://marcusloo.com/projects'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => $project['title'], 'item' => $pageUrl],
        ],
    ]),
];

require __DIR__ . '/../inc/head.php';
?>

<body>
<?php require __DIR__ . '/../inc/nav.php'; ?>

<main id="main">

    <!-- ===== Header ===== -->
    <section class="wrap page-head reveal">
        <nav class="crumbs" aria-label="Breadcrumb">
            <a href="<?= e(base_url('/')) ?>">~</a>
            <span class="sep">/</span>
            <a href="<?= e(base_url('/projects')) ?>">projects</a>
            <span class="sep">/</span>
            <span>laravel-base</span>
        </nav>

        <p class="hero-kicker"><?= e($project['subtitle']) ?></p>
        <h1><?= e($project['title']) ?></h1>
        <p class="lede"><?= e($project['tagline']) ?></p>

        <div class="tag-row" style="margin-top:1.75rem">
            <?php foreach ($project['tech'] as $tag): ?>
            <span class="chip chip-accent"><?= e($tag) ?></span>
            <?php endforeach; ?>
        </div>

        <div class="divider" style="margin-top:3rem"></div>
    </section>

    <!-- ===== Overview ===== -->
    <section class="wrap section reveal" style="padding-bottom:0">
        <div class="sec-head">
            <span class="sec-idx">01</span>
            <h2>Overview</h2>
            <span class="sec-rule"></span>
        </div>
        <p class="prose" style="max-width:52rem"><?= e($project['what']) ?></p>
    </section>

    <!-- ===== Problem ===== -->
    <section class="wrap section reveal" style="padding-bottom:0">
        <div class="sec-head">
            <span class="sec-idx">02</span>
            <h2>The Problem</h2>
            <span class="sec-rule"></span>
        </div>
        <ul class="prob">
            <?php foreach ($project['problems'] as $problem): ?>
            <li><?= e($problem) ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- ===== Solution ===== -->
    <section class="wrap section reveal" style="padding-bottom:0">
        <div class="sec-head">
            <span class="sec-idx">03</span>
            <h2>The Solution</h2>
            <span class="sec-rule"></span>
        </div>

        <p class="prose" style="max-width:52rem;margin-bottom:1.75rem"><?= e($project['solution']) ?></p>

        <div class="code">
            <div class="code-bar">
                <span>app/Models/Product.php</span>
                <span aria-hidden="true">php</span>
            </div>
            <pre><code><span class="t-key">class</span> <span class="t-cls">Product</span> <span class="t-key">extends</span> <span class="t-cls">BaseModel</span>
{
    <span class="t-com">// columns that are searchable</span>
    <span class="t-key">protected</span> <span class="t-var">$searchable</span> = [<span class="t-str">'name'</span>, <span class="t-str">'sku'</span>];

    <span class="t-com">// columns shown on the index listing</span>
    <span class="t-key">protected</span> <span class="t-var">$indexFields</span> = [<span class="t-str">'name'</span>, <span class="t-str">'price'</span>, <span class="t-str">'stock'</span>];

    <span class="t-com">// file columns, stored automatically in the configured disk</span>
    <span class="t-key">protected</span> <span class="t-var">$files</span> = [<span class="t-str">'image'</span>];

    <span class="t-com">// register API routes for this model</span>
    <span class="t-key">protected</span> <span class="t-var">$hasApiResource</span> = <span class="t-key">true</span>;

    <span class="t-com">// register admin routes for this model</span>
    <span class="t-key">protected</span> <span class="t-var">$hasAdminResource</span> = <span class="t-key">true</span>;
}</code></pre>
        </div>

        <p style="margin-top:1rem;font-family:var(--mono);font-size:.75rem;color:var(--fg-2)">
            <?= e($project['code_note']) ?>
        </p>
    </section>

    <!-- ===== Capabilities ===== -->
    <section class="wrap section reveal" style="padding-bottom:0">
        <div class="sec-head">
            <span class="sec-idx">04</span>
            <h2>Capabilities</h2>
            <span class="sec-rule"></span>
        </div>

        <div class="cap-grid">
            <?php foreach ($project['capabilities'] as $i => $cap): ?>
            <div class="cap">
                <span class="cap-idx"><?= str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) ?></span>
                <h3><?= e($cap['title']) ?></h3>
                <p><?= e($cap['desc']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ===== Before / After ===== -->
    <section class="wrap section reveal" style="padding-bottom:0">
        <div class="sec-head">
            <span class="sec-idx">05</span>
            <h2>Before / After</h2>
            <span class="sec-rule"></span>
        </div>

        <div class="ba">
            <div class="ba-col is-before">
                <div class="ba-head">before</div>
                <ul class="ba-list">
                    <?php foreach ($project['before'] as $item): ?>
                    <li><?= e($item) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="ba-col is-after">
                <div class="ba-head">after</div>
                <ul class="ba-list">
                    <?php foreach ($project['after'] as $item): ?>
                    <li><?= e($item) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <!-- ===== Impact ===== -->
    <section class="wrap section reveal">
        <div class="sec-head">
            <span class="sec-idx">06</span>
            <h2>Impact</h2>
            <span class="sec-rule"></span>
        </div>

        <div class="stats">
            <?php foreach ($project['impact'] as $metric): ?>
            <div class="stat">
                <b><?= e($metric['stat']) ?></b>
                <span><?= e($metric['label']) ?></span>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="hero-actions" style="margin-top:2.5rem">
            <a class="btn" href="<?= e(base_url('/projects')) ?>">
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                </svg>
                Back to projects
            </a>
            <a class="btn btn-primary" href="<?= e(base_url('/#contact')) ?>">Get in touch</a>
        </div>
    </section>

</main>

<?php require __DIR__ . '/../inc/footer.php'; ?>
</body>

</html>
