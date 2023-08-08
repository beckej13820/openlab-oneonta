<?php

function openlab_oneonta_enqueue_styles() {
	$parenthandle = 'parent-style';
	$theme        = wp_get_theme();
	wp_enqueue_style( $parenthandle,
		get_template_directory_uri() . '/style.css' ,
		array(), 
		$theme->parent() ->get( 'Version' )
	);
	wp_enqueue_style( 'openlab-oneonta-style' ,
		get_stylesheet_uri(),
		array( $parenthandle ),
		$theme->get( 'Version' )
	);
}

function openlab_oneonta_email_helper() {
	wp_enqueue_script( 
		'openlab_oneonta_email_helper' ,
		get_stylesheet_directory_uri() . '/js/email_helper.js' ,
		array( 'email_helper' )
	);
}

add_action( 'wp_enqueue_scripts' , 'openlab_oneonta_enqueue_styles' );
add_action( 'wp_enqueue_scripts' , 'openlab_oneonta_email_helper');