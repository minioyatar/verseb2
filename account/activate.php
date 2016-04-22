<?php
// require_once 'core/init.php';
require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/core/init.php" : $_SERVER['DOCUMENT_ROOT'] . "/core/init.php");;
$user = new User();
if($user->isLoggedIn()){
   if($user->hasPermission('inactive')) {
        echo 'Please activate your account!';
   }    
	// Redirect::to('index.php');
}

$_db = DB::getInstance();
if(Input::exists('get')){//check if there is data
    $email = urldecode(trim(Input::get('email')));
    $email_code = trim(Input::get('email_code'));
    
    if(($email) && ($email_code)){//check if there is email and email code given
        //check if email exist with matching email code

        $account = $_db->query('SELECT * FROM members_tbl WHERE email = "' . $email . '" AND email_code = "' . $email_code . '"');
        
        if($account->count()){//if something found
            $accId = $account->first()->memID;
            //activate account 

            $_db->update('members_tbl', 'memID', $accId , array(
                'grp' => '1'
                ));
            Session::flash('home', 'Thank you, your account has been activated!');
            Redirect::to('index.php');
        }else{//if no email exist or unmatch code display error
            echo 'Your email and activation code do not match.' ;
        }
        
    }else{//unsupplied codes
        Redirect::to('includes/errors/404.php');
    }
        
}else{//unsupplied in POST data
    Redirect::to('includes/errors/404.php');
}
 
?>