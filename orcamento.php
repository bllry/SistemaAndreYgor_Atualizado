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

    
    <link rel="stylesheet" href="css/orcamento.css">
    <title>FerragensAndre - Orçamento</title>
    
    
    


</head>
    <body style="background: lightgray">
        
        <?php include "navegacao(interface).php"; ?>
           <h1 class="Textos" style="text-align:center;color: gray;text-shadow: 2px 2px 2px black;font-size: 50px;margin: 2% 0">Orçamentos</h1>
       <hr>
           
    <div class="container">
        
        <div class="cam1"> <!-- Primeira Camada -->    
            <div class="cam2"><!-- segunda camada -->

                <div><img width="30" style="float:left;" src="img/parafuso.png" alt=""> <img width="30" style="float:right;" src="img/parafuso.png" alt=""></div>

                    <div class="col-md-12">

                        <table class="tabela2">
                            <thead style="color: rgba(9,9,121,1);">
                                <th class="" >Nome</th>
                                <th class="">Valor</th>
                                <th class="">Quantidade</th>
                                <th class="">Excluir</th>
                             </thead>

                             <tbody style="color: rgba(9,9,121,1);">
                                 <tr>
                                      <td>Nome Prod</td>
                                      <td>R$ 12,00</td>
                                      <td>2</td>
                                      <td>Excluir</td>
                                 </tr>
                                 <tr>
                                      <td>Nome Prod</td>
                                      <td>R$ 12,00</td>
                                      <td>2</td>
                                      <td>Excluir</td>
                                 </tr>
                                 

                             </tbody>

                         </table>

       <!--          ADICIONAR BOTÃO EXCLUIR PRODUTO E EXCLUIR TUDO
                 TALVEZ UM tfoot PARA SOMAR A QUANTIDADE DE TODO O ORÇAMENTO-->

                    </div>

                <div><img width="30" style="float:left;" src="img/parafuso.png" alt=""> <img width="30" style="float:right;" src="img/parafuso.png" alt=""></div>

                </div> <!-- segunda camada -->

            </div> <!-- Primeira Camada -->
                <div id="total">Valor: "Entrada variavel PHP"</div>
         
         
         <!--<h3 class="Textos" style="text-align:center;color: gray;text-shadow: 2px 2px 2px black;font-size: 50px;margin: 2% 0">Total</h3>
          <div id="lista" class="row">
                 
                  <ul class="col-md-6" id="Orcamentos">
                      <li class="TodasListas"><a href="#">Lista1</a></li>
                      <li class="TodasListas"><a href="#">Lista2</a></li>
                      <li class="TodasListas"><a href="#">Lista3</a></li>
                      <li class="TodasListas"><a href="#">Lista4</a></li> 
                  </ul>
                <div style="overflow-y: scroll;">
                   <table id="tabela">
                      <thead>
                          <th class="itens">Nome</th>
                          <th class="itens">Valor</th>
                          <th class="itens">Quantidade</th>
                          <th class="itens">Descrição</th>
                      </thead>
                      <tbody>
                          <td class="valores">Nome Prod</td>
                          <td class="valores">R$ 12,00</td>
                          <td class="valores">2</td>
                          <td class="valores">Desc</td>
                      </tbody>
                   </table>
                </div>
               <div id="total">Valor: "Entrada variavel PHP"</div>
        </div>-->
    </div>
     
           
             
    </body>
</html>