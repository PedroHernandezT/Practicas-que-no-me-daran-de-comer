<?php
include_once 'global/configServer.php';
include_once 'global/connectionDB.php';
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
<?php
session_start();

if(isset($_POST["register"]))
{
    if( !empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['cp']) && !empty($_POST['username']) && !empty($_POST['phonenumber']) && !empty($_POST['city']) && !empty($_POST['password']) && !empty($_POST['secondname']))
    {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $cp = $_POST['cp'];
        $username = $_POST['username'];
        $phonenumber = $_POST['phonenumber'];
        $city = $_POST['city'];
        $password = $_POST['password'];
        $secondname = $_POST['secondname'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        $query = $pdo->prepare("SELECT * FROM cliente WHERE Email = :email");
        $query-> bindParam("email", $email);
        $query->execute();

        if($query->rowCount() >0){
            echo '<p class = "error">El email ya se encuentra registrado</p>';
        }
        if($query->rowCount() ==0){
            $query = $pdo->prepare("INSERT INTO cliente (NombreUsuario,Nombre,Apellido,Ciudad,CP,Telefono,Contrasena,Email) VALUES
             (:nombreusuario,:nombre,:apellido,:ciudad,:cp,:telefono,:contrasena,:email);");
            $query -> bindParam(":nombre", $fullname);
            $query -> bindParam(":apellido", $secondname);
            $query-> bindParam(":contrasena", $password_hash);
            $query -> bindParam(":email", $email);
            $query -> bindParam(":nombreusuario", $username);
            $query -> bindParam(":telefono", $phonenumber);
            $query -> bindParam(":ciudad", $city);
            $query -> bindParam(":cp", $cp);
            $result = $query->execute();

            if($result){
                $message = "Cuenta correctamente creada";  
                header("location:indexlogin.php");
            }
            else{
                $message = "Error al ingresar datos de la informacion!";
            }
        }
        else{
            $message = "El nombre de usuario ya existe! Por favor, intenta con otro!";
        }
    }
    else{
        $message = "Todos los campos no deben de estar vacios";
    }
}

?>

<?php if(!empty($message)) {
    echo "<p class = \"error\">" ."Mensaje: ". $message ."</p>";
}
?>

<div class = "container mregister">
    <div id = "login">
        <h1>Registrar</h1>
        <form name = "registerform" id = "registerform" action = "register.php" method = "POST">
            <p>
                <label for = "user_name"> Nombre de usuario
                    <br/>
                    <input type = "text" name = "username" id = "username" class = "input" value = "" size = "32"/>
                </label>
            </p>
            <p>
                <label for = "user_login"> Nombre 
                    <br/>
                    <input type = "text" name = "fullname" id = "fullname" class = "input" value = "" size = "32"/>
                </label>
            </p>
            <p>
                <label for = "user_login"> Apellido
                    <br/>
                    <input type = "text" name = "secondname" id = "secondname" class = "input" value = "" size = "32"/>
                </label>
            </p>
            <p>
                <label for = "user_login"> Ciudad
                    <br/>
                    <input type = "text" name = "city" id = "city" class = "input" value = "" size = "32"/>
                </label>
            </p>
            <p>
                <label for = "user_login"> Codigo postal
                    <br/>
                    <input type = "text" name = "cp" id = "cp" class = "input" value = "" size = "32"/>
                </label>
            </p>
            <p>
                <label for = "user_login"> Telefono
                    <br/>
                    <input type = "text" name = "phonenumber" id = "phonenumber" class = "input" value = "" size = "32"/>
                </label>
            </p>
            <p>
                <label for = "user_pass"> Contraseña
                    <br/>
                    <input type = "password" name = "password" id = "password" class = "input" value = "" size = "32"/>
                </label>
            </p>
            <p>
                <label for = "user_pass"> E-mail
                    <br/>
                    <input type = "email" name = "email" id = "email" class = "input" value = "" size = "32"/>
                </label>
            </p>
            
            
            <p class = "submit">
                <input type = "submit" name = "register" id = "register" class = "btn btn-primary" value ="Registrar"  />
            </p>
            <p class = "regtext">Ya tienes una cuenta? <a href = "indexlogin.php">Entra aqui</a>!</p>
        </form>
    </div>
</div>
 
</body>
</html>

