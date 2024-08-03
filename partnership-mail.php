<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Debug POST data
// var_dump($_POST);

if (isset($_POST["submit"])) {

    // Create an instance of PHPMailer and enable exceptions
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'mail.samyama.in';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'leads@samyama.in';
        $mail->Password   = 'Goodleads@123';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;


        // Recipients
        $mail->setFrom('leads@samyama.in', 'Samyama Contact');
        $mail->addAddress('ashish@gravityweb.in');
        $mail->addReplyTo(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL), filter_var($_POST['name'], FILTER_SANITIZE_STRING));

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'New Partnership Form Submission';
        $mail->Body    = "
            <h2>Partnership Form Submission</h2>
            <p><strong>Company/University:</strong> {$_POST['company_name']}</p>
            <p><strong>Contact Person:</strong> {$_POST['contact_person_name']}</p>
            <p><strong>Email:</strong> {$_POST['email']}</p>
            <p><strong>Contact No:</strong>+{$_POST['code']}  {$_POST['phone']}</p>
            <p><strong>Use as WhatsApp number:</strong> " . (isset($_POST['whatsapp_status']) ? 'Yes' : 'No') . "</p>
            <p><strong>Message:</strong> {$_POST['message']}</p>
        ";

        // Send the email
        $mail->send();
        echo "
        <script> 
            document.location.href = 'partner-with-us.php?partnership';
        </script>
        ";
    } catch (Exception $e) {
        echo "
        <script> 
            alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
        </script>
        ";
    }
}
?>
