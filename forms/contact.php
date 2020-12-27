<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */


$name = $_POST['name'];
$email = $_POST['email'];
$subjecte = $_POST['subject'];
$message = $_POST['message'];

 
  // Replace contact@example.com with your real receiving email address
  $message = "
							<html>
							<head>
							<title> Cridentials Email </title>
							</head>
							<body>
							 
							 	<div style='background:#eee; border-radius:2px;height:50%;padding:15px;'>
							<strong>Hi  - Below is your Account Cridentials </strong>
							<p style='font-weight:normal'>Following is your Information.</p>
							<table>


							<tr>
							<td style='font-weight:bold;'>
							Full Name  :
							</td>

							<td>
								$name
							</td>
							</tr>


							<tr>
							<td style='font-weight:bold;'>
							User Email :
							</td>

							<td>
								$email
							</td>
							</tr>

							<tr>
							<td style='font-weight:bold;'>
							User Subject :
							</td>

							<td>
								$subjecte
							</td>
							</tr>
							
							<tr>
							<td style='font-weight:bold;'>
							 Message :
							</td>

							<td>
								$message
							</td>
							</tr>




							</table>
							<p style='color:#cc0000;font-weight:bold;'>
							PLEASE DO NOT REPLY TO THIS EMIAL
							</p>
							</div>
							 		

							</body>
							</html>
							";
							
							
							// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  $email = 'awais.javaid17@gmail.com';


$headers .= 'From: <myportfolio@awaise.com>' . "\r\n";

  
  $email = mail($email,$subjecte,$message,$headers);
if($email){
    echo "<script> window.location.href='thanks.php'; </script>";
}

?>
