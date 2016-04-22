<?PHP
require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/php/header.php" : $_SERVER['DOCUMENT_ROOT'] . "/php/header.php");
?>
        <style>
        .eplay-tbl table {
          width:100%;
        }
        .eplay-tbl table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
        .eplay-tbl th, .eplay-tbl td {
          padding: 5px;
          text-align: center;
        }
        table#t01 tr {
          background-color: white;
        }
        table#t01 th:nth-child(1) {
          background-color:#F0F0F0;
          color: black;
        }
        table#t01 th:nth-child(2) {
          background-color:#009933;
          color: white;
        }
        table#t01 th:nth-child(3) {
          background-color:#F0F0F0;
          color: black;
        }
        table#t01 th:nth-child(4) {
          background-color:#B00000  ;
          color: white;
        }
        table#t01 th:nth-child(5) {
          background-color:#F0F0F0;
          color: black;
        }
        table#t01 th:nth-child(6) {
          background-color:#0099FF;
          color: white;
        }
        </style>
  <!-- row -->
  <div class="row main-text">
    <div class="col-lg-9"><!-- #col-lg-9 introduction content -->
      <div class="well"  style="margin-bottom: 0px;">
        <h3 class="page-title-ext text-center branding-style-reg">ePLAYS</h3>
        <p class="text-center"><strong>INDEX</strong></p>
        <br>
        <p>SCHOOL VERSIONS</p>
        <p>With the exception of <span class="branding-style-title">Julius Caesar</span> and <span class="branding-style-title">Richard II</span> all plays come in a school version. &nbsp; The point of the school version is not to dumb down (for which we feel no need) but to avoid embarrassment and potential legal issues by removing annotations concerning Shakespeare's numerous sexual references. &nbsp; Other than that they are entirely the same. &nbsp; There are no sexual references in <span class="branding-style-title">Julius Caesar</span> and <span class="branding-style-title">Richard II</span>. &nbsp; In Checkout select 'school version'.</p>
      </div>

        <div class="become-mem-action">
          <div class="catch-phrase">
            <p class="text-center" >Why not become a member today for as little as $10 and enjoy 50% and more off prices? </p>
            <p class="text-center call-act-arrow">It's easy as <span class="call-act-123">1-2-3!</span></p>
            <!-- <img src="/versebuster/images/arrow-icon.png" width=100> -->
          </div>
          <p class="text-center call-to-act"><a href="#">Become a member</a></p>
        </div>

      <div class="well">
        <br>
        <p>PERICLES & TWO NOBLE KINSMAN</p>
        <p><span class="branding-style-title">Pericles, Prince of Tyre</span> is taken from the Second Folio of 1632 where it first appeared, and <span class="branding-style-title">The Two Noble Kinsman</span> from its 1634 Quarto. &nbsp; As with all other plays they come in a modern version.</p> <br>
        <p>KING LEAR</p>
        <p>When King Lear first appeared in a 1608 quarto (now named Quarto 1 or 'Q1') it was titled <span class="branding-style-title">The Historie of King Lear</span>, or, to be more exact, <span class="branding-style-title">M.William Shak-speare HIS Historie, of King Lear</span>. &nbsp; When it subsequently appeared in the First Folio of 1632 (F1) it was titled <span class="branding-style-title">The Tragedie of King Lear</span>. &nbsp; It is believed that Shakespeare himself returned to the play to make substantial revisions, an unusual practice for a playwright at the time (the extraordinary conveyor belt of Elizabethan plays had given rise to a 'here-today, gone-tomorrow' shrug towards the art-form). &nbsp; More often it was the company of actors who made revisions, whether to cut running time, insert topical jokes, or otherwise 'improve' it.</p> <p>Editors are generally torn between conflating the two King Lear texts or treating them as two distinct entities. &nbsp; As we are a resource we produce editions to reflect all permutations; namely, a pure Q1 original & a pure Q1 modern, a pure F1 original & a pure F1 modern, and a typical modern conflation (the kind most commonly used in schools and productions).</p>
        <br>
        <p>ePLAY OPTIONS</p>
        <p>Please select from availability table below to:</p>
        <ul>
          <li>see demo page</li>
          <li>purchase</li>
          <li>save as favourite (members only)</li>
        </ul>
        <br>

        <table id="t01" class="eplay-tbl">
          <tr>
            <th></th>
            <th>1<sup>st</sup> Folio</th>
            <th>2<sup>nd</sup> Folio</th>
            <th>Modern</th>
            <th>1634<br> Quarto</th>
            <th>‘Good <br>Quartos’</th>
          </tr>
          <tr>
            <td><b>By alphabetical order</b></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>*most imp</td>
          </tr>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <td>All’s Well That Ends Well</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/alls-well-that-ends-well.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/modern/alls-well-that-ends-well.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Anthony & Cleopatra, <i>The Tragedy of</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/anthony-and-Cleopatra.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/modern/anthony-and-Cleopatra.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>As You like It</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/comedy-of-errors.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/modern/comedy-of-errors.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <td>Comedy of Errors, <i>The</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/as-you-like-it.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/modern/as-you-like-it.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Coriolanus, <i>The Tragedy of</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/coriolanus.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/modern/coriolanus.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Cymbeline</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/cymbeline.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/modern/cymbeline.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <td>Hamlet, Prince of Denmark, <i>The Tragedy of</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/hamlet.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/modern/hamlet.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td style="height: 50px;"><a href="#"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a>*</td>
          </tr>
          <tr>
            <td>Henry the Fifth, <i>The Life of</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/henry-the-fifth.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/modern/henry-the-fifth.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Henry the Fourth, <i>The First Part of<i/></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/henry-the-fourth-part-1.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/modern/henry-the-fourth-part-1.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Henry the Fourth, <i>The Second Part of</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/henry-the-fourth-part-2.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/modern/henry-the-fourth-part-2.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Henry the Sixth, <i>The First Part of</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/henry-the-sixth-part-1.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/modern/henry-the-sixth-part-1.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Henry the Sixth, <i>The Second Part of<i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/henry-the-sixth-part-2.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/modern/henry-the-sixth-part-2.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Henry the Sixth, <i>The Third Part of<i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/henry-the-sixth-part-3.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/modern/henry-the-sixth-part-3.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <td>Julius Caesar, <i>The Tragedy of</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/julius-caesar.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/modern/julius-caesar.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <td>King Henry the Eighth, <i>The Famous History of the Life of</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/king-henry-the-eighth.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>King John, <i>The Life and Death of</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/king-john.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>King Lear</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/king-lear.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td style="height: 50px;"><a href="#"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a>*</td>
          </tr>
          <tr>
            <td>King Richard the Second, <i>The Tragedy of</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/king-richard-the-second.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td style="height: 50px;"><a href="#"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a>*</td>
          </tr>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <td>Love’s Labour’s Lost</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/loves-labours-lost.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td style="height: 50px;"><a href="#"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a>*</td>
          </tr>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <td>Macbeth, <i>The Tragedy of</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/macbeth.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Measure for Measure</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/measure-of-measure.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Merchant of Venice, <i>The</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/merchant-of-venice.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Merry Wives of Windsor, <i>The</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/merry-wives-of-windsor.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Midsummer Night’s Dream, <i>A</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/midsummer-nights-dream.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Much Ado About Nothing</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/much-ado-about-nothing.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <td>Othello, the Moor of Venice, <i>The Tragedy of</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/othelo-the-moor-of-venice.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td style="height: 50px;"><a href="#"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a>*</td>
          </tr>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
          <td>Pericles, Prince of Tyre</td>
          <td><p>&#8226;</p></td>
          <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
          <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
          <td>n/a</td>
          <td><p>&#8226;</p></td>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <td>Richard the Third, <i>The Tragedy of</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/richard-the-third.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Romeo & Juliet, <i>The Tragedy of</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/romeo-and-juliet.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td style="height: 50px;"><a href="#"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a>*</td>
          </tr>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <td>Taming of the Shrew, <i>The</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/taming-of-the-shrew.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Tempest, <i>The</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/tempest.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Timon of Athens, <i>The Life of</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/timon-of-athens.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Titus Andronicus, <i>The Tragedy of<i/></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/titus-andonicus.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Troilus & Cressida, <i>The History of</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/troilus-and-cressida.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Twelfth Night, or What You Will</td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/twelfth-night.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Two Gentleman of Verona, <i>The</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/two-gentleman-of-verona.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <td>Two Noble Kinsmen, <i>The</i></td>
            <td><p>&#8226;</p></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
          <tr>
            <td>Winter’s Tale, <i>The</i></td>
            <td><a href="<?php echo SITE_URL_FILE; ?>eplay/first-folio/winter’s-tale.php"><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><a href=""><img class="tbl-glossy-tick" src="/versebuster/images/yellow2.png"></a></td>
            <td>n/a</td>
            <td><p>&#8226;</p></td>
          </tr>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </table>
        <br>
        <br>
        <p>'GOOD' QUARTOS - DATES</p>
        <ul>
          <li>1594&nbsp; Titus Andronicus Q1</li>
          <li>1597&nbsp; <strong>Richard II > Q1</strong></li>
          <li>1598&nbsp; Henry IV, Pt 1 > Q1</li>
          <li>1598&nbsp; <strong>Love's Labour's Lost > Q</strong></li>
          <li>1599&nbsp; <strong>Romeo & Juliet > Q2</strong></li>
          <li>1600&nbsp; Henry IV, Pt 2 > Q1</li>
          <li>1600&nbsp; A Midsummer Night's Dream > Q1</li>
          <li>1600&nbsp; Merchant of Venice > Q1</li>
          <li>1600&nbsp; Much Ado About Nothing > Q</li>
          <li>1602&nbsp; Henry V > Q2</li>
          <li>1604&nbsp; <strong>Hamlet > Q2a & 1605 Q2b,</strong></li>
          <li>1608&nbsp; <strong>King Lear > Q1</strong></li>
          <li>1609&nbsp; Troilus and Cressida > Qa & b</li>
          <li>1622&nbsp; <strong>Othello > Q1</strong></li>
        </ul>
        <p><span class="branding-style-reg">NB</span></p>
        <ul>
          <li>1597&nbsp; Richard III Q1 > “unusually good Bad Quarto” </li>
          <li>1622&nbsp; Richard III Q6 > used for F1?</li>
        </ul>
        <br>
        <br>
      </div>
    </div><!-- ./ #col-lg-9 introduction content -->
    <!-- +++++++++++++++++++++++++++WEB ADS -->
    <div class="col-lg-3 sidebars" >
      <img src="/versebuster/images/300x250-web-ad.jpg" class="img-responsive">
    </div>
    <!-- #col-lg-3 ad 2-->
    <div class="col-lg-3 sidebars">
      <img src="/versebuster/images/ads/bringup.jpg" class="img-responsive" >
    </div><!-- #col-lg-3 ad 2-->
  </div><!-- /#row main-text-->
<?PHP
require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/php/footer.php" : $_SERVER['DOCUMENT_ROOT'] . "/php/footer.php");
?>