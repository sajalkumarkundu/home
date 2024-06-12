<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['form-message'];

$to = 'sajalkundu1995@gmail.com';
$subject = 'Contact Form Submission';
$message = 'Name: ' . $name . "\r\n" . 'Email: ' . $email . "\r\n" . 'Message: ' . $message;

$headers = 'From: ' . $email;

if (mail($to, $subject, $message, $headers)) {
    echo 'Message sent successfully!';
} else {
    echo 'Error sending message.';
}
?>