<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Mobile_number'];
    
    $to = "timonya@gutorka.com"; // Change this to your email address
    $subject = "New Form Submission";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    
    $headers = "From: gutorkaolga@gmail.com"; // Change this to your website's email address
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your submission!";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>