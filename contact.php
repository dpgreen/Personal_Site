<?php

if(empty($_SERVER['CONTENT_TYPE']))
{ 
  $_SERVER['CONTENT_TYPE'] = "application/x-www-form-urlencoded"; 
}

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];

if (($name=="")||($email=="")||($message==""))
    {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	}
else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("dpgreen89@gmail.com", $subject, $message, $from);
		echo "Email sent!";
    }
?>