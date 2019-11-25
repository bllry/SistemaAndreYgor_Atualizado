<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        session_destroy();
        $msg = "Usuário sem acesso!";
        header("Location:inicio.php");
    }
?>