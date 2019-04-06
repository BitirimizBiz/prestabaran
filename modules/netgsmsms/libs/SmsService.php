<?php

include_once('Request.php');
include_once('SMS.php');
include_once('GroupRequest.php');

class SmsService
{
    public function __construct()
    {
    }

    public static function getTitleAsArray($u, $p)
    {
        $titles = Request::HTTPGET($u, $p);
        if ($titles == 30) {
            return 30;
        } else
            $arr = explode("<br>", $titles);

        return $arr;
    }

    public function getSelectAndCountQueries($inputs)
    {
        $firstname = null;
        $lastname = null;
        $city = null;
        $email = null;
        $start = 0;
        $type = "customer";
        $sql = "select c.id_customer, c.firstname, c.lastname, c.email, a.phone, a.phone_mobile, a.city from " . _DB_PREFIX_ . "customer as c
                inner join " . _DB_PREFIX_ . "address as a on a.id_customer = c.id_customer
                where (length(a.phone) > 9 OR length(a.phone_mobile) > 9) ";

//        $sql = "select a.phone, a.city, c.* from ps_address as a, ps_customer as c ";

        $sqlCount = $sql;
        $sqlAll = $sql;

        if (!empty($inputs['firstname']))
            $firstname = $inputs['firstname'];
        if (!empty($inputs['lastname']))
            $lastname = $inputs['lastname'];
        if (!empty($inputs['email']))
            $email = $inputs['email'];
        if (!empty($inputs['city']))
            $city = $inputs['city'];
        if (!empty($inputs['limit']))
            $limit = $inputs['limit'];
        if (!empty($inputs['page']))
            $start = $limit * ($inputs['page'] - 1);

        if ($firstname !== null) {
            $sql .= " AND (c.firstname LIKE '%" . $firstname . "%' ) ";
        }
        if ($lastname !== null) {
            $sql .= " AND (c.lastname LIKE '%" . $lastname . "%') ";
        }
        if ($city !== null) {
            $sql .= " AND (a.city LIKE '%" . $city . "%') ";
        }
        if ($email !== null) {
            $sql .= " AND (c.email LIKE '%" . $email . "%') ";
        }


        $param = " group by c.id_customer order by a.id_address";
        $sqlCount = $sql . $param;
        $sqlAll = $sql . $param;
        $sql .= $param . " LIMIT " . $start . ", " . $limit;

        return ['selectQuery' => $sql, 'countQuery' => $sqlCount, 'selectAllQuery' => $sqlAll];

    }

    public function sendBulkSms($customers, $message, $title, $usercode, $password)
    {
        $flag = false;

        $SMSArray = [];
        for ($i = 0; $i < count($customers); $i++) {
            $newMessage = $message;
            $phone = $customers[$i][3];

            if ($phone{0} === "+" && $phone{1} === "9" && $phone{2} === "0") {
                $phone = Tools::substr($phone, 3);
            }
            if (ctype_digit($phone)) {

                if (strpos($newMessage, "{firstname}") === false) {

                } else {
                    $newMessage = str_replace("{firstname}", $customers[$i][1], $newMessage);
                }
                if (strpos($newMessage, "{lastname}") === false) {

                } else {
                    $newMessage = str_replace("{lastname}", $customers[$i][2], $newMessage);
                }
                if (strpos($newMessage, "{phone}") === false) {

                } else {
                    $newMessage = str_replace("{phone}", $customers[$i][3], $newMessage);
                }
                if (strpos($newMessage, "{city}") === false) {

                } else {
                    $newMessage = str_replace("{city}", $customers[$i][4], $newMessage);
                }
                if (strpos($newMessage, "{email}") === false) {

                } else {
                    $newMessage = str_replace("{email}", $customers[$i][5], $newMessage);
                }

                array_push($SMSArray, new SMS($newMessage, $phone));
                $flag = true;
            }

        }

        if ($flag == true) {
            $request = new Request($title, $SMSArray, $usercode, $password);
            $request->prepareXMLRequest();
            return $request->XMLPOST();
        } else {
            return false;
        }

    }

    public function sendOneSms($number, $message, $title, $usercode, $password)
    {
        $response = Request::SendSms($number, $message, $title, $usercode, $password);
    }

    public function getAllTemplates()
    {
        $sql = "SELECT * FROM " . _DB_PREFIX_ . "netgsmsms_templates ORDER BY id ASC";
        $stmt = DB::getInstance()->executeS($sql);
        return $stmt;
    }

    public function addToGroup($customers, $groupName, $usercode, $password)
    {
        try {
            $group = new GroupRequest($groupName, $usercode, $password, $customers);
            $group->prepareXMLRequest();
            $result = $group->XMLPOST();
        } catch (Exception $e) {

        }

        return $result;
    }

}