<?php

abstract class Animal 
{
	protected $respira;
	protected $Corre;
	protected $Come;
		
	public function escrever($respira)
	{
		echo "Caracteristicas de um Animal.";
	}	
}

class Quadrupedes extends Animal
{

public function escrever(){
		echo "Caracteristicas de um Quadrupede.";
}

class Cachorro extends Quadrupedes
{

public function escrever(){
		echo "Caracteristicas de um Cachorro.";
}

$Animal->Respira = 'Animal tem quatro patas.';
$Animal->DuasPatas = 'Animal duas Patas é Bipede.';
$Animal-> = '';

echo "<pre>";
var_dump($Animal);
$Animal->escrever(); 
echo "$->";
