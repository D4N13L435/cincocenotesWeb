<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/assets/img/conocenos-bg.jpg"> -->
    <?php if ( is_front_page() ) : ?>
    <title>5 Cenotes: Ecoturismo y Nado en Cenotes en Kantunilkin</title>
    <meta name="description" content="Vive experiencias naturales y místicas en 5 Cenotes, Kantunilkín. Explora nuestra reserva de 60 hectáreas con nado en cenotes y senderismo interpretativo. ¡Reserva tu aventura hoy!">
    <?php elseif ( is_page('conocenos') ) : ?>
    <title>Nuestra Historia y Misión | 5 Cenotes Ecoturismo Comunitario</title>
    <meta name="description" content="Conoce la historia de 5 Cenotes, un proyecto de ecoturismo en una reserva de 60 hectáreas en Kantunilkín. Descubre nuestra misión y el compromiso de nuestra comunidad.">
    <?php elseif ( is_page('servicios') ) : ?>
    <title>Paquetes de Ecoturismo: Nado en Cenote y Senderismo | 5 Cenotes</title>
    <meta name="description" content="Descubre nuestros paquetes de ecoturismo en 5 Cenotes, Kantunilkín. Disfruta del nado en cenotes cristalinos y senderismo guiado. Precios desde $150. ¡Conoce más y reserva!">
    <?php elseif ( is_page('contactanos') ) : ?>
    <title>Contacto, Horarios y Ubicación | 5 Cenotes en Kantunilkín</title>
    <meta name="description" content="¿Listo para tu aventura? Contacta a 5 Cenotes por WhatsApp al 984-280-74-74. Encuentra nuestro mapa, horarios de 10am a 5pm y redes sociales. ¡Te esperamos en Kantunilkín!">
    <?php else : ?>
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php endif; ?>

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
