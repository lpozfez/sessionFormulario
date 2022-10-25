<?php
/*
1)pantalla Login y tabla user en base datos(user,contraseña y rol). 
se loguea y se hace session_start(), se le pasa el usuario a $_session.
2)Pantalla principal con 2 enlaces a otras páginas según el rol. 
Lo primero es session_start() y comprobar que existe $SESSION['user']. Si no, no se puede pasar y manda a login.
*/
$errores=[];
if(isset($_POST['enviar'])){
   
    $user=$_POST['usuario'];
    $pass=$_POST['pass'];
    
    if (empty($user)){
        $errores['user']='<span style="color:red">Introduzca un usuario válido</span><br>';
    }
    if(empty($pass)){
        $errores['pass']='<span style="color:red">Intruzca una contraseña</span><br>';
    }

    
        if(isset($_GET['origen'])){
            echo 'regístrese';
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="procesaLogin.php" method="post" name=datosUsu>
        <label>Usuario</label>
        <input type="text" value="" name="usuario" /></br>
        <?php 
            if (isset($_POST['usuario'])&empty($_POST['usuario'])){
                echo $errores['user'];
            }
        ?>
        <label>Contraseña</label>
        <input type="password" value="" name="pass"/></br>
        <?php 
            if(isset($_POST['pass'])&empty($_POST['pass'])){
                echo $errores['pass'];
            }
        ?>
        <input type="submit" name="enviar" value="Enviar"/></br>
    <form/>
</body>
</html>