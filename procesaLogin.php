<?php
include 'bd/badat.php';
if(isset($_POST['usuario'])&!empty($_POST['usuario'])){
    $usuario=$_POST['usuario'];
    $clave=$_POST['pass'];
    
    $usuBD=getUser($usuario);

    session_start();
    
        if($usuario==$usuBD['user'] & $usuBD['rol']=='admin'){
            $_SESSION['user']=$usuBD;
            setcookie( $_SESSION['user']);
            header("Location: visita.php");
            
        }else{
            header("Location: principal.php");
            $_GET['origen']='procesaLogin';
        }
    
}else{
    header("Location: principal.php");
    $_GET['origen']='procesaLogin';
}
?>