<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);
    $contact = htmlspecialchars($_POST["contact"]);
    $location = htmlspecialchars($_POST["location"]);

    // Construct email message
    $to = "asutoshpayasi2001@gmail.com"; 
    $subject = "New Form Submission - " . $subject;
    $messageBody = "Name: $name\nEmail: $email\nSubject: $subject\nContact: $contact\nLocation: $location\nMessage: $message";

    $headers = "From: $email";

    if (mail($to, $subject, $messageBody, $headers)) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false]);
    }
} else {
    echo json_encode(["success" => false]);
}
?>
