<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Create an instance of PHPMailer and enable exceptions
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'samyama.in.leads@gmail.com';
        $mail->Password   = 'kgff qblt deqr zybt';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Recipients
        $mail->setFrom($_POST["email"], $_POST["name"]);
        $mail->addAddress('feedback@samyama.in');
        $mail->addReplyTo($_POST["email"], $_POST["name"]);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Feedback Form Submission';
        $mail->Body    = "
            <h2>Feedback Form Submission</h2>
            <p><strong>Name:</strong> {$_POST['name']}</p>
            <p><strong>Email:</strong> {$_POST['email']}</p>
            <p><strong>Contact No:</strong> {$_POST['phone']}</p>
            <p><strong>Message:</strong> {$_POST['message']}</p>
        ";

        // Send the email
        $mail->send();
        echo "
        <script> 
            alert('Thank you for your feedback!'); 
            document.location.href = 'index.php';
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
