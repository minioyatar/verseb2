

						<!--<div class="row"><a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Hide/Show Menu</a></div>-->


						<div class="row" style="">
    					<!--==============================================MAIN NAV==================================================-->
	    					<nav id="" class="navbar navbar-inverse sub-main-nav footer" role="navigation">

	    						<!-- Brand and toggle get grouped for better mobile display -->
	    						<div class="navbar-header">
	    							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3">
	    								<span class="sr-only">Toggle navigation</span>
	    								<span class="icon-bar"></span>
	    								<span class="icon-bar"></span>
	    								<span class="icon-bar"></span>
	    							</button>
	    						</div><!-- /.navbar-header -->
	    						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
	    							<ul class="nav navbar-nav ">
	    								<li class="index "><a href="index.php"><strong>HOME</strong></a></li>
	    								<li class="blog"><a href="blog.php">BLOG</a></li>
	    								<li class="forum"><a href="forum.php">FORUM</a></li>
	    								<li class="community"><a href="community.php">COMMUNITY</a></li>
	    								<li class="faq"><a href="faq.php">FAQS</a></li>
	    								<li class="copyright"><a href="copyright.php">COPYRIGHT</a></li>	
	    								<li class="contact"><a href="contact.php">CONTACT</a></li>
	    								<li class="shop"><a href="shop.php"><strong>THE SHOP</strong></a></li>
	    							</ul>
	    						</div><!-- /.bs-example-navbar-collapse-2-->	
							</nav><!-- /.navbar navbar-inverse sub-main-nav -->
						</div>

						<div class="row ">
							<div class="col-lg-12">
								<div class=" text-center">
									<p>Copyright <sup>&copy;</sup> 2010-2015 Versebuster, <sup>&#8471;</sup> 2010-2015 Versebuster. All rights reserved.</p>
									<!-- <p><A href="http://www.copyscape.com/dmca-tak	edown-notice-search/" target="_blank"><IMG SRC="http://banners.copyscape.com/images/cs-gr-234x16.gif" ALT="Protected by Copyscape DMCA Takedown Notice Infringement Search Tool" TITLE="Protected by Copyscape Plagiarism Checker - Do not copy content from this page." WIDTH="234" HEIGHT="16" BORDER="0"/></A></p> -->
								</div>

							</div>
						</div><!-- /#row footer -->						


				</div><!-- /.container-fluid -->
			</div><!-- /#page-content-wrapper -->
		</div><!-- /#wrapper -->

<!--BACK TO THE TOP  -->
<div class="scroll-top-wrapper ">
    <span class="scroll-top-inner glyphicon glyphicon-arrow-up" style="font-size: 30px; margin-top: 8px;"></span>
</div>
<!-- END BACK TO THE TOP  -->
<!-- POP UP -->

<div id="disclaimer" style="display:none;">
    
	<div id="blacklay"></div>
	
	<div id="disclaimerlay" class="col-lg-6 col-sm-6">
	    <p id="closePopUp">[CLOSE]</p>
		<div id="disclaimer_scroll" >
			<div class="disclaimer_title">
				<div id="lay_title">Title here</div>
					<p id="disclaimer_desc">This is were the message is </p>
			</div>
		</div>
	</div>
</div>

<!-- END OF POP UP -->


<!-- pop up for quiz     -->
	    <div class="text-content" id="quiz_container">
		<h2 id='close-btn' style="float: right; color: #fff; font-weight: bold; height: 20px; margin-top: -30px;">[X]</h2>
		  <form id="quiz-form" action="/quiz/quiz_admin/includes/front_processors.php" method="POST" name="quiz">
			<div id="test-container">
			    <?php
				 // $all_quiz_set = get_all_quiz();
				 // while($question_ans = mysql_fetch_array($all_quiz_set)){
				 //      echo "<h3>{$question_ans["quiz_question"]}</h3>";
				 //      echo "<h3><input type=\"radio\" name=\"{$question_ans["quiz_id"]}\" value=\"{$question_ans["quiz_an1"]}\">{$question_ans["quiz_an1"]}</h3>";
				 //      echo "<h3><input type=\"radio\" name=\"{$question_ans["quiz_id"]}\" value=\"{$question_ans["quiz_an2"]}\">{$question_ans["quiz_an2"]}</h3>";
				 //      echo "<h3><input type=\"radio\" name=\"{$question_ans["quiz_id"]}\" value=\"{$question_ans["quiz_an3"]}\">{$question_ans["quiz_an3"]}</h3>";
				 //      echo "<h3><input type=\"radio\" name=\"{$question_ans["quiz_id"]}\" value=\"{$question_ans["quiz_an4"]}\">{$question_ans["quiz_an4"]}</h3>";
				 // }
				 // echo "<input name=\"submit_answer\" type=\"submit\" class=\"button\" value=\"submit\" style=\"float: right;\"/>";
			    ?>
			</div>
		       <h2 id="nextQ">Next</h2>
		  </form>
	    </div>
<!--end pop up for quiz  -->





<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
<!-- <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
	<h1>Dialog example</h1>
	<p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He who searches for meaning here will be sorely disappointed.</p>
</div>	 -->	

		<!-- jQuery Version 1.11.0 -->


		<script src="/versebuster2/js/library/jquery-1.11.0.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="/versebuster2/js/library/bootstrap.min.js"  ></script>

		<!-- add ons library -->
		<script src="/versebuster2/js/library/jquery.easing.min.js"></script>
		<script src="/versebuster2/js/library/jquery.touchSwipe.min.js"  ></script>

		<script src="/versebuster2/js/library/jquery.bootstrap.newsbox.min.js" ></script>	
		
		<script src="/versebuster2/js/library/jquery-ui.min.js" ></script>

		<!--   custom script -->
		<script src="/versebuster2/js/vbCustom.js"  ></script>

	<!--	quiz-->
	    <script type="text/javascript" src="/versebuster2/quiz/quiz_admin/js/jquery.blockUI.js"></script>
	    <script type="text/javascript" src="/versebuster2/quiz/quiz_admin/js/functions-JS.js"></script>
	<!--end of quiz-->

		<!-- MODAL WINDOW -->
		<script src="/versebuster2/js/library/jquery.remodal.min.js"></script>
		<!-- endMODAL WINDOW -->

		<!-- MP3 PLAYER -->
		<script type="text/javascript" src="/versebuster2/js/soundmanager2.js"></script>
		<script type="text/javascript" src="/versebuster2/js/library/bar-ui.js"></script>
		<!-- end MP3 PLAYER -->

<script>
soundManager.setup({
  // required: path to directory containing SM2 SWF files
  url: '/versebuster2/swf/'
});
  $(document).on("confirm", ".remodal", function () {
  	soundManager.stopAll();
    console.log("confirm");
  });
  $(document).on("closed", ".remodal", function (e) {
  	soundManager.stopAll();
    console.log('closed' + (e.reason ? ', reason: ' + e.reason : ''));
  });  
</script>		

		<!-- for testing Script -->		
		<script type="text/javascript"> 

		</script>

		  

	</body>

</html>



    
