<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loading</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv='refresh' content='1; http://localhost/SistemaAndreYgor/encerra.php'>
    <link rel="stylesheet" type="text/css" href="loading-bar.css"/>
<script type="text/javascript" src="loading-bar.js"></script>
   <script src="teste.js"></script>
    
<style>
    
    body, html{
        height: 100%;
        background: linear-gradient(183deg, rgba(2,0,36,0.8883928571428571) 0%, rgba(9,9,121,1) 100%) no-repeat;
    }
    
    
    
@keyframes animacao-pg {
    from{
        
        width: 1%;
    }
    to{
        
        width: 100%;
        
    }
}
    
    
#pg{
    animation: animacao-pg; 
    animation-duration: 1s;
        
    }
    
</style>
    
   
<!--
<script>
    /*
    var progresso = new Number()
    var maximo = new Number()
    var progresso = 0
    var maximo = 100
    
    function start(){
        if((progresso + 1) <= maximo){
            progresso = progresso + 1
            document.getElementByClassName("progress-bar progress-bar-striped progress-bar-animated bg-warning").value = progresso
            setTimeout("start();",10)
        }
            
    }
    */
    
</script>-->
</head>
   
<body onload="start();">
    <div class="container">
           
        <div class="d-flex justify-content-center d-flex align-items-start">
            <img style="margin-top:25%;display:inline;" width="10%;" src="img/loading.gif" alt="">
        </div>
        <div class="container">
           <div class="progress">
              <div id ="pg" class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
            </div>
        </div>
        
    </div>
   
   
<!--<div class="container">   
    <progress id="" max="100" style="width: 100%;"></progress>
</div>-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
