<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-12 17:32:05
  from 'C:\xampp\htdocs\presta-duka\themes\classic\templates\catalog\_partials\productlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffdb2e5454371_16115210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c61299aefe91301452c950267fa111620572580b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\presta-duka\\themes\\classic\\templates\\catalog\\_partials\\productlist.tpl',
      1 => 1610404431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5ffdb2e5454371_16115210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19700791345ffdb2e544e3c8_54086593';
?>
<div class="products<?php if (!empty($_smarty_tpl->tpl_vars['cssClass']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cssClass']->value, ENT_QUOTES, 'UTF-8');
}?>" itemscope itemtype="http://schema.org/ItemList">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'position');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product']->value) {
?>
        <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value), 0, true);
?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
