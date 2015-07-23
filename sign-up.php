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
		<div class="well">
			<h1 class="text-center">Become a Member</h1>
			<BR>
				<p>BENEFITS</p>
				<p>1. Membership generates big savings on all products (see TABLE OF SAVINGS futher down)</p>
				<p>2. Membership gives you access to our blog archive on performing Shakespeare</p>
				<p>3. Membership allows you to participate in the Versebuster Forum</p>
				<BR>
					<p>HOW IT WORKS</p>
					<p>When you purchase any Versebuster product, the total (with discount) is simply deducted from the credits that your chosen membership gave you. 1 CREDIT = US$1.</p>
					<p>You can pay with PAYPAL, or with Debit and Credit Card.</p>

				</div>
			</div>
		</div>

		<!-- 6 Step Wizard (Working)"-->

		<!--added sample of transact id-->
		<?php

//echo date('Y-m-d');
//echo $fgmembersite->rand_key;
//echo $fgmembersite->clean(uniqid($fgmembersite->rand_key, true));
		?>
		<!--end of my sample transact id-->

		<div class="row form-group">
			<div class="col-lg-12">
				<ul class="nav nav-pills nav-justified thumbnail setup-panel">
					<li class="active"><a href="#step-1">
						<h4 class="list-group-item-heading">Step 1</h4>
						<p class="list-group-item-text">Choose a plan</p>
					</a></li>
					<li class="disabled"><a href="#step-2">
						<h4 class="list-group-item-heading">Step 2</h4>
						<p class="list-group-item-text">Registration information</p>
					</a></li>
					<li class="disabled"><a href="#step-3">
						<h4 class="list-group-item-heading">Step 3</h4>
						<p class="list-group-item-text">Please help us to help you!</p>
					</a></li>
					<li class="disabled"><a href="#step-4">
						<h4 class="list-group-item-heading">Step 4</h4>
						<p class="list-group-item-text">Checkout to Paypal</p>
					</a></li>
				</ul>
			</div>
		</div>

		<!--php/include/reg_process.php-->

		<form id='' class="form-horizontal" role="" method="POST" action="<?php //echo htmlentities('includes/formProcessor.php'); ?>">
			<input type="hidden" name="token" value="<?php echo $token; ?>">


			<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/versebuster2/includes/registration/step1.php'; ?>

			<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/versebuster2/includes/registration/step2.php'; ?>

			<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/versebuster2/includes/registration/step3.php'; ?>

			<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/versebuster2/includes/registration/step4.php'; ?>


		</form>
		<!-- 6 END Step Wizard (Working)"-->


		<div class="row">
			<div class="col-lg-12">
				<div class="well text-center">
					<h1 class="mrkt-red">Enjoy fabulous low prices for ever!</h1>
					<p>Cost of memberships shown are Special Introductory Rates.  Become a member while these rates last!</p>
					<p>BRONZE SILVER GOLD introductory rates still apply whenever introductory-rate members renew - FOR LIFE!  <BR>(There's no renewal for PLATINUM as it's 'LIFETIME'.)   </p>
					<p>BRONZE SILVER GOLD introductory-rate members may, at any time in the future, upgrade to PLATINUM for the introductory low-rate of $99. </p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="well">
					<!-- FIRST TABLE SAVINGS-->
					<div class="panel panel-default">
						<div class="panel-heading text-center" style="color:#fff; font-weight:bold; background-color:#222222; font-size:36px;">Table of savings</div>
						<table class="table ">
							<tbody>
								<tr BGCOLOR="#333333" style="color:#fff;">
									<td>Plan</td>
									<td>Duration</td>
									<td>Cost</td>
									<td>$ Credits</td>
									<td>Discount</td>
									<td align="center" colspan="2" style="border: 1px solid #F4D03F;border-width: 1px 1px 0 1px;">Example</td>
									<td></td>
								</tr>
								<tr bgcolor="#def0f4">
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td style="border-left:1px solid #F4D03F">ePlay<br>Unit Cost</td>
									<td style="border-right:1px solid #F4D03F">Audio Speech<br>Unit Cost</td>
									<td></td>
								</tr>
								<tr bgcolor="#def0f4">
									<td>No Membership</td>
									<td></td>
									<td>N/A</td>
									<td>N/A</td>
									<td>N/A</td>
									<td style="border-left:1px solid #F4D03F">$6.00</td>
									<td style="border-right:1px solid #F4D03F">$1.00</td>
									<td></td>
								</tr>
								<tr bgcolor="#def0f4">
									<td><span style="color:#665D1E">Bronze</span></td>
									<td>Month</td>
									<td>US $10</td>
									<td>20</td>
									<td>10%</td>
									<td style="border-left:1px solid #F4D03F">$4.80</td>
									<td style="border-right:1px solid #F4D03F">$0.80c</td>
									<td></td>
								</tr>
								<tr bgcolor="#def0f4">
									<td><span style="color:#C0C0C0">Silver</span></td>
									<td>3 Months</td>
									<td>US $20</td>
									<td>30</td>
									<td>20%</td>
									<td style="border-left:1px solid #F4D03F">$4.20</td>
									<td style="border-right:1px solid #F4D03F">$0.70c</td>
									<td></td>
								</tr>
								<tr bgcolor="#cadce0">
									<td style="padding-top: 40px; font-size:18px"><span style="color:#FFD700">Gold</span></td>
									<td style="padding-top: 40px; font-size:18px">12 Months</td>
									<td style="padding-top: 40px; font-size:18px">US $30</td>
									<td style="padding-top: 40px; font-size:18px">50</td>
									<td style="padding-top: 40px; font-size:18px">30%</td>
									<td style="padding-top: 40px; font-size:18px;border-left:1px solid #F4D03F">$3.00</td>
									<td style="padding-top: 40px; font-size:18px;border-right:1px solid #F4D03F">$0.50c</td>
									<td >
										<img width=120 src="images/bestBudgetValue.png">
										<!-- <p style="margin-bottom:0; background:url(images/bestBudgetValue.png) no-repeat; background-size:120px; height: 80px;">Best Budget Value</p> -->
									</td>
								</tr>
								<tr bgcolor="#acc2c7" style="font-size:20px; font-weight:bold;">
									<td style="padding-top: 40px"><span style="color:#e5e4e2">Platinum</span></td>
									<td style="padding-top: 40px">Lifetime</td>
									<td style="padding-top: 40px">US $99</td>
									<td style="padding-top: 40px">UNLIMITED!</td>
									<td style="padding-top: 40px">100%</td>
									<td style="padding-top: 40px; border: 1px solid #F4D03F;border-width: 0px 0 1px 1px">$0.00</td>
									<td style="padding-top: 40px; border: 1px solid #F4D03F;border-width: 0px 1px 1px 0">$0.00c</td>
									<td><img width=120 src="images/bestValue.png"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- END OF FIRST TABLE SAVINGS-->

					<br>
					<p class="center-block text-center mrkt-blue" style="font-size:20px;">Below we show how buying even the cheapest membership <strong>doubles</strong> what you can otherewise buy for the same money without membership.</p>
					<p class="text-center">(Explaination of Examples below)</p>
					<br>

					<!-- SECOND TABLE EXAMPLE A -->
					<div class="panel panel-default">
						<div class="panel-heading text-center" style="color:#fff; font-weight:bold; background-color:#222222;">
							<h2>EXAMPLE A - YOUR 1<sup>st</sup> PURCHASE</h2>
							<p>You want to buy (1) ePlay and (4) audio speeches</p>
						</div>
						<table class="table ">
							<tbody>
								<tr BGCOLOR="#333333" style="color:#fff;">
									<td >Plan</td>
									<td>Duration</td>
									<td class="text-center" colspan="2" style="border: 1px solid #F4D03F;border-width: 1px 1px 0 1px;">Example</td>
									<td>Shopping<BR>Basket</td>
									<td>Credits<BR>Initial</td>
									<td>Credits<BR>Remaining After<BR>1<sup>st</sup> purchase</td>
									<td>Actual Expenditure</td>
								</tr>
								<tr bgcolor="#def0f4">
									<td></td>
									<td></td>
									<td style="border-left:1px solid #F4D03F">ePlay<BR>x 1</td>
									<td style="border-right:1px solid #F4D03F">Audio Speeches<BR>x 4</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr bgcolor="#def0f4">
									<td>No Membership</td>
									<td></td>
									<td style="border-left:1px solid #F4D03F">$6.00</td>
									<td style="border-right:1px solid #F4D03F">$4.00</td>
									<td>$10</td>
									<td>n/a</td>
									<td>n/a</td>
									<td>$10</td>
								</tr>
								<tr bgcolor="#def0f4">
									<td><span style="color:#665D1E">Bronze</span></td>
									<td>1 Month</td>
									<td style="border-left:1px solid #F4D03F">$4.80</td>
									<td style="border-right:1px solid #F4D03F">$3.20</td>
									<td>$8</td>
									<td>20</td>
									<td>12</td>
									<td>$10</td>
								</tr>
								<tr bgcolor="#def0f4">
									<td><span style="color:#C0C0C0">Silver</span></td>
									<td>3 Months</td>
									<td style="border-left:1px solid #F4D03F">$4.20</td>
									<td style="border-right:1px solid #F4D03F">$2.80</td>
									<td>$7</td>
									<td>30</td>
									<td>23</td>
									<td>$20</td>
								</tr>
								<tr bgcolor="#cadce0">
									<td><span style="color:#FFD700">Gold</span></td>
									<td>12 Months</td>
									<td style="border-left:1px solid #F4D03F">$3.00</td>
									<td style="border-right:1px solid #F4D03F">$2.00</td>
									<td>$5</td>
									<td>50</td>
									<td>45</td>
									<td>$30</td>
								</tr>
								<tr bgcolor="#acc2c7" style="font-size:20px; font-weight:bold;">
									<td><span style="color:#e5e4e2">Platinum</span></td>
									<td>Lifetime</td>
									<td style="border: 1px solid #F4D03F;border-width: 0px 0 1px 1px">$0.00</td>
									<td style="border: 1px solid #F4D03F;border-width: 0px 1px 1px 0">$0.00</td>
									<td>$0.00</td>
									<td>UNLIMITED!</td>
									<td>UNLIMITED!</td>
									<td>$99</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- END OF SECOND TABLE EXAMPLE A -->

					<!-- THIRD TABLE EXAMPLE B -->
					<div class="panel panel-default">
						<div class="panel-heading text-center" style="color:#fff; font-weight:bold; background-color:#222222;">
							<h2>EXAMPLE B - YOUR 2<sup>nd</sup> PURCHASE</h2>
							<p>Later on you want to buy a further (2) ePlays and (3) audio speeches</p>
						</div>
						<table class="table ">
							<tbody>
								<tr BGCOLOR="#333333" style="color:#fff;">
									<td>Plan</td>
									<td>Duration</td>
									<td class="text-center" colspan="2" style="border: 1px solid #F4D03F;border-width: 1px 1px 0 1px;">Example</td>
									<td>Shopping<BR>Basket<BR>(Running<BR>Total)</td>
									<td>Credits<BR>Initial<BR>1<sup>st</sup> purchase</td>
									<td>Credits<BR>Remaining After<BR>2<sup>nd</sup> purchase</td>
									<td>Cumulative actual<BR> expenditure</td>
								</tr>
								<tr bgcolor="#def0f4">
									<td></td>
									<td></td>
									<td style="border-left:1px solid #F4D03F">ePlay<BR>x 2</td>
									<td style="border-right:1px solid #F4D03F">Audio Speeches<BR>x 3</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr bgcolor="#def0f4">
									<td>No Membership</td>
									<td></td>
									<td style="border-left:1px solid #F4D03F">$12.00</td>
									<td style="border-right:1px solid #F4D03F">$3.00</td>
									<td>$15</td>
									<td>n/a</td>
									<td>n/a</td>
									<td>$25</td>
								</tr>
								<tr bgcolor="#def0f4">
									<td><span style="color:#665D1E">Bronze</span></td>
									<td>1 Month</td>
									<td style="border-left:1px solid #F4D03F">$9.60</td>
									<td style="border-right:1px solid #F4D03F">$2.40</td>
									<td>$12</td>
									<td>12</td>
									<td>0</td>
									<td>$10</td>
								</tr>
								<tr bgcolor="#def0f4">
									<td><span style="color:#C0C0C0">Silver</span></td>
									<td>3 Months</td>
									<td style="border-left:1px solid #F4D03F">$8.40</td>
									<td style="border-right:1px solid #F4D03F">$2.10</td>
									<td>$10.50</td>
									<td>23</td>
									<td>12.50</td>
									<td>$20</td>
								</tr>
								<tr bgcolor="#cadce0">
									<td><span style="color:#FFD700">Gold</span></td>
									<td>12 Months</td>
									<td style="border-left:1px solid #F4D03F">$6.00</td>
									<td style="border-right:1px solid #F4D03F">$1.50</td>
									<td>$7.50</td>
									<td>45</td>
									<td>37.50</td>
									<td>$30</td>
								</tr>
								<tr bgcolor="#acc2c7" style="font-size:20px; font-weight:bold;">
									<td><span style="color:#e5e4e2">Platinum</span></td>
									<td>Lifetime</td>
									<td style="border: 1px solid #F4D03F;border-width: 0px 0 1px 1px">$0.00</td>
									<td style="border: 1px solid #F4D03F;border-width: 0px 1px 1px 0">$0.00</td>
									<td>$0.00</td>
									<td>UNLIMITED!</td>
									<td>UNLIMITED!</td>
									<td>$99</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- END THIRD TABLE EXAMPLE B -->

					<div class="row equal">
						<div class="col-lg-12 col-md-12">
							<div class="bronze-plan col-lg-3 col-md-1  col-xs-12 ">
								<p><b>BRONZE</b></p>
								<p>You acquired through two puchases (Example A & B combined) a total of (3) ePlays and (7) audio speeches.  For the same money ($10) without membership one could only buy (1) ePlay and (4) audio speeches!  Bronze now has no credits left, but Bronze, Silver and Gold can top up anytime (see Membership FAQs 1-3 below.)</p>
								<p>But there's even better value with SILVER, GOLD and PLATINUM</p>
								<p>You acquired the same as Bronze but you still have $12.50 worth of credits left.  Enough to buy, say, (2) more ePlays at $4.20 each ($8.40) leaving a remaining credit balance of $4.10 - enough to buy (5) more audio speeches at 70c each.  In total, your $20 Silver membership has bought you (5) ePlays and (12) audio speeches (with 60c worth of credit remaining).</p>
							</div>
							<div class="silver-plan col-lg-3 col-md-1 col-xs-12 ">
								<p><b>Silver</b></p>
								<p><span>1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum et eius perferendis animi nam earum error dolor nulla, magnam totam voluptatibus recusandae a aliquid, impedit aliquam tenetur neque. Provident, ipsum.</span>
									<span>2 Provident nesciunt, nihil pariatur. Aliquam praesentium molestiae officiis fuga non velit. Voluptatem ducimus, recusandae esse incidunt nulla tenetur laborum iure rerum, eos nostrum! A, iste ad, laudantium esse minus numquam.</span>
									<span>3 Itaque illo recusandae, a voluptate delectus nulla expedita, excepturi eius officiis fugit quidem eaque voluptas ipsa magni reprehenderit provident, saepe pariatur! Vel illum aperiam totam dicta nesciunt eum, natus rem.</span></p>
							</div>
							<div class="gold-plan col-lg-3 col-md-1 col-xs-12 ">
								<p><b>GOLD</b></p>
								<p>You acquired the same as Bronze and Silver but you still have $37.50 worth of credits left.  Enough to buy, say, (10) more ePlays at $3.00 each ($30) leaving a remaining credit balance of $7.50 - enough to buy (15) more audio speeches at 50c each.  In total, your $30 Gold membership has bought you (13) ePlays and (22) audio speeches.  Alternatively, your original $50 worth of credits could have bought 100 audio speeches! The combination is entirely up to you. </p>
							</div>
							<div class="platinum-plan col-lg-3 col-md-1 col-xs-12 ">
								<p><b>PLATINUM</b></p>
								<p>All products are FREE.  So your $99 Platinum Lifetime membership buys you UNLIMITED ePlays, Audio Speeches, eBooks ans Printable Scripts!  If you can afford the initial outlay, it-s clearly the best value of all.  </p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="well">
						<p><b>CUSTOMER CONVENIENCE</b></p>
						<p>You don't have to keep digging out your credit card or logging into PayPal every time you make a purchase.  It's quick and easy.</p>
						<p>You can buy as much or as little as you want in one go, in whatever combinations you like (i.e. audio speeches only or a complete mix) so long as as have enough credits left (see Membership FAQ 1 below).  </p>
						<p>We save on payment processing fees which means we can pass on big savings to you and remain extremely competitive.</p>
						<p>An extra bonus of membership is that you can save your favourite audio speeches.  In addition, if you chose automatic renewal, 'Your Favourites' are saved for as long as you're a member.  Renewal is computed on the basis on the last plan you chose (obviously doesn't apply to Platinum Lifetime as it never runs out.)</p>

					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<h3 class="text-center"><b>Membership FAQs</b></h3>
					<p class="text-center">FAQs 1-6 cover Terms & Conditions</p>
					<p><b>FAQ 1 What do I do when the credit in my account reaches zero and I want more?  </b></p>
					<p class="well">You simply top up again.  You can run up to three (3) plans at a time.  Say you buy Bronze on Jan 1, but want another $10 of Bronze credits on Jan 10.  The second plan will run from Jan 10 to Feb 9, while the old plan will continue to run Jan 31.  During the period they are running concurrently (15th to 31st) the credits will be aggregated.  So if you had 1.70c left on the old one your account balance in credits will show 21.70 (20 new credits + 1.70 old credits left).  But remember the old credits will expire on 31 Jan, so make sure you buy something worth at least $1.70 in total before 31 Jan.  </p>
					<p><b>FAQ 2 What happens if, time-wise, I'm in the middle of a plan and want to upgrade?  </b>  </p>
					<p class="well">If you upgrade, say from Bronze to Silver, all the old remaining Bronze credits will be added to Silver's 30 new credits and you will enjoy the new higher discount rate of 30% for the longer time-period of three months.  The old Bronze account will be deleted as it no longer serves any purpose and you now have an even better deal.  If your Bronze account was on automatic renewal that will be deleted to.  When you take out the Silver you will have an option for automatic renewal of Silver.  </p>
					<p><b>FAQ 3 What happens if, time-wise, I'm in the middle of a plan and want to downgrade?    </b></p>
					<p class="well">Downgrading works the same way, only any remaining credits from the old plan are not transferred (it wouldn't make sense).  If your old 'higher grade account' was on auto-renewal you will have an option to cancel it when buying the new lower grade membership. </p>
					<p><b>FAQ 4 Can I cancel my membership and stop the automatic renewal option I checked any time I like?   </b> </p>
					<p class="well">Yes, you can.  Just go to your account control panel when you log in and cancel.  Quick, easy, instant.  No fuss, no bother.  It's our guarantee.</p>
					<p><b>FAQ 5 If I cancel membership or if I have unused credits when my membership expires do you refund the value of credits I have left?    </b></p>
					<p class="well">Sorry, we don't refund unused credit.  We do, however, send you regular email alerts so you are not unwittingly left with unused credit.  In addition, when you log in as a member, your remaining credits are clearly displayed along with their expiry date.  If you're on automatic renewal any remaining credits will not be lost, but added to your new credits.  </p>
					<p><b>FAQ 6 Can I transfer credits to other members?   </b> </p>
					<p class="well">Sorry, credits are not transferable to other members.</p>
					<p><b>FAQ 7 Why do you have a download limit of 20 products a day?   </b> </p>
					<p class="well">This is to prevent any possibility of a systems crash.  If, for example, all Platinum members were to download everything at the same time this might provoke such a scenario.  That would not be fair to other members who are on a shorter time-frame.  Secondly, we feel it's unlikely anyone would have a compelling need to download a mass of Versebuster products in a single day.  If, however, you anticipate you would have such a need, please email John Nobody at john.nobody@versebuster.com.  </p>
					<p><b>FAQ 8 Is it really worth buying Gold or Platinum membership?  You only have limited products.   </b> </p>
					<ul class="well">
						<li>Firstly, that depends on your definition of 'limited'.  We have recorded 500 Shakespeare speeches.  Why pay $500 for them (non-membership) when with Platinum Lifetime you can have them all for $99, together with all 38 annotated ePlays, all printable scripts of ePlays and audio speeches, and all eBooks?  It's an amazing bargain! </li>
						<li>Secondly, there are actually a lot more than 500 speeches and a lot more than 38 ePlays.  If you read their respective introductions (see Audio Speeches & ePlays), you will appreciate that each speech and ePlay comes in up to three possible versions - the First Folio version of 1623, a 'Good' Quarto (where applicable) and modern - reflecting word substitutions, different line attribution, additions and omissions of text or whole scenes, changes in punctuation and changes in layout (like prose reworked as verse and vice-versa) that occurred while Shakespeare lived as well in the intervening centuries.  All these can radically alter the mood, attitude, pace, sense, even the conclusion of a speech or play.  So, in fact, there are more than 1,000 audio recordings and nearly 80 eighty ePlays and nearly 80 printable scripts. </li>
						<li>Thirdly, in time we might do scenes as well, notably 'two-handers' (meaning scenes that involve two characters - Romeo and Juliet's first meeting, for instance, which Shakespeare penned in the form of a sonnet - or Hamlet and his mother Gertrude and so forth.)   There are hundreds of such scenes.  And while on the subject of Hamlet, there is something to be said doing the 'Bad' Quarto as Hamlet as an ePlay.  In it, Hamlet's To be or not to be speech sensationally starts: </li>
						<p>To be, or not to be, aye there's the point,
							To Die, to sleep, is that all? Aye all:
							No, to sleep, to dream, aye marry there it goes...</p>
							<p>The point is we will be adding more and more product over time.  </p>
							<li>Finally, membership prices can't stay this cheap.  By taking out membership now you lock-in these introductory rates for ever.  Those who come along in two, five or ten years time will have to pay a progressively higher rate.  </li>
						</ul>
					</div>
				</div>

				<!-- /CONTENT ============-->
				<script src="js/library/prefixfree.min.js" type="text/javascript"></script>

				<?PHP
				require_once($_SERVER['DOCUMENT_ROOT'] . "/versebuster2/php/footer.php");
				?>

