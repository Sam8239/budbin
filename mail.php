<?php
error_reporting(0);
session_start();
if(isset($_REQUEST['subject']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$datee=$_POST['date'];
$timee=$_POST['time'];
$message=$_POST['message'];
			
$to="support@budbin.com";
$From =" budbin@budbin.co.in";
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
      $headers .= 'To: '.$From . "\r\n";
      $headers .= 'From: '.$From."\r\n";

$contents = '<table width="100%" border="1" cellpadding="5">';
$content.='<tr><h2>member/volunteer form</h2></tr>';   
$contents.= '<tr><td width="29%"><p><h2>ENQUIRY </h2></p></td><td width="71%"><h2>FORM</h2></td></tr>'; 

$contents.= '<tr><td><strong> Name: </strong></td><td>'.$name.'</td></tr>';
$contents.= '<tr><td><strong> Email: </strong></td><td>'.$email.'</td></tr>';

$contents.= '<tr><td><strong> Phone: </strong></td><td>'.$phone.'</td></tr>';
$contents.= '<tr><td><strong> Date: </strong></td><td>'.$datee.'</td></tr>';
$contents.= '<tr><td><strong> Time: </strong></td><td>'.$timee.'</td></tr>';
$contents.= '<tr><td><strong> Message: </strong></td><td>'.$message.'</td></tr>';

$contents.='</table>';
$subject1=$_POST['subject'];;
mail($to,$subject1,$contents,$headers);
$mess="Thank you for contacting us.";
    echo "<script type='text/javascript'>" .
				"alert('Thank you for contacting us.');". 
				"window.location.href='contact.html';" .
				"</script>";
    
			
		
}

?>
C/#&4A!^br6
u537550616_data
