<?php

require_once( 'widgets/class-wp-widget-categories.php' );

// Theme Support.
function foundationshoptheme_theme_support() {
    // Featured Image Support.
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    set_post_thumbnail_size(900, 600);

    // Nav Menus.
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
    ));

    // Post Format Support.
    add_theme_support('post-formats', array('gallery'));
}

add_action('after_setup_theme', 'foundationshoptheme_theme_support');

// Widget Locations.
function foundationshoptheme_init_widgets($id) {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="callout">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Showcase',
        'id' => 'showcase',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
}

add_action('widgets_init', 'foundationshoptheme_init_widgets');

// Register Widgets.
function foundationshoptheme_custom_register_widgets() {
    register_widget('WP_Widget_Categories_Custom');
}

add_action('widgets_init', 'foundationshoptheme_custom_register_widgets');
