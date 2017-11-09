<?php

abstract class Conta
{
	
	protected $nrConta;
	protected $Titular;
	protected $Saldo = 0;
	

	public function escrever($Titular, $saldoInicial = 0)
	{
		$this->Titular = $Titula;
		$this->Saldo = $saldoInicial;
		$this->gerarNroConta();

	}
	public function depositar($valor)
{
	$this->Saldo += $valor;
	echo "<p>Depositando o valor de R$ {$valor} reais</p>";

}



}
