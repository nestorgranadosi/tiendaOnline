<?php

/**
 * Function describe for thestore 
 * 
 * @package thestore
 */
include_once( trailingslashit(get_stylesheet_directory()) . 'lib/thestore-metaboxes.php' );
include_once( trailingslashit(get_stylesheet_directory()) . 'lib/custom-config.php' );

add_action('wp_enqueue_scripts', 'thestore_enqueue_styles');

function thestore_enqueue_styles() {
    wp_enqueue_style('maxstore-stylesheet', get_template_directory_uri() . '/style.css', array('bootstrap'));
    wp_enqueue_style('thestore-child-style', get_stylesheet_uri(), array('maxstore-stylesheet'));
}

function thestore_theme_setup() {
    load_child_theme_textdomain('thestore', get_stylesheet_directory() . '/languages');
    add_image_size('maxstore-slider', 1140, 488, true);
}

add_action('after_setup_theme', 'thestore_theme_setup');

// remove top bar infobox right option - is replaced with my account link

function thestore_custom_remove($wp_customize) {

    $wp_customize->remove_control('infobox-text-right');
}

add_action('customize_register', 'thestore_custom_remove', 100);

// Remove parent theme homepage style.
function thestore_remove_page_templates($templates) {
    unset($templates['template-home.php']);
    return $templates;
}

add_filter('theme_page_templates', 'thestore_remove_page_templates');

// Load theme info page.
if (is_admin()) {
    include_once(trailingslashit(get_template_directory()) . 'lib/welcome/welcome-screen.php');
}
