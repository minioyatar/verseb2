<?php

?>
<?PHP
require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/core/init.php" : $_SERVER['DOCUMENT_ROOT'] . "/core/init.php");
require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/includes/formProcessor.php" : $_SERVER['DOCUMENT_ROOT'] . "/includes/formProcessor.php");
    // require_once(SITE_URL . '/includes/formProcessor.php');
    // require_once $_SERVER["DOCUMENT_ROOT"] . '/versebuster/core/init.php';
    // require_once  $_SERVER['DOCUMENT_ROOT'] . '/versebuster/includes/formProcessor.php';

$_db = DB::getInstance();
$user = new User();
$validate = new Validate();
$token = Token::generate();

// $root = realpath($_SERVER["DOCUMENT_ROOT"]);
// define('ROOTPATH', __DIR__);
// define('ROOTPATHs', dirname(__FILE__));
// echo ROOTPATHs . ' | ' . ROOTPATH;
// foreach ($validate->errors() as $error) {
//     echo $error, " | this is new<br>";
// }

//TO QUERY ALL DATA 
//$user = DB::getInstance()->query('SELECT * FROM members_tbl');

//TO QUERY SINGLE DATA
// $user = DB::getInstance()->get('members_tbl', array('userName','=','yes'));

// $userInsert = DB::getInstance()->insert('members_tbl', array(
//     'fname' => 'zaq',
//     'lname' => 'fdgsfsdfg',
//     'userName' => 'fsd',
//     'loginPassword' => 'sdf'
//     ));

// UPDATE DATABASE
// $userUpdate = DB::getInstance()->update('members_tbl', 56, array(
//     'fname' => 'xxxx'
//     ));
// if($userUpdate){
//     echo "success";
// }
// END UPDATE DATABASE

// CHECKING OUTPUT
// if(!$user->count()){
//     echo "No user";
// }else {
    //TO DISPLAY ALL
    // foreach ($user->results() as $user) {
    //     echo $user->userName , '<br>';
    // } //END OF DISPLAY ALL

    // echo $user->first()->userName;//TO QUERY SINGLE DATA
// }    

// echo SITE_URL;
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

	<!-- Custom CSS -->
	<link href="<?php echo SITE_URL_FILE; ?>css/vbcustom.css" rel="stylesheet">

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
        <style type="text/css">

        </style>
    </head>

    <body>
    	<?php include_once(SITE_URL . "analyticstracking.php") ?>
    	<div id="wrapper">
    		<?php
//pasensya sa susunod na minalas na gagawa nito
//madalas kasi nagpapalit palit ang konsepto at logico kaya pancit ang 
//maiiwan ko sa iyo or sa inyo. sana long life nalang sayo/sa inyo
//patawad sayo/sa inyo kawawang nilalang.
//

    		$full_path = $_SERVER['PHP_SELF'];
    		$path_array = explode('/',$full_path);
    		if(count($path_array) > 4){
    			$page_name = $path_array[2];
    // print_r($page_name . " greater than 4". " | " . count($path_array));
    		}else{
    			$page_name = $path_array[count($path_array)-1];  
    // print_r($page_name . " | " .  " | " . count($path_array));

    		}
    		if($page_name == 'theatre-scripts'){
    			$page_name = $path_array[3];
    // print_r($page_name . " therater");
    		}
    		if($page_name == 'category.php'){
    			$page_name = $path_array[2];
    // print_r($page_name . " categ");
    // ; 
    		}
    		if($page_name == 'byplay.php'){
    // $page_name = $path_array[2];
    // print_r($page_name . " bypaly");
    // ; 
    		}
