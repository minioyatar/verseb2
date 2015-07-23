<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . '/versebuster2/core/init.php';

$user = new User();
$_db = DB::getInstance();

if(!$user->isLoggedIn()){//if user is not login redirect to login page
    Redirect::to('/versebuster2/index.php');
}
// if(!$user->hasPermission('admin')){
    // Redirect::to('index.php');
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
        <div class="container">
            <?php 
                if(Session::exists('admin')){
            ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <section>
                                <?php           
                                    echo '<h4>' . Session::flash('admin') . '</h4>';
                                ?>
                            </section>     
                        </div>
                    </div>
            <?php                 
                }         
            ?>            
            <div class="row">
                <div class="col-lg-4">
                    <div class="col-lg-12 pipe-wall">
                        <h2 class="section-heading">Blogs</h2>
                        <p class="lead section-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>

                         <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Month</th>
                                    <th>Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>DEC</td>
                                    <td>Year-end recap of the Golden Rules and the 70% Rules</td>
                                </tr>
                                <tr>
                                    <td>NOV</td>
                                    <td>Acting & Reacting in Shakespeare</td>
                                </tr><tr>
                                    <td>OCT</td>
                                    <td>Pace' should not be confused with 'fast'</td>
                                </tr>
                                <tr>
                                    <td>SEP</td>
                                    <td>Emphasis doesn’t always need to be emphatic</td>
                                </tr>
                                <tr>
                                    <td>AUG</td>
                                    <td>The curious case of –ion, -ience and –ient endings</td>
                                </tr>
                                <tr>
                                    <td>JUL</td>
                                    <td>Is 'Method' relevant to Shakespeare performance?</td>
                                </tr>
                                <tr>
                                    <td>JUN</td>
                                    <td>The curse of exclamation marks!</td>
                                </tr>
                                <tr>
                                    <td>MAY</td>
                                    <td>Shakespeare's trail of breadcrumbs</td>
                                </tr>
                                <tr>
                                    <td>APR</td>
                                    <td>Double entendres – how far should one illustrate?</td>
                                </tr>
                                <tr>
                                    <td>MAR</td>
                                    <td>A performance text and a literary text are not the same </td>
                                </tr>                                       
                            </tbody>
                        </table>            
                    </div> 
                </div>
                <div class="col-lg-4">
                    <div class="col-lg-12 pipe-wall">
                        <h2 class="section-heading ">Purchase History </h2>
                        <p class="lead section-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>

                        <p>ePlays</p>
                        <ul id="" class="">
                            <li>Hamlet </li>
                            <li>Henry IV, Pt 1</li>
                            <li>Henry IV, Pt 2</li>
                        </ul>

                        <p>PPP</p>
                        <ul id="" class="">
                            <li>Hamlet </li>
                            <li>Henry IV, Pt 1</li>
                            <li>Henry IV, Pt 2</li>
                        </ul>

                        <p>Audio Speeches</p>
                        <ul id="" class="">
                            <li>Hamlet </li>
                            <li>Henry IV, Pt 1</li>
                            <li>Henry IV, Pt 2</li>
                        </ul>            

                        <p>Theatre Scripts</p>
                        <ul id="" class="">
                            <li>Hamlet </li>
                            <li>Henry IV, Pt 1</li>
                            <li>Henry IV, Pt 2</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-lg-12 pipe-wall">
                        <h2 class="section-heading ">Favourites</h2>
                        <p class="lead section-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>

                        <p>ePlays</p>
                        <ul id="" class="">
                            <li>Hamlet </li>
                            <li>Henry IV, Pt 1</li>
                            <li>Henry IV, Pt 2</li>
                        </ul>

                        <p>PPP</p>
                        <ul id="" class="">
                            <li>Hamlet </li>
                            <li>Henry IV, Pt 1</li>
                            <li>Henry IV, Pt 2</li>
                        </ul>

                        <p>Audio Speeches</p>
                        <ul id="" class="">
                            <li>Hamlet </li>
                            <li>Henry IV, Pt 1</li>
                            <li>Henry IV, Pt 2</li>
                        </ul>            

                        <p>Theatre Scripts</p>
                        <ul id="" class="">
                            <li>Hamlet </li>
                            <li>Henry IV, Pt 1</li>
                            <li>Henry IV, Pt 2</li>
                        </ul>                    
                    </div>
                </div>
            </div>
        </div>

    <!-- Fixed Height Image Aside -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
    <!-- <aside class="image-bg-fixed-height"></aside> -->

    <!-- Content Section -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section-heading">Other Stuff here</h1>
                    <p class="lead section-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Versebuster 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
