<!DOCTYPE html>
<html lang="pt-br">
<head>
    
   <?php include "head.php"; ?> 

    <style>
        

#camada1{
    border:solid 1px #fff !important;
    padding:3% !important;
      background: rgb(255,243,170) !important;
    background: radial-gradient(circle, rgba(255,243,170,1) 0%, rgba(255,230,111,1) 72%) !important;
    box-shadow: 1px 2px 4px 1.2px #000 !important;
}

#camada2{
    
    border:1px solid #fff;
    padding: 8%;
    background: rgb(255,243,170);
    background: radial-gradient(circle, rgba(255,243,170,1) 0%, rgba(255,230,111,1) 72%);
    box-shadow: 1px 2px 4px 1.2px #000 !important;
    text-align: center;
    
}
    
.form-control{
    
    margin-bottom: 2% !important;
    
            
}
        
#Adicionar{
    margin-top:2%;
    padding: 2%;
    font-weight: 400;
    color: #fff;
    background-color: #203864;
    border: #11264c 1px solid;
    box-shadow: 0.5px 0.5px 1px #404040;
    border-radius: 2.5px;
    transition: background-color 1s, border 1s;
    -moz-transition: background-color 1s, border 1s;
    -o-transition: background-color 1s, border 1s;
    -webkit-transition: background-color 1s, border 1s;
    margin-top:2%;
}

#Adicionar:hover{
    margin-top:2%;
    padding: 2%;
    font-weight: 400;
    color: #fff;
    background-color: #11264c;
    border: #203864 1px solid;
    box-shadow: 0.5px 0.5px 1px #404040;
    border-radius: 2.5px;
    transition: background-color 1s, border 1s;
    -moz-transition: background-color 1s, border 1s;
    -o-transition: background-color 1s, border 1s;
    -webkit-transition: background-color 1s, border 1s;
    text-align:center;
    margin-top:2%;
    
}

    #tituloInsert{
            
    color:rgb(0, 32, 96);
    text-shadow: 1px 1px 1px #000;
    }

    </style>
    </head>  

<body>
    <?php session_start();
    include "navegacaoAdm.php";?>    
        
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

                                        <?php
                                        $id = $_GET['id'];

                                        ?>


                                         <form action="EditarProduto.php" method="post">
                                             <div class="form-group">
                                                    <input required id="nome" placeholder="Digite o novo texto" class="form-control" type="text">
                                                    <input type="text" name="id" style="display:none">
                                                </div>
                                              
                                                <div class="form-group">
                                                    <label for="nome">Nome:</label>
                                                    <input id="nome" placeholder="Digite o novo texto" name="nome" class="form-control" type="text" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cat">Categoria:</label>
                                                    <input id="cat" style="color:#6c757d;" class="form-control" name="Cat" id="Categoria">

                                                     
                                                    
                                                </div>
                                            
                                                <hr>
                                                
                                                <div style="text-align:center;" class="form-group">
                                                    <input type="submit" >
                                                </div>
                                            </form>
</body>
</html>
