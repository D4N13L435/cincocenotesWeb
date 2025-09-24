document.addEventListener("DOMContentLoaded", function () {
  const video = document.getElementById("cenoteVideo");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting && !video.paused) {
          video.pause();
        }
      });
    },
    { threshold: 0.5 } // Pausa si menos del 50% del video está visible
  );

  observer.observe(video);
});


// document.addEventListener("DOMContentLoaded", function(){
//     const lightbox = GLightbox({ selector: '.glightbox' });
// });

document.addEventListener("DOMContentLoaded", function () {
  const lightbox = GLightbox({ selector: '.glightbox' });

  // Mostrar loader al hacer clic en cualquier imagen
  document.querySelectorAll('.glightbox').forEach(el => {
    el.addEventListener('click', () => {
      const loader = document.createElement('div');
      loader.classList.add('glightbox-loading');
      document.body.appendChild(loader);

      // Elimina el loader cuando el slide cambie (ya cargó)
      lightbox.on('slide_changed', () => {
        const loader = document.querySelector('.glightbox-loading');
        if (loader) loader.remove();
      });
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const toggleBtn = document.querySelector(".nav-toggle");
  const navMenu = document.querySelector(".nav-menu");
  const icon = toggleBtn.querySelector("i");

  toggleBtn.addEventListener("click", () => {
    navMenu.classList.toggle("active");

    // Cambiar ícono entre hamburguesa y X
    if (navMenu.classList.contains("active")) {
      icon.classList.remove("fa-bars");
      icon.classList.add("fa-times");
    } else {
      icon.classList.remove("fa-times");
      icon.classList.add("fa-bars");
    }
  });
});
