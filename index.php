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
<!doctype html>
<html lang="en">

<head>
    <title>Unidad Educativa Montepiedra</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  .container button img{
    width: 43px;
  }

</style>

</head>

<body>
    <section class="bienvenidos">
        <header class="encabezado fixed-top" role="banner" id="encabezado">
            <div id="info-box">
                <p>Email: <a target="_blank" href="mailto:info@montepiedra.edu.ec">info@montepiedra.edu.ec</a>   |   Teléfono: <a href="https://api.whatsapp.com/send/?phone=593958906944&text=" target="_blank" >+593 4 600 5800</a></p>
              </div>
              
            <div class="container">
                <a href="#" class="logo">
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
                        <li class="active"><a href="index.html">Inicio</a></li>
                        <li><a href="#ofa">Oferta Académica</a></li>
                        <li><a target="_blank" href="https://mtpnewsonline.com/">Eventos y Noticias</a></li>
                        <li><a href="admisiones.php">Admisiones</a></li>
                    </ul>
                </nav>

            </div>

        </header>

        <div class="texto-encabezado text-center">
            <div class="container">

                <h1 class="display-4 wow bounceIn">Unidad Educativa Montepiedra</h1>
                <p class="wow bounceIn" data-wow-delay=".3s" style="font-style: italic; font-size: 21px;">El espíritu de avanzar</p>
              
            </div>
        </div>

    </section>

    <section class="agencia py-1" id="agencia">

        <div id="qnqq" class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-xl-9 wow bounceIn" data-wow-delay=".3s">
                    <h2 class="h3 text-center text-md-left font-weight-bold" id="qn">¿Quiénes somos?</h2>
                    <p style="font-size: 21px;" class="pclassqs">La Unidad Educativa Montepiedra es un centro educativo primario y secundario que ofrece una educación especializada, técnica e integral: humana, científica, cultural, deportiva y espiritual a niños y jóvenes del sector Mapasingue, Prosperina y zonas aledañas.</p>
                    <p style="font-size: 21px;" class="pclassqs">Busca contribuir no solo con su realización académica, sino también personal, profesional y familiar. Está inspirada en una visión <a id="ofa"> cristiana de la vida y ofrece un clima de libertad, respeto y responsabilidad personal</a>.</p>
                </div>
                <div class="col-12 col-md-4 col-xl-3 wow bounceIn" data-wow-delay=".6s">
                    <img id="imageqn" src="https://actec-ong.org/wp-content/uploads/2022/01/ACTEC-news-montepiedra-lego-01.jpg" alt="Lab">
                </div>
            </div>
        </div>
    </section>
    <section class="menu-of">
		<h2 >Oferta Académica</h2>
		<div class="menu-container-of">
		  <div class="menu-item-of">
			<div class="menu-content-of">
			  <img src="https://www.montepiedra.edu.ec/web/image/612-da254406/Admisiones%20%281%29.JPG" alt="Imagen 1">
			  <h3>Admisiones</h3>
        <a href="admisiones.php">
			  <button class="menu-button-of">Ver más</button></a>
			</div>
		  </div>
		  <div class="menu-item-of">
			<div class="menu-content-of">
			  <img src="https://www.montepiedra.edu.ec/web/image/614-2eb514a7/INSTALACIONES%20%281%29.JPG" alt="Imagen 2">
			  <h3>Instalaciones</h3>
        <a href="instalacion.php">
			  <button class="menu-button-of">Ver más</button></a>
			</div>
		  </div>
		  <div class="menu-item-of">
			<div class="menu-content-of">
			  <img src="https://www.montepiedra.edu.ec/web/image/626-4e530f04/EDUCACION%20BASICA%20%281%29.JPG" alt="Imagen 3">
			  <h3>Educación Básica</h3>
        <a href="edubasica.php">
			  <button class="menu-button-of">Ver más</button></a>
			</div>
		  </div>
		  <div class="menu-item-of">
      
			<div class="menu-content-of">
			  <img src="https://www.montepiedra.edu.ec/web/image/627-b67314d1/bach%20tecnico.jpg" alt="Imagen 3">
			  <h3>Bachillerato Técnico</h3>
        <a href="bachtecnico.php">
			  <button class="menu-button-of">Ver más</button></a>
			</div>
    
		  </div>
		</div>
	  </section>

 

    <main class="servicios py-1">
        <div class="container" id="menuserv">
            <!--Tirulo de sección-->
            <h2  class="h2 text-center font-weight-bold">Menu</h2>
            <div class="row" id="imgarticle">
                <!--Sección lateral izquierda-->
                <article  class="col-md-4 wow bounceInLeft">
                    <img src="assets/page fotos/FOTOS REALES/historia/historia.jpg" alt="historia">
                    <h3><a href="#">Historia</a></h3>
                    <p class="d-none d-md-flex">Montepiedra desarrolla todas sus actividades con los principios de la doctrina católica y con el máximo respeto hacia la libertad de las conciencias.</p>
                    <a href="historia.php" class="btn btn-light d-none d-md-flex">Más Información</a>
                </article>
                <!--Sección central-->
                <article class="col-md-4 wow bounceInUp" data-wow-delay=".5s">
                    <img src="https://www.montepiedra.edu.ec/web/image/589-79c807b6/Mision.JPG" alt="mision y vision">
                    <h3><a href="#">Misión & Visión</a></h3>
                    <p class="d-none d-md-flex">Conoce la misión de la Unidad Educativa Montepiedra y hacia donde queremos llegar en el mundo de la educación.</p>
                    <a href="misionyvision.php" class="btn btn-light d-none d-md-flex">Más Información</a>
                </article>
                <!--Sección lateral derecha-->
                <article class="col-md-4 wow bounceInRight">
                    <img src="https://www.montepiedra.edu.ec/web/image/580-0f1ff68a/Consejo%20ejecutivo.JPG" alt="consejo Ejecutivo">
                    <h3><a href="#">Consejo Ejecutivo</a></h3>
                    <p class="d-none d-md-flex">Conoce a todos los profesionales que trabajan atrás de este gran proyecto educativo.</p>
                    <a href="consejoejecutivo.php" class="btn btn-light d-none d-md-flex">Más Información</a>
                </article>
            </div>
        </div>
    </main>

    <section id="galeria" class="ultimos-proyectos py-1">

        <div class="container">
            <h2  class="text-center font-weight-bold">Galeria</h2>
            <div class="owl-carousel">
            <img src="https://www.montepiedra.edu.ec/web/image/1632-b09adeef/Promo.jpeg" alt="imagen mtp">



