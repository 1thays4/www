<?php
include 'conexao.php';
?>
<?php
$estados = mysqli_query($conexao, "SELECT id,titulo FROM estados ORDER BY titulo");

$html .= '<form name="produto" method="get" action="">';
    $html .= '<p>';
        $html .= '<label for="">Selecione um estado</label>';
        $html .= '<select name="id_estado">';
            $html .= '<option>Selecione...</option>';

            while($estado = mysqli_fetch_array($estados)) {
            $selected = ($_GET['id_estado'] == $estado['id']) ? 'selected="selected"' : null;
            $html .= '<option '.$selected.' value="'.$estado['id'].'">'.$estado['titulo'].'</option>';
            }

            $html .= '</select>';
        $html .= '</p>';

    if(isset($_GET['id_estado'])) {
    $html .= '<p>';
        $html .= '<label for="">Selecione uma cidade</label>';
        $html .= '<select name="id_cidade">';
            $cidades = mysqli_query($conexao, "SELECT id,titulo FROM cidades WHERE estados_id = ".$_GET['id_estado']." ORDER BY titulo");

            while($cidade = mysqli_fetch_array($cidades)) {
            $html .= '<option value="'.$cidade['id'].'">'.$cidade['titulo'].'</option>';
            }
            $html .= '</select>';
        $html .= '</p>';
    }

    $html .= '<input type="submit" value="Enviar" />';
    $html .= '</form>';
echo $html;
?>
