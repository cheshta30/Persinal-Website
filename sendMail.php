<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Set up email parameters
    $to = 'cheshta.nagpal3009@gmail.com';
    $subject = 'New message from your website';
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = 'From: ' . $email;

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Failed to send message. Please try again later.';
    }
} else {
    echo 'Invalid request method.';
}
?>
