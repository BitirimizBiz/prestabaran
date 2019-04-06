<?php
/* Smarty version 3.1.33, created on 2019-04-06 17:50:06
  from '/home/bitirimiz/BARANPRESTA/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca8bc9e8218c0_05551551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7254ff28ee55ce994d6a5e8438b0197bbcc51545' => 
    array (
      0 => '/home/bitirimiz/BARANPRESTA/themes/classic/templates/page.tpl',
      1 => 1549993772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca8bc9e8218c0_05551551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16271225075ca8bc9e819375_58035577', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_9571071545ca8bc9e81a776_09832098 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_1057104705ca8bc9e819ca0_62601610 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9571071545ca8bc9e81a776_09832098', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_2268418965ca8bc9e81db46_72060691 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_311160135ca8bc9e81e726_99210518 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19778948195ca8bc9e81d261_16470465 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2268418965ca8bc9e81db46_72060691', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_311160135ca8bc9e81e726_99210518', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_4452265615ca8bc9e820156_05318775 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_5646429145ca8bc9e81f902_16584440 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4452265615ca8bc9e820156_05318775', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_16271225075ca8bc9e819375_58035577 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16271225075ca8bc9e819375_58035577',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1057104705ca8bc9e819ca0_62601610',
  ),
  'page_title' => 
  array (
    0 => 'Block_9571071545ca8bc9e81a776_09832098',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_19778948195ca8bc9e81d261_16470465',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2268418965ca8bc9e81db46_72060691',
  ),
  'page_content' => 
  array (
    0 => 'Block_311160135ca8bc9e81e726_99210518',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_5646429145ca8bc9e81f902_16584440',
  ),
  'page_footer' => 
  array (
    0 => 'Block_4452265615ca8bc9e820156_05318775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1057104705ca8bc9e819ca0_62601610', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19778948195ca8bc9e81d261_16470465', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5646429145ca8bc9e81f902_16584440', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
