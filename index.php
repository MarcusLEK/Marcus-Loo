<?php
require __DIR__ . '/inc/config.php';
require __DIR__ . '/inc/content.php';

$isHome     = true;
$statusFile = '~/index.php';
$contact    = $content['contact'];

$pageTitle  = 'Marcus Loo | Senior Full Stack Engineer';
$pageDesc   = 'Senior Full Stack Engineer & Project Lead based in Malaysia. Specialising in PHP, Laravel, and Vue.js.';
$pageUrl    = 'https://marcusloo.com';
$json = fn (array $data) => json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

$pageSchema = [
    $json([
        '@context'    => 'https://schema.org',
        '@type'       => 'Person',
        'name'        => $profile['name'],
        'url'         => 'https://marcusloo.com',
        'image'       => 'https://marcusloo.com/assets/og.png',
        'email'       => $contact['email'],
        'jobTitle'    => $profile['role'],
        'description' => $profile['summary'],
        'sameAs'      => [$contact['linkedin']],
        'knowsAbout'  => array_column($content['skills'], 'label'),
        'address'     => [
            '@type'           => 'PostalAddress',
            'addressLocality' => 'Kuala Lumpur',
            'addressCountry'  => 'MY',
        ],
        'worksFor'    => ['@type' => 'Organization', 'name' => $profile['company']],
        // Employment history — lets search engines read the CV, not just the page text.
        'hasOccupation' => array_map(fn ($job) => [
            '@type'          => 'Occupation',
            'name'           => $job['role'],
            'occupationalCategory' => $job['role'],
            'hiringOrganization'   => ['@type' => 'Organization', 'name' => $job['company']],
        ], $content['experiences']),
    ]),
    $json([
        '@context'    => 'https://schema.org',
        '@type'       => 'WebSite',
        'name'        => 'Marcus Loo Portfolio',
        'url'         => 'https://marcusloo.com',
        'description' => $pageDesc,
        'author'      => ['@type' => 'Person', 'name' => $profile['name']],
    ]),
];

require __DIR__ . '/inc/head.php';
?>

<body>
<?php require __DIR__ . '/inc/nav.php'; ?>

