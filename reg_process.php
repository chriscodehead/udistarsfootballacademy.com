<?php require_once('library.php'); ?>
<?php require_once('lib/basic-functions.php'); ?>
<?php require_once('emails_lib.php'); ?>
<?php
if (isset($_POST['subcribe_email'])) {
	$subcribe_email = $_POST['subcribe_email'];
	if (!empty($subcribe_email)) {
		$check = $cal->checkifdataExists($subcribe_email, 'email', $user_tb);
		if ($check == 1) {
			print '!Oop email address already exist in the systems record!';
		} else {
			$username = uniqid();
			$email = $subcribe_email;
			$feilds = array('id', 'user_code', 'email', 'client_username');
			$value = array(null, $bassic->randGenerator(), $email, $username);
			$result = $cal->insertDataB($user_tb, $feilds, $value);
			if ($result == 'Registration was successful. Proceed to login!') {
				print 'Congratulations! Your email subscription was successful!';
			} else {
				print 'Your email subscription failed! Try again';
			}
		}
	} else {
		print 'Enter a valid email!';
	}
}

if (isset($_POST['emailfgt'])) {
	$emailfgt = $_POST['emailfgt'];
	if (!empty($emailfgt)) {
		$check = $cal->checkifdataExists($emailfgt, 'email', $user_tb);
		if ($check == 1) {
			print $email_call->forgetpassword($emailfgt, $user_tb, 'email');
		} else {
			print '!Oop email address dose not exist in the systems record!';
		}
	} else {
		print 'Enter a valid email!';
	}
}

if (isset($_POST['cotactmail'])) {
	$fname = $_POST['name'];
	$sname = $_POST['sname'];
	$name = $fname . ' ' . $sname;
	$phone = $_POST['phone'];
	$email = $_POST['cotactmail'];
	$subject = ucfirst(strtolower($name)) . ' Contacted you! and wants to chat';
	$message = $_POST['message'];
	if (!empty($_POST['cotactmail']) && !empty($_POST['message'])) {
		print $email_call->contactUsMail($name, $phone, $email, $subject, $message);
	} else {
		print  'Please fill all fields';
	}
}

if (isset($_POST['appointmentMail'])) {
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$subject = ucfirst(strtolower($name)) . ' Books Appointment!';
	$message = $_POST['message'];
	$datepicker = $_POST['datepicker'];
	$doctor = $_POST['doctor'];
	$department = $_POST['department'];
	if (!empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['phone']) && !empty($_POST['name']) && !empty($_POST['datepicker'])) {
		print $email_call->appointmentMail($name, $phone, $email, $subject, $message, $doctor, $datepicker, $department);
	} else {
		print  'Please fill all fields';
	}
}
?>