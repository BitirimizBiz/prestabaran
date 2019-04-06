<?php

if (!defined('_PS_VERSION_')) {
    exit();
}

class AdminNetgsmController extends ModuleAdminController
{

    public function __construct()
    {
        $this->lang = true;
        $this->bootstrap = true;
        $this->context = Context::getContext();
        $this->name = 'netgsmsms';
        parent::__construct();
    }

    public function renderList()
    {
        include_once(_PS_MODULE_DIR_ . 'netgsmsms/libs/SmsService.php');
        $service = new SmsService();
        try {
            $inputs = $this->getDefaultInputs();

            $info_html = '';
            $customers = json_decode(Tools::getValue('customers'));

            if (Tools::isSubmit('searchButton')) {
                $inputs ['firstname'] = Tools::getValue('inputFirstName');
                $inputs ['lastname'] = Tools::getValue('inputLastName');
                $inputs ['type'] = Tools::getValue('groupType');
                $inputs ['limit'] = Tools::getValue('perpage');
                $inputs ['page'] = 1;
                $customers = array();
            } elseif (Tools::isSubmit('sendMessageButton')) {
                $title = Tools::getValue('title');
                $message = Tools::getValue('messageArea');
                if (empty($customers)) {
                    $info_html .= $this->module->displayError(
                        $this->l('Message Sending Failed. No Selected Customer!!')
                    );
                } elseif (trim($title) === "" || trim($message) == "") {
                    $info_html .= $this->module->displayError(
                        $this->l('Message Sending Failed. Title or Message is Empty!!')
                    );
                } else {
                    $queries = $service->getSelectAndCountQueries($inputs);
                    $customersWithValues = $this->getCustomersArray($customers, $queries);
                    $response = $this->sendBulkSms($customersWithValues, $message, $title);
                    $resp = explode(" ", $response);
                    if ($resp[0] === "00") {
                        $info_html = $this->module->displayConfirmation(
                            $this->l('Message Sending Successfully.')
                        );
                    } else {
                        $info_html .= $this->module->displayError(
                            $this->l('Message Sending Failed!!')
                        );
                    }
                }
            } elseif (Tools::isSubmit('addToGroup')) {
                $groupName = Tools::getValue('groupName');

                if (empty($groupName)) {
                    $info_html .= $this->module->displayError(
                        $this->l('Group name canot be empty !!')
                    );
                } elseif (empty($customers)) {
                    $info_html .= $this->module->displayError(
                        $this->l('Adding to Group Failed. No Selected Customer!!')
                    );
                } else {
                    Configuration::updateValue('groupName', trim($groupName));

                    $queries = $service->getSelectAndCountQueries($inputs);
                    $customersWithValues = $this->getCustomersArray($customers, $queries);
                    $result = $this->addToGroup(trim($groupName), $customersWithValues);
                    $obj = simplexml_load_string(($result));

                    if ((int)$obj->main->code == 0) {
                        $info_html = $this->module->displayConfirmation(
                            $this->l('Customers Added To Group Successfully.')
                        );
                    } elseif ((int)$obj->main->code == 80) {
                        $info_html .= $this->module->displayError(
                            $this->l("Too Many Request.")
                        );
                    } else {
                        $info_html .= $this->module->displayError(
                            $this->l("Adding Customers to Group Failed")
                        );
                    }
                }
            }
            $this->context->smarty->assign(array(
                'hello' => 'Hello Netgsm',
                'messageForm' => $this->getBulkSmsForm(),
                'searchArea' => $this->getSearchForm($inputs),
                'table' => $this->getTable($inputs, $customers),
                'form_url' => self::$currentIndex . '&token=' . Tools::getValue('token'),
                'groupName' => $this->getGroupName(),
                'isupdated'=> $this->checkUpgrade(),
            ));

            try {
                $html = $this->context->smarty->fetch(_PS_MODULE_DIR_ . 'netgsmsms/views/templates/admin/bulksms.tpl');
            } catch (Exception $e) {
            }
            return $info_html . $html;
        } catch (Exception $e) {
        }
    }

    public function checkUpgrade()
    {
        $module = Module::getInstanceByName('netgsmsms');
        $current_version = $module->version;
        $version = file_get_contents("http://api.netgsm.com.tr/plugins/prestashop/version.txt");
        return $current_version !== $version ? 0 : 1;
    }

    private function sendBulkSms($customers, $message, $title)
    {
        include_once(_PS_MODULE_DIR_ . 'netgsmsms/libs/SmsService.php');
        $service = new SmsService();
        $usercode = Configuration::get('usercode');
        $password = Configuration::get('password');

        return $service->sendBulkSms($customers, $message, $title, $usercode, $password);
    }

