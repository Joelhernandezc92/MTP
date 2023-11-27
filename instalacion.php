<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias | Unidad Educativa Montepiedr</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">

 

    
    <link rel="stylesheet" href="css/fontawesome-all.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/events.css">
<style>
    body{
        background-color: #fff;
    }
    .grid-container {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(25%, 1fr)); /* Esto permite ajustar automáticamente las columnas */
  gap: 10px; /* Espacio entre las imágenes */
}

.grid-item {
  width: 100%; /* Ocupará todo el ancho de su contenedor */
  padding: 10px; /* Espacio alrededor de las imágenes */
}

img {
  width: 100%; /* Las imágenes se ajustarán al ancho de su contenedor */
  height: auto; /* Mantendrá la relación de aspecto original */
  border-radius: 10px;
}

/* Estilos para el modal */
.modal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7); /* Fondo oscurecido */
  overflow: auto;
}

.modal img {
  max-width: 80%;
  max-height: 80%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.close {
  position: absolute;
  top: 20px;
  right: 20px;
  color: #fff;
  font-size: 30px;
  cursor: pointer;
}

/* Estilos para el fondo oscurecido */
.modal:target {
  display: block;
}

.grid-container{
    margin-top: 100px;
}


    </style>


</head>
<body>
    <header class="encabezado fixed-top" role="banner" id="encabezado">
        <div id="info-box">
            <p>Email: <a href="mailto:info@montepiedra.edu.ec">info@montepiedra.edu.ec</a>   |   Teléfono: <a href="https://api.whatsapp.com/send/?phone=593958906944&text=">+593 4 600 5800</a></p>
          </div>
          
         
          <div class="container">
            <a href="indexloged.php" class="logo">
                <img src="./favicon.ico" alt="Logo del titulo" style="width: 30px;">
            </a>
            <button class="boton-buscar" >
              <a href="login.php">
              <img src="page fotos/guest-user.png"></a>
            </button>
            <button type="button" class="boton-menu d-md-none" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
            <i class="fas fa-bars" aria-hidden="true"></i>
          </button>

            <nav id="menu-principal" class="collapse">
                <ul>
                    <li ><a href="index.php">Inicio</a></li>
                    <li><a href="index.php#ofa">Oferta Académica</a></li>
                    <li><a target="_blank" href="https://mtpnewsonline.com/">Eventos y Noticias</a></li>
                    <li><a href="admisiones.php">Admisiones</a></li>
                </ul>
            </nav>

        </div>
</header>
<div class="grid-container">
<div class="grid-item"><a href="#modal-1"><img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.10 PM (1).jpeg" alt="Imagen 1"></a></div>
<div class="grid-item"><a href="#modal-2"><img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.10 PM.jpeg" alt="Imagen 2"></a></div>
<div class="grid-item"><a href="#modal-3"><img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.11 PM (1).jpeg" alt="Imagen 3"></a></div>
<div class="grid-item"><a href="#modal-4"><img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.12 PM.jpeg" alt="Imagen 4"></a></div>
<div class="grid-item"><a href="#modal-5"><img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.14 PM.jpeg" alt="Imagen 5"></a></div>
<div class="grid-item"><a href="#modal-6"><img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.15 PM.jpeg" alt="Imagen 6"></a></div>
<div class="grid-item"><a href="#modal-7"><img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.16 PM.jpeg" alt="Imagen 7"></a></div>
<div class="grid-item"><a href="#modal-8"><img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.17 PM.jpeg" alt="Imagen 8"></a></div>
<div class="grid-item"><a href="#modal-9"><img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.18 PM (1).jpeg" alt="Imagen 9"></a></div>
<div class="grid-item"><a href="#modal-10"><img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.18 PM.jpeg" alt="Imagen 10"></a></div>
<div class="grid-item"><a href="#modal-11"><img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.19 PM.jpeg" alt="Imagen 11"></a></div>
<div class="grid-item"><a href="#modal-12"><img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.20 PM.jpeg" alt="Imagen 12"></a></div>

    </div>

<!-- Modales para imágenes -->
<div id="modal-1" class="modal">
    <span class="close" onclick="closeModal('modal-1')">&times;</span>
    <img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.10 PM (1).jpeg" alt="Imagen 1">
</div>

<div id="modal-2" class="modal">
    <span class="close" onclick="closeModal('modal-2')">&times;</span>
    <img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.10 PM.jpeg" alt="Imagen 2">
</div>

<div id="modal-3" class="modal">
    <span class="close" onclick="closeModal('modal-3')">&times;</span>
    <img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.11 PM (1).jpeg" alt="Imagen 3">
</div>

<div id="modal-4" class="modal">
    <span class="close" onclick="closeModal('modal-4')">&times;</span>
    <img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.12 PM.jpeg" alt="Imagen 4">
</div>

<div id="modal-5" class="modal">
    <span class="close" onclick="closeModal('modal-5')">&times;</span>
    <img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.14 PM.jpeg" alt="Imagen 5">
</div>

<div id="modal-6" class="modal">
    <span class="close" onclick="closeModal('modal-6')">&times;</span>
    <img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.15 PM.jpeg" alt="Imagen 6">
</div>

<div id="modal-7" class="modal">
    <span class="close" onclick="closeModal('modal-7')">&times;</span>
    <img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.16 PM.jpeg" alt="Imagen 7">
</div>

<div id="modal-8" class="modal">
    <span class="close" onclick="closeModal('modal-8')">&times;</span>
    <img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.17 PM.jpeg" alt="Imagen 8">
</div>

<div id="modal-9" class="modal">
    <span class="close" onclick="closeModal('modal-9')">&times;</span>
    <img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.18 PM (1).jpeg" alt="Imagen 9">
</div>

<div id="modal-10" class="modal">
    <span class="close" onclick="closeModal('modal-10')">&times;</span>
    <img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.18 PM.jpeg" alt="Imagen 10">
</div>


<div id="modal-11" class="modal">
    <span class="close" onclick="closeModal('modal-11')">&times;</span>
    <img src="page fotos\INSTALACION\WhatsApp Image 2022-09-23 at 2.35.19 PM.jpeg" alt="Imagen 10">
</div>

<div id="modal-12" class="modal">
    <span class="close" onclick="closeModal('modal-12')">&times;</span>
    <img src="page fotos/INSTALACION/WhatsApp Image 2022-09-23 at 2.35.18 PM.jpeg" alt="Imagen 10">
</div>
    <script>

  function openModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = 'block';
  }

  function closeModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = 'none';
  }

  document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
      var modals = document.querySelectorAll('.modal');
      for (var i = 0; i < modals.length; i++) {
        modals[i].style.display = 'none';
      }
    }
  });

    </script>
