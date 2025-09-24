<?php
/**
 * Template Name: Contáctanos
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<section class="contactanos section-padding-sm bg-white">
  <div class="container-F text-center">
    <h2 class="text-primary heading-md mb-4">Conecta con nosotros</h2>
    <p class="text-block text-lg mb-6">Síguenos y escríbenos en nuestras redes sociales.</p>

    <!-- Redes Sociales -->
    <div class="contact-cards">
      <div class="card whatsapp">
        <div class="card-banner">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsappLogo.png" alt="WhatsApp">
        </div>
        <h3>WhatsApp</h3>
        <p>+52 984-280-74-74</p>
        <a href="https://wa.me/529842807474" target="_blank">Enviar mensaje</a>
      </div>

      <div class="card facebook">
        <div class="card-banner">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/FacebookLogo.png" alt="Facebook">
        </div>
        <h3>Facebook</h3>
        <p>@5 cenotes spr de ir</p>
        <a href="https://www.facebook.com/profile.php?id=61572421927174" target="_blank">Ir a Facebook</a>
      </div>

      <div class="card instagram">
        <div class="card-banner">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/InstaLogo.png" alt="Instagram">
        </div>
        <h3>Instagram</h3>
        <p>@5.cenotes</p>
        <a href="https://www.instagram.com/5.cenotes?igsh=NnRoeXZjNHVieXdu" target="_blank">Ver perfil</a>
      </div>
    </div>
  </div>
</section>

<!-- Información de contacto -->
<section class="section-padding-sm bg-light">
  <div class="container-F text-center">
    <h2 class="heading-md text-primary mb-4">Horario de atención</h2>
    <p><strong>Horario de atención:</strong><br>
       Lunes a Domingo: 10:00 am - 5:00 pm
    </p>
  </div>
</section>

<!-- Mapa -->
<section class="section-padding-sm">
  <div class="container-F text-center">
    <h2 class="heading-md text-primary mb-4">Ubicación</h2>
    <div class="mapa-container" style="max-width: 800px; margin: 0 auto;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32217.79179095057!2d-87.5832915480824!3d21.167361230980053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5207d268453619%3A0x1788f146be17887d!2s5%20Cenotes!5e0!3m2!1ses-419!2smx!4v1754874900125!5m2!1ses-419!2smx"
        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
      </iframe>
    </div>
  </div>
</section>

<!-- Imagen final -->
<section class="section-padding-sm bg-image-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/contacto-final.jpg');">
  <div class="container-F text-center text-white">
    <h2 class="heading-lg text-shadow">¡Estamos listos para recibirte!</h2>
  </div>
</section>

<?php
get_footer();
?>


