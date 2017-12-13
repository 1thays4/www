<html>
<head>
    <title>ETL</title>
    <meta http-equiv="Content-Type" content="text/html"  charset="utf-8">
</head>
<body>
<h3>ETL - Importação</h3>

<?php
//conexao com o banco de dados
include 'conexao.php';

$nome_arquivo = "produtos.csv";

$objeto = fopen($nome_arquivo, 'r');

while (($dados = fgetcsv($objeto, 9000, ";")) !== FALSE) {
    $sqli = "INSERT INTO produtos (SKU, codigo, codigo_barra, nome, descricao, Slug, Category, Brand, Descricao_curta, Descricao_tecnica, Itens_inclusos, Peso_gramas, Altura_cm, Largura_cm, Comprimento_cm, Garantia_dias, Preco_squid, Sugestao_preco, Inventory, Envio_imediato, Tipo_unidade, Image1, Image2, Image3, Image4, Image5, Image6, File1, File2, File3, File4, File5, File6, GTIN_EAN, NCM, Origin, CEST, MVA_ST, IVA_ST, IPI, ICMS, quantidade, preco) VALUES ('$dados[0]','$dados[1]','$dados[2]','$dados[3]','$dados[4]','$dados[5]','$dados[6]','$dados[7]','$dados[8]','$dados[9]','$dados[10]','$dados[11]','$dados[12]','$dados[13]','$dados[14]','$dados[15]','$dados[16]','$dados[17]','$dados[18]','$dados[19]','$dados[20]','$dados[21]','$dados[22]','$dados[23]','$dados[24]','$dados[25]','$dados[26]','$dados[27]','$dados[28]','$dados[29]','$dados[30]','$dados[31]','$dados[32]','$dados[33]','$dados[34]','$dados[35]','$dados[36]','$dados[37]','$dados[38]','$dados[39]','$dados[40]','$dados[41]','$dados[42]')" or die(mysqli_error($conexao));

   mysqli_query($conexao, $sqli) or die(mysqli_error($conexao));

    //echo $sqli . "<br>";
    //echo '<pre>';
  //  print_r($dados);
   // echo '</pre>';
}
fclose($objeto);
echo "Processo Finalizado.";
?>
</body>
</html>
