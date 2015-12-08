<?php

?>
<?PHP
///////////////
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(-1);
//////////////

    require_once $_SERVER['DOCUMENT_ROOT'] . '/versebuster2/core/init.php';

    $_db = DB::getInstance();
    $user = new User();
    $validate = new Validate();
    require_once  $_SERVER['DOCUMENT_ROOT'] . '/versebuster2/includes/formProcessor.php';
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

// echo Config::get('svrInfo/path');
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
	<link href="/versebuster2/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="/versebuster2/css/vbcustom.css" rel="stylesheet">

	<!-- Optionally use Animate.css -->
	<link href="/versebuster2/css/animate.min.css" rel="stylesheet">

    
    <link href="/versebuster2/css/library/jquery-ui.min.css" rel="stylesheet">
    <link href="/versebuster2/css/library/jquery.remodal.css" rel="stylesheet"><!--Modal window file-->
    
<!-- MP3 PLAYER -->
<link rel="stylesheet" type="text/css" href="/versebuster2/css/library/mp3-bar-ui.css" />
<!-- END OF MP3 PLAYER -->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/library/html5shiv.js"></script>
        <script src="js/library/respond.min.js"></script>
    <![endif]-->
    <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
</head>

    <body>

    	<div id="wrapper">
<?php
//pasensya sa susunod na minalas na gagawa nito
//madalas kasi nagpapalit palit ang konsepto at logico kaya pancit ang 
//maiiwan ko sa iyo or sa inyo. sana long life nalang sayo/sa inyo
//patawad sayo/sa inyo kawawang nilalang.
//

