<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD</title>
    <style>
        body {
            background: #ffffff url("../fundo.jpg") repeat center scroll;
            width: 100%;
            height: 100%;
            padding-top: 50px;
            padding-bottom: 20px;
        }
        div {
            margin: 20px;
            width: 200px;
            border-radius: 5px;
        };
               </style>
    <!-- <link rel="stylesheet" href="<?php// echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">-->
    <script language="JavaScript">
    function enviardados() {

    if (document.dados.customer['name'].value === "" || document.dados.name.value.length < 8) {
    alert("Preencha campo NOME corretamente!");
    document.dados.name.focus();
    return false;
    }
    }
    </script>

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
           <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">CRUD</a></div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false"> Clientes <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASEURL; ?>customers">Gerenciar Clientes</a></li>
                        <li><a href="<?php echo BASEURL; ?>customers/add.php">Novo Cliente</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main class="container">