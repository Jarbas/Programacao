<?php
 include "topo.php"

?>

    <div class="well well-sm container">

        <h1 class="text-center">  
         <img src="../images/logo.png" alt="NerdFlix" title="NerdFlix">
     </h1>


        <form name="login" method="post" action="home.php" novalidate>


            <div class="control-group form-group">

                <label for="login" class="control-label">Login:</label>

                <div class="input-group controls ">

                    <div class="input-group-addon">

                        <i class="glyphicon glyphicon-user"></i>

                    </div>
                    <!--adon-->

                    <input type="text" name="login" placeholder="Digite o login" required data-validation-required-message="digite seu login" class="form-control input-lg">

                </div>
            </div>
            <!--group-->

            <div class="control-group form-group">

                <label for="senha" class="control-label">Senha:</label>

                <div class="input-group controls ">

                    <div class="input-group-addon">

                        <i class="glyphicon glyphicon-lock"></i>

                    </div>
                    <!--adon-->

                    <input type="password" name="senha" required placeholder="Digite a senha" required data-validation-required-message="digite sua sennha" class="form-control input-lg">

                </div>
            </div>
            <!--group-->


            <button type="submit" class="btn btn-primary pull-right btn-lg "> Logar </button>

        </form>


    </div>
    <!--container-->

    </body>

    </html>