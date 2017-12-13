<?php

class Produto extends Conexao
{
    //include_once("conexao.class.php");
    //declaracao de variaveis publicas e privadas
    public $codigo;
    public $codigo_barra;
    public $nome;
    public $oConexao;

    // Metodo construtor setamos aqui o que queremos que ele fa�a ao criar o objeto
    function __construct()
    {
        //inclue a classe conexao se n�o estiver incluida
        include_once("conexao.class.php");
        //criamos a nossa conexao com o banco de dados e selecionamos o banco
        //Criar uma variavel para armazer a instancia(objeto) da classee conexao
        $oConexao = new Conexao();
        //Executar o metodo setConectar da classe Conexao
        $oConexao->setConectar();
        echo "Conectado.<br>";
    }

    function setProduto()
    {
        global $link;
        //realiza o insert no banco de dados passando os valores do objeto criado
        $insertProdutos = mysqli_query($link, "insert into produtos values('$this->cod_produto' ,'$this->codigo_barra','$this->produto')");
        echo "Inserido.<br>";
    }
}
$Produto = new Produto()
?>