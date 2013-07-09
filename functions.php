<?php
/* Enqueue stylesheets & scripts - exclude from admin area */
function enqueue_stylesheets()
{
    
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', '', '', 'all');
       
}

function enqueue_scripts()
{
    //scripts
    wp_enqueue_script('jquery');
            
    wp_enqueue_script('js-init', get_template_directory_uri(). '/assets/js/init.js', 'jquery', null, true);
        
}

if(!is_admin()) {
    
   add_action( 'wp_enqueue_scripts', 'enqueue_stylesheets' );

   add_action( 'wp_enqueue_scripts', 'enqueue_scripts' ); 
    
}

//allow featured images support for the theme
add_theme_support( 'post-thumbnails' );