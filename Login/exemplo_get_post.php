<H2>get</H2>
<a href="index.php?nome_par=123&nome_par2=456">
    Link
</a>
<hr>
<form action="index.php?par_for_1=teste"
      method="post">
    <input type="text" name="campo1">
    <input type="text" name="campo2">
    <input type="submit" value="Enviar">
</form>
<br>
<pre>
<?php
    echo '<hr>GET: ';
    print_r($_GET);
    echo '<hr>POST: ';
    print_r($_POST);
?>