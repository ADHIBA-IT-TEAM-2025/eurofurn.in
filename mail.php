<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Address: $address \n Message: $message";
$recipient = "online@eurofurn.in";
$subject = "Online Enquiry";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You for submitting the form. We will get back to you soon!" . " -" . 
"<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