$full_path = $_SERVER['PHP_SELF'];
$path_array = explode('/',$full_path);
// var_dump($full_path);
if(count($path_array) > 4){
    $page_name = $path_array[2];
}else{
    $page_name = $path_array[count($path_array)-1];  
    
}
if($page_name == 'theatre-scripts'){
    $page_name = $path_array[3];
}
if($page_name == 'category.php'){
    $page_name = $path_array[2];
    // ; 
}
if($page_name == 'byplay.php'){
    $page_name = $path_array[2];
    // ; 
}
// 
// var_dump($page_name . '   --else');
?>

    		<!-- Sidebar -->
    		<div id="sidebar-wrapper">
    			<img class="img-responsive sidemenu-img" src="/versebuster2/images/shakespeare-in-times-square-no-mj.jpg" style="">
    			<ul class="sidebar-nav ">

    				<li id="" class=""><a href="/versebuster2/shop.php"><strong>THE SHOP</strong></a></li>
                    <br>
    				<li id="" class=""><a><strong>Audio Speeches</strong></a></li>

    				<li class="sub-sidebar-nav navi <?php echo ($page_name=='audio-intro.php')?'highlight':''; ?>"><a href="/versebuster2/audio-speeches/audio-intro.php">Intro</a></li>
                    <li class="sub-sidebar-nav navi <?php echo ($page_name=='audio-speeches' || $page_name=='index-audio.php')?'highlight':''; ?>" ><a href="/versebuster2/audio-speeches/index-audio.php">INDEX TO SPEECHES</a></li>
                    <li class="sub-sidebar-nav last-item navi <?php echo ($page_name=='recording-notes.php')?'highlight':''; ?>"><a href="/versebuster2/audio-speeches/recording-notes.php">Recording notes</a></li>



    				<li><a><strong>ePlays</strong></a></li>

    				<li class="sub-sidebar-nav navi <?php echo ($page_name=='eplay-intro.php')?'highlight':''; ?>"><a href="/versebuster2/eplay/eplay-intro.php">Intro</a></li>
    				<li class="sub-sidebar-nav navi <?php echo ($page_name=='eplay' || $page_name=='index-eplay.php')?'highlight':''; ?>"><a href="/versebuster2/eplay/index-eplay.php">INDEX TO EPLAYS</a></li>
                    <li class="sub-sidebar-nav navi <?php echo ($page_name=='editorial-policy.php')?'highlight':''; ?>" ><a href="/versebuster2/eplay/editorial-policy.php">Editorial policy</a></li>
                    <li class="sub-sidebar-nav last-item navi <?php echo ($page_name=='bibliography.php')?'highlight':''; ?>"><a href="/versebuster2/eplay/bibliography.php">Bibliography</a></li>


    				<li><a><strong>Theatre Scripts</strong></a></li>

    				<li class="sub-sidebar-nav navi <?php echo ($page_name=='theatre-script-intro.php')?'highlight':''; ?>"><a href="/versebuster2/theatre-scripts/theatre-script-intro.php">Intro</a></li>
    				<li class="sub-sidebar-nav"><a>INDEX TO SCRIPTS</a></li>
                    <li class="child-sub-sidebar-nav navi <?php echo ($page_name=='index-full-play.php' || $page_name=='full-play-index')?'highlight':''; ?>"><a href="/versebuster2/theatre-scripts/full-play-index/index-full-play.php">Full play</a></li>
                    <li class="child-sub-sidebar-nav navi last-item <?php echo ($page_name=='index-individual-speeches.php' || $page_name=='individual-speeches-index')?'highlight':''; ?>"><a href="/versebuster2/theatre-scripts/individual-speeches-index/index-individual-speeches.php">Individual speeches</a></li>

                    <li><a><strong>Slide Shows</strong></a></li>
                    <li class="sub-sidebar-nav navi"><a href="/versebuster2/understanding-eplay-system.php">Understanding ePlay system FREE</a></li>
                    <li class="sub-sidebar-nav navi"><a href="/versebuster2/understanding-quarto-first-folio-text.php">Understanding Quarto, First Folio <br> <span style="padding-left:82px">and modern texts FREE</span></a></li>
                    <li class="sub-sidebar-nav navi last-item"><a href="/versebuster2/how-to-series.php">HOW-TO SERIES</a></li>


                    <li><a><strong>Quick Reference Library</strong></a></li>
                        <li class="sub-sidebar-nav navi <?php echo ($page_name=='quick-reference-intro.php')?'highlight':''; ?>"><a href="/versebuster2/quick-reference-intro.php">Intro</a></li>
                        <li class="sub-sidebar-nav navi"><a>MATERIAL BY PLAY</a></li>
                            <li class="child-sub-sidebar-nav navi <?php echo ($page_name=='a-zPlays.php')?'highlight':''; ?>"><a href="/versebuster2/a-zPlays.php">A to Z</a></li>
                            <li class="child-sub-sidebar-nav navi <?php echo ($page_name=='comedies.php')?'highlight':''; ?>"><a href="/versebuster2/comedies.php">Comedies</a></li>
                            <li class="child-sub-sidebar-nav navi <?php echo ($page_name=='histories.php')?'highlight':''; ?>"><a href="/versebuster2/histories.php">Histories</a></li>
                            <li class="child-sub-sidebar-nav navi <?php echo ($page_name=='tragedies.php')?'highlight':''; ?>"><a href="/versebuster2/tragedies.php">Tragedies</a></li>
                            <li class="child-sub-sidebar-nav navi <?php echo ($page_name=='romances.php')?'highlight':''; ?>"><a href="/versebuster2/romances.php">Romances</a></li>

                        <li class="sub-sidebar-nav navi"><a>MATERIAL BY TOPIC</a></li>
                            <li class="child-sub-sidebar-nav navi <?php echo ($page_name=='verse-speaking.php')?'highlight':''; ?>"><a href="/versebuster2/verse-speaking.php">Verse-speaking</a></li>
                            <li class="child-sub-sidebar-nav navi <?php echo ($page_name=='elizabethan-pronunciation.php')?'highlight':''; ?>"><a href="/versebuster2/elizabethan-pronunciation.php">Elizabethan pronunciation</a></li>
                            <li class="child-sub-sidebar-nav navi <?php echo ($page_name=='elizabethan-stagecraft.php')?'highlight':''; ?>"><a href="/versebuster2/elizabethan-stagecraft.php">Elizabethan stagecraft</a></li>
                            <li class="child-sub-sidebar-nav navi <?php echo ($page_name=='elizabethan-rhetoric.php')?'highlight':''; ?>"><a href="/versebuster2/elizabethan-rhetoric.php">Elizabethan rhetoric</a></li>
                            <li class="child-sub-sidebar-nav navi <?php echo ($page_name=='elizabethan-world-view.php')?'highlight':''; ?>"><a href="/versebuster2/elizabethan-world-view.php">Elizabethan world view</a></li>

                        <li class="child-sub-sidebar-nav navi  <?php echo ($page_name=='shakespeare.php')?'highlight':''; ?>"><a href="/versebuster2/shakespeare.php">Shakespeare (life & times)</a></li>

                            <li class="sub-sidebar-nav navi"><a>MATERIAL BY LEVEL</a></li>
                            <li class="child-sub-sidebar-nav navi <?php echo ($page_name=='beginner.php')?'highlight':''; ?>"><a href="/versebuster2/beginner.php">Beginner</a></li>
                            <li class="child-sub-sidebar-nav navi <?php echo ($page_name=='intermediate.php')?'highlight':''; ?>"><a href="/versebuster2/intermediate.php">Intermediate</a></li>
                            <li class="child-sub-sidebar-nav navi last-item navi <?php echo ($page_name=='advanced.php')?'highlight':''; ?>"><a href="/versebuster2/advanced.php">Advanced</a></li>                        
    			</ul>

                <div class="add-300x250">    
                    <div class="col-lg-12 sidebars ">     
                        <a href="/versebuster2/advertise.php"><img class="img-responsive" src="/versebuster2/images/300x250-web-ad.jpg"></a>
                    </div><!-- #col-lg-3 ad 3-->
                </div>

    		</div>
    		<!-- /#sidebar-wrapper -->

    		<!-- Page Content -->
    		<div id="page-content-wrapper">
    			<div class="container-fluid ">

    				<!--row		-->
    				<div class="row">
    					<!--=================================================YOUTUBE FACEBOOK SPEAKER TEST SIGN-UP LOGIN-===========-->
    					<nav id="top-main-nav" class="navbar navbar-inverse " role="navigation">
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
    							<!--<a class="navbar-brand brand-name-yel" href="index.php">Versebuster</a>-->
    						</div>

    						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <div class="col-md-4 ">
        							<ul class="nav navbar-nav " id="social-wrap">
                                        <li class="pull-left socials" id="goplus"><a href="#">g+</a></li>
                                        <li class="pull-left socials" id="linkedin"><a href="#">linkedin</a></li>
        								<li class="pull-left socials" id="youTube"><a href="#">youTube</a></li>
        								<li class="pull-left socials" id="twitter"><a href="#">twitter</a></li>
        								<li class="pull-left socials" id="facebook"><a href="#">facebook</a></li>
        							</ul>
                                </div>
