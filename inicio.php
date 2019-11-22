<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include "head.php" ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script src="jquery-3.4.1.min.js"></script>

    <script type="text/javascript" src="scripts/jquery.js"></script>
<!-- só podemos utilizar o jQuery após sua importação -->
<script type="text/javascript" src="scripts/meuscript.js"></script>
<script type="text/javascript" src="scripts/meuoutroscript.js"></script>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/inicio.css">
    <title>FerragensAndre - Inicio</title>
         <style type="text/css">
             
            #caixasEmpresa{
                margin: 3% 0;box-shadow:2px 2px 2px #2f2f2f;border-radius:10px; border:solid 1px #000; background: #ffec8c;padding:0; transition: box-shadow 1s, margin 1s;

            }


            #caixasEmpresa:hover{
                margin: 1%;
    box-shadow: 8px 8px 8px #2f2f2f;
    border-radius: 10px;
    border: solid 1px #000;
    background: #ffec8c;
    padding: 0;
    transition: box-shadow 1s, margin 1s;
            }

         </style>   
</head>
<body>
   
<section class="fundo1">

    
    <div class="opac">
    <?php include "navegacao.php"?>
    <div style="padding:3%;">
   
            <!-- INÍCIO CAROUSEL -->
  
  
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  
   <div class="carousel-inner">
     
  
    <!-- ===================== CONSERTAR MODAL DINAMICO ========================== -->
      
        <div class="carousel-item active">
         <div class="row"><!-- row está onde deve estar, colocá-la em outro lugar, ira "quebrar o código e a posição definida em 'col' "-->
        <?php 


            include "conect.php";
            $sql = "SELECT * FROM produtos WHERE img <> null OR img <> '' LIMIT 4;";

            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_array($result)){
                
             ?> 
 
            <div class="col-6 col-md-6 col-lg-3">
            <div class="infosCaixa"> <!-- CAMADA 1 -->
                <div class="opcoes"> <!--CAMADA 2 -->
                    <div class="headerBox"><h4><?php echo $row['nome_prod']; ?></h4></div>
                    <div class="conteudoBox">
                        <img style="box-shadow: 3px 3px 5px #000000;" class="img-fluid imageProd tamanho" src="GaleriaProdutos/<?php echo $row['img'] ?>" alt="">
                    </div>
                    <div class="saibaMais">
                        <button class="btn btn-primary" data-target="#modalcomente<?php echo $row['id_prod'] ?>" data-toggle="modal" alt="" >Avaliar Produto</button>
                    </div>
                </div><!--CAMADA 2 -->
            </div> <!--CAMADA 1 -->
        </div>


        
       

    <!----------------- MODAL COMENTE ---------------->
    
<div class="modal fade" id="modalcomente<?php echo $row['id_prod'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <button style="margin-right:1%; color:red;" id="fechar" type="button" class="close" data-dismiss="modal" aria-label="Close">
                X
            </button>
            <div class="row corpo">
                <div class="formulario"> <!-- Formulario -->
                       
                       <!-- VERIFICAR LOCAL DE GRAVAÇÃO YGOR -->
     <form class="segunda" action="InserirComent.php" method="POST"><!-- segunda camada -->
                        <div>
                            <img style="float:left;" src="img/parafuso.png" alt=""> <img style="float:right;" src="img/parafuso.png" alt="">
                        </div>
                        <input name="id" style="display:none;" type="text" value="<?php echo $row['id_prod']; ?>">
                        <h3 class="titulo">Avalie seu produto</h3>
                        <img class ="divisao img-fluid" src="img/divisorVert.png" alt="Divisor de Menu"> 
                        <div class="form-group">   
                        <input type="text" style="display: none;" name="nome" value="<?php echo $row['nome_prod'] ?>"> 
                            
                            <label for="" style="font-weight:bold;">Avaliação</label> <br>


<!--ÁREA DE AVALIAÇÃO DE ESTRELAS-->
                                



                                <!-- SUBSTITUIR (USADO PARA TESTES) sem estrelas -->
                          
                                <input type="radio" name="estrela" value="1">

                                <input type="radio" name="estrela" value="2">

                                <input type="radio" name="estrela" value="3">

                                <input type="radio" name="estrela" value="4">

                                <input type="radio" name="estrela" value="5">
                                <!-- SUBSTITUIR (USADO PARA TESTES) -->







                            <!-- div method="POST" action="processa.php" enctype="multipart/form-data">
                                <div class="estrelas">
                                   
                                    <input type="radio" id="vazio" name="estrela" value="" checked>
                                    
                                    <label for="estrela1" style="cursor: pointer;"><i class="fa"></i></label>
                                    <input type="radio" id="estrela1" name="estrela" value="1">
                                    
                                    <label for="estrela2" style="cursor: pointer;"><i class="fa"></i></label>
                                    <input type="radio" id="estrela2" name="estrela" value="2">
                                    
                                    <label for="estrela3" style="cursor: pointer;"><i class="fa"></i></label>
                                    <input type="radio" id="estrela3" name="estrela" value="3">
                                    
                                    <label for="estrela4" style="cursor: pointer;"><i class="fa"></i></label>
                                    <input type="radio" id="estrela4" name="estrela" value="4">
                                    
                                    <label for="estrela5" style="cursor: pointer;"><i class="fa"></i></label>
                                    <input type="radio" id="estrela5" name="estrela" value="5"><br><br>
                                    
                                </div>
                                
                            </div> -->


<!--FIM DA ÁREA DE AVALIAÇÃO DE ESTRELAS-->
              
                            <div class="form-goup">
                            <label for="" style="font-weight:bold;">Deixe seu comentário(opcional)</label> <br>
                            
                            
                            <textarea placeholder="Comente aqui" name="Coment" id="" cols="50" rows="5"></textarea>
                            </div>
                            
                        </div>
                        <img class ="divisao img-fluid" src="img/divisorVert.png" alt="Divisor de Menu">
                        <input class="btn btn-primary" type="submit" value="Enviar">
                        <img style="float:left; margin-top:5%;" src="img/parafuso.png" alt=""> <img style="margin-top:5%; float:right;" src="img/parafuso.png" alt=""> 
                    </form> <!-- segunda camada -->
                </div> <!-- Formulario -->
            </div>
        </div>
    </div>
</div>
<!---------------------------- FIM MODAL COMENTE ---------------------->

            <?php }?>

        </div>
    </div>

        
      

          <?php 


            // include "conect.php";
            
             $sql = "SELECT COUNT(*) as cont FROM produtos WHERE img <> null OR img <> ''";
             $result = mysqli_query($con, $sql);
            
             $teste =  mysqli_fetch_array($result);
             $geral = ($teste['cont']/4);
            $limitador = 4;
            $contador2 = 1;
            
            while($geral > $contador2){
              
             
             ?>
            
            <div class="carousel-item">
                <div class="row">

                    
                  <?php 


                    
        
                    $second = "SELECT * FROM produtos WHERE img <> null OR img <> '' LIMIT " . $limitador . ", 4";
                    $resultado = mysqli_query($con, $second);
                    while($row = mysqli_fetch_array($resultado)){
                      
                     
                     ?>
                    


                      <div class="col-6 col-md-6 col-lg-3">
                    <div class="infosCaixa"> <!-- CAMADA 1 -->
                        <div class="opcoes"> <!--CAMADA 2 -->
                            <div class="headerBox"><h4><?php echo $row['nome_prod']; ?></h4></div>
                            <div class="conteudoBox">
                                <img style="box-shadow: 3px 3px 5px #000000;" class="img-fluid imageProd tamanho" src="GaleriaProdutos/<?php echo $row['img'] ?>" alt="">
                            </div>
                            <div class="saibaMais">
                                <button class="btn btn-primary" data-target="#modalcomente<?php echo $row['id_prod'] ?>" data-toggle="modal" alt="" >Avaliar Produto</button>
                            </div>
                        </div><!--CAMADA 2 -->
                    </div> <!--CAMADA 1 -->
                </div>
              

 
            
            
       <!----------------- MODAL COMENTE ---------------->
                
<div class="modal fade" id="modalcomente<?php echo $row['id_prod'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <button style="margin-right:1%; color:red;" id="fechar" type="button" class="close" data-dismiss="modal" aria-label="Close">
                X
            </button>
            <div class="row corpo">
                <div class="formulario"> <!-- Formulario -->
                       
                       <!-- VERIFICAR LOCAL DE GRAVAÇÃO YGOR -->
                    <form class="segunda" action="InserirComent.php" method="POST"><!-- segunda camada -->
                        <div>
                            <img style="float:left;" src="img/parafuso.png" alt=""> <img style="float:right;" src="img/parafuso.png" alt="">
                        </div>
                        <input style="display:none;" name="id" type="text" value="<?php echo $row['id_prod']; ?>">
                        <h3 class="titulo">Avalie seu produto</h3>
                        <img class ="divisao img-fluid" src="img/divisorVert.png" alt="Divisor de Menu"> 
                            <div class="form-group">
                            <input type="text" style="display: none;" name="nome" value="<?php echo $row['nome_prod'] ?>">                            
                            <label for="" style="font-weight:bold;">Avaliação</label> <br>
<!--ÁREA DE AVALIAÇÃO DE ESTRELAS-->


                            
        <input type="radio" name="estrela" value="1" >
        <input type="radio" name="estrela" value="2" >
        <input type="radio" name="estrela" value="3" >
        <input type="radio" name="estrela" value="4" >
        <input type="radio" name="estrela" value="5" >

           
                           <!-- <div method="POST" action="processa.php" enctype="multipart/form-data">
                            
                                <div class="estrelas">
                                    
                                    <input type="radio" id="vazio" name="estrela" value="" checked>
                                    
                                    <label for="estrela6" style="cursor:pointer;"><i class="fa"></i></label>
                                    <input type="radio" id="estrela6" name="estrela" value="1">

                                    <label for="estrela7" style="cursor:pointer;"><i class="fa"></i></label>
                                    <input type="radio" id="estrela7" name="estrela" value="2">

                                    <label for="estrela8" style="cursor:pointer;"><i class="fa"></i></label>
                                    <input type="radio" id="estrela8" name="estrela" value="3">

                                    <label for="estrela9" style="cursor:pointer;"><i class="fa"></i></label>
                                    <input type="radio" id="estrela9" name="estrela" value="4">

                                    <label for="estrela10" style="cursor:pointer;"><i class="fa"></i></label>
                                    <input type="radio" id="estrela10" name="estrela" value="5"><br><br>


                                </div>
                            </div> -->


<!--FIM DA ÁREA DE AVALIAÇÃO DE ESTRELAS-->
              
                            <div class="form-goup">
                            <label for="" style="font-weight:bold;">Deixe seu comentário(opcional)</label> <br>
                            
                            
                            <textarea placeholder="Comente aqui" name="Coment" id="" cols="50" rows="5"></textarea>
                            </div>
                            
                        </div>
                        <img class ="divisao img-fluid" src="img/divisorVert.png" alt="Divisor de Menu">
                        <input class="btn btn-primary" type="submit" value="Enviar">
                        <img style="float:left; margin-top:5%;" src="img/parafuso.png" alt=""> <img style="margin-top:5%; float:right;" src="img/parafuso.png" alt=""> 
                    </form> <!-- segunda camada -->
                </div> <!-- Formulario -->
            </div>        
        </div>
    </div>
</div>
<!---------------------------- FIM MODAL COMENTE ---------------------->
          
            <?php }?>


                </div>
            </div>

     <?php
         $contador2 = $contador2 + 1;
        $limitador = $limitador + 4;
          }?>
       
        
    
                 <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"  style="background-color: #d0d0d000; width:3%">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style="background-color: #d0d0d000;width: 3%;"><!--O FUNDO DA SETA FOI MARCADO DE VERMELHO PORQUE ESTÁ COBRINDO A ÁREA DO BOTÃO DE AVALIAR PRODUTO, É APENAS PARA SABER A DISTRIBUIÇÃO DA SETA-->
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>

