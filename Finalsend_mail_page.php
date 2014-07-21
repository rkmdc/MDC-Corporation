<?php
session_start();
if (!empty($_POST)) { 

$tomail = $_POST['email'];
$sendtoadmin = 'rishav.elex87@gmail.com';
$fromName = $_POST['fname'];
$subject = 'Job Application Request';
$lname = $_POST['lname'];
$contactno = $_POST['contactno'];
$address = $_POST['address'];

$from = "Rishav kumar";
$receive = "Hi,\r\n\r\n  We have received your mail.
Dear candidate:
                Thank You for applying at our company
                We will get back to you soon.";
$content .= "Following are the candidate details:\r\n Name: " . $fromName . "\r\n Contact Number: " . $contactno . "\r\n Email Id: " . $tomail ."\r\n  Address: " . $address;

$filename = $_FILES['pic']['name'];
        if(!empty($filename)){
            $attachment = chunk_split(base64_encode(file_get_contents($_FILES['pic']['tmp_name'])));
        }
        

        $boundary =md5(date('r', time())); 

    $headers = "From: Mdc Corporation info@mdccorp.in";
        $headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";
    
    $content="This is a multi-part message in MIME format.
    
--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

--_2_$boundary
Content-Type: text/plain; charset=\"iso-8859-1\"
Content-Transfer-Encoding: 7bit

$content

--_2_$boundary--
--_1_$boundary
Content-Type: application/octet-stream; name=\"$filename\" 
Content-Transfer-Encoding: base64 
Content-Disposition: attachment 

$attachment
--_1_$boundary--";

$flgchk=mail($tomail,"Application",$receive,$headers);

if ($flgchk) {
    mail($sendtoadmin, "Application", $content, $headers);
    header('Location: http://mdccorp.in/career.php');
    $_SESSION['result']=1;
} else {
    header('Location: http://mdccorp.in/career.php');
    $_SESSION['result']=0;
}


//for user mail
 
//$receive = "Hi,\r\n\r\n  We have received your mail.";

   
   
//for admin mail
/*$sendtoadmin = 'rishav.elex87@gmail.com';

//$content .= "Following are the candidate details:\r\n Name: " . $fromName . "\r\n Contact Number:  " . $contactno . "\r\n Email Id:" . $to ."\r\n  Address: " . $address;

$headersadmin= 'From: MDC corp';

        $mail_send = mail($tomail,"Application",$receive,$headers);
 	$mail_admin = mail($sendtoadmin,"Application",$content,$headersadmin);
 header( 'Location:http://mdccorp.in/career.php' ) ;*/

 
}



?>
