<?php

class Carro
{
	
	public $portas;
	public $buzina;
	public $volante;
	

	public function escrever(){
		echo "Caracteristicas de um automovel.". $this->portas;
	}	
}

$Carro = new carro();
$Carro->portas = 'Abre e fecha';
$Carro->buzina = 'Emite som.';
$Carro->volante = 'Esterça.';

echo "<pre>";
var_dump($Carro);
$Carro->escrever(); 
echo "$Carro->portas";

