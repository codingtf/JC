<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function coderslab_enqueue_script() {

    //dołączamy Sleek Slider

    wp_enqueue_script(
        'slick',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js',
        ['jquery']);

    wp_enqueue_style(
        'slick',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css'
    );

    wp_enqueue_style(
        'slick-theme',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css.map'
    );

    //dołączmy bootstrap
    wp_enqueue_script(
        'main',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js',
        ['jquery', 'popper'],
        '1.0.0',
        true );

    wp_enqueue_style(
        'bootstrap',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css',
        null,
        true );


    // dołączamy javaScript
    wp_enqueue_script(
        'juhuhuhuh',
        get_stylesheet_directory_uri() . '/js/app.js');

    // dołączamy css
    wp_enqueue_style(
        'main',
        get_stylesheet_directory_uri() . '/css/main.css',
        ['bootstrap'],
        true );

}
add_action( 'wp_enqueue_scripts' , 'coderslab_enqueue_script' );