<?php
	$mail = $_POST['mail'];
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$text = $_POST['msg'];
	$phoneno = $_POST['phone'];
	$to = "support@choruslab.com";
	$message = "You received  a mail from ".$mail;
	$message .=" Text of the message : ".$text;

	if(mail($to, $subject, $message)){
		echo "";
	}
	else{
		echo "”;
	}
?>