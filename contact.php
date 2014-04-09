<?php
/*
This is where php goes
*/
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
          <div id="content" >
				<h1>CONTACT</h1>
            <br/><br/><br/>
            <p align="center" ><b>Email:</b> <br/><span style="line-height:16px" class="Style79"><a href="mailto:aconway@smv.org">aconway@smv.org</a></span></p><p align="center"><a href="mailto:vas@smv.org">vas@smv.org</a></p><p align="center"><a href="mailto:caconway@vcu.org">caconway@vcu.org</a></p><p style="line-height:14px;" class="Style32"><br style="line-height:23.25px"/></p><p align="center"><br style="line-height:23.25px"/></p><p align="center"><b>Phone Number:</b> <br/>804-864-1450</p><p align="center">804-864-1451</p>
            <br/><br/>
       <div style="margin: 4.32px 0px 4.32px 0px; "><p align="center" style="line-height:16px;margin-top:0px;margin-bottom:0px;" class="Style80">Virginia Academy of Science</p><p align="center" style="line-height:16px;margin-bottom:0px;margin-top:0px;" class="Style80">Science Museum of Virginia</p><p align="center" style="line-height:16px;margin-bottom:0px;margin-top:0px;" class="Style80">2500 West Broad Street</p><p align="center" style="line-height:16px;margin-bottom:0px;margin-top:0px;" class="Style80">Richmond, Virginia 23220</p>     </div>
			</div>
		</div>
	</body>
</html>