<?php
global $post;
if(!$current_id) {
    $current_id = $post->ID;
}
while( have_rows('page_content', $current_id) ) {
    the_row();
    // Global 1
    include( dirname(__FILE__) . '/global-1.php');
    // Home 1
    include( dirname(__FILE__) . '/home-1.php');
    // Home 2
    include( dirname(__FILE__) . '/home-2.php');
    // Home 3
    include( dirname(__FILE__) . '/home-3.php');
    // Resources 1
    include( dirname(__FILE__) . '/resources-1.php');
    // Resources 2
    include( dirname(__FILE__) . '/resources-2.php');
    // Donate 1
    include( dirname(__FILE__) . '/donate-1.php');
    // Books 1
    include( dirname(__FILE__) . '/books-1.php');
    // Books 2
    include( dirname(__FILE__) . '/books-2.php');
    // Contact 1
    include( dirname(__FILE__) . '/contact-1.php');
    // Contact 2
    include( dirname(__FILE__) . '/contact-2.php');
}
