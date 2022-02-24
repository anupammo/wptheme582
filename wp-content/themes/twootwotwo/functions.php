<?php

function custom_theme_assets() {
	wp_enqueue_style( 'stylesheet', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

?>