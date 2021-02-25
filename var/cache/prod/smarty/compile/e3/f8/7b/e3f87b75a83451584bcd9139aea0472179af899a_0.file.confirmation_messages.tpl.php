<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-12 17:24:43
  from 'C:\xampp\htdocs\presta-duka\admin493r797ds\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffdb12ba36983_16477315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3f87b75a83451584bcd9139aea0472179af899a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\presta-duka\\admin493r797ds\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1610404448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffdb12ba36983_16477315 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
