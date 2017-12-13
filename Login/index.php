<?php
    /* Documentação:
       Tela com os comportamentos deficidos por GET através do
       índice 'acao' que pode ser 'eferuar_login', 'sair' ou inexistente.
    */
    $acao = 'inexistente';
    $email_recebido = '';
    $senha_recebido = '';

    // isset(var) = verifica se a variável ou indice existe.
    if(isset( $_get['acao']))
    {
        $acao = $_get['acao'];
        if($acao=='eferuar_login'){
            $email_recebido = $_get['inp_email'];
            $senha_recebido = $_get['inp_senha'];
        }
    }
    // Apenas no desenvolvimento
    echo '<br>acao('.$acao.')<br>';

    $arr_pessoas = [];
    $arr_pessoas[0] = array('nome'=>'Usuário 1','email'=>'us1@teste.com','senha'=>'123');
    $arr_pessoas[1] = array('nome'=>'Usuário 2','email'=>'us2@teste.com','senha'=>'123');
?>


<div id="div_usu_logado" style="text-align:center; width:100%;">
    <h2>Olá</h2>
    <h4>Sr.<?=$nome_usu_logado?></h4>
    <a href="index.php?acao=sair">Sair</a>
</div>

<div id="div_logoff" style="text-align:center; width:100%;">
    <h2>Logoff realizado com sucesso!</h2>
    <a href="index.php">Voltar</a>
</div>

<div id="div_login" style="text-align:center; width:100%;">
    <form style="width:300px; border-radius:5px; border: 1px solid #ddd;"
          action="index.php?acao=eferuar_login"
          method="post">
        <input type="text"     name="inp_email"
               value="<?=$email_recebido?>">
        <br>
        <input type="password" name="inp_senha"><br>
        <input type="reset" value="Limpar">
        <input type="submit" value="Enviar">
    </form>
</div>