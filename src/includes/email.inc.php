<?php
// EXAMPLE
// require_once 'includes/email.inc.php';
// sendEmail('Testing...', ['arjones.tx@gmail.com' => 'P.S. Napier'], 'Testing the new email function.')

function sendEmail($subject, $tos, $content) {
	$email = new \SendGrid\Mail\Mail();
	$email->setFrom("admin@mythika-arpg.com", "Mythika ARPG");
	$email->setSubject("$subject");
	$email->addTos($tos);
	$email->addContent(
		"text/html", $content
	);

	$sendgrid = new \SendGrid($_ENV['SENDGRID_API_KEY']);
	try {
		$response = $sendgrid->send($email);
		// print $response->statusCode() . "\n";
		// print_r($response->headers());
		// print $response->body() . "\n";
	} catch (Exception $e) {
		error_log(print_r('Caught exception: '.  $e->getMessage(). "\n", true));
	}
}
