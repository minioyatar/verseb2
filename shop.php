<?PHP

require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/php/header.php" : $_SERVER['DOCUMENT_ROOT'] . "/php/header.php");

?>


<!-- row -->	
<div class="row main-text">
    	<div class="well" style="margin-bottom: 0px;">
            <h3 class="page-title-ext text-center branding-style-reg">SHOP</h3>

    	    <p class="text-center"><strong>FOUR CORE PRODUCTS</strong></p>
    	    <p class="text-center">CLICK THE BEER MATS TO GO SHOPPING</p>
        </div>

        <div class="become-mem-action">
          <div class="catch-phrase">
            <p  class="text-center" style="font-size:18px; " >Subscribe, and you enjoy FREE Audio and 50% discounts on the rest <i>!</i></p>
            <p class="text-center call-act-arrow" >Subscription starts as low as $1.99 a month</p>
          </div>
          <p class="text-center call-to-act" style="font-size:18px"><a href="#">SUBSCRIBE - It's easy as 1-2-3 <i>!</i></a></p>
        </div> 

        <div class="well col-md-12" >
        <br>
        <br>         
            <div class="col-md-12" style="margin-bottom:20px">
                <div class="col-md-6">
                    <a style="width: 100%" href="<?php echo SITE_URL_FILE; ?>eplay/index-eplay" ><img alt="Icon for ePlay" class="img-responsive center-block" src="<?php echo SITE_URL_FILE; ?>images/square_eplay.jpg" style="width:75%; float: right;"></a>
                </div>
                <div class="col-md-6">
                    <a style="width: 100%" href="<?php echo SITE_URL_FILE; ?>theatre-scripts/full-play-index/index-full-play" ><img alt="Icon for printable Theatre Scripts – Full-play, Scenes and Individual Speeches" class="img-responsive center-block"  src="<?php echo SITE_URL_FILE; ?>images/theatre_scripts.jpg" style="width:75%; float: left;"></a>
                </div>
            </div>

            <div class="col-md-12" style="margin-bottom:60px">
                <div class="col-md-6">
                    <a style="width: 100%" href="<?php echo SITE_URL_FILE; ?>audio-speeches/index-audio" ><img alt="Icon for Versebuster Audio &#8471;" class="img-responsive center-block"  src="<?php echo SITE_URL_FILE; ?>images/square_audio.jpg" style="width:75%; float: right;"></a>
                </div>
                <div class="col-md-6">
                    <a style="width: 100%" href="<?php echo SITE_URL_FILE; ?>how-to-series" ><img alt="Icon for Teacher Slide Shows" class="img-responsive center-block"  src="<?php echo SITE_URL_FILE; ?>images/slide_square.jpg" style="width:75%; float: left;"></a>
                </div>
            </div>
        </div>

</div><!-- /#row main-text-->



<?PHP

require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/php/footer.php" : $_SERVER['DOCUMENT_ROOT'] . "/php/footer.php");

?>