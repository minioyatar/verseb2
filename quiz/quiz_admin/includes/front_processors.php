<?php

require_once ("db_connections.php");
require_once ("functions.php");

    if(isset($_POST['submit_answer'])){
        $total_correct = 0;
        //get all submitted answer from POST
        foreach ($_POST as $key => $value) {
            if( $key != 'submit_answer'){
            //echo "key: {$key} ----  value: {$value} </br>";
                
                //get all answer  from database
                $all_quiz_set = get_all_quiz();
                while($question_ans = mysql_fetch_assoc($all_quiz_set)){
                    //compare submitted answer to correct answer
                    if($key == $question_ans["quiz_id"]){
                        if($value == $question_ans["quiz_ans"]){
                            ++$total_correct;
                        }
                    }
                    //foreach($question_ans as $key => $value){
                    //    echo "key: {$key} ----  value: {$value} </br>";
                    //}
                    
                }
            }
        
        }
        
        echo "<h3>Your score is: {$total_correct}</h3></br>";
        echo "<a href=\"../../index.php\">Try again?</a>";
                
    }
    
    
    
?>