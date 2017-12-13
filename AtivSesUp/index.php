<?
session_start();
/* Documenta��o:
   Tela com os comportamentos deficidos
   por GET atrav�s do �ndice 'acao'
   que pode ser 'efetuar_login'
              , 'sair' ou inexistente.
*/
$acao = 'inexistente';
$email_recebido = '';
$senha_recebido = '';
$arr_pessoas = array();
$arr_pessoas[0] = array('nome'=>'Usu�rio 1','email'=>'us1@teste.com','senha'=>'123');
$arr_pessoas[1] = array('nome'=>'Usu�rio 2','email'=>'us2@teste.com','senha'=>'123');
$usuario_logado = null;
$mensagem = '';
// isset(var) = verifica se a vari�vel ou indice existe.
if(isset( $_GET['acao']))
{
    $acao = $_GET['acao'];
    if($acao=='efetuar_login'){
        $email_recebido = $_POST['inp_email'];
        $senha_recebido = $_POST['inp_senha'];
        //echo "\n<br>email_recebido=".$email_recebido;
        //echo "\n\n\n<br>senha_recebido=".$senha_recebido;

        // Validar se email e senha existem para
        // alguma pessoa
        foreach( $arr_pessoas as $pessoa)
        {
            if(   $pessoa['email'] == $email_recebido
               && $pessoa['senha'] == $senha_recebido ){
                //echo "\n<br>OK =".$pessoa['nome'];
                $usuario_logado = $pessoa;
                $_SESSION['us_log'] = $pessoa;
            }

        } // FOR
        if(!$usuario_logado) {
            $mensagem = 'Usu�rio ou senha inv�lidos!';
        }
    }// FIM if($acao=='efetuar_login')

}// FIM if(isset( $_GET['acao']))

if($usuario_logado!=null){
    ?>
    <div id="div_usu_logado" style="text-align:center; width:100%;">
        <h2>Ol�</h2>
        <h4>Sr.<?=$usuario_logado['nome']?></h4>
        <a href="imagens.php">Imagens</a>
        <a href="index.php?acao=sair">Sair</a>
    </div>
    <?
}
else if( $acao=='sair'){
    $_SESSION['us_log'] = null;
    ?>
    <div id="div_logoff" style="text-align:center; width:100%;">
        <h2>Logoff realizado com sucesso!</h2>
        <a href="index.php">Voltar</a>
    </div>
    <?
}
else{
    ?>
    <div id="div_login"
         style="text-align:center;
                width:100%;
                height:100%">

        <form style="width:250px;
                     margin:auto;
                     margin-top:10%;
                     border-radius:5px;
                     border: 1px solid #ddd;
                     padding: 0 10px 20px;"
              action="index.php?acao=efetuar_login"
              method="post">
            <h3>Login</h3>
            <input type="text"     name="inp_email"
                   value="<?=$email_recebido?>"
                   placeholder="Email"
                style="width:100%">
            <br><br>
            <input type="password" name="inp_senha"
                   placeholder="Senha"
                   style="width:100%"><br>
            <br>
            <input type="reset" value="Limpar">
            <input type="submit" value="Enviar">
            <p style="color: red"><?=$mensagem?></p>
        </form>

    </div>
    <?
}
?>
