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
              
				<div id="logo">
				<!--	<img src="images/vas_logo.png" /> -->
                  <a href="index.php">
                    	<img src="images/vas_logo_no_text.svg" height="100" />
                    </a>
				</div>

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
            
			</div>
			<div id="content">
              <h1>ABOUT</h1><br/>
              <p>The purpose of this organization shall be to establish and maintain in Virginia for scientific and educational purposes an association of persons and organizations interested in science and scientific research in all of its branches; to solicit financial and other support; to cooperate with educational institutions, industries, and state agencies in fostering an interest in scientific matters, in promoting scientific investigations and in spreading knowledge of the sciences; to provide a forum for the presentation and discussion of papers on scientific subjects and facilities for their publication; to provide opportunities for the cooperation and fellowship among its members; and generally, in doing these things, to benefit not only its own members, but to promote the civic, agricultural, academic, industrial, and commercial welfare of the people of Virginia.</p><br/>
              <a href="history.php">Click here for a look into Virgina Academy of Science History!</a><br/>
              <a href="council.php">2013-2014 VAS Council Members</a><br>
              <a href="constitution.php">2013-2014 VAS Constitution</a>


			</div>
			
			
		</div>
	</body>
</html>