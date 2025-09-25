document.addEventListener('DOMContentLoaded', function () {

  /**
   * 1. Lógica para el menú de navegación móvil (hamburguesa).
   */
function initMobileNav() {
  const toggleBtn = document.querySelector(".nav-toggle");
  const navMenu = document.querySelector(".nav-menu");

  if (!toggleBtn || !navMenu) {
    return;
  }

  const icon = toggleBtn.querySelector("i");

  // Función para cerrar el menú
  const closeMenu = () => {
    navMenu.classList.remove("active");
    toggleBtn.setAttribute('aria-expanded', 'false');
    icon.classList.remove("fa-times");
    icon.classList.add("fa-bars");
  };

  // Función para abrir el menú
  const openMenu = () => {
    navMenu.classList.add("active");
    toggleBtn.setAttribute('aria-expanded', 'true');
    icon.classList.remove("fa-bars");
    icon.classList.add("fa-times");
  };

  toggleBtn.addEventListener("click", (e) => {
    e.stopPropagation(); // Evita que el clic en el botón se propague y cierre el menú inmediatamente
    const isExpanded = navMenu.classList.contains("active");
    if (isExpanded) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  // NUEVA LÓGICA: Cierre al hacer clic fuera
  document.addEventListener('click', (e) => {
    if (navMenu.classList.contains('active')) {
      // Si el clic NO fue dentro del menú
      if (!navMenu.contains(e.target)) {
        closeMenu();
      }
    }
  });
}

  /**
   * 2. Lógica para pausar el video cuando sale de la pantalla.
   */
  function initVideoObserver() {
    const video = document.getElementById("cenoteVideo");

    // Si el video no existe en esta página, no hacemos nada.
    if (!video) {
      return;
    }

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach(entry => {
          // Si el video no está visible y no está pausado, lo pausamos.
          if (!entry.isIntersecting && !video.paused) {
            video.pause();
          }
        });
      },
      { threshold: 0.5 } // Se activa si menos del 50% del video está visible.
    );
    observer.observe(video);
  }

  /**
   * 3. Lógica para la galería de imágenes GLightbox.
   */
  function initLightbox() {
    // Verificamos si hay elementos de galería en la página.
    if (document.querySelector('.glightbox')) {
      const lightbox = GLightbox({ selector: '.glightbox' });

      // Lógica de carga optimizada
      let loader = null;

      lightbox.on('open', () => {
        // Creamos y añadimos el loader solo cuando se abre la galería.
        loader = document.createElement('div');
        loader.classList.add('glightbox-loading');
        document.body.appendChild(loader);
      });

      lightbox.on('slide_changed', () => {
        // Cuando la imagen ya cargó y se muestra, eliminamos el loader.
        if (loader) {
          loader.remove();
          loader = null;
        }
      });

      lightbox.on('close', () => {
        // Nos aseguramos de eliminar el loader si se cierra la galería antes de que cargue.
        if (loader) {
          loader.remove();
          loader = null;
        }
      });
    }
  }

  // --- Inicializamos todas las funcionalidades ---
  initMobileNav();
  initVideoObserver();
  initLightbox();

});
