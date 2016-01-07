<?php
// require_once 'core/init.php';
//     $user = new User();
//     if($user->isLoggedIn()){
//     	Redirect::to('includes/errors/404.php');
//     }

// require_once 'register.php';
?>
<?PHP

require_once($_SERVER['DOCUMENT_ROOT'] . "/versebuster2/php/header.php");

?>



<!-- CONTENT =================================-->

<div class="row">
	<div class="col-lg-12">

		<div style="background-color:#226791; padding: 10px; color: #fff; ">
			<h1 style="color:#FFF200">SUBSCRIPTION JUST US$1.99 a month!</h1>
			<p>GIVES FREE AND FULL ACCESS TO </p>
			<ul>
				<li>AUDIO</li>
				<li>QUICK REFERENCE LIBRARY</li>
				<li>BEGINNER-LEVEL SLIDE SHOWS</li>
				<li>FORUM</li>
			</ul>
		    <br>

		    <p><b><i><span style="font-size:40px; color:#FFF200">+ 50% off!</span></i></b> ePLAYS & THEATRE SCRIPTS & INTERMEDIATE & ADVANCED SLIDE-SHOWS*</p>
		    <p style="font-size:12px">*YOU NEVER PAY MORE THAN ONCE!</p>
	    </div>
	<div class="well">
		<h4>ePlays</h4>
		<ul class="list-unstyled" style="text-indent: 50px;">
			<li><input type="checkbox" name="" id=""> EP1 (annotations only) $5.95 - one time payment, new improved editions automatically emailed to you free of charge</li>
			<li><input type="checkbox" name="" id=""> EP2 (annotations PLUS notations)  $9.95 each - one time payment, new improved editions automatically emailed to you free of charge</li>
		</ul>
		<br>

		<h4>Theatre scripts</h4>
		<ul class="list-unstyled" style="text-indent: 50px;">
			<li><input type="checkbox" name="" id=""> Full play $4.95 each BEST VALUE - one time payment, new improved theatre scripts automatically emailed to you free of charge</li>
		    <li><input type="checkbox" name="" id=""> Individual speeches $0.99 each - one time payment, new improved theatre scripts automatically emailed to you free of charge</li>
		</ul>
		<br>

		<h4>Teaching Slide shows for Intermediate and Advanced </h4>
			<ul class="list-unstyled" style="text-indent: 50px;">
				<li><input type="checkbox" name="" id=""> $3.99 (3 for the price of 2 ($7.98), 5 for the price of 3 ($11.97), 10 for the price of 5 ($19.95), or all for $29.95) - one time payment, new improved slide shows automatically emailed to you free of charge	</li>
			</ul>
	</div>

		<!-- 6 Step Wizard (Working)"-->
		<div class="row form-group">
			<div class="col-lg-12">
				<ul class="nav nav-pills nav-justified thumbnail setup-panel">
<!-- 					<li class="active"><a href="#step-1">
						<h4 class="list-group-item-heading">Step 1</h4>
						<p class="list-group-item-text">Choose a plan</p>
					</a></li> -->
					<li class="active"><a href="#step-1">
						<h4 class="list-group-item-heading">Step 1</h4>
						<p class="list-group-item-text">Registration information</p>
					</a></li>
					<li class="disabled"><a href="#step-2">
						<h4 class="list-group-item-heading">Step 2</h4>
						<p class="list-group-item-text">Please help us to help you!</p>
					</a></li>
					<li class="disabled"><a href="#step-3">
						<h4 class="list-group-item-heading">Step 3</h4>
						<p class="list-group-item-text">Checkout to Paypal</p>
					</a></li>
				</ul>
			</div>
		</div>

		<!--php/include/reg_process.php-->

		<form id='' class="form-horizontal" role="" method="POST" action="<?php //echo htmlentities('includes/formProcessor.php'); ?>">
			<input type="hidden" name="token" value="<?php echo $token; ?>">
			<?php //include_once $_SERVER['DOCUMENT_ROOT'] . '/versebuster2/includes/registration/step1.php'; ?>

			<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/versebuster2/includes/registration/step2.php'; ?>

			<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/versebuster2/includes/registration/step3.php'; ?>

			<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/versebuster2/includes/registration/step4.php'; ?>
		</form>
		<!-- 6 END Step Wizard (Working)"-->
	</div><!-- /#col-lg-12-->
</div><!-- /#row -->
				<!-- /CONTENT ============-->
				<script src="js/library/prefixfree.min.js" type="text/javascript"></script>

				<?PHP
				require_once($_SERVER['DOCUMENT_ROOT'] . "/versebuster2/php/footer.php");
				?>

