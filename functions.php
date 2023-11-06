<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

// Déclarer les scripts et styles avec un Hook
function usdomagne_register_assets() {
    
    // Déclarer jQuery
    wp_enqueue_script('jquery' );
    
    // Déclarer le JS
	wp_enqueue_script( 
        'usdomagne', 
        get_template_directory_uri() . '/assets/js/script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );
  	
    // Déclarer le fichier CSS à un autre emplacement
    wp_enqueue_style( 
        'usdomagne', 
        get_template_directory_uri() . '/assets/styles/css/main.css',
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'usdomagne_register_assets' );

// Déclarer 3 emplacements de menu
register_nav_menus( array(
	'main' => 'Menu Principal',
    'burgerMenu' => 'Menu burger',
	'footer' => 'Bas de page',
) );

// Déclarer une sidebar
register_sidebar( array(
	'id' => 'blog-sidebar',
	'name' => 'Blog',
) );
