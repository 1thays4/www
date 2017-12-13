<?php
define("SERVER","localhost");
define("BASE"  ,"abc_oi");
define("USER"  ,"id3322788_root");
define("PASS"  ,12345678);
// echo USER;
// Passo 1 Conectar com o servidor
$conn = @mysql_connect(SERVER,USER,PASS);
if($conn) {
    //echo '<br>Servidor '.SERVER.' conectado!';
}
else{
    echo '<br>1.1 - Banco não encontrado <br>Erro:'.
          mysql_error();
    exit;
}

// Passo 2 Conectar com base. - 1.2- ok]
$base = mysql_select_db(BASE);
if($base) {
    // echo '<br>Base '.BASE.' conectado!';
}
else{
    echo '<br>Base não existe';
    if( mysql_query('CREATE DATABASE '.BASE))
    {
        echo '<br>Base '.BASE.' criada com sucesso';
        mysql_select_db(BASE);
        $cr_tb_usu = mysql_query("
              CREATE TABLE tb_usuario (
                us_codusu INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
                us_nomusu VARCHAR( 50 ) NOT NULL ,
                us_emausu VARCHAR( 50 ) NOT NULL ,
                us_senusu VARCHAR( 50 ) NOT NULL
                )");
        if($cr_tb_usu){
            echo "<br> tb_usuario criado com sucesso!";
            if(!mysql_query("
              INSERT INTO tb_usuario ( us_nomusu   , us_emausu  , us_senusu )
                               VALUES(  'Usuario 1', 'usu@1.com', '123'     )
                                    ,(  'Usuario 2', 'usu@2.com', '123'     )
                                    ,(  'Usuario 2', 'usu@2.com', '123'     );
            ")){
                echo '<br> Erro :'.mysql_error();
            }
            echo '<br> Usuários inseridos: '
                .mysql_affected_rows();

            $res = mysql_query("SELECT us_nomusu,us_emausu FROM tb_usuario");
            while($linha = mysql_fetch_object($res)){
                //echo $linha->us_nomusu;
                echo '<br>'.json_encode($linha);
            }

            $res = mysql_query("SELECT * FROM tb_usuario");
            while($linha = mysql_fetch_array($res)){
                //echo $linha['us_nomusu'];
                echo'<br>'; print_r($linha);
            }

        }
        else{
            echo "<br> Erro ao criar tb_usuario = ".mysql_error();
            exit;
        }
    }
}
