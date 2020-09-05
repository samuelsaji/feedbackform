<?php
if(!empty($_POST["submit"])) {
	$userid = $_POST["userid"];
	$password = $_POST["password"];
	

	$toEmail = "kp.samuelsaji@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contact-view.php";
?>
