<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_form = 'bhaveshpatil7349@gmail.com';

	$email_subject = 'New form Submission';

	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
						"User Message: $message.\n";

	$to = "bhaveshpatil7349@gmail.com";

	$headers = "From: $email_form \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to, $email_subject, $email_body, $headers)

	header("location: index.html")
?>
