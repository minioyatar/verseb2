<?php 
    require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/core/init.php" : $_SERVER['DOCUMENT_ROOT'] . "/core/init.php");
    require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/includes/formProcessor.php" : $_SERVER['DOCUMENT_ROOT'] . "/includes/formProcessor.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Shakespeare Resource with Audio">
  <meta name="author" content="Herminio Yatar Jr">

  <title>Versebuster - A Shakespeare Performance Resource with Audio</title>

  <!-- Bootstrap Core CSS -->
  <link href="<?php echo SITE_URL_FILE; ?>css/bootstrap.min.css" rel="stylesheet">

  <!-- Optionally use Animate.css -->
  <link href="<?php echo SITE_URL_FILE; ?>css/animate.min.css" rel="stylesheet">

    
    <link href="<?php echo SITE_URL_FILE; ?>css/library/jquery-ui.min.css" rel="stylesheet">
    <link href="<?php echo SITE_URL_FILE; ?>css/library/jquery.remodal.css" rel="stylesheet"><!--Modal window file-->
    <link href="<?php echo SITE_URL_FILE; ?>css/library/font-awesome.min.css" rel="stylesheet">
    <!-- MP3 PLAYER -->
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL_FILE; ?>css/library/mp3-bar-ui.css" />
    <!-- END OF MP3 PLAYER -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/library/html5shiv.js"></script>
        <script src="js/library/respond.min.js"></script>
    <![endif]-->
</head>

    <body>

      <div id="wrapper">

        <!-- MP3 PLAYER -->
        <div class="sm2-bar-ui compact full-width">

          <div class="bd sm2-main-controls">

            <div class="sm2-inline-texture"></div>
            <div class="sm2-inline-gradient"></div>

            <div class="sm2-inline-element sm2-button-element">
              <div class="sm2-button-bd">
                <a href="#play" class="sm2-inline-button play-pause">Play / pause</a>
              </div>
            </div>

            <div class="sm2-inline-element sm2-inline-status">

              <div class="sm2-playlist">
                <div class="sm2-playlist-target">
                  <!-- playlist <ul> + <li> markup will be injected here -->
                  <!-- if you want default / non-JS content, you can put that here. -->
                  <noscript><p>JavaScript is required.</p></noscript>
                </div>
              </div>

              <div class="sm2-progress">
                <div class="sm2-row">
                  <div class="sm2-inline-time">0:00</div>
                  <div class="sm2-progress-bd">
                    <div class="sm2-progress-track">
                      <div class="sm2-progress-bar"></div>
                      <div class="sm2-progress-ball"><div class="icon-overlay"></div></div>
                    </div>
                  </div>
                  <div class="sm2-inline-duration">0:00</div>
                </div>
              </div>

            </div>

            <div class="sm2-inline-element sm2-button-element sm2-volume">
              <div class="sm2-button-bd">
                <span class="sm2-inline-button sm2-volume-control volume-shade"></span>
                <a href="#volume" class="sm2-inline-button sm2-volume-control">volume</a>
              </div>
            </div>

          </div>

          <div class="bd sm2-playlist-drawer sm2-element">

            <div class="sm2-inline-texture">
              <div class="sm2-box-shadow"></div>
            </div>

            <!-- playlist content is mirrored here -->

            <div class="sm2-playlist-wrapper">
              <ul class="sm2-playlist-bd">
                <li><a href="DEMO/SIR-THOMAS-MORE-PERFORMANCE-SPEED-VERSION.wav"><b>Sir Thomas More</b></a></li>
              </ul>
            </div>

          </div>
        </div>
        <!-- END OF MP3 PLAYER -->

    <div class="pdf-container">
      <div class='embed-responsive' style='padding-bottom:100%'>
        <div id="example3"></div>
      </div>
    </div>            


        <div class="row ">
          <div class="col-lg-12">
            <div class=" text-center">
              <p>Copyright <sup>&copy;</sup> 2010-2016 Versebuster, <sup>&#8471;</sup> 2010-2016 Versebuster. All rights reserved.</p>
              <!-- <p><A href="http://www.copyscape.com/dmca-tak  edown-notice-search/" target="_blank"><IMG SRC="http://banners.copyscape.com/images/cs-gr-234x16.gif" ALT="Protected by Copyscape DMCA Takedown Notice Infringement Search Tool" TITLE="Protected by Copyscape Plagiarism Checker - Do not copy content from this page." WIDTH="234" HEIGHT="16" BORDER="0"/></A></p> -->
            </div>

          </div>
        </div><!-- /#row footer -->           

      </div><!-- /#wrapper -->


    <script src="<?php echo SITE_URL_FILE; ?>js/library/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo SITE_URL_FILE; ?>js/library/bootstrap.min.js"  ></script>

    <!-- add ons library -->
    <script src="<?php echo SITE_URL_FILE; ?>js/library/jquery.easing.min.js"></script>
    <script src="<?php echo SITE_URL_FILE; ?>js/library/jquery.touchSwipe.min.js"  ></script>

    <script src="<?php echo SITE_URL_FILE; ?>js/library/jquery.bootstrap.newsbox.min.js" ></script> 
    
    <script src="<?php echo SITE_URL_FILE; ?>js/library/jquery-ui.min.js" ></script>


    <!-- MP3 PLAYER -->
    <script type="text/javascript" src="<?php echo SITE_URL_FILE; ?>js/soundmanager2.js"></script>
    <script type="text/javascript" src="<?php echo SITE_URL_FILE; ?>js/library/bar-ui.js"></script>
    <!-- end MP3 PLAYER -->

    <!-- PDF OBJECT -->
    <script type="text/javascript" src="<?php echo SITE_URL_FILE; ?>plugins/PDFObject-master/pdfobject.min.js"></script>
  <script>PDFObject.embed("<?php echo SITE_URL_FILE; ?>audio-speeches/DEMO/PDF/<?php echo 'TH_IS_STM_ 1_More_Act 2.[4]_Grant them removed, and grant  that this your noise_2016.08.02 BASIC A4'; ?>.pdf", "#example3");</script>

    </body>

</html>



    
