<?php
include 'bd/badat.php';
if(isset($_POST['usuario'])&!empty($_POST['usuario'])){
    $usuario=$_POST['usuario'];
    $clave=$_POST['pass'];
    
    $usuBD=getUser($usuario);

    session_start();
    
        if($usuario==$usuBD['user'] & $usuBD['rol']=='admin'){
            $_SESSION['user']=$usuBD;
            header("Location: visita.php");
            
        }else{
            $_GET['origen']='procesaLogin';
            header("Location: principal.php");
        }
}else{
    $_GET['origen']='procesaLogin';
    header("Location: principal.php");
}
?>