<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

include _PS_MODULE_DIR_ . "netgsmsms/libs/SmsService.php";

class netgsmsms extends Module
{
    public function __construct()
    {
        $this->name = 'netgsmsms';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Netgsm';
        $this->need_instance = 1;
        $this->ps_versions_compliancy = array(
            'min' => '1.6',
            'max' => _PS_VERSION_
        );
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Netgsm Sms');
        $this->description = $this->l('Sending Bulk and Automated Sms');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall Netgsm Sms?');
        $this->menu_controller = 'AdminNetgsm';
        $this->menu_name = 'Netgsm Sms';
    }

    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        if (!parent::install() ||
            !$this->registerHook('actionOrderStatusPostUpdate') ||
            !$this->registerHook('actionObjectAddAfter')) {
            return false;
        }
        include(dirname(__FILE__) . '/sql/install.php');

        if (!$this->installModuleTab($this->menu_controller, 'AdminParentModulesSf')) {
            return false;
        }

        return true;
    }

    public function installModuleTab($tabClassName, $TabParentName)
    {
        $tab = new Tab();
        $tabName = array();
        $langues = Language::getLanguages(false);
        foreach ($langues as $langue) {
            $tabName[$langue['id_lang']] = $this->menu_name;
        }
        $tab_parent_id = self::getIdTab($TabParentName);
        $tab->name = $tabName;
        $tab->class_name = $tabClassName;
        $tab->module = $this->name;
        $tab->id_parent = $tab_parent_id;
        $id_tab = $tab->save();
        if (!$id_tab) {
            return false;
        }
        return true;
    }

    protected static function getIdTab($tabClassName)
    {
        return (int)\Db::getInstance()->getValue(
            'SELECT id_tab FROM ' . _DB_PREFIX_ . 'tab WHERE class_name = \'' . pSQL($tabClassName) . '\''
        );
    }

    public function uninstall()
    {
        include(dirname(__FILE__) . '/sql/uninstall.php');

        $this->unregisterHook('actionOrderStatusPostUpdate');
        $this->unregisterHook('actionObjectAddAfter');

        Configuration::deleteByName('netgsmsms');
        Configuration::deleteByName('usercode');
        Configuration::deleteByName('password');
        Configuration::deleteByName('title0');
        Configuration::deleteByName('title1');
        Configuration::deleteByName('title2');
        Configuration::deleteByName('groupName');

        $id_tab = self::getIdTab($this->menu_controller);
        if ($id_tab != 0) {
            $tab = new \Tab($id_tab);
            $tab->delete();
        }

        return parent::uninstall();
    }

    public function getContent()
    {
        $output = null;
        $output .= $this->addCss();

        if (Tools::isSubmit('submit' . $this->name)) {
            $usercode = (string)(Tools::getValue('usercode'));
            $password = (string)(Tools::getValue('password'));
            if (
                !$usercode || !$password ||
                empty($usercode) || empty($password) ||
                !Validate::isGenericName($usercode) || !Validate::isGenericName($password)
            ) {
                Configuration::deleteByName('title0');
                Configuration::deleteByName('title1');
                Configuration::deleteByName('title2');
                $output .= $this->displayError($this->l('Invalid Configuration Values'));
            } else {
                Configuration::updateValue('usercode', trim($usercode));
                Configuration::updateValue('password', trim($password));

                $titles = SmsService::getTitleAsArray($usercode, $password);
                if (!is_array($titles)) {
                    Configuration::deleteByName('title0');
                    Configuration::deleteByName('title1');
                    Configuration::deleteByName('title2');
                    $output .= $this->displayError($this->l('Invalid Configuration Values'));
                } else {
                    for ($i = 0; $i < count($titles) - 1; $i++) {
                        Configuration::updateValue('title' . $i, $titles[$i]);
                    }
                    $output .= $this->displayConfirmation($this->l('Settings updated'));
                }
            }
        }
        if (Tools::isSubmit('saveTemplate')) {
            $templateTitle = Tools::getValue('title');
            $templateStatus = Tools::getValue('templateStatus');
            $templateMessage = Tools::getValue('templateMessageArea');
            $templateId = Tools::getValue('templateId');
            $admingsm = Tools::getValue('admingsm');

            $result = $this->saveTemplate($templateId, $templateTitle, $templateStatus, $templateMessage, $admingsm);
            if ($result === true) {
                $output .= $this->displayConfirmation($this->l('Template updated'));
            } else {
                $output .= $this->displayError($this->l("Saving Template Failed."));
            }

        }

        $output .= $this->getTemplatesForm();
        return $output;
    }

    public function saveTemplate($templateId, $templateTitle, $templateStatus, $templateMessage, $admingsm)
    {
        $sql = "UPDATE `" . _DB_PREFIX_ . "netgsmsms_templates` SET `admingsm`='" . $admingsm . "', `template`='" . $templateMessage . "',`title`='" .
            $templateTitle . "',`active`='" . $templateStatus . "'  WHERE `id` = '" . $templateId . "';";
        $result = DB::getInstance()->execute($sql);
        return $result;
    }

    public function isLogin()
    {
        return Configuration::get('title0') ? 1 : 0;
    }

    public function displayForm()
    {
        global $cookie;
        $l = new Language((int)$cookie->id_lang);
        $defaultLang = $l->iso_code;
        $fieldsForm = array();
        // Init Fields form array
        $fieldsForm[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('SETTINGS - ENTER YOUR NETGSM ACCOUNT LOGIN INFORMATION - TITLE WILL AUTOMATICALLY BE FILLED . '),
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Account No:'),
                    'name' => 'usercode',
                    'size' => 20,
                    'required' => true
                ),
                array(
                    'type' => 'password',
                    'label' => $this->l('Password'),
                    'name' => 'password',
                    'size' => 20,
                    'required' => true
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Message Title 1'),
                    'name' => 'title0',
                    'size' => 20,
                    'disabled' => true
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Message Title 2'),
                    'name' => 'title1',
                    'size' => 20,
                    'disabled' => true
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Message Title 3'),
                    'name' => 'title2',
                    'size' => 20,
                    'disabled' => true
                ),

            ),
            'submit' => array(
                'title' => $this->l('Save Settings'),
                'class' => 'btn pull-right btn-success'
            )
        );

        $helper = new HelperForm();

        // Module, token and currentIndex
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;

        // Language
        $helper->default_form_language = $defaultLang;
        $helper->allow_employee_form_lang = $defaultLang;

        // Title and toolbar
        $helper->title = $this->displayName;
        $helper->show_toolbar = true;
        $helper->toolbar_scroll = true;
        $helper->submit_action = 'submit' . $this->name;
        $helper->toolbar_btn = array(
            'save' => array(
                'desc' => $this->l('Save'),
                'href' => AdminController::$currentIndex . '&configure=' . $this->name . '&save' . $this->name .
                    '&token=' . Tools::getAdminTokenLite('AdminModules'),
            ),
            'back' => array(
                'href' => AdminController::$currentIndex . '&token=' . Tools::getAdminTokenLite('AdminModules'),
                'desc' => $this->l('Back to list')
            )
        );

        // Load current value
        $helper->fields_value['usercode'] = Configuration::get('usercode');
        $helper->fields_value['password'] = Configuration::get('password');
        $helper->fields_value['title0'] = Configuration::get('title0');
        $helper->fields_value['title2'] = Configuration::get('title2');
        $helper->fields_value['title1'] = Configuration::get('title1');

        return $helper->generateForm($fieldsForm);
    }

    public function getTemplatesForm()
    {
        $this->context->smarty->assign('isLogin', $this->isLogin());
        $this->context->smarty->assign('configurationTab', $this->displayForm());
        $this->context->smarty->assign('templateTable', $this->getTemplatesTable());
        $this->context->smarty->assign('form_url', Tools::safeOutput($_SERVER['REQUEST_URI']));
        $this->context->smarty->assign('titles', array(Configuration::get('title0'), Configuration::get('title1'), Configuration::get('title2')));
        return $this->display(__FILE__, 'views/templates/admin/templates.tpl');

    }


    public function getSMSTitles()
    {
        $output = '';
        $output .= '<select id="title" name="title" required class="form-control" style="max-width:50%;">
					        <option value="' . Configuration::get('title0') . '">' . Configuration::get('title0') . '</option>
					        <option value="' . Configuration::get('title1') . '">' . Configuration::get('title1') . '</option>
					        <option value="' . Configuration::get('title2') . '">' . Configuration::get('title2') . '</option>
					   </select>';
        return $output;
    }

    public function getTemplatesTable()
    {
        return $this->getTemplatesTableBody();
    }

    public function getTemplatesTableBody()
    {
        $output = array();
        global $cookie;
        $output ['body'] = '<body>';
        $service = new SmsService();
        $stmt = $service->getAllTemplates();
        $l = new Language((int)$cookie->id_lang);
        $lang = $l->iso_code;
        foreach ($stmt as $row) {

            $variables = '';
            $description = '';

            foreach (json_decode($row['variables'], true)[$lang] as $key => $value) {
                $variables .= $key . ':' . $value . ',';
            }
            $description = json_decode($row['description'], true)[$lang];
            $output ['body'] .= '<tr>';
            $output ['body'] .= '<td style="font-size: 13px;">' . $row['id'] . '</td>';
            if ($lang == 'tr')
                $output ['body'] .= '<td style="font-size: 13px;">' . $row['name_tr'] . '</td>';
            else
                $output ['body'] .= '<td style="font-size: 13px;">' . $row['name'] . '</td>';

            $output ['body'] .= '<td style="font-size: 13px;">' . $row['template'] . '</td>';
            $output ['body'] .= '<td style="font-size: 13px;">' . $description . '</td>';
            $output ['body'] .= '<td style="font-size: 13px; display: none;">' . $variables . '</td>';
            if ((int)$row['active'] === 1) {
                $output ['body'] .= '<td><span class="label" style="background-color:#7dc13c;font-size: 15px;">Aktif</span></td>';
            } else {
                $output ['body'] .= '<td><span class="label" style="background-color:#9D5351;font-size: 15px;">Pasif</span></td>';
            }
            $output ['body'] .= '<td style="font-size: 13px; display: none;">' . $row['type'] . '</td>';
            $output ['body'] .= '<td style="font-size: 13px; display: none;">' . $row['admingsm'] . '</td>';
            $output ['body'] .= '<td style="font-size: 13px; display: none;">' . $row['title'] . '</td>';
            $output ['body'] .= '<td><a href="#0" data-toggle="modal" class="btn btn-xs btn-warning" onclick="callModal(this)">
                                <i class="fa fa-edit" style="font-size:18px"></i>
                            </a></td>';
            $output ['body'] .= '</tr>';
        }

        $output ['body'] .= '</body>';

        return $output;
    }

    public function addCss()
    {
        $output = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
        return $output;
    }

    /*
     * send message to customer when status of an order changes
     */
    public function hookActionOrderStatusPostUpdate($params)
    {
        try {
            $service = new SmsService();
            $orderStatus = $params['newOrderStatus'];
            $order = new Order($params['id_order']);
            $tracking_id = $order->getShipping()[0]['tracking_number'];
            $customer = new Customer($order->id_customer);
            $address = new Address((int)($order->id_address_invoice));
            $customer_phone = $address->phone_mobile;

            if (empty($customer_phone))
                $customer_phone = $address->phone;
            if (empty($customer_phone))
                return null;

            $validphone = $this->checkPhoneNumber($customer_phone);
            if ($validphone === false)
                return null;

            $tmp_variables = array(
                '(order_id)' => $params['id_order'],
                '(firstname)' => $customer->firstname,
                '(lastname)' => $customer->lastname,
                '(phone)' => $customer_phone,
                '(reference_id)' => $order->reference,
                '(order_status)' => $orderStatus->name,
                '(tracking_id)' => $tracking_id,
            );
            $usercode = Configuration::get('usercode');
            $password = Configuration::get('password');

            if (empty($usercode) || empty($password))
                return null;

            $row = DB::getInstance()->getRow("SELECT * FROM `" . _DB_PREFIX_ . "netgsmsms_templates` WHERE name='" . __FUNCTION__ . $orderStatus->id . "'");
            if ($row === false) {
                return null;
            }
            if ((int)$row['active'] == 0)
                return null;
            $title = $row['title'];
            if (empty($title))
                return null;
            $template = $row ['template'];

            $message = $this->parseSmsTemplate($tmp_variables, $template);

            $service->sendOneSms($customer_phone, $message, $title, $usercode, $password);

        } catch (PrestaShopDatabaseException $e) {

        } catch (PrestaShopException $e) {

        }

    }

    /*
     * send message to admin when an order confirmed
     */
    public function hookActionObjectAddAfter($params)
    {
        $usercode = Configuration::get('usercode');
        $password = Configuration::get('password');

        try {
            if (get_class($params['object']) == 'Order') {

                $service = new SmsService();
                $order = $params['object'];
                $total_paid = $order->total_paid;
                $order_id = $order->id;
                $reference_id = $order->reference;
                $tmp_variables = array(
                    '(order_id)' => $order_id,
                    '(reference_id)' => $reference_id,
                    '(total)' => $total_paid,
                );

                if (empty($usercode) || empty($password))
                    return null;

                $row = DB::getInstance()->getRow("SELECT * FROM `" . _DB_PREFIX_ . "netgsmsms_templates` 
                WHERE name = '" . __FUNCTION__ . get_class($params['object']) . "';");

                if (!$row || (int)$row['active'] == 0 || empty($row['title']))
                    return null;
                $title = $row['title'];
                $template = $row['template'];

                $admingsms = explode(",", $row['admingsm']);
                $newadmingsms = array();

                foreach ($admingsms as $key => $value) {
                    $validphone = $this->checkPhoneNumber($value);
                    if ($validphone)
                        $newadmingsms [] = $value;
                }

                $message = $this->parseSmsTemplate($tmp_variables, $template);
                foreach ($newadmingsms as $key => $value)
                    $service->sendOneSms($value, $message, $title, $usercode, $password);

            }

            if (get_class($params['object']) == "CustomerMessage") {

                $customerMessage = $params['object'];
                /*
                 * When Admin Sends Message to the customer
                 */
                if ($customerMessage->id_employee > 0 && $customerMessage->private == 0) {

                    $ct = new CustomerThread($customerMessage->id_customer_thread);

                    if ((int)$ct->id_order < 1) {

                        $customer_phone = "0";
                    } else {
                        $order = new Order($ct->id_order);
                        $customer = new Customer($ct->id_customer);
                        $address = new Address((int)($order->id_address_invoice));
                        $customer_phone = $address->phone_mobile;
                    }

                    if (empty($customer_phone))
                        $customer_phone = $address->phone;

                    $validphone = $this->checkPhoneNumber($customer_phone);
                    if (!$validphone) {
                        return null;
                    }

                    $service = new SmsService();
                    $order_id = $order->id;
                    $reference_id = $order->reference;
                    $tmp_variables = array(
                        '(firstname)' => $customer->firstname,
                        '(lastname)' => $customer->lastname,
                        '(order_id)' => $order_id,
                        '(reference_id)' => $reference_id,
                    );

                    $row = DB::getInstance()->getRow("SELECT * FROM `" . _DB_PREFIX_ . "netgsmsms_templates`
                    WHERE name = '" . __FUNCTION__ . get_class($params['object']) . "Admin';");

                    if (!$row || (int)$row['active'] == 0 || empty($row['title']))
                        return null;
                    $title = $row['title'];
                    $template = $row['template'];

                    $message = $this->parseSmsTemplate($tmp_variables, $template);
                    $service->sendOneSms($customer_phone, $message, $title, $usercode, $password);

                } /*
                 * When Customer Sends Message to the admin
                 */
                else {

                    $ct = new CustomerThread($customerMessage->id_customer_thread);
                    $order = new Order($ct->id_order);
                    $customer_id = $ct->id_customer;
                    $address = new Address((int)($order->id_address_invoice));
                    $message = $customerMessage->message;
                    $service = new SmsService();

                    $tmp_variables = array(
                        '(customer_id)' => $customer_id,
                        '(order_id)' => $ct->id_order,
                        '(message)' => $message,
                    );

                    $row = DB::getInstance()->getRow("SELECT * FROM `" . _DB_PREFIX_ . "netgsmsms_templates` 
                    WHERE name = '" . __FUNCTION__ . get_class($params['object']) . "Customer';");


                    if (!$row || (int)$row['active'] == 0 || empty($row['title']))
                        return null;

                    $title = $row['title'];
                    $template = $row['template'];
                    $admingsms = explode(",", $row['admingsm']);
                    $newadmingsms = array();

                    foreach ($admingsms as $key => $value) {
                        $validphone = $this->checkPhoneNumber($value);
                        if ($validphone)
                            $newadmingsms [] = $value;
                    }

                    $message = $this->parseSmsTemplate($tmp_variables, $template);

                    foreach ($newadmingsms as $key => $value)
                        $service->sendOneSms($value, $message, $title, $usercode, $password);
                }
            }
        } catch (Exception $e) {

        }

    }

    public function parseSmsTemplate($tmp_variables, $template)
    {
        return str_replace(array_keys($tmp_variables), array_values($tmp_variables), $template);
    }

    public function checkPhoneNumber($gsm)
    {
        if ($gsm{0} === "+") {
            $gsm = Tools::substr($gsm, 3);
            $gsm = str_replace(" ", "", $gsm);
        }
        if (!ctype_digit($gsm)) {
            return false;
        }
        if ($gsm{0} !== "0" && Tools::strlen($gsm) == 11) {
            return false;
        }
        if ($gsm{0} !== "5" && Tools::strlen($gsm) == 10) {
            return false;
        }
        if ($gsm{0} !== "9" && Tools::strlen($gsm) == 12) {
            return false;
        }

        return true;
    }
}
