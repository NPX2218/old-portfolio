<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['subject'];
    $continent = $_POST['continent'];
    $email_subject = "New Form Submission";

    $email_body = "Username: $name.\n".
                    "User-Email: $email.\n".
                        "User Message: $message.\n".
                            "User Continent: $continent.\n";

    $to = "neelbansal@zohomail.com";

    $mailheader = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";
    mail($to,$email_subject,$email_body,$mailheader);
    header("Location: index.html");
?>
