<?php
// Initialize PHP Mailer
require_once('libraries/gmail.php');



/*
This is where php goes
*/
$fname=$_POST['firstname'];
$mname=$_POST['middlename'];
$lname=$_POST['lastname'];
$email = $_POST['email'];
$pass=$_POST['pass'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$membership = $_POST['membership'];
$hash = md5( $email);
require_once('connect.php');


mysql_query("INSERT INTO user (fname, mname, lname, password, email, address, city, state, zip, phone) VALUES(
'". mysql_real_escape_string($fname) ."',
'". mysql_real_escape_string($mname) ."',
'". mysql_real_escape_string($lname) ."',
'". mysql_real_escape_string($pass) ."',
'". mysql_real_escape_string($email) ."',
'". mysql_real_escape_string($street) ."',
'". mysql_real_escape_string($city) ."',
'". mysql_real_escape_string($state) ."',
'". mysql_real_escape_string($zip) ."',
'". mysql_real_escape_string($phone) ."') ") or die(mysql_error());

mysql_query("INSERT INTO reg_hash (user_email,hash) VALUES(
'". mysql_real_escape_string($email) ."',
'". mysql_real_escape_string($hash) ."') ") or die(mysql_error());

if ($membership == 1)
{
  
  $memID = mysql_result(mysql_query("SELECT ID FROM user where email = '".$email."' "), 0);
  $start = date('Y-m-d');
  $end = date('Y-m-d', strtotime('+1 year'));
  mysql_query("INSERT INTO membership_time (user_id, membership_start,membership_expire,member_level) VALUES(
'". $memID ."',
'". mysql_real_escape_string($start) ."',
'". mysql_real_escape_string($end) ."',
'". mysql_real_escape_string($membership) ."') ") or die(mysql_error());
  
}
if ($membership == 2)
{
    $memID = mysql_result(mysql_query("SELECT ID FROM user where email = '".$email."' "), 0);
  $start = date('Y-m-d');
  $end = date('Y-m-d', strtotime('+1 year'));
  mysql_query("INSERT INTO membership_time (user_id, membership_start,membership_expire,member_level) VALUES(
'". $memID ."',
'". mysql_real_escape_string($start) ."',
'". mysql_real_escape_string($end) ."',
'". mysql_real_escape_string($membership) ."') ") or die(mysql_error());
  
}
if ($membership == 3)
{
    $memID = mysql_result(mysql_query("SELECT ID FROM user where email = '".$email."' "), 0);
  $start = date('Y-m-d');
  $end = date('Y-m-d', strtotime('+1 year'));
  mysql_query("INSERT INTO membership_time (user_id, membership_start,membership_expire,member_level) VALUES(
'". $memID ."',
'". mysql_real_escape_string($start) ."',
'". mysql_real_escape_string($end) ."',
'". mysql_real_escape_string($membership) ."') ") or die(mysql_error());
  
}
if ($membership == 4)
{
    $memID = mysql_result(mysql_query("SELECT ID FROM user where email = '".$email."' "), 0);
  $start = date('Y-m-d');
  $end = date('Y-m-d', strtotime('+1 year'));
  mysql_query("INSERT INTO membership_time (user_id, membership_start,membership_expire,member_level) VALUES(
'". $memID ."',
'". mysql_real_escape_string($start) ."',
'". mysql_real_escape_string($end) ."',
'". mysql_real_escape_string($membership) ."') ") or die(mysql_error());
  
}
if ($membership == 5)
{
    $memID = mysql_result(mysql_query("SELECT ID FROM user where email = '".$email."' "), 0);
   $start = date('Y-m-d');
  $end = date('Y-m-d', strtotime('+15 years'));
  mysql_query("INSERT INTO membership_time (user_id, membership_start,membership_expire,member_level) VALUES(
'". $memID ."',
'". $start ."',
'". $end ."',
'". mysql_real_escape_string($membership) ."') ") or die(mysql_error());
  
}
if ($membership == 6)
{
    $memID = mysql_result(mysql_query("SELECT ID FROM user where email = '".$email."' "), 0);
  $start = date('Y-m-d');
  $end = date('Y-m-d', strtotime('+1 year'));
  mysql_query("INSERT INTO membership_time (user_id, membership_start,membership_expire,member_level) VALUES(
'". $memID ."',
'". mysql_real_escape_string($start) ."',
'". mysql_real_escape_string($end) ."',
'". mysql_real_escape_string($membership) ."') ") or die(mysql_error());
  
}
if ($membership == 7)
{
    $memID = mysql_result(mysql_query("SELECT ID FROM user where email = '".$email."' "), 0);
  $start = date('Y-m-d');
  $end = date('Y-m-d', strtotime('+1 year'));
  mysql_query("INSERT INTO membership_time (user_id, membership_start,membership_expire,member_level) VALUES(
'". $memID ."',
'". mysql_real_escape_string($start) ."',
'". mysql_real_escape_string($end) ."',
'". mysql_real_escape_string($membership) ."') ") or die(mysql_error());
  
}
if ($membership == 8)
{
    $memID = mysql_result(mysql_query("SELECT ID FROM user where email = '".$email."' "), 0);
  $start = date('Y-m-d');
  $end = date('Y-m-d', strtotime('+1 year'));
  mysql_query("INSERT INTO membership_time (user_id, membership_start,membership_expire,member_level) VALUES(
'". $memID ."',
'". mysql_real_escape_string($start) ."',
'". mysql_real_escape_string($end) ."',
'". mysql_real_escape_string($membership) ."') ") or die(mysql_error());
  
}

//$to = $email;
//$subject = 'New Member Registration';
$message = '




<p>Thanks for signing up for the Virginia Academy of Science!<br>

Your account has been created. <br>
You can login with the following credentials after you have activated your account by pressing the button below.<br></p>


<p>Username: '.$email.'<br>
Password: '.$pass.'<br></p>

<p>
Please click this link to activate your account:<br>
<a href="http://411vas.cs.odu.edu:8080/vast/templates/vas/verify.php?hash='.$hash.'">Activate</a>

</p>

';
//$headers  = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$mail->isHTML(true);  
$mail->From = 'from@example.com';
$mail->FromName = 'Virginia Academy of Science';
$mail->addAddress($email);  // Add a recipient
$mail->addReplyTo('info@example.com', 'Information');
$mail->Subject    = "New Member Registration";
$mail->Body       = $message;
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
//mail($to, $subject, $message, $headers);


?>
<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>The Virginia Academy of Science</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/jquery.kwicks.min.css">
		<link rel="stylesheet" href="css/smoothness/jquery-ui-1.10.4.custom.min.css" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,100italic,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
		<style type='text/css'>
            .kwicks {
                height: 300px;
                border: 5px solid #ffffff;
                background-color: #ffffff;
            }
        </style>
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
		<script type="text/javascript" src="js/accordionImageMenu-0.4.min.js"></script>
		<script type="text/javascript" src="js/jquery.kwicks.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				var $container = $('.kwicks').kwicks({
					minSize : 70,
					spacing: 5,
                    behavior: 'menu'
				});

				$( "#dialog-form" ).dialog({
      				autoOpen: false,
      				height: 300,
      				width: 350,
      				modal: true,
      				buttons: {
        				"Login": function() {
          				
        				},
        				Cancel: function() {
        		 		 $( this ).dialog( "close" );
       			 		}
      				},
      				close: function() {

      				}
    			});

				$( ".login-button" ).click(function() {
        			$( "#dialog-form" ).dialog( "open" );
      			});



			});
		</script>
		
	</head>
	<body>
		<div id="container">
			<div id="login">
				<div class="login-button">member login <span style="font-size: 8pt">&#9660</span></div>
				<div id="dialog-form" title="Member Login">
				
				 
					<form>
				 		<fieldset>
				    		<label for="email">Email</label>
				    		<input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all"><br>
				    		<label for="password">Password</label>
				    		<input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all">
						</fieldset>
					</form>
                  <p><a href="forgot.php">Forgot your password?</a></p><br />
					<p>Not a member yet? <a href="sign_up.php">Sign up now!</a></p>
				</div>
			</div>
			<div id="sub-header">
				<div id="sub-navigation">
					<ul>
                      <li class="selected"><a href="about.php">about</a><br /><br />
          				<ul>
                          <li><a href="history.php">History</a></li>
                          <li><a href="council.php">Council Members</a></li>
          				</ul>
        			</li>
                    <li><a href="membership.php">membership</a></li>
                    <li><a href="events.php">events</a></li>
                    <li><a href="grants_scholarships.php">grants & scholarships</a></li>
                    <li><a href="journals.php">journals</a><br /><br />
                      <ul>
                          <li><a href="styleManual.php">Style Manual</a></li>
          				</ul>
                    </li>
                    <li><a href="contact.php">contact</a></li>
                  </ul>
				</div>
	
				<div id="logo">
					<!-- <img src="images/vas_logo.png" /> -->
                  <a href="index.php"><img src="images/vas_logo_no_text.svg" height="100" /></a>
				</div>
			</div>
			<div id="content">
			<h1>
              <?php echo  $membership  ?>
              </h1>
			</div>
			
			
		</div>
	</body>
</html>