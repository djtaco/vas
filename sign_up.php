<?php
/*
This is where php goes
*/

require_once('connect.php');
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
                 <form action="register.php" method="post">
                   <table>
                     <tr><td><h1>Sign Up</h1><br /></td></tr>
                     <tr>
                       <td>
                         First name:<br/><input type="text" placeholder="First Name" name="firstname"><br><br>
				 
                         Middle name:<br/><input type="text" placeholder="Middle Name" name="middlename"><br><br>
                   
                         Last name:<br /><input type="text" placeholder="Last Name" name="lastname"><br><br>
                   
                         Email:<br/><input type="text" placeholder="Email Address" name="email"><br><br>
                   
                         Password:<br/><input type="password" placeholder="Password" name="pass"><br><br>
                   
                         Confirm Password:<br /><input type="password" placeholder="Password" name="cpass"><br><br><br><br>
                       </td>
                       <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                       <td>
                         Street Address:<br /><input type="text" placeholder="Street Address" name="street"><br><br>
                  
                         City:<br /><input type="text" placeholder="City" name="city"><br><br>
                   		 
                         State:<br/> <select id="name" name="state">
                         <option value="AL">Alabama</option>
                         <option value="AK">Alaska</option>
                         <option value="AZ">Arizona</option>
                         <option value="AR">Arkansas</option>
                         <option value="CA">California</option>
                         <option value="CO">Colorado</option>
                         <option value="CT">Connecticut</option>
                         <option value="DE">Delaware</option>
                         <option value="FL">Florida</option>
                         <option value="GA">Georgia</option>
                         <option value="HI">Hawaii</option>
                         <option value="ID">Idaho</option>
                         <option value="IL">Illinois</option>
                         <option value="IN">Indiana</option>
                         <option value="IA">Iowa</option>
                         <option value="KS">Kansas</option>
                         <option value="KY">Kentucky</option>
                         <option value="LA">Louisiana</option>
                         <option value="ME">Maine</option>
                         <option value="MD">Maryland</option>
                         <option value="MA">Massachusetts</option>
                         <option value="MI">Michigan</option>
                         <option value="MN">Minnesota</option>
                         <option value="MS">Mississippi</option>
                         <option value="MO">Missouri</option>
                         <option value="MT">Montana</option>
                         <option value="NE">Nebraska</option>
                         <option value="NV">Nevada</option>
                         <option value="NH">New Hampshire</option>
                         <option value="NJ">New Jersey</option>
                         <option value="NM">New Mexico</option>
                         <option value="NY">New York</option>
                         <option value="NC">North Carolina</option>
                         <option value="ND">North Dakota</option>
						 <option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA" selected>Virginia</option>
						<option value="WA">Washington</option>
						<option value="DC">District of Columbia</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select><br><br>
                       <!--  State:<br /><input type="text" placeholder="State" name="state"><br><br>-->
                   
                         Zipcode:<br /><input type="text" placeholder="Zipcode" name="zip"><br><br>
                   
                         Phone Number:<br /><input type="text" placeholder="Phone number" name="phone"><br><br>
      
                         <b>Membership Type</b><br />					
                   <select name="membership">
                     <option selected="selected">Choose an option:</option>
                    <option value=1>Student. . . . . . . . . . .  $  15.00</option>
 			 <option value=2>Regular - Individual  . . . . $  40.00</option>
  			 <option value=3>Contributing - Individual . . $  50.00</option>
		     <option value=4>Sustaining - Individual . . . $  75.00</option>
             <option value=5>Life - Individual . . . . . . $ 500.00</option>  
             <option value=6>Sustaining - Institution  . . $ 100.00</option>
             <option value=7>Business - Regular  . . . . . $ 100.00</option>
             <option value=8>Business - Contributing . . . $ 300.00</option>
             <option value=9>Business - Sustaining . . . . $ 500.00</option>
             <option value=10>Patron  . . . . . . . . . . . $1000.00</option>			 					</select> 
                       </td>
                     </tr>
                       <tr>
                         <td>
                   <input type="submit" value="Submit">&nbsp&nbsp&nbsp
                   <input type="reset" value="Clear"><br><br>
                         </td>
                     </tr>
                   </table>
              </form> 
              </center>
              
              
              <!-- this is paypal api pasted code -->
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<table>
<tr><td><input type="hidden" name="on0" value="Membership Type">Membership Type</td></tr><tr><td><select name="os0">
	<option value="Student">Student $15.00 USD</option>
	<option value="Regular - Individual">Regular - Individual $40.00 USD</option>
	<option value="Contributing - Individual">Contributing - Individual $50.00 USD</option>
	<option value="Sustaining - Individual">Sustaining - Individual $75.00 USD</option>
	<option value="Life - Individual">Life - Individual $500.00 USD</option>
	<option value="Sustaining - Institution">Sustaining - Institution $100.00 USD</option>
	<option value="Business - Regular">Business - Regular $100.00 USD</option>
	<option value="Business - Contributing">Business - Contributing $300.00 USD</option>
	<option value="Business - Sustaining">Business - Sustaining $500.00 USD</option>
	<option value="Patron">Patron $1,000.00 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIJgQYJKoZIhvcNAQcEoIIJcjCCCW4CAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYCL+D4DnMa/XDKZ/qaq/yp0QZu7WdmSIztHm8H3oWLxDnyjCVdNt/voTa6M0ix/AQ5tlOPT9HIInrESJGi7fuWhTrYt2KTN+dqj1dclZZJCBRkgF1+gRDNxWKMwQ/bF/F/bZa4zegNsBgMPNpm/Kkaeihl9OcPXX1aJ2OexX3UkMTELMAkGBSsOAwIaBQAwggL9BgkqhkiG9w0BBwEwFAYIKoZIhvcNAwcECEKAImplCR+ugIIC2B15Zkhv3IBOYuoq23d41SsKzVjpo7Cbsuy6+8El2+DfROCkiLt7xr1jOBtTn56Nz9ftRcpmv2EjGVhJqRb8UKOw9wxFBChAJik5YotpGOHsoPzPZxg54VQQjl2oMj3EQ5NE3yuv3Iz9xWIz2AoGR4sUscZoO27j7KeM0u+qcRaOFys8Gy8slQyL+2A+a085LrHnC/mXcNLw+NTma0hk1ZiyPiuVKOIpVjayym1J2RQY9TEGrhbYSdPkkzDrB1Kjt5Kx8odvQ0mPoJ5KUFJ8lfcJAydAGJ6mBvw4sHnBsznXmYpp22shXCbBrU+CJ6kAFhqq6SpxeBKP9AUx42zM3O8B4ClNzOKvJHpcJYhivOGj8ySBd6JmopO3ERXM9ePzC9RdXlhf39yAq1Huwhp3FhFHTtdivq1OMyBzNAeBIV5m3q+o6xcJXytYaNJPZ8bneViCACYjYzFFhH4B9IkHNSJaypxmt8tKQaxcZDOse6KN9Ub/UfJDrOdkstU9tnKTJJcIlqU3qNSpGcgPORa3blZ6sLh0baX/lDoMaH4ApKY74DBtmLeOkkqX1+CeSLydBSqcmC+zZOyNZND4ZZ8u7mJYheBCgZ4gbtK5ITgA5gDN5KaUAWMxcJttotPExKghDhgRjzT2uSsU9q+vzClObE5oTxj0p5o4a0kRllkluK0sjowpstzxOasCnCSq+6VXLQxL/OO6HcVTsbhf2fyo5r3Yu3aUrko88XUMcAte2B0QM6uVOqjLaEaGdjTsLzwcz1qOqdtCsPW5+DyMuBFX0tzgcJAab37YNbNuQE1i7kekzCvGQ/hOdEhoGQfelwIfvcSJO1eWPA1PXXnE6rgfULLVF2p8AjdZ8oRtkwBe8aXY/rhRN7k5CxA+4O1PSY27MH70Cb8lBnggLFJJjdLKq8/YN5n6oVlcuQmilytDr4kTb2rNnmSmH/Gg9JlizxxHsaYqAzFCj+jOoIIDhzCCA4MwggLsoAMCAQICAQAwDQYJKoZIhvcNAQEFBQAwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMB4XDTA0MDIxMzEwMTMxNVoXDTM1MDIxMzEwMTMxNVowgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDBR07d/ETMS1ycjtkpkvjXZe9k+6CieLuLsPumsJ7QC1odNz3sJiCbs2wC0nLE0uLGaEtXynIgRqIddYCHx88pb5HTXv4SZeuv0Rqq4+axW9PLAAATU8w04qqjaSXgbGLP3NmohqM6bV9kZZwZLR/klDaQGo1u9uDb9lr4Yn+rBQIDAQABo4HuMIHrMB0GA1UdDgQWBBSWn3y7xm8XvVk/UtcKG+wQ1mSUazCBuwYDVR0jBIGzMIGwgBSWn3y7xm8XvVk/UtcKG+wQ1mSUa6GBlKSBkTCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb22CAQAwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOBgQCBXzpWmoBa5e9fo6ujionW1hUhPkOBakTr3YCDjbYfvJEiv/2P+IobhOGJr85+XHhN0v4gUkEDI8r2/rNk1m0GA8HKddvTjyGw/XqXa+LSTlDYkqI8OwR8GEYj4efEtcRpRYBxV8KxAW93YDWzFGvruKnnLbDAF6VR5w/cCMn5hzGCAZowggGWAgEBMIGUMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbQIBADAJBgUrDgMCGgUAoF0wGAYJKoZIhvcNAQkDMQsGCSqGSIb3DQEHATAcBgkqhkiG9w0BCQUxDxcNMTQwNDA2MTkzMDIyWjAjBgkqhkiG9w0BCQQxFgQUJk3VgiolpExw6UsiIi98jFD7/1UwDQYJKoZIhvcNAQEBBQAEgYBG2Q96XLFigY7smSlxm66K9aNY7/K+lXeSjxtH+utjvoXdKwgq3hsFNdRvQ0thkFsNnK2v8YXoIaVRMEkSRezo7MBvTKnuKjGO8edlMltxF3LkgIK/7mvvbiGdEmorV6gxwfI7a0NLVDTn/diX93Z40ETudmRtvieYCeYiqKI1Bw==-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


	<!-- end of paypal api code -->              
              
              
              
              
			</div>
			
			
		</div>
	</body>
</html>