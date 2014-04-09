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
              <h1>Constitution</h1><br/>
              <!--This is the beginning of the constitution-->
              <h2>Article I: Name</h2><br/>
              <p>The name of this organization shall be the Virginia Academy of Science.</p><br/>
              
              
              <!--The purpose-->
              <h2>Article II: Purpose</h2><br/>
              <p>The purpose of this organization shall be to establish and maintain in Virginia for scientific and educational purposes an association of persons and organizations interested in science and scientific research in all of its branches; to solicit financial and other support; to cooperate with educational institutions, industries, and state agencies in fostering an interest in scientific matters, in promoting scientific investigations and in spreading knowledge of the sciences; to provide a forum for the presentation and discussion of papers on scientific subjects and facilities for their publication; to provide opportunities for the cooperation and fellowship among its members; and generally, in doing these things, to benefit not only its own members, but to promote the civic, agricultural, academic, industrial, and commercial welfare of the people of Virginia.</p><br/>
              
              <!--This is the beginning of section III-->
              <h2>Article III: Organization</h2><br/>
              <h3>Section 1. Membership</h3><br/>
              <p>Membership in this organization shall be open to professional scientists of all branches of science and others who are interested in the purpose of the organization. Types of membership and dues for each shall be specified in Academy Bylaws. The membership, through the Academy Conference, provided by Section 2 of Article VIII, shall have ultimate authority over the affairs of this organization.</p><br/>

              <h3>Section 2. Sections</h3><br/>
              <p>The Academy shall be organized into Sections according to the various scientific disciplines. A person may belong to one or more Sections in accordance with his or her interests.</p><br/>

              
              <h3>Section 3. Council</h3><br/>
              <p>The governing body of this organization shall be the Academy Council. Its composition and responsibilities are specified in Article VII.</p><br/>
              
              <h3>Section 4. Officers</h3><br/>
              <p>The elected officers of this organization shall be a President, a President-Elect, a Vice President, a Secretary, and a Treasurer. Duties of each shall be specified in Academy Bylaws.</p><br/>
              
              
              <h3>Section 5. Executive Committee</h3><br/>
              <p>The elected officers, the immediate past president and the Director of the Junior Academy of Science shall comprise the Executive Committee of the Academy Council.</p><br/>
              
              
              <h3>Section 6. Standing Committee</h3><br/>
              <p>The primary activities of this organization shall be implemented by Standing Committees as follows: the Research Committee, the Long Range Planning Committee, the Junior Academy of Science Committee, the Membership Committee, the Finance and Endowment Committee, the Trust Committee, the Publications Committee, the Awards Committee, the Fund Raising Committee, the Nominations and Elections Committee, the Virginia Flora Committee, the Science Advisory Committee, the Science Education Committee, the Archives Committee, the Committee on the Environment, and the duties of the Standing Committees not specified hereafter, shall be as specified in the Academy Bylaws, and as may be further enumerated by Council from time to time. </p><br/>
              
              <!-- End of Section III -->
              
              <h2>Article IV: The Virginia Journal of Science</h2><br/>
              <p>The Virginia Journal of Science shall be the official publication of the Virginia Academy of Science. All Academy members shall receive copies of this publication.</p><br/>
              
              <h2>Article V: Fellows</h2><br/>
              <p>From active membership, there shall be a body of scholars known as "Fellows of the Virginia Academy of Science" selected because of their contribution to science in one or more of the following ways: (a) outstanding scientific research, (b) inspirational teaching of science, (c) significant leadership in the Academy. Rules and procedures for selection of Fellows shall be specified in the Academy Bylaws.</p>

              <h2>Article VI: Accreditation of Membership</h2><br/>
              <p>Membership of the Academy shall be accredited by the Secretary and the Treasurer. The membership list shall be published periodically according to types, as directed by Council.</p>
              

			  <!--This is the beginning of VII-->
              <h2>Article VII: Composition and Responsibilities of Council</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>Council shall be composed of the President, the President-Elect, the Vice President, the Secretary, the Treasurer, the three most recent Past Presidents and one member elected by each Section of the Virginia Academy of Science. Members from the Sections shall be elected for three year terms on a rotational basis among the Sections, provided the initial term of a member from a newly established Section shall be specified by Council. In addition to the foregoing, the Chairs of the Standing Committees, the Editor of The Virginia Journal of Science, the Editor of Virginia Scientists, the official Academy Representative to the Board of Trustees of the Science Museum of Virginia, the official representative of the Academy to the American Association for Advancement of Science and National Association of Academies of Science, the Director of the Visiting Scientists Program, and the Director of the Virginia Junior Academy of Science shall be members of Council. In event of vacancies, the President shall make interim appointments until the next election is held; provided however, vacancies of elected officers shall be filled as hereafter provided.</p><br/>

              <h3>Section 2.</h3><br/>
              <p>Council shall meet each year preceding the annual meeting and at least once in the fall at a time and place designated by the President.</p><br/>

              
              <h3>Section 3.</h3><br/>
              <p>Twelve members shall constitute a quorum for the transaction of business by Council.</p><br/>
              
              <h3>Section 4.</h3><br/>
              <p>Council shall establish the policies of this organization and shall be responsible for the administration of all Academy funds.</p><br/>
              
              
              <h3>Section 5.</h3><br/>
              <p>Council shall consider and recommend to the membership from time to time appropriate changes in the Constitution, and shall promulgate bylaws appropriate to the implementation of the Constitution.</p><br/>
              
              
              <h3>Section 6.</h3>
              <p>Council may establish appropriate administrative positions and employ such personnel as may be required. Terms of office, the duties and remuneration of such personnel shall be prescribed by Council.</p><br/>
              
              <h3>Section 7.</h3><br/>
              <p>Through appropriate Bylaws, Council shall provide for the publication of The Virginia Journal of Science and the Virginia Scientists.</p><br/>
              
              <h3>Section 8.</h3><br/>
              <p>The Executive Committee of Council shall be empowered to act for Council on an interim basis between meetings of Council and shall report to Council at its regular meetings. A meeting of Council may be called at any time upon concurrence of any four members of the Executive Committee.</p><br/>
              
              <!-- End of section VII -->
              
              
              <!--This is the beginning of VIII-->
              <h2>Article VII: Meetings and Business</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>The annual meeting of this organization shall be arranged in accordance with procedures to be established by Council in appropriate Academy Bylaws.</p><br/>

              <h3>Section 2.</h3><br/>
              <p>All business requiring action by the membership shall be transacted at an Academy Conference, which shall be scheduled by Council during the annual meeting. A meeting of the Academy Conference may be called between Annual Meetings by concurrence of a majority of the members of Council; provided, however, that the membership shall be notified of such called meeting no less than thirty (30) days prior to the date that such meeting is to be held. Forty accredited members shall constitute a quorum for the transaction of business by an Academy Conference.</p><br/>
              
              <h3>Section 3.</h3><br/>
              <p>Each Section shall annually arrange a program oriented to its area of scientific interest; provided, however, such programs shall be compatible with the purpose of the Academy and scheduled within the framework of the general meeting program of the Academy.</p><br/>
              
              <h3>Section 4.</h3><br/>
              <p>The fiscal year of the Academy shall be from January 1 through December 31.</p><br/>
              
              
              <h3>Section 5.</h3><br/>
              <p>The parliamentary procedure for all meetings of this organization shall be governed by Robert's Rules of Order Revised, and Council shall provide for a Parliamentarian. </p><br/>
              
              
              <h3>Section 6.</h3><br/>
              <p>Council may establish appropriate administrative positions and employ such personnel as may be required. Terms of office, the duties and remuneration of such personnel shall be prescribed by Council.</p><br/>
              
              <h3>Section 7.</h3><br/>
              <p>Through appropriate Bylaws, Council shall provide for the publication of The Virginia Journal of Science and the Virginia Scientists.</p><br/>
              
              <h3>Section 8.</h3><br/>
              <p>The Executive Committee of Council shall be empowered to act for Council on an interim basis between meetings of Council and shall report to Council at its regular meetings. A meeting of Council may be called at any time upon concurrence of any four members of the Executive Committee.</p><br/>
              
              <!-- End of section VIII -->
              
              <!--This is the beginning of IX-->
              <h2>Article IX: Establishment of Sections</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>Sections as defined in Article III with the approval of Council, may be organized by an accredited group of members. Each Section shall annually arrange a scientific program related to its area of interest.</p><br/>

              <h3>Section 2.</h3><br/>
              <p>Such a Section may become accredited and established after it has conducted one successful program at an annual meeting of the Academy.</p><br/>
              
              <h3>Section 3.</h3><br/>
              <p>Any Constitution and Bylaws changes proposed by a Section must conform to the provisions of the Academy Constitution and Bylaws and shall be submitted to Council for review and approval prior to adoption by Section.</p><br/>
              
              <h3>Section 4.</h3><br/>
              <p>Any Section which fails to conduct a program at two successive Academy annual meetings, may be dropped as a Section by action of Council; but, may be reinstated after subsequently conducting one successful program.</p><br/>
              
              
              <h3>Section 5.</h3><br/>
              <p>When established, all Section names shall be enumerated in the Academy Bylaws, and thereby subject to provisions of Article XIII, Section 1.</p><br/>
              
              <!-- End of section IX -->
              
              
              <!--This is the beginning of X-->
              <h2>Article X: Election of Academy and Sections Officers</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>A "Nominations and Elections Committee" consisting of three recent Past Presidents, appointed by the President, shall establish a slate of nominations for the positions of President-Elect, Vice President, Secretary, and Treasurer and conduct an election for same in accordance with procedures specified by Academy Bylaws.</p><br/>

              <h3>Section 2.</h3><br/>
              <p>Upon election, officers shall serve one-year terms commencing at the annual meeting at which their election is announced and continuing until the next annual meeting; provided, however, the President-Elect shall automatically ascend to the position of President at the end of this scheduled term of office and at any prior time that the office of President may be vacated; however, such person shall not serve as President beyond the term that such person was originally scheduled to serve as President.</p><br/>
              
              <h3>Section 3.</h3><br/>
              <p>All interim vacancies in Academy offices, other than President, occurring between annual Academy Conferences, shall be filled by Council from names of persons recommended by the Executive Committee. Persons so selected shall serve until the next Academy Conference.</p><br/>
              
              <h3>Section 4.</h3><br/>
              <p>Each Section shall elect from their members: </p><br/>
              <ol type = "A">
                <li>A Chair and a Secretary for one-year terms of office.</li>
                <li>A Representative to Council in accordance with the provisions of Article VII.</li>
                <li>Other officers desired.</li>
              </ol><br/>
              
              <h3>Section 5.</h3><br/>
              <p>Persons to fill vacancies in Section offices which occur between Annual Meetings shall be designated by the Council Representative from that Section.</p><br/>
              
              <h3>Section 6.</h3><br/>
              <p>All Elected officers shall serve without remuneration, but, at the discretion of Council, may be reimbursed for certain expenses incurred in conducting the business of the Academy. </p><br/>
              
              <!-- End of section X -->
              
              
              <!--This is the beginning of XI-->
              <h2>Article XI: Committee Structure, Appointments, Terms, Etc.</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>Except as provided otherwise, all Standing Committees shall be composed of three (3) or more members, and the President shall designate Committee Chairs, and appoint approximately one-third of the members of each Committee for terms of three (3) years, and shall subsequently appoint members to fill unexpired terms that occur periodically.</p><br/>

              <h3>Section 2.</h3><br/>
              <p>The Research Committee shall be composed of five (5) members, each appointed for a term of five (5) years. One new member shall be appointed each year by the President to replace the member whose term expires; unexpired terms shall also be filled by appointment by the President. The senior member of the Committee shall be Chair.</p><br/>
              
              <h3>Section 3.</h3><br/>
              <p>A Trust Committee, composed of three (3) accredited members, shall be elected by Council, to serve for terms of three (3) years on a rotational basis. The members of this Committee shall place in trust and supervise the management of Academy investments subject to annual review by Council. The Committee shall elect its own Chair; provided, however, that should it be unable to do so, the President shall name the Chair.</p><br/>
              
              <h3>Section 4.</h3><br/>
              <p>The President and Council shall assign operational matters to appropriate Standing Committees; however, the President and/or Council may establish Special Committees as the need arises.</p><br/>
              
              <!-- End of section XI -->
              
              <h2>Article XII: Junior Academy of Science</h2><br/>
              <p>The Academy shall provide financial support, leadership, and supervision to a Junior Academy of Science. Effective working relationships shall be maintained with such Junior Academy of Science, through the Junior Academy of Science Committee.</p><br/>
              
              
              <!--This is the beginning of XIII-->
              <h2>Article XIII: Bylaws and Amendments</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>Council shall promulgate appropriate Bylaws to implement or further clarify the Articles of this Constitution. The establishment or amendment of such Bylaws shall require an affirmative vote of a majority of the total membership of Council; provided, that all proposed Bylaws or amendments shall be distributed to the membership or published in an issue of The Virginia Journal of Science at least thirty (30) days prior to action by Council.</p><br/>

              <h3>Section 2.</h3><br/>
              <p>This Constitution may be changed or amended, after the recommendation of a majority of the total membership of Council, by a two-thirds majority of an Academy Conference, provided all proposed changes shall be submitted to members of Council in writing no less than fifteen (15) days prior to the Council Meeting at which such proposals are to be considered and further provided that subsequent to approval by Council, all proposed amendments shall be published in The Virginia Journal of Science or distributed in writing to the membership no less than twenty five (25) days nor more than fifty (50) days prior to presentation to an Academy Conference for adoption.</p><br/>
              
              <h3>Section 3.</h3>
              <p>All provisions of the Constitution and Bylaws in effect prior to the adoption of this Constitution, except the provisions of this Article, shall rule until new Bylaws are duly established in accordance with Section 1 of this Article.</p><br/>
              
              <!-- End of section XIII -->
              
              
              <h2>Article XIV: Articles of Incorporation</h2><br/>
              <p>The Articles of Incorporation of this organization (Charter) shall conform to the provisions of this Constitution and all amendments hereafter adopted. The Constitution and Bylaws Committee shall review and coordinate all necessary appropriate revisions of both documents and be responsible for the submission of all required reports to the State Corporation Commission and other governmental entities, annually or as otherwise required by law. </p><br/>
              
              
              <!--This is the beginning of XV-->
              <h2>Article XV: Dissolution or Liquidation</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>In the event of dissolution or liquidation, all liabilities and obligations of the Academy shall be paid, satisfied and discharged.</p><br/>

              <h3>Section 2.</h3><br/>
              <p>All assets remaining, including those received and held for scientific and educational purposes, shall be transferred to one or more societies or organizations engaged in activities substantially similar to those of the Academy; provided however, that no assets shall accrue to the benefit of any officer or member of the Academy.</p><br/><br/><br/>
              
              <!-- End of section XV -->
              
			 <!-- Beginning of the Bylaws Section -->              
              <h1>Bylaws of Virginia Academy of Science</h1><br/><br/>
              
              <!-- Beginning of article 1 -->
              <br/><h2>Article I: Types of Membership and Dues</h2><br/>
              <h3>Section 1.</h3>
              <p>There shall be nine types of members: regular, student, contributing, sustaining, life, patron, honorary life, business, and emeritus.</p>
              
              <br/><h3>Section 2.</h3><br/>
              <p>Dues of the first four types of members shall be as follows:</p><br/>
              <ol type = "A">
                <li>Regular members shall pay annual dues of thirty-five dollars ($35.00).</li>
                <li>Student members shall pay annual dues of ten dollars ($10.00).</li>
                <li>Contributing members shall be individuals who elect to pay annual dues of fifty dollars ($50.00).</li>
                <li>Sustaining members shall be individuals who elect to pay annual dues of seventy-five dollars ($75.00) or more, and institutions which shall pay annual dues of one hundred dollars ($100.00) or more.</li>
                <li>To be in good standing the foregoing types of members must pay the specified dues by July 1.</li>
              </ol>
              
              <br/><h3>Section 3.</h3><br/>
              <p>Life members shall be individuals who elect to pay to the Academy the sum of five hundred dollars ($500.00) and thereby become exempt from further payment of dues.</p>
              
              <br/><h3>Section 4.</h3><br/>
              <p>Patrons shall be those persons who have given to this organization the sum of one thousand dollars ($1,000.00) or its equivalent in property. They shall have all the rights and privileges of Regular Members. An institution may also become a Patron by meeting the above requirement. Its representative shall have all the rights and privileges of regular members.</p>
              
             <br/> <h3>Section 5.</h3><br/>
              <p>Honorary Life members shall be persons elected by the Council for long and distinguished service to science. They shall have all the rights and privileges of Regular Members and shall be exempt from dues. Previous active membership in this organization shall not be a requirement of eligibility.</p>
              
              <br/><h3>Section 6.</h3><br/>
              <p>Business or industrial organizations, which elect to pay dues of one hundred dollars ($100.00) annually, shall be Regular Business Members of the Academy, or may elect to: </p> <br/>
              <ol type = "A">
                <li>Pay annual dues of three hundred dollars ($300.00) and be designated Contributing Business Members, or</li>
                <li>Pay annual dues of five hundred dollars ($500.00) and be designated Sustaining Business Members.</li>                
              </ol>
             
              <br/><h3>Section 7.</h3><br/>
              <p>Honorary Life members shall be persons elected by the Council for long and distinguished service toEmeritus Members shall be persons who have been active Academy members for at least ten years and retired from full-time employment. These Members shall have all rights and privileges of regular membership but will be exempt from dues. Eligibility for Emeritus membership status will be determined by requests to the Membership Committee. </p>
              <!-- End of article 1 -->

              
              <!-- Beginning of article 2 -->
              <br/><h2>Article II: Duties of Officers</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>The President shall be the directing head of the Academy, shall preside at business meetings and general sessions of the organization, and shall appoint the members of the standing committees and of new committees authorized by the Council, in accordance with Article XI of the Constitution.</p>
              
              <br/><h3>Section 2.</h3><br/>
              <p>The President-Elect shall assist the President as mutually agreed between them and shall serve as President in the latter's absence. The President-Elect shall furnish the Editor of The Virginia Journal of Science, in time for publication with the Summer issue of The Virginia Journal of Science, a list of committee memberships which he or she has set up to assist him or her during his or her year as President . The President-Elect shall distribute that list to Council at the Annual Meeting at which he or she automatically ascends to President. The President-Elect begins a three year term serving as a member of the Finance and Endowment Committee.</p><br/>
              
              <br/><h3>Section 3.</h3><br/>
              <p>The Vice President shall be responsible for coordinating the scientific programs of the Annual Meeting. The Vice President shall serve as a member of the Membership Committee.</p>
              
              <br/><h3>Section 4.</h3><br/>
              <p>The Secretary shall be responsible for keeping complete records of the Academy Conference and all meetings of the Council and Executive Committee.  The Secretary shall submit copies of all records and revisions of records to the Executive Officer in a timely manner so that distribution of those records may be made by the Executive Officer to members of Council and the Executive Committee.</p>
              
              <br/><h3>Section 5.</h3><br/>
              <p>The Treasurer shall: </p> <br/>
              <ol type = "A">
                <li>Oversee the financial activities of the Academy, especially as conducted by the Executive Officer.</li>
                <li>Report the financial status of the Academy at the Academy Conference at the annual meeting.</li>
				<li>Serve as a member of the Finance and Endowment Committee.</li>                
              </ol>

              <br/><h3>Section 6.</h3><br/>
              <p>The Treasurer, Chair of Trust Committee, all administrative employees, and all persons authorized by Council engaged in the receipt and disbursement of funds shall be adequately bonded.</p><br/>
             
              <br/><h3>Section 7.</h3><br/>
              <p>All officers shall be ex-officio members of all Academy Committees. </p><br/>
              <!-- End of article 2 -->

              
              <!-- Beginning of article 3 -->
              <br/><h2>Article III: Duties of Standing Committees</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>The Research Committee shall:</p><br/>
              <ol type = "A">
                <li>Review and award Academy Research Grants.</li>
                <li>Arrange for and present the J. Shelton Horsley Research Award.</li>           
              </ol>
              
              <br/><h3>Section 2.</h3><br/>
              <p>The Long Range Planning Committee shall:</p><br/>
              <ol type = "A">
                <li>Develop and advise Council on broad policies which will affect the Academy in the future.</li>
                <li>Solicit and study suggestions from the membership for the improvement of Academy activities.</li>
				<li>Investigate and evaluate proposed projects, publications and other factors that may relate to the long-range effectiveness of the Academy./li>
                  <li>Advise and consult with other Academy Committees relative to the aforegoing and 
            make recommendations to such committees concerning the effectiveness of their various activities.</li>
              </ol>
              
              <br/><h3>Section 3.</h3><br/>
              <p>The Junior Academy of Science Committee of the Virginia Academy of Science shall: </p><br/>
              <ol type = "A">
                <li>Assist the Executive Committee in selecting a Director and an Associate Director for The Virginia Junior Academy of Science.</li>
                <li>Coordinate with the Director activities of The Virginia Junior Academy of Science including development, expansion, and the annual meetings.</li>
				<li>Review funding proposals for the Virginia Junior Academy of Science and submit appropriate recommendations to the Executive Committee or other designated committees in a timely manner.</li>
                <li>Publish and distribute Proceedings of Virginia Junior Academy of Science.</li>
                <li>Select student representatives and alternates to attend The American Junior Academy of Science.</li>
                <li>Solicit membership and participation in Virginia Junior Academy of Science programs and projects.</li>
                <li>Support and participate in all other programs and activities related to the work of Virginia Junior Academy of Science.</li>
                <li>Set up procedures for selecting the top students and declare and announce them to be State Winners in the Virginia Science Talent Search, and all other contestants as runners-up.</li>
                <li>Carry out other duties that support the development of science in education as approved by Council.</li>
              </ol>
              
              <br/><h3>Section 4.</h3><br/>
              <p>The Membership Committee shall:</p><br/>
              <ol type = "A">
                <li>Make recommendations to Council, the Executive Committee and officers relative to policies on general membership.</li>
                <li>Promote membership growth and seek adequate representation from all scientific disciplines.</li>
				<li>Sponsor a Business Advisory Committee for the purpose of creating understanding between science and business, and to solicit business memberships to the Academy.</li>                
              </ol>
              
              <br/><h3>Section 5.</h3><br/>
              <p>The Finance and Endowment Committee shall:</p> <br/>
              <ol type = "A">
                <li>Monitor and appraise income and expenditures, and make appropriate recommendations to the President, Executive Committee and Council.</li>
                <li>Estimate annually the anticipated income of the Academy and prepare a proposed budget for consideration by Council at its Fall meeting.</li>
				<li>Seek and encourage the establishment of endowments to the benefit of Academy activities.</li>
				<li>Have at least one member of this Committee be a member of the Trust Committee.</li>                              </ol>

              <br/><h3>Section 6.</h3><br/>
              <p>The Trust Committee shall:</p>
              <ol type = "A">
                <li>Place in trust and supervise the management of funds of the Academy designated by Council or otherwise for investment.</li>
                <li>Review all Academy investments annually and make appropriate adjustments subject to approval of Council.</li>
		      </ol>
             
              <br/><h3>Section 7.</h3><br/>
              <p>The Publications Committee shall:</p><br/>
              <ol type = "A">
                <li>Develop and implement a continuing policy of review and evaluation of Academy publications.</li>
                <li>Present to Council annually through the Finance Committee the budgetary needs of the several Academy periodical publications.</li>
                <li>Make recommendations to Council relative to priority, publication, finance and distribution of non-recurring publications.</li>
                <li>Select and recommend to Council, as necessary; an Editor for The Virginia Journal of Science, and members of the editorial Board.</li>
                <li>Enlist the interest of all groups in worthwhile publications by the Academy.</li>
		      </ol><br/>
              
              <h3>Section 8.</h3><br/>
              <p>The Awards Committee shall:</p><br/>
              <ol type = "A">
                <li>Select recipients of the Ivey F. Lewis Distinguished Service Award to be presented periodically to a member who has made significant contributions toward the activities of the Virginia Academy of Science.</li>
                <li>Select recipients of Special Awards periodically as directed by Council.</li>
                <li>Accept and submit to Council nominations for fellows in accordance to Article V of the Constitution and Article V of the Bylaws.</li>
		      </ol><br/>
              
              <h3>Section 9.</h3><br/>
              <p>The Fund Raising Committee shall:</p><br/>
              <ol type = "A">
                <li>From time to time at the direction of Council, plan, organize, and coordinate appropriate fund raising campaigns in support of Academy activities or projects contingent to the purposes of the Academy.</li>
		      </ol><br/>

			  <h3>Section 10.</h3><br/>
              <p>The Nominations and Elections Committee shall:</p><br/>
              <ol type = "A">
                <li>Mail to the membership on or about January 1 each year a request for nominations of persons to fill the offices of President-Elect, Vice President, Secretary and Treasurer.</li>
                <li>Nominate a slate of one person for each of the aforenamed offices. The nominee for president-elect must have served previously as an officer (Vice-President, Secretary or Treasurer) on the Executive Committee.</li>
                <li>Review with the Executive Committee the slate of officers prior to presenting a report report to Council for informational purposes.</li>
                <li>Mail slate of nominees to members advising that names may be added to the slate by 25 members petitioning the committee on behalf of each name to be added.</li>
                <li>If necessary, prepare ballots with additional nominees and mail to membership with registration and other information relative to annual meeting indicating deadline and address for return of ballot to committee.</li>
                <li>Count ballots and announce results at the Academy Conference. Should a tie vote result for any office, the Academy Conference shall vote on the nominees. In all cases, the nominee receiving the largest number of favorable votes shall be elected; provided, however, that only members in good standing may cast ballots.</li>
		      </ol>   <br/>           
             
             <h3>Section 11.</h3><br/>
              <p>The Constitution and Bylaws Committee shall:</p><br/>
              <ol type = "A">
                <li>Periodically receive and prepare drafts of all proposed changes in constitution as the occasion arises and present same to Council and membership for consideration as set forth in the constitution.</li>
                <li>Draft all Bylaw changes as directed by Council and notify membership of such changes.</li>
                <li>Update articles of Incorporation (Charter) as required.</li>
                <li>Provide a Parliamentarian for all Council meetings and Academy Conferences.</li>
		      </ol><br/>
              
              <h3>Section 12.</h3><br/>
              <p>The Virginia Flora Committee shall:</p><br/>
              <ol type = "A">
                <li>Promote the study of and publications of the flora and vegetation of Virginia.</li>
                <li>Sponsor symposia and conferences on the ecology, conservation, and preservation of the plant life of Virginia.</li>
                <li>Disseminate botanical information to all who are interested in the flora and ecology of Virginia.</li>
                <li>Serve as liaison between the Academy, government bodies, and institutions in matters pertaining to the plant life of Virginia.</li>
		      </ol><br/>
              
              <h3>Section 13.</h3><br/>
              <p>The Science Advisory Committee Shall:</p><br/>
              <ol type = "A">
                <li>Provide scientific and technical information and advice requested by the Executive, Legislative, and other governmental bodies and agencies of the Commonwealth of Virginia.</li>
                <li>Serve as liaison for the collection and transfer of scientific information and/or advice solicited in (A).</li>
                <li> Collect and evaluate suggestions and opinions regarding topics of general public interest wherein science and technology may provide assistance, but where such assistance has not been requested. The Science Advisory Committee will make recommendations to the Academy, to the Executive Committee, and/or the Council of the Academy for review and approval. The Science Advisory Committee, upon direction of Council or Executive Committee, shall serve as a conduit for placement of such information before the appropriate Executive, Legislative, or other governmental body or agency.</li>
                <li>Maintain an inventory of scientific interests and expertise of individuals within the Academy who are willing to serve in an advisory and/or consultant capacity to state government.</li>
                <li>At no time operate beyond constraints considered as proper conduct for a non-profit organization.</li>
                <li>Append all reports and recommendations with a statement as follows; "The Virginia Academy of Science assumes no legal or financial responsibilityfor the utilization or dispersal of scientific and technical data or advice provided by the science Advisory Committee, further, the Academy assumes no responsibility, financial or other-wise, to governmental agents or agencies, institutions, individuals or committee members pursuant to the conduct and activities of this Committee."</li>
		      </ol><br/>
              
              <h3>Section 14.</h3><br/>
              <p>The Science Education Committee shall:</p><br/>
              <ol type = "A">
                <li>Promote science education in the State of Virginia.</li>
                <li>Disseminate information about scientific matters and scientific topics of current interest.</li>
                <li>Respond to requests for assistance in matters dealing with education in the areas of mathematics and science, such as are embraced by the various Academy Sections and as directed by the President and Council of the Academy.</li>
                <li>Assist and cooperate with the Virginia State Department of Education in planning and conducting the annual State Science Teachers Conference, K-12. Delegated members of the Committee may hold and be responsible for funds generated by the activities of the State Science Teachers Conference, solely for the purpose of funding the Conference meetings. These funds shall remain separate from other funds of the Academy.</li>
		      </ol><br/>
              
              <h3>Section 15.</h3><br/>
              <p>The Archives Committee shall:</p><br/>
              <ol type = "A">
                <li>Address the business of collection, assembly, organization, cataloguing and storage of records, documents, awards and paraphernalia associated with the history and development of the Academy.</li>
                <li>Secure an institutional repository for storage of the inactive records of the Academy.</li>
                <li>Secure the services of a qualified individual to establish and maintain the aforementioned records, as the official Archivist of the Academy; and such person shall be extended honorary membership in the Academy.</li>
                <li>Assist, and cooperate, with the Archivist in securing and screening of records and documents destined for permanent storage in the Archives.</li>
		      </ol><br/>
              
              <h3>Section 16.</h3><br/>
              <p>The Committee on the Environment shall:</p><br/>
              <ol type = "A">
                <li>Maintain close liaison with organizations and agencies involved in  
            environmental study and management.</li>
                <li>Keep informed of the status of Virginia's environment, noting particularly those  
            problems and issues amenable to scientific research.</li>
                <li> Cooperate with the Science Advisory Committee in advising and providing  
            information to private and public environmental agencies and bodies.</li>
		      </ol><br/>
              
              <!-- End of article 3 -->

              <!-- Beginning of article 4 -->
              <h2>Article IV: The Virginia Journal of Science</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>The Academy shall publish The Virginia Journal of Science quarterly.</p><br/>
              
              <h3>Section 2.</h3><br/>
              <p>The staff of The Virginia Journal of Science shall be composed of:</p><br/>
              <ol type = "A">
                <li>An editor recommended by the Publications Committee and appointed by Council for a three-year term.</li>
                <li>Such Associate Editors, Assistant Editors, or Editorial Board Members, appointed by the President, as are recommended by the Editor and the Publications Committee.</li>
                <li>Editors designated by individual Sections.</li>
              </ol><br/>
              
              <h3>Section 3.</h3><br/>
              <p>All members of the Academy shall receive The Virginia Journal of Science.</p><br/>
              
              <h3>Section 4.</h3><br/>
              <p>Subscriptions may be sold to non-members at a rate established by the Publications Committee and approved by Council. </p><br/>
              <!-- End of article 4 -->
              
              
              <!-- Beginning of article 5 -->
              <h2>Article V: Rules and Procedures for Selecting Fellows</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>A Fellow must be a member of the Academy, nominated by at least three members of the Academy. The Academy Council must approve each Fellow by a majority vote. It will be the usual procedure to announce new Fellows at an Annual Meeting./p><br/>
              
              <h3>Section 2.</h3><br/>
              <p>Nominations for Fellows with appropriate biographical information shall be sent directly to the Executive Officer annually prior to October 1. All information received shall be forwarded to the Chair of the Awards Committee for review and recommendations to Council prior to the subsequent Annual Meeting. All nominees not recommended by the Committee or not acted upon favorably by Council shall remain in consideration for one additional year.</p><br/>
              
              <h3>Section 3.</h3><br/>
              <p>No more than twenty-five fellowships will be approved the first year. After the first year, no more than one-half of one percent of the total active membership shall be selected in any one year. The limiting number of Fellows shall not exceed ten percent of the total active membership of the Academy  For purpose of determining the annual limitations on electing new Fellows, the number of Current Fellows shall not include any whose dues are unpaid for the last three years, are Life members or are Honorary members as determined by the Academy Office. However, nothing in this section shall preclude the election of two Fellow each year.</p><br/>
              
              <h3>Section 4.</h3><br/>
              <p>All Fellows shall be presented with a suitably inscribed scroll.</p><br/>
              
              <h3>Section 5.</h3><br/>
              <p>Appropriate announcement of new Fellows shall be made in The Virginia Journal of Science. </p><br/>
              
              
              <!-- End of article 5 -->
              
              <!-- Beginning of article 6 -->
              <h2>Article VI: Rules and Procedures for Honorary Life Members</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>Honorary Life members shall be persons elected by the Council for long and distinguished service to science.  They shall have all the rights and privileges of Regular Members and shall be exempt from dues.  Previous active membership in this organization shall not be a requirement of eligibility.</p><br/>
              
              <h3>Section 2.</h3><br/>
              <p>An Honorary Life Member must be nominated by at least three members of the Academy.  The Academy Council must approve each Honorary Life Member by a majority vote.  It will be the usual procedure to announce new Honorary Life Members at an Annual Meeting.</p><br/>
              
              <h3>Section 3.</h3><br/>
              <p>Nominations for Honorary Life Member with appropriate biographical information shall be sent directly to the Executive Officer annually prior to October 1.  All information received shall be forwarded to the Chair of the Awards Committee for review and recommendations to Council prior to the subsequent Annual Meeting.  All nominees not recommended by the Committee or not acted upon favorably by Council shall remain in consideration for one additional year.</p><br/>
              
              <h3>Section 4.</h3><br/>
              <p>The limiting number of Honorary Life Members shall not exceed five percent of the total active membership of the Academy.  However, nothing in this section shall preclude the election of one Honorary Life Member each year. </p><br/>
              
              <h3>Section 5.</h3><br/>
              <p>All Honorary Life Members shall be presented with a suitably inscribed scroll.</p><br/>
              
              <h3>Section 6.</h3><br/>
              <p>Appropriate announcement of new Honorary Life Members shall be made in The Virginia Journal of Science. </p><br/>
              <!-- End of article 6 -->
              
              
              <!-- Beginning of article 7 -->
              <h2>Article VII: The Duly Organized Sections of the Academy</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>The duly organized scientific sections of the Academy are:</p>
              <ol>
                <li>Agriculture, Forestry, and Aquaculture</li>
				<li>Astronomy, Mathematics, and Physics<li>
				<li>Microbiology and Molecular Biology<li>
				<li>Biology<li>
				<li>Chemistry<li>
			<li>Materials Science<li>
			<li>Biomedical and General Engineering<li>
			<li>Geology<li>
				<li>Medical Sciences<li>
				<li>Psychology<li>
				<li>Education<li>
				<li>Statistics<li>
                <li>Aeronautical and Aerospace Sciences<li>
				<li>Botany<li>
                <li>Environmental Science<li>
                <li>Archaeology<li>
				<li>Computer Science<li>
				<li>Geography<li>
				<li>Natural History and Biodiversity<li>
              </ol>
              
              <!-- End of article 7 -->
              
              <!-- Beginning of article 8 -->
              <h2>Article VIII: Offical Representation of the Academy</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>Where official representation of The Academy is desirable, the President, the President's designees, or an official representative appointed by Council shall represent The Academy.</p><br/>
              
              <h3>Section 2.</h3><br/>
              <p>No Officer or Academy Member shall receive reimbursement from Academy funds for such purposes except as included in the annual budget of the Academy or separately approved by Council from available funds.</p><br/>
              
              <h3>Section 3	.</h3><br/>
              <p>The official representative to serve as delegate to the American Association for the Advancement of Science (AAAS) shall be appointed by Council for a term designated by the AAAS. Actual expenses of the official representative in attending the Annual Meeting of AAAS may be paid if the funds are included in the budget or separately approved by Council.</p><br/>
              
              <h3>Section 4.</h3><br/>
              <p>The official representative to serve on the Board of Trustees of the Science Museum of Virginia shall be recommended by Council and serve as an exofficio member of Council. Actual expenses of the official representative may be paid if the funds are included in the budget or separately approved by Council. Expenses payable by the Board or Science Museum of Virginia shall not be reimbursed by The Academy. </p><br/>
              
              <h3>Section 5.</h3><br/>
              <p>No person or persons may make a binding contract or commit the Academy to a financial obligation except as approved or budgeted by the Council. Request for a variance should be directed to the Executive Officer for processing.</p><br/>
              
              <!-- End of article 8 -->
              
              
              <!-- Beginning of article 9 -->
              <h2>Article IX: Meeting and Business</h2><br/>
              <p>The annual meeting of this organization shall be held in the Spring of each year at a time and place selected by Council, which shall arrange for all appropriate sessions.</p><br/>
              
              <!-- End of article 9 -->
              
              
              <!-- Beginning of article 10 -->
              <h2>Article X: Executive Officer</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>The position of Executive Officer is hereby established for the purpose of providing administrative assistance to the officers and committee chairs.</p><br/>
              
              <h3>Section 2.</h3><br/>
              <p>The Executive Committee shall select a qualified person for this position, specify his or her duties, and set appropriate remuneration which shall be approved by Council.</p><br/>
              
              <h3>Section 3.</h3><br/>
              <p>The incumbent of this position shall serve at the pleasure of the Executive Committee, subject to review by Council.</p><br/>
              
              <h3>Section 4.</h3><br/>
              <p>The incumbent of this position shall attend all Council and Executive Committee Meetings and may participate in all deliberations as circumstances dictate, but, shall not have a vote in either body.</p><br/>
              
              <h3>Section 5.</h3><br/>
              <p>The incumbent of this position shall perform the following duties:</p><br/>
              <ol type = "A">
                <li>Account for the income and disbursements through one Academy General Fund Account. </li>
                <li>Keep the membership lists of the Academy up-to-date. </li>
                <li>Upon request, supply the Secretary and others a list of all members in good standing.</li>
                <li>Receive and disburse all funds as approved by Council and directed by the President.</li>
                <li>Submit to Council annually a written report of all receipts and disbursements accompanied by a statement of audit from a certified public accountant.</li>
                <li>Furnish quarterly financial summaries to the Executive Committee, members of Council, and to members of the Finance and Endowment Committee.</li>
                <li>Prepare annually and present to the Finance and Endowment Committee for review a 
