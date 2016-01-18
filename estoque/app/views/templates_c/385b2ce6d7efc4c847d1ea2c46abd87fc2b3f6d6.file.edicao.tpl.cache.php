<?php /* Smarty version Smarty-3.1.19, created on 2016-01-17 15:24:56
         compiled from "C:\wamp\www\estoque\app\views\templates\edicao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15131569bce68b21060-51066397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '385b2ce6d7efc4c847d1ea2c46abd87fc2b3f6d6' => 
    array (
      0 => 'C:\\wamp\\www\\estoque\\app\\views\\templates\\edicao.tpl',
      1 => 1452915836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15131569bce68b21060-51066397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'controller' => 0,
    'produto' => 0,
    'arrColunas' => 0,
    'coluna' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_569bce68c3b587_41441198',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569bce68c3b587_41441198')) {function content_569bce68c3b587_41441198($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<div class="container">
    <form action="/<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/salvar/id/<?php echo $_smarty_tpl->tpl_vars['produto']->value['id'];?>
" method="POST">
        <?php  $_smarty_tpl->tpl_vars['coluna'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['coluna']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arrColunas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['coluna']->key => $_smarty_tpl->tpl_vars['coluna']->value) {
$_smarty_tpl->tpl_vars['coluna']->_loop = true;
?>
            <p><div class="coluna-editar"><?php echo $_smarty_tpl->tpl_vars['coluna']->value;?>
:</div> <input <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['coluna']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='id') {?>readonly<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['coluna']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value[$_smarty_tpl->tpl_vars['coluna']->value];?>
"></p>
        <?php } ?>
        <button type="submit" value="Salvar">Salvar</button>
    </form>
</div>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
<?php }} ?>