    private function getBulkSmsForm()
    {
        $output = array();

        $output ['title'] = '';
        $output ['title'] .= '
					        <option value="' . Configuration::get('title0') . '">' . Configuration::get('title0') . '</option>
					        <option value="' . Configuration::get('title1') . '">' . Configuration::get('title1') . '</option>
					        <option value="' . Configuration::get('title2') . '">' . Configuration::get('title2') . '</option>
				   ';

        $output ['customize'] = '';
        $output ['customize'] .= '
                           <option value = " {firstname} ">İsim</option>
                           <option value = " {lastname} ">Soyisim</option>
                           <option value = " {phone} ">Telefon No</option>
                           <option value = " {email} ">Email</option>
                           <option value = " {city} ">Şehir</option>
                   ';
        $output ['messageArea'] = '';
        $output ['messageArea'] .= '
					   
				   ';
        $output ['sendButton'] = '<input class="btn btn-success" type="submit" name="sendMessageButton" value="Send Message">';

        return $output;
    }

    private function getSearchForm($inputs)
    {
        $firstname = $inputs['firstname'];
        $lastname = $inputs['lastname'];
        $city = $inputs['city'];
        $email = $inputs['email'];
        $limit = $inputs['limit'];
        $limitArr = array(10, 20, 50);
        $output = array();
        $output['firstname'] = '<input style="font-size: 13px" type="text" name="inputFirstName" 
        id="inputFirstName" class="form-control input-sm" 
        value="' . (!empty($firstname) ? $firstname : "") . '" placeholder="FXXXXXXX">';

        $output['lastname'] = '<input style="font-size: 13px" type="text" name="inputLastName" 
        id="inputLastName" class="form-control input-sm" 
        value="' . (!empty($lastname) ? $lastname : "") . '" placeholder="LXXXXXXX">';

        $output['city'] = '<input style="font-size: 13px" type="text" name="inputCity" 
        id="inputCity" class="form-control input-sm" 
        value="' . (!empty($city) ? $city : "") . '" placeholder="Ankara">';

        $output['email'] = '<input style="font-size: 13px" type="text" name="inputEmail" 
        id="inputEmail" class="form-control input-sm" 
        value="' . (!empty($email) ? $email : "") . '" placeholder="abc@gmail.com">';

        if ($index = array_search($limit, $limitArr)) {
            array_splice($limitArr, $index, 1);
            $output ['limit'] = '<option value = "' . $limit . '" >' . $limit . '</option>';
        }
        foreach ($limitArr as $key => $value) {
            $output ['limit'] .= '<option value = "' . $value . '" >' . $value . '</option>';
        }

        return $output;
    }

    private function getTable($inputs, $customers)
    {
        include_once(_PS_MODULE_DIR_ . 'netgsmsms/libs/SmsService.php');
        $service = new SmsService();
        $output = array();
        $queries = $service->getSelectAndCountQueries($inputs);
        $stmt = DB::getInstance()->executeS($queries['selectQuery']);
        if (!$stmt) {
            return $output;
        }
        $countStmt = DB::getInstance()->executeS($queries['countQuery']);
        $count = DB::getInstance()->numRows();

        $output ['body'] = '<tbody id="tableBody">';
        foreach ($stmt as $row) {
            $output ['body'] .= '<tr > ';
            $output ['body'] .= '<td ><input type="checkbox" class="checkall" onchange="addCustomer(this)" ></td >';
            $output ['body'] .= '<td style="font-size: 15px" > ' . $row['id_customer'] . ' </td > ';
            $output ['body'] .= '<td style="font-size: 15px" > ' . $row['firstname'] . ' </td > ';
            $output ['body'] .= '<td style="font-size: 15px" > ' . $row['lastname'] . ' </td > ';
            $output ['body'] .= '<td style="font-size: 15px" > ' .
                (!empty($row['phone_mobile']) ? $row['phone_mobile'] : $row['phone']) . ' </td > ';
            $output ['body'] .= '<td style="font-size: 15px" > ' . $row['city'] . ' </td > ';
            $output ['body'] .= '<td style="font-size: 15px" > ' . $row['email'] . ' </td > ';
            $output ['body'] .= '</tr > ';
        }
        $output ['body'] .= "</body>";

        $allcustomers = array();
        foreach ($countStmt as $row) {
            array_push($allcustomers, (int)$row['id_customer']);
        }

        $output ['pagination'] = $this->getPaginationLinks($count, $inputs);
        $output ['hiddens'] = $this->getHiddenFields($customers, $allcustomers);

        return $output;
    }

