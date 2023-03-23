<?php
$name=$_POST['Name'];
$visitors_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['Message'];


$email_from='info@yourwebsite.com';

$email_subject='New Form Submission';

$email_body="User Name:$Name./n".
             "User email:$visitor_email./n".
             "subject:$subject./n".
             "User Message:$Message./n".;

$to='landageurmila2019@gmail.com';

$headers="Form:$email_form \r\n";

$headers .="Replay_To:$Visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers)

header("Location:contact.html")

?>