<!DOCTYPE HTML>
<html>
<head>

<meta charset ="utf-8"/>
<meta http-equiv="refresh" content="30">   <!-- atributo que atualiza a pagina html em determinado tempo-->

<meta http-equiv="content">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="colorbox.css">
    <link rel="shortcut icon"             href="images/icone.png" >
    
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

<link    href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
<link    href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

</script>
<script type="text/javascript">

$(document).ready(function() {

  /*  $('#bt-limpar').click(function() {
        $('input').val('');


         $('label').css('color', 'red');

    $('li').eq(2).css('color', 'yellow');   


    });   
   

  $("#datepicker" ).datepicker();*/
  
});

</script>

</head>

<body id="topo">
    <header>
        <a href="#topo" title="Home" id="logo">JARBAS COLTRO</a>
        <a href="#" id="btnmenu" title="Mostrar Menu"><img src="imgs/menu2.png" alt="Menu" title="Menu"></a>
        <nav id="menu">
            <ul>
                <li><a href="#topo" title="Home"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#sobre" title="Sobre"><i class="fa fa-info-circle"></i> Sobre</a></li>
                <li><a href="#portfolio" title="Portfolio"><i class="fa fa-book"></i> Portfolio</a></li> 
                <li><a href="#contato" title="Contato"><i class="fa fa-phone-square"></i> Contato</a></li>
            </ul>
        </nav>
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
                 <li> <a href="sobre"><i class="glyphicon glyphicon-user"></i> Quem Somos </a></li>
                 <li> <a href="lancamentos"><i class="glyphicon glyphicon-film"></i> Lançamentos </a>                 </li>

                <li>
                <a href="#"  data-toggle="modal" data-target="#login" >Login</a>
                </li>
                


            </ul>
        </div>

    </nav>
    <div id="banner" class="cycle-slideshow">
        <img src="imgs/coltro2.jpg" alt="Banner 1" title="Banner 1">    
    </div>
    <main>
        <div class="box" id="sobre">
        <div class="container">
            <h1>Sobre</h1>
            <div class="colunas">
                <img src="imgs/Jarbas.jpg" alt="Jarbas" title="Jarbas" class="redondo">
            </div>
            <div class="colunas">
                <p>Sou Jarbas coltro tenho 34 anos, sou  de Chapeco. Casado. </p></br>
                <p>Atualmente Coordenador setor de TI e programador  do Grupo Vacarro.</p></br>
                         
            </div>
        </div>
    </div>
    <div class="box" id="portfolio">
        <div class="container">
            <h1>Meu Portfólio</h1>
            <div class="colunas">
                <p>Sou natural de Chapeco/SC</p>
            </div>
            <div class="colunas">
                <img src="https://sites.google.com/site/jarbascltr/_/rsrc/1379189284804/dbaoracle/oracle.jpg" alt="Oracle" title="DBA">
            </div>
            <div class="colunas">
                <p>Trabalho na industria Rafitecd desde 2012 atuando como programador, DBA e Coordenador do Setor. Sou formado pela Universidaqdedo Oeste de Santa Catarina -  UNOESC. Atualmente se Especializando em Web Mob. </p>
            </div>
                
            <div class="colunas">
                <img src="imgs/rafitec.jpeg" alt="Rafitec" title="Rafitec">
            </div>           
            <div class="colunas">
                <p>AThis particular knowledge base, does not cite any references or sources, which undermines their credibility. It has no commercial purpose, just search.
                </p>

                <p>
01010100 01101000 01100101 00100000 01100010 01101001 01110100 00100000 01110011 01110100 01110010 01100101 01100001 01101101 00100000 01110100 01101000 01110010 01101111 01110101 01100111 01101000 00100000 01110100 01101000 01100101 00100000 01110110 01100101 01101001 01101110 01110011 00100000 00100001 00100001 00100001 00001010 
                </p>
            </div>
            <div class="colunas">
                <img src="imgs/mercado1.jpg" alt="Foto Mercado" title="Foto Mercado">
            </div>
        </div>
    </div> 
    <div class="box" id="contato">
        <div class="container">
            <h1>Contato</h1>           
            <div class="colunas">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3555.895677423341!2d-52.54448114973018!3d-26.970202783019957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e4c884de49d019%3A0xd1f65f9a2a00cd29!2sR.+%C3%82ngelo+Teston%2C+Xaxim+-+SC%2C+89825-000!5e0!3m2!1spt-BR!2sbr!4v1459122518575" width="450" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="colunas">
                <p>Endereço: Rua Ângelo Teston 22</p>
                <p>Bairro Dr Ari Lunardi</p>
                <p>Xaxim - SC</p> 
                <p>FONE: +55 (49) 8505-6095</p>   
                <p><i class="fa fa-envelope"></i><a href="#"> Jarbascoltro7@gmail.com</a></p>             
            </div>     
        </div>
    </div>      
    </main>    
    <footer>
        <p>ⓒ Jarbas coltro - Todos os direitos reservados</p>
        <p>Desenvolvido por Jarbas coltro</p>
        <p>
            <a href="https://www.facebook.com/Jarbas.coltro.3" title="Facebook" alt="Facebook"><i class="fa fa-facebook-square fa-3x"></i></a>
            <a href="http://www.twitter.com/Jarbassif" title="Twitter" alt="Twitter"><i class="fa fa-twitter-square fa-3x"></i></a>
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
</head>	

</html>