<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Salir si se accede directamente.

/**
 * Configuración básica del tema 5cenotes.
 */
function cinco_cenotes_setup() {
    // Soporte para que WordPress gestione el <title> de la página.
    add_theme_support( 'title-tag' );

    // Habilitar imágenes destacadas en posts y páginas.
    add_theme_support( 'post-thumbnails' );

    // Registrar el menú de navegación principal.
    register_nav_menus( array(
        'menu-principal' => __( 'Menú Principal', '5cenotes' ),
    ) );
}
add_action( 'after_setup_theme', 'cinco_cenotes_setup' );

/**
 * Encola todos los scripts y hojas de estilo del tema.
 */
function cinco_cenotes_scripts() {
    // 1. Fuentes externas de Google Fonts.
    wp_enqueue_style(
        'cinco-cenotes-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;700&family=Merriweather:wght@400;700&family=Quicksand:wght@400;700&family=Raleway:wght@400;700&display=swap',
        array(), // Sin dependencias
        null // Sin versión para recursos externos
    );

    // 2. Iconos de Font Awesome desde un CDN.
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css',
        array(), // Sin dependencias
        '5.15.4' // Es buena práctica especificar la versión del CDN
    );
        // GLightbox desde CDN
    wp_enqueue_style('glightbox', 'https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css', array(), null);
    wp_enqueue_script('glightbox', 'https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js', array(), null, true);
    // --- LIBRERÍA SPLIDE.JS PARA SLIDERS ---
    wp_enqueue_style('splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css');
    wp_enqueue_script('splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array(), null, true);

    // 3. Hoja de estilos principal (style.css - mini-framework).
    wp_enqueue_style(
        'cinco-cenotes-style',
        get_stylesheet_uri(),
        array(), // Sin dependencias, es la base
        filemtime( get_stylesheet_directory() . '/style.css' ) // Versionado dinámico
    );

    // 4. Hoja de estilos secundaria (main.css - estilos específicos).
    wp_enqueue_style(
        'cinco-cenotes-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array('cinco-cenotes-style'), // Depende del style.css para cargarse después
        filemtime( get_template_directory() . '/assets/css/main.css' ) // Versionado dinámico
    );

    // 5. Archivo JavaScript principal (main.js).
    // Hacemos que nuestro JS dependa de GLightbox para que se cargue después.
    wp_enqueue_script(
        'cinco-cenotes-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array('glightbox'), //
        filemtime( get_template_directory() . '/assets/js/main.js' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'cinco_cenotes_scripts' );

/**
 * Añade una página de opciones globales si el plugin ACF Pro está activo.
 */
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' => 'Opciones del Tema',
        'menu_title' => 'Opciones del Tema',
        'menu_slug'  => 'opciones-tema',
        'capability' => 'edit_posts',
        'redirect'   => false
    ));
}

?>




