<html>
<head>
    <title>Exibir dados com PHP/MySql</title>
    <meta charset="UTF-8">
    <style type="text/css">
        table{
            width:100%;
            border-collapse: separate;
            border-spacing: 15px;
        }
    </style>
</head>
<body>

<h1>Exibir dados</h1>

<?php
include 'conexao.php';

$res = mysqli_query($conexao,'select * from produtos') or die(mysqli_error($conexao)); /*Executa o comando SQL, no caso para pegar todos os usuarios do sistema e retorna o valor da consulta em uma variavel ($res)  */

echo '<table><tr><td>Login</td><td>Nome do Usuário</td><td>Senha do Usuário</td></tr>';

/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
while($escrever=mysqli_fetch_array($res)){

    /*Escreve cada linha da tabela*/
    echo '<tr><td>' . $escrever["nome"] . '</td><td>' . $escrever["descricao"] . '</td><td>' . $escrever["SKU"] . '</td></tr>';

}/*Fim do while*/

echo '</table>'; /*fecha a tabela apos termino de impressão das linhas*/

mysqli_close($conexao) or die(mysqli_error($conexao));

?>

</body>
</html>