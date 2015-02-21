<?php

$receiving_email = 'ibelieveicanfly@pigeolabs.com'; // standard contact email...
$formmailer_email = 'formmailer@pigeolabs.com';

// DO NOT TOUCH BELOW UNLESS YOU KNOW WHAT YOU ARE DOING!!!

function send_mail($name, $email, $message) {
	global $receiving_email, $formmailer_email;

	$subject = 'eMail from '.$name.' using Contact Form!';
	$message = '<h2>You have received the following message from '.$name.':</h2><br /><br /><p>'.$message.'</p>';
	$headers = 'From: ' . $formmailer_email . "\r\n" .
    	'Reply-To: '. $email . "\r\n" .
    	'X-Mailer: PHP/' . phpversion();

	if(mail($receiving_email, $subject, $message, $headers))
		return true;
		
	return false; // by default.
}
	
$method = $_SERVER['REQUEST_METHOD'];
if($method === "POST") {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	if(isset($name) && $name !==  '' && isset($email) && $email !== '' && isset($message) && $message !== '') {
		if(send_mail($name, $email, $message)) {
			header('Location: /?form_success=true#contact');
		}
		else {
			header('Location: /?form_failed=true&message=send_failure#contact');
		}
	}
	else {
		header('Location: /?form_failed=true&message=missing_info#contact');
	}
}
else {
	echo '<h2 style="text-align: center">REQUEST INVALID. ONLY POST REQUESTS ALLOWED!</h2>';
	http_response_code(400);
}

?>
