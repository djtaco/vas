<?php
	
	require_once('connect.php'); ///Ensures connection to the database

	// Initialize PHP Mailer
	require_once('libraries/gmail.php');

	$current_date = time();
	$plus_one_month = date("Y-m-d", strtotime("+1 month", $current_date));

	$auto_email_query = "SELECT user.email, membership_time.membership_expire FROM user
							JOIN membership_time ON membership_time.user_id = user.id
							WHERE DATE_FORMAT(membership_time.membership_expire, '%Y-%m-%d') = '".$plus_one_month."'
	";

	$auto_email_result = mysql_query($auto_email_query);


	while ($user = mysql_fetch_array($auto_email_result))
	{
		$message = "<p>Your membership is about to expire on ".date("F j, Y", strtotime($user['membership_expire'])).". Please take any necessary actions to renew your membership.";

		$mail->isHTML(true);  
		$mail->From = 'from@example.com';
		$mail->FromName = 'Virginia Academy of Science';
		$mail->addAddress($user['email']);  // Add a recipient
		$mail->addReplyTo('info@example.com', 'Information');
		$mail->Subject    = "Account Expiring";
		$mail->Body       = $message;
		if(!$mail->send()) 
		{
		   echo 'Message could not be sent.';
		   echo 'Mailer Error: ' . $mail->ErrorInfo;
		   exit;
		}
	}

?>