</div>
    
  </div>

<!-- FIM CAROUSEL -->  
  

                
</div>
        
    </div>


    </section>
    
    
<!-- ================================================ PRODUTOS ================================================= -->
    
    <!-- INÍCIO DA ÁREA DA EMPRESA-->
        <div class="info">
            <i class="fa fa-briefcase" aria-hidden="true"></i> Sobre a empresa
        </div> 


<section class="fundo2">
    <div class="opac2">
        <div class="row corpo">
          
            <div class="col-md-12">
            
                          
            <p style="float:right;font-size: 24px;width:100%; margin-top:2%;color:#ffec8c;text-shadow: 4px 4px 4px #2f2f2f; font-weight: bold;">


                <i class="fa fa-building fa-lg" style="float:left;font-size: 11em;margin: 3% 5%;color:#ffec8c;text-shadow: 8px 8px 8px #2f2f2f;" aria-hidden="true"></i> <br>
                Uma nova loja com conceito de atendimento diferenciado; <br><br>
                Vendedores com alto nível de conhecimentos técnicos; <br><br>
                Preço justo e uma infinidade de produtos e marcas para melhorar o atendimento; <br>
                <br>
                Qualidade e atendimento é com Ferragens e Acessórios André Medeiros LTDA. 
            </p>
        
           
            <br>
        </div>

        <br>
        <br>
            <div class="col-md-4" >

                <div id="caixasEmpresa" >
                  <div style="text-align:center;box-shadow:0.5px 0.5px 0.5px #000;padding:1%;background:rgba(9,9,121,1); border-radius:10px;"> <h2 style="color: #ffec8c; font-weight: 400;">Valores <i style="color: #ffec8c;" class="fa fa-anchor" aria-hidden="true"></i></h2>
                 
                   </div>

                    <p style="margin:5%;text-align:center;font-weight: bold;color:rgb(7, 7, 80);">
                        -Confiança; <br>
                        -Respeito;  <br>
                        -Qualidade; <br>
                        -Garra; <br>
                        -Integridade

                   
                            

                   </p>
                    

                </div>
            </div>

           <div class="col-md-4">

                <div id="caixasEmpresa">
                  <div style=" text-align:center;box-shadow:0.5px 0.5px 0.5px #000;padding:1%;background:rgba(9,9,121,1); border-radius:10px;"> <h2 style="color: #ffec8c; font-weight: 400;">Missão <i  style="color: #ffec8c;" class="fa fa-bullseye" aria-hidden="true"></i>


                </h2>
                 
                   </div>

                    <p style="margin:5%;font-weight: bold;color:rgb(7, 7, 80);">

                    -Nos tornar uma empresa de renome no ramo; <br>
                    -Sempre atender a necessidade do cliente; <br>                    
                    -Oferecer um produto de qualidade a todos; <br>
                    -Nós vendemos nossos produtos para que possam suprir a necessidade de outras pessoas.
                            

                   </p>
                    

                </div>
            </div>

          <div class="col-md-4">

                <div id="caixasEmpresa">
                  <div style="box-shadow:0.5px 0.5px 0.5px #000;text-align:center;padding:1%;background:rgba(9,9,121,1); border-radius:10px;"> <h2 style="color: #ffec8c; font-weight: 400;">Visão <i style="color: #ffec8c;" class="fa fa-binoculars" aria-hidden="true"></i></h2>
                 
                   </div>

                    <p style="margin:5%;font-weight: bold;color:rgb(7, 7, 80);">

                    
                    -Aumentar nossa franquia e atingir todo o país; <br>
                    -Nos tornar referência na forma de atendimento ao cliente; <br>
                    -Passar uma forma diferenciada de trabalho; <br> 
                    -Sempre manter nossa filosofia de trabalho. <br> 

