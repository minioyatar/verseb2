<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . '/versebuster/core/init.php';
	if(!Input::get('p')){
		Redirect::to('membership.html');
	}
	
	$_db = DB::getInstance();
	$user = new User();
	$validate = new Validate();

	$errorArray = array();
	if(Token::check(Input::get('token'))){
		if(Input::get('registration')) {//DAYA HAY PARA SA REGISTRATION

		    $validation = $validate->check($_POST, array(
		            	'First_Name' => array(
		            		'required' => true,
		            		'min' => 2,
		            		'max' => 50
		            		),
		            	'Last_Name' => array(
		            		'required' => true,
		            		'min' => 2,
		            		'max' => 50
		            		),
		            	'Email' => array(
		            		'required' => true,
		            		'email' => true,
		            		'unique' => 'members_tbl'
		            		),
		            	'Confirm_Email' => array(
		            		'email' => true,
		            		'matches' => 'Email'
		            		),                
		            	'Username' => array(
		            		'required' => true,
		            		'min' => 2,
		            		'max' => 30,
		                    'unique' => 'members_tbl',//table name here
		                    'alphanumeric' => true
		                    ),
		            	'Password' =>array(
		            		'required' => true,
		            		'min' => 6,
		            		'max' => 50
		            		),
		            	'Repeat_Password' => array(
		            		'matches' => 'Password'
		            		)
		            	));

			$plan =  $_db->get('membershipplans', array('memPlanID','=',Input::get('pck')));
		    $planPrice = intval($plan->first()->memPrice);
		    $memPlanID = intval($plan->first()->memPlanID);
		    $memPlanDesc = $plan->first()->memPlanDesc;
		    
			if($validation->passed()){
				$salt = Hash::salt(32);
				try{
					$user->create(array(
						'title' => Input::get('title'),
						'fname' => Input::get('First_Name'),
						'lname' => Input::get('Last_Name'),
						'username' => Input::get('Username'),
						'password' => Hash::make(Input::get('Password'), $salt),
						'email' => urldecode(Input::get('Email')),
						'joinedDate' => date('Y-m-d H:i:s'),
						'planType' => $memPlanID,
						'salt' => $salt,
						'grp' => 0,
		                // 'transStatus' => 'pending'
						));

					$lastInsertId = $_db->lastInsertedId();

					// $_db->insert('survey_tbl', array(
					// 	'transacID'         =>$lastInsertId,
					// 	'dramaDepSchool'    =>Input::get('dramaDepSchool'),
					// 	'actor'             =>Input::get('actor'),
					// 	'director'          =>Input::get('director'),
					// 	'highSchool'        =>Input::get('highSchool'),
					// 	'uniCol'            =>Input::get('uniCol'),
					// 	'academic'          =>Input::get('academic'),
					// 	'other'             =>Input::get('other'),
					// 	'agebrack'          =>Input::get('agebrack'),
					// 	'internet'          =>Input::get('internet'),
					// 	'advertisement'     =>Input::get('advertisement'),
					// 	'talk'              =>Input::get('talk'),
					// 	'work'              =>Input::get('work'),
					// 	'mouth'             =>Input::get('mouth'),
					// 	'news'              =>Input::get('news')
					// 	));
					$postUrl = Payment::postPayment($memPlanID,$planPrice,$memPlanDesc, $lastInsertId);
					// print_r($postUrl);
			                    Redirect::to($postUrl);

				}catch(Exception $e){//redirect to failed page
					Redirect::to(404);
					die($e->getMessage());
				}
			}else {
				$errorArray = $validation->errors();
			// 	foreach ($validation->errors() as $error) {
			// 		echo $error, '<br>';
			// 	}
			}
		}
	}

	function error_displayer($searchword, $errorArray){
		if(!empty($errorArray)) {
			$matches = array_filter($errorArray, function($var) use ($searchword) { return preg_match("/\b$searchword\b/i", $var); });
			return  implode(" ", $matches);
		}
	}	
	$token = Token::generate();


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Versebuster - Registration</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="/versebuster/js/library/jquery-1.11.0.js"></script>
		<script src="/versebuster/js/library/bootstrap.min.js"  ></script>
    
		<style type="text/css">
			@font-face {
				font-family: 'LucidaCustomFont';
				src: url('/versebuster/fonts/lucidaC.eot');
				src: url('/versebuster/fonts/lucidaC.eot?#iefix') format('embedded-opentype'),
				url('/versebuster/fonts/lucidaC.ttf') format('truetype');
				font-weight: normal;
				font-style: normal;
			}
			.vbR .field input[type="text"], .vbR .field input[type="email"], .vbR .field input[type="password"], .vbR .field input[type="tel"], .vbR .field textarea, .field select{
				-moz-appearance: none;
				background-color: #f1f2f1;
				border: 1px solid #f1f2f1;
				border-radius: 0;
				box-shadow: none !important;
				display: inline-block;
				font-family: arial,helvetica,verdana,sans-serif;
				font-size: 16px;
				font-weight: bold;
				margin-left: 25px;
				outline: 0 none;
				padding: 10px 0 9px;
				text-indent: 8px;
				width: 360px;
				color:#000;
			}

			.field label{
				width: 210px;
				text-align: right;
				color: #fff;
				/*text-align: right;*/
				/*display: inline-block;*/
			}
			.visuallyhidden{
				display: none;
			}
			.errors{
				margin-left:12px;
				width: 100%;
				color: red;
				font-weight: bold;;
				font-size: 14px;
			}			
		</style>		

