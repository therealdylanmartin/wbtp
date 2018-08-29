<?php

add_action( 'after_setup_theme', 'wbtp_setup' );

function wbtp_setup() {
    load_theme_textdomain( 'wbtp', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus(
    array( 'main-menu' => __( 'Main Menu', 'wbtp' ) )
    );
}

add_action( 'init', 'wbtp_cpt' );

function wbtp_cpt() {

    register_post_type( 'wi_resources', array(
        'labels' => array(
            'name' => 'WI Resources',
            'singular_name' => ' WI Resource',
        ),
        'description' => 'Info for resources page.',
        'public' => true,
        'menu_position' => 4,
        'supports' => array( 'title', 'custom-fields' )
    ));

    register_post_type( 'other_resources', array(
        'labels' => array(
            'name' => 'Other Resources',
            'singular_name' => ' Other Resource',
        ),
        'description' => 'Info for resources page.',
        'public' => true,
        'menu_position' => 5,
        'supports' => array( 'title', 'custom-fields' )
    ));
    
}
