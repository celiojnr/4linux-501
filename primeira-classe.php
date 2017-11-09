<?php

class Pincel 

{
	
public $cor;
public $marca;

public function escrever(){
echo "Eu sou um pincel. ". $this-> cor;

	}	
		
}

$pincelAzul = new Pincel();
$pincelAzul-> cor = 'azul';
$pincelPreto = new Pincel();
$pincelPreto-> cor = 'preto';

echo "<pre>";
var_dump($pincelAzul);
var_dump($pincelPreto);
$pincelAzul-> escrever();
echo "<br>";