</head>
<body style="">
	<div class="container-fluid" style="padding:0; " >
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
				<div class="row">
    <div class="" style="">
      <h1 style="color:#F39C12"><b>UNDER CONSTRUCTION </b> </h1>
    </div>						
					<h3 class="selectModule" style="margin:40px 0">
						<span class="linkPolicy">We treat the information you give as strictly private.  Versebuster does not share email addresses and passwords with anyone under any circumstances.</span>
					</h3>
				</div>
				<div class="row">
					<div class="col-md-3 col-md-offset-1 text-center" style="">
						<?php

						if(Input::get('p') == 1){
							$pckCat = "INDIVIDUAL";
							$pck = 1;
							$imgVal = "bestVAL";
							$priceTag = "$1.99 a month for 12 months";
							$price = 1.99;
						}elseif(Input::get('p') == 2){
							$pckCat = "INDIVIDUAL";
							$pck = 2;
							$imgVal = "bestBudget";
							$priceTag = "$5.00 a month";
							$price = 5;
						}elseif(Input::get('p') == 3){
							$pckCat = "CORPORATE";
							$pck = 3;
							$imgVal = "corporate";
							$priceTag = "$99 a year";
							$price = 99;
						}

						echo "<h1>{$pckCat}<br>
								<b>Package {$pck}</b><br><br>
								<img src=\"images/{$imgVal}.png\" alt=\"img-responsive\" width=\"200\"><br>
								{$priceTag}
							</h1>";
						?>
					</div>


					<div class="col-md-7 vbR text-center">
						<div class="row">
							<div class="intro">
								<h4>Please complete the fields</h4>
							</div>

							<form action="" method="POST" id="accountCreation_form" role="form" style="margin:40px 0;">
								<input class="button orange" type='hidden' name='token' value="<?php echo $token; ?>" />
								<input class="button orange" type='hidden' name='price' value="<?php echo $price; ?>" />
								<input class="button orange" type='hidden' name='pckCat' value="<?php echo $pckCat ?>" />
								<input class="button orange" type='hidden' name='pck' value="<?php echo $pck ?>" />
								<div class="field form-group title">
									<label for="title" class="">Title</label>
									<select name="title" id="title" class="validated" style="width:360px">
										<option disabled="disabled" selected label="Title" value="">Title</option>
										<option value="Mr">Mr</option>
										<option value="Mrs">Mrs</option>
										<option value="Miss">Miss</option>
										<option value="Ms">Ms</option>
										<option value="Doctor">Doctor</option>
										<option value="Professor">Professor</option>
										<option value="Company / Institution">Company / Institution</option>								
										<option value="other">Other</option>
									</select>
								</div>

								<div class="field form-group other visuallyhidden">
									<label for="other">Other<span class="mandatory"></span> </label>
									<input type="text" id="other" name="other" class="validated detailsIcon" autocomplete="off" data-format="" data-label="other"/>
								</div>

								<div class="field form-group ">
