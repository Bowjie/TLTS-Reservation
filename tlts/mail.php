<?php

  $headers  = "From: testsite < bojiastilla11@gmail.com >\n";
    // $headers .= "Cc: testsite < mail@testsite.com >\n"; 
    // $headers .= "X-Sender: testsite < mail@testsite.com >\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    //$headers .= "X-Priority: 1\n"; // Urgent message!
    // $headers .= "Return-Path: mail@testsite.com\n"; // Return path for errors
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1\n";
$to      = "bojiastilla11@gmail.com";
        $subject = 'Password Reset Link ( clevertechie.com )';
        $message_body = 'Hello ';
  // if(mail($to, $subject, $message_body,$headers)){
  // 	echo "sent";
  // }else{
  // 	echo "error";
  // }

        error_reporting(E_ALL ^ E_NOTICE); 

  echo mail($to, $subject, $message_body,$headers);
?>