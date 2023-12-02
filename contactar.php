<?php
include 'global/configServer.php';
include 'global/connectionDB.php';
?>
<?php
session_start();
if(!isset($_SESSION["session_username"])){
    echo"<script>window.location='login.php';</script>";
}
else{
$ClientID = $_SESSION['session_ID'];

}
?>

<html>

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

    <!-- Preloader Start -->
    
    <!-- Preloader Start -->
    <header class="site-navbar" role="banner">
       <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div >
                <a href="index02.php" class="js-logo-clone"><img src="images/img9.png" alt="img" width="90px"></a>
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
    <main>
        <!--? slider Area Start-->

        <!-- slider Area End-->
        <!-- ================ contact section start ================= -->
        <?php
        $txtID = (isset($_POST['txtID']))?$_POST['txtID']:"";
        $txtCategory= (isset($_POST['txtCategory']))?$_POST['txtCategory']:"";
        $txtDescription = (isset($_POST['txtDescription']))?$_POST['txtDescription']:"";
        $accion = (isset($_POST['accion']))?$_POST['accion']:"";
		 switch ($accion) {
			case 'add':
				$sentenciaSQL = $pdo->prepare("INSERT INTO cotizaservicio (ClienteID, ServicioID, 
				`Cantidad`) VALUES ($ClientID,:servicioid,:cantidad );"); 
				$sentenciaSQL->bindParam(':servicioid', $txtCategory);
				$sentenciaSQL->bindParam(':cantidad', $txtDescription);
				$sentenciaSQL->execute();
				
				// code...
				
			break;
            case 'Eliminar':
                $sentenciaSQL = $pdo->prepare("DELETE FROM cotizaservicio WHERE CotizacionServicioID=:id");
                $sentenciaSQL->bindParam(':id', $txtID);
                $sentenciaSQL->execute();
            
            break;
            }

            ?>

            <div class="main-panel">
                <div class="content">
                    <div class="container-fluid">
                        <h4 class="page-title">Cotizaciones de servicios</h4>
                            <div class="row">
                                <div class="col-md-12">
                                        <br/>
                                    <div class="card">
                                        <div class="card-header">
                                            Datos de la Cotizacion
                                        </div>
                                        <div class="card-body">
                                            <form method="POST">  <!--change method to POST, we use enctype to allow file submission-->
                                                
                                                 
                                                <div class="form-group">
                                                                        <label for="txtCategory">Servicio</label>
                                                                        
                                                                    
                                                                        <select class="form-control" name="txtCategory"  id="txtCategory">       
                                                                            <option value="00">-- Seleccionar --</option>
        
                                                                            <?php 
                                                                                $sentenciaCategories = $pdo->prepare("SELECT * from servicio;");
                                                                                $sentenciaCategories->execute();
                                                                                
                                                                                if(!empty($txtCategory))
                                                                                {
                                                                                    $ListCategories=$sentenciaCategories->fetchAll();
                                                                                    foreach ($ListCategories as $category) 
                                                                                    { 
                                                                                        $selected = ($txtCategory == $category['ServicioID']) ? ' selected' : null;
                                                                                        echo '<option value="'.$category['ServicioID'].'"'.$selected.'>'.$category['NombreServicio'].'</option>';
                                                                                    }
                                                                                }
                                                                                else
                                                                                    {
                                                                                        $ListCategories=$sentenciaCategories->fetchAll();
                                                                                        foreach ($ListCategories as $category) { 
                                                                                        echo '<option value="'.$category['ServicioID'].'">'.$category['NombreServicio'].'</option>';
                                                                                    }
                                                                                }
                                                                            ?>
                                                                        </select>
                                                </div>					
                                                
                                                <div class="form-group">
                                                    <label for="txtDescription">Cantidad</label>
                                                    <input type="text" name="txtDescription" value="<?php echo $txtDescription; ?>" id="txtDescription" class="form-control progress-table-wrap" 
                                                    placeholder="Cantidad">
                                                </div>
                                    
                                                
        
                                                <div class="btn-group" role="group">		
                                                    <button type="submit" name="accion" value="add" class="btn btn-success">Cotizar</button> 
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <?php
				$sentenciaSQL = $pdo->prepare("SELECT * FROM bw_Cotizacion WHERE ClienteID = $ClientID");
				$sentenciaSQL->execute();
				$listaProductos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
				?>
				<div class="row">
					<div class="col-md-12">
						<br/>
						<table class=" MyTable table cell-border display-compact" id="MyTable">
							<thead class="table-head">
								<tr>
								<th>CotizacionID</th>
								<th>Cliente</th>
								<th>Nombre</th>
								<th>Servicio</th>
                                <th>Nombre servicio</th>
                                <th>Descripcion servicio</th>
								<th>Cantidad</th>
								<th>Precio</th>
								<th>Total</th>
								<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($listaProductos as $producto) {?>
								<tr class="table-row">
								<th><?php echo $producto['CotizacionServicioID'];?></th>
								<td><?php echo $producto['ClienteID'];?></td>
								<td><?php echo $producto['Nombre'];?></td>
								<td><?php echo $producto['ServicioID'];?></td>
                                <td><?php echo $producto['NombreServicio'];?></td>
                                <td><?php echo $producto['DescripcionServicio'];?></td>
								<td><?php echo $producto['Cantidad'];?></td>
								<td><?php echo $producto['PrecioServicio'];?></td>
								
							        	<?php

                                        $total = $producto['Cantidad'] * $producto['PrecioServicio'];

                                        ?>
                                <td><?php echo "$".$total." MXN";?></td>        
                                        

								<td><form method="post">
									<input type="hidden" name="txtID" value="<?php echo $producto['CotizacionServicioID']?>">
									<input type="submit" name="accion" value="Eliminar" class="btn btn-danger">
								</form></td>
								</tr>
							<?php }?>
							</tbody>
						</table>
					</div>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ================ contact section end ================= -->
    </main>
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
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
	
    <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    </body>

    </body>
    
</html>
