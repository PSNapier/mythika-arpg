<?php

if (isset($_POST["submit"])) {
	$message = $_POST["message"];
	$emailAddress = $_POST["email"];
	
	require_once 'functions.inc.php';
	require 'sendgrid.config.php';

	if (emptyInputLogin($message, $emailAddress) !== false) {
		header("location: ../emailtest.php?error=emptyinput");
		exit();
	}

	$email = new \SendGrid\Mail\Mail(); 
	$email->setFrom("mail@mythika-arpg.com", "Mythika ARPG");
	$email->setSubject("Mythika Email");
	$email->addTo($emailAddress, "Example User");
	$email->addContent("text/plain", $message);
	// $email->addContent("text/plain", "...Mythika email working! ;P");
	// $email->addContent(
	//     "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
	// );
	$sendgrid = new \SendGrid(SENDGRID_API_KEY);
	try {
		 $response = $sendgrid->send($email);
		 print $response->statusCode() . "\n";
		 print_r($response->headers());
		 print $response->body() . "\n";
	} catch (Exception $e) {
		 echo 'Caught exception: '. $e->getMessage() ."\n";
	}
	header("location: ../emailtest.php?confirmation=emailsent");
	exit();
}
else {
	header("location: ../emailtest.php");
	exit();
}
