<?php
/*
This is where php goes
*/
?>
<!doctype html>


<html lang="en">
	<head>
<script language="javascript" type="text/javascript">
function jump(form) {
var myindex=form.menu.selectedIndex
if (form.menu.options[myindex].value != "0") 
{
window.open(form.menu.options[myindex].value, 
target="right pane");
}
}
//-->
</script>
      
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
      </div>
			<div id="content" align="center">
             
				
              <table align="center" border="1" style="color:#FFFFFF">
<tr>
	<td width="220px" >
	    <h1>History</h1>
		        <form name="lissamenu2" ACTION=URI>
				<select name="menu" onchange="jump(this.form)">
         <option selected="selected" value="styles/right_pane.php">Please choose:</option> 
				
				<option  value="PDFs/history/Ch-1.pdf">Webb Chapter One</option>
				<option  value="PDFs/history/Ch-2.pdf">Webb Chapter Two</option>
				<option  value="PDFs/history/Ch-3.pdf">Webb Chapter Three</option>
                <option  value="PDFs/history/Ch-4.pdf">Webb Chapter Four</option>
				<option  value="PDFs/history/Ch-5.pdf">Webb Chapter Five</option>
                <option  value="PDFs/history/Ch-6.pdf">Webb Chapter Six</option>
				<option  value="PDFs/history/chap1.pdf">Staggers and Flory Chapter One</option>
				<option  value="PDFs/history/chap2.pdf">Staggers and Flory Chapter Two</option>
				<option  value="PDFs/history/chap3.pdf">Staggers and Flory Chapter Three</option>
				<option  value="PDFs/history/chap4.pdf">Staggers and Flory Chapter Four</option>
                <option  value="PDFs/history/chap5.pdf">Staggers and Flory Chapter Five</option>
                <option  value="PDFs/history/chap6.pdf">Staggers and Flory Chapter Six</option> 
                <option  value="PDFs/history/chap7.pdf">Staggers and Flory Chapter Seven</option> 
				<option  value="PDFs/history/chap7.pdf">Staggers and Flory Chapter Eight</option>
                <option  value="PDFs/history/Concl.pdf">Staggers and Flory Conclusion</option>  
                <option value="PDFs/history/append.PDF">Staggers and Flory Appendix</option>  
                <option  value="PDFs/history/biblio.pdf">Staggers and Flory Bibliography</option>
                  </select>
				</form><br />
	
	</td>
    </tr>
	<tr>	
	<!-- Iframe -->
     <td>
		<iframe src="css/right_pane.php" name="right pane" allowtransparency="true" width="800px" height="900px" zoom="100%" frameborder="1"><p>Your browser does not support iframes.</p></iframe>
	</td>
</tr>
</table>
 
			
		</div>
	</body>
</html>