<?php
/*	
	if( empty( $_POST['token'] ) ){
		echo '<span class="notice">Error!</span>';
		exit;
	}
	if( $_POST['token'] != 'FsWga4&@f6aw' ){
		echo '<span class="notice">Error!</span>';
		exit;
	}
	
	$name = $_POST['name'];
	$from = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = stripslashes( nl2br( $_POST['subject'] ) );
	$message = stripslashes( nl2br( $_POST['message'] ) );
	
	$headers ="From: Form Contact <$from>\n";
	$headers.="MIME-Version: 1.0\n";
	$headers.="Content-type: text/html; charset=iso 8859-1";
	
	ob_start();
	?>
		Hi imransdesign!<br /><br />
		<?php echo ucfirst( $name ); ?>  has sent you a message via contact form on your website!
		<br /><br />
		
		Name: <?php echo ucfirst( $name ); ?><br />
		Email: <?php echo $from; ?><br />
		Phone: <?php echo $phone; ?><br />
		Subject: <?php echo $subject; ?><br />
		Message: <br /><br />
		<?php echo $message; ?>
		<br />
		<br />
		============================================================
	<?php
	$body = ob_get_contents();
	ob_end_clean();
	
	$to = 'debojyotidas9294@gmail.com';

	$s = mail($to,$subject,$body,$headers,"-t -i -f $from");

	if( $s == 1 ){
		echo '<div class="success"><i class="fas fa-check-circle"></i><h3>Thank You!</h3>Your message has been sent successfully.</div>';
	}else{
		echo '<div>Your message sending failed!</div>';
	}

	*/
$conn=mysqli_connect("localhost","root","","ccjitterss");
$emid=$_POST['email'];
$q="SELECT Email from registration where Email='$emid'";
$r=mysqli_query($conn,$q);
$k=mysqli_fetch_array($r);
$nm=$k['Name'];
if($k['Email']==$emid)
{
	$rad=rand(100,1000);
	$q2="UPDATE registration set Code='$rad' where Email='$emid'";
	mysqli_query($conn,$q2);
	$to_email =$_POST['email'];
	$subject = "RESET PASSWORD FROM RMS";
	$body = " Hello,$nm. Please not down your code for resetting your password.Code is $rad. Click here to reset your password http://localhost/rms/recover.php";
	$headers = "From: ccjitters21@gmail.com";
	
	if (mail($to_email, $subject, $body, $headers))
	{
		echo ' <script type="text/javascript">
		alert(" Mail Sent!!");
		location="login.php";
		</script>';
	} 
	else {
		echo ' <script type="text/javascript">
		alert("Failed!! Try Again :(");
		location="login.php";
		</script>';
	}
}
else
{
	echo ' <script type="text/javascript">
		alert("No Registered Email Found... :(");
		location="login.php";
		</script>';	
}

?>
