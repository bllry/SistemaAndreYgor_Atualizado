<html>
<?php include "head.php"; ?>
<style>
        
html{
    overflow-x:hidden;
}
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

<body>
<?php session_start();
    include "navegacaoAdm.php";?>  

<img src="img/engrenagem.gif" width="80" alt="" style="float:left;"><img src="img/engrenagem.gif" width="80" alt="" style="float:right;">
           
           <h1 style="text-align:center;color: rgb(0, 32, 96);text-shadow: 2px 2px 2px #c9c9c9;font-size: 50px;margin: 1% 0" class="titulo">Inserir Categoria</h1>
                


                      <!-- Sub Navegação -->  
<ul class="nav nav-tabs">
    <li class="nav-item" ><a class="nav-link" href="Administrador.php">Controle Produtos</a></li>
    <li class="nav-item" ><a class="nav-link" href="CadastroProdutos.php">Cadastrar produtos</a></li>
    <li class="nav-item"><a style="background:#fdfdfd;" class="nav-link active" href="inserirCat.php">Inserir Categoria</a></li>
    <li class="nav-item"><a class="nav-link" href="Usuarios.php">Controle Usuários</a></li>  
    <li class="nav-item"><a class="nav-link" href="Avaliacoes.php">Controle Avaliações</a></li>                    
</ul>

<div class="row" style="background:#fdfdfd;">

<div class="col-md-5" style="background:#fff;margin:3% auto;box-shadow:5px 5px 5px #ccc;border-radius:20px; border:1px solid #ccc; padding:2%;">
 
       
      
           <form action="SistemaCategoria.php" method="post">
                   
                <div class="form-group">
                <label for="nome">Nome nova categoria:</label>
               <input required id="nome" name="nomeCat" placeholder="Ex: Martelo*" class="form-control" type="text">
               <input type="submit" class="btn btn-primary" value="Inserir">
               </div>
               
               


           </form>
               <div class="form-group">
               <label for="cat">Categorias existentes:</label>
               
                   <table style="margin:0 auto;">
                   <thead>
                    <th>Nome categoria</th>
                    <th>Ações</th>
                    </thead>
                    <tbody>
                   <?php 
                       include "conect.php"; 
                       
                       $sql = "SELECT * FROM categorias";

                       $busca = mysqli_query($con, $sql);
                       while($categoria = mysqli_fetch_array($busca)){?>

                           <tr>
                           
                           <td><?php echo $categoria['nome'];?></td>
                           <td>
                            <a data-toggle="modal" data-target="#EditCat<?php echo $categoria['id'] ?>" id="Editar" style="cursor:pointer;color:orange;"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                            <a data-toggle="modal" data-target="#ExcluCat<?php echo $categoria['id'] ?>" style="color:red;" id="Excluir" href="ExcluiCat.php/?id=<?php echo $categoria['id']; ?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
                        </td>   
                           


                        
                        
                        <!-- MODAL - EDITAR -->
                        <div class="modal fade" id="EditCat<?php echo $categoria['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div>
                                        <div class="card">  
                                            <div class="card-header">
                                                <h3 class="card-title">Editar <?php echo $categoria['nome'] ?> ?</h3>
                                            </div> 
                                        <div class="card-body"> 
                                    
                                            <form action="EditarCat.php" method="post">
                                            <label for="newCat">Novo nome:</label>
                                                <input id="newCat" required type="text" name="CatNome" class="form-control" vaLue="<?php echo $categoria["nome"] ?>">
                                                <input type="text" style="display:none" name="id" value="<?php echo $categoria['id'] ?>">
                                            
                                            <hr>
                                            <h3>Deseja mesmo editar esses dados?</h3>
                                                <div style="text-align:center;" class="form-group">
                                                    <input type="submit" class="btn btn-primary btn-lg" value="Sim">
                                                    <button href="" class="btn btn-danger btn-lg" data-dismiss="modal">Não</button>    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <!-- MODAL - EDITAR -->

                                
                    <!-- MODAL - EXCLUIR -->
                    <div class="modal fade" id="ExcluCat<?php echo $categoria['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div>
                                        <div class="card">  
                                            <div class="card-header">
                                                <h3 class="card-title">Deseja Excluir o item <?php echo $categoria['id'] ?> ?</h3>
                                            </div> 
                                        <div class="card-body">
                                        <a href="ExcluiCat.php/?id=<?php echo $categoria['id'] ?>" style="margin:0 2%" class="btn btn-primary btn-lg">Sim</a>
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

               
               </table>
               </div>
            
           
            
  

   
</div>
    </div>
</body>
</html>
     