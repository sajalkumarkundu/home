<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['form-message'];

    // Set up email parameters
    $to = "sajalkundu1995@gmail.com.com";
    $subject = "Contact Form Submission";
    $headers = "From: $name <$email>";

    // Send the email
    mail($to, $subject, $message, $headers);

    // Optional: Redirect the user after sending the email
    header("Location: index.html");
} else {
    // Handle form submission error
    echo "Error: Form not submitted.";
}
?>