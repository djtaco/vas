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
					<p><a href="forgot.php">Forgot your password?</a></p>
					<p>Not a member yet? <a href="#">Sign up now!</a></p>
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
				<h1>Style Manual</h1><br/>
              <h2>Manuscript preparation</h2><br/>
              <p>All manuscripts and correspondence should be addressed to the Editor. The Virginia Journal of Science welcomes for consideration original articles and short notes in the various disciplines of engineering and science. Cross-disciplinary papers dealing with advancements in science and technology and the impact of these on man and society are particularly welcome. Submission of an article implies that the article has not been published elsewhere while under consideration by the Journal.</p><br/><p>Three complete copies of each manuscript and figures are required. It is also suggested that authors include a diskette in PC format containing a text file (ASCII, MSWord or WordPerfect) of the manuscript. Original figures need not be sent at this time. Authors should submit names of three potential reviewers. All manuscripts must be double-spaced. Do not use special effects such as bold or large print.</p><br/><p>The title, author's name, affiliation and address should be placed on a covering page. Include a suggested running head of not more than 36 characters and spaces.  Figures should be identified on the back with the appropriate Figure number and author's name and Figure captions should be on a separate page at the end of the text.  Each figure and table should be mentioned specifically in the text, in numbered order. When formatting Tables and Figures, consider the Journal's column size (4.5 X 7.5 inches), since reduction or enlargement may be required.</p><br/>
              
              <h3>Length</h3><br/>
              <p>Ten to 20 pages is usual.  Longer manuscripts should be discussed with the Editor.</p><br/>
              
              <h3>Typing</h3><br/>
              <ul>
			  <li>Use double-spacing throughout all text. Single spacing may be used in tables, figure captions and each reference citation (double space between individual citations). Type on one side only of 81/2 × 11-inch white paper.</li>
			  <li>There shall be no more than twelve characters per inch for monospaced fonts. If a word processor is used, 12 point font size using one of the following print fonts - Helvetica, Times, Courier, or Geneva.</li>
			  <li>Do not use a font larger than 14 point for the title, text or text sections.</li>
              <li>Do not change font size. A change of typeface is acceptable for some cases of emphasis.</li>
              <li>Margins shall be not less than 1" (2.5 cm) on all sides of all pages INCLUDING appendices.</li>
              <li>Dot matrix printers are acceptable if letter quality type is used. Do not use draft mode. All copies must be dark enough to photocopy.</li>
              </ul><br/>
              
              <h3>General Style</h3><br/>
              <ul>
              
			  <li>Even though some journals accept first person writing, we prefer that you do not. Avoid using the first person, I or we, in writing. Keep your writing impersonal, in the third person. Instead of saying, "we weighed the frogs and put them in a glass jar," write, "the frogs were weighed and put in a glass jar."</li>
			  <li>All scientific names (genus and species) must be italicized.</li>
			  <li>Use the metric system of measurements.</li>
              <li>Be aware that the word data is plural while datum is singular. This affects the choice of a correct verb. The word "species" is used both as a singular and as a plural.</li>
              <li>Numbers should be written as numerals when they are greater than ten or when they are associated with measurements; for example, 6 mm or 2g, but two explanations or six factors. When one list includes numbers over and under ten, all numbers in the list may be expressed as numerals; for example, 17 sunfish, 13 bass, and 2 trout. Never start a sentence with numerals. Spell all numbers beginning sentences.</li>
              <li>Be sure to divide paragraphs correctly and to use starting or ending sentences that indicate the purpose of the paragraph. A report or a section of a report should not be one long paragraph.</li>
              <li>Every sentence must have a subject and a verb.</li>
              <li>Avoid the use of slang and the overuse of contractions.</li>
              <li>Be consistent in the use of tense throughout a paragraph--do not switch between past and present.</li>
              <li>Be sure that pronouns refer to antecedents. For example, in the statement "Sometimes cecropia caterpillars are in cherry trees but they are hard to find," does "they" refer to caterpillars or trees?</li>
              <li>After writing a report, read it over, watching especially for lack of precision and ambiguity. Never use words such as: may, might, could, perhaps, etc. Each sentence should present a clear message. The following examples illustrate lack of precision:</li><ol>
