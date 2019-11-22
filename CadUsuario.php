
    <?php

    $nome = $_POST['nomeUsu'];
    $email = $_POST['emailUsu'];
    $senha = $_POST['senhaUsu'];
    $login = $_POST['LoginUsu'];
    $acesso = $_POST['acesso'];


    //------------------Cadastro---------------\\
    
    if ($senha != null && $nome != null && $login != null && $email != null && $acesso != null ){


       include "conect.php";

       $sql = "INSERT INTO usuarios VALUES(null, '{$nome}', '{$login}', '{$email}', SHA1('{$senha}'), '{$acesso}' )";

        mysqli_query($con, $sql);
        
        echo "<meta http-equiv='refresh' content='0.2; http://localhost/SistemaAndreYgor/Usuarios.php'>";
        

    }else{
        
        echo "<h1>Preencha todos os campos</h1>";
        echo "<meta http-equiv='refresh' content='0.5; http://localhost/SistemaAndreYgor/Usuarios.php'>";
        
    }
    
   ?>