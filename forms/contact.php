<?php
// contact.php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Create a mail header
  $header = "From: $email\r\n";
  $header.= "Reply-To: $email\r\n";
  $header.= "MIME-Version: 1.0\r\n";
  $header.= "Content-Type: text/html; charset=UTF-8\r\n";

  // Create a mail body
  $body = "<h2>New Message from $name</h2>";
  $body.= "<p>Email: $email</p>";
  $body.= "<p>Subject: $subject</p>";
  $body.= "<p>Message: $message</p>";

  // Send the email
  $to = "shazilj50@gmail.com";
  $subject = "New Message from $name";
  if (mail($to, $subject, $body, $header)) {
    echo "Your message has been sent. Thank you!";
  } else {
    echo "Error sending email. Please try again.";
  }
}
?>