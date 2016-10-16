<?php
// use PayPal\Api\Payer;
// use PayPal\Api\Item;
// use PayPal\Api\ItemList;
// use PayPal\Api\Details;
// use PayPal\Api\Amount;
// use PayPal\Api\Transaction;
// use PayPal\Api\RedirectUrls;
// use PayPal\Api\Payment;
// use PayPal\Common\PayPalModel;
// use PayPal\Api\CartBase;
// $CartBase = new CartBase();
// // echo getCustom();  
// 	require 'app/start.php';

	//validation

	if(!isset($_GET['success'])){
		//redirect for error
		die();
	}
	//if success is false die or redirect for error
	
	// $_GET['paymentId'];
	// $_GET['PayerID'];

    require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/core/init.php" : $_SERVER['DOCUMENT_ROOT'] . "/core/init.php");;

    $_db = DB::getInstance();
    $user = new User();	


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Versebuster - Registration</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
		 <script src="/versebuster/js/library/jquery-1.11.0.js"></script>
		<script src="/versebuster/js/library/bootstrap.min.js"  ></script>
        <script src="/versebuster/js/library/jquery.typedtext.js"></script>
    
		<style type="text/css">
@font-face {
    font-family: 'LucidaCustomFont';
    src: url('/versebuster/fonts/lucidaC.eot');
    src: url('/versebuster/fonts/lucidaC.eot?#iefix') format('embedded-opentype'),
         url('/versebuster/fonts/lucidaC.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}
button, input, optgroup, select, textarea{
	color: #000;
	padding: 10px;
	margin: 10px;
}
		</style>

</head>
<body style="">
	<div class="container-fluid" style="padding:0; margin-bottom:20px" >
		<!-- header -->
		<div class="container">
			<div class="row" style="">
				<div class="col-md-12 col-sm-12 col-lg-12" style="color:#000000;font-family: 'LucidaCustomFont',arial,sans-serif; font-weight: inherit;">
		            <!-- <h1 style=""><a href="index.php" style="color:#000000; text-decoration:none">Versebuster</a></h1> -->
		            <div class="col-md-8">
	                    <img src="images/VBD27aR03aP01ZL-Johnson3a.png" alt="" class="img-responsive" width=380>
	                    <p class="page-subtitle-ext " style="margin-top:0; margin-left:30px">A Shakespeare Performance Resource with Audio</p>
		            </div>
		            
		        </div>
			</div>			
		</div>
		<!-- end of header -->
		<div style="background: #0D2730 url('images/bg.jpg') repeat center; color:#fff; ">

			<div class="container text-center">
				<div class="row ">
					<div class="col-md-2 col-lg 3">
						<img src="images/VBD03aR03aP01ZL-Washington3a.png" alt="" class="center-block img-responsive" width=180 style="position: relative; top: 38px;">
					</div>
					<div class="col-md-8 col-lg-8" style="margin-top: 16px;">
						<h1>Thank you for registering.</h1>
					</div>
				</div>			
				<div class="row " >
					<form id='' action='' method='post' style="">
						<fieldset >
							<input class="button orange" type='hidden' name='token' value="<?php echo $token; ?>" />
							<?php 
							if(Session::exists('loginError')){
								?>
								<div>
									<p style="color:red; font-size:14px; margin-bottom: 0; letter-spacing: 1px;"><?php echo Session::flash('loginError'); ?> </p>
								</div>
								<?php
							}
							?>
							<div class='loginBoxes'>
								<!-- <label for='username' >UserName</label><br/> -->
								<input type='text' name='username' id='username' placeholder="Username" /><br/>
								<span id='login_username_errorloc' class='error'></span>
							</div>

							<div class='loginBoxes'>
								<!-- <label for='password' >Password</label><br/> -->
								<input type='password' name='password' id='password' size="" maxlength="50" autocomplete="off" placeholder="Password" /><br/>
								<span id='login_password_errorloc' class='error'></span>
							</div>

							<div class="loginBoxes">
								<label for="remember">
									<input type="checkbox" name="remember" id="remember">Remember me
								</label>
							</div>

							<div class='loginBoxes'>

								<input class="button orange" type='submit' name='login' value='Login' />
							</div>

							<div class='short_explanation' >
								<a style="color:#f59c3b !important;" href='reset-pwd-req.php'>Forgot Password?</a>
							</div>
						</fieldset>
					</form>
				</div>	

			</div>
		</div>

	</div>

		<script type="text/javascript">
		$(document).ready(function() {




		});

		</script>	
</body>
</html>
