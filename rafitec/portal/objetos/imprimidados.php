<?php


require_once 'usuario.php';

$usuario = new Usuario();

echo $usuario -> nome;
echo "<br>";
echo $usuario -> cnpj;
echo "<br>";
echo $usuario - > senha;

?>