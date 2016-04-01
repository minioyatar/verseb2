<?php

session_start();
define('SITE_URL', "http://" . $_SERVER['HTTP_HOST'] . "/versebuster2/");//PRODUCTION
// define('SITE_URL', 'http://maxbonamy.org/versebuster2'); // LIVE

$GLOBALS['config'] = array(
	 'mysql' => array(//PRODUCTION
	 	'host' => '127.0.0.1',
	 	'username' => 'root',
	 	'password' => '1234567890-',
	 	'db' => 'maxbonam_versedb'
	 ),	
	// 'mysql' => array(//LIVE
	// 	'host' => 'localhost',
	// 	'username' => 'maxbonam_verse',
	// 	'password' => 'G?#z$x4?X+Tf',
	// 	'db' => 'maxbonam_versedb'
	// ),
	'remember' => array(
		'cookie_name' => 'hash',
		'cookie_expiry' => '604800'
	),
	'session' => array(
		'session_name' => 'user',
		'token_name' => 'token'
	)

);

spl_autoload_register(function($class){
	require_once $_SERVER['DOCUMENT_ROOT'] . '/versebuster2/classes/' . $class . '.php';
});


require_once($_SERVER['DOCUMENT_ROOT'] . "/versebuster2/functions/sanitize.php");

if(Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('session/session_name'))){
	$hash = Cookie::get(Config::get('remember/cookie_name'));
	$hashCheck = DB::getInstance()->get('users_session', array('hash', '=', $hash));

	if($hashCheck->count()){
		$user = new User($hashCheck->first()->user_id);
		$user->login();
	}
}









?>
