<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visita</title>
</head>
<body>
    <?php
        
        if(session_start()){
            $usuario=$_SESSION['user'];
            echo '<h1>Hola '.$usuario['user'].'</h1>';
            
        }
    ?>
    <div id="bienvenido" name="bienvenido">
        <h1>Hola visitante</h1>
    </div>
</body>
</html>

