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
    $firstname = $_POST["name"];
    $lastname = $_POST["lname"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$course = $_POST["course"];	
    $date = $_POST["date"];
    $location = $_POST["location"];
    $pincode = $_POST["pincode"];
    $mnumber = $_POST["mnumber"];
    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $fnumber = $_POST["fnumber"];
    $moccupation = $_POST["moccupation"];
    $foccupation = $_POST["foccupation"];
	$address = $_POST["address"];
	$subject = 'IHMCS';	
    $todayis = date("l, F j, Y, g:i a") ; 
	$to = "mohitbhatt91@gmail.com";
	$msg = "
	Subject :IHMCS
	First Name : {$firstname}<br>
    Last Name : {$lastname}<br>
	Email : {$email}<br>
	Phone : {$phone}<br>
    Date Of Birth : {$date} <br>
    Course: {$course}<br>
    Location : {$loctaion}<br>
    Pincode : {$pincode}<br>
    Father Name : {$fname}<br>
    Father Number : {$fnumber}<br>
    Father Occupation {$foccupation}<br>
    Mother Name : {$mname}<br>
    Mother Number : {$mnumber}<br>
    Mother Occupation {$moccupation}<br>
	Address : {$address}	<br>
Dear {$name}<br>
Thanks for the showing interest in Our Course.
 Our Team will contact you to discuss your requirement and set an appointment.


Regards
IHMCS
 +91 98922 97721
 <table><tbody><tr><td>Class</td>
 <td>Year of Passing</td>
 <td>Institution</td>
 <td>Board</td>
 <td>Percentage/Grade</td>
</tr>
<tr>
 <td> 10th </td>
 <td> {$yop} </td>
 <td> {$institution} </td>
 <td> {$board} </td>
 <td> {$marks} </td>
</tr>
<tr>
 <td>12th</td>
 <td> {$yop1} </td>
 <td> {$institution1} </td>
 <td> {$board1} </td>
 <td> {$marks1} </td>
</tr>
</tbody>
</table>
";
$clientmsg = "Dear {$name}
Thanks for the showing interest in Our Course.<br>
 Our Team will contact you to discuss your requirement and set an appointment.<br>
<br>
<br>
Regards<br><br>
IHMCS
 +91 98922 97721";	
if(mail($to, $subject, $msg,'From:mohitbhatt91@gmail.com')){
			
    echo "<center><div align='center'>";
    echo  "<div align='center' class='feed'><a href='index.html'><img src='assets/img/thank-you.jpg' border='0'></a><br><br><br>

     Our team will contact you to discuss your requirement and set an appointment.<br>

     To return to home page  <a href='https://ihmcsdelhi.org'> Click Here </a>.<br>
     For Quick Response Call @ <a href='tel:8285148778'> +91 8285148778 </a> ";
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