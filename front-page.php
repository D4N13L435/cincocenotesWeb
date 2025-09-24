<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>


    <?php 
        get_template_part('template-parts/section', 'hero'); 
        get_template_part('template-parts/section', 'conocenos');
        get_template_part('template-parts/section', 'galeria');
        get_template_part('template-parts/section', 'servicios');
        get_template_part('template-parts/section', 'mapa');  
        get_template_part('template-parts/section', 'contactanos'); 
    ?>


<?php
get_footer();
?>