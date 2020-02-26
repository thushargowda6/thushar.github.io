<?php

if (isset($post['submit'])) {
	$Name = $_post['Name'];
	$Email = $_post['Email'];
	$Subject = $_post['Subject'];
	$Message = $_post['Message'];

	$email_from = 'profile';
	$email_subject = "new form submission";
	$email_body = "User name : $Name.\n".

					"User email : $Email.\n".
					"User message : $Message.\n";

					$to = "thushargowda600@gmail.com";
					$headers ="From : $email_from \r\n";
					$headers .="Reply-to: $Email\r\n";
	mail($to,$email_subject,$email_body,$headers);
	headers("Loation: 2.html");

}
?>