<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<main id="page-content">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            ?>
            <article <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <div class="page-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
    else :
        echo '<p>No se encontró contenido.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
