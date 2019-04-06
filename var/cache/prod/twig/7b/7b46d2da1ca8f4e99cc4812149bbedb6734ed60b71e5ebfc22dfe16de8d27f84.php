<?php

/* __string_template__13005b3ccf0f9270e51b74172aa19d98688f0628a6acde741e6954227005bd6e */
class __TwigTemplate_52cfbacb8d36c53675def8027af8fba1e1f7b0d0fe3a98f68f101b57ee7e34ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"tr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>E-posta • Ekinci Makina</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminEmails';
    var iso_user = 'tr';
    var lang_is_rtl = '0';
    var full_language_code = 'tr-tr';
    var full_cldr_language_code = 'tr-TR';
    var country_iso_code = 'TR';
    var _PS_VERSION_ = '1.7.5.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Mağazanıza yeni bir sipariş geldi.';
    var order_number_msg = 'Sipariş numarası: ';
    var total_msg = 'Toplam: ';
    var from_msg = 'Başlangıç: ';
    var see_order_msg = 'Bu siparişi görüntüle';
    var new_customer_msg = 'Mağazanıza yeni bir müşteri kayıt oldu.';
    var customer_name_msg = 'Müşteri adı: ';
    var new_msg = 'Mağazanızda yeni bir mesaj gönderildi.';
    var see_msg = 'Bu mesajı oku';
    var token = '3e68508589bf4ea4c0cf5e15c9d96527';
    var token_admin_orders = 'c782a2f22759a2ba8db10d4c15138288';
    var token_admin_customers = 'a3ec980ff666e006282388a3d428c4a3';
    var token_admin_customer_threads = 'ad72e332a21446f90a8d6e3e43aa6852';
    var currentIndex = 'index.php?controller=AdminEmails';
    var employee_token = 'ebc5b07c181ed88adaeafa65cbd86f2b';
    var choose_language_translate = 'Dil seçin';
    var default_language = '2';
    var admin_modules_link = '/kpnl/index.php/improve/modules/catalog/recommended?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU';
    var tab_modules_list = 'sendinblue,digitaleo,triggmine,newsletter,mynewsletter,mailchimp,mailchimpintegration,salesmanago,etranslation,bablic,smartsupp,onehopsmsservice,ps_emailalerts';
    var update_success_msg = 'Güncelleme başarılı';
    var errorLogin = 'PrestaShop Eklentileri bölümüne  giriş sağlanamadı. Kimlik bilgilerinizi ve internet bağlantınızı kontrol edin.';
    var search_product_msg = 'Ürün ara';
  </script>

      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kpnl/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/leoblog/views/css/admin/blogmenu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/appagebuilder/views/css/admin/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kpnl/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/kpnl\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"TRY\",\"sign\":\"\\u20ba\",\"name\":\"T\\u00fcrk Liras\\u0131\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/modules/appagebuilder/views/js/admin/setting.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_googleanalytics/views/js/GoogleAnalyticActionLib.js\"></script>
<script type=\"text/javascript\" src=\"/kpnl/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.5.1\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.5.1\"></script>
<script type=\"text/javascript\" src=\"/kpnl/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/kpnl/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminGamification&token=8393ab0d8e4115e5081b40aa99036286';
\t\t\t\tvar current_id_tab = 105;
\t\t\t</script>
<script type=\"text/javascript\">
\t(window.gaDevIds=window.gaDevIds||[]).push('d6YPbH');
\t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-114199372-1', 'auto');
                    ga('set', 'anonymizeIp', true);
                ga('set', 'nonInteraction', true);
    
    ga('require', 'ec');
</script>



