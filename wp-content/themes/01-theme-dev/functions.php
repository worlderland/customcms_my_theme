<?php

//Getting the style sheet
function enqueing_my_theme_styles() {
    wp_enqueue_style( '01-theme-dev-style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'enqueing_my_theme_styles');