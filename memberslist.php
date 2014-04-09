<?php
require_once('connect.php');

$sql="SELECT * FROM user";
$result=mysql_query($sql);
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
		   <center>
<table width="90%" style="border:4px solid #FFFFFF" align="center" cellpadding="3" cellspacing="1" bgcolor="#ffffff">


<tr style="border:4px solid #FFFFFF">
<td  align="center" bgcolor="#CBCFB5"><strong>ID</strong></td>
<td  align="center" bgcolor="#CBCFB5"><strong>First Name</strong></td>
<td  align="center" bgcolor="#CBCFB5"><strong>Middle Name</strong></td>
<td  align="center" bgcolor="#CBCFB5"><strong>Last Name</strong></td>
<td  align="center" bgcolor="#CBCFB5"><strong>Email</strong></td>  
<td  align="center" bgcolor="#CBCFB5"><strong>Membership Start</strong></td>
<td  align="center" bgcolor="#CBCFB5"><strong>Membership Expire</strong></td>
<td  align="center" bgcolor="#CBCFB5"><strong>Membership Type</strong></td>
  </tr>
  
<?php
while($rows=mysql_fetch_array($result)){ 
  $sql2="SELECT * FROM membership_time where user_id = ".$rows['ID']."";
$result2=mysql_query($sql2);
  $rows2=mysql_fetch_array($result2);
  $sql3="SELECT * FROM membership_levels where id = ".$rows2['member_level']."";
$result3=mysql_query($sql3);
  $rows3=mysql_fetch_array($result3);
  $currenttime= time();
  ?>
 
<tr style="border:1px solid #FFFFFF">
  <td bgcolor="#FFFFFF" align="center" style="border:1px border:solid border:#FFFFFF padding:10px"><?php echo $rows['ID']; ?></td>
<td BORDERCOLOR="FFFFFF" align="center" bgcolor="#FFFFFF"><?php echo $rows['Fname']; ?></td>
<td BORDERCOLOR="FFFFFF" align="center" bgcolor="#FFFFFF"><?php echo $rows['Mname']; ?></td>
<td BORDERCOLOR="FFFFFF" align="center" bgcolor="#FFFFFF"><?php echo $rows['Lname']; ?></td>
<td BORDERCOLOR="FFFFFF" align="center" bgcolor="#FFFFFF"><?php echo $rows['email']; ?></td>  
 <td BORDERCOLOR="FFFFFF" align="center" bgcolor="#FFFFFF"><?php echo $rows2['membership_start']; ?></td>
<?php
if ($currenttime > strtotime($rows2['membership_expire']))
{?>  
  <td BORDERCOLOR="FFFFFF" align="center" bgcolor="#000000"><FONT COLOR="#FF0040"><?php echo $rows2['membership_expire']; ?></FONT></td>
  <?php } ?>
<?php
if ($currenttime < strtotime($rows2['membership_expire']) )
{?>  
  <td BORDERCOLOR="FFFFFF" align="center" bgcolor="#000000"><?php echo $rows2['membership_expire']; ?></td>
  <?php } ?>  
  
<td BORDERCOLOR="FFFFFF" align="center" bgcolor="#FFFFFF"><?php echo $rows3['name']; ?></td>  
</tr>

<?php
// Exit looping and close connection
}
mysql_close();
?>
</table>
</center>
			</div>
			
			
		</div>
	</body>
</html>


