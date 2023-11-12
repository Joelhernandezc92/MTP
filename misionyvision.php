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
    <link rel="stylesheet" href="css/misionvision.css">


</head>
<body>
    <header class="encabezado fixed-top" role="banner" id="encabezado">
        <div id="info-box">
            <p>Email: <a target="_blank" href="mailto:info@montepiedra.edu.ec">info@montepiedra.edu.ec</a>   |   Teléfono: <a href="https://api.whatsapp.com/send/?phone=593958906944&text=" target="_blank" >+593 4 600 5800</a></p>
          </div>
          
        <div class="container">
            <a href="index.php" class="logo">
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
                    <li ><a href="index.html">Inicio</a></li>
                    <li><a href="#ofa">Oferta Académica</a></li>
                    <li><a target="_blank" href="https://mtpnewsonline.com/">Eventos y Noticias</a></li>
                    <li><a href="admisiones.php">Admisiones</a></li>
                </ul>
            </nav>

        </div>

    </header>
    <div class="historia-container">
        <div class="text">
            <h2>Misión</h2>
            <p>Educar, capacitar y formar profesional y humanamente a niños y jóvenes del sector, utilizando métodos y procedimientos de alta calidad,  que contribuyan a su realización como persona y su competitividad profesional, con la finalidad de fortalecer a la familia, apoyar al desarrollo de las empresas y beneficiar a la sociedad.</p>
          </div>
        <div class="image">
            <img src="https://www.montepiedra.edu.ec/web/image/1233-e00382f1/Mision.svg" alt="Imagen de la historia de mi colegio">
        </div>
    </div>
    <div class="historia-container">
        <div class="text">
            <h2>Visión</h2>
            <p>Montepiedra será el centro educativo de mayor prestigio, por su contribución en la formación integral de niños y jóvenes, que se destacarán por la excelencia en su trabajo, contribuyendo así a su realización personal, familiar y profesional.</p>
          </div>
        <div class="image">
            <img src="https://www.montepiedra.edu.ec/web/image/1234-99775eb7/DSC09854.svg" alt="Imagen de la historia de mi colegio">
        </div>
    </div>



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