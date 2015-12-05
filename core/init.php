<?php

session_start();

$GLOBALS['config'] = array(
	'mysql' => array(
		'host' => '127.0.0.1',
		'username' => 'root',
		'password' => '1234567890-',
		'db' => 'maxbonam_versedb'
	),	
	 // 'mysql' => array(
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
	),
	'paypal' =>array(
		'merchant_email' 	=> 'miniotestmerchant2@gmail.com',
		'paypal_mode' 		=> true, //sandbox true : live false
        'currency_code'     => 'USD',
        'thanks_page'       => "http://".$_SERVER['HTTP_HOST']. '/versebuster2/payment/success.php',
        'cancel_url'        => "http://".$_SERVER['HTTP_HOST']. '/versebuster2/payment/cancel.php' // $_SERVER['REQUEST_URI']
        // 'notify_url'     => "http://".$_SERVER['HTTP_HOST']. '/paypal/ipn.php'		
	),
	'svrInfo' => array(
		'path' => "http://" . $_SERVER['HTTP_HOST'] . "/versebuster2/"
		)

);

spl_autoload_register(function($class){
	require_once $_SERVER['DOCUMENT_ROOT'] . '/versebuster2/classes/' . $class . '.php';
});


require_once($_SERVER['DOCUMENT_ROOT'] . "/versebuster2/functions/sanitize.php");
// require_once($_SERVER['DOCUMENT_ROOT'] . "/versebuster2/functions/paypalData.php");

if(Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('session/session_name'))){
	$hash = Cookie::get(Config::get('remember/cookie_name'));
	$hashCheck = DB::getInstance()->get('users_session', array('hash', '=', $hash));

	if($hashCheck->count()){
		$user = new User($hashCheck->first()->user_id);
		$user->login();
	}
}









?>
