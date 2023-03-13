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
	$course = $_POST["message"];
	$subject = 'Wire Less Vision';	
    $todayis = date("l, F j, Y, g:i a") ; 
	$to = "#";
	$msg = "
	Subject :WIRE LESS VISION
	Name : $name
	Email : $email
	Phone : $phone 
	message: $message";	
$clientmsg = "Dear ".$name."
Thanks for the showing interest in Our Services.
 Our team will contact you to discuss your requirement and set an appointment.


Regards
Wire Less Vision
 +07710931305";
	
	if(mail($to, $subject, $msg,'From:#')){
			
		echo "<center><div align='center'>";
		echo  "<div align='center' class='feed'><a href='index.html'><img src='images/thank-you.jpg' border='0'></a><br><br><br>

		 Our team will contact you to discuss your requirement and set an appointment.<br>

		 To return to home page  <a href='index.html'> Click Here </a>.<br>
		 For Quick Response Call @ <a href='tel:+07710931305'> +07710931305</a> ";
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