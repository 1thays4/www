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

while (($dados = fgetcsv($objeto, 9000, ",")) !== FALSE) {
    $sqli = "INSERT INTO produtos (SKU, codigo, codigo_barra, nome, descricao, Slug) VALUES ('$dados[0]','$dados[1]','$dados[2]','$dados[3]','$dados[4]','$dados[5]')" or die(mysqli_error($conexao));
  echo $sqli."<br>";
   mysqli_query($conexao, $sqli) or die(mysqli_error($conexao));

    //echo $sqli . "<br>";
   // echo '<pre>';
   // print_r($dados);
   // echo '</pre>';
}
fclose($objeto);
echo "Processo Finalizado.";
?>
</body>
</html>
