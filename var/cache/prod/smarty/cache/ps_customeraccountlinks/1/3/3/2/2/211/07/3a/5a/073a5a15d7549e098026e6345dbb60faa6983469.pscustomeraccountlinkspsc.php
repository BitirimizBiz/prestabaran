<?php
/* Smarty version 3.1.33, created on 2019-04-06 17:50:07
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca8bc9f672093_78710751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1549993772,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5ca8bc9f672093_78710751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="https://presta.bitirimiz.biz/index.php?controller=my-account" rel="nofollow">
      Hesabınız
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Hesabınız</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="https://presta.bitirimiz.biz/index.php?controller=identity" title="Kişisel bilgi" rel="nofollow">
            Kişisel bilgi
          </a>
        </li>
            <li>
          <a href="https://presta.bitirimiz.biz/index.php?controller=history" title="Siparişler" rel="nofollow">
            Siparişler
          </a>
        </li>
            <li>
          <a href="https://presta.bitirimiz.biz/index.php?controller=order-slip" title="Kredi fişleri" rel="nofollow">
            Kredi fişleri
          </a>
        </li>
            <li>
          <a href="https://presta.bitirimiz.biz/index.php?controller=addresses" title="Adresler" rel="nofollow">
            Adresler
          </a>
        </li>
        
	</ul>
</div>
<?php }
}
