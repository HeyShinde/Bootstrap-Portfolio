<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // You can add additional validation and processing here

    // Send email (replace 'your_email@example.com' with your actual email address)
    $to = "shindeaditya05291@gmail.com";
    $headers = "From: $email\r\nReply-To: $email";
    $mailBody = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

    mail($to, $subject, $mailBody, $headers);

    // Respond to the client-side with a success message
    echo "success";
} else {
    // If the request method is not POST, redirect to the home page or handle the error accordingly
    header("Location: ../index.html"); // Change the URL as needed
    exit;
}
?>
