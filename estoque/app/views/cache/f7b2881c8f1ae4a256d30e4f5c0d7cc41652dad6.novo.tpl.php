<?php /*%%SmartyHeaderCode:7753569bce52cfd275-97573212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7b2881c8f1ae4a256d30e4f5c0d7cc41652dad6' => 
    array (
      0 => 'C:\\wamp\\www\\estoque\\app\\views\\templates\\produtos\\novo.tpl',
      1 => 1452915836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7753569bce52cfd275-97573212',
  'variables' => 
  array (
    'head' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_569bce52de0594_15144130',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569bce52de0594_15144130')) {function content_569bce52de0594_15144130($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Novo | Produtos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/files/images/logo.ico">

            <link href="http://estoque.localhost/files/css/bootstrap.css" rel="stylesheet" type="text/css"/>
            <link href="http://estoque.localhost/files/css/bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
            <link href="http://estoque.localhost/files/css/style.css" rel="stylesheet" type="text/css"/>
            <link href="http://estoque.localhost/files/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    </head>

<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="/">Controle de estoque</a>

            <div class="nav-collapse">
                <ul class="nav pull-right menu">
                    <li><a href="/produtos">Produtos</a></li>
                    <li><a href="/clientes">Clientes</a></li>
                    <li><a href="/pedidos">Pedidos</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<div class="container">
    <form action="/produtos/salvar/" method="POST">
        <p>
        <div class="coluna-editar">Nome:</div>
        <input name="nome">
        </p>

        <p>
        <div class="coluna-editar">Descrição:</div>
        <input name="descricao">
        </p>

        <p>
        <div class="coluna-editar">Preço:</div>
        <input name="preco">
        </p>

        <button type="submit" value="Salvar">Salvar</button>
    </form>
</div>
<footer class="container">
    <p>
        &copy;2016 Lucas MM Fonseca</br>
        Controle de Estoque
    </p>
</footer>
</body>
    <script type="text/javascript" src="http://estoque.localhost/files/js/jQuery/jquery.js"></script>
    <script type="text/javascript" src="http://estoque.localhost/files/js/noty/jquery.noty.js"></script>
    <script type="text/javascript" src="http://estoque.localhost/files/js/noty/themes/default.js"></script>
    <script type="text/javascript" src="http://estoque.localhost/files/js/noty/layouts/center.js"></script>
    <script type="text/javascript" src="http://estoque.localhost/files/js/util.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</body>
</html><?php }} ?>
