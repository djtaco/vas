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
			<div id="content">
              <h1>2013-2014 Virginia Academy of Science Council</h1><br/><br/>
				<p><b>President*<br>
  </b> Deborah A. O'Dell<br>
  433 Jepson Sciences Center<br>
  University of Mary Washington<br>
  Fredericksburg, VA 22401<br>
  Office: (540) 654-1417<br>
  dodell@umw.edu<br>
  <br>
  <b>President-Elect*<br>
  </b> David Crosby<br>
  Aquaculture Program <br>
  Virginia State University<br>
  P. O. Box 9081<br>
  Petersburg, VA 23806<br>
  Office: (804)524-5620 <br>
  dcrosby@vsu.edu<br>
  <br>
  <b>Vice-President*</b><br>
  Conley K. McMullen<br>
  Biology Dept, MSC 7801<br>
  James Madison University, Harrisonburg, VA, 22807<br>
  540-231-6952<br>
  mcmullck@jmu.edu<br>
  <br>
  <b>Secretary*<br>
  </b> <font>Deborah Neely-Fisher<br>
  School of Mathematics & Science<br>
  J. Sargeant Reynolds Community College<br>
  Box 85622<br>
  Richmond, VA 23285-5622<br>
  Phone 804-458-2049<br>
  dneely-fisher@reynolds.edu</font> </p><br/>
<p> <b>Treasurer*<br>
  </b> Thomas Haas<br>
  Dept. of Biomedical Engineering<br>
  Virginia Commonwealth University<br>
  P O Box 843067<br>
  Richmond, VA 23284-3067<br>
  Phone 804-827-0446<br>
  twhaas@vcu.edu <br>
  <b><br>
  </b> <b>Executive Officer (Non-Voting)*<br>
  </b>Arthur F. Conway<br>
  Virginia Academy of Science<br>
  2500 W. Broad St., Richmond, VA&nbsp; 23220<br>
  804-864-1451<br>
  aconway@smv.org or caconway@vcu.org<br>
  <br>
  <b>Director, Virginia Junior Academy of Science*</b><br>
  Susan Booth<br>
  2212 Executive Dr.,<br>
  Hampton, VA 23666 <br>
  757-897-3104 <br>
  susan.science@gmail.com <br>
</p><br>
<p> <b>Immediate Past President*<br>
  </b> Ralph P. Eckerlin<br>
  Natural Sciences Division<br>
  8333 Little River Turnpike<br>
  Annandale, VA&nbsp; 22003-3796<br>
  703-256-3109 <br>
  reckerlin@nvcc.edu<br>
  <br>
</p>
<h3><a name="C2">OTHER VOTING MEMBERS OF COUNCIL</a></h3>
<h3><strong><br>
  <b>Immediate Past Presidents (3)</b> </strong></h3>
<p>2012-2013<br>
  Ralph P. Eckerlin<br>
  Natural Sciences Division<br>
  8333 Little River Turnpike<br>
  Annandale, VA&nbsp; 22003-3796<br>
  703-256-3109 <br>
  reckerlin@nvcc.edu </p>
<p> 2011-2012 <br>
  Michael H. Renfroe,<br>
  Biology Dept, MSC 7801<br>
  James Madison University, Harrisonburg, VA, 22807<br>
  Phone: (540) 568-6617<br>
  renfromh@jmu.edu<br>
  <br>
  2010-2011<br>
  Arun Kumar Verma,<br>
  Department of Mathematics<br>
  Hampton University, Hampton, VA 23668<br>
  Phone: (757) 728-6983<br>
  arun.verma@hamptonu.edu<br>
  Fax: (757) 728-6984</p>
<p> <strong><span style="font-weight: normal;"></span></strong><strong><span
 style="font-weight: normal;"></span></strong><br>
  <strong>Editor, The Virginia Journal of Science</strong><br>
  Werner Wieland<br>
  Dept. of Biological Sciences <br>
  University of Mary Washington, <br>
  1301 College Ave.<br>
  Fredericksburg, VA 22401-5300<br>
  540-654-1426&nbsp; FAX: 540-654-1081&nbsp;<br>
  wwieland@umw.edu<br>
  <br>
  <br>
  <span style="font-weight: bold;">Business Manager</span>, <strong>The Virginia 
  Journal of Science</strong><br>
  James H. Martin<br>
  Virginia Academy of Science<br>
  2500 W. Broad St., Richmond, VA&nbsp; 23220<br>
  804-864-1451<br>
  JMARTIN@reynolds.edu<br>
  <br>
  <br>
  <strong>AAAS/NAAS Representative</strong><br>
  James P. B. O'Brien<br>
  Tidewater Community College<br>
  Psychology Dept.<br>
  1700 College Crescent<br>
  Virginia Beach, VA 23453<br>
  757-822-7447 (O)<br>
  jobrien@tcc.vccs.edu<br>
  <br>
  <strong>Science Museum of Virginia Trustee</strong><br>
  James P. B. O'Brien<br>
  Tidewater Community College<br>
  Psychology Dept.<br>
  1700 College Crescent<br>
  Virginia Beach, VA 23453<br>
  757-822-7447 (O)<br>
  jobrien@tcc.vccs.edu<br>
</p><br>
<p> <strong><font >Editor, Virginia Scientists</font></strong><font><br>
  Deborah Neely-Fisher<br>
  School of Mathematics & Science<br>
  J. Sargeant Reynolds Community College<br>
  Box 85622<br>
  Richmond, VA 23285-5622<br>
  Phone 804-458-2049<br>
  dneely-fisher@reynolds.edu</font><br>
</p>
<pre><br><br><strong>Gwathmey and Jeffress Trusts Allocation Committee Representative (Non-Voting)</strong><br>


			</div>
			
			
		</div>
	</body>
</html>