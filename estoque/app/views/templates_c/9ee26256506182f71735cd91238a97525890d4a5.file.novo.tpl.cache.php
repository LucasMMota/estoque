<?php /* Smarty version Smarty-3.1.19, created on 2016-01-17 15:25:13
         compiled from "C:\wamp\www\estoque\app\views\templates\clientes\novo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18125569bce79348494-69236724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ee26256506182f71735cd91238a97525890d4a5' => 
    array (
      0 => 'C:\\wamp\\www\\estoque\\app\\views\\templates\\clientes\\novo.tpl',
      1 => 1452915836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18125569bce79348494-69236724',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'controller' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_569bce7939e141_41378735',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569bce7939e141_41378735')) {function content_569bce7939e141_41378735($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<div class="container">
    <form action="/<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/salvar/" method="POST">
        <p>
        <div class="coluna-editar">Nome:</div>
        <input name="nome">
        </p>

        <p>
        <div class="coluna-editar">email:</div>
        <input name="email">
        </p>

        <p>
        <div class="coluna-editar">telefone:</div>
        <input name="telefone">
        </p>

        <button type="submit" value="Salvar">Salvar</button>
    </form>
</div>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
<?php }} ?>
