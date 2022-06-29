<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'jarvisrider@gmail';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                  "User Email: $email.\n".
                  "User Subject: $subject.\n". 
                  "User Message: $message.\n";

    $to_email	= "jarvisrider@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Really-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
?>