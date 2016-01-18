<?php /*%%SmartyHeaderCode:16573569bce8528a368-09019636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1160cfe367b67c790989ef7809b5d84e79a065e' => 
    array (
      0 => 'C:\\wamp\\www\\estoque\\app\\views\\templates\\pedidos\\novo.tpl',
      1 => 1452915836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16573569bce8528a368-09019636',
  'variables' => 
  array (
    'head' => 0,
    'controller' => 0,
    'arrClientes' => 0,
    'cliente' => 0,
    'arrProdutos' => 0,
    'produto' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_569bce855cc951_47406807',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569bce855cc951_47406807')) {function content_569bce855cc951_47406807($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Novo | Pedidos</title>
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
    <form action="/pedidos/salvar/" method="POST">
        <p>

        <div class="coluna-editar">Clientes:</div>
        <select name="clientes_id">
                            <option value="1">Lucas</option>
                    </select>
        </p>

        <p>

        <div class="coluna-editar">Produtos:</div>
        <select name="produtos_id">
                            <option value="1">p1</option>
                            <option value="2">p2</option>
                    </select>
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
