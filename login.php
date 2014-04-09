<?php
	session_start();

	require_once('connect.php'); ///Ensures connection to the database

	
if ($_POST)
	{
  		
		$user_login_query = "SELECT * FROM user WHERE email = '".$_POST['email']."' 

AND password = '".$_POST['password']."'";
		$user_login_result = mysql_query($user_login_query);
		if (mysql_num_rows($user_login_result) === 1)
        	{
				$_SESSION['auth'] = true;
				header("Location: index.php");
        	}
		
	}
?>