<?php /*%%SmartyHeaderCode:14720569bce8c32b917-67911890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3cf890a4d74803da11aaa10b9508edb67c37dd4' => 
    array (
      0 => 'C:\\wamp\\www\\estoque\\app\\views\\templates\\listagem.tpl',
      1 => 1452917171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14720569bce8c32b917-67911890',
  'variables' => 
  array (
    'head' => 0,
    'controller' => 0,
    'arrColunas' => 0,
    'item_value' => 0,
    'arrItens' => 0,
    'produto' => 0,
    'attr' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_569bce8c60be41_22391206',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569bce8c60be41_22391206')) {function content_569bce8c60be41_22391206($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Produtos</title>
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
    <p class="btns-opcoes">
        <a href="/produtos/novo">
            <button>Novo</button>
        </a>
    </p>
            <table>
            <thead>
            <tr>
                                    <th>id</th>
                                    <th>nome</th>
                                    <th>descricao</th>
                                    <th>preco</th>
                                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            </thead>
            <tbody>
                        <tr>
                                    <td>1</td>
                                    <td>p1</td>
                                    <td></td>
                                    <td>123</td>
                                <td><a href="/produtos/editar/id/1">Editar</a></td>
                <td><a href="/produtos/excluir/id/1">Excluir</a></td>
                            <tr>
                                    <td>2</td>
                                    <td>p2</td>
                                    <td>descricao</td>
                                    <td>25.5</td>
                                <td><a href="/produtos/editar/id/2">Editar</a></td>
                <td><a href="/produtos/excluir/id/2">Excluir</a></td>
                            </tr>
            </tbody>
        </table>
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
