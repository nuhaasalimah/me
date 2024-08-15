<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = "nuhaasalimah@gmail.com"; // Replace with your email
    $subject = "New Contact Form Submission";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "Content-Type: text/html; charset=UTF-8";

    // Email body
    $email_body = "
    <html>
    <head>
      <title>$subject</title>
    </head>
    <body>
      <h2>$subject</h2>
      <p><strong>Name:</strong> $fullname</p>
      <p><strong>Email:</strong> $email</p>
      <p><strong>Message:</strong><br>$message</p>
    </body>sxsx
    </html>
    ";

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "<script>alert('Message sent successfully!');</script>";
    } else {
        echo "<script>alert('Message could not be sent. Please try again later.');</script>";
    }
}
?>
