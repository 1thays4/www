<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Free Smart Store Website Template | Products :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <link href='//fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
include 'conexao.php';
?>
<div class="wrap">
    <div class="header">
        <div class="header_top">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" alt=""/></a>
            </div>
            <div class="header_top_right">
                <div class="search_box">
                    <form>
                        <label>
                            <input type="text" value="Search for Products" onfocus="this.value = '';"
                                   onblur="if (this.value === '') {this.value = 'Search for Products';}">
                        </label><input type="submit"
                                       value="SEARCH">
                    </form>
                </div>
                <div class="shopping_cart">
                    <div class="cart">
                        <a href="#" title="View my shopping cart" rel="nofollow">
                            <strong class="opencart"> </strong>
                            <span class="cart_title">Cart</span>
                            <span class="no_product">(empty)</span>
                        </a>
                    </div>
                </div>
                <div class="languages">
                    <div id="language" class="wrapper-dropdown" tabindex="1">EN
                        <strong class="opencart"> </strong>
                        <ul class="dropdown languges">
                            <li>
                                <a href="#" title="Français">
                                    <span><img src="images/gb.png" alt="en" width="26" height="26"></span><span
                                            class="lang">English</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Français">
                                    <span><img src="images/au.png" alt="fr" width="26" height="26"></span><span
                                            class="lang">Français</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Español">
                                    <span><img src="images/bm.png" alt="es" width="26" height="26"></span><span
                                            class="lang">Español</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Deutsch">
                                    <span><img src="images/ck.png" alt="de" width="26" height="26"></span><span
                                            class="lang">Deutsch</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Russian">
                                    <span><img src="images/cu.png" alt="ru" width="26" height="26"></span><span
                                            class="lang">Russian</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <script type="text/javascript">
                        function DropDown(el) {
                            this.dd = el;
                            this.initEvents();
                        }

                        DropDown.prototype = {
                            initEvents: function () {
                                var obj = this;

                                obj.dd.on('click', function (event) {
                                    $(this).toggleClass('active');
                                    event.stopPropagation();
                                });
                            }
                        }

                        $(function () {

                            var dd = new DropDown($('#language'));

                            $(document).click(function () {
                                // all dropdowns
                                $('.wrapper-dropdown').removeClass('active');
                            });

                        });

                    </script>
                </div>
                <div class="currency">
                    <div id="currency" class="wrapper-dropdown" tabindex="1">$
                        <strong class="opencart"> </strong>
                        <ul class="dropdown">
                            <li><a href="#"><span>$</span>Dollar</a></li>
                            <li><a href="#"><span>€</span>Euro</a></li>
                        </ul>
                    </div>
                    <script type="text/javascript">
                        function DropDown(el) {
                            this.dd = el;
                            this.initEvents();
                        }

                        DropDown.prototype = {
                            initEvents: function () {
                                var obj = this;

                                obj.dd.on('click', function (event) {
                                    $(this).toggleClass('active');
                                    event.stopPropagation();
                                });
                            }
                        }

                        $(function () {

                            var dd = new DropDown($('#currency'));

                            $(document).click(function () {
                                // all dropdowns
                                $('.wrapper-dropdown').removeClass('active');
                            });

                        });

                    </script>
                </div>
                <div class="login">
                    <span><a href="login.html"><img src="images/login.png" alt="" title="login"/></a></span>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="h_menu">
            <a id="touch-menu" class="mobile-menu" href="#">Menu</a>
            <nav>
                <ul class="menu list-unstyled">
                    <li><a href="index.php">HOME</a></li>
                    <li class="activate"><a href="products.php">Produtos</a>
                        <ul class="sub-menu list-unstyled">
                            <div class="nag-mother-list">
                                <?php
                                $sqli = "SELECT * FROM produtos";
                                $resultado = mysqli_query($conexao, $sqli) or die(mysqli_error($conexao));
                                while ($dados = mysqli_fetch_array($resultado)) {
                                    $category = $dados["Category"];
                                    print_r(explode('/', $category, -1));
                                    $sqli = "WHERE Category = 'Mochilas'";
                                    //$category[0] = "WHERE Category = 'Mochilas' ";
                                    //$dados = array('cat1'=>$category[0], 'cat2'=>$category[1], 'cat3'=>$category[2]);
                                    //print_r($category[0]);
                                    echo '<div class="navg-drop-main">
                                            <div class="nav-drop">
                                        <li><a href="products.php">' . $category . '</a></li>
                                    </div>
                                    </div>

                                    ';
                                }
                                ?>
                        </ul>
                    </li>
                    <li><a href="products.php">Top Brand</a>
                        <ul class="sub-menu list-unstyled sub-menu2">
                            <div class="navg-drop-main">
                                <div class="nav-drop nav-top-brand">
                                    <li><a href="products.php">Product 1</a></li>
                                    <li><a href="products.php">Product 2</a></li>
                                    <li><a href="products.php">Product 3</a></li>
                                    <li><a href="products.php">Product 4</a></li>
                                    <li><a href="products.php">Product 5</a></li>
                                    <li><a href="products.php">Product 6</a></li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li><a href="faq.html">Serviços</a>
                        <ul class="sub-menu list-unstyled sub-menu3">
                            <div class="navg-drop-main">
                                <div class="nav-drop">
                                    <li><a href="products.php">Product 4</a></li>
                                    <li><a href="products.php">Product 5</a></li>
                                    <li><a href="products.php">Product 6</a>

                                    </li>
                                </div>
                                <div class="nav-drop">
                                    <li><a href="products.php">Product 4</a></li>
                                    <li><a href="products.php">Product 5</a></li>
                                    <li><a href="products.php">Product 6</a>
                                    </li>
                                </div>
                                <div class="nav-drop">
                                    <li><a href="products.php">Product 4</a></li>
                                    <li><a href="products.php">Product 5</a></li>
                                    <li><a href="products.php">Product 6</a></li>
                                </div>
                                <div class="nav-drop">
                                    <li><a href="products.php">Product 4</a></li>
                                    <li><a href="products.php">Product 5</a></li>
                                    <li><a href="products.php">Product 6</a></li>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </ul>
                    </li>
                    <li><a href="about.html">Sobre</a></li>
                    <li><a href="#">Entrega</a></li>
                    <li><a href="faq.html">Faq</a></li>
                    <li><a href="contact.html">CONTATO</a></li>
                    <div class="clear"></div>
                </ul>
            </nav>
            <script src="js/menu.js" type="text/javascript"></script>
        </div>
    </div>
    <div class="main">
        <div class="content">
            <div class="content_top">
                <div class="heading">
                    <h3>PRODUTOS EM DESTAQUE</h3>
                </div>
                <?php

                //$where = ' WHERE produtos.codigo > 0';
                // $where .= (isset($valor)) ? 'AND Sugestao_preco = $valor' : '';
                //$strSql = "SELECT * FROM produtos $where";
                // $query = mysqli_query($conexao, $strSql);
                //if (!isset($Sugestao_preco)|| $Sugestao_preco== ""){
                //$string = "";
                //} else{
                //    $string= 'WHERE Sugestao_preco > 0 ORDER BY ASC';
                //}

                ?>
                <?php
                # Função que ajuda a desenhar o controle HTML select
                #
                function combobox($arrDados, $valorSelecionado = null)
                {
                    echo "<option></option>";
                    foreach ($arrDados as $key => $value) {
                        $selected = ($valorSelecionado == $key) ? "selected=\"selected\"" : null;
                        echo "<option value=\"$key\" $selected >$value</option>";
                    }
                }

                #
                # Array com os dados de nossa combo
                #
                $arrCombo = array(
                    "bigger" => "Maiores preços",
                    "smaller" => "Menores preços",
                    "mais" => "Mais vendidos",
                    "melhor" => "Melhor avaliados",
                    "estoque" => "Em estoque"

                );

                #
                # Deveríamos carregar esta informação a partir de uma fonte de dados
                #
                $string = 'WHERE Sugestao_preco > 0 ';
                $valor = $_POST['Sugestao_preco'];
                switch ($valor) {
                    case 'bigger';
                        $string = 'ORDER BY Sugestao_preco  DESC LIMIT 10';
                        break;
                    case 'smaller';
                        $string = 'ORDER BY Sugestao_preco  ASC LIMIT 10';
                        break;
                    case 'mais';
                        $string = 'ORDER BY Sugestao_preco  DESC LIMIT 10';
                        break;
                    case 'melhor';
                        $string = 'ORDER BY Sugestao_preco  DESC LIMIT 10';
                        break;
                    case 'estoque';
                        $string = 'WHERE Sugestao_preco > 0 LIMIT 10';
                        break;
                    case '';
                        $string = "";
                }
                $valor_selecionado = $valor;
                ?>
                <div class="sort">
                    <p>Ordenar por:
                    <form name="formCombo" action="" method="post" enctype="multipart/form-data">
                        <select name="valor" title="">
                            <?php combobox($arrCombo, $valor_selecionado); ?>

                        </select>
                        &nbsp;&nbsp;&nbsp;
                        <input type="submit" name="botao" value="Filtrar"/>
                    </form>
                </div>
                <div class="show">
                    <p>Show:
                        <label>
                            <select>
                                <option>4</option>
                                <option>8</option>
                                <option>12</option>
                                <option>16</option>
                                <option>20</option>
                                <option>In Stock</option>
                            </select>
                        </label>
                    </p>
                </div>
                <div class="page-no">
                    <p>Result Pages:
                    <ul>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>[<a href="#"> Próximo>>></a>]</li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="conteudo-master">

                <div class="conteudo">
                    <table cellpadding="8" cellspacing="10" border="0" width="100%">
                        <tr>
                            <?php
                            $loopH = 4;
                            $resultado = mysqli_query($conexao, "SELECT * FROM produtos WHERE codigo < 2000 ORDER BY codigo DESC LIMIT 4 ") or die('Não foi possivel conectar.' . mysqli_error($conexao));
                            $registro = mysqli_num_rows($resultado);
                            $i = 1;
                            while ($dados = mysqli_fetch_array($resultado)) {
                                if ($i < 4) {
                                    echo '
                            <td align="center" valign="top" bgcolor="#ffffff">
                            <img src="' . $dados['Image1'] . '" width="157" height="157" alt=""/>
                            <h2>' . $dados['nome'] . '</h2>
                            <p>' . $dados['Slug'] . '</p>
                            <p><span class="strike">R$' . number_format($dados['Sugestao_preco'], 2, ",", ".") . '</span>
                                <span class="price"> R$' . number_format($dados['Sugestao_preco'], 2, ",", ".") . '</span></p>
                            <div class="button"><span><img src="images/cart.jpg" alt=""/><a href="preview-3.html"
                                                                                            class="cart-button">Comprar</a></span>
                            </div>
                            <div class="button"><span><a href="preview-3.html" class="details">Detalhes</a></span></div>
                            </td>
                            ';
                                } elseif ($i = $loopH) {
                                    echo '
                            <td align="center" valign="top" bgcolor="#ffffff">
                            <img src="' . $dados['Image1'] . '" width="157" height="157" alt=""/>
                            <h2>' . $dados['nome'] . '</h2>
                            <p>' . $dados['Slug'] . '</p>
                            <p><span class="strike">R$' . number_format($dados['Sugestao_preco'], 2, ",", ".") . '</span>
                                <span class="price">R$' . number_format($dados['Sugestao_preco'], 2, ",", ".") . '</span></p>
                            <div class="button"><span><img src="images/cart.jpg" alt=""/><a href="preview-3.html"
                                                                                            class="cart-button">Comprar</a></span>
                            </div>
                            <div class="button"><span><a href="preview-3.html" class="details">Detalhes</a></span></div>
                              </td>
                        </tr>
                        <tr>
                            ';
                                    $i = 0;
                                }
                                $i++;
                            }
                            ?>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="content_bottom">
                <div class="heading">
                    <h3>NOVOS PRODUTOS</h3>
                </div>
                <?php
                #
                # Array com os dados de nossa combo
                #
                $arrCombo = array(
                    "bigger" => "Maiores preços",
                    "smaller" => "Menores preços",
                    "mais" => "Mais vendidos",
                    "melhor" => "Melhor avaliados",
                    "estoque" => "Em estoque"
                );
                #
                # Deveríamos carregar esta informação a partir de uma fonte de dados
                #
                $string = 'WHERE Sugestao_preco > 0 ';
                $valor = $_POST['Sugestao_preco'];
                switch ($valor) {
                    case 'bigger';
                        $string = 'ORDER BY Sugestao_preco  DESC LIMIT 10';
                        break;
                    case 'smaller';
                        $string = 'ORDER BY Sugestao_preco  ASC LIMIT 10';
                        break;
                    case 'mais';
                        $string = 'ORDER BY Sugestao_preco  DESC LIMIT 10';
                        break;
                    case 'melhor';
                        $string = 'ORDER BY Sugestao_preco  DESC LIMIT 10';
                        break;
                    case 'estoque';
                        $string = 'WHERE Sugestao_preco > 0 LIMIT 10';
                        break;
                    case '';
                        $string = "";
                }
                $valor_selecionado = $valor;
                ?>
                <div class="sort">
                    <p>Ordenar por:
                        <label>
                            <form name="formCombo" action="" method="post" enctype="multipart/form-data">
                                <select name="valor" title="">
                                    <?php combobox($arrCombo, $valor_selecionado); ?>
                                </select>
                                <input type="submit" name="botao" value="Filtrar"/>
                            </form>
                        </label>
                    </p>
                </div>
                <div class="show">
                    <p>Show:
                        <label>
                            <select>
                                <option>4</option>
                                <option>8</option>
                                <option>12</option>
                                <option>16</option>
                                <option>20</option>
                                <option>In Stock</option>
                            </select>
                        </label>
                    </p>
                </div>
                <div class="page-no">
                    <p>Result Pages:
                    <ul>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>[<a href="#"> Next>>></a>]</li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section group">
                <div class="grid_1_of_4 images_1_of_4">

                    <table cellpadding="8" cellspacing="10" border="0" width="100%">
                        <tr>
                            <?php
                            $loopH = 4;
                            $resultado = mysqli_query($conexao, "SELECT * FROM produtos WHERE codigo > 5 ORDER BY codigo ASC LIMIT 4 ") or die('Não foi possivel conectar.' . mysqli_error($conexao));
                            $registro = mysqli_num_rows($resultado);
                            $i = 1;
                            while ($dados = mysqli_fetch_array($resultado)) {
                                if ($i < 4) {
                                    echo '
                            <td align="center" valign="top" bgcolor="#ffffff"> <a href="preview-3.html">
                            <img src="' . $dados['Image1'] . '" width="157" height="157" alt=""/>
                              <div class="discount">
                        <span class="percentage">40%</span>
                    </div>
                            <h2>' . $dados['nome'] . '</h2>
                            <p>' . $dados['Slug'] . '</p>
                            <p><span class="strike">R$' . number_format($dados['Sugestao_preco'], 2, ",", ".") . '</span>
                                <span class="price"> R$' . number_format($dados['Sugestao_preco'], 2, ",", ".") . '</span></p>
                            <div class="button"><span><img src="images/cart.jpg" alt=""/><a href="preview-3.html"
                                                                                            class="cart-button">Comprar</a></span>
                            </div>
                            <div class="button"><span><a href="preview-3.html" class="details">Detalhes</a></span></div>
                            </td>
                            ';
                                } elseif ($i = $loopH) {
                                    echo '
                            <td align="center" valign="top" bgcolor="#ffffff">
                            <img src="' . $dados['Image1'] . '" width="157" height="157" alt=""/>
                            <h2>' . $dados['nome'] . '</h2>
                            <p>' . $dados['Slug'] . '</p>
                            <p><span class="strike">R$' . number_format($dados['Sugestao_preco'], 2, ",", ".") . '</span>
                                <span class="price">R$' . number_format($dados['Sugestao_preco'], 2, ",", ".") . '</span></p>
                            <div class="button"><span><img src="images/cart.jpg" alt=""/><a href="preview-3.html"
                                                                                            class="cart-button">Comprar</a></span>
                            </div>
                            <div class="button"><span><a href="preview-3.html" class="details">Detalhes</a></span></div>
                              </td>
                        </tr>
                        <tr>
                            ';
                                    $i = 0;
                                }
                                $i++;
                            }
                            ?>
                        </tr>
                    </table>
                </div>
            </div>
