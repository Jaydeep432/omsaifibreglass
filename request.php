<?php

$to = 'jay27deep@gmail.com';
$subject = 'TEST MAIL';

$message = 'Name :'. $_POST['Fname']. " \n ";
$message .='Email Address :'. $_POST['Email']. " \n ";
$message .= 'Subject :'. $_POST['Subject']. " \n ";
$message .= 'Message :'. $_POST['Message']. " \n ";


 $headers = "MIME-Version: 1.0";
   $headers .= "Content-type:text/html;charset=UTF-8";
   $headers .= "From: New Client";
 

mail( $to, $subject, $message, $headers);


?>
