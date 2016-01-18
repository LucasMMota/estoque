<?php /* Smarty version Smarty-3.1.19, created on 2016-01-17 15:25:25
         compiled from "C:\wamp\www\estoque\app\views\templates\pedidos\novo.tpl" */ ?>
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
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_569bce85402d61_86780440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569bce85402d61_86780440')) {function content_569bce85402d61_86780440($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<div class="container">
    <form action="/<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/salvar/" method="POST">
        <p>

        <div class="coluna-editar">Clientes:</div>
        <select name="clientes_id">
            <?php  $_smarty_tpl->tpl_vars['cliente'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cliente']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arrClientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->key => $_smarty_tpl->tpl_vars['cliente']->value) {
$_smarty_tpl->tpl_vars['cliente']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cliente']->value['nome'];?>
</option>
            <?php } ?>
        </select>
        </p>

        <p>

        <div class="coluna-editar">Produtos:</div>
        <select name="produtos_id">
            <?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arrProdutos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value) {
$_smarty_tpl->tpl_vars['produto']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['produto']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['produto']->value['nome'];?>
</option>
            <?php } ?>
        </select>
        </p>
        <button type="submit" value="Salvar">Salvar</button>
    </form>
</div>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
<?php }} ?>
