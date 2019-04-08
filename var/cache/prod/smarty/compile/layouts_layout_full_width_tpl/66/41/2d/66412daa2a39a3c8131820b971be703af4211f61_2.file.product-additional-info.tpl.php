<?php
/* Smarty version 3.1.33, created on 2019-04-08 18:11:58
  from '/home/bitirimiz/BARANPRESTA/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab64be149b41_29715203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66412daa2a39a3c8131820b971be703af4211f61' => 
    array (
      0 => '/home/bitirimiz/BARANPRESTA/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1549993772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cab64be149b41_29715203 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
