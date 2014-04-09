<?php

//defined( '_JEXEC' ) or die( 'Restricted access' );

require_once('connect.php'); ///Ensures connection to the database
  
  
  
//Gather information from the database
$sql="SELECT * FROM user where ID='1' ORDER BY ID DESC";
$result=mysql_query($sql);

if ($_POST)
	{
  		
		$user_login_query = "SELECT * FROM user WHERE email = '".$_POST['email']."' 

AND password = '".$_POST['password']."'";
		$user_login_result = mysql_query($user_login_query);
		if (mysql_num_rows($user_login_result) === 1)
        	{
				$_SESSION['auth'] = true;
        	}
		
	}

	
?><!-- End of PHP -->
<!doctype html>

<html lang="gb-en" >
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
          	.kwicks > li {
            	position: relative;
            	width: 100%;
            }

            .kwicks > li > .kwicks-banner {
            	width: 100%;
			    height: 100px;
    			background: #000;
    			background: rgba(0,0,0,0.5);
    			color: #fff;
    			display: ;
    			position: absolute;
    			bottom: 0;
    			left: 0;
    			padding: 5px;
    			font-family: Roboto;
				font-weight: 200;
				font-size: 20pt;
            }

            .kwicks > li > .kwicks-caption {
            	width: 100%;
			    height: 60px;
    			color: #fff;
    			display: none;
    			position: absolute;
    			bottom: 5px;
    			left: 0;
    			padding: 5px;
    			font-family: Roboto;
				font-weight: 200;
				font-size: 16pt;
				border-top: 1px solid #ffffff;
            }
        </style>
      <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script type='text/javascript' src='menu_jquery.js'></script>
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
              
              	$container.on('expand.kwicks', function(e, data) {
					console.log(data);
					if (data.expanded)
					{
						$(data.expanded).find('.kwicks-caption').slideDown();
						$('.kwicks-expanded').find('.kwicks-caption').slideUp();
					}
					else
					{
						$('.kwicks-caption').slideUp();
					}
				});

				$( "#dialog-form" ).dialog({
      				autoOpen: false,
      				height: 300,
      				width: 350,
      				modal: true,
      				buttons: {
        				"Login": function() {
                          $("#user-login").submit();
                          
        				},
        				"Cancel": function() {
        		 		 $( this ).dialog( "close" );
       			 		}
      				},
      				"close": function() {

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
              <?php if (isset($_SESSION['auth'])) : ?>
              	<div style="right"><a href="logout.php">Logged In</a></div>
              <?php else : ?>
				<div class="login-button">member login <span style="font-size: 8pt">&#9660</span></div>
			  <?php endif; ?>	
              	<div id="dialog-form" title="Member Login">
				
				 
					<form id="user-login" method="post" action="login.php">
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
          <div id="header"> 
            
				<div id="navigation">
					<a href="about.php">about</a>
					<a href="membership.php">membership</a>
					<a href="events.php">events</a>
					<a href="grants_scholarships.php">grants & scholarships</a>
					<a href="journals.php">journals</a>
					<a href="contact.php">contact</a>
				</div>
				<div id="logo">
				<!--	<img src="images/vas_logo.png" /> -->
					<a href="index.php">
                    	<img src="images/vas_logo_final.svg" height="200" />
                    </a>
				</div>
            <!--
               <div id="search">
                  <form method="get" action="http://www.google.com/search"> 
				<input type="text" name="q" size="50" maxlength="255" value="" placeholder="Type Any Keywords"/>
				<input type="submit" value="Search" /><br>
				<input type="checkbox" style="display:none" name="sitesearch" value="#" checked>
                 </form><br />
				</div>
   
            <div id="social">
              <h2>
                <center><u>Social Media</u></center>
              </h2><br />
					<a href="index.php"><img src="templates/vas/images/facebook.png" height="50" /></a> 
                    <a href="index.php"><img src="templates/vas/images/twitter.png" height="50" /></a>
                    <a href="index.php"><img src="templates/vas/images/youtube.png" height="50" /></a>
				</div>
            <div id="topnav">
                  <ul>
                    <li><a href="templates/vas/about.php">about</a><br />
          				<ul>
                          <li><a href="templates/vas/history.php">History</a></li>
                          <li><a href="templates/vas/council.php">Council Members</a></li>
          				</ul>
        			</li>
                    <li><a href="templates/vas/membership.php">membership</a></li>
                    <li><a href="templates/vas/events.php">events</a></li>
                    <li><a href="templates/vas/grants_scholarships.php">grants & scholarships</a></li>
                    <li><a href="templates/vas/journals.php">journals</a><br />
                      <ul>
                          <li><a href="templates/vas/styleManual.php">Style Manual</a></li>
          				</ul>
                    </li>
                    <li><a href="templates/vas/contact.php">contact</a></li>
                  </ul>
            	</div> -->
			</div> 
			
			<div id="audience">
				<ul id="kwicks" class="kwicks kwicks-horizontal">
					<li>
                     	<img src="images/1.png" />
                      	<div class="kwicks-banner">Middle & High School Students</div>
						<div class="kwicks-caption">Take advantage of scholarship opportunties as a middle or high school student.</div>
                  	</li>
					<li>
                      	<img src="images/2.png" />
                      	<div class="kwicks-banner">Undergraduate Students</div>
						<div class="kwicks-caption">Already in college? Look for scholarship opportunities that could beneift you.</div>
                  	</li>
					<li>
                      	<img src="images/3.png" />
                      	<div class="kwicks-banner">Graduate Students</div>
						<div class="kwicks-caption">Research grants and scholarships are available for your graduate school endeavors.</div>
                  	</li>
					<li>
                      	<img src="images/4.png" />
                      	<div class="kwicks-banner">Faculty</div>
						<div class="kwicks-caption">Not enough funding for your latest research project? See what grants the Virginia Academy of Science has for you.</div>
                  	</li>
					<li>
                      	<img src="images/5.png" />
                      	<div class="kwicks-banner">General Public</div>
						<div class="kwicks-caption">Take advantage of our numerous events and opportunities. Become a member today!</div>
                  	</li>
				</ul>
			</div>
		</div>
      
	</body>
</html>
