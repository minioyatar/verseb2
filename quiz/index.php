<?php
// require_once "./quiz_admin/includes/db_connections.php";
// require_once "./quiz_admin/includes/functions.php";

?>
<!DOCTYPE html>

<html>
<head>
    <title>Shakespeare Quiz</title>
    <link rel="stylesheet" href="./quiz_admin/css/style.css" type="text/css" media="all" />
    <script type="text/javascript" src="./quiz_admin/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="./quiz_admin/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="./quiz_admin/js/jquery.blockUI.js"></script>
    <script type="text/javascript" src="./quiz_admin/js/functions-JS.js"></script>
    <style>

      
    </style>
</head>

<body>
    <div id="container">
        <!--<div id="header">-->
            <!--<div id="logo"><h1>Shakespeare Quiz</h1></div>-->
            <h1 style="color:#000;">Shakespeare Quiz</h1>
            <!--<div id="menu">-->
                <!--<ul>-->
                    <!--<li><a href="index.php">Home</a></li>-->
                <!--</ul>-->
            <!--</div>-->
        <!--</div>--><!--end of header-->

       <div id="box-containers"> 
                <!-- Box -->
                <div class="box">
                        <!-- Box Head -->
                        <div class="box-head">
                                <h2 class="left btn" id="run_quiz_btn">Take the Quiz Challenge</h2>
                        </div>
                        <!-- End Box Head -->	
                        
                </div>
                <!-- End Box -->
        </div><!--END of CONTENTS-->
        
        <div id="footer"></div><!--end of FOOTER-->
        

    </div>
	    
	    <!-- Table -->
	    <div class="text-content" id="test">
		<h2 id='close-btn' style="float: right; color: #fff; font-weight: bold; height: 20px; margin-top: -30px;">[X]</h2>
		  <form id="quiz-form" action="./quiz_admin/includes/front_processors.php" method="POST" name="quiz">
			<div id="test-container">
			    <?php
				 $all_quiz_set = get_all_quiz();
				 while($question_ans = mysql_fetch_array($all_quiz_set)){
				      echo "<h3>{$question_ans["quiz_question"]}</h3>";
				      echo "<h3><input type=\"radio\" name=\"{$question_ans["quiz_id"]}\" value=\"{$question_ans["quiz_an1"]}\">{$question_ans["quiz_an1"]}</h3>";
				      echo "<h3><input type=\"radio\" name=\"{$question_ans["quiz_id"]}\" value=\"{$question_ans["quiz_an2"]}\">{$question_ans["quiz_an2"]}</h3>";
				      echo "<h3><input type=\"radio\" name=\"{$question_ans["quiz_id"]}\" value=\"{$question_ans["quiz_an3"]}\">{$question_ans["quiz_an3"]}</h3>";
				      echo "<h3><input type=\"radio\" name=\"{$question_ans["quiz_id"]}\" value=\"{$question_ans["quiz_an4"]}\">{$question_ans["quiz_an4"]}</h3>";
				 }
				 echo "<input name=\"submit_answer\" type=\"submit\" class=\"button\" value=\"submit\" style=\"float: right;\"/>";
			    ?>
			</div>
		       <h2 id="nextQ">Next</h2>
		  </form>
	    </div>
	    <!-- Table -->

</body>
</html>
