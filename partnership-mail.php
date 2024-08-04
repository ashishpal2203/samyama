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
        $mail->isSMTP();                                      // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                 // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                             // Enable SMTP authentication
        $mail->Username   = 'samyama.in.leads@gmail.com';
        $mail->Password   = 'kgff qblt deqr zybt';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;      // Enable implicit SSL encryption
        $mail->Port       = 465;                              // TCP port to connect to

        // Recipients
        $mail->setFrom($_POST["email"], $_POST["contact_person_name"]); // Sender email and name
        $mail->addAddress('partners@samyama.in');                   // Add a recipient
        $mail->addReplyTo($_POST["email"], $_POST["contact_person_name"]); // Reply to sender email

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
