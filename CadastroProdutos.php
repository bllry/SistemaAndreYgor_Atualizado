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
           
           <h1 style="text-align:center;color: rgb(0, 32, 96);text-shadow: 2px 2px 2px #c9c9c9;font-size: 50px;margin: 1% 0" class="titulo">Cadastro de Produtos</h1>
                


                      <!-- Sub Navegação -->  
<ul class="nav nav-tabs">
    <li class="nav-item" ><a class="nav-link" href="Administrador.php">Controle Produtos</a></li>
    <li class="nav-item" ><a style="background:#fdfdfd;" class="nav-link active" href="CadastroProdutos.php">Cadastrar produtos</a></li>
    <li class="nav-item"><a class="nav-link" href="inserirCat.php">Inserir Categoria</a></li>
    <li class="nav-item"><a class="nav-link" href="Usuarios.php">Controle Usuários</a></li>  
    <li class="nav-item"><a class="nav-link" href="Avaliacoes.php">Controle Avaliações</a></li>                    
</ul>

<div class="row" style="background:#fdfdfd;">

<div class="col-md-5" style="background:#fff;margin:3% auto;box-shadow:5px 5px 5px #ccc;border-radius:20px; border:1px solid #ccc; padding:2%;">
 
       
      
           <form action="inserirProd.php" method="post">
                   
                <div class="form-group">
                <label for="nome">Nome do produto:</label>
               <input required id="nome" name="InserNome" placeholder="Ex: Martelo*" class="form-control" type="text">
               </div>
               <div class="form-group">
               <label for="cat">Selecione a categoria</label>
               <select id="cat" style="color:#6c757d;" riquired class="form-control" name="InserCat" id="Categoria">
                   
                   <option value="" disabled="disabled" selected="selected">Selecione a Categoria *</option>
                   
                   <?php 
                       include "conect.php"; 
                       
                       $sql = "SELECT * FROM categorias";

                       $busca = mysqli_query($con, $sql);
                       while($categoria = mysqli_fetch_array($busca)){?>

                           <option value="<?php echo $categoria['nome'];?>"><?php echo $categoria['nome'];?></option>
                       <?php } ?>

               
               </select>
               </div>
            <div class="form-group">
            <label for="iinputGroupFile01mg">Foto:</label>
               <div class="custom-file">
                   <input name="InserImg" requiered type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                   <label style="text-align:justify; color:#6c757d;" class="custom-file-label" for="inputGroupFile01">Selecione a imagem do Produto</label>
               </div>
            </div>
                
                <div style="text-align:end;" class="form-group">
               <input type="submit" class="btn btn-primary">    
               </div>
               


           </form>
            
  

   
</div>

</body>
</html>
     