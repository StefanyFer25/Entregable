<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Telecom Network Peru</title>
  <link rel="stylesheet" href="contacto.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a2e0c50a3b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
   <!-- jQuery (necesario para el modal) -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

  <!-- Barra de navegación -->
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

   <!-- Banner principal -->
   <section class="banner">
    <img src="imagenes/telecom logo.jpg" alt="Banner Telecom Network Peru">
  </section>

  <!-- Contenido principal -->
  <main class="contenido">
    <h2>CENTRO DE AYUDA</h2>
    <ul>
      <li>Contacta con nuestro asistente: <strong>+51 977666427</strong></li>
      <li>Nuestro correo: <strong>telecomnetworksperu@gmail.com</strong></li>
    </ul>

    <h3>Síguenos en nuestras redes sociales</h3>
    <ul class="redes">
      <li>
        <i class="fab fa-facebook-square"></i>
        Facebook: 
        <strong>
          <a href="https://www.facebook.com/TelecomNetworkPeru" target="_blank" rel="noopener noreferrer">
            Telecom network peru
          </a>
        </strong>
      </li>
    
      <li>
        <i class="fab fa-tiktok"></i>
        Tiktok: 
        <strong>
          <a href="https://www.tiktok.com/@Telecom_network_peru20" target="_blank" rel="noopener noreferrer">
            Telecom network peru 20
          </a>
        </strong>
      </li>
    
      <li>
        <i class="fab fa-instagram"></i>
        Instagram: 
        <strong>
          <a href="https://www.instagram.com/Telecom_network_peru" target="_blank" rel="noopener noreferrer">
            @Telecom_network_peru
          </a>
        </strong>
      </li>
    </ul>
    

    <!-- Nueva sección: Ubícanos en nuestras sedes -->
    <section class="sedes">
      <h3>Ubícanos en nuestras sedes</h3>
      <div class="sede-grid">

        <div class="sede" 
             data-url="https://www.google.com/maps?q=Av.+Próceres+de+la+Independencia+32,+San+Juan+de+Lurigancho,+Lima">
          <img src="imagenes/lima-sanjuandelurigancho.jpg" alt="Sede Lima San Juan de Lurigancho">
          <h4>LIMA</h4>
          <p>Av. Próceres de la Independencia cdra. 32,<br>San Juan de Lurigancho 15419</p>
        </div>

        <div class="sede" 
             data-url="https://www.google.com/maps?q=Av+Pachacutec+3736,+Villa+María+del+Triunfo,+Lima">
          <img src="imagenes/lima-villamariadeltriunfo.jpg" alt="Sede Lima Villa María del Triunfo">
          <h4>LIMA</h4>
          <p>C.C Real Plaza - 3, Av Pachacutec 3736,<br>Villa María del Triunfo 15817</p>
        </div>

        <div class="sede" 
             data-url="https://www.google.com/maps?q=Av+Porongoche+500,+Paucarpata,+Arequipa">
          <img src="imagenes/arequipa.jpg" alt="Sede Arequipa">
          <h4>AREQUIPA</h4>
          <p>Av. Porongoche 500,<br>Paucarpata 04001</p>
        </div>
        </section>
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

  <!-- Footer -->
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


  <!-- Script para abrir Google Maps al hacer clic -->
  <script>
    document.querySelectorAll('.sede').forEach(sede => {
      sede.addEventListener('click', () => {
        const url = sede.getAttribute('data-url');
        if (url) {
          window.open(url, '_blank');
        }
      });
    });
  </script>
 <!-- 🔹 SCRIPT -->
 <script>
    $(document).ready(function () {
        // Mostrar modal solo si el usuario ha iniciado sesión
        $("#userIcon").click(function () {
            <?php if (isset($_SESSION['nombres'])): ?>
                $("#userModal").css("display", "flex");
            <?php else: ?>
                window.location.href = "login.html";
            <?php endif; ?>
        });

        // Cerrar modal al hacer clic en la X
        $("#closeModal").click(function () {
            $("#userModal").fadeOut();
        });

        // Cerrar sesión (redirige a logout.php)
        $("#logoutBtn").click(function () {
            window.location.href = "logout.php";
        });

        // Cerrar modal si se hace clic fuera del contenido
        $(window).click(function (e) {
            if (e.target.id === "userModal") {
                $("#userModal").fadeOut();
            }
        });
    });
  </script>

</body>
</html>
