<?php

    $to = "";   // Your email here
    $from = "Subscribe form";
    $name = "";
    $headers = "From subscribe";
    $subject = "You have a message";

	
	$email = $_REQUEST['subscribemail'];
	

    $body = "Please add this email to your subcribe list :\n\n";
	$body .= $email; 

    $send = mail($to, $subject, $body, $headers);

?>
