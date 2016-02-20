<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <title> NerdFlix </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
 <!--   <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>-->
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="colorbox.css">
    <link  rel="shortcut icon"             href="images/icone.png" >
    
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    

</head>

<body>

    
  <nav class="navbar navbar-inverse  navbar-fixed-top  ">

        <div class="navbar-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                </button>
                <a class="navbar-brand" href="home.php">

                    <img src="images/logo.png">
                </a>
            </div>

        </div>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="nav navbar-nav navbar-right ">

                <li> <a href="home"><i class="glyphicon glyphicon-home"></i> Home </a></li>
                 <li> <a href="sobre"><i class="glyphicon glyphicon-user"></i> Quem Somos </a></li>
                 <li> <a href="lancamentos"><i class="glyphicon glyphicon-film"></i> Lançamentos </a>                 </li>

                <li>
                <a href="#"  data-toggle="modal" data-target="#login" >Login</a>
                </li>
                


            </ul>
        </div>

    </nav>
    

<?php
     //recuperar o parametro envio pelo htacces
     $param = "home";
 

     if (isset($_GET["param"]))
     {
     $param = $_GET["param"];
     }         
     //inlcusao pagina corresponente
    $pages = "pages/".$param.".php";

 echo $pages;
// verificacao se pagina existe

    if(file_exists($pages)){
      
        include $pages;
        }
        else{
        include "pages/erro.php";
        }

    ?>
    
    
<!--Modal-->
    
<form name="form1" method="post"  action="login" class="form-inline" >   
    <div class="modal fade" id="login">
       <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
                
              <button type="button" class="close" data-dismiss="modal">X</button>    
             <h4 class="modal-title" >Efetuar Login</h4>
               
                
             </div>
           
            <div class="modal-body">
             
              <label for="login">Login</label>
              <input type="text" name="login" class="form-control" required>
              <label for="senha">Senha</label>
              <input type="password" name="senha" class="form-control" required>        
             </div> 
             
             <div class="modal-footer">
             
                 <button type="button" class="btn  btn-success"  >Logar</button>
                 <button type="button" class="btn  btn-danger" data-dismiss="modal"  >Canelar</button>
                 
             
             </div>
             
           </div>
         
        </div>
        
        
    
    </div>
</form>    
    

</body>

</html>