<?
/** Atividade 2:
 * Adicionar tratamento para que possamos configurar os tipos e
 * tamanhos dos uploads*/

$extensoes = array('txt', 'png');//.....
$max_tam_kb = '200';

//    print_r($_GET);
//    print_r($_POST);
//    print_r($_FILES);
if (isset($_FILES['inp_arquivo_1'])) {
    $arquivo_1 = $_FILES['inp_arquivo_1'];
    $orig = $arquivo_1['tmp_name'];
    $dest = 'acervo/' . $arquivo_1['name'];
    if (move_uploaded_file($orig, $dest)) {
        echo '<br>Arquivo 1 nome(' . $arquivo_1['name'] . ') Ok!';

    } else {
        echo '<br>Arquivo 1 nome(' . $arquivo_1['name'] . ') erro!';
    }
}
/*[name] => BGInfo.jpg
[type] => image/jpeg
[tmp_name] => C:\wamp\tmp\php65F9.tmp
[error] => 0
[size] => 190996*/
?>
<html>
<head>
<title>

</title>
</head>
<body>
    <form action="arquivos_upload.php?par_por_get=1234&par_2=7777"
          method="post"
          enctype="multipart/form-data">

        text <input type="text" name="inp_nome_arquivo"><BR>
        FILE<input type="file" name="inp_arquivo_1"><BR>
        FILE<input type="file" name="inp_arquivo_2"><BR>
        submit<input type="submit" value="Enviar"><BR>

    </form>

</body>
</html>

