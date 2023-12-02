<?php
include 'global/configServer.php';
include 'global/connectionDB.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Frigaa Soluciones</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div >
                <a href="index02.php" class="js-logo-clone"><img src="images/img3.jpg" alt="img" width="70px"></a>
              </div>
            </div>
        </div>
         </div>
         </div>
            <?php
session_start();
if(!isset($_SESSION["session_username"])){
    header("Location:login.php");
}
else{
?>
        <h2>Bienvenido, <span><?php echo $_SESSION['session_username'];?>!</span></h2>
    <?php
}
?>
<div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>
 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li><a href="index02.php">Inicio</a></li>
            <li class="has-children">
              <a href="about2.html">Nosotros</a>
              <ul class="dropdown">
                <li><a href="dedicamos2.html">A que nos dedicamos?</a></li>
                <li><a href="ubicacion2.html">Ubicación</a></li>
              </ul>
            </li>
            <li><a href="servicios2.php">Servicios</a></li>  
            <li><a href="shop2.php">Catálogo</a></li>
            <li><a href="contacto2.php">Contacto</a></li>
            <li><a href="contactar.php">Cotizar</a></li>
            <li><a href="logout.php">Cerrar Sesión</a></li>      
</body>
</html>
          </ul>
        </div>
      </nav>
    </header>

    <div class="site-section block-8">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 mb-5">
            <a href="#"><img src="images/puntodeventa.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
          </div>
          <div class="col-md-12 col-lg-5 text-center pl-md-5">
            <h2 >Especialistas en sistemas</h2>  
            <p>Contamos con servicios de Sistemas, Puntos de Venta, Facturación Electrónica, Sistemas de Seguridad, Audio y Vídeo Proyección, Tienda de Computo y Consumibles.</p>
            <p><a href="contactar.php" class="btn btn-sm btn-primary">Cotiza ahora</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-check-circle"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase" id="servicios">SOFTRESTAURANT</h2>
              <p>2 horas como mínimo
                SOFTWARE PARA RESTAURANTES, BARES Y CAFETERÍAS.
                Soft Restaurant® es todo lo que necesitas para tu restaurante reduce mermas, mejora tiempos y detecta áreas de oportunidad para impulsar tu negocio. Software: SoftRestaurant, Equipo Punto de Venta, Licencia Vitalicia, Instalación, Configuración, Capacitación y Soporte.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-check-circle"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">CÁMARAS DE SEGURIDAD (CCTV)
              </h2>
              <p>1 hora como mínimo
                Sistema de Camaras de Seguridad:
                Kit de Camaras HD, Grabación Día y Noche, Resistentes al Agua y Sol. DVR con 1TB de almacenamiento. Juego de Cables de Video. Instalación y Configuración de App.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-check-circle"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">ROLLOS Y COMANDAS</h2>
              <p>1 hora como mínimo
                Rollos de Papel para Miniprinter. Rollos Térmicos. Rollos 1 y 2 tantos. Comandas para Restaurante Block Sencillo Block Original y Copia</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Lo más vendido</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">     
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/impresora termica.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Impresora termica</a></h3>
                    <p class="mb-0">Impresora termica 80mm. </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/lector de codigos.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Lector de códigos</a></h3>
                    <p class="mb-0">Lector de códigos negro </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/cajondedinero.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Cajón de dinero</a></h3>
                    <p class="mb-0">Cajón de dinero negro</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/kitcamaras.jpg" width="100px" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Camaras de seguridad</a></h3>
                    <p class="mb-0">Kit de 4 camaras 720p HD.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/soft-rest.jpg" alt="Image placeholder"   class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Soft restaurant </a></h3>
                    <p class="mb-0">Lleva el control total de tu restaurante.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-8">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>¿Ofertas?</h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-5 text-center pl-md-5">
            <h2><a href="#">Claro que si!</a></h2>  
            <p>Software SoftRestaurant + kit punto de venta a un gran precio, revisa nuestro catalogo para cotizar los productos que necesites</p>
            <p><a href="shop2.php" class="btn btn-primary btn-sm">Ir al catálogo</a></p>
          </div>
          <div class="col-md-12 col-lg-7 mb-5">
            <a href="#"><img src="images/oferta.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navegación</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                <li><a href="contactar.php">Cotizaciones</a></li>
                  <li><a href="loginAdmin.php">Admin</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="about2.html">Sobre nosotros</a></li>
                  <li><a href="dedicamos2.html">A que nos dedicamos?</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <a href="#" class="block-6">
              <img src="images/pgfb.PNG" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0"><a href="https://www.facebook.com/frigaasolucionesreynosa/?ref=page_internal">Página de Facebook</a></h3>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Información de contacto</h3>
              <ul class="list-unstyled">
                <li class="address">Reynosa Tamps.</li>
                <li class="phone"><a href="tel://23923929210">8991053247</a></li>
                <li class="email">frigaasoluciones@gmail.com</li>
              </ul>
            </div>

          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            Copyright &copy;<script data-cfasync="false" src="#"></script><script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Frigaa Soluciones</a>
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
  
    
  </body>
</html>
