<?php
/* enqueue script for parent theme stylesheeet */        
function openlab_oneonta_enqueue_parent_styles() {
    
    wp_enqueue_style( 'parent', get_template_directory_uri().'/style.css' );                       
}

add_action( 'wp_enqueue_scripts', 'openlab_oneonta_enqueue_parent_styles');