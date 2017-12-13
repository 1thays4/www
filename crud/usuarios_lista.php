<?
include('inc_menu.php');
?>

<h1>Usuários</h1>

<a href="usuarios_manter.php">Novo usuário</a>
<hr>
Lista de usuários cadastrados:<br>
<table border="1">
    <tr> <td>Id</td> <td>Nome</td> <td>Email</td> </tr>
    <?
    $res = mysql_query("SELECT * FROM tb_usuario");
    while($linha = mysql_fetch_array($res))
    {
        ?>
        <tr>
            <td>
                <a href="usuarios_manter.php?codusu=<?=$linha['us_codusu']?>">
                    <?=$linha['us_codusu']?>
                </a>
            </td>
            <td><?=$linha['us_nomusu']?></td>
            <td><?=$linha['us_emausu']?></td>
        </tr>
        <?
    }
    ?>
</table>

