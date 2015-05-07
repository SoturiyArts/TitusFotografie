<?php 
$myemail = 'soturiyarts@gmail.com';//<-----Put Your email address here.
$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['comment']; 

	$to = $myemail; 
	$email_subject = "Eine Nachricht erhalten: $email_adress";
	$email_body = "Eine Nachricht erhalten. ".
	"Hier sind die Details:\n Name: $name \n Email: $email_address \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contact_send.html');

?>
