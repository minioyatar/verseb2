<?PHP

require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/php/header.php" : $_SERVER['DOCUMENT_ROOT'] . "/php/header.php");

?>

<style type="text/css">
.jobsLi ul{
    counter-reset:item;
    list-style:none;
}
.jobsLi li:before        { 
    content: "("counter(item, lower-roman) ")";
    counter-increment: item;
    line-height: 24px;
}
</style>
<!-- row -->	
<div class="row main-text">
	<div class="col-lg-9"><!-- #col-lg-9 introduction content -->
		<div class="well">
			<h3 class="page-title-ext text-center branding-style-reg">Jobs</h3>

			<p class="text-center">2016</p>

			<p><strong>Co-Editor</strong></p>

			<p><img src="<?php echo SITE_URL_FILE; ?>images/diamondBullet.gif"> Seeking a co-editor with extensive knowledge of Shakespeare performance and verse-speaking. &nbsp;We offer a share of the business. &nbsp;Work from home full-time or part-time. &nbsp;Main method of communication Skype but occasional meet-ups (may involve international travel depending on where in the great globe you are based). &nbsp;Would suit a semi- or fully retired person looking to profit long-term from their experience and knowledge. &nbsp;Preferably UK or USA based, but will consider other territories. </p>

			<p><strong>Powerpoint specialist</strong></p>

			<p><img src="<?php echo SITE_URL_FILE; ?>images/diamondBullet.gif"> Seeking someone with advanced Powerpoint skills to take our 'teacher' slide shows to the next level. &nbsp;Any age, but some knowledge of the rudiments of Shakespeare-speaking would be helpful. &nbsp;We offer a share of the business. &nbsp;Work from home full-time or part-time. &nbsp;Main method of communication Skype but occasional meet-ups. &nbsp;Preferably UK or LA based, but will consider other regions in America as well as HK and Australasia. </p>

			<p><strong>Social Media and Marketing Expert</strong></p>
			<p><img src="<?php echo SITE_URL_FILE; ?>images/diamondBullet.gif"> Seeking a social media and marketing expert with keen interest in Shakespeare. &nbsp;We offer a share of the business. &nbsp;Work from home full-time or part-time. &nbsp;Main method of communication Skype but occasional meet-ups. &nbsp;Preferably UK or LA based, but will consider other regions in America and HK and Australasia.  </p>

			<p><strong>Compiler</strong></p>
			<p><img src="<?php echo SITE_URL_FILE; ?>images/diamondBullet.gif"> Seeking someone with passion for Shakespeare to develop our 'Quick Reference [Performance] Library' as a bolt-on resource for the site. &nbsp;The library will: </p>

<div class="jobsLi">
			<ul >
				<li> &nbsp;collate informative reviews of past performances of each play across the major territories </li>
				<li> &nbsp;list interesting film or TV productions of Shakespeare's plays</li>
				<li> &nbsp;list lectures by the great and good on individual plays and performance technique (available on websites, CD-ROM, etc)</li>
				<li> &nbsp;source audio recordings of any Shakespeare material, etc</li>
				<li> &nbsp;split bibliography into suitable categories of Beginner level, Intermediate, Advanced </li>
				<li> &nbsp;organise elements of the above into a 'By play' category.</li>
			</ul>
</div>


			<p>For the 'Quick Reference Library' to live up to its name, the compiler needs to use their professional judgement to sort the wheat from the chaff. &nbsp;To be of genuine value for those preparing performances / productions, content must be streamlined and relevant.   </p>

			<p>Familiarity with Word.doc tables would help (or a willingness to learn). </p>

			<p>We offer a share of the business. &nbsp;Work from home full-time or part-time. &nbsp;Would suit a semi- or fully-retired person looking to profit long-term from their experience and knowledge. &nbsp;Any territory.</p>
		<br>


			<!-- <p>PARTNERSHIPS</p>

			<p>At this time we seek partners we extensive knowledge of Shakespeare or the Shakespeare industry in USA,  
				Canada, Australasia and UK. &nbsp;We offer a share of the business.</p>
 -->
		</div>
                                  


	</div><!-- ./ #col-lg-9 introduction content -->

    <div class="col-lg-3 sidebars" >
        <a href="<?php echo SITE_URL_FILE; ?>advertise.php"><img src="images/300x250-web-ad.jpg" class="img-responsive"></a>
    </div>	

	<!-- #col-lg-3 AD-->	  
	<div class="col-lg-3 sidebars">	    
	    <!-- <div class="add-300x250" > -->
            <img class="img-responsive" src="images/ads/henryiv_poster.jpg">
        <!-- </div> -->
	</div><!-- #col-lg-3 AD 300X250-->	

</div><!-- /#row main-text-->



<?PHP

require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/php/footer.php" : $_SERVER['DOCUMENT_ROOT'] . "/php/footer.php");

?>