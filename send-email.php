<?php
	
$method = $_SERVER['REQUEST_METHOD'];
if($method === "POST") {
	$email = $_POST['email'];
	$message = $_POST['message'];
}
else {
	echo 'REQUEST INVALID. ONLY POST REQUESTS ALLOWED!';
	http_response_code(400);
}

?>
