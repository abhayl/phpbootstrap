<?php

$errorMSG = "";
 
// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}
 
// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}
 
// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "abhayl@cybage.com";
$Subject = "New Message Received";
$Body = "";
// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
 
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
 
// send email
try{
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
} catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}
 
?>