<!DOCTYPE html>
<html lang="fr-fr">
<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#ffffff" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= get_option('blogname') ?>" />
    <meta name="twitter:description" content="<?= get_option('blogdescription') ?>" />

    <meta property="og:url" content="<?= URL ?>" />
    <meta property="og:title" content="<?= get_option('blogname') ?>" />
    <meta property="og:description" content="<?= get_option('blogdescription') ?>" />
    <meta property="og:site_name" content="<?= get_option('blogname') ?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui" />
    <meta name="description" content="<?= get_option('blogdescription') ?>" />
    <meta name="keywords" content="portfolio, graphism" />

    <link rel="icon" type="image/png" href="/wp-content/themes/julieferrieux-2017/favicon.png" sizes="32x32" />
    <title><?= get_option('blogname') ?></title>
    <link href="<?= PUBLIC_PATH ?>compressed/main.min.css" rel="stylesheet" type="text/css" />
</head>
<?php global $bodyClass ?>
<body class="<?= $bodyClass ?>">
<div class="loader"></div>
<a href="/" class="nav-button nav-projects text-uppercase">Projects</a>
<a href="/" class="nav-button nav-about text-uppercase">Contact</a>
<div class="contact">
    <span class="close-contact">&times;</span>
    <div class="contact-content">
        <h3><?= $about['title'] ?></h3>
        <div class="content">
            <?= $about['content'] ?>
            <div class="separator"></div>
            <b><a href="mailto:<?= $about['email'] ?>"><?= $about['email'] ?></a></b>
        </div>
        <ul class="networks">
            <?php foreach($about['networks'] as $name => $link): ?>
                <li><a target="_blank" href="<?= $link ?>"><?= $name ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>