<?php echo '<p class="errors">' . error_displayer('first',$errorArray) . '</p>';?>									
									<label for="firstName">First Name <span class="mandatory"></span> </label>
									<input type="text" id="firstName" name="First_Name" value="<?php echo Input::get("First_Name"); ?>" class="validated detailsIcon" autocomplete="off" data-format="" data-label="First Name" data-required="true"/>
								</div>
								<div class="field form-group ">
<?php echo '<p class="errors">' . error_displayer('last',$errorArray) . '</p>';?>									
									<label for="lastName">Last Name <span class="mandatory"></span> </label>
									<input type="text" id="lastName" name="Last_Name" value="<?php echo Input::get("Last_Name"); ?>" class="validated nameIcon" autocomplete="off" data-format="" data-label="Last Name" data-required="true"/>
								</div>

								<div class="field form-group">
<?php if(!is_null(error_displayer('email',$errorArray))) { echo '<p class="errors">' . error_displayer('email',$errorArray) . ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>';}?>							
									<label for="email">Email address <span class="mandatory"></span> </label>
									<input type="email" id="email" name="Email" value="<?php echo Input::get("Email"); ?>"  class="validated emailIcon"  autocomplete="off" data-format="" data-label="Email address" data-required="true" maxlength=""/>
								</div>
								<div class="field form-group ">
									<label for="confirmEmail">Confirm email address <span class="mandatory"></span> </label>
									<input type="email" id="confirmEmail" name="Confirm_Email" class="validated emailIcon" autocomplete="off" data-format="" data-label="Confirm email address" data-required="true" maxlength="80"/>
								</div>

								<div class="field form-group">
<?php echo '<p class="errors">' . error_displayer('username',$errorArray) . '</p>';?>									
									<label for="screenName">Username</label>
									<input type="text" maxlength="100" id="username" name="Username" value="<?php echo Input::get("Username"); ?>"  class="validated" autocomplete="off"placeholder="Alphanumeric"data-format=""data-label="Screen Name"data-required=""/> 
								</div>
								<!-- <p class="" style="color:#fff;margin-left:242px; color:#ED0020"><b>Please enter a password between 6 and 20 characters</b></p> -->

								<div class="field form-group ">
<?php echo '<p class="errors">' . error_displayer('password',$errorArray) . '</p>';?>
									<label for="password">Password <span class="mandatory"></span> </label>
									<input type="password" id="password" name="Password" class="validated passwordIcon"  autocomplete="off" placeholder="6 - 20 characters" data-format="" data-label="Password" data-required="true" maxlength="20" minlength="6" />
								</div>
									
								<div class="field form-group">
									<label for="confirmPassword">Confirm password
										<span class="mandatory"></span>
									</label>
									<input type="password" id="confirmPassword" name="Repeat_Password" class="validated passwordIcon" autocomplete="off"placeholder="6 - 20 characters"data-format=""data-label="Confirm password"data-required="true"maxlength="20"minlength="6" /> <span class="validity-icon is-valid" tabindex="-1"></span>
								</div>

								<div class="field form-group" style="">
									<input type="submit" name='registration' value=" " style="background:#b70076 url('images/pcheckout.png') no-repeat scroll 0 0 / 360px 68px; margin-left:238px; width:360px; height:66px;border:none;"/>
								</div>
							</form>
						</div>
					</div>						
				</div>
			</div>
		</div>


	</div>

		<script type="text/javascript">
		$(document).ready(function() {


			if($("#title").val() == "other"){
				$('.other').slideDown();
			}else{
				$('.other').slideUp();	
			}
			$('#title').on('change', function() {
				if($(this).val() == "other"){
					$('.other').slideDown();
				}else{
					$('.other').slideUp();
				}
			});
		});
		</script>
</body>
</html>
