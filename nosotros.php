<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Telecom Network Perú</title>
  <link rel="stylesheet" href="nosotros.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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

 <!-- Sección 1 -->
 <section id="quienes-somos" class="seccion">
    <img src="Imagen1.jpg" alt="Quienes Somos" class="imagen-fondo" />
    <div class="texto sobre-imagen">
      <h2 class="titulo">Quiénes Somos</h2>
      <p>
        Somos una empresa comprometida con ofrecer soluciones tecnológicas de
        comunicación, conectividad y servicios de red de alta calidad.
      </p>
    </div>
  </section>

  <!-- Sección 2 -->
  <section id="enfoque" class="seccion">
    <img src="Imagen2.jpg" alt="Enfoque" class="imagen" />
    <div class="texto">
      <h2 class="titulo">¿Cuál es nuestro enfoque?</h2>
      <p>
        Nuestro enfoque está centrado en el cliente, priorizando la innovación
        y la eficiencia en cada uno de nuestros proyectos.
      </p>
    </div>
  </section>

  <!-- Sección 3 -->
  <section id="mision" class="seccion">
    <div class="texto">
      <h2 class="titulo">Misión</h2>
      <p>
        Brindar servicios de telecomunicaciones confiables, modernos y
        sostenibles que impulsen la conectividad y el desarrollo de nuestros
        clientes.
      </p>
    </div>
    <img src="Imagen3.jpg" alt="Misión" class="imagen" />
  </section>

  <!-- Sección 4 -->
  <section id="vision" class="seccion">
    <img src="Imagen4.jpg" alt="Visión" class="imagen" />
    <div class="texto">
      <h2 class="titulo">Visión</h2>
      <p>
        Ser líderes en innovación y tecnología, reconocidos por nuestra
        excelencia en soluciones de red y telecomunicaciones a nivel nacional.
      </p>
    </div>
  </section>


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

  <!-- 🔹 FOOTER -->
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

 
  <script src="mains.js"></script>
</body>
</html>