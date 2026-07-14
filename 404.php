<?php
require __DIR__ . '/inc/config.php';
require __DIR__ . '/inc/content.php';

http_response_code(404);

$isHome        = false;
$statusFile    = '~/404.php';
$statusSection = 'not-found';
$contact       = $content['contact'];

$pageTitle  = '404 — Not Found | Marcus Loo';
$pageDesc   = 'That page could not be found.';
$pageUrl    = 'https://marcusloo.com/404';
$pageRobots = 'noindex, nofollow';

// Echoed back into the fake shell command — keep it short and escaped.
$attempted = substr((string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), 0, 48);

require __DIR__ . '/inc/head.php';
?>

<body>
<?php require __DIR__ . '/inc/nav.php'; ?>

<main id="main">
    <section class="wrap nf">
        <div>
            <p class="nf-code">4<span>0</span>4</p>

            <div class="term" style="max-width:34rem;margin:2rem auto 0;text-align:left">
                <div class="term-bar">
                    <div class="term-dots" aria-hidden="true"><span></span><span></span><span></span></div>
                    <span class="term-title">marcus@portfolio: ~</span>
                    <span class="term-tag" aria-hidden="true">zsh</span>
                </div>
                <div class="term-body" style="min-height:0">
                    <div class="term-line">
                        <span class="term-prompt" aria-hidden="true">&#10148;</span>
                        <span class="term-dir" aria-hidden="true">~</span>
                        <span class="term-cmd" data-cmd="cat .<?= e($attempted) ?>">cat .<?= e($attempted) ?></span>
                    </div>
                    <div class="term-out">No such file or directory</div>
                    <div class="term-line">
                        <span class="term-prompt" aria-hidden="true">&#10148;</span>
                        <span class="term-dir" aria-hidden="true">~</span>
                        <span class="term-cursor" aria-hidden="true"></span>
                    </div>
                </div>
            </div>

            <p style="margin-top:2rem">The page you're looking for doesn't exist — or it moved.</p>

            <div class="hero-actions" style="justify-content:center;margin-top:1.75rem;margin-bottom:0">
                <a class="btn btn-primary" href="<?= e(base_url('/')) ?>">
                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                    </svg>
                    Back home
                </a>
                <a class="btn" href="<?= e(base_url('/projects')) ?>">Browse projects</a>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/inc/footer.php'; ?>
</body>

</html>
