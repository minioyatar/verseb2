<?PHP

require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/php/header.php" : $_SERVER['DOCUMENT_ROOT'] . "/php/header.php");

?>


<!-- row -->	
<div class="row main-text">
	<div class="col-lg-9"><!-- #col-lg-9 introduction content -->
		<div class="well">
			<p style="color:#b00000">MODERN</p>
			<h3 class="page-title-ext text-center branding-style-reg" style="color:#b00000">The Two Noble Kinsmen</h3>
			<?PHP
				require_once(SITE_URL . "theatre-scripts/full-play-index/tableTypes.php");
			?>	
		</div>
                                       


	</div><!-- ./ #col-lg-9 introduction content -->


    <div class="col-lg-3 sidebars" >
        <img src="<?php echo SITE_URL_FILE; ?>images/300x250-web-ad.jpg" class="img-responsive">
    </div>

	<!-- #col-lg-3 AD-->	  
	<div class="col-lg-3 sidebars">	    
	    <!-- <div class="add-300x250" > -->
            <!-- <img src="<?php //echo SITE_URL_FILE; ?>images/sonderponic300x600.png" class="img-responsive" > -->
        <!-- </div> -->
	</div><!-- #col-lg-3 AD 300X250-->	





</div><!-- /#row main-text-->



<?PHP

require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/php/footer.php" : $_SERVER['DOCUMENT_ROOT'] . "/php/footer.php");

?>