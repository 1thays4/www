<?php
$host = "localhost";
$user = "id3322788_root";
$pass = 12345678;
$banco = "id3322788_cadastro";
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao, $banco) or die(mysqli_error());
?>
<?php
include_once("conexao.class.php");
class Produto extends Conexao{
    //include_once("conexao.class.php");
    //declaracao de variaveis publicas e privadas
    var $codigo;
    var $codigo_barra;
    var $nome;

    // Metodo construtor setamos aqui o que queremos que ele fa�a ao criar o objeto
    function __construct(){
        echo '<br>Produto->__construct()';
        //inclue a classe conexao se n�o estiver incluida
        parent::__construct($db,hostname, usuario, senha, banco,);
        //criamos a nossa conexao com o banco de dados e selecionamos o banco
        //Criar uma variavel para armazer a instancia(objeto) da classee conexao
        $oConexao = new Conexao();
        //Executar o metodo setConectar da classe Conexao
        $oConexao->setConectar();
        echo "Conectado.<br>";
    }
    function setProduto($con){
        global $link;
        //realiza o insert no banco de dados passando os valores do objeto criado
        $insertProdutos = mysqli_query($link, "INSERT INTO produtos values(NULL ,'$this->codigo_barra','$this->nome')") or die (mysqli_error($link));
        if ($result = mysqli_query ( $link ,$insertProdutos )) {
            $row = mysqli_fetch_array ( $result );
            echo $row ['nome'];
            mysqli_free_result ( $result );
        }


        mysqli_close ( $link );
        echo "Inserido.<br>";
    }
}

?>