<li>There may have been an error in our temperature measurements.</li>
<li>The sample was incubated in mixture A minus B plus C. Does the mixture lack both B and C or lack B and contain C?</li>
<li>The title "Protection against Carcinogenesis by Antioxidants" leaves the reader wondering whether antioxidants protect from or cause cancer.</li>
                </ol></ul><br/><p>The only way to prevent such errors is to read and think about what you write. Learn to reread and edit your work.</p><br/><br/>
              
              <h3>Symbols, Acronyms, Spelling and Measurement</h3><br/>
              <ul>
              <li>Define all symbols and spell out all acronyms the first time they are used.</li>
              <li>All weights and measures must be in the metric system, SI units. Abbreviations may be used for units of weight or measurement that describe data.</li>
              <li>A suggestion for conventions and examples of table style, abbreviations, symbols, etc., consult The CBE Manual for Authors, Editors, and Publishers. Chicago (IL): Council of Biology Editors (1994 or more recent). For spelling consult The American Heritage Dictionary of the English Language (Soukhanov 1992 or more recent).</li>
              </ul><br/>
              
              <h3>Illustrations and Figures</h3>
  			  <ul>
              <li>All figures and tables should be able to stand alone, i.e., have descriptive titles and should include a legend explaining any symbols, abbreviations, or special methods used.</li>
              <li>Figures and tables should be numbered separately and should be referred to in the text by number. The numbers should be in order as they appear in the text., For example, do not refer to table 2 before you refer to table 1.</li>
              <li>Black-and-white figures, photographs, maps, line drawings, and graphs must be high quality, camera-ready, black-and-white prints, photostats, or original art.  If submitted as a file, the resolution must be 300 dpi or greater.</li>
              <li>Captions should allow the figure to be stand by itself without additional explanation.</li>
              <li>When labeling figures, make sure to use large enough letters so that they will be no smaller than 12 points. In drawings and graphs, please capitalize only the first letter of the first word of each label; please use a typeface without bold or italics (unless genus, species, or gene names).</li>
              <li>All figures and images must be within the typing area of the paper. They may be any size, but under no circumstances may they extend into the one inch margin.</li>
              </ul><br/>              
              
              
              <h3>Tables</h3>
  			  <ul>
              <li>Each column must have a descriptive heading. Lower case letters should be used to indicate table footnotes.</li>
              <li>The table caption should allow the table to be stand by itself without additional explanation.</li></ul><br/>
              
              <h3>Disk submission</h3>
              <ul>
              <li>Submit a high-density floppy disk (31/2-inch PC compatible ) or CD containing a word processing file of the document</li>
              <li>Acceptable file types are  Word Perfect, Microsoft Word, RTF or ASCII text file.</li>
              <li>Place figures, graphs, and images,at the end of the text. The only exception is a table created by the word processor's "Insert Table" function.</li>
              </ul><br/><br/>
              
              <h2>Text Components</h2><br/>
              
              <p>Written reports exist for a long time and yield long-term benefits for the author and others. Learning to write effectively can only be learned by writing. For this reason, most papers submitted by new scientists receive many comments and usually require rewriting. Papers submitted by senior scientists usually require few corrections.</p><br/><p>Scientific research is a group activity. Individual scientists perform experiments to test hypotheses about biological phenomena. After their experiments are completed and duplicated, these researchers attempt to persuade others to accept or reject their hypotheses. The scientific paper is the vehicle of persuasion and an archival record for future generations. When it is published, it is available to other scientists for review. If the results stand up to criticism, they become part of the accepted body of scientific knowledge unless later disproved.</p><br/><br/><p>A scientific report usually consists of the following:</p><br/>
              <ol>
                <li>Title</li>
                <li>Abstract</li>
                <li>Introduction</li>
                <li>Materials and Methods</li>
                <li>Results</li>
                <li>Discussion</li>
                <li>Acknowledgments</li>
                <li>Literature Cited</li>
              </ol><br/>

              <p>There is general agreement among scientists that each section of the report should contain specific types of information. The following information should be included:</p><br/>
              <h3>Title</h3>
              <p>The title should be less than ten words and should reflect the factual content of the paper. Scientific titles are not designed to catch the reader's fancy. A good title is straightforward and uses key words in the field.</p><br/><br/>
              
              <h3>Abstract</h3><br/>
              <p>The purpose of an abstract is to allow the reader to judge whether it would serve his or her purposes to read the entire report. A good abstract is a concise (100 to 250 words) summary of the purpose of the report, the data presented, and the author's major results and conclusions. Write the abstract after completing the rest of the report, even though the abstract comes just after the title. The abstract should never contain images or reference citations.</p><br/><br/>
              
              <h3>Introduction</h3><br/>
              <p>The introduction defines the subject of the report. It must outline the scientific purpose(s) or objective(s) for the research performed and give the reader sufficient background to understand the rest of the report and what has been done previously. Care should be taken to limit the background to whatever is pertinent to the experiment. A good introduction will answer several questions, including the following:</p><br/><ul>
              <li>Why was this study performed? Answers to this question may be derived from observations of nature or from the literature.</li>
              <li>What knowledge already exists about this subject? The answer to this question must review the literature, showing the historical development of an idea and including the confirmations, conflicts, and gaps in existing knowledge.</li>
              <li>What is the specific purpose of the study?</li>
              <li>The specific hypotheses and experimental design pertinent to investigating the topic should be described.</li>
              </ul><br/><br/>
              
              <h3>Materials and Methods</h3><br/>
              <p>As the name implies, the materials and methods used in the experiments should be reported in this section. The difficulty in writing this section is to provide enough detail for the reader to understand the experiment without overwhelming him or her. When procedures from a lab book or another report are followed exactly, simply cite the work, noting that details can be found in that particular source. However, it is still necessary to describe special pieces of equipment and the general theory of the assays used. This can usually be done in a short paragraph, possibly along with a drawing of the experimental apparatus. Generally, this section attempts to answer the following questions:</p><br/><ul>
              <li>What materials were used?</li>
              <li>How were they used?</li>
              <li>Where and when was the work done? (This question is most important in field studies.)</li>
              </ul><br/><br/>
              
              <h3>Results</h3><br/>
              <p>The results section should summarize the data from the experiments without discussing their implications. The data should be organized into tables, figures, graphs, photographs, and so on. But data included in a table should not be duplicated in a figure or graph.</p><br/><p>This section of your report should enable the reader to develop an appreciation of the general trends in your data and the degree of variability in the results. Concentrate on general trends and differences and not on trivial details. Many authors organize and write the results section before the rest of the report.</p><br/><br/>
              
              <h3>Discussion</h3><br/>
              <p>In the discussion section, the data collected are interpreted in relation to the hypotheses or purposes proposed in the introduction. Your findings should be related to existing knowledge on the topic. You should also be able to suggest future experiments that might clarify areas of doubt in your results.</p><br/><p>This section should not just be a restatement of the results, but should stress interpretation of the data, relating it to existing theory and knowledge. Speculation is appropriate if it is so identified. Suggestions for the improvement of techniques or experimental design may also be included here. In writing this section, you should explain the logic that allows you to accept or reject your original hypothese</p><br/><br/>
              
              <h3>Acknowledgments</h3><br/>
              <p>In this section the writer gives credit for special assistance received from  other sources. Stating specifically what assistance was provided (e.g. someone who ran statistical analysis, someone who injected animals, etc.)</p><br/>
              <h3>Statement of Responsibility</h3><br/>
              <p>Multi-author papers must have a statement indicating the nature of the participation and responsibility of each author.  This will be included as part of the ACKNOWLEDGMENTS.</p><br/><br/>
              
              <h3>Literature Cited</h3><br/>
              <p> All references must be properly cited in the paper. When information belongs to others, they must be given proper credit. Failure to do so is plagiarism.</p><br/><p>The Literature cited is a list of all books, publications, and communications from which significant materials were cited in the paper.</p><br/><ul>
              <li>The listing is alphabetical by the last name of the first author of a citation.</li>
              <li>Literature citations from computer sources generaally are unacceptable.</li>
              <li>Computer sources should be archived (files, databases, books, etc. which are available for inspection but are put on-line for easy access and convenience) or refereed on-line journals.</li></ul><br/>
              <h3>In-text Citations</h3>
              <ul>
                <li>Computer sources should be archived (files, databases, books, etc. which are available for inspection but are put on-line for easy access and convenience) or refereed on-line journals.</li><ol>
                <li>Fox, in 1978, investigated the effects of hormones on the nest-building behavior of catbirds.</li>
                <li>Hormones are known to influence the nest-building behavior of catbirds (Fox, 1978).</li>
                </ol>
                <li>Multiple citations should be listed by year of publication, earliest first: (Author, date; Author, date).</li>
                <li>Use the first author's name and "et al." for in-text citation of works with more than two authors or editors (Author et al., date); list every author or editor in the "Literature Cited" list unless there are more than 10 authors.</li>
                <li>All works cited in the text must be listed alphabetically by the last name of the first author in Literature Cited; works not cited must not be listed. Provide the full names of all journals.</li>
              </ul>
              <br/><br/><br/>
              <h2>Some Examples for Literature Cited</h2><br/>
              <p>Personal communications, unpublished data, and manuscripts in preparation should be cited in the text. The citation should include the source's name and affiliation in the following form: (Henry J. Smurd, university or other affiliation, city, state, personal communication). Letters should be available from authors of personal communications giving permission to cite the unpublished data.</p><br/><br/>
              
              <h3>Journal Article</h3><br/>
              <p>McCaffrey, Cheryl A. and Raymond D. Dueser. 1990. Plant associations of the Virginia barrier islands. Virginia Journal of Science 41:282-299.</p><br/>
              <p>Bryant, P. J. and P. Simpson. 1984. Intrinsic and extrinsic control of growth in developing organs. Quarterly Review of Biology 59:387- 415.</p><br/><br/>

              <h3>Book</h3><br/>
              <p>Spry, A. 1969. Metamorphic Textures. Pergamon Press, New York. 350pp.</p><br/><br/>
              
              <h3>Chapter in a Book</h3><br/>
              <p>Southwood, T. R. E. 1981. Bionomic strategies and population parameters. Pages 30-52 In May, R. M., ed. Theoretical Ecology. Sunderland (MA): Sinauer Associates.</p><br/><br/>
              
              <h3>Technical Report</h3><br/>
              <p>Lassister, R. R.and J. L. Cooley. 1985. Prediction of ecological effects of toxic chemicals, overall strategy and theoretical basis for the ecosystem model. Washington (DC): Government Printing Office. Report no. 83-261-685. Available from: National Technical Information Service, Springfield, VA.</p><br/><br/>
              
              <h3>Meeting Paper</h3><br/>
              <p>Kleiman, R. L. P., R. S. Hedin and H. M. Edenbom. 1991. Biological treatment of minewater--an overview. Paper presented at the Second International Conference on Abatement of Acid Drainage. 16-18 Sep 1991. Montreal, Canada. </p><br/><br/>
              
              <h3>Online Article</h3><br/>
              <p>Grissino-Mayer, H. D. 1997. Ultimate Web pages about tree rings and tree-ring research. http://www.valdosta.edu/-grissino> (4 November 1997).</p><br/><br/>
              
              <h3>Appendix</h3><br/>
              <p>This section contains raw data too lengthy to include in the results section of the text but important for an understanding of the entire paper.</p>
              <ul>
                <li>The appendix could include data tables, graphs, charts, illustrations, and pictures.</li>
                <li>All materials in this section must meet the same requirements as the text of the paper.</li>
              </ul>
              
              
              
			</div>
			
		</div>
	</body>
</html>