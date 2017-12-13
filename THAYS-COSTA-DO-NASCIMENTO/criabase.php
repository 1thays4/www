<?php
header("Content-type: text/html; charset=utf-8");

// Passo 1 Conectar com o servidor
$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
if ($conn) {
    //echo '<br>Servidor '.SERVER.' conectado!';
} else {
    echo '<br>1.1 - Banco não encontrado <br>Erro:' .
        mysqli_error($conn);
    exit;
}

// Passo 2 Conectar com base. - 1.2- ok]
$base = mysqli_select_db($conn, DB_NAME);
if ($base) {
    // echo '<br>Base '.DB_NAME.' conectado!';
} else {
    echo '<br>Base não existe';
    if (mysqli_query($conn, 'CREATE DATABASE ' . DB_NAME)) {
        echo '<br>Base ' . DB_NAME . ' criada com sucesso';
        mysqli_select_db($conn, DB_NAME);
        $cr_tb_usu = mysqli_query($conn, "
          CREATE TABLE customers (		  
          id INT(11) PRIMARY KEY  NOT NULL AUTO_INCREMENT,  
          name VARCHAR(255) NOT NULL,		  
          cpf_cnpj VARCHAR(14) NOT NULL,		  
          birthdate DATE NOT NULL,		  
          address VARCHAR(255) NOT NULL,		  
          hood VARCHAR(100) NOT NULL,		  
          zip_code INT(8) NOT NULL,		  
          city VARCHAR(100) NOT NULL,		 
          state VARCHAR(100) NOT NULL,		  
          phone INT(13) NOT NULL,		  
          mobile INT(13) NOT NULL,		  
          ie INT(11) NOT NULL,		  
          created DATETIME NOT NULL,		  
          modified DATETIME NOT NULL);
           ");
        $cr_tb_usu = mysqli_query($conn, "
          CREATE TABLE cliente (
          CPFCNPJ VARCHAR(20) NOT NULL,
          NOME VARCHAR(100) DEFAULT NULL,
          ENDERECO VARCHAR(2000) DEFAULT NULL,
          NUMERO VARCHAR(20) DEFAULT NULL,
          PRIMARY KEY (CPFCNPJ)
        )");

        $cr_tb_usu = mysqli_query($conn, "
        CREATE TABLE pedido (
          CodigoPedido INT(11) NOT NULL,
          data DATETIME NOT NULL,
           PRIMARY KEY (CodigoPedido)
        ) ENGINE=MyISAM DEFAULT CHARSET=latin1
         ");
        $cr_tb_usu = mysqli_query($conn, "
        CREATE TABLE produto (
          CodigoProduto VARCHAR(50) NOT NULL,
          descricao VARCHAR(100) NOT NULL,
          PRIMARY KEY (CodigoProduto)
        ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
        ");
        $cr_tb_usu = mysqli_query($conn, "
        CREATE TABLE item_pedido (
          CodItemPed VARCHAR(50) NOT NULL,
          qtd FLOAT NOT NULL,
          valorUnitario FLOAT NOT NULL,
          PRIMARY KEY (CodItemPed)
        ) ENGINE=MyISAM DEFAULT CHARSET=latin1
        ");
        if ($cr_tb_usu) {
            echo "<br> wda_customers criado com sucesso!";
            if (!mysqli_query($conn, "
              INSERT INTO customers ( name   , cpf_cnpj  , birthdate, address, hood, zip_code, city, state, phone, mobile, ie, created, modified )
                         VALUES(  'Usuario 1', 'usu@1.com', '123' , 'gyhggh', 'jkki', 'hggh', 'yftfd','jjj', '666', 'kkkk', 'kk', 'jj', 'jhjh'   )
                                    ,(  'Usuario 1', 'usu@1.com', '123' , 'gyhggh', 'jkki', 'hggh', 'yftfd','jjj', '666', 'kkkk', 'kk', 'jj', 'jhjh'   )
                                   ,(  'Usuario 1', 'usu@1.com', '123' , 'gyhggh', 'jkki', 'hggh', 'yftfd','jjj', '666', 'kkkk', 'kk', 'jj', 'jhjh'   );
                       
         
            ")) {
                echo '<br> Erro :' . mysqli_error($conn);
            }

            // echo '<br> Usuários inseridos: '
            // .
            // mysqli_affected_rows($conn);

            $res = mysqli_query($conn, "SELECT name ,cpf_cnpj FROM customers");
            //while ($linha = mysqli_fetch_object($res)) {
            //echo '<br>' . json_encode($linha);
            //}

            //$res = mysqli_query($conn, "SELECT * FROM customers");
            //while ($linha = mysqli_fetch_array($res)) {
            //echo '<br>';
            // print_r($linha);
            // }
            $cr_tb_usu = mysqli_query($conn, "
            LTER TABLE item_pedido ADD CONSTRAINT fk_produto FOREIGN KEY ( CodigoProduto ) REFERENCES produto ( CodigoProduto )
            ");


        } else {
            echo "<br> Erro ao criar wda_customers = " . mysqli_error($conn);
            exit;
        }

    }

}
?>