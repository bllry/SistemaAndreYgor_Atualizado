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

    <?php include "navegacao(interface).php";?>    
                     
                            


                
                <img src="img/engrenagem.gif" width="80" alt="" style="float:left;"><img src="img/engrenagem.gif" width="80" alt="" style="float:right;">
                <!--
                <div style="margin: 2% 3%;">
                  <img src="img/engrenagem.gif" width="50" alt="" style="float:left;">
                 <h1 style="color: rgb(0, 32, 96);text-shadow: 2px 2px 2px #c9c9c9;font-size: 61px;" class="titulo">Administrador</h1>
                </div>-->
                <h1 style="text-align:center;color: rgb(0, 32, 96);text-shadow: 2px 2px 2px #c9c9c9;font-size: 50px;margin: 2% 0" class="titulo">Consultar</h1>
                 
                 
                  <div class="nav nav-tabs">
                       <a class="nav-link " href="Administrador.php">Cadastrar</a>
                       <a class="nav-link active" href="Consultar.php">Consultar</a>
                        
                    </div>
                    
                    
                     
                     
        <div class="container"> 
                           
                            
                               <form class="form-inline" style="margin-top:2%;">
                                    <div class="form-group">
                                        <label  class="col-sm-2">Nome: </label>
                                        <input type="text" name="nome" class="form-control">
                                        <input style="margin-bottom: 1.5%;" type="submit" value="Buscar" class="btn btn-info ml-2">
                                    </div>
                                </form>
                            
                       
                      <table id="tabela" class="table table-bordered"  style="overflow:auto;!important">
                            <thead>
                <?php
                    include "conect.php";
                                            
                    if(isset($_GET["nome"])){
                        
                        $nome = $_GET["nome"];
                        

                        $sql = "SELECT * FROM produtos WHERE nome_prod
                        LIKE '%{$nome}%'";

                        $result = mysqli_query($con, $sql); 

                        $totalRegistros = mysqli_num_rows($result);
                        

                        if($totalRegistros > 0){ ?>
                      
                       
                        
                           <thead class="thead-dark">
                            <tr>
                            <th style="font-size:27px;" colspan="6">Lista de Produtos</th>
                            </tr>
                            <tr>
                            <th>#</th>
                            <th>Produto</th>
                            <th>Valor</th>
                            <th>Descrição</th>
                            <th>Excluir</th>
                            <th>Editar</th>
                            </tr>
                            
                        </thead>
                        <tbody class="table-striped">     
                           <?php
                            
                           while($row = mysqli_fetch_array($result)){
                            
                            ?>
                            
                                <tr>
                                <td><?php echo $row['id_Prod']; ?></td>
                                <td><?php echo $row['nome_prod']; ?></td>
                                <td><?php echo $row['Valor']; ?></td>
                                <td><?php echo $row['ProdDesc']; ?></td>
                                                           
                                <td>
                                <a class="btn btn-danger btn-sm" type="button" id="Excluir" href="ExcluiProd.php/?id=<?php echo $row['id_Prod']; ?>&Produto=<?php echo $row['nome_prod']; ?>&valor=<?php echo $row['Valor']; ?>&Desc=<?php echo $ProdDesc ?>">Excluir</a>
                                </td>
                                <td>
                                     <a class="btn btn-primary btn-sm" type="button" id="Editar" href="EditarProduto.php/?id=<?php echo $id_Prod; ?>&Produto=<?php echo $nome_prod; ?>&valor=<?php echo $row['ProdDesc']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a> 
                                </td>
                                
                                </tr>
                                
                            <?php } ?>  
                        
                                </tbody>
                                <?php
                                }else{
                                    echo "Nenhum registro encontrado!";
                                }  
                                mysqli_close($con);
                            }else{
                        
                                echo "<h1 style='font-size:90px;color:#ccc;margin-top:5%; text-align:center;'>Busque pelo produto!</h1>";
                    }           
                        ?>

                                           
                       


                        
                        
                        

                    </table>
    </div>
                   
                    
</body>
</html>