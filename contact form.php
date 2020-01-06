<?php
$name = $_post['name'];
$visitor_emil = $_COOKIEPOST['email'];
$message = $_POST['message'];


$email_from = 'Sophiagoodrich14@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name :$name.\n"<div 

$to = "sophiagoodrich14@gmail.com";

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Locarion: index.html");

?>