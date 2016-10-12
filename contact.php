<?php
session_start();
$action=$_REQUEST['action'];
echo $action;
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['text'];
print_r($_REQUEST);

if (($name=="")||($email=="")||($message==""))
    {
		print $name;
		print $email;
		print $message;
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	}
else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("youremail@yoursite.com", $subject, $message, $from);
		echo "Email sent!";
    }
?>