<?php
ob_start(); 
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
                <a href="indexlogin.php" class="js-logo-clone"><img src="images/img9.png" alt="img" width="90px"></a>
              </div>
            </div>
            <?php

if(isset($_POST["login"])){
   
    if(!empty($_POST['email']) && !empty($_POST['password'])){
         //se toman los vales de corre y password del formulario 
        $email = $_POST['email'];
        $password = $_POST['password'];
        //aqui se verifica que trae la  cuenta usando el correo, si es de administradores, se usa la tabla de administradores/usuarios.
        $query = $pdo->prepare("SELECT * FROM usuario WHERE Email = :email");
        $query->bindParam("email", $email);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $passBD=$result['Contrasena'];
        if(!$result){
            echo '<p class="error">La combinacion del usuario y la contraseña son invalidos</p>';
        }
                else{
                    if($result['Email']==$email)
                    {

                    if(password_verify($password,$passBD )){
                        //si quieren que aparezca el nombre, usen $result['CampoNombre'];
                        $_SESSION['session_user'] = $email;
                        $_SESSION['session_ID'] = $result['TipoUsuario_ID']; 

                    {
                    if ($result['TipoUsuario_ID']==9)

                        header("Location: Ready-Bootstrap-Dashboard-master/index1.php");

                    else{

                        header("Location: Ready-Bootstrap-Dashboard-user/index2.php");


                    }

                    }
            }
        }else{        
            $message = "Nombre de usuario invalido";
        }

        }
    }
    else{
        $message = "Todos los campos son requeridos";
    }
}

?>

<div class = "container mlogin">
    <div id = "login">
        <h1>Bienvenido a Frigaa Soluciones</h1>
        <h2>Inicia sesión como administrador</h2>
        <form name = "loginform" id = "loginform" action = "" method = "POST">
            <p>
                <label for = "user_login" > Correo 
                    <br/>
                    
                    <input type = "text" name = "email" id = "email" class = "input" value = "" size = "20"/>
                </label>
            </p>
            <p>
                <label for = "user_pass"> Contraseña
                    <br/>
                    <input type = "password" name = "password" id = "password" class = "input" value = "" size = "20"/>
                </label>
            </p>
            <p class = "submit">
                <input type = "submit" name = "login" class = "btn btn-primary" value = "Entrar" />
            </p>
            <p class = "regtext">No estas registrado? <a href = "register.php">Registrate aqui</a>!</p>
        </form>
    </div>
</div>

<?php if(!empty($message)) {echo "<p class = \"error\"\>" . "MESSAGE" . $message . var_dump($password). var_dump($email)."</p>";} ?>

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

              </form>
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
