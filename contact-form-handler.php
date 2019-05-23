<?php
    $name = $_POST['name'];
    $visitor_email =$_POST['email'];
    $message = $_POST['message'];

    $email_from = $_POST['email']; // required
//    $email_from = 'info@genera.cr';
    
    $email_subject = 'Nuevo Mensaje de Página Genera';
    
    $email_body = "Nombre del Usuario: $name. \n".
                    "E-mail del Usuario: $visitor_email. \n".
                        "Mensaje del Usuario: $message. \n";
    
    $to = "asaavedra@gasehi.com";
    $headers = "From: $email_from \r\n";
    $headers = "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");
?>