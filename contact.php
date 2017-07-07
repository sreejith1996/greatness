<?php

session_start();

require 'libs/phpmailer/PHPMailerAutoload.php';

require 'libs/phpmailer/class.phpmailer.php';

require 'libs/phpmailer/class.smtp.php';

$errors = array();

if (isset($_POST['name'], $_POST['email'], $_POST['message'])){
	
	$fields = array(
		'name' => $_POST['name'],
		'email' => $_POST['email'],
		'message' => $_POST['message']
	);
	
	foreach($fields as $field => $data){
		if (empty($data)){
				$errors[] = 'The '.$field .' field is required '; 
	
		}
	}
	if(empty($errors)){
			
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'imap';
$mail->SMTPAuth = true;
$mail->Host = 'mx.000webhost.com'; // "ssl://smtp.gmail.com" didn't work
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
// or try these settings (worked on XAMPP and WAMP):
// $mail->Port = 587;
// $mail->SMTPSecure = 'tls';
 
$mail->SMTPDebug  = 2;
 
$mail->Username = "poetikjustis@greatness.co.in";
$mail->Password = "sreejith123";
 
$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.
 
$mail->From = "poetikjustis@greatness.co.in";
$mail->FromName = "Contact";
 
$mail->addAddress("poetikjustis@greatness.co.in","Poetik");
 
			$mail->Subject = 'Contact form submitted ';
			$mail->Body ='From: '.$fields['name'].'('. $fields['email'].')<p>'. $fields['message'].'</p>';
			
			
			if($mail->Send()){
				
				
				header('Location: thanks.php');
				die();
			}else{
				$errors[] ='Sorry , could not send email . Try again  later'; 
			}
	
	}
}else {
	$errors[] = 'Something went wrong';
}

$_SESSION['errors'] = $errors;
$_SESSION['fields'] = $fields;
header('Location: contactus.php');
?>