<?php
require_once "includes/db_connections.php";
require_once "includes/functions.php";

?>
<!DOCTYPE html>

<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <style>


      
    </style>
</head>

<body>
    <div id="container">
        <div id="header">
            <div id="logo"></div>
            <div id="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <!--<li>Manage Account</li>-->
                </ul>
            </div>
        </div><!--end of header-->
       <div id="box-containers"> <!-- Box -->
                <div class="box">
                        <!-- Box Head -->
                        <div class="box-head">
                                <h2 class="left" >List of Question</h2>
                                <!--<div class="right">-->
                                <!--        <label>search articles</label>-->
                                <!--        <input type="text" class="field small-field" />-->
                                <!--        <input type="submit" class="button" value="search" />-->
                                <!--</div>-->
                        </div>
                        <!-- End Box Head -->	

                        <!-- Table -->
                        <div class="table">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                                <!--<th width="13"></th>-->
                                                <th>Question</th>
                                                <th>Choice 1</th>
                                                <th>Choice 2</th>
                                                <th>Choice 3</th>
                                                <th>Choice 4</th>
                                                <th>Correct Answer</th>
                                                <th width="110" class="ac">Content Control</th>
                                        </tr>
                                        <?php
                                            $all_quiz_set = get_all_quiz();
                                            
                                            while($question_ans = mysql_fetch_array($all_quiz_set)){
                                                echo "<tr>";
                                                        //echo "<td><input type=\"checkbox\" class=\"checkbox\" /></td>";
                                                        echo "<td><h3 class=\"main-h3\">{$question_ans["quiz_question"]}</h3></td>";
                                                        echo "<td><h3>{$question_ans["quiz_an1"]}</h3></td>";
                                                        echo "<td><h3>{$question_ans["quiz_an2"]}</h3></td>";
                                                        echo "<td><h3>{$question_ans["quiz_an3"]}</h3></td>";
                                                        echo "<td><h3>{$question_ans["quiz_an4"]}</h3></td>";
                                                        echo "<td><h3>{$question_ans["quiz_ans"]}</h3></td>";
                                                        echo "<td><a href=\"includes/process_handler.php?deletequizentryid={$question_ans["quiz_id"]}\" class=\"ico del\">Delete</a><a href=\"./includes/process_handler.php?editquizentryid={$question_ans["quiz_id"]}\" class=\"ico edit\">Edit</a></td>";
                                                echo "</tr>";
                                            }

                                        ?>

                                </table>
                        </div>
                        <!-- Table -->
                        
                </div>
                <!-- End Box -->
                
                
                
                <!-- Box -->
                <div class="box box-720">
                        <!-- Box Head -->
                        <div class="box-head">
                                <h2>Add New Question</h2>
                        </div>
                        <!-- End Box Head -->
                        
                        <form action="includes/process_handler.php" method="post" enctype="multipart/form-data">
                                
                                <!-- Form -->
                                <div class="form">
                                        <p>
                                                <label>Question<span>(Required Field)</span></label>
                                                <input name="input_question" type="text" class="field size1" />
                                        </p>	
                                        <p>
                                                <label>Choice 1<span>(Required Field)</span></label>
                                                <input name="input_choice1" type="text" class="field size4" />
                                        </p>
                                        <p>
                                                <label>Choice 2<span>(Required Field)</span></label>
                                                <input name="input_choice2" type="text" class="field size4" />
                                        </p>
                                        <p>
                                                <label>Choice 3<span>(Required Field)</span></label>
                                                <input name="input_choice3" type="text" class="field size4" />
                                        </p>
                                        <p>
                                                <label>Choice 4<span>(Required Field)</span></label>
                                                <input name="input_choice4" type="text" class="field size4" />
                                        </p>
                                        <p>
                                                <label>Answer<span>(Required Field)</span></label>
                                                <input name="input_ans" type="text" class="field size4" />
                                        </p>
                                </div>
                                
                                <!-- Form Buttons -->
                                <div class="buttons">
                                        <!--<input type="button" class="button" value="preview" />-->
                                        <input name="add_question" type="submit" class="button" value="submit" />
                                </div>
                                <!-- End Form Buttons -->
                        </form>
			<!-- End Form -->				
                </div>
                <!-- End Box -->      

        </div><!--END of CONTENTS-->
        
        <div id="footer"></div><!--end of FOOTER-->
        

    </div>


</body>
</html>
