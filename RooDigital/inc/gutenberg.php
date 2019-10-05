<?php

// Custom Gutenberg functions

// Custom colors
function roodigital_gutenberg_default_colors() {
    add_theme_support('editor-color-palette', array(
        array(
            'name' => 'Light Green',
            'slug' => 'light-green',
            'color' => '#8DE65C'
        ),
        array(
            'name' => 'Dark Green',
            'slug' => 'dark-green',
            'color' => '#BDE65C'
        ),
        array(
            'name' => 'Dark Gold',
            'slug' => 'dark-gold',
            'color' => '#E6E368'
        ),
        array(
            'name' => 'Yellow',
            'slug' => 'yellow',
            'color' => '#FCEB65'
        ),
        array(
            'name' => 'Light Gold',
            'slug' => 'light-gold',
            'color' => '#F2D251'
        ),
        array(
            'name' => 'Roo Black',
            'slug' => 'roo-black',
            'color' => '#4B4B4B'
        ),
        array(
            'name' => 'Roo White',
            'slug' => 'roo-white',
            'color' => '#FAFAFA'
        )
    ));
}

add_action('init', 'roodigital_gutenberg_default_colors');


// Custom blocks
function roodigital_gutenberg_blocks() {
    wp_register_script( 'custom-cta-js', get_template_directory_uri() . '/js/gutenberg-cta-block.js', array('wp-blocks') );
    register_block_type( 'roodigital/custom-cta', array(
        'editor_script' => 'custom-cta-js'
    ) );
}

add_action('init', 'roodigital_gutenberg_blocks');


function roodigital_richtext_block() {
    wp_register_script( 'custom-richtext-js', get_template_directory_uri() . '/js/gutenberg-richtext-block.js', array('wp-blocks', 'wp-editor') );
    register_block_type( 'roodigital/custom-richtext', array(
        'editor_script' => 'custom-richtext-js'
    ) );
}

add_action('init', 'roodigital_richtext_block');