<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/versebuster/core/init.php");
	$user = new User();
	$user->logout();
	Redirect::to('/versebuster/index.php');
?>