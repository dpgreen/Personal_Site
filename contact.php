<?php
session_start();
$action=$_REQUEST['action'];
echo $action;
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['text'];
$Test = file_get_contents("php://input");
echo $Test;

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