<?php
    //initialize credentials
    
    
    // $MySql_username 	= "root"; 
    // $MySql_password 	= "1234567890-"; 
    // $MySql_hostname 	= "localhost"; 
    // $MySql_databasename = 'maxbonam_versedb';
    
        $MySql_username 	= 'maxbonam_verse'; 
    $MySql_password 	= 'G?#z$x4?X+Tf'; 
    $MySql_hostname 	= 'localhost'; 
    $MySql_databasename = 'maxbonam_versedb';    
    
    global $connection;
    
    //1. create database connection
    $connection = mysql_connect("$MySql_hostname", "$MySql_username", "$MySql_password");
    if (!$connection) {
        //echo "Database connection failed: " .mysql_error();
        die("Database connection failed: " .mysql_error());
    }
    
    //2. select a database to use
    $db_select = mysql_select_db("$MySql_databasename",$connection);
    if (!$db_select) {
        //echo "Database selection failed: " .mysql_error()
        die("Database selection failed" .mysql_error());
    }
?>
