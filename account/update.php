<?PHP
	require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/core/init.php" : $_SERVER['DOCUMENT_ROOT'] . "/core/init.php");;

$user = new User();

if(!$user->isLoggedIn()){
	Redirect::to('index.php');
}

if(Input::exists()){
	if(Token::check(Input::get('token'))){
		$validate = new Validate();
		$validation = $validate->check($_POST, array(
			//this values needs to be change      
            'fname' => array(
                'required' => true,
                'min' => 2,
                'max' => 30,
                'alphanumeric' => true
                ),
            // 'mname' => array(
            //     'min' => 2,
            //     'max' => 20,
            //     'alphanumeric' => true
            //     ),
            'lname' => array(
                'required' => true,
                'min' => 2,
                'max' => 30,
                'alphanumeric' => true
                )//,

            // 'address' => array(
            //     'required' => true,
            //     'min' => 2,
            //     'max' => 60,
            //     ),
            // 'school' => array(
            //     'required' => true
            //     ),
            // 'yeargrad' => array(
            //     'required' => true
            //     ),
            // 'course' => array(
            //     'required' => true,
            //     'max' => 6
            //     ),
            // 'email' => array(
            //     'required' => true,
            //     'email' => true
            //     ),   

            // 'contactnum' => array(
            //     'required' => true,
            //     'min' => 2,
            //     'max' => 6
            //     ),

		));



		if($validation->passed()){
			try{
				$user->update('members_tbl',array(
                    'fname' => Input::get('fname'),
                    // 'mname' => Input::get('mname'),
                    'lname' => Input::get('lname'),


                    // 'bday' => Input::get('bday'),
                    // 'address' => Input::get('address'),

                    // 'school' => Input::get('school'),
                    // 'yeargrad' => Input::get('yeargrad'),
                    // 'course' => Input::get('course'),

                    // 'company' => Input::get('company'),
                    // 'jtitle' => Input::get('jtitle'),
                    // 'email' => Input::get('email'),
                    // 'contactnum' => Input::get('contactnum'),
					));

				Session::flash('home', 'Your details have been updated.');
				Redirect::to('index.php');

			}catch(Exception $e){
				die($e->getMessage());
			}
		}else{
			foreach ($validation->errors() as $error) {
				echo $error, '<br>';
			}
		}
	}
}
// require_once 'header.php';
?>
<body>
<?php
    // require_once 'navigation.php';
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
<div class="container">
    <div class='row'>
        <div class='col-md-4'>
            <form id='' action='' method='post' enctype="multipart/form-data"   >
                <input class="button orange" type='hidden' name='token' value="<?php echo Token::generate(); ?>" />
                    <fieldset >
                        <div class="field">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" value="<?php echo escape($user->data()->email); ?>" autocomplete="off">
                        </div>
                    </fieldset>

                    <div class='loginBoxes'>
                        <input class="button orange" type='submit' name='update' value='Update' />
                    </div>
            </form> 
        </div>   
    
        <div class='col-md-4'>
            <form accept-charset="UTF-8" action="/" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>

              <div class='form-row'>
                <div class='col-xs-12 form-group required'>
                  <label class='control-label'>Name on Card</label>
                  <input class='form-control' size='4' type='text'>
                </div>

              </div>
              <div class='form-row'>
                <div class='col-xs-12 form-group card required'>
                  <label class='control-label'>Card Number</label>
                  <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                </div>
              </div>
              <div class='form-row'>
                <div class='col-xs-12 form-group card required'>
                  <label class='control-label'>Billing Address</label>
                  <input autocomplete='off' class='form-control' size='20' type='text'>
                </div>
              </div>
              <div class='form-row'>
                <div class='col-xs-4 form-group cvc required'>
                  <label class='control-label'>CVC</label>
                  <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                </div>
                <div class='col-xs-4 form-group expiration required'>
                  <label class='control-label'>Expiration</label>
                  <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                </div>
                <div class='col-xs-4 form-group expiration required'>
                  <label class='control-label'>Year</label>
                  <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                </div>
              </div>


              <div class='form-row'>
                <div class='col-md-12 form-group'>
                  <hr class="featurette-divider"></hr>

                  <div class='error form-group hide'>
                    <div class='alert-danger alert'>
                      Please correct the errors and try again.

                    </div>
                  </div>
                  <div class="jumbotron jumbotron-flat">
                    <div class="center"><small><b>Your total today:</b></small></div>
                    <div class="paymentAmt">$100</div>



                  </div>
                  <button class='form-control btn btn-primary submit-button' type='submit'> Pay »</button>

                </div>
              </div>
            </form>
        </div>
        <div class="col-md-4">
            <p><a href="changepassword.php">Update Password</a></p>
            <p><a href="index.php">Back to home page</a></p>        
        </div>
    </div>

</div>
<?php
    // require_once 'footer.php';
?>   
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
