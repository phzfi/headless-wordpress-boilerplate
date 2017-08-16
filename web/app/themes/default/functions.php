<?php

function enqueue_script() {
    wp_enqueue_script('app', get_template_directory_uri() . '/style.css');
}

function enqueue_style() {
    wp_enqueue_style('style', get_stylesheet_uri() . '/app.js');
}

add_action( 'wp_enqueue_scripts', 'enqueue_script' );
add_action( 'wp_enqueue_scripts', 'enqueue_style' );