<br>
                            

                   </p>
                    

                </div>
                </div>

                <br><br>

            </div> 
        </div> 

    </div>
</section>
<!-- FIM DA ÁREA DA EMPRESA-->
  
  
  
  

<!-- CRIADA EM 25/10/2019 -->
<!-- ÍNICIO DA ÁREA lOCALIZAÇÃO E CONTATO-->  
  
<div class="info">
     Contatos e Localização
</div> 


<section class="fundo2">
    <div class="opac">

        <div class="row corpo">
            <div class="fundo-area-empresa1"> <!-- Primeira Camada -->
                <div class="fundo-area-empresa2"><!-- segunda camada -->
                    <br>
                        
                        <div class="row justify-content-center">
                           
<!--INÍCIO PARTE LOCALIZAÇÃO-->                           
                            <div style="" class="col-lg-5">
                                <div class="info">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Localização
                                </div> 
                               <div class="mt-3">
                                   <h3>Não conhece nossa loja? Utilize o mapa e veja o melhor caminho para você</h3>
                                    <iframe style="float:left; box-shadow:3px 3px 5px #000;margin-right:1.5%;" 
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.5441583801617!2d-43.34689168443837!3d-21.7591910033993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989ca3e37f6251%3A0x65fe2f744afb0e08!2sR.%20Mal.%20Deodoro%2C%2050%20-%20Centro%2C%20Juiz%20de%20Fora%20-%20MG%2C%2036013-000!5e0!3m2!1spt-BR!2sbr!4v1572030258451!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>
                            </div>
