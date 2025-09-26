<?php
/**
 * Template Name: Contáctanos
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<?php get_template_part('template-parts/contacto/contacto-header'); ?>


      <?php 
        get_template_part('template-parts/contacto/contacto-redes-sociales');
        get_template_part('template-parts/contacto/contacto-horario');
        get_template_part('template-parts/contacto/contacto-ubicacion');
      ?>
      <?php get_template_part('template-parts/contacto/contacto-cierre'); ?>

</main>

<?php
get_footer();
?>
