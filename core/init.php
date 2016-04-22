<?php
///////////////
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(-1);    
//////////////

	session_start();
    // '127.0.0.1' == $_SERVER["REMOTE_ADDR"] ? 'true' : 'false'; //if local this is true if live false
    if('127.0.0.1' == $_SERVER["REMOTE_ADDR"]){
      define('SITE_URL', $_SERVER['DOCUMENT_ROOT'] . "/versebuster/");//PRODUCTION
    }else{
      define('SITE_URL', $_SERVER['DOCUMENT_ROOT'] . "/");// LIVE
    }


	$paypal_live_mode 	= false; //live true : sandbox false
    $sandbox_url 		= 'https://www.sandbox.paypal.com/cgi-bin/webscr';
    $live_url			= 'https://www.paypal.com/cgi-bin/webscr';

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
		),
		'paypal' =>array(
			'merchant_email' 	=> 'miniotestmerchant2@gmail.com',
	        'currency_code'     => 'USD',
	        'thanks_page'       => SITE_URL . '/payment/success.php?success=true',
	        'cancel_url'        => SITE_URL . '/payment/success.php?success=false', // $_SERVER['REQUEST_URI']
	        'url'				=> $paypal_live_mode ? $live_url  : $sandbox_url	
		)
		// ,
		// 'svrInfo' => array(
		// 	'site_url' => "http://" . $_SERVER['HTTP_HOST'] . "/versebuster/"
		// 	)

	);

	spl_autoload_register(function($class){
		require_once SITE_URL . '/classes/' . $class . '.php';
	});


	require_once(SITE_URL . "/functions/sanitize.php");

if(Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('session/session_name'))){
	$hash = Cookie::get(Config::get('remember/cookie_name'));
	$hashCheck = DB::getInstance()->get('users_session', array('hash', '=', $hash));

	if($hashCheck->count()){
		$user = new User($hashCheck->first()->user_id);
		$user->login();
	}
}









?>
