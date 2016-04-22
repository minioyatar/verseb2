<?php
require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/core/init.php" : $_SERVER['DOCUMENT_ROOT'] . "/versebuster/core/init.php");;

if(!$username = Input::get('user')){
	// Redirect::to('index.php');
	echo "error 404 dito";
}else{
	$user = new User($username);
	if(!$user->exists()){
		Redirect::to(404);
	}else{
		$data = $user->data();
	}

?>
	<h3><?php echo escape($data->username); ?></h3>
	<p>Full name: <?php echo escape($data->fname); ?></p>

<?php
	}

?>