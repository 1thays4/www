<?php
class Pessoa {
	private $nome;
	private $sobrenome;
	private $idade;
	private $sexo;
	function __construct($nome) {
		$this->nome = $nome;
	}
	function __destruct() {
		echo "Professor feio";
	}
	function getNome() {
		return $this->nome;
	}
	function getSobrenome() {
		return $this->sobrenome;
	}
	function getIdade() {
		return $this->idade;
	}
	function getSexo() {
		return $this->sexo;
	}
	function setNome($nome) {
		$this->nome = $nome;
	}
	function setSobrenome($sobrenome) {
		$this->sobrenome = $sobrenome;
	}
	function setIdade($idade) {
		$this->idade = $idade;
	}
	function setSexo($sexo) {
		$this->sexo = $sexo;
	}
}
?>