<?php
/* Smarty version 3.1.33, created on 2019-04-08 18:11:57
  from '/home/bitirimiz/BARANPRESTA/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_after_price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab64bdf0ae12_11519763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03269448e07252193e67cbdd7961764d5aecaab2' => 
    array (
      0 => '/home/bitirimiz/BARANPRESTA/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_after_price.tpl',
      1 => 1537374272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cab64bdf0ae12_11519763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '14908233485cab64bdf03732_25255326';
?>

<?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value)) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value['after_price']) && isset($_smarty_tpl->tpl_vars['smartyVars']->value['after_price']['delivery_str_i18n'])) {?>
        <span class="aeuc_delivery_label">
            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartyVars']->value['after_price']['delivery_str_i18n'],'htmlall' )), ENT_QUOTES, 'UTF-8');?>

        </span>
    <?php }
}
}
}
