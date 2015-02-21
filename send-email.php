<?php

$receiving_email = 'ibelieveicanfly@pigeolabs.com'; // standard contact email...

// DO NOT TOUCH BELOW UNLESS YOU KNOW WHAT YOU ARE DOING!!!

function send_mail($name, $email, $message) {
	$subject = 'eMail from '.$name.' using Contact Form!';
	$message = '<h2>You have received the following message from '.$name.':</h2><br /><br /><p>'.$message.'</p>';
	$headers = 'From: ' . 'form-mailer@pigeolabs.com' . "\r\n" .
    	'Reply-To: '. $email . "\r\n" .
    	'X-Mailer: PHP/' . phpversion();

	mail($receiving_email, $subject, $message, $headers);
}
	
$method = $_SERVER['REQUEST_METHOD'];
if($method === "POST") {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	if(isset($name) && isset($email) && isset($message)) {
		if(send_mail($name, $email, $message)) {
			header('Location: /?form_success=true');
		}
		else {
			header('Location: /?form_failed=true&message=send_failure');
		}
	}
	else {
		header('Location: /?form_failed=true&message=missing_info');
	}
}
else {
	echo '<h2 style="text-align: center">REQUEST INVALID. ONLY POST REQUESTS ALLOWED!</h2>';
	http_response_code(400);
}

?>
