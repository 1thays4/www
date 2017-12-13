<html>
<head>
    <title>Auto Drop Down com PhP e MySQL</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?
############################################################################################################
# Esse Exemplo foi escrito para ajudar aqueles que est�o procurando uma maneira                            #
# de fazer um caixa do tipo DropDown (tamb�m chamada de ComboBox) ter o seu valor                          #
# alterado baseado na escolha de outra caixa, eu particularmente tive muito trabalho                       #
# at� conseguir algo com sucesso e agora compartilho isso com todos que programem                          #
# em PhP e precisem desse exemplo.                                                                         #
#                                                                                                          #
# O script � baseado em JavaScript e PhP, o JS foi tirado do site http://javascript.internet.com           #
# do script Auto Drop Down de autoria de Jerome Caron (jerome.caron@globetrotter.net),                     #
# meu muito obrigado a ele.                                                                                #
#                                                                                                          #
# O exemplo que eu uso aqui utiliza de banco de dados MySQL, mas pode facilmente ser                       #
# adaptado a outro banco de dados qualquer.                                                                #
# A estrutura do banco e seus dados de exemplos est�o no arquivo banco.sql                                 #
#                                                                                                          #
# Todo o codigo esta comentado para ajudar a melhor entender e adapta-lo a outras necessidades             #
#                                                                                                          #
# Obrigado ao pessoal da Lista PhP-pt (http://br.egroups.com/group/php-pt) que j� salvaram minha           #
# vida inumeras vezes, ao Renato e Julio, amigos e colegas de trabalho, a Camilla que � a                  #
# pessoa que eu mais amo no mundo todo junto com nossa filha.                                              #
#                                                                                                          #
# D�vidas, critica, sugest�es s�o bem vindas                                                               #
# Carlos dos Santos (carlosmaster@jedi.com.br)                                                             #
############################################################################################################

###########################################################
# Altere os valores usuario, senha e banco_de_dados       #
# para o dados do seu servidor, lembre-se que a estrutura #
# do banco esta no arquivo banco.sql                      #
###########################################################

//$conecta = mysqli_connect("localhost", "id3322788_root", 12345678) or die(mysqli_error($conecta));
//$seleciona_db = mysqli_select_db($conecta, "id3322788_cadastro");

###########################################################
# Aqui come�amos a escrever o JavaScript que vai fazer    #
# tudo acontecer, o que estaremos � fazendo � alterando o #
# script original do Jerome Caron para que o PhP escreva  #
# parte dele dependendo da consulta que tivermos no banco #
# de dados                                                #
###########################################################
?>
<SCRIPT LANGUAGE="JavaScript">
    team = new Array(
            ? >
        <?php
        include 'conexao.php';
        ?>
        <?php
        ###########################################################
        # Caso a sua tabela seja diferente altere apenas a sql e  #
        # a array $row e $rowx para que elas apontem para o novo  #
        # nome dos campos                                         #
        # Todas as categorias ter�o listadas nelas o item "Todas" #
        # com valor '0' e caso a categoria n�o tenha nenhuma      #
        # Sub Categoria ela retorna o item "Qualquer", tamb�m com  #
        # valor '0'.                                              #
        ###########################################################
        $sql = mysqli_query($conexao, "SELECT * FROM categoria ORDER BY descricao ASC");
        $sql_result = ($sql);
        echo mysqli_error($conexao);
        $num = mysqli_num_rows($sql_result);
        while ($row = mysqli_fetch_array($sql_result)) {
            $conta = 0;
            $conta = $conta + 1;
            $cod_categoria = $row["codigo"];
            echo "new Array(\n";
            $sub_sql = "select * from sub_categoria where cod_categoria='$cod_categoria'";
            $sub_result = mysqli_query($conexao, $sub_sql);
            $num_sub = mysqli_num_rows($sub_result);
            if ($num_sub >= 1) {
                echo "new Array(\"Todas\", 0),\n";
                while ($rowx = mysqli_fetch_array($sub_result)) {
                    $codigo_sub = $rowx["codigo"];
                    $sub_nome = $rowx["descricao"];
                    $conta_sub = 0;
                    $conta_sub = $conta_sub + 1;
                    if ($conta_sub == $num_sub) {
                        echo "new Array(\"$sub_nome\", $codigo_sub)\n";
                        $conta_sub = "";
                    } else {
                        echo "new Array(\"$sub_nome\", $codigo_sub),\n";
                    }
                }
            } else {
                echo "new Array(\"Qualquer\", 0)\n";
            }
            if ($num > $conta) {
                echo "),\n";
            }
        }
        echo ")\n";
        echo ");\n";
        ?>

        function fillSelectFromArray(selectCtrl, itemArray, goodPrompt, badPrompt, defaultItem) {
            var i, j;
            var prompt;
// empty existing items
            for (i = selectCtrl.options.length; i >= 0; i--) {
                selectCtrl.options[i] = null;
            }
            prompt = (itemArray !== null) ? goodPrompt : badPrompt;
            if (prompt === null) {
                j = 0;
            }
            else {
                selectCtrl.options[0] = new Option(prompt);
                j = 1;
            }
            if (itemArray !== null) {
// add new items
                for (i = 0; i < itemArray.length; i++) {
                    selectCtrl.options[j] = new Option(itemArray[i][0]);
                    if (itemArray[i][1] !== null) {
                        selectCtrl.options[j].value = itemArray[i][1];
                    }
                    j++;
                }
// select first item (prompt) for sub list
                selectCtrl.options[0].selected = true;
            }
        }
    //  End -->
</script>
<div style="text-align: center;">
    <form name="form1" method="post" action="">
        <p>Aqui tamb&eacute;m temos itens a ser observados, verifique no codigo fonte</p>
        <p><b><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: xx-small; ">
                    <?
                    ###########################################################
                    # Estamos quase terminado, agora precisamos fazer com que #
                    # o conte�do do DropDown das categorias seja o mesmo que  #
                    # o que temos no banco de dados.                          #
                    # � preciso tamb�m observar o evento onChange que ele     #
                    # possui, onde tamb�m deve aparecer o nome do segundo     #
                    # DropDown.                                               #
                    # O segundo DropDown n�o precisa de nada especial.        #
                    # Com isso concluimos nosso codigo e podemos testa-lo     #
                    ###########################################################
                    ?>
                    <label>
                        <select name=categoria
                                onChange="fillSelectFromArray(this.form.sub_categoria, ((this.selectedIndex === -1) ? null : team[this.selectedIndex-1]));">
                            <option>Escolha uma Categoria</option>
                            <?
                            $sql = "SELECT * FROM categoria ORDER BY descricao";
                            $sql_result = mysqli_query($conexao, $sql);
                            echo mysqli_error($conexao);
                            while ($row = mysqli_fetch_array($sql_result)) {
                                $cod_categoria = $row["codigo"];
                                $desc_categoria = $row["descricao"];
                                ?>
                                <option value="<?
                                echo $cod_categoria; ?>">
                                    <?
                                    echo $desc_categoria; ?>
                                </option>
                                <?
                            }
                            ?>
                        </select>
                    </label>
                    <label>
                        <select name="sub_categoria">
                            <option>---------------</option>
                        </select>
                    </label>
                </span></b></p>
    </form>
</div>
</body>
</html>
