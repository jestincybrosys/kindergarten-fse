<?php 

// Load text domain for translation
load_theme_textdomain('kindergarten-fse', get_template_directory() . '/languages');

function kt_fse_enqueue_styles() {
    wp_enqueue_style( 'kt-fse-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'kt_fse_enqueue_styles' );
