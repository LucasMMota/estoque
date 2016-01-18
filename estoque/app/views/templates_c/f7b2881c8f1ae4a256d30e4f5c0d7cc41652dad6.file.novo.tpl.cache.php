<?php /* Smarty version Smarty-3.1.19, created on 2016-01-17 15:24:34
         compiled from "C:\wamp\www\estoque\app\views\templates\produtos\novo.tpl" */ ?>
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
  'unifunc' => 'content_569bce52d41754_20606966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569bce52d41754_20606966')) {function content_569bce52d41754_20606966($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['head']->value;?>

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
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
<?php }} ?>
