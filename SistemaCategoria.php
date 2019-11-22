<?php
        //_______________________VALIDAR(CADASTRADO COM SUCESSO)______________

        $NomeCat = $_POST['nomeCat'];
        
        if($NomeCat != null){
            


        include "conect.php";
        $query = "INSERT INTO categorias VALUES(null, '" . $NomeCat . "')";

        mysqli_query($con, $query);
            
            echo "<meta http-equiv='refresh' content='0.2; http://localhost/SistemaAndreYgor/InserirCat.php'>";
        }else{
            
            
        echo "<script>alert('teste')</script>";
        echo "<meta http-equiv='refresh' content='0.2; http://localhost/SistemaAndreYgor/InserirCat.php'>";
            
            
        }
        
    
    
    ?>