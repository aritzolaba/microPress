<?php
/**
 * microPress functions file.
 *
 * Exit if accessed directly
 *
 */
if (!defined('ABSPATH')) {echo '<h1>Forbidden</h1>'; exit();}

/*********************************************************************
 * Register widgetized areas and nav_menu
 */
if (function_exists('register_sidebar')) {

    register_sidebar(array(
        'name' => "Sidebar right",
        'id' => "mp-widgets-aside-right",
        'description' => __('Widgets placed here will display in the right sidebar', 'microPress'),
        'before_widget' => '<div class="mp-widget-aside-right">',
        'before_title' => '<div class="mp-widget-title">',
        'after_title' => '</div><div class="mp-widget-content">',
        'after_widget' => '</div></div>'
    ));

    register_sidebar(array(
        'name' => "Footer Block 1",
        'id' => "mp-widgets-footer-block-1",
        'description' => __('Widgets placed here will display in the footer', 'microPress'),
        'before_widget' => '<div class="mp-widget-footer">',
        'before_title' => '<div class="mp-widget-title">',
        'after_title' => '</div><div class="mp-widget-content">',
        'after_widget' => '</div></div>'
    ));

    register_sidebar(array(
        'name' => "Footer Block 2",
        'id' => "mp-widgets-footer-block-2",
        'description' => __('Widgets placed here will display in the footer', 'microPress'),
        'before_widget' => '<div class="mp-widget-footer">',
        'before_title' => '<div class="mp-widget-title">',
        'after_title' => '</div><div class="mp-widget-content">',
        'after_widget' => '</div></div>'
    ));

    register_sidebar(array(
        'name' => "Footer Block 3",
        'id' => "mp-widgets-footer-block-3",
        'description' => __('Widgets placed here will display in the footer', 'microPress'),
        'before_widget' => '<div class="mp-widget-footer">',
        'before_title' => '<div class="mp-widget-title">',
        'after_title' => '</div><div class="mp-widget-content">',
        'after_widget' => '</div></div>'
    ));

    // Register Nav Menu
    register_nav_menu( 'primary', 'microPress nav menu' );
}

/*********************************************************************
 * Add theme features
 *
 * custom-background, custom-header, post-thumbnails
 */
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails', array('post'));

/*********************************************************************
 * Add custom image size for thumbnails in loops
 */
if (function_exists('add_image_size')) {
    add_image_size('attachment-thumbnail', 120, 120, true);
}

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
    wp_enqueue_style('microPress-theme-css', get_template_directory_uri() . '/themes/light/light.css', array() );
}

/*********************************************************************
 * END Custom Functions
 */