";
        // line 101
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-tr adminemails\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminDashboard&amp;token=62b8e8da3174aaffafe7e0d0bba898f0\"></a>
    <span id=\"shop_version\">1.7.5.1</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Hızlı Erişim
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=f0d822f2245001e740655da36cbb9704\"
                 data-item=\"Katalog gelişimi\"
      >Katalog gelişimi</a>
          <a class=\"dropdown-item\"
         href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminOrders&amp;token=c782a2f22759a2ba8db10d4c15138288\"
                 data-item=\"Siparişler\"
      >Siparişler</a>
          <a class=\"dropdown-item\"
         href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminCategories&amp;addcategory&amp;token=74cda131c96cbc6e3723fbc8a3a97e99\"
                 data-item=\"Yeni kategori\"
      >Yeni kategori</a>
          <a class=\"dropdown-item\"
         href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2f41a777505a30c3ae06c5af0996f163\"
                 data-item=\"Yeni kupon\"
      >Yeni kupon</a>
          <a class=\"dropdown-item\"
         href=\"https://presta.bitirimiz.biz/kpnl/index.php/sell/catalog/products/new?token=4119ab70bb7ef6cc127bb821395371c2\"
                 data-item=\"Yeni ürün\"
      >Yeni ürün</a>
          <a class=\"dropdown-item\"
         href=\"https://presta.bitirimiz.biz/kpnl/index.php/improve/modules/manage?token=4119ab70bb7ef6cc127bb821395371c2\"
                 data-item=\"Yüklü modüller\"
      >Yüklü modüller</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"112\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/emails\"
        data-post-link=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminQuickAccesses&token=7aa1d0677a12a94944d63f35c91f51ac\"
        data-prompt-text=\"Lütfen bu kısayolu adlandırın:\"
        data-link=\"E-posta - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Geçerli sayfayı Hızlı Erişime ekle
      </a>
        <a class=\"dropdown-item\" href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminQuickAccesses&token=7aa1d0677a12a94944d63f35c91f51ac\">
      <i class=\"material-icons\">settings</i>
      Hızlı erişimleri yönetin
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/kpnl/index.php?controller=AdminSearch&amp;token=5aed385c0f728986fccae092ea8f70d1\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Ara (ör. ürün referansı, müşteri adı...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Her yerde
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Her yerde\" href=\"#\" data-value=\"0\" data-placeholder=\"Ne arıyorsunuz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Her yerde</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Ürün adı, Stok kodu, referans...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Müşteriler ada göre\" href=\"#\" data-value=\"2\" data-placeholder=\"E-posta, ad...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Müşteriler ada göre</a>
        <a class=\"dropdown-item\" data-item=\"Müşteriler ip adrese göre\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Müşteriler IP Adresine göre</a>
        <a class=\"dropdown-item\" data-item=\"Siparişler\" href=\"#\" data-value=\"3\" data-placeholder=\"Sipariş Kimliği\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Siparişler</a>
        <a class=\"dropdown-item\" data-item=\"Faturalar\" href=\"#\" data-value=\"4\" data-placeholder=\"Fatura Numarası\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faturalar</a>
        <a class=\"dropdown-item\" data-item=\"Sepetler\" href=\"#\" data-value=\"5\" data-placeholder=\"Sepet Kimliği\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Sepetler</a>
        <a class=\"dropdown-item\" data-item=\"Modüller\" href=\"#\" data-value=\"7\" data-placeholder=\"Modül ismi\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modüller</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">ARAMA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://presta.bitirimiz.bi/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Mağazamı görüntüle
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Siparişler<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Müşteriler<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mesajlar<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Şimdilik yeni sipariş yok :(<br>
              Geri dönüşüm oranlarını geç mi kontrol ettiniz?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Şimdilik yeni müşteri yok :(<br>
              Son zamanlarda sosyal medyada aktif misiniz?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Şimdilik yeni mesaj yok.<br>
              Haber olmaması iyi haberdi, değil mi?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      başlangıç <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - kayıtlı <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/dupi%40live.com.jpg\" />
      <span>Baran Ekinci</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminEmployees&amp;id_employee=1&amp;updateemployee=1&amp;token=ebc5b07c181ed88adaeafa65cbd86f2b\">
      <i class=\"material-icons\">settings_applications</i>
      Profiliniz
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminLogin&amp;logout=1&amp;token=9c07e5db3acc2f246e42279b29d780fb\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Çıkış</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminDashboard&amp;token=62b8e8da3174aaffafe7e0d0bba898f0\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Gösterge Paneli</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Satış</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminOrders&amp;token=c782a2f22759a2ba8db10d4c15138288\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Siparişler
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminOrders&amp;token=c782a2f22759a2ba8db10d4c15138288\" class=\"link\"> Siparişler
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/kpnl/index.php/sell/orders/invoices/?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Faturalar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminSlip&amp;token=2aaafe8a7421a854f300d77116b64a94\" class=\"link\"> Kredi Fişleri
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/kpnl/index.php/sell/orders/delivery-slips/?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Teslimat Fişleri
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminCarts&amp;token=8dd8ed41588034f521f294f845c901be\" class=\"link\"> Alışveriş Sepetleri
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/kpnl/index.php/sell/catalog/products?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Katalog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/kpnl/index.php/sell/catalog/products?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Ürünler
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminCategories&amp;token=74cda131c96cbc6e3723fbc8a3a97e99\" class=\"link\"> Kategoriler
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminTracking&amp;token=b1249a6dccf424f20a1c015322e8285b\" class=\"link\"> Ürün Takibi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminAttributesGroups&amp;token=0bdbb15583b6d113e72aba9b8bf39edd\" class=\"link\"> Nitelikler ve Özellikler
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminManufacturers&amp;token=5c7cb4d8fab07fb1142b15a950f54c42\" class=\"link\"> Markalar ve Tedarikçiler
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminAttachments&amp;token=f5bb841a8f589abae5b5dee53fedb637\" class=\"link\"> Dosyalar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminCartRules&amp;token=2f41a777505a30c3ae06c5af0996f163\" class=\"link\"> İndirimler
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/kpnl/index.php/sell/stocks/?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminCustomers&amp;token=a3ec980ff666e006282388a3d428c4a3\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Müşteriler
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminCustomers&amp;token=a3ec980ff666e006282388a3d428c4a3\" class=\"link\"> Müşteriler
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminAddresses&amp;token=dd15047361ba1b3583674c54b3bd5e2e\" class=\"link\"> Adresler
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminCustomerThreads&amp;token=ad72e332a21446f90a8d6e3e43aa6852\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Müşteri Hizmetleri
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminCustomerThreads&amp;token=ad72e332a21446f90a8d6e3e43aa6852\" class=\"link\"> Müşteri Hizmetleri
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminOrderMessage&amp;token=9ee6243073d58314bfdf3eebdb6ddd03\" class=\"link\"> Sipariş Mesajları
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminReturn&amp;token=a8a8fb0c9fc16ac20e94fd717a1676d5\" class=\"link\"> İade Ürünler
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminStats&amp;token=f0d822f2245001e740655da36cbb9704\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    İstatistikler
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Geliştir</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminPsMboModule&amp;token=15c797cdb0ddf06b96f204b38291306a\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modüller
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminPsMboModule&amp;token=15c797cdb0ddf06b96f204b38291306a\" class=\"link\"> Module Catalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/kpnl/index.php/improve/modules/manage?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"158\" id=\"subtab-AdminNetgsm\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminNetgsm&amp;token=bcddf9bf83501c5b54f34f4648480259\" class=\"link\"> Netgsm Sms
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"178\" id=\"subtab-AdminLeoBootstrapMenuModule\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminLeoBootstrapMenuModule&amp;token=c137a202c6d51015a118d1ab6155ac4d\" class=\"link\"> Leo Megamenu Configuration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"181\" id=\"subtab-AdminLeoSlideshowMenuModule\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminLeoSlideshowMenuModule&amp;token=0606f19bad3ab81962eea4a4ba4ff6e2\" class=\"link\"> Leo Slideshow Configuration
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminThemes&amp;token=0690896dceb61c8518383f4f4a932d2d\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Tasarım
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"123\" id=\"subtab-AdminThemesParent\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminThemes&amp;token=0690896dceb61c8518383f4f4a932d2d\" class=\"link\"> Tema ve Logo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminPsMboTheme&amp;token=802f10417f3968e3e54fa84d3929106d\" class=\"link\"> Tema Kataloğu
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminCmsContent\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminCmsContent&amp;token=23bdb2d5204afe9ffe6ef6e451d3c889\" class=\"link\"> Sayfalar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/kpnl/index.php/improve/design/modules/positions/?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Pozisyonlar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminImages\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminImages&amp;token=ef1bdd40919c3d69db873ec30dbe45c9\" class=\"link\"> Resim Ayarları
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminLinkWidget&amp;token=abe3f6fca9371370da2edf8335cd042d\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"58\" id=\"subtab-AdminParentShipping\">
                  <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminCarriers&amp;token=ba575edd68c08cf9c37cdf4cd933b85d\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Kargolama
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-58\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminCarriers\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminCarriers&amp;token=ba575edd68c08cf9c37cdf4cd933b85d\" class=\"link\"> Kargo Firmaları
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminShipping\">
                              <a href=\"/kpnl/index.php/improve/shipping/preferences?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Tercihler
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"61\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/kpnl/index.php/improve/payment/payment_methods?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Ödeme
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-61\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminPayment\">
                              <a href=\"/kpnl/index.php/improve/payment/payment_methods?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Ödeme Yöntemleri
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/kpnl/index.php/improve/payment/preferences?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Tercihler
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"64\" id=\"subtab-AdminInternational\">
                  <a href=\"/kpnl/index.php/improve/international/localization/?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Uluslararası
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-64\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/kpnl/index.php/improve/international/localization/?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Yerelleştirme
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"70\" id=\"subtab-AdminParentCountries\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminZones&amp;token=39deccb4f0faef6e840767d3db6b0838\" class=\"link\"> Konumlar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminTaxes&amp;token=3d6c13edce7152eec90a19a25c09191f\" class=\"link\"> Vergiler
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\" id=\"subtab-AdminTranslations\">
                              <a href=\"/kpnl/index.php/improve/international/translations/settings?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Çeviriler
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"159\" id=\"subtab-AdminApPageBuilder\">
                  <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminApPageBuilderProfiles&amp;token=5d4c12c09a1166a66ef0b17af4a615ab\" class=\"link\">
                    <i class=\"material-icons mi-tab\">tab</i>
                    <span>
                    Ap PageBuilder
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-159\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"160\" id=\"subtab-AdminApPageBuilderProfiles\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminApPageBuilderProfiles&amp;token=5d4c12c09a1166a66ef0b17af4a615ab\" class=\"link\"> Ap Profiles Manage
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"161\" id=\"subtab-AdminApPageBuilderPositions\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminApPageBuilderPositions&amp;token=cb5cd350454765640d0dcc4bc94c1d02\" class=\"link\"> Ap Positions Manage
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"162\" id=\"subtab-AdminApPageBuilderShortcode\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminApPageBuilderShortcode&amp;token=65e29b9a1741fb4c57cac7dcda3cbf43\" class=\"link\"> Ap ShortCode Manage
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"164\" id=\"subtab-AdminApPageBuilderProducts\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminApPageBuilderProducts&amp;token=c4f0bb2964939b92831beb383da0624a\" class=\"link\"> Ap Products List Builder
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"165\" id=\"subtab-AdminApPageBuilderDetails\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminApPageBuilderDetails&amp;token=7722f1bafd3650d7a138cc0ef6541feb\" class=\"link\"> Ap Products Details Builder
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"167\" id=\"subtab-AdminApPageBuilderThemeEditor\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminApPageBuilderThemeEditor&amp;token=42b17baecb1cc3cf455202575f2c68c2\" class=\"link\"> Ap Live Theme Editor
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"168\" id=\"subtab-AdminApPageBuilderModule\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminApPageBuilderModule&amp;token=7713fdeb9e704126a7efe56f955262fd\" class=\"link\"> Ap Module Configuration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"169\" id=\"subtab-AdminApPageBuilderThemeConfiguration\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminApPageBuilderThemeConfiguration&amp;token=f2a5d12dd25cfefd62731aa0656d3b01\" class=\"link\"> Ap Theme Configuration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"185\" id=\"subtab-AdminApPageBuilderHook\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminApPageBuilderHook&amp;token=784457169fbfe1a90e921224e34b63c5\" class=\"link\"> Ap Hook Control Panel
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"172\" id=\"subtab-AdminLeoblogManagement\">
                  <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminLeoblogDashboard&amp;token=808e93676760717e7b01f8aa2555abba\" class=\"link\">
                    <i class=\"material-icons mi-create\">create</i>
                    <span>
                    Leo Blog Management
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-172\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"173\" id=\"subtab-AdminLeoblogDashboard\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminLeoblogDashboard&amp;token=808e93676760717e7b01f8aa2555abba\" class=\"link\"> Blog Dashboard
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"174\" id=\"subtab-AdminLeoblogCategories\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminLeoblogCategories&amp;token=1719183276e3c2a5ee09f7e27c8b43cc\" class=\"link\"> Categories Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"175\" id=\"subtab-AdminLeoblogBlogs\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminLeoblogBlogs&amp;token=121d79b26c8c5de481d39232d57351ef\" class=\"link\"> Blogs Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"176\" id=\"subtab-AdminLeoblogComments\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminLeoblogComments&amp;token=6f65d1fe53994f2399f8ebc8001d4b56\" class=\"link\"> Comment Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"177\" id=\"subtab-AdminLeoblogModule\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminLeoblogModule&amp;token=de44ce189a4f78da7221dce5a08e7ef8\" class=\"link\"> Leo Blog Configuration
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"182\" id=\"subtab-AdminLeofeatureManagement\">
                  <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminLeofeatureModule&amp;token=35dc6adec5206c40418280d0c8a0a2b4\" class=\"link\">
                    <i class=\"material-icons mi-star\">star</i>
                    <span>
                    Leo Feature Management
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-182\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"183\" id=\"subtab-AdminLeofeatureModule\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminLeofeatureModule&amp;token=35dc6adec5206c40418280d0c8a0a2b4\" class=\"link\"> Leo Feature Configuration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"184\" id=\"subtab-AdminLeofeatureReviews\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminLeofeatureReviews&amp;token=34b9bad54200d13b355504b8cf5cbc44\" class=\"link\"> Product Review Management
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"78\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Yapılandır</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"79\" id=\"subtab-ShopParameters\">
                  <a href=\"/kpnl/index.php/configure/shop/preferences/preferences?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Mağaza Parametreleri
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-79\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/kpnl/index.php/configure/shop/preferences/preferences?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Genel
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"83\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/kpnl/index.php/configure/shop/order-preferences/?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Sipariş Ayarları
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/kpnl/index.php/configure/shop/product-preferences/?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Ürün Ayarları
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"87\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/kpnl/index.php/configure/shop/customer-preferences/?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Müşteri Ayarları
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"91\" id=\"subtab-AdminParentStores\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminContacts&amp;token=e5bed5c78344a17bafe5b1554e0659c0\" class=\"link\"> İletişim
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"94\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/kpnl/index.php/configure/shop/seo-urls/?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Trafik ve SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminSearchConf&amp;token=aa6263bc56b8bf5bebeb98d92aa02fbd\" class=\"link\"> Ara
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\" id=\"subtab-AdminGamification\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminGamification&amp;token=8393ab0d8e4115e5081b40aa99036286\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"101\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/kpnl/index.php/configure/advanced/system-information/?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Gelişmiş Parametreler
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-101\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminInformation\">
                              <a href=\"/kpnl/index.php/configure/advanced/system-information/?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Bilgi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminPerformance\">
                              <a href=\"/kpnl/index.php/configure/advanced/performance/?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Performans
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/kpnl/index.php/configure/advanced/administration/?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Yönetim
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"105\" id=\"subtab-AdminEmails\">
                              <a href=\"/kpnl/index.php/configure/advanced/emails/?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> E-posta
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminImport\">
                              <a href=\"/kpnl/index.php/configure/advanced/import/?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> İçe aktar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminEmployees&amp;token=ebc5b07c181ed88adaeafa65cbd86f2b\" class=\"link\"> Takım
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"111\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminRequestSql&amp;token=7cf2831875b0b78fee4816aa9ca94fe7\" class=\"link\"> Veri Tabanı
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"114\" id=\"subtab-AdminLogs\">
                              <a href=\"/kpnl/index.php/configure/advanced/logs/?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" class=\"link\"> Kayıt Kütükleri
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"115\" id=\"subtab-AdminWebservice\">
                              <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminWebservice&amp;token=4619001e25374e5777bad1a78de55285\" class=\"link\"> Web Servisi
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Gelişmiş Parametreler</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/kpnl/index.php/configure/advanced/emails/?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\" aria-current=\"page\">E-posta</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            E-posta          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminPsMboModule&token=15c797cdb0ddf06b96f204b38291306a';
    var controller = 'AdminEmails';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                                              <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/kpnl/index.php/improve/modules/catalog?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\"                title=\"Önerilen Modüller\"
                              >
                Önerilen Modüller
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Yardım\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/kpnl/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ftr%252Fdoc%252FAdminEmails%253Fversion%253D1.7.5.1%2526country%253Dtr/Yard%C4%B1m?_token=qtMtrL2Rq4i1K1xlPsUUnvss9f_L_qHQ0xQI1XRrrcU\"
                   id=\"product_form_open_help\"
                >
                  Yardım
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
    
    <div class=\"content-div  \">

      

      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1336
        $this->displayBlock('content_header', $context, $blocks);
        // line 1337
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1338
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1339
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1340
        echo "
           
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Önerilen Modüller ve Hizmetler</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Hayır!</h1>
  <p class=\"mt-3\">
    Bu sayfanın mobil sürümü henüz hazır değil.
  </p>
  <p class=\"mt-2\">
    Bu sayfa mobil sürüme uyarlanana kadar lütfen bir masaüstü bilgisayar ile bağlanın.
  </p>
  <p class=\"mt-2\">
    Teşekkürler.
  </p>
  <a href=\"https://presta.bitirimiz.biz/kpnl/index.php?controller=AdminDashboard&amp;token=62b8e8da3174aaffafe7e0d0bba898f0\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Geri
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-TR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/tr/login?email=dupi%40live.com&amp;firstname=Baran&amp;lastname=Ekinci&amp;website=http%3A%2F%2Fpresta.bitirimiz.bi%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-TR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/kpnl/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Satın aldığınız tüm eklentileri otomatik olarak içe aktarmak için mağazanızı PrestaShop eklenti marketine bağlayın.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Hesabınız mı yok?</h4>
\t\t\t\t\t\t<p class='text-justify'>PrestaShop Eklentilerinin Gücünü Keşfedin! PrestaShop Resmi Eklenti Marketini keşfedin ve dönüşüm oranlarını en uygun hale getiren, trafiğinizi arttıran, müşteri sadakati oluşturmanızı sağlayan ve verimliliği en üst düzeye çıkaran 3500'den fazla yenilikçi modül ve tema içinde arama yapın</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>PrestaShop Eklentilerine Bağlan</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/tr/forgot-your-password\">Parolamı unuttum</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/tr/login?email=dupi%40live.com&amp;firstname=Baran&amp;lastname=Ekinci&amp;website=http%3A%2F%2Fpresta.bitirimiz.bi%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-TR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tBir Hesap Oluştur
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Oturum Aç
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1463
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 101
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1336
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1337
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1338
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1339
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1463
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__13005b3ccf0f9270e51b74172aa19d98688f0628a6acde741e6954227005bd6e";
    }

    public function getDebugInfo()
    {
        return array (  1542 => 1463,  1537 => 1339,  1532 => 1338,  1527 => 1337,  1522 => 1336,  1513 => 101,  1505 => 1463,  1380 => 1340,  1377 => 1339,  1374 => 1338,  1371 => 1337,  1369 => 1336,  130 => 101,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__13005b3ccf0f9270e51b74172aa19d98688f0628a6acde741e6954227005bd6e", "");
    }
}
