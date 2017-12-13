<?
include('inc_menu.php');
$codusu = 0;
$nomusu = '';
$senusu = '';
$emausu = '';
$mensag = ' ';
$msgcor = '';
if(isset($_GET['codusu']))
{
    $codusu = $_GET['codusu'];
    if(isset($_POST['bt_form_salvar']))
    {
        $nomusu = $_POST['inp_nome'];
        $emausu = $_POST['inp_email'];
        $senusu = $_POST['inp_senha'];
        if($codusu==0){
            $sql = "INSERT INTO tb_usuario(  us_nomusu   ,  us_emausu   ,  us_senusu    ) 
                                   VALUES( '".$nomusu."', '".$emausu."', '".$senusu."' )";
            $res = mysql_query($sql);
            $qtd = mysql_affected_rows();
            $codusu = mysql_insert_id();
            if($qtd>0){
                $mensag = "Usuário inserido com sucesso! Novo código = ".$codusu; $msgcor = 'green';
            }
            else{
                $mensag = "Erro ao inserir o usuário! ".mysql_error(); $msgcor = 'red'; // echo $sql;
            }
        }
        else{
            $sql = "UPDATE tb_usuario
                       SET us_nomusu = '".$nomusu."'
                         , us_emausu = '".$emausu."'
                         , us_senusu = '".$senusu."'
                     WHERE us_codusu = '".$codusu."' ";
            $res = mysql_query($sql);
            $qtd = mysql_affected_rows();
            if($qtd>0){
                $mensag = "Usuário ".$codusu." alterado com sucesso!"; $msgcor = 'green';
            }
            else{
                $mensag = "Erro ao alterar o usuário! "; $msgcor = 'red';
            }
        }
    }
    else if(isset($_POST['bt_form_excluir']))
    {
        $sql = "DELETE FROM tb_usuario
                 WHERE us_codusu = '".$codusu."' ";
        $res = mysql_query($sql);
        $qtd = mysql_affected_rows();
        if($qtd>0){
            $mensag = "Usuário ".$codusu." deletado com sucesso!"; $msgcor = 'green';
        }
        else{
            $mensag = "Erro ao deletar o usuário ".$codusu."! "; $msgcor = 'red';
        }
    }
    $sql = " SELECT * FROM tb_usuario WHERE us_codusu = '".$codusu."' "; //echo $sql;
    $res = mysql_query($sql);
    while ($linha = mysql_fetch_array($res)){
        $nomusu = $linha['us_nomusu'];
        $emausu = $linha['us_emausu'];
        $senusu = $linha['us_senusu'];
    }
}
?>
<h1> <?= $codusu>0 ? "Editar" : 'Novo' ?> Usuário </h1>
<hr>
<p style="color:<?=$msgcor?>;"><?=$mensag?></p>
<form action="usuarios_manter.php?codusu=<?=$codusu?>"
      method="post">
    <br>Nome: <input type="text" name="inp_nome" value="<?=$nomusu?>">
    <br>Email:<input type="text" name="inp_email" value="<?=$emausu?>">
    <br>Senha:<input type="text" name="inp_senha" value="<?=$senusu?>">
    <br>
    <br>
    <input type="submit" name="bt_form_excluir" value="Excluir">
    <input type="submit" name="bt_form_salvar" value="Salvar">
</form>
