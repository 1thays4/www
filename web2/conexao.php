<?php
/**
 * Created by PhpStorm.
 * User: THAYS
 * Date: 15/11/2017
 * Time: 12:31
 */
$conexao = mysqli_connect('localhost', 'root', '') or die("Erro ao conectar com o servidor");
$sqli_banco = mysqli_select_db($conexao, 'id3322788_cadastro');
?>
<?php
/*class recordset
{
    public $banco = 'id3322788_cadastro';
    public $usuario = 'id3322788_root';
    public $senha = 12345678;
    public $hostname = 'localhost';

    function conexao()
    {
        $conn = mysqli_connect($this->hostname, $this->usuario, $this->senha);
        mysqli_select_db($conn, 'id3322788_cadastro') or die('Não foi possivel conectar.' . mysqli_error($conexao));
        mysqli_query($conn, "SET NAMES 'utf8'");
        mysqli_query($conn, 'SET character_set_connection=utf8');
        mysqli_query($conn, 'SET character_set_results=utf8');
        mysqli_query($conn, 'SET character_set_results=utf8');
    }

    function seleciona($sqli)
    {
        $resultado = mysqli_query($this->conexao($conn), $sqli) or die('Não foi possivel conectar.' . mysqli_error($conn));
        return $resultado;
    }
}*/

?>