

<?php
if ( ! defined( 'ABSPATH' ) ) exit;

// Configuración básica del tema
function cinco_cenotes_setup() {
    // Soporte para título dinámico
    add_theme_support( 'title-tag' );

    // Soporte para imágenes destacadas
    add_theme_support( 'post-thumbnails' );

    // Registrar menú principal
    register_nav_menus( array(
        'menu-principal' => __( 'Menú Principal', '5cenotes' ),
    ) );
}
add_action( 'after_setup_theme', 'cinco_cenotes_setup' );

// Encolar CSS y JS
function cinco_cenotes_scripts() {
    // CSS principal style.css
    wp_enqueue_style( 'cinco-cenotes-style', get_stylesheet_uri() );

    // CSS adicional main.css (debes crear este archivo)
    wp_enqueue_style( 'cinco-cenotes-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0' );

    // JS principal (crea este archivo si quieres agregar JS)
    wp_enqueue_script( 'cinco-cenotes-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'cinco_cenotes_scripts' );

// Comprobar si ACF está activo y añadir opciones globales
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' => 'Opciones del Tema',
        'menu_title' => 'Opciones del Tema',
        'menu_slug'  => 'opciones-tema',
        'capability' => 'edit_posts',
        'redirect'   => false
    ));
}
function agregar_font_awesome() {
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'agregar_font_awesome');

function cargar_fuentes_personalizadas() {
    wp_enqueue_style(
        'fuentes-google',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Merriweather:wght@400;700&family=Quicksand:wght@400;700&family=Raleway:wght@400;700&display=swap',
        false
    );
}
add_action('wp_enqueue_scripts', 'cargar_fuentes_personalizadas');



?>





