<?php require_once('con-cot/con_file.php'); ?>
<?php
class email  extends DBConnection
{
	

public function contactUsMail($name,$email,$subject,$message){
							$to  ='support@segaminer.com';
							$subject =$subject;
							$content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h6 align="center"><img src="https://www.segaminer.com/images/sega-mining-site-logo.png" /></h6>
<div>
<p>
<strong>Client mail:</strong><br />
Name: '.$name.'<br />
Email: '.$email.'
</p>
<p> '.$message.'</p>
 </div>
</body>
</html>';
 $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: SEGA MINER <support@segaminer.com>' . "\r\n";
$headers .= 'From: <support@segaminer.com>' . "\r\n";
//header("location:fogetpassword/recover.php?id=$email&ip=$password");
$retval = @mail($to,$subject,$content,$headers);
if($retval = true){
	self::autoReplyMail($name,$email,$subject);
	return  $_SESSION['error'] = 'Mail sent successfully';
	}else{
	return $_SESSION['error'] = 'Internal error. Mail fail to send';
	}										
}


public function autoReplyMail($name,$email,$subj){
							$to  = $email;
							$subject ='AutoReply SEGA MINER->('.$subj.')';
							$message = 'Your message has been received. Thanks for contacting us. We will get back to you as soon as posible.';
							$content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h6 align="center"><img src="https://www.segaminer.com/images/sega-mining-site-logo.png" /></h6>
<div>
<p>
<strong>Hi '.$name.'</strong><br />
</p>
<p> '.$message.'</p>
<br />
<p> Best Regards<br />
Suppot Team
</p>
<br />
<p>For more detail contact us:<p>
<p>Email:info@segaminer.com</p>
<p>Phone: </p>
<p>Address: </p>
 </div>
</body>
</html>';
 $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: SEGA MINER  <info@segaminer.com>' . "\r\n";
$headers .= 'From: <info@segaminer.com>' . "\r\n";
//header("location:fogetpassword/recover.php?id=$email&ip=$password");
$retval = @mail($to,$subject,$content,$headers);
if($retval = true){
	return  $_SESSION['error'] = 'Mail sent successfully';
	}else{
	return $_SESSION['error'] = 'Internal error. Mail fail to send';
	}										
}

public function ActivateMail($email,$password){
							$to  = $email;
							 $subject = "SEGA MINER EMAIL ACTIVATION CENTER";
							$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h6 align="center"><img src="https://www.segaminer.com/images/sega-mining-site-logo.png" /></h6>
<div>
<p>Welcome to SEGA MINER EMAIL ACTIVATION CENTER<br />
Thanks for signing up with us. You are just one step to enjoying our numerous services.<br />
Email: '.$email.'
Password: ********
</p>
<p>Please follow the link to activate your mail "
<a href ="https://www.segaminer.com/ActivateMail/activate.php?id='.$email.'&ip='.$password.'">Activate Mail</a>"</p>
 </div>
</body>
</html>';
$header = "MIME-Version: 1.0" . "\r\n";
$header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$header .= 'From: SEGA MINER <support@segaminer.com>' . "\r\n";
//header("location:ActivateMail/activate.php?id=$email&ip=$password");
$retval = @mail($to,$subject,$message,$header);
if($retval = true){
return $_SESSION['error'] = 'Mail sent successfully';
}else{
return $_SESSION['error'] = 'Internal error. Mail fail to send';
}	
return $this;				
}



public function MailDispatcha($email,$message,$title){
							$to  = $email;
							 $subject = "News Update SEGA MINER (".date("Y-F-d").")";
							$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body style="background-color:#06E;">
<h6 align="center"><img src="https://www.segaminer.com/images/sega-mining-site-logo.png" /></h6>
<div style="width:80%; margin-left:10%; margin-right:10%; border: solid 1px #06C;">
<h1 style="color:#FFF;">'.$title.'</h1>
<hr >
<p style="color:#FFF;">'.$message.'</p>
p> Best Regards<br />
Suppot Team
</p>
<br />
<p>For more detail contact us:<p>
<p>Email:info@segaminer.com</p>
<p>Phone: </p>
<p>Address: </p>
 </div>
</body>
</html>';
$header = "MIME-Version: 1.0" . "\r\n";
$header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$header .= 'From: SEGA MINER <support@segaminer.com>' . "\r\n";
//header("location:ActivateMail/activate.php?id=$email&ip=$password");
$retval = @mail($to,$subject,$message,$header);
if($retval = true){
return $_SESSION['error'] = 'Mail sent successfully';
}else{
return $_SESSION['error'] = 'Internal error. Mail fail to send';
}	
return $this;				
}


public function forgetpassword($email,$tablename,$fieldname){
						$_SESSION['error'] = '';
						$credentialCheck = "SELECT * FROM $tablename WHERE  $fieldname = :adddata limit 1";
						$dbs = new DBConnection();
						$db = $dbs->DBConnections();
						$stmt  = $db->prepare($credentialCheck);
						$stmt->bindValue(':adddata', $email);
						if($stmt->execute()){
							$row = $stmt->fetch(PDO::FETCH_ASSOC);
							$password = $row['password'];
							$resetpassword_id = $row['forget_password_code'];
							$to  = $email;
							 $subject = "SEGA MINER FORGET PASSWORD RECOVERY";
							$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div>
<p>Welcome to SEGA MINER FORGET PASSWORD  RECOVERY</p>
<p>Please follow the link to reset your password "<a href ="https://www.segaminer.com/fogetpassword/recover.php?id='.$email.'&ip='.$password.'">Recover Password</a>"</p>
</div>
</body>
</html>';
 $header = "MIME-Version: 1.0" . "\r\n";
$header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$header .= 'From: SEGA MINER <support@segaminer.com>' . "\r\n";
header("location:fogetpassword/recover.php?id=$email&ip=$password&it=$resetpassword_id");
$retval = @mail($to,$subject,$message,$header);
if($retval = true){
	return $_SESSION['errorf'] = 'Mail sent successfully.<br> Check your Mail for Activation Link';
	}else{
	return $_SESSION['errorf'] = 'Internal error. Mail fail to send';
	}
}else{
	return $_SESSION['success'] = 'Invalid Email. Please ensure you typed it correctly';
	}						
}

}
$email_call = new email();
?>