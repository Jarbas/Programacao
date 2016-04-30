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

   $('#bt-limpar').click(function() {
        $('input').val('');

/* 
         $('label').css('color', 'red');

    $('li').eq(2).css('color', 'yellow');   


    });   
   

  $("#datepicker" ).datepicker();*/
  
});

 });

</script>


</head>

<body id="topo">
    <header>
        <a href="#topo" title="Home" id="logo"></a>
     </header>


     <nav id="navPrincipal"  class="navbar navbar-inverse navbar-fixed-top"> <!--  (navbar-inverse) inverse para menu ficar para o lado direito -->?

        <div class="navbar-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                </button>
                <a class="navbar-brand" href="index.php">

                   <img src="https://sites.google.com/site/jarbascltr/_/rsrc/1445297887125/img_ref/Atual2.jpg" class="img-responsive img-thumbnail" height="25" width="150">
                </a>
            </div>

        </div>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="nav navbar-nav navbar-right ">

                <li> <a href="home"><i class="glyphicon glyphicon-home"></i> Home </a></li>
                 <li> <a href="sobre"><i class="glyphicon glyphicon-user"></i> Sobre </a></li>
                 <li> <a href="jquery"><i class="glyphicon glyphicon-tags"></i> Jquery </a></li>
                <li>  <a href="#"  data-toggle="modal" data-target="#login" >Login</a> </li>
            </ul>
        </div>

    </nav>

    <!-- aqui copiar -->

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

       /*switch($_GET['key'])
       {
        case 'home': include('pages/home.php');break;
        case 'sobre': include('sobre.php');break;
        case 'terms': include('terms.php');break;
        case 'users':include('users.php');break;
        default: include('404.php');
    }*/
     //recuperar o parametro envio pelo htacces



/*  $param = "home";

    if (isset($_GET["param"]))
     {
     $param = $_GET["param"];

     echo "<script>alert(' parametro: ".$pages."');window.location='index.php'</script>"; 
     }         
     //inlcusao pagina corresponente
    //<p>OPA .$pages. - Todos os direitos reservados</p>;
     $pages = "pages/".$param.".php";

//echo "<script>alert(' parametro: ".$pages."');window.location='index.php'</script>"; 
//if ($pages != "pages/home.php" )
//echo "<script>alert('  parametro: ".$pages."');window.location='index.php'</script>"; 
// verificacao se pagina existe


    if(file_exists($pages)){
      
          include $pages;

      $cont = $cont + 1;  

      if ($cont > 2) {

      echo "<script>alert(' cont: ".$cont."');window.location='index.php'</script>"; 

      } 


        }
        else{

        include "pages/erro.php";
        }
*/

    ?>
    
    
<!--Modal-->
    

    <footer>
        <p>ⓒ Jarbas coltro - Todos os direitos reservados</p>
        <p>Desenvolvido por Jarbas coltro</p>
        <p>
            <a href="https://www.facebook.com/jarbas_coltro" title="Facebook" alt="Facebook"><i class="fa fa-facebook-square fa-3x"></i></a>
             <a href="https://www.instagram.com/Jarbascoltro" title="Instagram" alt="Instagram"><i class="fa fa-instagram fa-3x"></i></a>
            <a href="#" title="Email" alt="Email"><i class="fa fa-envelope fa-3x"></i></i></a>         
        </p>        
    </footer> 

    <script type="text/javascript">
        $("#btnmenu").click(function(){
            $("#menu").toggle();
        })
    </script>

</body>


</html>
