<!-- 
<?php $base_uri = get_template_directory_uri(); ?>

<section class="servicios-galeria section-padding bg-light">
  <div class="container-F text-center">
    <h2 class="text-primary heading-lg mb-4">Experiencias</h2>
    <p class="text-lg mb-6">Imágenes y videos de nuestras experiencias ecoturísticas</p>

    <div class="gallery-carousel">
      <a href="<?php echo $base_uri; ?>/assets/img/cenote2.webp" class="glightbox" data-gallery="servicios">
        <img src="<?php echo $base_uri; ?>/assets/img/cenote2.webp" alt="Imagen 1">
      </a>

      <a href="<?php echo $base_uri; ?>/assets/img/cenote1.webp" class="glightbox" data-gallery="servicios">
        <img src="<?php echo $base_uri;  ?>/assets/img/cenote1.webp" alt="Imagen 2">
      </a>

      <a href="<?php echo $base_uri;  ?>/assets/img/cenote1.mp4" class="glightbox" data-gallery="servicios">
        <img src="<?php echo $base_uri;  ?>/assets/img/senderismo.webp" alt="Video 1">
      </a>

      <a href="<?php echo $base_uri;  ?>/assets/img/galeria/c1.jpg" class="glightbox" data-gallery="servicios">
        <img src="<?php echo $base_uri;  ?>/assets/img/galeria/c1.jpg" alt="imagen 3">
      </a>

      <a href="<?php echo $base_uri;  ?>/assets/img/galeria/c2.jpg" class="glightbox" data-gallery="servicios">
        <img src="<?php echo $base_uri;  ?>/assets/img/galeria/c2.jpg" alt="imagen 4">
      </a>

      <a href="<?php echo $base_uri;  ?>/assets/img/galeria/c3.jpg" class="glightbox" data-gallery="servicios">
        <img src="<?php echo $base_uri;  ?>/assets/img/galeria/c3.jpg" alt="imagen 5">
      </a>

      <a href="<?php echo $base_uri;  ?>/assets/img/galeria/c4.jpg" class="glightbox" data-gallery="servicios">
        <img src="<?php echo $base_uri;  ?>/assets/img/galeria/c4.jpg" alt="imagen 6">
      </a>

      <a href="<?php echo $base_uri;  ?>/assets/img/galeria/c5.jpg" class="glightbox" data-gallery="servicios">
        <img src="<?php echo $base_uri;  ?>/assets/img/galeria/c5.jpg" alt="imagen 7">
      </a>

      <a href="<?php echo $base_uri;  ?>/assets/img/galeria/c6.jpg" class="glightbox" data-gallery="servicios">
        <img src="<?php echo $base_uri;  ?>/assets/img/galeria/c6.jpg" alt="imagen 8">
      </a>

      <a href="<?php echo $base_uri;  ?>/assets/img/galeria/c7.jpg" class="glightbox" data-gallery="servicios">
        <img src="<?php echo $base_uri;  ?>/assets/img/galeria/c7.jpg" alt="imagen 9">
      </a>

      <a href="<?php echo $base_uri;  ?>/assets/img/galeria/c8.jpg" class="glightbox" data-gallery="servicios">
        <img src="<?php echo $base_uri;  ?>/assets/img/galeria/c8.jpg" alt="imagen 10">
      </a>

      <a href="<?php echo $base_uri;  ?>/assets/img/galeria/c9.jpg" class="glightbox" data-gallery="servicios">
        <img src="<?php echo $base_uri;  ?>/assets/img/galeria/c9.jpg" alt="imagen 11">
      </a>

      <a href="<?php echo $base_uri;  ?>/assets/img/galeria/c10.jpg" class="glightbox" data-gallery="servicios">
        <img src="<?php echo $base_uri;  ?>/assets/img/galeria/c10.jpg" alt="imagen 12">
      </a>

      <a href="<?php echo $base_uri;  ?>/assets/img/galeria/c11.jpg" class="glightbox" data-gallery="servicios">
        <img src="<?php echo $base_uri;  ?>/assets/img/galeria/c11.jpg" alt="imagen 13">
      </a>

      <a href="<?php echo $base_uri;  ?>/assets/img/galeria/c12.jpg" class="glightbox" data-gallery="servicios">
        <img src="<?php echo $base_uri;  ?>/assets/img/galeria/c12.jpg" alt="imagen 14">
      </a>

      <a href="<?php echo $base_uri;  ?>/assets/img/galeria/c13.jpg" class="glightbox" data-gallery="servicios">
        <img src="<?php echo $base_uri;  ?>/assets/img/galeria/c13.jpg" alt="imagen 15">
      </a>

      <a href="<?php echo $base_uri;  ?>/assets/img/galeria/c14.jpg" class="glightbox" data-gallery="servicios">
        <img src="<?php echo $base_uri;  ?>/assets/img/galeria/c14.jpg" alt="imagen 16">
      </a>

    </div>
  </div>
</section> -->

<?php
// --- GESTIÓN DE LA GALERÍA ---
// Para añadir, quitar o cambiar imágenes, solo modificamos esta lista (tener en cuenta que se debe optimizar las imagenes).
$imagenes_galeria = [
    [ 'url' => 'cenote2.webp', 'alt' => '' ],
    [ 'url' => 'cenote1.webp', 'alt' => '' ],
    [ 'url' => 'senderismo.webp', 'alt' => '' ],
    [ 'url' => 'galeria/c1.jpg', 'alt' => '' ],
    [ 'url' => 'galeria/c2.jpg', 'alt' => '' ],
    [ 'url' => 'galeria/c3.jpg', 'alt' => '' ],
    [ 'url' => 'galeria/c4.jpg', 'alt' => '' ],
    [ 'url' => 'galeria/c5.jpg', 'alt' => '' ],
    [ 'url' => 'galeria/c6.jpg', 'alt' => '' ],
    
];

$base_uri = get_template_directory_uri() . '/assets/img/';
?>

<section id="galeria-servicios" class="servicios-galeria section-padding bg-light">
  <div class="container-F text-center">
    <h2 class="text-primary heading-lg mb-4">Nuestras Experiencias en Imágenes</h2>
    <p class="text-lg mb-5">Un vistazo a los momentos que puedes vivir con nosotros.</p>

    <div class="gallery-carousel">
      <?php foreach ( $imagenes_galeria as $imagen ) : ?>
        <a href="<?php echo esc_url($base_uri . $imagen['url']); ?>" class="glightbox" data-gallery="servicios">
          <img 
            src="<?php echo esc_url($base_uri . $imagen['url']); ?>" 
            alt="<?php echo esc_attr($imagen['alt']); ?>" 
            loading="lazy">
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>