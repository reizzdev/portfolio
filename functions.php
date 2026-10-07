<?php

/**
 * Configuración del tema
 */
function kevin_portfolio_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));

}

add_action(
    'after_setup_theme',
    'kevin_portfolio_setup'
);


/**
 * Cargar estilos y scripts
 */
function kevin_portfolio_assets() {

    $style_path =
        get_template_directory() . '/style.css';

    $style_version =
        file_exists($style_path)
            ? filemtime($style_path)
            : '1.0';

    $script_path =
        get_template_directory() . '/assets/js/main.js';

    $script_version =
        file_exists($script_path)
            ? filemtime($script_path)
            : '1.0';


    wp_enqueue_style(
        'kevin-portfolio-style',
        get_stylesheet_uri(),
        array(),
        $style_version
    );


    wp_enqueue_script(
        'kevin-portfolio-js',
        get_template_directory_uri() .
        '/assets/js/main.js',
        array(),
        $script_version,
        true
    );

}

add_action(
    'wp_enqueue_scripts',
    'kevin_portfolio_assets'
);