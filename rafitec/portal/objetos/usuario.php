<?php

class usuario {
	
public $name ;

private $cpf;
private $senha;

protect $cnpj;


//constructor
function Usuario(){
	
$this -> preparaUsuario();
 
 #this -> nome = "Rafitec"s

}

function perparaUsuario(){

 $this -> nome = "Rafitec";
 $this -> cnpj = "00.70.008/001.03";
 $this -> senha = "d87hbkx7";

}

public function getNome(){
	return $this -> nome;
}


puclic function  getCnpj(){
return $this -> cnpj;
}

private function getSenha(){


	return $this -> senha;
}

}

?>