<img src="https://www.montepiedra.edu.ec/web/image/1634-07c28286/promocion2.jpeg" alt="imagen mtp">



<img src="https://www.montepiedra.edu.ec/web/image/1633-6e01a22a/Promocion1.jpeg" alt="imagen mtp">



<img src="https://www.montepiedra.edu.ec/web/image/1634-07c28286/promocion2.jpeg" alt="imagen mtp">
<img src="page fotos/menuin.jpg" alt="imagen mtp">



            </div>
        </div>
    </section>
    <section class="alianzas">
		<h2>Alianzas</h2>
		<div class="alianzas-images">
		  <a href="https://torremar.edu.ec/" target="_blank"><img src="assets/page fotos/LOGOS/torremar.gif" alt="Escudo Colegio 1"></a>
		  <a href="https://uejacaranda.edu.ec/" target="_blank"><img src="assets/page fotos/LOGOS/jacaranda logo.png" alt="Escudo Colegio 2"></a>
		  <a href="https://www.intisana.com/" target="_blank" ><img src="https://www.montepiedra.edu.ec/web/image/1046-b2502c09/intisana.jpeg" alt="Escudo Colegio 3"></a>
		  <a href="https://uedelta.k12.ec/delta/" target="_blank"><img src="assets/page fotos/LOGOS/delta.png" alt="Escudo Colegio 4"></a>
		  <a href="https://www.uhemisferios.edu.ec/" target="_blank"><img src="assets/page fotos/LOGOS/hemisferios logo.png" alt="Escudo Colegio 5"></a>
		  <a href="https://colegiolospinos.ec/" target="_blank"><img class="alimargin" src="assets/page fotos/LOGOS/logo los pinos.png" alt="Escudo Colegio 6"></a>

		</div>
	  </section>


    <!--Carga de archivos js-->
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                autoWidth: false,
                navText: ['<i class="fa fa-arrow-circle-left" title="Anterior"></i>', '<i class="fa  fa-arrow-circle-right" title="Siguiente"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    500: {
                        items: 2,
                        margin: 20
                    },
                    800: {
                        items: 3,
                        margin: 20
                    },
                    1000: {
                        items: 4,
                        margin: 20
                    }
                }
            });
        });
    </script>
    <script src="js/wow.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/sitio.js"></script>
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