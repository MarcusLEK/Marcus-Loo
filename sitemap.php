<?php
// Served as /sitemap.xml (see .htaccess). Generated from inc/content.php so that
// adding a project to the content file also adds it to the sitemap.
require __DIR__ . '/inc/config.php';
require __DIR__ . '/inc/content.php';

const SITE_ORIGIN = 'https://marcusloo.com';

$urls = [
    ['loc' => '/',         'priority' => '1.0', 'changefreq' => 'monthly'],
    ['loc' => '/projects', 'priority' => '0.8', 'changefreq' => 'monthly'],
];

foreach ($content['projects'] as $project) {
    if (empty($project['url'])) {
        continue;
    }
    $urls[] = ['loc' => $project['url'], 'priority' => '0.6', 'changefreq' => 'yearly'];
}

$lastmod = date('Y-m-d', filemtime(__DIR__ . '/inc/content.php') ?: time());

header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>', "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $url): ?>
    <url>
        <loc><?= e(SITE_ORIGIN . $url['loc']) ?></loc>
        <lastmod><?= e($lastmod) ?></lastmod>
        <changefreq><?= e($url['changefreq']) ?></changefreq>
        <priority><?= e($url['priority']) ?></priority>
    </url>
<?php endforeach; ?>
</urlset>
