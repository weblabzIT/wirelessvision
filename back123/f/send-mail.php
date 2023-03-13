
<?php
require('phpmailer/class.phpmailer.php');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$text = $name . '<br /> ' . $email . '<br />' .$phone.'<br />'.$subject.'<br />' .$message.'<br />' . $_POST['text'];

$from = 'vikascallwpi@gmail.com';
$to = 'vikascallwpi@gmail.com';
$gmailPass = 'Fbd@2020';

$mail = new PHPMailer();
$mail->IsSMTP();
// enable SMTP authentication
$mail->SMTPAuth = true;
// sets the prefix to the server
$mail->SMTPSecure = "ssl";
// sets GMAIL as the SMTP server
$mail->Host = 'smtp.gmail.com';
// set the SMTP port
$mail->Port = '465';
$mail->Mailer   = "POP3";
$mail->Username = $from;
// GMAIL password
$mail->Password = $gmailPass;
$mail->From = $from;
$mail->FromName = $from;
$mail->AddReplyTo($from, $from);
$mail->Subject = $subject;
$mail->Body = $text;
$mail->MsgHTML($text,$phone,$message);
$mail->IsHTML(true);
$mail->AddAddress($to, $to);

if(!$mail->Send()){
    echo $mail->ErrorInfo;
}else{
     echo '<center style="font:normal 24px Verdana, Arial, Helvetica, sans-serif; color:#004490; padding:7px 0 5px 0px; text-align:center;"><img src="image/thank-you.jpg" border="0"></a><br>
	Someone from our office will call you  with in 24 hours to set an
		 appointment date and time with you, according to your own convenience.</center>';
    $mail->ClearAddresses();
    $mail->ClearAttachments();
}
?>