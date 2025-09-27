
<section id="experiencias" class="section-padding">
  
  <div class="gallery container-F">
    <h2 class="text-center text-primary">Explora Nuestros Cenotes</h2>
    <p class="text-center text-lg mb-5">Descubre la belleza natural de nuestra región a través de momentos capturados.</p>
    <div class="gallery-grid">
      <div class="gallery-item">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/senderismo.webp" class="glightbox">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/senderismo.webp" alt="Persona caminando en un sendero selvático hacia un cenote." loading="lazy">
        </a>
      </div>
      <div class="gallery-item">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/cenote1.webp" class="glightbox">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cenote1.webp" alt="Vista acuática de un cenote abierto con aguas cristalinas." loading="lazy">
        </a>
      </div>
      <div class="gallery-item">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/cenote2.webp" class="glightbox">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cenote2.webp" alt="Cenote semiabierto rodeado de vegetación exuberante." loading="lazy">
        </a>
      </div>
    </div>
  </div>

  <!-- <div class="video-section wrapper">
    <h2 class="text-center text-primary">Vive la Experiencia</h2>
    <div class="video-container">
      <video id="cenoteVideo" controls muted playsinline poster="<?php echo get_template_directory_uri(); ?>/assets/img/poster-video.png">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/img/cenote1.mp4" type="video/mp4">
        Tu navegador no soporta el video.
      </video>
    </div>
  </div> -->

  <?php
$imagenes_galeria = [
    ['url' => 'galeria/c5.jpg', 'alt' => ''],
    ['url' => 'galeria/c6.jpg', 'alt' => 'Luz del sol entrando en un cenote semiabierto.'],
    ['url' => 'galeria/c10.jpg', 'alt' => 'Visitantes disfrutando de un baño en el cenote.'],
];
$base_uri = get_template_directory_uri() . '/assets/img/';
?>

<div id="galeria-servicios" class="servicios-galeria">
  <div class="container-F">
    <h2 class="text-primary heading-lg text-center mb-4">Momentos en 5 Cenotes</h2>
    <p class="text-lg text-center mb-5">Un vistazo a las experiencias que te esperan.</p>

    <div class="splide" id="gallery-slider" role="group" aria-label="Galería de imágenes">
      <div class="splide__track">
        <ul class="splide__list">
          <?php $index = 0; foreach ( $imagenes_galeria as $imagen ) : ?>
            <li class="splide__slide">
              <a 
                href="<?php echo esc_url($base_uri . $imagen['url']); ?>" 
                class="glightbox" 
                data-gallery="slide-<?php echo $index; /* Galería única para cada imagen */ ?>">
                <img 
                  data-splide-lazy="<?php echo esc_url($base_uri . $imagen['url']); ?>" 
                  alt="<?php echo esc_attr($imagen['alt']); ?>">
              </a>
            </li>
          <?php $index++; endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
  </div>

</section>