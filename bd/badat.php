<?php
//include '../basedatos/funcionesBD.php';

try{
    
    function conexion(){
        $conec=new PDO('mysql:host=localhost;dbname=pruebas','root','');
        return $conec;
    }

    //function selectAll($conec){getAll($conec,'users');}
    function getUser($user){
        $conec=conexion();
        $registro=$conec->query("SELECT * from users where user like '$user'");
        $datos=$registro->fetch(PDO::FETCH_ASSOC);

        return $datos;
    }
   

    
}catch(PDOException $p){
    echo '<span style="color:red">ERROR DE CONEXIÓN</span>';
}


?>