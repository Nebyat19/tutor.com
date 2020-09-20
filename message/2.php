<?php  
$name =$_post['name'];
$visitor_email= $_post['email'];
$message =$_post['message'];
$email_from ='nebyat77bekele@yahoo.com';
$email_subject = "new form sumission";
$email_body ="user Name: $name.\n";
                     "user email: $visitor_email.\n";
                     user message: $message .\n";

$to= "nebyat77bekele@yahoo.com";
$headers = "from: $email_from  \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: 1.html");

?>       