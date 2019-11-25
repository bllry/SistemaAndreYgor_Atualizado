<html>
<?php include "head.php"; ?>
<?php include "validar.php"; ?>
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
<?php 
    include "navegacaoAdm.php";?>  
 
 <img src="img/engrenagem.gif" width="80" alt="" style="float:left;"><img src="img/engrenagem.gif" width="80" alt="" style="float:right;">
           
           <h1 style="text-align:center;color: rgb(0, 32, 96);text-shadow: 2px 2px 2px #c9c9c9;font-size: 50px;margin: 1% 0" class="titulo">Avaliações</h1>
                


 <ul class="nav nav-tabs">
            <li class="nav-item" style="text-align:end;"><a class="nav-link" style="background:#fdfdfd;" href="Administrador.php">Controle Produtos</a></li>
            <li class="nav-item"><a class="nav-link" href="CadastroProdutos.php">Cadastrar Produtos</a></li>
            <li class="nav-item"><a class="nav-link" href="InserirCat.php">Cadastrar Categoria</a></li>   
            <li class="nav-item"><a class="nav-link" href="Usuarios.php">Controle Usuários</a></li>
            <li class="nav-item"><a class="nav-link active" href="Avaliacoes.php">Controle Avaliações</a></li>                       
        </ul>
        
        
        
            
            <div class="container">

                    <div class="card" style="margin:2%;">  
                <div class="card-header">
                        <h3 class="card-title">Avaliações</h3>
                    </div> 
                    <div class="card-body">         
                <table class="table table-hover"  style="overflow:auto;">
                   <thead>
                    <th>#</th>
                    <th>Ferramenta avaliada</th>
                    <th>Comentário</th>
                    <th>Nota</th>
                    <th>Ações</th>
                    </thead>
                    
                    <tbody>
                    <?php
                    include "conect.php"; 
                       
                       $sql = "SELECT * FROM comentarios";

                       $busca = mysqli_query($con, $sql);
                       while($comentarios = mysqli_fetch_array($busca)){?>
                     <tr>

                    <td><?php echo $comentarios['id'] ?></td>
                    <td><?php echo $comentarios['nome'] ?></td>
                    <td><?php echo $comentarios['Descricao'] ?></td>
                    <td><?php echo $comentarios['avaliacao'] ?></td>
                 
                    <td>
                                                    
                    
                <a style="color:red;cursor: pointer;" data-toggle="modal" data-target="#ExcluAva<?php echo $comentarios['id'] ?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
                                  
                    </td>
                    </tr>



     <!-- MODAL - EXCLUIR -->
                    <div class="modal fade" id="ExcluAva<?php echo $comentarios['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div>
                                        <div class="card">  
                                            <div class="card-header">
                                                <h3 class="card-title">Deseja excluir o item "<?php echo $comentarios['nome'] ?>"?</h3>
                                            </div> 
                                        <div class="card-body">
                                        <a href="ExcluiAva.php/?id=<?php echo $comentarios['id']; ?>" margin:0 2%" class="btn btn-primary btn-lg" style="float:right;">Sim</a>
                                        <button href="" style="float:left;" class="btn btn-danger btn-lg" data-dismiss="modal">Não</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MODAL EXCLUIR -->
                    
                    <?php }?>
                 



                    </tbody>

               
               </table>
        </div>
        </div>
        </div>
        
    
    
    
    







</body>
</html>