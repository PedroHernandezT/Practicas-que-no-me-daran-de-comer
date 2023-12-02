<?php
include 'global/configServer.php';
include 'global/connectionDB.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php
$filter = (isset($_POST['filter']))?$_POST['filter']:"";
?>
  <head>
    <title>Catalogo-Frigaa Soluciones</title>
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
                <a href="index.php" class="js-logo-clone"><img src="images/img3.jpg" alt="img" width="70px"></a>
              </div>
            </div>

          </div>
        </div>
      </div> 
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
            <li><a href="index.php">Inicio</a></li>
            <li class="has-children">
              <a href="about.html">Nosotros</a>
              <ul class="dropdown">
                <li><a href="dedicamos.html">A que nos dedicamos?</a></li>
                <li><a href="ubicacion.html">Ubicación</a></li>
              </ul>
            </li>
            <li><a href="servicios.php">Servicios</a></li>   
            <li><a href="shop.php">Catálogo</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="indexlogin.php">Cotizar</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <?php
										switch ($filter) {
											case 'Uno':
												$QueryProductos = $pdo->prepare("SELECT * FROM preoducto WHERE CategoriaID=1");
												$QueryProductos->execute();
												$ProductosLista=$QueryProductos->fetchAll(PDO::FETCH_ASSOC);
												break;
											case 'Dos':
												$QueryProductos = $pdo->prepare("SELECT * FROM preoducto WHERE CategoriaID=2");
												$QueryProductos->execute();
												$ProductosLista=$QueryProductos->fetchAll(PDO::FETCH_ASSOC);
												break;	
											case 'Tres':
												$QueryProductos = $pdo->prepare("SELECT * FROM preoducto WHERE CategoriaID=3");
												$QueryProductos->execute();
												$ProductosLista=$QueryProductos->fetchAll(PDO::FETCH_ASSOC);
												break;
											default:
											$QueryProductos = $pdo->prepare("SELECT * FROM preoducto");
											$QueryProductos->execute();
											$ProductosLista=$QueryProductos->fetchAll(PDO::FETCH_ASSOC);
												break;
										}
										?>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Inicio</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Catálogo</strong></div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

                    <div class="row">
                      <div class="col-md-12 mb-5">
                        <div class="float-md-left mb-4"></div>
                        <div class="d-flex">
                          <div>
                          <form method="POST">
                            <h3>Categorías</h3>
                            <div class="row mb-5">
                            <button type="submit" name="filter" value="Uno" class="btn ">Hardware</button>
                            <button type="submit" name="filter" value="Dos" class="btn ">Software</button>
                            <button type="submit" name="filter" value="Tres" class="btn ">Consumibles</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                              <div class="row mb-5">
                                  <?php foreach($ProductosLista as $producto) { ?>
                                    <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                        <div class="block-4 text-center border">
                                          <figure class="block-4-image">
                                            <a href="shop-single.html"><img width="300px" src=<?php echo 'Ready-Bootstrap-Dashboard-master/images/productos/'.$producto['ProductoImagen'];?> alt="Image placeholder" class="img-fluid"></a>
                                          </figure>
                                          <div class="block-4-text p-4">
                                            <h3><a href="#"><?php echo $producto['NombreProducto'];?></a></h3>
                                            <h3><?php echo $producto['Descripcion'];?></h3>
                                            <h3>MXN $<?php echo $producto['PrecioProducto'];?></h3>

                                            
                                          </div>
                                        </div>
                                      </div>
                                    <?php } ?>
                                    </form>
                              </div>
                            
          </div>
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

                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="about.html">Sobre nosotros</a></li>
                  <li><a href="dedicamos.html">A que nos dedicamos?</a></li>
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