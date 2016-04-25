<?PHP

require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/php/header.php" : $_SERVER['DOCUMENT_ROOT'] . "/php/header.php");

?>


<!-- row -->	
<div class="row main-text">
	<div class="col-lg-12"><!-- #col-lg-9 introduction content -->
		<div class="well pdf-header">
			<h3 class="page-title-ext text-center branding-style-reg" style="">THEATRE SCRIPT DEMO</h3>
			
			<p class="text-center"><strong>INDIVIDUAL SPEECHES </strong></p>
		</div>

		<div class="well pdf-container">
			<div class='embed-responsive' style='padding-bottom:100%'>
			    <object data='<?php echo SITE_URL_FILE; ?>theatre-scripts/individual-speeches-index/modern/PDF/TH_IS_R3_1_Richard_Act-1.1_Now-is-the-winter-of-our-discontent_2016.04.23_DEMO.pdf' type='application/pdf' width='100%' height='100%'></object>
			</div>
			<?PHP
				// require_once(SITE_URL . "theatre-scripts/individual-speeches-index/tableTypes.php");
			?>
			<br>
			<br>
			<div class="text-center" >
				<!-- <h3><a href="<?php //echo SITE_URL_FILE; ?>theatre-scripts/full-play-index/index-full-play.php">Full Play</a></h3> -->
			</div>

			<div class="text-center" >
				<!-- <h3><a href="<?php //echo SITE_URL_FILE; ?>theatre-scripts/individual-speeches-index/index-individual-speeches.php">Individual Speeches</a></h3> -->
			</div>	
			<br>
			<br>
		</div>
                                       


	</div><!-- ./ #col-lg-9 introduction content -->


<!--     <div class="col-lg-3 sidebars" >
        <img src="<?php //echo SITE_URL_FILE; ?>images/300x250-web-ad.jpg" class="img-responsive">
    </div> -->

	<!-- #col-lg-3 AD-->	  
	<!-- <div class="col-lg-3 sidebars">	     -->
	    <!-- <div class="add-300x250" > -->
            <!-- <img src="<?php //echo SITE_URL_FILE; ?>images/sonderponic300x600.png" class="img-responsive" > -->
        <!-- </div> -->
	<!-- </div> --><!-- #col-lg-3 AD 300X250-->	





</div><!-- /#row main-text-->



<?PHP

require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/php/footer.php" : $_SERVER['DOCUMENT_ROOT'] . "/php/footer.php");

?>






