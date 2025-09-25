<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/assets/img/conocenos-bg.jpg"> -->

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#main-content"><?php esc_html_e( 'Saltar al contenido', '5cenotes' ); ?></a>

<header class="site-header">
    <div class="logo">
        <?php 
        if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
            the_custom_logo();
        } else { ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <h1><?php bloginfo( 'name' ); ?></h1>
            </a>
        <?php } ?>
    </div>

    <nav class="nav-container" role="navigation" aria-label="<?php esc_attr_e( 'Menú Principal', '5cenotes' ); ?>">
        <button class="nav-toggle" aria-controls="menu-principal-container" aria-expanded="false">
            <span class="screen-reader-text"><?php esc_html_e( 'Menú', '5cenotes' ); ?></span>
            <i class="fas fa-bars" aria-hidden="true"></i>
        </button>

        <?php 
            wp_nav_menu(array(
                'theme_location' => 'menu-principal', 
                'container'      => false,
                'menu_class'     => 'nav-menu',
                'menu_id'        => 'menu-principal-container', // ID para conectar con el botón
            )); 
        ?>
    </nav>
</header>

<main id="main-content">
