<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-12 17:32:05
  from 'C:\xampp\htdocs\presta-duka\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffdb2e56f8591_03198409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b21c83e4df655cdbe43cf74a8f555e7649744f04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\presta-duka\\themes\\classic\\templates\\index.tpl',
      1 => 1610404431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffdb2e56f8591_03198409 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21436013735ffdb2e56f6727_49283733', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_4143002225ffdb2e56f6cd1_55367869 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_20327676165ffdb2e56f7615_21275122 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_2743488825ffdb2e56f72e4_87236620 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20327676165ffdb2e56f7615_21275122', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_21436013735ffdb2e56f6727_49283733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_21436013735ffdb2e56f6727_49283733',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_4143002225ffdb2e56f6cd1_55367869',
  ),
  'page_content' => 
  array (
    0 => 'Block_2743488825ffdb2e56f72e4_87236620',
  ),
  'hook_home' => 
  array (
    0 => 'Block_20327676165ffdb2e56f7615_21275122',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4143002225ffdb2e56f6cd1_55367869', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2743488825ffdb2e56f72e4_87236620', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
