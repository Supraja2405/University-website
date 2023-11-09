<?php
$name =$_POST['name'];
$visitor_email =$_POST['email'];
$subject=$_POST['subject'];
$message =$_POST['message'];

$email_from='admissions@reva.edu.in ';
$email_subject='New Form submission';
$emai_body="User Name: $name.\n".
            "User email:$visitor_emai.\n".
            "Subject: $subject.\n".
            "User Message:$visitor_email.\n";


$to='supraja8284@gmai.com';

$headers="From: $email_from \r\n";

$headers.="Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$emai_body,$headers);

header("location:contact.html");



?>