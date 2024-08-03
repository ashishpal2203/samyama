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
        $mail->Username   = 'samyama.in.leads@gmail.com';
        $mail->Password   = 'kgff qblt deqr zybt';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom($_POST["email"], $_POST["name"]);
        $mail->addAddress('info@samyama.in');
        $mail->addReplyTo($_POST["email"], $_POST["name"]);

        $service = $_POST['service'];
        $extraFields = '';

        if ($service == 'Travel Visas & Immigration') {
            $extraFields .= "<p><strong>Destination:</strong> " . filter_var($_POST['destination'], FILTER_SANITIZE_STRING) . "</p>";
            $extraFields .= "<p><strong>Type of Visa:</strong> " . filter_var($_POST['types_of_visa'], FILTER_SANITIZE_STRING) . "</p>";
        } elseif ($service == 'Study Abroad') {
            $extraFields .= "<p><strong>Destination:</strong> " . filter_var($_POST['destination'], FILTER_SANITIZE_STRING) . "</p>";
            $extraFields .= "<p><strong>Course Type:</strong> " . filter_var($_POST['course_types'], FILTER_SANITIZE_STRING) . "</p>";
        } elseif ($service == 'Coaching') {
            $extraFields .= "<p><strong>Selected Courses:</strong> " . implode(', ', array_map('filter_var', $_POST['select_course'], array_fill(0, count($_POST['select_course']), FILTER_SANITIZE_STRING))) . "</p>";
        } elseif ($service == 'Passport') {
            $extraFields .= "<p><strong>Selected Service:</strong> " . filter_var($_POST['select_a_service'], FILTER_SANITIZE_STRING) . "</p>";
        } elseif ($service == 'OCI') {
            $extraFields .= "<p><strong>Location:</strong> " . filter_var($_POST['select_a_location'], FILTER_SANITIZE_STRING) . "</p>";
            $extraFields .= "<p><strong>Selected Service:</strong> " . filter_var($_POST['select_a_service'], FILTER_SANITIZE_STRING) . "</p>";
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
