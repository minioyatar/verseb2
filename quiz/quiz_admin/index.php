<?php
require_once "includes/db_connections.php";
require_once "includes/functions.php";

?>
<!DOCTYPE html>

<html>
<head>
    <title>Versebuster - A Shakespeare Performance Resource with Audio</title>
    <!-- Bootstrap Core CSS -->
    <link href="/versebuster2/css/bootstrap.min.css" rel="stylesheet">
    <link href="/versebuster2/css/vbcustom.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> -->
    <style>
        .table tr th{
            text-align: center;
            vertical-align: middle !important;
        }      
    </style>
</head>

<body style="background:#FFFFFF !important;">
    <div class="container-fluid">
        <div class="row">
            <div style="background:#F8F8F8; color:#333333; padding:10px; border-bottom:1px solid #e7e7e7;">
                <h1>Welcome to <span style=" font-family: 'LucidaCustomFont' ,arial,sans-serif;">Versebuster<sup>&#169;</sup></span> quiz editor</h1>
            </div>
        </div><!--end of header-->

       <div class="row"> <!-- Box -->
            <div class="col-lg-12" style="color: #333;">
                <h2>List of Questions</h2>

                <!-- Table -->
                <div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-condensed ">
                            <thead>
                                <tr style="background:#3980B5">
                                    <th>Question</th>
                                    <th>Choice 1</th>
                                    <th>Choice 2</th>
                                    <th>Choice 3</th>
                                    <th>Choice 4</th>
                                    <th>Correct Answer</th>
                                    <th>Category</th>
                                    <th width="110" class="ac">Content Control</th>
                                </tr>
                            </thead>
                                <?php
                                    $all_quiz_set = get_all_quiz();
                                    while($question_ans = mysql_fetch_array($all_quiz_set)){
                                        echo "<tr>";
                                                //echo "<td><input type=\"checkbox\" class=\"checkbox\" /></td>";
                                                echo "<td><p class=\"main-h3\">{$question_ans["quiz_question"]}</p></td>";
                                                echo "<td><p>{$question_ans["quiz_an1"]}</p></td>";
                                                echo "<td><p>{$question_ans["quiz_an2"]}</p></td>";
                                                echo "<td><p>{$question_ans["quiz_an3"]}</p></td>";
                                                echo "<td><p>{$question_ans["quiz_an4"]}</p></td>";
                                                echo "<td><p>{$question_ans["quiz_ans"]}</p></td>";
                                                echo "<td><p>{$question_ans["quizCateg"]}</p></td>";
                                                echo "<td style=\"background-color: #eee; vertical-align:middle;\"><a href=\"includes/process_handler.php?deletequizentryid={$question_ans["quiz_id"]}\" class=\"ico del\">Delete</a> | <a href=\"update.php?editquizentryid={$question_ans["quiz_id"]}\" class=\"ico edit\">Edit</a></td>";
                                        echo "</tr>";
                                    }
                                ?>
                        </table>
                    </div>
                </div>
                <!-- Table -->
                    
            </div>
            <!-- End Box -->
            
            
            
            <!-- Box -->
            <div class="col-lg-12">
                <h2>Add New Question</h2>
                <form action="includes/process_handler.php" method="POST" enctype="multipart/form-data">
                        <!-- Form -->
                        <div class="form">
                                <div class="form-group">
                                        <textarea placeholder="Question" name="input_question" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                        <textarea placeholder="Choice 1" name="input_choice1" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                        <textarea placeholder="Choice 2" name="input_choice2" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                        <textarea placeholder="Choice 3" name="input_choice3" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                        <textarea placeholder="Choice 4" name="input_choice4" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                        <textarea placeholder="Answer" name="input_ans" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <h2>Select category</h2>
                                    <p><input class="radioBtnClass" type="radio" name="input_qcat" value="f"> FUN QUIZ</p>
                                    <p><input class="radioBtnClass" type="radio" name="input_qcat" value="m"> MAIN QUIZ</p>
                                    <p><input class="radioBtnClass" type="radio" name="input_qcat" value="p"> QUIZ FOR THE PROs</p>
                                </div>
                        </div>
                        
                        <!-- Form Buttons -->
                        <div class="buttons">
                                <!--<input type="button" class="button" value="preview" />-->
                                <input name="add_question" type="submit" class="btn btn-primary btn-lg btn-block" value="submit" />
                        </div>
                        <br>
                        <br>
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
