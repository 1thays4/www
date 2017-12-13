<!DOCTYPE HTML>
<html>
<head>
    <title>Tecmais | Home </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
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
                            <input type="text" value="Procurar por produtos" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = 'Search for Products';}">
                        </label><input type="submit" value="PROCURAR">
                    </form>
                </div>
                <div class="shopping_cart">
                    <div class="cart">
                        <a href="#" title="View my shopping cart" rel="nofollow">
                            <strong class="opencart"> </strong>
                            <span class="cart_title">Carrinho</span>
                            <span class="no_product">(vazio)</span>
                        </a>
                    </div>
                </div>
                <div class="languages" title="language">
                    <div id="language" class="wrapper-dropdown" tabindex="1">EN
                        <strong class="opencart"> </strong>
                        <ul class="dropdown languges">
                            <li>
                                <a href="#" title="Français">
                                    <span><img src="images/gb.png" alt="en" width="32" height="32"></span><span
                                            class="lang">English</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Français">
                                    <span><img src="images/au.png" alt="fr" width="32" height="32"></span><span
                                            class="lang">Français</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Español">
                                    <span><img src="images/bm.png" alt="es" width="32" height="32"></span><span
                                            class="lang">Español</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Deutsch">
                                    <span><img src="images/ck.png" alt="de" width="32" height="32"></span><span
                                            class="lang">Deutsch</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Russian">
                                    <span><img src="images/cu.png" alt="ru" width="32" height="32"></span><span
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
                <div class="currency" title="currency">
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
                                <div class="navg-drop-main">
                                    <div class="nav-drop">
                                        <li><a href="products.php">Product 1</a></li>
                                        <li><a href="products.php">Product 2</a></li>
                                        <li><a href="products.php">Product 3</a>
                                        </li>
                                    </div>
                                    <div class="nav-drop">
                                        <li><a href="products.php">Product 1</a></li>
                                        <li><a href="products.php">Product 2</a></li>
                                        <li><a href="products.php">Product 3</a>
                                        </li>
                                    </div>
                                    <div class="nav-drop">
                                        <li><a href="products.php">Product 1</a></li>
                                        <li><a href="products.php">Product 2</a></li>
                                        <li><a href="products.php">Product 3</a></li>
                                    </div>
                                    <div class="nav-drop">
                                        <li><a href="products.php">Product 1</a></li>
                                        <li><a href="products.php">Product 2</a></li>
                                        <li><a href="products.php">Product 3</a></li>
                                    </div>
                                    <div class="clear"></div>
                                </div>
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
                            </div>
                        </ul>
                    </li>
                    <li><a href="products.php">Marcas top</a>
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
                    <li><a href="faq.html">Faqs</a></li>
                    <li><a href="contact.html">CONTATO</a></li>
                    <div class="clear"></div>
                </ul>
            </nav>
            <script src="js/menu.js" type="text/javascript"></script>
        </div>

        <div class="header_bottom">
            <div class="header_bottom_left">
                <div class="section group">

                    <?php
                    $loopH = 2;
                    $resultado = mysqli_query($conexao, "SELECT * FROM produtos WHERE codigo > 9 ORDER BY codigo ASC LIMIT 2 ") or die('Não foi possivel conectar.' . mysqli_error($conexao));
                    $registro = mysqli_num_rows($resultado);
                    $i = 1;
                    while ($dados = mysqli_fetch_array($resultado)) {
                        if ($i < 2) {
                            echo '
                           <div class="listview_1_of_2 images_1_of_2">
                            <div class="listimg listimg_2_of_1">
                            <img src="' . $dados['Image1'] . '" width="157" height="157" alt=""/>
                             </div>
                             <div class="text list_2_of_1">
                            <h2>' . $dados['Brand'] . '</h2>
                            <p>' . $dados['Slug'] . '</p>
                           
                          <div class="button"><span><a href="preview.html">Comprar</a></span>
                            </div>
                          </div>
                          </div>
                            
                            ';
                        } elseif ($i = $loopH) {
                            echo '
                            <div class="listview_1_of_2 images_1_of_2">
                            <div class="listimg listimg_2_of_1">
                            <img src="' . $dados['Image1'] . '" width="157" height="157" alt=""/>
                            </div>
                            <div class="text list_2_of_1">
                            <h2>' . $dados['Brand'] . '</h2>
                            <p>' . $dados['Slug'] . '</p>
                       
                         <div class="button"><span><a href="preview.html">Comprar</a></span>
                            </div>
                            </div>
                            </div>
                            ';
                            $i = 0;
                        }
                        $i++;
                    }
                    ?>
                </div>


                <div class="section group">
                    <?php
                    $loopH = 2;
                    $resultado = mysqli_query($conexao, "SELECT * FROM produtos WHERE codigo > 7 ORDER BY codigo ASC LIMIT 2 ") or die('Não foi possivel conectar.' . mysqli_error($conexao));
                    $registro = mysqli_num_rows($resultado);
                    $i = 1;
                    while ($dados = mysqli_fetch_array($resultado)) {
                        if ($i < 2) {
                            echo '
                           <div class="listview_1_of_2 images_1_of_2">
                            <div class="listimg listimg_2_of_1">
                            <img src="' . $dados['Image1'] . '" width="157" height="157" alt=""/>
                             </div>
                             <div class="text list_2_of_1">
                            <h2>' . $dados['Brand'] . '</h2>
                            <p>' . $dados['Slug'] . '</p>
                           
                          <div class="button"><span><a href="preview.html">Comprar</a></span>
                            </div>
                          </div>
                          </div>
                            
                            ';
                        } elseif ($i = $loopH) {
                            echo '
                            <div class="listview_1_of_2 images_1_of_2">
                            <div class="listimg listimg_2_of_1">
                            <img src="' . $dados['Image1'] . '" width="157" height="157" alt=""/>
                            </div>
                            <div class="text list_2_of_1">
                            <h2>' . $dados['Brand'] . '</h2>
                            <p>' . $dados['Slug'] . '</p>
                       
                         <div class="button"><span><a href="preview.html">Comprar</a></span>
                            </div>
                            </div>
                            </div>
                            ';
                            $i = 0;
                        }
                        $i++;
                    }
                    ?>
                </div>
                <div class="clear"></div>
            </div>


            <div class="header_bottom_right_images">
                <!-- FlexSlider -->
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li><img src="images/1.jpg" alt=""/></li>
                            <li><img src="images/2.jpg" alt=""/></li>
                            <li><img src="images/3.jpg" alt=""/></li>
                            <li><img src="images/4.jpg" alt=""/></li>
                        </ul>
                    </div>
                </section>
                <!-- FlexSlider -->
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="main">
        <div class="content">
            <div class="content_top">
                <div class="heading">
                    <h3>Produtos em destaque</h3>
                </div>
                <div class="sort">
                    <p>Sort by:
                        <label>
                            <select>
                                <option>Lowest Price</option>
                                <option>Highest Price</option>
                                <option>Lowest Price</option>
                                <option>Lowest Price</option>
                                <option>Lowest Price</option>
                                <option>Em estoque</option>
                            </select>
                        </label>
                    </p>
                </div>
                <div class="show">
                    <p>Mostrar:
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
                            $loopH = 2;
                            $resultado = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY codigo ASC LIMIT 4 ") or die('Não foi possivel conectar.' . mysqli_error($conexao));
                            $registro = mysqli_num_rows($resultado);
                            $i = 1;
                            while ($dados = mysqli_fetch_array($resultado)) {
                                if ($i < 2) {
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
                    <h3>Novos produtos</h3>
                </div>
                <div class="sort">
                    <p>Sort by:
                        <label>
                            <select>
                                <option>Lowest Price</option>
                                <option>Highest Price</option>
                                <option>Lowest Price</option>
                                <option>Lowest Price</option>
                                <option>Lowest Price</option>
                                <option>In Stock</option>
                            </select>
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
                            $resultado = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY codigo DESC LIMIT 4 ") or die('Não foi possivel conectar.' . mysqli_error($conexao));
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
            <div class="footer">
                <div class="wrapper">
                    <div class="section group">
                        <div class="col_1_of_4 span_1_of_4">
                            <h4>Informação</h4>
                            <ul>
                                <li><a href="#">Sobre nós</a></li>
                                <li><a href="#">Serviço ao cliente</a></li>
                                <li><a href="#"><span>Busca avançada</span></a></li>
                                <li><a href="#">Pedidos e devoluções</a></li>
                                <li><a href="#"><span>Contate-nos</span></a></li>
                            </ul>
                        </div>
                        <div class="col_1_of_4 span_1_of_4">
                            <h4>Porque comprar no Brasil</h4>
                            <ul>
                                <li><a href="about.html">Sobre nós</a></li>
                                <li><a href="faq.html">Serviço ao cliente</a></li>
                                <li><a href="#">Política de privacidade</a></li>
                                <li><a href="contact.html"><span>Mapa do site</span></a></li>
                                <li><a href="preview-2.html"><span>Termos de pesquisa</span></a></li>
                            </ul>
                        </div>
                        <div class="col_1_of_4 span_1_of_4">
                            <h4>Minha conta</h4>
                            <ul>
                                <li><a href="contact.html">Entrar</a></li>
                                <li><a href="index.php">Ver carrinho</a></li>
                                <li><a href="#">Minha Lista de Desejos</a></li>
                                <li><a href="#">Localize meu pedido</a></li>
                                <li><a href="faq.html">Ajuda</a></li>
                            </ul>
                        </div>
                        <div class="col_1_of_4 span_1_of_4">
                            <h4>Contato</h4>
                            <ul>
                                <li><span>+55 47 9 9176-7425</span></li>
                                <li><span>+55 47 9 9176-7425</span></li>
                            </ul>
                            <div class="social-icons">
                                <h4>Siga-nos</h4>
                                <ul>
                                    <li class="facebook"><a href="https://www.facebook.com/tecmaisbrasil/"
                                                            target="_blank"> </a></li>
                                    <li class="twitter"><a href="https://twitter.com/1Tecmais" target="_blank"> </a>
                                    </li>
                                    <li class="googleplus"><a href="https://plus.google.com/u/0/117389305138935071457"
                                                              target="_blank"> </a></li>
                                    <li class="contact"><a
                                                href="https://mail.google.com/mail/u/0/#inbox?compose=160173043c973d90"
                                                target="_blank"> </a></li>
                                    <div class="clear"></div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="copy_right">
                        <p>&copy; 2017 Loja inteligente. Todos os direitos reservados | Design by <a
                                    href="http://w3layouts.com">Thays Costa do Nascimento</a></p>
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
            <link href="css/flexslider.css" rel='stylesheet' type='text/css'/>
            <script defer src="js/jquery.flexslider.js"></script>
            <script type="text/javascript">
                $(function () {
                    SyntaxHighlighter.all();
                });
                $(window).load(function () {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function (slider) {
                            $('body').removeClass('loading');
                        }
                    });
                });
            </script>
</body>
</html>

