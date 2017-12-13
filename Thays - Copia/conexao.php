<?php
/**
 * Created by PhpStorm.
 * User: THAYS
 * Date: 15/11/2017
 * Time: 12:31
 */
$conexao = mysqli_connect('localhost', 'id3322788_root', 12345678) or die("Erro ao conectar com o servidor");
$sqli_banco = mysqli_select_db($conexao, 'id3322788_cadastro');
?>