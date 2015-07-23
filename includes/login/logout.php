<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/versebuster2/core/init.php");
	$user = new User();
	$user->logout();
	Redirect::to('/versebuster2/index.php');
?>