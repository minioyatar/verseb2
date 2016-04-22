<?PHP

require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/php/header.php" : $_SERVER['DOCUMENT_ROOT'] . "/php/header.php");

?>


<!-- row -->
<div class="row main-text">
	<div class="col-lg-9"><!-- #col-lg-9 introduction content -->
		
		<!--<a href="/versebuster/audio-speeches/audio-index" class="btn btn-info" role="button">Back to Audio Index</a>-->
		<br>
		<br>
		
		<div class="well">
			<p style="color:#b00000">MODERN</p>
			<h3 class="page-title-ext text-center branding-style-reg" style="color: #b00000; ">All’s Well That Ends Well</h3>
			<p><a href="#modal" >Act 1, Scene 1: Rousillon. The COUNT's palace.</a></p>
			<p><a href="#modal" >Act 1, Scene 2: Paris. The KING's palace.</a></p>
			<p><a href="#modal" >Act 1, Scene 3: Rousillon. The COUNT's palace.</a></p>
			<p><a href="#modal" >Act 2, Scene 1: Paris. The KING's palace.</a></p>
			<p><a href="#modal" >Act 2, Scene 2: Rousillon. The COUNT's palace.</a></p>
			<p><a href="#modal" >Act 2, Scene 3: Paris. The KING's palace.</a></p>
			<p><a href="#modal" >Act 2, Scene 4: Paris. The KING's palace.</a></p>
		</div>

	</div><!-- ./ #col-lg-9 introduction content -->


	<div class="col-lg-3 sidebars" >
		<img src="/versebuster/images/300x250-web-ad.jpg" class="img-responsive">
	</div>

	<!-- #col-lg-3 AD-->
	<div class="col-lg-3 sidebars">
		<!-- <div class="add-300x250" > -->
		<!-- <img src="/versebuster/images/sonderponic300x600.png" class="img-responsive" > -->
		<!-- </div> -->
	</div><!-- #col-lg-3 AD 300X250-->





</div><!-- /#row main-text-->

<div class="remodal" data-remodal-id="modal" style="padding: 14px;">
	<h1>All’s Well That Ends Well</h1>
	<h3>Scene 1 Act 2</h3>

	<div class="sm2-bar-ui compact full-width">

		<div class="bd sm2-main-controls">

			<div class="sm2-inline-texture"></div>
			<div class="sm2-inline-gradient"></div>

			<div class="sm2-inline-element sm2-button-element">
				<div class="sm2-button-bd">
					<a href="#play" class="sm2-inline-button play-pause">Play / pause</a>
				</div>
			</div>

			<div class="sm2-inline-element sm2-inline-status">

				<div class="sm2-playlist">
					<div class="sm2-playlist-target">
						<!-- playlist <ul> + <li> markup will be injected here -->
						<!-- if you want default / non-JS content, you can put that here. -->
						<noscript><p>JavaScript is required.</p></noscript>
					</div>
				</div>

				<div class="sm2-progress">
					<div class="sm2-row">
						<div class="sm2-inline-time">0:00</div>
						<div class="sm2-progress-bd">
							<div class="sm2-progress-track">
								<div class="sm2-progress-bar"></div>
								<div class="sm2-progress-ball"><div class="icon-overlay"></div></div>
							</div>
						</div>
						<div class="sm2-inline-duration">0:00</div>
					</div>
				</div>

			</div>

			<div class="sm2-inline-element sm2-button-element sm2-volume">
				<div class="sm2-button-bd">
					<span class="sm2-inline-button sm2-volume-control volume-shade"></span>
					<a href="#volume" class="sm2-inline-button sm2-volume-control">volume</a>
				</div>
			</div>

		</div>

		<div class="bd sm2-playlist-drawer sm2-element">

			<div class="sm2-inline-texture">
				<div class="sm2-box-shadow"></div>
			</div>

			<!-- playlist content is mirrored here -->

			<div class="sm2-playlist-wrapper">
				<ul class="sm2-playlist-bd">
					<li><a href="http://freshly-ground.com/data/audio/sm2/Adrian%20Glynn%20-%20Seven%20Or%20Eight%20Days.mp3"><b>Adrian Glynn</b> - Seven Or Eight Days</a></li>
				</ul>
			</div>

		</div>

	</div>

	<div class="verse-content">
		<?php
			$section = file_get_contents('All-is-Well-That-Ends-Well/a1-s1.txt');
			echo '<pre>' . $section . '</pre>';
		?>
	</div>
	<!-- <a class="remodal-confirm" href="#">OK</a> -->
</div>

<?PHP

	require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/php/footer.php" : $_SERVER['DOCUMENT_ROOT'] . "/php/footer.php");

?>