// 
// var_dump($page_name . '   --else');
    		?>

    		<!-- Sidebar -->
    		<div id="sidebar-wrapper">
    			<img class="img-responsive sidemenu-img" src="<?php echo SITE_URL_FILE; ?>images/shakespeare-in-times-square-no-mj.jpg" title="WILLIAM SHAKESPEARE" alt="Image of William Shakespeare in Times Square, New York by kind permission of Mirko Ilić Corp. &nbsp; The Bard of Avon is presented as a Bohemian leather biker. He has an earring in the left ear, piercing in the left brow, and a T-shirt emblazoned with a cannabis plant. &nbsp; Please note this image is the trademark of Versebuster Publishing." style=""> 

    			<ul class="sidebar-nav ">

    				<li id="" class=""><a href="<?php echo SITE_URL_FILE; ?>shop"><strong>THE SHOP</strong></a></li>
    				<br>
    				<li id="" class=""><a><strong>Audio Speeches</strong></a></li>

    				<!-- <li class="sub-sidebar-nav navi <?php //echo ($page_name=='audio-intro')?'highlight':''; ?>"><a href="<?php //echo SITE_URL_FILE; ?>audio-speeches/audio-intro">Intro</a></li> -->
    				<li class="sub-sidebar-nav navi <?php echo ($page_name=='recording-notes.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>audio-speeches/recording-notes">Recording notes</a></li>
    				<li class="sub-sidebar-nav navi <?php echo ($page_name=='classifications.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>audio-speeches/classifications">Classifications</a></li>
    				<li class="sub-sidebar-nav navi <?php echo ($page_name=='audio-speeches' || $page_name=='index-audio.php')?'highlight':''; ?>" ><a href="<?php echo SITE_URL_FILE; ?>audio-speeches/index-audio">INDEX TO SPEECHES</a></li>
    				<li class="sub-sidebar-nav navi <?php echo ($page_name=='disclaimer.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>audio-speeches/disclaimer">Disclaimer</a></li>
    				<li class="sub-sidebar-nav last-item navi <?php echo ($page_name=='copyright.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>audio-speeches/copyright">Copyright</a></li>




    				<li><a><strong>ePlays</strong></a></li>

    				<li class="sub-sidebar-nav navi <?php echo ($page_name=='eplay-intro.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>eplay/eplay-intro">Intro</a></li>
    				<li class="sub-sidebar-nav navi <?php echo ($page_name=='school-versions.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>eplay/school-versions">School Versions</a></li>
    				<li class="sub-sidebar-nav navi <?php echo ($page_name == 'index-eplay-by-category.php' || $page_name=='index-eplay.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>eplay/index-eplay">INDEX TO EPLAYS</a></li>
    				<li class="sub-sidebar-nav navi <?php echo ($page_name=='editorial-policy.php')?'highlight':''; ?>" ><a href="<?php echo SITE_URL_FILE; ?>eplay/editorial-policy">Editorial policy</a></li>
    				<li class="sub-sidebar-nav last-item navi <?php echo ($page_name=='bibliography.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>eplay/bibliography">Bibliography</a></li>


    				<li><a><strong>Theatre Scripts</strong></a></li>

    				
    				
    				<li class="sub-sidebar-nav navi <?php echo ($page_name=='theatre-script-intro.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>theatre-scripts/theatre-script-intro">Intro</a></li>
    				<li class="sub-sidebar-nav navi <?php echo ($page_name=='flexibility.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>theatre-scripts/flexibility">Flexibility</a></li>
    				<li class="sub-sidebar-nav"><a>INDEX TO SCRIPTS</a></li>
    				<li class="child-sub-sidebar-nav navi <?php echo ($page_name=='index-full-play.php' || $page_name=='full-play-index.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>theatre-scripts/full-play-index/index-full-play">Full play</a></li>
    				<li class="child-sub-sidebar-nav navi last-item <?php echo ($page_name=='index-individual-speeches.php' || $page_name=='individual-speeches-index')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>theatre-scripts/individual-speeches-index/index-individual-speeches">Individual speeches</a></li>

    				<li><a><strong>Slide Shows</strong></a></li>
    				<li class="sub-sidebar-nav navi <?php echo ($page_name=='understanding-eplay-system.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>understanding-eplay-system">Understanding ePlay system FREE</a></li>
    				<li class="sub-sidebar-nav navi <?php echo ($page_name=='origins-of-shakespeares-art.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>origins-of-shakespeares-art">ORIGINS OF SHAKESPEARE’S ART</a></li>
    				<li class="sub-sidebar-nav navi <?php echo ($page_name=='how-to-series.php')?'highlight':''; ?> last-item"><a href="<?php echo SITE_URL_FILE; ?>how-to-series">HOW-TO SERIES</a></li>


    				<li><a><strong>Quick Reference Library</strong></a></li>
    				<li class="sub-sidebar-nav navi <?php echo ($page_name=='quick-reference-intro.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>quick-reference-intro">Intro</a></li>
    				<li class="sub-sidebar-nav navi"><a>MATERIAL BY PLAY</a></li>
    				<li class="child-sub-sidebar-nav navi <?php echo ($page_name=='a-zPlays.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>a-zPlays">A to Z</a></li>
    				<li class="child-sub-sidebar-nav navi <?php echo ($page_name=='comedies.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>comedies">Comedies</a></li>
    				<li class="child-sub-sidebar-nav navi <?php echo ($page_name=='histories.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>histories">Histories</a></li>
    				<li class="child-sub-sidebar-nav navi <?php echo ($page_name=='tragedies.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>tragedies">Tragedies</a></li>
    				<li class="child-sub-sidebar-nav navi <?php echo ($page_name=='romances.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>romances">Romances</a></li>

    				<li class="sub-sidebar-nav navi"><a>MATERIAL BY LEVEL</a></li>
    				<li class="child-sub-sidebar-nav navi <?php echo ($page_name=='beginner.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>beginner">Beginner</a></li>
    				<li class="child-sub-sidebar-nav navi <?php echo ($page_name=='intermediate.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>intermediate">Intermediate</a></li>
    				<li class="child-sub-sidebar-nav navi last-item navi <?php echo ($page_name=='advanced.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>advanced">Advanced</a></li>                        
    			</ul>

    		</div>
    		<!-- /#sidebar-wrapper -->

    		<!-- Page Content -->
    		<div id="page-content-wrapper">
    			<div class="container-fluid ">

    				<!--row		-->
    				<div class="row">
    					<!--=================================================YOUTUBE FACEBOOK SPEAKER TEST SIGN-UP LOGIN-===========-->
    					<nav id="top-main-nav" class="navbar navbar-inverse " role="navigation" style="height: 40px; ">
    						<!-- Brand and toggle get grouped for better mobile display -->
    						<div class="navbar-header">
    							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    								<span class="sr-only">Toggle navigation</span>
    								<span class="icon-bar"></span>
    								<span class="icon-bar"></span>
    								<span class="icon-bar"></span>
    							</button>
    							<div class="navbar-toggle" style="padding: 4px;">
    								<a href="#menu-toggle" class="btn btn-default" id="menu-toggle" style="padding: 2px;">Hide/Show Side Menu</a>
    							</div>
    						</div>

    						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    							<div class="col-md-1" style="padding-left: 0px; padding-right: 0px;">
    								<ul class="nav navbar-nav " id="social-wrap" style="margin-left: 0px;">
    									<li class="pull-left socials" id="youTube"><a href="#">youTube</a></li>
    									<li class="pull-left socials" id="facebook"><a href="https://web.facebook.com/VersebusterShakespeare/?fref=nf" target="_blank">facebook</a></li>
    								</ul>
    							</div>
    							<div class="col-md-6">
    								<div class="col-md-12">
    									<form class="navbar-form pull-right" role="search">
    										<div class="form-group">
    											<input type="text" class="form-control input-sm" placeholder="Search" size="50">
    										</div>
    										<button type="submit" class="btn btn-sm btn-default">Submit</button>
    									</form>
    								</div>
    							</div>
    							<!-- col-lg-3 col-md-3 col-sm-3 col-md-offset-3 -->
    							<div class="col-md-5" id='fg_membersite' style="padding-right: 0px;">
    								<ul class="pull-right" >
    									<?php
    										require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/login.php" : $_SERVER['DOCUMENT_ROOT'] . "/login.php");
    									?>
    								</ul>
    							</div> 
    						</div><!-- /.bs-example-navbar-collapse-1 -->
    					</nav>

    					<!--=================================================BRAND NAME AND SLOGAN-=================================-->
    					<div class="col-lg-12 col-md-12 "> 
    						<div class="col-md-6 " >
    							<!-- <h1 class="site-identifier">Versebuster</h1> -->
    							<img src="<?php echo SITE_URL_FILE; ?>images/VBD27aR03aP01ZL-Johnson3a.png" alt="" class="img-responsive" width=300>
    							<p class="page-subtitle-ext " style="margin-top:0; margin-left:30px">A Shakespeare Performance Resource with Audio</p>
    						</div>

    						
    					</div><!--end site identifier-->
    				</div>



    				<div class="row">
    					<!--==============================================MAIN NAV==================================================-->
    					<nav id="" class="navbar navbar-inverse sub-main-nav " role="navigation">

    						<!-- Brand and toggle get grouped for better mobile display -->
    						<div class="navbar-header">
    							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
    								<span class="sr-only">Toggle navigation</span>
    								<span class="icon-bar"></span>
    								<span class="icon-bar"></span>
    								<span class="icon-bar"></span>
    							</button>
    						</div><!-- /.navbar-header -->
    						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
    							<ul class="nav navbar-nav">
    								<li class="index navi <?php echo ($page_name=='index.php' || $page_name=='')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>"><strong>HOME</strong></a></li>
    								<!-- <li class="blog navi <?php //echo ($page_name=='blog')?'highlight':''; ?>"><a href="<?php //echo SITE_URL_FILE; ?>blog">BLOG</a></li>
    								<li class="forum navi <?php //echo ($page_name=='forum')?'highlight':''; ?>"><a href="<?php //echo SITE_URL_FILE; ?>forum">FORUM</a></li> -->
    								<li class="community navi <?php echo ($page_name=='community.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>community">COMMUNITY</a></li>
    								<li class="jobs navi <?php echo ($page_name=='jobs.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>jobs">JOBS</a></li>
    								<li class="faq navi <?php echo ($page_name=='faq.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>faq">FAQS</a></li>
    								<li class="quiz navi <?php echo ($page_name=='quiz.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>quiz">QUIZ</a></li>   
    								<li class="copyright navi <?php echo ($page_name=='copyright.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>copyright">COPYRIGHT</a></li>	
    								<li class="contact navi <?php echo ($page_name=='contact.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>contact">CONTACT</a></li>
    								<li class="patrons-and-sponsors navi <?php echo ($page_name=='patrons-and-sponsors.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>patrons-and-sponsors">PATRONS & SPONSORS</a></li>
    								<li class="shop navi <?php echo ($page_name=='shop.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>shop"><strong>SHOP</strong></a></li>
    							</ul>
    						</div><!-- /.bs-example-navbar-collapse-2-->

    					</nav><!-- /.navbar navbar-inverse sub-main-nav -->	    
    				</div><!-- /.row-->
              <!--   </div>
	          </div> -->
	        <?php 
	          if(Session::exists('home')){
	          	?>
	          	<h2><?php echo Session::flash('home'); ?> </h2>
	          	<?php 
	        	}
	        ?>                    


          <!-- row -->	
	        <div class="row main-text" ><!-- #col-lg-9 introduction content -->

	          	<div class="col-lg-9">
	          		<!--===================INTRO ==================-->
	          		<div class="well">
	          			<div class="row" >
	          				<img  class="center-block img-responsive"  src="<?php echo SITE_URL_FILE; ?>images/ad.gif">
	          			</div>
	          		</div>

	          		<div class="well" style="padding: 16px;">
	          			<br>
	          			<p class="text-center"><strong><span class="branding-style-reg">Versebuster<sup>&copy;</sup></span> is dedicated to the performance of Shakespeare &amp; best practice in verse-speaking.</strong></p>
	          			<p class="text-center">Our product is geared to all levels of acting ability and experience to help with the demands of a unique and special art form. &nbsp; We cover the <strong>First Folio (F1)</strong>, the <strong>'Good' Quartos</strong> and <strong>modern texts</strong>.</p>
	          			<p class="text-center small-gap-parag"><img src="images/diamondBullet.gif"> Verse makes up 72% of Shakespeare's canon <img src="images/diamondBullet.gif"> </p>
	          			<p class="text-center small-gap-parag"><img src="images/diamondBullet.gif"> Verse-speaking is a tough but rewarding discipline <img src="images/diamondBullet.gif"> </p>
	          			<p class="text-center small-gap-parag"><img src="images/diamondBullet.gif"> Verse-speaking has rules and guidelines, any style will not do <img src="images/diamondBullet.gif"> </p>
	          			<p class="text-center"><img src="images/diamondBullet.gif"> Shakespeare's prose has its own rules and guidelines too <img src="images/diamondBullet.gif"> </p>
	          		</div>

	          		<div class="well">
	          			<!-- MP3 PLAYER -->

	          		</div>


	          		<div class="well">

	          		</div>

	          		<!--===================END OF INTRO ==================-->


	          		<!--===================DEMOS ==================-->
	          		<div class="row-fluid">

	          		</div>
	          		<!--===================END DEMOS ==================-->

	          		<!--===================Who Versebuster Benefits Nav tabs ==================-->
	          		<div class="well">

	          		</div>
	          		<!--=================== END of Who Versebuster Benefits Nav tabs ==================-->

	          		<!-- SHAKESPEARE'S PERFORMANCE CLUES FOR ACTORS -->
	          		<div class="well">

	          		</div>
	          		<!-- END OF SHAKESPEARE'S PERFORMANCE CLUES FOR ACTORS -->

	          		<!--============= CONTROVERSY======================== -->
	          		<div class="well" id="">

	          		</div><!--=============END OF CONTROVERSY======================== -->


	          		<!--============= OTHER Shakespeare performance clues we cover======================== -->
	          		<div class="well" id="">
			
	          		</div>
	          		<!--=============END of OTHER Shakespeare performance clues we cover======================== -->



	          		<div class="" id=""><!--=============AD col-lg-9 ======================= -->

	          		</div><!--=============END OF AD col-lg-9 ======================== -->

	          	</div><!--=============END OF col-lg-9======================== -->




	          	<!-- ################SIDE BARS################# -->
	          	<!--LATEST NEWS-->
	          	<div class="col-lg-3  latest-news sidebars">	    
	          		<div class="panel panel-default">
	          			<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>NEWS</b></div>
	          			<div class="panel-body">
	          				<div class="row">
	          					<ul >
	          						<li class="news-item">September 2016. &nbsp; Soft opening November 2016 with Shakespeare's lines from <u><i>Sir Thomas More</i></u>. <u><i>Richard lll</i></u> due February 2017. LA workshop slated for summer 2017. Sample DEMOs of our product now ready below.</li>
				                </ul>    
			                </div>
			                <div class="panel-footer"> </div>
			            </div>
		            </div>
		        </div><!--END LATEST NEWS-->

		        <!-- #col-lg-3 newsletter-->	  
		        <div class="col-lg-3 sidebars">
		        	<?php require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/includes/newsletter/newsletter.php" : $_SERVER['DOCUMENT_ROOT'] . "/includes/newsletter/newsletter.php");?>
		        </div><!-- #col-lg-3 newsletter-->	  

		        <div class="col-lg-3 sidebars" >	    
		        	<img class="img-responsive" src="images/shakespeare-in-times-square.jpg" title="WILLIAM SHAKESPEARE" alt="Image of William Shakespeare in Times Square, New York by kind permission of Mirko Ilić Corp. &nbsp; The Bard of Avon is presented as a Bohemian leather biker. He has an earring in the left ear, piercing in the left brow, and a T-shirt emblazoned with a cannabis plant. &nbsp; Please note this image is the trademark of Versebuster Publishing." style=""> 
		        	<p class="text-center bottom-desc" style="">'Shakespeare in Times Square, New York' <br>by kind permission of <a id="mirko" href="">Mirko Ilić Corp.</a></p> <p class="text-center" style="color:#B22222; margin-bottom:0;">Please note <span class="branding-style-reg">Versebuster<sup>&copy;</sup></span> has exclusive rights to this image</p>
		        </div> <!-- /#col-lg-3 Shakespeare in Times Square-->


		        <!-- +++++++++++++++++++++++++++WEB ADS -->
		        <div class="col-lg-3 sidebars" >
		        	<a href="<?php echo SITE_URL_FILE; ?>advertise.php"><img class="img-responsive" src="images/300x250-web-ad.jpg" ></a>
		        </div>

		        <!-- #col-lg-3 ad 1-->	  
		        <div class="col-lg-3 sidebars">
		        	<img class="img-responsive" src="images/ads/brits.jpg">	    
		        </div><!-- #col-lg-3 ad 1-->

		        <!-- #col-lg-3 ad 2-->	  
		        <div class="col-lg-3 sidebars">
		        	<img class="img-responsive" src="images/ads/bringup.jpg">
		        </div><!-- #col-lg-3 ad 2-->

		        <!-- #col-lg-3 ad 3-->	  
		        <div class="col-lg-3 sidebars">	    
		        	<img class="img-responsive" src="images/ads/ticketmonster.gif">
		        </div><!-- #col-lg-3 ad 3-->
		        <!--  +++++++++++++++++++++++++++END OF WEB ADS -->
			</div><!-- /#row main-text-->



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
	    								<li class="index navi <?php echo ($page_name=='index' || $page_name=='')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>"><strong>HOME</strong></a></li>
	    								<li class="community navi <?php echo ($page_name=='community')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>community">COMMUNITY</a></li>
	    								<li class="jobs navi <?php echo ($page_name=='jobs')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>jobs">JOBS</a></li>
	    								<li class="faq navi <?php echo ($page_name=='faq')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>faq">FAQS</a></li>
	    								<li class="copyright navi <?php echo ($page_name=='copyright')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>copyright">COPYRIGHT</a></li>	
	    								<li class="contact navi <?php echo ($page_name=='contact')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>contact">CONTACT</a></li>
	    								<li class="shop navi <?php echo ($page_name=='shop')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>shop"><strong>SHOP</strong></a></li>
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




<!-- <div id="demo-modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header " style="padding:0; border: none !important">
				<div class="row">
					<div class="col-md-12 text-center" style="">
						<p style="margin-bottom: 0px; margin-top: 5px;">
							<span id="zoom-in" class="btn-info">Zoom in</span> 
							<span id="zoom-reset" class="btn-info">Reset</span> 
							<span id="zoom-out" class="btn-info">Zoom out </span>

						<button type="button" class="close btn-danger" data-dismiss="modal" style="float:right; position:relative; margin-top: -5px; position:absolute; right:15px">× </button>
						</p>
					</div>

					<div class="">
						
					</div>
				</div>
			</div>
			
			<div class="modal-body" style="">
				<p>My modal content here…</p>
			</div>
		</div>
	</div>
</div>  -->



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




