<?php
    require_once "db_connections.php";
    require_once "functions.php";
    
    //Add new category
    if(isset($_POST['add_question'])){
        //check if blank
        if(isset($_POST['input_question']) && !empty($_POST['input_question']) &&
    	   isset($_POST['input_choice1']) && !empty($_POST['input_choice1']) &&
    	   isset($_POST['input_choice2']) && !empty($_POST['input_choice2']) &&
    	   isset($_POST['input_choice3']) && !empty($_POST['input_choice3']) &&
    	   isset($_POST['input_choice4']) && !empty($_POST['input_choice4']) &&
           isset($_POST['input_qcat']) && !empty($_POST['input_qcat']) &&
    	   isset($_POST['input_ans']) && !empty($_POST['input_ans'])
	   ){
            $table_name = 'quizquestion_tbl';
    	    $column_loc = "quiz_id,quiz_question,quiz_an1,quiz_an2,quiz_an3,quiz_an4,quizCateg,quiz_ans";

            $escQuest = mysql_escape_string($_POST['input_question']);
            $escC1 = mysql_escape_string($_POST['input_choice1']);
            $escC2 = mysql_escape_string($_POST['input_choice2']);
            $escC3 = mysql_escape_string($_POST['input_choice3']);
            $escC4 = mysql_escape_string($_POST['input_choice4']);
            $escQcat = mysql_escape_string($_POST['input_qcat']);
            $escAns = mysql_escape_string($_POST['input_ans']);

            $value_to_be_added = "'{$escQuest}', '{$escC1}','{$escC2}','{$escC3}','{$escC4}','{$escQcat}','{$escAns}'";
            add_single_question($table_name, $column_loc, $value_to_be_added);
            
            db_close_connectivity();
            header("Location: ../index.php?new=true");
        }else{
	    header("Location: ../index.php?new=false");
        echo "Error adding new question.";
	}
        
    }
    //End of new category
    
    //DELETE
    //delete category and approve budget post
    if(isset($_GET['deletequizentryid'])){
            $table_name = 'quizquestion_tbl';
            $col_name = 'quiz_id';
            $value_to_be_delete = "'{$_GET['deletequizentryid']}'";
            delete_single_entry($table_name, $col_name, $value_to_be_delete);
            db_close_connectivity();
            header("Location: ../index.php?del=true");
    }  
    
    //UPDATE////////////////////////////////////////////
    if(isset($_POST['update_btn']) ){
	$question_id = mysql_escape_string($_POST['question_id']);
	$input_question = mysql_escape_string($_POST['input_question']);
	$input_choice1 = mysql_escape_string($_POST['input_choice1']);
	$input_choice2 = mysql_escape_string($_POST['input_choice2']);
	$input_choice3 = mysql_escape_string($_POST['input_choice3']);
	$input_choice4 = mysql_escape_string($_POST['input_choice4']);
    $input_qcat = mysql_escape_string($_POST['input_qcat']);
	$input_ans = mysql_escape_string($_POST['input_ans']);
	
	$table_name = 'quizquestion_tbl';
	$value_to_be_update = "quiz_question ='{$input_question}', quiz_an1='{$input_choice1}', quiz_an2 ='{$input_choice2}', quiz_an3='{$input_choice3}', quiz_an4 ='{$input_choice4}', quizCateg ='{$input_qcat}', quiz_ans='{$input_ans}'";
	update_single_entry($table_name, $value_to_be_update, 'quiz_id', $question_id );
	db_close_connectivity();
	
	header("Location: ../index.php?update=true");
    }
    //end of ADD AND UPDATE////////////////////////////////////////////    
    
?>