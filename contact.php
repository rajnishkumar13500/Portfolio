<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$fromName = 'RAJNISH KUMAR'; 
		$fromEmail = 'rajnishkumar13500@gmail.com'; 
		$subject = $_POST['subject']; 
		
		$body = "From: $name\n E-Mail: $email\n Subject: $subject\n Message:\n $message";
	

		$send = SimpleMail::make()
    		->setTo($email, $name)
    		->setFrom($fromEmail, $fromName)
    		->setSubject($subject)
   		 ->setMessage($message)
   		 ->setReplyTo($replyEmail, $replyName)
   		 ->setHtml("thank-you.html")
   		 ->setWrap(100)
   		 ->send();

	
	
	}
	
?>
