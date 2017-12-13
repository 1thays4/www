<?php

//Define o nome da classe a ser criada, no nosso caso Conexao
class Conexao
{
    //Abaixo as respectivas variaveis para cada atributo de nossa classe
    var $usuario = "id3322788_root";
    var $senha = 12345678;
    var $hostname = "localhost";
    var $banco = "id3322788_cadastro";

    //Dois atributos extras, um para guardar o comando sql e outro para guardar o link conexao
    public $link = "";

    //Definir m?todo setConectar, tem a fun??o de executar os c?digos para conexao ao banco de dados
    function setConectar()
    {
        //Faz a conexao com ao banco e armazena na variavel this->link
        $link = mysqli_connect($this->hostname, $this->usuario, $this->senha) or die (mysqli_error());
        //Seleciona o banco a ser usado no mysqli
        mysqli_select_db($link, "id3322788_cadastro");
    }
}
$Conexao = new Conexao();
?>