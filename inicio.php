<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Telecom Network Perú</title>
  <link rel="stylesheet" href="inicio.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>

  <header>
    <nav class="navbar" role="navigation" aria-label="Menú principal">
      <div class="logo">TELECOM NETWORK PERU</div>
      
      <ul class="nav-links">
        <li><a href="inicio.php">Inicio</a></li>
        <li><a href="servicio.php">Servicios</a></li>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
      <div class="login">
          <i class="fa-solid fa-circle-user" id="userIcon" style="cursor:pointer;"></i>
        </div>
    </nav>
  </header>
<main>
<section class="image-section">
  <video autoplay muted loop playsinline class="background-video">
    <source src="videotec.mp4" type="video/mp4">
    Tu navegador no soporta el video.
  </video>
  <div class="overlay-text">
    <h1>Bienvenido a <span class="highlight">TELECOM NETWORK PERU</span></h1>
    <p class="intro-text">
      Impulsamos la transformación digital de tu empresa con soluciones avanzadas de
      <strong>Enterprise Networking</strong> y <strong>Collaboration</strong>.
    </p>
  </div>
</section>
  
  
  <section id="inicio" class="inicio-section">
    <div class="contenedor-servicios-wrapper">
      
      <div class="contenedor-servicios card">
        <div class="card-inner">
          <div class="card-front">
            <article class="servicio">
              <h2>¿Qué es Enterprise Networking?</h2>
              <p>
                Diseñamos y gestionamos redes empresariales seguras y eficientes, asegurando conectividad continua y escalabilidad para tu negocio.
              </p>
              <ul>
                <li>Redes seguras y confiables.</li>
                <li>Optimización de infraestructura.</li>
                <li>Soporte para tecnologías avanzadas.</li>
              </ul>
              <div class="video-container">
                <iframe 
                  src="https://www.youtube.com/embed/1zVZ9cWFnCc" 
                  title="¿Qué es Enterprise Networking?" 
                  frameborder="0" 
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                  allowfullscreen>
                </iframe>
              </div>
            </article>
          </div>
          <div class="card-back">
            <article class="servicio-back">
              <h2>Más Información</h2>
              <p>Visita nuestro sitio para más detalles y asesoría personalizada.</p>
            </article>
          </div>
        </div>
      </div>
  
      <div class="contenedor-servicios card">
        <div class="card-inner">
          <div class="card-front">
            <article class="servicio">
              <h2>Soluciones de Collaboration</h2>
              <p>
                Facilitamos la comunicación y colaboración en tu equipo con herramientas que permiten videoconferencias, chats y trabajo remoto sin interrupciones.
              </p>
              <ul>
                <li>Herramientas para reuniones virtuales.</li>
                <li>Comunicación en tiempo real.</li>
                <li>Mejora de productividad y eficiencia.</li>
              </ul>
              <div class="video-container">
                <iframe 
                  src="https://www.youtube.com/embed/rSjCJGoH-GQ" 
                  title="Soluciones de Collaboration" 
                  frameborder="0" 
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                  allowfullscreen>
                </iframe>
              </div>
            </article>
          </div>
          <div class="card-back">
            <article class="servicio-back">
              <h2>Contáctanos</h2>
              <p>Obtén soporte y más información sobre nuestras soluciones.</p>
            </article>
          </div>
        </div>
      </div>
  
    </div>
  </section>
</main>
<button id="mostrarMas">MAS</button>

<section class="mas" style="background-image: url(sede.jpg); background-repeat: no-repeat; background-size: cover; display: none;">
  <h2 class="ofrece"><b>¿Qué te ofrecemos?</b></h2>

  <div class="ofrecemos">
    <i class="fas fa-drafting-compass text-4xl text-indigo-600 mb-4"></i>
    <h3><b>SOLUCIONES A LA MEDIDA</b></h3>
    <h4>Nos comprometemos a diseñar soluciones personalizadas que se ajusten perfectamente a tus necesidades y presupuesto. Nuestros servicios de mantenimiento garantizan que tus sistemas funcionen de manera óptima en todo momento, minimizando cualquier interrupción en tus operaciones.</h4>
  </div>

  <div class="ofrecemos">
    <i class="fas fa-users-cog text-4xl text-indigo-600 mb-4"></i>
    <h3><b>EQUIPO CUALIFICADO</b></h3>
    <h4>Contamos con un equipo de profesionales altamente cualificados y con más de 13 años de experiencia. ofrecemos: asesoramiento, diseño, implementación o mantenimiento en redes, telecomunicaciones y seguridad electrónica.</h4>
  </div>

  <div class="ofrecemos">
    <i class="fas fa-headset text-4xl text-indigo-600 mb-4"></i>
    <h3><b>ATENCIÓN SIN LÍMITES</b></h3>
    <h4>Servicio de atención técnica disponible para nuestros clientes las 24/7 en la ciudad de Ica. Sabemos que tus necesidades de redes, telecomunicaciones y seguridad electrónica pueden surgir en cualquier momento, por lo que estamos aquí para brindarte soporte confiable y oportuno, ya sea para tu hogar, negocio o empresa.</h4>
  </div>
</section>

    <footer>
      <div class="footer-container">
          <div class="footer-left">
              <p class="company-name">TELECOM NETWORK PERU S.A.C.</p>
              <div class="social-icons">
                  <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                  <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
              </div>
          </div>
          <div class="footer-right">
              <p>TELÉFONO: (01) 234-5678</p>
              <p>EMAIL: INFO@TELECOMNETWORK.PE</p>
              <p>&copy; 2025 Todos los derechos reservados</p>
          </div>
      </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script src="inicio.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 
  <div id="userModal" style="display:none;">
  <div class="modal-content" >
    <span id="closeModal">&times;</span>
    <h2>Bienvenido</h2>
    <p><strong>Nombre:</strong> <?php echo isset($_SESSION['nombres']) ? htmlspecialchars($_SESSION['nombres']) : ''; ?></p>
    <p><strong>Apellido:</strong> <?php echo isset($_SESSION['apellidos']) ? htmlspecialchars($_SESSION['apellidos']) : ''; ?></p>
    <button id="logoutBtn">Cerrar sesión</button>
  </div>
</div>
  <script>
  document.querySelectorAll('.contenedor-servicios').forEach(card => {
    card.addEventListener('click', () => {
      card.classList.toggle('flipped');
    });
  });
  </script>
  
  <script>
    $(document).ready(function(){
      // Mostrar modal al hacer clic en el icono usuario
      $('#userIcon').click(function(){
        $('#userModal').css('display', 'flex');
      });
  
      // Cerrar modal al hacer clic en la X
      $('#closeModal').click(function(){
        $('#userModal').hide();
      });
  
      // Cerrar sesión (redirigir a logout.php)
      $('#logoutBtn').click(function(){
        window.location.href = 'logout.php';
      });
  
      // Cerrar modal al hacer clic fuera del contenido
      $(window).click(function(e){
        if(e.target.id === 'userModal'){
          $('#userModal').hide();
        }
      });
    });
  </script>

  <script>
        // --- SCRIPT PARA MENÚ MÓVIL ---
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // --- SCRIPT PARA ANIMACIONES AL HACER SCROLL ---
        const sections = document.querySelectorAll('.fade-in-section');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                }
            });
        }, {
            threshold: 0.1 // La animación se activa cuando el 10% del elemento es visible
        });

        sections.forEach(section => {
            observer.observe(section);
        });
    </script>
</body>

</html>
