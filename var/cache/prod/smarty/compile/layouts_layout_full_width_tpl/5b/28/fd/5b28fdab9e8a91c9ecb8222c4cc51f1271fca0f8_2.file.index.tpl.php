<?php
/* Smarty version 3.1.33, created on 2019-04-06 17:50:06
  from '/home/bitirimiz/BARANPRESTA/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca8bc9e80bb69_26299433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b28fdab9e8a91c9ecb8222c4cc51f1271fca0f8' => 
    array (
      0 => '/home/bitirimiz/BARANPRESTA/themes/classic/templates/index.tpl',
      1 => 1549993772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca8bc9e80bb69_26299433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8411490825ca8bc9e807315_91159080', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_15867294055ca8bc9e807c72_25225926 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_2109240625ca8bc9e809925_47280351 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_5831583565ca8bc9e808b27_91849626 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2109240625ca8bc9e809925_47280351', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8411490825ca8bc9e807315_91159080 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_8411490825ca8bc9e807315_91159080',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_15867294055ca8bc9e807c72_25225926',
  ),
  'page_content' => 
  array (
    0 => 'Block_5831583565ca8bc9e808b27_91849626',
  ),
  'hook_home' => 
  array (
    0 => 'Block_2109240625ca8bc9e809925_47280351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15867294055ca8bc9e807c72_25225926', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5831583565ca8bc9e808b27_91849626', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
