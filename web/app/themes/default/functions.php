<?php

function enqueue_scripts() {
    wp_enqueue_script('app', get_template_directory_uri() . '/style.css');
}

function enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri() . '/app.js');
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
