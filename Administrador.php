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
            <li class="nav-item"><a class="nav-link" href="CadastroProdutos.php">Cadastrar Produtos</a></li>
            <li class="nav-item"><a class="nav-link" href="InserirCat.php">Inserir Categoria</a></li>   
            <li class="nav-item"><a class="nav-link" href="Usuarios.php">Controle Usuários</a></li>
            <li class="nav-item"><a class="nav-link" href="Avaliacoes.php">Controle Avaliações</a></li>                       
        </ul>
       <!-- Sub Navegação --> 
<div style="background:#fdfdfd;">

<div class="container"> 
    
    <div class="row">
        <div class="col-md-6" style="margin-top: 2%;">
            <form class="form-inline" >
                <div class="form-group">
                    <input palceholder="Buscar" type="text" name="nome" class="form-control">
                    <input style="margin-bottom: 1.5%;" type="submit" value="Buscar" class="btn btn-primary ml-2">
                </div>
            </form>
        </div>
    </div>

    <div class="card">  
        <div class="card-header">
            <h3 class="card-title">Produtos Cadastrados</h3>
        </div> 
        <div class="card-body">         
            <table class="table table-hover"  style="overflow:auto;">
                <!--<thead>-->
                <?php
                    include "conect.php";

                    if(isset($_GET["nome"])){

                    // ============ BUSCA ===========
                    $nome = $_GET["nome"];


                    $sql = "SELECT * FROM produtos WHERE nome_prod
                    LIKE '%{$nome}%'";

                    $result = mysqli_query($con, $sql); 

                    $totalRegistros = mysqli_num_rows($result);


                    if($totalRegistros > 0){ 
                ?>



                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                
                <tbody>     
                
                    <?php
                        while($row = mysqli_fetch_array($result)){
                    ?>

                    <tr>
                        <td><?php echo $row['id_prod'];?></td>
                        <td><?php echo $row['nome_prod']; ?></td>
                        <td><?php echo $row['categoria']; ?></td>
                        <td>
                            <a data-toggle="modal" data-target="#img<?php echo $row['id_prod']?>" style="color:blue;cursor:pointer; margin-right:2%;"><i class="fa fa-picture-o fa-lg" aria-hidden="true"></i></a>
                            <a data-toggle="modal" data-target="#Editproduto<?php echo $row['id_prod'] ?>" id="Editar" style="cursor:pointer;color:orange;"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                            <a data-toggle="modal" data-target="#Exclu<?php echo $row['id_prod'] ?>" style="color:red;" id="Excluir" href="ExcluiProd.php/?id=<?php echo $row['id_prod']; ?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
                        </td>
                        
                        
                        
                        <!-- MODAL - EDITAR -->
                        <div class="modal fade" id="Editproduto<?php echo $row['id_prod']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div>
                                        <div class="card">  
                                            <div class="card-header">
                                                <h3 class="card-title">Editar item "<?php echo $row['nome_prod'] ?>"</h3>
                                            </div> 
                                        <div class="card-body"> 
                                    
                                            <form action="EditarProduto.php" method="post">
                                            <div class="form-group">
                                                    <input disabled="disabled" required id="nome" placeholder="Digite o novo texto" class="form-control" type="text" value="Identificação: <?php echo $row['id_prod']; ?>">
                                                    <input type="text" name="id" style="display:none" value="<?php echo $row['id_prod']; ?>">
                                                </div>
                                              
                                                <div class="form-group">
                                                    <label for="nome">Novo nome:</label>
                                                    <input required id="nome" placeholder="Digite o novo texto" name="nome" class="form-control" type="text">
                                                </div>

                                                <div class="form-group">
                                                    <label for="cat">Escolha a nova categoria:</label>
                                                    <select required id="cat" style="color:#6c757d;" class="form-control" name="Cat" id="Categoria">

                                                        <?php 
                                                            include "conect.php"; 

                                                            $sql2 = "SELECT * FROM categorias";

                                                            $busca2 = mysqli_query($con, $sql2);
                                                            while($categoria = mysqli_fetch_array($busca2)){?>

                                                            <option value="<?php echo $categoria['nome'];?>"><?php echo $categoria['nome'];
                                                        ?></option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                              
                                                <hr>
                                                
                                                
                                                <div style="text-align:center;" class="form-group">
                                                    <input style="float:left;"  type="submit" class="btn btn-primary" value="Concluir">
                                                    <button style="float:right;" href="" class="btn btn-danger" data-dismiss="modal">Cancelar</button>    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <!-- MODAL - EDITAR -->


                    <!-- MODAL - IMAGEM -->
                    <div class="modal fade" id="img<?php echo $row['id_prod']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div>
                                        <div class="card">  
                                            <div class="card-header">
                                                <h3 class="card-title">Adicionar imagem a "<?php echo $row['nome_prod'] ?>"</h3>
                                            </div> 
                                        <div class="card-body">
                                            <img src="GaleriaProdutos/<?php echo $row['img'] ?>" width="80" alt="">

                                            <form action="InserirFoto.php" method="post">
                                                 <div class="form-group">
                                                    <input type="text" name="id" style="display:none;" value="<?php echo $row{'id_prod'} ?>">
                                                    <label for="iinputGroupFile01mg">Foto:</label>
                                                    <div class="custom-file">
                                                        <input name="img" requiered type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                        <label style="text-align:justify; color:#6c757d;" class="custom-file-label" for="inputGroupFile01">Selecione a imagem do produto</label>
                                                    </div>
                                                </div> 
                                                <hr>
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-primary">
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <!-- MODAL - IMAGEM -->



                    
                    <!-- MODAL - EXCLUIR -->
                    <div class="modal fade" id="Exclu<?php echo $row['id_prod']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div>
                                        <div class="card">  
                                            <div class="card-header">
                                                <h3 class="card-title">Deseja excluir o item "<?php echo $row['id_prod'] ?>"?</h3>
                                            </div> 
                                        <div class="card-body">
                                        <a href="ExcluiProd.php/?id=<?php echo $row['id_prod'] ?>" style="margin:0 2%" class="btn btn-primary btn-lg">Sim</a>
                                        <button href="" class="btn btn-danger btn-lg" data-dismiss="modal">Não</button>    
                                        

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <!-- MODAL EXCLUIR -->
                        
                        
                        
                    </tr>

                    <?php } ?>

                </tbody>  

                <?php
                    }else{
                    echo "Nenhum registro encontrado!";
                    }  
                    mysqli_close($con);
                    }else{ 
                    // ================ TABELA COMPLETA (INICIAL) =============
                ?>                       

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <?php
                    include "conect.php";
                    $sql = "SELECT * FROM produtos;";
                    $busca = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($busca)){ 
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['id_prod']; ?></td>
                        <td><?php echo $row['nome_prod']; ?></td>
                        <td><?php echo $row['categoria']; ?></td>
                        <td>
                            <a data-toggle="modal" data-target="#img<?php echo $row['id_prod']?>" style="color:blue;cursor:pointer; margin-right:2%;"><i class="fa fa-picture-o fa-lg" aria-hidden="true"></i></a>
                            <a data-toggle="modal" data-target="#Editproduto<?php echo $row['id_prod'] ?>" id="Editar" style="cursor:pointer;color:orange;"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                            <a data-toggle="modal" data-target="#Exclu<?php echo $row['id_prod'] ?>" style="color:red;" id="Excluir" href="ExcluiProd.php/?id=<?php echo $row['id_prod']; ?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>


                        </td>



                        <!-- MODAL - EDITAR -->
                        <div class="modal fade" id="Editproduto<?php echo $row['id_prod']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div>
                                        <div class="card">  
                                            <div class="card-header">
                                                <h3 class="card-title">Editar item "<?php echo $row['nome_prod'] ?>"</h3>
                                            </div> 
                                        <div class="card-body"> 

                                        <!-- RESOLVER FORMULARIO -->
                                                      <form action="EditarProduto.php" method="post">
                                            <div class="form-group">
                                                    <input disabled="disabled" required id="nome" placeholder="Digite o novo texto" class="form-control" type="text" value="Identificação: <?php echo $row['id_prod']; ?>">
                                                    <input type="text" name="id" style="display:none" value="<?php echo $row['id_prod']; ?>">
                                                </div>
                                              
                                                <div class="form-group">
                                                    <label for="nome">Novo nome:</label>
                                                    <input required id="nome" placeholder="Digite o novo texto" name="nome" class="form-control" type="text">
                                                </div>

                                                <div class="form-group">
                                                    <label for="cat">Escolha a nova categoria:</label>
                                                    <select required id="cat" style="color:#6c757d;" class="form-control" name="Cat" id="Categoria">

                                                        <?php 
                                                            include "conect.php"; 

                                                            $sql2 = "SELECT * FROM categorias";

                                                            $busca2 = mysqli_query($con, $sql2);
                                                            while($categoria = mysqli_fetch_array($busca2)){?>

                                                            <option value="<?php echo $categoria['nome'];?>"><?php echo $categoria['nome'];
                                                        ?></option>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                              
                                                <hr>
                                                
                                                
                                                <div style="text-align:center;" class="form-group">
                                                    <input style="float:left;"  type="submit" class="btn btn-primary" value="Concluir">
                                                    <button style="float:right;" href="" class="btn btn-danger" data-dismiss="modal">Cancelar</button>    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <!-- MODAL - EDITAR -->



                    <!-- MODAL - IMAGEM -->
                    <div class="modal fade" id="img<?php echo $row['id_prod']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div>
                                        <div class="card">  
                                            <div class="card-header">
                                                <h3 class="card-title">Adicionar imagem a "<?php echo $row['nome_prod'] ?>"</h3>
                                            </div> 
                                        <div class="card-body">
                                            <img src="GaleriaProdutos/<?php echo $row['img'] ?>" width="80" alt="">

                                            <form action="InserirFoto.php" method="post">
                                                 <div class="form-group">
                                                    <input type="text" name="id" style="display:none;" value="<?php echo $row{'id_prod'} ?>">
                                                    <label for="iinputGroupFile01mg">Foto:</label>
                                                    <div class="custom-file">
                                                        <input name="img" requiered type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                        <label style="text-align:justify; color:#6c757d;" class="custom-file-label" for="inputGroupFile01">Selecione a imagem do produto</label>
                                                    </div>
                                                </div> 
                                                <hr>
                                               
                                                <div class="form-group">
                                                    <input style="float:left;" type="submit" class="btn btn-primary" value="Enviar">
                                                    <button href="" class="btn btn-danger" style="margin-right:2%;float:right;" data-dismiss="modal">Cancelar</button>
                                                    
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <!-- MODAL - IMAGEM -->

                    <!-- MODAL - EXCLUIR -->
                    <div class="modal fade" id="Exclu<?php echo $row['id_prod']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div>
                                        <div class="card">  
                                            <div class="card-header">
                                                <h3 class="card-title">Deseja excluir o item "<?php echo $row['nome_prod'] ?>"?</h3>
                                            </div> 
                                        <div class="card-body">
                                        <a href="ExcluiProd.php/?id=<?php echo $row['id_prod'] ?>" style="margin:0 2%" class="btn btn-primary btn-lg">Sim</a>
                                        <button href="" style="float: right;" class="btn btn-danger btn-lg" data-dismiss="modal">Não</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <!-- MODAL EXCLUIR -->


                        </tr>
                <?php } 


                }?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>
</body>
</html>