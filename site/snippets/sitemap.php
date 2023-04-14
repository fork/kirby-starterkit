<?= '<?xml version="1.0" encoding="utf-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach ($pages ?? [] as $p): ?>
        <?php if (in_array($p->uri(), $ignore ?? [])) {
            continue;
        } ?>
        <url>
            <loc><?= html($p->url()) ?></loc>
            <lastmod><?= $p->modified('c', 'date') ?></lastmod>
            <priority><?= ($p->isHomePage()) ? 1 : number_format(0.5 / $p->depth(), 1) ?></priority>
        </url>
    <?php endforeach ?>
</urlset>