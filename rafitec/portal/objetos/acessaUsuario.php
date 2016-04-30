<?php


require_once 'usuario.php';

class acessaUsuario(){


	$usuario = new Usuario();

	echo  $usuario -> getNome();
}



?>