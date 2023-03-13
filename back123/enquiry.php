<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'mail@wirelessvision.co.uk';
    $mail->Password = 'Weblabz@2022#';
    $mail->setFrom('mail@wirelessvision.co.uk', 'wireless Vision');
    $mail->addAddress('wirelessvision@hotmail.com', 'wireless Vision');
    if ($mail->addReplyTo($_POST['email'], $_POST['name'],$_POST['phone'], $_POST['model'],$_POST['message'])){
        $mail->Subject = 'PHPMailer contact form';
        $mail->isHTML(false);
        $mail->Body = <<<EOT
Email: {$_POST['email']}
Name: {$_POST['name']}
Phone: {$_POST['phone']}
Model No: {$_POST['model']}
Message No: {$_POST['message']}
EOT;
        if (!$mail->send()) {
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = '<center style="font:normal 24px Verdana, Arial, Helvetica, sans-serif; color:#004490; padding:7px 0 5px 0px; text-align:center;"><img src="assets/img/thankyou.jpg" border="0"></a><br>
	Someone from our office will call you with in 24 hours to set an
		 appointment date and time with you, according to your own convenience.</center>';
        }
		
    } else {
        $msg = 'Share it with us!';
    }
	echo $msg;
?>
