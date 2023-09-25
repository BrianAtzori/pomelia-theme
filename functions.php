<?php

function forHotelsRegisterStyle()
{
    wp_enqueue_style('for-hotels-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
    wp_enqueue_style('for-hotels-font-awesome-styles', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', '6.4.2', 'all');
}

add_action('wp_enqueue_scripts', 'forHotelsRegisterStyle');

function forHotelsRegisterScripts()
{
    wp_enqueue_script('for-hotels-script-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
    wp_enqueue_script('for-hotels-script-util', get_template_directory_uri() . '/assets/js/util.js', array(), '1.0', true);
    wp_enqueue_script('for-hotels-script-jquery-core', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true);
    wp_enqueue_script('for-hotels-script-jquery-breakpoints', 'https://cdn.jsdelivr.net/npm/breakpoints-js@1.0.6/dist/breakpoints.min.js', array(), '1.0.6', true);
    wp_enqueue_script('for-hotels-script-jquery-browser', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-browser/0.1.0/jquery.browser.min.js', array(), '0.1.0', true);
    wp_enqueue_script('for-hotels-script-jquery-scrollex', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollex/0.2.1/jquery.scrollex.min.js', array(), '0.2.1', true);
    wp_enqueue_script('for-hotels-script-jquery-scrolly', 'https://cdn.jsdelivr.net/npm/jquery.scrolly@0.0.1/+esm', array(), '0.0.1', true);
    wp_enqueue_script('for-hotels-script-jquery-dropotron', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.dropotron/1.4.3/jquery.dropotron.min.js', array(), '1.4.3', true);
}

add_action('wp_enqueue_scripts', 'forHotelsRegisterScripts');

?>