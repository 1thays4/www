<?php

$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('localhost','id3322788_root',12345678)or die(mysql_error());
$db = mysql_select_db('id3322788_cadastro')or die(mysql_error());
$query_select = "SELECT login FROM siscad WHERE login = '$login'";
$select = mysql_query($query_select,$connect)or die(mysql_error());
$array = mysql_fetch_array($select)or die(mysql_error());
$logarray = $array['login'];

if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";

}else{
    if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
        die();

    }else{
        $query = "INSERT INTO siscad (login,senha) VALUES ('$login','$senha')";
        $insert = mysql_query($query,$connect)or die(mysql_error());

        if($insert){
            echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
        }else{
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
        }
    }
}
?>