<?php
/**
 * microPress functions file.
 *
 * Exit if accessed directly
 *
 */
if (!defined('ABSPATH')) {echo '<h1>Forbidden</h1>'; exit();}

/*********************************************************************
 * Translations support. Find language files in microPress/languages
 */
load_theme_textdomain('microPress', get_template_directory().'/languages');

/*********************************************************************
 * Register widgetized areas and nav_menu
 */
if (function_exists('register_sidebar')) {

    register_sidebar(array(
        'name' => "Sidebar right",
        'id' => "mp-widgets-aside-right",
        'description' => __('Widgets placed here will display in the right sidebar', 'microPress')
    ));

    register_sidebar(array(
        'name' => "Footer Block 1",
        'id' => "mp-widgets-footer-block-1",
        'description' => __('Widgets placed here will display in the first footer block', 'microPress')
    ));

    register_sidebar(array(
        'name' => "Footer Block 2",
        'id' => "mp-widgets-footer-block-2",
        'description' => __('Widgets placed here will display in the second footer block', 'microPress')
    ));

    register_sidebar(array(
        'name' => "Footer Block 3",
        'id' => "mp-widgets-footer-block-3",
        'description' => __('Widgets placed here will display in the third footer block', 'microPress')
    ));

    // Register Nav Menu
    register_nav_menu('primary', 'microPress nav menu');
}

/*********************************************************************
 * Add theme features
 *
 * theme support: automatic-feed-links, custom-background, custom-header, post-thumbnails
 * content-width, editor_style
 */
$custom_header_args = array(
    'default-image' => get_stylesheet_directory_uri() .'/assets/imgs/default_header.png',
    'width' => 960,
    'height' => 50,
    'flex-height' => true,
    'default-text-color' => '222222'
);

add_theme_support('automatic-feed-links');
add_theme_support('custom-background');
add_theme_support('custom-header', $custom_header_args);
add_theme_support('post-thumbnails', array('post'));

// Add custom image size for thumbnails in loops
if (function_exists('add_image_size')) add_image_size('post-thumbnail', 340, 0, true);

// Set content width
if (!isset($content_width)) $content_width = 700;

// This theme styles the visual editor with editor-style.css to match the theme style.
add_editor_style();

/*********************************************************************
 * BEGIN Custom Functions
 */

/*********************************************************************
 * Function to load all theme assets (scripts and styles)
 *
 * Called in header.php
 */
function pb_load_theme_assets () {
    wp_enqueue_style('microPress-main-css', get_template_directory_uri() . '/style.css', array() );
    wp_enqueue_style('microPress-theme-css', get_template_directory_uri() . '/assets/themes/light/light.css', array() );
}

/*********************************************************************
 * END Custom Functions
 */