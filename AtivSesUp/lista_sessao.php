<style>
    .remover{
        background-color: RED;
        padding-left: 5px;
        padding-right: 5px;
        color: white;
        border-radius:5px;
        text-decoration: none;
    }
    td:last-child{
        text-align:center;
    }
</style>
<?
session_start();
//echo '<pre>';print_r($_SESSION);
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
    //echo' Se entrar aqui o usuário já fez login e existe a sessão.';
    // IF verifica se veio o parâmetro do formulário.
    if(isset($_GET['inp_nome_arquivo']))
    {
        if( !isset($_SESSION['nomes']) ){// teste para não gerar erro
            $_SESSION['nomes'] = array();
        }
        // Array bidimencional
        $_SESSION['nomes']                  // Array nível 1
            [count($_SESSION['nomes']) ]    // Array nível 2
                = $_GET['inp_nome_arquivo'];// Atribuido Valor

    }

    ?>
    <div id="div_menu" style="float:right">
        Usuário logado: <?=$_SESSION['us_log']['nome']?>
        <a href="index.php?acao=sair">Sair</a>
    </div>
    <h1>Imagens</h1>

    <form action="imagens.php">
        <input type="text" name="inp_nome_arquivo">
        <input type="submit" value="Enviar">
    </form>

    <table border="1">
        <tr>
            <td>Arquivo</td>
            <td>
                Remover
            </td>
        </tr>
        <?
        if( isset($_SESSION['nomes']) )
        {
            for( $ind=0; $ind<count($_SESSION['nomes']); $ind++){
                ?>
                <tr>
                    <td>
                        <?=$_SESSION['nomes'][$ind]?>
                    </td>
                    <td>
                        <a href="imagens.php?remov=<?=$ind?>"
                           class="remover"> -
                        </a>
                    </td>
                </tr>
                <?
            }
        }
        ?>
    </table>
    <?
}
?>

