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
           
           <h1 style="text-align:center;color: rgb(0, 32, 96);text-shadow: 2px 2px 2px #c9c9c9;font-size: 50px;margin: 1% 0" class="titulo">Controle de usuários</h1>
                


                      <!-- Sub Navegação -->  
<ul class="nav nav-tabs">
    <li class="nav-item" ><a class="nav-link" href="Administrador.php">Controle Produtos</a></li>
    <li class="nav-item" ><a class="nav-link" href="CadastroProdutos.php">Cadastrar produtos</a></li>
    <li class="nav-item"><a class="nav-link" href="inserirCat.php">Inserir Categoria</a></li>
    <li class="nav-item"><a style="background:#fdfdfd;" class="nav-link active" href="Usuarios.php">Controle Usuários</a></li>    
    <li class="nav-item"><a class="nav-link" href="Avaliacoes.php">Controle Avaliações</a></li>  
                         
</ul>

<div class="row" style="background:#fdfdfd;">


            </div>

            <!-- VERIFICAR RESPONSIVIDADE (Ass: Ygor)-->
            
            <div class="container">
            <button style="margin:2% 0;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#InserirUsuario">Cadastrar novo usuário</button>
                    

                    <div class="card">  
                <div class="card-header">
                        <h3 class="card-title">Usuários Cadastrados</h3>
                    </div> 
                    <div class="card-body">         
                <table class="table table-hover"  style="overflow:auto;">
                   <thead>
                    <th>#</th>
                    <th>Nome Completo</th>
                    <th>Login</th>
                    <th>E-mail</th>
                    <!-- <th>Perfil</th> -->
                    <th>Ações</th>
                    </thead>
                    
                    <tbody>
                    <?php
                    include "conect.php"; 
                       
                       $sql = "SELECT * FROM usuarios";

                       $busca = mysqli_query($con, $sql);
                       while($usuarios = mysqli_fetch_array($busca)){?>
                     <tr>

                    <td><?php echo $usuarios['id'] ?></td>
                    <td><?php echo $usuarios['nome'] ?></td>
                    <td><?php echo $usuarios['Login'] ?></td>
                    <td><?php echo $usuarios['email'] ?></td>
                    <!-- <td><?php //echo $usuarios['tipo'] ?></td> -->
                    <td>
                            <a data-toggle="modal" data-target="#EditUsu<?php echo $usuarios['id'] ?>" id="Editar" style="cursor:pointer;color:orange;"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
                            <a data-toggle="modal" data-target="#ExcluUsu<?php echo $usuarios['id'] ?>" style="color:red;" id="Excluir" href="ExcluiProd.php/?id=<?php echo $usuarios['id']; ?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
                            <a data-toggle="modal" data-target="#EditSenha<?php echo $usuarios['id'] ?>" style="color:green;" id="Excluir" href="EditSenha.php/?id=<?php echo $usuarios['id']; ?>"><i class="fa fa-unlock-alt fa-lg" aria-hidden="true"></i></a>
                    </td>

                    </tr>


                    

                    
                    <!-- MODAL - EXCLUIR -->
                    <div class="modal fade" id="ExcluUsu<?php echo $usuarios['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div>
                                        <div class="card">  
                                            <div class="card-header">
                                                <h3 class="card-title">Deseja Excluir <?php echo $usuarios['nome'] ?> ?</h3>
                                            </div> 
                                        <div class="card-body">


                                        <a href="ExcluiUsu.php/?id=<?php echo $usuarios['id'] ?>" style="margin:0 2%" class="btn btn-primary btn-lg">Simr</a>
                                        <button  class="btn btn-danger btn-lg" data-dismiss="modal">Não</button>    
                                        

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <!-- MODAL EXCLUIR -->



                <!-- MODAL - EDITAR SENHA-->
                    <div class="modal fade" id="EditSenha<?php echo $usuarios['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div>
                                        <div class="card">  
                                            <div class="card-header">
                                                <h3 class="card-title">Deseja alterar senha de <?php echo $usuarios['nome'] ?></h3>
                                            </div> 
                                        <div class="card-body">
                                        <form action="EditSenha.php" method="post">

                                            <input type="text" name="id" style="display: none;" value="<?php echo $usuarios['id'] ?>">

                                            <div class="form-group">
                                                <label>Insira a senha atual</label>
                                                    <input type="password" class="form-control" name="atual">
                                                </div>

                                            <div class="form-group">
                                                <label>Insira a nova senha</label>
                                                    <input type="password" class="form-control" name="nova">
                                                </div>

                                            <div class="form-group">
                                                <label>Repita a nova senha</label>
                                                    <input type="password" class="form-control" name="novaRep">
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

                    <!-- MODAL EDITAR SENHA -->


                    
                        <!-- MODAL - EDITAR -->
                        <div class="modal fade" id="EditUsu<?php echo $usuarios['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div>
                                        <div class="card">  
                                            <div class="card-header">
                                                <h3 class="card-title">Editar item <?php echo $usuarios['nome'] ?></h3>
                                            </div> 
                                        <div class="card-body"> 
                                                                            
                                            <form action="EditUsuario.php" method="post">

                                                    <input name="id" type="text" value="<?php echo $usuarios['id'] ?>" style="display:none;">
                                                    
                                                    <div class="form-group">
                                                    <label for="nome">Novo Nome:</label>
                                                    <input required id="nome" name="nome" class="form-control" type="text" requiered value="<?php echo $usuarios['nome'] ?>">
                                                    </div>
                                                    
                                                        <div class="form-group">
                                                    <label for="login">Novo Login:</label>
                                                    <input required id="Login" name="login" class="form-control" type="text" requiered value="<?php echo $usuarios['Login'] ?>">
                                                    </div>
                                                        <!--
                                                     <div class="form-group">
                                                    <label for="senha">Senha Atual</label>
                                                    <input required id="senha" name="senha" class="form-control" type="password" requiered >
                                                    </div>

                                                     <div class="form-group">
                                                    <label for="senha">Nova Senha:</label>
                                                    <input required id="senha" name="senha" class="form-control" type="password" requiered >
                                                    </div>
                                                        
                                                    <div class="form-group">
                                                    <label for="senha">Repita a nova senha:</label>
                                                    <input required id="senha" name="senha" class="form-control" type="password" requiered >
                                                    </div>
                                                    -->
                                                    
                                                    
                                                    <div class="form-group">
                                                    <label for="email">Novo E-mail:</label>
                                                    <input required id="email" name="email" class="form-control" type="email" requiered value="<?php echo $usuarios['email'] ?>">
                                                    </div>
                                                    
                                                    
                                                        <!-- <div class="form-group">
                                                        <label for="acesso">Selecione o novo tipo de usuario:</label>
                                                        <select class="form-control" name="acesso" id="acesso">
                                
                                                            <option value="Admin">Acesso Comum</option>
                                                            <option value="AdminMaster">Acesso Geral</option>    
                                                        </select>
                                                    </div> -->
                                                    
                                                <hr>
                                                
                                                <div style="text-align:center;" class="form-group">
                                                    <input style="float:left;" type="submit" class="btn btn-primary" value="Concluir">
                                                    <button style="float:right;" class="btn btn-danger" data-dismiss="modal">Cancelar</button>    
                                                </div>
                                                    
                                    
                                    
                                                </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <!-- MODAL - EDITAR -->

                       <?php } ?>



                    </tbody>

               
               </table>
        </div>
        </div>
        </div>
        
    
    
    
    
    
    
    
    
    
    
