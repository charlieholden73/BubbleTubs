<?php
   $to = "info@bubbletubs.uk"; // <– replace with your address here
   $subject = "BubbleTubs - Message from Web Site Contact Form";
   $message = $_POST['Message'];
   $name = $_POST['Name'];
   $from = $_POST['Email'];
   $headers = "From:" . $from;
   mail($to,$subject,$message,$headers);
   echo "Mail Sent.";
?>