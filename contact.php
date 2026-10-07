<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = strip_tags($_POST["name"]);
    $email   = strip_tags($_POST["email"]);
    $message = strip_tags($_POST["message"]);

    $to      = "info@glitzdetailing.co.uk"; // 
    $subject = "New enquiry from $name";
    $body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: noreply@yourdomain.com\r\n Reply-To: $email";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: thank-you.html"); // redirect on success
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
}
?>