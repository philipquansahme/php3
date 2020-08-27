<?php
     $key = '4ab7435aac62a25a8df9';
     $to = '0543230479';
     $sender = "Philip";
     $str = "I Love You";
     $msg = str_replace(" ","+",$str);
     $url = "http://bulk.becsms.com/smsapi?key=$key&to=$to&msg=$msg&sender_id=$sender";
     $result = file_get_contents($url);

     $str = "I Love You";
     //echo str_replace(" ","+",$str);
     switch($result){
          case "1000":
               echo "Message sent";
          break;
          case "1002":
               echo "Message not sent";
          break;
          case "1003":
               echo "You don't have enough balance";
          break;
          case "1004":
               echo "Invalid API Key";
          break;
          case "1005":
               echo "Phone number not valid";
          break;
          case "1006":
               echo "Invalid Sender ID";
          break;
          case "1008":
               echo "Empty message";
          break;
}



?>
