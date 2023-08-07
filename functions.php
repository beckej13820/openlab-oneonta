<?php
/* enqueue script for parent theme stylesheeet */        
function openlab_oneonta_enqueue_styles() {
 
 // enqueue style 
 wp_enqueue_style( 'child_style', get_template_directory_uri().'/style.css' );                       
}

function openlab_oneonta_enqueue_scripts() {
 
    // enqueue script 
    wp_enqueue_script( 'email_warning', get_template_directory_uri().'/js/email_helper.js' );                       
   }

   add_action( 'wp_enqueue_scripts', 'openlab_oneonta_enqueue_styles');
   add_action( 'wp_enqueue_scripts', 'openlab_oneonta_enqueue_scripts');
