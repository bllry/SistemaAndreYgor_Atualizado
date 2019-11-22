<?php 
include 'conect.php';
session_start();
$user =  $_POST['login'];
$password =  $_POST['senha'];

//if(isset($POST['login'])){
    if(empty($user) || empty($password)){
        echo "<meta http-equiv='refresh' content='0.1; http://localhost/SistemaAndreYgor/inicio.php'>";
        ?>

            <h1>Preencha os campos Vazios</h1>

        <?php
    }
    else{

        $sql = "SELECT * FROM usuarios WHERE login = '{$user}' AND senha = SHA1('{$password}')";
        $result = mysqli_query($con , $sql);

        if(mysqli_fetch_assoc($result)){


            $_SESSION['usuario'] = $user;
            header("location: Administrador.php");

        }else{

            ?>
                <h1>Senha Invalida!</h1>

            <?php
            echo "<meta http-equiv='refresh' content='0.1; http://localhost/SistemaAndreYgor/inicio.php'>";

        }
        


    }


?>