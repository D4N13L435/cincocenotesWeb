
</main>
<footer>
  <div class=" footer-content">
    <p>© <?php echo date('Y'); ?> 5 Cenotes. Todos los derechos reservados.</p>
    <p>Explora la magia subterránea de Lázaro Cárdenas.</p>
    <p><em>"Donde el agua susurra historias antiguas..."</em></p>
    <nav class="footer-nav">
      <!-- <a href="/aviso-privacidad">Aviso de privacidad</a> | -->
      <!-- <a href="<?php echo site_url('/contacto'); ?>">Contacto</a> -->
    </nav>
  </div>
</footer>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "5 Cenotes",
  "description": "Reserva de 60 hectáreas dedicada al ecoturismo en Kantunilkín, Q. Roo, con actividades de nado en cenotes, senderismo interpretativo y observación de flora y fauna.",
  "telephone": "+52-984-280-74-74",
  "url": "<?php echo esc_url( home_url( '/' ) ); ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Kantunilkín",
    "addressRegion": "Quintana Roo",
    "addressCountry": "MX"
  },
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
      ],
      "opens": "10:00",
      "closes": "17:00"
    }
  ],
  "image": "<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/cenote2.webp"
}
</script>
<?php wp_footer(); ?>
</body>
</html>
