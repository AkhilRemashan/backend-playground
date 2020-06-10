<?php

// Adding CSS & JS Files

function get_setup(){
    wp_enqueue_style('google-fonte', get_stylesheet_uri('//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab'));
    wp_enqueue_style('fontawesome', get_stylesheet_uri('//use.fontawesome.com/releases/v5.1.0/css/all.css'));
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}


add_action('wp_enqueue_scripts', 'get_setup');


// Adding Theme Support

function lb_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', 
        array('comment-list', 'commeent-form, 'search-form')
    );
}

add_action('after_setup_theme', "lb_init");