    private function getPaginationLinks($count, $inputs)
    {

        $href = self::$currentIndex . "&token=" . Tools::getValue('token');
        $output = '';
        $page = (int)$inputs['page'];
        $limit = (int)$inputs['limit'];
        $f = $inputs ['firstname'];
        $l = $inputs ['lastname'];
        $pages = ceil($count / $limit);

        if ($pages > 1) {
            if ($page == 1) {
                $output = $output . '<span class="linkk first disabled" >&#8810;</span><span class="linkk disabled">&#60;</span>';
            } else {
                $output = $output . '<a class="linkk first" href="' . $href . '&page=1' . '&firstname=' . $f .
                    '&lastname=' . $l . '&perpage=' . $limit . '">&#8810;</a>
                    <a class="linkk" href="' . $href . '&page=' . ($page - 1) . '&firstname=' . $f .
                    '&lastname=' . $l . '&perpage=' . $limit . '">&#60;</a>';
            }
            if (($page - 3) > 0) {
                if ($page == 1) {
                    $output = $output . '<span id=1 class="linkk current">1</span>';
                } else {
                    $output = $output . '<a class="linkk" href="' . $href . '&page=1' . '&firstname=' . $f .
                        '&lastname=' . $l . '&perpage=' . $limit . '">1</a>';
                }
            }
            if (($page - 3) > 1) {
                $output = $output . '<span class="dot">...</span>';
            }
            for ($i = ($page - 2); $i <= ($page + 2); $i++) {
                if ($i < 1) {
                    continue;
                }
                if ($i > $pages) {
                    break;
                }
                if ($page == $i) {
                    $output = $output . '<span id=' . $i . ' class="linkk current">' . $i . '</span>';
                } else {
                    $output = $output . '<a class="linkk" href="' . $href . '&page=' . $i . '&firstname=' . $f .
                        '&lastname=' . $l . '&perpage=' . $limit . '">' . $i . '</a>';
                }
            }
            if (($pages - ($page + 2)) > 1) {
                $output = $output . '<span class="dot">...</span>';
            }
            if (($pages - ($page + 2)) > 0) {
                if ($page == $pages) {
                    $output = $output . '<span id=' . ($pages) . ' class="linkk current">' . ($pages) . '</span>';
                } else {
                    $output = $output . '<a class="linkk" href="' . $href . '&page=' . $pages . '&firstname=' . $f .
                        '&lastname=' . $l . '&perpage=' . $limit . '">' . ($pages) . '</a>';
                }
            }
            if ($page < $pages) {
                $output = $output . '<a  class="linkk" href="' . $href . '&page=' . ($page + 1) . '&firstname=' . $f .
                    '&lastname=' . $l . '&perpage=' . $limit . '">></a>
                <a  class="linkk" href="' . $href . '&page=' . ($pages) . '&firstname=' . $f .
                    '&lastname=' . $l . '&perpage=' . $limit . '">&#8811;</a>';
            } else {
                $output = $output . '<span class="linkk disabled">></span><span class="linkk disabled">&#8811;</span>';
            }
        }
        return $output;

    }

    private function getDefaultInputs()
    {
        $inputs = array();
        $inputs ['limit'] = 1;
        $inputs ['page'] = !empty(Tools::getValue('page')) ? Tools::getValue('page') : 1;
        $inputs ['firstname'] = !empty(Tools::getValue('firstname')) ? Tools::getValue('firstname') : "";
        $inputs ['lastname'] = !empty(Tools::getValue('lastname')) ? Tools::getValue('lastname') : "";
        $inputs ['city'] = !empty(Tools::getValue('inputCity')) ? Tools::getValue('inputCity') : "";
        $inputs ['email'] = !empty(Tools::getValue('inputEmail')) ? Tools::getValue('inputEmail') : "";
        $inputs ['type'] = "";
        $inputs ['limit'] = !empty(Tools::getValue('perpage')) ? Tools::getValue('perpage') : 10;
        return $inputs;
    }

    private function getCustomersArray($customers, $queries)
    {
        if (empty($customers)) {
            return false;
        }
        $customersWithValues = array();
        $stmt = DB::getInstance()->executeS($queries['selectQuery']);
        if (!$stmt) {
            return false;
        }
        foreach ($stmt as $row) {
            if (in_array($row['id_customer'], $customers)) {
                array_push($customersWithValues, array($row['id_customer'], $row['firstname'], $row['lastname'],
                    (!empty($row['phone_mobile']) ? $row['phone_mobile'] : $row['phone']), $row['city'], $row['email']));
            }
        }
        return $customersWithValues;
    }

    private function getGroupName()
    {
        return Configuration::get('groupName');
    }

    private function addToGroup($groupName, $customers)
    {
        include_once(_PS_MODULE_DIR_ . 'netgsmsms/libs/SmsService.php');
        $service = new SmsService();
        $usercode = Configuration::get('usercode');
        $password = Configuration::get('password');

        return $service->addToGroup($customers, $groupName, $usercode, $password);
    }

    private function getHiddenFields($customers, $allcustomers)
    {
        $output = '';
        $output .= "<input type='hidden' id='customers' name='customers' value='" .
            json_encode($customers, JSON_UNESCAPED_UNICODE) . "'>";
        $output .= "<input type='hidden' name='allcustomers' id ='allcustomers' value='" .
            json_encode($allcustomers, JSON_UNESCAPED_UNICODE) . "'>";

        return $output;
    }
}