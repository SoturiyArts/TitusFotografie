<?php 
$myemail = 'soturiyarts@gmail.com';//<-----Put Your email address here.
$vname = $_POST['vname'];
$nname = $_POST['nname'];
$email_address = $_POST['email']; 
$workshop = $_POST['workshop'];
$styling = $_POST['styling'];
$anzahlp = $_POST['anzp'];
$gespreis = $_POST['gespreis'];
$termin = $_POST['termin'];
$message = $_POST['comment']; 

	$to = $myemail; 
	$email_subject = "Workshop-Buchung von: $email_adress";
	$email_body = "Eine Workshop-Buchung ist eingegangen. ".
	"Hier die Details:\n Vorname: $vname \n Nachname: $nname \n Email: $email_address \n Workshop: $workshop \n Styling?: $styling \n Anzahl Personen: $anzahlp \n Gesamtpreis: $gespreis \n Wunschtermin: $termin \n\n Anmerkungen: \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: index.html');

?>
