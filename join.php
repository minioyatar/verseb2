<?php    
    require_once $_SERVER['DOCUMENT_ROOT'] . '/versebuster2/core/init.php';

	if(!Input::get('p')){
		Redirect::to('membership.html');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Versebuster - Registration</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="/versebuster2/js/library/jquery-1.11.0.js"></script>
	<script src="/versebuster2/js/library/bootstrap.min.js"  ></script>
	<script src="/versebuster2/js/library/jquery.typedtext.js"></script>

	<style type="text/css">
	@font-face {
		font-family: 'LucidaCustomFont';
		src: url('/versebuster2/fonts/lucidaC.eot');
		src: url('/versebuster2/fonts/lucidaC.eot?#iefix') format('embedded-opentype'),
		url('/versebuster2/fonts/lucidaC.ttf') format('truetype');
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
/*
.field{
display: block;
width: 425px;
}
*/		</style>

</head>
<body style="">
	<div class="container-fluid" style="margin:0;padding:0">
		<div class="container">
			<div class="row" style="">
				<div class="col-md-8 col-sm-8 " style="margin-top: 20px; color:#000000;font-family: 'LucidaCustomFont',arial,sans-serif; font-weight: inherit;">
					<h1 style=""><a href="index.php" style="color:#000000; text-decoration:none">Versebuster</a></h1>
					<p class="">A Shakespeare Performance Resource with Audio</p>
				</div>
			</div>
		</div>
		<div class="container-fluid" style="background: #0D2730; margin:0;padding:0">
		<div class="container"  style="color:#fff">
<div class="col-md-12">
							<div class="row">

							<h3 class="selectModule" style="margin:40px 0">
								<span class="linkPolicy">We treat the information you give as strictly private.  Versebuster does not share email addresses and passwords with anyone under any circumstances.</span>
							</h3>					
						</div>
</div>			
			<div class="row">
					<div class="col-md-4 text-center" style="">
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


					<div class="col-md-8 vbR text-center">		

						<div class="row">
							<div class="intro">
								<h4>Please complete the fields</h4>
							</div>							
							<form action="checkout.php" method="post" id="accountCreation_form" role="form" style="margin:40px 0;">
								<input class="button orange" type='hidden' name='token' value="<?php echo $token; ?>" />
								<input class="button orange" type='hidden' name='price' value="<?php echo $price; ?>" />
								<input class="button orange" type='hidden' name='pckCat' value="<?php echo $pckCat . ' membership.'; ?>" />
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

								<div class="field form-group firstname">
									<label for="firstName">First Name <span class="mandatory"></span> </label>
									<input type="text" id="firstName" name="firstName" class="validated detailsIcon" autocomplete="off" data-format="" data-label="First Name" data-required="true"/>
								</div>
								<div class="field form-group lastname">
									<label for="lastName">Last Name <span class="mandatory"></span> </label>
									<input type="text" id="lastName" name="lastName" class="validated nameIcon" autocomplete="off" data-format=""data-label="Last Name" data-required="true"/>
								</div>
								<div class="field form-group email">
									<label for="email">Email address <span class="mandatory"></span> </label>
									<input type="email" id="email" name="email" class="validated emailIcon"  autocomplete="off" data-format="" data-label="Email address" data-required="true" maxlength=""/>
								</div>
								<div class="field form-group confirmEmail">
									<label for="confirmEmail">Confirm email address <span class="mandatory"></span> </label>
									<input type="email" id="confirmEmail" name="confirmEmail" class="validated emailIcon" autocomplete="off" data-format="" data-label="Confirm email address" data-required="true" maxlength="80"/>
								</div>
								<div class="field form-group screen-name">
									<label for="screenName">Username</label>
									<input type="text" maxlength="100" id="screenName" name="screenName detailsIcon" class="validated" autocomplete="off"placeholder="Alphanumeric"data-format=""data-label="Screen Name"data-required=""/> 
								</div>
								<p class="" style="color:#fff;margin-left:242px; color:#ED0020"><b>Please enter a password between 6 and 20 characters</b></p>
								<div class="field form-group password">
									<label for="password">Password <span class="mandatory"></span> </label>
									<input type="password" id="password" name="password" class="validated passwordIcon"  autocomplete="off" placeholder="6 - 20 characters" data-format="" data-label="Password" data-required="true" maxlength="20" minlength="6" />
								</div>
								
								<div class="field form-group confirm-password">
									<label for="confirmPassword">Confirm password
										<span class="mandatory"></span>
									</label>
									<input type="password" id="confirmPassword" name="confirmPassword" class="validated passwordIcon" autocomplete="off"placeholder="6 - 20 characters"data-format=""data-label="Confirm password"data-required="true"maxlength="20"minlength="6" /> <span class="validity-icon is-valid" tabindex="-1"></span>
								</div>

								<div class="field form-group" style="">
									<input id="activate-step-3" type="submit" value="" style="background:#b70076 url('images/pcheckout.png') no-repeat scroll 0 0 / 360px 68px; margin-left:238px; width:360px; height:66px;border:none;"/>
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

			//retype animation
			function reType(){
				$("#animate-subhead").delay(5000).typedText("GIVES YOU FREE AND FULL ACCESS TO", 100,function() {
					setTimeout(reType, 2000);
				})
			}
			reType()
			//end
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
