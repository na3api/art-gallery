<?php
header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + 3600));
header('Content-Type: text/html; charset=utf-8');
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header('X-UA-Compatible: IE=Edge');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php seo_title(); ?></title>
    <meta name="MobileOptimized" content="width"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimal-ui, minimum-scale=1.0, maximum-scale=1.0"/>
    <link rel="shortcut icon" href="/">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="main">
    <header>
        <div class="container alc">
            <?php echo get_custom_logo(); ?>
            <div></div>
            <div id="menuOpen"><p>Menu</p><span></span></div>
            <nav id="mainMenu">
                <?php wp_nav_menu(array('container' => false, 'items_wrap' => '<ul id="%1$s">%3$s</ul>', 'theme_location' => 'main_menu')); ?>
            </nav>
            <div class="language">
                <span class="ua enable">укр</span>
                <span class="ru">Eng</span>
            </div>
        </div>
    </header>
    <div id="pusher"></div>
