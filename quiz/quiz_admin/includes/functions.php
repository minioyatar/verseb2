<?php

function get_all_quiz(){
    $query = "SELECT * FROM quizquestion_tbl";
    return returning_query_value($query);
}

function get_all_quiz_type($qType){
    $query = "SELECT * FROM quizquestion_tbl WHERE quizCateg = '{$qType}'";
    return returning_query_value($query);
}

function get_all_quiz_answer(){
    $query = "SELECT quiz_ans FROM quizquestion_tbl";
    return returning_query_value($query);
}
////////////////////////////////////////

// Add Function
function add_single_question($db_table, $val1_pass, $val2_pass){
    //LEGEND:
    //  {$db_table} name of database table
    //  {$val1_pass} what column it will be inserted
    //  {$val2_pass} value to be inserted
    $sql = "INSERT INTO {$db_table} ({$val1_pass})
            VALUES ('NULL', {$val2_pass})" ;
    return returning_query_value($sql);
}
// End Add Function
////////////////////////////////////////


//VIEW or READ function
function selected_item_to_view($table_to_edit, $primary_column_to_edit, $sel_id){
	$sql = "SELECT * FROM {$table_to_edit} WHERE {$primary_column_to_edit} = {$sel_id}";
	return returning_query_value($sql);
}
///////////////////////////////////////////

// UPDATE Function
function update_single_entry($db_table, $val1_pass, $val2_pass, $val3_pass){
    //LEGEND:
    //  {$db_table} name of database table
    //  {$val1_pass} data update
    //  {$val2_pass} id data entry
    
    //Syntax 
    //"UPDATE table_name SET column_name1=' value', column_name2=' value' WHERE column_name=' value' ";    
    $sql = "UPDATE {$db_table} SET {$val1_pass} WHERE {$val2_pass}={$val3_pass}" ;
    return returning_query_value($sql);
}
// End Add Function

// Delete Function
function delete_single_entry($db_table, $col_name, $col_id){
    //LEGEND:
    //  {$db_table} name of database table
	//  {$row_id} name of row
    //  {$val1_pass} value to be deleted
    $sql = "DELETE FROM {$db_table} 
	    WHERE {$col_name} = {$col_id}" ;
    return returning_query_value($sql);
        
}
// Delete Function









function get_all_dept(){
    $query =    "SELECT *
                FROM department
                ORDER BY dept_name ASC";
    return returning_query_value($query);
}

function get_all_dept_with_post(){
    $query =    "SELECT DISTINCT a.dept_id, d.dept_name
                FROM appbudgets a, department d
                WHERE a.dept_id =d.dept_id
                ORDER BY d.dept_name ASC";
    return returning_query_value($query);
}

function get_distinct_dept($yearOnly){
    $query =    "SELECT DISTINCT d.dept_name, a.dept_id
                FROM appbudgets a, department d
                WHERE a.year = {$yearOnly}
                AND a.dept_id = d.dept_id";
    return returning_query_value($query);
}

function get_all_title($yearOnly, $dept_id){
    $query =    "SELECT bud_title, year, bud_path
                FROM appbudgets
                WHERE year = {$yearOnly}
                AND dept_id= {$dept_id}";
    return returning_query_value($query);
}

function get_top_ten_entry($limit, $extention1, $extention2){
    
    $query =    "SELECT *
                FROM appbudgets a, department d
                WHERE d.dept_id = a.dept_id
		{$extention1} {$extention2}
                ORDER BY `bud_year` DESC {$limit}";
    return returning_query_value($query);
}
//end of viewing query
// Add Function
function add_single_entry($db_table, $val1_pass, $val2_pass){
    //LEGEND:
    //  {$db_table} name of database table
    //  {$val1_pass} what column it will be inserted
    //  {$val2_pass} value to be inserted
    $sql = "INSERT INTO {$db_table} ({$val1_pass})
            VALUES ('NULL', {$val2_pass})" ;
    return returning_query_value($sql);
}
// End Add Function







function select_option_evaluate($val1, $val2){
    $selValue = "";
    if($val1 == $val2){
	$selValue = "selected";
    }else{
	$selValue = "";
    }
    return $selValue;
}

function uploading_files(){
    ////////////////////
    
    
    $uploaddir = '../doc_uploads/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    
        //echo "<p>";
        
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
          //echo "File is valid, and was successfully uploaded.\n";
        } else {
           echo "Upload failed";
        }
        //echo "</p>";
        //echo '<pre>';
        //echo 'Here is some more debugging info:';
        //print_r($_FILES);
        //print "</pre>";
    return $_FILES;
    ////////////////    
}





function returning_query_value($query_var){
    $query_set = mysql_query($query_var);
    confirm_query($query_set); //call confirm_query function
    return $query_set;    
}

function confirm_query($result_set){
    if (!$result_set) {
        die("Error performing query: " . mysql_error());
    }
}

function db_close_connectivity(){
    //5.close connection
    if(isset($connection)){
        mysql_close($connection);    
    }
    
}


?>