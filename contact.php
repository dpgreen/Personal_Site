<?php
set_include_path('.:/home/ec2-user/pear/share/pear/');
require_once 'Mail.php';

define('SENDER', 'dpgreen89@gmail.com');
define('RECIPIENT', 'dpgreen89@gmail.com');
define('USERNAME','AKIAIO33MXS74DQCTI7Q');
define('PASSWORD','ArFM6IB+owV4Fh9evsGaODVaZZEOHcOeaD9p9Ze+dhK+');
define('HOST', 'email-smtp.us-west-2.amazonaws.com');
define('PORT', '587');  	
define('SUBJECT','Incoming Inquiry from BreakingIntoProduct.com!');
define('BODY','test send');
//define('BODY',"name: ".$name."\nEmail :".$email."\n\n".$message);

		
		

$headers = array (
	'From' => SENDER,
	'To' => RECIPIENT,
	'Subject' => SUBJECT);

$smtpParams = array (
	'host' => HOST,
	'port' => PORT,
	'auth' => true,
	'username' => USERNAME,
	'password' => PASSWORD
);


$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];

if (($name=="")||($email=="")||($message==""))
    {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	}
else{		
	    

 
		$mail = Mail::factory('smtp', $smtpParams);
		$result = $mail->send(RECIPIENT, $headers, BODY);

		if (PEAR::isError($result)) {
		  echo("Email not sent. " .$result->getMessage() ."\n");
		} else {
		  echo("Email sent!"."\n");
		}

	    //$from="From: $name<$email>\r\nReturn-path: $email";
        //$subject="Message sent using your contact form";
		//mail("dpgreen89@gmail.com", $subject, $message, $from);
		//echo "Email sent!";
    }
?>