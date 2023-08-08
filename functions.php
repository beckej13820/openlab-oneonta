<?php

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'openlab-oneonta', get_stylesheet_directory_uri() . 'style.css' );

	wp_enqueue_script( 'openlab-oneonta-email-helper', get_stylesheet_directory_uri() . '/js/email_helper.js', array( 'openlab-oneonta-email-helper' ) );
}
);

