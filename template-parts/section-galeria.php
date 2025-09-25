<!-- 
<section class="gallery galeria section-padding">
  <div class="container-F">
  <h2 class="text-center text-primary" >Explora Nuestros Cenotes</h2>
  <p class="text-center text-lg">Descubre la belleza natural de nuestra región</p>
  <div class="gallery-grid">
    <div class="gallery-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/senderismo.webp" alt="Cenote Azul">
      <div class="overlay">Senderismo</div>
    </div>
    <div class="gallery-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cenote1.webp" alt="Cenote Escondido">
      <div class="overlay">Nado en cenotes</div>
    </div>
    <div class="gallery-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cenote2.webp" alt="Cenote Místico">
      <div class="overlay">Visita cenotes</div>
    </div>
  </div>
</div>
</section>


<section class="video-section">
  <h2 class="text-center text-primary" > Vive la experiencia</h2>
  <div class="video-container">
    <video id="cenoteVideo" controls muted playsinline>
      <source src="<?php echo get_template_directory_uri(); ?>/assets/img/cenote1.mp4" type="video/mp4">
      Tu navegador no soporta el video.
    </video>
  </div>
</section> -->

<section id="experiencias" class="section-padding">
  
  <div class="gallery container-F">
    <h2 class="text-center text-primary">Explora Nuestros Cenotes</h2>
    <p class="text-center text-lg mb-5">Descubre la belleza natural de nuestra región a través de momentos capturados.</p>
    <div class="gallery-grid">
      <div class="gallery-item">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/senderismo.webp" class="glightbox">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/senderismo.webp" alt="Persona caminando en un sendero selvático hacia un cenote." loading="lazy">
          <div class="overlay">Senderismo</div>
        </a>
      </div>
      <div class="gallery-item">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/cenote1.webp" class="glightbox">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cenote1.webp" alt="Vista acuática de un cenote abierto con aguas cristalinas." loading="lazy">
          <div class="overlay">Nado en cenotes</div>
        </a>
      </div>
      <div class="gallery-item">
        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/cenote2.webp" class="glightbox">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cenote2.webp" alt="Cenote semiabierto rodeado de vegetación exuberante." loading="lazy">
          <div class="overlay">Visita cenotes</div>
        </a>
      </div>
    </div>
  </div>

  <div class="video-section wrapper">
    <h2 class="text-center text-primary">Vive la Experiencia</h2>
    <div class="video-container">
      <video id="cenoteVideo" controls muted playsinline poster="<?php echo get_template_directory_uri(); ?>/assets/img/poster-video.png">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/img/cenote1.mp4" type="video/mp4">
        Tu navegador no soporta el video.
      </video>
    </div>
  </div>

</section>



