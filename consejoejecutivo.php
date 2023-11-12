<?php
session_start();



include 'php/conexion_be.php';

$usuario = $_SESSION['usuario'];

if(isset($_SESSION['usuario'])){
  header("location: indexloged.php");
}


$query = "SELECT nombre_completo FROM usuarios WHERE usuario = '$usuario'";

$resultado = mysqli_query($conexion, $query);

$row = mysqli_fetch_array($resultado);


mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consejo Ejecutivo | Unidad Educativa Montepiedr</title>
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
.menu-of h2{
    margin-top: 6%;
}

.menu-content-of{
    background-color: #141414;
    border-radius: 10px ;
    color: #ffffff;
    margin-left: 40px;
    margin-right: 40px;
}

</style>


</head>
<body>
    
    <header class="encabezado fixed-top" role="banner" id="encabezado">
        <div id="info-box">
            <p>Email: <a href="mailto:info@montepiedra.edu.ec">info@montepiedra.edu.ec</a>   |   Teléfono: <a href="https://api.whatsapp.com/send/?phone=593958906944&text=">+593 4 600 5800</a></p>
          </div>
          <div class="container">
                <a href="index.html" class="logo">
                    <img src="./favicon.ico" alt="Logo del titulo" style="width: 30px;">
                </a>
                <button type="button" class="boton-buscar" >
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

  

<section class="menu-of">
                
                <h2>Consejo Ejecutivo</h2>
                <div class="menu-container-of">
                  <div class="menu-item-of">
                    <div class="menu-content-of">
                      <img src="https://www.montepiedra.edu.ec/web/image/642-690d9d67/IsmaelVillamar.JPG" alt="Imagen 1">
                      <h3>Ismael Villamar</h3>
                      <p>Rector</p>
                    </div>
                  </div>
                  <div class="menu-item-of">
                    <div class="menu-content-of">
                      <img src="https://www.montepiedra.edu.ec/web/image/643-a8fdb62d/WashingtonAlvarez.JPG" alt="Imagen 2">
                      <h3>Washington Álvarez</h3>

                     <p>Director General</p>
                    </div>
                  </div>
                  <div class="menu-item-of">
                    <div class="menu-content-of">
                      <img src="https://www.montepiedra.edu.ec/web/image/644-47b5becd/victorRivera.JPG" alt="Imagen 3">
                      <h3>Víctor Rivera</h3>

                     <p>Director de Primaria</p>

                    </div>
                  </div>

                </div>
                <div class="menu-container-of">
                  <div class="menu-item-of">
                    <div class="menu-content-of">
                      <img src="https://www.montepiedra.edu.ec/web/image/636-feb65372/JoseNeira.JPG" alt="Imagen 1">
                      <h3>​José Neira</h3>
                      <p>Vicerrector</p>
                    </div>
                  </div>
                  <div class="menu-item-of">
                    <div class="menu-content-of">
                      <img src="https://www.montepiedra.edu.ec/web/image/635-46306b01/DanielYep.JPG" alt="Imagen 2">
                      <h3>Daniel Yep</h3>

                      <p>Director de Formación</p>

                    </div>
                  </div>
                  <div class="menu-item-of">
                    <div class="menu-content-of">
                      <img src="https://www.montepiedra.edu.ec/web/image/2489-cbcb4f89/johang.jpg" alt="Imagen 3">
                      <h3>Johan Gonzalez</h3>

                      <p>Secretario</p>

                    </div>
                  </div>

                </div>
                <div class="menu-container-of">
                  <div class="menu-item-of">
                    <div class="menu-content-of">
                      <img src="https://www.montepiedra.edu.ec/web/image/638-4c0e0280/JesusSanchez.JPG" alt="Imagen 1">
                      <h3>Jesús Sánchez</h3>
                      <p>Inspector General</p>
                    </div>
                  </div>
                </div>
</section>

        

</body>
<footer  style="background-color: #ffffff;">
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