<div class="footer">
    <div class="wrapper">
        <div class="section group">
            <div class="col_1_of_4 span_1_of_4">
                <h4>Information</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Customer Service</a></li>
                    <li><a href="#"><span>Advanced Search</span></a></li>
                    <li><a href="#">Orders and Returns</a></li>
                    <li><a href="#"><span>Contact Us</span></a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>Why buy from us</h4>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="faq.html">Customer Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="contact.html"><span>Site Map</span></a></li>
                    <li><a href="preview-2.html"><span>Search Terms</span></a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>My account</h4>
                <ul>
                    <li><a href="contact.html">Sign In</a></li>
                    <li><a href="index.php">View Cart</a></li>
                    <li><a href="#">My Wishlist</a></li>
                    <li><a href="#">Track My Order</a></li>
                    <li><a href="faq.html">Help</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>Contact</h4>
                <ul>
                    <li><span>+91-123-456789</span></li>
                    <li><span>+00-123-000000</span></li>
                </ul>
                <div class="social-icons">
                    <h4>Follow Us</h4>
                    <ul>
                        <li class="facebook"><a href="#" target="_blank"> </a></li>
                        <li class="twitter"><a href="#" target="_blank"> </a></li>
                        <li class="googleplus"><a href="#" target="_blank"> </a></li>
                        <li class="contact"><a href="#" target="_blank"> </a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy_right">
            <p>&copy; 2013 Smart Store. All Rights Reserved | Design by <a href="http://w3layouts.com">W3Layouts</a></p>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        /*
        var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
         };
        */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>