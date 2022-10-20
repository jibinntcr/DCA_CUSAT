<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    $name = $_POST['name']; // Get Name value from HTML Form
    $email = $_POST['email'];  // Get Email Value
    $subject = $_POST['subject'];  // Get Subject
    $phone = $_POST['phone'];  // Get Subject
    $message = $_POST['message']; // Get Message Value

    $output = "<html>
<body>
    <table style='width:600px;'>
        <tbody>
            <tr>
                <td style='width:150px'><strong>Name: </strong></td>
                <td style='width:400px'>$name</td>
            </tr>
            <tr>
                <td style='width:150px'><strong>Email ID: </strong></td>
                <td style='width:400px'>$email</td>
            </tr>
            <tr>
                <td style='width:150px'><strong>Phone: </strong></td>
                <td style='width:400px'>$phone</td>
            </tr>
            <tr>
                <td style='width:150px'><strong>Subject: </strong></td>
                <td style='width:400px'>$subject</td>
            </tr>
            <tr>
                <td style='width:150px'><strong>Message: </strong></td>
                <td style='width:400px'>$message</td>
            </tr>
        </tbody>
    </table>
</body>
</html>";
    $body = $output;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(true);
    //Server settings
    //    $mail->SMTPDebug = SMTP::DEBUG_SERVER;    
    $mail->SMTPDebug = false;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; //your host
    $mail->SMTPAuth = true;
    $mail->Username = 'apicsroomstudio@gmail.com';
    $mail->Password = 'iiqnqkrrtpjfutdk';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    //Recipients
    $mail->setFrom('apicsroomstudio@gmail.com');
    $mail->addAddress('jerryaksa97@gmail.com');
    //Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->send();
    echo '<script>alert("An email has been sent to you with instructions on how to reset your password")</script>';
    echo '<script>window.location = "contact.php";</script>';
}
