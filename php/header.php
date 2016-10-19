<?PHP
require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/core/init.php" : $_SERVER['DOCUMENT_ROOT'] . "/core/init.php");
require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/includes/formProcessor.php" : $_SERVER['DOCUMENT_ROOT'] . "/includes/formProcessor.php");


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
                //pasensya sa susunod na minalas na gagawa nito //madalas kasi nagpapalit palit ang konsepto at logico kaya pancit ang //maiiwan ko sa iyo or sa inyo. sana long life nalang sayo/sa inyo //patawad sayo/sa inyo kawawang nilalang.
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
                    $page_name = $path_array[2];
                            // print_r($page_name . " bypaly");
                            // ; 
                }
            ?>

            <!-- Sidebar -->
            <div class="sidebar-wrapper">
                <img class="img-responsive sidemenu-img" src="<?php echo SITE_URL_FILE; ?>images/shakespeare-in-times-square-no-mj.jpg" title="WILLIAM SHAKESPEARE" alt="Image of William Shakespeare in Times Square, New York by kind permission of Mirko Ilić Corp. &nbsp; The Bard of Avon is presented as a Bohemian leather biker. He has an earring in the left ear, piercing in the left brow, and a T-shirt emblazoned with a cannabis plant. &nbsp; Please note this image is the trademark of Versebuster Publishing." style=""> 
                <ul class="sidebar-nav ">
                    <li id="" class="text-center"><a><strong>THE SHOP</strong></a></li>
                    <br>
                    <li id="" class=""><a><strong>Audio Speeches</strong></a></li>
                    <!-- <li class="sub-sidebar-nav navi <?php //echo ($page_name=='audio-intro')?'highlight':''; ?>"><a href="<?php //echo SITE_URL_FILE; ?>audio-speeches/audio-intro">Intro</a></li> -->
                    <li class="sub-sidebar-nav navi <?php echo ($page_name=='recording-notes.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>audio-speeches/recording-notes">Recording notes</a></li>
                    <li class="sub-sidebar-nav navi <?php echo ($page_name=='classifications.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>audio-speeches/classifications">Classifications</a></li>
                    <li class="sub-sidebar-nav navi <?php echo ($page_name=='audio-speeches' || $page_name=='index-audio.php')?'highlight':''; ?>" ><a href="<?php echo SITE_URL_FILE; ?>audio-speeches/index-audio">INDEX TO SPEECHES</a></li>
                    <li class="sub-sidebar-nav navi <?php echo ($page_name=='disclaimer.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>audio-speeches/disclaimer">Disclaimer</a></li>
                    <li class="sub-sidebar-nav last-item navi <?php echo ($page_name=='phonographic-copyright.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>audio-speeches/phonographic-copyright">Phonographic copyright</a></li>

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
            <div id="row">
                <div class="col-md-9">
                    <!--row     -->
                    <div class="row">
                        <!--=================================================SIGN-UP LOGIN-===========-->
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
                                <div class="col-md-6" style="padding-right: 0px;">
                                    <form class="form-inline" role="search" style="padding-top: 5px;">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-sm" placeholder="Search" size="34">
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-default">Submit</button>
                                    </form>
                                </div>
                                <div class="col-md-6" id='fg_membersite' >
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
                                <img src="<?php echo SITE_URL_FILE; ?>images/VBD27aR03aP01ZL-Johnson3a.png" alt="" class="img-responsive" width=300>
                                <p class="page-subtitle-ext " style="margin-top:0; margin-left:30px">A Shakespeare Performance Resource with Audio</p>
                            </div>
                        </div>
                    </div><!-- /.row-->

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
                                        <!-- <li class="patrons-and-sponsors navi <?php //echo ($page_name=='patrons-and-sponsors.php')?'highlight':''; ?>"><a href="<?php //echo SITE_URL_FILE; ?>patrons-and-sponsors">PATRONS & SPONSORS</a></li> -->
                                        <li class="shop navi <?php echo ($page_name=='shop.php')?'highlight':''; ?>"><a href="<?php echo SITE_URL_FILE; ?>shop"><strong>SHOP</strong></a></li>
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