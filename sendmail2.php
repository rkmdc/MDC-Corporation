<?php
session_start();
if (!empty($_POST)) {

    $to = 'info@mdccorp.in';
    $email = $_POST['email'];
    $name = $_POST['name'];
    $comment = $_POST['message'];
    $subject = $_POST['subject'];
    $content = "$name  sent you a message from your enquiry form:\r\n\n";
    $content .= "Name: $name \n\nSubject: $subject \n\nContact Reason: $comment \n\nEmail: $email \n\n";
    $flgchk = mail($to, $subject, $content, "From: $email \r\n Reply-To: $email \r\nReturn-Path: $email\r\n");
    if ($flgchk) {
        header('Location: http://mdccorp.in/contact.php');
$_SESSION['result']=1;
    } else {
        header('Location: http://mdccorp.in/contact.php');
$_SESSION['result']=0;
    }
}
?>