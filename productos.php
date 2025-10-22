<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TELECOM NETWORK PERU</title>
    <link rel="stylesheet" href="productos.css" />
    <script src="productosss.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <!-- Header -->
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

    <!-- PRODUCTO PRINCIPAL -->
    <main class="product-section">
        <div class="product-container">
            <img src="Switch Cisco Catalyst 9300.jpg" alt="Switch Cisco Catalyst 9300" class="main-image" />
            <div class="product-info">
                <h2>Switch Cisco Catalyst 9300</h2>
                <h4>Subheading</h4>
                <p class="price">$299.99</p>
                <p class="desc">El mejor en rendimiento para redes empresariales seguras y escalables.</p>
                <button class="cart-btn">Añadir al carro</button>
                <p class="note">
                    “Este router de última generación garantiza alta velocidad, seguridad avanzada y escalabilidad para medianas y grandes empresas. Ideal para implementar redes estables y confiables.”
                </p>
            </div>
        </div>
        <!-- Modal Compra -->
<div id="buyModal" class="modal">
  <div class="modal-content">
    <span id="closeBuyModal" class="close">&times;</span>
    <h2>Producto añadido al carrito</h2>
    <p>Switch Cisco Catalyst 9300 ha sido añadido a tu carrito.</p>
    <button id="goToCartBtn">Ir al carrito</button>
    <button id="continueShoppingBtn">Seguir comprando</button>
  </div>
</div>
    </main>

  <!-- 🔹 PRODUCTOS RELACIONADOS -->
  <section class="related-section">
    <h3>Productos Relacionados</h3>
    <div class="related-grid">

      <div class="card">
        <img src="Fortinet.jpg" alt="Firewall Fortinet FG-100F">
        <h4>Firewall Fortinet FG-100F</h4>
        <p>Protección avanzada contra amenazas en redes empresariales</p>
        <p class="price">$199.99</p>
      </div>

      <div class="card">
        <img src="Switch Cisco Catalyst 9500.jpg" alt="Switch Cisco Catalyst 9500">
        <h4>Switch Cisco Catalyst 9500</h4>
        <p>Switch de alto rendimiento para la columna vertebral de la red</p>
        <p class="price">$499.99</p>
      </div>

      <div class="card">
        <img src="audifonos.jpg" alt="Auriculares Cisco Headset 730">
        <h4>Auriculares Cisco Headset 730</h4>
        <p>Headset inalámbrico para reuniones con cancelación de ruido</p>
        <p class="price">$199.99</p>
      </div>

      <div class="card">
        <img src="ar2200-mx.jpg" alt="Huawei AR2200 Series">
        <h4>Huawei AR2200 Series</h4>
        <p>Router modular de alto rendimiento con funciones avanzadas de seguridad</p>
        <p class="price">$250.99</p>
      </div>

      <div class="card">
        <img src="airpords.jpg" alt="Access Point Aruba Instant On">
        <h4>Access Point Aruba Instant On</h4>
        <p>Wi-Fi empresarial de alta velocidad y fácil gestión</p>
        <p class="price">$149.99</p>
      </div>

      <div class="card">
        <img src="webex.jpg" alt="Cisco Webex Room Kit">
        <h4>Cisco Webex Room Kit</h4>
        <p>Kit de videoconferencia con cámara y micrófonos integrados</p>
        <p class="price">$799.99</p>
      </div>

      <div class="card">
        <img src="videocamara.jpg" alt="Cámara de videoconferencia Poly">
        <h4>Cámara de videoconferencia Poly</h4>
        <p>Cámara todo en uno para salas de reuniones pequeñas y medianas</p>
        <p class="price">$399.99</p>
      </div>

    </div>
  </section>

  <!-- 🔹 MODAL DE PRODUCTO -->
  <div id="modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <img id="modal-img" src="" alt="Producto" />
      <h2 id="modal-title"></h2>
      <p id="modal-desc"></p>
      <p id="modal-price"></p>
    </div>
  </div>

  <!-- 🔹 CANVAS DE FONDO -->
  <canvas id="fondo"></canvas>

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
  // Obtener elementos
  const buyModal = document.getElementById('buyModal');
  const closeBuyModal = document.getElementById('closeBuyModal');
  const addToCartBtn = document.querySelector('.cart-btn');
  const goToCartBtn = document.getElementById('goToCartBtn');
  const continueShoppingBtn = document.getElementById('continueShoppingBtn');

  // Mostrar modal al hacer clic en "Añadir al carro"
  addToCartBtn.addEventListener('click', () => {
    buyModal.style.display = 'flex';
  });

  // Cerrar modal al hacer clic en la X
  closeBuyModal.addEventListener('click', () => {
    buyModal.style.display = 'none';
  });

  // Cerrar modal al hacer clic fuera del contenido
  window.addEventListener('click', (event) => {
    if (event.target === buyModal) {
      buyModal.style.display = 'none';
    }
  });

  // Redirigir al carrito (puedes cambiar la URL)
  goToCartBtn.addEventListener('click', () => {
    window.location.href = 'carrito.php';
  });

  // Seguir comprando cierra el modal
  continueShoppingBtn.addEventListener('click', () => {
    buyModal.style.display = 'none';
  });
</script>
  <footer>
      <div class="footer-container">
          <div class="footer-left">
              <p class="company-name">TELECOM NETWORK PERU S.A.C.</p>
              <div class="social-icons">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
          </div>
          <div class="footer-right">
              <p>TELÉFONO: (01) 234-5678</p>
              <p>EMAIL: INFO@TELECOMNETWORK.PE</p>
              <p>&copy; 2025 Todos los derechos reservados</p>
          </div>
      </div>
  </footer>

  <script>
    $(document).ready(function () {
        // Mostrar modal al presionar el ícono de usuario
        $("#userIcon").click(function () {
            $("#userModal").css("display", "flex");
        });

        // Cerrar modal al hacer clic en la X
        $("#closeModal").click(function () {
            $("#userModal").fadeOut();
        });

        // Cerrar sesión (redirigir)
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