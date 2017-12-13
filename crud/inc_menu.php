<?
@session_start();
//echo '<pre>';print_r($_SESSION);
$us_logado = null;
if(isset($_SESSION['us_log'])){
    $us_logado = $_SESSION['us_log'];
}
// Segurança
if($us_logado==null) {
    ?>
    <script type="application/javascript">
        window.alert('Login solicitado!');
        window.location = 'index.php';
    </script>

    <?
    exit;
}
include('conexao.php');
?>

<div id="div_menu"
     style="display:inline-table; width:100%">
    <div style="float:right;color:#777; font-size:10px;">
        <?=date('H:i:s')?>
        Usuário logado:<b> <?=$_SESSION['us_log']['nome']?></b>
    </div>
    <a href="index.php?acao=sair">Sair</a>
    &nbsp;&nbsp;|&nbsp;&nbsp;
    <a href="usuarios_lista.php">Usuários</a>

</div>
