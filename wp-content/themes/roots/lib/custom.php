<?php

// Custom functions

// Add me some Google Web Fonts action
function load_fonts() {
        wp_register_style('googleFonts','http://fonts.googleapis.com/css?family=Pacifico|Raleway:100,500,600');
        wp_enqueue_style( 'googleFonts');
    }

add_action('wp_print_styles', 'load_fonts'); ?>