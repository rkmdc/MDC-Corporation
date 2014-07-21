<?php
    if(!empty($_POST))
    {
        //The form has been submitted, prep a nice thank you message
    	$output = '<h1>Thanks for your file and message!</h1>';
    	//Set the form flag to no display (cheap way!)
    	$flags = 'style="display:none;"';

    	//Deal with the email
    	$admin = 'rishav.elex87@gmail.com';
    	$subject = 'Job Application Request';
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $contactno = $_POST['contactno'];
        $to = $_POST['email'];
    	$address = $_POST['address'];
        $message = "$fname.$lname has applied for Job at MDC Careers
                    Following are the candidate details:
                    Name: $fname.$lname
                    Contact Number: $contactno
                    Email Address: $to
                    Address: $address";
    	$attachment = chunk_split(base64_encode(file_get_contents($_FILES['file']['tmp_name'])));
    	$filename = $_FILES['file']['name'];

    	$boundary =md5(date('r', time())); 

    	$headers = "From:rishav.elex87@gmail.com\r\nReply-To: mihir.thuse@gmail.com";
    	$headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";
        
    	$message="This is a multi-part message in MIME format.
                  
      
--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

--_2_$boundary
Content-Type: text/plain; charset=\"iso-8859-1\"
Content-Transfer-Encoding: 7bit

$message

--_2_$boundary--
--_1_$boundary
Content-Type: application/octet-stream; name=\"$filename\" 
Content-Transfer-Encoding: base64 
Content-Disposition: attachment 

$attachment
--_1_$boundary--";
        
        $usersubject = "Job Application Received";
        $usermessage = "Dear candidate
                        Thank You for applying at our company
                        We will get back to you soon.";
    	mail($admin, $subject, $message, $headers);
        mail($to, $usersubject, $usermessage, "From: $admin \r\n Reply-To: $admin \r\nReturn-Path: $admin\r\n");
  /*  echo "<p style='color: #FFFFFF;'>$attachment
          Thank you for your form submission</p>";*/
    }
   
   header('Location: http://corptwo.mdccorp.in/career.php');
?>