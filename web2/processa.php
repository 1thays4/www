<?php
session_start();

$pagina = 'carrinho.php';

class Shopping
{
    private $banco = 'id3322788_cadastro';
    private $senha = '';
    private $login = 'root';
    private $hostname = 'localhost';
    private $conexao;
    private $total;
    private $subTotal;

    function conexao()
    {
        $this->conexao = new mysqli($this->hostname, $this->login, $this->senha);
        mysqli_select_db($this->conexao, $this->banco);
        /* check connection */
        if (mysqli_connect_errno()) {
            printf("Conexão falhou: %s\n", mysqli_connect_error());
            exit();
        };
    }

    function carrinho()
    {
        if ($_SESSION) {
            foreach ($_SESSION as $nome => $qtd) {
                if ($qtd > 0) {
                    if (substr($nome, 0, 9) == 'produtos_') {
                        $id = substr($nome, 9, (strlen($nome) - 9));
                        $pd = mysqli_query($this->conexao, "SELECT codigo, nome, Sugestao_preco FROM produtos WHERE codigo=" . mysqli_real_escape_string($this->conexao, $id));
                        while ($dados = mysqli_fetch_assoc($pd)) {
                            $this->subTotal = $qtd * $dados['Sugestao_preco'];

                            echo '     
     <tbody>
      <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..."
                                                             class="img-responsive"/></div>
                        <div class="col-sm-10">
                            <h4 class="nomargin">' . $dados['nome'] . '</h4>
                            <p>jdfhadhfgfh</p>
                        </div>
                    </div>
                </td>
                <td data-th="Price">' . $dados['Sugestao_preco'] . '</td>
                <td data-th="Quantity">
                    <label>
                        <input type="number" class="form-control text-center" value="' . $qtd . '">
                    </label>
                </td>
                <td data-th="Subtotal" class="text-center">' . 'R$' . number_format($this->subTotal, 2) . '</td>
                <td class="actions" data-th="">
                    <button class="btn btn-info btn-sm"><a href="processa.php?add=' . (int)$id . '" class="fa fa-refresh"></a></button>
                    <button class="btn btn-danger btn-sm"><a href="processa.php?menos=' . (int)$id . '" class="fa fa-trash-o"></a></button>
                </td>
            </tr>
            </tbody>
            ';
                        }
                    }
                    $this->total += $this->subTotal;
                }
            }
            if ($this->total == 0) {
                echo 'Não há produtos no carrinho';
            } else {

                echo ' <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>' . 'R$' . number_format($this->total, 2) . '</strong></td>
            </tr>
            <tr>
                <td><a href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>' . 'R$' . number_format($this->total, 2) . '</strong></td>
                <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
            </tr>
            </tfoot>';
            }
        }
    }

}

if (isset($_GET['add'])) {
    $_SESSION['produtos_' . $_GET['add']] += '1';
    header("Location: " . $pagina);
}
if (isset($_GET['menos'])) {
    $_SESSION['produtos_' . $_GET['menos']]--;
    header("Location: " . $pagina);
}
if (isset($_GET['del'])) {
    $_SESSION['produtos_' . $_GET['del']] == '0';
    header("Location: " . $pagina);
}
?>