<!--     							<ul id="speaker-holder" class="nav navbar-nav">
    								<li class="" id="speakerTest"><a href="#">Speaker Test</a></li>
    							</ul> -->
                                <div class="col-md-8">
                                    <div class="col-md-11 col-md-offset-1">
                                        <form class="navbar-form pull-right" role="search">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-sm" placeholder="Search" size="50">
                                            </div>
                                            <button type="submit" class="btn btn-sm btn-default">Submit</button>
                                        </form>
                                    </div>


    							<!-- </ul> -->
                                </div>
    						</div><!-- /.bs-example-navbar-collapse-1 -->
    					</nav>

    					<!--=================================================BRAND NAME AND SLOGAN-=================================-->
    					<div class="col-lg-12 col-md-12 "> 
                            <div class="col-md-6 " >
                                <h1 class="site-identifier">Versebuster</h1>
                                <p class="page-subtitle-ext ">A Shakespeare Performance Resource with Audio</p>
                            </div>
                            <!-- col-lg-3 col-md-3 col-sm-3 col-md-offset-3 -->
                            <div class="" id='fg_membersite'>
                                <ul class="pull-right" >
                                    <?php
                                        include_once($_SERVER['DOCUMENT_ROOT']. "/versebuster2/login.php");
                                    ?>
                                </ul>
                            </div> 
    						
    					</div><!--end site identifier-->


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
    								<li class="index navi <?php echo ($page_name=='index.php' || $page_name=='')?'highlight':''; ?>"><a href="/versebuster2/index.php"><strong>HOME</strong></a></li>
    								<li class="blog navi <?php echo ($page_name=='blog.php')?'highlight':''; ?>"><a href="/versebuster2/blog.php">BLOG</a></li>
    								<li class="forum navi <?php echo ($page_name=='forum.php')?'highlight':''; ?>"><a href="/versebuster2/forum.php">FORUM</a></li>
    								<li class="community navi <?php echo ($page_name=='community.php')?'highlight':''; ?>"><a href="/versebuster2/community.php">COMMUNITY</a></li>
    								<li class="faq navi <?php echo ($page_name=='faq.php')?'highlight':''; ?>"><a href="/versebuster2/faq.php">FAQS</a></li>
    								<li class="copyright navi <?php echo ($page_name=='copyright.php')?'highlight':''; ?>"><a href="/versebuster2/copyright.php">COPYRIGHT</a></li>	
    								<li class="contact navi <?php echo ($page_name=='contact.php')?'highlight':''; ?>"><a href="/versebuster2/contact.php">CONTACT</a></li>
    								<li class="shop navi <?php echo ($page_name=='shop.php')?'highlight':''; ?>"><a href="/versebuster2/shop.php"><strong>THE SHOP</strong></a></li>
    							</ul>
    						</div><!-- /.bs-example-navbar-collapse-2-->

    					</nav><!-- /.navbar navbar-inverse sub-main-nav -->	    
    				</div><!-- /.row-->
<?php 
    if(Session::exists('home')){
?>
        <h2><?php echo Session::flash('home'); ?> </h2>
<?php 
    }
?>                    
