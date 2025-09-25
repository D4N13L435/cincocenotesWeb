<?php
/**
 * Template Name: Conócenos
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<?php 
                
                get_template_part('template-parts/conocenos/conocenos-hero');
                get_template_part('template-parts/conocenos/conocenos-presentacion');
                get_template_part('template-parts/conocenos/conocenos-historia');
                get_template_part('template-parts/conocenos/conocenos-mision-vision');
                get_template_part('template-parts/conocenos/conocenos-valores');
                get_template_part('template-parts/conocenos/conocenos-cierre');

                
            ?>

<?php
get_footer();
?>
