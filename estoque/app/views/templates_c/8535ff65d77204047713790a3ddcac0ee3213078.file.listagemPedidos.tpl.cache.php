<?php /* Smarty version Smarty-3.1.19, created on 2016-01-17 15:25:27
         compiled from "C:\wamp\www\estoque\app\views\templates\listagemPedidos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9455569bce87a7dac5-72486771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8535ff65d77204047713790a3ddcac0ee3213078' => 
    array (
      0 => 'C:\\wamp\\www\\estoque\\app\\views\\templates\\listagemPedidos.tpl',
      1 => 1452917289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9455569bce87a7dac5-72486771',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'controller' => 0,
    'arrItens' => 0,
    'pedido' => 0,
    'attr' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_569bce87bb3b98_67542384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569bce87bb3b98_67542384')) {function content_569bce87bb3b98_67542384($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<div class="container">
    <p class="btns-opcoes">
        <a href="/<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/novo">
            <button>Novo</button>
        </a>
    </p>
    <?php if ($_smarty_tpl->tpl_vars['arrItens']->value) {?>
    <table>
        <thead>
        <tr>
            <th>Cliente ID</th>
            <th>Produto ID</th>
            <th>Excluir</th>
        </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['pedido'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pedido']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arrItens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pedido']->key => $_smarty_tpl->tpl_vars['pedido']->value) {
$_smarty_tpl->tpl_vars['pedido']->_loop = true;
?>
        <tr>
            <?php  $_smarty_tpl->tpl_vars['attr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pedido']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attr']->key => $_smarty_tpl->tpl_vars['attr']->value) {
$_smarty_tpl->tpl_vars['attr']->_loop = true;
?>
                <td><?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
</td>
            <?php } ?>
            <td>
                <a href="/<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/excluir/clientes_id/<?php echo $_smarty_tpl->tpl_vars['pedido']->value['clientes_id'];?>
/produtos_id/<?php echo $_smarty_tpl->tpl_vars['pedido']->value['produtos_id'];?>
">Excluir</a>
            </td>
            <?php } ?>
        </tr>
        </tbody>
    </table>
    <?php }?>
</div>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
<?php }} ?>
