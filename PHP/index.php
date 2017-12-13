
oi <hr >

<?php

$meuarray = array( array('cod' => '001'
            ,'cliente' => 'Jubileu'
            ,'Data' => '19/12/17'
            ,'itens'=> array(array('produto'=>'Frango'
                                    ,'valor'=>14.50))
                            ,(array('produto'=>'arroz'
                                    ,'valor'=>4.30))
                            ,(array('produto'=>'mandioca'
                                    ,'valor'=>11.50))
                        
            )
        ,array('cod' => '002'
            ,'cliente' => 'Jubileu'
            ,'Data' => '19/12/17'
            ,'itens'=> array(array('produto'=>'coca-cola'
                                    ,'valor'=>6.60))
                            ,(array('produto'=>'arroz'
                                    ,'valor'=>4.30))
                            ,(array('produto'=>'trident'
                                    ,'valor'=>1.59))
                        
            )
        ,array('cod' => '003'
            ,'cliente' => 'Jubileu'
            ,'Data' => '19/12/17'
            ,'itens'=> array(array('produto'=>'vinho'
                                    ,'valor'=>18.50))
                            ,(array('produto'=>'leite'
                                    ,'valor'=>2.20))
                            
                        
            )
);
for( $ind_ped=0; $ind_ped<count($meuarray); $ind_ped++)
{
    echo '<br><br>Pedido '.$ind_ped.':';
    echo '    <br> - cod: '.$meuarray[$ind_ped]['cod'];
    for( $ind_ped=0; count($arr_itens) < $ind_ped;$arr_itens++){
        $arr_itens=$arr_itens[$arr_itens];
        $arr_produtos=$arr_itens[$arr_itens];
        echo '<br>--Item: '.$arr_itens.':--produto'.$arr_produtos;
    }

}
echo '<hr>';
print_r($meuarray);
echo 'antes do exit';
exit;
echo 'depois do exit';
    //

    $tabela = $meuarray['cod'];
    $tabela .= $meuarray['itens'];

    $tabela = '<table border="1">';//abre table
    $tabela .='<thead>';//abre cabeçalho
    $tabela .='<tr>';
    $tabela .='   <th>Código</th>';
    $tabela .='   <th>Data</th>';
    $tabela .='   <th>Cliente</th>';
    $tabela .='   <th>Itens</th>';
    $tabela .='</tr>';//fecha linha
    $tabela .='</thead>'; //fecha cabeçalho
    $tabela .='<tbody>';//abre corpo da tabela
    foreach ($meuarray as $arr_pedidos) {
        if (is_array($arr_pedidos)) {
            foreach ($arr_pedidos as $arr_dados) {
                $tabela .= '<tr>'; // abre uma linha
                $tabela .= '<td>'.$arr_dados['cod'].'</td>'; // coluna codigo
                $tabela .= '<td>'.$arr_dados['Data'].'</td>'; //coluna data
                $tabela .= '<td>'.$arr_dados['cliente'].'</td>'; // coluna cliente
                $tabela .= '<td>'.'<ol>';
                if (is_array($arr_dados)) {
                    foreach ($arr_dados as $arr_produtos) {
                        if(is_array($arr_produtos)){
                            foreach ($arr_produtos as $arr_itens) {
                                $arr_itens['produto'] // ol produto
                                .$arr_itens['valor']; // ol produto
                            }
                        }
                    }
                }'</ol>'.'</td>';
            }
        }
    }
    $tabela .= '</tr>'; // fecha linha
    $tabela .='</tbody>'; //fecha corpo
    $tabela .= '</table>';//fecha tabela
    echo $tabela; 

/**
 * Created by PhpStorm.
 * User: KillZombie
 * Date: 01/10/2017
 * Time: 22:25
 */
 ?>