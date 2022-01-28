<?php

    $to = "";  // Your email here
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
	  $message = $_REQUEST['message'];
    $headers = "From: $from";
	  $subject = "Contact Form Live Radio";
   
    $fields = array();
    $fields{"name"} = "First name";
    $fields{"email"} = "Email";
    $fields{"message"} = "Message";
	

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
