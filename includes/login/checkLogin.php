<?php
$user = new User();

if($user->isLoggedIn()){
   if($user->hasPermission('inactive')) {
        echo 'Please activate your account!';
   }
}	
//plano is to obra a class or function na mag check it page
// kung member ag bukon para sa redirection
// forMemberPage
	// profile.php
	//update.php
	//accounts
		//index page

?>