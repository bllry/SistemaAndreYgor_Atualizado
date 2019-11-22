<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loading</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv='refresh' content='1.7; http://localhost/SistemaAndreYgor/Usuarios.php'>
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

   <div class="container" style="padding:10%;">
    
        <?php 

        $id = $_POST['id'];
        $atual = $_POST['atual'];
        $nova = $_POST['nova'];
        $novaRep = $_POST['novaRep'];


        if(empty($atual) or empty($atual) or empty($nova)){

        ?>

        <h1 style=' text-align:center;color: #eccb1a;text-shadow: 2px 2px 3px #000;'>Preencha os campos vazios</h1>
         <img src="img/LogoProjeto.png" alt="">

        <?php
            echo "<meta http-equiv='refresh' content='1.7; http://localhost/SistemaAndreYgor/Usuarios.php'>";
        }else{

            include "conect.php";
            $sql = "SELECT senha FROM usuarios WHERE id = " . $id . " AND senha = " . " SHA1('" . $atual . "')";

            $result = mysqli_query($con, $sql);
            $geral = mysqli_fetch_array($result);

            if(empty($geral)){
            
            ?>


            <h1 style=' text-align:center;color: #eccb1a;text-shadow: 2px 2px 3px #000;'>Senha incorreta, tente novamente</h1>
         <img src="img/LogoProjeto.png" alt="">


            <?php

            }
            else{

            if($nova == $novaRep){
            
            include "conect.php";
            $sql = "UPDATE usuarios SET senha = SHA1('" . $nova . "') WHERE id = " . $id;

            $result = mysqli_query($con, $sql);

                ?>
                

            <h1 style=' text-align:center;color: #eccb1a;text-shadow: 2px 2px 3px #000;'>Senha alterada com sucesso</h1>
         <img src="img/LogoProjeto.png" alt="">

                <?php
                }
                else{

                ?>


            <h1 style=' text-align:center;color: #eccb1a;text-shadow: 2px 2px 3px #000;'>Verifique se repetiu a senha corretamente.</h1>
         <img src="img/LogoProjeto.png" alt="">

                <?php

            }

            
            } 
        }




        ?>


    
      </div>
</main>









<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>