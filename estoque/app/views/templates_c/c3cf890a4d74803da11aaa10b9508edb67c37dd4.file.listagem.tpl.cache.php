<?php /* Smarty version Smarty-3.1.19, created on 2016-01-17 15:25:32
         compiled from "C:\wamp\www\estoque\app\views\templates\listagem.tpl" */ ?>
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
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_569bce8c4be882_97136788',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569bce8c4be882_97136788')) {function content_569bce8c4be882_97136788($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<div class="container">
    <p class="btns-opcoes">
        <a href="/<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/novo">
            <button>Novo</button>
        </a>
    </p>
    <?php if ($_smarty_tpl->tpl_vars['arrColunas']->value) {?>
        <table>
            <thead>
            <tr>
                <?php  $_smarty_tpl->tpl_vars['item_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arrColunas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item_value']->key => $_smarty_tpl->tpl_vars['item_value']->value) {
$_smarty_tpl->tpl_vars['item_value']->_loop = true;
?>
                    <th><?php echo $_smarty_tpl->tpl_vars['item_value']->value;?>
</th>
                <?php } ?>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arrItens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value) {
$_smarty_tpl->tpl_vars['produto']->_loop = true;
?>
            <tr>
                <?php  $_smarty_tpl->tpl_vars['attr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attr']->key => $_smarty_tpl->tpl_vars['attr']->value) {
$_smarty_tpl->tpl_vars['attr']->_loop = true;
?>
                    <td><?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
</td>
                <?php } ?>
                <td><a href="/<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/editar/id/<?php echo $_smarty_tpl->tpl_vars['produto']->value['id'];?>
">Editar</a></td>
                <td><a href="/<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/excluir/id/<?php echo $_smarty_tpl->tpl_vars['produto']->value['id'];?>
">Excluir</a></td>
                <?php } ?>
            </tr>
            </tbody>
        </table>
    <?php }?>
</div>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
<?php }} ?>
