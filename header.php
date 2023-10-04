<!DOCTYPE HTML>

<html>

<head>
    <title>
        <?php echo get_bloginfo('name') ?>
    </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <?php wp_head() ?>
</head>

<body>

    <nav>
        <div class="logo-container">
            <?php
            if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $image = wp_get_attachment_image_src($custom_logo_id, 'full');
            }
            ?>
            <img class="site-logo" src="<?php echo $image[0] ?>" />
        </div>
        <div class="menu-icon" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <ul id="menu" class="hidden">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <section class="hero">
        <h1>
            <?php echo get_bloginfo('name') ?>
        </h1>
        <h2>
            <?php echo get_bloginfo('description') ?>
        </h2>
        <button>Scopri di più</button>
    </section>