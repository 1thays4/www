<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
include 'conexao.php';
?>
<div class="section group">

    <div class="grid_1_of_4 images_1_of_4">
        <table cellpadding="8" cellspacing="10" border="0" width="100%">
            <tr>
                <?php
                $loopH = 3;
                $resultado = mysqli_query($conexao, "SELECT * FROM produtos") or die('Não foi possivel conectar.' . mysqli_error($conexao));
                $registro = mysqli_num_rows($resultado);
                $i = 1;
                while ($dados = mysqli_fetch_array($resultado)) {
                    if ($i < 3) {
                        echo '
                <td align="center" valign="top" bgcolor="#ffffff">
                <img src="' . $dados['Image1'] . '" width="200" height="150" alt=""/>
                </td>
                ';
                    } elseif ($i = $loopH) {
                        echo '
                <td align="center" valign="top" bgcolor="#ffffff">
                <img src="' . $dados['Image1'] . '" width="200" height="150" alt=""/>
                </td>
                </tr>
                <tr>
                ';
                        $i = 0;
                    }
                    $i++;
                }
                ?>
            </tr>
        </table>
    </div>
</div>
</body>

</html>
