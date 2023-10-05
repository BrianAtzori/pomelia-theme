<?php

function forHotelsFirstSetup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus(
        array(
            'primary' => __('Header Menu', '4hotels'),
            'secondary' => __('Footer Menu', '4hotels'),
        )
    );
    add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
}

add_action('after_setup_theme', 'forHotelsFirstSetup');

function forHotelsRegisterStyle()
{
    wp_enqueue_style('for-hotels-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'forHotelsRegisterStyle');

function forHotelsRegisterScripts()
{
    wp_enqueue_script('for-hotels-script-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'forHotelsRegisterScripts');

function forHotelsRegisterWidgets()
{
    register_sidebar(
        array(
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => ' Footer Widget Area'
        )
    );
}

add_action('widgets_init', 'forHotelsRegisterWidgets');

?>