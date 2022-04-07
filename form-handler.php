<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$eamil_form = "C:\AllProjects\\xampp\htdocs\html-css-prj06042022";

$eamil_subject = "New Form Submission";

$eamil_body = "User Name: $name.\n" .
  "User Email: $visitor_email.\n" .
  "User Subject: $subject.\n" .
  "User Message: $message.\n";

$to = "naimulpromo@gmail.com";

$headers = "From: $eamil_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

if (mail($to, $eamil_subject, $eamil_body, $headers)) {
  // echo "Your message has been sent successfully!";
  header("Location: thankyou.html");
} else {
  // echo "Error! Your message could not be sent!";
  header("Location: contact.html");
}
