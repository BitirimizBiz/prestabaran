<?php


class Request
{

    private $xmlRequest;
    private $SMS = [];           //// SMS class object array to hold each sms infos
    private $usercode;
    private $password;
    private $title;

    public function __construct($title, $SMS, $usercode, $password)
    {
        $this->title = $title;
        $this->SMS = $SMS;
        $this->usercode = $usercode;
        $this->password = $password;
    }

    public function XMLPOST()
    {
        $url = "http://api.netgsm.com.tr/sms/send/xml";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, Array("Content-Type: text/xml"));
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->xmlRequest);
        $result = curl_exec($ch);
        return $result;
    }

    public static function SendSms($telno, $msg, $header, $username, $pass)
    {
        $msg = html_entity_decode($msg, ENT_COMPAT, "UTF-8");
        $msg = rawurlencode($msg);

        $header = html_entity_decode($header, ENT_COMPAT, "UTF-8");
        $header = rawurlencode($header);

        $url = "http://api.netgsm.com.tr/sms/send/get/?usercode=" . $username . "&password=" . $pass . "&gsmno=" . $telno . "&message=" . $msg . "&msgheader=" .
            $header . "&dil=TR&module=5";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);

        return $output;
    }


    public static function HTTPGET($u, $p)
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://api.netgsm.com.tr/sms/header/get/?usercode=' . $u . '&password=' . $p);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        $res = curl_exec($ch);
        curl_close($ch);

        return $res;

    }


    /**
     * @return mixed
     */
    public function getUsercode()
    {
        return $this->usercode;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return array
     */
    public function getSMS()
    {
        return $this->SMS;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getXmlRequest()
    {
        return $this->xmlRequest;
    }

    /**
     * Prepare Xml Request
     */
    public function prepareXMLRequest()
    {
        $this->xmlRequest = $this->getXmlRequestHeader();
        $this->xmlRequest .= $this->getXmlRequestBody();
    }

    function getXmlRequestHeader()
    {
        try {
            $xmlHeader = '<?xml version="1.0" encoding="UTF-8"?><mainbody><header>';
            $xmlHeader .= '<company module="5" dil="TR">Netgsm</company>';
            $xmlHeader .= '<usercode>' . $this->usercode . '</usercode>';
            $xmlHeader .= '<password>' . $this->password . '</password>';
            $xmlHeader .= '<startdate></startdate>';
            $xmlHeader .= '<stopdate></stopdate>';
            $xmlHeader .= '<type>n:n</type>';
            $xmlHeader .= '<msgheader>' . $this->getTitle() . '</msgheader>';
            $xmlHeader .= '</header>';

            return $xmlHeader;
        } catch (Exception $e) {
            return 'XML HEADER ERROR';
        }

    }

    function getXmlRequestBody()
    {
        try {
            $xmlBody = '<body>';
            foreach ($this->SMS as $SM) {
                $xmlBody .= '<mp><msg><![CDATA[' . $SM->getMessage() . ']]></msg><no>' . $SM->getDestination() . '</no></mp>';
            }
            $xmlBody .= '</body></mainbody>';

            return $xmlBody;
        } catch (Exception $e) {
            return 'XML BODY ERROR';
        }
    }

}

?>