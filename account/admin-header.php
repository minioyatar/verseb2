<?php 
    require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/core/init.php" : $_SERVER['DOCUMENT_ROOT'] . "/core/init.php");;

$user = new User();
$_db = DB::getInstance();

if(!$user->isLoggedIn()){//if user is not login redirect to login page
    Redirect::to('/versebuster/index.php');
}
// if(!$user->hasPermission('admin')){
//     Redirect::to('index.php');
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Versebuster - <?php echo escape($user->data()->username);?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-width-pics.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../">Versebuster<sup>&copy;</sup></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hi Max, Your BRONZE CREDITS expired 2020.06.23 l BUY MORE CREDITS  l   My Account  l  Log out   -->
                    <li>
                        <p style="padding-top: 15px; color:#fff;">Hi <?php echo escape($user->data()->username); if($user->data()->planType == 'platinum'){echo " Your UNLIMITED " . escape($user->data()->planType); }else {  echo ", Your " . escape($user->data()->credits) . " " .  escape($user->data()->planType) . " CREDITS expire 2020.06.23"; }?></p>
                    </li>
                    <li>
                        <?php
                            if($user->data()->planType != 'platinum'){
                        
                            echo '<a href="#">BUY MORE CREDITS</a>';
                        
                            }
                        ?>
                    </li>
                    <li>
                        <a href="update.php">My Account</a>
                    </li>
                    <li>
                        <a href="../includes/login/logout.php">Log out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Full Width Image Header with Logo -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
    <!-- <header class="image-bg-fluid-height"> -->
        <!-- <img class="img-responsive img-center" src="http://placehold.it/200x200&text=Logo" alt=""> -->
    <!-- </header> -->

    <!-- Content Section -->