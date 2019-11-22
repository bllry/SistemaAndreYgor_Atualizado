<?php

    //_______________________INCOMPLETO_____________
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $senha = $_POST['senha'];
    $repeteSenha = $_POST['repeteSenha'];
    
    /*
    echo $nome . "<br>";
    echo $email . "<br>";
    echo $celular . "<br>";
    echo $senha . "<br>";
    echo $repeteSenha . "<br>";
    */


    //------------------Cadastro---------------\\
    
    if ($senha == $repeteSenha){


       include "conect.php";

       $sql = "INSERT INTO usuarios VALUES(null, '{$nome}', '{$email}', '{$celular}', " . "SHA1('" . $senha . "')" . ")";

        mysqli_query($con, $sql);
        
        echo "<meta http-equiv='refresh' content='0.2; http://localhost/SistemaFerragens/Administrador.php'>";
        

    }else{
        
        echo "<script>alert('teste')</script>";
        echo "<meta http-equiv='refresh' content='0.2; http://localhost/SistemaFerragens/Administrador.php'>";
        
    }


    //--------------------------------------\\
    
        




?>