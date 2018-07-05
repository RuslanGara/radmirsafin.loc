<?php
/**
 * Created by PhpStorm.
 * User: MPK
 * Date: 06.12.2017
 * Time: 20:02
 */
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9">
    <url>

        <loc>http://radmirsafin.ru/</loc>

        <priority>0.8</priority>

    </url>
    <? foreach($urls as $url): ?>
        <url>
            <loc><?= $host . $url[0] ?></loc>
            <changefreq><?= $url[1] ?></changefreq>
            <priority>0.5</priority>
        </url>
    <? endforeach; ?>
</urlset>