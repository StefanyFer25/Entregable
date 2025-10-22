<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Servicios - Telecom Network Perú</title>
    
    <link rel="stylesheet" href="inicio.css" /> 
    <link rel="stylesheet" href="servicio.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
      <!-- jQuery (necesario para el modal) -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

    <main class="services-page">
        <div class="container">
            <h1>Nuestros Servicios</h1>
            <p class="page-subtitle">
                Soluciones integrales para la transformación digital de tu empresa.
            </p>

            <div class="service-row">
                <div class="service-text">
                    <h3>Transformación Digital Integral</h3>
                    <p>
                      Te acompañamos en la evolución de tu negocio hacia el futuro digital. Diseñamos e implementamos estrategias personalizadas que optimizan tus procesos, mejoran la experiencia de tus clientes y aumentan tu competitividad. Desde la adopción de la nube hasta el análisis de datos, te proporcionamos las herramientas para impulsar la eficiencia y el crecimiento de tu empresa.
                    </p>
                </div>
                <div class="service-image">
                    <img src="imagenes/1.png" alt="Instalación de infraestructura de redes" />
                </div>
            </div>

            <div class="service-row reverse">
                <div class="service-image">
                    <img src="imagenes/3.png" alt="Sala de monitoreo de seguridad electrónica" />
                </div>
                <div class="service-text">
                    <h3>Seguridad Electrónica</h3>
                    <p>
                      Protege lo que más importa con nuestras soluciones de seguridad inteligente. Integramos sistemas de videovigilancia de alta definición (CCTV), control de accesos biométrico y alarmas conectadas para ofrecerte una protección ininterrumpida y monitoreo 24/7. Ten el control total de tus instalaciones desde cualquier lugar y obtén la tranquilidad que tu negocio merece.
                    </p>
                </div>
            </div>

            <div class="service-row">
                <div class="service-text">
                    <h3>Automatización y Control</h3>
                    <p>
                      Lleva tu productividad al siguiente nivel. Implementamos sistemas de automatización que minimizan el error humano, reducen los costos operativos y optimizan los flujos de trabajo tanto en entornos industriales como comerciales. Desde la automatización de tareas repetitivas hasta el control de maquinaria compleja, te ayudamos a trabajar de manera más inteligente y eficiente.
                    </p>
                </div>
                <div class="service-image">
                    <img src="imagenes/4.png" alt="Línea de producción automatizada" />
                </div>
            </div>
            
            <div class="service-row reverse">
                <div class="service-image">
                    <img src="imagenes/5.png" alt="Panel de control de telemetría" />
                </div>
                <div class="service-text">
                    <h3>Telemetría y Soluciones M2M</h3>
                    <p>Obtén control total y datos en tiempo real de tus activos remotos. Nuestras soluciones de telemetría y M2M te permiten monitorear la ubicación, el estado y el rendimiento de vehículos, maquinaria y sensores a distancia. Toma decisiones estratégicas basadas en información precisa para optimizar la logística, prevenir fallos y gestionar tus recursos de forma eficaz.</p>
                </div>
            </div>

            <div class="service-row">
                <div class="service-text">
                    <h3>Correo Electrónico Empresarial y servicios</h3>
                    <p>Asegura la comunicación vital de tu negocio con nuestra infraestructura de correo profesional. Montamos y gestionamos servidores robustos basados en Linux, protegidos con potentes filtros antispam y antivirus. Con bases de datos MySQL, garantizamos un servicio de correo rápido, seguro y siempre disponible, proyectando una imagen profesional y confiable en cada mensaje.</p>
                </div>
                <div class="service-image">
                    <img src="imagenes/6.png" alt="Servidores de correo electrónico" />
                </div>
            </div>

            <div class="service-row reverse">
                <div class="service-image">
                    <img src="imagenes/2.png" alt="Equipo de ingenieros y técnicos" />
                </div>
                <div class="service-text">
                    <h3>Equipo Humano Capacitado</h3>
                    <p>El verdadero motor y el mayor activo de nuestra empresa es nuestro equipo. Contamos con un grupo multidisciplinario de ingenieros, arquitectos, técnicos y jefes de proyecto altamente cualificados y en constante formación para estar a la vanguardia de las últimas tecnologías.
                      Para nosotros, trabajar bajo estándares de calidad significa una atención meticulosa al detalle y el firme compromiso de superar las expectativas en cada entrega. La innovación no es solo una palabra, es nuestra forma de abordar cada desafío, buscando siempre soluciones creativas, eficientes y escalables. Este talentoso equipo colabora estrechamente contigo, asegurando que cada proyecto no solo se complete a tiempo y dentro del presupuesto, sino que se convierta en una solución robusta y exitosa que impulse tu negocio. Tu visión está en manos de expertos apasionados por la excelencia.</p>
                </div>
            </div>
        </div>
    </main>
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
    <script src="script.js"></script>
  <!-- SCRIPT -->
  <script>
  $(document).ready(function() {
    // Mostrar modal si hay sesión, de lo contrario redirigir
    $('#userIcon').click(function() {
      <?php if (isset($_SESSION['nombres'])): ?>
        $('#userModal').css('display', 'flex');
      <?php else: ?>
        window.location.href = 'login.html';
      <?php endif; ?>
    });

    // Cerrar modal
    $('#closeModal').click(function() {
      $('#userModal').fadeOut();
    });

    // Cerrar sesión
    $('#logoutBtn').click(function() {
      window.location.href = 'logout.php';
    });

    // Cerrar modal al hacer clic fuera
    $(window).click(function(e) {
      if (e.target.id === 'userModal') {
        $('#userModal').fadeOut();
      }
    });
  });
  </script>
</body>
</html>