<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$problem = $_POST['problem'];
$message = $_POST['message'];

$email_from = 'outandout15@gmail.com';

$email_subject = 'New form submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                "Problem: $problem.\n".
                 "User Message: $message.\n";


$to = 'ws@gmail.com';

$headers = "Form: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: samcon.html");



?>