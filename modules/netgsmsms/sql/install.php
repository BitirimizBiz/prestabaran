<?php
/**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

$sql = array();

$sql [] = "CREATE TABLE IF NOT EXISTS `" . _DB_PREFIX_ . "netgsmsms_templates` 
(`id` int(11) NOT NULL AUTO_INCREMENT,`name` varchar(50) CHARACTER SET utf8 NOT NULL,
`name_tr` varchar(50) CHARACTER SET utf8 NOT NULL,
`type` enum('customer','admin') CHARACTER SET utf8 NOT NULL,`admingsm` varchar(255) CHARACTER SET utf8 NOT NULL,
`template` varchar(240) CHARACTER SET utf8 NOT NULL,`title` varchar(16) CHARACTER SET utf8 NOT NULL,
`variables` varchar(500) CHARACTER SET utf8 NOT NULL,`active` tinyint(1) NOT NULL,
`description` text CHARACTER SET utf8,PRIMARY KEY (`id`))  
ENGINE=" . _MYSQL_ENGINE_ . "  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";

/// START POST UPDATE


$sql [] =
    "INSERT INTO `" . _DB_PREFIX_ . "netgsmsms_templates` 
(`id`, `name`, `name_tr`, `type`, `admingsm`, `template`, `title`, `variables`, `active`, `description`) 
VALUES (NULL,
'hookActionOrderStatusPostUpdate1',
'Sipariş Durum Değişikliği1',
'customer',
'',
'Sayın (firstname) (lastname), (reference_id) Referanslı ve (order_id) 
sipariş numaralı siparişinizin durumu (order_status) olarak değiştirilmiştir.',
'',
'" . json_encode(@array('tr' => array('order_id' => 'Sipariş No', 'firstname' => 'İsim',
        'lastname' => 'Soyisim', 'phone' => 'Telefon',
        'reference_id' => 'Referans No', 'order_status' => 'Sipariş Durumu',),
        'en' => array('order_id' => 'Order ID', 'firstname' => 'Firstname', 'lastname' => 'Lastname', 'phone' => 'Phone',
            'reference_id' => 'Reference ID', 'order_status' => 'Order Status',)),
        JSON_UNESCAPED_UNICODE) . "', 
0,
'" . json_encode(@array('tr' => 'Bir Sipariş Durumu `Çek ödemesi bekleniyor` olduğunda Müşteriye Mesaj Gönderir',
        'en' => 'When Order Status changes to `Awaiting check payment`, it send a message to the customer.'),
        JSON_UNESCAPED_UNICODE) . "'
         );";


$sql [] =
    "INSERT INTO `" . _DB_PREFIX_ . "netgsmsms_templates` 
(`id`, `name`, `name_tr`, `type`, `admingsm`, `template`, `title`, `variables`, `active`, `description`) 
VALUES (NULL,
'hookActionOrderStatusPostUpdate2',
'Sipariş Durum Değişikliği2',
'customer',
'',
'Sayın (firstname) (lastname), (reference_id) Referanslı ve (order_id) 
sipariş numaralı siparişinizin durumu (order_status) olarak değiştirilmiştir.',
'',
'" . json_encode(@array('tr' => array('order_id' => 'Sipariş No', 'firstname' => 'İsim',
        'lastname' => 'Soyisim', 'phone' => 'Telefon',
        'reference_id' => 'Referans No', 'order_status' => 'Sipariş Durumu',),
        'en' => array('order_id' => 'Order ID', 'firstname' => 'Firstname', 'lastname' => 'Lastname', 'phone' => 'Phone',
            'reference_id' => 'Reference ID', 'order_status' => 'Order Status',)),
        JSON_UNESCAPED_UNICODE) . "', 0,
'" . json_encode(@array('tr' => 'Bir Sipariş Durumu `Ödeme kabul edildi` olduğunda Müşteriye Mesaj Gönderir',
        'en' => 'When Order Status changes to `Payment accepted`, it send a message to the customer.'),
        JSON_UNESCAPED_UNICODE) . "'
         );";


$sql [] =
    "INSERT INTO `" . _DB_PREFIX_ . "netgsmsms_templates` 
(`id`, `name`, `name_tr`, `type`, `admingsm`, `template`, `title`, `variables`, `active`, `description`) 
VALUES (NULL,
'hookActionOrderStatusPostUpdate3',
'Sipariş Durum Değişikliği3',
'customer',
'',
'Sayın (firstname) (lastname), (reference_id) Referanslı ve (order_id) 
sipariş numaralı siparişinizin durumu (order_status) olarak değiştirilmiştir.',
'',
'" . json_encode(@array('tr' => array('order_id' => 'Sipariş No', 'firstname' => 'İsim',
        'lastname' => 'Soyisim', 'phone' => 'Telefon',
        'reference_id' => 'Referans No', 'order_status' => 'Sipariş Durumu',),
        'en' => array('order_id' => 'Order ID', 'firstname' => 'Firstname', 'lastname' => 'Lastname', 'phone' => 'Phone',
            'reference_id' => 'Reference ID', 'order_status' => 'Order Status',)),
        JSON_UNESCAPED_UNICODE) . "', 0,
'" . json_encode(@array('tr' => 'Bir Sipariş Durumu `İşleme devam ediyor` olduğunda Müşteriye Mesaj Gönderir',
        'en' => 'When Order Status changes to `Processing in progress`, it send a message to the customer.'),
        JSON_UNESCAPED_UNICODE) . "'
         );";


$sql [] =
    "INSERT INTO `" . _DB_PREFIX_ . "netgsmsms_templates` 
(`id`, `name`, `name_tr`, `type`, `admingsm`, `template`, `title`, `variables`, `active`, `description`) 
VALUES (NULL,
'hookActionOrderStatusPostUpdate4',
'Sipariş Durum Değişikliği4',
'customer',
'',
'Sayın (firstname) (lastname), (reference_id) Referanslı ve (order_id) 
sipariş numaralı siparişinizin durumu (order_status) olarak değiştirilmiştir.',
'',
'" . json_encode(@array('tr' => array('order_id' => 'Sipariş No', 'firstname' => 'İsim',
        'lastname' => 'Soyisim', 'phone' => 'Telefon',
        'reference_id' => 'Referans No', 'order_status' => 'Sipariş Durumu','tracking_id'=>'Kargo Numarası'),
        'en' => array('order_id' => 'Order ID', 'firstname' => 'Firstname', 'lastname' => 'Lastname', 'phone' => 'Phone',
            'reference_id' => 'Reference ID', 'order_status' => 'Order Status','tracking_id'=>'Shipping Number')),
        JSON_UNESCAPED_UNICODE) . "', 0,
'" . json_encode(@array('tr' => 'Bir Sipariş Durumu `Kargolandı` olduğunda Müşteriye Mesaj Gönderir',
        'en' => 'When Order Status changes to `Shipped`, it send a message to the customer.'),
        JSON_UNESCAPED_UNICODE) . "'
        );";


$sql [] =
    "INSERT INTO `" . _DB_PREFIX_ . "netgsmsms_templates` 
(`id`, `name`, `name_tr`, `type`, `admingsm`, `template`, `title`, `variables`, `active`, `description`) 
VALUES (NULL,
'hookActionOrderStatusPostUpdate5',
'Sipariş Durum Değişikliği5',
'customer',
'',
'Sayın (firstname) (lastname), (reference_id) Referanslı ve (order_id)
 sipariş numaralı siparişinizin durumu (order_status) olarak değiştirilmiştir.',
'',
'" . json_encode(@array('tr' => array('order_id' => 'Sipariş No', 'firstname' => 'İsim',
        'lastname' => 'Soyisim', 'phone' => 'Telefon',
        'reference_id' => 'Referans No', 'order_status' => 'Sipariş Durumu',),
        'en' => array('order_id' => 'Order ID', 'firstname' => 'Firstname', 'lastname' => 'Lastname', 'phone' => 'Phone',
            'reference_id' => 'Reference ID', 'order_status' => 'Order Status',)),
        JSON_UNESCAPED_UNICODE) . "', 0,
'" . json_encode(@array('tr' => 'Bir Sipariş Durumu `Teslim edildi` olduğunda Müşteriye Mesaj Gönderir',
        'en' => 'When Order Status changes to `Delivered`, it send a message to the customer.'),
        JSON_UNESCAPED_UNICODE) . "'
        );";


$sql [] =
    "INSERT INTO `" . _DB_PREFIX_ . "netgsmsms_templates` 
(`id`, `name`, `name_tr`, `type`, `admingsm`, `template`, `title`, `variables`, `active`, `description`) 
VALUES (NULL,
'hookActionOrderStatusPostUpdate6',
'Sipariş Durum Değişikliği6',
'customer',
'',
'Sayın (firstname) (lastname), (reference_id) Referanslı ve (order_id)
 sipariş numaralı siparişinizin durumu (order_status) olarak değiştirilmiştir.',
'',
'" . json_encode(@array('tr' => array('order_id' => 'Sipariş No', 'firstname' => 'İsim',
        'lastname' => 'Soyisim', 'phone' => 'Telefon',
        'reference_id' => 'Referans No', 'order_status' => 'Sipariş Durumu',),
        'en' => array('order_id' => 'Order ID', 'firstname' => 'Firstname', 'lastname' => 'Lastname', 'phone' => 'Phone',
            'reference_id' => 'Reference ID', 'order_status' => 'Order Status',)),
        JSON_UNESCAPED_UNICODE) . "', 0,
'" . json_encode(@array('tr' => 'Bir Sipariş Durumu `İptal Edildi` olduğunda Müşteriye Mesaj Gönderir',
        'en' => 'When Order Status changes to `Canceled`, it send a message to the customer.'),
        JSON_UNESCAPED_UNICODE) . "'
        );";


$sql [] =
    "INSERT INTO `" . _DB_PREFIX_ . "netgsmsms_templates` 
(`id`, `name`, `name_tr`, `type`, `admingsm`, `template`, `title`, `variables`, `active`, `description`) 
VALUES (NULL,
'hookActionOrderStatusPostUpdate7',
'Sipariş Durum Değişikliği7',
'customer',
'',
'Sayın (firstname) (lastname), (reference_id) Referanslı ve (order_id) 
sipariş numaralı siparişinizin durumu (order_status) olarak değiştirilmiştir.',
'',
'" . json_encode(@array('tr' => array('order_id' => 'Sipariş No', 'firstname' => 'İsim',
        'lastname' => 'Soyisim', 'phone' => 'Telefon',
        'reference_id' => 'Referans No', 'order_status' => 'Sipariş Durumu',),
        'en' => array('order_id' => 'Order ID', 'firstname' => 'Firstname', 'lastname' => 'Lastname', 'phone' => 'Phone',
            'reference_id' => 'Reference ID', 'order_status' => 'Order Status',)),
        JSON_UNESCAPED_UNICODE) . "', 0,
'" . json_encode(@array('tr' => 'Bir Sipariş Durumu `Ücret İade Edildi` olduğunda Müşteriye Mesaj Gönderir',
        'en' => 'When Order Status changes to `Refunded`, it send a message to the customer.'),
        JSON_UNESCAPED_UNICODE) . "'
        );";


$sql [] =
    "INSERT INTO `" . _DB_PREFIX_ . "netgsmsms_templates` 
(`id`, `name`, `name_tr`, `type`, `admingsm`, `template`, `title`, `variables`, `active`, `description`) 
VALUES (NULL,
'hookActionOrderStatusPostUpdate8',
'Sipariş Durum Değişikliği8',
'customer',
'',
'Sayın (firstname) (lastname), (reference_id) Referanslı ve (order_id) 
sipariş numaralı siparişinizin durumu (order_status) olarak değiştirilmiştir.',
'',
'" . json_encode(@array('tr' => array('order_id' => 'Sipariş No', 'firstname' => 'İsim',
        'lastname' => 'Soyisim', 'phone' => 'Telefon',
        'reference_id' => 'Referans No', 'order_status' => 'Sipariş Durumu',),
        'en' => array('order_id' => 'Order ID', 'firstname' => 'Firstname', 'lastname' => 'Lastname', 'phone' => 'Phone',
            'reference_id' => 'Reference ID', 'order_status' => 'Order Status',)),
        JSON_UNESCAPED_UNICODE) . "', 0,
'" . json_encode(@array('tr' => 'Bir Sipariş Durumu `Ödeme hatası` olduğunda Müşteriye Mesaj Gönderir',
        'en' => 'When Order Status changes to `Payment error`, it send a message to the customer.'),
        JSON_UNESCAPED_UNICODE) . "'
        );";


$sql [] =
    "INSERT INTO `" . _DB_PREFIX_ . "netgsmsms_templates` 
(`id`, `name`, `name_tr`, `type`, `admingsm`, `template`, `title`, `variables`, `active`, `description`) 
VALUES (NULL,
'hookActionOrderStatusPostUpdate9',
'Sipariş Durum Değişikliği9',
'customer',
'',
'Sayın (firstname) (lastname), (reference_id) Referanslı ve (order_id) 
sipariş numaralı siparişinizin durumu (order_status) olarak değiştirilmiştir.',
'',
'" . json_encode(@array('tr' => array('order_id' => 'Sipariş No', 'firstname' => 'İsim',
        'lastname' => 'Soyisim', 'phone' => 'Telefon',
        'reference_id' => 'Referans No', 'order_status' => 'Sipariş Durumu',),
        'en' => array('order_id' => 'Order ID', 'firstname' => 'Firstname', 'lastname' => 'Lastname', 'phone' => 'Phone',
            'reference_id' => 'Reference ID', 'order_status' => 'Order Status',)),
        JSON_UNESCAPED_UNICODE) . "', 0,
'" . json_encode(@array('tr' => 'Bir Sipariş Durumu `Ön sipariş durumunda (ödenmiş)` olduğunda Müşteriye Mesaj Gönderir',
        'en' => 'When Order Status changes to `On backorder (paid)`, it send a message to the customer.'),
        JSON_UNESCAPED_UNICODE) . "'
        );";


$sql [] =
    "INSERT INTO `" . _DB_PREFIX_ . "netgsmsms_templates` 
(`id`, `name`, `name_tr`, `type`, `admingsm`, `template`, `title`,`variables`, `active`, `description`) 
VALUES (NULL,
'hookActionOrderStatusPostUpdate10',
'Sipariş Durum Değişikliği10',
'customer',
'',
'Sayın (firstname) (lastname), (reference_id) Referanslı ve (order_id) 
sipariş numaralı siparişinizin durumu (order_status) olarak değiştirilmiştir.',
'',
'" . json_encode(@array('tr' => array('order_id' => 'Sipariş No', 'firstname' => 'İsim',
        'lastname' => 'Soyisim', 'phone' => 'Telefon',
        'reference_id' => 'Referans No', 'order_status' => 'Sipariş Durumu',),
        'en' => array('order_id' => 'Order ID', 'firstname' => 'Firstname', 'lastname' => 'Lastname', 'phone' => 'Phone',
            'reference_id' => 'Reference ID', 'order_status' => 'Order Status',)),
        JSON_UNESCAPED_UNICODE) . "', 0,
'" . json_encode(@array('tr' => 'Bir Sipariş Durumu `Havale ile ödeme bekleniyor` olduğunda Müşteriye Mesaj Gönderir',
        'en' => 'When Order Status changes to `Awaiting bank wire payment`, it send a message to the customer.'),
        JSON_UNESCAPED_UNICODE) . "'
        );";


$sql [] =
    "INSERT INTO `" . _DB_PREFIX_ . "netgsmsms_templates` 
(`id`, `name`, `name_tr`, `type`, `admingsm`, `template`, `title`, `variables`, `active`, `description`) 
VALUES (NULL,
'hookActionOrderStatusPostUpdate11',
'Sipariş Durum Değişikliği11',
'customer',
'',
'Sayın (firstname) (lastname), (reference_id) Referanslı ve (order_id) 
sipariş numaralı siparişinizin durumu (order_status) olarak değiştirilmiştir.',
'',
'" . json_encode(@array('tr' => array('order_id' => 'Sipariş No', 'firstname' => 'İsim',
        'lastname' => 'Soyisim', 'phone' => 'Telefon',
        'reference_id' => 'Referans No', 'order_status' => 'Sipariş Durumu',),
        'en' => array('order_id' => 'Order ID', 'firstname' => 'Firstname', 'lastname' => 'Lastname', 'phone' => 'Phone',
            'reference_id' => 'Reference ID', 'order_status' => 'Order Status',)),
        JSON_UNESCAPED_UNICODE) . "', 0,
'" . json_encode(
    @array('tr' => 'Bir Sipariş Durumu `Uzaktan ödeme bekleniyor` olduğunda Müşteriye Mesaj Gönderir',
        'en' => 'When Order Status changes to `Remote payment accepted`, it send a message to the customer.'),
        JSON_UNESCAPED_UNICODE) . "'
        );";


$sql [] =
    "INSERT INTO `" . _DB_PREFIX_ . "netgsmsms_templates` 
(`id`, `name`, `name_tr`, `type`, `admingsm`, `template`, `title`, `variables`, `active`, `description`) 
VALUES (NULL,
'hookActionOrderStatusPostUpdate12',
'Sipariş Durum Değişikliği12',
'customer',
'',
'Sayın (firstname) (lastname), (reference_id) Referanslı ve (order_id) 
sipariş numaralı siparişinizin durumu (order_status) olarak değiştirilmiştir.',
'',
'" . json_encode(@array('tr' => array('order_id' => 'Sipariş No', 'firstname' => 'İsim', 'lastname' =>
        'Soyisim', 'phone' => 'Telefon', 'reference_id' => 'Referans No', 'order_status' => 'Sipariş Durumu',),
        'en' => array('order_id' => 'Order ID', 'firstname' => 'Firstname', 'lastname' => 'Lastname', 'phone' => 'Phone',
            'reference_id' => 'Reference ID', 'order_status' => 'Order Status',)),
        JSON_UNESCAPED_UNICODE) . "', 0,
'" . json_encode(
    @array('tr' => 'Bir Sipariş Durumu `Ön sipariş durumunda (ödenmemiş)` olduğunda Müşteriye Mesaj Gönderir',
        'en' => 'When Order Status changes to `On backorder (not paid)` it send a message to the customer.'),
        JSON_UNESCAPED_UNICODE) . "'
        );";


$sql [] =
    "INSERT INTO `" . _DB_PREFIX_ . "netgsmsms_templates` 
    (`id`, `name`, `name_tr`, `type`, `admingsm`, `template`, `title`, `variables`, `active`, `description`) 
VALUES (NULL,
'hookActionOrderStatusPostUpdate13',
'Sipariş Durum Değişikliği13',
'customer',
'',
'Sayın (firstname) (lastname), (reference_id) Referanslı ve (order_id) 
sipariş numaralı siparişinizin durumu (order_status) olarak değiştirilmiştir.',
'',
'" . json_encode(@array('tr' => array('order_id' => 'Sipariş No', 'firstname' => 'İsim', 'lastname' =>
        'Soyisim', 'phone' => 'Telefon', 'reference_id' => 'Referans No', 'order_status' => 'Sipariş Durumu',),
        'en' => array('order_id' => 'Order ID', 'firstname' => 'Firstname', 'lastname' => 'Lastname', 'phone' => 'Phone',
            'reference_id' => 'Reference ID', 'order_status' => 'Order Status',)),
        JSON_UNESCAPED_UNICODE) . "', 0,
'" . json_encode(@array('tr' => 'Bir Sipariş Durumu `Kapıda ödeme onayı bekleniyor` olduğunda Müşteriye Mesaj Gönderir',
        'en' => 'When Order Status changes to `Awaiting Cash On Delivery validation` it send a message to the customer.'),
        JSON_UNESCAPED_UNICODE) . "'
        );";

/// END POST UPDATE


$sql [] =
    "INSERT INTO `" . _DB_PREFIX_ . "netgsmsms_templates` 
    (`id`, `name`, `name_tr`, `type`, `admingsm`, `template`, `title`, `variables`, `active`, `description`) 
VALUES (NULL,
'hookActionObjectAddAfterOrder',
'Yeni Sipariş',
'admin',
'',
'Sitenize, (order_id) order numaralı (total) tutarında yeni bir sipariş verildi.',
'',
'" . json_encode(@array('tr' => array('order_id' => 'Sipariş No', 'reference_id' => 'Referans No', 'total' => 'Sipariş Tutarı'),
        'en' => array('order_id' => 'Order ID', 'reference_id' => 'Reference ID', 'total' => 'Total Paid')),
        JSON_UNESCAPED_UNICODE) . "', 0,
'" . json_encode(@array('tr' => 'Yeni bir sipariş verildiğinde yöneticiye mesaj gönderir',
        'en' => 'Sends Message to the admin when an order created.'), JSON_UNESCAPED_UNICODE) . "'
        );";

$sql [] =
    "INSERT INTO `" . _DB_PREFIX_ . "netgsmsms_templates` 
    (`id`, `name`, `name_tr`, `type`, `admingsm`, `template`, `title`, `variables`, `active`, `description`) 
VALUES (NULL,
'hookActionObjectAddAfterCustomerMessageAdmin',
'Yöneticiden Müşteriye Mesaj',
'customer',
'',
'Sayın (firstname) (lastname), (order_id) Numaralı siparişinize ait mesajınız cevaplanmıştır.',
'',
'" . json_encode(@array('tr' => array('firstname' => 'İsim', 'lastname' =>
        'Soyisim', 'order_id' => 'Sipariş No', 'reference_id' => 'Referans No'),
        'en' => array('firstname' => 'Firstname', 'lastname' =>
            'Lastname', 'order_id' => 'Order Id', 'reference_id' => 'Reference ID')),
        JSON_UNESCAPED_UNICODE) . "', 0,
'" . json_encode(@array('tr' => 'Yöneticiden Müşteriye Bir Mesaj Gönderildiğinde Müşteriye Sms Gönderir.',
        'en' => 'Sends a SMS to the customer when an admin sends Message to the Customer'),
        JSON_UNESCAPED_UNICODE) . "'
        );";

$sql [] =
    "INSERT INTO `" . _DB_PREFIX_ . "netgsmsms_templates` 
    (`id`, `name`, `name_tr`, `type`, `admingsm`, `template`, `title`, `variables`, `active`, `description`) 
VALUES (NULL,
'hookActionObjectAddAfterCustomerMessageCustomer',
'Müşteriden Yönetiye Mesaj',
'admin',
'',
'(customer_id) Numaralı müşteriden bir mesaj gönderildi.',
'',
'" . json_encode(@array('tr' => array('customer_id' => 'Müşteri No', 'order_id' => 'Sipariş No', 'message' => 'Mesaj'),
        'en' => array('customer_id' => 'Customer ID', 'order_id' => 'Order ID', 'message' => 'Message')),
        JSON_UNESCAPED_UNICODE) . "', 0,
'" . json_encode(@array('tr' => 'Müşteriden Yöneticiye Bir Mesaj Gönderildiğinde Yöneticiye SMS Gönderir.',
        'en' => 'Sends a SMS to the admin when a customers sends Mesaj to the admin '),
        JSON_UNESCAPED_UNICODE) . "'
        );";


foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}
