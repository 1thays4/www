<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <?php
    include 'conexao.php';
    ?>
    <?php
    $codigo = $_POST['codigo'];
    switch ($codigo) {
        case '4';
            $string = 'WHERE codigo > 0 LIMIT 4';
            break;
        case '8';
            $string = 'WHERE codigo > 7 LIMIT 8';
            break;
        case '12';
            $string = 'WHERE codigo > 50 LIMIT 12';
            break;
        case '16';
            $string = 'WHERE codigo > 100 LIMIT 16';
            break;
        case '20';
            $string = 'WHERE codigo > 150 LIMIT 20';
            break;
        case '';
            $string = "";
    }
    ?>
    <?php
    $Sugestao_preco = $_POST['Sugestao_preco'];
    switch ($Sugestao_preco) {
        case 'menor';
            $string2 = 'WHERE Sugestao_preco > 0 ORDER BY Sugestao_preco ASC ';
            break;
        case 'maior';
            $string2 = 'WHERE Sugestao_preco > 0 ORDER BY Sugestao_preco DESC ';
            break;
        case 'mais';
            $string2 = 'WHERE Sugestao_preco > 0 ORDER BY Sugestao_preco DESC ';
            break;
        case 'melhor';
            $string2 = 'WHERE Sugestao_preco > 0 ORDER BY Sugestao_preco DESC ';
            break;
        case 'estoque';
            $string2 = 'WHERE Sugestao_preco > 0 ORDER BY Sugestao_preco DESC ';
            break;
        case '';
            $string2 = "";
    }
    ?>
    <title>Free Smart Store Website Template | Home :: w3layouts</title>
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
                        <a href="carrinho.php" title="View my shopping cart" rel="nofollow">
                            <strong class="opencart"> </strong>
                            <span class="cart_title">Cart</span>
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
                        };

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
                        };

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
                    <li class="activate"><a href="products.php">Products</a>
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
                    <li><a href="faq.html">Services</a>
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
                    <li><a href="about.html">About</a></li>
                    <li><a href="#">Delivery</a></li>
                    <li><a href="faq.html">Faqs</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
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
                    $resultado = mysqli_query($conexao, "SELECT * FROM produtos WHERE codigo > 9 ORDER BY codigo ASC LIMIT 2") or die('Não foi possivel conectar.' . mysqli_error($conexao));
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
                            <p>' . $dados['nome'] . '</p>
                           
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
                            <p>' . $dados['nome'] . '</p>
                       
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
                            <p>' . $dados['nome'] . '</p>
                           
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
                            <p>' . $dados['nome'] . '</p>
                       
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
                    <h3>Feature Products</h3>
                </div>
                <div class="sort">
                    <p>Sort by:
                    <form name="formCombo1" action="" method="post" enctype="multipart/form-data">
                        <label>
                            <select name="Sugestao_preco">
                                <option value="menor">Lowest Price</option>
                                <option value="maior">Highest Price</option>
                                <option value="mais">Lowest Price</option>
                                <option value="melhor">Lowest Price</option>
                                <option value="estoque">Lowest Price</option>
                                <option>In Stock</option>
                            </select>
                            <input type="submit" name="botao" value="Filtrar"/>
                        </label>
                    </form>
                </div>
                <div class="show">
                    <p>Show:
                    <form name="formCombo2" action="" method="post" enctype="multipart/form-data">
                        <label>
                            <select name="codigo">
                                <option value="4">4</option>
                                <option value="8">8</option>
                                <option value="12">12</option>
                                <option value="16">16</option>
                                <option value="20">20</option>
                                <option value="">In Stock</option>
                            </select>
                            <input type="submit" name="botao" value="Filtrar"/>
                        </label>
                    </form>
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
                <table>
                    <tr>
                        <?php
                        $loopH = 4;
                        $resultado = mysqli_query($conexao, "SELECT * FROM produtos LIMIT 24 $string $string2") or die('Não foi possivel conectar.' . mysqli_error($conexao));
                        $registro = mysqli_num_rows($resultado);
                        $i = 1;
                        while ($dados = mysqli_fetch_array($resultado)) {
                            if ($i < 4) {
                                echo '
                             <td>
                            <div class="grid_1_of_4 images_1_of_4">' . $i . '
                            <img src="' . $dados['Image1'] . '" width="157" height="157" alt=""/>
                            <h2>' . $dados['nome'] . '</h2>
                            
                            <p><span class="strike">R$' . number_format($dados['Sugestao_preco'], 2, ",", ".") . '</span><span class="price"> R$' . number_format($dados['Sugestao_preco'], 2, ",", ".") . '</span></p>
                            <div class="button"><span><img src="images/cart.jpg" alt=""/><a href="processa.php?add=' . $dados['codigo'] . '" class="cart-button">Comprar</a></span>
                            </div>
                            <div class="button"><span><a href="preview-3.html" class="details">Detalhes</a></span></div>
                            </div>
                            </td>
                            ';
                            } elseif ($i = $loopH) {
                                echo '<td>
                            <div class="grid_1_of_4 images_1_of_4">' . $i . '
                            <img src="' . $dados['Image1'] . '" width="157" height="157" alt=""/>
                            <h2>' . $dados['nome'] . '</h2>
                            
                            <p><span class="strike">R$' . number_format($dados['Sugestao_preco'], 2, ",", ".") . '</span><span class="price">R$' . number_format($dados['Sugestao_preco'], 2, ",", ".") . '</span></p>
                            <div class="button"><span><img src="images/cart.jpg" alt=""/><a href="preview-3.html" class="cart-button">Comprar</a></span>
                            </div>
                            <div class="button"><span><a href="preview-3.html" class="details">Detalhes</a></span></div>
                            </div>
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
            <div class="content_bottom">
                <div class="heading">
                    <h3>New Products</h3>
                </div>
                <div class="sort">
                    <p>Sort by:
                    <form name="formCombo" action="" method="post" enctype="multipart/form-data">
                        <label>
                            <select name="Sugestao_preco">
                                <option>Lowest Price</option>
                                <option>Highest Price</option>
                                <option>Lowest Price</option>
                                <option>Lowest Price</option>
                                <option>Lowest Price</option>
                                <option>In Stock</option>
                            </select>
                            <input type="submit" name="botao" value="Filtrar"/>
                        </label>
                    </form>
                </div>
                <div class="show">
                    <p>Show:
                    <form name="formCombo4" action="" method="post" enctype="multipart/form-data">
                        <label>
                            <select name="codigo2">
                                <option value="4">4</option>
                                <option value="8">8</option>
                                <option value="12">12</option>
                                <option value="16">16</option>
                                <option value="20">20</option>
                                <option>In Stock</option>
                            </select>
                            <input type="submit" name="botao" value="Filtrar"/>
                        </label>
                    </form>
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
                <table>
                    <tr>
                        <?php
                        $loopH = 4;
                        $resultado = mysqli_query($conexao, "SELECT * FROM produtos 25 LIMIT 24 $string $string2") or die('Não foi possivel conectar.' . mysqli_error($conexao));
                        $registro = mysqli_num_rows($resultado);
                        $i = 1;
                        while ($dados = mysqli_fetch_array($resultado)) {
                            if ($i < 4) {
                                echo '
                            <td>
                            <div class="grid_1_of_4 images_1_of_4">
                            <img src="' . $dados['Image1'] . '" width="157" height="157" alt=""/>
                             <div class="discount">
                            <span class="percentage">55%</span>
                             </div>
                            <h2>' . $dados['nome'] . '</h2>
                            
                            <p><span class="strike">R$' . number_format($dados['Sugestao_preco'], 2, ",", ".") . '</span><span class="price"> R$' . number_format($dados['Sugestao_preco'], 2, ",", ".") . '</span></p>
                            <div class="button"><span><img src="images/cart.jpg" alt=""/><a href="preview-3.html" class="cart-button">Comprar</a></span>
                            </div>
                            <div class="button"><span><a href="preview-3.html" class="details">Detalhes</a></span></div>
                            </div>
                            </td>
                            ';
                            } elseif ($i = $loopH) {
                                echo '
                             <td>
                            <div class="grid_1_of_4 images_1_of_4">
                            <img src="' . $dados['Image1'] . '" width="157" height="157" alt=""/>
                             <div class="discount">
                            <span class="percentage">55%</span>
                            </div>
                            <h2>' . $dados['nome'] . '</h2>
                            
                            <p><span class="strike">R$' . number_format($dados['Sugestao_preco'], 2, ",", ".") . '</span><span class="price">R$' . number_format($dados['Sugestao_preco'], 2, ",", ".") . '</span></p>
                            <div class="button"><span><img src="images/cart.jpg" alt=""/><a href="preview-3.html" class="cart-button">Comprar</a></span>
                            </div>
                            <div class="button"><span><a href="preview-3.html" class="details">Detalhes</a></span></div>
                            </div>
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