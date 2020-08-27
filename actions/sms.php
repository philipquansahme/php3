<?php
    function sendSMS($number, $message)
    {
        $key = '4ab7435aac62a25a8df9';
        $to = $number;
        $sender = "PhilAPP";
        $str = $message;
        $msg = str_replace(" ","+",$str);
        $url = "http://bulk.becsms.com/smsapi?key=$key&to=$to&msg=$msg&sender_id=$sender";
        $result = file_get_contents($url);
        return $result;
    }

?>

