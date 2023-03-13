<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title></title>
<style type="text/css">
<!--
.feed
{font:normal 24px Verdana, Arial, Helvetica, sans-serif; color:#004490; padding:7px 0 5px 0px; text-align:center;}
.feed a
{color: #99CC00; text-decoration:none; }
-->
</style>
 
</head>
 
<body>
    
<?php  
if(!empty($_POST)){
    $name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$subject = $_POST["subject"];	
	$subject = 'EDU Claas';	
    $todayis = date("l, F j, Y, g:i a") ; 
	$to = "nitin@educlaas.com,shubham@orionsocial.com,shubhamchaudhary36@gmail.com";
	$msg = "
	Subject :EDU Claas ENQUIRY
	Name : $name
	Email : $email
	Phone : $phone 
	subject: $subject";		
$clientmsg = "Dear ".$name."
Thanks for the showing interest in Our Services.
 Our team will contact you to discuss your requirement and set an appointment.


Regards
EDU Class 
 +91 98922 97721";
	
	if(mail($to, $subject, $msg,'From:nitin@educlaas.com')){
			
		echo "<center><div align='center'>";
		echo  "<div align='center' class='feed'><a href='index.html'><img src='images/thank-you.jpg' border='0'></a><br><br><br>

		 Our team will contact you to discuss your requirement and set an appointment.<br>

		 To return to home page  <a href='https://learnings.ind.in/educlaas/'> Click Here </a>.<br>
		 For Quick Response Call @ <a href='tel:9892297721'> +91 98922 97721 </a> ";
		echo "  <br /></div></center> ";
		if(!empty($email)){
		mail($email, $subject, $clientmsg);
			?>
		
		<?php }	
				
	}else{
		echo "<center>
				<div align='center'>
					<a href='index.html'>
						<img src='img/error.png' widht='50px' height='50%'><br><br>
						Please submit again.
					</a>	
				</div>
			</center>
					";
	}
}else{
	echo "<center>
			<div align='center'>
				<a href='index.html'>
					<img src='img/error.png' widht='50px' height='50%'><br><br>
					Please submit again.
				</a>	
			</div>
		</center>
				";
	
}
?>

</body>
</html>