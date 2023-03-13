<?php
session_start();
if ( isset($_POST['guvenlikKodu']) && $_POST['guvenlikKodu'] ){
 $guvenlikKontrol = false;
 if ( $_POST['guvenlikKodu'] == $_SESSION['guvenlikKodu'] ){
 $guvenlikKontrol = true;
 } 
 if ( $guvenlikKontrol ){

$text=$_POST['text'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$web=$_POST['web'];
$domain=$_SERVER['HTTP_HOST'];
$ipadress=$_SERVER['REMOTE_ADDR'];
$date = date("d.m.Y"); 
$time = date("H:i:s"); 	
require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host     = "smtp.hostinger.in"; // SMTP servers
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "noreply@imperopetro.com";  // SMTP username
$mail->Password = "Fbd@2020"; // SMTP password
$mail->From     = "noreply@imperopetro.com"; // it must be a match with SMTP username
$mail->Fromname = "Impero Petro Tools"; // from name
$mail->AddAddress("noreply@imperopetro.com","Impero Petro Tools"); // SMTP username , Name Surname
$mail->Subject  =  $_POST['subject'];
$content = "<h2>You have a message from $domain</h2>  <p><b>Name:</b>$name</p> <p><b>E-Mail:</b>$email</p> <p><b>Phone:</b>$phone</p> <p><b>Subject:</b>$subject</p> <p><b>Website: $web</b> </p> <p><b>Message:</b>$text</p> <p><h5>Date: $date . $time </h5></p> <p><h5>IP Adress of User: $ipadress</h5> </p><p><h5>This message sent by SMTP-PHP-Contact-Form kocakmhmt</h5></p>";
$mail->MsgHTML($content);
if(!$mail->Send())
{
   echo "<center>Error! Its wrong!</center>";
   echo "Mailer Error: " . $mail->ErrorInfo;
    echo "<center><p><input type='submit' onclick='gostergizle();' value='Back' /></p></center>";
   exit;
}
echo "<center>Thank you! Your message has reached us! <p><input type='submit' onclick='gostergizle();' value='Back' /></p></center>";
 } else {
 echo "<center>Please check Security Code! <p><input type='submit' onclick='gostergizle();' value='Back' /></p></center>";
 }
}
?>
