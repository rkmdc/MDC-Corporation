<?php
if (!empty($_POST)) { 

    $to = $_POST['email'];
$fromEmail = 'Rishav kumar<rishav.elex87@gmail.com>';
$fromName = $_POST['fname'];
$subject = 'Job Application Request';
$lname = $_POST['lname'];
$contactno = $_POST['contactno'];
$address = $_POST['address'];

 
$receive = "Hi,\r\n\r\n  We have received your mail.";



 
    $message = "Hi " . $fromEmail . " , " . $fromName . " ," . $subject . " ," . $lname . " ," . $contactno . " ," . $address . ",\r\n\r\n We have received your mail.\r\n We will contact you shortly\r\n\r\nThanks and Regards,\r\n\r\n Paure Salon and Academy Team\r\n\r\nDisclaimer & Privilege Notice: This e-Mail may contain proprietary, privileged and confidential information and is sent for the intended recipient(s) only. If, by an addressing or transmission error, this mail has been misdirected to you, you are requested to notify us immediately by return email message and delete this mail and its attachments. You are also hereby notified that any use, any form of reproduction, dissemination, copying, disclosure, modification, distribution and/or publication of this e-mail message, contents or its attachment(s) other than by its intended recipient(s) is strictly prohibited. Any opinions expressed in this email are those of the individual and may not necessarily represent those of Pure Salon Before opening attachment(s), please scan for viruses.\r\n\r\n  Please, Do not Reply to this mail.\r\n\r\n  You received this mail from \r\n\r\nhttp://puresalon.co.in/courses.php";

$headers = 'From: Rishav Kumar <rishav.elex87@gmail.com>'  .
    'X-Mailer: PHP/' . phpversion();






    

    $mail_send = mail($to,"Application",$receive,$headers);

}
?>