<?php
include_once 'Pessoa.php';
include_once 'Exercicios.php';
class Aluno extends Pessoa implements Exercicios {
	private $altura;
	private $peso;
	function __construct($nome, $sobrenome, $idade, $sexo, $altura, $peso) {
		parent::__construct ( $nome, $sobrenome, $idade, $sexo );
		$this->altura = $altura;
		$this->peso = $peso;
	}
	function toString() {
		return $this->getNome () . " - " . $this->getSobrenome ();
	}
	function pular($altura) {
		echo "pulei";
	}
}
?>