<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );


// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );


function theme_enqueue_styles() {
if ( is_page_template( 'template-cv.php' ) ){wp_enqueue_style('cv_fabien_Picot', get_stylesheet_directory_uri() . '/cv_fabien_Picot.css', array(),false);}
else {wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', array(),false);
wp_enqueue_script('script',get_stylesheet_directory_uri() . '/script.js', array('jquery'), '', true);}
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
/*ajout du logo par WP*/

  function azenor_setup() {
    add_theme_support('custom-logo');
}
    
add_action( 'after_setup_theme', 'azenor_setup' );

  /*ajouter les menus*/
// s'il y a plusieurs menus à rajouter, voici le code :
function register_my_menus() {
	register_nav_menus(
	array(
	'header-menu' => __( 'Menu Header' ),
	'footer-menu' => __( 'Menu Footer' ),
	)
	);
   }
   add_action( 'init', 'register_my_menus' );

?>