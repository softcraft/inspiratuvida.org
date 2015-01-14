<?php
// ADD YOUR INFOMATION HERE
$recipient = "guadalajara@inspira.ac";
$successPage = "index.html";
// NO NEED TO EDIT ANYTHING BELOW THIS LINE =====================//


//import form information
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$horario = $_POST['horario'];
$suscribir = $_POST['suscribir'];

$name=stripslashes($name);
$email=stripslashes($email);
$subject=stripslashes($subject);
$horario=stripslashes($horario);
$suscribir=stripslashes($suscribir);
$message=stripslashes($message);
$message= "Nombre: $name, \n\n Mensaje: $message, \n\n TEL: $subject, \n\n Horario: $horario, \n\n Suscribir?: $suscribir";

/*
Simple form validation
check to see if an email and message were entered
*/
//if no message entered and no email entered print an error
if (empty($message) && empty($email)){
print "No email address and no message was entered. <br>Please include an email and a message";
}
//if no message entered send print an error
elseif (empty($message)){
print "No message was entered.<br>Please include a message.<br>";
}
//if no email entered send print an error
elseif (empty($email)){
print "No email address was entered.<br>Please include your email. <br>";
}

//if the form has both an email and a message
else {

//mail the form contents
mail( "$recipient", "$subject", "$message", "From: $email" );
header("Location: $successPage");
}

?>