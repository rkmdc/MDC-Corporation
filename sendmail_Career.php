<?php
session_start();
$to = $_POST['email'];
$fromEmail = 'Rishav kumar<rishav.elex87@gmail.com>';
$fromName = $_POST['fname'];
$subject = 'Job Application Request';
$lname = $_POST['lname'];
$contactno = $_POST['contactno'];
$address = $_POST['address'];
$message = "$fromName $lname has applied for Job at MDC Careers
	Following are the candidate details:
	Name: $fromName $lname
	Contact Number: $contactno
	Email Address: $to
	Address: $address";


/* GET File Variables */
$tmpName = $_FILES['pic']['tmp_name'];
$fileType = $_FILES['pic']['type'];
$fileName = $_FILES['pic']['name'];

/* Start of headers */
$headers = "From: $to";

if (file($tmpName)) {
    /* Reading file ('rb' = read binary)  */
    $file = fopen($tmpName, 'rb');
    $data = fread($file, filesize($tmpName));
    fclose($file);

    /* a boundary string */
    $randomVal = md5(time());
    $mimeBoundary = "==Multipart_Boundary_x{$randomVal}x";

    /* Header for File Attachment */
    $headers .= "\nMIME-Version: 1.0\n";
    $headers .= "Content-Type: multipart/mixed;\n";
    $headers .= " boundary=\"{$mimeBoundary}\"";

    /* Multipart Boundary above message */
    $message .= "This is a multi-part message in MIME format.\n\n" .
           "--{$mimeBoundary}\n" .
            "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
           "Content-Transfer-Encoding: 7bit\n\n" .
            $message . "\n\n";

    /* Encoding file data */
    $data = chunk_split(base64_encode($data));

    /* Adding attchment-file to message */
    $message .= "--{$mimeBoundary}\n" .
            "Content-Type: {$fileType};\n" .
            " name=\"{$fileName}\"\n" .
            "Content-Transfer-Encoding: base64\n\n" .
           $data . "\n\n" .
            "--{$mimeBoundary}--\n";
}

$flgchk = mail("$fromEmail", "$subject", "$message", "$headers");

$usersubject = "Job Application Received";
$usermessage = "Dear candidate
                        Thank You for applying at our company
                        We will get back to you soon.";

mail($to, $usersubject, $usermessage, "From: $fromEmail \r\n Reply-To: $fromEmail \r\nReturn-Path: $fromEmail\r\n");


if ($flgchk) {
    header('Location: http://mdccorp.in/career.php');
    $_SESSION['result']=1;
} else {
    header('Location: http://mdccorp.in/career.php');
    $_SESSION['result']=0;
}
?>

