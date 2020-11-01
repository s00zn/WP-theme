<?php

// Setup
define( 'WT_DEV_MODE', true );

//Support
//add_theme_support( 'post-thumbnails' );

// Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ) );
include( get_theme_file_path( '/includes/setup.php' ) );
include( get_theme_file_path( '/includes/widgets.php' ) );

// Hooks
add_action( 'wp_enqueue_scripts', 'wt_enqueue' );
add_action( 'after_setup_theme', 'wt_setup_theme' );
add_action( 'widgets_init', 'wt_widgets' );


// Shortcodes

