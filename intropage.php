<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleLogin.css">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION["session_username"])){
    header("Location:login.php");
}
else{
?>
    <div id = "Bienvenido">
        <h2>Bienvenido, <span><?php echo $_SESSION['session_username'];?>!</span></h2>
        <p><a href = "logout.php">Finalice</a> sesion aqui!</p>
    </div>
    <?php
}
?>
</body>
</html>