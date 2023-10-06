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
        <?php
        wp_nav_menu(
            array(
                'menu' => 'primary',
                'container' => '',
                'theme_location' => 'primary',
                'items_wrap' => '<ul id="menu" class="hidden"> <li class="nav-item active">%3$s </li> </ul>'
            )
        )
            ?>
    </nav>