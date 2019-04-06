<?php
/**
 * Created by PhpStorm.
 * User: Engin BAKIR
 * Date: 31.12.2018
 * Time: 09:35
 */

class GroupRequest
{

    private $xmlRequest;
    private $persons = [];
    private $usercode;
    private $password;
    private $groupName;

    public function __construct($groupName, $usercode, $password, $persons)
    {

        $this->groupName = $groupName;
        $this->usercode = $usercode;
        $this->password = $password;
        $this->persons = $persons;
    }

    public function prepareXMLRequest()
    {
        $this->xmlRequest = $this->getXmlRequestHeader();
        $this->xmlRequest .= $this->getXmlRequestBody();
    }

    public function getXmlRequestHeader()
    {
        try {
            $xmlHeader = '<?xml version="1.0" encoding="UTF-8"?><main>';
            $xmlHeader .= '<usercode>' . $this->usercode . '</usercode>';
            $xmlHeader .= '<pwd>' . $this->password . '</pwd>';
            $xmlHeader .= '<grup>' . $this->groupName . '</grup>';
            $xmlHeader .= '<dcode></dcode>';
            return $xmlHeader;
        } catch (Exception $e) {
        }
    }

    public function getXmlRequestBody()
    {
        try {
            $xmlBody = '<kayit>';
            foreach ($this->persons as $person) {

                $xmlBody .= '<tel>';
                $xmlBody .= '<ad>' . $person[1] . '</ad>';
                $xmlBody .= '<soyad>' . $person[2] . '</soyad>';
                $xmlBody .= '<telefon>' . $person[3] . '</telefon>';
                $xmlBody .= '</tel>';
            }
            $xmlBody .= '</kayit></main>';
        } catch (Exception $e) {
        }

        return $xmlBody;
    }

    public function XMLPOST()
    {
        try {
            $url = "http://api.netgsm.com.tr/contacts/group/add";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml"));
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $this->xmlRequest);
            $result = curl_exec($ch);
        } catch (Exception $e) {

        }
        return $result;
    }

    public function getXmlRequest()
    {
        return $this->xmlRequest;
    }

}