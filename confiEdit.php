<html>
<?php include "head.php"; ?>
<body>
<?php 
    
include "navegacaoAdm.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$cat = $_POST['Cat'];
$img = $_POST['Img'];

?>

       
        <img src="img/engrenagem.gif" width="80" alt="" style="float:left;"><img src="img/engrenagem.gif" width="80" alt="" style="float:right;">

        <h1 style="text-align:center;color: rgb(0, 32, 96);text-shadow: 2px 2px 2px #c9c9c9;font-size: 50px;margin: 1% 0" class="titulo">Produtos</h1>

            <!-- Sub Navegação -->  
        <ul class="nav nav-tabs">
            <li class="nav-item" style="text-align:end;"><a class="nav-link active" style="background:#fdfdfd;" href="Administrador.php">Controle Produtos</a></li>
            <li class="nav-item"><a class="nav-link" href="CadastroProdutos.php">Cadastrar produtos</a></li>
            <li class="nav-item"><a class="nav-link" href="InserirCat.php">Inserir Categoria</a></li>   
            <li class="nav-item"><a class="nav-link" href="Usuarios.php">Controle Usuários</a></li>
            <li class="nav-item"><a class="nav-link" href="Avaliacoes.php">Controle Avaliações</a></li>                       
        </ul>
        
        
<div>
   
   <h2>Deseja Alterar esses dados?</h2> 
    <a href="" class="btn btn-success">Sim</a> <a href="javascript:history.back()" class="btn btn-danger">Não</a>
    
    
</div>







</body>
</html>

