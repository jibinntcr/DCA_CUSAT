<?php
if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $to = "dipinrajc@gmail.com";
    $subject = "Book Recommendation.";
    $message = "Author Name : " . $name . ", Publisher/ISBN : " . $isbn .", Title : ". $title;
    $headers = "From: dca library" . "\r\n"; // Sender's Email
// Message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
   if(mail($to, $subject, $message, $headers))
	   
    header("Location:book-recommendation.php");
	    header("Location:index.php");
}
?>
