<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["submit"])) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'ashishpal2203@gmail.com';
        $mail->Password   = 'lfle uaui buva kmzs';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom($_POST["email"], $_POST["name"]);
        $mail->addAddress('ashishpal2204@gmail.com');
        $mail->addReplyTo($_POST["email"], $_POST["name"]);

        $service = $_POST['service'];
        $extraFields = '';

        if ($service == 'travel') {
            $extraFields .= "<p><strong>Destination:</strong> {$_POST['destination']}</p>";
            $extraFields .= "<p><strong>Type of Visa:</strong> {$_POST['types_of_visa']}</p>";
        } elseif ($service == 'study') {
            $extraFields .= "<p><strong>Destination:</strong> {$_POST['destination']}</p>";
            $extraFields .= "<p><strong>Course Type:</strong> {$_POST['course_types']}</p>";
        } elseif ($service == 'coaching') {
            $extraFields .= "<p><strong>Selected Courses:</strong> " . implode(', ', $_POST['select_course']) . "</p>";
        } elseif ($service == 'passport') {
            $extraFields .= "<p><strong>Selected Service:</strong> {$_POST['select_a_service']}</p>";
        } elseif ($service == 'OCI') {
            $extraFields .= "<p><strong>Location:</strong> {$_POST['select_a_location']}</p>";
            $extraFields .= "<p><strong>Selected Service:</strong> {$_POST['select_a_service']}</p>";
        }

        $mail->isHTML(true);
        $mail->Subject = 'New Consultation Form Submission';
        $mail->Body    = "
            <h2>Consultation Form Submission</h2>
            <p><strong>Full Name:</strong> {$_POST['name']}</p>
            <p><strong>Email:</strong> {$_POST['email']}</p>
            <p><strong>Contact No:</strong>+{$_POST['code']} {$_POST['phone']}</p>
            <p><strong>Use as WhatsApp number:</strong> " . (isset($_POST['whatsapp_status']) ? 'Yes' : 'No') . "</p>
            <p><strong>Required Service:</strong> {$_POST['service']}</p>
            $extraFields
        ";

        $mail->send();
        echo "
        <script> 
            document.location.href = 'index.php?consultation';
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
