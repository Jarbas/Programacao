<!DOCTYPE HTML>
<html>
<head>

<meta charset ="utf-8"/>
<!--<meta http-equiv="refresh" content="30">   <!-- atributo que atualiza a pagina html em determinado tempo-->
<meta http-equiv="content">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="colorbox.css">
    <link  rel="shortcut icon"             href="images/icone.png" >
    
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

<link   href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
<link   href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>


<script type="text/javascript">

$(document).ready(function() {

  /*  $('#bt-limpar').click(function() {
        $('input').val('');


         $('label').css('color', 'red');

    $('li').eq(2).css('color', 'yellow');   


    });   
   

  $("#datepicker" ).datepicker();*/
  
});</script>


</head>

<body id="topo">
    <header>
        <a href="#topo" title="Home" id="logo">JARBAS COLTRO</a>
     </header>


     <nav class="navbar navbar-inverse  navbar-fixed-top  "> <!--  inverse para menu ficar para o lado direito -->?

        <div class="navbar-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                </button>
                <a class="navbar-brand" href="home.php">

                    <img src="https://sites.google.com/site/jarbascltr/_/rsrc/1445297887125/img_ref/Atual2.jpg" class="img-responsive img-thumbnail" height="25" width="150">
                </a>
            </div>

        </div>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="nav navbar-nav navbar-right ">

                <li> <a href="home"><i class="glyphicon glyphicon-home"></i> Home </a></li>
                 <li> <a href="sobre"><i class="glyphicon glyphicon-user"></i> Sobre </a></li>
                <li>
                <a href="#"  data-toggle="modal" data-target="#login" >Login</a>
                </li>
               

            </ul>
        </div>

    </nav>

    <!-- aqui copiar -->



       <?php
     //recuperar o parametro envio pelo htacces

     //$param = "home";
     

     if (isset($_GET["param"]))
     {


     $param = $_GET["param"];
     
     echo "<script>alert('  parametro: ".$param."');window.location='index.php'</script>"; 
              
     }
         
     //inlcusao pagina corresponente
    $pages = "pages/".$param.".php";
     //$pages = "pages/sobre.php";


  //if ($pages != "pages/home.php" )
  //echo "<script>alert('  parametro: ".$pages."');window.location='index.php'</script>"; 



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
    <footer>
        <p>ⓒ Jarbas coltro - Todos os direitos reservados</p>
        <p>Desenvolvido por Jarbas coltro</p>
        <p>
            <a href="https://www.facebook.com/Jarbas.coltro.3" title="Facebook" alt="Facebook"><i class="fa fa-facebook-square fa-3x"></i></a>
             <a href="https://www.instagram.com/Jarbascoltro" title="Instagram" alt="Instagram"><i class="fa fa-instagram fa-3x"></i></a>
            <a href="#" title="Email" alt="Email"><i class="fa fa-envelope fa-3x"></i></i></a>         
        </p>        
    </footer> 

    <script type="text/javascript">
        $("#btnmenu").click(function(){
            $("#menu").toggle();
        })
    </script>



<form id="form1" method="post" onsubmit = "verificar()" action=""> 
<label for="nome">Nome:</label>
<input id="nome" name="nome" type="text"><br>
<label for="idade">Idade:</label>
<input id="idade" name="idade" type="number"><br>
<p>Date: <input type="text" id="datepicker"></p>
<p>Date: <input type="text" id="datepicker"></p>
<label for="email">e-mail:</label>
<input id="email" name="email" type="text"><br>

<button id="bt-limpar">Limpar</button>
<button id="bt-enviar">Enviar</button>
</form> 


</body>


</html>