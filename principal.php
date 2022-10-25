<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
</head>
<body>
    <form action="principal.php" method="post">
        <button name="entrar">Entrar</button>
        <button name="visitar">Visitar</button>
    </form>
</body>
</html>

<?php

if(isset($_POST["entrar"])){
    header("Location: login.php");
}

if(isset($_POST["visitar"])){
    header("Location: visita.php");
}
/*
if($_POST[$origen]=='procesaLogin'){
    echo 'Usted no está registrado';
}*/
?>