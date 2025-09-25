<?php
/**
 * Template Name: Servicios Personalizado
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<main id="main-content">
  <section class="servicios-page section-padding bg-white">
    <div class="container-F">

      <h1 class="heading-xl text-primary text-center mb-4">Servicios y Experiencias</h1>
      <p class="parrafo-lead text-block text-center mb-5">
        Vive la magia de los cenotes a través de nuestras actividades ecoturísticas diseñadas para conectar con la naturaleza y la cultura local.
      </p>

      <?php 
        get_template_part('template-parts/servicios/servicios-cards');
        get_template_part('template-parts/servicios/servicios-paquetes');
        get_template_part('template-parts/servicios/servicios-galeria');
      ?>

      <div class="card-destacada mt-5 p-4">
        <p class="text-justify font-bold">
          *Todos los paquetes incluyen: Chalecos salvavidas, área de descanso, estacionamiento, sanitarios, mesas y asientos.
        </p>
      </div>

    </div>
  </section>
</main>

<?php
get_footer();
?>