<!-- FIM PARTE LOCALIZAÇÃO-->
<!-- INÍCIO PARTE CONTATOS-->                           
                            <div id="contatos" style="float:right;" class="col-lg-5">
                                <div class="info">
                                    <i class="fa fa-phone" aria-hidden="true"></i> Contatos 
                                </div> 
                                <div class="mt-3">
                                    <h3>Telefones</h3>
                                        <p style="font-size: 23px;"><i class="fa fa-phone" aria-hidden="true"></i> (32) 3212-5309</p>
                                        <p style="font-size: 23px;"><i class="fa fa-whatsapp" aria-hidden="true"></i>&nbsp<i class="fa fa-mobile" aria-hidden="true"></i> (32) 99140-1228</p>
                                    <h3 style="display: inline;">E-mail</h3>
                                        <p style="font-size: 23px;">ferragensandremedeiros@gmail.com</p>
                                    <h3 style="display: inline;">CNPJ</h3>
                                        <p style="font-size: 23px;">13.448.002/0001-90</p>
                                    <h4>Ferragens e Acessórios André Medeiros Ltda</h4>
                                </div>
                            </div>
<!-- INÍCIO PARTE LOCALIZAÇÃO-->                           
                        </div>
                    <div style="margin-bottom:1%;clear: both;"></div> <!-- =====BRUNO, O QUE É ISSO ?=== -->

                </div> <!-- segunda camada -->
            </div> <!-- Primeira Camada -->
        </div>    
    </div>
</section>
<!-- 25/10/2019 -->
<!-- FIM DA ÁREA DA LOCALIZAÇÃO E CONTATO-->
 
 
 
 
   
   
    <footer style="color: #fff;border: solid 1px #000;box-shadow: 2px 2px 2px #000;padding: 0.3%;background: #4a4a4a;font-size: 13px;text-align: center;">CNPJ: 13.448.002/0001-90  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp - &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Ferragens e Acessórios André Medeiros Ltda</footer>
    

    

</body>
</html>