<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: THAYS
 * Date: 15/11/2017
 * Time: 12:56
 */
include 'conexao.php';

$SKU = $_POST['SKU'];
$codigo = $_POST['codigo'];
$codigo_barra = $_POST['codigo_barra'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$Slug = $_POST['Slug'];
$Category = $_POST['Category'];
$Brand = $_POST['Brand'];
$Descricao_curta = $_POST['Descricao_curta'];
$Descricao_tecnica = $_POST['Descricao_tecnica'];
$Itens_inclusos = $_POST['Itens_inclusos'];
$Peso_gramas = $_POST['Peso_gramas'];
$Altura_cm = $_POST['Altura_cm'];
$Largura_cm = $_POST['Largura_cm'];
$Comprimento_cm = $_POST['Comprimento_cm'];
$Garantia_dias= $_POST['Garantia_dias'];
$Preco_squid = $_POST['Preco_squid'];
$Sugestao_preco = $_POST['Sugestao_preco'];
$Inventory = $_POST['Inventory'];
$Envio_imediato = $_POST['Envio_imediato'];
$Tipo_unidade = $_POST['Tipo_unidade'];
$Image1 = $_POST['Image1'];
$Image2 = $_POST['Image2'];
$Image3 = $_POST['Image3'];
$Image4 = $_POST['Image4'];
$Image5= $_POST['Image5'];
$Image6 = $_POST['Image6'];
$File1= $_POST['File1'];
$File2 = $_POST['File2'];
$File3 = $_POST['File3'];
$File4 = $_POST['File4'];
$File5 = $_POST['File5'];
$File6 = $_POST['File6'];
$GTIN_EAN = $_POST['GTIN_EAN'];
$NCM = $_POST['NCM'];
$Origin = $_POST['Origin'];
$CEST = $_POST['CEST'];
$MVA_ST= $_POST['MVA_ST'];
$IVA_ST = $_POST['IVA_ST'];
$IPI = $_POST['IPI'];
$ICMS = $_POST['ICMS'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

$sqli_cadastra = mysqli_query($conexao, "INSERT INTO produtos(SKU, codigo, codigo_barra, nome, descricao, Slug, Category, Brand, Descricao_curta, Descricao_tecnica, Itens_inclusos, Peso_gramas, Altura_cm, Largura_cm, Comprimento_cm, Garantia_dias, Preco_squid, Sugestao_preco, Inventory, Envio_imediato, Tipo_unidade, Image1, Image2, Image3, Image4, Image5, Image6, File1, File2, File3, File4, File5, File6, GTIN_EAN, NCM, Origin, CEST, MVA_ST, IVA_ST, IPI, ICMS, quantidade, preco) value ('$SKU','$codigo','$codigo_barra','$nome','$descricao','$Slug','$Category','$Brand','$Descricao_curta','$Descricao_tecnica','$Itens_inclusos','$Peso_gramas','$Altura_cm','$Largura_cm','$Comprimento_cm','$Garantia_dias','$Preco_squid','$Sugestao_preco','$Inventory','$Envio_imediato','$Tipo_unidade','$Image1','$Image2','$Image3','$Image4','$Image5','$Image6','$File1','$File2','$File3','$File4','$File5','$File6','$GTIN_EAN','$NCM','$Origin','$CEST','$MVA_ST','$IVA_ST','$IPI','$ICMS','$quantidade','$preco)") or die(mysqli_error($conexao));
echo "<center><h1>Cadastro efetuado com sucesso!</h1></center>";

?>
<a href="logout.php"> Sair</a>
</body>
</html>


