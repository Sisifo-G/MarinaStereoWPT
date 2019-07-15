<?php 
//Agregando imágenes destacadas
    

function tema1_setup(){
    if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );

     }

     add_theme_support('title-tag');

}     

add_action('after_setup_theme', 'tema1_setup')

//End Agregando Imágenes destacadas



?>