
					<!-- FOOTER NAVIGATION -->
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
    							<ul class="nav navbar-nav" style="font-size:13px">
                                    <li class="index navi <?php echo ($page_name=='index.php' || $page_name=='')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>"><strong>HOME</strong></a></li>
                                        <!-- <li class="blog navi <?php //echo ($page_name=='blog')?'highlight':''; ?>"><a href="<?php //echo SITE_URL_FILE; ?>blog">BLOG</a></li>
                                        <li class="forum navi <?php //echo ($page_name=='forum')?'highlight':''; ?>"><a href="<?php //echo SITE_URL_FILE; ?>forum">FORUM</a></li> -->
                                        <li class="community navi <?php echo ($page_name=='community.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>community">COMMUNITY</a></li>
                                        <li class="jobs navi <?php echo ($page_name=='jobs.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>jobs">JOBS</a></li>
                                        <li class="faq navi <?php echo ($page_name=='faq.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>faq">FAQS</a></li>
                                        <li class="quiz navi <?php echo ($page_name=='quiz.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>quiz">QUIZ</a></li>   
                                        <li class="copyright navi <?php echo ($page_name=='copyright.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>copyright">COPYRIGHT</a></li>   
                                        <li class="contact navi <?php echo ($page_name=='contact.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>contact">CONTACT</a></li>
                                        <li class="sponsor navi <?php echo ($page_name=='sponsor.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>sponsor">SPONSORS</a></li> -->
                                        <li class="shop navi <?php echo ($page_name=='shop.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>shop"><strong>SHOP</strong></a></li>
    							</ul>
    						</div><!-- /.bs-example-navbar-collapse-2-->	
						</nav><!-- /.navbar navbar-inverse sub-main-nav -->
					</div>

					<div class="row ">
						<div class="col-lg-12">
							<div class=" text-center">
								<p>Copyright <sup>&copy;</sup> 2010-2016 Versebuster, <sup>&#8471;</sup> 2010-2016 Versebuster. All rights reserved.</p>
								<!-- <p><A href="http://www.copyscape.com/dmca-tak	edown-notice-search/" target="_blank"><IMG SRC="http://banners.copyscape.com/images/cs-gr-234x16.gif" ALT="Protected by Copyscape DMCA Takedown Notice Infringement Search Tool" TITLE="Protected by Copyscape Plagiarism Checker - Do not copy content from this page." WIDTH="234" HEIGHT="16" BORDER="0"/></A></p> -->
							</div>

						</div>
					</div><!-- /#row footer -->

				</div><!-- /.col-md-9-->
			</div><!-- /#row -->	

			<?PHP
			require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/php/right-sidebar.php" : $_SERVER['DOCUMENT_ROOT'] . "/php/right-sidebar.php");
			?>

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

<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
<!-- <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
	<h1>Dialog example</h1>
	<p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He who searches for meaning here will be sorely disappointed.</p>
</div>	 -->	

		<!-- jQuery Version 1.11.0 -->


		<script src="<?php echo SITE_URL_FILE; ?>js/library/jquery-1.11.0.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo SITE_URL_FILE; ?>js/library/bootstrap.min.js"  ></script>

		<!-- add ons library -->
		<script src="<?php echo SITE_URL_FILE; ?>js/library/jquery.easing.min.js"></script>
		<script src="<?php echo SITE_URL_FILE; ?>js/library/jquery.touchSwipe.min.js"  ></script>

		<script src="<?php echo SITE_URL_FILE; ?>js/library/jquery.bootstrap.newsbox.min.js" ></script>	
		
		<script src="<?php echo SITE_URL_FILE; ?>js/library/jquery-ui.min.js" ></script>

		<!--   custom script -->
		<script src="<?php echo SITE_URL_FILE; ?>js/vbCustom.js"  ></script>

		<!-- MODAL WINDOW -->
		<script src="<?php echo SITE_URL_FILE; ?>js/library/jquery.remodal.min.js"></script>
		<!-- endMODAL WINDOW -->

		<!-- MP3 PLAYER -->
		<script type="text/javascript" src="<?php echo SITE_URL_FILE; ?>js/soundmanager2.js"></script>
		<script type="text/javascript" src="<?php echo SITE_URL_FILE; ?>js/library/bar-ui.js"></script>
		<!-- end MP3 PLAYER -->

		<!-- PDF OBJECT -->
		<script type="text/javascript" src="<?php echo SITE_URL_FILE; ?>plugins/PDFObject-master/pdfobject.min.js"></script>
		<script>PDFObject.embed("<?php echo SITE_URL_FILE; ?>theatre-scripts/individual-speeches-index/modern/PDF/<?php echo 'TH_IS_R3_1_Richard_Act-1.1_Now-is-the-winter-of-our-discontent_2016.04.23_DEMO'; ?>.pdf", "#example1");</script>
		<script>PDFObject.embed("<?php echo SITE_URL_FILE; ?>theatre-scripts/individual-speeches-index/modern/PDF/<?php echo 'TH_IS_STM_ 1_More_Act 2.[4]_Grant them removed, and grant that this your noise_2016.08.02_A3'; ?>.pdf", "#example2");</script><!--theater script sir thomas more-->
		<script>PDFObject.embed("<?php echo SITE_URL_FILE; ?>audio-speeches/DEMO/PDF/<?php echo 'TH_IS_STM_ 1_More_Act 2.[4]_Grant them removed, and grant  that this your noise_2016.08.02 BASIC A4'; ?>.pdf", "#example3");</script>
		<script>PDFObject.embed("<?php echo SITE_URL_FILE; ?>eplay/DEMO/PDF/<?php echo 'Sir Thomas More_ePlay_DEMO_2016.08.02'; ?>.pdf", "#example4");</script>
		<script>
		soundManager.setup({
		  // required: path to directory containing SM2 SWF files
		  url: '/versebuster/swf/'
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
