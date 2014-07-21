<?php

if (!empty($_POST)) { 

    $to = $_POST['email'];
$fromEmail = 'Rishav kumar<rishav.elex87@gmail.com>';
$fromName = $_POST['fname'];
$subject = 'Job Application Request';
$lname = $_POST['lname'];
$contactno = $_POST['contactno'];
$address = $_POST['address'];


//for user mail
 
$receive = "Hi,\r\n\r\n  We have received your mail.";
$headers = 'From: Rishav Kumar ';
   
   
//for admin mail
$sendtoadmin = 'rishav.elex87@gmail.com';


    $message = "Following are the candidate details: " . $fromName  . " Contact Number:  " . $contactno . " Email:" . $to . " Address: " . $address;




$headersadmin= 'From: MDC corp';

        $mail_send = mail($to,"Application",$receive,$headers);
 	$mail_admin = mail($sendtoadmin,"Application",$message,$headersadmin);

 
}



?>