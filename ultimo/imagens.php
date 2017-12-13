<?
session_start();
$us_logado = null;
if(isset($_SESSION['us_log'])){
    $us_logado = $_SESSION['us_log'];
}
//
//
if($us_logado==null) {
    ?>
    <script type="application/javascript">
        window.alert('Login solicitado!');
        window.location = 'index.php';
    </script>

    <?
}
else{
    ?>
    <div id="div_menu" style="float:right">
        Usuário logado: <?=$us_logado['nome']?>
        <a href="index.php?acao=sair">Sair</a>
    </div>
    <h1>Imagens</h1>


    <table border="1">
        <tr>
            <td>Arquivo</td>
            <td>Acessar</td>
            <td> - </td>
        </tr>
    </table>
    <?
}
?>

