<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>


    <title><?php wp_title('|', true, 'right'); ?></title>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="logo">
        <?php 
        if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
            the_custom_logo();
        } else { ?>
            <a href="<?php echo home_url(); ?>">
                <h1>5 Cenotes</h1>
            </a>
        <?php } ?>
    </div>



    <nav class="nav-container">

            <!-- Botón Hamburguesa -->
    <button class="nav-toggle" aria-label="Abrir menú">
        <i class="fas fa-bars"></i>
    </button>

        <?php 
            wp_nav_menu(array(
                'theme_location' => 'menu-principal', 
                'container' => false,
                'menu_class' => 'nav-menu'
            )); 
        ?>
    </nav>
</header>

<main id="main-content">
