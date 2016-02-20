<?php
 include "topo.php";
 include "menu.php";    

?>

    <div class="well container">

        <h1>Cadastro de Clientes</h1>

        <form name="form1" method="post" action="salvar.php" novalidate>

            <fieldset>
                <legend>*Campos Obrigatórios</legend>

                <div class="control-group">

                    <label for="nome" class="control-label">*Nome Completo:</label>

                    <div class="controls">

                        <input type="text" name="nome" required placeholder="Digite seu nome" data-validation-required-message="Preencha o campo de " class="form-control">

                    </div>

                </div>

                <div class="control-group">

                    <label for="email" class="control-label">*E-mail:</label>

                    <div class="controls">

                        <input type="text" name="email" required placeholder="Digite seu e-mail" data-validation-required-message="Preencha o campo de email" data-validation-email-message="E-mail Inválido" class="form-control">

                    </div>

                </div>

                <div class="control-group">

                    <label for="telefone" class="control-label">Telefone:</label>

                    <div class="controls">

                        <input type="tel" name="telefone" placeholder="Digite seu telefone com DDD" data-class="form-control" data-mask="(99) 9999-9999?9" class="form-control">

                    </div>

                </div>



                <div class="control-group">
                    <label for="estadocivil"> *Estado Civil </label>

                    <div class="controls">
                        <select name="estadocivil" required data-validation-required-message="Selecione um estado civil" class="form-control">

                            <option value=""></option>
                            <option value="S">Solteiro</option>

                            <option value="S">Solteiro</option>
                            <option value="C">Casado</option>
                            <option value="V">Viuvo(a)</option>
                            <option value="E">Enrolado</option>

                        </select>

                    </div>

                </div>

                <div class="control-group">
                    <label for="sexo"> *Sexo</label>

                    <div class="controls">
                        <input type="radio" name="sexo" value="M" required data-validation-required-message="Selecione um sexo"  >Maculino
                        <input type="radio" name="sexo" value="F" required data-validation-required-message="Selecione um sexo">Feminino

                    </div>

                </div>
                
                <div class="control-group">
                <label for="salario" class="control-label">Salario:</label>
                    
                    <div class="controls">
                    
                    <input type="text" name="salario" id="salario" class="form-control">
                    </div>
                
                </div>

                <div class="control-group">
                <label for="data" class="control-label">Data Nascimento:</label>
                    
                    <div class="controls">
                    
                    <input type="text" name="data" id="data" class="form-control" data-mask="99/99/9999">
                    </div>
                
                </div>
                
                <button type="submit" class="btn  btn-success pull-right ">
                    <i class="glyphicon glyphicon-ok"></i> Salvar/Alterar Dados


                </button>

            </fieldset>


        </form>
        
        <script type="text/javascript">
        
        $(function () { 
            $('#salario').maskMoney({thousands:'.', decimal:','});
            $('#data').datepicker({format:'dd/mm/yyyy'});
        
        } )
        
        </script>

    </div>

    </body>

    </html>