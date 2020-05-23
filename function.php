<?php

function gamertime_scripts() {

    wp_enqueue_script( 'extra js', get template_directory_uri() . '/js/extra.js');
}

add_action( 'wp_enqueue_scripts', 'gamertime_scripts');