proposed budget for Academy operations.</li>
              </ol>
              
              <h3>Section 6.</h3><br/>
              <p>The Executive Officer shall cause the distribution of the Academy minutes in a timely manner to members of Council and to members of the Executive Committee. Approved minutes will be submitted to The Virginia Journal of Science and to Academy Archives </p><br/>
              
              <!-- End of article 10 -->
              
              
              <!-- Beginning of article 11 -->
              <h2>Article XI: Visiting Scientists Program Director</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>The position(s) of Visiting Scientists Program Director(s) is hereby established for the purpose of implementing a Visiting Scientists Program in the Commonwealth in cooperation with the State Board of Education, the Science Museum of Virginia, and other organizations approved by Council.</p><br/>
              
              <h3>Section 2.</h3><br/>
              <p>The executive committee upon recommendation of the president shall select a qualified person(s) for this position and approve guidelines for conduct of this program.</p><br/>
              
              <h3>Section 3	.</h3><br/>
              <p>The incumbent (s) of this position shall serve at the pleasure of the Executive Committee, subject to review by Council.</p><br/>
              
              <h3>Section 4.</h3><br/>
              <p>The incumbent(s) of this position shall attend all Council and Executive Committee Meetings and may participate in all deliberations. </p><br/>
              
              <!-- End of article 11 -->

              <!-- Beginning of article 12 -->
              <h2>Article XII: The Director of the Virginia Junior Academy of Science</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>The position of Director of The Virginia Junior Academy of Science is hereby established for the purpose of providing leadership, supervision, and administrative support to the Virginia Junior Academy of Science and the Junior Academy of Science Committee.</p><br/>
              
              <h3>Section 2.</h3><br/>
              <p>The Executive Committee, subject to the approval of Council, shall select a qualified person for this position.</p><br/>
              
              <h3>Section 3	.</h3><br/>
              <p>The incumbent of this position shall serve at the pleasure of the Executive Committee subject to review by Council. </p><br/>
              
              <h3>Section 4.</h3><br/>
              <p>Duties of the Director of the Virginia Junior Academy of Science.</p><br/>
              <ol type = "A">
                <li>The Virginia Junior Academy of Science Director shall provide leadership, supervision and administrative support to the Virginia Junior Academy of Science.</li>
                <li>The Virginia Junior Academy of Science Director shall be a member of The Virginia Academy of Science, shall attend all Council and Executive Committee meetings and may participate in all deliberations.</li>
                <li>The Virginia Junior Academy of Science Director shall prepare an annual budget for the Virginia Junior Academy of Science and submit the Virginia Junior Academy of Science budget with Virginia Junior Academy of Science Committee recommendations to the Academy Finance and Endowment Committee by September 1.</li>
                <li>The Virginia Junior Academy of Science Director shall coordinate all fund raising by the Virginia Junior Academy of Science with the Fund Raising Committee, The Trust Committee, and The Finance and Endowment Committee.</li>
                <li>The Virginia Junior Academy of Science Director shall be responsible for the program of Virginia Junior Academy of Science at the annual meeting of the Academy and coordinate Virginia Junior Academy of Science activities with the Virginia Academy of Science Program Chair.</li>
                <li>The Virginia Junior Academy of Science Director shall be responsible for the development and expansion of the Virginia Junior Academy of Science as approved by Council.</li>
                <li>The Virginia Junior Academy of Science Director shall serve as Chair of the Junior Academy of Science Committee with the approval of the President.</li>
                <li>The Virginia Junior Academy of Science Director shall carry out other duties specified by the Virginia Junior Academy of Science Committee or the Executive Committee as approved by Council.</li>
              </ol>
              
              <!-- End of article 12 -->
              
              <!-- Beginning of article 13 -->
              <br/><h2>Article XIII: Associate Director of the Virginia Junior Academy of Science</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>The position of Associate Director of the Virginia Junior Academy of Science is hereby established for the purpose of providing administrative assistance to the Junior Academy of Science Committee, the Chair of the Junior Academy of Science Committee and the Director of the Virginia Junior Academy of Science.</p><br/>
              
              <h3>Section 2.</h3><br/>
              <p>The Executive Committee, subject to the approval of Council, shall select a qualified person for the position, specify his or her duties, and set appropriate remuneration, if any.</p><br/>
              
              <h3>Section 3	.</h3><br/>
              <p>The incumbent of this position shall serve at the pleasure of the Executive Committee, subject to annual review by Council and by the Junior Academy of Science Committee.</p><br/>
              
              <h3>Section 4.</h3><br/>
              <p>The incumbent of this position shall be a member of the Virginia Academy of Science, attend all Council meetings and all Virginia Junior Academy of Science Committee meetings, and may participate in all deliberations as circumstances dictate, but shall not have a vote in either body.</p><br/>
              
              <!-- End of article 13 -->

              
              <!-- Beginning of article 14 -->
              <h2>Article XIV: Virginia Scientists Newsletter</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>The Virginia Academy of Science shall publish periodically the Virginia Scientists as its newsletter.</p><br/>
              
              <h3>Section 2.</h3><br/>
              <p>The staff of the Virginia Scientists shall be composed of: </p><br/>
              <ol type = "A">
                <li>An Editor recommended by the Publications Committee and appointed by Council for a three-year term.</li>
                <li>Such Associate Editors, Assistant Editors, or Editorial board Members, appointed by the President, as are recommended by the Editor.</li>
              </ol><br/>
              
              <h3>Section 3.</h3><br/>
              <p>The Editor shall serve on the Publications Committee and on Council.</p><br/>
              
              <h3>Section 4.</h3><br/>
              <p>All members of the Virginia Academy of Science shall receive the Virginia Scientists.</p><br/>
              
              <!-- End of article 14 -->
              
              <!-- Beginning of article 15 -->
              <h2>Article XV: Offical Abbreviations</h2><br/>
              <h3>Section 1.</h3><br/>
              <p>The official abbreviation for the Virginia Academy of Science shall be VAS.</p><br/>
              
              <h3>Section 2.</h3><br/>
              <p>The official abbreviation for the Virginia Junior Academy of Science shall be VJAS.</p><br/>
              
              
              
              
              
              

              <br/>



              

			</div>
			
			
		</div>
	</body>
</html>