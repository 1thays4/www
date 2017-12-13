<table border="1">
    <tr>
        <td>Cod</td>
        <td>Cliente</td>
        <td>Data</td>
        <td>Itens</td>
        <td>Total</td>
    </tr>
    <?php
    $meuarray = array(
         array('cod' => '001'
            ,'cliente' => 'Anna'
            ,'Data' => '19/12/17'
            ,'itens'=> array( array('produto'=>'Frango'
                                    ,'valor'=>14.50)
                            , array('produto'=>'arroz'
                                    ,'valor'=>4.30)
                            , array('produto'=>'mandioca'
                                    ,'valor'=>11.50)
                            )
            )
        ,array('cod' => '002'
            ,'cliente' => 'Jõao'
            ,'Data' => '19/12/17'
            ,'itens'=> array(array('produto'=>'coca-cola'
                                   ,'valor'=>6.60)
                            , array('produto'=>'arroz'
                                   ,'valor'=>4.30)
                            , array('produto'=>'trident'
                                    ,'valor'=>1.59)
                            )
            )
        ,array('cod' => '003'
            ,'cliente' => 'Jubileu'
            ,'Data' => '19/12/17'
            ,'itens'=> array( array('produto'=>'vinho'
                                    ,'valor'=>'18.50')
                            , array('produto'=>'leite'
                                    ,'valor'=>2.20)
                            )
                            
                        
            )
);
    $str_tabela = '';
    for( $ind_ped=0; $ind_ped<count($meuarray); $ind_ped++)
    {
        $pedido = $meuarray[$ind_ped];// Array
        $cod    = $pedido['cod'];
        $cliente= $pedido['cliente'];
        $Data   = $pedido['Data'];// String
        $str_tabela.=
            '<tr>
                <td> '.$cod    .' </td>
                <td> '.$cliente.' </td>
                <td> '.$Data   .' </td>
                <td></td>
                <td><b>R$ Itens</b></td>
            </tr>';

        $arr_itens  = $pedido['itens'];  // Array
        echo '<br><br>Pedido '.$ind_ped.':'
            .' - cod: '    .$cod
            .' - cliente: '.$cliente
            .' - Data: '   .$Data;

        for( $ind_iten=0; $ind_iten<count($arr_itens); $ind_iten++)
        {
            $item = $arr_itens[$ind_iten];
            $produto = $item['produto'];
            $valor   = $item['valor'];
            echo '<br> - - Item: '.$ind_iten.':'
                 .' - produto: '.$produto
                 .' - valor: '  .$valor;
        }
    }

    echo $str_tabela;
    ?>

    <tr>
        <td colspan="5" style="text-align: right">
            Total Geral <b>R$???</b>
        </td>
    </tr>

</table>
