<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    
	
	$to      = 'muhammadnaufalp@students.undip.ac.id';
	$subject = 'Site Contact Form';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = 'Terima kasih. Segera kuperiksa 😊';
    }
	else{
		$res['message'] = 'Failed to send mail. Please mail me to muhammadnaufalp@students.undip.ac.id';
	}
	
	
	echo json_encode($res);
}

?>