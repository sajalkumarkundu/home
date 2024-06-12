<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['form-message'];
$to = "sajalkundu1995@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@sajalkundu.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>