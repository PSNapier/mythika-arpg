<?php

$email=$_POST['email'];
$subject = 'Test';
$message = 'Hello world :D';
$from = "contact@abature.studio";
$headers = "From:" . $from;

$success = mail($email, $subject, $message, $headers);

if (!$success) {
	$errorMessage = error_get_last()['message'];
}

$message = "Hello world :D";
$message = wordwrap($message, 70, "\r\n");

mail('arjones.tx@gmail.com', 'Testing', $message);