</body>
<footer>
    <div class="footer-container">
      <div class="footer-section">
        <h3>Accesos</h3>
        <ul>
          <li>Inicio</li>
          <li>Historia</li>
          <li>Misión &Visión</li>
          <li>Consejo Ejecutivo</li>
          <li>Protección a menores</li>
        </ul>
      </div>
  
      <div class="footer-section">
        <h3>Servicios</h3>
        <ul>
          <li>Admisiones</li>
          <li>Instalaciones</li>
          <li>Educación Básica</li>
          <li>Bachillerato Técnico</li>
        </ul>
      </div>
  
      <div class="footer-section">
        <h3>Contacto</h3>
        <p>info@montepiedra.edu.ec</p>
        <p>+593 4 600 5800</p>
        <p>Km 6 ½ Vía Daule</p>
        <p>Guayaquil - Ecuador</p>
      </div>
  
      <div class="footer-section">
        <h3>Síguenos en:</h3>
        <ul class="social-media-links">

          <li><a href="https://www.facebook.com/UnidadEducativaMontepiedra">Facebook</a></li>
          <li><a href="https://twitter.com/UEM_info">Twitter</a></li>
          <li><a href="https://www.linkedin.com/company/montepiedra/">Linkedin</a></li>
        </ul>
        <h3><a href="https://idukay.net/#/login">Agenda Virtual</a></h3>
        <p>© 2023 OrstedSolutions.</p>
      </div>
    </div>


  </footer>
</html>