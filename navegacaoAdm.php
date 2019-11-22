<head>
   
    
    

    <style>
    /* ----- MODAL FINALIZAÇÃO ----- */
    .modal-content{
        background: #fff0 !important;
        border: none !important; 
    }




    .Logo{
    visibility: visible
    }
    


@media screen and (max-width:575px){
    /*
    .Logo2 {
       
        float:left !important;
        visibility: visible;
        margin:0;
       
    }*/
    #LogoBox{
        text-align: center;
        
    }
 
    

    
    .botaoCad{
    width: 100% !important;
    margin-bottom: 3%;
    }

 


}


@media screen and (min-width:768px) and (max-width:991px){
        #fechar{
        visibility:visible !important;
        }
   
    }

@media screen and (min-width:576px) and (max-width:767px){
    
 
    /*
    #LogoBox{
        margin:0;
    }
  
    .CaixaLinks{
        
    padding: 0 7% ;
}
    */
}
        
 


.botaoCad{
    
    
    text-align:center;
    color: #ffe564;
    background: none;
    border: #ffe564 1px solid;
    box-shadow: 0.5px 0.5px 1px #404040;
    border-radius: 2.5px;
    transition: background-color 1s, border 1s;
    -moz-transition: background-color 1s, border 1s;
    -o-transition: background-color 1s, border 1s;
    -webkit-transition: background-color 1s, border 1s;
     display:block;
    width: 100%;
    margin-top:3%; 
    width: 6em;
    float: right;
   
        
   

}

.botaoCad:hover{
    text-align:center; 
    border: #203864 1px solid;
    box-shadow: 0.5px 0.5px 1px #404040;
    border-radius: 2.5px;
    transition: background-color 1s, border 1s, color 1s;
    -moz-transition: background-color 1s, border 1s, color 1s;
    -o-transition: background-color 1s, border 1s, color 1s;
    background: #c5b047;
    color: #191849;
     display:block;
    width: 100%;
    margin-top:3%;
    width: 6em;
    float: right;
        
 
    
}
  
.links{
    color:#ffe564;
    font-weight: 500;
    text-align:center;
    
    
}
.CaixaLink{

    text-align:center;
    padding:3%;


}


    
    
    </style>



</head>

<!--
<a href="" id="Log" class="botao " data-toggle="modal" data-target="#modalExemploLog" ><i class="fa fa-user" aria-hidden="true"></i> Entrar</a>
<a href="" id="Cad" class="botao" data-toggle="modal" data-target="#modalExemploCad"><i class="fa fa-user-plus" aria-hidden="true"></i> Cadastar</a>
-->       


   

        <header id="cabecalho" >
            <div class="container">

            


                <nav class="row">

                    <!--<a href="" class="Logo2">Logo</a>
                    <img width="90" src="img/LogoProjeto.png" alt="" class="Logo2">-->
                
                
    
                <!--<button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target">
                    <img  src="img/menu.svg" alt="">
                </button>-->


            
                 
               <div class="col-sm-6" id="LogoBox">
                   <img width="90" src="img/LogoProjeto.png" alt="" class="navbar-brand Logo">
               </div>

                  
                    <div class="CaixaLog col-sm-6" style="text-align:end" ><!--style="text-align:end;"-->
                    <?php 
                       echo "<h5 style='color: #eccb1a;margin-bottom: 0;margin-top: 1%;text-shadow: 2px 2px 3px #000;'>Seja bem-vindo, " . $_SESSION['usuario'] . "</h5>"; 
                       echo "<a href='loading.php' style='color: #eccb1a;margin-bottom: 0;margin-top: 1%;text-shadow: 2px 2px 3px #000;'>Sair</a>"?>
                    </div>
                  
                        
                



         

            </nav>
            </div>
            
        
        </header>
        
    
    <!-- --------------- CADASTRO 
        
        
        
    <div class="modal fade" id="modalExemploCad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    
    <button style="margin-right:1%; color:red;" id="fechar" type="button" class="close" data-dismiss="modal" aria-label="Close">
            X
        </button>

    <div class="row corpo">
    
  
        <div class="formulario"> Formulario
            
         <form class="segunda" action="Gravar2.php" method="POST"> segunda camada 
         

            <div><img style="float:left;" src="img/parafuso.png" alt=""> <img style="float:right;" src="img/parafuso.png" alt=""></div>
           
            <h3 class="titulo">Cadastro</h3>

            <img class ="divisao img-fluid" src="img/divisorVert.png" alt="Divisor de Menu"> 

            <div class="form-group"> <input autofocus name="nome" class="form-control" type="text" placeholder="Nome de usuário *"> </div> <!-- Nome 

            <div class="form-group"> <input name="email" class="form-control" type="email" placeholder="E-mail *"> </div> <!-- email 

            <div class="form-group"> <input maxlength="11" name="celular" class="form-control" type="text" placeholder="Celular"> </div> <!-- celular 

            <div class="form-group"> <input id="senha" name="senha" class="form-control" type="password" placeholder="Senha *"> </div> <!-- Senha

            <div class="form-group"> <input id="repeteSenha" name="repeteSenha" class="form-control" type="password" placeholder="Repita sua senha *"> </div> <!--Repetir Senha

            <img class ="divisao img-fluid" src="img/divisorVert.png" alt="Divisor de Menu">


            <input class="botao" type="submit" value="Cadastrar">  Botão 
            
            
            <img style="float:left; margin-top:5%;" src="img/parafuso.png" alt=""> <img style="margin-top:5%; float:right;" src="img/parafuso.png" alt=""> <!-- Botões 
            
            </form> segunda camada 

        </div> Formulario 

        

    </div>
</div>
</div>
</div>


--------------- CADASTRO -------------- -->


<!-- -------------LOGIN ------------------- -->

<div class="modal fade" id="modalExemploLog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">



    <button style="margin-right:1%; color:red;" id="fechar" type="button" class="close" data-dismiss="modal" aria-label="Close">
            X
        </button>
    <div class="row corpo">
        
        <div class="formularioLogin"> 
    
    
            <div class="segundaLogin"> <!-- segunda camada -->

                
                <div>
                    
                <img style="float:left" src="img/parafuso.png" alt="decoração parafuso"><img class="FotoUsu" width="110"src="img/avatar.png" alt="avatar Site"> <img style="float:right" src="img/parafuso.png" alt="decoração parafuso"></div>

               


                <form action="LoginSistema.php" method="post" class="input-grup grupo">  <!-- Formulario -->

                    <input autofocus placeholder="Login" class="email form-control" name="login" type="text">
            
                    <input class="form-control senha" name="senha" placeholder="senha" type="password">

                 <!-- Formulario -->
                
                <img class ="divisao img-fluid" src="img/divisorVert.png" alt="Divisor de Menu">

                <div class="botoes">
                <!--<a href=""><button class="botao botao2">Administrador</button></a>
                <a href="cadastro.php"><button class="botao botao1">Cadastrar</button></a> -->
                
                
                  <input style="padding:2% 4%;;" class="botaoLogin" type="submit" value="Entrar">
                
                
                 
                 <img style="float:left" src="img/parafuso.png" alt="decoração parafuso"><img style="float:right" src="img/parafuso.png" alt="decoração parafuso">
                 </div>
                 
                 </form>
                

            </div> <!-- segunda camada -->
        

        </div>


    </div>


</div>
</div>
</div>
    
    

















    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


