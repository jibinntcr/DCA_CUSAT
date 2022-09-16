<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

//get data from form  
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = "dcaoffice@cusat.ac.in";
$subject = "Mail From website";
$txt = "Name : " . $name . "\r\n Phone Number : " . $phone . "\r\n email : " . $email . "\r\n Subject : " . $subject . "\r\n Message : " . $message;
$headers = "From: dcahod@cusat.ac.in \r\n";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
    echo "<script>alert('Thank you! Your Enquiry has been submitted successfully');document.location='contact.php'</script>";
}
//redirect
// header("Location:contact.php");
