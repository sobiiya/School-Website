<!DOCTYPE html>
<html lang="en">

<head>
<?php include('include/head.php') ?>

</head>



<body onLoad="setTimeout('delayedRedirect()', 8000)" style="background-color:#fff;">
<?php
						$mail = $_POST['email'];
						$to = "test@domani.com";/* YOUR EMAIL HERE */
						$subject = "Admission from UDEMA";
						$headers = "From: Admission from UDEMA <noreply@yourdomain.com>";
						$message = "DETAILS\n";
						$message .= "\nFirst name: " . $_POST['firstname'];
						$message .= "\nLast name: " . $_POST['lastname'];
						$message .= "\nEmail: " . $_POST['email'];
						$message .= "\nTelephone: " . $_POST['telephone'];
						$message .= "\nEducation level: " . $_POST['education_apply'];
						$message .= "\nAge: " . $_POST['age'];
						$message .= "\nGender: " . $_POST['gender'] . "\n";
						$message .= "\nAddress: " . $_POST['address'];
						$message .= "\nCity: " . $_POST['city'];
						$message .= "\nZipcode: " . $_POST['zip_code'];
						$message .= "\nCountry: " . $_POST['country'] . "\n";
						$message .= "\nYour course preferences\n" ;
						foreach($_POST['preferences'] as $value) 
							{ 
							$message .=   "- " .  trim(stripslashes($value)) . "\n"; 
							};
						$message .= "\nAdditional message: " . $_POST['additional_message'];
						$message .= "\nTerms and conditions accepted: " . $_POST['terms'];
												
						//Receive Variable
						$sentOk = mail($to,$subject,$message,$headers);
						
						//Confirmation page
						$user = "$mail";
						$usersubject = "Thank You";
						$userheaders = "From: info@udema.com\n";
						/*$usermessage = "Thank you for your time. Your quotation request is successfully submitted.\n"; WITH OUT SUMMARY*/
						//Confirmation page WITH  SUMMARY
						$usermessage = "Thank you for your time. Your request is successfully submitted. We will reply shortly.\n\nBELOW A SUMMARY\n\n$message"; 
						mail($user,$usersubject,$usermessage,$userheaders);
	
?>
<!-- END SEND MAIL SCRIPT -->   

<div id="success">
    <div class="icon icon--order-success svg">
              <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                <g fill="none" stroke="#8EC343" stroke-width="2">
                  <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                  <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                </g>
              </svg>
     </div>
<h4><span>Request successfully sent!</span>Thank you for your time</h4>
<small>You will be redirect back in 5 seconds.</small>
</div>

</body>
</html>