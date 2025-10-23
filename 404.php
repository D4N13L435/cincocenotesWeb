<?php
/**
 * La plantilla para mostrar páginas 404 (no encontradas)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package 5cenotes
 */

get_header();
?>

<div class="error-404-container">
    <div class="error-404-background"></div>
    <div class="error-404-card">
        
        <i class="fas fa-compass error-404-icon" aria-hidden="true"></i>

        <h1 class="error-404-title">Parece que te has desviado del sendero...</h1>
        
        <p class="error-404-text">
            La ruta que buscas no se encuentra en nuestro mapa. Pero no te preocupes, desde aquí puedes volver a explorar las maravillas de <strong>5 Cenotes</strong>.
        </p>

        <p class="error-404-suggestion">¿Qué camino quieres tomar ahora?</p>

        <div class="error-404-nav">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--outline-primary">
                <i class="fas fa-home" aria-hidden="true"></i>
                <span>Volver al Inicio</span>
            </a>
            <a href="<?php echo esc_url( site_url('/servicios') ); ?>" class="btn">
                <i class="fas fa-water" aria-hidden="true"></i>
                <span>Ver Servicios</span>
            </a>
            <a href="<?php echo esc_url( site_url('/conocenos') ); ?>" class="btn btn--outline-primary">
                <i class="fas fa-leaf" aria-hidden="true"></i>
                <span>Nuestra Historia</span>
            </a>
        </div>
    </div>
</div>

<?php

?>