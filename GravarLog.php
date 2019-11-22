<?php 
    //_______________________VALIDAR(CADASTRADO COM SUCESSO)______________

    
    $emailLog = $_POST['emailLog'];
    $senhaLog = $_POST['SenhaLog'];

    //echo $emailLog;

    
    include "conect.php";

    $sql2 = "SELECT email FROM usuarios WHERE email = '" . $emailLog . "'";

    mysqli_query($con, $sql2);

    $sql3 = "SELECT senha FROM usuarios WHERE senha = SHA1('" . $senhaLog . "')";
    
    mysqli_query($con, $sql3);

    if($emailLog ==  mysqli_query($con, $sql2) && $senhaLog ==  mysqli_query($con, $sql3)){
        
        echo "<script> alert('testePos') </script>";
        
    }else{
        echo "<script> alert('testeNeg') </script>";
        
    }
    
    

    

?>