<main id="main">

    <!-- ===== Hero ===== -->
    <section id="home" class="wrap hero">
        <div>
            <p class="hero-kicker"><?= e($profile['role']) ?></p>

            <h1><?= e($profile['name']) ?></h1>

            <p class="hero-build">
                <span class="kw">I build</span>
                <span id="typewriter" data-phrases='<?= e(json_encode($typedPhrases)) ?>'></span><span class="caret" aria-hidden="true">&nbsp;</span>
            </p>

            <p class="hero-lede"><?= e($profile['summary']) ?></p>

            <div class="hero-actions">
                <a class="btn btn-primary" href="#contact">
                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.9 5.3a2 2 0 002.2 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Get in touch
                </a>
                <a class="btn" href="#experience">
                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01" />
                    </svg>
                    View experience
                </a>
            </div>

            <dl class="hero-meta">
                <div>
                    <dt class="sr-only">Years of experience</dt>
                    <dd><b>5+</b> years shipping</dd>
                </div>
                <div>
                    <dt class="sr-only">Current role</dt>
                    <dd><b>Lead</b> @ <?= e($profile['company']) ?></dd>
                </div>
                <div>
                    <dt class="sr-only">Location</dt>
                    <dd><b>KL</b> Malaysia</dd>
                </div>
            </dl>
        </div>

        <div class="term">
            <div class="term-bar">
                <div class="term-dots" aria-hidden="true"><span></span><span></span><span></span></div>
                <span class="term-title">marcus@portfolio: ~</span>
                <span class="term-tag" aria-hidden="true">zsh</span>
            </div>

            <div class="term-body">
                <?php foreach ($terminal as $step): ?>
                <div class="term-line">
                    <span class="term-prompt" aria-hidden="true">&#10148;</span>
                    <span class="term-dir" aria-hidden="true">~</span>
                    <span class="term-cmd" data-cmd="<?= e($step['cmd']) ?>"><?= e($step['cmd']) ?></span>
                </div>
                <?php foreach ($step['out'] as $line): ?>
                <div class="term-out"><?= e($line) ?></div>
                <?php endforeach; ?>
                <?php endforeach; ?>

                <div class="term-line">
                    <span class="term-prompt" aria-hidden="true">&#10148;</span>
                    <span class="term-dir" aria-hidden="true">~</span>
                    <span class="term-cursor" aria-hidden="true"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== About ===== -->
    <section id="about" class="wrap section reveal">
        <div class="sec-head">
            <span class="sec-idx">01</span>
            <h2>About</h2>
            <span class="sec-rule"></span>
            <span class="sec-path">~/about.md</span>
        </div>

        <div class="about">
            <div class="prose">
                <?php foreach ($content['about'] as $paragraph): ?>
                <p><?= e($paragraph) ?></p>
                <?php endforeach; ?>
            </div>

            <div class="panel spec">
                <div class="spec-head">
                    <span>marcus.config</span>
                    <span aria-hidden="true">read-only</span>
                </div>
                <?php foreach ($content['spec'] as $key => $value): ?>
                <div class="spec-row">
                    <span class="spec-key"><?= e($key) ?></span>
                    <span class="spec-val"><?= e($value) ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== Experience ===== -->
    <section id="experience" class="wrap section reveal">
        <div class="sec-head">
            <span class="sec-idx">02</span>
            <h2>Experience</h2>
            <span class="sec-rule"></span>
            <span class="sec-path">~/experience.log</span>
        </div>

        <div class="exp">
            <?php foreach ($content['experiences'] as $i => $job):
                $n    = str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT);
                $open = $i === 0;
                $id   = 'exp-' . $i;
            ?>
            <div class="exp-item">
                <button class="exp-toggle" type="button" aria-expanded="<?= $open ? 'true' : 'false' ?>" aria-controls="<?= $id ?>">
                    <span class="exp-idx"><?= $n ?></span>
                    <span>
                        <span class="exp-role">
                            <?= e($job['role']) ?>
                            <span class="exp-at">@ <?= e($job['company']) ?></span>
                            <?php if (!empty($job['current'])): ?>
                            <span class="chip chip-live">current</span>
                            <?php endif; ?>
                        </span>
                        <span class="exp-when"><?= e($job['from']) ?> — <?= e($job['to']) ?></span>
                    </span>
                    <svg class="exp-chev" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div class="exp-body" id="<?= $id ?>" data-open="<?= $open ? 'true' : 'false' ?>">
                    <div>
                        <ul class="exp-list">
                            <?php foreach ($job['details'] as $detail): ?>
                            <li><?= e($detail) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ===== Stack ===== -->
    <section id="stack" class="wrap section reveal">
        <div class="sec-head">
            <span class="sec-idx">03</span>
            <h2>Stack</h2>
            <span class="sec-rule"></span>
            <span class="sec-path">~/stack.json</span>
        </div>

        <div class="stack-groups">
            <span class="chip chip-accent">core</span>
            <span class="chip">ops</span>
            <span class="chip">ai-assisted</span>
        </div>

        <div class="stack">
            <?php foreach ($content['skills'] as $skill): ?>
            <div class="stack-cell">
                <img src="<?= e($skill['icon']) ?>" alt="" loading="lazy" width="32" height="32"
                    class="<?= !empty($skill['mono']) ? 'mono-icon' : '' ?>">
                <span><?= e($skill['label']) ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ===== Projects ===== -->
    <section id="projects" class="wrap section reveal">
        <div class="sec-head">
            <span class="sec-idx">04</span>
            <h2>Projects</h2>
            <span class="sec-rule"></span>
            <span class="sec-path">~/projects/</span>
        </div>

        <div class="proj-grid">
            <?php foreach ($content['projects'] as $i => $project): ?>
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

            <a class="proj-more" href="<?= e(base_url('/projects')) ?>">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 7a2 2 0 012-2h4l2 2h8a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7z" />
                </svg>
                <span>Browse all projects &rarr;</span>
            </a>
        </div>
    </section>

    <!-- ===== Contact ===== -->
    <section id="contact" class="wrap section reveal">
        <div class="contact">
            <p class="contact-cmd">$ ./contact.sh --say-hi</p>
            <h2>Let's build something.</h2>
            <p>
                My inbox is always open — whether you have a question, a project in mind,
                or just want to say hi, I'll do my best to get back to you.
            </p>

            <div class="contact-actions">
                <button class="btn btn-primary" type="button" data-copy="<?= e($contact['email']) ?>">
                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2v-2m-6-8h8a2 2 0 012 2v8m-10-10V5a2 2 0 012-2h4l4 4" />
                    </svg>
                    <?= e($contact['email']) ?>
                </button>

                <a class="btn" href="<?= e($contact['linkedin']) ?>" target="_blank" rel="noopener noreferrer">
                    <svg fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M20.45 20.45h-3.55v-5.57c0-1.33-.03-3.04-1.86-3.04-1.85 0-2.13 1.45-2.13 2.94v5.67H9.35V9h3.42v1.56h.04c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.28zM5.34 7.43a2.06 2.06 0 110-4.13 2.06 2.06 0 010 4.13zm1.78 13.02H3.56V9h3.56v11.45zM22.22 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.73V1.73C24 .77 23.2 0 22.22 0z" />
                    </svg>
                    LinkedIn
                </a>
            </div>
        </div>
    </section>

</main>

<?php require __DIR__ . '/inc/footer.php'; ?>
</body>

</html>
