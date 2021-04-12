<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

add_theme_support( 'menus' );


function gym_register_assets() {



     // Déclarer jQuery
     wp_deregister_script( 'jquery' ); // On annule l'inscription du jQuery de WP
     wp_enqueue_script( // On déclare une version plus moderne
         'jquery', 
         'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', 
         false, 
         '3.3.1', 
         true 
     );
     //wp_enqueue_script('jquery' );
    
     // déclarer AOS JS
     wp_enqueue_script( 
        'AOS js', 
        'https://unpkg.com/aos@2.3.1/dist/aos.js', 
        array(), 
        '1.0', 
        true
    );

    wp_enqueue_style( 
        'AOS css',
        'https://unpkg.com/aos@2.3.1/dist/aos.css', 
        array(), 
        '1.0'
    );
    

     // Déclarer le JS
     wp_enqueue_script( 
         'getyourmug js', 
         get_template_directory_uri() . '/js/script.js', 
         [], 
         '1.0', 
         true
     );

    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'getyoumug css',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );


    // Déclarer le fichier CSS
    wp_enqueue_style( 
        'getyourmug main', 
        get_template_directory_uri() . '/css/main.css',
        array(), 
        '1.0'
    );

};
add_action( 'wp_enqueue_scripts', 'gym_register_assets' );




if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Header',
		'menu_slug' 	=> 'header',
        'position' => 6,
        'icon_url' => 'dashicons-format-image',
		'redirect'		=> false
	));
    acf_add_options_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'menu_slug' 	=> 'Footer',
        'position' => 6,
        'icon_url' => 'dashicons-format-image',
		'redirect'		=> false
	));
}


add_filter('show_admin_bar', '__return_false');
