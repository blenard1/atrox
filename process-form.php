<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    // Send email (you may need to configure your server for this)
    $to = "atroxsolution@gmail.com"; // Replace with your email address
    $headers = "From: $email\r\nReply-To: $email\r\n";
    $mailBody = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";


    mail($to, $subject, $mailBody, $headers);

    // For demonstration purposes, print the data to the screen
    echo "<h2>Form Submission Successful</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Subject: $subject</p>";
    echo "<p>Message: $message</p>";
} else {
    // Redirect to the contact form if accessed directly
    header("Location: Contact.html");
    exit();
}
?>
