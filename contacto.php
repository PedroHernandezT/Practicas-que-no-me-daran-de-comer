<!doctype html>
<html class="no-js" lang="zxx">
    <?php
    $result = "";
    $error  = "";
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
  /*  $txtName = (isset($_POST['name']))?$_POST['name']:"";
   $txtEmail = (isset($_POST['email']))?$_POST['email']:"";
   $txtSubject = (isset($_POST['subject']))?$_POST['subject']:"";
   $txtMessage = (isset($_POST['message']))?$_POST['txtCategory']:""; */
try{
   if(isset($_POST['submitB']))
   {

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
       require 'PHPMailer/Exception.php';
       require 'PHPMailer/PHPMailer.php';
       require 'PHPMailer/SMTP.php';
    //Create an instance; passing `true` enables exceptions
       $mail = new PHPMailer(true);
   
   
       //Server settings
       $mail->SMTPDebug = 0;                      //Enable verbose debug output
       $mail->isSMTP();                                            //Send using SMTP
       $mail->Host       = 'mail.frigaasoluciones.tk';                     //Set the SMTP server to send through
       $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
       $mail->Username   = 'contactar@frigaasoluciones.tk';                     //SMTP username
       $mail->Password   = 'admin03.';                               //SMTP password
       $mail->SMTPSecure = 'ssl';               //Enable implicit TLS encryption
       $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
   
       //Recipients
       $mail->setFrom('contactar@frigaasoluciones.tk', 'Contacto');
       //$mail->addAddress('contacto@cookietienda.tk', 'Contacto');     //Add a recipient
       //$mail->addAddress('contacto@cookietienda.tk');               //Name is optional
       //$mail->addReplyTo('contacto@cookietienda.tk', 'Information');
       $mail->addCC('contactar@frigaasoluciones.tk');
       //$mail->addBCC('contacto@cookietienda.tk');
       //$mail->setFrom($_POST['email'],$_POST['name']);
       
       $mail->isHTML(true);    
       $mail->addReplyTo($_POST['email'],$_POST['name']);    
       $mail->addAddress($_POST['email']);//correo del cliente aqui
       $mail->Subject='Form Submission:' .$_POST['subject'];
       $mail->Body='<h3>Nombre :'.$_POST['name'].'<br> Email: '.$_POST['email'].'<br>Mensaje: '.$_POST['message'].'</h3>';
       //Attachments
      // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
       //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
       //Content
       
                               //Set email format to HTML
       //$mail->Subject = 'Here is the subject';
       //$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
       $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
       $mail->send();
       /* if(!$mail->send())
       {
         $error = "Something went worng. Please try again.";
       }
       else 
       {
         $result="Thanks\t" .$_POST['name']. " for contacting us.";
       } */
   }
}catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}  
   ?>

  <head>
    <title>Ubicación-Frigaa Soluciones</title>
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
   <!-- Preloader Start -->
   
   <!-- Preloader Start-->
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

   <main>
 
      <!--================Blog Area =================-->
      <div class="container"> <div class=" text-center mt-5 ">
         <h1>Formulario de contacto</h1>
     </div>
        <form class="form-contact contact_form"  method="POST">
            <div class="row ">
                <div class="col-lg-7 mx-auto">
                    <div class="card mt-2 mx-auto p-4 bg-light">
                        <div class="card-body bg-light">
                            <div class="container">
                                <form id="contact-form" role="form">
                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"> <label for="name">Nombre *</label> <input id="name" type="text" name="name" class="form-control" placeholder="Por favor ingrese su nombre *" required="required" data-error="Nombre requerido."> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group"> <label for="email">Email *</label> <input id="email" type="email" name="email" class="form-control" placeholder="por favor ingrese email *" required="required" data-error="Email valido requerido."> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group"> <label for="message">Mensaje *</label> <textarea id="message" name="message" class="form-control" placeholder="Escribe tu mensaje." rows="4" required="required" data-error="por favor deja un mensaje."></textarea> </div>
                                            </div>
                                            <button type="submit" id="submitB" name="submitB" class="btn btn-primary btn-send pt-2 btn-block">Enviar</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- /.8 -->
                </div> <!-- /.row-->
            </div>
        </form>
     
 </div>
      <!--================ Blog Area end =================-->

   </main>
   <div>
       <br>
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
                  <li><a href="indexlogin.php">Cotizaciones</a></li>
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