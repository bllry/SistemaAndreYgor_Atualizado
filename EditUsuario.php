<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loading</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv='refresh' content='1.3; http://localhost/SistemaAndreYgor/Usuarios.php'>
    <script type="text/javascript" src="loading-bar.js"></script>
   <script src="teste.js"></script>
    <style>
        body, html{
                height: 100%;
                
                
        }
        main{
            height:100%;
            background: linear-gradient(183deg, rgba(2,0,36,0.8883928571428571) 0%, rgba(9,9,121,1) 100%) no-repeat;
        }
    </style>
</head>
<body>
<main>




<?php 
    $id = $_POST['id'];
    $acesso = $_POST['acesso'];
    //$senha = $_POST['senha'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $nome = $_POST['nome'];
    
if(empty($nome) or empty($login) or empty($email) or empty($acesso)){
    echo "<h1>Campos Vazios não são aceitos, Preencha os dados</h1>";
}
else{
    

    include "conect.php";
        
        
    $sql = "UPDATE usuarios SET nome = '{$nome}', Login = '{$login}', email = '{$email}', tipo = '{$acesso}'  wHERE id = {$id}";



if(mysqli_query($con, $sql)){
    ?>


   <div class="container" style="padding:10%;">
    
         <h1 style=' text-align:center;color: #eccb1a;text-shadow: 2px 2px 3px #000;'>Editado com sucesso!</h1>
         <img src="img/LogoProjeto.png" alt="">

    
      </div>

    <?php
   // echo "<h1>Editado com sucesso!</h1>";

}else{
    ?>

   <div class="container" style="padding:10%;">
    
         <h1 style=' text-align:center;color: #eccb1a;text-shadow: 2px 2px 3px #000;'>Erro ao editar, tente novamente!</h1>
         <img src="img/LogoProjeto.png" alt="">

    
      </div>


    <?php
    echo "<h1>Erro ao editar</h1>";
}

}
?>
</main>









<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



