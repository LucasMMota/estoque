<?php /* Smarty version Smarty-3.1.19, created on 2016-01-16 09:50:07
         compiled from "C:\wamp\www\estoque\app\views\templates\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20301569a2e6f5e5db9-72998642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7eba0f27b4f0de5719e2ad090a258cdcac387978' => 
    array (
      0 => 'C:\\wamp\\www\\estoque\\app\\views\\templates\\404.tpl',
      1 => 1452945006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20301569a2e6f5e5db9-72998642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_569a2e6f614ec6_87332843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569a2e6f614ec6_87332843')) {function content_569a2e6f614ec6_87332843($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<body onload="initialize()">
    <!-- Busca de Imoveis do Portfolio -->
    <section class="wrapper-lg">
        <div class="container">
            <div class="row">
                <div class="error-page">
                        <h2 class="headline text-info"> 404</h2>
                        <div class="error-content">
                            <h3><i class="fa fa-warning text-yellow"></i> Oops! Página não encontrada.</h3>
                            <p>
                                Não encontramos a página requisitada.
                                Clique <a href='javascript: window.history.go(-1);'>aqui</a> para voltar para a página anterior.
                            </p>
                        </div><!-- /.error-content -->
                    </div><!-- /.error-page -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- /busca imoveis portfolio -->

    <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

</body>


<?php }} ?>
