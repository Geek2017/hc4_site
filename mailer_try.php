<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require './src/Exception.php';
require './phpmailer/PHPMailerAutoload.php';
// require './src/SMTP.php';   

    if( !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"])){

        $name = strip_tags(trim($_POST["name"]));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        $mail = new PHPMailer();   
        $mail->isSMTP();         

        //Server settings
        $mail->SMTPDebug = 0;                                           // Enable verbose debug output
        $mail->SMTPAuth   = true;                                       // Enable SMTP authentication
        $mail->Host       = 'smtp.gmail.com';                           // Specify main and backup SMTP servers
        $mail->SMTPSecure = 'tls';                                      // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                        // TCP port to connect to

        $mail->Username   = 'jakembalbedina@gmail.com';                 // SMTP username
        $mail->Password   = 'Secret123;';                               // SMTP password

        //Recipients
        $mail->setFrom('jakembalbedina@gmail.com', 'PacificBlueIT');    // FROM:
        $mail->addAddress($email, $name);                               // TO: Add a recipient

        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = "New contact from $name";
        $mail->Body    = $message ;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message has been sent";
        }
    }

    else if ( empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Oops! There was a problem with your submission. Please complete the form and try again.";
        exit;
    }
 ?>