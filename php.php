<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "olaitanoke93@icloud.com"
    $subject = "Message from Ola's Coffee Shop";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Get the HTML file path
    $htmlFilePath = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    
    // Create the email body with a clickable link
    $email_body = "Name: $name\nEmail: $email\nMessage: $message\nHTML File: <a href='$htmlFilePath'>$htmlFilePath</a>";
    
    // Set email headers to ensure HTML content
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Send email
    mail($to, $subject, $email_body, $headers);

    // Redirect back to the contact page (you can customize this)
    header("Location: contact.php");
    exit();
}
?>