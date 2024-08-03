<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($name) && !empty($message)) {
        // Create an instance of PHPMailer and enable exceptions
        $mail = new PHPMailer(true);

        try {
            // Server settings
            // $mail->SMTPDebug = 2; 
            $mail->Host       = 'mail.samyama.in';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'leads@samyama.in';
            $mail->Password   = 'Goodleads@123';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            // Recipients
            $mail->setFrom('leads@samyama.in', 'Samyama Contact');
            $mail->addAddress('ashish@gravityweb.in');
            $mail->addReplyTo($email, $name);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New Feedback Form Submission';
            $mail->Body    = "
                <h2>Feedback Form Submission</h2>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Contact No:</strong> $phone</p>
                <p><strong>Message:</strong> $message</p>
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
            // Log error to a file
            error_log('Mailer Error: ' . $mail->ErrorInfo);
            echo "
            <script> 
                alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
            </script>
            ";
        }
    } else {
        echo "
        <script> 
            alert('Invalid form submission. Please check your inputs.');
        </script>
        ";
    }
}
?>
