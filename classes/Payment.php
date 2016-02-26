<?php 
class Payment{
	public static function postPayment($planID,$plantCost,$planDesc, $lastInsertId){
		$_SSL_SAND_URL = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
		$_SSL_URL = 'https://www.paypal.com/cgi-bin/webscr';

	    //Get exact price of selected membership plan from database
		// $memPlanType = DB::getInstance()->get('membershipplans', array('memPlanID', '=', $planType));
		// $plantCost = $memPlanType->first()->cost;
		// $planID = $memPlanType->first()->planID;

		//set POST variables
		$url = (Config::get('paypal/paypal_mode')) ? $_SSL_SAND_URL : $_SSL_URL;
		$fields = array(
            'item_name' => urlencode($planDesc),
            'amount' => urlencode($plantCost),
            'business' => urlencode(Config::get('paypal/merchant_email')),
            'cancel_return' => urlencode(Config::get('paypal/cancel_url')),
            'return' => urlencode(Config::get('paypal/thanks_page')),
            'rm' => urlencode(2),
            'item_number' => urlencode($planID),
            'no_shipping' => urlencode(1),
            'custom' => urlencode($lastInsertId),
            'currency_code' => urlencode(Config::get('paypal/currency_code')),
            'page_style' => urlencode('paypal'),
            'charset' => urlencode('utf-8'),
            'cmd' => urlencode('_xclick')
        );

		//url-ify the data for the POST
		$fields_string = '';
		foreach($fields as $key=>$value) { 
		    $fields_string .= $key.'='.$value.'&'; 
		}
		// $fields_string = implode('&', $fields); 
		// rtrim($fields_string, '&');

		return $url . "?" . $fields_string;	

	}
	public static function confirmPayment(){

	}
}