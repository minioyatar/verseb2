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
	   isset($_POST['input_ans']) && !empty($_POST['input_ans'])
	   ){
            $table_name = 'quizquestion_tbl';
	    $column_loc = "quiz_id,quiz_question,quiz_an1,quiz_an2,quiz_an3,quiz_an4,quiz_ans";
            $value_to_be_added = "'{$_POST['input_question']}', '{$_POST['input_choice1']}','{$_POST['input_choice2']}','{$_POST['input_choice3']}','{$_POST['input_choice4']}','{$_POST['input_ans']}'";
            add_single_question($table_name, $column_loc, $value_to_be_added);
            
            db_close_connectivity();
            header("Location: ../index.php?new=true");
        }else{
	    header("Location: ../index.php?new=false");
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
	    
	    
    //Select and VIEW
    //fetch post data
    if(isset($_GET['editquizentryid'])){
        $data_post = "";
	$primary_column_to_edit = "quiz_id";
        $view_selected_set = selected_item_to_view("quizquestion_tbl", $primary_column_to_edit, $_GET['editquizentryid']);
        
	while($sel_view = mysql_fetch_array($view_selected_set)){
            $data_post =    "quiz_id={$sel_view["quiz_id"]}&quiz_question={$sel_view["quiz_question"]}&quiz_an1={$sel_view["quiz_an1"]}&quiz_an2={$sel_view["quiz_an2"]}&quiz_an3={$sel_view["quiz_an3"]}&quiz_an4={$sel_view["quiz_an4"]}&quiz_ans={$sel_view["quiz_ans"]}";                            
        }
        db_close_connectivity();
        header("Location: ../update.php?{$data_post}");
    }
    //END OF EDIT AND VIEW
    
    
    
    
    //UPDATE////////////////////////////////////////////
    if(isset($_POST['update_btn']) ){
	$question_id = $_POST['question_id'];
	$input_question = $_POST['input_question'];
	$input_choice1 = $_POST['input_choice1'];
	$input_choice2 = $_POST['input_choice2'];
	$input_choice3 = $_POST['input_choice3'];
	$input_choice4 = $_POST['input_choice4'];
	$input_ans = $_POST['input_ans'];
	
	$table_name = 'quizquestion_tbl';
	$value_to_be_update = " quiz_question ='{$input_question}', quiz_an1='{$input_choice1}', quiz_an2 ='{$input_choice2}', quiz_an3='{$input_choice3}', quiz_an4 ='{$input_choice4}', quiz_ans='{$input_ans}'";
	update_single_entry($table_name, $value_to_be_update, 'quiz_id', $question_id );
	db_close_connectivity();
	
	header("Location: ../index.php?update=true");
    }
    //end of ADD AND UPDATE////////////////////////////////////////////    
    
?>