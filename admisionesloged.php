<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admisiones | Unidad Educativa Montepiedr</title>
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
        footer {
            color: black;

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
            <button type="button" class="boton-buscar" data-toggle="collapse" data-target="#bloque-buscar" aria-expanded="false">
               <i class="fas fa-search"></i>
            </button>
            <button type="button" class="boton-menu d-md-none" data-toggle="collapse" data-target="#menu-principal" aria-expanded="false">
               <i class="fas fa-bars" aria-hidden="true"></i>
           </button>
            <form action="#" id="bloque-buscar" class="collapse">
                <div class="contenedor-bloque-buscar">
                    <input type="text" placeholder="Buscar...">
                    <input type="submit" value="Buscar">
                </div>
            </form>
            <nav id="menu-principal" class="collapse">
                    <ul>
                        <li ><a href="indexloged.php">Inicio</a></li>
                        <li><a href="#ofa">Oferta Académica</a></li>
                        <li><a target="_blank" href="https://mtpnewsonline.com/">Eventos y Noticias</a></li>
                        <li class="active"><a href="admisiones.php">Admisiones</a></li>
                    </ul>
                </nav>


        </div>


        <main class="servicios py-1">
            <div class="container" id="menuserv">
                <!--Tirulo de sección-->
                <h2  class="h2 text-center font-weight-bold">Admisiones</h2>
                <div class="row" id="imgarticle">
                    <!--Sección lateral izquierda-->
                    <article  class="col-md-4 wow bounceInLeft">
                        <img src="assets/page fotos/FOTOS REALES/" alt="historia">
                        <h3><a href="#">Formulario de admisiones</a></h3>
                                           
                        <a href="#" class="btn btn-light d-none d-md-flex">Llenar formulario de 1ro a 7mo grado EGB</a>
                        <a href="#" class="btn btn-light d-none d-md-flex">Llenar formulario de 8vo a l0mo grado EGB</a>
                    </article>
                    <!--Sección central-->
                    <article class="col-md-4 wow bounceInUp" data-wow-delay=".5s">
                        <img src="https://www.montepiedra.edu.ec/web/image/589-79c807b6/Mision.JPG" alt="mision y vision">
                        <h3><a href="#">¿Necesitas ayuda financiera?</a></h3>
                 
                        <a href="#" class="btn btn-light d-none d-md-flex">Más Información</a>
                    </article>
                    <!--Sección lateral derecha-->
                    <article class="col-md-4 wow bounceInRight">
                        <img src="https://www.montepiedra.edu.ec/web/image/580-0f1ff68a/Consejo%20ejecutivo.JPG" alt="consejo Ejecutivo">
                        <h3><a href="#">Matrícula & Pensión</a></h3>
              
                        
                        <a href="#" class="btn btn-light d-none d-md-flex">Más Información</a>
                    </article>
                </div>
            </div>
        </main>
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