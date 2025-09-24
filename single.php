<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<main id="single-post">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            ?>
            <article <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <div class="post-meta">
                    <span><?php the_date(); ?></span> | 
                    <span><?php the_author(); ?></span>
                </div>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php
        endwhile;
    else :
        echo '<p>No hay contenido.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
