<?php
require_once "includes/db_connections.php";
require_once "includes/functions.php";

?>
<!DOCTYPE html>

<html>
<head>
    <title>Versebuster - A Shakespeare Performance Resource with Audio</title>
    <!-- Bootstrap Core CSS -->
    <link href="/versebuster/css/bootstrap.min.css" rel="stylesheet">
    <link href="/versebuster/css/vbcustom.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> -->
    <style>
        .table tr th{
            text-align: center;
            vertical-align: middle !important;
        }      
    </style>
</head>

<body style="background:#F4D03F">
    <div class="container-fluid">
        <div class="row">
            <div style="background:#000;color:#F4D03F; padding:10px;">
                <h1>Welcome to <span style="font-family: 'LucidaCustomFont' ,arial,sans-serif;">Versebuster<sup>&#169;</sup></span> quiz editor</h1>
            </div>
        </div><!--end of header-->


	<div id="box-containers">                
                <!-- Box -->
                <div class="box box-720">
                        <!-- Box Head -->
                        <div class="box-head">
                                <h2>Edit Question</h2>
                        </div>
                        <!-- End Box Head -->

                        <form action="includes/process_handler.php" method="post" enctype="multipart/form-data">                                
                            <div class="form">
								   <input value="<?php echo $_GET['editquizentryid']?>"  name="question_id" type="hidden"/>
							</div>
	                        <div class="form">
<?php
    if(isset($_GET['editquizentryid'])){
        $data_post = "";
    	$primary_column_to_edit = "quiz_id";
        $view_selected_set = selected_item_to_view("quizquestion_tbl", $primary_column_to_edit, $_GET['editquizentryid']);
	while($sel_view = mysql_fetch_array($view_selected_set)){
            // $data_post =    "quiz_id={$sel_view["quiz_id"]}&quiz_question={$sel_view["quiz_question"]}&quiz_an1={$sel_view["quiz_an1"]}&quiz_an2={$sel_view["quiz_an2"]}&quiz_an3={$sel_view["quiz_an3"]}&quiz_an4={$sel_view["quiz_an4"]}&quiz_ans={$sel_view["quiz_ans"]}";  
?>
                            <div class="form-group">
                                    <textarea placeholder="Question" name="input_question" class="form-control" rows="3"><?php echo $sel_view["quiz_question"]?></textarea>
                            </div>
                            <div class="form-group">
                                    <textarea placeholder="Choice 1" name="input_choice1" class="form-control" rows="3"><?php echo $sel_view["quiz_an1"]?></textarea>
                            </div>
                            <div class="form-group">
                                    <textarea placeholder="Choice 2" name="input_choice2" class="form-control" rows="3"><?php echo $sel_view["quiz_an2"]?></textarea>
                            </div>
                            <div class="form-group">
                                    <textarea placeholder="Choice 3" name="input_choice3" class="form-control" rows="3"><?php echo $sel_view["quiz_an3"]?></textarea>
                            </div>
                            <div class="form-group">
                                    <textarea placeholder="Choice 4" name="input_choice4" class="form-control" rows="3"><?php echo $sel_view["quiz_an4"]?></textarea>
                            </div>
                            <div class="form-group">
                                <h2>Select category</h2>
                                <p><input class="radioBtnClass" type="radio" name="input_qcat" value="f" <?php if($sel_view["quizCateg"] == "f"){ echo "checked"; } ?> > FUN QUIZ</p>
                                <p><input class="radioBtnClass" type="radio" name="input_qcat" value="m" <?php if($sel_view["quizCateg"] == "m"){ echo "checked"; } ?>> MAIN QUIZ</p>
                                <p><input class="radioBtnClass" type="radio" name="input_qcat" value="p" <?php if($sel_view["quizCateg"] == "p"){ echo "checked"; } ?>> QUIZ FOR THE PROs</p>
     
                            </div>                            
                            <div class="form-group">
                                    <textarea placeholder="Answer" name="input_ans" class="form-control" rows="3"><?php echo $sel_view["quiz_ans"]?></textarea>
                            </div>
<?php
        }
        db_close_connectivity();
        // header("Location: ../update.php?{$data_post}");
    }
    //END OF EDIT AND VIEW
?>                        	
                            <div class="buttons">
								<input type="button" class="btn btn-danger" value="Cancel" onclick="window.location='index.php'"/>
								<input name="update_btn" type="submit" class="btn btn-primary" value="Update" />                            	
                                    <!-- <input type="button" class="button" value="Cancel" onclick="window.location='index.php'"/>
                                    <input name="update_btn" type="submit" class="button" value="Update" /> -->
                            </div>
                                <!-- End Form Buttons -->
                        </div>
                        </form>
						<br>
                        <br>                        
						<!-- End Form -->				
                </div>
                <!-- End Box -->  
            
        </div><!--END of CONTENTS-->
        <div id="footer"></div><!--end of FOOTER-->
    </div>


</body>
</html>
