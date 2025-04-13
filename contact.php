<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "muralidharan25aug@gmail.com"; 
    $subject = "Message from Portfolio Contact Form";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $headers = "From: $email" . "\r\n";

    $fullMessage = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if(mail($to, $subject, $fullMessage, $headers)) {
        header("Location: thank-you.html");
    } else {
        echo "Message sending failed!";
    }
}
?>
