<?php
/**
 * Template Name: Contáctanos
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<main id="main-content">
  <section id="redes-sociales" class="contactanos section-padding-sm bg-white">
    <div class="container-F text-center">
      <h1 class="text-primary heading-md mb-4">Conecta con nosotros</h1>
      <p class="text-block text-lg mb-6">Síguenos y escríbenos en nuestras redes sociales.</p>

      <div class="contact-cards">
  <div class="card whatsapp">
    <div class="card-banner">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/whatsappLogo.png" alt="Logo de WhatsApp" loading="lazy">
    </div>
    <h3>WhatsApp</h3>
    <p>+52 984-280-74-74</p>
    <a href="https://wa.me/529842807474" target="_blank" class="btn btn--whatsapp mb-3">Enviar mensaje</a>
  </div>

  <div class="card facebook">
    <div class="card-banner">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/FacebookLogo.png" alt="Logo de Facebook" loading="lazy">
    </div>
    <h3>Facebook</h3>
    <p>@5 cenotes spr de ir</p>
    <a href="https://www.facebook.com/profile.php?id=61572421927174" target="_blank" class="btn btn--facebook mb-3">Ir a Facebook</a>
  </div>

  <div class="card instagram">
    <div class="card-banner">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/InstaLogo.png" alt="Logo de Instagram" loading="lazy">
    </div>
    <h3>Instagram</h3>
    <p>@5.cenotes</p>
    <a href="https://www.instagram.com/5.cenotes?igsh=NnRoeXZjNHVieXdu" target="_blank" class="btn btn--instagram mb-3">Ver perfil</a>
  </div>
</div>

  <section id="horario" class="section-padding-sm bg-light">
    <div class="container-F text-center">
      <h2 class="heading-md text-primary mb-4">Horario de atención</h2>
      <p class="text-lg">
        <strong>Lunes a Domingo:</strong> 10:00 am - 5:00 pm
      </p>
    </div>
  </section>

  <section id="ubicacion-contacto" class="section-padding-sm">
    <div class="container-F text-center">
      <h2 class="heading-md text-primary mb-4">Ubicación</h2>
      <div class="mapa-container max-w-screen-md mx-auto">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32217.79179095057!2d-87.5832915480824!3d21.167361230980053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5207d268453619%3A0x1788f146be17887d!2s5%20Cenotes!5e0!3m2!1ses-419!2smx!4v1754874900125!5m2!1ses-419!2smx"
            width="100%" 
            height="400" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy"
            title="Ubicación de 5 Cenotes en Google Maps">
        </iframe>
      </div>
    </div>
  </section>

  <section id="cierre-contacto" class="section-padding-sm bg-image-cover relative" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/contacto-final.jpg');">
    <div class=""></div>
    <div class="container-F text-center text-oscuro" style="position: relative; z-index: 2;">
      <h2 class="heading-lg text-shadow">¡Estamos listos para recibirte!</h2>
    </div>
  </section>
</main>

<?php
get_footer();
?>
