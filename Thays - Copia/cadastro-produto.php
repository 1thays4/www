<?php
/**
 * Created by PhpStorm.
 * User: THAYS
 * Date: 15/11/2017
 * Time: 12:40
 */
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        Cadastro Produtos
    </title>
</head>
<body>
<form name="form1" method="post" action="pega_cadastro.php">
    <table width="50%" cellspacing="10" cellpadding="10" border="1">
        <tr>
            <td colspan="2" bgcolor="#f0f8ff"><h3><center>CADASTRO DE PRODUTOS</center></h3></td>
        </tr>
        <tr>
            <td width="208">Nome do Produto</td>
            <td width="282"><input name="nome" type="text" size="50"></td>
        </tr>
        <tr>
            <td width="208">Descrição do Produto</td>
            <td width="282"><input name="descricao" type="text" size="50"></td>
        </tr>
        <tr>
            <td>Quantidade</td>
            <td><input name="quantidade" type="text" size="10"></td>
        </tr>
        <tr>
            <td>Preço</td>
            <td><input name="preco" type="text" size="10"></td>
        </tr>
    </table>
    <p><input type="submit" value="Cadastrar" name="B1"><input type="reset" value="Redefinir"></p>
</form>
</body>

</html>
