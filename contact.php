<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'muhammed.nazim.official@gmail.com';

    $email_subject = "New Form Submission";

    $email_body =   "Username: $name. \n";
                    "Email: $visitor_email. \n";
                    "Message: $message. \n";

    $to = "muhammed.nazim.official@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers = "Reply-to: $visitor_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.html");
    ?>