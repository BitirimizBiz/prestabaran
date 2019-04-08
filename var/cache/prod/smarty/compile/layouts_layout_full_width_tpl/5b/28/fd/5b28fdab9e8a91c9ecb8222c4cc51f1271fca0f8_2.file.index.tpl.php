<?php
/* Smarty version 3.1.33, created on 2019-04-08 20:15:22
  from '/home/bitirimiz/BARANPRESTA/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab81aad41204_07264076',
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
function content_5cab81aad41204_07264076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4206989605cab81aad3d263_98955117', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_7659186315cab81aad3dc41_85156281 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_20849249895cab81aad3f1a3_33538878 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_20749138225cab81aad3e931_76191248 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20849249895cab81aad3f1a3_33538878', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4206989605cab81aad3d263_98955117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_4206989605cab81aad3d263_98955117',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_7659186315cab81aad3dc41_85156281',
  ),
  'page_content' => 
  array (
    0 => 'Block_20749138225cab81aad3e931_76191248',
  ),
  'hook_home' => 
  array (
    0 => 'Block_20849249895cab81aad3f1a3_33538878',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7659186315cab81aad3dc41_85156281', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20749138225cab81aad3e931_76191248', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