<div class="modal fade" id="InserirUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div>
    
    <div class="card">  
    <div class="card-header">
        <h3 class="card-title">Cadastrar Usuários</h3>
    </div> 
    <div class="card-body"> 
      
 
        
        


      
      
           <form action="CadUsuario.php" method="post">
                   
                <div class="form-group">
                <label for="nome">Nome Completo:</label>
               <input required id="nome" name="nomeUsu" class="form-control" type="text" requiered>
               </div>
               
                 <div class="form-group">
               <label for="login">Login:</label>
                <input required id="Login" name="LoginUsu" class="form-control" type="text" requiered>
               </div>
               
                   
               <div class="form-group">
               <label for="senha">Senha:</label>
                <input required id="senha" name="senhaUsu" class="form-control" type="password" requiered>
               </div>
               
              
               
                <div class="form-group">
               <label for="email">E-mail:</label>
                <input required id="email" name="emailUsu" class="form-control" type="email" requiered>
               </div>
               
                 <!-- <div class="form-group">
                   <label for="acesso">Selecione o tipo de usuario</label>
                    <select requiered class="form-control" name="acesso" id="acesso">
                        <option value="" disabled="disabled" selected>Selecione o tipo de usuario</option>
                        <option value="Admin">Acesso Comum</option>
                        <option value="AdminMaster">Acesso Geral</option>    
                    </select>
               </div> -->
               
            
                <hr>
                <div style="text-align:center;" class="form-group">
               <input type="submit" class="btn btn-primary btn-lg" value="Inserir Usuário">    
               </div>
               


           </form>
             
        </div>
        </div>
        
        </div>
  
        
      
      
    </div>
  </div>
</div>

</body>
</html>
     