<?php

require("class.phpmailer.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name']; // Get Name value from HTML Form
    $email = $_POST['email'];  // Get Email Value
    $subject = $_POST['subject'];  // Get Subject
    $phone = $_POST['phone'];  // Get Subject
    $message = $_POST['message']; // Get Message Value

    $emailid  = ""; // Your Email ID
    $mail = new PHPMailer();

    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com"; // Your Domain Name

    $mail->SMTPAuth = true;
    $mail->Port = 587;
    $mail->Username = ""; // Your Email ID
    $mail->Password = ""; // Password of your email id

    $mail->From = "";
    $mail->AddAddress(""); // On which email id you want to get the message
    $mail->AddCC($emailid);

    $mail->IsHTML(true);

    $mail->Subject = "$subject"; // This is your subject

    // HTML Message Starts here

    $message = "
        <html>
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
        </html>
        ";
    // HTML Message Ends here
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    //$headers .= 'Content-type: text/html; charset=iso-8859-1' ."\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From:' . $emailid . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    $headers .= 'Reply-To: ' . $emailid . "\r\n";
    //$message = $htmlcontent;

    //$message = "hi";
    //mail($emailid, "Kontakt", $message, $headers);
    //mail("franciepetere@gmail.com","My subject","hi");


    if (mail($emailid, "Enquiry From Web", $message, $headers)) {
        // Message if mail has been sent
        echo "<script>
               
				alert('Form Submitted successfully.');
				window.location.href = 'contact.php';
            </script>";
    } else {
        // Message if mail has been not sent
        echo "<script>
                 alert('Submission failed.');
				 window.location.href = 'contact.php';
            </script>";
    }
    // header("Location: index.php?success=1");
}
